<?php

namespace App\Http\Controllers;

use App\Models\Estudio;
use App\Models\Experiencia;
use App\Models\Habilidad;
use App\Models\Persona;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $persona = Persona::all();
        $estudios = Estudio::all();
        $experiencias = Experiencia::all();
        $habilidades = Habilidad::all();
        $proyectos = Proyecto::all();

        return view('persona.index',['persona'=>$persona,'estudios'=>$estudios,'experiencias'=>$experiencias,
            'habilidades'=>$habilidades,'proyectos'=>$proyectos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Persona $persona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {
        //
    }
}
