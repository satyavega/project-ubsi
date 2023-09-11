@extends('layouts.main')
@section('container')
    <section class="min-h-[60vh] md:min-h-screen flex flex-col pt-44">
        @include('partials.hero')
    </section>
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
    <section>
        @include('partials.portalNews')
    </section>
@endsection
