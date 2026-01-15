<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">

    @include('partials.header')

    <main class="flex-grow">
        <div class="max-w-6xl mx-auto px-4 py-10">
            @yield('content')
        </div>
    </main>

    @include('partials.footer')

</body>

</html>
