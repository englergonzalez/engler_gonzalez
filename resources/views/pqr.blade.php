@extends('master')
@section('content')
  Preguntas, Quejas y Respuestas?
@stop

@section('inf')

<!-- ======= Preguntas ======= -->
<section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>¿Preguntas?</h2>
          <p>A continuación, una lista y respuesta de "preguntas frecuentes". Despues de haber leido nuestro contenido, tienes alguna duda o inquietud, 
            por favor, dejanos saberlo en la section de Contacto, comunicate con nosotros y/o dejanos un mensaje, con gusto te atenderemos y
             daremos respuesta pronto a solucionar cualquier inconveniente, sugerencia, queja o reclamo que tengas.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">¿Cómo hacer una reserva? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>
                  Las respuestas que ofrezcas pueden no ser correctas, o el usuario puede tener preguntas adicionales para ti. 
                  En cualquier caso, es útil tanto para ti como para el usuario que la conversación continúe.
                  
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">¿Cómo cancelar una reserva? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                  Es fácil comenzar a responder preguntas de asistencia. No te preocupes, no tienes que ser un experto en Thunderbird para aportar. 
                  La mayoría de las preguntas ya están respondidas en algún artículo de
                   la base de conocimientos y sólo necesitarás contestar citando un enlace al artículo.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">¿Obtener los precios de nuestros servicios? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                <p>
                  Es fácil comenzar a responder preguntas de asistencia. No te preocupes, no tienes que ser un experto en Thunderbird para aportar. 
                  La mayoría de las preguntas ya están respondidas en algún artículo de la base de conocimientos
                   y sólo necesitarás contestar citando un enlace al artículo.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">¿Cómo adquirir una membresia mensual/anual? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                <p>
                  Es fácil comenzar a responder preguntas de asistencia. No te preocupes, no tienes que ser un experto en
                   Thunderbird para aportar. La mayoría de las preguntas ya están respondidas en 
                  algún artículo de la base de conocimientos y sólo necesitarás contestar citando un enlace al artículo.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">¿Cómo adquirir algunos de nuestros productos? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                <p>
                  En lugar de intentar resolver el problema del usuario por ti mismo cada vez,
                   busca primero para ver si ya se ha preguntado previamente. Intenta usar la base de 
                   artículos de conocimiento antes que nada. Estos artículos han sido revisados para asegurar su calidad y tienen información para todos los sistemas compatibles.
                   Recuerda, no sólo estás ayudando a la persona que ha hecho la pregunta, estás ayudando a todos los que lean esa misma conversación en el futuro.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section>

<!-- ======= Contacto ======= -->
<section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Comunicate, uno de nuestros asesores te atenderá.</h2>
          <p>En menos de 24 Horas nos pondremos en contacto contigo.</p>
        </div>
        
        <div class="row mt-5 justify-content-center info php-email-form" data-aos="fade-up">
          <div class="col-lg-10">

              
            
          <form action="" method="" role="form" class="">
            <div class="form-row">
                <div class="email mt-4 col-6 form-group">
                  <i class="icofont-envelope"></i>
                  <h4>Correo Electronico:</h4>
                  <p>consintiendo@mimascota.com</p>
                </div>

                <div class="phone mt-4 col-6 form-group">
                  <i class="icofont-phone"></i>
                  <h4>Llamadas/WhatsApp:</h4>
                  <p>+57 318 528 8051</p>
                </div>

                <div class="col-md-4 form-group">
                  <input type="text" name="nom" class="form-control" id="nom" placeholder="Nombre" data-rule="minlen:4" data-msg="Por favor, introduzca al menos 4 caracteres" />
                  <div class="validate"></div>
                </div>

                <div class="col-md-4 form-group">
                  <input type="email" class="form-control" name="email" placeholder="Correo eletrocnico" data-rule="email" data-msg="Por favor, introduzca un correo electrónico válido" />
                  <div class="validate"></div>
                </div>

                <div class="col-md-4 form-group">
                    <input type="text" class="form-control" name="asunto" id="asunto" placeholder="Asunto" data-rule="" data-msg="Por favor, introduzca al menos 8 caracteres" />
                    <div class="validate"></div>
                </div>

            </div>

                <div class="form-group">
                    <textarea class="form-control" id="mensaje" name="mensaje" rows="5" data-rule="required" data-msg="Por favor, escriba su mensaje" placeholder="Mensaje"></textarea>
                    <div class="validate"></div>
                </div>
              
              <div class="mb-3">
                <div class="loading">Cargando...</div>
                <div class="error-message"></div>
                <div class="sent-message">Tu mensaje ha sido enviado. ¡Gracias!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
          </form>
        </div>
      </div>
    </section>
@stop