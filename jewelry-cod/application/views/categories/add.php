<div class="page-content">
  <div class="panel">
    <div class="panel-body">
      <center><h3>Registrate Categoria</h3></center>
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
      <form class="" action="<?= URL ?>categories/add" method="post" enctype="multipart/form-data">
        <div class="form-group col-md-6">
          <label>Nombre:</label>
          <input type="text" class="form-control" value="<?= set_value('name') ?>" name="name">
        </div>
        <div class="form-group col-md-12">
          <button type="submit" name="button" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>
