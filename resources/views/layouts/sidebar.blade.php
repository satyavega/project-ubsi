<div class="">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <div x-data="{ sidebarOpen: false }" class="flex min-h-screen bg-gray-200">
        <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
            class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>

        <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
            class="fixed z-30 inset-y-0 left-0 w-72 transition duration-300 transform bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
            <div class="flex items-center justify-center mt-8">
                <div class="flex items-center">
                    <a class="flex items-center" href="/dashboard">
                        {{-- <svg class="h-12 w-12" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M364.61 390.213C304.625 450.196 207.37 450.196 147.386 390.213C117.394 360.22 102.398 320.911 102.398 281.6C102.398 242.291 117.394 202.981 147.386 172.989C147.386 230.4 153.6 281.6 230.4 307.2C230.4 256 256 102.4 294.4 76.7999C320 128 334.618 142.997 364.608 172.989C394.601 202.981 409.597 242.291 409.597 281.6C409.597 320.911 394.601 360.22 364.61 390.213Z"
                                fill="#4C51BF" stroke="#4C51BF" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path
                                d="M201.694 387.105C231.686 417.098 280.312 417.098 310.305 387.105C325.301 372.109 332.8 352.456 332.8 332.8C332.8 313.144 325.301 293.491 310.305 278.495C295.309 263.498 288 256 275.2 230.4C256 243.2 243.201 320 243.201 345.6C201.694 345.6 179.2 332.8 179.2 332.8C179.2 352.456 186.698 372.109 201.694 387.105Z"
                                fill="white"></path>
                        </svg> --}}
                        @foreach ($logos as $logo)
                            <a href="/"><img class="rounded w-14" src="{{ asset('storage/' . $logo->image) }}"
                                    alt="logo BEM BSI" title="logo BEM BSI"></a>
                        @endforeach

                        <span class="text-white text-2xl mx-2 font-semibold">Dashboard</span>
                    </a>
                </div>
            </div>
            <div class="flex gap-5 flex-col">
                <ul class="mt-3 flex flex-col gap-3">
                    <li>
                        <a class="flex items-center px-6 py-3 hover:bg-gray-700 hover:text-gray-100
                {{ Request::is('dashboard') ? 'bg-gray-700 text-gray-100' : 'text-gray-500' }}"
                            href="/dashboard">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                            </svg>

                            <span class="mx-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex {{ Request::is('dashboard/posts*') ? 'bg-gray-700 text-gray-100' : 'text-gray-500' }} items-center px-6 py-3 hover:bg-gray-700 hover:text-gray-100"
                            href="/dashboard/posts">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                </path>
                            </svg>

                            <span class="mx-3">My Posts</span>
                        </a>
                    </li>
                </ul>
                @if (auth()->user() && auth()->user()->role === 'admin')
                    <div>
                        <h6 class="uppercase px-6 text-gray-400">Administrator</h6>
                        <ul class="mt-3 gap-3 flex flex-col">
                            <li>
                                <a class="flex items-center px-6 py-3 hover:bg-gray-700 hover:text-gray-100
                            {{ Request::is('dashboard/categories*') ? 'bg-gray-700 text-gray-100' : 'text-gray-500' }}"
                                    href="/dashboard/categories">
                                    <x-feathericon-grid />
                                    <span class="mx-3">Post Categories</span>
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center px-6 py-3 hover:bg-gray-700 hover:text-gray-100
                            {{ Request::is('dashboard/logos*') ? 'bg-gray-700 text-gray-100' : 'text-gray-500' }}"
                                    href="/dashboard/logos">
                                    <x-feathericon-grid />
                                    <span class="mx-3">Post Logos</span>
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center px-6 py-3 hover:bg-gray-700 hover:text-gray-100
                            {{ Request::is('dashboard/users*') ? 'bg-gray-700 text-gray-100' : 'text-gray-500' }}"
                                    href="/dashboard/users">
                                    <x-feathericon-user />

                                    <span class="mx-3">Users</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                @endif
            </div>
        </div>
