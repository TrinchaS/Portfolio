@extends('components.public.index')
@section('titulo', 'Editando Experiencia')
@section('main')

    <br><br>

    <form  method="post" action="{{action([\App\Http\Controllers\ExperienciaController::class,'update'],$experiencia)}}">
        @csrf
        @method('put')

        @if (Session::has('errors'))
            <div class="bg-red-400">
                @foreach ($errors->all() as $er)
                    <div>{{$er}}</div>
                @endforeach
            </div>
        @endif

        <label>Puesto</label> <input type="text" name="puesto" value="{{$experiencia->puesto}}"> <br>
        <label>Empresa</label> <input type="text" name="empresa" value="{{$experiencia->empresa}}"> <br>
        <label>Fecha ingreso</label> <input type="date" name="fecha_ingreso" value="{{$experiencia->fecha_ingreso}}"> <br>
        <label>Fecha egreso</label> <input type="date" name="fecha_egreso" value="{{$experiencia->fecha_egreso}}"> <br>
        <label>Descripcion</label> <input type="text" name="descripcion" value="{{$experiencia->descripcion}}"> <br>
        <br>
        <div class="flex ms-2">
            <div class=" me-2 border-double border-4 border-sky-500">
                <button type="submit">editar</button>        
            </div>
            <div class="border-double border-4 border-sky-500">
                <a href="{{action([\App\Http\Controllers\ExperienciaController::class,'index'])}}">volver</a>
            </div>
        </div>
    </form>
    
@endsection