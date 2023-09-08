    {{-- <div
        class="navbar px-10 h-max p-3 bg-transparent text-white top-0 z-30 bg-slate-900 transition duration-300 ease-in-out">
        <div class="flex-1">
            <div class="dropdown mr-10">
                <label tabindex="0" class="btn btn-ghost btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </label>
                <ul class="bg-slate-700 menu dropdown-content mt-3 z-[1] p-2 shadow rounded-box w-52">
                    <li><a href="" class="hover:text-blue-500">Homepage</a></li>
                    <li><a href="" class="hover:text-blue-500">Portfolio</a></li>
                    <li><a href="" class="hover:text-blue-500">About</a></li>
                </ul>
            </div>
            <a href="" class="flex items-center gap-5">
                <img class="rounded" src="images/UBSI_logos.svg" style="width: 80px" alt="">
                <span class="flex text-2xl flex-col items-center">UNIVERSITAS <span class="text-sm">BINA SARANA
                        INFORMATIKA
                    </span></span>
            </a>
        </div>
        <div class="flex gap-5">
            <svg id="search-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hover:cursor-pointer mr-5">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
            <input id="search-input" type="text" placeholder="Search"
                class="input bg-transparent border mr-5 border-gray-300 input-bordered w-24 md:w-auto"
                style="display: none;" />
            <script>
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

                var navbar = document.querySelector('.navbar');
                var originalPosition = 'absolute';
                var isSticky = false;

                window.addEventListener('scroll', function() {
                    if (window.pageYOffset > 5) {
                        navbar.classList.remove('bg-transparent', 'absolute');
                        navbar.classList.add('bg-slate-900', 'border-b', 'border-cyan-400', 'sticky');
                    } else {
                        navbar.classList.add('bg-transparent', 'absolute');
                        navbar.classList.remove('bg-slate-900', 'border-b', 'border-cyan-400', 'sticky');
                    }
                });
                window.addEventListener('scroll', function() {
                    if (window.pageYOffset > 0 && !isSticky) {
                        originalPosition = navbar.style.position;
                        navbar.style.position = 'sticky';
                        navbar.style.top = '0';
                        isSticky = true;
                    } else if (window.pageYOffset === 0 && isSticky) {
                        navbar.style.position = originalPosition;
                        isSticky = false;
                    }
                });
            </script>



        </div>
        <ul class="flex items-center text-xl">
            <li><a class="hover:text-gray-300 hover:bg-slate-800 rounded px-3 py-2 flex gap-[2px] flex-row"
                    href="/login">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-8">
                        <title>Login</title>
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                    </svg>
                </a></li>
        </ul>
    </div>
    </div>
    </div> --}}

    <nav class="navbar nav flex justify-around sticky top-0 bg-white/75 backdrop-blur-lg z-50">
        <div>
            <a href="/"><img class="rounded w-14" src="images/UBSI_logos.svg" alt="logo BEM BSI"
                    title="logo BEM BSI"></a>
        </div>
        <ul class="flex gap-5 text-base">
            <li><a class="hover:text-blue-500 transition-all duration-300 ease-in-out {{ $title === 'Home' ? 'font-bold text-blue-500' : 'text-gray-400' }}"
                    href="/">Home</a></li>
            <li><a class="hover:text-blue-500  transition-all duration-300 ease-in-out {{ request()->segment(1) === 'tentang-kami' ? 'font-bold text-blue-500' : 'text-gray-400' }}"
                    href="tentang-kami">Tentang Kami</a></li>
            <li><a class="hover:text-blue-500 transition-all duration-300 ease-in-out {{ request()->segment(1) === 'pengurus' ? 'font-bold' : 'text-gray-400' }}"
                    href="pengurus">Pengurus</a></li>
            <li><a class="hover:text-blue-500 transition-all duration-300 ease-in-out {{ request()->segment(1) === 'kementrian' ? 'font-bold' : 'text-gray-400' }}"
                    href="kementrian">Kementrian</a></li>
            <li><a class="hover:text-blue-500 transition-all duration-300 ease-in-out {{ request()->segment(1) === 'artikel' ? 'font-bold' : 'text-gray-400' }}"
                    href="artikel">Artikel</a></li>
            <li>
                {{-- <a class="hover:text-blue-500 transition-all duration-300 ease-in-out  {{ request()->segment(1) === 'belum ada nih dik' ? 'bg-blue-700 text-white p-3 rounded-lg' : 'text-gray-400' }}"
                    href="">Fitur</a> --}}
                <div class="dropdown dropdown-hover">
                    <label tabindex="0"
                        class="hover:cursor-pointer flex gap-2 hover:text-blue-500 transition-all duration-300 ease-in-out {{ request()->segment(1) === 'artikel' ? 'font-bold' : 'text-gray-400' }}">Lainnya
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </label>
                    <ul tabindex="0"
                        class="dropdown-content z-[1] menu p-2 shadow rounded-box min-w-fit border bg-white backdrop-blur-lg">
                        <li><a class="hover:text-blue-500 text-gray-400 hover:bg-gray-200" href="kritik-saran">Kritik &
                                Saran</a>
                        </li>
                        <li><a class="hover:text-blue-500 text-gray-400 hover:bg-gray-200" href="/">Item 2</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <ul class="flex items-center text-xl">
            <li><a class="hover:text-gray-300 transition-all duration-300 ease-in-out hover:bg-blue-600 rounded px-3 py-2 flex gap-[2px] flex-row"
                    href="/login">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-8">
                        <title>Login</title>
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                    </svg>
                </a></li>
        </ul>
    </nav>
