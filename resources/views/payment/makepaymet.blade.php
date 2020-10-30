@extends('layout.layoutspage')
@section('title')
@endsection

@section('menu')

	<!-- Header -->
	<header id="top" class="clearfix">
		<!--top-->

		<div class="line"></div>
		<!-- Navigation -->
		<div class="container">
			<div class="top-navigation">
				<ul class="list-inline">
					<li class="top-logo">
						<a id="site-title" href="./index.html" title="Jewelry - HTML Template theme">
						<img class="img-responsive" src="{{{ url('dashboard-assets/assets/images/logo.png')}}}" alt="Jewelry - HTML Template theme">
						</a>
					</li>
					<li class="navigation">
						<nav class="navbar">
							<div class="clearfix">

								<div class="is-mobile visible-xs">
									<ul class="list-inline">
										<li class="is-mobile-menu">
										<div class="btn-navbar" data-toggle="collapse" data-target=".navbar-collapse">
											<span class="icon-bar-group">
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											</span>
										</div>
										</li>
										<li class="is-mobile-login">
										<div class="btn-group">
											<div class="dropdown-toggle" data-toggle="dropdown">
												<i class="fa fa-user"></i>
											</div>

										</div>
										</li>
										<li class="is-mobile-wl">
										<a href="#"><i class="fa fa-heart"></i></a>
										</li>
										<li class="is-mobile-cart">
										<a href="#"><i class="fa fa-shopping-cart"></i></a>
										</li>
									</ul>
								</div>
								<div class="collapse navbar-collapse">
									<ul class="nav navbar-nav hoverMenuWrapper">
										<li class="nav-item active">
										<a href="/productos">
										<span>Sistema</span>
										</a>
										</li>




										</li>


									</ul>
								</div>
							</div>
						</nav>
					</li>


				</ul>
			</div>
			<!--End Navigation-->
      @endsection
      @section('content')

<head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<div class="container">
  <h2>REALIZAR PAGO</h2>
<a href="/productos">Regresar al Sistema</a>
<!--
  <ul class="nav nav-tabs">
     <li class="active"><a data-toggle="tab" href="#menu2">Pagar</a></li>
    <li><a data-toggle="tab" href="#menu3">Informe de Pago</a></li>
  </ul>

  <div class="tab-content">
    <div id="menu2"  class="tab-pane fade in active">
      <h3>REALIZAR PAGO</h3>

      <div class="col-md-6 form-group">
        <label class="floating-label">NOMBRE: </label>
        <input type="text" class="form-control" name="nombre" value="" required="required" placeholder="Admin" />
      </div>

      <div class="col-md-6 margin-bottom">
        <label class="floating-label">Apellidos: </label>
        <input type="password" class="form-control" name="sur-name" required="required" placeholder="********" />
      </div>
      <div class="col-md-6 form-group">
            <select class="" name="">
            <option value="">Master Card</option>
            <option value="">Visa</option>
            <option value="">Paypal</option>
            </select>
      </div>

      <div class="col-md-6 form-group">
        <label class="floating-label">Numero de Tarjeta: </label>
        <input type="text" class="form-control" name="carcreditc" value="" required="required" placeholder="Admin" />
      </div>

      <div class="col-md-6 margin-bottom">
        <label class="floating-label">Numero de Seguridad: </label>
        <input type="password" class="form-control" name="id" required="required" placeholder="********" />
      </div>


      <div class="col-md-12 form-group">
          <button id="ok" type="submit" class="btn btn-info">Guardar</button>
        </div>



    </div>



    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
        confirmar datos
      </div>
  </div>
