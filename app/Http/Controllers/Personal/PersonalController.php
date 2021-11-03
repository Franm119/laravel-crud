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

    /**
     * Muestra una vista que recolecta los datos para actualizar un registro.
     *
     * @param  mixed $id
     * @return void
     */
    public function edit($id){
        $personal = Personal::find($id);
        return view('personal.edit', compact('personal'));
    }

    /**
     * Se actualiza un registro existente y lo modifica, los datos provienen del método edit.
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
    public function update(PersonalRequest $request, $id){
        $personal = Personal::find($id);
        $personal -> names     = $request -> names;
        $personal -> last_name = $request -> last_name;
        $personal -> sex       = $request -> sex;
        $personal -> birthday  = $request -> birthday;
        $personal -> save();
        return redirect()->route('personal.show', $id);
    }

    
    
}
