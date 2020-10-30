<div class="page-content">
	<div class="panel">
		<div class="panel-body">
			<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success">
					<?= $this->session->flashdata('success') ?>
				</div>
			<?php endif; ?>
			<h4>
			<a href="http://www.jewelrypalace.site/productsManager/add">
					Agregar <button class="btn-raised btn btn-primary btn-floating btn-sm" data-toggle="tooltip" data-original-title="Agregar">
					<i class="icon md-plus" aria-hidden="true"></i>
					</button>
				</a>
			</h4>
			<table class="table table-bordered table-hover toggle-circle tabla-bonny" id="exampleFootableFiltering">
				<thead>
					<tr>
						<th>Nombre</th>
						<!--<th>Descripcion</th>-->
						<th>Pureza</th>
						<th>Peso</th>
						<th>Precio</th>
						<th>Imagen</th>
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
				<?php foreach ($products as $product): ?>
					<tr id="row<?= $product->id_product ?>">
						<td><?= $product->name ?></td>
						<!--<td><?= $product->description ?></td>-->
						<td><?= $product->purity ?></td>
						<td><?= $product->weight ?></td>
						<td><?= $product->price ?></td>
						<th>
							<img width="100px" height="100px" src="<?= URL ?>assets/images/productos/<?= $product->image ?>">
						</th>
						<th>
							<div class="col-md-6">
									<div class="col-md-2">
										<a href=""<button type="button" class="btn btn-xs btn-icon btn-default view"><i class="icon md-search" aria-hidden="true"></i></button></a>
									</div>
									<div class="col-md-2">
										<a href="http://www.jewelrypalace.site/productsManager/edit/<?= $product->id_product?>"<button type="button" class="btn btn-xs btn-icon btn-info edit"><i class="icon md-edit" aria-hidden="true"></i></button></a>
										</div>
									<div class="col-md-2">
										<button class="btn btn-xs btn-icon btn-danger delete" alt="<?= $product->id_product ?>" role="button" href="#" id="confirmacion">
												<i class="icon md-delete" aria-hidden="true"></i>
										</button>
										</div>
								</div>
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

<script type="text/javascript">
$(".delete").click(function() {
   var id = $(this).attr("alt");
   alertify.confirm("¿Seguro que desea eliminar este registro?",
     function (e) {
     if (e) {
       $.ajax({
         method: 'get',
         url: 'http://www.jewelrypalace.site/productsManager/delete/' + id,
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
