<?php

namespace App\Http\Controllers;

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
      return $vehicles;
  }

  public function getVehicleInformation(){
      $ubicacion = UbicacionesVehiculos::all();
      return compact('ubicacion');
  }
}
