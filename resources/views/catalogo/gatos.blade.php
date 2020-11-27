@extends('master')
@section('content')
    Gatos
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
               @if( $c['id'] == 107 )
               <img src="{{url( 'img/productos/producto-7.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{ $c['nombre']}}</h4>
                  <p>{{ $c['precio']}}</p>
                  <div class="portfolio-links">
                    <a href="{{url('img/productos/producto-7.jpg')}}" data-gall="portfolioGallery" class="venobox"><i class="bx bx-plus"></i>Imagen</a> |@endif
                    @if( $c['id'] == 108 )
               <img src="{{url( 'img/productos/producto-8.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{ $c['nombre']}}</h4>
                  <p>{{ $c['precio']}}</p>
                  <div class="portfolio-links">
                    <a href="{{url('img/productos/producto-8.jpg')}}" data-gall="portfolioGallery" class="venobox"><i class="bx bx-plus"></i>Imagen</a> |@endif
                    @if( $c['id'] == 109 )
               <img src="{{url( 'img/productos/producto-9.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{ $c['nombre']}}</h4>
                  <p>{{ $c['precio']}}</p>
                  <div class="portfolio-links">
                    <a href="{{url('img/productos/producto-9.jpg')}}" data-gall="portfolioGallery" class="venobox"><i class="bx bx-plus"></i>Imagen</a> |@endif
                    @if( $c['id'] == 110 )
               <img src="{{url( 'img/productos/producto-10.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{ $c['nombre']}}</h4>
                  <p>{{ $c['precio']}}</p>
                  <div class="portfolio-links">
                    <a href="{{url('img/productos/producto-10.jpg')}}" data-gall="portfolioGallery" class="venobox"><i class="bx bx-plus"></i>Imagen</a> |@endif
                    @if( $c['id'] == 110 )
               <img src="{{url( 'img/productos/producto-11.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{ $c['nombre']}}</h4>
                  <p>{{ $c['precio']}}</p>
                  <div class="portfolio-links">
                    <a href="{{url('img/productos/producto-11.jpg')}}" data-gall="portfolioGallery" class="venobox"><i class="bx bx-plus"></i>Imagen</a> |@endif
                    @if( $c['id'] == 112 )
               <img src="{{url( 'img/productos/producto-12.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{ $c['nombre']}}</h4>
                  <p>{{ $c['precio']}}</p>
                  <div class="portfolio-links">
                    <a href="{{url('img/productos/producto-12.jpg')}}" data-gall="portfolioGallery" class="venobox"><i class="bx bx-plus"></i>Imagen</a> |@endif
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