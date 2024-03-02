@extends('components.public.index')
@section('titulo', 'Editando Habilidad')
@section('main')

    <br><br>

    <form  method="post" action="{{action([\App\Http\Controllers\HabilidadController::class,'update'],$habilidad)}}">
        @csrf
        @method('put')

        @if (Session::has('errors'))
            <div class="bg-red-400">
                @foreach ($errors->all() as $er)
                    <div>{{$er}}</div>
                @endforeach
            </div>
        @endif

        <label>Nombre</label> <input type="text" name="nombre" value="{{$habilidad->nombre}}"> <br>
        <label>Porcentaje</label> <input type="number" name="porcentaje" value="{{$habilidad->porcentaje}}"> <br>
        <label>Certificado</label> <input type="text" name="certificado" value="{{$habilidad->certificado}}"> <br>
        <label>Descripcion</label> <input type="text" name="descripcion" value="{{$habilidad->descripcion}}"> <br>
        <br>
        <div class="flex ms-2">
            <div class=" me-2 border-double border-4 border-sky-500">
                <button type="submit">editar</button>        
            </div>
            <div class="border-double border-4 border-sky-500">
                <a href="{{action([\App\Http\Controllers\HabilidadController::class,'index'])}}">volver</a>
            </div>
        </div>
    </form>
    
@endsection