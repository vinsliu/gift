@extends('layouts.app')

@section('title', 'Cadeau')

@section('content')
<div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg p-6 mt-8">
    <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $gift->name }}</h1>

    @if($gift->url)
    <p class="mb-2">
        <span class="font-semibold">Lien :</span>
        <a href="{{ $gift->url }}" target="_blank" class="underline hover:text-blue-800 transition-colors duration-200">
            {{ $gift->url }}
        </a>
    </p>
    @endif

    @if($gift->details)
    <p class="mb-2">
        <span class="font-semibold">Détails :</span>
        {{ $gift->details }}
    </p>
    @endif

    <p class="mb-6">
        <span class="font-semibold">Prix :</span> {{ $gift->price }} €
    </p>

    <a href="{{ route('gifts.index') }}"
        class="inline-block bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition-colors duration-200 shadow">
        Retour
    </a>
</div>
@endsection
