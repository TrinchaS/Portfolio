<div>
    ESTUDIOS:
    <br><br>
    @foreach ($estudios as $estudio)
        Titulo: {{ $estudio->titulo }}
        <br>
        Instituto: {{ $estudio->instituto }}
        <br>
        @php
            $fechaInicio = strtotime($estudio->fecha_inicio);
            $fechaFin = strtotime($estudio->fecha_finalizacion);
        @endphp
        Fecha: {{ date('d/m/Y',$fechaInicio) }}  -  {{ date('d/m/Y',$fechaFin) }}
        <br>
        Certificado: {{ $estudio->certificado }}
        <br>
        Descripcion: {{ $estudio->descripcion }}
        <br><br>
    @endforeach
    <br>
</div>
