@extends('layouts.app')

@section('titulo')
    Adquiere una cuenta en DevStagram
@endsection

@section('contenido')
    <div class=" md:flex md:justify-center md:gap-10 md:items-center">
        <div class=" md:w-8/12 p-5">
            <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen de registro">
        </div>


        <div class=" md:w-4/12 bg-white rounded-lg shadow-xl p-6">
            <form action="">
                <div class="form-group mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input 
                        id="name"    
                        type="text"
                        name="name"
                        placeholder="Tu nombre"
                        class="border p-3 w-full rounded-lg"
                        >
                </div>
                <div class="form-group mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Username
                    </label>
                    <input 
                        id="username"    
                        type="text"
                        name="username"
                        placeholder="Tu nombre de usuario"
                        class="border p-3 w-full rounded-lg"
                        >
                </div>
                <div class="form-group mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Correo
                    </label>
                    <input 
                        id="email"    
                        type="email"
                        name="email"
                        placeholder="Tu correo electronico"
                        class="border p-3 w-full rounded-lg"
                        >
                </div>
                <div class="form-group mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Contraseña
                    </label>
                    <input 
                        id="password"    
                        type="password"
                        name="password"
                        placeholder="Tu contraseña"
                        class="border p-3 w-full rounded-lg"
                        >
                </div>
                <div class="form-group mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        Repetir contraseña
                    </label>
                    <input 
                        id="password_confirmation"    
                        type="password"
                        name="password_confirmation"
                        placeholder="Repite tu contraseña"
                        class="border p-3 w-full rounded-lg"
                        >
                </div>
                <input 
                    type="submit"
                    value="Crear cuenta"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>

@endsection