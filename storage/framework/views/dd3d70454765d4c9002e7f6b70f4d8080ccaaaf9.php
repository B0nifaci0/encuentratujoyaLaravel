
<?php $__env->startSection('title'); ?>
LISTA DE PRODUCTOS
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
          <a href="/productos/create">
            <button class="btn-raised btn btn-primary btn-floating btn-sm" data-toggle="tooltip" data-original-title="Agregar">
            <i class="icon md-plus" aria-hidden="true"></i>
            </button>
          </a>
        </div>
        <h3 class="panel-title">Lista de Productos</h3>
      </header>
  <!-- Panel Filtering -->
  <div class="row">
  	<div class="page-content">
		 <div class="col-md-12 container-fluid">
		 <table class="table table-bordered table-hover toggle-circle" id="exampleFootableFiltering">
				<thead>
					<tr>
						<th data-toggle="true">clave</th>
						<th data-hide="phone, tablet">Nombre</th>
						<th data-hide="phone, tablet">Pureza</th>
						<th data-hide="phone, tablet">Peso</th>
						<th data-hide="phone, tablet">Precio</th>
						<th data-hide="phone, tablet">Imagen</th>
						<th data-hide="phone, tablet">Opciones</th>
					</tr>
				</thead>
				<div class="form-inline padding-bottom-15">
					<div class="row">
						<div class="col-sm-6">
              <div class="col-md-2">
                    <a href="<?php echo e(route('productossucursalreporte',$id)); ?>"><img height="50" width="50" src="<?php echo e(url('dashboard-assets/assets/images/icone.ico')); ?>" alt=""></a>

                    </div>
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
				<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr id="row<?php echo e($product->id); ?>">
						<td class=""><?php echo e($product->id); ?></td>
						<td><?php echo e($product->name); ?></td>
						<td><?php echo e($product->purity); ?></td>
						<td><?php echo e($product->weigth); ?></td>
						<td><?php echo e($product->price); ?></td>
						<td>
							<?php 
              $image = route('images',"app/public/upload/products/$product->image")
							 ?>
							<img width="100px" height="100px" src="<?php echo e($image); ?>">
						</td>
						<td>
              deedede
						  <a href="/productos/<?php echo e($product->id); ?>"<button type="button" class="btn btn-xs btn-icon btn-default"><i class="icon md-search" aria-hidden="true"></i></button></a>
                      <?php if($product->deleted_at != null): ?>
                      dededed
                      <button class="btn btn-xs btn-icon btn-success delete" alt="<?php echo e($product->id); ?>" role="button">Activar</button>
                        <?php else: ?>
                        ddeeddee
                        <button class="btn btn-xs btn-icon btn-danger delete" alt="<?php echo e($product->id); ?>" role="button">Desactivar</button>
                      <?php endif; ?>
                    </form>
                    </td>

								</div>

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
<?php $__env->startSection('delproduct'); ?>
<script type="text/javascript">
$(".delete").click(function() {
  var button = $(this);
   var id = $(this).attr("alt");
   alertify.confirm("¿Seguro que desea activar este registro?",
     function (e) {
     if (e) {
       if(!button.hasClass("btn-success")){
         $.ajax({
           method: 'DELETE',
           url: '/productos/' + id,
           success: function(){
             window.location = "/sucursales/<?php echo e($branches->id); ?>/producto";
             $("#row" + id).remove();
             alertify.success("Se ha <strong>desactivado</strong> el registro" + id);
           },
           error: function(){
             alertify.error("<strong>Ha ocurrido un error en la desactivacion</strong>");
           }
         });
       }else{
         $.ajax({
           method: 'get',
           url: '/productoAA/' + id,

           success: function(){
             window.location = "/sucursales/<?php echo e($branches->id); ?>/producto";
             $("#row" + id).remove();
             alertify.success("Se ha <strong>activado</strong> el registro" + id);
           },
           error: function(){
             alertify.error("<strong>Ha ocurrido un error en la activacion</strong>");
           }
         });
       }
     }
  });
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layoust', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>