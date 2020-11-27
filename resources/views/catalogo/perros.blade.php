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
               @if( $c['id'] == 101 )
               <img src="{{url( 'img/productos/producto-1.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{ $c['nombre']}}</h4>
                  <p>{{ $c['precio']}}</p>
                  <div class="portfolio-links">
                    <a href="{{url('img/productos/producto-1.jpg')}}" data-gall="portfolioGallery" class="venobox"><i class="bx bx-plus"></i>Imagen</a> |@endif
                    @if( $c['id'] == 102 )
               <img src="{{url( 'img/productos/producto-2.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{ $c['nombre']}}</h4>
                  <p>{{ $c['precio']}}</p>
                  <div class="portfolio-links">
                    <a href="{{url('img/productos/producto-2.jpg')}}" data-gall="portfolioGallery" class="venobox"><i class="bx bx-plus"></i>Imagen</a> |@endif
                    @if( $c['id'] == 103 )
               <img src="{{url( 'img/productos/producto-3.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{ $c['nombre']}}</h4>
                  <p>{{ $c['precio']}}</p>
                  <div class="portfolio-links">
                    <a href="{{url('img/productos/producto-3.jpg')}}" data-gall="portfolioGallery" class="venobox"><i class="bx bx-plus"></i>Imagen</a> |@endif
                    @if( $c['id'] == 104 )
               <img src="{{url( 'img/productos/producto-4.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{ $c['nombre']}}</h4>
                  <p>{{ $c['precio']}}</p>
                  <div class="portfolio-links">
                    <a href="{{url('img/productos/producto-4.jpg')}}" data-gall="portfolioGallery" class="venobox"><i class="bx bx-plus"></i>Imagen</a> |@endif
                    @if( $c['id'] == 105 )
               <img src="{{url( 'img/productos/producto-5.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{ $c['nombre']}}</h4>
                  <p>{{ $c['precio']}}</p>
                  <div class="portfolio-links">
                    <a href="{{url('img/productos/producto-5.jpg')}}" data-gall="portfolioGallery" class="venobox"><i class="bx bx-plus"></i>Imagen</a> |@endif
                    @if( $c['id'] == 106 )
               <img src="{{url( 'img/productos/producto-6.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{ $c['nombre']}}</h4>
                  <p>{{ $c['precio']}}</p>
                  <div class="portfolio-links">
                    <a href="{{url('img/productos/producto-6.jpg')}}" data-gall="portfolioGallery" class="venobox"><i class="bx bx-plus"></i>Imagen</a> |@endif
                    <a href='{{ url("catalogo/detalle/$c[id]/$c[nombre]/$c[precio]/$c[foto]") }}'> 
                    Comprar </a>
                  </div>
                </div>
                
              </div>
            </div>

        @endforeach
        </div>


    </div>
  </section>
@stop