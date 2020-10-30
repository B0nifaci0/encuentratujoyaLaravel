<style>
  #map { height: 400px; }
</style>

<div id="content-wrapper-parent">
  <div id="content-wrapper">
    <!-- Content -->
    <div id="content" class="clearfix">
      <div id="breadcrumb" class="breadcrumb">
        <div itemprop="breadcrumb" class="container">
          <div class="row">
            <div class="col-md-24">
              <a href="#" class="homepage-link" title="Back to the frontpage">Inicio</a>
              <span>/</span>
              <span class="page-title">Buscar</span>
            </div>
          </div>
        </div>
      </div>

      <section class="content">
        <div class="container">
          <div class="row">
            <div id="collection-content">
              <div id="page-header">
                <h1 id="page-title">JOYERIA <?= $branch->shop->name ?></h1>
              </div>
              <div class="collection-warper col-sm-24 clearfix">
                <div class="collection-panner col-sm-6">
                  <img src="<?= URL ?>assets/images/shops/<?= $branch->shop->image ?>" class="img-responsive" alt="">
                </div>
                <div class="collection-panner col-sm-6">
                  <p>
                    <strong>Sucursal:</strong>
                    <?= $branch->name ?>
                  </p>
                </div>
                <div class="collection-panner col-sm-6">
                  <p>
                    <strong>Dirección:</strong>
                    <?= $branch->address ?>
                  </p>
                </div>
                <div class="collection-panner col-sm-6">
                  <p>
                    <strong>Teléfono:</strong>
                    <?= $branch->phone_number ?>
                  </p>
                </div>
              </div>
              <?php if (count($branch->schedules) > 0): ?>
                <div class="collection-warper col-sm-24 clearfix">
                  <div class="collection-panner col-sm-24">
                    <p><p>Horarios de arención</p>
                      <table>
                        <tr>
                          <?php foreach ($branch->schedules as $schedule): ?>
                            <td>
                              <?= $schedule->day ?>: <?= $schedule->opening_hour ?> - <?= $schedule->closing_hour ?>
                            </td>
                          <?php endforeach; ?>
                        </tr>
                      </table>
                  </div>
                </div>
              <?php endif; ?>
            </div>
          </div>
              <div class="row">
                <div id="collection-content">
                  <div id="page-header">
                    <h1 id="page-title">¿Donde nos encontramos?</h1>
                  </div>
                  <!--
                  <div class="collection-warper col-sm-24 clearfix">
                    <div class="collection-panner">
                      <img src="#" class="img-responsive" alt="">
                    </div>
                  </div>
                  -->
                  <div class="collection-main-content">
                    <div id="col-main" class="collection collection-page col-sm-18 col-md-18 no_full_width">
                      <div id="sandBox-wrapper" class="group-product-item row collection-full">
                        <div id="map"></div>
                      </div>
                    </div>
                    <div id="prodcoll" class="col-sm-6 col-md-6 sidebar hidden-xs">
                      <div class="group_sidebar">
                        <div class="deal-product-wrapper sb-wrapper clearfix">
                          <div class="group_deal_products">
                            <div class="">
                              <div class="home_deal_fp">
                                <h6 class="sb-title">Nuestros productos</h6>
                                <div class="home_deal_fp_wrapper sb-content">
                                  <div id="home_deal_fp">
                                    <?php foreach ($branch->shop->products as $product): ?>
                                      <div class="element full_width fadeInUp animated" data-animate="fadeInUp" data-delay="200">
                                        <form action="#" method="post">
                                          <ul class="row-container list-unstyled clearfix">
                                            <li class="row-left">
                                            <a href="<?= URL ?>products/show/<?= $product->id_product ?>" class="container_item">
                                              <img src="<?= URL ?>assets/images/productos/<?= $product->image ?>" class="img-responsive" alt="Curabitur cursus dignis">
                                            </a>
                                            </li>
                                            <li class="row-right parent-fly animMix">
                                            <a class="title-5" href="#"><?= $product->name ?></a>
                                            <div class="product-price">
                                              <span class="price"><?= $product->price ?></span>
                                            </div>
                                            <div class="effect-ajax-cart">
                                              <input name="quantity" value="1" type="hidden">
                                              <button class="add-to-cart" type="submit" name="add">Agregar</button>
                                            </div>
                                            </li>
                                          </ul>
                                        </form>
                                      </div>
                                    <?php endforeach; ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--
                        <div class="home-collection-wrapper sb-wrapper clearfix">
                          <h6 class="sb-title">Product Categories</h6>
                          <ul class="list-unstyled sb-content list-styled">
                            <li>
                            <a href="#"><span><i class="fa fa-circle"></i> Bracelets</span><span class="collection-count"> (8)</span></a>
                            </li>
                            <li>
                            <a href="#"><span><i class="fa fa-circle"></i> Earrings</span><span class="collection-count"> (8)</span></a>
                            </li>
                            <li>
                            <a href="#"><span><i class="fa fa-circle"></i> Necklaces</span><span class="collection-count"> (8)</span></a>
                            </li>
                            <li>
                            <a href="#"><span><i class="fa fa-circle"></i> Rings</span><span class="collection-count"> (8)</span></a>
                            </li>
                            <li>
                            <a href="#.html"><span><i class="fa fa-circle"></i> Sample Collection - Left Slidebar</span><span class="collection-count"> (9)</span></a>
                            </li>
                            <li>
                            <a href="#.html"><span><i class="fa fa-circle"></i> Sample Collection - Right Slidebar</span><span class="collection-count"> (7)</span></a>
                            </li>
                          </ul>
                        </div>
                        -->
                        <!--
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
                        -->
                        <!--End sb-item-->
                      </div><!--end group_sidebar-->
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
<script type="text/javascript">
  var map;
  var marker;
  var lat = <?= $branch->latitude ?>;
  var lng = <?= $branch->longitude ?>;

  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: {
          lat: lat,
          lng: lng
      },
      zoom: 12,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      streetViewControl: true,
    });

    marker = new google.maps.Marker({
      position: {
          lat: lat,
          lng: lng
      },
      map: map
    });
  }
</script>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVtrC1DqAHmJu7oVjb23vFq6qk31gxPS8&callback=initMap">
</script>
