@extends('components.public.index')
@section('titulo', 'Estudios')
@section('main')

    <h1 class="text-3xl font-bold underline">
        Home estudio
    </h1>
    <br>
    <a href="{{action([\App\Http\Controllers\HomeController::class,'index'])}}">ir al Home</a>
    <br>
    <a href="{{action([\App\Http\Controllers\EstudioController::class,'create'])}}">crear estudio</a>
    <br><br>
    @foreach ($estudios as $e)
        <br>
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
        <div class="border-double border-4 border-sky-500" >
            <a href="{{action([\App\Http\Controllers\EstudioController::class,'show'],$e->id)}}">inspeccionar</a>
        </div>
    @endforeach
    
@endsection
