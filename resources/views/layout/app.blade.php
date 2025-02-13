<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <title>VueJS CRUD Operations in Laravel</title>
    <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet" />
</head>

<body>
    <div id="app">
        <main class="py-3">
            <h3>Laravel Vue</h3>
            <hello-world/>
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>

</html>