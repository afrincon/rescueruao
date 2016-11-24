<?php

namespace App\Http\Controllers;

use App\Servicio;
use Illuminate\Http\Request;
use App\ServiciosPrestados;

class ServiciosPrestadosController extends Controller
{
    public function guardarServicios(Request $request){
            $data = $request->all();

        $servicio = new ServiciosPrestados([
            'id_servicio' => $data['id_servicio'],
            'id_suscriptor' => $data['id_suscriptor'],
            'latitud_origen' => $data['latitud_origen'],
            'longitud_origen' => $data['longitud_origen'],
            'estado' => $data['estado'],
        ]);

        $servicio->save();

        return response('Almacenado', 200);
    }
}
