@extends('layouts.main')
@section('container')
    <div class="flex flex-col pt-20">
        <div class="flex items-center gap-4">
            <h1 class="text-black text-5xl font-bold">News
            </h1>
            <div class="w-20 h-[2px] mt-3 bg-cyan-500 lg:w-36 md:w-28"></div>
        </div>
        <p class="text-cyan-500 text-base font-normal"><a class="text-slate-700" href="/">Beranda</a> > <span
                class="text-black">{{ Str::title($title) }}</span></p>
    </div>
    @if ($posts->count())
        <div
            class="flex flex-col items-center bg-white border my-10 overflow-hidden border-gray-200 rounded-lg shadow dark:border-gray-700 dark:bg-gray-800">
            @if ($posts[0]->image)
                <div class="overflow-hidden rounded-md w-full">
                    <img class="object-cover max-h-[450px] w-full shadow-xl rounded-md"
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
                <div class="w-60 h-[2px] mt-3 bg-cyan-500 max-sm:hidden"></div>
            </div>
        </div>
        <div class="max-md:flex-col flex md:gap-5">
            <a href="">
                <div class="">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}"
                        class="w-full aspect-video mb-4 object-cover rounded-2xl overflow-hidden bg-black/30"
                        alt="">
                </div>
            </a>
            <div class="flex flex-col">
                <a href="/news/{{ $posts[0]->slug }}">
                    <h1
                        class="text-lg leading-5 line-clamp-3 tracking-tight md:line-clamp-2 md:text-3xl font-bold group-hover:text-blue-500 transition-all duration-500 ease-in-out">
                        {{ $posts[0]->title }}</h1>
                </a>
                <small>
                    <p class="md:font-normal mb-2 text-gray-500 mt-1 text-xs md:text-sm">By: <a
                            class="text-blue-500 hover:underline"
                            href="/news?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->username }}</a> in
                        <a class="text-blue-500 hover:underline"
                            href="/news?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </p>
                </small>
                <p class="mb-3 font-normal text-gray-300 dark:text-gray-800">{{ $posts[0]->excerpt }}</p>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-5">
            @foreach ($latestPosts->skip(1) as $post)
                <div class="flex md:gap-3 group md:flex-row flex-col">
                    <a href="">
                        <div>
                            <img class="w-full aspect-video mb-4 object-cover rounded-2xl overflow-hidden bg-black/30"
                                src="{{ asset('storage/' . $post->image) }}" alt="">
                        </div>
                    </a>
                    <div class="flex flex-col">
                        <a href="/news/{{ $post->slug }}">
                            <h5
                                class="text-base leading-tight line-clamp-3 tracking-tight md:line-clamp-2 md:text-lg font-bold group-hover:underline group-hover:text-blue-500 transition-all duration-500 ease-in-out">
                                {{ $post->title }}</h5>
                        </a>
                        <small>
                            <p class="font-normal mb-2 text-gray-500 text-xs mt-1 md:text-sm">By: <a
                                    class="text-blue-500 hover:underline"
                                    href="/news?author={{ $post->author->usersname }}">{{ $post->author->username }}</a>
                                in
                                <a href="/news?category={{ $post->category->slug }}"><span
                                        class="text-blue-500 hover:underline">{{ $post->category->name }}</span>,</a>
                                {{ $post->created_at->diffForHumans() }}
                            </p>
                        </small>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="grid grid-cols-3 gap-5 pt-32">
            @foreach ($categories as $category)
                <div class="flex flex-col gap-5">
                    <h1 class="text-lg md:text-3xl">{{ $category->name }}</h1>
                    @foreach ($categoryPosts[$category->id] as $post)
                        <div class="flex flex-col">
                            <a class="group" href="">
                                <div>
                                    <img class="w-full aspect-video mb-4 object-cover overflow-hidden bg-black/30"
                                        src="{{ asset('storage/' . $post->image) }}" alt="">
                                </div>
                                <div class="flex flex-col">
                                    <h5
                                        class="text-xs font-[300] leading-tight line-clamp-3 tracking-tight md:line-clamp-2 md:text-lg md:font-bold group-hover:underline group-hover:text-blue-500 transition-all duration-500 ease-in-out">
                                        {{ $post->title }}</h5>
                                    <small>
                                        <p class="font-normal mb-2 text-gray-500 text-[0.5rem] mt-1 md:text-sm">By: <a
                                                class="text-blue-500 hover:underline"
                                                href="/news?author={{ $post->author->usersname }}">{{ $post->author->username }}</a>
                                            in
                                            <a href="/news?category={{ $post->category->slug }}"><span
                                                    class="text-blue-500 hover:underline">{{ $post->category->name }}</span>,</a>
                                            {{ $post->created_at->diffForHumans() }}
                                        </p>
                                    </small>
                                </div>
                            </a>
                        </div>
                    @endforeach
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
                        class="shadow-xl ease-in-out duration-500 text-slate-800 transition-all normal-case hover:text-white hover:bg-slate-900 rounded-none py-5 px-5 font-semibold md:font-bold">
                        <h3 class="text-sm">{{ $category->name }}</h3>
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
