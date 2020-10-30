<div class="page-content">
  <div class="panel">
    <div class="panel-body">
      <h2>Nuevo producto</h2>
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
      <form class="" action="<?= URL ?>productsManager/add" method="post" enctype="multipart/form-data">
        <div class="form-group col-md-6">
          <label>Nombre</label>
          <input type="text" class="form-control" name="name"  value="<?= set_value('name') ?>">
        </div>
        <div class="form-group col-md-6">
          <label>Descripcion</label>
          <input type="text" class="form-control" name="description"  value="<?= set_value('description') ?>">
        </div>
        <div class="form-group col-md-6">
          <label>Pureza</label>
          <input type="text" class="form-control" name="purity"  value="<?= set_value('purity') ?>">
        </div>
        <div class="form-group col-md-6">
          <label>Peso</label>
          <input type="text" class="form-control" name="weight"  value="<?= set_value('weight') ?>">
        </div>
        <div class="form-group col-md-6">
          <label>Precio</label>
          <input type="text" class="form-control" name="price"  value="<?= set_value('price') ?>">
        </div>
        <div class="form-group col-md-6">
          <label>Nacionalidad</label>
          <input type="text" class="form-control" name="nationality"  value="<?= set_value('nationality') ?>">
        </div>
        <div class="form-group col-md-6">
          <label>size:</label>
          <input type="text" class="form-control" name="size"  value="<?= set_value('nationality') ?>">
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
          <select id="categories" name="category" class="form-control">
            <option value="">Seleccione uno</option>
            <?php foreach ($categories as $category): ?>
              <option value="<?= $category->id_category ?>"><?= $category->name ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group col-md-12">
          <button id="submit" type="submit" name="button" class="btn btn-primary" disabled="true">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>

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
