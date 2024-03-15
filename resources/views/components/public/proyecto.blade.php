<div>
    PROYECTOS:
    <br><br>
    @foreach ($proyectos as $proyecto)
        Nombre: {{ $proyecto->nombre }}
        <br>
        Link: {{ $proyecto->link }}
        <br>
        Descripcion: {{ $proyecto->descripcion }}
        <br><br>
    @endforeach
    <br>
</div>
