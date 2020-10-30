
<?php $__env->startSection('title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('menu'); ?>
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
						<img class="img-responsive" src="<?php echo e(url('dashboard-assets/assets/images/logo.png')); ?>" alt="Jewelry - HTML Template theme">
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
										<a href="/">
										<span>Inicio</span>
										</a>
										</li>

										</li>
										<li class="nav-item dropdown">
										<a href="/" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
											<span>Joyerias</span>
											<i class="fa fa-caret-down"></i>
											<i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
											<i class="sub-dropdown visible-sm visible-md visible-lg"></i>
										</a>
										<ul class="dropdown-menu">
											<li class=" dropdown li-sub-mega">
												<a href="./blog-full.html" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
												<span>Blog grid 3 columns</span>
												<i class="fa fa-angle-down"></i>
												<i class="sub-dropdown1 visible-sm visible-md visible-lg"></i>
												<i class="sub-dropdown visible-sm visible-md visible-lg"></i>
												</a>
												<ul class="dropdown-menu">
													<li class="li-sub-mega">
														<a tabindex="-1" href="/abc">Blog Technology</a>
													</li>
													<li class="li-sub-mega">
														<a tabindex="-1" href="/def">Blog Sport</a>
													</li>
													<li class="li-sub-mega">
														<a tabindex="-1" href="/def">Blog Science</a>
													</li>
												</ul>
											</li>
											<li class=""><a tabindex="-1" href="./blog-2-col.html">Blog grid 2 columns</a></li>
											<li class=""><a tabindex="-1" href="./blog.html">Blog grid full width</a></li>
											<li class=""><a tabindex="-1" href="./blog-left.html">Blog - left sidebar</a></li>
											<li class=""><a tabindex="-1" href="./blog-right.html">Blog - right sidebar</a></li>
											<li class=""><a tabindex="-1" href="./article.html">Post full width</a></li>
											<li class=""><a tabindex="-1" href="./article-left.html"> Post - left sidebar</a></li>
											<li class="last"><a tabindex="-1" href="./article-right.html">Post - right sidebar</a></li>
										</ul>
										</li>
										<li class="nav-item">
										<a href="/membrecia">
										<span>Membrecia</span>
										</a>
										</li>
                    <li class="nav-item">
										<a href="/register">
										<span>Crear Cuenta</span>
										</a>
										</li>
									</ul>
								</div>
							</div>
						</nav>
					</li>
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
					</li>
					<li class="umbrella hidden-xs">
						<div id="umbrella" class="list-inline unmargin">
							<div class="cart-link">
								<a href="./cart.html" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
									<i class="sub-dropdown1"></i>
									<i class="sub-dropdown"></i>
									<div class="num-items-in-cart">
										<span class="icon">
										  Carrito
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
					<li class="mobile-search visible-xs">
						<form id="mobile-search" class="search-form" action="search.html" method="get">
							<input type="hidden" name="type" value="product">
							<input type="text" class="" name="q" value="" accesskey="4" autocomplete="off" placeholder="Search something...">
							<button type="submit" class="search-submit" title="search"><i class="fa fa-search"></i></button>
						</form>
					</li>
				</ul>
			</div>
			<!--End Navigation-->
      <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<style>
      #map {
       height: 220px;
       width: 900px;
      }
   </style>
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

								<span class="page-title"><?php echo e($shop->name); ?></span>
							</div>

						</div>
					</div>
				</div>

				<section class="content">
					<div class="container">
            <div class="container">
            <div class="row">
              <div id="collection-content">
                <div id="page-header">
                <h1 id="page-title">JOYERIA <?= $shop->name ?></h1>
              </div>
              <div class="collection-warper col-sm-24 clearfix">
                <div class="collection-panner col-sm-6">
                  <?php 
									$image = route('images',"app/public/upload/shops/$shop->image")
  								 ?>
  								<img width="470px" height="320px" class="img-responsive" src="<?php echo e($image); ?>">
                </div>
                <div class="container">
                  <div class="col-sm-6">
                    <div id="map" ></div>
                </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>QUIENES SOMOS :</th>
                              <th>CORREO ELECTRONICO</th>
                              <td>SITIO WEB :</td>
                              <td>CONTÁCTENOS :</td>
                            </tr>
                          </thead>
                          <tr>
                            <td class="col-xs-2"><?= $shop->description ?></td>
                            <td><?=$shop->email?></td>
                            <td>  <?= $shop->web_site ?></td>
                            <td> <?= $shop->phone_number ?></td>
                        </tr>
                        </table>
                      </div>
                  </div>
                </div>
               </div>
            </div>
                </div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

        <!-- Content -->
        <div id="content" class="clearfix">
          <section class="content">
            <div id="col-main" class="clearfix">
              <div class="home-popular-collections">
                <div class="container">
                  <div class="group_home_collections row">
                    <div class="col-md-24">
                      <div class="home_collections">
                        <h6 class="general-title">Productos</h6>
                        <div class="home_products_wrapper">
                          <div id="home_products">
                            <?php $__currentLoopData = $shop->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <div class="element no_full_width col-md-8 col-sm-8 not-animated" data-animate="fadeInUp" data-delay="0">
                                <ul class="row-container list-unstyled clearfix">
                                  <li class="row-left">
                                  <a class="container_item">
                                    <?php 
																		$image = route('images',"app/public/upload/products/$product->image")
                                     ?>
                                  <img src="<?= $image?>" class="img-responsive" alt="Curabitur cursus dignis">
                                  <span class="sale_banner">
                                  </span>
                                  </a>
                                  <div class="hbw">
                                    <span class="hoverBorderWrapper"></span>
                                  </div>
                                  </li>
                                  <li class="row-right parent-fly animMix">
                                  <div class="product-content-left">
                                    <a class="title-5"><?= $product->name ?></a>
                                    <span class="spr-badge" id="spr_badge_12932382113" data-rating="0.0">
                                    <span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
                                    <span class="spr-badge-caption">
                                    No reviews </span>
                                    </span>
                                  </div>
                                  <div class="product-content-right">
                                    <div class="product-price">
                                      <span class="price_sale">$<?= $product->price?></span>
                                      <del class="price_compare"> $300.00</del>
                                    </div>
                                  </div>
                                  <div class="list-mode-description">

                                  </div>
                                  <div class="hover-appear">
                                    <form action="./product.html" method="post">
                                      <div class="effect-ajax-cart">
                                        <input type="hidden" name="quantity" value="1">
                                        <button class="select-option" type="button" onclick="window.location.href='product.html'"><i class="fa fa-th-list" title="Select Options"></i><span class="list-mode">Select Option</span></button>
                                      </div>
                                    </form>
                                    <div class="product-ajax-qs hidden-xs hidden-sm">
                                      <div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal<?= $i ?>" class="quick_shop" data-toggle="modal">
                                        <i class="fa fa-eye" title="Quick view"></i><span class="list-mode">ver</span>
                                      </div>
                                    </div>
                                    <a class="wish-list" href="./account.html" title="wish list"><i class="fa fa-heart"></i><span class="list-mode">Agragar al carrito</span></a>
                                  </div>
                                  </li>
                                </ul>
                              </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                          </div>
                        </div>
                      </div>


                    </div>
                  </div>
              </div>

              </div>
            </div>

            <?php $__currentLoopData = $shop->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div id="quick-shop-modal<?= $i ?>" class="modal in" role="dialog" aria-hidden="false" tabindex="-1" data-width="800">
                <div class="modal-backdrop in" style="height: 742px;">
                </div>
                <div class="modal-dialog rotateInDownLeft animated">
                  <div class="modal-content">
                    <div class="modal-header">
                      <i class="close fa fa-times btooltip" data-toggle="tooltip" data-placement="top" title="" data-dismiss="modal" aria-hidden="true" data-original-title="Close"></i>
                    </div>
                    <div class="modal-body">
                      <div class="quick-shop-modal-bg" style="display: none;">
                      </div>
                      <div class="row">
                        <?php 
												$image = route('images',"app/public/upload/products/$product->image")
                         ?>
                        <div class="col-md-12 product-image">
                          <div id="quick-shop-image" class="product-image-wrapper">
                            <a class="main-image"><img class="img-zoom img-responsive image-fly" src="<?php echo e($image); ?>" data-zoom-image="<?php echo e($image); ?>" alt=""/></a>
                            <div class="gallery_main_qs product-image-thumb galerias">
                              <a class="image-thumb active" src="<?php echo e($image); ?>" data-image="<?php echo e($image); ?>" data-zoom-image="<?php echo e($image); ?>"><img width="100px" height="100px" src="<?php echo e($image); ?>" alt=""/></a>
                              <a class="image-thumb" src="<?php echo e($image); ?>" data-image="<?php echo e($image); ?>" data-zoom-image="<?php echo e($image); ?>"><img width="100px" height="100px" src="<?php echo e($image); ?>"></a>
                              <a class="image-thumb active" src="<?php echo e($image); ?>" data-image="<?php echo e($image); ?>" data-zoom-image="<?php echo e($image); ?>"><img width="100px" height="100px" src="<?php echo e($image); ?>" alt=""/></a>
                              <a class="image-thumb" src="<?php echo e($image); ?>" data-image="<?php echo e($image); ?>" data-zoom-image="<?php echo e($image); ?>"><img width="100px" height="100px" src="<?php echo e($image); ?>"></a>
                              <a class="image-thumb active" src="<?php echo e($image); ?>" data-image="<?php echo e($image); ?>" data-zoom-image="<?php echo e($image); ?>"><img width="100px" height="100px" src="<?php echo e($image); ?>" alt=""/></a>

                          </div>
                          <?php 
													$image = route('images',"app/public/upload/shops/$shop->image")
                           ?>
                          <a href="/sucursales/<?php echo e($shop->id); ?>"></a><img width="270px" height="270px" src="<?php echo e($image); ?>" class="img-responsive" alt="Donec aliquam ante non">
                          </div>
                        </div>
                        <div class="col-md-12 product-information">
                          <h1 id="quick-shop-title"><span> <a><?= $product->product_name ?></a></span></h1>
                          <div id="quick-shop-infomation" class="description">
                            <div id="quick-shop-description" class="text-left">
                              <p>
                                <?= $product->description ?>
                              </p>
                              <p>

                            </div>
                          </div>
                          <div id="quick-shop-container">
                            <div id="quick-shop-relative" class="relative text-left">
                              <ul class="list-unstyled">
                                <li class="control-group vendor">
                                <span class="control-label">Vendor :</span><a href="/collections/vendors?q=Vendor+1"> Vendor 1</a>
                                </li>
                                <li class="control-group type">
                                <span class="control-label">Type :</span><a href="/collections/types?q=Sweaters+Wear"> Sweaters Wear</a>
                                </li>
                              </ul>
                            </div>
                            <form action="#" method="post" class="variants" id="quick-shop-product-actions" enctype="multipart/form-data">
                              <div id="quick-shop-price-container" class="detail-price">
                                <span class="price_sale">$ <?=$product->price ?></span><span class="dash">/</span><del class="price_compare">$300.00</del>
                              </div>
                              <div class="quantity-wrapper clearfix">
                                <label class="wrapper-title">Piezas</label>
                                <div class="wrapper">
                                  <input type="text" id="qs-quantity" size="5" class="item-quantity" name="quantity" value="1">
                                  <span class="qty-group">
                                  <span class="qty-wrapper">
                                  <span class="qty-up" title="Increase" data-src="#qs-quantity">
                                  <i class="fa fa-plus"></i>
                                  </span>
                                  <span class="qty-down" title="Decrease" data-src="#qs-quantity">
                                  <i class="fa fa-minus"></i>
                                  </span>
                                  </span>
                                  </span>
                                </div>
                              </div>
                              <div id="quick-shop-variants-container" class="variants-wrapper">
                                <div class="selector-wrapper">
                                  <label for="#quick-shop-variants-1293238211-option-0">Color</label>
                                  <div class="wrapper">
                                    <select class="single-option-selector" data-option="option1" id="#quick-shop-variants-1293238211-option-0" style="z-index: 1000; position: absolute; opacity: 0; font-size: 15px;">
                                      <option value="black">black</option>
                                      <option value="red">red</option>
                                      <option value="blue">blue</option>
                                      <option value="purple">purple</option>
                                      <option value="green">green</option>
                                      <option value="white">white</option>
                                    </select>
                                    <button type="button" class="custom-style-select-box" style="display: block; overflow: hidden;"><span class="custom-style-select-box-inner" style="width: 264px; display: inline-block;">black</span></button><i class="fa fa-caret-down"></i>
                                  </div>
                                </div>
                                <div class="selector-wrapper">
                                  <label for="#quick-shop-variants-1293238211-option-1">Medida</label>
                                  <div class="wrapper">
                                    <select class="single-option-selector" data-option="option2" id="#quick-shop-variants-1293238211-option-1" style="z-index: 1000; position: absolute; opacity: 0; font-size: 15px;">
                                      <option value="small">chico</option>
                                      <option value="medium">mediano</option>
                                      <option value="large">grande</option>
                                    </select>
                                    <button type="button" class="custom-style-select-box" style="display: block; overflow: hidden;"><span class="custom-style-select-box-inner" style="width: 264px; display: inline-block;">Seleciona Medida</span></button><i class="fa fa-caret-down"></i>
                                  </div>
                                </div>
                              </div>
                              <div class="others-bottom">
                                <input id="quick-shop-add" class="btn small add-to-cart" type="submit" name="add" value="Add to Cart" style="opacity: 1;">
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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

<?php $__env->stopSection(); ?>
<?php $__env->startSection('map'); ?>
<script>
      function initMap() {
        var uluru = {lat: <?php echo e($shop->branches[0]->latitude); ?>, lng: <?php echo e($shop->branches[0]->longitude); ?>};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6eAu2eRTNpy8-5jmeTqgDFxALyGlZre0&callback=initMap"></script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layoutspage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>