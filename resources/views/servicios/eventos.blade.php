@extends('master')
@section('content')
    Eventos {{ $id ?? '' }}
@stop

@section('inf')
<div class="container">
    <br>
    <h1>{{$titulo}}</h1>
    <ul>
        @foreach($eventos as $c)
            <li> {{ $c['nombre'] }} 
            <a href='{{ url("servicios/eventos/detalle/$c[id]/$c[nombre]/$c[fecha]") }}'> 
            Ver detalles </a>
            </li>
        @endforeach
    </ul>
    <br>
</div>
@stop