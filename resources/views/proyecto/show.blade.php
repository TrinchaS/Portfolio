@extends('components.public.index')
@section('titulo', 'Proyecto')
@section('main')

    <br><br>
    Nombre: {{ $proyecto->nombre }}
    <br>
    Link: {{ $proyecto->link }}
    <br>
    Descripcion: {{ $proyecto->descripcion }}
    <br>
    <br>
    <div class="flex ms-2">
        <div class=" me-2 border-double border-4 border-sky-500">
            <a href="{{ action([\App\Http\Controllers\ProyectoController::class, 'edit'], $proyecto) }}">editar</a>
        </div>

        <form action="{{ action([\App\Http\Controllers\ProyectoController::class, 'destroy'], $proyecto) }}" method="post">
            @csrf
            @method('delete')
            <button class=" me-2 border-double border-4 border-sky-500" type="submit">eliminar</button>
        </form>

        <div class="border-double border-4 border-sky-500">
            <a href="{{ action([\App\Http\Controllers\ProyectoController::class, 'index']) }}">volver</a>
        </div>
    </div>

    <br>


@endsection