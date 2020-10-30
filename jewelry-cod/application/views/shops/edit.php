<div class="page-content container-fluid">
  <form autocomplete="off" method="POST" action="<?= URL ?>shops/edit/<?= isset($shop->id_shop)? $shop->id_shop : set_value('id_shop')  ?>" enctype="multipart/form-data">
  <div class="panel">
      <div class="panel-body container-fluid">
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
        <h2 class="panel-title">Modificar datos de la tienda</h2>
        <div class='col-md-12'>
            <input type="hidden" name="id_shop" value="<?= isset($shop->id_shop)? $shop->id_shop : set_value('id_shop')  ?>">
             <div class="col-md-6 form-group">
               <label class="floating-label">Nombre:</label>
               <input type="text" class="form-control" name="name" value='<?= isset($shop->name)? $shop->name : set_value('name') ?>' required="required" placeholder="El nombre de tu negocio" />
             </div>
            <div class="col-md-6 form-group">
              <label class="floating-label">Sitio web: </label>
              <input type="text" class="form-control" name="web_site" value='<?= isset($shop->web_site)? $shop->web_site : set_value('web_site') ?>' required="required" placeholder="www.ejemplo.com" />
            </div>
        </div>

        <div>
          
          <h3 class="panel-title">Modifcar datos del Usuario</h3>
          <div class="panel-body">
            <div class='col-md-12'>
              <div class="col-md-6 form-group">
                <input type="hidden" name="id_user" value="<?= isset($user->id_user)? $user->id_user : set_value('id_user') ?>">
                <label class="floating-label">Nombre usuario: </label>
                <input type="text" class="form-control" name="username" value='<?= isset($user->username)? $user->username : set_value('username') ?>' required="required" placeholder="Admin" />
              </div>
              <div class="col-md-6 form-group">
                <label class="floating-label">Correo electronico : </label>
                <input type="text" class="form-control" name="email" value='<?= isset($user->email)? $user->email : set_value('email') ?>' required="required" placeholder="Ejempl@hotmail.com" />
              </div>
            </div>
            <div class='col-md-12'>
              <div class="col-md-6 margin-bottom">
                <label class="floating-label">Contraseña: </label>
                <input type="password" class="form-control" name="password" value='' placeholder="Dejar en blanco a menos que quieras cambiar tu contraseña" />
              </div>
            <div class="col-md-6 margin-bottom">
              <label class="floating-label">Confirmar contraseña: </label>
              <input type="password" class="form-control" name="password_confirm" value='' placeholder="Dejar en blanco a menos que quieras cambiar tu contraseña" />
            </div>
            </div>
          </div>

        </div>
          <div class="col-md-12 form-group">
              <button id="ok" type="submit" class="btn btn-info">Guardar</button>
          </div>
        </div>
      </div>
    </form>

    <div class="panel">
      <div class="panel-body">
        <h3 class="panel-title">Modifcar Imagen de la tienda</h3>
        <form class="" action="<?= URL ?>shops/changeImage/<?= $shop->id_shop ?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_shop" value="<?= $shop->id_shop ?>">
          <div class='col-md-12'>
            <div class=" col-md-6 example-wrap">
              <label for="main_image" class="btn btn-info">Seleccionar</label>
              <input  id="main_image" style="visibility:hidden;" type="file" name="image" value='' data-plugin="dropify" data-default-file="" required="">
              <div id="preview-main-box" class="hidden">
                <img id="preview-main-image" alt="Tu imagen" width="250px" height="250px" /><br>
                <label>Imagen:</label><strong id="image_name"></strong><br>
              </div>
            </div>
            <div class="col-md-12">
              <button type="submit" id="image_submit" class="hidden btn btn-primary">Guardar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script type="text/javascript">

  $("#main_image").change(function(){
    $("#preview-main-box").attr("class", "");
    $("#image_submit").attr("class", "btn btn-primary");
    render(this, $("#preview-main-image"));
    $("#image_name").html($(this).val().split("\\").pop());
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
