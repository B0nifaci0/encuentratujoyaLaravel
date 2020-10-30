<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Sistema de producción premium">
  <meta name="author" content="">
  <title>jewelrypalace</title>
  <link rel="apple-touch-icon" href="<?= URL ?>assets/dashboard-assets/assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="<?= URL ?>assets/dashboard-assets/assets/images/favicon.ico">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?= URL ?>assets/dashboard-assets/global/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= URL ?>assets/dashboard-assets/global/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="<?= URL ?>assets/dashboard-assets/assets/css/site.min.css">
  <!-- Plugins -->
  <link rel="stylesheet" href="<?= URL ?>assets/dashboard-assets/global/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="<?= URL ?>assets/dashboard-assets/global/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="<?= URL ?>assets/dashboard-assets/global/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="<?= URL ?>assets/dashboard-assets/global/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="<?= URL ?>assets/dashboard-assets/global/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="<?= URL ?>assets/dashboard-assets/global/vendor/flag-icon-css/flag-icon.css">
  <link rel="stylesheet" href="<?= URL ?>assets/dashboard-assets/global/vendor/waves/waves.css">
  <link rel="stylesheet" href="<?= URL ?>assets/dashboard-assets/global/vendor/chartist-js/chartist.css">
  <link rel="stylesheet" href="<?= URL ?>assets/dashboard-assets/global/vendor/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="<?= URL ?>assets/dashboard-assets/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
  <link rel="stylesheet" href="<?= URL ?>assets/dashboard-assets/assets/examples/css/dashboard/v1.css">
  <link rel="stylesheet" href="<?= URL ?>assets/dashboard-assets/global/vendor/alertify-js/alertify.css">
  <link rel="stylesheet" href="<?= URL ?>assets/dashboard-assets/assets/examples/css/advanced/alertify.css">
  <link rel="stylesheet" href="<?= URL ?>assets/dashboard-assets/global/vendor/formvalidation/formValidation.css">
  <link rel="stylesheet" href="<?= URL ?>assets/dashboard-assets/global/vendor/footable/footable.css">
  <link rel="stylesheet" href="<?= URL ?>assets/dashboard-assets/global/vendor/blueimp-file-upload/jquery.fileupload.css">
  <link rel="stylesheet" href="<?= URL ?>assets/dashboard-assets/global/vendor/dropify/dropify.css">
  <!-- Custom styles -->
  <link rel="stylesheet" href="<?= URL ?>assets/dashboard-assets/assets/css/custom.css">

  <!-- Fonts -->
  <link rel="stylesheet" href="http://www.jewelrypalace.site/assets/dashboard-assets/global/fonts/material-design/material-design.min.css">
  <link rel="stylesheet" href="http://www.jewelrypalace.site/assets/dashboard-assets/global/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

<script src="<?= URL ?>assets/dashboard-assets/global/vendor/jquery/jquery.js"></script>

  <!--[if lt IE 9]>
    <script src="global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
  <!--[if lt IE 10]>
    <script src="global/vendor/media-match/media.match.min.js"></script>
    <script src="global/vendor/respond/respond.min.js"></script>
    <![endif]-->
  <!-- Scripts -->
  <script src="<?= URL ?>assets/dashboard-assets/global/vendor/modernizr/modernizr.js"></script>
  <script src="<?= URL ?>assets/dashboard-assets/global/vendor/breakpoints/breakpoints.js"></script>
  <script>
  Breakpoints();
  </script>
</head>

<body class="dashboard">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
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
        <!--<img class="navbar-brand-logo" src="<?= URL ?>assets/dashboard-assets/ assets/images/logo.png" title="Premium Shirts">-->
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
                <?php if ($this->session->userdata('logged_in')['image'] == ""){ ?>
                  <img src="<?= URL ?>assets/images/users/avatar.png" alt="">
                <?php }else{ ?>
                  <img src="<?= URL ?>assets/images/users/<?= $this->session->userdata('logged_in')['image'] ?>" alt="">
                <?php } ?>
                <i></i>
              </span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <a href="<?= URL ?>users/edit/<?= $this->session->userdata('logged_in')['id_user']; ?>" role="menuitem"><i class="icon md-account" aria-hidden="true"></i>Perfil</a>
              </li>
              <li role="presentation">
                <a href="<?= URL ?>shops/edit/<?= $this->session->userdata('logged_in')['id_user'] ?>" role="menuitem"><i class="icon md-card" aria-hidden="true"></i>Mi tienda</a>
              </li>
              <li role="presentation">
                <a href="#" role="menuitem"><i class="icon md-settings" aria-hidden="true"></i>Configuración</a>
              </li>
              <li class="divider" role="presentation"></li>
              <li role="presentation">
                <a href="<?= URL ?>users/logout" role="menuitem"><i class="icon md-power" aria-hidden="true"></i>Cerrar Sesión</a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
        <div class="navbar-brand navbar-brand-center">
          <a href="/productsManager">
            <strong style="color:#FFF">Gold And Silver</strong>
            <!-- <img class="navbar-brand-logo" src="<?= URL ?>assets/dashboard-assets/assets/images/logo.png" title="Remark"> -->
          </a>
        </div>
      </div>
      <!-- End Navbar Collapse -->
      <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <!-- <form  method="post" action="http://www.pineapple-software.mx/goldandsilver/<?= $controller_name ?>/search"> -->
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

  <div class="site-menubar">
    <div class="site-menubar-header">
      <div class="cover overlay">
        <img class="cover-image" src="<?= URL ?>assets/dashboard-assets/assets/examples/images/dashboard-header.jpg"
        alt="...">
        <div class="overlay-panel vertical-align overlay-background">
          <div class="vertical-align-middle">
            <a class="avatar avatar-lg" href="javascript:void(0)">
              <?php if ($this->session->userdata('logged_in')['image'] == ""){ ?>
                <img src="<?= URL ?>assets/images/users/avatar.png" alt="">
              <?php }else{ ?>
                <img src="<?= URL ?>assets/images/users/<?= $this->session->userdata('logged_in')['image'] ?>" alt="">
              <?php } ?>
            </a>
            <div class="site-menubar-info">
              <h5 class="site-menubar-user">Joyeria</h5>
              <p class="site-menubar-email"><?= $this->session->userdata('logged_in')['name'] ?></p>
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
                <a class="animsition-link" href="<?= URL ?>branches">
                  <span class="site-menu-title">Mis sucursales</span>
                </a>
            </li>
            <li class="site-menu-item">
                <a class="animsition-link" href="<?= URL ?>schedules">
                  <span class="site-menu-title">Horarios</span>
                </a>
            </li>
          <!--<li class="site-menu-item">
                <a class="animsition-link" href="<?= URL ?>users">
                  <span class="site-menu-title">Usuarios</span>
                </a>
            </li>-->
            <li class="site-menu-item">
                <a class="animsition-link" href="<?= URL ?>productsManager">
                  <span class="site-menu-title">Productos</span>
                </a>
            </li>
            <!--
            <li class="site-menu-item">
                <a class="animsition-link" href="<?= URL ?>Customers">
                  <span class="site-menu-title">Clientes</span>
                </a>
            </li>
          -->
            <li class="site-menu-item">
                <a class="animsition-link" href="<?= URL ?>Promotions">
                  <span class="site-menu-title">Promociones</span>
                </a>
            </li>
              <li class="site-menu-item">
                <a class="animsition-link" href="<?= URL ?>categories">
                  <span class="site-menu-title">Categorias</span>
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
