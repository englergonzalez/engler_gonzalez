@extends('master')
@section('content')
    Estudiante
@stop

@section('inf')
       <!-- ======= Equipo ======= -->
       <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
        <h2>Est. Ingeniería de Sistemas</h2>
          <p>Estudiantes de Ingeniería de Sistemas, de la Universidad de Nariño, con amplio conocimiento en el area, para ofrecerte calidad en mi trabajo.</p>
        </div>

        <div class="row">

          <div class="  col-md-6" data-aos="fade-up"  data-aos-delay="100">
            <div class="member">
              <img src="{{url('/img/team/engler.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Engler Gonzalez</h4>
                  <span> CEO, Est. Ing. de Sistemas</span>
                </div>
                <div class="social">
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
@stop