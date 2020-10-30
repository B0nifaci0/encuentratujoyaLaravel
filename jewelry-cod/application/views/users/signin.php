<!doctype html>
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <link rel="canonical" href="/" />
  <meta name="description" content="" />
  <title>Registro</title>
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
                <div class="row">
                  <?php if (validation_errors()): ?>
                    <div class="alert alert-danger">
                      <?= validation_errors(); ?>
                    </div>
                  <?php endif; ?>
                </div>
								<form method="post" action="/users/signin" id="create_customer" accept-charset="UTF-8">
									<input name="form_type" type="hidden"><input name="utf8" value="✓" type="hidden">
									<ul id="register-form" class="row list-unstyled">
										<label class="control-label" for="first_name">Nombre:<span class="req">*</span></label>
										<input name="name" id="name" class="form-control" type="text"
                      value="<?= set_value('name') ?>" required>
										</li>
                    <!--<li class="">
                    <label class="control-label" for="username">Username:<span class="req">*</span></label>
                    <input name="username" class="form-control" type="text"
                      value="<?= set_value('username') ?>" required>
                    </li>-->
                    <li id="emailf" class="">
                    <label class="control-label" for="email">Correo electronico:<span class="req">*</span></label>
                    <input name="email" id="email" class="form-control" type="email"
                      value="<?= set_value('email') ?>" required>
                    </li>
										<li class="clearfix"></li>
										<li id="passwordf" class="">
										<label class="control-label" for="password">Contraseña: <span class="req">*</span></label>
										<input name="password" id="password" class="form-control password" type="password" required>
										</li>
                    <li id="passwordf" class="">
                    <label class="control-label" for="password">Confirmar contraseña: <span class="req">*</span></label>
                    <input name="password_confirmation" id="password_confirmation" class="form-control password" type="password" required>
                    </li>
										<li class="clearfix"></li>
										<li class="unpadding-top action-last">
										<button class="btn" type="submit">Crear cuenta</button>
										</li>
									</ul>
								</form>
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
					  <span class="news-desc">Envianos un correo para cualquier duda o sugerencia</span>
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
