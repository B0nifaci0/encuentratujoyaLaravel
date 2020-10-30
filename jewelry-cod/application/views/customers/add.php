<div class="page-content">
  <div class="panel">
    <div class="panel-body">
      <center><h3>Registrate Como Cliente.</h3></center>
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
      <form class="" action="<?= URL ?>customers/add" method="post" enctype="multipart/form-data">
        <div class="form-group col-md-6">
          <label>Nombre:</label>
          <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group col-md-6">
          <label>Apellidos:</label>
          <input type="text" class="form-control" name="surnames">
        </div>
        <div class="form-group col-md-6">
          <label>telefono:</label>
          <input type="text" class="form-control" name="phone_number">
        </div>
        <div>
          <?php include('./application/views/users/_add.php') ?>
        </div>

        <div class="form-group col-md-12">
          <button type="submit" name="button" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>
