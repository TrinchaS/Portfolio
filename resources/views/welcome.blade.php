@extends('components.base')
@section('titulo','Principal')
@section('main')
    <h1 class="text-3xl font-bold underline">
        Home estudio
    </h1>
    <br><br>
    <a href="{{action([\App\Http\Controllers\EstudioController::class,'index'])}}">ir a estudios</a>
@endsection
