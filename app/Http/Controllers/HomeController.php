<?php

namespace App\Http\Controllers;

use App\Models\Estudio;
use App\Models\Experiencia;
use App\Models\Habilidad;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $estudios = Estudio::all();
        $experiencias = Experiencia::all();
        $habilidades = Habilidad::all();
        $proyectos = Proyecto::all();

        return view('home.index',['estudios'=>$estudios,'experiencias'=>$experiencias,
            'habilidades'=>$habilidades,'proyectos'=>$proyectos]);
    }
}
