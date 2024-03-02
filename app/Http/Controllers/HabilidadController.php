<?php

namespace App\Http\Controllers;

use App\Http\Requests\habilidad\HabilidadRequest;
use App\Models\Habilidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HabilidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $habilidades = Habilidad::all();
        return view('habilidad.index',['habilidades'=>$habilidades]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('habilidad.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HabilidadRequest $request)
    {
        $nuevo = new Habilidad();
        $nuevo->fill($request->validated());
        $nuevo->save();
        
        return Redirect::action([\App\Http\Controllers\HabilidadController::class,'index'])->with(['msj'=>'Se creo la habilidad']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Habilidad $habilidade)
    {
        return view('habilidad.show',['habilidad'=>$habilidade]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Habilidad $habilidade)
    {
        return view('habilidad.edit',['habilidad'=>$habilidade]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HabilidadRequest $request, Habilidad $habilidade)
    {
        $habilidade->fill($request->validated());
        $habilidade->save();

        return Redirect::action([HabilidadController::class,'index'])->with(['msj'=>'Se actualizo la habilidad']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Habilidad $habilidade)
    {
        $habilidade->delete();
        return Redirect::action([HabilidadController::class,'index'])->with(['msj'=>'Habilidad eliminada']);
    }
}
