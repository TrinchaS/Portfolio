@extends('components.public.index')
@section('titulo', 'Principal')
@section('main')

    <div class="flex">
        <div class="border-2 rounded-lg m-2 p-4">
            <div class="bg-sky-500 ps-2">Menu</div>
            <a href="{{ action([\App\Http\Controllers\EstudioController::class, 'index']) }}">estudios</a>
            <br>
            <a href="http://">experiencia</a>
            <br>
            <a href="http://">habilidades</a>
            <br>
            <a href="http://">proyectos</a>
        </div>

        <div>
            todo el contenido al abrir y cada contenido cuando se selecciona en el menu.
            <br><br>
            
        </div>

    @endsection
