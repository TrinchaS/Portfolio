<div class="border-2 rounded-lg m-2 p-4">
    <div class="bg-sky-500 ps-2">Menu</div>
    <a href="{{ action([\App\Http\Controllers\EstudioController::class, 'index']) }}">estudios</a>
    <br>
    <a href="{{ action([\App\Http\Controllers\ExperienciaController::class, 'index']) }}">experiencias</a>
    <br>
    <a href="{{ action([\App\Http\Controllers\HabilidadController::class, 'index']) }}">habilidades</a>
    <br>
    <a href="{{ action([\App\Http\Controllers\ProyectoController::class, 'index']) }}">proyectos</a>
</div>