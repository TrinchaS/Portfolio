@extends('components.public.index')
@section('titulo', 'Creando Experiencia')
@section('main')

    <br>
    <br>

    <form method="post" action="{{ action([\App\Http\Controllers\ExperienciaController::class, 'store']) }}">
        @csrf

        @if (Session::has('errors'))
            <div class="bg-red-400">
                @foreach ($errors->all() as $er)
                    <div>{{ $er }}</div>
                @endforeach
            </div>
        @endif

        <label>Puesto</label> <input type="text" name="puesto"> <br>
        <label>Empresa</label> <input type="text" name="empresa"> <br>
        <label>Fecha ingreso</label> <input type="date" name="fecha_ingreso"> <br>
        <label>Fecha egreso</label> <input type="date" name="fecha_egreso"> <br>
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
                <a href="{{ action([\App\Http\Controllers\ExperienciaController::class, 'index']) }}">Volver</a>
            </div>
        </div>
    </form>

@endsection

