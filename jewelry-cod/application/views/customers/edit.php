<?php
  if (isset($customer)) {
    $customer = $customer[0];
  }
?>
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
      <form class="" action="<?= URL ?>customers/edit/<?= isset($customer->id_customer)? $customer->id_customer : set_value('id_customer')  ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_customer" value="<?= isset($customer->id_customer)? $customer->id_customer : set_value('id_customer')  ?>">
        <div class="form-group col-md-6">
          <label>Nombre:</label>
          <input type="text" class="form-control" name="name"  value='<?= isset($customer->name)? $customer->name : set_value('name')  ?>'>
        </div>
        <div class="form-group col-md-6">
          <label>Apellidos:</label>
          <input type="text" class="form-control" name="surnames" value='<?= isset($customer->surnames)? $customer->surnames : set_value('surnames') ?>'>
        </div>
        <div class="form-group col-md-6">
          <label>telefono:</label>
          <input type="text" class="form-control" name="phone_number" value='<?= isset($customer->phone_number)? $customer->phone_number : set_value('phone_number')  ?>'>
        </div>
        <div class="form-group col-md-12">
          <button type="submit" name="button" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>
