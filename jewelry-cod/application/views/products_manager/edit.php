<?php
  if (isset($product)){
    $product = $product[0];
  }
?>
<link rel="stylesheet" href="<?= URL ?>assets/dashboard-assets/global/vendor/magnific-popup/magnific-popup.css">
<div class="page-content">
  <div class="panel">
    <div class="panel-body">
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
      <div class="panel-head">
        <h2>Informacion del producto:</h2>
      </div>
      <form class="" action="<?= URL ?>productsManager/edit/<?= isset($product->id_product)? $product->id_product : set_value('id_product')?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_product" value="<?= isset($product->id_product)? $product->id_product : set_value('id_product')?>">
        <div class="form-group col-md-6">
          <label>Nombre:</label>
          <input type="text" class="form-control" name="name" value='<?= isset($product->name)? $product->name : set_value('name')?>'/>
        </div>
        <div class="form-group col-md-6">
          <label>Descripcion:</label>
          <input type="text" class="form-control" name="description" value='<?= isset($product->description)? $product->description : set_value('description') ?>'/>
        </div>
        <div class="form-group col-md-6">
          <label>Pureza:</label>
          <input type="text" class="form-control" name="purity" value='<?= isset($product->purity)? $product->purity : set_value('purity') ?>'/>
        </div>
        <div class="form-group col-md-6">
          <label>Peso:</label>
          <input type="text" class="form-control" name="weight" value='<?= isset($product->weight)? $product->weight : set_value('weight') ?>'>
        </div>
        <div class="form-group col-md-6">
          <label>Precio:</label>
          <input type="text" class="form-control" name="price" value='<?= isset($product->price)? $product->price : set_value('price') ?>'>
        </div>
        <div class="form-group col-md-6">
          <label>Nacionalidad:</label>
          <input type="text" class="form-control" name="nationality" value='<?= isset($product->nationality)? $product->nationality : set_value('nationality') ?>'>
        </div>
        <div class="form-group col-md-6">
          <label>Categoria:</label>
          <select class="form-control" name="category">
            <?php foreach ($product->categories as $category): ?>
              <option value="<?= $category->id_category ?>"><?= $category->name ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group col-md-12">
          <button type="submit" name="button" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>

<?php if (isset($product)): ?>
  <div class="panel">
    <div class="panel-body">
      <h2>Imagen principal</h2>
      <form action="<?= URL ?>productsManager/changeImage/<?= $product->id_product ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_product" value="<?= $product->id_product ?>">
        <div class="col-md-2">
          <label>Cambiar imagen:</label>
          <img src="<?= URL ?>assets/images/productos/<?= $product->image ?>" width="150px" height="150px" />
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

    <div class="panel">
      <div class="panel-body">
        <div class="col-md-12">
          <h2>Galeria:</h2><br>
          <?php if (count($product->images) == 0){ ?>
            <span class="label label-default">Aún no has agregado imágenes a la galería del producto</span>
            <br><br>
          <?php }else{ ?>
            <!-- Galeria -->
              <ul class="blocks blocks-100 blocks-xxl-4 blocks-lg-3 blocks-md-2">
              <?php foreach ($product->images as $image): ?>
                <li data-type="product">
                  <div class="card card-shadow">
                    <figure class="card-img-top overlay-hover overlay">
                      <img class="overlay-figure overlay-scale" src="<?= URL ?>assets/images/productos/<?= $image->name ?>"
                      alt="...">
                      <figcaption class="overlay-panel overlay-background overlay-fade overlay-icon">
                        <a class="icon md-search" href="<?= URL ?>assets/images/productos/<?= $image->name ?>"></a>
                      </figcaption>
                    </figure>
                    <div class="card-block">
                      <h4 class="card-title">Animal Horse</h4>
                    </div>
                  </div>
                </li>
              <?php endforeach; ?>
              </ul>
          <?php } ?>
        </div>
        <div class="form-group col-md-12">
          <form action="<?= URL ?>productsManager/addImageToGallery/<?= $product->id_product ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_product" value="<?= $product->id_product ?>">
            <input type="hidden" name="id_product" value="<?= $product->id_product ?>">
            <div class="col-md-2">
              <label for="to_galery" class="btn btn-sm btn-info">Seleccionar imagen</label>
              <input id="to_galery" style="visibility:hidden;" type="file" name="image_galery" required>
              <div id="preview-box" class="hidden">
                <img id="preview" alt="Tu imagen" width="250px" height="250px" /><br>
                <label>Imagen:</label><strong id="image_name"></strong><br>
              </div>
            </div>
            <div class="col-md-12">
              <button type="submit" id="image_submit" class="hidden btn btn-primary">Guardar</button>
            </div>
          </form>
        </div>
      </div>
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

    // Interactividad con el input type file de la galeria
    $("#to_galery").change(function(){
      $("#preview-box").attr("class", "");
      $("#image_submit").attr("class", "btn btn-primary");
      render(this, $("#preview"));
      $("#image_name").html($(this).val().split("\\").pop());
    });
  });

  jQuery(document).ready(function ($) {
    // Interactividad con la galeria
    $('.md-search').magnificPopup({
      type: 'image',
      closeOnContentClick: true,
      mainClass: 'mfp-fade',
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
      }
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
