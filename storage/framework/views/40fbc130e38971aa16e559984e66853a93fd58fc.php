<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Sistema de producción premium">
  <meta name="author" content="">
  <title><?php echo $__env->yieldContent('title', 'Default'); ?> | Panel de Administracion</title>
  <link rel="apple-touch-icon" href="<?php echo e(url('dashboard-assets/assets/images/apple-touch-icon.png')); ?>">
  <link rel="shortcut icon" href="<?php echo e(url('dashboard-assets/assets/images/favicon.ico')); ?>">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo e(url('dashboard-assets/assets/global/css/bootstrap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('dashboard-assets/assets/global/css/bootstrap-extend.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('dashboard-assets/assets/css/site.min.css')); ?>">
  <!-- Plugins -->
  <link rel="stylesheet" href="<?php echo e(url('dashboard-assets/assets/css/animation.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('dashboard-assets/assets/css/animsition/animsition.css')); ?>">

  <link rel="stylesheet" href="<?php echo e(url('dashboard-assets/assets/global/vendor/asscrollable/asScrollable.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('dashboard-assets/assets/global/vendor/switchery/switchery.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('dashboard-assets/assets/global/vendor/intro-js/introjs.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('dashboard-assets/assets/global/vendor/slidepanel/slidePanel.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('dashboard-assets/assets/global/vendor/flag-icon-css/flag-icon.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('dashboard-assets/assets/global/vendor/waves/waves.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('dashboard-assets/assets/global/vendor/chartist-js/chartist.css')); ?>">
<!--<link rel="stylesheet" href="<?php echo e(url('dashboard-assets/assets/global/vendor/jvectormap/jquery-jvectormap.css')); ?>">-->
  <link rel="stylesheet" href="<?php echo e(url('dashboard-assets/assets/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('dashboard-assets/assets/examples/css/dashboard/v1.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('dashboard-assets/assets/global/vendor/alertify-js/alertify.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('dashboard-assets/assets/examples/css/advanced/alertify.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('dashboard-assets/assets/global/vendor/formvalidation/formValidation.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('dashboard-assets/assets/global/vendor/footable/footable.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('dashboard-assets/assets/global/vendor/blueimp-file-upload/jquery.fileupload.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('dashboard-assets/assets/global/vendor/dropify/dropify.css')); ?>">
  <!-- Custom styles -->
  <link rel="stylesheet" href="<?php echo e(url('dashboard-assets/assets/css/custom.css')); ?>">

  <!-- Fonts -->

<!-- Custom styles -->
  <link rel="stylesheet" href="<?php echo e(url('dashboard-assets/assets/css/custom.css')); ?>">

  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo e(url('dashboard-assets/assets/global/fonts/material-design/material-design.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('dashboard-assets/assets/global/fonts/brand-icons/brand-icons.min.css')); ?>">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>


  <!--[if lt IE 9]>
    <script src="global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
  <!--[if lt IE 10]>
    <script src="global/vendor/media-match/media.match.min.js"></script>
    <script src="global/vendor/respond/respond.min.js"></script>
    <![endif]-->
  <!-- Scripts -->
  <script src="<?php echo e(url('dashboard-assets/assets/global/vendor/modernizr/modernizr.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/vendor/breakpoints/breakpoints.js')); ?>"></script>
  <script>
  Breakpoints();
  </script>
</head>

  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <body class="animsition">


    <section>
      <?php echo $__env->yieldContent('nav'); ?>

  <nav class="site-navbar navbar navbar-inverse navbar-fixed-top navbar-mega" role="navigation" style="z-index:3000">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon md-more" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
        <!--<img class="navbar-brand-logo" src="assets/dashboard-assets/ assets/images/logo.png" title="Premium Shirts">-->
        <strong style="color:#FFF">PS</strong>
      </div>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
      data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon md-search" aria-hidden="true"></i>
      </button>
    </div>
    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="hidden-float" id="toggleMenubar">
            <a data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                <span class="sr-only">Toggle menubar</span>
                <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
          <li class="hidden-xs" id="toggleFullscreen">
            <a id="full-screen" class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
              <span class="sr-only">Toggle fullscreen</span>
            </a>
          </li>
          <li class="hidden-float">
            <a class="icon md-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
            role="button">
              <span class="sr-only">Toggle Search</span>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->
        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          <li class="dropdown">
            <a data-toggle="dropdown" href="javascript:void(0)" title="Notificaciones" aria-expanded="false"
            data-animation="scale-up" role="button">
              <i class="icon md-notifications" aria-hidden="true"></i>
              <span class="badge badge-danger up">5</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
              <li class="dropdown-menu-header" role="presentation">
                <h5>Notificaciones</h5>
                <span class="label label-round label-danger">5 Nuevas notificacion</span>
              </li>
              <li class="list-group" role="presentation">
                <div data-role="container">
                  <div data-role="content">
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon md-receipt bg-red-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Se ha recibido una nueva entrega de Vivatex</h6>
                          <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">Hace 1 minuto</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon md-account bg-green-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Hilda ha agregado un nuevo pedido</h6>
                          <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Hace 20 minutos</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon md-settings bg-red-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">*</h6>
                          <time class="media-meta" datetime="2015-06-11T14:05:00+08:00">Hace 40 minutos</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon md-calendar bg-blue-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">*</h6>
                          <time class="media-meta" datetime="2015-06-10T13:50:18+08:00">Hace 2 horas</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon md-comment bg-orange-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">*</h6>
                          <time class="media-meta" datetime="2015-06-10T12:34:48+08:00">Hace 4 horas</time>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </li>
              <!--
              <li class="dropdown-menu-footer" role="presentation">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                  <i class="icon md-settings" aria-hidden="true"></i>
                </a>
                <a href="javascript:void(0)" role="menuitem">
                    All notifications
                  </a>
              </li>
            -->
            </ul>
          </li>
          <li class="dropdown">
            <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="scale-up" role="button">
              <span class="avatar avatar-online">
                  <img src="<?php echo e(url('dashboard-assets/assets/images/users/avatar.png')); ?>" alt="">
                <i></i>
              </span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <a href="" role="menuitem"><i class="icon md-account" aria-hidden="true"></i>Perfil</a>
              </li>
              <li role="presentation">
                <a href="" role="menuitem"><i class="icon md-card" aria-hidden="true"></i>Mi tienda</a>
              </li>
              <li role="presentation">
                <a href="/realizarpago" role="menuitem"><i class="icon md-settings" aria-hidden="true"></i>Pagos</a>
              </li>
              <li class="divider" role="presentation"></li>
              <li role="presentation">
                <a href="<?php echo e(route('logout')); ?>"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"
                  role="menuitem">
                  <i class="icon md-power" aria-hidden="true"></i>Cerrar Sesión
                </a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                   <?php echo e(csrf_field()); ?>

                </form>
              </li>
            </ul>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
        <div class="navbar-brand navbar-brand-center">
          <a href="/productsManager">
            <strong style="color:#FFF">JEWELRY PALACE </strong>
            <!-- <img class="navbar-brand-logo" src="assets/dashboard-assets/assets/images/logo.png" title="Remark"> -->
          </a>
        </div>
      </div>
      <!-- End Navbar Collapse -->
      <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <!-- <form  method="post" action="http://www.pineapple-software.mx/goldandsilver//search"> -->
        <form  method="post" action="http://www.jewelrypalace.site/productsManager/search">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon md-search" aria-hidden="true"></i>
                <input type="text" class="form-control" name="param" placeholder="Buscar..."/>
                <button type="button" class="input-search-close icon md-close" data-target="#site-navbar-search"
                data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Site Navbar Seach -->
    </div>
  </nav>
</section>
<section>
  <?php echo $__env->yieldContent('menu'); ?>
  <div class="site-menubar">
    <div class="site-menubar-header">
      <div class="cover overlay">
        <img class="cover-image" src="<?php echo e(url('dashboard-assets/assets/examples/images/dashboard-header.jpg')); ?>"
        alt="...">
        <div class="overlay-panel vertical-align overlay-background">
          <div class="vertical-align-middle">
            <a class="avatar avatar-lg" href="javascript:void(0)">

                <img src="<?php echo e(url('dashboard-assets/assets/images/users/avatar.png')); ?>" alt="">



            </a>
            <div class="site-menubar-info">
              <h5 class="site-menubar-user">Joyeria</h5>
              <p class="site-menubar-email"></p>
            </div>
          </div>
        </div>
      </div>
    </div>




<!-- Menu desplegable -->
<div class="site-menubar-body scrollable scrollable-inverse is-enabled scrollable-vertical" style="position: relative">
  <div>
    <div>
      <ul class="site-menu">
       <li class="site-menu-item has-sub">
          <a href="javascript:void(0)">
            <i class="site-menu-icon md-comment-alt-text" aria-hidden="true"></i>
            <span class="site-menu-title">Catalogos</span>
            <span class="site-menu-arrow"></span>
          </a>
          <ul class="site-menu-sub">
          <li class="site-menu-item">
                <a class="animsition-link" href="/tiendas">
                  <span class="site-menu-title">Tienda</span>
                </a>
            </li>
            <li class="site-menu-item">
                <a class="animsition-link" href="/sucursales">
                  <span class="site-menu-title">Mis sucursales</span>
                </a>
            </li>
            <!--
            <li class="site-menu-item">
                <a class="animsition-link" href="schedules">
                  <span class="site-menu-title">Horarios</span>
                </a>
            </li>-->
          <li class="site-menu-item">
                <a class="animsition-link" href="/usuarios">
                  <span class="site-menu-title">Usuarios</span>
                </a>
            </li>
            <li class="site-menu-item">
                <a class="animsition-link" href="/productos">
                  <span class="site-menu-title">Productos</span>
                </a>
            </li>
            <!--
            <li class="site-menu-item">
                <a class="animsition-link" href="Customers">
                  <span class="site-menu-title">Clientes</span>
                </a>
            </li>
          -->
            <li class="site-menu-item">
                <a class="animsition-link" href="/promociones">
                  <span class="site-menu-title">Promociones</span>
                </a>
            </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="/categorias">
                  <span class="site-menu-title">Categorias</span>
                </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="/realizarpago">
                <span class="site-menu-title">Pagos</span>
              </a>
          </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
</div>

<style>
  .view{
    display: none;
  }
</style>

  <!-- Core  -->

</section>
<section>
  <?php echo $__env->yieldContent('content'); ?>
</section>




  <!-- Core  -->
  <section>
    <?php echo $__env->yieldContent('js'); ?>
  <script src="<?php echo e(url('dashboard-assets/assets/global/vendor/jquery/jquery.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/vendor/bootstrap/bootstrap.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/vendor/animsition/animsition.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/vendor/asscroll/jquery-asScroll.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/vendor/asscrollable/jquery.asScrollable.all.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/vendor/mousewheel/jquery.mousewheel.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/vendor/ashoverscroll/jquery-asHoverScroll.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/vendor/waves/waves.js')); ?>"></script>
  <!-- Plugins -->
  <script src="<?php echo e(url('dashboard-assets/assets/global/vendor/switchery/switchery.min.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/vendor/intro-js/intro.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/vendor/screenfull/screenfull.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/vendor/slidepanel/jquery-slidePanel.js')); ?>"></script>
  <!--<script src="<?php echo e(url('dashboard-assets/assets/global/vendor/jvectormap/jquery-jvectormap.min.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/vendor/jvectormap/maps/jquery-jvectormap-world-mill-en.js')); ?>"></script>-->
  <script src="<?php echo e(url('dashboard-assets/assets/global/vendor/matchheight/jquery.matchHeight-min.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/vendor/peity/jquery.peity.min.js')); ?>"></script>
  <!--<script src="<?php echo e(url('dashboard-assets/assets/global/js/jquery-1.12.0.js')); ?>"></script>-->
  <script src="<?php echo e(url('dashboard-assets/assets/global/js/core.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/js/site.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/js/sections/menu.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/js/sections/menubar.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/js/sections/sidebar.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/js/configs/config-colors.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/js/configs/config-tour.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/js/components/asscrollable.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/js/components/animsition.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/js/components/slidepanel.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/js/components/switchery.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/js/components/tabs.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/js/components/matchheight.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/js/components/jvectormap.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/js/components/peity.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/js/components/material.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/vendor/alertify-js/alertify.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/js/helpers.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/vendor/bootstrap-table/bootstrap-table.min.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/vendor/bootstrap-table/extensions/mobile/bootstrap-table-mobile.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/vendor/formvalidation/formValidation.min.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/vendor/formvalidation/framework/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/js/validate-rules.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/vendor/footable/footable.all.min.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/examples/js/tables/footable.js')); ?>"></script>


  <script src="<?php echo e(url('dashboard-assets/assets/global/vendor/footable/footable.all.min.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/examples/js/tables/footable.js')); ?>"></script>
  <!--<script src="assets/dashboard-assets/examples/js/tables/footable.js"></script>-->
  <!--<script src="assets/dashboard-assets/assets/global/vendor/bootstrap/bootstrap.js"></script>-->
  <!-- Plugins -->
  <script src="<?php echo e(url('dashboard-assets/assets/global/vendor/bootstrap-tokenfield/bootstrap-tokenfield.min.js')); ?>"></script>
  <!-- Scripts -->
  <script src="<?php echo e(url('dashboard-assets/assets/global/js/components/bootstrap-tokenfield.js')); ?>"></script>


  <script src="<?php echo e(url('dashboard-assets/assets/global/vendor/bootstrap-datepicker/bootstrap-datepicker.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/js/components/bootstrap-datepicker.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/js/animsition.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/vendor/asscroll/jquery-asScroll.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/global/vendor/asscrollable/jquery.asScrollable.all.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/js/Plugin.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/js/animsition.js')); ?>"></script>
  <script src="<?php echo e(url('dashboard-assets/assets/js/advanced/animsition.js')); ?>"></script>
    <script src="<?php echo e(url('dashboard-assets/assets/js/Plugin/jquery-appear.js')); ?>"></script>
      <script src="<?php echo e(url('dashboard-assets/assets/js/babel-external-helpers/babel-external-helpers.js')); ?>"></script>
      <script src="<?php echo e(url('dashboard-assets/assets/js/forms/wizard.js')); ?>"></script>
      <script src="<?php echo e(url('dashboard-assets/assets/js/Plugin/jquery-wizard.js')); ?>"></script>


<script type="text/javascript">

  $("#states").change(function(){
    $.ajax({
      url: '/estados/' + $(this).val() + "/municipios",
      type: 'GET',
      async: true,
      success: function(json){
        console.log(json)
        $('#municipios').empty()
        $.each(json,function(i, json){
          $('#municipios').append('<option value = '+ json.id +'>' + json.name +'</option>')
        });
      },
      error: function(){

      }
    });
  });

</script>

  <script>
  $(function(){
  $('#datepicker').datepicker({
    dateFormat: 'yyyy-mm-dd',
    down: 'fa fa-arrow-down'
  });
  });

  $(function(){
  $('#picker').datepicker({
    dateFormat: 'yyyy-mm-dd',
    down: 'fa fa-arrow-down'
  });
  });
  </script>
  <script type="text/javascript">
  $('.validate').formValidation({
  framework: "bootstrap",
  button: {
    selector: '#ok',
    disabled: 'disabled'
  },
  fields: {
    name_style: stylesRules,

  }
  });
  </script>
  <script type="text/javascript">
  // Script para hacer funcionar el modo de pantalla completa
  var fullscreen = false;
  function launchFullScreen(element) {
    if(element.requestFullScreen) {
      element.requestFullScreen();
    } else if(element.mozRequestFullScreen) {
      element.mozRequestFullScreen();
    } else if(element.webkitRequestFullScreen) {
      element.webkitRequestFullScreen();
    }
  }

    function cancelFullscreen() {
      if(document.cancelFullScreen) {
        document.cancelFullScreen();
      } else if(document.mozCancelFullScreen) {
        document.mozCancelFullScreen();
      } else if(document.webkitCancelFullScreen) {
        document.webkitCancelFullScreen();
      }
    }

    $("#full-screen").click(function(){
      if (!fullscreen) {
        launchFullScreen(document.documentElement);
      }else{
        cancelFullscreen();
      }
      fullscreen = !fullscreen;
    });
  </script>



</section>


  <?php echo $__env->yieldContent('map'); ?>
  <?php echo $__env->yieldContent('map2'); ?>
  <?php echo $__env->yieldContent('delshop'); ?>
  <?php echo $__env->yieldContent('delbranch'); ?>
  <?php echo $__env->yieldContent('delproduct'); ?>
  <?php echo $__env->yieldContent('deluser'); ?>
  <?php echo $__env->yieldContent('delpromotion'); ?>
  <?php echo $__env->yieldContent('delcategory'); ?>
  <?php echo $__env->yieldContent('filter'); ?>
  <?php echo $__env->yieldContent('map3'); ?>

  <footer class="footer navbar-default navbar-fixed-bottom">
    <div class="site-footer-legal">© 2016 <a href="http://pineapple-software.mx/">Pineapple Software</a></div>
    <div class="site-footer-right">
      Creado por: <i class="red-600 icon md-favorite"></i><a href="#">Golden And Silver</a>
    </div>
  </footer>
</body>
</html>
