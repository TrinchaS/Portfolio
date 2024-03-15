@extends('components.admin.index')

@section('main')
    <div class="flex">
        <div>
            @include('components.admin.menu')
            <a href="{{action([\App\Http\Controllers\AdminController::class,'creandoUsuario'])}}">Usuarios</a>
        </div>
        <div>
            todos los datos cargados como tabla
        </div>
    </div>
    
@endsection


