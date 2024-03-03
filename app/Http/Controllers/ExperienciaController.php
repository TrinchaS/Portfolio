<?php

namespace App\Http\Controllers;

use App\Http\Requests\experiencia\ExperienciaRequest;
use App\Models\Experiencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ExperienciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiencias = Experiencia::all();
        return view('experiencia.index',['experiencias'=>$experiencias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('experiencia.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExperienciaRequest $request)
    {
        $nuevo = new Experiencia();
        $nuevo->fill($request->validated());
        $nuevo->save();
        
        return Redirect::action([\App\Http\Controllers\ExperienciaController::class,'index'])->with(['msj'=>'Se creo la experiencia']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Experiencia $experiencia)
    {
        return view('experiencia.show',['experiencia'=>$experiencia]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experiencia $experiencia)
    {
        return view('experiencia.edit',['experiencia'=>$experiencia]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExperienciaRequest $request, Experiencia $experiencia)
    {
        $experiencia->fill($request->validated());
        $experiencia->save();

        return Redirect::action([ExperienciaController::class,'index'])->with(['msj'=>'Se actualizo la experiencia']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experiencia $experiencia)
    {
        $experiencia->delete();
        return Redirect::action([ExperienciaController::class,'index'])->with(['msj'=>'Experiencia eliminada']);
    }
}
