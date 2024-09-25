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
    <style>
        ::-webkit-scrollbar{
            display: none;
        }
    </style>
    @stack('style')
</head>
<body class="w-screen h-screen bg-zeembi-black">
    <nav class="w-full overflow-hidden">
        @include('partials.nav')
    </nav>

    <main class="w-full h-screen overflow-y-scroll overflow-x-hidden mt-16">
        @yield('content')
    </main>
    <footer class="w-full overflow-hidden">
        @include('partials.footer')
    </footer>

    <script src="{{ asset('cdn/js/jquery.min.js') }}"></script>
    @stack('script')
</body>
</html>