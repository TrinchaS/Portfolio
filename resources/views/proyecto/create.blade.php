@extends('components.public.index')
@section('titulo', 'Creando Proyecto')
@section('main')

    <br>
    <br>

    <form method="post" action="{{ action([\App\Http\Controllers\ProyectoController::class, 'store']) }}">
        @csrf

        @if (Session::has('errors'))
            <div class="bg-red-400">
                @foreach ($errors->all() as $er)
                    <div>{{ $er }}</div>
                @endforeach
            </div>
        @endif

        <label>Nombre</label> <input type="text" name="nombre"> <br>
        <label>Link</label> <input type="text" name="link"> <br>
        <label>Descripcion</label> <input type="text" name="descripcion"> <br>
        <br>
        <div class="flex ms-2">
            <div class="border-double border-4 border-sky-500">
                <button type="submit">Crear</button>
            </div>
            <div class="mx-2 border-double border-4 border-sky-500">
                <button type="reset">Resetear</button>
            </div>
            <div class="border-double border-4 border-sky-500">
                <a href="{{ action([\App\Http\Controllers\ProyectoController::class, 'index']) }}">Volver</a>
            </div>
        </div>
    </form>

@endsection