</div>-->



	<!-- Content -->
		<section class="content">
			@if (session('mesage'))
			<div class="alert alert-success">
						<strong>{{ session('mesage') }}</strong>
					</div>
				@endif
					@if (session('mesage-update'))
			<div class="alert alert-warning">
						<strong>{{ session('mesage-error') }}</strong>
					</div>
				@endif
			<div class="container">
				<div class="row">
					<div id="page-header">
					</div>
					<div id="col-main" class="col-md-21 col-md-offset-2 normal-page clearfix">
						<div class="page ">
							<ul id="price-table">
								<li class="pt-item starter">
								<div class="pt-item-top">
									<h2 class="pt-item-title">Gratis</h2>
									<span class="pt-item-price">$0<span class="pt-item-small">Monto</span></span>

										<!--
										<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="MHE2Z5J5QA9RS">
				<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
				<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
			</form>-->

								<div class="pt-item-bottom">
									<ul class="pt-item-description">
										<li>Panel de Administración </li>
										<li>Incluye Anuncios</li>
										<li>Maximo 50 Productos</li>
										<li>Sucursales Ilimitadas</li>
										<li>incluye 3 meses gratis.</li>

									</ul>
								</div>
								</li>
								<li class="pt-item regular best-choice">
								<div class="pt-item-label">
									CUENTA Ilimitada
								</div>
								<div class="pt-item-top">
									<h2 class="pt-item-title">Premium</h2>
									<span class="pt-item-price">$100<span class="pt-item-small">monto</span></span>

									<form class="" action="/pagos" method="get">
										<button class="btn btn-large" type="submit">PAGAR</button>
									 </form>										<!--<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
										<input type="hidden" name="cmd" value="_s-xclick">
										<input type="hidden" name="hosted_button_id" value="4JF8SPK9U325W">
										<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
										<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
									</form>-->
								</div>
								<div class="pt-item-bottom">
									<ul class="pt-item-description">
										<li>Alta de Productos Ilimitados</li>
										<li>Alta de Promociones.</li>
										<li>Soporte Telefonico</li>
										<li>Pocision de Productos</li>
										<li>No incluye Publicidad</li>
										<li>Tus productos seran los primeros resultados</li>

									</ul>
								</div>
								</li>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

					<footer id="footer">
							<div id="footer-content">
								<h6 class="general-title contact-footer-title">MUCHAS GRACIAS  JEWERLY PALACE TE ESPERA PRONTO!!!</h6>
								<div id="widget-newsletter">
									<div class="container">
										<div class="newsletter col-md-24">
										</div>
									</div>
								</div>
								</div>
								</div>
	<div class="footer-content footer-content-bottom clearfix">
		<div class="container">
			<div class="copyright col-md-12">
				© 2016 <a href="./about-us.html">Jewelry</a>. Derechos reservados Jewelry.
			</div>
			<div id="widget-payment" class="col-md-12">
				<ul id="payments" class="list-inline animated">
					<li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="" data-original-title="Visa"><a href="#" class="icons visa"></a></li>
					<li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mastercard"><a href="#" class="icons mastercard"></a></li>
					<li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="" data-original-title="American Express"><a href="#" class="icons amex"></a></li>
					<li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="" data-original-title="Paypal"><a href="#" class="icons paypal"></a></li>
					<li class="btooltip tada" data-toggle="tooltip" data-placement="top" title="" data-original-title="Moneybookers"><a href="#;" class="icons moneybookers"></a></li>
				</ul>
			</div>
		</div>
	</div>

</footer>

<div class="newsletter-popup" style="display: none;">
<form action="http://codespot.us5.list-manage.com/subscribe/post?u=ed73bc2d2f8ae97778246702e&amp;id=c63b4d644d" method="post" name="mc-embedded-subscribe-form" target="_blank">
	<h4>-50% Deal</h4>
	<p class="tagline">
		subscribe for newsletter and get the item for 50% off
	</p>
	<div class="group_input">
		<input class="form-control" type="email" name="EMAIL" placeholder="YOUR EMAIL">
		<button class="btn" type="submit"><i class="fa fa-paper-plane"></i></button>
	</div>
</form>
<div id="popup-hide">
	<input type="checkbox" id="mc-popup-hide" value="1" checked="checked"><label for="mc-popup-hide">Never show this message again</label>
</div>
</div>

@endsection
