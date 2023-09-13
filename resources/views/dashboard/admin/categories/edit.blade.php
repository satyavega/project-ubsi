@php
    $data = (object) [
        'name' => '',
        'slug' => '',
        'excerpt' => '',
        'category_id' => '',
        'tag_ids' => [],
        'body' => '',
    ];
@endphp
@extends('layouts.dashboard')
@include('layouts.sidebar')
@section('container')
    @include('layouts.headbar')
@section('secContainer')
    <main class="overflow-x-hidden pb-10 px-5 overflow-y-auto bg-gray-200">
        <div class="container mx-auto py-8">
            <h3 class="text-gray-700 text-3xl font-medium">Create New Category</h3>
            {{-- @include('dashboard.partials.card') --}}
        </div>
        <div class="max-w-2xl min-h-min">
            <form method="post" action="/dashboard/categories/{{ $category->slug }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-lg font-medium text-gray-700">Category Name</label>
                    <input type="text" id="name" name="name" value="{{ $category->name }}"
                        class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-transparent @error('name')
                            invalid:border-red-500 invalid:text-pink-600 invalid:focus:border-pink-500 invalid:focus:ring-pink-500
                            @enderror"
                        placeholder="Category here" required>
                    @error('name')
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
                        required readonly>
                    @error('slug')
                        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <button type="submit"
                    class="bg-blue-500 mb-5 px-4 rounded-lg active:border-2 border-blue-800 border-opacity-70 text-white text-lg py-3">Edit
                    Category</button>
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

            if (image.files) {
                imgPreview.classList.remove('hidden');
                const blob = URL.createObjectURL(image.files[0]);
                imgPreview.src = blob;
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#name').on('input', function() {
                console.log('Event input judul terpicu.');
                var name = $(this).val();
                var slug = name.toLowerCase().replace(/[^a-z0-9-]/g, '-').replace(/-+/g, '-');
                $('#slug').val(slug);
            });
        });
    </script>
@endsection
@endsection
