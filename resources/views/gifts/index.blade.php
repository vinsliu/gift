@extends('layouts.app')

@section('title', 'Liste des cadeaux')

@section('content')

<ul class="space-y-4">
    @foreach ($gifts as $gift)
    <li class="flex justify-between items-center bg-white shadow p-4 rounded">
        <div>
            <strong class="text-lg font-semibold">{{ $gift->name }}</strong> -
            <span class="text-gray-700">{{ $gift->price }} €</span>
        </div>
        <div class="space-x-2">
            <a href="{{ route('gifts.show', $gift) }}" class="text-blue-500 hover:underline">Voir</a>
            <a href="{{ route('gifts.edit', $gift) }}" class="text-yellow-500 hover:underline">Modifier</a>
            <form action="{{ route('gifts.destroy', $gift) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white font-semibold px-4 py-2 rounded-lg hover:bg-red-700 hover:underline transition-colors duration-200 shadow ">Supprimer</button>
            </form>
        </div>
    </li>
    @endforeach
</ul>

@endsection
