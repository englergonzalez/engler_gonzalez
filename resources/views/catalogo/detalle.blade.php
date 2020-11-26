@extends('master')
@section('content')
    {{$nombre}}
    <h2>Detalles del producto</h2>
@stop

@section('inf')
<div class="container">
    <br>
    <h1>Más información</h1>
    <img src="{{ url('img/productos/)}}" class="img-fluid" alt="">
    <ul>
        <li> Codigo: {{$id}} </li>
        <li> Nombre: {{$nombre}}  </li>
        <li> Precio: {{$precio}}  </li>
        
    </ul>
    <a href="{{ url()->previous() }}"> Regresar</a> <br>
    <br>
</div>
@stop