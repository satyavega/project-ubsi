    <nav
        class="shadow-md navbar nav flex sticky top-0 bg-white/75 backdrop-blur-lg z-50 justify-around max-md:justify-between max-md:px-10">
        <div>
            @foreach ($logos as $logo)
                <a href="/"><img class="rounded w-14" src="{{ asset('storage/' . $logo->image) }}" alt="logo BEM BSI"
                        title="logo BEM BSI"></a>
            @endforeach
        </div>
        <div
            class="max-md:bg-white/75 max-md:backdrop-blur-lg nav-links hidden absolute md:static md:min-h-fit md:w-fit items-start min-h-screen md:flex w-screen top-[60px] left-0 z-50">
            <ul class="flex max-md:pl-10 gap-5 md:text-base text-md md:flex-row flex-col">
                <li><a class="hover:text-blue-500 transition-all duration-300 ease-in-out {{ $title === 'Home' ? 'font-bold text-blue-500' : 'text-gray-400' }}"
                        href="/">Home</a></li>
                <li><a class="hover:text-blue-500  transition-all duration-300 ease-in-out {{ request()->segment(1) === 'tentang-kami' ? 'font-bold text-blue-500' : 'text-gray-400' }}"
                        href="/tentang-kami">Tentang Kami</a></li>
                <li><a class="hover:text-blue-500 transition-all duration-300 ease-in-out {{ request()->segment(1) === 'pengurus' ? 'font-bold text-blue-500' : 'text-gray-400' }}"
                        href="/pengurus">Pengurus</a></li>
                <li><a class="hover:text-blue-500 transition-all duration-300 ease-in-out {{ request()->segment(1) === 'kementrian' ? 'font-bold text-blue-500' : 'text-gray-400' }}"
                        href="/kementrian">Kementrian</a></li>
                <li><a class="hover:text-blue-500 transition-all duration-300 ease-in-out {{ request()->segment(1) === 'news' ? 'font-bold text-blue-500' : 'text-gray-400' }}"
                        href="/news">News</a></li>
                <li class="md:hidden"><a class="hover:text-blue-500 text-gray-400 hover:bg-gray-200"
                        href="/kritik-saran">Item 2</a>
                </li>
                <li class="md:hidden"><a class="hover:text-blue-500 text-gray-400 hover:bg-gray-200" href="/">Item
                        2</a>
                </li>
                <li class="md:hidden transition-all duration-300 ease-in-out w-fit">
                    <button class="text-gray-50 flex gap-[2px] flex-row">
                        <i class="fa-solid fa-magnifying-glass fa-xl text-cyan-500 hover:text-cyan-700">
                            {{-- <title>Seacrh</title> --}}
                        </i><span>Cari</span>
                    </button>
                </li>
                <li>
                    <div class="max-md:hidden dropdown dropdown-hover">
                        <label tabindex="0"
                            class="hover:cursor-pointer flex gap-2 hover:text-blue-500 transition-all duration-300 ease-in-out text-gray-400">Lainnya
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-7">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </label>
                        <ul tabindex="0"
                            class="dropdown-content z-[1] menu p-2 shadow rounded-box min-w-fit border bg-white backdrop-blur-lg">
                            <li><a class="hover:text-blue-500 text-gray-400 hover:bg-gray-200" href="/kritik-saran">Item
                                    1</a>
                            </li>
                            <li><a class="hover:text-blue-500 text-gray-400 hover:bg-gray-200" href="/">Item 2</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>

                </li>
            </ul>
        </div>

        <div class="flex items-center sm:gap-1 gap-5">
            <button>
                <i id="search-icon"
                    class="fa-solid fa-magnifying-glass fa-xl hidden lg:block text-cyan-500 hover:text-cyan-700"></i>
            </button>
            <form method="GET">
                <input id="search-input" type="text" name="cari" placeholder="Search"
                    class="input bg-transparent border mr-5 border-gray-300 input-bordered w-24 md:w-auto"
                    style="display: none;" value="{{ $cari }}">
            </form>
        </div>

        <button class="hidden max-md:block">
            <x-heroicon-m-bars-3-bottom-right class="w-6 h-7 cursor-pointer md:hidden burger" name="menu"
                onclick="onToggleMenu()" />
            <x-heroicon-o-x-mark onclick="onToggleMenu()" class="w-6 h-7 cursor-pointer close hidden" />
        </button>
        @if (auth()->check())
            <div class="dropdown dropdown-end">
                {{-- <label tabindex="0" class="btn m-1">Click</label> --}}
                <button
                    class="relative block h-8 w-8 border-2 border-blue-400 rounded-full overflow-hidden shadow focus:outline-none">
                    <img class="h-full w-full object-cover" src="images/profile/profile.png" alt="Your avatar">
                </button>
                <ul tabindex="0" class="dropdown-content z-[1] menu p-2 rounded-box w-52 shadow-xl bg-gray-50 border">
                    <li class="border-b"><a>Hi, {{ Str::title(Auth::user()->username) }}!</a></li>
                    <div class="pt-4">
                        <li><a href="/dashboard"
                                class="text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100">Dashboard</a>
                        </li>
                        <li>
                            <form class="text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                action="/logout" method="post">
                                @csrf
                                <button class="flex gap-2" type="submit">Logout <svg xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                    </svg>
                                </button>
                            </form>
                        </li>
                    </div>
                </ul>
            </div>
        @endif
    </nav>
    <script>
        const burger = document.querySelector('.burger')
        const close = document.querySelector('.close')
        const navLinks = document.querySelector('.nav-links');

        function onToggleMenu() {
            burger.classList.toggle('hidden')
            close.classList.toggle('hidden')
            navLinks.classList.toggle('hidden')
        }
        var searchIcon = document.getElementById('search-icon');
        var searchInput = document.getElementById('search-input');

        searchIcon.addEventListener('mouseenter', function() {
            searchIcon.style.display = 'none';
            searchInput.style.display = 'inline-block';
            searchInput.focus();
        });

        searchInput.addEventListener('focus', function() {
            searchIcon.style.display = 'none';
            searchInput.style.display = 'inline-block';
        });

        searchInput.addEventListener('blur', function() {
            if (searchInput.value === '') {
                searchIcon.style.display = 'inline-block';
                searchInput.style.display = 'none';
            }
        });

        searchInput.addEventListener('mouseleave', function() {
            if (searchInput.value === '') {
                searchIcon.style.display = 'inline-block';
                searchInput.style.display = 'none';
            }
        });
    </script>
