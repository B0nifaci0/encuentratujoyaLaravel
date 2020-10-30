<?php $__env->startSection('title'); ?>
SUCURSAl
<?php $__env->stopSection(); ?>

<?php $__env->startSection('nav'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('menu'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="page-content">
  <div class="panel panel-info panel-bordered" data-plugin="appear" data-animate="fade">
    <header class="panel-heading">
      <div class="panel-actions">
        <a href="/tiendas/<?php echo e($shop->id); ?>/edit">
          <button class="btn-raised btn btn-primary btn-floating btn-sm" data-toggle="tooltip" data-original-title="Editar">
            <i class="icon md-edit" aria-hidden="true"></i>
          </button>
        </a>
      </div>
      <h3 class="panel-title">Tiendas</h3>
    </header>
      <div class="table-responsive container-fluid">
				<div class="panel-body">
			    <table class="table table-hover">
						<tbody>
								<tr>
									<td> <strong>Nombre</strong></td>
									<td><?php echo e($shop->name); ?></td>
								</tr>
								<tr>
									<td> <strong>Telefono</strong></td>
									<td><?php echo e($shop->phone_number); ?></td>
								</tr>
                	<tr>
									<td> <strong>Imagen</strong></td>
                  	<?php 
									$route = asset("storage/upload/shops/$shop->image");
								 ?>
                  	<td><img width="120px" height="80px" src="<?php echo e($route); ?>">
                      <a><img src="<?php echo e(url('storage/upload/shops/$shop->image')); ?>" alt=""></a>

                    </td>
								</tr>
								<tr>
									<td> <strong>Pagina web</strong></td>
									<td><?php echo e($shop->web_site); ?></td>
								</tr>
                	<tr>
									<td> <strong>Descripción</strong></td>
									<td><?php echo e($shop->description); ?></td>
                  	<tr>
									<td> <strong>Correo electronico</strong></td>
									<td><?php echo e($shop->email); ?></td>
								</tr>
                	<tr>

								</tr>
								</tr>
						</tbody>
					</table>
				</div>
      </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layoust', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>