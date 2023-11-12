@extends('layouts.app')

@section('header')
    Registrate en Devstagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-6 md:items-center">
        <div class="md:w-4/12">
            <img src="{{ asset('img/registrar.jpg') }}" alt="La imagen " class="rounded-md">
        </div>

        <form action="{{ route('register') }}" method="POST" class="md:w-4/12 bg-white p-6 rounded-md shadow" novalidate>
            @csrf
            <div class="mb-5 flex flex-col gap-2">
                <label for="name">
                    Nombre
                </label>
                <input id="name" name="name" class="p-2 rounded-md @error('name') border border-red-500 @enderror"
                    placeholder="Tu Nombre" type="text" value={{ old('name') }}>
                @error('name')
                    <p class="bg-red-500 text-white text-center p-2 rounded-md">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5 flex flex-col gap-2">
                <label for="username">
                    Username
                </label>
                <input id="username" name="username"
                    class="p-2 rounded-md @error('username') border border-red-500 @enderror"
                    placeholder="Tu Nombre de Usuario" type="text" value={{ old('username') }}>
                @error('username')
                    <p class="bg-red-500 text-white text-center p-2 rounded-md">{{ $message }}</p>
                @enderror
            </div>
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
            <div class="mb-5 flex flex-col gap-2">
                <label for="password_confirmation">
                    Repetir Password
                </label>
                <input id="password_confirmation" name="password_confirmation" class="p-2 rounded-md"
                    placeholder="Repite tu Contraseña" value="" type="password">
            </div>
            <input type="submit" value="Registrarse"
                class="bg-blue-500 cursor-pointer p-2 rounded-md text-white font-bold hover:bg-blue-600 w-full">
        </form>
    </div>
@endsection
