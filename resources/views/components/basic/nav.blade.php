<nav class="h-20 flex justify-between navColor">
    @include('components.basic.logoMiNombre')
    
    @if (Auth::check())
        @include('components.basic.BotonLogout')
    @else
        @include('components.basic.BotonLogin')
    @endif    
</nav>
