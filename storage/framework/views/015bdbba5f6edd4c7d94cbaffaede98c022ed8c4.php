

<?php $__env->startSection('title'); ?>
ALTA sUCURSAL
<?php $__env->stopSection(); ?>

<?php $__env->startSection('nav'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('menu'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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
        <?php if(session('mesage2')): ?>
        <div class="alert alert-success">
              <strong><?php echo e(session('mesage2')); ?></strong>
            </div>
          <?php endif; ?>
        <?php if($errors->count() > 0): ?>
          <div class="alert alert-danger" role="alert">
            <ul>
              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><?php echo e($error); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </div>
        <?php endif; ?>
        <div class='col-md-12'>
             <div class="col-md-6 form-group">
               <label class="floating-label">Nombre Sucursal: </label>
               <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required="required" placeholder="Joyeria" />
             </div>
            <div class="col-md-6 form-group">
              <label class="floating-label">Dirección: </label>
              <input type="text" class="form-control" name="address" value="<?php echo e(old('addres')); ?>" required="required" placeholder="Lerdo de tejada" />
            </div>
        </div>
       <div class='col-md-12'>
         <div class="col-md-6 form-group">
           <label class="floating-label">Telefono: </label>
           <input type="text" class="form-control" name="phone_number" value="<?php echo e(old('phone_number')); ?>" required="required" placeholder="722533873883" />
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('map'); ?>
 <script>
  $('#buscardireccion').click(function(event){
      event.preventDefault();
      codeAddress();
    });
  </script>
   <script src="<?php echo e(url('dashboard-assets/assets/js/maps.js')); ?>"></script>

   <script async defer  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6eAu2eRTNpy8-5jmeTqgDFxALyGlZre0&callback=initMap"></script>


</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layoust', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>