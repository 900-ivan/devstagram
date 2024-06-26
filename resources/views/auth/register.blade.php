@extends('layouts.app')

@section('titulo')
    Registrate en Devstagram
@endsection

@section('contenido')
   <div class="md:flex md:justify-center md:gap-10 md:items-center ">
        <div class="md:w-6/12 p-5">
               <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen Registro Usuarios">
        </div>

        <div class=" md:w-4/12 bg-white p-6 rounded-lg text-gray-500 shadow-xl">

            <form action="{{route('register')}}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold" >
                            Nombre
                    </label>
                    
                    <input type="text"
                    id="name"
                    name="name"
                    placeholder="Tu nombre"
                    class="border p-3 w-full rounded-lg 
                    @error('name') border-red-500  @enderror"
                    value="{{old('name')}}"
                    >

                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror

                </div>

                <div class="mb-5">
                    <label for="Username" class="mb-2 block uppercase text-gray-500 font-bold" id="name">
                            Username
                    </label>
                    
                    <input type="text"
                    id="Username"
                    name="username"
                    placeholder="Tu nombre de usuario"
                    class="border p-3 w-full rounded-lg"
                    @error('username') border-red-500  @enderror"
                    value="{{old('username')}}"
                    >

                    @error('username')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
                </div>

                <div class="mb-5">
                    <label for="Email" class="mb-2 block uppercase text-gray-500 font-bold" id="name">
                        Email
                    </label>
                    
                    <input type="email"
                    id="Email"
                    name="email"
                    placeholder="Tu Email de registro"
                    class="border p-3 w-full rounded-lg"
                    @error('email') border-red-500  @enderror"
                    >

                    @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
                </div>

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold" id="name">
                        password
                    </label>
                    
                    <input type="password"
                    id="password"
                    name="password"
                    placeholder="Password de Registro"
                    class="border p-3 w-full rounded-lg"
                    @error('password') border-red-500  @enderror"
                    value="{{old('password')}}"
                    >

                    @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                  @enderror
                </div>

                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold" id="name">
                       Repetir password
                    </label>
                    
                    <input type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    placeholder="Repite tu password"
                    class="border p-3 w-full rounded-lg"
                    >
                </div>

                <input type="submit"
                value="crear cuenta"
                class="bg-sky-600 hover:bg-sky-700 transition-colors
                cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                >



            </form>

        </div>

   </div>
@endsection

