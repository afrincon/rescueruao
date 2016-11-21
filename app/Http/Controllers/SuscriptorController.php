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
}
