@extends('layout.layoust')

@section('title')
ALTA sUCURSAL
@endsection

@section('nav')
@endsection

@section('menu')
@endsection

@section('content')
<style>
  #map {
    height: 300px;
  }
  html, body {
    height: 100%;
    margin: 0;
    padding: 0;
  }
</style>
<div class="page-content container-fluid">
  <form  id="formu" class="validate" autocomplete="off" method="POST"
      action="/sucursales" enctype="multipart/form-data">
  <div class="panel">

    <div class="panel-heading">
      <br><br>
      <center><h3 class="panel-title">Nueva Sucursal</h3></center>

      <div class="panel-body container-fluid">
        @if (session('mesage2'))
        <div class="alert alert-success">
              <strong>{{ session('mesage2') }}</strong>
            </div>
          @endif
        @if($errors->count() > 0)
          <div class="alert alert-danger" role="alert">
            <ul>
              @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <div class='col-md-12'>
             <div class="col-md-6 form-group">
               <label class="floating-label">Nombre Sucursal: </label>
               <input type="text" class="form-control" name="name" value="{{old('name')}}" required="required" placeholder="Joyeria" />
             </div>
            <div class="col-md-6 form-group">
              <label class="floating-label">Dirección: </label>
              <input type="text" class="form-control" name="address" value="{{old('addres')}}" required="required" placeholder="Lerdo de tejada" />
            </div>
        </div>
       <div class='col-md-12'>
         <div class="col-md-6 form-group">
           <label class="floating-label">Telefono: </label>
           <input type="text" class="form-control" name="phone_number" value="{{old('phone_number')}}" required="required" placeholder="722533873883" />
        </div>
      </div>


        <div class='col-md-12'>
          <div class="col-md-6 form-group">
            <label class="floating-label">Buscar Dirección:</label>
            <input type="text" class="form-control" required="required" id="address" />
         </div>
         <br>
        <div  class="col-md-6 form-group">
          <button id="buscardireccion" type="button" class="btn btn-primary"> Buscar direccion </button>
          <input type="hidden" class="lat_val" name="latitude">
          <input type="hidden" class="lng_val" name="longitude">
        </div>
        </div>

        <div class='col-md-12'>
            <div class="col-md-12">
                <div class="responsive" id="map"></div>
            </div>
        </div>
        <br>
        <div class='col-md-12'>
          <div class="col-md-6 form-group">
            <label class="floating-label"></label>
            <input type="text" class="form-control" required="required" id="state" name="state" readonly/>
         </div>
          <br><br>
          <div class="col-md-12 form-group">
              <button id="ok" type="submit" class="btn btn-info">Guardar</button>
          </div>
      </div>
    </div>
  </div>
  </form>

  </div>
@endsection
@section('js')

@endsection
@section('map')
 <script>
  $('#buscardireccion').click(function(event){
      event.preventDefault();
      codeAddress();
    });
  </script>
   <script src="{{{url('dashboard-assets/assets/js/maps.js')}}}"></script>

   <script async defer  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6eAu2eRTNpy8-5jmeTqgDFxALyGlZre0&callback=initMap"></script>


</section>
@endsection
