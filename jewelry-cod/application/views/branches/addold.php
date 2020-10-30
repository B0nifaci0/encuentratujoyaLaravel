<style>
  #map { height: 400px; }
</style>


<div class="page-content container-fluid">
  <form  id="formu" class="validate" autocomplete="off" method="POST"
      action="<?= URL ?>branches/add" enctype="multipart/form-data">
  <div class="panel">
    <div class="panel-heading">
      <center><h3 class="panel-title">Nueva Sucursal</h3></center>
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
             <div class="col-md-6 form-group">
               <label class="floating-label">Nombre Sucursal: </label>
               <input type="text" class="form-control" name="name" value="<?= set_value('name_branch') ?>" required="required" placeholder="" />
             </div>
            <div class="col-md-6 form-group">
              <label class="floating-label">Dirección: </label>
              <input type="text" class="form-control" name="address" value="<?= set_value('direction') ?>" required="required" placeholder="" />
            </div>
        </div>
       <div class='col-md-12'>
         <div class="col-md-6 form-group">
           <label class="floating-label">Telefono: </label>
           <input type="text" class="form-control" name="phone_number" value="<?= set_value('phone_number') ?>" required="required" placeholder="" />
        </div>
      </div>

      <div class='col-md-12'>
        <input type="hidden" id="latitude" name="latitude" value="19.340278">
        <input type="hidden" id="longitude" name="longitude" value="-99.476325">
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
          <div class="col-md-12 form-group">
              <button id="ok" type="submit" class="btn btn-info">Guardar</button>
          </div>
      </div>
    </div>
  </div>
  </form>
  </div>

  <script type="text/javascript">

		var map;
		var marker;
		var lat = 19.340278;
		var lng = -99.476325;

		function initMap() {
			map = new google.maps.Map(document.getElementById('map'), {
				center: {
				  lat: lat,
				  lng: lng
				},
				zoom: 15,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				streetViewControl: false,
			});

			marker = new google.maps.Marker({
				position: {
				    	lat: lat,
				    	lng: lng
				},
				map: map
			});

			map.addListener('click', function(e) {
				marker.setPosition(e.latLng);
				console.log(e.latLng.lat());
				$('#latitude').val(e.latLng.lat());
				$('#longitude').val(e.latLng.lng());
			});
		}

		function placeMarkerAndPanTo(latLng, map) {
			map.panTo(latLng);
		}

		jQuery(document).ready(function() {
			$('#ubicacion_actual').unbind('click').click(function(evt){
				console.log('Ubicación actual');
				evt.preventDefault();

				// Try W3C Geolocation (Preferred)
				if(navigator.geolocation) {
					browserSupportFlag = true;
					navigator.geolocation.getCurrentPosition(function(position) {
						initialLocation = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
						map.setCenter(initialLocation);
						marker.setPosition(initialLocation);
						$('#form-latitud').val(initialLocation.lat());
						$('#longitude').val(initialLocation.lng());
					}, function() {
						//handleNoGeolocation(browserSupportFlag);
					});
				}else {
					alert("Su navegador no soporta la geolocalización");
				}
			});
		});

	</script>
	<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVtrC1DqAHmJu7oVjb23vFq6qk31gxPS8&callback=initMap">
	</script>
