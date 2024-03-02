@extends('components.public.index')
@section('titulo', 'Habilidad')
@section('main')

    <br><br>
    Nombre: {{ $habilidad->nombre }}
    <br>
    Porcentaje: {{ $habilidad->porcentaje }}
    <br>
    Certificado: {{ $habilidad->certificado }}
    <br>
    Descripcion: {{ $habilidad->descripcion }}
    <br>
    <br>
    <div class="flex ms-2">
        <div class=" me-2 border-double border-4 border-sky-500">
            <a href="{{ action([\App\Http\Controllers\HabilidadController::class, 'edit'], $habilidad) }}">editar</a>
        </div>

        <form action="{{ action([\App\Http\Controllers\HabilidadController::class, 'destroy'], $habilidad) }}" method="post">
            @csrf
            @method('delete')
            <button class=" me-2 border-double border-4 border-sky-500" type="submit">eliminar</button>
        </form>

        <div class="border-double border-4 border-sky-500">
            <a href="{{ action([\App\Http\Controllers\HabilidadController::class, 'index']) }}">volver</a>
        </div>
    </div>

    <br>


@endsection