<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @yield('style')
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div id="app" class="bg-slate-600 pb-4">
        <x-navbar />
        <div id="container">
            @yield('content')
        </div>
        <x-paginator :page="$page"/>
    </div>
</body>
</html>
