@extends('layout.layoust')
@section('title')
ALTA SUCURSALES
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
          <a href="/sucursales/create">
            <button class="btn-raised btn btn-primary btn-floating btn-sm" data-toggle="tooltip" data-original-title="Agregar">
            <i class="icon md-plus" aria-hidden="true"></i>
            </button>
          </a>
        </div>
        <h3 class="panel-title">Lista de Sucursales</h3>
      </header>
  <!-- Panel Filtering -->
  <div class="row">
  <div class="page-content">
      <div class="col-md-12 container-fluid">
      <table class="table table-bordered table-hover toggle-circle" id="exampleFootableFiltering">
        <thead>				<thead>
					<tr>
						<th data-toggle="true">Nombre</th>
						<th data-hide="phone, tablet">Dirección</th>
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
				 @foreach ($branches as $branch)
					<tr id="row{{ $branch->id }}">
						<td>{{ $branch->name }}</td>
						<td>{{ $branch->address }}</td>
						<td>{{ $branch->phone_number }}</td>
            <td>
              <a href="sucursales/{{$branch->id}}/"<button type="button" class="btn btn-xs btn-icon btn-default"><i class="icon md-search" aria-hidden="true"></i></button></a>
              <a href="/sucursales/{{$branch->id}}/edit"<button type="button" class="btn btn-xs btn-icon btn-info edit"><i class="icon md-edit" aria-hidden="true"></i></button></a>
					
                <button class="btn btn-xs btn-icon btn-danger delete" alt="<?= $branch->id ?>" role="button" href="#" id="confirmacion">
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
@endsection
@section('delbranch')
<script type="text/javascript">
$(".delete").click(function() {
   var id = $(this).attr("alt");
   alertify.confirm("¿Seguro que desea eliminar este registro?",
     function (e) {
     if (e) {
       $.ajax({
         method: 'DELETE',
         url: '/sucursales/' + id,
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


