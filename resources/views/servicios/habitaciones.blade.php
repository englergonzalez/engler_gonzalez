@extends('master')
@section('content')
    Habitaciones tipo Estándar,
    Superior, Ejecutiva, Suite
@stop

@section('inf')
<div class="container">
    <br>
    <h1>{{$titulo}}</h1>
    <ul>
        @foreach($servicios as $c)
            <li> {{ $c }} </li>
        @endforeach
    </ul>
    <br>
</div>
@stop