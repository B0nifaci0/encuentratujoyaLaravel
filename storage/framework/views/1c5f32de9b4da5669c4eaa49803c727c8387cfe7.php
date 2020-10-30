<?php $__env->startSection('title'); ?>
ALTA TIENDAS
<?php $__env->stopSection(); ?>

<?php $__env->startSection('nav'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('menu'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="page-content container-fluid">
  <form autocomplete="off" method="POST" action="/tiendas" enctype="multipart/form-data">
  
  <div class="panel">
      <div class="panel-body container-fluid">
        <?php if($errors->count() > 0): ?>
        <div class="alert alert-danger" role="alert">
          <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
    <?php endif; ?>
        <h2 class="panel-title">Informacion de la tienda</h2>
             <div class="col-md-6 form-group">
               <label class="floating-label">Nombre: </label>
               <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required="required" placeholder="El nombre de tu negocio" />
             </div>
            <div class="col-md-6 form-group">
              <label class="floating-label">Sitio web: </label>
              <input type="text" class="form-control" name="web_site" value="<?php echo e(old('web_site')); ?>" required="required" placeholder="www.ejemplo.com" />
            </div>


        <div class="col-md-6">
          <label>Correo electrónico</label>
          <input type="text" name="email" class="form-control" value="<?php echo e(old('email')); ?>">
        </div>

        <div class="col-md-6">
          <label>Numero telefonico</label>
          <input type="text" name="phone_number" class="form-control" value="<?php echo e(old('phine_number')); ?>">
        </div>

        <div class="col-md-6">
          <label>Estado</label>
          <select id="states" class="form-control">
            <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($state->id); ?>"><?php echo e($state->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </div>

        <div class="col-md-6">
        <label>Municipio</label>
          <select id="municipios" name="municipality_id" class="form-control"></select>
        </div>

        <div class="col-md-12">
          <label>Descripción</label>
          <textarea name="description" class="form-control" value=""><?php echo e(old('description')); ?></textarea>
        </div>

        <div class='col-md-12'>
          <div class=" col-md-6 example-wrap">
            <label>Ingresa Imagen de tu Tienda.</label>
              <input type="file" name="image" data-plugin="dropify"  required>
          </div>
        </div>

        <div>
        <!--SE INGRESA LA VISTA PARCIAL-->
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