

<?php $__env->startSection('title'); ?>
ALTA PRODUCTO
<?php $__env->stopSection(); ?>

<?php $__env->startSection('nav'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('menu'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

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
      <h2>Nuevo producto</h2>
      
      <form class="" action="/productos" method="POST" enctype="multipart/form-data">
        <div class="form-group col-md-6">
          <label>Nombre</label>
          <input type="text" class="form-control" name="name"  value="<?php echo e(old('name')); ?>">
        </div>
        <div class="form-group col-md-6">
          <label>Descripcion</label>
          <input type="text" class="form-control" name="description"  value="<?php echo e(old('description')); ?>">
        </div>
        <div class="form-group col-md-6">
          <label>Pureza</label>
          <input type="text" class="form-control" name="purity"  value="<?php echo e(old('purity')); ?>">
        </div>
        <div class="form-group col-md-6">
          <label>Peso</label>
          <input type="text" class="form-control" name="weigth"  value="<?php echo e(old('weigth')); ?>">
        </div>
        <div class="form-group col-md-6">
          <label>Precio</label>
          <input type="text" class="form-control" name="price"  value="<?php echo e(old('price')); ?>">
        </div>
        <div class="form-group col-md-6">
          <label>Nacionalidad</label>
          <input type="text" class="form-control" name="nationality"  value="<?php echo e(old('nationality')); ?>">
        </div>
        <!--<div class="form-group col-md-6">
          <label>size:</label>
          <input type="text" class="form-control" name="size"  value="<?php echo e(old('size')); ?>" required>
        </div>-->

          <div class="">
          <label for="image" class="btn btn-primary">Explorar</label>
            <input type="file" name="image" id="image" class="hidden" required>
          </div>
        <!--<div class="form-group col-md-6">
          <label>Imagen:</label><br>
          <label for="file" class="btn btn-info">Seleccionar imagen</label>
          <input id="file" class="hidden" type="file" name="image" required>
          <div id="preview-box" class="hidden">
            <img id="preview" alt="Tu imagen" width="200px" height="200px" /><br>
            <br> <strong id="image_name"></strong><br>
          </div>
        </div>-->
        <div class="form-group col-md-6">
          <label>Categoria</label>
          <select  name="category_id" class="form-control">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>            
              <option value="<?php echo e($category->id); ?>" required><?php echo e($category->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </div>

        <div class="form-group col-md-6">
         <input type="text" name="shop_id" value="<?php echo e($user->shop->id); ?>" class="hidden">
        </div>

         <div class="form-group col-md-6">
           <label>Sucursal</label>
           <select name="branch_id" class="form-control">
           <?php  
              $branches = $user->shop->branches;
          
            ?>
             <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($branch->id); ?>" required><?php echo e($branch->name); ?></option>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </select>
        </div>


        <div class="form-group col-md-12">
          <button id="submit" type="submit" name="button" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<script type="text/javascript">
$(document).ready(function(){

  $("#categories").change(function(){
    if ($(this).val() == "" || $("#file").val() == "") {
      $("#submit").prop("disabled", true);
    }else{
      $("#submit").prop("disabled", false);
    }
  });

  $("#file").change(function(){
    if ($("#categories").val() == "" || $(this).val() == "") {
      $("#submit").prop("disabled", true);
    }else{
      $("#submit").prop("disabled", false);
    }
  });

  $("#file").change(function(){
    $("#preview-box").attr("class", "");
    render(this);
    $("#image_name").html($(this).val().split("\\").pop());
  });

  function render(image) {
    if (image.files && image.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        $("#preview").attr("src", e.target.result);
      }
    reader.readAsDataURL(image.files[0]);
    }
  }

});
</script>

<?php echo $__env->make('layout.layoust', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>