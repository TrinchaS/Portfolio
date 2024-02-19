@extends('components.base')
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
    <a href="{{action([\App\Http\Controllers\EstudioController::class,'index'])}}">volver</a>
    <br>
    

@endsection
