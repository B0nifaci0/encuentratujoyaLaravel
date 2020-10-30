
<?php $__env->startSection('title'); ?>
ALTA PROMOCINES
<?php $__env->stopSection(); ?>

<?php $__env->startSection('nav'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('menu'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="page-content container-fluid">
  <form autocomplete="on" method="POST" action="/promociones" enctype="multipart/form-data">
  <div class="panel">
      <div class="panel-body container-fluid">
        <center><h2>Registrar Promociones para su tienda</h2></center>
           <?php if($errors->count() > 0): ?>
        <div class="alert alert-danger" role="alert">
          <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
    <?php endif; ?>
        <h2 class="panel-title">Informacion de la Promocion</h2>

        <div class='col-md-12'>
             <div class="col-md-6 form-group">
               <label class="floating-label">Nombre: </label>
               <input type="text" class="form-control" name="name" value="" required="required" placeholder="Nombre de tu promoción" />
             </div>

            <div class="col-md-6 form-group">
              <label class="floating-label">Condiciones: </label>
              <input type="text" class="form-control" name="terms" value="" required="required" placeholder="solo aplica  en compras arriba de $1000" />
            </div>
        </div>

        <div class='col-md-12'>


        <div class="col-md-6 margin-bottom">
          <label class="floating-label">Fecha de aspiración: </label>
          <input id="datepicker" type="text" name="start_date" value="" class="form-control" data-plugin="datepicker" placeholder="Ej. 2016-06-29">
          </div>

        <div class="col-md-6 margin-bottom">
            <label class="floating-label">Fecha de expiración: </label>
            <input id="datepicker" type="text" name="expirition_date" value="" class="form-control" data-plugin="datepicker" placeholder="Ej. 2016-06-29">
            </div>
    </div>

      <div class='col-md-12'>
        <div class="form-group col-md-6 ">
          <label class="floating-label">Descripcion:</label>
          <textarea class="form-control"  rows="2" name="description"></textarea>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layoust', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>