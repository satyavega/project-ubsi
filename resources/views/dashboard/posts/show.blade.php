@extends('layouts.dashboard')
@include('layouts.sidebar')
@section('container')
    @include('layouts.headbar')
@section('secContainer')
    <div class="prose mx-10 py-5">
        <div class="flex flex-col justify-center items-center rounded-lg">
            <h1 class="font-bold max-sm:text-2xl max-2xl:text-3xl text-gray-900">
                {{ $post->title }}
            </h1>
            <div class="py-5 justify-start min-w-max max-sm:min-w-min flex gap-3">
                <a href="/dashboard/posts"
                    class="py-2 flex px-3 gap-2 text-gray-100 hover:bg-lime-600 hover:text-gray-200 rounded-lg bg-lime-500">
                    <x-heroicon-o-arrow-long-left class="h-7 w-7" />Back to table
                </a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit"
                    class="py-2 px-3 rounded-lg w-fit text-gray-100 h-fit hover:bg-yellow-600 hover:text-gray-200 bg-yellow-300">
                    <x-heroicon-o-pencil-square class="w-7 h-7" />
                </a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post">
                    @method('delete')
                    @csrf
                    <button onclick="return confirm('Are you sure?')"
                        class="py-2 px-3 rounded-lg w-fit text-gray-100 hover:bg-red-700 hover:text-gray-200 bg-red-500">
                        <x-heroicon-o-x-circle class="w-7 h-7" />
                    </button>
                </form>
            </div>
            @if ($post->image)
                <div class="">
                    <img class="w-full img-preview aspect-video mb-4 object-cover rounded-2xl overflow-hidden bg-black/30"
                        src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
                </div>
            @else
                <img class="object-cover shadow-xl rounded-md w-full max-sm:w-11/12" src="https://picsum.photos/1200/400"
                    alt="{{ $post->category->name }}">
            @endif
            <div class="flex flex-col p-4 max-sm:text-sm">
                <p class="mb-3 font-normal text-gray-700">
                    {!! $post->body !!}
                </p>
            </div>
        </div>
    </div>
@endsection
@endsection
