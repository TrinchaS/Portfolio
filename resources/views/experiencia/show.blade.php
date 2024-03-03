@extends('components.public.index')
@section('titulo', 'Experiencia')
@section('main')

    <br><br>
    Puesto: {{ $experiencia->puesto }}
    <br>
    Empresa: {{ $experiencia->empresa }}
    <br>
    Fecha ingreso: {{ $experiencia->fecha_ingreso }}
    <br>
    Fecha egreso: {{ $experiencia->fecha_egreso }}
    <br>
    Descripcion: {{ $experiencia->descripcion }}
    <br>
    <br>
    <div class="flex ms-2">
        <div class=" me-2 border-double border-4 border-sky-500">
            <a href="{{ action([\App\Http\Controllers\ExperienciaController::class, 'edit'], $experiencia) }}">editar</a>
        </div>

        <form action="{{ action([\App\Http\Controllers\ExperienciaController::class, 'destroy'], $experiencia) }}" method="post">
            @csrf
            @method('delete')
            <button class=" me-2 border-double border-4 border-sky-500" type="submit">eliminar</button>
        </form>

        <div class="border-double border-4 border-sky-500">
            <a href="{{ action([\App\Http\Controllers\ExperienciaController::class, 'index']) }}">volver</a>
        </div>
    </div>

    <br>


@endsection