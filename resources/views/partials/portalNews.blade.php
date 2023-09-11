{{-- <section class="px-5 flex flex-col gap-5">
    <div class="flex justify-between">
        <div class="flex h-fit items-center gap-2">
            <h1 class="text-4xl font-bold">BSI News</h1>
            <div class="w-80 h-[2px] mt-3 bg-cyan-500"></div>
        </div>
        <a href="/news"
            class="border-b-2 border-y-slate-600 hover:text-slate-950 font-semibold hover:border-slate-950 uppercase text-xl gap-1 flex items-center text-slate-600 w-max">lihat
            berita
            lainnya
            <span class="hover:pl-2 duration-150 transition-all ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                </svg>
            </span>
        </a>
    </div>
    <div class="grid grid-cols-3 gap-10">
        @foreach ($posts as $post)
            <div class="border border-gray-400 rounded-t-md overflow-hidden">
                @php
                    $imagePath = '';
                @endphp
                @php
                    $imagePath = public_path('posts/' . $post->image);
                @endphp
                @if ($post->image)
                    <div class=" ">
                        <img class="object-cover object-center max-h-[250px] w-[400px] max-sm:w-11/12"
                            src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
                    </div>
                @else
                    <img class="object-cover shadow-xl rounded-md w-full max-sm:w-11/12"
                        src="https://picsum.photos/1200/400" alt="{{ $post->category->name }}">
                @endif
                <div class="flex flex-col px-5 py-3">
                    <div class="border-b flex flex-col gap-2 py-5  border-gray-400">
                        <p>{{ $post->category->name }}</p>
                        <h1 class="text-xl text-slate-900">{{ $post->title }}</h1>
                        <p class="text-lg leading-6 text-slate-700">{{ $post->excerpt }}</p>
                    </div>
                    <p class="pt-3"> {{ $post->created_at->diffForHumans() }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</section> --}}

<div class="flex flex-col gap-5">
    <div class="flex gap-5 items-center">
        <h1 class="font-extrabold text-6xl font-sans">BSI News</h1>
        <div class="w-40 h-[2px] mt-3 bg-cyan-500"></div>
    </div>
    <div class="flex mt-10 gap-10">
        @if ($posts->count())
            <div>
                @if ($posts[0]->image)
                    <div class="">
                        <img class="object-cover rounded-lg object-center max-h-[300px] w-[400px] max-sm:w-11/12"
                            src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}">
                    </div>
                @else
                    <img class="object-cover shadow-xl rounded-lg w-[350px] min-h-[300px] max-sm:w-11/12"
                        src="https://picsum.photos/1200/400" alt="">
                @endif
            </div>
            <div class="flex flex-col gap-5">
                <div class="">
                    <h1 class="font-bold">{{ $posts[0]->title }}</h1>
                    <h4 class="font-semibold text-gray-400">{{ $posts[0]->category->name }}</h4>
                </div>
                <p class="text-justify">{{ $posts[0]->excerpt }}</p>
                <button
                    class="btn btn-xs bg-blue-500 hover:bg-blue-800 text-gray-100 capitalize transition-all duration-500 ease-in-out">Baca
                    selengkapnya..</button>
            </div>
        @endif
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-5">
        @foreach ($posts->skip(1) as $post)
            <a class="flex flex-col group" href="news/{{ $post->slug }}">
                <div>
                    @if ($post->image)
                        <div class=" ">
                            <img class="w-full aspect-video mb-4 object-cover rounded-2xl overflow-hidden bg-black/30"
                                src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
                        </div>
                    @else
                        <img class="w-full aspect-video mb-4 object-cover rounded-2xl overflow-hidden bg-black/30"
                            src="https://picsum.photos/1200/400" alt="{{ $post->category->name }}">
                    @endif
                </div>
                <div class="flex flex-col gap-5">
                    <div class="">
                        <h1 class="font-semibold group-hover:text-blue-500 transition-all duration-500 ease-in-out">
                            {{ $posts[0]->title }}</h1>
                        <h4 class="font-medium text-gray-400 text-justify">{{ $posts[0]->category->name }}
                        </h4>
                    </div>
                    <p class="text-justify">{{ $posts[0]->excerpt }}</p>
                </div>
            </a>
        @endforeach
    </div>
</div>
