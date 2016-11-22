<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Vehiculo;
use App\UbicacionesVehiculos;

class VehiculosController extends Controller
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

  public function index() {
      $vehiculos = Vehiculo::paginate();
      return view('backend.vehiculos.index', compact('vehiculos'));
  }

  public function create() {
      return view('backend.vehiculos.create');
  }

  public function store(Request $request){
    // Validaciones
    $this->validate($request, [
        'placa' => 'unique:vehiculos|required'
    ]);

    // Guardar datos
    $data = $request->all();
    $vehicle = new Vehiculo($data);
    $vehicle->save();
    return redirect()->route('ambulancias.index');
  }

  public function edit($id){
      $vehiculo = Vehiculo::findOrFail($id);
      return view('backend.vehiculos.edit', compact('vehiculo'));
  }

  public function update(Request $request, $id){
      $vehiculo = Vehiculo::findOrFail($id);
      $vehiculo->fill($request->all());
      $vehiculo->save();
      return redirect()->route('ambulancias.index');

  }

  public static function countVehicles(){
      $vehicles = Vehiculo::where('estado', '=', 'Activo' )->count();

      $cantidad = array();
      $cantidad = [
          'cantidad' => $vehicles
      ];

      return $cantidad;
  }

  public function getVehicleInformation($id){

      $vehiculo = Vehiculo::findOrFail($id);



        $veh = DB::table('ubicaciones_vehiculos')
            ->where('id_vehiculo', '=', $id)
            ->orderBy('created_at', 'desc')
            ->limit(1)
            ->get();

      $data = array();
      $data['id'] = $vehiculo->id;
      $data['placa'] = $vehiculo->placa;
      $data['estado'] = $vehiculo->estado;
      $data['lat'] = $veh[0]->latitud;
      $data['lng'] = $veh[0]->longitud;

      return $data;
  }
}
