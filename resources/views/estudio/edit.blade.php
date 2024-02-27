@extends('components.public.index')
@section('titulo', 'Estudios')
@section('main')

    <br><br>

    <form  method="post" action="{{action([\App\Http\Controllers\EstudioController::class,'update'],$estudio)}}">
        @csrf
        @method('put')
        <label>Titulo</label> <input type="text" name="titulo" value="{{$estudio->titulo}}"> <br>
        <label>Instituto</label> <input type="text" name="instituto" value="{{$estudio->instituto}}"> <br>
        <label>Certificado</label> <input type="text" name="certificado" value="{{$estudio->certificado}}"> <br>
        <label>Inicio</label> <input type="date" name="fecha_inicio" value="{{$estudio->fecha_inicio}}"> <br>
        <label>Finalizacion</label> <input type="date" name="fecha_finalizacion" value="{{$estudio->fecha_finalizacion}}"> <br>
        <label>Descripcion</label> <input type="text" name="descripcion" value="{{$estudio->descripcion}}"> <br>
        <br>
        <div class="flex ms-2">
            <div class=" me-2 border-double border-4 border-sky-500">
                <button type="submit"> enviar</button>        
            </div>
            <div class="border-double border-4 border-sky-500">
                <a href="{{action([\App\Http\Controllers\EstudioController::class,'show'],$estudio)}}">volver</a>
            </div>
        </div>
    </form>
    
@endsection