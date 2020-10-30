<?php $__env->startSection('title'); ?>
LISTA DE  CATEGORIA
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
          <a href="/categorias/create">
            <button class="btn-raised btn btn-primary btn-floating btn-sm" data-toggle="tooltip" data-original-title="Agregar">
            <i class="icon md-plus" aria-hidden="true"></i>
            </button>
          </a>
        </div>
        <h3 class="panel-title">Lista de Categorias</h3>
      </header>
  <!-- Panel Filtering -->
  <div class="row">
  <div class="page-content">
      <div class="col-md-12 container-fluid">
      <table class="table table-bordered table-hover toggle-circle" id="exampleFootableFiltering">
        <thead>
        <thead>
          <tr>
            <th data-toggle="true">Clave</th>
            <th data-hide="phone, tablet">Nombre</th>
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
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr id = "row<?php echo e($category->id); ?>">
            <td><?php echo e($category->id); ?></td>
            <td><?php echo e($category->name); ?></td>
            <td>

                    <a href="/categorias/<?php echo e($category->id); ?>"<button type="button" class="btn btn-xs btn-icon btn-default"><i class="icon md-search" aria-hidden="true"></i></button></a>
                  
                  
                     <a href="/categorias/<?php echo e($category->id); ?>/edit"<button type="button" class="btn btn-xs btn-icon btn-info edit"><i class="icon md-edit" aria-hidden="true"></i></button></a>

                  
                  
                        <!--<form class="" action="<?php echo e(route('categorias.destroy',['id' => $category->id])); ?>" method="post">
                      <?php echo e(csrf_field()); ?>

                      <?php echo e(method_field('DELETE')); ?>-->
                    <button class="btn btn-xs btn-icon btn-danger delete" alt="<?php echo e($category->id); ?>" role="button">
                        <i class="icon md-delete" aria-hidden="true"></i>
                    </button>
                  </div>
              </div>    
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('delcategory'); ?>
<script type="text/javascript">
$(".delete").click(function() {
   var id = $(this).attr("alt");
   alertify.confirm("¿Seguro que desea eliminar este registro?",
     function (e) {
     if (e) {
       $.ajaxSetup({
         method: 'DELETE',
         url: '/categorias/' + id,
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