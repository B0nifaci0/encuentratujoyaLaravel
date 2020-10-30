<div class="page-content">
  <div class="panel">
    <div class="panel-body">
      <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success">
          <?= $this->session->flashdata('success') ?>
        </div>
      <?php endif; ?>
      <h4>
        <a href="http://www.jewelrypalace.site/Schedules/add">
          Agregar <button class="btn-raised btn btn-primary btn-floating btn-sm" data-toggle="tooltip" data-original-title="Agregar">
          <i class="icon md-plus" aria-hidden="true"></i>
          </button>
        </a>
      </h4>
      <?php foreach ($brnaches as $branch): ?>
        <h3>Horarios de sucursal: <?= $branch->name ?></h3>
        <table class="table table-bordered table-hover toggle-circle" id="exampleFootableFiltering">
          <thead>
            <tr>
              <th>Dia</th>
              <th>Horario de apertura</th>
              <th>Horario de cierre</th>
              <th>Opciones</th>
            </tr>
          </thead>
          <div class="form-inline padding-bottom-15">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <select id="filteringStatus" class="form-control" style="visibility:hidden">
                    <option value="">Todos</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <tbody>
            <?php if (count($branch->schedules) > 0){ ?>
              <?php foreach ($branch->schedules as $schedule): ?>
                <tr id = "row<?= $schedule->id_schedule?>">
                  <td><?= $schedule->day?></td>
                  <td><?= $schedule->opening_hour ?></td>
                  <td><?= $schedule->closing_hour?></td>
                  <th>
                          <a href=""<button type="button" class="btn btn-xs btn-icon btn-default"><i class="icon md-search" aria-hidden="true"></i></button></a>
                          <a href="http://www.jewelrypalace.site/Schedules/edit/<?= $schedule->id_schedule ?>"<button type="button" class="btn btn-xs btn-icon btn-info edit"><i class="icon md-edit" aria-hidden="true"></i></button></a>
                          <button class="btn btn-xs btn-icon btn-danger delete" alt="<?= $schedule->id_schedule ?>" role="button">
                              <i class="icon md-delete" aria-hidden="true"></i>
                          </button>
                        </th>
                </tr>
              <?php endforeach ?>
            <?php }else{ ?>
              <tr>
                <td colspan="4">
                  <strong>No se han agregado horarios a esta sucursal</strong>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      <?php endforeach; ?>
    </div>
	</div>
</div>



<script>
$(".delete").click(function(){
      var id = $(this).attr("alt");
      alertify.confirm("¿Seguro que deseas eliminar este registro",
      function(e){
        if(e){
      $.ajax({
        method:'get',
        url: 'http://www.jewelrypalace.site/Schedules/delete/' + id,
        success: function(){
          $("#row" + id).remove();
          alertify.success("Se ha <strong>eliminado</strong> el registro" + id);
        },
        error: function(){
          alertify.error("<strong>Ha ocurriod un error en la eliminación</strong>");
        }

      });
    }
  });
});
</script>
