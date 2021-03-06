<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="shortcut icon" href="{{asset('logo.png')}}" type="image/png">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="https://cdn.usefathom.com/script.js" data-site="YFEXUYWV" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            @if (! request()->routeIs('login') || ! request()->routeIs('register'))
                @include('layouts.navbar')
            @endif
            {{ $slot }}
            @if (! request()->routeIs('login') || ! request()->routeIs('register'))
                @include('layouts.footer')
            @endif
        </div>
    </body>
</html>
