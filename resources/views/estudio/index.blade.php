@extends('components.admin.index')
@section('titulo', 'Estudios')
@section('main')

    <h1 class="text-3xl font-bold underline">
        Home estudio
    </h1>
    <br>
    @include('components.basic.msj')
    <a href="{{action([\App\Http\Controllers\HomeController::class,'index'])}}">ir al Home</a>
    <br>
    <a href="{{action([\App\Http\Controllers\EstudioController::class,'create'])}}">crear estudio</a>
    <br><br>
    @foreach ($estudios as $estudio)
        <br>
        <br>
        Titulo: {{ $estudio->titulo }}
        <br>
        Certificado: {{ $estudio->certificado }}
        <br>
        Descripcion: {{ $estudio->descripcion }}
        <br>
        <div class="border-2 border-gray-400 flex px-1 py-2">
            <div class="border-2 border-sky-500 p-1 ms-1" >
                <a href="{{action([\App\Http\Controllers\EstudioController::class,'show'],$estudio)}}">inspeccionar</a>
            </div>
            <div class="border-2 border-sky-500 p-1 mx-1">
                <a href="{{ action([\App\Http\Controllers\EstudioController::class, 'edit'], $estudio) }}">editar</a>
            </div>
            <form action="{{action([\App\Http\Controllers\EstudioController::class, 'destroy'], $estudio) }}" method="post">
                @csrf
                @method('delete')
                <button class="border-2 border-sky-500 p-1 me-1" type="submit">eliminar</button>
            </form>
        </div>
        
    @endforeach
    
@endsection
