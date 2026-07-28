<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Questiontag Limited')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js','resources/js/index.js'])
</head>
<body>

    @include('partials.navbar')
    
    <main>
        @yield('content')
    </main>

   
@include('partials.footer')
</body>
</html>