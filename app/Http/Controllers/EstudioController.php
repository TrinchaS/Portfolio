<?php

namespace App\Http\Controllers;

use App\Models\Estudio;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevo = new Estudio();
        
        $nuevo->titulo = 'Programacion';
        $nuevo->instituto = 'Insti Programin';
        $nuevo->certificado = 'http://aaaaaaaaa.com';
        $nuevo->fecha_inicio = '2024-01-03';
        $nuevo->fecha_finalizacion = '2024-02-03';
        $nuevo->descripcion = 'Hago de cuenta que programo';

        $nuevo->save();        
    }

    /**
     * Display the specified resource.
     */
    public function show(Estudio $id)
    {
        return view('estudio.show',['estudio'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
