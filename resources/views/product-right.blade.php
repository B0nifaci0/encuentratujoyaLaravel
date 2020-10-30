@extends('layout.layoutspage')
@section('title')
@endsection
@section('menu')
<header id="top" class="clearfix">


<body style="height: 2671px;" itemscope="" itemtype="http://schema.org/WebPage" class="templateProduct notouch">

  <!--top-->
  <div class="container">
    <div class="top row">
    <div class="col-md-6 phone-shopping">
      <span>TELEFONIO (722) 657 57 09</span>
    </div>
    <div class="col-md-18">
      <ul class="text-right">
      <li class="customer-links hidden-xs">
        <ul id="accounts" class="list-inline">

          <li class="login">
            <span id="loginButton" class="dropdown-toggle" data-toggle="dropdown">
              <a href="/login">Iniciar Sesion</a>
              <i class="sub-dropdown1"></i>
              <i class="sub-dropdown"></i>
            </span>
            <!-- Customer Account Login -->
            <div id="loginBox" class="dropdown-menu text-left">
            <form method="post" action="#" id="customer_login" accept-charset="UTF-8"><input type="hidden" value="customer_login" name="form_type"><input type="hidden" name="utf8" value="✓">
              <div id="bodyBox">
                <ul class="control-container customer-accounts list-unstyled">
                  <li class="clearfix">
                    <label for="customer_email_box" class="control-label">Correo <span class="req">*</span></label>
                    <input type="email" value="" name="customer[email]" id="customer_email_box" class="form-control">
                  </li>
                  <li class="clearfix">
                    <label for="customer_password_box" class="control-label">Contraseña <span class="req">*</span></label>
                    <input type="password" value="" name="customer[password]" id="customer_password_box" class="form-control password">
                  </li>
                  <li class="clearfix">
                    <a class="action btn btn-1" href="./login.html">Entrar</a>
                  </li>
                  <li class="clearfix">
                    <a class="action btn btn-1" href="/register">Crear Cuenta</a>
                  </li>
                </ul>
              </div>
            </form>
            </div>
          </li>
          <li>/</li>
          <li class="register">
            <a href="/register" id="customer_register_link">Crear Cuenta</a>
          </li>
        </ul>
      </li>
      <li id="widget-social">
        <ul class="list-inline">
        <li><a target="_blank" href="#" class="btooltip swing" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
        <li><a target="_blank" href="#" class="btooltip swing" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
        <li><a target="_blank" href="#" class="btooltip swing" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
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
          <img class="img-responsive" src="{{{ url('dashboard-assets/assets/images/logo.png')}}}" alt="Jewelry - HTML Template theme">
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
                      <a href="/login">Iniciar Sesion <section>

                      </section></a>
                      </li>
                      <li class="account last">
                      <a href="/register">Crear Cuenta</a>
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
                  <a href="/">
                  <span>Inicio</span>
                  </a>
                  </li>


                  </li>
                  <li class="nav-item dropdown">
                  <a href="./blog-full.html" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
                    <span>Joyerias</span>
                  </a>
                </li>
                  <li class="nav-item">
                  <a href="/membrecia">
                  <span>Membrecia</span>
                  </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </li>

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
                        <a class="cart-image" href="./product.html"><img src="./assets/images/demo_77x77.png" alt="" title=""></a>
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
        <li class="mobile-search hidden-lg">
          <div class ="col-md-6 col-md-offset-3 hidden-md">
            <select  id="param_1" class=" col-md-12 form-control round" name"id_category" width="30%">
              @foreach ($categories as $categori)
                <option value="<?= $categori->id_category?>"><?= $categori->name?></option>
              @endforeach
            </select>
          </div>

          <div class="col-md-6 col-md-offset-1 hidden-md">
            <select id="estados_1" class="form-control round estados" name="id_estado" alt="1">
            <option value="*">Seleccione uno</option>
            @foreach ($states as $state)
              <option value="<?= $state->id ?>"><?= $state->name ?></option>
            @endforeach
            </select>
          </div>

          <div class="col-md-6 col-md-offset-1 hidden-md">
            <select id="municipios_1" name="municipality_id" class="form-control"></select>
            </select>
            <form id="form_1" method="post" action="http://www.jewelrypalace.site/products/search/">
                <select  style="visibility:hidden" id="param_hidden_1" name="id_category">
                  @foreach ($categories as $categori)
                  <option value="<?= $categori->id_category?>"><?= $categori->name?></option>
                  @endforeach
                </select>
            </form>
          </div>
          <div class="col-md-6 col-md-offset-10 hidden-md">
              <input type="hidden" id="id_municipio_1" name="">
              <button alt="1" type="submit" class="btn btn-lg search">Buscar</button>
          </div>
        </li>
      </ul>
    </div>
    @endsection
    	@section('content')

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


	<div id="content-wrapper-parent">
		<div id="content-wrapper">
			<!-- Content -->
			<div id="content" class="clearfix">
				<div id="breadcrumb" class="breadcrumb">
					<div itemprop="breadcrumb" class="container">
						<div class="row">
							<div class="col-md-24">
								<a href="./index.html" class="homepage-link" title="Back to the frontpage">Home</a>
								<span>/</span>
								<a href="./collection.html" title="">Bracelets</a>
								<span>/</span>
								<span class="page-title">Product Left Sidebar</span>
							</div>
						</div>
					</div>
				</div>
				<section class="content">
					<div class="container">
						<div class="row">
							<div id="col-main" class="product-page col-xs-24 col-sm-18 no_full_width">
								<div itemscope="" itemtype="">
									<meta itemprop="url" content="/products/donec-condime-fermentum">
									<div id="product" class="content clearfix">
										<div id="product-image" class="product-image row no_full_width col-sm-12">
											<div class="image featured fadeInUp not-animated" data-animate="fadeInUp">
                        @php
                        $image = route('images',"app/public/upload/products/$product->image")
                        @endphp
												<img src="{{ $image }}" class="img-responsive" alt="Donec condime fermentum">
											</div>
											<div id="gallery_main" class="product-image-thumb thumbs mobile_full_width ">
												<ul style="opacity: 0; display: block;" class="slide-product-image owl-carousel owl-theme">
													<li class="image">
														<a src="{{ $image }}" class="img-responsive" class="cloud-zoom-gallery active">
															<img src="{{ $image }}" class="img-responsive" alt="Donec condime fermentum">
														</a>
													</li>
													<li class="image">
														<a src="{{ $image }}" class="img-responsive" class="cloud-zoom-gallery">
															<img src="{{ $image }}" class="img-responsive" alt="Donec condime fermentum">
														</a>
													</li>
													<li class="image">
														<a src="{{ $image }}" class="img-responsive" class="cloud-zoom-gallery">
															<img src="{{ $image }}" class="img-responsive" alt="Donec condime fermentum">
														</a>
													</li>
													<li class="image">
														<a src="{{ $image }}" class="img-responsive" class="cloud-zoom-gallery">
															<img src="{{ $image }}" class="img-responsive" alt="Donec condime fermentum">
														</a>
													</li>
												</ul>
											</div>
											<div id="detail-right-column" class="right-coloum col-sm-6 fadeInLeft not-animated" data-animate="fadeInLeft">
												<div class="addthis_sharing_toolbox" data-url="#" data-title="Donec aliquam ante non | Jewelry - HTML Template">
													<div id="atstbx" class="at-share-tbx-element addthis_32x32_style addthis-smartlayers addthis-animated at4-show">
														<a class="at-share-btn at-svc-facebook"><span class="at4-icon aticon-facebook" title="Facebook"></span></a><a class="at-share-btn at-svc-twitter"><span class="at4-icon aticon-twitter" title="Twitter"></span></a><a class="at-share-btn at-svc-email"><span class="at4-icon aticon-email" title="Email"></span></a><a class="at-share-btn at-svc-print"><span class="at4-icon aticon-print" title="Print"></span></a><a class="at-share-btn at-svc-compact"><span class="at4-icon aticon-compact" title="More"></span></a>
													</div>
												</div>
											</div>
										</div>
										<div id="product-information" class="product-information row text-center no_full_width col-sm-12">
											<h2 id="page-title" class="text-left">
												<span itemprop="name">{{{$product->name}}}</span>
											</h2>
											<div id="product-header" class="clearfix">
												<div id="product-info-left">
													<div class="description">
														<span>DESCRIPCIÓN DEL PRODUCTO</span>
														<p>
                              {{{$product->description}}}
														 </p>
														<p>
														</p>
													</div>
													<div class="relative">
														<ul class="list-unstyled">
															<li class="tags">
															<span>Peso : {{{$product->weigth}}}</span>
															<a href="#">
															{{{$product->price}}}<span>,</span>
															</a>
															<a href="#">
															{{{$product->purity}}}<span>,</span>
															</a>
															<a href="#">
															{{{$product->nationality}}}<span>,</span>
															</a>

															</li>
														</ul>
													</div>
												</div>
												<div id="product-info-right">
													<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="col-sm-24 group-variants">
														<meta itemprop="priceCurrency" content="USD">
														<link itemprop="availability" href="http://schema.org/InStock">
														<form action="./cart.html" method="post" class="variants" id="product-actions">
															<div id="product-actions-1293235843" class="options clearfix">
																<style scoped>
																  label[for="product-select-option-0"] { display: none; }
																  #product-select-option-0 { display: none; }
																  #product-select-option-0 + .custom-style-select-box { display: none !important; }
																</style>
																<div class="quantity-wrapper clearfix">
																	<label class="wrapper-title">Cantidad</label>
																	<div class="wrapper">
																		<input id="quantity" name="quantity" value="1" maxlength="5" size="5" class="item-quantity" type="text">
																		<span class="qty-group">
																		<span class="qty-wrapper">
																		<span data-original-title="Increase" class="qty-up btooltip" data-toggle="tooltip" data-placement="top" title="" data-src="#quantity">
																		<i class="fa fa-caret-right"></i>
																		</span>
																		<span data-original-title="Decrease" class="qty-down btooltip" data-toggle="tooltip" data-placement="top" title="" data-src="#quantity">
																		<i class="fa fa-caret-left"></i>
																		</span>
																		</span>
																		</span>
																	</div>
																</div>
																<div id="purchase-1293235843">
																	<div class="detail-price" itemprop="price">
																		<span class="price">${{{$product->price}}}</span>
																	</div>
																</div>
																<div class="others-bottom clearfix">
																	<button id="add-to-cart" class="btn btn-1 add-to-cart" data-parent=".product-information" type="submit" name="add">Add to Cart</button>
																</div>
															</div>
														</form>
														<div class="wls">
															<a class="wish-list" href="./wishlist.html"><i class="fa fa-heart"></i>Lista de Deseos</a>
															<span>|</span>
															<a href="mailto:info@yourdomain.com"><i class="fa fa-envelope"></i> Enviar Correo</a>
														</div>
													</div>
													<ul id="tabs_detail" class="tabs-panel-detail hidden-xs hidden-sm">
														<li class="first">
															<h5><a href="#pop-one" class="fancybox">Measurements &amp; Specs</a></h5>
														</li>
														<li>
															<h5><a href="#pop-two" class="fancybox">Shipping &amp; Returns</a></h5>
														</li>
														<li>
															<h5><a href="#pop-three" class="fancybox">Size Charts</a></h5>
														</li>
													</ul>
													<div id="pop-one" style="display: none;">
														<img src="./assets/images/demo_870x580.png" alt="">
													</div>
													<div id="pop-two" style="display: none;">
														<h5>Returns Policy</h5>
														<p>
															You may return most new, unopened items within 30 days of delivery for a full refund. We'll also pay the return shipping costs if the return is a result of our error (you received an incorrect or defective item, etc.).You should expect to receive your refund within four weeks of giving your package to the return shipper, however, in many cases you will receive a refund more quickly. This time period includes the transit time for us to receive your return from the shipper (5 to 10 business days), the time it takes us to process your return once we receive it (3 to 5 business days), and the time it takes your bank to process our refund request (5 to 10 business days).If you need to return an item, simply login to your account, view the order using the 'Complete Orders' link under the My Account menu and click the Return Item(s) button. We'll notify you via e-mail of your refund once we've received and processed the returned item.
														</p>
														<br>
														<h5>Shipping</h5>
														<p>
															We can ship to virtually any address in the world. Note that there are restrictions on some products, and some products cannot be shipped to international destinations.When you place an order, we will estimate shipping and delivery dates for you based on the availability of your items and the shipping options you choose. Depending on the shipping provider you choose, shipping date estimates may appear on the shipping quotes page.Please also note that the shipping rates for many items we sell are weight-based. The weight of any such item can be found on its detail page. To reflect the policies of the shipping companies we use, all weights will be rounded up to the next full pound.
														</p>
													</div>
													<div id="pop-three" style="display: none;">
														<img src="./assets/images/demo_870x580.png" alt="">
													</div>
												</div>
											</div>
										</div>

									</div>
								</div>
								<!-- Related Products -->
								<section class="rel-container clearfix">
									<h6 class="general-title text-left">OTROS  PRODUCTOS RELACIONADOS</h6>
									<div id="prod-related-wrapper">
										<div class="prod-related clearfix">
											<div class="element no_full_width not-animated" data-animate="bounceIn" data-delay="0">
												<ul class="row-container list-unstyled clearfix">
													<li class="row-left">
													<a href="./product.html" class="container_item">
													<img src="./assets/images/demo_270x270.png" class="img-responsive" alt="Curabitur cursus dignis">
													<span class="sale_banner">
													<span class="sale_text">Sale</span>
													</span>
													</a>
													<div class="hbw">
														<span class="hoverBorderWrapper"></span>
													</div>
													</li>
													<li class="row-right parent-fly animMix">
													<div class="product-content-left">
														<a class="title-5" href="./product.html">Curabitur cursus dignis</a>
														<span class="spr-badge" id="spr_badge_1293238211" data-rating="0.0">
														<span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
														<span class="spr-badge-caption">
														No reviews </span>
														</span>
													</div>
													<div class="product-content-right">
														<div class="product-price">
															<span class="price_sale">$259.00</span>
															<del class="price_compare"> $300.00</del>
														</div>
													</div>
													<div class="list-mode-description">
														 Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum. Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed...
													</div>
													<div class="hover-appear">
														<form action="#" method="post">
															<div class="effect-ajax-cart">
																<input name="quantity" value="1" type="hidden">
																<button class="select-option" type="button" onclick="window.location='/products/curabitur-cursus-dignis';"><i class="fa fa-th-list" title="Select Options"></i><span class="list-mode">Select Option</span></button>
															</div>
														</form>
														<div class="product-ajax-qs hidden-xs hidden-sm">
															<div data-handle="curabitur-cursus-dignis" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																<i class="fa fa-eye" title="Quick view"></i><span class="list-mode">Quick View</span>
															</div>
														</div>
														<a class="wish-list" href="./account.html" title="wish list"><i class="fa fa-heart"></i><span class="list-mode">Add to Wishlist</span></a>
													</div>
													</li>
												</ul>
											</div>
											<div class="element no_full_width bounceIn not-animated" data-animate="bounceIn" data-delay="200">
												<ul class="row-container list-unstyled clearfix">
													<li class="row-left">
													<a href="./product.html" class="container_item">
													<img src="./assets/images/demo_270x270.png" class="img-responsive" alt="Curabitur cursus dignis">
													</a>
													<div class="hbw">
														<span class="hoverBorderWrapper"></span>
													</div>
													</li>
													<li class="row-right parent-fly animMix">
													<div class="product-content-left">
														<a class="title-5" href="./product.html">Curabitur cursus dignis</a>
														<span class="spr-badge" id="spr_badge_1293239619" data-rating="0.0">
														<span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
														<span class="spr-badge-caption">
														No reviews </span>
														</span>
													</div>
													<div class="product-content-right">
														<div class="product-price">
															<span class="price">
															$200.00 </span>
														</div>
													</div>
													<div class="list-mode-description">
														 Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum. Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed...
													</div>
													<div class="hover-appear">
														<form action="#" method="post">
															<div class="hide clearfix">
																<select name="id">
																	<option selected="selected" value="5141875779">Default Title</option>
																</select>
															</div>
															<div class="effect-ajax-cart">
																<input name="quantity" value="1" type="hidden">
																<button class="add-to-cart" type="submit" name="add"><i class="fa fa-shopping-cart"></i><span class="list-mode">Add to Cart</span></button>
															</div>
														</form>
														<div class="product-ajax-qs hidden-xs hidden-sm">
															<div data-handle="curabitur-cursus-dignis" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																<i class="fa fa-eye" title="Quick view"></i><span class="list-mode">Quick View</span>
															</div>
														</div>
														<a class="wish-list" href="./account.html" title="wish list"><i class="fa fa-heart"></i><span class="list-mode">Add to Wishlist</span></a>
													</div>
													</li>
												</ul>
											</div>
											<div class="element no_full_width bounceIn not-animated" data-animate="bounceIn" data-delay="400">
												<ul class="row-container list-unstyled clearfix">
													<li class="row-left">
													<a href="./product.html" class="container_item">
													<img src="./assets/images/demo_270x270.png" class="img-responsive" alt="Donec aliquam ante non">
													<span class="sale_banner">
													<span class="sale_text">Sale</span>
													</span>
													</a>
													<div class="hbw">
														<span class="hoverBorderWrapper"></span>
													</div>
													</li>
													<li class="row-right parent-fly animMix">
													<div class="product-content-left">
														<a class="title-5" href="./product.html">Donec aliquam ante non</a>
														<span class="spr-badge" id="spr_badge_1293236931" data-rating="4.0">
														<span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
														<span class="spr-badge-caption">
														1 review </span>
														</span>
													</div>
													<div class="product-content-right">
														<div class="product-price">
															<span class="price_sale">$250.00</span>
															<del class="price_compare"> $300.00</del>
														</div>
													</div>
													<div class="list-mode-description">
														 Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum. Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed...
													</div>
													<div class="hover-appear">
														<form action="#" method="post">
															<div class="effect-ajax-cart">
																<input name="quantity" value="1" type="hidden">
																<button class="select-option" type="button" onclick="window.location.href='product.html'"><i class="fa fa-th-list" title="Select Options"></i><span class="list-mode">Select Option</span></button>
															</div>
														</form>
														<div class="product-ajax-qs hidden-xs hidden-sm">
															<div data-handle="curabitur-cursus-dignis" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																<i class="fa fa-eye" title="Quick view"></i><span class="list-mode">Quick View</span>
															</div>
														</div>
														<a class="wish-list" href="./account.html" title="wish list"><i class="fa fa-heart"></i><span class="list-mode">Add to Wishlist</span></a>
													</div>
													</li>
												</ul>
											</div>
											<div class="element no_full_width bounceIn not-animated" data-animate="bounceIn" data-delay="600">
												<ul class="row-container list-unstyled clearfix">
													<li class="row-left">
													<a href="./product.html" class="container_item">
													<img src="./assets/images/demo_270x270.png" class="img-responsive" alt="Donec condime fermentum">
													</a>
													<div class="hbw">
														<span class="hoverBorderWrapper"></span>
													</div>
													</li>
													<li class="row-right parent-fly animMix">
													<div class="product-content-left">
														<a class="title-5" href="./product.html">Donec condime fermentum</a>
														<span class="spr-badge" id="spr_badge_1293235843" data-rating="0.0">
														<span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
														<span class="spr-badge-caption">
														No reviews </span>
														</span>
													</div>
													<div class="product-content-right">
														<div class="product-price">
															<span class="price">
															$200.00 </span>
														</div>
													</div>
													<div class="list-mode-description">
														 Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum. Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed...
													</div>
													<div class="hover-appear">
														<form action="#" method="post">
															<div class="effect-ajax-cart">
																<input name="quantity" value="1" type="hidden">
																<button class="select-option" type="button" onclick="window.location.href='product.html'"><i class="fa fa-th-list" title="Select Options"></i><span class="list-mode">Select Option</span></button>
															</div>
														</form>
														<div class="product-ajax-qs hidden-xs hidden-sm">
															<div data-handle="curabitur-cursus-dignis" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																<i class="fa fa-eye" title="Quick view"></i><span class="list-mode">Quick View</span>
															</div>
														</div>
														<a class="wish-list" href="./account.html" title="wish list"><i class="fa fa-heart"></i><span class="list-mode">Add to Wishlist</span></a>
													</div>
													</li>
												</ul>
											</div>
											<div class="element no_full_width bounceIn not-animated" data-animate="bounceIn" data-delay="800">
												<ul class="row-container list-unstyled clearfix">
													<li class="row-left">
													<a href="./product.html" class="container_item">
													<img src="./assets/images/demo_270x270.png" class="img-responsive" alt="Maximus quam posuere">
													<span class="sale_banner">
													<span class="sale_text">Sale</span>
													</span>
													</a>
													<div class="hbw">
														<span class="hoverBorderWrapper"></span>
													</div>
													</li>
													<li class="row-right parent-fly animMix">
													<div class="product-content-left">
														<a class="title-5" href="./product.html">Maximus quam posuere</a>
														<span class="spr-badge" id="spr_badge_1293227907" data-rating="3.0">
														<span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
														<span class="spr-badge-caption">
														1 review </span>
														</span>
													</div>
													<div class="product-content-right">
														<div class="product-price">
															<span class="price_sale">$200.00</span>
															<del class="price_compare"> $300.00</del>
														</div>
													</div>
													<div class="list-mode-description">
														 Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum. Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed...
													</div>
													<div class="hover-appear">
														<form action="#" method="post">
															<div class="effect-ajax-cart">
																<input name="quantity" value="1" type="hidden">
																<button class="select-option" type="button" onclick="window.location.href='product.html'"><i class="fa fa-th-list" title="Select Options"></i><span class="list-mode">Select Option</span></button>
															</div>
														</form>
														<div class="product-ajax-qs hidden-xs hidden-sm">
															<div data-handle="curabitur-cursus-dignis" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																<i class="fa fa-eye" title="Quick view"></i><span class="list-mode">Quick View</span>
															</div>
														</div>
														<a class="wish-list" href="./account.html" title="wish list"><i class="fa fa-heart"></i><span class="list-mode">Add to Wishlist</span></a>
													</div>
													</li>
												</ul>
											</div>
											<div class="element no_full_width not-animated" data-animate="bounceIn" data-delay="1000">
												<ul class="row-container list-unstyled clearfix">
													<li class="row-left">
													<a href="./product.html" class="container_item">
													<img src="./assets/images/demo_270x270.png" class="img-responsive" alt="Product full width">
													<span class="sale_banner">
													<span class="sale_text">Sale</span>
													</span>
													</a>
													<div class="hbw">
														<span class="hoverBorderWrapper"></span>
													</div>
													</li>
													<li class="row-right parent-fly animMix">
													<div class="product-content-left">
														<a class="title-5" href="./product.html">Product full width</a>
														<span class="spr-badge" id="spr_badge_1293240771" data-rating="0.0">
														<span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
														<span class="spr-badge-caption">
														No reviews </span>
														</span>
													</div>
													<div class="product-content-right">
														<div class="product-price">
															<span class="price_sale">$200.00</span>
															<del class="price_compare"> $300.00</del>
														</div>
													</div>
													<div class="list-mode-description">
														 Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum. Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed...
													</div>
													<div class="hover-appear">
														<form action="#" method="post">
															<div class="effect-ajax-cart">
																<input name="quantity" value="1" type="hidden">
																<button class="select-option" type="button" onclick="window.location.href='product.html'"><i class="fa fa-th-list" title="Select Options"></i><span class="list-mode">Select Option</span></button>
															</div>
														</form>
														<div class="product-ajax-qs hidden-xs hidden-sm">
															<div data-handle="curabitur-cursus-dignis" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
																<i class="fa fa-eye" title="Quick view"></i><span class="list-mode">Quick View</span>
															</div>
														</div>
														<a class="wish-list" href="./account.html" title="wish list"><i class="fa fa-heart"></i><span class="list-mode">Add to Wishlist</span></a>
													</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</section>
							</div>
							<div class="right-slidebar col-xs-24 col-sm-6">
										<div class="group_sidebar">
											<div class="home-collection-wrapper sb-wrapper clearfix">
												<h6 class="sb-title">Categoriad de Producto</h6>
												<ul class="list-unstyled sb-content list-styled">
													<li>
													<a href="./collection.html"><span><i class="fa fa-circle"></i> Bracelets</span><span class="collection-count"> (8)</span></a>
													</li>
													<li>
													<a href="./collection.html"><span><i class="fa fa-circle"></i> Earrings</span><span class="collection-count"> (8)</span></a>
													</li>
													<li>
													<a href="./collection.html"><span><i class="fa fa-circle"></i> Necklaces</span><span class="collection-count"> (8)</span></a>
													</li>
													<li>
													<a href="./collection.html"><span><i class="fa fa-circle"></i> Rings</span><span class="collection-count"> (8)</span></a>
													</li>
													<li>
													<a href="./collection-left.html"><span><i class="fa fa-circle"></i> Sample Collection - Left Slidebar</span><span class="collection-count"> (9)</span></a>
													</li>
													<li>
													<a href="./collection-right.html"><span><i class="fa fa-circle"></i> Sample Collection - Right Slidebar</span><span class="collection-count"> (7)</span></a>
													</li>
												</ul>
											</div>
											<div class="deal-product-wrapper sb-wrapper clearfix">
												<div class="group_deal_products">
													<div class="">
														<div class="home_deal_fp">
															<h6 class="sb-title">Specials</h6>
															<div class="home_deal_fp_wrapper sb-content">
																<div id="home_deal_fp">
																	<div class="element full_width fadeInUp animated" data-animate="fadeInUp" data-delay="0">
																		<form action="#" method="post">
																			<ul class="row-container list-unstyled clearfix">
																				<li class="row-left">
																				<a href="./product.html" class="container_item">
																				<img src="./assets/images/demo_100x100.png" class="img-responsive" alt="Curabitur cursus dignis">
																				</a>
																				</li>
																				<li class="row-right parent-fly animMix">
																				<a class="title-5" href="./product.html">Curabitur cursus dignis</a>
																				<div class="product-price">
																					<span class="price_sale">$259.00</span>
																					<span class="dash">/</span>
																					<del class="price_compare"> $300.00</del>
																				</div>
																				<div class="effect-ajax-cart">
																					<input name="quantity" value="1" type="hidden">
																					<button class="select-option" type="button" onclick="window.location.href='product.html'">Select Option</button>
																				</div>
																				</li>
																			</ul>
																		</form>
																	</div>
																	<div class="element full_width fadeInUp animated" data-animate="fadeInUp" data-delay="200">
																		<form action="#" method="post">
																			<ul class="row-container list-unstyled clearfix">
																				<li class="row-left">
																				<a href="./product.html" class="container_item">
																				<img src="./assets/images/demo_100x100.png" class="img-responsive" alt="Curabitur cursus dignis">
																				</a>
																				</li>
																				<li class="row-right parent-fly animMix">
																				<a class="title-5" href="./product.html">Curabitur cursus dignis</a>
																				<div class="product-price">
																					<span class="price">
																					$200.00 </span>
																				</div>

																				<div class="effect-ajax-cart">
																					<input name="quantity" value="1" type="hidden">
																					<button class="add-to-cart" type="submit" name="add">Add to Cart</button>
																				</div>
																				</li>
																			</ul>
																		</form>
																	</div>
																	<div class="element full_width fadeInUp animated" data-animate="fadeInUp" data-delay="400">
																		<form action="#" method="post">
																			<ul class="row-container list-unstyled clearfix">
																				<li class="row-left">
																				<a href="./product.html" class="container_item">
																				<img src="./assets/images/demo_100x100.png" class="img-responsive" alt="Donec aliquam ante non">
																				</a>
																				</li>
																				<li class="row-right parent-fly animMix">
																				<a class="title-5" href="./product.html">Donec aliquam ante non</a>
																				<div class="product-price">
																					<span class="price_sale">$250.00</span>
																					<span class="dash">/</span>
																					<del class="price_compare"> $300.00</del>
																				</div>
																				<div class="effect-ajax-cart">
																					<input name="quantity" value="1" type="hidden">
																					<button class="select-option" type="button" onclick="window.location.href='product.html'">Select Option</button>
																				</div>
																				</li>
																			</ul>
																		</form>
																	</div>
																	<div class="element full_width fadeInUp animated" data-animate="fadeInUp" data-delay="600">
																		<form action="#" method="post">
																			<ul class="row-container list-unstyled clearfix">
																				<li class="row-left">
																				<a href="./product.html" class="container_item">
																				<img src="./assets/images/demo_100x100.png" class="img-responsive" alt="Donec condime fermentum">
																				</a>
																				</li>
																				<li class="row-right parent-fly animMix">
																				<a class="title-5" href="./product.html">Donec condime fermentum</a>
																				<div class="product-price">
																					<span class="price">
																					$200.00 </span>
																				</div>
																				<div class="effect-ajax-cart">
																					<input name="quantity" value="1" type="hidden">
																					<button class="select-option" type="button" onclick="window.location.href='product.html'">Select Option</button>
																				</div>
																				</li>
																			</ul>
																		</form>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="sb-wrapper">
												<h6 class="sb-title">Bienvenido</h6>
												<ul class="list-unstyled sb-content textwidget list-styled">
													<li>
													<p>
                            Jewelry palace tiene el honor de darte darte la bienvenida somos una plataforma dedicarte el mejor servicio encuentra tu producto de acorde a tu presupuesto.
                            Manejamos los mejores precios del mercado en la indnustria Joyera. Somos tu mejor opcion somos joyeria de estilo.

                              </p>
													</li>
												</ul>
											</div>


											<div class="sb-item slidebar-banner">
												<h6 class="sb-title">Promociones</h6>
												<div class="">
													<img src="./assets/images/demo_270x340.png" alt="">
												</div>
											</div>
											<!--End sb-item-->
										</div><!--end group_sidebar-->
							</div>
						</div>
					</div>
				</section>
			</div>
	    </div>
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
</div>
</footer>
</body>
@endsection
