@extends('layouts.main')
@include('partials.navbar')
@section('secContainer')
    <div class="grid mb-5 grid-cols-8 justify-center">
        <div class="flex flex-col col-span-4 col-start-3 bg-white rounded-lg">
            <h5 class="mb-2 text-2xl font-bold text-gray-900">
                {{ $post->title }}
            </h5>
            <small>
                <p class="font-normal inline-flex gap-1 mb-2 text-gray-500 text-sm">By: <a
                        class="text-blue-500 hover:underline"
                        href="/blog?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a
                        class="text-blue-500 hover:underline"
                        href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                    {{ $post->created_at->diffForHumans() }}
                </p>
            </small>
            @php
                $imagePath = '';
            @endphp
            @php
                $imagePath = public_path('posts/' . $post->image);
            @endphp
            @if ($post->image)
                <div class="overflow-hidden rounded-md w-full">
                    <img class="object-cover max-h-[350px] w-full shadow-xl rounded-md max-sm:w-11/12"
                        src="{{ asset($post->image) }}" alt="{{ $post->category->name }}">
                </div>
            @else
                <img class="object-cover shadow-xl rounded-md w-full max-sm:w-11/12" src="https://picsum.photos/1200/400"
                    alt="{{ $post->category->name }}">
            @endif
            <div class="flex flex-col p-4">
                <p class="mb-3 font-normal text-gray-700">
                    {!! $post->body !!}
                </p>
            </div>
            <a href="/news">Back to News</a>
        </div>
    </div>
@endsection
@section('footer')
    @include('partials.footer')
@endsection
