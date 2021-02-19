<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Laravel</title>
</head>

<body class="bg-gray-800">
    {{-- bg-gradient-to-b from-purple-800 to-blue-600 --}}
    {{-- header section --}}
    <section class="relative header-section">
        {{-- overlay for the bottom left curve --}}
        <div class="absolute bottom-0 left-0 w-1/2 min-h-full bg-gray-800"></div>
        {{-- content --}}
        <div class="relative font-sans bg-gray-900 md:rounded-bl-overlay">
            {{-- Navbar --}}
            <x-header />
            {{-- Hero --}}
            <x-hero />
        </div>
    </section>

    {{-- portfolio --}}
    <section class="relative portfolio-section">

        {{-- overlay for the bottom left curve --}}
        <div class="absolute top-0 right-0 w-1/2 min-h-full bg-gray-900"></div>

        {{-- content --}}

        <div class="relative pt-20 font-sans bg-gray-800 md:rounded-tr-overlay ">
            {{-- <x-portfolio /> --}}
        </div>
    </section>











    @if (getenv('APP_ENV') === 'local')
    <script id=" __bs_script__">
        //

            document.write(
                "<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.6'><\/script>"
                .replace("HOST", location.hostname));

    </script>
    @endif
</body>

</html>
