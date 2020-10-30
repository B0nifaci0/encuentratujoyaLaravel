@extends('layout.layoutspage')
@section('title')
INICIO
@endsection
@section('menu')
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
