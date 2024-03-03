<?php

namespace App\Http\Controllers;

use App\Http\Requests\proyecto\ProyectoRequest;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('proyecto.index',['proyectos'=>$proyectos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proyecto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProyectoRequest $request)
    {
        $nuevo = new Proyecto();
        $nuevo->fill($request->validated());
        $nuevo->save();
        
        return Redirect::action([\App\Http\Controllers\ProyectoController::class,'index'])->with(['msj'=>'Se creo el proyecto']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyecto $proyecto)
    {
        return view('proyecto.show',['proyecto'=>$proyecto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyecto $proyecto)
    {
        return view('proyecto.edit',['proyecto'=>$proyecto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProyectoRequest $request, Proyecto $proyecto)
    {
        $proyecto->fill($request->validated());
        $proyecto->save();

        return Redirect::action([ProyectoController::class,'index'])->with(['msj'=>'Se actualizo el proyecto']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        return Redirect::action([ProyectoController::class,'index'])->with(['msj'=>'Proyecto eliminado']);
    }
}
