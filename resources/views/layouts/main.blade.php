<!DOCTYPE html>
<html class="scroll-smooth" lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ Str::title($title) }} | UBSI</title>
</head>

<body>
    @include('partials.transparentNav')

    <div class="px-28 overflow-hidden">
        @yield('container')
    </div>
    @include('partials.footer')
</body>

</html>
