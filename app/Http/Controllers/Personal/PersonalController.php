<?php

namespace App\Http\Controllers\Personal;

use App\Personal\Personal;
use App\Http\Requests\PersonalRequest;
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

    /**
     * Encargado de recolectar los datos, para almacenarlos en un registro nuevo.
     *
     * @return void
     */
    public function create(){
        return view('personal.create');
    }

    /**
     * Se crea un registro en especifico, los datos provienen del método create.
     *
     * @param  mixed $request
     * @return void
     */
    public function store(PersonalRequest $request){
        Personal::create($request->validated());
        return redirect()->route('personal.index');
    }
    
}
