<div class="page-content">
  <div class="panel">
    <div class="panel-body">
      <h4>
        <a href="http://www.jewelrypalace.site/users/add">
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
            <th>Correo</th>
            <th>Contraseña</th>
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
        <?php foreach ($users as $user): ?>
          <tr id = "row<?= $user->id_user?>">
            <td><?= $user->id_user ?></td>
            <td><?= $user->username ?></td>
            <td><?= $user->email ?></td>
            <td><?= md5($user->password) ?></td>
            <th>
                    <a href=""<button type="button" class="btn btn-xs btn-icon btn-default"><i class="icon md-search" aria-hidden="true"></i></button></a>
                    <a href="http://www.jewelrypalace.site/users/edit/<?= $user->id_user ?>"<button type="button" class="btn btn-xs btn-icon btn-info edit"><i class="icon md-edit" aria-hidden="true"></i></button></a>
                    <button class="btn btn-xs btn-icon btn-danger delete" alt="<?= $user->id_user ?>" role="button">
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
