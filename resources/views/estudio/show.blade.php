@extends('components.public.index')
@section('titulo', 'Estudios')
@section('main')

    <br><br>
    Titulo: {{ $estudio->titulo }}
    <br>
    Instituto: {{ $estudio->instituto }}
    <br>
    Certificado: {{ $estudio->certificado }}
    <br>
    Inicio: {{ $estudio->fecha_inicio }}
    <br>
    Finalizo: {{ $estudio->fecha_finalizacion }}
    <br>
    Descripcion: {{ $estudio->descripcion }}
    <br>
    <br>
    <div class="flex ms-2">
        <div class=" me-2 border-double border-4 border-sky-500">
            <a href="{{action([\App\Http\Controllers\EstudioController::class,'edit'],$estudio)}}">editar</a>
        </div>
        <div class="border-double border-4 border-sky-500">
            <a href="{{action([\App\Http\Controllers\EstudioController::class,'index'])}}">volver</a>
        </div>
    </div>
  
    <br>
    

@endsection
