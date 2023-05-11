<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/js/app.js')
</head>
<body class="bg-dark">

    @include('partials.header')

    <div class="container py-5 d-flex flex-wrap justify-content-around">
        @yield('content')
    </div>

    @include('partials.footer')

</body>
</html>