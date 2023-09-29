@extends('layouts.dashboard')
@include('layouts.sidebar')
@section('container')
    @include('layouts.headbar')
@section('secContainer')
    @php
        $data = (object) [
            'name' => '',
            'slug' => '',
            'excerpt' => '',
            'body' => '',
            'tag_ids' => [],
            'category' => '',
        ];
    @endphp
    <main class="overflow-x-hidden pb-10 px-5 overflow-y-auto bg-gray-200">
        <div class="container mx-auto py-8">
            <h3 class="text-gray-700 text-3xl font-medium">Edit Post</h3>
            {{-- @include('dashboard.partials.card') --}}
        </div>
        <div class="max-w-2xl min-h-min">
            <form method="post" action="/dashboard/posts/{{ $post->slug }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-6">
                    <label for="title" class="block mb-2 text-lg font-medium text-gray-700">Title</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}"
                        class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-transparent @error('title')
                            invalid:border-red-500 invalid:text-pink-600 invalid:focus:border-pink-500 invalid:focus:ring-pink-500
                            @enderror"
                        placeholder="Title here" required>
                    @error('title')
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="slug" class="block mb-2 text-lg font-medium text-gray-700">Slug</label>
                    <input type="text" id="slug" name="slug" value="{{ old('slug') }}"
                        class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-transparent @error('slug')
                            invalid:border-red-500
                            invalid:text-pink-600
                            invalid:focus:border-pink-500 invalid:focus:ring-pink-500
                            @enderror"
                        disabled placeholder="slug terisi otomatis ketika title sudah diisi">
                    @error('slug')
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="category" class="block mb-2 text-lg font-medium text-gray-700">Category</label>
                    <select name="category_id" id="category"
                        class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-transparent
                            @error('category_id')
                            invalid:border-pink-500 invalid:text-pink-600
                            invalid:focus:border-pink-500 focus:invalid:ring-pink-500
                            @enderror">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ old('category_id', $post->category_id) == $category->id ? ' selected' : ' ' }}>
                                {{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="image" class="block mb-2 text-lg font-medium text-gray-700">Image</label>
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}"
                            class="w-full img-preview aspect-video mb-4 object-cover rounded-2xl overflow-hidden bg-black/30"
                            alt="ini image">
                    @else
                        <img class="img-preview w-[50%] h-[150px] mb-5 object-contain" alt="gada image">
                    @endif
                    <input type="file" id="image" name="image"
                        class="file:active:bg-gray-400 border file:ring-blue-500 file:bg-gray-300 file:px-2 file:rounded-lg file:border-0 file:active:border-blue-500 file:focus:border-blue-500 cursor-pointer file:cursor-pointer active:border-blue-500 focus:border-blue-500 border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500  block w-full p-2.5 bg-transparent @error('title')
                            invalid:border-red-500 invalid:text-pink-600 invalid:focus:border-pink-500 invalid:focus:ring-pink-500
                            @enderror"
                        placeholder="image here" onchange="previewImage()">
                    @error('image')
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="excerpt" class="block w-full mb-2 text-lg font-medium text-gray-700">Excerpt</label>
                    <input id="excerpt" type="hidden" name="excerpt" value="{{ old('excerpt') }}">
                    <input type="text" id="excerpt" name="excerpt" value="{{ old('excerpt', $post->excerpt) }}"
                        class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-transparent @error('excerpt')
                                invalid:border-red-500 invalid:text-pink-600 invalid:focus:border-pink-500 invalid:focus:ring-pink-500
                                @enderror"
                        placeholder="Excerpt here" required>
                    @error('excerpt')
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="body" class="block w-full mb-2 text-lg font-medium text-gray-700">Body</label>
                    <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                    <trix-editor
                        class="prose bg-gray-50 focus:border-2 border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full bg-transparent @error('body')
                            invalid:border-pink-500 invalid:text-pink-600
                            focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                            @enderror"
                        input="body" placeholder="Body here"></trix-editor @required(true)>
                    @error('body')
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tag" class="form-label">Tag</label><br>
                    <div class="grid grid-cols-5 gap-2">
                        @foreach ($tags as $tag)
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="tag_ids[]"
                                    value="{{ $tag->id }}"
                                    {{ in_array($tag->id, old('tag_ids', $data->tag_ids)) ? 'checked' : '' }}>
                                <label class="form-check-label">{{ $tag->name }}</label>
                            </div>
                        @endforeach
                    </div>
                    @error('tag_ids')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit"
                    class="bg-blue-500 mb-5 px-4 rounded-lg active:border-2 border-blue-800 border-opacity-70 text-white text-lg py-3">Update
                    post</button>
            </form>
        </div>
    </main>
    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault()
        })

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';


            const blob = URL.createObjectURL(image.files[0]);
            imgPreview.src = blob;

        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#title').on('input', function() {
                console.log('Event input judul terpicu.');
                var title = $(this).val();
                var slug = title.toLowerCase().replace(/[^a-z0-9-]/g, '-').replace(/-+/g, '-');
                $('#slug').val(slug);
            });
        });
    </script>
@endsection
@endsection
