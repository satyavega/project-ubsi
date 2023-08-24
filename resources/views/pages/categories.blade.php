@extends('layouts.main')

@section('secContainer')
    <h1 class="text-5xl font-bold mb-5">List {{ $title }} :</h1>
    <div class="grid grid-cols-3 gap-5">
        @foreach ($categories as $category)
            <a class="flex items-center justify-center" href="/blog?category={{ $category->categorySlug }}">
                <figcaption class="absolute z-10 text-center shadow-inner text-2xl font-bold text-white">
                    <p class="shadow-black drop-shadow-xl">{{ $category->categoryName }}</p>
                </figcaption>
                <figure
                    class="shadow-xl max-w-sm transition-all duration-300 cursor-pointer hover:brightness-50 filter grayscale hover:grayscale-0">
                    <img class="rounded-lg" src="https://picsum.photos/600/300" alt="image description">
                </figure>
            </a>
        @endforeach
    </div>
@endsection
