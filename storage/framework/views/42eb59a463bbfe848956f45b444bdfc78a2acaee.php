
<?php $__env->startSection('title'); ?>
LISTA TIENDAS
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
          <a href="/tiendas/create">
            <button class="btn-raised btn btn-primary btn-floating btn-sm" data-toggle="tooltip" data-original-title="Agregar">
            <i class="icon md-plus" aria-hidden="true"></i>
            </button>
          </a>
        </div>
        <h3 class="panel-title">Lista de Uusiarios</h3>
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
            <th data-hide="phone, tablet">Nombre De Usuario </th>
            <th data-hide="phone, tablet">Correo</th>
            <!--<th data-hide="phone, tablet">Contraseña</th>-->
            <th data-hide="phone, tablet">Tipo de Usuario</th>
            <th data-hide="phone, tablet">Tipo de Suscripción</th>
            <th data-hide="phone, tablet">Activo</th>
            <!--<th data-hide="phone, tablet">Token</th>-->
            <th data-hide="phone, tablet">Fecha Crear</th>
            <th data-hide="phone, tablet">Actualizar</th>
            <th data-hide="phone, tablet">Opciones</th>
						</tr>
					</thead>
					<div class="form-inline padding-bottom-15">
						<div class="row">
              <div class="col-md-16">
              <div class="col-md-2">
                    <a href="/usuariosexcel"><img height="50" width="50" src="<?php echo e(url('dashboard-assets/assets/images/icone.ico')); ?>" alt=""></a>
                    </div>
							<div class="col-md-4">
								<div class="form-group">
									<select id="filteringStatus" class="form-control">
                    <option value="">Todos</option>
                        <option value="activo">Activo</option>
                        <option value="inactivo">Desactivado</option>
									</select>
								</div>
							</div>
              <div class="col-md-3 col-md-offset-3 text-right">
               <div class="form-group">
                 <input id="filteringSearch" type="text" placeholder="Busqueda" class="form-control"
            autocomplete="off">
        </div>
        </div>
                </div>



						</div>
					</div>
					<tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i=> $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr  class= "<?php echo e(($user->deleted_at == null) ? 'active' : 'disable'); ?>" id="row <?php echo e($user->id); ?>">
                <td><?php echo e($user->id); ?></td>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->username); ?></td>
                <td><?php echo e($user->email); ?></td>
                <!--<td class=''><?php echo e($user->password); ?></td>-->

                  <?php if($user->type_user ==0): ?>
                  <td><span class="label label-info">Comprador</span></td>
                <?php else: ?>
                  <td><span class="label label-primary">Emprendedor</span></td>
                <?php endif; ?>

                 <?php if($user->suscription_type ==0): ?>
                  <td><span class="label label-info">Gratis</span>
                  </td>
                <?php else: ?>
                  <td><span class="label label-primary">Premium</span></td>
                <?php endif; ?>

                <td>
                 <?php if($user->deleted_at != null): ?>
                  <span class="label label-danger">Desactivado</span>
                <?php else: ?>
                  <span class="label label-primary">Activado</span>
                <?php endif; ?>
                </td>

                <!--<td><?php echo e($user->remember_token); ?></td>-->
                <td><?php echo e($user->created_at); ?></td>
                <td><?php echo e($user->updated_at); ?></td>
                <td>
                        <a href="/usuarios/<?php echo e($user->id); ?>"><button type="button" class="btn btn-xs btn-icon btn-default">ver</button></a>
                        <!--<a href="/usuarios/<?php echo e($user->id); ?>/edit"<button type="button" class="btn btn-xs btn-icon btn-info edit">Activo</button></a>-->
                        <?php if($user->deleted_at != null): ?>
                        <button class="btn btn-xs btn-icon btn-success delete" alt="<?php echo e($user->id); ?>" role="button">Activar</button>
                          <?php else: ?>
                          <button class="btn btn-xs btn-icon btn-danger delete" alt="<?php echo e($user->id); ?>" role="button">Desactivar</button>
                        <?php endif; ?>
                      </form>
                      </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="10">
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

<?php $__env->startSection('filter'); ?>
<script>
$(document).ready(function(){
  $('#filteringStatus').change(function(){
    //alert($(this).val())
    if($(this).val()==''){
        $('.active').each(function(){
            $(this).removeClass('hidden')
        });
        $('.disable').each(function(){
            $(this).removeClass('hidden')
        });
    }else if($(this).val()=='activo'){
        $('.active').each(function(){
            $(this).removeClass('hidden')
        });
        $('.disable').each(function(){
            $(this).addClass('hidden')
        });
    }else{
        $('.disable').each(function(){
            $(this).removeClass('hidden')
        });
        $('.active').each(function(){
            $(this).addClass('hidden')
        });
    }
  });
});
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('delshop'); ?>
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
           url: '/usuarios/' + id,
           success: function(){
             window.location = "/usuarios";
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
           url: '/usuarios/activo/' + id,

           success: function(){
             window.location = "/usuarios";
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