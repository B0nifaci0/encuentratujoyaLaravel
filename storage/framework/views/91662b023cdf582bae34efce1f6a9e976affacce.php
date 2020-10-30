<?php $__env->startSection('title'); ?>
ALTA CATEGORIA
<?php $__env->stopSection(); ?>

<?php $__env->startSection('nav'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('menu'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="panel-body">
<?php if(session('mesage')): ?>
<div class="alert alert-success">
      <strong><?php echo e(session('mesage')); ?></strong>
    </div>
  <?php endif; ?>
<div class="page-content">
  <div class="panel">
    <div class="panel-body">
    <?php if($errors->count() > 0): ?>
        <div class="alert alert-danger" role="alert">
          <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
    <?php endif; ?>
      <center><h3>Registrate Categoria</h3></center>

      <form class="" action="/categorias" method="post">
        <div class="form-group col-md-6">
          <label>Nombre Categoria:</label>
          <input type="text" class="form-control" value="<?php echo e(old('name')); ?>" name="name">

        </div>
        <div class="form-group col-md-12">
          <button type="submit" name="button" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layoust', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>