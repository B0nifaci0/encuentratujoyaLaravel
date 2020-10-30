<?php $__env->startSection('title'); ?>
LISTA PROMOCIONES
<?php $__env->stopSection(); ?>

<?php $__env->startSection('nav'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('menu'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
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
          <a href="/promociones/create">
            <button class="btn-raised btn btn-primary btn-floating btn-sm" data-toggle="tooltip" data-original-title="Agregar">
            <i class="icon md-plus" aria-hidden="true"></i>
            </button>
          </a>
        </div>
        <h3 class="panel-title">Lista de Promociones</h3>
      </header>
  <!-- Panel Filtering -->
  <div class="row">
	<div class="page-content">
		<div class="col-md-12 container-fluid">
		<table class="table table-bordered table-hover toggle-circle" id="exampleFootableFiltering">
			<thead>
          <tr>
            <th data-toggle="true">Clave</th>
            <th data-hide="phone, tablet">Nombre</th>
            <th data-hide="phone, tablet">Descripción</th>
            <th data-hide="phone, tablet">Restricciónes</th>
            <th data-hide="phone, tablet">Imagen</th>
            <th data-hide="phone, tablet">Fecha de  Aspiración</th>
            <th data-hide="phone, tablet">Fecha de Expiracíon</th>
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
        <?php foreach ($promotions as $promotion): ?>
          <tr id="row<?= $promotion->id ?>">
            <td><?php echo e($promotion->id); ?></td>
            <td><?= $promotion->name ?></td>
            <td><?= $promotion->description ?></td>
            <td><?= $promotion->terms ?></td>
            <td>
            <?php 
								$image = route('images',"app/public/upload/promotions/$promotion->image");
							 ?>
							<img width="100px" height="100px" src="<?php echo e($image); ?>">
						</td>
            <td><?= $promotion->start_date ?></td>
            <td><?= $promotion->expirition_date ?></td>
            <th>
              <a href="/promociones/<?php echo e($promotion->id); ?>"<button type="button" class="btn btn-xs btn-icon btn-default"><i class="icon md-search" aria-hidden="true"></i></button></a>
              <a href="/promociones/<?php echo e($promotion->id); ?>/edit"<button type="button" class="btn btn-xs btn-icon btn-info edit"><i class="icon md-edit" aria-hidden="true"></i></button></a>


                        <!--<form class="" action="<?php echo e(route('promociones.destroy',['id' => $promotion->id])); ?>" method="POST">
                      <?php echo e(csrf_field()); ?>

                      <?php echo e(method_field('DELETE')); ?>

                    <button class="btn btn-xs btn-i">-->
              <button class="btn btn-xs btn-icon btn-danger delete" alt="<?php echo e($promotion->id); ?>" role="button">
                <i class="icon md-delete" aria-hidden="true"></i>
              </button>
              </form>
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

<?php $__env->stopSection(); ?>


<?php $__env->startSection('delpromotion'); ?>
<script type="text/javascript">
$(".delete").click(function() {
   var id = $(this).attr("alt");
   alertify.confirm("¿Seguro que desea eliminar este registro?",
     function (e) {
     if (e) {
       $.ajax({
         method: 'DELETE',
         url: '/promociones/' + id,
         success: function(){
           $("#row" + id).remove();
           alertify.success("Se ha <strong>desactivado</strong> el registro" + id);
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