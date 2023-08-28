@extends('layouts.dashboard')
@include('layouts.sidebar')
@section('container')
    @include('layouts.headbar')
@section('secContainer')
    <div class="px-10">
        <h1 class="font-medium">Welcome Back, <span class="font-bold">{{ Str::title(Auth::user()->name) }}</span>!</h1>
        <div class="grid grid-cols-3 gap-5 text-white py-10">
            <div class="bg-slate-900 p-5">
                <div class="flex justify-between">
                    <span>
                        <h1>Artikel</h1>
                        <p class="text-gray-300">Total Artikel : <span class="font-bold">{{ $posts->count() }}</span></p>
                    </span>
                    {{-- <x-phosphor-article-thin class="w-1/4 h-1/4" /> --}}
                    <x-gmdi-article-o />
                </div>
            </div>
            {{-- <div class="bg-[#0E6BA8] p-5">
                <div>
                    <span>
                        <h1>Kategori</h1>
                        <p class="text-gray-300">Total Kategori : <span class="font-bold">{{ $categories->count() }}</span>
                        </p>
                    </span>

                </div>
            </div> --}}
            <div class="bg-[#00A39E] p-5">
                <div class="flex justify-between">
                    <span>
                        <h1>User</h1>
                        <p class="text-gray-300">Total User : <span class="font-bold">{{ $posts->count() }}</span></p>
                    </span>
                    <x-feathericon-user class="w-1/4 h-1/4" />
                </div>
            </div>
            <div class="bg-[#00A39E] p-5">Total Mantan</div>
        </div>
    </div>
@endsection
@endsection
{{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot> --}}
{{--
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}
{{-- </x-app-layout> --}}
