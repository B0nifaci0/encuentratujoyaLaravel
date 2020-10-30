<div class="page-content">
  <div class="panel">
    <div class="panel-body">
      <center><h3>Modificar horario de <?= $branch->name ?></h3></center>
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
      <form class="" action="<?= URL ?>schedules/edit/<?= $schedule->id_schedule ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_schedule" value="<?= $schedule->id_schedule ?>">
        <div class="form-group col-md-12">
          <label>Día:</label>
          <select class="form-control" name="day">
            <option value="Lunes">Lunes</option>
            <option value="Martes">Martes</option>
            <option value="Miércoles">Miércoles</option>
            <option value="Jueves">Jueves</option>
            <option value="Viernes">Viernes</option>
            <option value="Sábado">Sábado</option>
            <option value="Domingo">Domingo</option>
          </select>
        </div>
        <div class="col-md-12">
          <div class="col-md-6">
            <label>Horario de apertura:</label>
            <select class="form-control" name="opening_hour">
              <option value="6:00 am">6:00 am</option>
              <option value="7:00 am">7:00 am</option>
              <option value="8:00 am">8:00 am</option>
              <option value="9:00 am">9:00 am</option>
              <option value="10:00 am">10:00 am</option>
              <option value="11:00 am">11:00 am</option>
              <option value="12:00 pm">12:00 pm </option>
              <option value="13:00 pm">13:00 pm </option>
              <option value="14:00 pm">14:00 pm </option>
              <option value="15:00 pm">15:00 pm </option>
              <option value="16:00 pm">16:00 pm </option>
              <option value="17:00 pm">17:00 pm </option>
              <option value="18:00 pm">18:00 pm </option>
              <option value="19:00 pm">19:00 pm </option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="">Horario de cierre:</label>
            <select class="form-control" name="closing_hour">
              <option value="12:00 pm">12:00 pm </option>
              <option value="13:00 pm">13:00 pm </option>
              <option value="14:00 pm">14:00 pm </option>
              <option value="15:00 pm">15:00 pm </option>
              <option value="16:00 pm">16:00 pm </option>
              <option value="17:00 pm">17:00 pm </option>
              <option value="18:00 pm">18:00 pm </option>
              <option value="19:00 pm">19:00 pm </option>
              <option value="20:00 pm">20:00 pm </option>
              <option value="21:00 pm">21:00 pm </option>
              <option value="22:00 pm">22:00 pm </option>
              <option value="23:00 pm">23:00 pm </option>
            </select>
          </div>
        </div>
    </div>
    <div class="form-group col-md-12">
      <button type="submit" name="button" class="btn btn-primary">Guardar</button>
    </div>
    </form>
  </div>
</div>
