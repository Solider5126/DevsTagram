@extends('layouts.app')

@section('header')
    Crea una nueva Publicación
@endsection

@section('contenido')
    <div class="flex items-center ">
        <div class="w-1/2 px-10">
            imagen aqui
        </div>
        <div class="w-1/2 p-10 bg-white rounded-md shadow-lg md:mt-0">
            <form action="{{ route('register') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5 flex flex-col gap-2">
                    <label for="name">
                        Nombre
                    </label>
                    <input id="name" name="name" class="p-2 w-full rounded-md @error('name') border border-red-500 @enderror"
                        placeholder="Tu Nombre" type="text" value={{ old('name') }}>
                    @error('name')
                        <p class="bg-red-500 text-white text-center p-2 rounded-md">{{ $message }}</p>
                    @enderror
                </div>


            </form>
        </div>
    </div>
@endsection
