@extends('layouts.app')

@section('title', 'Registrate')

@section('content')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12">
            <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen de registro de usuario">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold ">
                        Nombre
                    </label>
                    <input type="text" id="name" name="name" placeholder="Escribe tu nombre aqui" class="border p-3 w-full rounded-lg @error('name') border-red-500 bg-red-100 @enderror" value="{{ old('name') }}">
                    @error('name')
                    <small class="text-red-700 font-bold">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Usuario
                    </label>
                    <input type="text" id="username" name="username" placeholder="Escribe tu nombre de usuario" class="border p-3 w-full rounded-lg @error('username') border-red-500 bg-red-100 @enderror" value="{{ old('username') }}">
                    @error('username')
                    <small class="text-red-700 font-bold">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input type="email" id="email" name="email" placeholder="devstagram@devstagram.com" class="border p-3 w-full rounded-lg">
                </div>

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Contraseña
                    </label>
                    <input type="password" id="password" name="password" placeholder="********" class="border p-3 w-full rounded-lg">
                </div>

                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        Repite la contraseña
                    </label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="********" class="border p-3 w-full rounded-lg">
                </div>

                <input type="submit" value="Crear cuenta" class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 hover:from-pink-500 hover:to-yellow-500 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>

    </div>
@endsection
