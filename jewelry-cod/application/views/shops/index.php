<div class="page-content">
	<div class="panel">
		<div class="panel-body">
			<h4>
			<a href="http://www.jewelrypalace.site/shops/add">
					Agregar <button class="btn-raised btn btn-primary btn-floating btn-sm" data-toggle="tooltip" data-original-title="Agregar">
					<i class="icon md-plus" aria-hidden="true"></i>
					</button>
				</a>
			</h4>
			<table class="table table-bordered table-hover toggle-circle tabla-bonny" id="exampleFootableFiltering">
				<thead>
					<tr>
						<th>Imagen</th>
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
				<?php foreach ($shops as $shop): ?>
					<tr id = "row<?= $shop->id_shop?>">
						<td>
							<img width="80px" height="80px" src="<?= URL ?>assets/images/shops/<?= $shop->image ?>">
						</td>
						<td><?= $shop->name ?></td>
						<td>
            	<a href="<?= URL ?>shops/show/<?= $shop->id_shop ?>"<button type="button" class="btn btn-xs btn-icon btn-default"><i class="icon md-search" aria-hidden="true"></i></button></a>
              <a href="<?= URL ?>shops/edit/<?= $this->session->userdata('logged_in')['id_user'] ?>"<button type="button" class="btn btn-xs btn-icon btn-info edit"><i class="icon md-edit" aria-hidden="true"></i></button></a>
              <button class="btn btn-xs btn-icon btn-danger delete" alt="<?= $shop->id_shop ?>" role="button" href="#" id="confirmacion">
                <i class="icon md-delete" aria-hidden="true"></i>
              </button>
            </td>
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
	var id= $(this).attr("alt");
	alertify.confirm("Seguro que quieres eliminar el registro?",
	function(e){
		if(e){
	$.ajax({
		method:'get',
		url: 'http://www.jewelrypalace.site/shops/delete/' + id,
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
