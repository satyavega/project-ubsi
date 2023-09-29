@extends('layouts.main')
@section('container')
    <section class="min-h-[60vh] md:min-h-screen flex flex-col m-auto py-44">
        @include('partials.hero')
    </section>
    <section
        class="min-h-[60vh] md:min-h-screen xl:min-h-0 max-h-[70rem] flex justify-center items-center py-44 overflow-hidden">
        @include('home.tentang')
    </section>
    <section class="">
        @include('partials.portalNews')
    </section>
@endsection
