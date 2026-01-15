<header class="bg-white shadow">
    <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">

        <h1 class="text-xl font-bold text-indigo-600">
            Gifts
        </h1>

        <nav class="space-x-6">
            <a href="{{ route('gifts.index') }}" class="text-gray-700 hover:text-indigo-600 transition">
                Accueil
            </a>
            <a href="{{ route('gifts.create') }}" class="text-gray-700 hover:text-indigo-600 transition">
                Créer
            </a>
        </nav>

    </div>
</header>
