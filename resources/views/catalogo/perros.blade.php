@extends('master')
@section('content')
    Perros
@stop

@section('inf')

 <!-- ======= Productos ======= -->
 <section id="portfolio" class="portfolio section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Ventas/Productos</h2>
        <p> {{$titulo}}.</p>
      </div>

      <div class="row portfolio-container" data-aos="fade-up">
      @foreach($productos as $c)

            <div class="col-lg-4 col-md-6 portfolio-item">
              <div class="portfolio-wrap">
                <img src="{{url('img/productos/$c['foto']')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{ $c['nombre']}}</h4>
                  <p>{{ $c['precio']}}</p>
                  <div class="portfolio-links">
                    <a href="{{url('img/productos/$c[foto]')}}" data-gall="portfolioGallery" class="venobox"><i class="bx bx-plus"></i>Imagen</a> |
                    <a href='{{ url("catalogo/detalle/$c[id]/$c[nombre]/$c[precio]/$c[foto]") }}'> 
                    Ver detalles </a>
                  </div>
                </div>
              </div>
            </div>

        @endforeach
        </div>


    </div>
  </section>
@stop