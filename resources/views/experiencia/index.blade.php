@extends('components.public.index')
@section('titulo', 'Experiencias')
@section('main')

    <h1 class="text-3xl font-bold underline">
        EXPERIENCIAS
    </h1>
    <br>
    @include('components.basic.msj')
    <a href="{{action([\App\Http\Controllers\HomeController::class,'index'])}}">ir al Home</a>
    <br>
    <a href="{{action([\App\Http\Controllers\ExperienciaController::class,'create'])}}">Crear</a>
    <br><br>
    @foreach ($experiencias as $experiencia)
        <br>
        <br>
        Empresa: {{ $experiencia->empresa }}
        <br>
        Descripcion: {{ $experiencia->descripcion }}
        <br>
        <div class="border-2 border-gray-400 flex px-1 py-2">
            <div class="border-2 border-sky-500 p-1 ms-1" >
                <a href="{{action([\App\Http\Controllers\ExperienciaController::class,'show'],$experiencia)}}">inspeccionar</a>
            </div>
            <div class="border-2 border-sky-500 p-1 mx-1">
                <a href="{{ action([\App\Http\Controllers\ExperienciaController::class, 'edit'], $experiencia) }}">editar</a>
            </div>
            <form action="{{action([\App\Http\Controllers\ExperienciaController::class, 'destroy'], $experiencia) }}" method="post">
                @csrf
                @method('delete')
                <button class="border-2 border-sky-500 p-1 me-1" type="submit">eliminar</button>
            </form>
        </div>
        
    @endforeach
    
@endsection
