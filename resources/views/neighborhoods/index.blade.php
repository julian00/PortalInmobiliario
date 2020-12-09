@extends('layouts.app')

@section('title', "Portal inmobiliario - Lista de Barrios")

@section('content')
    <h1 class="text-5xl">Lista de barrios</h1>
    
    <a class="m-5" href="{{ route('neighborhoods.create') }}">Crear Barrio</a>
    
    <ul class="m-3">
        @foreach ($neighborhoods as $neighborhood)
            <li>
                <a href="{{ route('neighborhoods.show', $neighborhood->id) }}">{{ $neighborhood->neighborhood }}</a>
                <a class="bg-yellow-300" href="{{ route('neighborhoods.edit', $neighborhood) }}" >Editar</a>

                <form action="{{ route('neighborhoods.destroy', $neighborhood) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="bg-red-600">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>

    {{$neighborhoods->links()}}
@endsection
