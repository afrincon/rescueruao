<?php

namespace App\Http\Controllers;

use App\ServiciosPrestados;
use App\User;
use Illuminate\Http\Request;
use App\Servicio;
use Illuminate\Support\Facades\DB;

class ServicioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $servicios = Servicio::paginate();
        return view('backend.servicios.index', compact('servicios'));
    }

    public function getActiveServices() {
        $servicio = ServiciosPrestados::where('estado', '=', 'Activo')->get();
        $servicios = [];
        for ($i=0; $i < count($servicio); $i++) {
            array_push($servicios, $servicio[$i]->id_servicio );
        }
        return $servicios;
    }

    public function getServiceInformation($id){
        $servicio = Servicio::findOrFail($id);

        $serv = DB::table('servicios_prestados')
            ->where('id_servicio', '=', $id)
            ->orderBy('created_at', 'desc')
            ->limit(1)
            ->get();



        $usuario = User::where('id', '=', $serv[0]->id_suscriptor)->get();



        $prestacion = [
            'servicio'  => $servicio->tipo_servicio,
            'suscriptor'    => $serv[0]->id_suscriptor,
            'latitud'    => $serv[0]->latitud_origen,
            'longitud'    => $serv[0]->longitud_origen,
            'nombre' =>     $usuario[0]->first_name,
            'apellidos' =>     $usuario[0]->last_name,
            'gender' =>     $usuario[0]->gender,
            'address' =>     $usuario[0]->address,
            'phone' =>     $usuario[0]->phone,
            'health_service' =>     $usuario[0]->health_service,
            'height_user' =>     $usuario[0]->height,
            'bloodtype' =>     $usuario[0]->bloodtype,


        ];
        return $prestacion;
    }

}