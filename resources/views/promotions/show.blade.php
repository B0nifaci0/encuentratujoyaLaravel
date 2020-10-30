@extends('layout.layoust')
@section('title')
SUCURSAl
@endsection

@section('nav')
@endsection
@section('menu')

@endsection
@section('content')

<div class="page-content">
  <div class="panel panel-info panel-bordered" data-plugin="appear" data-animate="fade">
    <header class="panel-heading">
      <div class="panel-actions">
        <a href="/promociones/{{$promotion->id}}/edit">
          <button class="btn-raised btn btn-primary btn-floating btn-sm" data-toggle="tooltip" data-original-title="Editar">
            <i class="icon md-edit" aria-hidden="true"></i>
          </button>
        </a>
      </div>
      <h3 class="panel-title">Promoción</h3>
    </header>
      <div class="table-responsive container-fluid">
				<div class="panel-body">
			    <table class="table table-hover">
						<tbody>
								<tr>
									<td> <strong>Nombre</strong></td>
									<td>{{$promotion->name}}</td>
								</tr>
								<tr>
									<td> <strong>Descripción</strong></td>
									<td>{{ $promotion->description }}</td>
								</tr>
                	<tr>
									<td> <strong>Imagen</strong></td>
                  	@php 
									$route = asset("storage/upload/promotions/$promotion->image");
								@endphp
                  	<td><img width="120px" height="80px" src="{{ $route }}">
                    </td>
								</tr>
								<tr>
									<td> <strong>Especificaciones</strong></td>
									<td>{{ $promotion->terms }}</td>
								</tr>
                	<tr>
									<td> <strong>Fecha de Inicio</strong></td>
									<td>{{ $promotion->start_date }}</td>
                  	<tr>
									<td> <strong>Fecha de termino</strong></td>
									<td>{{ $promotion->expirition_date }}</td>
								</tr>
                	<tr>
									
								</tr>
								</tr>
						</tbody>
					</table>
				</div>
      </div>
  </div>
</div>
@endsection

