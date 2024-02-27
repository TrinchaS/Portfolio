<?php

namespace App\Http\Controllers;

use App\Models\Estudio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EstudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiosModel = Estudio::all();
        return view('estudio.index',['estudios'=>$estudiosModel]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estudio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevo = new Estudio();
        
        $nuevo->titulo = $request->input('titulo');
        $nuevo->instituto = $request->input('instituto');
        $nuevo->certificado = $request->input('certificado');
        $nuevo->fecha_inicio = $request->input('fecha_inicio');
        $nuevo->fecha_finalizacion = $request->input('fecha_finalizacion');
        $nuevo->descripcion = $request->input('descripcion');

        $nuevo->save();
        
        return Redirect::action([\App\Http\Controllers\EstudioController::class,'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Estudio $estudio)
    {
        return view('estudio.show',['estudio'=>$estudio]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estudio $estudio)
    {
        return view('estudio.edit',['estudio'=>$estudio]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estudio $estudio)
    {
        $estudio->titulo = $request->input('titulo');
        $estudio->instituto = $request->input('instituto');
        $estudio->certificado = $request->input('certificado');
        $estudio->fecha_inicio = $request->input('fecha_inicio');
        $estudio->fecha_finalizacion = $request->input('fecha_finalizacion');
        $estudio->descripcion = $request->input('descripcion');

        $estudio->save();

        return Redirect::action([EstudioController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
