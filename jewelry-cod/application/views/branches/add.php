<style type="text/css">
     #map { height: 450px; width:98%;}
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
          <div class="col-md-6 form-group">
            <label class="floating-label">Buscar Dirección:</label>
            <input type="text" class="form-control"  required="required" id="address" />
         </div>
         <br>
        <div  class="col-md-6 form-group">
          <button id="buscardireccion" type="button" class="btn btn-primary"> Buscar direccion </button>
          <input type="hidden" class="lat_val" name="latitude">
          <input type="hidden" class="lng_val" name="longitude">
        </div>
        </div>

        <div class='col-md-24'>
            <div class="col-md-24">
                <div id="map" ></div>
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
  <script>
  $('#buscardireccion').click(function(event){
    	event.preventDefault();
    	codeAddress();
    });
  </script>

  <script src="<?= URL ?>assets/javascripts/maps.js"></script>

<script async defer  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6eAu2eRTNpy8-5jmeTqgDFxALyGlZre0&callback=initMap"></script>
