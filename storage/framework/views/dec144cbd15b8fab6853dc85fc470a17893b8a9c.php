
<?php $__env->startSection('title'); ?>
USUARIOS
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
<div class="page-content">
  <div class="panel panel-info panel-bordered" data-plugin="appear" data-animate="fade">
    <header class="panel-heading">
      <div class="panel-actions">
        <a href="/usuarios/<?php echo e($users->id); ?>/edit">
          <button class="btn-raised btn btn-primary btn-floating btn-sm" data-toggle="tooltip" data-original-title="Editar">
            <i class="icon md-edit" aria-hidden="true"></i>
          </button>
        </a>
      </div>
      <h3 class="panel-title">USUARIOS</h3>
    </header>
    <body  class="animsition">

      <div class="table-responsive container-fluid">
				<div class="panel-body">
			    <table class="table table-hover">
						<tbody>
                <tr>
									<td> <strong>Nombre</strong></td>
									<td><?php echo e($users->name); ?></td>
								</tr>
								<tr>
									<td> <strong>Correo</strong></td>
									<td><?php echo e($users->email); ?></td>
								</tr>


							    <?php if($users->type_user ==0): ?>
                  <tr>
                  <td> <strong>Tipo de Cuenta</strong></td>
                  <td><span class="label label-info">Comprador</span></td>
                </tr>
                <?php else: ?>
                <tr>
                  <td> <strong>Tipo de Cuenta</strong></td>
                  <td><span class="label label-primary">Emprendedor</span></td>
                <?php endif; ?>
              </tr>

                 <?php if($users->suscription_type ==0): ?>
                 <tr>
                   <td> <strong>Tipo de Suscripción</strong></td>
                    <td><span class="label label-info">Gratis</span>
                  </td>
                </tr>
                <?php else: ?>
                <tr>
                  <td> <strong>Tipo de Suscripción</strong></td>
                  <td><span class="label label-primary">Premium</span></td>
                  </tr>
                <?php endif; ?>
                 <?php if($users->deleted_at != null): ?>
                 <tr>
                   <td> <strong>Estado</strong></td>
                  <td><span class="label label-danger">Desactivado</span></td>
                </tr>
                <?php else: ?>
                <tr>
                  <td> <strong>Estado</strong></td>
                  <td><span class="label label-primary">Activado</span></td>
                </tr>
                <?php endif; ?>
                	<tr>
                    <td> <strong>Fecha Creada</strong></td>
                    <td><?php echo e($users->created_at); ?></td>
								</tr>
                <tr>
                  <td> <strong>Fecha de Actualizacíon</strong></td>
                    <td><?php echo e($users->updated_at); ?></td>
              </tr>
              <tr>
                <td> <strong>Contraseña</strong></td>
                <td><?php echo e($users->password); ?></td>

            </tr>

						</tbody>
					</table>
				</div>

      </div>
  </div>
  <!-- Appear Animate -->
  <div class="row">
    <div class="col-12">
      <h3 class="example-title">Appear Animate
        <small><a class="example-plugin-link" href="https://github.com/morr/jquery.appear"
          target="_blank">official website</a></small>
      </h3>
      <div class="row">
        <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-4">
          <div class="panel responsive panel-info panel-bordered" data-plugin="appear" data-animate="scale-down">
            <div class="panel-heading">
              <h3 class="panel-title">SUCURSAL</h3>
            </div>
            <div class="panel-body">
              <table><tr>
                <td>NOMBRE:<?php echo e($branch->name); ?></td>
              </tr>
                <tr>
                  <td>DIRECCIÓN:<?php echo e($branch->address); ?></td>

                </tr>
                <tr>
                  <td>TELEFONO::<?php echo e($branch->phone_number); ?></td>

                </tr>
              <tr>
                <td>DIRECCIÓN:<?php echo e($branch->address); ?></td>
              </tr>
                <!--<div class="row">
                  <div class="container-fluid col-xs-6 col-sm-3">

                <iframe id="map" src = "https://maps.google.com/maps?q=<?php echo e($branch->latitude); ?>,<?php echo e($branch->longitude); ?>&hl=es;z=14&amp;output=embed" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

              </div>-->
              <div id="map<?php echo e($i); ?>"  class="mapa" lat="<?php echo e($branch->latitude); ?>" lng="<?php echo e($branch->longitude); ?>"></div>

              <div class="row">
                <div class="col-md-3 col-md-offset-6">
                    <a href="/sucursales/<?php echo e($branch->id); ?>/producto"><button type="button" class="btn btn-success" name="button">Productos</button></a>
                </div>
              </div>
              </table>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div>
    </div>
  </div>
  <!-- End Appear Animate -->
</div>
<?php $__env->startSection('map3'); ?>
<script type="text/javascript">
function initMap(latitude, longitude, id) {
  console.log(latitude + "  " + longitude + "---" + id);

  var uluru = {lat: parseFloat(latitude), lng: parseFloat(longitude)};
  var map = new google.maps.Map(document.getElementById(id), {
    zoom: 16,
    center: uluru
  });

  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });

}
function def(){
  $('.mapa').each(function(i){
    var lat = $(this).attr("lat");
    var lng = $(this).attr("lng");
    var id = $(this).attr("id");
    console.log(i);
    console.log(id);

     initMap(lat, lng, id);
  });
}


</script>
<script async defer  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6eAu2eRTNpy8-5jmeTqgDFxALyGlZre0&callback=def"></script>

<?php $__env->stopSection(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layoust', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>