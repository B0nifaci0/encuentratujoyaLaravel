<!doctype html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <link rel="canonical" href="/" />
  <meta name="description" content="" />
  <title>Collection Full Width Page</title>

	<link href="<?= URL ?>assets/stylesheets/font.css" rel='stylesheet' type='text/css'>

	<link href="<?= URL ?>assets/stylesheets/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= URL ?>assets/stylesheets/jquery.camera.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= URL ?>assets/stylesheets/jquery.fancybox-buttons.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= URL ?>assets/stylesheets/cs.animate.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= URL ?>assets/stylesheets/application.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= URL ?>assets/stylesheets/swatch.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= URL ?>assets/stylesheets/jquery.owl.carousel.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= URL ?>assets/stylesheets/jquery.bxslider.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= URL ?>assets/stylesheets/bootstrap.min.3x.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= URL ?>assets/stylesheets/cs.bootstrap.3x.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= URL ?>assets/stylesheets/cs.global.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= URL ?>assets/stylesheets/cs.style.css" rel="stylesheet" type="text/css" media="all">
	<link href="<?= URL ?>assets/stylesheets/cs.media.3x.css" rel="stylesheet" type="text/css" media="all">

	<script src="<?= URL ?>assets/javascripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="<?= URL ?>assets/javascripts/jquery.imagesloaded.min.js" type="text/javascript"></script>
	<script src="<?= URL ?>assets/javascripts/bootstrap.min.3x.js" type="text/javascript"></script>
	<script src="<?= URL ?>assets/javascripts/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="<?= URL ?>assets/javascripts/jquery.camera.min.js" type="text/javascript"></script>
	<script src="<?= URL ?>assets/javascripts/jquery.mobile.customized.min.js" type="text/javascript"></script>
	<script src="<?= URL ?>assets/javascripts/cookies.js" type="text/javascript"></script>
	<script src="<?= URL ?>assets/javascripts/modernizr.js" type="text/javascript"></script>
	<script src="<?= URL ?>assets/javascripts/application.js" type="text/javascript"></script>
	<script src="<?= URL ?>assets/javascripts/jquery.owl.carousel.min.js" type="text/javascript"></script>
	<script src="<?= URL ?>assets/javascripts/jquery.bxslider.js" type="text/javascript"></script>
	<script src="<?= URL ?>assets/javascripts/skrollr.min.js" type="text/javascript"></script>
	<script src="<?= URL ?>assets/javascripts/jquery.fancybox-buttons.js" type="text/javascript"></script>
	<script src="<?= URL ?>assets/javascripts/jquery.zoom.js" type="text/javascript"></script>
	<script src="<?= URL ?>assets/javascripts/cs.script.js" type="text/javascript"></script>
</head>

