    <nav
        class=" shadow-md navbar nav flex sticky top-0 bg-white/75 backdrop-blur-lg z-50 justify-around max-md:justify-between max-md:px-10">
        <div>
            <a href="/"><img class="rounded w-14" src="images/logos/logo-BEM-UBSI-Sukabumi.png" alt="logo BEM BSI"
                    title="logo BEM BSI"></a>
        </div>
        <div
            class=" nav-links hidden absolute md:static md:min-h-fit md:w-fit items-start min-h-screen md:flex w-screen top-[72px] left-0">
            <ul class="flex max-md:pl-10 gap-5 md:text-base text-xl md:flex-row flex-col">
                <li><a class="hover:text-blue-500 transition-all duration-300 ease-in-out {{ $title === 'Home' ? 'font-bold text-blue-500' : 'text-gray-400' }}"
                        href="/">Home</a></li>
                <li><a class="hover:text-blue-500  transition-all duration-300 ease-in-out {{ request()->segment(1) === 'tentang-kami' ? 'font-bold text-blue-500' : 'text-gray-400' }}"
                        href="tentang-kami">Tentang Kami</a></li>
                <li><a class="hover:text-blue-500 transition-all duration-300 ease-in-out {{ request()->segment(1) === 'pengurus' ? 'font-bold text-blue-500' : 'text-gray-400' }}"
                        href="pengurus">Pengurus</a></li>
                <li><a class="hover:text-blue-500 transition-all duration-300 ease-in-out {{ request()->segment(1) === 'kementrian' ? 'font-bold text-blue-500' : 'text-gray-400' }}"
                        href="kementrian">Kementrian</a></li>
                <li><a class="hover:text-blue-500 transition-all duration-300 ease-in-out {{ request()->segment(1) === 'artikel' ? 'font-bold text-blue-500' : 'text-gray-400' }}"
                        href="artikel">Artikel</a></li>
                <li class="md:hidden"><a class="hover:text-blue-500 text-gray-400 hover:bg-gray-200"
                        href="kritik-saran">Kritik
                        &
                        Saran</a>
                </li>
                <li class="md:hidden"><a class="hover:text-blue-500 text-gray-400 hover:bg-gray-200" href="/">Item
                        2</a>
                </li>
                <li class="md:hidden  bg-blue-500 px-3 py-1 transition-all duration-300 ease-in-out rounded w-fit"><a
                        class="text-gray-50 flex gap-[2px] flex-row" href="/login">Login
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-8">
                            <title>Login</title>
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                        </svg>
                    </a></li>
                <li>
                    {{-- <a class="hover:text-blue-500 transition-all duration-300 ease-in-out  {{ request()->segment(1) === 'belum ada nih dik' ? 'bg-blue-700 text-white p-3 rounded-lg' : 'text-gray-400' }}"
                    href="">Fitur</a> --}}
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
                            <li><a class="hover:text-blue-500 text-gray-400 hover:bg-gray-200"
                                    href="kritik-saran">Kritik &
                                    Saran</a>
                            </li>
                            <li><a class="hover:text-blue-500 text-gray-400 hover:bg-gray-200" href="/">Item 2</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <ul class="flex items-center text-xl max-md:hidden">
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
        <button class="hidden max-md:block">
            <x-heroicon-m-bars-3-bottom-right class="w-6 h-7 cursor-pointer md:hidden burger" name="menu"
                onclick="onToggleMenu()" />
            <x-heroicon-o-x-mark onclick="onToggleMenu()" class="w-6 h-7 cursor-pointer close hidden" />
        </button>
    </nav>

    <script>
        const burger = document.querySelector('.burger')
        const close = document.querySelector('.close')
        const navLinks = document.querySelector('.nav-links');

        function onToggleMenu() {
            // const burgerIcon = document.querySelector('x-heroicon-m-menu');
            // const xIcon = document.querySelector('x-heroicon-o-x');

            // burgerIcon.classList.toggle('hidden');
            // xIcon.classList.toggle('hidden');
            // navLinks.classList.toggle('top-[72px]');
            burger.classList.toggle('hidden')
            close.classList.toggle('hidden')
            navLinks.classList.toggle('hidden')
        }
    </script>
