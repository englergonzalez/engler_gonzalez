<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    //
    public function contacto(){
        return view('contacto');
    }
    public function reservaFormulario(){
        return view('reservas.reservas');
    }
    public function reservaRegistro(){
        return view('reservas.mensaje');
    }
}
