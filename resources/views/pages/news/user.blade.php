@extends('layouts.main')
@section('container')
    <div class="flex flex-col gap-3 py-20">
        <div class="flex items-center gap-4">
            <h1 class="text-black text-3xl md:text-5xl font-bold">{{ $user->username }}</h1>
            <div class="w-20 h-[2px] mt-3 bg-cyan-500 lg:w-36 md:w-28"></div>
        </div>
        <p class="text-cyan-500 text-xs md:text-base font-normal"><a class="text-slate-700" href="/">Beranda</a> > <span
                class="text-black">Author : <span class="font-bold">{{ $user->username }}</span></span></p>
    </div>
    @if ($posts->count())
        @foreach ($posts as $post)
            <div class="grid grid-cols-1">
                <div class="flex flex-col md:flex-row gap-5 mb-10">
                    <a href="/news/{{ $post->slug }}">
                        <div class="md:w-[26rem]">
                            <img src="{{ asset('storage/' . $post->image) }}"
                                class="w-full aspect-video mb-4 object-cover rounded-2xl overflow-hiddenbg-black/30"
                                alt="">
                        </div>
                    </a>
                    <div class="flex flex-col">
                        <a href="/news/{{ $post->slug }}">
                            <h5
                                class="text-base leading-tight line-clamp-3 tracking-tight md:line-clamp-2 md:text-lg font-bold group-hover:underline group-hover:text-blue-500 transition-all duration-500 ease-in-out">
                                {{ $post->title }}</h5>
                        </a>
                        <small>
                            <p class="font-normal mb-2 text-gray-500 text-sm">By: <a class="text-blue-500 hover:underline"
                                    href="{{ route('users.posts', ['user' => $post->author->slug]) }}">
                                    {{ $post->author->username }}
                                </a>
                                in <a class="text-blue-500 hover:underline"
                                    href="{{ route('categories.posts', ['category' => $post->category->slug]) }}">
                                    {{ $post->category->name }}
                                </a>
                                {{ $post->created_at->diffForHumans() }}
                            </p>
                            <p class="line-clamp-3">
                                {{ strip_tags($post->body) }}
                            </p>
                        </small>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>Tidak ada postingan dalam kategori ini.</p>
    @endif
@endsection
