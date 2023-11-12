@extends('layouts.app')

@section('header')
    Inicia Sesion en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-6 md:items-center">
        <div class="md:w-4/12">
            <img src="{{ asset('img/login.jpg') }}" alt="Imagen Login " class="rounded-md">
        </div>

        <form method="POST" action="{{ route('login') }}" class="md:w-4/12 bg-white p-6 rounded-md shadow" novalidate>
            @csrf
            @if (session('mensaje'))
                <p class="bg-red-500 text-white text-center p-2 rounded-md">{{ session('mensaje') }}</p>
            @endif
            <div class="mb-5 flex flex-col gap-2">
                <label for="email">
                    Email
                </label>
                <input id="email" name="email" class="p-2 rounded-md @error('email') border border-red-500 @enderror"
                    placeholder="Tu Email" type="email" value={{ old('email') }}>
                @error('email')
                    <p class="bg-red-500 text-white text-center p-2 rounded-md">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5 flex flex-col gap-2">
                <label for="password">
                    Password
                </label>
                <input id="password" name="password"
                    class="p-2 rounded-md @error('password') border border-red-500 @enderror" placeholder="Tu Contraseña"
                    value="" type="password">
                @error('password')
                    <p class="bg-red-500 text-white text-center p-2 rounded-md">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center gap-2 my-3">
                <input id="sesion" name="remember" type="checkbox">
                <label for="sesion" class="text-sm font-bold text-gray-600">Mantener tu sesion abierta</label>

            </div>

            <input type="submit" value="Iniciar Sesion"
                class="bg-blue-500 cursor-pointer p-2 rounded-md text-white font-bold hover:bg-blue-600 w-full">
        </form>


    </div>
@endsection
