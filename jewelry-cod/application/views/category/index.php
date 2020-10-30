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
      <h4>
        <a href="http://www.jewelrypalace.site/Categories/add">
          Agregar <button class="btn-raised btn btn-primary btn-floating btn-sm" data-toggle="tooltip" data-original-title="Agregar">
          <i class="icon md-plus" aria-hidden="true"></i>
          </button>
        </a>
      </h4>
      <table class="table table-bordered table-hover toggle-circle" id="exampleFootableFiltering">
        <thead>
          <tr>
            <th>Clave</th>
            <th>Nombre</th>
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
            <div class="col-sm-6 text-right">
              <div class="form-group">
                <input id="filteringSearch" type="text" placeholder="Busqueda" class="form-control"
                  autocomplete="off">
              </div>
            </div>
          </div> 
        </div>
        <tbody>
        <?php foreach ($categories as $categori): ?>
          <tr id = "row<?= $categori->id_category?>">
            <td><?= $categori->id_category ?></td>
            <td><?= $categori->name ?></td>
            <th>
              <!--
              <a href=""<button type="button" class="btn btn-xs btn-icon btn-default"><i class="icon md-search" aria-hidden="true"></i></button></a>
              -->
              <a href="http://www.jewelrypalace.site/categories/edit/<?= $categori->id_category ?>"<button type="button" class="btn btn-xs btn-icon btn-info edit"><i class="icon md-edit" aria-hidden="true"></i></button></a>
              <button class="btn btn-xs btn-icon btn-danger delete" alt="<?= $categori->id_category ?>" role="button">
                  <i class="icon md-delete" aria-hidden="true"></i>
              </button>
            </th>
          </tr>
        <?php endforeach ?>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="7">
              <div class="text-right">
                <ul class="pagination"></ul>
              </div>
            </td>
          </tr>
        </tfoot>
      </table>
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
        url: 'http://www.jewelrypalace.site/users/delete/' + id,
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
