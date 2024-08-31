<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manga</title>
    @vite([
        'resources/css/app.css',
        'resources/css/style.scss',
        'resources/frameworks/flowbite.min.css',
        'resources/frameworks/flowbite.min.js',
        'resources/js/app.js',
    ])
    @stack('style')
</head>
<body class="bg-zeembi-black">
    <nav class="w-full overflow-hidden">
        @include('partials.nav')
    </nav>

    <main class="w-full overflow-hidden">
        @yield('content')
    </main>

    @stack('script')
</body>
</html>