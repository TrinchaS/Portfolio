@extends('components.public.index')
@section('titulo', 'Login')
@section('main')

    <form method="POST" action="{{action([\App\Http\Controllers\AdminController::class,'loguear'])}}">
        @csrf
        @method('put')
        <br>
        <input type="text" placeholder="nombre" name="name">
        <br>
        <input type="email" placeholder="email" name="email">
        <br>
        <input type="password" placeholder="contraseña" name="password">
        <br>
        <button type="submit">enviar</button>
    </form>
@endsection
