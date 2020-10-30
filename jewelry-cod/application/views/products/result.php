<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/bootstrap-slider.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/css/bootstrap-slider.min.css" media="screen" title="no title">
<!--
 <pre>
 	<?= print_r($products) ?>
 </pre>

<link rel="stylesheet" href="<?= URL ?>assets/dashboard-assets/global/vendor/magnific-popup/magnific-popup.css">
	<div id="content-wrapper-parent">
		<div id="content-wrapper">
			<!-- Content -->


			<div id="content" class="clearfix">
				<div id="breadcrumb" class="breadcrumb">
					<div itemprop="breadcrumb" class="container">
						<div class="row">
							<div class="col-md-24">
								<a href="http://www.jewelrypalace.site/" class="homepage-link" title="Back to the frontpage">Inicio</a>
								<span>/</span>
							<a href="http://www.jewelrypalace.site/"><span class="page-title">Buscar</span></a>
							</div>
						</div>
					</div>
				</div>

				<section class="content">
					<div class="container">
						<div class="row">
							<div id="collection-content">
								<div id="page-header">
									<h1 id="page-title">Resultados de Busqueda en<h3><?= $products[0]->nombre_municipio ?></h3></h1>
								</div>
								<div class="collection-warper col-sm-24 clearfix">
									<div class="collection-panner">
										<img src="<?= URL ?>assets/images/fondo4.jpg" class="img-responsive" alt="">
									</div>
								</div>
								<div class="collection-main-content">
								<form id="form" method="post" action="http://www.jewelrypalace.site/products/search/">
									<div id="prodcoll" class="col-sm-6 col-md-6 sidebar hidden-xs">
										<div class="group_sidebar">
											<div class="sb-wrapper">
												<!-- filter tags group -->
												<div class="filter-tag-group">
													<h6 class="sb-title">Encuentra t mejor joys</h6>
													<!-- tags groupd 1 -->
													<div class="tag-group" id="coll-filter-1">
														<p class="title">
															Selecciona Categoria:
														</p>
														<ul>
															<select  id="param" class="form-control round" name="id_category">
																<?php foreach ($categories as $categori): ?>
																	<option value="<?= $categori->id_category?>"><?= $categori->name?></option>
																<?php endforeach; ?>
															</select>
															</ul>
													</div>
													<!-- tags groupd 3 -->
													<div class="tag-group" id="coll-filter-3">
														<p class="title">
															Selecciona Estado:
														</p>
														<ul>
															<select id="estados" class="form-control round estados" name="id_estado" alt="1">
																<option value="*">Seleccione uno</option>
																<?php foreach ($estados as $estado): ?>
																	<option value="<?= $estado->id_estados ?>"><?= $estado->name ?></option>
																<?php endforeach; ?>
															</select>
														</ul>
													</div>

													<!-- tags groupd 3 -->
													<div class="tag-group" id="coll-filter-4">
														<p class="title">
															Selecciona Municipio:
														</p>
														<ul>
															<select id="municipios" class="form-control round municipios" name="id_municipio" alt="1">
														</ul>
													</div>


													<div class="tag-group" id="coll-filter-4">
														<p class="title">

														</p>
														<ul>
															<select id="municipios" class="form-control round municipios" alt="1">

														</ul>
													</div>

													<!-- tags groupd 3 -->
												</div>

											</div>


											<!-- tags groupd 3 -->

									</div>



							<div class="">
								<p>
									Filter by price interval:
								</p>
                $ 100
                <input id="ex2" name="range" type="text" class="span2" value="" data-slider-min="100" data-slider-max="1000" data-slider-step="5" <?= ($range->min == "") ? "data-slider-value='[200,2000]'" : "data-slider-value='[$range->min,$range->max]'"?>/>
                $ 10,000
								<br><br>
								<script type="text/javascript">
									$("#ex2").slider({});
								</script>
								<style media="screen">
									.slider-horizontal{
										width: 100px !important;
									}
								</style>
							</div>

              <div class="home-collection-wrapper sb-wrapper clearfix">
                <div class="camera_cta_1">

                      <div class="col-md-16 col-md-offset-1">
                      <input type="hidden" id="id_municipio" name="">
                      <div class="col-md-24 col-md-offset-6">
                    <button  type="submit" class="btn btn-lg search">Buscar</button>
                      </div>
                      </div>
                </div>
              </div>
            </div>
          </div>
								</form>


									<script type="text/javascript">
										// Script para envio de pormulario de busqueda
										$(".estados").change(function(){
											var id_estado = $(this).val();
											var url = 'http://www.jewelrypalace.site/municipios/get/' + id_estado;
											$.get(url, function(data){
												$("#municipios").html(data);
											});
										});

										$(".municipios").change(function(){
											var id_municipio = $(this).val();
											var selector = $(this).attr("alt");
											$("#id_municipio").val(id_municipio);
										});

										/*
										$(".search").click(function(e){
											e.preventDefault();
											var param = $("#param").val();
											$("#param_hidden").val(param);
											$("#form").submit();
										});
										*/
									</script>
												<!--<div class="group_deal_products">
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
																				<img src="../../assets/images/productos/aretes2.jpg" class="img-responsive" alt="Curabitur cursus dignis">
																				</a>
																				</li>
																				<li class="row-right parent-fly animMix">
																				<a class="title-5" href="./product.html"></a>
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
																				<img src="../../assets/images/productos/aretes1.png" class="img-responsive" alt="Curabitur cursus dignis">
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
																					<button class="add-to-cart" type="submit" name="add">AGREGAR AL CARRITO</button>
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
																				<img src="../../assets/images/productos/anillo3.jpg" class="img-responsive" alt="Donec aliquam ante non">
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
																				<img src="../../assets/images/productos/anillo.png" class="img-responsive" alt="Donec condime fermentum">
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
												<h6 class="sb-title">Product Vendors</h6>
												<ul class="list-unstyled sb-content list-styled">
													<li>
													<i class="fa fa-circle"></i><a href="#" title="Vendor 1">Vendor 1</a>
													</li>
													<li>
													<i class="fa fa-circle"></i><a href="#" title="Vendor 2">Vendor 2</a>
													</li>
													<li>
													<i class="fa fa-circle"></i><a href="#" title="Vendor 3">Vendor 3</a>
													</li>
													<li>
													<i class="fa fa-circle"></i><a href="#" title="Vendor 4">Vendor 4</a>
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
													<img src="../../assets/images/productos/anillo2.jpg" alt="">
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

													<div id="sortBox" class="control-container dropdown-menu">
														<ul id="sortForm" class="list-unstyled option-set text-left list-styled" data-option-key="sortBy">
															<li class="sort" data-option-value="manual">Featured</li>
															<li class="sort" data-option-value="price-ascending" data-order="asc">Precio: Más bajo al Más alto</li>
															<li class="sort" data-option-value="price-descending" data-order="desc">Precio: Más alto al Más bajo</li>
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
											<?php foreach ($products as $i => $product): ?>
												<li class="element first no_full_width" data-alpha="Curabitur cursus dignis" data-price="25900">
													<ul class="row-container list-unstyled clearfix">
														<li class="row-left">
															<a href="#" class="container_item">
															<img src="<?= URL ?>assets/images/productos/<?= $product->product_image ?>" class="img-responsive" alt="Curabitur cursus dignis">
															<span class="sale_banner">
															<span class="sale_text">Nuevo</span>
															</span>
															</a>
															<div class="hbw">
																<span class="hoverBorderWrapper"></span>
															</div>
														</li>
														<li class="row-right parent-fly animMix">
															<div class="product-content-left">
																<a class="title-5" href="./product.html"><?= $product->product_name ?></a>
																<span class="spr-badge" id="spr_badge_129323821155" data-rating="0.0">
																<span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
																<span class="spr-badge-caption">
																No reviews </span>
																</span>
															</div>
															<div class="product-content-right">
																<div class="product-price">
																	<span class="price_sale">$<?= money_format('%.2n', $product->price) ?></span>
																	<del class="price_compare">
																		$<?= money_format('%.2n', $product->price + ($product->price * .25)) ?>
																	</del>
																</div>
															</div>
															<div class="list-mode-description">
																<?= $product->product_description ?>
															</div>
															<div class="hover-appear">
																<form action="#" method="post">
																	<div class="effect-ajax-cart">
																		<input name="quantity" value="1" type="hidden">
																		<button class="select-option" type="button" onclick="window.location.href='product.html'"><i class="fa fa-shopping-cart" title="Agregar al carrito"></i><span class="list-mode">Agregar al carrito</span></button>
																	</div>
																</form>
																<div class="product-ajax-qs hidden-xs hidden-sm">
																	<div data-handle="curabitur-cursus-dignis" data-target="#quick-shop-modal<?= $i ?>" class="quick_shop" data-toggle="modal">
																		<i class="fa fa-eye" title="Vista rapida"></i><span class="list-mode">Vista rapida</span>

																	</div>
																</div>
																<a class="wish-list" href="./account.html" title="wish list"><i class="fa fa-heart"></i><span class="list-mode">Agregar a deseos</span></a>
															</div>
														</li>
													</ul>
												</li>
											<?php endforeach ?>
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
			<h6 class="general-title contact-footer-title">JOYERIAS CERCA DE TI</h6>
			<div id="widget-newsletter">
				<div id="partners">
					<?php foreach ($shops as $shop):?>
						<div class='logo text-center not-animated' data-animate='bounceIn' data-delay='150'>
							<a class='animated' href="<?= URL ?>shops/show/<?= $shop->id_shop ?>">
							<img class="pulse" src="http://www.jewelrypalace.site/assets/images/shops/<?= $shop->image ?>" alt="">
							</a>
						</div>
					<?php endforeach ?>
				</div>
			</div>

