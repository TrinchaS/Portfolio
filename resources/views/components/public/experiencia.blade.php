<div>
    EXPERIENCIAS:
    <br><br>
    @foreach ($experiencias as $experiencia)
        Empresa: {{ $experiencia->empresa }}
        <br>
        Puesto: {{ $experiencia->puesto }}
        <br>
        @php
            $fechaInicio = strtotime($experiencia->fecha_ingreso);
            $fechaFin = strtotime($experiencia->fecha_egreso);
        @endphp
        Fecha: {{ date('d/m/Y',$fechaInicio) }}  -  {{ date('d/m/Y',$fechaFin) }}
        <br>
        Descripcion: {{ $experiencia->descripcion }}
        <br><br>
    @endforeach
    <br>
</div>
