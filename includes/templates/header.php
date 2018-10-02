<!doctype html>
<html class="no-js" lang="">
    <head>
        <?php
        $archivo = basename($_SERVER['PHP_SELF']);
        //$pagina = str_replace(".php", "", $archivo);
        if($archivo == 'invitados.php' || $archivo == 'index.php'){
            echo '<link rel="stylesheet" href="css/colorbox.css">';
        } else if($archivo == 'conferencia.php') {
            echo '<link rel="stylesheet" href="css/lightbox.min.css">';
        }
        ?>

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>TL WebCam</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

    <header class="site-header">
      <div class="hero">
        <div class="contenido-header">
          <nav class="redes-sociales">
              <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          </nav>
          <div class="informacion-evento">
            <div class="clearfix">
            </div>
            <p class="fecha"><i class="fa fa-calendar" aria-hidden="true"></i>10-12 Dic</p>
            <p class="ciudad"><i class="fa fa-map-marker" aria-hidden="true"></i>Toluca, MX</p>
            <h1 class="nombre-sitio">TolWebCam</h1>
            <p class="slogan">La mejor conferencia de <span>diseño web</span></p>
          </div><!--.informacion-evento-->
        </div><!--.contenido-header-->
      </div><!--.hero-->
    </header>
    <div class="barra">
      <div class="contenedor clearfix">
        <div class="logo">
          <a href="index.php">
          <img src="img/logo.svg" alt="logo gdlwebcam">
          </a>
        </div><!--.logo-->
        <div class="menu-movil">
          <span></span>
          <span></span>
          <span></span>
        </div><!--.menu-movil-->
        <nav class="navegacion-principal clearfix">
          <a href="conferencia.php">Conferencia</a>
          <a href="calendario.php">Calendario</a>
          <a href="invitados.php">Invitados</a>
          <a href="registro.php">Reservaciones</a>
        </nav>
      </div><!--.contenedor-->
    </div><!--.barra-->
