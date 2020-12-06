@extends('layouts.app')

@section('title', "Portal inmobiliario - Editar Barrios")

@section('content')
<h1 class="text-5xl">Editar barrios</h1>

<!-- HTML solo entiende los metodos GET y POST, para usar el metodo PUT tengo que usar la directiva @ method() -->
<form action="{{ route('neighborhoods.update', $neighborhood) }}" method="POST">
    
    @csrf
    @method('PUT')

    <label class="m-4">
        Nombre: 
        <input class="border-solid border-4 border-light-blue-500 px-2" type="text" name="neighborhood" value="{{old('name', $neighborhood->neighborhood) }}">
    </label>
    <br>
    @error('neighborhood')
        <small class="text-red-500"> {{ $message }} </small>
    @enderror
    <br>
    <button type="submit" class="mt-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Guardar
      </button>
</form>

@endsection