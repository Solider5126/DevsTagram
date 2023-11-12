<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>DevStagram - @yield('titulo') </title>


</head>

<body class="bg-gray-100">
    <header class="bg-white p-4 shadow">
        <div class="flex container mx-auto items-center justify-between">
            <a href="/" class="font-extrabold text-3xl">DevStagram</a>

            @auth
                <nav class=" font-bold text-gray-500 flex gap-2 items-center">
                    <a href="{{route("posts.create")}}"
                        class="flex items-center gap-2 bg-white border p-2 text-gray-600 rounded-md text-sm uppercase font-bold cursor-pointer">
                        Crear
                    </a>
                    <a href="">Hola: <span class="font-normal capitalize">{{ auth()->user()->username }}</span> </a>

                    <form action="{{ 'logout' }}" method="POST">
                        @csrf
                        <button type="submit" class="font-bold uppercase text-gray-600 text-sm">
                            Cerrar Sesion
                        </button>
                    </form>

                </nav>
            @endauth

            @guest
                <nav class="uppercase font-bold text-gray-500 flex gap-2 items-center">
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Crear Cuenta</a>
                </nav>
            @endguest

        </div>

    </header>
    <main class="container mx-auto mt-10">
        <h2 class="text-center text-3xl mb-10 font-black">
            
            @yield('header')
        </h2>
        @yield('contenido')
    </main>
    <footer class="text-center p-5 font-bold uppercase text-gray-500">
        DevStagram - Todos los derechos reservados {{ now()->year }}
    </footer>
    {{ 1 + 1 }}
</body>

</html>
