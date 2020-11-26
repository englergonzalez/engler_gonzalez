@extends('master')
@section('content')
    {{$nombre}}
    <h2>Detalles del evento</h2>
@stop

@section('inf')
<div class="container">
    <br>
    <h1>Más información</h1>
    <ul>
        <li> 
         Fecha: {{$fecha}} 
        </li>
    </ul>
    <a href="{{ url('servicios/eventos/¿?') }}"> Regresar </a> <br>
    <a href="{{ url()->previous() }}"> Regresar2 </a> <br>
    <a href="{{ route('listadoEvento',['id' => '¿?'] ) }}"> Regresar3 </a>
    <br>
</div>
@stop