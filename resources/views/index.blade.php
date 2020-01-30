@extends('master')

@section('styles')
  <link rel="stylesheet" href="{{ URL::to('css/slick.css') }}">
  <link rel="stylesheet" href="{{ URL::to('css/slick-theme.css') }}">
  <link rel="stylesheet" href="{{ URL::to('css/slideshow.css') }}">
@stop

@section('body')
<!--<div class="SlideShow"></div>-->

<div class="slide">

  <div class="content_slide"></div>

  <div class="Flecha-SlideShow Flecha-SlideShow-Izq"><div><span></span><span></span></div></div>
  <div class="Flecha-SlideShow Flecha-SlideShow-Der"><div><span></span><span></span></div></div>

  <div id="ProgressBar-SlideShow"><div></div></div>

</div>



<div class="presentacion">
  <div class="bloque_contenedor clearfix">

    <div class="txt_presentacion_main">
      <div class="txt_presentacion">
        <h1>Paris In Love Studio</h1>
        <h2>Lorem ipsum dolor sit amet, consectetur</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis molestias tenetur magni. Cupiditate dignissimos voluptas dolores ipsam, excepturi voluptatem rerum praesentium! Ut id, magnam quasi culpa rem esse ab aliquam, delectus ea molestias labore, inventore assumenda impedit eos explicabo. Atque numquam molestias iste, alias repellat.</p>
        <br>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet ea, perspiciatis nisi odit adipisci autem maiores. Est, labore, reiciendis! Quidem nemo obcaecati asperiores odit officia at quam maxime deserunt unde sequi animi dignissimos, explicabo suscipit quos dolore, natus incidunt itaque.</p>
        <br>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet neque tempora totam nulla facere voluptatem, omnis eligendi soluta, ipsa praesentium fugit! Asperiores sit, tenetur delectus nesciunt optio nam atque, in itaque illum, distinctio earum ea.</p>
      </div>
      <div class="img_presentacion"><img src="img/parisinlove/44.jpg" alt=""></div>
    </div>

  </div>
</div>



<div class="grid_img_productos">
  <div class="bloque_contenedor clearfix">

    <div class="contain_img_productos">
      <div class="img_productos">
        <a href="#">
          <img src="img/parisinlove/25.jpg" alt="">
          <div class="txt_img_productos">
            <div class="desc_txt_img_productos">
              <h2>Locales comerciales y oficinas</h2>
              <cite>Lorem ipsum dolor sit amet</cite>
            </div>
          </div>
        </a>
      </div>

      <div class="img_productos">
        <a href="#">
          <img src="img/parisinlove/11.jpg" alt="">
          <div class="txt_img_productos">
            <div class="desc_txt_img_productos">
              <h2>Viviendas</h2>
              <cite>Lorem ipsum dolor sit amet</cite>
            </div>
          </div>
        </a>
      </div>
    </div>

  </div><!-- bloque_contenedor -->
</div><!-- grid_img_productos -->



<div class="elementos">
  <div class="bloque_contenedor clearfix">

    <div class="title_elementos">
      <h2>Proyectos</h2>
    </div>

    <div class="imagenes_elementos">

        <div class="elemento">
          <a href="#">
            <img src="img/parisinlove/5.jpg" alt="">
            <div class="txt_elemento">
              <div class="txt_ele">
                <span>Lorem Ipsum</span>
              </div>
              <div class="subrayado_txt_ele"></div>
            </div>
          </a>
        </div>

        <div class="elemento">
          <a href="#">
            <img src="img/parisinlove/6.jpg" alt="">
            <div class="txt_elemento">
              <div class="txt_ele">
                <span>Lorem Ipsum</span>
              </div>
              <div class="subrayado_txt_ele"></div>
            </div>
          </a>
        </div>

        <div class="elemento">
          <a href="#">
            <img src="img/parisinlove/7.jpg" alt="">
            <div class="txt_elemento">
              <div class="txt_ele">
                <span>Lorem Ipsum</span>
              </div>
              <div class="subrayado_txt_ele"></div>
            </div>
          </a>
        </div>

        <div class="elemento">
          <a href="#">
            <img src="img/parisinlove/8.jpg" alt="">
            <div class="txt_elemento">
              <div class="txt_ele">
                <span>Lorem Ipsum</span>
              </div>
              <div class="subrayado_txt_ele"></div>
            </div>
          </a>
        </div>

        <div class="elemento">
          <a href="#">
            <img src="img/parisinlove/9.jpg" alt="">
            <div class="txt_elemento">
              <div class="txt_ele">
                <span>Lorem Ipsum</span>
              </div>
              <div class="subrayado_txt_ele"></div>
            </div>
          </a>
        </div>

        <div class="elemento">
          <a href="#">
            <img src="img/parisinlove/10.jpg" alt="">
            <div class="txt_elemento">
              <div class="txt_ele">
                <span>Lorem Ipsum</span>
              </div>
              <div class="subrayado_txt_ele"></div>
            </div>
          </a>
        </div>

    </div>

  </div><!-- bloque_contenedor -->
</div><!-- elementos -->



<div class="separador">
  <div class="img_separador" style="background-image:url(img/parisinlove/26.jpg);"></div>
  <div class="contenido_separador">
    <div class="txt_separador">
      <h2>Paris In Love Studio</h2>
      <!--<div class="recuadros_separador">
        <div><span>Lorem</span><span>000</span></div>
        <div><span>Lorem</span><span>000</span></div>
        <div><span>Lorem</span><span>000</span></div>
        <div><span>Lorem</span><span>000</span></div>
      </div>-->
      <h3>Lorem ipsum dolor sit amet consectetur</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus earum illo consequuntur cumque sequi voluptatem excepturi, vero non tempora iusto exercitationem sint vitae quis praesentium totam, unde ipsa voluptates. Quasi ad inventore magni aut repudiandae, enim earum esse, laboriosam sit maxime dolorem dignissimos totam voluptas odit corporis! Vel, adipisci, debitis.</p>
      <div class="botones_separador">
        <a href="#">Lorem Ipsum</a>
        <a href="#">Lorem Ipsum</a>
      </div>
    </div>
  </div>
</div><!-- separador -->


<div class="slide_imagenes">
  <div class="bloque_contenedor">

    <h2>Lorem Ipsum</h2>

    <div class="slider autoplay">

      <div class="img_slide"><a href="#"><img src="img/parisinlove/5.jpg" alt=""></a></div>
      <div class="img_slide"><a href="#"><img src="img/parisinlove/6.jpg" alt=""></a></div>
      <div class="img_slide"><a href="#"><img src="img/parisinlove/7.jpg" alt=""></a></div>
      <div class="img_slide"><a href="#"><img src="img/parisinlove/8.jpg" alt=""></a></div>
      <div class="img_slide"><a href="#"><img src="img/parisinlove/9.jpg" alt=""></a></div>
      <div class="img_slide"><a href="#"><img src="img/parisinlove/10.jpg" alt=""></a></div>

    </div>

  </div><!-- bloque_contenedor -->
</div><!-- slide_imagenes -->


@stop

@section('scripts')
  <script src="{{ URL::to('js/slideshow.js') }}" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#m_item').removeClass('menu_active');
      $('#m_index').addClass('menu_active');
    });
  </script>
@stop