<body itemscope="" itemtype="http://schema.org/WebPage" class="templateCollection notouch">
	<!-- Header -->
	<header id="top" class="clearfix">
		<!--top-->
		<div class="container">
		  <div class="top row">
			<div class="col-md-6 phone-shopping">
			  <span>PHONE SHOPING (01) 123 456 UJ</span>
			</div>
			<div class="col-md-18">
			  <ul class="text-right">
				<li class="customer-links hidden-xs">
					<ul id="accounts" class="list-inline">
						<li class="my-account">
              <?php if ($this->session->userdata('logged_in')['id_user'] == 0){ ?>
                <a href="<?= URL?>users/login">Mi cuenta</a>
              <?php }else{ ?>
                <a href="<?= URL?>branches">Mi cuenta</a>
              <?php } ?>
						</li>
						<li class="login">
							<span id="loginButton" class="dropdown-toggle" data-toggle="dropdown">
								<a href="./login.html">Login</a>
								<i class="sub-dropdown1"></i>
								<i class="sub-dropdown"></i>
							</span>
							<!-- Customer Account Login -->
							<div id="loginBox" class="dropdown-menu text-left">
							<form method="post" action="#" id="customer_login" accept-charset="UTF-8"><input type="hidden" value="customer_login" name="form_type"><input type="hidden" name="utf8" value="✓">
								<div id="bodyBox">
									<ul class="control-container customer-accounts list-unstyled">
										<li class="clearfix">
											<label for="customer_email_box" class="control-label">Correo electronico <span class="req">*</span></label>
											<input type="email" value="" name="customer[email]" id="customer_email_box" class="form-control">
										</li>
										<li class="clearfix">
											<label for="customer_password_box" class="control-label">Contraseña <span class="req">*</span></label>
											<input type="password" value="" name="customer[password]" id="customer_password_box" class="form-control password">
										</li>
										<li class="clearfix">
											<a class="action btn btn-1" href="<?= URL ?>shops">Iniciar Sesion</a>
										</li>
										<li class="clearfix">
											<a class="action btn btn-1" href="<?= URL ?>users/registry">Crear una cuenta</a>
										</li>
									</ul>
								</div>
							</form>
							</div>
						</li>
						<li>/</li>
						<li class="register">
							<a href="<?= URL ?>users/registry" id="customer_register_link">Crear una cuenta</a>
						</li>
					</ul>
				</li>
				<li id="widget-social">
				  <ul class="list-inline">
					<li><a target="_blank" href="#" class="btooltip swing" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a target="_blank" href="#" class="btooltip swing" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a target="_blank" href="#" class="btooltip swing" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Pinterest"><i class="fa fa-instagram"></i></a></li>
				  </ul>
				</li>
			  </ul>
			</div>
		  </div>
		</div>
		<!--End top-->
		<div class="line"></div>
		<!-- Navigation -->
		<div class="container">
			<div class="top-navigation">
				<ul class="list-inline">
					<li class="top-logo">
						<a id="site-title" href="./index.html" title="Jewelry - HTML Template theme">
						<img class="img-responsive" src="<?= URL ?>assets/images/logo.png" alt="Jewelry - HTML Template theme">
						</a>
					</li>
					<li class="navigation">
						<nav class="navbar">
							<div class="clearfix">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle main navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									</button>
								</div>
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
											<ul class="customer dropdown-menu">
												<li class="logout">
												<a href="#">Login</a>
												</li>
												<li class="account last">
												<a href="register.html">Register</a>
												</li>
											</ul>
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
										<a href="http://www.jewelrypalace.site/">
										<span>Inicio</span>
										</a>
										</li>
										<!--<li class="dropdown mega-menu">
										<a href="./collection.html" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
										<span>Categorias</span>
										<i class="fa fa-caret-down"></i>
										<i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
										<i class="sub-dropdown visible-sm visible-md visible-lg"></i>
										</a>
										<div class="megamenu-container megamenu-container-1 dropdown-menu banner-bottom mega-col-4" style="">
											<ul class="sub-mega-menu">
												<li>
												<ul>
													<li class="list-title">Collection Links</li>
													<li class="list-unstyled li-sub-mega">
													<a href="#">Dolorem Sed </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="#">Proident Nulla </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="#">Phasellus Leo <span class="megamenu-label hot-label">Hot</span>
													</a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="#">Tristique Amet <span class="megamenu-label feature-label">Featured</span>
													</a>
													</li>
												</ul>
												</li>
												<li>
												<ul>
													<li class="list-title">Collection Links</li>
													<li class="list-unstyled li-sub-mega">
													<a href="#">Dolorem Sed </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="#">Proident Nulla <span class="megamenu-label new-label">New</span>
													</a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="#">Phasellus Leo </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="#">Tristique Amet </a>
													</li>
												</ul>
												</li>
												<li>
												<ul>
													<li class="list-title">Collection Links</li>
													<li class="list-unstyled li-sub-mega">
													<a href="#">Dolorem Sed </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="#">Proident Nulla </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="#">Phasellus Leo <span class="megamenu-label sale-label">Sale</span>
													</a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="#">Tristique Amet </a>
													</li>
												</ul>
												</li>
												<li>
												<ul>
													<li class="list-title">Collection Links</li>
													<li class="list-unstyled li-sub-mega">
													<a href="#">Dolorem Sed <span class="megamenu-label new-label">New</span>
													</a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="#">Proident Nulla </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="./product.html">Phasellus Leo </a>
													</li>
													<li class="list-unstyled li-sub-mega last">
													<a href="./product.html">Tristique Amet <span class="megamenu-label hot-label">Hot</span>
													</a>
													</li>
												</ul>
												</li>
											</ul>
										</div>
										</li>
										<!--
										<li class="dropdown mega-menu">
										<a href="./collection.html" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
										<span>Pages</span>
										<i class="fa fa-caret-down"></i>
										<i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
										<i class="sub-dropdown visible-sm visible-md visible-lg"></i>
										</a>

										<div class="megamenu-container megamenu-container-2 dropdown-menu banner-right mega-col-2" style="display: none;">
											<ul class="sub-mega-menu">
												<li>
												<ul>
													<li class="list-title">Page Layout</li>
													<li class="list-unstyled li-sub-mega">
													<a href="./collection.html">Collection full width </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="./collection-left.html">Collection - left sidebar </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="./collection-right.html">Collection - right sidebar </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="./product.html">Product full width </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="./product-left.html">Product - left sidebar </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="./product-right.html">Product - right sidebar </a>
													</li>
												</ul>
												</li>
												<li>
												<ul>
													<li class="list-title">Page Content</li>
													<li class="list-unstyled li-sub-mega">
													<a href="./about-us.html">About </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="./price-table.html">Price table </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="./faqs.html">FAQs </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="./testimonials.html">Testimonial </a>
													</li>
													<li class="list-unstyled li-sub-mega">
													<a href="./collection.html">New product introduction </a>
													</li>
													<li class="list-unstyled li-sub-mega last">
													<a href="./contact.html"> Contact </a>
													</li>
												</ul>
												</li>
											</ul>
										</div>
										</li>
										-->

										<!--
										<li class="nav-item dropdown">
										<a href="./blog-full.html" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
										<span>Blog</span>
										<i class="fa fa-caret-down"></i>
										<i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
										<i class="sub-dropdown visible-sm visible-md visible-lg"></i>
										</a>
										<ul class="dropdown-menu">
											<li class=""><a tabindex="-1" href="./blog-3-col.html">Blog grid 3 columns</a></li>
											<li class=""><a tabindex="-1" href="./blog-2-col.html">Blog grid 2 columns</a></li>
											<li class=""><a tabindex="-1" href="./blog.html">Blog grid full width</a></li>
											<li class=""><a tabindex="-1" href="./blog-left.html">Blog - left sidebar</a></li>
											<li class=""><a tabindex="-1" href="./blog-right.html">Blog - right sidebar</a></li>
											<li class=""><a tabindex="-1" href="./article.html">Post full width</a></li>
											<li class=""><a tabindex="-1" href="./article-left.html"> Post - left sidebar</a></li>
											<li class="last"><a tabindex="-1" href="./article-right.html">Post - right sidebar</a></li>
										</ul>
										</li>
										-->

										<li class="nav-item">
										<a href="./contact.html">
										<span>Contacto</span>
										</a>
										</li>
									</ul>
								</div>
							</div>
						</nav>
					</li>
          				<!--
					<li class="top-search hidden-xs">
						<div class="header-search">
							<a href="#">
							<span data-toggle="dropdown">
							<i class="fa fa-search"></i>
							<i class="sub-dropdown1"></i>
							<i class="sub-dropdown"></i>
							</span>
							</a>
			<form id="header-search" class="search-form dropdown-menu" action="search.html" method="get">
								<input type="hidden" name="type" value="product">
								<input type="text" name="q" value="" accesskey="4" autocomplete="off" placeholder="Search something...">
								<button type="submit" class="btn">Search</button>
							</form>
						</div>
					</li>-->
					<li class="umbrella hidden-xs">
						<div id="umbrella" class="list-inline unmargin">
							<div class="cart-link">
								<a href="./cart.html" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
									<i class="sub-dropdown1"></i>
									<i class="sub-dropdown"></i>
									<div class="num-items-in-cart">
										<span class="icon">
										  Cart
										  <span class="number">1</span>
										</span>
									</div>
								</a>
								<div id="cart-info" class="dropdown-menu" style="display: none;">
									<div id="cart-content">
										<div class="items control-container">
											<div class="row items-wrapper">
												<a class="cart-close" title="Remove" href="javascript:void(0);"><i class="fa fa-times"></i></a>
												<div class="col-md-8 cart-left">
													<a class="cart-image" href="./product.html"><img src="<?= URL ?>assets/images/demo_77x77.png" alt="" title=""></a>
												</div>
												<div class="col-md-16 cart-right">
													<div class="cart-title">
														<a href="./product.html">Product with left sidebar - black / small</a>
													</div>
													<div class="cart-price">
														$200.00<span class="x"> x </span>1
													</div>
												</div>
											</div>
										</div>
										<div class="subtotal">
											<span>Subtotal:</span><span class="cart-total-right">$200.00</span>
										</div>
										<div class="action">
											<button class="btn" onclick="window.location='./cart.html'">CHECKOUT</button><a class="btn btn-1" href="./cart.html">View Cart</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
          <!--
					<li class="mobile-search visible-xs">
						<form id="mobile-search" class="search-form" action="search.html" method="get">
							<input type="hidden" name="type" value="product">
							<input type="text" class="" name="q" value="" accesskey="4" autocomplete="off" placeholder="Buscar">
							<button type="submit" class="search-submit" title="search"><i class="fa fa-search"></i></button>
						</form>
					</li>-->
				</ul>
			</div>
			<!--End Navigation-->
			<script>
			  function addaffix(scr){
				if($(window).innerWidth() >= 1024){
				  if(scr > $('#top').innerHeight()){
					if(!$('#top').hasClass('affix')){
					  $('#top').addClass('affix').addClass('animated');
					}
				  }
				  else{
					if($('#top').hasClass('affix')){
					  $('#top').prev().remove();
					  $('#top').removeClass('affix').removeClass('animated');
					}
				  }
				}
				else $('#top').removeClass('affix');
			  }
			  $(window).scroll(function() {
				var scrollTop = $(this).scrollTop();
				addaffix(scrollTop);
			  });
			  $( window ).resize(function() {
				var scrollTop = $(this).scrollTop();
				addaffix(scrollTop);
			  });
			</script>
		</div>
    </header>
