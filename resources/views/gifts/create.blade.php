@extends('layouts.app')

@section('title', 'Ajouter un cadeau')

@section('content')
<div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg p-6 mt-8">
    <h1 class="text-2xl font-bold text-gray-900 mb-6">Ajouter un cadeau</h1>

    <form method="POST" action="{{ route('gifts.store') }}" class="space-y-5">
        @csrf

        <div>
            <label for="name" class="block text-gray-700 font-semibold mb-1">Nom</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            @error('name')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="url" class="block text-gray-700 font-semibold mb-1">URL</label>
            <input type="text" name="url" id="url" value="{{ old('url') }}"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            @error('url')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="details" class="block text-gray-700 font-semibold mb-1">Détails</label>
            <textarea name="details" id="details" rows="4"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('details') }}</textarea>
            @error('details')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="price" class="block text-gray-700 font-semibold mb-1">Prix</label>
            <input type="text" name="price" id="price" value="{{ old('price') }}"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            @error('price')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <button type="submit"
                class="w-full bg-blue-500 text-white font-semibold px-4 py-3 rounded-lg hover:bg-blue-600 transition-colors duration-200 shadow">
                Enregistrer
            </button>
        </div>
    </form>
</div>
@endsection
