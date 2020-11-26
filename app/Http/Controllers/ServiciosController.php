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

        $eventos =[
            array('id'=> '1', 'nombre' => 'Salida a Boca Grande', 'fecha'=> '24-11-2020'),
            array('id'=> '2', 'nombre' => 'Tour temporada de ballenas', 'fecha'=> '31-11-2020'),
            array('id'=> '3', 'nombre' => 'Tres tesores por descubrir', 'fecha'=> '05-11-2020'),
            array('id'=> '4', 'nombre' => 'Carnavales del Fuego', 'fecha'=> '12-11-2020')

        ];
        $titulo = "Listado de Eventos";
        return view('servicios.eventos', compact('eventos','titulo'));

        /* Como estaba anteriormente
        return view('servicios.eventos', array('id' => $id,
                                            'nombre'=> 'Carnavales del fuego',
                                            'fecha' =>'15 Nov. 2023'));
                                            */
    }

    public function detalle($id,$nombre,$fecha){
        return view('servicios.evento_detalle', array(
            'id' => $id,
            'nombre' => $nombre,
            'fecha' => $fecha
            )
        );
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
