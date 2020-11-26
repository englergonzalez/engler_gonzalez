@extends('master')
@section('content')
    Reservas
@stop

@section('inf')
<main id="main">
    <section id="registrar" class="contact">
      <div class="container">

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-8">

            <form  action="{{ url('reservas') }}" method="post" role="form" class="php-email-form">
            @csrf
              <div class="form-row">
                <div class="col-md-12 form-group">

                  <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" 
                  data-rule="minlen:4" data-msg="Por favor, introduzca al menos 4 caracteres" />
                  <div class="validate"></div>

                </div>
                <div class="col-md-12 form-group">

                  <input type="email" class="form-control" name="email" id="email" placeholder="Correo eletrocnico" 
                  data-rule="email" data-msg="Por favor, introduzca un correo electrónico válido" />
                  <div class="validate"></div>

                </div>
                <div class="col-md-12 form-group">

                  <input type="phone" class="form-control" name="cellular" id="cellular" placeholder="Celular" 
                  data-rule="minlen:10" data-msg="Por favor, introduzca al menos 10 caracteres">
                  <div class="validate"></div>

                </div>
                <div class="col-md-12 form-group">

                  <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Seleccione la fecha" 
                  min="2020-08-09" max="2021-02-31" data-rule="required" data-msg="Por favor, introduzca una fecha">
                  <div class="validate"></div>

                </div>
                <div class="col-md-12 form-group">

                  <input type="time" class="form-control" id="hora" name="hora" placeholder="Seleccione la hora" 
                  min="08:00:00" max="18:00:00" data-rule="required" data-msg="Por favor, introduzca una hora">
                  <div class="validate"></div>

                </div>
              </div>

              <div class="form-group">
                <textarea class="form-control" id="mensaje" name="mensaje" rows="5" data-msg="Por favor, escriba su mensaje" placeholder="Mensaje"></textarea>
                <div class="validate"></div>
              </div>

              <div class="mb-3">
                <div class="loading">Cargando...</div>
                <div class="sent-message">¡Registro exitoso!</div>
              </div>
              <div class="text-center"><button type="submit">Registrar</button></div>
            </form>
            <div class="error-message"></div>

          </div>
        </div>

      </div>
    </section>
          
    <br><br><br>

</main>
@stop