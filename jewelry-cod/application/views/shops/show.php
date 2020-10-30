<!--
 <pre>
 	<?= print_r($shop) ?>
 </pre>
-->
<style>
  #map { height: 400px; width: 1200px;}
</style>

	<div id="content-wrapper-parent">
		<div id="content-wrapper">
			<!-- Content -->
			<div id="content" class="clearfix">
				<div id="breadcrumb" class="breadcrumb">
					<div itemprop="breadcrumb" class="container">
						<div class="row">
							<div class="col-md-24">
								<a href="http://www.jewelrypalace.site" class="homepage-link" title="Back to the frontpage">Inicio</a>
								<span>/</span>
								<span class="page-title">Buscar</span>
							</div>
						</div>
					</div>
				</div>

					<div class="container">
						<div class="row">
							<div id="collection-content">
								<div id="page-header">
									<h1 id="page-title">JOYERIA <?= $shop->name ?></h1>
								</div>
								<div class="collection-warper col-sm-24 clearfix">
									<div class="collection-panner col-sm-6">
										<img src="<?= URL ?>assets/images/shops/<?= $shop->image?>" class="img-responsive" alt="">
									</div>
									<div class="collection-panner col-sm-6">
										<p>VISÍTENOS :</p>
										<?= $shop->description?>
										<p>SITIO WEB :</p>
										<?= $shop->web_site ?>
									</div>
									<div class="collection-panner col-sm-6">
										<p><p>HORARIO DE ATENCIÓN :</p>
  										 <?= $shop->schedules ?>

								  </div>

									<div class="collection-panner col-sm-8">
										<p>CONTÁCTENOS :</p>
  									Teléfono : <?= $shop->phone_number ?>
									</div>


									</div>

									</div>

									<div class="home-blog-wrapper col-md-12">
										<?php foreach ($promotions as $promotion):?>
												<div class="date col-md-4">
													<div class="date_inner">
														<p>
															<img src="<?= URL?>assets/images/productos/<?= $promotion->image?>" alt="">
														</p>
													</div>
												</div>
												<div class="home-blog-content col-md-20">

													<h4><a><?=$promotion->name ?></a></h4>
													<ul class="list-inline">


															<span><i class="coment"></i></span><?= $promotion->description?></li>

														<span><i class="coment"></i></span><?= $promotion->terms?></a>
														<span><i class="coment"></i></span>aplica del <?= $promotion->start_date?></a>
														<span><i class="coment"></i></span>al de <?= $promotion->expiration_date?></a>

														</li>
													</ul>
													<div class="intro">

													</div>

												</div>
                        <div class="col-md-12">
                            <div id="map">
                            </div>
                        </div>
											<?php endforeach; ?>
									</div>
								</div>


								<div class="collection-main-content container-fluid">
									<div id="prodcoll" class="col-sm-6 col-md-6 sidebar hidden-xs">
											<div class="sb-wrapper">
												<!-- filter tags group -->
												<div class="filter-tag-group">
													<h6 class="sb-title">Encuentra lo que buscas</h6>
													<!-- tags groupd 1 -->
													<div class="tag-group" id="coll-filter-1">
														<p class="title">

														</p>
														<select  id="param" class="form-control round" name="id_category">
			                        <?php foreach ($categories as $categori): ?>
			                          <option value="<?= $categori->id_category?>"><?= $categori->name?></option>
			                        <?php endforeach; ?>
			                      </select>
													</div>
													<!-- tags groupd 2 -->
													<div class="tag-group" id="coll-filter-2">
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
													<div class="tag-group" id="coll-filter-3">
														<p class="title">
															Selecciona Municipio:
														</p>
														<ul>
							                  <select id="municipios" class="form-control round municipios" name="" alt="1">

							                  </select>
														</ul>
													</div>


													<!-- tags groupd 3 -->
												</div>
											</div>
											<div class="home-collection-wrapper sb-wrapper clearfix">
												<div class="camera_cta_1">
													<form id="form" method="post" action="http://www.jewelrypalace.site/products/search/">
														<select  style="visibility:hidden" id="param_hidden" name="id_category">
															<?php foreach ($categories as $categori): ?>
																<option value="<?= $categori->id_category?>"><?= $categori->name?></option>
															<?php endforeach; ?>
															</select>
															<div class="col-md-16 col-md-offset-4">
															<input type="hidden" id="id_municipio" name="">
														<button  type="submit" class="btn btn-lg search">Buscar</button>
															</div>
													</form>
												</div>
											</div>
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
												$(".search").clicmak(function(e){
													e.preventDefault();
													var param = $("#param").val();
													$("#param_hidden").val(param);
													$("#form").submit();
												});
											</script>

											<!--
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
											</div>-->
											<!--
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
										<!--end group_sidebar-->
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
															<li class="sort" data-option-value="manual">Caracteristicas</li>
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
															<img src="http://www.jewelrypalace.site/assets/images/productos/<?= $product->image ?>" class="img-responsive" alt="Curabitur cursus dignis">
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
																<a class="title-5" href="./product.html"><?= $product->name ?></a>
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
																<?= $product->description ?>
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

			<div class="footer-content footer-content-top clearfix">
				<div class="container">
					<div class="footer-link-list col-md-32">
					  <div class="group">

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
								<a class="main-image"><img class="img-zoom img-responsive image-fly" src="http://www.jewelrypalace.site/assets/images/productos/<?= $product->image ?>" data-zoom-image="../../assets/images/productos/anillo-superman.jpg" alt=""/></a>
								<div id="gallery_main_qs" class="product-image-thumb">
									<a class="image-thumb active" href="http://www.jewelrypalace.site/assets/images/productos/<?= $product->image ?>" data-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->image ?>" data-zoom-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->image ?>"><img src="http://www.jewelrypalace.site/assets/images/productos/<?= $product->image ?>" alt=""/></a>
									<a class="image-thumb" href="http://www.jewelrypalace.site/assets/images/productos/<?= $product->image ?>" data-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->image ?>" data-zoom-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->image ?>"><img src="http://www.jewelrypalace.site/assets/images/productos/<?= $product->image ?>" alt=""/></a>
									<a class="image-thumb" href="http://www.jewelrypalace.site/assets/images/productos/<?= $product->image ?>" data-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->image ?>" data-zoom-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->image ?>"><img src="http://www.jewelrypalace.site/assets/images/productos/<?= $product->image ?>" alt=""/></a>
									<a class="image-thumb" href="http://www.jewelrypalace.site/assets/images/productos/<?= $product->image ?>" data-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->image ?>" data-zoom-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->image ?>"><img src="http://www.jewelrypalace.site/assets/images/productos/<?= $product->image ?>" alt=""/></a>
									<a class="image-thumb" href="http://www.jewelrypalace.site/assets/images/productos/<?= $product->image ?>" data-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->image ?>" data-zoom-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->image ?>"><img src="http://www.jewelrypalace.site/assets/images/productos/<?= $product->image ?>" alt=""/></a>
									<a class="image-thumb" href="http://www.jewelrypalace.site/assets/images/productos/<?= $product->image ?>" data-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->image ?>" data-zoom-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->image ?>"><img src="http://www.jewelrypalace.site/assets/images/productos/<?= $product->image ?>" alt=""/></a>
								</div>
								<a class='animated' href="<?= URL ?>shops/show/<?= $product->shop->id_shop ?>"><img src="http://www.jewelrypalace.site/assets/images/shops/<?= $product->shop->image ?>"></a>

							</div>
						</div>
						<div class="col-md-12 product-information">
							<h1 id="quick-shop-title"><span><a href="/products/curabitur-cursus-dignis"><?= $product->name  ?></a></span></h1>
							<div id="quick-shop-infomation" class="description">
								<div id="quick-shop-description" class="text-left">
									<p>
								<?= $product->description ?>
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
										<span class="price_sale">$<?= money_format('%.2n', $product->price) ?></span><span class="dash">/</span><del class="price_compare">$300.00</del>
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
			</div>
		</div>
	</div>
