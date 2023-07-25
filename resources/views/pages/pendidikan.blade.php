@extends('layouts.main')
@include('partials.navbar')
@section('container')
    <div class="relative h-[125vh]">
        @include('partials.hero')
        <div class="bg-slate-900 ml-5 absolute w-[600px] bottom-0 p-10 text-white flex flex-col gap-3">
            <h1 class="text-4xl font-semibold">{{ Str::title($title) }}</h1>
            <div class="w-80 h-[2px] mt-3 bg-cyan-500"></div>
            <p class="text-lg leading-8">{{ $description }}</p>
        </div>
    </div>
@section('secContainer')
    <div class="flex flex-col gap-5 pb-[100vh]">
        <div class="flex gap-3 flex-col">
            <div class="flex pt-20 flex-row gap-3">
                <h1 class="text-slate-700 text-4xl font-semibold">Fakultas dan Sekolah</h1>
                <div class="w-60 h-[2px] mt-5 bg-cyan-500"></div>
            </div>
            <p class="text-cyan-500 text-base font-normal"><a class="text-slate-700" href="/">Beranda</a> > <span
                    class="text-black">{{ Str::title($title) }}</span></p>
        </div>
        <p class="text-xl leading-8 text-gray-500 font-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Perferendis
            facere esse
            tenetur commodi, velit quo
            aspernatur repudiandae eos, maiores optio numquam alias omnis? Mollitia, suscipit pariatur molestiae minus
            nostrum facilis.</p>
    </div>
@endsection
@endsection
@section('footer')
@include('partials.footer')
@endsection
