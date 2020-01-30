@extends('master')

@section('styles')
  <link rel="stylesheet" href="css/nosotros.css">
@stop

@section('body')
  <div class="nosotros">
    <div class="bloque_contenedor clearfix">


      <div class="title_nosotros">
        <h1>Lorem ipsum dolor sit amet</h1>
        <h2>Lorem ipsum dolor</h2>
      </div>


      <div class="content_nosotros">
        <div class="txt_content_nosotros">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae sint aliquam vitae alias veritatis incidunt suscipit dolore quia quis ad, nulla totam, deserunt cupiditate voluptatem consequuntur, laudantium eum! Architecto tempora, fuga laudantium aspernatur eum nisi nam alias, nulla consequatur modi.</p>
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum necessitatibus laudantium beatae ea asperiores rem in nam aut quo voluptas non vel, natus esse inventore molestiae animi at modi quibusdam labore iure ab repellat eaque voluptate est, sit. Provident, vero, odio. Unde illo consectetur eaque fugit repellat omnis magnam vel, nostrum quo impedit totam esse officiis dignissimos quam neque! Dolorem.</p>
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dolorum voluptatem suscipit, quam veritatis.</p>
        </div>
        <div class="img_content_nosotros">
          <div><img src="img/personal/fernando.jpg" alt=""></div>
          <div><img src="img/personal/estefania.jpg" alt=""></div>
        </div>
      </div>


      <div class="historia_nosotros thn1">
        <div class="txt_historia_nosotros fl">
          <h2>Lorem Ipsum</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto numquam, laboriosam omnis tenetur quia, esse, aperiam quasi corporis soluta officiis provident nobis quas reiciendis! Alias impedit fugit, temporibus ab.</p>
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui dignissimos, harum! Repudiandae itaque eaque cum, eius ducimus voluptatem aperiam obcaecati blanditiis harum voluptatibus iusto aliquid tenetur ex beatae alias dignissimos, praesentium, reiciendis iure fugiat deleniti ad. Saepe nesciunt illum sapiente dolores, sit earum consectetur at quasi pariatur deleniti ipsa corporis eaque necessitatibus blanditiis iste ea tempore? Voluptatem deserunt, quibusdam pariatur.</p>
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et dolorem modi expedita, aliquid tempore. Dignissimos vero molestiae repellat nihil culpa deserunt enim soluta ullam, consequuntur iste quasi. Quis corporis, est repellat atque magnam fugiat. Dolorem beatae exercitationem, harum placeat libero fugiat. Facere sequi, tempore cumque.</p>
        </div>
        <div class="img_historia_nosotros fl">
          <img src="img/personal/estefania2.jpg" alt="">
        </div>
      </div>


      <div class="historia_nosotros thn2">
        <div class="txt_historia_nosotros fr">
          <h2>Lorem Ipsum</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto numquam, laboriosam omnis tenetur quia, esse, aperiam quasi corporis soluta officiis provident nobis quas reiciendis! Alias impedit fugit, temporibus ab.</p>
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui dignissimos, harum! Repudiandae itaque eaque cum, eius ducimus voluptatem aperiam obcaecati blanditiis harum voluptatibus iusto aliquid tenetur ex beatae alias dignissimos, praesentium, reiciendis iure fugiat deleniti ad. Saepe nesciunt illum sapiente dolores, sit earum consectetur at quasi pariatur deleniti ipsa corporis eaque necessitatibus blanditiis iste ea tempore? Voluptatem deserunt, quibusdam pariatur.</p>
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit deleniti sequi, distinctio corporis dolore corrupti ullam natus maxime nihil dolorem! Quo quia ex dolorem asperiores est consectetur laborum ut! Eaque voluptatibus, qui amet quasi possimus quo saepe cupiditate in pariatur hic, unde atque velit perspiciatis.</p>
        </div>
        <div class="img_historia_nosotros fr">
          <img src="img/personal/fernando2.jpg" alt="">
        </div>
      </div>


      <div class="imagenes_nosotros">

        <div class="txt_imagenes_nosotros_1">
          <h2>Lorem Ipsum</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla expedita, at consequatur facilis odit reprehenderit autem, quo nemo alias officia.</p>
        </div>

        <div class="imagenes_nosotros_1">
          <img src="img/personal/trabajando1.jpg" alt="">
        </div>

        <div class="txt_imagenes_nosotros_2">
          <h2>Lorem Ipsum</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, voluptatum fuga! Amet culpa, accusantium praesentium ipsam cupiditate quaerat illum iste, quos sit recusandae quae repellendus aut Accusantium nemo numquam, omnis consectetur adipisicing elit.</p>
        </div>

        <div class="imagenes_nosotros_2">
          <img src="img/personal/trabajando2.jpg" alt="">
        </div>

      </div>


    </div><!-- bloque_contenedor -->
  </div><!-- nosotros -->
@stop

@section('scripts')
  <script src="js/nosotros.min.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#m_item').removeClass('menu_active');
      $('#m_about').addClass('menu_active');
    });
  </script>
@stop
