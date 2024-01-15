<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div id="app">
        <x-navbar />
        <div id="container">
            @yield('content')
        </div>
    </div>
    @env('local')
        <script src="https://localhost:35279/livereload.js"></script>
    @endenv
</body>
</html>
