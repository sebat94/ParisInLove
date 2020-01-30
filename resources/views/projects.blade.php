 @extends('master')

 @section('styles')
  <link rel="stylesheet" href="css/proyectos.css">
 @stop

 @section('body')
    <div class="proyectos">
     <div class="bloque_contenedor clearfix">

       <div class="fila_proyectos">

         @foreach($projects as $key=>$p)
           <div class="proyecto">
             <a href="{{URL::to('projects', $p->id)}}">
               <div class="img_proyecto">
                 <img src="{{ URL::to('img/parisinlove', $p->image) }}" alt="">
               </div>
               <div class="txt_proyecto">
                 <p>{{ $p->title }}</p>
               </div>
             </a>
           </div>
           @if($key % 2 != 0)
              </div> <!-- fila_proyectos -->
              <div class="fila_proyectos">
           @endif
         @endforeach

         @if($key % 2 == 0)
            </div> <!-- fila_proyectos -->
         @endif

     </div><!-- bloque_contenedor1600 -->
   </div><!-- proyectos -->
 @stop

 @section('scripts')
    <script src="js/proyectos.min.js" type="text/javascript"></script>
    <script type="text/javascript">
     $(document).ready(function(){
       $('#m_item').removeClass('menu_active');
       $('#m_projects').addClass('menu_active');
     });
    </script>
 @stop
