<h1>Liste des cadeaux</h1>

<a href="{{ route('gifts.create') }}">Ajouter un cadeau</a>

<ul>
    @foreach ($gifts as $gift)
    <li>
        <strong>{{ $gift->name }}</strong> - {{ $gift->price }} €
        <a href="{{ route('gifts.show', $gift) }}">Voir</a>
        <a href="{{ route('gifts.edit', $gift) }}">Modifier</a>


        <form action="{{ route('gifts.destroy', $gift) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">Supprimer</button>
        </form>
    </li>
    @endforeach
</ul>
