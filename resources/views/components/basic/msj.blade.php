@if (Session::has('msj'))
    <div class="bg-green-500">
        <span>{{Session::get('msj')}}</span>
    </div>
@endif
