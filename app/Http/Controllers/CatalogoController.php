<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    //
    public function perros(){
        $productos =[
            array('id'=> '101', 'nombre' => 'Termo para agua', 'precio'=> '76.900', 'foto' => 'producto-1.jpg'),
            array('id'=> '102', 'nombre' => 'Chaqueta camuflaje ropa de moda', 'precio'=> '149.900','foto' => 'producto-2.jpg'),
            array('id'=> '103', 'nombre' => 'Casa para perros', 'precio'=> '231.900','foto' => 'producto-3.jpg'),
            array('id'=> '104', 'nombre' => 'Bolso para mascotas', 'precio'=> '39.900','foto' => 'producto-4.jpg'),
            array('id'=> '105', 'nombre' => 'Producto de Aseo', 'precio'=> '19.900','foto' => 'producto-5.jpg'),
            array('id'=> '106', 'nombre' => 'Carnavales del Fuego', 'precio'=> '29.900','foto' => 'producto-6.jpg')
        ];
        $titulo = "Listado de productos para perros";
        return view('catalogo.perros', compact('productos','titulo'));
    }
    public function gatos(){

        $productos =[
            array('id'=> '107', 'nombre' => 'Cepillo de juguete', 'precio'=> '26.900', 'foto' => 'producto-7.jpg'),
            array('id'=> '108', 'nombre' => 'Casa para gato', 'precio'=> '49.900','foto' => 'producto-8.jpg'),
            array('id'=> '109', 'nombre' => 'Juguete para gato', 'precio'=> '81.900','foto' => 'producto-9.jpg'),
            array('id'=> '110', 'nombre' => 'Arbol para gato', 'precio'=> '99.900','foto' => 'producto-10.jpg'),
            array('id'=> '111', 'nombre' => 'Juego caseros', 'precio'=> '9.900','foto' => 'producto-11.jpg'),
            array('id'=> '112', 'nombre' => 'Comida y plato para gato', 'precio'=> '18.900','foto' => 'producto-12.jpg')
        ];
        $titulo = "Listado de productos para gatos";
        return view('catalogo.gatos', compact('productos','titulo'));
    }

    public function detalle($id,$nombre,$precio,$foto){
        return view('catalogo.detalle', array(
            'id' => $id,
            'nombre' => $nombre,
            'precio' => $precio,
            'foto' => $foto
            )
        );
    }
}
