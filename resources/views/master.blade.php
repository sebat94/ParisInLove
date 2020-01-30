<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Paris In Love Studio</title>

  <link rel="shortcut icon" href="{{ URL::to('img/logo/favicon.png') }}">

  <link rel="stylesheet" href="{{ URL::to('css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ URL::to('css/fonts.css') }}">

  <!--link rel="stylesheet" href="css/Slideshow-Plus-Ultra.css">-->

  <link rel="stylesheet" href="{{ URL::to('css/estilos_globales.css') }}">
  <link rel="stylesheet" href="{{ URL::to('css/cabecera_2elem.css') }}">
  <link rel="stylesheet" href="{{ URL::to('css/main.css') }}">
  <link rel="stylesheet" href="{{ URL::to('css/pie_3elem.css') }}">

  @yield('styles')

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-98203078-1', 'auto');
    ga('send', 'pageview');

  </script>

</head>
<body>

  <header class="cabecera_2elem unselectable">
    <div class="bloque_contenedor">

      <div class="cabecera_izq">
        <a href="{{URL::to('/')}}">
          <img src="{{ URL::to('img/logo/logo_positivo.png') }}" alt="">
        </a>
      </div>

      <div class="cabecera_der">
        <nav>
          <ul>
            <li><a href="{{URL::to('/')}}" class="m_item" id="m_index">Home</a></li>
            <li><a href="{{URL::to('/projects')}}" class="m_item" id="m_projects">Proyectos</a></li>
            <li><a href="{{URL::to('/about')}}" class="m_item" id="m_about">Nosotros</a></li>
            <li><a href="{{URL::to('/contact')}}" class="m_item" id="m_contact">Contacto</a></li>
          </ul>
        </nav>
      </div>

      <div class="hamburguesa">
        <span></span>
        <span></span>
        <span></span>
      </div>

    </div>
  </header>


  @yield('body')

  @if (Cookie::get('acceptCookies') == null)
      <div class="cookies_message">
        <span>Utilizamos cookies propias y de terceros para obtener datos estadísticos de la navegación de nuestros usuarios y mejorar nuestros servicios. Si continúa navegando, consideramos que acepta su uso. Puede obtener más información a través de este <a href="{{ URL::to('/legal') }}">enlace</a>.<button type="button" class="aceptar_cookies" id="btn_accept"><span>Aceptar</span></button></span>
      </div>
  @endif


  <footer class="pie_3elem unselectable">
    <div class="bloque_contenedor">

      <div class="pie_columns clearfix">

        <div class="pie_column1">
          <div class="pie_column1_title"><h2>PARIS IN LOVE</h2></div>
          <div class="pie_column1_content">
            <div><span><i class="fa fa-phone"></i>+34 644 263 559</span></div>
            <div><span><i class="fa fa-phone"></i>+34 966 236 190</span></div>
            <div><span><i class="fa fa-envelope-o"></i>info<i class="fa fa-at"></i>parisinlovestudio.com</span></div>
            <div><span><i class="fa fa-map-marker"></i>Alicante, España</span></div>
          </div>
        </div>

        <div class="pie_column2">
          <div class="pie_column2_title"><h2>EMPRESA</h2></div>
          <div class="pie_column2_content">
            <nav>
              <ul>
                <li><a href="{{URL::to('/about')}}">Nosotros</a></li>
                <li><a href="{{URL::to('/contact')}}">Contacto</a></li>
                <li><a href="{{URL::to('/projects')}}">Proyectos</a></li>
                <li><a href="{{URL::to('/legal')}}">Cookies</a></li>
              </ul>
            </nav>

            <div class="dropdown"><span>Idiomas</span>
              <div class="dropdown_content">
                <a href="#" class="idioma_active">Español</a>
                <a href="#">Frances</a>
              </div>
            </div>

          </div>
        </div>



        <div class="pie_column3">

          <div class="pie_column3_title"><h2>NEWSLETTER</h2></div>
          <div class="pie_column3_content">
            <p>Suscríbete para recibir las últimas novedades.</p>
            <div class="newsletter">
              <form action="" method="">
                <input type="text" placeholder="Email" name="">
                <div class="icon_newsletter"><i class="fa fa-envelope-o"></i></div>
                <div class="submit_newsletter"><input type="submit" value="" name=""></div>
              </form>
            </div>
            <div class="follow_us">
              <h2>Síguenos</h2>
              <div><a href="#"><i class="fa fa-instagram"></i></a></div>
              <div><a href="#"><i class="fa fa-pinterest-p"></i></a></div>
              <div><a href="#"><i class="fa fa-facebook"></i></a></div>
              <div><a href="#"><i class="fa fa-twitter"></i></a></div>
              <div><a href="#"><i class="fa fa-google-plus"></i></a></div>
            </div>
          </div>

        </div>

      </div><!-- pie_columns -->

      <div class="copyright">
        <span>&copy; 2017 Paris In Love Studio - Todos los derechos reservados. Diseñado por <a href="http://www.careberos.com">CAREBEROS</a></span>
      </div>

      <div class="desplegar_pie_3elem">
        <span>AYUDA E INFORMACIÓN <i class="fa fa-caret-down"></i></span>
      </div>

    </div>
  </footer>

  <script src="{{ URL::to('js/lib/jquery-2.1.4.min.js') }}" type="text/javascript"></script>
  <script src="{{ URL::to('js/lib/jquery-migrate-1.3.0.min.js') }}" type="text/javascript"></script>
  <script src="{{ URL::to('js/lib/jquery.mobile.custom.events.min.js') }}" type="text/javascript"></script>
  <script src="{{ URL::to('js/cabecera_2elem.min.js') }}" type="text/javascript"></script>
  <script src="{{ URL::to('js/pie_3elem.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::to('js/lib/slick.min.js') }}" type="text/javascript"></script>

  @yield('scripts')

  <form class="" action="/acceptCookies" method="post" id="form_acceptCookies">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  </form>

  <!-- Slick -->
  <script type="text/javascript">
    $(document).ready(function(){
      $('.autoplay').slick({
        slidesToShow: 4,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
        {
          breakpoint: 1080,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 2,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 420,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
      ]
      });

      $('#btn_accept').click(function(){
          $.ajax({
            url: "{{ URL::to('/acceptCookies') }}",
            method: 'POST',
            data: $('#form_acceptCookies').serialize()
          })
      });

    });
  </script>

</body>
</html>
