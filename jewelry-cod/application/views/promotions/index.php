<div class="page-content">
  <div class="panel">
    <div class="panel-body">
      <h4>
        <a href="http://www.jewelrypalace.site/promotions/add">
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
            <th>Descripción</th>
            <th>Restricciónes</th>
            <th>Imagen</th>
            <th>Fecha de  Aspiración</th>
            <th>Fecha de Expiracíon</th>
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
        <?php foreach ($promotions as $promotion): ?>
          <tr id="row<?= $promotion->id_promotion ?>">
            <td><?= $promotion->id_promotion ?></td>
            <td><?= $promotion->name ?></td>
            <td><?= $promotion->description ?></td>
            <td><?= $promotion->terms ?></td>
            <td><img width="80px" height="80px" src="<?= URL ?>assets/images/productos/<?= $promotion->image ?>"></td>
            <td><?= $promotion->start_date ?></td>
            <td><?= $promotion->expiration_date ?></td>
            <th>
              <!--<a href=""<button type="button" class="btn btn-xs btn-icon btn-default"><i class="icon md-search" aria-hidden="true"></i></button></a>-->
              <a href="http://www.jewelrypalace.site/promotions/edit/<?= $promotion->id_promotion ?>"<button type="button" class="btn btn-xs btn-icon btn-info edit"><i class="icon md-edit" aria-hidden="true"></i></button></a>
              <button class="btn btn-xs btn-icon btn-danger delete" alt="<?= $promotion->id_promotion ?>" role="button">
                <i class="icon md-delete" aria-hidden="true"></i>
              </button>
            </th>
          </tr>
        <?php endforeach ?>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="8">
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
$(".delete").click(function() {
   var id = $(this).attr("alt");
   alertify.confirm("¿Seguro que desea eliminar este registro?",
     function (e) {
     if (e) {
       $.ajax({
         method: 'get',
         url: 'http://www.jewelrypalace.site/promotions/delete/' + id,
         success: function(){
           $("#row" + id).remove();
           alertify.success("Se ha <strong>eliminado</strong> el registro " + id);
         },
         error: function(){
           alertify.error("<strong>Ha ocurrido un error en la eliminación</strong>");
         }
       });
     }
  });
});
</script>
