@extends('layouts.app')

@section('title',"Portal inmobiliario - Contactanos")
    
@section('content')
    <h1>Dejanos un mensaje</h1>

    <form action="{{ route('contactUs.store') }}" method="POST">
        @csrf
        <label>
            Nombre
            <br>
            <input class="border-solid border-4 border-light-blue-500 px-2" type="text" name="name">
        </label>
        <br>

        @error('name')
            <p><strong>{{$message}}</strong></p>            
        @enderror
        
        <label>
            Correo electronico
            <br>
            <input class="border-solid border-4 border-light-blue-500 px-2" type="text" name="email">
        </label>
        <br>

        @error('email')
            <p><strong>{{$message}}</strong></p>            
        @enderror
        
        <label>
            Mensaje
            <br>
            <textarea class="border-solid border-4 border-light-blue-500 px-2" name="message" rows="4"></textarea>
        </label>
        <br>

        @error('message')
            <p><strong>{{$message}}</strong></p>            
        @enderror
        
        <button type="submit" class="mt-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Enviar Mensaje
        </button>
    </form>

    <!-- verifico si existe una variable de session e imprimo el mensaje-->
    @if (session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif
@endsection