<!--
			<div class="footer-content footer-content-top clearfix">
				<div class="container">
					<div class="footer-link-list col-md-6">
					  <div class="group">
						<h5 class="general-title"></h5>
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
					</div>-->
					<!--
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
					</div>-->
					<!--
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
					</div>-->
					<!--
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
			</div>-->
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

	<?php foreach ($products as $i => $product): ?>
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
									<a class="main-image"><img class="img-zoom img-responsive image-fly" src="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" data-zoom-image="../../assets/images/productos/anillo-superman.jpg" alt=""/></a>
									<div id="gallery_main_qs" class="product-image-thumb">
										<a class="image-thumb active" href="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" data-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" data-zoom-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>"><img src="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" alt=""/></a>
										<a class="image-thumb md-search" href="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" data-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" data-zoom-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>"><img src="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" alt=""/></a>
										<a class="image-thumb md-search" href="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" data-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" data-zoom-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>"><img src="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" alt=""/></a>
										<a class="image-thumb md-search" href="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" data-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" data-zoom-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>"><img src="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" alt=""/></a>
										<a class="image-thumb md-search" href="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" data-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" data-zoom-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>"><img src="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" alt=""/></a>
										<a class="image-thumb md-search" href="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" data-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" data-zoom-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>"><img src="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" alt=""/></a>
									</div>
								  <a class='animated' href="<?= URL ?>shops/show/<?= $product->shop->id_shop ?>">
										<img src="../../assets/images/shops/<?= $product->shop->image ?>">
									</a>
								</div>
							</div>
							<div class="col-md-12 product-information">
								<h1 id="quick-shop-title"><span><a href="/products/curabitur-cursus-dignis">Anillo</a></span></h1>
								<div id="quick-shop-infomation" class="description">
									<div id="quick-shop-description" class="text-left">
										<p>
									<?= $product->product_description ?>
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
											<span class="price_sale">$<?= $product->price ?></span><span class="dash">/</span><del class="price_compare">$300.00</del>
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
														<option value="black">Negro</option>
														<option value="red">Rojo</option>
														<option value="blue">Azul</option>
														<option value="purple">Purpura</option>
														<option value="green">Verde</option>
														<option value="white">Blanco</option>
													</select>
													<button type="button" class="custom-style-select-box" style="display: block; overflow: hidden;"><span class="custom-style-select-box-inner" style="width: 264px; display: inline-block;">SELECCIONA UN COLOR</span></button><i class="fa fa-caret-down"></i>
												</div>
											</div>
											<div class="selector-wrapper">
												<label for="#quick-shop-variants-1293238211-option-1">Talla</label>
												<div class="wrapper">
													<select class="single-option-selector" data-option="option2" id="#quick-shop-variants-1293238211-option-1" style="z-index: 1000; position: absolute; opacity: 0; font-size: 15px;">
														<option value="small">Chica</option>
														<option value="medium">Media</option>
														<option value="large">Grande</option>
													</select>
													<button type="button" class="custom-style-select-box" style="display: block; overflow: hidden;"><span class="custom-style-select-box-inner" style="width: 264px; display: inline-block;">SELECCIONA TALLA</span></button><i class="fa fa-caret-down"></i>
												</div>
											</div>
										</div>
										<div class="others-bottom">
											<input id="quick-shop-add" class="btn small add-to-cart" type="submit" name="add" value="AGREGAR AL CARRITO" style="opacity: 1;">
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>

<script src="<?= URL ?>assets/dashboard-assets/global/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function ($) {
	// Interactividad con la galeria
	$('.md-search').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		mainClass: 'mfp-fade',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
		}
	});
});
</script>
</body>
