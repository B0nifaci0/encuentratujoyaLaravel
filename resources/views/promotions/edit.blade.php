@extends('layout.layoust')
@section('title')
MODIFICACIÓN  PROMOCIONES
@endsection

@section('nav')

@endsection
@section('menu')

@endsection
@section('content')
<div class="page-content container-fluid">
   <form autocomplete="off" method="POST" action="{{route('promociones.update',['id' => $promotion->id])}}" enctype="multipart/form-data">
  {{ csrf_field() }}
  {{ method_field('PUT') }}
  <div class="panel">
      <div class="panel-body container-fluid">
       @if($errors->count() > 0)
        <div class="alert alert-danger" role="alert">
          <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
    @endif
        <center><h2>Registrar Promociones para su tienda</h2></center>

        <h2 class="panel-title">Informacion de la Promocion</h2>

        <div class='col-md-12'>
             <div class="col-md-6 form-group">
               <label class="floating-label">Nombre: </label>
               <input type="text" class="form-control" name="name" value="{{$promotion->name}}" required="required" placeholder="El nombre de tu negocio" />
             </div>

            <div class="col-md-6 form-group">
              <label class="floating-label">Condiciones: </label>
              <input type="text" class="form-control" name="terms" value="{{$promotion->terms}}" required="required" placeholder="" />
            </div>
        </div>

        <div class='col-md-12'>


        <div class="col-md-6 margin-bottom">
          <label class="floating-label">Fecha de aspiración: </label>
          <input id="datepicker" type="text" name="start_date" value="{{$promotion->start_date}}" class="form-control" data-plugin="datepicker" placeholder="Ej. 2016-06-29">
          </div>

        <div class="col-md-6 margin-bottom">
            <label class="floating-label">Fecha de expiración: </label>
            <input id="datepicker" type="text" name="expirition_date" value="{{$promotion->expirition_date}}" class="form-control" data-plugin="datepicker" placeholder="Ej. 2016-06-29">
            </div>
    </div>
 
      <div class='col-md-12'>
        <div class="form-group col-md-6 ">
          <label class="floating-label">Descripcion:</label>
          <textarea class="form-control"  rows="2" name="description">{{$promotion->description}}</textarea>
        </div>

            <div class=" col-md-6 example-wrap">
              <h4 class="example-title">Ingresa Imagen de Promocion.</h4>
              <div class="example">
                <input type="file" id="input-file-now" name="image" value="" data-plugin="dropify" data-default-file="" required>
              </div>
          </div>


          <div class="col-md-12 form-group">
              <button id="ok" type="submit" class="btn btn-info">Guardar</button>
          </div>
      </div>
  </div>
  </form>
  </div>
@endsection