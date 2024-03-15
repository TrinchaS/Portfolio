@extends('components.admin.index')
@section('titulo', 'Estudios')
@section('main')

    <br>
    Crear Estudio
    <br>

    <form method="post" action="{{ action([\App\Http\Controllers\EstudioController::class, 'store']) }}">
        @csrf

        @if (Session::has('errors'))
            <div class="bg-red-400">
                @foreach ($errors->all() as $er)
                    <div>{{ $er }}</div>
                @endforeach
            </div>
        @endif
        
        <label>Titulo</label> <input type="text" name="titulo"> <br>
        <label>Instituto</label> <input type="text" name="instituto"> <br>
        <label>Certificado</label> <input type="text" name="certificado"> <br>
        <label>Inicio</label> <input type="date" name="fecha_inicio"> <br>
        <label>Finalizacion</label> <input type="date" name="fecha_finalizacion"> <br>
        <label>Descripcion</label> <input type="text" name="descripcion"> <br>
        <br>
        <div class="flex ms-2">
            <div class="border-double border-4 border-sky-500">
                <button type="submit">Crear</button>
            </div>
            <div class="mx-2 border-double border-4 border-sky-500">
                <button type="reset">Borrar</button>
            </div>
            <div class="border-double border-4 border-sky-500">
                <a href="{{ action([\App\Http\Controllers\EstudioController::class, 'index']) }}">volver</a>
            </div>
        </div>
    </form>

@endsection
