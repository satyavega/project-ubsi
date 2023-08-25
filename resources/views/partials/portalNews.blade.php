<section class="px-5 flex flex-col gap-5">
    <div class="flex justify-between">
        <div class="flex h-fit items-center gap-2">
            <h1 class="text-4xl font-bold">Berita Terkini</h1>
            <div class="w-80 h-[2px] mt-3 bg-cyan-500"></div>
        </div>
        <a href="news"
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
        <div class="border w-min border-gray-400">
            <div class="w-[400px] h-[250px]">
                @foreach ($posts as $post)
                    @php
                        $imagePath = '';
                    @endphp
                    @php
                        $imagePath = public_path('posts/' . $post->image);
                    @endphp
                    @if ($post->image)
                        <div class="overflow-hidden rounded-md w-full">
                            <img class="object-cover max-h-[450px] w-full shadow-xl rounded-md max-sm:w-11/12"
                                src="{{ asset($post->image) }}" alt="{{ $post->category->name }}">
                        </div>
                    @else
                        <img class="object-cover shadow-xl rounded-md w-full max-sm:w-11/12"
                            src="https://picsum.photos/1200/400" alt="{{ $post->category->name }}">
                    @endif
            </div>
            <div class="flex flex-col px-5 py-3">
                <div class="border-b flex flex-col gap-2 py-5  border-gray-400">
                    <p>{{ $post->category->name }}</p>
                    <h1 class="text-xl text-slate-900">{{ $post->title }}</h1>
                    <p class="text-lg leading-6 text-slate-700">{{ $post->excerpt }}</p>
                </div>
                <p class="pt-3"> {{ $post->created_at->diffForHumans() }}
                </p>
                @endforeach
            </div>
        </div>
    </div>
</section>
