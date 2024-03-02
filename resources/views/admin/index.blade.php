@extends('components.admin.index')

@section('main')
    <a href="{{action([\App\Http\Controllers\AdminController::class,'creandoUsuario'])}}">Usuarios</a>
    <br>
@endsection


