<h1>Modifier le cadeau</h1>

<form method="POST" action="{{ route('gifts.update', $gift) }}">
    @csrf
    @method('PUT')

    <label for="name">Nom</label><br>
    <input type="text" name="name" id="name" value="{{ old('name', $gift->name) }}"><br>
    @error('name')
    <p>{{ $message }}</p>
    @enderror

    <label for="url">URL</label><br>
    <input type="text" name="url" id="url" value="{{ old('url', $gift->url) }}"><br>
    @error('url')
    <p>{{ $message }}</p>
    @enderror

    <label for="details">Détails</label><br>
    <textarea name="details" id="details">{{ old('details', $gift->details) }}</textarea><br>
    @error('details')
    <p>{{ $message }}</p>
    @enderror

    <label for="price">Prix</label><br>
    <input type="text" name="price" id="price" value="{{ old('price', $gift->price) }}"><br>
    @error('price')
    <p>{{ $message }}</p>
    @enderror

    <button type="submit">Mettre à jour</button>
</form>
