<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Copycor</title>
    <link rel="icon" href="./pics/favicon.png">
    <link rel="stylesheet" href="./css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script>// Slider Movement Script
      $(document).ready(function() {
        function moveToSelected(element) {

          if (element == "next") {
            var selected = $(".selected").next();
          } else if (element == "prev") {
            var selected = $(".selected").prev();
          } else {
            var selected = element;
          }

          var next = $(selected).next();
          var prev = $(selected).prev();
          var prevSecond = $(prev).prev();
          var nextSecond = $(next).next();

          $(selected).removeClass().addClass("selected");

          $(prev).removeClass().addClass("prev");
          $(next).removeClass().addClass("next");

          $(nextSecond).removeClass().addClass("nextRightSecond");
          $(prevSecond).removeClass().addClass("prevLeftSecond");

          $(nextSecond).nextAll().removeClass().addClass('hideRight');
          $(prevSecond).prevAll().removeClass().addClass('hideLeft');

        }

        // Eventos teclado
        $(document).keydown(function(e) {
            switch(e.which) {
                case 37: // left
                moveToSelected('prev');
                break;

                case 39: // right
                moveToSelected('next');
                break;

                default: return;
            }
            e.preventDefault();
        });

        $('#carousel div').click(function() {
          moveToSelected($(this));
        });

        $('#prev').click(function() {
          moveToSelected('prev');
        });

        $('#next').click(function() {
          moveToSelected('next');
        });
      });
    </script>
    <script>// jQuery Soft Scroll
      $(document).ready(function() {
        $('a[href^="#"]').click(function() {
          var destino = $(this.hash);
          if (destino.length == 0) {
            destino = $('a[name="' + this.hash.substr(1) + '"]');
          }
          if (destino.length == 0) {
            destino = $('html');
          }
          $('html, body').animate({ scrollTop: destino.offset().top }, 1250);
          return false;
        });
      });
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- Whatsapp Logo -->
  </head>
  <style media="screen"> /* Fonts import */
    @font-face { /* Selima */
        font-family: 'Selima';
        src: url('./fonts/Selima .ttf') format("truetype");
    }
    @font-face { /* Raleway-Regular */
        font-family: 'Raleway-Regular';
        src: url('./fonts/Raleway-Regular.ttf') format("truetype");
    }
    @font-face { /* BreeSerif-Regular */
        font-family: 'BreeSerif-Regular';
        src: url('./fonts/BreeSerif-Regular.ttf') format("truetype");
    }
    @font-face { /* KGSummerSunshineShadow */
        font-family: 'KGSummerSunshineShadow';
        src: url('./fonts/KGSummerSunshineShadow.ttf') format("truetype");
    }
    @font-face { /* KGSummerSunshine */
        font-family: 'KGSummerSunshine';
        src: url('./fonts/KGSummerSunshine.ttf') format("truetype");
    }
    @font-face { /* KGSummerSunshineBlackout */
        font-family: 'KGSummerSunshineBlackout';
        src: url('./fonts/KGSummerSunshineBlackout.ttf') format("truetype");
    }
    @font-face { /* OpenSans-Light */
        font-family: 'open-sans.light';
        src: url('./fonts/open-sans.light.ttf') format("truetype");
    }
    @font-face { /* OpenSans-Semibold */
        font-family: 'OpenSans-Semibold';
        src: url('./fonts/OpenSans-Semibold.ttf') format("truetype");
    }
    @font-face { /* Organic Relief */
        font-family: 'Organic Relief';
        src: url('./fonts/Organic Relief.ttf') format("truetype");
    }
  </style>
  <script type="text/javascript" src="http://localhost:35729/livereload.js" charset="utf-8"></script>
  <body>
    <div class="main-container">
      <!-- MODAL-WINDOW  -------------------------------------------------->
      <input type="checkbox" id="close">
      <label for="close" id="btn-close" ></label>
      <div class="modal-window">
        <div class="modal-content">
            <img src="./pics/Promotion-4.png" class="modal-image" alt="last-offert" style="">
        </div>
      </div>
      <!-- MODAL-WINDOW-ENDS  --------------------------------------------->
      <div class="social">                             <!-- SOCIAL MEDIA    -->
          <a href="//www.linkedin.com/in/levi-josue-medina-burguillos-02b388261/" target="_blank">
            <img src="./icons/instagram-icon.png" class="social-medial-icon"  alt="instagram">
          </a>
          <a href="//www.linkedin.com/in/levi-josue-medina-burguillos-02b388261/" target="_blank">
            <img src="./icons/whatsapp-icon.png" class="social-medial-icon" alt="whatsapp" style="margin-top:0.5em;">
          </a>
      </div>
      <section class="nav-bar">                        <!-- NAV BAR         -->
        <div class="logo-2">
            <div class="logo-image">
              <div class="circle c-top"></div>
              <div class="circle c-right"></div>
              <div class="circle c-left"></div>
              <div class="circle c-bottom"></div>
            </div>
            <div class="logo-title-ar">
              <h1 class="tittle-part1">COPY<span class="tittle-part2">COR</span></h1>
            </div>
            <div class="logo-sub-title-ar">
              <hr class="logo-line">
              <div class="name-city-ar">
                <h3 class="logo-city-name">SAN CRISTÒBAL</span></h3>
              </div>
              <hr class="logo-line">
            </div>
        </div>
        <div class="nav-options-ar">
          <ul>
            <li class="nav-option o1"><a href="#about">Quiénes Somos?</a></li>
            <li class="nav-option o2"><a href="#services">Servicios</a></li>
            <li class="nav-option o3"><a href="#contact-us">Contactanos</a></li>
            <li class="nav-option o4"><a href="#album">Álbum  de Trabajo</a></li>
            <li class="nav-option o5"><a href="#location">Ubicación</a></li>
            <li class="nav-option o6"><a href="#offers">Promociones</a></li>
            <li class="nav-option o7"><a href="#FAQ">Preguntas Frecuentes</a></li>
            <li class="nav-option o8"><a href="#our-clients">Nuestros Clientes</a></li>
          </ul>
        </div>
        <div class="logo">
            <div class="logo-image">
              <div class="circle c-top"></div>
              <div class="circle c-right"></div>
              <div class="circle c-left"></div>
              <div class="circle c-bottom"></div>
            </div>
            <div class="logo-title-ar">
              <h1 class="tittle-part1">COPY<span class="tittle-part2">COR</span></h1>
            </div>
            <div class="logo-sub-title-ar">
              <hr class="logo-line">
              <div class="name-city-ar">
                <h3 class="logo-city-name">SAN CRISTÒBAL</span></h3>
              </div>
              <hr class="logo-line">
            </div>
        </div>
      </section>
      <section class="schedule-area">                  <!-- SCHEDULE        -->
        <div class="schedule-title-area">
          <h1 class="schedule-title">HORARIO</h1>
        </div>
        <div class="schedule-content-area">
          <h1 class="schedule-content"><span style="color:yellow;">Lunes a Viernes </span> 7:00 AM a 7:00PM<br> <span style="color:yellow;"> Sábados </span> 8:00 AM a 7:00 PM</h1>
        </div>
      </section>
      <div class="decorative-line-schedule-area">      <!-- DECORATIVE LINE -->
        <hr class="decorative-line-schedule">
      </div>
      <section class="offers" id="offers">             <!-- OFFERS          -->
          <div class="title-offers">PROMOCIONES</div>
          <div class="carousel-area">
            <div id="carousel">
               <div class="hideLeft">
                <img src="./pics/Promotion-1.png">
              </div>
              <div class="prevLeftSecond">
                <img src="./pics/Promotion-2.png">
              </div>
              <div class="prev">
                <img src="./pics/Promotion-3.png">
              </div>
              <div class="selected">
                <img src="./pics/Promotion-4.png">
              </div>
              <div class="next">
                <img src="./pics/Promotion-1.png">
              </div>
              <div class="nextRightSecond">
                <img src="./pics/Promotion-2.png">
              </div>
              <div class="hideRight">
                <img src="./pics/Promotion-3.png">
              </div>
            </div>
          </div>
            <div class="buttons">
              <button class="button-offers" id="prev"><b><<</b></button>
              <button class="button-offers" id="next"><b>>></b></button>
            </div>
          </section>
      <section class="services-area" id="services">    <!-- SERVICES        -->
        <div class="services-title">Te Ofrecemos...</div>
        <div class="services-content">
          <div class="box-service">
            <div class="service">
              <img src="./icons/fotocopiadora.png" class="service-image-1">
            </div>
            <div class="service-title">Fotocopias</div>
          </div>
          <div class="box-service">
            <div class="service">
              <img src="./icons/printer_icon.png" class="service-image-2">
            </div>
            <div class="service-title">Impresiones</div>
          </div>
          <div class="box-service">
            <div class="service">
              <img src="./icons/scanner_icon.png" class="service-image-3">
            </div>
            <div class="service-title">Digitalización</div>
          </div>
          <div class="box-service">
            <div class="service">
              <img src="./icons/cd_icon.png" class="service-image-4">
            </div>
            <div class="service-title">Grabado<br>de CD</div>
          </div>
          <div class="box-service">
            <div class="service">
              <img src="./icons/accounting_folios_icon.png" class="service-image-5">
            </div>
            <div class="service-title">Folios<br>Contables</div>
          </div>
          <div class="box-service">
            <div class="service">
              <img src="./icons/ringed_notebook.png" class="service-image-6">
            </div>
            <div class="service-title">Anillado</div>
          </div>
        </div>
      </section>
      <section class="about" id="about">               <!-- ABOUT           -->
        <div class="about-title">
            <h2 class="grow-animation">¿Quiénes Somos?</h2>
        </div>
        <div class="about-left"><!-- left side area -->
            <img src="./pics/about_image.png" class="about-image">
        </div>
        <div class="about-right"><!-- right side area -->
          <div class="about-text-top">
              <p>
                  Un buen diseño hace la vida mejor. Somos expertos en diseño web y entrenados en desarrollo web para la industria digital.
                  Ofrecemos un servicio personalizado, profesional y confiable.
              </p>
          </div>
          <div class="about-text-bottom">
              <p>
                Somos una agencia ganadora de diseño web ubicada en Manchester, Reino Unido. Nos especializamos en diseño web, desarrollo web, ecommerce y SEO Orgánico.
                Con más de una década de experiencia, Shape está integrada por un equipo fresco.
              </p>
          </div>
        </div>
      </section>
      <hr class="separation-line">                     <!-- SEPARATION LINE -->
      <section class="location" id="location" >        <!-- LOCATION        -->
        <div class="location-text-area">
          <div class="location-left">
            <h1 class="location-title">Dónde Ubicarnos?</h1>
            <div class="location-right-2">
              <img src="./pics/location-image.png" class="location-dec-image">
            </div>
            <div class="location-description">
              <p >
                  <b>Dirección:</b> Calle Leonardo da Vinci, 7, 41092. Address: Calle Leonardo da Vinci, 7, 41092.
                  Dirección: Calle de Velázquez, 80 Madrid. Address: Street de Velázquez, 80 Madrid.
              </p>
            </div>
            <div class="location-reference">
              <p>
                <b>Punto de Referencia:</b> Lorem ipsum aeternam dominen, et nobis dominem aut fillis ex vernuto.
              </p>
            </div>
          </div>
          <div class="location-right">
            <img src="./pics/location-image.png" class="location-dec-image">
          </div>
        </div>
        <div class="location-map-area">
          <div  class="map-responsive">
            <iframe src="https://maps.google.com/maps?q=Calle+Leonardo+da+Vinci%2C+7%2C+41092.+Address%3A+Calle+Leonardo+da+Vinci%2C+7%2C+41092.+Direcci%C3%B3n%3A+Calle+de+Vel%C3%A1zquez%2C+80+Madrid.+Address%3A+Street+de+Vel%C3%A1zquez%2C+80+Madrid.&t=&z=13&ie=UTF8&iwloc=&output=embed"
            width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </section>
      <hr class="separation-line">                     <!-- SEPARATION LINE -->
      <section class="album" id="album" >              <!-- WORK ALBUM      -->
        <div class="album-intro-area">
            <div class="album-intro-text" >
              <h1 class="album-title">Álbum<br>De Trabajo</h1>
            </div>
            <div class="album-intro-images">
              <div class="Box">
                  <img src="./pics/album-4.png" class="prev-img-album">
              </div>
              <div class="Box">
                  <img src="./pics/album-4.png" class="prev-img-album">
              </div>
            </div>
        </div>
        <div class="container">
            <div class="header">
              <span>Ver Álbum</span>
            </div>
            <div class="content">
              <div class="images-area">
                <img src="./pics/album-16.png" class="img-album">
                <img src="./pics/album-2.png" class="img-album">
                <img src="./pics/album-11.png" class="img-album">
                <img src="./pics/album-5.png" class="img-album">
              </div>
              <div class="images-area">
                <img src="./pics/album-1.png" class="img-album">
                <img src="./pics/album-3.png" class="img-album">
                <img src="./pics/album-7.png" class="img-album">
                <img src="./pics/album-8.png" class="img-album">
              </div>
              <div class="images-area">
                <img src="./pics/album-15.png" class="img-album">
                <img src="./pics/album-12.png" class="img-album">
                <img src="./pics/album-13.png" class="img-album">
                <img src="./pics/album-14.png" class="img-album">
              </div>
            </div>
        </div>
        <script> //Script to fold and unfold the album images
          $(".header").click(function () {
            $header = $(this);
            //getting the next element
            $content = $header.next();
            //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
            $content.slideToggle(500, function () {
                //execute this after slideToggle is done
                //change text of header based on visibility of content div
                $header.text(function () {
                    //change text based on condition
                    return $content.is(":visible") ? "Ocultar" : "Ver Álbum";
                });
            });

        });
        </script>
      </section>
      <section class="FAQ" id="FAQ">                   <!-- FAQ             -->

        <div class="FAQ-title-area-2">
          <h1 class="FAQ-title-2"><span class="FAQ-title-2-background">PREGUNTAS<br>FRECUENTES</span></h1>
        </div>

        <div class="FAQ-title-area FAQ-left-margin-1">
          <h1 class="FAQ-title">
           <span> P </span>
           <span> R </span>
           <span> E </span>
           <span> G </span>
           <span> U </span>
           <span> N </span>
           <span> T </span>
           <span> A </span>
           <span> S </span>
          </h1>
        </div>
        <div class="FAQ-title-area FAQ-left-margin-2">
          <h1 class="FAQ-title">
           <span> F </span>
           <span> R </span>
           <span> E </span>
           <span> C </span>
           <span> U </span>
           <span> E </span>
           <span> N </span>
           <span> T </span>
           <span> E </span>
           <span> S </span>
          </h1>
        </div>
        <div class="FAQ-content">
          <div  class="answer-area all">
            <div class="question-area left-question" style="background:rgba(248,165,1,255);">
              <div class="decorative-angle left-angle-1"></div>
              <h1 class="question">Tipos de Archivo</h1>
            </div>
            <p class="answer">
              La información de un ordenador está almacenada en lo que se llaman archivos. Normalmente los archivos están formados
              por un nombre, un punto y una extensión (p.e. PROGRAMA.EXE). El nombre nos sirve para diferenciar unos archivos de otros
              y la extensión para atribuirle unas propiedades concretas.
            </p>
          </div>
          <div  class="answer-area all">
            <div class="question-area right-question" style="background:rgba(246,24,1,255);">
              <div class="decorative-angle right-angle-1" ></div>
              <h1 class="question">Tipos de Archivo</h1>
            </div>
            <p class="answer">
              La información de un ordenador está almacenada en lo que se llaman archivos. Normalmente los archivos están formados
              por un nombre, un punto y una extensión (p.e. PROGRAMA.EXE). El nombre nos sirve para diferenciar unos archivos de otros
              y la extensión para atribuirle unas propiedades concretas.
            </p>
          </div>
          <div  class="answer-area all">
            <div class="question-area left-question" style="background:rgba(188,224,92,255);">
              <div class="decorative-angle left-angle-2"></div>
              <h1 class="question">Tipos de Archivo</h1>
            </div>
            <p class="answer">
              La información de un ordenador está almacenada en lo que se llaman archivos. Normalmente los archivos están formados
              por un nombre, un punto y una extensión (p.e. PROGRAMA.EXE). El nombre nos sirve para diferenciar unos archivos de otros
              y la extensión para atribuirle unas propiedades concretas.
            </p>
          </div>
          <div  class="answer-area all">
            <div class="question-area right-question" style="background:rgba(4,191,199,255);">
              <div class="decorative-angle right-angle-2"></div>
              <h1 class="question">Tipos de Archivo</h1>
            </div>
            <p class="answer">
              La información de un ordenador está almacenada en lo que se llaman archivos. Normalmente los archivos están formados
              por un nombre, un punto y una extensión (p.e. PROGRAMA.EXE). El nombre nos sirve para diferenciar unos archivos de otros
              y la extensión para atribuirle unas propiedades concretas.
            </p>
          </div>
        </div>
      </section>
      <section class="contact-us" id="contact-us">     <!-- CONTACT US      -->
        <h1 class="contact-us-title-2">Contáctanos</h1>
        <div class="contact-us-left">
          <img src="./pics/contact-us.jpg" class="contact-us-left-image">
        </div>
        <div class="contact-us-right">
          <div class="contact-us-title-area">
            <h1 class="contact-us-title">Contáctanos</h1>
          </div>
          <div class="contact-us-text-area">
            <h4 class="contact-us-sub-title sub-title-margin">Atención al Cliente</h4>
            <div class="whatsapp-area">
              <i class="fa fa-whatsapp faa-whatsapp" style="font-size:4em; margin: auto 0px;"></i>
              <ul class="whatsapp-href">
                <li class="whatsapp-link">
                  <a  href="//www.linkedin.com/in/levi-josue-medina-burguillos-02b388261/" target="_blank">+58 123-456789 <i>San Cristóbal</i></a>
                </li>
                <li class="whatsapp-link" style="margin-top:1em;">
                  <a href="//www.linkedin.com/in/levi-josue-medina-burguillos-02b388261/" target="_blank">+58 123-456789 <i>La Grita</i></a>
                </li>
              </ul>
            </div>
              <h4 class="contact-us-sub-title">Síguenos</h4>
              <div class="instagram-area">
                <div class="instagram-logo">
                  <div class="innerbox-instagram-logo">
                  </div>
                </div>
                <ul class="instagram-href">
                  <li class="instagram-link">
                    <a  href="//www.linkedin.com/in/levi-josue-medina-burguillos-02b388261/" target="_blank">@instagram_account1</a>
                  </li>
                  <li class="instagram-link"  style="margin-top:0.5em;">
                    <a href="//www.linkedin.com/in/levi-josue-medina-burguillos-02b388261/" target="_blank">@instagram_account2</a>
                  </li>
                </ul>
              </div>
              <div class="facebook-area">
                <div id='facebook-icon'></div>
                <ul class="facebook-href">
                  <li class="facebook-link">
                    <a  href="//www.linkedin.com/in/levi-josue-medina-burguillos-02b388261/" target="_blank">facebook_account</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="contact-us-right-image-area">
              <img src="./pics/contact-us-like.jpg" class="contact-us-right-image">
            </div>
        </div>
        </section>
      <section class="slider" id="our-clients">        <!-- OUR CLIENTS     -->
      	<div class="slide-track">
      		<div class="slide">
      			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" class="client-logo"  alt="" />
      		</div>
      		<div class="slide">
      			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" class="client-logo" alt="" />
      		</div>
      		<div class="slide">
      			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" class="client-logo" alt="" />
      		</div>
      		<div class="slide">
      			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" class="client-logo" alt="" />
      		</div>
      		<div class="slide">
      			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" class="client-logo" alt="" />
      		</div>
      		<div class="slide">
      			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" class="client-logo" alt="" />
      		</div>
      		<div class="slide">
      			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" class="client-logo" alt="" />
      		</div>
      		<div class="slide">
      			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" class="client-logo" alt="" />
      		</div>
      		<div class="slide">
      			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" class="client-logo" alt="" />
      		</div>
      		<div class="slide">
      			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" class="client-logo" alt="" />
      		</div>
      		<div class="slide">
      			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" class="client-logo" alt="" />
      		</div>
      		<div class="slide">
      			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" class="client-logo" alt="" />
      		</div>
      		<div class="slide">
      			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" class="client-logo" alt="" />
      		</div>
      		<div class="slide">
      			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" class="client-logo" alt="" />
      		</div>
      	</div>
      </section>
      <footer>                                         <!-- FOOTER          -->
        <div class="footer-left"><!-- left side area -->
          <div class="logo-footer">
               <div class="logo-image-footer">
                <div class="circle-footer c-top-footer"></div>
                <div class="circle-footer c-right-footer"></div>
                <div class="circle-footer c-left-footer"></div>
                <div class="circle-footer c-bottom-footer"></div>
              </div>
            <div class="logo-title-ar-footer">
                <h1 class="tittle-part1-footer">COPY<span class="tittle-part2-footer">COR</span></h1>
              </div>
          </div>
        </div>
        <hr class="footer-line">
        <div  class="footer-right"><!-- right side area -->
          <ul class="footer-options-ar">
            <li ><a  class="footer-option"href="#about">Quiénes Somos?</a></li>
            <li ><a class="footer-option" href="#services">Servicios</a></li>
            <li ><a class="footer-option" href="#contact-us">Contáctanos</a></li>
            <li ><a class="footer-option" href="#album">Álbum</a></li>
            <li ><a class="footer-option" href="#location">Ubicación</a></li>
            <li ><a class="footer-option" href="#offers">Promociones</a></li>
            <li ><a class="footer-option" href="#FAQ">Preguntas</a></li>
            <!-- <li ><a class="footer-option" href="#our-clients">Nuestros Clientes</a></li> -->
          </ul>
        </div>
      </footer>
    </div>
  </body>
</html>
