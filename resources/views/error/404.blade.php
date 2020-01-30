@extends('master')

@section('body')
<div class="error404container">


  <div class="error404 clearfix">
    <h1>404</h1>
    <h2>Parece que no se ha encontrado lo que estaba buscando</h2>
    <p>Quizás te pueda interesar alguno de estos proyectos</p>
  </div><!-- error404 -->


  <div class="proyectos404 clearfix">
    <div class="proyecto404"><a href="{{ URL::to('projects/1') }}"><img src="{{ URL::to('img/parisinlove/5.jpg') }}" alt=""></a></div>
    <div class="proyecto404"><a href="{{ URL::to('projects/2') }}"><img src="{{ URL::to('img/parisinlove/6.jpg') }}" alt=""></a></div>
    <div class="proyecto404"><a href="{{ URL::to('projects/3') }}"><img src="{{ URL::to('img/parisinlove/7.jpg') }}" alt=""></a></div>
    <div class="proyecto404"><a href="{{ URL::to('projects/4') }}"><img src="{{ URL::to('img/parisinlove/8.jpg') }}" alt=""></a></div>
  </div>


</div><!-- error404container -->
@stop
