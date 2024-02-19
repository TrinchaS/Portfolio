@extends('components.base')
@section('titulo', 'Estudios')
@section('main')

    <h1 class="text-3xl font-bold underline">
        Home estudio
    </h1>

    <a href="{{url("/")}}">Home</a>

    @foreach ($estudios as $e)
        <br><br>
        <a href="{{action([\App\Http\Controllers\EstudioController::class,'show'],$e)}}">edita</a>
        <br>
        borrar
        <br>
        Titulo: {{ $e->titulo }}
        <br>
        Instituto: {{ $e->instituto }}
        <br>
        Certificado: {{ $e->certificado }}
        <br>
        Inicio: {{ $e->fecha_inicio }}
        <br>
        Finalizo: {{ $e->fecha_finalizacion }}
        <br>
        Descripcion: {{ $e->descripcion }}
        <br>
    @endforeach
    
@endsection
