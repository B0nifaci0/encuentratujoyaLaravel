<?php
  if (isset($promotion)) {
    $promotion = $promotion[0];
  }
?>
<div class="page-content container-fluid">
  <form autocomplete="on" method="POST" action="<?= URL ?>promotions/edit/<?= isset($promotion->id_promotion)? $promotion->id_promotion : set_value('id_promotion') ?>" enctype="multipart/form-data">
  <div class="panel">
      <div class="panel-body container-fluid">
        <center><h2>Registrar Promociones para su tienda</h2></center>
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
        <h2 class="panel-title">Informacion de la Promocion</h2>
        <input type="hidden" name="id_promotion" value="<?= isset($promotion->id_promotion)? $promotion->id_promotion : set_value('id_promotion') ?>">
        <div class='col-md-12'>
             <div class="col-md-6 form-group">
               <label class="floating-label">Nombre: </label>
               <input type="text" class="form-control" name="name"  value='<?= isset($promotion->name)? $promotion->name : set_value('name') ?>' required="required" placeholder="El nombre de tu negocio" />
             </div>

            <div class="col-md-6 form-group">
              <label class="floating-label">Condiciones: </label>
              <input type="text" class="form-control" name="terms"  value='<?= isset($promotion->terms)?  $promotion->terms : set_value('terms') ?>' required="required" placeholder="www.ejemplo.com" />
            </div>
        </div>

        <div class='col-md-12'>


        <div class="col-md-6 margin-bottom">
          <label class="floating-label">Fecha de aspiración: </label>
          <input id="datepicker" type="text" name="start_date" value='<?= isset($promotion->start_date)? $promotion->start_date : set_value('start_date')  ?>' class="form-control" data-plugin="datepicker" placeholder="Ej. 2016-06-29">
          </div>

        <div class="col-md-6 margin-bottom">
            <label class="floating-label">Fecha de expiración: </label>
            <input id="picker" type="text" name="expiration_date" value='<?= isset($promotion->expiration_date)? $promotion->expiration_date : set_value('expiration_date')  ?>' class="form-control" data-plugin="datepicker" placeholder="Ej. 2016-06-29">
            </div>
    </div>

      <div class='col-md-12'>
        <div class="form-group col-md-6 ">
          <label class="floating-label">Descripcion:</label>
          <textarea class="form-control"  rows="2" name="description"><?= isset($promotion->description)? $promotion->description : set_value('description')  ?></textarea>
        </div>



          <div class="col-md-12 form-group">
              <button id="ok" type="submit" class="btn btn-info">Guardar</button>
          </div>
      </div>
  </div>
  </form>
  </div>

  <?php if (isset($promotion)): ?>
    <div class="panel">
      <div class="panel-body">
        <h2>Imagen principal</h2>
        <form action="<?= URL ?>Promotions/changeImage/<?= $promotion->id_promotion ?>" method="post" enctype="multipart/form-data">

          <input type="hidden" name="id_promotion" value="<?= $promotion->id_promotion ?>">
          <div class="col-md-2">
            <label>Cambiar imagen:</label>
            <img src="<?= URL ?>assets/images/productos/<?= $promotion->image ?>" width="150px" height="150px" />
          </div>
          <div class="form-group col-md-4">
            <br><br><br>
            <label for="main_image" class="btn btn-sm btn-info">Seleccionar</label>
            <input id="main_image" style="visibility:hidden;" type="file" name="image" required>
          </div>
          <div class="col-md-12">
            <div id="preview-main-box" class="hidden">
              <img id="preview-main-image" alt="Tu imagen" width="250px" height="250px" /><br>
              <label>Imagen:</label><strong id="image_main_name"></strong><br>
            </div>
            <div class="col-md-12">
              <button type="submit" id="image_main_submit" class="hidden btn btn-primary">Guardar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <?php endif; ?>

    <script src="<?= URL ?>assets/dashboard-assets/global/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){

        // Interactividad con el input type file de la imagen principal
        $("#main_image").change(function(){
          $("#preview-main-box").attr("class", "");
          $("#image_main_submit").attr("class", "btn btn-primary");
          render(this, $("#preview-main-image"));
          $("#image_main_name").html($(this).val().split("\\").pop());
        });
      });
        function render(image, place) {
          if (image.files && image.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
              place.attr("src", e.target.result);
            }
          reader.readAsDataURL(image.files[0]);
          }
        }
        </script>
