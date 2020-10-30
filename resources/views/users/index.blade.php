@extends('layout.layoust')
@section('title')
LISTA TIENDAS
@endsection

@section('nav')

@endsection
@section('menu')

@endsection
@section('content')
  <div class="panel-body">
	@if (session('mesage'))
	<div class="alert alert-success">
				<strong>{{ session('mesage') }}</strong>
			</div>
		@endif
			@if (session('mesage-update'))
	<div class="alert alert-warning">
				<strong>{{ session('mesage-update') }}</strong>
			</div>
		@endif
			@if (session('mesage-delete'))
	<div class="alert alert-danger">
				<strong>{{ session('mesage-delete') }}</strong>
			</div>
		@endif
    <div class="panel panel-info panel-bordered" data-plugin="appear" data-animate="fade">
      <header class="panel-heading">
        <div class="panel-actions">
          <a href="/tiendas/create">
            <button class="btn-raised btn btn-primary btn-floating btn-sm" data-toggle="tooltip" data-original-title="Agregar">
            <i class="icon md-plus" aria-hidden="true"></i>
            </button>
          </a>
        </div>
        <h3 class="panel-title">Lista de Uusiarios</h3>
      </header>
  <!-- Panel Filtering -->
  <div class="row">
	<div class="page-content">
		<div class="col-md-12 container-fluid">
		<table class="table table-bordered table-hover toggle-circle" id="exampleFootableFiltering">
			<thead>
						<tr>
              <th data-toggle="true">Clave</th>
            <th data-hide="phone, tablet">Nombre</th>
            <th data-hide="phone, tablet">Nombre De Usuario </th>
            <th data-hide="phone, tablet">Correo</th>
            <!--<th data-hide="phone, tablet">Contraseña</th>-->
            <th data-hide="phone, tablet">Tipo de Usuario</th>
            <th data-hide="phone, tablet">Tipo de Suscripción</th>
            <th data-hide="phone, tablet">Activo</th>
            <!--<th data-hide="phone, tablet">Token</th>-->
            <th data-hide="phone, tablet">Fecha Crear</th>
            <th data-hide="phone, tablet">Actualizar</th>
            <th data-hide="phone, tablet">Opciones</th>
						</tr>
					</thead>
					<div class="form-inline padding-bottom-15">
						<div class="row">
              <div class="col-md-16">
              <div class="col-md-2">
                    <a href="/usuariosexcel"><img height="50" width="50" src="{{{ url('dashboard-assets/assets/images/icone.ico')}}}" alt=""></a>
                    </div>
							<div class="col-md-4">
								<div class="form-group">
									<select id="filteringStatus" class="form-control">
                    <option value="">Todos</option>
                        <option value="activo">Activo</option>
                        <option value="inactivo">Desactivado</option>
									</select>
								</div>
							</div>
              <div class="col-md-3 col-md-offset-3 text-right">
               <div class="form-group">
                 <input id="filteringSearch" type="text" placeholder="Busqueda" class="form-control"
            autocomplete="off">
        </div>
        </div>
                </div>



						</div>
					</div>
					<tbody>
            @foreach ($users as $i=> $user)
              <tr  class= "{{ ($user->deleted_at == null) ? 'active' : 'disable' }}" id="row {{$user->id}}">
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <!--<td class=''>{{ $user->password }}</td>-->

                  @if($user->type_user ==0)
                  <td><span class="label label-info">Comprador</span></td>
                @else
                  <td><span class="label label-primary">Emprendedor</span></td>
                @endif

                 @if($user->suscription_type ==0)
                  <td><span class="label label-info">Gratis</span>
                  </td>
                @else
                  <td><span class="label label-primary">Premium</span></td>
                @endif

                <td>
                 @if($user->deleted_at != null)
                  <span class="label label-danger">Desactivado</span>
                @else
                  <span class="label label-primary">Activado</span>
                @endif
                </td>

                <!--<td>{{ $user->remember_token }}</td>-->
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
                <td>
                        <a href="/usuarios/{{$user->id}}"><button type="button" class="btn btn-xs btn-icon btn-default">ver</button></a>
                        <!--<a href="/usuarios/{{$user->id}}/edit"<button type="button" class="btn btn-xs btn-icon btn-info edit">Activo</button></a>-->
                        @if($user->deleted_at != null)
                        <button class="btn btn-xs btn-icon btn-success delete" alt="{{$user->id}}" role="button">Activar</button>
                          @else
                          <button class="btn btn-xs btn-icon btn-danger delete" alt="{{$user->id}}" role="button">Desactivar</button>
                        @endif
                      </form>
                      </td>
              </tr>
            @endforeach
					</tbody>
					<tfoot>
						<tr>
							<td colspan="10">
								<div class="text-right">
									<ul class="pagination"></ul>
								</div>
							</td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
 </div>
@endsection

@section('filter')
<script>
$(document).ready(function(){
  $('#filteringStatus').change(function(){
    //alert($(this).val())
    if($(this).val()==''){
        $('.active').each(function(){
            $(this).removeClass('hidden')
        });
        $('.disable').each(function(){
            $(this).removeClass('hidden')
        });
    }else if($(this).val()=='activo'){
        $('.active').each(function(){
            $(this).removeClass('hidden')
        });
        $('.disable').each(function(){
            $(this).addClass('hidden')
        });
    }else{
        $('.disable').each(function(){
            $(this).removeClass('hidden')
        });
        $('.active').each(function(){
            $(this).addClass('hidden')
        });
    }
  });
});
</script>
@endsection
@section('delshop')
<script type="text/javascript">
$(".delete").click(function() {
  var button = $(this);
   var id = $(this).attr("alt");
   alertify.confirm("¿Seguro que desea activar este registro?",
     function (e) {
     if (e) {
       if(!button.hasClass("btn-success")){
         $.ajax({
           method: 'DELETE',
           url: '/usuarios/' + id,
           success: function(){
             window.location = "/usuarios";
             $("#row" + id).remove();
             alertify.success("Se ha <strong>desactivado</strong> el registro" + id);
           },
           error: function(){
             alertify.error("<strong>Ha ocurrido un error en la desactivacion</strong>");
           }
         });
       }else{
         $.ajax({
           method: 'get',
           url: '/usuarios/activo/' + id,

           success: function(){
             window.location = "/usuarios";
             $("#row" + id).remove();
             alertify.success("Se ha <strong>activado</strong> el registro" + id);
           },
           error: function(){
             alertify.error("<strong>Ha ocurrido un error en la activacion</strong>");
           }
         });
       }
     }
  });
});
</script>
@endsection
