<?php

namespace App\Http\Controllers\Personal;

use App\Personal\Personal;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    /**
     * Inicia las rutas resource, muestra información del modelo en una vista con paginación.
     *
     * @return void
     */
    public function index(){
        $personal = Personal::orderBy('id')->paginate(4);
        return view('personal.index', compact('personal')) ;
    }
}
