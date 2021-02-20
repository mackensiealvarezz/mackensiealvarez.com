<!DOCTYPE html x-init x-data="{darkMode: true }" :class="{'dark' : darkMode}">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>mackensiealvarez.com</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="antialiased bg-gray-900">
    {{-- bg-gradient-to-b from-purple-800 to-blue-600 --}}
    {{-- header section --}}
    <section class="relative header-section">
        {{-- overlay for the bottom left curve
        <div class="absolute bottom-0 left-0 w-1/2 min-h-full bg-gray-800"></div> --}}
        {{-- content --}}
        <div class="relative font-sans bg-gray-900 ">
            {{-- Navbar --}}
            <x-header />
            {{-- Hero --}}
            <x-hero />
        </div>
    </section>
</body>

</html>
