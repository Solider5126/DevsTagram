@extends('layouts.app')

@section('header')
    Crea una nueva Publicación
@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('contenido')
    <div class="flex items-center ">
        <div class="w-1/2 px-10">
            <form action="{{ route('imagenes.store') }}" method="POST" enctype="multipart/form-data" id="dropzone"
                class="dropzone border-dashed border-2 w-full h-96 rounded-md flex flex-col justify-center items-center">
                @csrf
            </form>
        </div>
        <div class="w-1/2 p-10 bg-white rounded-md shadow-lg md:mt-0">
            <form action="{{ route('register') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5 flex flex-col gap-2">
                    <label for="titulo" class="mb-2 block uppercase text-gray-500 font-bold">
                        Titulo
                    </label>
                    <input id="titulo" name="titulo"
                        class="p-2 w-full rounded-md @error('name') border border-red-500 @enderror"
                        placeholder="Titulo de la publicación" type="text" value={{ old('titulo') }}>
                    @error('titulo')
                        <p class="bg-red-500 text-white text-center p-2 rounded-md">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5 flex flex-col gap-2">
                    <label for="descripcion" class="mb-2 block uppercase text-gray-500 font-bold">
                        Descripción
                    </label>
                    <textarea id="descripcion" name="descripcion"
                        class="p-2 w-full rounded-md @error('name') border border-red-500 @enderror"
                        placeholder="Descripción de la publicación">{{ old('descripcion') }}</textarea>

                    @error('descripcion')
                        <p class="bg-red-500 text-white text-center p-2 rounded-md">{{ $message }}</p>
                    @enderror
                </div>

                <input type="submit" value="Crear publicación"
                    class="bg-blue-500 cursor-pointer p-2 rounded-md text-white font-bold hover:bg-blue-600 w-full">

            </form>
        </div>
    </div>
@endsection
