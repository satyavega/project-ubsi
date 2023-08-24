@extends('layouts.dashboard')
@include('layouts.sidebar')
@section('container')
    @include('layouts.headbar')
@section('secContainer')
    <main class="flex-1 overflow-x-hidden px-10 overflow-y-auto bg-gray-200 min-h-screen">
        <div class="container mx-auto py-8">
            @if (session()->has('success'))
                <div id="alert-container"
                    class="transition-opacity mr-5 flex items-center gap-5 duration-500 w-fit right-0 bg-blue-100 border border-blue-400 p-4 text-blue-700 rounded absolute"
                    role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                    <span class="top-0 bottom-0 right-0">
                        <svg onClick="document.getElementById('alert-container').style.display = 'none'"
                            class="fill-current h-6 w-6 text-blue-500" role="button" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <title>Close</title>
                            <path
                                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                        </svg>
                    </span>
                </div>
                <script>
                    setTimeout(function() {
                        const alertContainer = document.querySelector('#alert-container');
                        alertContainer.classList.add('opacity-0');
                        setTimeout(function() {
                            alertContainer.remove();
                        }, 500);
                    }, 3000);
                </script>
            @endif
            <h3 class="text-gray-700 text-3xl font-medium">My Posts!</h3>
            {{-- @include('dashboard.partials.card') --}}
        </div>
        <a href="/dashboard/posts/create"
            class="btn hover:bg-blue-800 bg-blue-500 mb-5 px-4 rounded-lg active:border-2 border-blue-800 border-opacity-70 text-white text-lg">Create
            new
            post</a>
        @include('partials.tablePost')
    </main>
@endsection
@endsection
