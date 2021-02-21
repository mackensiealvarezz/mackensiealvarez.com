<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="url" content="{{ url('') }}" />
    <meta name="twitter:card" content="summary">
    </meta>
    <meta name="twitter:image" content="{{ asset('images/me.jpeg') }}">
    </meta>
    <meta name="description" content="Mackensie Alvarez | I create things">
    <meta name="twitter:title" content="Mackensie Alvarez">
    <meta name="twitter:description" content="Fullstack developer">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <title>Mackensie Alvarez | I create things</title>
</head>

<body>
    @routes
    @inertia
</body>

</html>
