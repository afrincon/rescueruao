<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
      //dd($data);
        return Validator::make($data, [
            'nombres' => 'required|max:30',
            'apellidos' => 'required|max:30',
            'genero' => 'required',
            'usuario' => 'required|max:30|exists:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'direccion' => 'required',
            'telefono'  =>  'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['nombres'],
            'last_name' => $data['apellidos'],
            'gender' => $data['genero'],
            'name' => $data['usuario'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'address' =>  $data['direccion'],
            'phone' =>  $data['telefono'],
            'id_rol'  =>  '4',
            'estado'  =>  'Activo',
        ]);
    }
}
