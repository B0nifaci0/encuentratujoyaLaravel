@extends('layout.layoust')
@section('title')
LISTA TIENDAS
@endsection

@section('nav')

@endsection

@section('content')
<style>
      .mapa {
       height: 400px;
       width: 100%;
      }
   </style>
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
        <h3 class="panel-title">Lista de Tiendas</h3>
      </header>
  <!-- Panel Filtering -->
  <div class="row">
	<div class="page-content">
		<div class="col-md-12 container-fluid">
		<table class="table table-bordered table-hover toggle-circle" id="exampleFootableFiltering">
			<thead>
						<tr>
							<th data-toggle="true">Nombre</th>
							<th data-hide="phone, tablet">Imagen</th>
							<th data-hide="phone, tablet">Description</th>
							<th data-hide="phone, tablet">pagina Web</th>
							<th data-hide="phone, tablet">Correo</th>
							<th data-hide="phone, tablet">Telefono</th>
							<th data-hide="phone, tablet">Opciones</th>
						</tr>
					</thead>
					<div class="form-inline padding-bottom-15">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<select id="filteringStatus" class="form-control" style="visibility:hidden">
										<option value="">Todos</option>
									</select>
								</div>
							</div>
							<div class="col-sm-6 text-right">
								<div class="form-group">
				                 <input id="filteringSearch" type="text" placeholder="Busqueda" class="form-control"
										autocomplete="off">
								</div>
							</div>
						</div> 
					</div>
					<tbody>
					@foreach ($shops as $shop)
						<tr id = "row{{$shop->id}}">
							<td>{{$shop->name }}</td>
							<td>
								@php
                $image = route('images',"app/public/upload/shops/$shop->image")
								@endphp
								<img width="120px" height="80px" src="{{ $image }}">
							</td>
							<td>{{$shop->description }}</td>
							<td>{{$shop->web_site }}</td>
							<td>{{$shop->email }}</td>
							<td>{{$shop->phone_number }}</td>
							<td>
					<a href="tiendas/{{$shop->id}}"<button type="button" class="btn btn-xs btn-icon btn-default"><i class="icon md-search" aria-hidden="true"></i></button></a>
				<a href="/tiendas/{{$shop->id}}/edit"<button type="button" class="btn btn-xs btn-icon btn-info edit"><i class="icon md-edit" aria-hidden="true"></i></button></a>

				<button class="btn btn-xs btn-icon btn-danger delete" alt="{{$shop->id}}" role="button" href="#" id="confirmacion">
					<i class="icon md-delete" aria-hidden="true"></i>
				</button>
				</form>

				</td>
						</tr>
					@endforeach
					</tbody>
					<tfoot>
						<tr>
							<td colspan="7">
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


@section('delshop')
<script type="text/javascript">
$(".delete").click(function() {
   var id = $(this).attr("alt");
   alertify.confirm("¿Seguro que desea eliminar este registro?",
     function (e) {
     if (e) {
       $.ajax({
         method: 'DELETE',
         url: '/tiendas/' + id,
         success: function(){
           $("#row" + id).remove();
           alertify.success("Se ha <strong>eliminado</strong> el registro" + id);
         },
         error: function(){
           alertify.error("<strong>Ha ocurrido un error en la eliminación</strong>");
         }
       });
     }
  });
});
</script>
@endsection
