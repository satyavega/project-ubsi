<div class="flex flex-col gap-5">
    <div class="flex gap-5 items-center">
        <h1 class="font-extrabold text-3xl md:text-6xl font-sans">BSI News</h1>
        <div class="md:w-40 h-[2px] mt-3 w-20 bg-cyan-500"></div>
    </div>
    <div class="flex mt-10 md:gap-10 gap-5 md:flex-row flex-col">
        @if ($posts->count())
            <a class="flex flex-col md:flex-row  gap-5 group" href="news/{{ $posts[0]->slug }}">
                <div>
                    @if ($posts[0]->image)
                        <div class="md:w-[30rem]">
                            <img class="w-full aspect-video mb-4 object-cover rounded-2xl overflow-hidden bg-black/30"
                                src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}">
                        </div>
                    @else
                        <img class="object-cover shadow-xl rounded-lg w-[350px] min-h-[300px] max-sm:w-11/12"
                            src="https://picsum.photos/1200/400" alt="">
                    @endif
                </div>
                <div class="flex flex-col justify-between">
                    <div class="flex flex-col gap-3 mb-3">
                        <div class="flex flex-col">
                            <h1
                                class="text-lg md:leading-snug leading-tight md:tracking-tight md:text-3xl font-bold group-hover:text-blue-500 transition-all duration-500 ease-in-out">
                                {{ $posts[0]->title }}</h1>
                            <h4 class="font-semibold text-sm text-gray-400">{{ $posts[0]->category->name }}</h4>
                        </div>
                        <p class="md:text-sm line-clamp-3 text-justify text-xs">{{ strip_tags($posts[0]->body) }}</p>
                    </div>
                    <button
                        class="btn btn-xs mb-5 bg-blue-500 hover:bg-blue-800 text-gray-100 capitalize transition-all duration-500 ease-in-out">Baca
                        selengkapnya..</button>
                </div>
        @endif
        </a>
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
                <div class="">
                    <h5
                        class="text-lg leading-5 tracking-tight md:text-xl font-bold group-hover:text-blue-500 transition-all duration-500 ease-in-out">
                        {{ $post->title }}</h5>
                    <h4 class="font-medium text-xs text-gray-400">{{ $post->category->name }}
                    </h4>
                </div>
            </a>
        @endforeach
    </div>
</div>