<?php endforeach; ?>

</body>
<script async defer  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6eAu2eRTNpy8-5jmeTqgDFxALyGlZre0&callback=initMap"></script>

  <script>
  var geocoder;
    var map;
    var marker;
		var lat = <?= $branch->latitude ?>;
		var lng = <?= $branch->longitude ?>;

    function initMap()  {
      geocoder = new google.maps.Geocoder();
      var latlng = new google.maps.LatLng(lat, lng);
      var mapOptions = {
        zoom: 10,
        center: latlng,
        styles:
        [
      {
          "featureType": "landscape",
          "stylers": [
              {
                  "hue": "#FFBB00"
              },
              {
                  "saturation": 43.400000000000006
              },
              {
                  "lightness": 37.599999999999994
              },
              {
                  "gamma": 1
              }
          ]
      },
      {
          "featureType": "road.highway",
          "stylers": [
              {
                  "hue": "#FFC200"
              },
              {
                  "saturation": -61.8
              },
              {
                  "lightness": 45.599999999999994
              },
              {
                  "gamma": 1
              }
          ]
      },
      {
          "featureType": "road.arterial",
          "stylers": [
              {
                  "hue": "#FF0300"
              },
              {
                  "saturation": -100
              },
              {
                  "lightness": 51.19999999999999
              },
              {
                  "gamma": 1
              }
          ]
      },
      {
          "featureType": "road.local",
          "stylers": [
              {
                  "hue": "#FF0300"
              },
              {
                  "saturation": -100
              },
              {
                  "lightness": 52
              },
              {
                  "gamma": 1
              }
          ]
      },
      {
          "featureType": "water",
          "stylers": [
              {
                  "hue": "#0078FF"
              },
              {
                  "saturation": -13.200000000000003
              },
              {
                  "lightness": 2.4000000000000057
              },
              {
                  "gamma": 1
              }
          ]
      },
      {
          "featureType": "poi",
          "stylers": [
              {
                  "hue": "#00FF6A"
              },
              {
                  "saturation": -1.0989010989011234
              },
              {
                  "lightness": 11.200000000000017
              },
              {
                  "gamma": 1
              }
          ]
      }
    ]
  }

      map = new google.maps.Map(document.getElementById("map"), mapOptions);

       my_marker = new google.maps.Marker({
          map: map,
          position: {
                lat: lat,
                lng: lng
                ,position: new google.maps.LatLng(lat, lng)
          }
        });
        map.addListener('click', function(e) {
          marker.setPosition(e.latLng);
          console.log(e.latLng.lat());
          $('#latitude').val(e.latLng.lat());
          $('#longitude').val(e.latLng.lng());
        });
      }

      function placeMarkerAndPanTo(latLng, map) {
        map.panTo(latLng);
      }

</script>
