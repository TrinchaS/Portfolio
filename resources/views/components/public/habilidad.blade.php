<div>
    HABILIDADES:
    <br><br>
    @foreach ($habilidades as $habilidad)
        Habilidad: {{ $habilidad->nombre }}
        <br>
        Nivel: {{ $habilidad->porcentaje }}
        <br>
        Certificado: {{ $habilidad->certificado }}
        <br>
        Descripcion: {{ $habilidad->descripcion }}
        <br><br>
    @endforeach
    <br>
</div>
