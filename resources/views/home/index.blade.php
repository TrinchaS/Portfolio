@extends('components.public.index')
@section('titulo', 'Curriculum')
@section('main')

    @if (Auth::check())
        <a class="bg-red-400 m-2 p-1" href="{{ action([\App\Http\Controllers\AdminController::class, 'index']) }}">ir a la vista ADMIN</a>
    @endif
    
    <div class=" text-center">
        <!-- animacion entre un componente y otro al ir roleando -->
        <div>
            @include('components.public.experiencia')
            <br>
            @include('components.public.estudio')
            <br>
            @include('components.public.habilidad')
            <br>
            @include('components.public.proyecto')
        </div>
    </div>

@endsection
