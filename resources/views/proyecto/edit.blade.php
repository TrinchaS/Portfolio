@extends('components.public.index')
@section('titulo', 'Editando Proyecto')
@section('main')

    <br><br>

    <form  method="post" action="{{action([\App\Http\Controllers\ProyectoController::class,'update'],$proyecto)}}">
        @csrf
        @method('put') 

        @if (Session::has('errors'))
            <div class="bg-red-400">
                @foreach ($errors->all() as $er)
                    <div>{{$er}}</div>
                @endforeach
            </div>
        @endif

        <label>Nombre</label> <input type="text" name="nombre" value="{{$proyecto->nombre}}"> <br>
        <label>Link</label> <input type="text" name="link" value="{{$proyecto->link}}"> <br>
        <label>Descripcion</label> <input type="text" name="descripcion" value="{{$proyecto->descripcion}}"> <br>
        <br>
        
        <div class="flex ms-2">
            <div class=" me-2 border-double border-4 border-sky-500">
                <button type="submit">editar</button>        
            </div>
            <div class="border-double border-4 border-sky-500">
                <a href="{{action([\App\Http\Controllers\ProyectoController::class,'index'])}}">volver</a>
            </div>
        </div>
    </form>
    
@endsection