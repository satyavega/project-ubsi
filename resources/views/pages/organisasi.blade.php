@extends('layouts.main')
@include('partials.navbar')
@section('container')
@section('secContainer')
    <div class="flex flex-col gap-5 pb-[100vh]">
        <div class="flex gap-3 flex-col">
            <div class="flex pt-20 flex-row gap-3">
                <h1 class="text-slate-700 text-4xl font-semibold">Struktur Organisasi</h1>
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
