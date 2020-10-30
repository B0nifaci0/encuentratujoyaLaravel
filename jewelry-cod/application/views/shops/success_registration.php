<!doctype html>
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <link rel="canonical" href="/" />
  <meta name="description" content="" />
  <title>Register Page</title>
  <link href="<?= URL ?>assets/stylesheets/font.css" rel='stylesheet' type='text/css'>

	<link href="<?= URL ?>assets/stylesheets/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= URL ?>assets/stylesheets/bootstrap.min.3x.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= URL ?>assets/stylesheets/cs.bootstrap.3x.css" rel="stylesheet" type="text/css" media="all">
	<link href="http://www.pineapple-softwar.mx/goldandsilver/assets/stylesheets/cs.animate.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= URL ?>assets/stylesheets/cs.global.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= URL ?>assets/stylesheets/cs.style.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= URL ?>assets/stylesheets/cs.media.3x.css" rel="stylesheet" type="text/css" media="all">

  	<script src="<?= URL ?>assets/javascripts/jquery-1.9.1.min.js" type="text/javascript"></script>
  	<script src="<?= URL ?>assets/javascripts/jquery.imagesloaded.min.js" type="text/javascript"></script>
  	<script src="<?= URL ?>assets/javascripts/bootstrap.min.3x.js" type="text/javascript"></script>

    <script src="<?= URL ?>assets/javascripts/jquery.camera.min.js" type="text/javascript"></script>
    <script src="<?= URL ?>assets/javascripts/jquery.easing.1.3.js" type="text/javascript"></script>
  	<script src="<?= URL ?>assets/javascripts/cookies.js" type="text/javascript"></script>
  	<script src="<?= URL ?>assets/javascripts/modernizr.js" type="text/javascript"></script>
  	<script src="<?= URL ?>assets/javascripts/application.js" type="text/javascript"></script>
  	<script src="<?= URL ?>assets/javascripts/jquery.owl.carousel.min.js" type="text/javascript"></script>
  	<script src="<?= URL ?>assets/javascripts/jquery.bxslider.js" type="text/javascript"></script>
  	<script src="<?= URL ?>assets/javascripts/skrollr.min.js" type="text/javascript"></script>
  	<script src="<?= URL ?>assets/javascripts/jquery.fancybox-buttons.js" type="text/javascript"></script>
  	<script src="<?= URL ?>assets/javascripts/jquery.zoom.js" type="text/javascript"></script>
  	<script src="<?= URL ?>assets/javascripts/cs.script.js" type="text/javascript"></script>


	<div id="content-wrapper-parent">
		<div id="content-wrapper">
			<!-- Content -->
			<div id="content" class="clearfix">
				<div id="breadcrumb" class="breadcrumb">
					<div itemprop="breadcrumb" class="container">
						<div class="row">
							<div class="col-md-24">
								<a href="/" class="homepage-link" title="Back to the frontpage">Inicio</a>
								<span>/</span>
								<span class="page-title">Crear cuenta</span>
							</div>
						</div>
					</div>
				</div>
				<section class="content">
					<div class="container">
						<div class="row">
							<div id="page-header" class="col-md-24">
								<h1 id="page-title">Registro</h1>
							</div>
							<div id="col-main" class="col-md-24 register-page clearfix">
                <div class="page-content container-fluid">
                  <form autocomplete="off" method="POST" action="<?= URL ?>shops/add" enctype="multipart/form-data">
                  <div class="panel">
                      <div class="panel-body container-fluid">
                        <center><h2>Registrarse como tienda</h2></center>
                        <?php if (validation_errors()): ?>
                          <div class="alert alert-danger">
                            <?= validation_errors(); ?>
                          </div>
                        <?php endif; ?>

                        <?php if (isset($error)): ?>
                          <div class="alert alert-danger">
                            <?= $error ?>
                          </div>
                        <?php endif; ?>

                        <div class='col-md-24'>
                             <div class="col-md-12 form-group">
                               <label class="control-label">Nombre del negocio: </label>
                               <input type="text" class="form-control" name="shop_name" value="<?= set_value('shop_name'); ?>" required="required" placeholder="El nombre de tu negocio" />
                             </div>
                            <div class="col-md-12 form-group">
                              <label class="control-label">Sitio web: </label>
                              <input type="text" class="form-control" name="web_site" value="<?= set_value('web_site') ?>" required="required" placeholder="www.ejemplo.com" />

                            </div>
                        </div>

                        <div class="col-md-24">
                          <div class="col-md-12 form-group">
                            <label class="floating-label">Descripcion: </label>
                            <textarea class="form-control"  rows="2" name="description"><?= set_value('description') ?></textarea>
                          </div>

                          <div class="col-md-12 form-group">
                            <label class="floating-label">Telefono: </label>
                            <input type="text" class="form-control" name="phone_number" value="<?= set_value('phone_number'); ?>" required="required" placeholder="El nombre de tu negocio" />
                          </div>
                        </div>
                      <div class="col-md-24">
                          <div class=" col-md-12 example-wrap">
                            <label>Ingresa Imagen de tu Tienda.</label>
                                <input type="file" name="image" data-plugin="dropify" data-default-file="">
                          </div>
                        </div>

                        <div class="row">
                            <center><h3 class="panel-title">Informacion del Usuario</h3></center>
                        </div>

                          <div class="panel-body">
                            <div class='col-md-24'>
                              <div class="col-md-12 form-group">
                                <label class="floating-label">Nickname: </label>
                                <input type="text" class="form-control" name="username" value="<?= set_value('username') ?>" required="required" placeholder="Admin" />
                              </div>
                              <div class="col-md-12 form-group">
                                <label class="floating-label">Nombre real del usuario: </label>
                                <input type="text" class="form-control" name="name" value="<?= set_value('name') ?>" required="required" placeholder="Admin" />
                              </div>
                              <div class="col-md-12 form-group">
                                <label class="floating-label">Correo electronico : </label>
                                <input type="text" class="form-control" name="email" value="<?= set_value('email') ?>" required="required" placeholder="ejemplo@gmail.com" />
                              </div>
                            </div>
                            <div class='col-md-24'>
                              <div class="col-md-12 margin-bottom">
                                <label class="floating-label">Contraseña: </label>
                                <input type="password" class="form-control" name="password" required="required" placeholder="********" />
                              </div>
                            <div class="col-md-12 margin-bottom">
                              <label class="floating-label">Confirmar contraseña: </label>
                              <input type="password" class="form-control" name="password_confirm" required="required" placeholder="********" />
                            </div>
                            </div>
                          </div>
                          <div class="col-md-12 form-group">
                              <button id="ok" type="submit" class="btn btn-info">Guardar</button>
                          </div>
                        </div>
                        </div>

                      </div>
                  </div>
                  </form>
                  </div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>

	<footer id="footer">
		<div id="footer-content">
			<h6 class="general-title contact-footer-title">Newsletter</h6>
			<div id="widget-newsletter">
				<div class="container">
				  <div class="newsletter col-md-24">
					<form action="http://codespot.us5.list-manage.com/subscribe/post?u=ed73bc2d2f8ae97778246702e&id=c63b4d644d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
					  <span class="news-desc">We promise only send the good things</span>
					  <div class="group_input">
						<input class="form-control" type="email" placeholder="Your Email Address" name="Email" id="email-input">
						<div class="unpadding-top"><button class="btn btn-1" type="submit"><i class="fa fa-paper-plane"></i></button></div>
					  </div>
					</form>
				  </div>
				</div>
			</div>
				</div>
			</div>
		</div>
	</footer>
</body>
