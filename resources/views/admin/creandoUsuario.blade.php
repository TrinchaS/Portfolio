@extends('components.admin.index')
@section('titulo', 'Crea Usuario')
@section('main')

    <form method="POST" action="{{action([\App\Http\Controllers\AdminController::class,'creaUsuario'])}}">
        @csrf
        @method('put')
        <br>
        nombre <br>
        <input type="text" placeholder="nombre" name="name">
        <br>
        email <br>
        <input type="email" placeholder="email" name="email">
        <br>
        password <br>
        <input type="password" placeholder="contraseña" name="password">
        <button type="submit">enviar</button>
    </form>
@endsection
