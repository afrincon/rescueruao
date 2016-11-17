<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehiculo;
use App\UbicacionesVehiculos;

class UbicacionVehiculoController extends Controller
{
    public function guardarUbicacion(Request $request){
        $data = $request->all();
        $vehiculo = Vehiculo::findOrFail($data['id']);

        $ubicacion = new UbicacionesVehiculos([
            'id_vehiculo' => $vehiculo->id,
            'latitud' => $data['lat'],
            'longitud' => $data['lng']
        ]);

        $ubicacion->save();
        return response('Almacenado', 200);
    }
}
