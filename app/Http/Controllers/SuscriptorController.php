<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SuscriptorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $suscriptores = User::paginate();
        return view('backend.suscriptores.index', compact('suscriptores'));
    }

    public function create(){
        return view('backend.suscriptores.create');
    }

    public function store(Request $request){
        // Validaciones
        $this->validate($request, [
            'nombres' => 'required|max:30',
            'apellidos' => 'required|max:30',
            'genero' => 'required',
            'name' => 'required|max:30|exists:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'direccion' => 'required',
            'telefono'  =>  'required',
            'nacimiento' => 'date',
            'altura'    => 'numeric'
        ]);

        // Guardar datos
        $data = $request->all();

        $suscriptor = new User([
            'first_name' => $data['nombres'],
            'last_name' => $data['apellidos'],
            'gender' => $data['genero'],
            'name' => $data['usuario'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'address' =>  $data['direccion'],
            'phone' =>  $data['telefono'],
            'birthdate' => $data['nacimiento'],
            'bloodtype' => $data['sangre'],
            'height'    =>  $data['altura'],
            'health_service' => $data['salud'],
            'id_rol'  =>  '4',
            'estado'  =>  'Activo',
        ]);
        dd($suscriptor);
        $suscriptor->save();
        return redirect()->route('suscriptores.index');
    }


}
