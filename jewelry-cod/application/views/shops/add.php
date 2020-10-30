<div class="page-content container-fluid">
  <form autocomplete="off" method="POST" action="<?= URL ?>shopsManager/add" enctype="multipart/form-data">
  <div class="panel">
      <div class="panel-body container-fluid">
        <center><h2>Registrarse como tienda</h2></center>
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
        <h2 class="panel-title">Informacion de la tienda</h2>
        <div class='col-md-12'>
             <div class="col-md-6 form-group">
               <label class="floating-label">Nombre: </label>
               <input type="text" class="form-control" name="shop_name" value="<?= set_value('name'); ?>" required="required" placeholder="El nombre de tu negocio" />
             </div>
            <div class="col-md-6 form-group">
              <label class="floating-label">Sitio web: </label>
              <input type="text" class="form-control" name="web_site" value="<?= set_value('web_site') ?>" required="required" placeholder="www.ejemplo.com" />
            </div>
        </div>

        <div class="col-md-12">
          <div class="col-md-6 form-group">
            <label class="floating-label">Correo electronico: </label>
            <input type="text" class="form-control" name="email" value="<?= set_value('email'); ?>" required="required" placeholder="El nombre de tu negocio" />
          </div>

          <div class="col-md-6 form-group">
            <label class="floating-label">Descripcion: </label>
            <textarea class="form-control"  rows="2" name="description"><?= set_value('description') ?></textarea>
          </div>
        </div>
      <div class="col-md-12">
        <div class="col-md-6 form-group">
          <label class="floating-label">Telefono: </label>
          <input type="text" class="form-control" name="phone_number" value="<?= set_value('phone_number'); ?>" required="required" placeholder="El nombre de tu negocio" />
        </div>
        </div>
        <div class='col-md-12'>
          <div class=" col-md-6 example-wrap">
            <label>Ingresa Imagen de tu Tienda.</label>
                <input type="file" name="image" data-plugin="dropify" data-default-file="" required>
          </div>
        </div>


        <div>
          <?php include('./application/views/users/_add.php') ?>
        </div>
          <div class="col-md-12 form-group">
              <button id="ok" type="submit" class="btn btn-info">Guardar</button>
          </div>
      </div>
  </div>
  </form>
  </div>
