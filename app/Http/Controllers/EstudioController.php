<?php

namespace App\Http\Controllers;

use App\Http\Requests\estudio\EstudioRequest;
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
    public function store(EstudioRequest $request)
    {
        $nuevo = new Estudio();
        $nuevo->fill($request->validated());
        $nuevo->save();
        
        return Redirect::action([\App\Http\Controllers\EstudioController::class,'index'])->with(['msj'=>'Se creo el estudio']);
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
    public function update(EstudioRequest $request, Estudio $estudio)
    {
        $estudio->fill($request->validated());
        $estudio->save();

        return Redirect::action([EstudioController::class,'index'])->with(['msj'=>'Se actualizo el estudio']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estudio $estudio)
    {
        $estudio->delete();
        return Redirect::action([EstudioController::class,'index'])->with(['msj'=>'Estudio eliminado']);

    }
}
