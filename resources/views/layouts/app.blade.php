<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-300">
<div id="app">
    <!-- TODO: add back partials -->
    <nav class="bg-white w-full px-4 py-4 border-b shadow">
        <span class="text-2xl text-gray-900">{{ config('app.name', 'Laravel') }}</span>
    </nav>

    <main class="">
        @yield('content')
    </main>
</div>
</body>
</html>
