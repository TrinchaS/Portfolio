<!-- Boton Login-->
<div class="my-auto z-10">
    <input type="checkbox" id="menu" class="peer hidden">
    <label for="menu"
        class="button flex justify-center h-12 w-24 min-w-[110px]  mr-6 cursor-pointer z-20">Login</label>

    <div
        class="confLogin fixed inset-0 translate-x-full peer-checked:translate-x-0  peer-checked:-z-30 transition-transform duration-1000">
        <div
            class="absolute justify-items-center inset-0 top-24 p-12 bg-white border-gray-600 border-2 h-[60%] w-[40%] mx-auto rounded-lg text-center grid gap-6 shadow-lg">

            <span class="text-5xl text-gray-700 font-bold">Login</span>

            <form method="POST" class="grid gap-4 w-[70%]"
                action="{{ action([\App\Http\Controllers\AdminController::class, 'loguear']) }}">
                @csrf
                @method('put')
                <input type="email" placeholder="e-mail" name="email"
                    class="rounded-t-xl text-xl px-4 bg-gray-200 hover:bg-gray-300 border-gray-500 border-2 text-cyan-800 focus:outline-none focus:border-gray-600 focus:ring-gray-600 placeholder-cyan-900">
                
                <input type="password" placeholder="contraseña" name="password"
                    class="rounded-b-xl text-xl px-4 bg-gray-200 hover:bg-gray-300 border-gray-500 border-2 text-cyan-800 focus:outline-none focus:border-gray-600 focus:ring-gray-600 placeholder-cyan-900">
                <button type="submit" class="text-xl bg-cyan-600 rounded-full mt-10 hover:scale-105">
                    Aceptar</button>
            </form>

        </div>
    </div>

</div>