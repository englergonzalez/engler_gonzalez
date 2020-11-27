@extends('master')
@section('content')
    {{$nombre}}
    <h2>¡Compra exitosa!</h2>
@stop

@section('inf')
<div class="container">
    <br>
    <h1>Más información</h1>
    @if( $id == 101 ) <img src="{{url( 'img/productos/producto-1.jpg')}}" class="img-fluid" alt="">@endif
    @if( $id == 102 ) <img src="{{url( 'img/productos/producto-2.jpg')}}" class="img-fluid" alt="">@endif
    @if( $id == 103 ) <img src="{{url( 'img/productos/producto-3.jpg')}}" class="img-fluid" alt="">@endif
    @if( $id == 104 ) <img src="{{url( 'img/productos/producto-4.jpg')}}" class="img-fluid" alt="">@endif
    @if( $id == 105 ) <img src="{{url( 'img/productos/producto-5.jpg')}}" class="img-fluid" alt="">@endif
    @if( $id == 106 ) <img src="{{url( 'img/productos/producto-6.jpg')}}" class="img-fluid" alt="">@endif
    @if( $id == 107 ) <img src="{{url( 'img/productos/producto-7.jpg')}}" class="img-fluid" alt="">@endif
    @if( $id == 108 ) <img src="{{url( 'img/productos/producto-8.jpg')}}" class="img-fluid" alt="">@endif
    @if( $id == 109 ) <img src="{{url( 'img/productos/producto-9.jpg')}}" class="img-fluid" alt="">@endif
    @if( $id == 110 ) <img src="{{url( 'img/productos/producto-10.jpg')}}" class="img-fluid" alt="">@endif
    @if( $id == 111 ) <img src="{{url( 'img/productos/producto-11.jpg')}}" class="img-fluid" alt="">@endif
    @if( $id == 112 ) <img src="{{url( 'img/productos/producto-12.jpg')}}" class="img-fluid" alt="">@endif
    <ul>
        <li> Codigo: {{$id}} </li>
        <li> Nombre: {{$nombre}}  </li>
        <li> Precio: {{$precio}}  </li>
        
    </ul>
    <a href="{{ url()->previous() }}"> Regresar</a> <br>
    <br>
</div>
@stop