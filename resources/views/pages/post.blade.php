@extends('layouts.main')
@section('container')
    <div class="flex mt-10 mb-5">
        <div class="flex flex-col bg-white rounded-lg">
            <h5 class="mb-2 text-2xl font-bold text-gray-900">
                {{ $post->title }}
            </h5>
            <small>
                <p class="font-normal inline-flex gap-1 mb-2 text-gray-500 text-sm">By: <a
                        class="text-blue-500 hover:underline"
                        href="/blog?author={{ $post->author->username }}">{{ $post->author->username }}</a> in <a
                        class="text-blue-500 hover:underline"
                        href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                    {{ $post->created_at->diffForHumans() }}
                </p>
            </small>
            @if ($post->image)
                <div class="carousel aspect-video w-full mt-8 mb-12 rounded-2xl overflow-hidden">
                    <img class="w-full object-cover" src="{{ asset('storage/' . $post->image) }}"
                        alt="{{ $post->category->name }}">
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
