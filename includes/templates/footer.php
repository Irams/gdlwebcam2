<footer class="site-footer">
  <div class="contenedor clearfix">
    <div class="footer.info">
      <h3>Sobre <span>TOLWEBCAM</span></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque consectetur, eros eu eleifend iaculis, ligula massa aliquet mauris, at rutrum mi libero vitae mauris. Donec justo purus, condimentum quis neque id, aliquet interdum velit. Nulla viverra quam ac lacus suscipit consectetur. Curabitur varius eleifend tellus efficitur egestas. Suspendisse id maximus lectus. In non ultrices ante, ac mattis quam. Donec quis felis pulvinar, malesuada enim et, imperdiet eros. Proin mattis mi vel metus feugiat efficitur.</p>
    </div>
    <div class="ultimos-twetts">
      <h3>Últimos <span>Twetts</span></h3>
      <ul>
        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
        <li>Integer sit amet augue in diam scelerisque tincidunt.</li>
        <li>Pellentesque sagittis eros nec mauris maximus, nec tristique elit semper.</li>
      </ul>
    </div>
    <div class="menu">
      <h3>Redes <span>Socales</span></h3>
      <nav class="redes-sociales">
          <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      </nav>
    </div><!--menu-->
  </div><!--.contenedor-->
  <p class="copyright">Todos los derechos reservados TolWebCam 2017.</p>
</footer>
   <?php
   $archivo = basename($_SERVER['PHP_SELF']);
   $pagina = str_replace(".php", "", $archivo);
     if($pagina == 'invitados' || $pagina == 'index'){
         echo '<script src="js/jquery.colorbox.js"></script>';
         echo '<script src="js/jquery.waypoints.min.js"></script>';
       } else if($pagina == 'conferencia') {
           echo '<script src="js/lightbox.min.js"></script>';
       }
?>

    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.lettering.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQiY-i-xh31D8AWL96vXuFu6413P_-UP0&callback=initMap"
async defer></script>
 <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
</body>
</html>
