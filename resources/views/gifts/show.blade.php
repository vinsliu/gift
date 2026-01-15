<h1>{{ $gift->name }}</h1>

@if($gift->price)
<p>Prix : {{ $gift->price }} €</p>
@endif

@if($gift->url)
<p>Lien : <a href="{{ $gift->url }}">{{ $gift->url }}</a></p>
@endif

@if($gift->details)
<p>Détails : {{ $gift->details }}</p>
@endif

<a href="{{ route('gifts.index') }}">Retour</a>
