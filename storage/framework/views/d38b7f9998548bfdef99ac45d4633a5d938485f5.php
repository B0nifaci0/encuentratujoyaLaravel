
<?php $__env->startSection('title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('menu'); ?>
		<!-- Header -->
		<header id="top" class="clearfix">
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
											<a href="#">
											<span>Inicio</span>
											</a>
											</li>

											<!--<li class="dropdown mega-menu">
											<a href="./collection.html" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
											<span>Collections</span>
											<i class="fa fa-caret-down"></i>
											<i class="sub-dropdown1 visible-sm visible-md visible-lg visible-lg"></i>
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
											</li>-->
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
													</li>-->
													<!--<li>
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
											</div>>-->
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
								<select  id="param_1" class=" col-md-12 form-control round" width="30%" alt="1">
									<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?= $categori->id?>"><?= $categori->name?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
							</div>

							<div class="col-md-6 col-md-offset-1 hidden-md">
								<select id="estados_1" class="form-control round estados" name="id_estado" alt="1">
								<option value="*">Seleccione uno</option>
								<?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?= $state->id ?>"><?= $state->name ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
							</div>

							<div class="col-md-6 col-md-offset-1 hidden-md">


								<form id="form_1" method="get" action="http://www.jewelrypalace.site/producto/buscar">
								<select id="municipios_1" name="id_municipality" class="form-control"></select>
								</select>
										<input type="hidden" name="id_category" id="param_hidden_1">
										<div class="col-md-6 col-md-offset-10 hidden-md">
												<button alt="1" type="submit" class="btn btn-lg search">Buscar</button>
										</div>
								</form>
							</div>

						</li>
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

			<!--End Navigation-->
  <?php $__env->stopSection(); ?>
  <?php $__env->startSection('content'); ?>
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
								<a href="/" class="homepage-link" title="Back to the frontpage">Inicio</a>
								<span>/</span>
								<span class="page-title">Todos los Porductos</span>
							</div>
						</div>
					</div>
				</div>

				<section class="content">
					<div class="container">
						<div class="row">
							<div id="collection-content">
								<div id="page-header">
									<h1 id="page-title">Resultados de busqueda </h1>
								</div>

								<div class="collection-main-content">
									<div id="prodcoll" class="col-sm-6 col-md-6 sidebar hidden-xs">
										<div class="group_sidebar">
											<div class="sb-wrapper">
												<!-- filter tags group -->
												<div class="filter-tag-group">
													<h6 class="sb-title">Filtro</h6>
														<select  id="param_2" class=" col-md-12 form-control round" width="30%">
															<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																<option value="<?= $categori->id?>"><?= $categori->name?></option>
															<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
														</select>

														<select id="estados_2" class="form-control round estados" name="id_estado" alt="2">
														<option value="*">Seleccione uno</option>
														<?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<option value="<?= $state->id ?>"><?= $state->name ?></option>
								 						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
														</select>


														<form id="form_2" method="get" action="http://www.jewelrypalace.site/producto/buscar">
															<select id="municipios_2" name="id_municipality" class="form-control" alt="2"></select>
																<input type="hidden" name="id_category" id="param_hidden_2">

																<div class="col-md-6 col-md-offset-10 hidden-md">
																		<button alt="2" type="submit" class="btn btn-lg search">Buscar</button>
																</div>
														</form>


													<!-- tags groupd 3 -->
													<div class="tag-group" id="coll-filter-3">
														<p class="title">
															Price
														</p>
														<ul>
															<li><a title="Narrow selection to products matching tag Under $100" href="#"><span class="fe-checkbox"></span> Under $100</a></li>
															<li><a title="Narrow selection to products matching tag $100 - $200" href="#"><span class="fe-checkbox"></span> $100 - $200</a></li>
															<li><a title="Narrow selection to products matching tag Above $200" href="#"><span class="fe-checkbox"></span> Above $200</a></li>
														</ul>
													</div>
													<!-- tags groupd 3 -->
												</div>
											</div>

									<script type="text/javascript">
										// Script para envio de pormulario de busqueda
										$(".estados").change(function(){
											var selector =  $(this).attr("alt");
											var id_estado = $(this).val();
											var url = '/estados/' + id_estado + '/municipios';
											$.get(url, function(json){
												$('#municipios_' + selector).empty();
										        $.each(json,function(i, municipio){
										          $('#municipios_' + selector).append('<option value = '+ municipio.id +'>' + municipio.name +'</option>')
										        });
												console.log(json);
											});
										});

										$(".municipios").change(function(){
											var id_municipio = $(this).val();
											var selector = $(this).attr("alt");
											$("#id_municipio_" + selector).val(id_municipio);
										});

										$(".search").click(function(e){
											e.preventDefault();
											var selector = $(this).attr("alt");

											var category = $("#param_" + selector).val();
											$("#param_hidden_" + selector).val(category);

											$("#form_" + selector).submit();
										});

									</script>


											<div class="home-collection-wrapper sb-wrapper clearfix">
												<h6 class="sb-title">Product Categories</h6>
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
																				<a class="title-5" href="./product.html">I wish a apecial</a>
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
												<h6 class="sb-title">Welcome</h6>
												<ul class="list-unstyled sb-content textwidget list-styled">
													<li>
													<p>
														Porro quisquam est, qui dolorem ipsum sitet dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora labore et dolore eut aliquam quaerat
													</p>
													</li>
												</ul>
											</div>

											<div class="sb-wrapper left-sample-block">
												<h6 class="sb-title">Product Types</h6>
												<ul class="list-unstyled sb-content list-styled">
													<li>
													<i class="fa fa-circle"></i><a href="#" title="Dressing">Dressing</a>
													</li>
													<li>
													<i class="fa fa-circle"></i><a href="#" title="Hoodies Wear">Hoodies Wear</a>
													</li>
													<li>
													<i class="fa fa-circle"></i><a href="#" title="Sweaters Wear">Sweaters Wear</a>
													</li>
												</ul>
											</div>
											<div class="sb-item slidebar-banner">
												<h6 class="sb-title">Promotion</h6>
												<div class="">
													<img src="./assets/images/demo_270x340.png" alt="">
												</div>
											</div>
											<!--End sb-item-->
										</div><!--end group_sidebar-->
									</div>
									<div id="col-main" class="collection collection-page col-sm-18 col-md-18 no_full_width have-left-slidebar">
										<div class="container-nav clearfix">
											<div id="options" class="container-nav clearfix">
												<ul class="list-inline text-right">
													<li class="grid_list">
													<ul class="list-inline option-set hidden-xs" data-option-key="layoutMode">
														<li data-original-title="Grid" data-option-value="fitRows" id="goGrid" class="goAction btooltip active" data-toggle="tooltip" data-placement="top" title="">
														<span></span>
														</li>
														<li data-original-title="List" data-option-value="straightDown" id="goList" class="goAction btooltip" data-toggle="tooltip" data-placement="top" title="">
														<span></span>
														</li>
													</ul>
													</li>
													<li class="sortBy">
													<div id="sortButtonWarper" class="dropdown-toggle" data-toggle="dropdown">
														<strong class="title-6">View as</strong>
														<button id="sortButton">
														<span class="name">Featured</span><i class="fa fa-caret-down"></i>
														</button>
														<i class="sub-dropdown1"></i>
														<i class="sub-dropdown"></i>
													</div>
													<div id="sortBox" class="control-container dropdown-menu">
														<ul id="sortForm" class="list-unstyled option-set text-left list-styled" data-option-key="sortBy">
															<li class="sort" data-option-value="manual">Featured</li>
															<li class="sort" data-option-value="price-ascending" data-order="asc">Price: Low to High</li>
															<li class="sort" data-option-value="price-descending" data-order="desc">Price: High to Low</li>
															<li class="sort" data-option-value="title-ascending" data-order="asc">A-Z</li>
															<li class="sort" data-option-value="title-descending" data-order="desc">Z-A</li>
															<li class="sort" data-option-value="created-ascending" data-order="asc">Oldest to Newest</li>
															<li class="sort" data-option-value="created-descending" data-order="desc">Newest to Oldest</li>
															<li class="sort" data-option-value="best-selling">Best Selling</li>
														</ul>
													</div>
													</li>
												</ul>
											</div>
										</div>
										<div id="sandBox-wrapper" class="group-product-item row collection-full">
											<ul id="sandBox" class="list-unstyled">
												<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<li class="element first no_full_width" data-alpha="Curabitur cursus dignis" data-price="25900">
													<ul class="row-container list-unstyled clearfix">
														<li class="row-left">
															<?php 
																$image = route('images',"app/public/upload/products/$product->image")
															 ?>
														<a href="<?php echo e($image); ?>" class="container_item">
														<img src="<?php echo e($image); ?>" class="img-responsive" alt="Curabitur cursus dignis">
														<span class="sale_banner">
														<span class="sale_text">Oferta</span>
														</span>
														</a>
														<div class="hbw">
															<span class="hoverBorderWrapper"></span>
														</div>
														</li>
														<li class="row-right parent-fly animMix">
														<div class="product-content-left">
															<a class="title-5" href="./product.html"><?php echo e($product->name); ?></a>
															<span class="spr-badge" id="spr_badge_129323821155" data-rating="0.0">
															<span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
															<span class="spr-badge-caption">
															Sin reviews </span>
															</span>
														</div>
														<div class="product-content-right">
															<div class="product-price">
																<span class="price_sale">$259.00</span>
																<del class="price_compare"> $300.00</del>
															</div>
														</div>
														<div class="list-mode-description">
															<?php echo e($product->description); ?>

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
												</li>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</ul>
										</div>
									</div>
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

			<div class="footer-content footer-content-top clearfix">
				<div class="container">
					<div class="footer-link-list col-md-6">
					  <div class="group">
						<h5 class="general-title">About Us</h5>
						<ul class="list-unstyled list-styled">
						  <li class="list-unstyled">
							<a href="./account.html">Store Locations</a>
						  </li>
						  <li class="list-unstyled">
							<a href="./account.html">Whosesalers</a>
						  </li>
						  <li class="list-unstyled">
							<a href="./account.html">Map Site</a>
						  </li>
						  <li class="list-unstyled">
							<a href="./account.html">Contact Us</a>
						  </li>
						</ul>
					  </div>
					</div>
					<div class="footer-link-list col-md-6">
					  <div class="group">
						<h5 class="general-title">Information</h5>
						<ul class="list-unstyled list-styled">
						  <li class="list-unstyled">
							<a href="./account.html">Help &amp; FAQs</a>
						  </li>
						  <li class="list-unstyled">
							<a href="./account.html">Advance Search</a>
						  </li>
						  <li class="list-unstyled">
							<a href="./account.html">Gift Cards</a>
						  </li>
						  <li class="list-unstyled">
							<a href="./account.html">Shop By Brands</a>
						  </li>
						</ul>
					  </div>
					</div>
					<div class="footer-link-list col-md-6">
					  <div class="group">
						<h5 class="general-title">Account</h5>
						<ul class="list-unstyled list-styled">
						  <li class="list-unstyled">
							<a href="./account.html">Preferences</a>
						  </li>
						  <li class="list-unstyled">
							<a href="./account.html">Order History</a>
						  </li>
						  <li class="list-unstyled">
							<a href="./account.html">Cart Page</a>
						  </li>
						  <li class="list-unstyled">
							<a href="./account.html">Sign In</a>
						  </li>
						</ul>
					  </div>
					</div>
					<div class="footer-link-list col-md-6">
					  <div class="group">
						<h5 class="general-title">Customer</h5>
						<ul class="list-unstyled list-styled">
							<li class="list-unstyled">
								<a href="./search.html">Search Advanced</a>
							</li>
							<li class="list-unstyled">
								<a href="#">Return Policy</a>
							</li>
							<li class="list-unstyled">
								<a href="#">Privacy Policy</a>
							</li>
							<li class="list-unstyled">
								<a href="#">Help &amp; Contact</a>
							</li>
						</ul>
					  </div>
					</div>
				</div>
			</div>
			<div class="footer-content footer-content-bottom clearfix">
				<div class="container">
					<div class="copyright col-md-12">
						© 2015 <a href="./about-us.html">Jewelry - HTML template</a>. All Rights Reserved.
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

	<div id="quick-shop-modal" class="modal in" role="dialog" aria-hidden="false" tabindex="-1" data-width="800">
		<div class="modal-backdrop in" style="height: 742px;">
		</div>
		<div class="modal-dialog rotateInDownLeft animated">
			<div class="modal-content">
				<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i=> $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="modal-header">
					<i class="close fa fa-times btooltip" data-toggle="tooltip" data-placement="top" title="" data-dismiss="modal" aria-hidden="true" data-original-title="Close"></i>
				</div>
				<div class="modal-body">
					<div class="quick-shop-modal-bg" style="display: none;">
					</div>
					<div class="row">
						<div class="col-md-12 product-image">
							<div  class="quick-shop-image product-image-wrapper">
								<a class="main-image"><img class="img-zoom img-responsive image-fly" src="<?php echo e($image); ?>" data-zoom-image="<?php echo e($image); ?>" alt=""/></a>
								<div id="gallery_main_qs" class="product-image-thumb">
									<a class="image-thumb active" href="./assets/1images/demo_79x79.png" data-image="<?php echo e($image); ?>" data-zoom-image="<?php echo e($image); ?>"><img src="<?php echo e($image); ?>" alt=""/></a>
									<a class="image-thumb" href="<?php echo e($image); ?>" data-image="<?php echo e($image); ?>" data-zoom-image="<?php echo e($image); ?>"><img src="<?php echo e($image); ?>" alt=""/></a>
									<a class="image-thumb" href="<?php echo e($image); ?>" data-image="<?php echo e($image); ?>" data-zoom-image="<?php echo e($image); ?>"><img src="<?php echo e($image); ?>" alt=""/></a>
									<a class="image-thumb" href="<?php echo e($image); ?>" data-image="<?php echo e($image); ?>" data-zoom-image="<?php echo e($image); ?>"><img src="<?php echo e($image); ?>" alt=""/></a>
									<a class="image-thumb" href="<?php echo e($image); ?>" data-image="<?php echo e($image); ?>" data-zoom-image="<?php echo e($image); ?>"><img src="<?php echo e($image); ?>" alt=""/></a>
									<a class="image-thumb" href="<?php echo e($image); ?>" data-image="<?php echo e($image); ?>" data-zoom-image="<?php echo e($image); ?>"><img src="<?php echo e($image); ?>" alt=""/></a>
								</div>
							</div>
						</div>
						<div class="col-md-12 product-information">
							<h1 id="quick-shop-title"><span><a href="/products/curabitur-cursus-dignis">Curabitur cursus dignis</a></span></h1>
							<div id="quick-shop-infomation" class="description">
								<div id="quick-shop-description" class="text-left">
									<p>
										Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis amet voluptas assumenda est, omnis dolor repellendus quis nostrum.
									</p>
									<p>
										Temporibus autem quibusdam et aut officiis debitis aut rerum dolorem necessitatibus saepe eveniet ut et neque porro quisquam est, qui dolorem ipsum quia dolor s...
									</p>
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
										<span class="price_sale">$259.00</span><span class="dash">/</span><del class="price_compare">$300.00</del>
									</div>
									<div class="quantity-wrapper clearfix">
										<label class="wrapper-title">Quantity</label>
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
											<label for="#quick-shop-variants-1293238211-option-1">Size</label>
											<div class="wrapper">
												<select class="single-option-selector" data-option="option2" id="#quick-shop-variants-1293238211-option-1" style="z-index: 1000; position: absolute; opacity: 0; font-size: 15px;">
													<option value="small">small</option>
													<option value="medium">medium</option>
													<option value="large">large</option>
												</select>
												<button type="button" class="custom-style-select-box" style="display: block; overflow: hidden;"><span class="custom-style-select-box-inner" style="width: 264px; display: inline-block;">small</span></button><i class="fa fa-caret-down"></i>
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
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</div>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layoutspage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>