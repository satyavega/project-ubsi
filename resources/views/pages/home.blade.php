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
    <div class="pt-10 relative max-md:hidden">
        <div class="w-60 h-20 absolute z-10 bg-slate-950"></div>
        <div class="w-48 h-16 ml-16 mt-9 absolute bg-cyan-500"></div>
    </div>
    {{-- <div class="flex mt-10 relative justify-between max-lg:mx-20 h-[500px] overflow-hidden">
        @include('home.titleWithDescripton')
        @include('home.rightImage')
    </div> --}}
    <div
        class="flex justify-between pl-5 relative top-14 overflow-hidden max-xl:gap-5 max-lg:gap-5 max-lg:mx-5 max-md:flex-col-reverse max-md:justify-self-auto max-md:items-center max-md:static max-md:mt-20 max-lg:p-0">
        @include('home.titleWithDescripton')
        @include('home.rightImage')
    </div>

    @include('partials.boxLink')
    @include('partials.portalNews')
    @include('partials.footer')
</body>

</html>
