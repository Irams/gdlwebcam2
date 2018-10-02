<?php include_once 'includes/templates/header.php';?>
    <section class="seccion contenedor">
      <h2>La mejor conferencia de diseño web en español</h2>
      <p>
        Vestibulum aliquam varius nibh, nec condimentum velit. Sed ut sapien scelerisque, rhoncus dolor non, mollis lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ullamcorper sollicitudin ligula sit amet aliquet. Morbi nec diam felis. Aenean gravida pellentesque enim nec facilisis. Proin vel sodales ipsum, in vulputate diam. Praesent elementum velit at dolor rutrum dictum. Curabitur tristique ut libero nec molestie.
      </p>
    </section><!--seccion contenedor-->
    <section class="programa">
      <div class="contenedor-video">
        <video autoplay muted playsinline loop poster="../img/bg-talleres.jpg">
          <source src="video/video.mp4" type="video/mp4">
          <source src="video/video.webm" type="video/webm">
          <source src="video/video.ogv" type="video/ogv">
        </video>
      </div><!--.contenedor-video-->
      <div class="contenido-programa">
        <div class="contenedor">
            <div class="programa-evento">
              <h2>Programa del evento</h2>
              <nav class="menu-programa">
                <a href="#talleres"><i class="fa fa-code" aria-hidden="true"></i>Talleres</a>
                <a href="#conferencias"><i class="fa fa-comment" aria-hidden="true"></i>Conferencias</a>
                <a href="#seminarios"><i class="fa fa-university" aria-hidden="true"></i>Seminarios</a>
              </nav><!--.menu-programa-->
              <div id="talleres" class="info-curso ocultar clearfix">
                <div class="detalle-evento">
                  <h3>HTML5, CSS3 y JavaScript</h3>
                  <p><i class="fa fa-clock-o" aria-hidden="true"></i>16 hrs.</p>
                  <p><i class="fa fa-calendar" aria-hidden="true"></i>27 Octubre</p>
                  <p><i class="fa fa-user" aria-hidden="true"></i>Herberth I. Medina</p>
                </div><!--.detalle-evento-->
                <div class="detalle-evento">
                  <h3>Responsive Web Design</h3>
                  <p><i class="fa fa-clock-o" aria-hidden="true"></i>20 hrs.</p>
                  <p><i class="fa fa-calendar" aria-hidden="true"></i>27 Octubre</p>
                  <p><i class="fa fa-user" aria-hidden="true"></i>Herberth I. Medina</p>
                </div><!--.detalle-evento-->
                <a href="#" class="buttom float-rigth">Ver Todos</a>
              </div><!--#talleres-->

              <div id="conferencias" class="info-curso ocultar clearfix">
                <div class="detalle-evento">
                  <h3>Como ser freelancer</h3>
                  <p><i class="fa fa-clock-o" aria-hidden="true"></i>10 hrs.</p>
                  <p><i class="fa fa-calendar" aria-hidden="true"></i>27 Octubre</p>
                  <p><i class="fa fa-user" aria-hidden="true"></i>Javier Salgado</p>
                </div><!--.detalle-evento-->
                <div class="detalle-evento">
                  <h3>Tecnologías del futuro</h3>
                  <p><i class="fa fa-clock-o" aria-hidden="true"></i>17 hrs.</p>
                  <p><i class="fa fa-calendar" aria-hidden="true"></i>27 Octubre</p>
                  <p><i class="fa fa-user" aria-hidden="true"></i>Monserrat Navarrete</p>
                </div><!--.detalle-evento-->
                <a href="#" class="buttom float-rigth">Ver Todos</a>
              </div><!--#talleres-->

              <div id="seminarios" class="info-curso ocultar clearfix">
                <div class="detalle-evento">
                  <h3>Diseño UI/UX para móviles</h3>
                  <p><i class="fa fa-clock-o" aria-hidden="true"></i>17 hrs.</p>
                  <p><i class="fa fa-calendar" aria-hidden="true"></i>28 Octubre</p>
                  <p><i class="fa fa-user" aria-hidden="true"></i>Roberto Perdomo</p>
                </div><!--.detalle-evento-->
                <div class="detalle-evento">
                  <h3>Aprende a programar en una mañana</h3>
                  <p><i class="fa fa-clock-o" aria-hidden="true"></i>12 hrs.</p>
                  <p><i class="fa fa-calendar" aria-hidden="true"></i>28 Octubre</p>
                  <p><i class="fa fa-user" aria-hidden="true"></i>Javier Salgado</p>
                </div><!--.detalle-evento-->
                <a href="#" class="buttom float-rigth">Ver Todos</a>
              </div><!--#talleres-->
            </div><!--.programa-evento-->
        </div><!--.contenedor-->
      </div><!--.contenido-programa-->
    </section><!--.programa-->
    <section class="invitados contenedor seccion">
      <h2>Nuestros Invitados</h2>
      <ul class="lista-invitados clearfix">
        <li>
          <div class="invitado">
            <img src="img/invitado1.jpg" alt="imagen invitado">
            <p>Rafael Bautista</p>
          </div>
        </li>
        <li>
          <div class="invitado">
            <img src="img/invitado2.jpg" alt="imagen invitado">
            <p>Shari Herrera</p>
          </div>
        </li>
        <li>
          <div class="invitado">
            <img src="img/invitado3.jpg" alt="imagen invitado">
            <p>Gregorio Sánchez</p>
          </div>
        </li>
        <li>
          <div class="invitado">
            <img src="img/invitado4.jpg" alt="imagen invitado">
            <p>Susana Rivera</p>
          </div>
        </li>
        <li>
          <div class="invitado">
            <img src="img/invitado5.jpg" alt="imagen invitado">
            <p>Harold García</p>
          </div>
        </li>
        <li>
          <div class="invitado">
            <img src="img/invitado6.jpg" alt="imagen invitado">
            <p>Susan Sánchez</p>
          </div>
        </li>
      </ul>
    </section><!--invitados-->
    <div class="contador parallax">
      <div class="contenedor">
        <ul class="resumen-evento clearfix">
          <li><p class="numero"></p>Invitados</li>
          <li><p class="numero"></p>Talleres</li>
          <li><p class="numero"></p>Días</li>
          <li><p class="numero"></p>Conferencias</li>
        </ul>
      </div><!--contenedor-->
    </div><!--.contador parallax-->
    <section class="precios seccion">
      <h2>Precios</h2>
      <div class="contenedor">
        <ul class="lista-precios clearfix">
          <li>
            <div class="tabla-precio">
              <h3>Pase por día</h3>
              <p class="numero">$30</p>
              <ul>
                <li>Bocadillos gratis</li>
                <li>Todas las conferencias</li>
                <li>Todos los talleres</li>
              </ul>
              <a href="#" class="buttom hollow">Comprar</a>
            </div>
          </li>
          <li>
            <div class="tabla-precio">
              <h3>Todos los días</h3>
              <p class="numero">$50</p>
              <ul>
                <li>Bocadillos gratis</li>
                <li>Todas las conferencias</li>
                <li>Todos los talleres</li>
              </ul>
              <a href="#" class="buttom">Comprar</a>
            </div>
          </li>
          <li>
            <div class="tabla-precio">
              <h3>Pase dos días</h3>
              <p class="numero">$45</p>
              <ul>
                <li>Bocadillos gratis</li>
                <li>Todas las conferencias</li>
                <li>Todos los talleres</li>
              </ul>
              <a href="#" class="buttom hollow">Comprar</a>
            </div>
          </li>
        </ul>
      </div><!--.contenedor-->
    </section>
    <div class="mapa" id="mapa"></div>
    <section class="seccion">
      <h2>Testimoniales</h2>
      <div class="testimoniales contenedor clearfix">
      <div class="testimonial">
        <blockquote>
          <p>Nulla vestibulum non nibh accumsan varius. In elementum eros est, ut bibendum magna molestie id. Nulla a erat eleifend, varius nunc nec, lacinia quam.</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div><!--.testimonial-->
      <div class="testimonial">
        <blockquote>
          <p>Nulla vestibulum non nibh accumsan varius. In elementum eros est, ut bibendum magna molestie id. Nulla a erat eleifend, varius nunc nec, lacinia quam.</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div><!--.testimonial-->
      <div class="testimonial">
        <blockquote>
          <p>Nulla vestibulum non nibh accumsan varius. In elementum eros est, ut bibendum magna molestie id. Nulla a erat eleifend, varius nunc nec, lacinia quam.</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div><!--.testimonial-->
      </div>
    </section>
    <div class="newsletter parallax">
      <div class="contenido contenedor">
        <p>Regístrate al newsletter</p>
        <h3>TolWebCam</h3>
        <a href="#" class="buttom transparente">Registro</a>
      </div><!--.contenido-->
    </div><!--.newsletter-->
    <section class="seccion">
      <h2>Faltan</h2>
      <div class="cuenta-regresiva contenedor">
        <ul class="clearfix">
          <li><p id="dias" class="numero"></p>Días</li>
          <li><p id="horas" class="numero"></p>Horas</li>
          <li><p id="minutos" class="numero"></p>Minutos</li>
          <li><p id="segundos" class="numero"></p>Segundos</li>
        </ul>
      </div>
    </section>
<?php include_once 'includes/templates/footer.php'; ?>
