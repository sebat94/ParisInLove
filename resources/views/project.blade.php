 @extends('master')

 @section('styles')
  <link rel="stylesheet" href="{{ URL::to('css/contenido_proyectos.css') }}">
 @stop

 @section('body')
  <div class="contenido_proyectos">
   <div class="bloque_contenedor clearfix">

     <div class="title_proyecto"><h1>{{ $p->title }}</h1></div>
     <div class="txt_decoration"><span></span><span></span></div>

     <div class="img_proyecto"><img src="{{ URL::to('img/parisinlove', $p->image) }}" alt=""></div>
     @foreach($images as $i)
        <div class="img_proyecto"><img src="{{ URL::to('img/parisinlove', $i->url) }}" alt=""></div>
     @endforeach


     @if(isset($info))
       <div class="info_proyecto">
         <div class="title_info_proyecto"><h2>{{ $info->subtitle }}</h2></div>
         <div class="txt_decoration"><span></span><span></span></div>
         <p>{{ $info->descr }}</p>
       </div>
    @endif

   </div>
  </div><!-- contenido_proyectos -->
 @stop

 @section('scripts')
    <script type="text/javascript">
     $(document).ready(function(){
       $('#m_item').removeClass('menu_active');
       $('#m_projects').addClass('menu_active');
     });
    </script>
 @stop
