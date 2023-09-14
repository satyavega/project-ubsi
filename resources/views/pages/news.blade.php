@extends('layouts.main')
@section('container')
    <div class="flex flex-col pt-20">
        <h1 class="text-4xl md:text-8xl font-bold mb-4">{{ $title }}</h1>
        <p class="text-cyan-500 text-base font-normal"><a class="text-slate-700" href="/">Beranda</a> > <span
                class="text-black">{{ Str::title($title) }}</span></p>
    </div>
    @if ($posts->count())
        <div
            class="flex flex-col items-center bg-white border my-10 overflow-hidden border-gray-200 rounded-lg shadow dark:border-gray-700 dark:bg-gray-800">
            @if ($posts[0]->image)
                <div class="overflow-hidden rounded-md w-full">
                    <img class="object-cover max-h-[450px] w-full shadow-xl rounded-md max-sm:w-11/12"
                        src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}">

                </div>
            @else
                <img class="object-cover rounded-lg w-full" src="https://picsum.photos/1200/400"
                    alt='{{ $posts[0]->category->name }}'>
            @endif
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a class="hover:underline"
                        href="/news/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a>
                </h5>
                <small>
                    <p class="font-normal mb-2 text-gray-500 text-sm">By: <a class="text-blue-500 hover:underline"
                            href="/news?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a
                            class="text-blue-500 hover:underline"
                            href="/news?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </p>
                </small>
                <p class="mb-3 font-normal text-gray-300 dark:text-gray-400">{{ $posts[0]->excerpt }}</p>
                <a href="/news/{{ $posts[0]->slug }}"
                    class="flex w-max items-center justify-center gap-1 px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <span><x-heroicon-o-arrow-long-right class="w-6 h6" /></span>
                </a>
            </div>
        </div>
        <div class="flex justify-between py-10">
            <div class="flex h-fit items-center gap-2">
                <h1 class="text-slate-700 text-4xl font-semibold">Berita Terbaru</h1>
                <div class="w-60 h-[2px] mt-3 bg-cyan-500"></div>
            </div>
        </div>
        <div class="max-md:flex-col flex gap-5">
            <a href="">
                <div class="w-[550px] bg-red-500 h-72">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" class="w-full h-full object-cover"
                        alt="">
                </div>
            </a>
            <div class="flex flex-col">
                <a href="/news/{{ $posts[0]->slug }}">
                    <h1 class="font-bold ">{{ $posts[0]->title }}</h1>
                </a>
                <small>
                    <p class="font-normal mb-2 text-gray-500 text-sm">By: <a class="text-blue-500 hover:underline"
                            href="/news?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a
                            class="text-blue-500 hover:underline"
                            href="/news?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </p>
                </small>
                <p class="mb-3 font-normal text-gray-300 dark:text-gray-800">{{ $posts[0]->excerpt }}</p>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-5 py-10">
            @foreach ($latestPosts as $post)
                <div class="flex gap-3">
                    <a href="">
                        <div class="bg-transparent w-[300px] h-[150px]">
                            <img class="object-cover w-full h-full" src="{{ asset('storage/' . $post->image) }}"
                                alt="">
                        </div>
                    </a>
                    <div class="flex flex-col ">
                        <a href="/news/{{ $post->slug }}">
                            <h5 class="leading-6 mb-2 text-2xl font-bold tracking-tight hover:underline text-gray-900">
                                {{ $post->title }}</h5>
                        </a>
                        <small>
                            <p class="font-normal mb-2 text-gray-500 text-sm">By: <a class="text-blue-500 hover:underline"
                                    href="/news?author={{ $post->author->usersname }}">{{ $post->author->username }}</a>
                                in
                                <a href="/news?category={{ $post->category->slug }}"><span
                                        class="text-blue-500 hover:underline">{{ $post->category->name }}</span>,</a>
                                {{ $post->created_at->diffForHumans() }}
                            </p>
                        </small>
                        {{-- <p class="mb-3 text-sm text-gray-700 dark:text-gray-400">
                            {{ implode(' ', array_slice(explode(' ', strip_tags($post->excerpt)), 0, 15)) }}</p> --}}
                    </div>
                </div>
            @endforeach
        </div>
        <div class="grid grid-cols-3 gap-5 py-10">
            @foreach ($categories as $category)
                @php
                    $iteration = 0;
                @endphp
                <div class="grid grid-cols-3 gap-5">
                    <div class="flex items-center gap-2 col-span-3">
                        <h1 class="text-2xl font-bold">{{ $category->name }}</h1>
                        <div class="w-40 h-[2px] mt-3 bg-cyan-500"></div>
                    </div>
                    <div class="flex flex-col gap-5 col-span-3">
                        @foreach ($categoryPosts[$category->id] as $post)
                            <div class="flex gap-3 {{ $iteration === 0 ? 'flex-col' : '' }}">
                                <a href="">
                                    <div
                                        class="bg-red-500 w-[150px] h-[100px] {{ $iteration === 0 ? 'w-full h-[200px]' : '' }}">
                                        <img class="object-cover w-full h-full"
                                            src="{{ asset('storage/' . $post->image) }}" alt="">
                                    </div>
                                </a>
                                <div class="flex flex-col">
                                    <a href="/news/{{ $post->slug }}">
                                        <h4
                                            class="leading-6 mb-1 font-bold tracking-tight hover:underline text-gray-900 {{ $iteration === 0 ? 'text-2xl' : '' }}">
                                            {{ $post->title }}</h4>
                                    </a>
                                    <small>
                                        <p class="font-normal text-gray-500 text-xs">
                                            By: <a class="text-blue-500 hover:underline"
                                                href="/news?author={{ $post->author->username }}">{{ $post->author->username }}</a>
                                            in <a href="/news?category={{ $post->category->slug }}"><span
                                                    class="text-blue-500 hover:underline">{{ $post->category->name }}</span></a>,
                                            {{ $post->created_at->diffForHumans() }}
                                        </p>
                                    </small>
                                </div>
                            </div>
                            @php
                                $iteration++;
                            @endphp
                        @endforeach
                    </div>
                    <a href="/news/{{ $category->slug }}"
                        class="border-b-2 max-md:hidden border-y-slate-600 hover:text-slate-950 font-semibold hover:border-slate-950 uppercase text-xl gap-1 flex items-center text-slate-600 col-span-3">lihat
                        Semua
                        <span class="hover:pl-2 duration-150 transition-all ease-in-out">
                            <x-heroicon-o-arrow-long-right class="w-6 h6" />
                        </span>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="py-10">
            <div class="flex items-center gap-2 col-span-3">
                <h1 class="font-bold text-4xl">Kategori</h1>
                <div class="w-40 h-[2px] mt-3 bg-cyan-500"></div>
            </div>
            <div class="grid grid-cols-3 gap-5 py-5">
                @foreach ($categories as $category)
                    <a href="/news/{{ $category->slug }}"
                        class="shadow-xl ease-in-out duration-500 text-slate-800 transition-all normal-case hover:text-white hover:bg-slate-900 rounded-none py-5 px-5 font-bold">
                        <h3 class="">{{ $category->name }}</h3>
                        <p class="uppercase text-gray-600 text-sm">{{ $category->posts->count() }} artikel total</p>
                    </a>
                @endforeach
            </div>
        </div>
        </div>
        </div>
    @else
        <p class="text-xl text-center font-bold">404 Post <span class="text-red-600">Not Found!</span></p>
    @endif
@endsection
