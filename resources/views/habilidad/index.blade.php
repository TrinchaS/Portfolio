@extends('components.public.index')
@section('titulo', 'Habilidades')
@section('main')

    <h1 class="text-3xl font-bold underline">
        HABILIDADES
    </h1>
    <br>
    @include('components.basic.msj')
    <a href="{{action([\App\Http\Controllers\HomeController::class,'index'])}}">ir al Home</a>
    <br>
    <a href="{{action([\App\Http\Controllers\HabilidadController::class,'create'])}}">Crear</a>
    <br><br>
    @foreach ($habilidades as $habilidad)
        <br>
        <br>
        Nombre: {{ $habilidad->nombre }}
        <br>
        Descripcion: {{ $habilidad->descripcion }}
        <br>
        <div class="border-2 border-gray-400 flex px-1 py-2">
            <div class="border-2 border-sky-500 p-1 ms-1" >
                <a href="{{action([\App\Http\Controllers\HabilidadController::class,'show'],$habilidad->id)}}">inspeccionar</a>
            </div>
            <div class="border-2 border-sky-500 p-1 mx-1">
                <a href="{{ action([\App\Http\Controllers\HabilidadController::class, 'edit'], $habilidad) }}">editar</a>
            </div>
            <form action="{{action([\App\Http\Controllers\HabilidadController::class, 'destroy'], $habilidad) }}" method="post">
                @csrf
                @method('delete')
                <button class="border-2 border-sky-500 p-1 me-1" type="submit">eliminar</button>
            </form>
        </div>
        
    @endforeach
    
@endsection
