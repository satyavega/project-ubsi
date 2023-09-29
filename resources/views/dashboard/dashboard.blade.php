@extends('layouts.dashboard')
@include('layouts.sidebar')
@section('container')
    @include('layouts.headbar')
@section('secContainer')
    <div class="px-10">
        <h1 class="font-medium">Welcome Back, <span class="font-bold">{{ Str::title(Auth::user()->username) }}</span>!</h1>
        <div class="grid grid-cols-3 gap-5 text-white py-10">
            <div class="bg-slate-900 p-5">
                <div class="flex items-center justify-between">
                    <span>
                        <h1>Artikel</h1>
                        <p class="text-gray-300">Total Artikel : <span class="font-bold">{{ $totalPosts }}</span></p>
                    </span>

                    <i class="fa-regular fa-newspaper fa-2xl"></i>
                </div>
            </div>
            @if (auth()->user() && auth()->user()->role === 'admin')
                <div class="bg-[#00A39E] p-5">
                    <div class="flex items-center justify-between">
                        <span>
                            <h1>User</h1>
                            <p class="text-gray-300">Total User : <span class="font-bold">{{ $totalUsers }}</span></p>
                        </span>

                        <i class="fa-regular fa-user fa-2xl"></i>
                    </div>
                </div>
                {{-- <div class="bg-[#00A39E] p-5">Total Mantan</div> --}}
            @endif
        </div>
    </div>
@endsection
@endsection
