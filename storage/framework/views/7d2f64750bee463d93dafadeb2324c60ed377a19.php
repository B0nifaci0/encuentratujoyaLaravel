<?php $__env->startSection('title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('menu'); ?>
<body class="templateIndex notouch">

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

										</li>
										<li class="nav-item dropdown">
										<a href="./blog-full.html" class="dropdown-toggle dropdown-link" data-toggle="dropdown">
											<span>Joyerias</span>
										</a>
                  </li>
										<li class="nav-item">
										<a href="/membresia">
										<span>Membresia</span>
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
													<a class="cart-image" href="/product"><img src="./assets/images/demo_77x77.png" alt="" title=""></a>
												</div>
												<div class="col-md-16 cart-right">
													<div class="cart-title">
														<a href="/producto">Product with left sidebar - black / small</a>
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
								<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?= $categori->id?>"><?= $categori->name?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
						</div>

						<div class="col-md-6 col-md-offset-1 hidden-md">
							<select id="estados_4" class="form-control round estados" name="id_estado" alt="4">
							<option value="*">Seleccione uno</option>
							<?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?= $state->id ?>"><?= $state->name ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
						</div>

						<div class="col-md-6 col-md-offset-1 hidden-md">
							<select id="municipios_4" name="municipality_id" class="form-control"></select>
							</select>
							<form id="form_1" method="post" action="http://localhost:8000/producto/buscar">
								<input type="hidden" id="param_hidden_1" name="id_municipio">
									<select  style="visibility:hidden" name="id_category">
										<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?= $categori->id?>"><?= $categori->name?></option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
  <?php $__env->stopSection(); ?>
  <?php $__env->startSection('content'); ?>
    <div id="content-wrapper-parent">
        <div id="content-wrapper">
			<!-- Main Slideshow -->
			<div class="home-slider-wrapper clearfix">
				<div class="camera_wrap" id="home-slider">
					<div data-src="<?php echo e(url('dashboard-assets/assets/images/ch1.jpg')); ?>">
						<div class="camera_caption camera_title_1 fadeIn">
						  <a href="./collection.html" style="color:#010101;"></a>
						</div>
						<div class="camera_caption camera_caption_1 fadeIn" style="color: rgb(1, 1, 1);">
							LA ELEGANCIA EN TUS MANOS. CONTAMOS CON MAS DE 1000 JOYAS PARA TU ESTILO
						</div>
						<div class="camera_caption camera_image-caption_1 moveFromLeft">

									<div class ="col-md-6 col-md-offset-3 visible-md visible-lg">
										<select  id="param_1" class=" col-md-12 form-control round" name"id_category" width="30%">
											<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<option value="<?= $categori->id?>"><?= $categori->name?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
									</div>

									<div class="col-md-6 col-md-offset-1 visible-md visible-lg">
										<select id="estados_1" class="form-control round estados" name="id_estado" alt="1">
										<option value="*">Seleccione uno</option>
										<?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?= $state->id ?>"><?= $state->name ?></option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
                  </div>

									<div class="col-md-6 col-md-offset-1 visible-md visible-lg">
          									<select id="municipios_1" name="municipality_id" class="form-control"></select>

										<form id="form_2" method="post" action="http://localhost:8000/producto/buscar">
												<input type="hidden" id="param_hidden_2">

												<select  style="visibility:hidden" name="id_category">
													<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<option value="<?= $categori->id?>"><?= $categori->name?></option>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												</select>
										</form>
										<br>
										<br>


							</div>
							<div class="col-md-6 col-md-offset-9 visible-md visible-lg">
									<input type="hidden" id="id_municipio_1" name="" value="sdf">
									<div class="row">
										<button alt="1" type="submit" class="btn btn-lg search">Buscar</button>

									</div>
							</div>
							</div>
					</div>

					<div data-src="<?php echo e(url('dashboard-assets/assets/images/chi2.jpg')); ?>">
            <div class="camera_caption camera_title_2 fadeIn">
						  <a href="./collection.html" style="color:#010101;"></a>
						</div>
						<div class="camera_caption camera_image-caption_2 moveFromLeft" style="visibility: hidden;">
								<div class ="col-md-6 col-md-offset-3 visible-md visible-lg">
										<select  id="param_2" class=" col-md-12 form-control round" name"id_category" width="30%">
											<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<option value="<?= $categori->id?>"><?= $categori->name?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
									</div>
									<div class="col-md-6 col-md-offset-1 visible-md visible-lg">
										<select id="estados_2" class="form-control round estados" name="id_estado" alt="2">
										<option value="*">Seleccione uno</option>
										<?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?= $state->id ?>"><?= $state->name ?></option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
									</div>

									<div class="col-md-6 col-md-offset-1 visible-md visible-lg">
														<select id="municipios_2" name="municipality_id" class="form-control"></select>
										</select>
										<form id="form_3" method="post" action="http://www.jewelrypalace.site/producto/buscar">
												<input type="hidden" id="param_hidden_3">

												<select  style="visibility:hidden" id="param_2" name="id_category">
													<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<option value="<?= $categori->id?>"><?= $categori->name?></option>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												</select>
										</form>
									</div>
									<div class="col-md-6 col-md-offset-9 visible-md visible-lg">
											<input type="hidden" id="id_municipio_2" name="">
											<button alt="1" type="submit" class="btn btn-lg search">Buscar</button>
									</div>
						</div>

						<div class="camera_caption camera_caption_1 fadeIn" style="color: rgb(1, 1, 1);">
							LOS MEJORES AMIGOS DE LAS MUJERES SON LOS DIAMANTES,BUSCA TU JOYA PREFERIDA
						</div>
					</div>
					<div data-src="<?php echo e(url('dashboard-assets/assets/images/chi3.jpg')); ?>">
            <div class="camera_caption camera_title_1 fadeIn">
              <a href="./collection.html" style="color:#010101;"></a>
            </div>
            <div class="camera_caption camera_caption_1 fadeIn" style="color: rgb(1, 1, 1);">
              LA VIDA ES UNA FIESTA , VISTE PARA ELLA JEWERLY PALACE TE AYUDA
            </div>
						<div class="camera_caption camera_image-caption_3 moveFromLeft">
								<div class ="col-md-6 col-md-offset-3 visible-md visible-lg">
										<select  id="param_3" class=" col-md-12 form-control round" name"id_category" width="30%">
											<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<option value="<?= $categori->id?>"><?= $categori->name?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
									</div>
									<div class="col-md-6 col-md-offset-1 visible-md visible-lg">
										<select id="estados_3" class="form-control round estados" name="id_estado" alt="3">
										<option value="*">Seleccione uno</option>
										<?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?= $state->id ?>"><?= $state->name ?></option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
                </div>

									<div class="col-md-6 col-md-offset-1 visible-md visible-lg">
          					<select id="municipios_3" name="municipality_id" class="form-control"></select>
										</select>
										<form id="form_3" method="post" action="http://www.jewelrypalace.site/producto/buscar">
												<input type="hidden" id="param_hidden_3">

												<select  style="visibility:hidden" id="param_3" name="id_category">
													<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<option value="<?= $categori->id?>"><?= $categori->name?></option>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												</select>
										</form>
                  </div>

						<div class="camera_cta_1">

							<div class="col-md-6 col-md-offset-10 visible-md visible-lg">
									<input type="hidden" id="id_municipio_3" name="">
									<button alt="1" type="submit" class="btn search">Buscar</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Content -->

			<script type="text/javascript">
				// Script para envio de pormulario de busqueda
				$(".estados").change(function(){
					var selector =  $(this).attr("alt");
					var id_estado = $(this).val();
					var url = 'http://localhost:8000/estados/' + id_estado + '/municipios';
					//alert(url)
					$.get(url, function(json){
						$('#municipios_' + selector).empty();
						//alert('#municipios_' + selector);
				        $.each(json,function(i, municipio){
				          $('#municipios_' + selector).append('<option value = '+ municipio.id +'>' + municipio.name +'</option>')
				        });
						console.log(json)
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
					var param = $("#municipios_" + selector).val();
					alert(param)
					$("#param_hidden_" + selector).val(param);
					$("#form_" + selector).submit();
				});
			</script>
									</div>
								</div>
						</div>
						<div id="content-wrapper-parent">
        <div id="content-wrapper">
			<!-- Main Slideshow -->
			<div class="home-slider-wrapper clearfix">
				<div class="camera_wrap" id="home-slider">
					<div data-src="./assets/images/demo_1920x900.png">
						<div class="camera_caption camera_title_1 fadeIn">
						  <a href="./collection.html" style="color:#010101;">Live the moment</a>
						</div>
						<div class="camera_caption camera_caption_1 fadeIn" style="color: rgb(1, 1, 1);">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						</div>
						<div class="camera_caption camera_image-caption_1 moveFromLeft">
							<img src="./assets/images/demo_734x90.png" alt="image_caption">
						</div>
						<div class="camera_cta_1">
							<a href="./collection.html" class="btn">See Collection</a>
						</div>
					</div>
					<div data-src="./assets/images/demo_1920x900.png">
						<div class="camera_caption camera_title_2 moveFromLeft">
						  <a href="./collection.html" style="color:#666666;">Love’s embrace</a>
						</div>
						<div class="camera_caption camera_image-caption_2 moveFromLeft" style="visibility: hidden;">
							<img src="./assets/images/demo_770x185.png" alt="image_caption">
						</div>
						<div class="camera_cta_1">
							<a href="./collection.html" class="btn">See Collection</a>
						</div>
					</div>
					<div data-src="./assets/images/demo_1920x900.png">
						<div class="camera_caption camera_image-caption_3 moveFromLeft">
							<img src="./assets/images/demo_462x162.png" alt="image_caption">
						</div>
						<div class="camera_cta_1">
							<a href="./collection.html" class="btn">See Collection</a>
						</div>
					</div>
				</div>
			</div>
			<!-- Content -->
			<div id="content" class="clearfix">
				<section class="content">
					<div id="col-main" class="clearfix">
						<div class="home-popular-collections">
							<div class="container">
				<div class="group_home_collections row">
					<div class="col-md-24">
						<div class="home_collections">
							<h6 class="general-title">JOYERIAS EXCLUSIVAS</h6>
							<div class="home_collections_wrapper">
								<div id="home_collections">
									<?php $__currentLoopData = $shops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<div class="home_collections_item">
													<div class="home_collections_item_inner">
														<div class="collection-details">
																<?php 
																	$image = asset("storage/upload/shops/$shop->image");
																 ?>
															<a href="/productosdesucursal/<?php echo e($shop->id); ?>"><img width="270px" height="270px" src="<?php echo e($image); ?>" class="img-responsive" alt="Donec aliquam ante non"></a>

														</div>
														<div class="hover-overlay">
															<div class="collection-action">
															</div>
														</div>
													</div>
												</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</div>
								</div>
							</div>
						</div>
						<script>
							$(document).ready(function() {
							$('.collection-details').hover(
								function() {
								$(this).parent().addClass("collection-hovered");
								},
								function() {
								$(this).parent().removeClass("collection-hovered");
								});
							});
						</script>
					</div>
				</div>
						</div>

						<div class="home-newproduct">
							<div class="container">
								<div class="group_home_products row">
									<div class="col-md-24">
										<div class="home_products">
											<h6 class="general-title">Nuevos Productos</h6>
											<div class="home_products_wrapper">
												<div id="home_products">
													<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<div class="element no_full_width col-md-8 col-sm-8 not-animated" data-animate="fadeInUp" data-delay="2">
																<ul class="row-container list-unstyled clearfix">
																	<li class="row-left">
																	<a href="/product" class="container_item">
																		<?php 
																			$image = asset("storage/upload/products/$product->image");
																		 ?>
																	<img width="375px" height="375px" src="<?php echo e($image); ?>" class="img-responsive" alt="Donec aliquam ante non">

																	</a>
																	<div class="hbw">
																		<span class="hoverBorderWrapper"></span>
																	</div>
																	</li>
																	<li class="row-right parent-fly animMix">
																	<div class="product-content-left">
																		<a class="title-5"><?php echo e($product->name); ?></a>
																		<span class="spr-badge" id="spr_badge_12932369312" data-rating="4.0">
																		<span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
																		<span class="spr-badge-caption">
																		1 review </span>
																		</span>
																	</div>
																	<div class="product-content-right">
																		<div class="product-price">
																			<span class="price_sale"><?php echo e($product->price); ?></span>
																		</div>
																	</div>
																	<div class="row- container">
																		<div id="quick-shop-infomation" class="description">
																			<div id="quick-shop-description" class="text-left">
																				<p>
																					<?= $product->description ?>
																				</p>
																				<p>

																			</div>
																		</div>
																	</div>

																	<div class="hover-appear">
																		<form action="./product.html" method="post">
																			<div class="hide clearfix">
																				<select name="id">
																					<option value="3947648771">black / small</option>
																					<option selected="selected" value="3947648835">white / small</option>
																					<option value="3947648899">black / medium</option>
																					<option value="3947648963">white / medium</option>
																				</select>
																			</div>
																			<div class="effect-ajax-cart">
																				<input type="hidden" name="quantity" value="1">
																				<button class="select-option" type="button" onclick="window.location.href='/producto/<?php echo e($product->id); ?>'"><i class="fa fa-th-list" title="Select Options"></i><span class="list-mode">Select Option</span></button>
																			</div>
																		</form>
																		<div class="product-ajax-qs hidden-xs hidden-sm">
																			<div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal<?= $i?>" class="quick_shop" data-toggle="modal">
																				<i class="fa fa-eye" title="Quick view"></i><span class="list-mode">ver</span>
																			</div>
																		</div>
																		<a class="wish-list" href="./account.html" title="wish list"><i class="fa fa-heart"></i><span class="list-mode">Add to Wishlist</span></a>
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
						<div class="home-banner-wrapper">
							<div class="container">
								<div id="home-banner" class="text-center clearfix">
									<img class="pulse img-banner-caption" src="<?php echo e(url('dashboard-assets/assets/images/shops/an.png')); ?>" alt="">
									<div class="home-banner-caption">
										<h1>
											Contamos con la mas alta gama de joyeria fina, relojeria, plateria, bisuteria exclusivamente para tu estilo.
										</h1>
									</div>

								</div>
							</div>
						</div>
						<div class="home-blog">
							<div class="container">
								<div class="home-promotion-blog row">
									<h6 class="general-title">Promociones</h6>
									<div class="home-bottom_banner_wrapper col-md-12">
										<div id="home-bottom_banner" class="home-bottom_banner">
											<a href="./collection.html"><img src="<?php echo e(url('dashboard-assets/assets/images/marcas/L4-1.jpg')); ?>" alt=""></a>
										</div>
									</div>
									<div class="home-blog-wrapper col-md-12">
										<?php $__currentLoopData = $promotions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $promotion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

										<div id="home_blog" class="home-blog">
											<div class="home-blog-item row">
												<div class="date col-md-4">
													<div class="date_inner">
														<p>
															<small><?php echo e($promotion->start_date); ?></small><small><?php echo e($promotion->expirition_date); ?></small>
														</p>
													</div>
												</div>
												<div class="home-blog-content col-md-20">
													<h4><a href="./article-left.html"><?php echo e($promotion->name); ?></a></h4>
													<ul class="list-inline">
														<li class="author"><i class="fa fa-user"></i> Jin Alkaid</li>
														<li>/</li>
														<li class="comment">
														<a href="./article-left">
														<span><i class="fa fa-pencil-square-o"></i> 0</span> Comments </a>
														</li>
													</ul>
													<div class="intro">
<?php echo e($promotion->description); ?>													</div>
												</div>
											</div>
										</div>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</div>
								</div>
							</div>
						</div>

						<div class="home-partners">
							<div class="container">
								<div class="partners-logo row">
									<div class="col-md-24">
										<div id="partners-container" class="clearfix">
											<h6 class="general-title">Marcas Populares</h6>
											<div id="partners">
															<div class="logo text-center not-animated" data-animate="bounceIn" data-delay="150">
																<img class="pulse"src="<?php echo e(url('dashboard-assets/assets/images/marcas/logo.png')); ?>" alt="">
																</a>
															</div>
															<div class="logo text-center not-animated" data-animate="bounceIn" data-delay="150">

																<img class="pulse" src="<?php echo e(url('dashboard-assets/assets/images/marcas/cartier.jpg')); ?>" alt="">
																</a>
															</div>
															<div class="logo text-center not-animated" data-animate="bounceIn" data-delay="150">
																<img class="pulse" src="<?php echo e(url('dashboard-assets/assets/images/marcas/images.jpg')); ?>" alt="">
																</a>
															</div>
															<div class="logo text-center not-animated" data-animate="bounceIn" data-delay="150">
																<img class="pulse" src="<?php echo e(url('dashboard-assets/assets/images/marcas/descarga.png')); ?>" alt="">
																</a>
															</div>
															<div class="logo text-center not-animated" data-animate="bounceIn" data-delay="150">
																<img class="pulse" src="<?php echo e(url('dashboard-assets/assets/images/marcas/ff.png')); ?>" alt="">
																</a>
															</div>

															<div class="logo text-center not-animated" data-animate="bounceIn" data-delay="150">
																<img class="pulse" src="<?php echo e(url('dashboard-assets/assets/images/marcas/jc.jpg')); ?>" alt="">
																</a>
															</div>
															<div class="logo text-center not-animated" data-animate="bounceIn" data-delay="150">
																<img class="pulse" src="<?php echo e(url('dashboard-assets/assets/images/marcas/b.png')); ?>" alt="">
																</a>
															</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>

	<script src="<?php echo e(url('dashboard-assets/assets/javascripts/cs.global.js')); ?>" type="text/javascript"></script>

						<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
										<div class="col-md-12 product-image">
											<div id="quick-shop-image" class="product-image-wrapper">
												<?php 
													$image = asset("storage/upload/products/$product->image");
												 ?>
												<a class="main-image"><img class="img-zoom img-responsive image-fly" src="<?php echo e($image); ?>" data-zoom-image="<?php echo e($image); ?>" alt=""/></a>
												<div  class="gallery_main_qs product-image-thumb galerias">
													<a class="image-thumb active" src="<?php echo e($image); ?>" data-image="<?php echo e($image); ?>" data-zoom-image="<?php echo e($image); ?>"><img width="100px" height="100px" src="<?php echo e($image); ?>" alt=""/></a>
													<a class="image-thumb" src="<?php echo e($image); ?>" data-image="<?php echo e($image); ?>" data-zoom-image="<?php echo e($image); ?>"><img width="100px" height="100px" src="<?php echo e($image); ?>"></a>
													<a class="image-thumb active" src="<?php echo e($image); ?>" data-image="<?php echo e($image); ?>" data-zoom-image="<?php echo e($image); ?>"><img width="100px" height="100px" src="<?php echo e($image); ?>" alt=""/></a>
													<a class="image-thumb" src="<?php echo e($image); ?>" data-image="<?php echo e($image); ?>" data-zoom-image="<?php echo e($image); ?>"><img width="100px" height="100px" src="<?php echo e($image); ?>"></a>
													<a class="image-thumb active" src="<?php echo e($image); ?>" data-image="<?php echo e($image); ?>" data-zoom-image="<?php echo e($image); ?>"><img width="100px" height="100px" src="<?php echo e($image); ?>" alt=""/></a>

												</div>
												<?php 
													$image = asset("storage/upload/shops/$shop->image");
												 ?>
											<img width="270px" height="270px" src="<?php echo e($image); ?>" class="img-responsive" alt="Donec aliquam ante non">


											</div>
										</div>
										<div class="col-md-12 product-information">
											<h1 id="quick-shop-title"><span> <a><?= $product->name ?></a></span></h1>
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

</body>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layoutspage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>