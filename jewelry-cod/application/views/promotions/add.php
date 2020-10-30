<div class="page-content container-fluid">
  <form autocomplete="on" method="POST" action="<?= URL ?>promotions/add" enctype="multipart/form-data">
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

        <div class='col-md-12'>
             <div class="col-md-6 form-group">
               <label class="floating-label">Nombre: </label>
               <input type="text" class="form-control" name="name" value="<?= set_value('name'); ?>" required="required" placeholder="El nombre de tu negocio" />
             </div>

            <div class="col-md-6 form-group">
              <label class="floating-label">Condiciones: </label>
              <input type="text" class="form-control" name="terms" value="<?= set_value('terms') ?>" required="required" placeholder="" />
            </div>
        </div>

        <div class='col-md-12'>


        <div class="col-md-6 margin-bottom">
          <label class="floating-label">Fecha de aspiración: </label>
          <input id="datepicker" type="text" name="start_date" value="<?= set_value('start_date') ?>" class="form-control" data-plugin="datepicker" placeholder="Ej. 2016-06-29">
          </div>

        <div class="col-md-6 margin-bottom">
            <label class="floating-label">Fecha de expiración: </label>
            <input id="picker" type="text" name="expiration_date" value="<?= set_value('expiration_date') ?>" class="form-control" data-plugin="datepicker" placeholder="Ej. 2016-06-29">
            </div>
    </div>

      <div class='col-md-12'>
        <div class="form-group col-md-6 ">
          <label class="floating-label">Descripcion:</label>
          <textarea class="form-control"  rows="2" name="description"><?= set_value('description') ?></textarea>
        </div>

            <div class=" col-md-6 example-wrap">
              <h4 class="example-title">Ingresa Imagen de Promocion.</h4>
              <div class="example">
                <input type="file" id="input-file-now" name="image" value="<?= set_value('image') ?>" data-plugin="dropify" data-default-file="" required>
              </div>
          </div>


          <div class="col-md-12 form-group">
              <button id="ok" type="submit" class="btn btn-info">Guardar</button>
          </div>
      </div>
  </div>
  </form>
  </div>
