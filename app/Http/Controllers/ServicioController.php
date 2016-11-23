<?php

namespace App\Http\Controllers;

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

    public function getServiceInformation($id){
        $servicio = Servicio::findOrFail($id);

        $serv = DB::table('servicios_prestados')
            ->where('id_servicio', '=', $id)
            ->orderBy('created_at', 'desc')
            ->limit(1)
            ->get();



        $prestacion = [
            'servicio'  => $servicio->tipo_servicio,
            'suscriptor'    => $serv[0]->id_suscriptor,
            'latitud'    => $serv[0]->latitud_origen,
            'longitud'    => $serv[0]->longitud_origen,

        ];

        return $prestacion;
    }

}