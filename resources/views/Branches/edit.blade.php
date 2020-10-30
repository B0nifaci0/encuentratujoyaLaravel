@extends('layout.layoust')

@section('title')
MODIFICACIÓN SUCURSAL
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
      action="/sucursales/{{$branch->id}}" enctype="multipart/form-data">
      {{ csrf_field() }}
      {{ method_field('PUT')}}
  <div class="panel">
    <div class="panel-heading">
      <center><h3 class="panel-title">Nueva Sucursal</h3></center>
             @if($errors->count() > 0)
        <div class="alert alert-danger" role="alert">
          <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
    @endif
      <div class="panel-body container-fluid">
        <div class='col-md-12'>
             <div class="col-md-6 form-group">
               <label class="floating-label">Nombre Sucursal: </label>
               <input type="text" class="form-control" name="name" value="{{$branch->name}}" required="required" placeholder="" />
             </div>
            <div class="col-md-6 form-group">
              <label class="floating-label">Dirección: </label>
              <input type="text" class="form-control" name="address" value="{{$branch->address}}" required="required" placeholder="" />
            </div>
        </div>
       <div class='col-md-12'>
         <div class="col-md-6 form-group">
           <label class="floating-label">Telefono: </label>
           <input type="text" class="form-control" name="phone_number" value="{{$branch->phone_number}}" required="required" placeholder="" />
        </div>
      </div>


        <div class='col-md-12'>
          <div class="col-md-6 form-group">
            <label class="floating-label">Buscar Dirección:</label>
            <input type="text" class="form-control"  required="required" id="address" />
         </div>
         <br>
        <div  class="col-md-6 form-group">
          <button id="buscardireccion" type="button" class="btn btn-primary"> Buscar direccion </button>
          <input type="hidden" class="lat_val" name="latitude" value="{{$branch->latitude}}">
          <input type="hidden" class="lng_val" name="longitude" value="{{$branch->longitude}}">
        </div>
        </div>

        <div class='col-md-12'>
            <div class="col-md-12">
                <div class="responsive" id="map"></div>
            </div>
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

@section('map2')
 <script>
  $('#buscardireccion').click(function(event){
      event.preventDefault();
      codeAddress();
    });
  </script>
<script>
var geocoder;
var map;
    var maps;
    var my_marker;
		var lat = {{$branch->latitude}}
		var lng = {{$branch->longitude}}
  function initMap()  {
    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(lat,lng);
    var mapOptions = {
      zoom: 5,
      center: latlng,
      styles:
      [
    {
        "featureType": "landscape",
        "stylers": [
            {
                "hue": "#FFBB00"
            },
            {
                "saturation": 43.400000000000006
            },
            {
                "lightness": 37.599999999999994
            },
            {
                "gamma": 1
            }
        ]
    },
    {
        "featureType": "road.highway",
        "stylers": [
            {
                "hue": "#FFC200"
            },
            {
                "saturation": -61.8
            },
            {
                "lightness": 45.599999999999994
            },
            {
                "gamma": 1
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "stylers": [
            {
                "hue": "#FF0300"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 51.19999999999999
            },
            {
                "gamma": 1
            }
        ]
    },
    {
        "featureType": "road.local",
        "stylers": [
            {
                "hue": "#FF0300"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 52
            },
            {
                "gamma": 1
            }
        ]
    },
    {
        "featureType": "water",
        "stylers": [
            {
                "hue": "#0078FF"
            },
            {
                "saturation": -13.200000000000003
            },
            {
                "lightness": 2.4000000000000057
            },
            {
                "gamma": 1
            }
        ]
    },
    {
        "featureType": "poi",
        "stylers": [
            {
                "hue": "#00FF6A"
            },
            {
                "saturation": -1.0989010989011234
            },
            {
                "lightness": 11.200000000000017
            },
            {
                "gamma": 1
            }
        ]
    }
]

    }
    map = new google.maps.Map(document.getElementById("map"), mapOptions);

     my_marker = new google.maps.Marker({
        map: map
        ,position: new google.maps.LatLng(-34.397, 150.644)
    });
  }

  function codeAddress() {
     var address = document.getElementById("address").value;
 	if(address.length)
 	{
     geocoder.geocode( { 'address': address}, function(results, status) {
       if (status == google.maps.GeocoderStatus.OK) {
         map.setCenter(results[0].geometry.location);
 		mylatlong = new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng());
 		console.log(mylatlong);
 		my_marker.setPosition(mylatlong);
 		$('.lat_val').val(results[0].geometry.location.lat());
 		$('.lng_val').val(results[0].geometry.location.lng());
 		map.setZoom(16); /* ajustar el zoom del mapa cuando ejecutas la busqueda*/
       } else {
         alert("Geocode was not successful for the following reason: " + status);
       }
     });
 	}else
 		alert('no hay datos intenta de nuevo');

   }
   initMap();
</script>
   <script async defer  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6eAu2eRTNpy8-5jmeTqgDFxALyGlZre0&callback=initMap"></script>

@endsection
