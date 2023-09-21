@php
    $data = (object) [
        'image_name' => '',
    ];
@endphp
@extends('layouts.dashboard')
@include('layouts.sidebar')
@section('container')
    @include('layouts.headbar')
@section('secContainer')
    <main class="overflow-x-hidden pb-10 px-5 overflow-y-auto bg-gray-200">
        <div class="container mx-auto py-8">
            <h3 class="text-gray-700 text-3xl font-medium">Create New Logo</h3>
            {{-- @include('dashboard.partials.card') --}}
        </div>
        <div class="max-w-2xl min-h-min">
            <form method="post" action="/dashboard/logos" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="image_name" class="block mb-2 text-lg font-medium text-gray-700">image_name</label>
                    <input type="text" id="image_name" name="image_name" value="{{ old('image_name') }}"
                        class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-transparent @error('image_name')
                            invalid:border-red-500 invalid:text-pink-600 invalid:focus:border-pink-500 invalid:focus:ring-pink-500
                            @enderror"
                        placeholder="image_name here" required>
                    @error('title')
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="image" class="block mb-2 text-lg font-medium text-gray-700">Image</label>
                    <img class="img-preview w-[50%] h-[150px] mb-5 hidden object-contain" alt="">
                    <input type="file" id="image" name="image"
                        class="file:active:bg-gray-400 border file:ring-blue-500 file:bg-gray-300 file:px-2 file:rounded-lg file:border-0 file:active:border-blue-500 file:focus:border-blue-500 cursor-pointer file:cursor-pointer active:border-blue-500 focus:border-blue-500 border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500  block w-full p-2.5 bg-transparent @error('image')
                            invalid:border-red-500 invalid:text-pink-600 invalid:focus:border-pink-500 invalid:focus:ring-pink-500
                            @enderror"
                        placeholder="image here" required>
                    @error('image')
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <button type="submit"
                    class="bg-blue-500 mb-5 px-4 rounded-lg active:border-2 border-blue-800 border-opacity-70 text-white text-lg py-3">Create
                    Logo</button>
            </form>
        </div>
    </main>
@endsection
@endsection
