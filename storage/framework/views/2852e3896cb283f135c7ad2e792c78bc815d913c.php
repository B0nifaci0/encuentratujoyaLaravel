

<?php $__env->startSection('title'); ?>
MODIFICACIÓ PRODUCTO
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
      <form class="" action="<?php echo e(route('productos.update',['id' => $product->id])); ?>" method="post" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <?php echo e(method_field('PUT')); ?>

        <div class="form-group col-md-6">
          <label>Nombre</label>
          <input type="text" class="form-control" name="name"  value="<?php echo e($product->name); ?>">
        </div>
        <div class="form-group col-md-6">
          <label>Descripcion</label>
          <input type="text" class="form-control" name="description"  value="<?php echo e($product->description); ?>">
        </div>
        <div class="form-group col-md-6">
          <label>Pureza</label>
          <input type="text" class="form-control" name="purity"  value="<?php echo e($product->purity); ?>">
        </div>
        <div class="form-group col-md-6">
          <label>Peso</label>
          <input type="text" class="form-control" name="weigth"  value="<?php echo e($product->weigth); ?>">
        </div>
        <div class="form-group col-md-6">
          <label>Precio</label>
          <input type="text" class="form-control" name="price"  value="<?php echo e($product->price); ?>">
        </div>
        <div class="form-group col-md-6">
          <label>Nacionalidad</label>
          <input type="text" class="form-control" name="nationality"  value="<?php echo e($product->nationality); ?>">
        </div>

        <div class="form-group col-md-6">
          <label>Imagen:</label><br>
          <label for="file" class="btn btn-info">Seleccionar imagen</label>
          <input id="file" class="hidden" type="file" name="image" required>
          <div id="preview-box" class="hidden">
            <img id="preview" alt="Tu imagen" width="200px" height="200px" /><br>
            <br> <strong id="image_name"></strong><br>
          </div>
        </div>
        <div class="form-group col-md-6">
          <label>Categoria</label>
          <select id="categories" name="category_id" class="form-control">
                      <?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="">Seleccione uno</option>
              <option value="<?php echo e($product->category_id); ?>"><?php echo e($category->name); ?></option>
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
<script type="text/javascript">
$(document).ready(function(){
  alert('hola mundo si entro');
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layoust', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>