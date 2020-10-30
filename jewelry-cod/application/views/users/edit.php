<div class="page-content">
  <div class="panel">
   <div class="panel-body">
      <h3 class="panel-title">Modificación del Usuario</h3>
      <?php if (isset($error)): ?>
        <?php echo $error ?>
      <?php endif; ?>
        <form autocomplete="off" method="POST" action="<?= URL ?>users/edit/<?= isset($user->id_user)? $user->id_user : set_value('id_user')  ?>" enctype="multipart/form-data">
        <div class='col-md-12'>
          <div class="col-md-6 form-group">
            <label class="floating-label">Nombre usuario: </label>
            <input type="text" class="form-control" name="username" value='<?= isset($user->username) ? $user->username : set_value('username')  ?>' required="required" placeholder="" />
          </div>
          <div class="col-md-6 form-group">
            <label class="floating-label">Correo electronico : </label>
            <input type="text" class="form-control" name="email" value='<?=isset($user->email) ? $user->email : set_value('email') ?>' required="required" placeholder="" />
          </div>
        </div>
        <div class='col-md-12'>
          <div class="col-md-6 margin-bottom">
            <label class="floating-label">Contraseña: </label>
            <input type="password" class="form-control" name="password" required="required" placeholder="Dejar en blanco a menos que quieras cambiar tu contraseña" />
          </div>
          <div class="col-md-6 margin-bottom">
            <label class="floating-label">Confirmar contraseña: </label>
            <input type="password" class="form-control" name="password_confirm" required="required" placeholder="Dejar en blanco a menos que quieras cambiar tu contraseña" />
          </div>
        </div>
        <div class="col-md-12 form-group">
            <button id="ok" type="submit" class="btn btn-info">Guardar</button>
        </div>
      </form>


      <?php if ($user->image == ""){ ?>
        <form action="<?= URL ?>users/change_image/<?= $user->id_user ?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_user" value="<?= $user->id_user ?>">
          <div class="form-group col-md-4">
            Agregar imagen de usuario
            <br>
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
      <?php }else{ ?>
      <form action="<?= URL ?>users/change_image/<?= $user->id_user ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_user" value="<?= $user->id_user ?>">
        <div class="col-md-2">
          <label>Cambiar imagen:</label>
          <img src="<?= URL ?>assets/images/users/<?= $user->image ?>" width="150px" height="150px" />
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
      <?php } ?>
    </div>
  </div>
</div>

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
