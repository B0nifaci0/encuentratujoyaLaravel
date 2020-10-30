<style>
  #map { height: 400px; }
</style>


<div class="page-content container-fluid">
  <form  id="formu" class="validate" autocomplete="off" method="POST"
      action="<?= URL ?>branches/edit/<?= $branch->id_branch ?>" enctype="multipart/form-data">
  <div class="panel">

    <div class="panel-heading">
      <center><h3 class="panel-title">Modificar Sucursal</h3></center>
      <?php if (validation_errors()): ?>
        <div class="alert alert-danger">
          <?= validation_errors(); ?>
        </div>
      <?php endif; ?>

      <?php if (isset($error)): ?>
        <div class="alert alert-danger">
          <?= $error ?>
        </div>
      <?php endif; ?>
      <div class="panel-body container-fluid">
        <div class='col-md-12'>
            <input type="hidden" name="id_branch" value="<?= $branch->id_branch ?>">
            <div class="col-md-6 form-group">
               <label class="floating-label">Nombre Sucursal: </label>
               <input type="text" class="form-control" name="name" value="<?= (set_value('name') == '') ? $branch->name : set_value('name') ?>" required="required" placeholder="" />
             </div>
            <div class="col-md-6 form-group">
              <label class="floating-label">Dirección: </label>
              <input type="text" class="form-control" name="address" value="<?= (set_value('address') == '') ? $branch->address : set_value('address') ?>" required="required" placeholder="" />
            </div>
        </div>
       <div class='col-md-12'>
         <div class="col-md-6 form-group">
           <label class="floating-label">Telefono: </label>
           <input type="text" class="form-control" name="phone_number" value="<?= (set_value('phone_number') == '') ? $branch->phone_number : set_value('phone_number') ?>" required="required" placeholder="" />
        </div>
      </div>

      <div class='col-md-12'>

        <div class="">
    			<p>Dentro del mapa, de click en donde se encuentra su negocio para establecer ahí su ubicación.</p>
    		</div>
          <div id="map"></div><br>

        <!--
        <div class="form-group">
				    <a href="" class="btn btn-success" id="ubicacion_actual">Usar mi ubicación actual</a>
				</div>
      -->

      </div>

          <div class='col-md-12'>
            <div class="col-md-6 form-group">
              <label class="floating-label">Buscar Dirección:</label>
              <input type="text" class="form-control"  required="required" id="address" />
           </div>
           <br>
          <div  class="col-md-6 form-group">
            <button id="buscardireccion" type="button" class="btn btn-primary"> Buscar direccion </button>
            <input type="hidden" class="lat_val" name="latitude" value="<?= $branch->latitude ?>">
            <input type="hidden" class="lng_val" name="longitude" value="<?= $branch->longitude ?>">
          </div>
          </div>
          <div class="col-md-6 form-group">
              <button id="ok" type="submit" class="btn btn-info">Guardar</button>
          </div>
      </div>
  </div>

  </form>

  <script async defer  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6eAu2eRTNpy8-5jmeTqgDFxALyGlZre0&callback=initMap"></script>

  <script>
  var geocoder;
    var map;
    var my_marker;
		var lat = <?= $branch->latitude ?>;
		var lng = <?= $branch->longitude ?>;
    //alert("l");

    function initMap(){
      var latlng = new google.maps.LatLng(lat, lng);
      var mapOptions = {
        zoom: 10,
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

      //alert("ttttttttt")
      map = new google.maps.Map(document.getElementById("map"), mapOptions);

       my_marker = new google.maps.Marker({
          map: map,
          position: {
                lat: lat,
                lng: lng,
                position: new google.maps.LatLng(lat,lng)
          }
        });
        my_marker.setMap(map);
        /*
        map.addListener('click', function(e) {
          marker.setPosition(e.latLng);
          console.log(e.latLng.lat());
          $('#latitude').val(e.latLng.lat());
          $('#longitude').val(e.latLng.lng());
        });
          */
      /*
      function placeMarkerAndPanTo(latLng, map) {
        map.panTo(latLng);
      }*/




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
         		map.setZoom(10); /* ajustar el zoom del mapa cuando ejecutas la busqueda*/
           } else {
             alert("Geocode was not successful for the following reason: " + status);
           }
         });
     	}else{
        alert('no hay datos intenta de nuevo');
      }
    }
}
    initMap();
</script>
  <script>
  $('#buscardireccion').click(function(event){
    	event.preventDefault();
    	codeAddress();
    });
  </script>


  </div>
