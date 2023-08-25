<!DOCTYPE html>
<html class="scroll-smooth" lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Home Page</title>
</head>

<body>
    @include('partials.transparentNav')
    @include('partials.hero')
    {{-- <script src="{{ asset('js/navbar.js') }}"></script> --}}
    <div class="pt-10 relative">
        <div class="w-60 h-20 absolute z-10 bg-slate-950"></div>
        <div class="w-48 h-16 ml-16 mt-9 absolute bg-cyan-500"></div>
    </div>
    <div class="flex mt-10 relative justify-between">
        @include('home.titleWithDescripton')
        @include('home.rightImage')
    </div>
    <div class="relative mt-44">
        @include('partials.wave')
        <div class="grid grid-cols-2 gap-5 px-5 absolute top-16">
            @include('home.linkBoxes')
        </div>
    </div>
    @include('partials.portalNews')
    @include('partials.footer')
</body>

</html>
