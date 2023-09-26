@extends('layouts.main')
@section('container')
    <div class="flex flex-col pt-20">
        <div class="flex items-center gap-4">
            <h1 class="text-black text-5xl font-bold">News</h1>
            <div class="w-20 h-[2px] mt-3 bg-cyan-500 lg:w-36 md:w-28"></div>
        </div>
        <p class="text-cyan-500 text-base font-normal"><a class="text-slate-700" href="/">Beranda</a> > <span
                class="text-black">{{ Str::title($title) }}</span></p>
    </div>
    @if ($posts->count())
        @foreach ($posts as $post)
            <div
                class="flex flex-col items-center bg-white border my-10 overflow-hidden border-gray-200 rounded-lg shadow dark:border-gray-700 dark:bg-gray-800">
                @if ($post->image)
                    <div class="overflow-hidden rounded-md w-full">
                        <img class="object-cover max-h-[450px] w-full shadow-xl rounded-md"
                            src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
                    </div>
                @else
                    <img class="object-cover rounded-lg w-full" src="https://picsum.photos/1200/400"
                        alt='{{ $post->category->name }}'>
                @endif
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a
                            class="hover:underline" href="/news/{{ $post->slug }}">{{ $post->title }}</a></h5>
                    <small>
                        <p class="font-normal mb-2 text-gray-500 text-sm">By: <a class="text-blue-500 hover:underline"
                                href="{{ route('users.posts', ['user' => $posts[0]->author->slug]) }}">
                                {{ $posts[0]->author->username }}
                            </a> in <a class="text-blue-500 hover:underline"
                                href="{{ route('categories.posts', ['category' => $post->category->slug]) }}">
                                {{ $post->category->name }}
                            </a>
                            {{ $post->created_at->diffForHumans() }}
                        </p>
                    </small>
                    <p class="mb-3 font-normal text-gray-300 dark:text-gray-400">{{ $post->excerpt }}</p>
                    <a href="/news/{{ $post->slug }}"
                        class="flex w-max items-center justify-center gap-1 px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <span><x-heroicon-o-arrow-long-right class="w-6 h6" /></span>
                    </a>
                </div>
            </div>
        @endforeach
    @else
        <p>Tidak ada postingan dalam kategori ini.</p>
    @endif
@endsection
