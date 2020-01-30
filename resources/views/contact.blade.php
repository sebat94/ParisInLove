@extends('master')

@section('styles')
  <link rel="stylesheet" href="css/contacto_2elem.css">
@stop

@section('body')
  <div class="contacto_2elem">
    <div class="tarjeta_contacto clearfix">

      <div class="form_tarjeta_contacto">
        <form action="/contact" method="post" id="contactForm">

          <h1>CONTACTO</h1>
          <div class="text_decoration">
            <span></span>
            <span></span>
          </div>

            <div class="input_form_contacto">
              <label for="contactName">Nombre</label>
              <input type="text" id="contactName" name="contactName">
            </div>

            <div class="input_form_contacto">
              <label for="contactEmail">Email</label>
              <input type="text" id="contactEmail" name="contactEmail">
            </div>

            <div class="input_form_contacto">
              <label for="contactTitle">Asunto</label>
              <input type="text" id="contactTitle" name="contactTitle">
            </div>

            <div class="input_form_contacto">
              <label for="contactDescription">Mensaje</label>
              <textarea type="text" id="contactDescription" name="contactDescription"></textarea>
            </div>

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <input type="submit" value="Enviar">

        </form>
      </div><!-- form_tarjeta_contacto -->

      <div class="img_tarjeta_contacto">
        <div class="info_contacto">

          <!--<div class="direccion_contacto">
            <h2>Dirección</h2>
            <p>Alicante, España</p>

            <h2>Teléfono</h2>
            <p>+34 666 666 666</p>

            <h2>Email</h2>
            <p>info@parisinlovestudio.com</p>
          </div>-->

        </div>
      </div><!-- img_tarjeta_contacto -->

    </div><!-- tarjeta_contacto -->
  </div><!-- contacto_2elem -->

  <div class="trans_contact_send_success">
    <div class="contact_send_success">
      <div class="txt_success"><span>Mensaje enviado</span></div>
      <i class="fa fa-close close_contact_send_success"></i>
    </div>
  </div><!-- trans_contact_send_success -->
@stop

@section('scripts')
  <script src="js/contacto.js" type="text/javascript"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('#m_item').removeClass('menu_active');
      $('#m_contact').addClass('menu_active');

      // Validar campos formulario
      $('#contactForm').submit(function(e){
        e.preventDefault();
        if($('#contactName').val().length == 0){
          //alert("error");
        } else if($('#contactEmail').val().length == 0){
          //alert("error");
        } else if($('#contactTitle').val().length == 0){
          //alert("error");
        } else if($('#contactDescription').val().length == 0){
          //alert("error");
        } else {

          $.ajax({
            url: "{{URL::to('', 'contact')}}",
            method: 'POST',
            data: $('#contactForm').serialize(),
            success: function(result){
              $(".contact_send_success").css('opacity', '1');
              $(".trans_contact_send_success").css('display', 'block');

          }});
        }

      });
    });
  </script>
@stop
