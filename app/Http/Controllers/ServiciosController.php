<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    //
    public function habitaciones(){
        $servicios = [
            'Servicio a la habitación',
            'Llamadas internacionales',
            'Wi-Fi',
            'Mini Bar',
            'Jacuzzi'
        ];
        $titulo = "Servicios de habitaciones";
        //Opcion 1
        return view('servicios.habitaciones', 
        [
            'titulo'=>$titulo,
            'servicios'=>$servicios
        ]);
        /* Opcion 2 
        return view('servicios.habitaciones') 
        ->with('titulo',$titulo),
        ->with('servicios',$servicios); 
        */
    }
    public function eventos($id){
        return view('servicios.eventos', array('id' => $id,
                                            'nombre'=> 'Carnavales del fuego',
                                            'fecha' =>'15 Nov. 2023'));
    }

    public function Servicios()
    {
        $servicios = [
            'Servicio a la habitación',
            'Desayuno',
            'Almuerzo',
            'Cena',
            'Parqueadero',
            'Llamadas internacionales',
            'Wi-Fi',
            'Mini Bar',
            'Restaurante',
            'Sauna',
            'Piscina',
            'Spa',
            'Jacuzzi',
            'Eventos',
            'Habitaciones'
        ];
        return view('servicios.servicios', ['servicios'=>$servicios]);
    }
}
