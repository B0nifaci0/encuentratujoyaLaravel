<?php $__env->startSection('title'); ?>
LISTA TIENDAS
<?php $__env->stopSection(); ?>

<?php $__env->startSection('nav'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('menu'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<style>
      .mapa {
       height: 400px;
       width: 100%;
      }
   </style>
  <div class="panel-body">
	<?php if(session('mesage')): ?>
	<div class="alert alert-success">
				<strong><?php echo e(session('mesage')); ?></strong>
			</div>
		<?php endif; ?>
			<?php if(session('mesage-update')): ?>
	<div class="alert alert-warning">
				<strong><?php echo e(session('mesage-update')); ?></strong>
			</div>
		<?php endif; ?>
			<?php if(session('mesage-delete')): ?>
	<div class="alert alert-danger">
				<strong><?php echo e(session('mesage-delete')); ?></strong>
			</div>
		<?php endif; ?>
    <div class="panel panel-info panel-bordered" data-plugin="appear" data-animate="fade">
      <header class="panel-heading">
        <div class="panel-actions">
          <a href="/tiendas/create">
            <button class="btn-raised btn btn-primary btn-floating btn-sm" data-toggle="tooltip" data-original-title="Agregar">
            <i class="icon md-plus" aria-hidden="true"></i>
            </button>
          </a>
        </div>
        <h3 class="panel-title">Lista de Tiendas</h3>
      </header>
  <!-- Panel Filtering -->
  <div class="row">
	<div class="page-content">
		<div class="col-md-12 container-fluid">
		<table class="table table-bordered table-hover toggle-circle" id="exampleFootableFiltering">
			<thead>
						<tr>
							<th data-toggle="true">Nombre</th>
							<th data-hide="phone, tablet">Imagen</th>
							<th data-hide="phone, tablet">Description</th>
							<th data-hide="phone, tablet">pagina Web</th>
							<th data-hide="phone, tablet">Correo</th>
							<th data-hide="phone, tablet">Telefono</th>
							<th data-hide="phone, tablet">Opciones</th>
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
					<?php $__currentLoopData = $shops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr id = "row<?php echo e($shop->id); ?>">
							<td><?php echo e($shop->name); ?></td>
							<td>
								<?php 
									$route = asset("storage/upload/shops/$shop->image");
								 ?>
								<img width="120px" height="80px" src="<?php echo e($route); ?>">
							</td>
							<td><?php echo e($shop->description); ?></td>
							<td><?php echo e($shop->web_site); ?></td>
							<td><?php echo e($shop->email); ?></td>
							<td><?php echo e($shop->phone_number); ?></td>
							<td>
					<a href="tiendas/<?php echo e($shop->id); ?>"<button type="button" class="btn btn-xs btn-icon btn-default"><i class="icon md-search" aria-hidden="true"></i></button></a>
				<a href="/tiendas/<?php echo e($shop->id); ?>/edit"<button type="button" class="btn btn-xs btn-icon btn-info edit"><i class="icon md-edit" aria-hidden="true"></i></button></a>

				<button class="btn btn-xs btn-icon btn-danger delete" alt="<?php echo e($shop->id); ?>" role="button" href="#" id="confirmacion">
					<i class="icon md-delete" aria-hidden="true"></i>
				</button>
				</form>

				</td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
 </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('delshop'); ?>
<script type="text/javascript">
$(".delete").click(function() {
   var id = $(this).attr("alt");
   alertify.confirm("¿Seguro que desea eliminar este registro?",
     function (e) {
     if (e) {
       $.ajax({
         method: 'DELETE',
         url: '/tiendas/' + id,
         success: function(){
           $("#row" + id).remove();
           alertify.success("Se ha <strong>eliminado</strong> el registro" + id);
         },
         error: function(){
           alertify.error("<strong>Ha ocurrido un error en la eliminación</strong>");
         }
       });
     }
  });
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layoust', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>