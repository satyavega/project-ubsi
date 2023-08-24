    <div class="navbar px-10 h-max p-3 sticky text-white top-0 z-30 bg-slate-900 transition duration-300 ease-in-out">
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
            <a href="/" class="flex items-center gap-5">
                <img class="rounded" src="images/UBSI_logos.svg" style="width: 80px" alt="">
                <span class="flex text-2xl flex-col items-center">UNIVERSITAS <span class="text-sm">BINA SARANA
                        INFORMATIKA
                    </span></span>
            </a>
        </div>
        <div class="flex items-center sm:gap-1 gap-5">
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
            </script>
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
    </div>
    </div>
