<body class="templateIndex notouch">

	<!-- Header -->
 <div id="content-wrapper-parent">
    <div id="content-wrapper">
	<!-- Main Slideshow -->
    	<div class="home-slider-wrapper clearfix">
    			<div class="camera_wrap" id="home-slider">

    				<!-- Primer Slider -->
            <div data-src="assets/images/ch1.jpg">

              <div class="container-fluid">
        				<div class="camera_caption camera_title_1 fadeIn">

                  <div class="container">
                    <a  style="color:#010101;">Encuentra tu mejor joya</a>


									<div class="col-md-12 col-md-offset-6">
                    <div class ="col-md-8">
                      <select  id="param_1" class="form-control round" name"id_category" width="30%">
                        <?php foreach ($categories as $categori): ?>
                        	<option value="<?= $categori->id_category?>"><?= $categori->name?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>

                    <div class="col-md-8">
                      <select id="estados_1" class="form-control round estados" name="id_estado" alt="1">
                        <option value="*">Seleccione uno</option>
                          <?php foreach ($estados as $estado): ?>
                            <option value="<?= $estado->id_estados ?>"><?= $estado->name ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>

                      <div class="col-md-8">
                        <select id="municipios_1" class="form-control round municipios" name="" alt="1">
                        </select>

                        <form id="form_1" method="post" action="http://www.jewelrypalace.site/products/search/">
                          <select  style="visibility:hidden" id="param_hidden_1" name="id_category">
                            <?php foreach ($categories as $categori): ?>
                              <option value="<?= $categori->id_category?>"><?= $categori->name?></option>
                            <?php endforeach; ?>
                          </select>

                        </form>
                      </div>
                      <br>
                      <div class="col-md-6 col-md-offset-10">
                          <input type="hidden" id="id_municipio_1" name="">
                          <button alt="1" type="submit" class="btn btn-lg search">Buscar</button>
                      </div>
                    </div>
                  </div>




                               </div>
                               <div class="camera_caption camera_caption_1 fadeIn" style="color: rgb(1, 1, 1);">
                                 <br>
                                 Contamos con mas de 35,000 mil  joyas muy cerca de ti.
                               </div>
            					        </div>
                            </div>
                        </div>
            				</div>
                </div>

				<!-- Segundo Slider
				<div data-src="assets/images/ch1.jpg">

          <div class="camera_caption camera_title_1 fadeIn">

            <div class="col-md-12 col-md-offset-6">
                <a style="color:#010101;">Encuentra tu mejor joya</a>
            </div>

            <div class="row">
            </div>

            <div class ="col-md-18 col-md-offset-5 container-fluid">
                <div class="col-md-6">
                      <select  id="param_2" class="form-control round" name="id_category">
                        <?php foreach ($categories as $categori): ?>
                          <option value="<?= $categori->id_category?>"><?= $categori->name?></option>
                        <?php endforeach; ?>
                      </select>
                </div>
              <div class="col-md-6" >
                      <select id="estados_2" class="form-control round estados" name="id_estado" alt="2">
                        <option value="*">Seleccione uno</option>
                        <?php foreach ($estados as $estado): ?>
                          <option value="<?= $estado->id_estados ?>"><?= $estado->name ?></option>
                        <?php endforeach; ?>
                      </select>
              </div>

              <div class="col-md-6">
                <select id="municipios_2" class="form-control round municipos" name="id_municipio" alt="2">

                </select>
              </div>
            </div>
          </div>
        	<div class="camera_caption camera_caption_1 fadeIn" style="color: rgb(1, 1, 1);">
						Porque una joya puede jurar amor eterno.
					</div>
					<div class="camera_cta_1">
                <form id="form_2" method="post" action="http://www.jewelrypalace.site/products/search/">
                  <select  style="visibility:hidden" id="param_hidden_2" name="id_category">
                    <?php foreach ($categories as $categori): ?>
                      <option value="<?= $categori->id_category?>"><?= $categori->name?></option>
                    <?php endforeach; ?>
                  </select>
                  <div class="col-md-16 col-md-offset-4">
                  <input type="hidden" id="id_municipio_2" name="id_municipio" class="">
    							<button alt="2" type="submit" class="btn btn-lg search">Buscar</button>
    						</form>
              </div>

					</div>
        </div>

				<!-- Tercer Slider
				<div data-src="assets/images/ch1.jpg">
          <div class="camera_caption camera_title_1 fadeIn">
            <div class="col-md-12 col-md-offset-6">
					    <a  style="color:#010101;">Encuentra tu mejor joya</a>
            </div>
              <div class ="col-md-18 col-md-offset-5 container">
                <div class="col-md-6">
                <select  id="param_3" class="form-control round" name="id_category">
                  <?php foreach ($categories as $categori): ?>
                    <option value="<?= $categori->id_category?>"><?= $categori->name?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="col-md-6">
                <select id="estados_3" class="form-control round estados" name="id_estado"  alt="3">
                  <option value="*">Seleccione uno</option>
                  <?php foreach ($estados as $estado): ?>
                    <option value="<?= $estado->id_estados ?>"><?= $estado->name ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="col-md-6" >
                <select id="municipios_3" class="form-control round municipios" name="id_category" alt="3">

                </select>
              </div>
					</div>
        </div>
          <div class="camera_caption camera_caption_1 fadeIn" style="color: rgb(1, 1, 1);">
					  Contamos con mas de 35,000 mil  joyas muy cerca de ti.
					</div>
          <div class="camera_cta_1">
            <form id="form_3" method="post" action="http://www.jewelrypalace.site/products/search/">
              <select  style="visibility:hidden" id="param_hidden_3" name="id_category">
                <?php foreach ($categories as $categori): ?>
                  <option value="<?= $categori->id_category?>"><?= $categori->name?></option>
                <?php endforeach; ?>
              </select>
              <div class="col-md-16 col-md-offset-4">
              <input type="hidden" id="id_municipio_3" name="id_municipio">
              <button alt="3" type="submit" class="btn btn-lg search">Buscar</button>
            </div>
            </form>
					</div>
				</div>-->

				<script type="text/javascript">
					// Script para envio de pormulario de busqueda
          $(".estados").change(function(){
            var selector =  $(this).attr("alt");
            var id_estado = $(this).val();
            var url = 'http://www.jewelrypalace.site/jewelry-cod/municipios/get/' + id_estado;
            $.get(url, function(data){
              $("#municipios_" + selector).html(data);
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
						var param = $("#param_" + selector).val();
						$("#param_hidden_" + selector).val(param);
						$("#form_" + selector).submit();
					});
				</script>


    <div class="home-newproduct">
      <div class="container">
        <div class="home-partners">
          <div class="container">
            <div class="partners-logo row">
              <div class="col-md-24">
                <div id="partners-container" class="clearfix">
                  <h6 class="general-title">Encuentra la Joyeria cerca de ti.</h6>
                  <div id="partners">
                    <?php foreach ($shops as $shop):?>
                      <div class='logo text-center not-animated' data-animate='bounceIn' data-delay='150'>
                        <a class='animated' href="<?= URL ?>shops/show/<?= $shop->id_shop ?>">
                        <img class="pulse" src="assets/images/shops/<?= $shop->image ?>" alt="">
                        </a>
                      </div>
                    <?php endforeach ?>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
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
                          <?php foreach ($products as $i => $product):?>
                            <div class="element no_full_width col-md-8 col-sm-8 not-animated" data-animate="fadeInUp" data-delay="0">
                              <ul class="row-container list-unstyled clearfix">
                                <li class="row-left">
                                <a class="container_item">
                                <img src="assets/images/productos/<?= $product->product_image?>" class="img-responsive" alt="Curabitur cursus dignis">
                                <span class="sale_banner">
                                </span>
                                </a>
                                <div class="hbw">
                                  <span class="hoverBorderWrapper"></span>
                                </div>
                                </li>
                                <li class="row-right parent-fly animMix">
                                <div class="product-content-left">
                                  <a class="title-5"><?= $product->product_name ?></a>
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
                                      <i class="fa fa-eye" title="Quick view"></i><span class="list-mode">Quick View</span>
                                    </div>
                                  </div>
                                  <a class="wish-list" href="./account.html" title="wish list"><i class="fa fa-heart"></i><span class="list-mode">Add to Wishlist</span></a>
                                </div>
                                </li>
                              </ul>
                            </div>
                        <?php endforeach?>

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
													<div class="element no_full_width col-md-8 col-sm-8 not-animated" data-animate="fadeInUp" data-delay="0">
														<ul class="row-container list-unstyled clearfix">
															<li class="row-left">
															<a href="./product.html" class="container_item">
															<img src="assets/images/productos/er.jpg" class="img-responsive" alt="Curabitur cursus dignis">
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
																<a class="title-5" href="./product.html">sfdghjhkj</a>
																<span class="spr-badge" id="spr_badge_12932382113" data-rating="0.0">
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

															<div class="hover-appear">
																<form action="./product.html" method="post">
																	<div class="effect-ajax-cart">
																		<input type="hidden" name="quantity" value="1">
																		<button class="select-option" type="button" onclick="window.location.href='product.html'"><i class="fa fa-th-list" title="Select Options"></i><span class="list-mode">Select Option</span></button>
																	</div>
																</form>
																<div class="product-ajax-qs hidden-xs hidden-sm">
																	<div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal" class="quick_shop" data-toggle="modal">
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
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="home-banner-wrapper">
							<div class="container">
								<div id="home-banner" class="text-center clearfix">
									<img class="pulse img-banner-caption" src="assets/images/productos/4.jpg" alt="">
									<div class="home-banner-caption">
										<p>
											Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
											 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										</p>
									</div>
									<div class="home-banner-action">
									</div>
								</div>
							</div>
						</div>
            <!--
						<div class="home-blog">
							<div class="container">
								<div class="home-promotion-blog row">
									<h6 class="general-title">Nuevas Noticias</h6>
									<div class="home-bottom_banner_wrapper col-md-12">
										<div id="home-bottom_banner" class="home-bottom_banner">
											<a href="./collection.html"><img src="assets/images/joyerialocal.jpeg" alt=""></a>
										</div>
									</div>

                    <div class="home-blog-wrapper col-md-12">
                      <?php foreach ($promotions as $promotion):?>
                      <div id="home_blog" class="home-blog">
                        <div class="home-blog-item row">
                          <div class="date col-md-4">
                            <div class="date_inner">
                              <p>
                                <img src="assets/images/productos/<?= $promotion->image?>" alt="">
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
                        <?php endforeach; ?>
                        </div>
                        	</div>
                    </div>

							</div>
						</div>
        </div>
      -->
						<div class="home-feature">
							<div class="container">
								<div class="group_featured_products row">
									<div class="col-md-24">
										<div class="home_fp">
											<h6 class="general-title">Productos De Oferta</h6>
											<div class="home_fp_wrapper">
												<div id="home_fp">
                          <?php foreach ($products as $i=> $product):?>
                            <div class="element no_full_width not-animated" data-animate="fadeInUp" data-delay="0">
  														<ul class="row-container list-unstyled clearfix">
  															<li class="row-left">
  															<a class="container_item">
  															<img src="assets/images/productos/<?= $product->product_image?>" class="img-responsive" alt="Curabitur cursus dignis">
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
  																<a class="title-5" ><?= $product->product_name ?></a>
  																<span class="spr-badge" id="spr_badge_1293238211" data-rating="0.0">
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
  																	<div data-href="./ajax/_product-qs.html" data-target="#quick-shop-modal<?= $i?>" class="quick_shop" data-toggle="modal">
  																		<i class="fa fa-eye" title="Quick view"></i><span class="list-mode">Quick View</span>
  																	</div>
  																</div>
  																<a class="wish-list" href="./account.html" title="wish list"><i class="fa fa-heart"></i><span class="list-mode">Add to Wishlist</span></a>
  															</div>
  															</li>
  														</ul>
                            </div>
                          <?php endforeach ?>
                        </div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

            <script src="<?= URL ?>assets/javascripts/cs.global.js" type="text/javascript"></script>
            <?php foreach ($products as $i => $product):?>
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
                            <a class="image-thumb" href="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" data-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" data-zoom-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>"><img src="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" alt=""/></a>
                            <a class="image-thumb" href="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" data-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" data-zoom-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>"><img src="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" alt=""/></a>
                            <a class="image-thumb" href="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" data-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" data-zoom-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>"><img src="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" alt=""/></a>
                            <a class="image-thumb" href="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" data-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" data-zoom-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>"><img src="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" alt=""/></a>
                            <a class="image-thumb" href="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" data-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" data-zoom-image="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>"><img src="http://www.jewelrypalace.site/assets/images/productos/<?= $product->product_image ?>" alt=""/></a>
                          </div>
                          <a class='animated' href="<?= URL ?>shops/show/<?= $product->id_shop ?>"><img src="http://www.jewelrypalace.site/assets/images/shops/<?= $product->shop_image ?>"></a>
                        </div>
                      </div>
                      <div class="col-md-12 product-information">
                        <h1 id="quick-shop-title"><span> <a><?= $product->product_name ?></a></span></h1>
                        <div id="quick-shop-infomation" class="description">
                          <div id="quick-shop-description" class="text-left">
                            <p>
                              <?= $product->product_description ?>
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
            <?php endforeach ?>

	<footer id="footer">
		<div id="footer-content">
			<h6 class="general-title contact-footer-title">MUCHAS GRACIAS  JEWERLY PALACE TE ESPERA PRONTO!!!</h6>
			<div id="widget-newsletter">
				<div class="container">
				  <div class="newsletter col-md-24">
				  </div>
				</div>
			</div>
<?php include'piepag.php'; ?>
</body>
