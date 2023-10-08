<div class="w-full flex flex-col">
    <header class="flex justify-between w-full items-center py-4 px-6 bg-white border-b-4 border-indigo-600">
        <div class="flex items-center">
            <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </svg>
            </button>

            <div class="relative mx-4 lg:mx-0">
                <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                    {{-- <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg> --}}
                </span>

                {{-- <input class="form-input w-32 sm:w-64 rounded-md pl-10 pr-4 focus:border-indigo-600" type="text"
                    placeholder="Search"> --}}
            </div>
        </div>
        <div class="dropdown dropdown-end">
            {{-- <label tabindex="0" class="btn m-1">Click</label> --}}
            <button
                class="relative block h-8 w-8 border-2 border-blue-400 rounded-full overflow-hidden shadow focus:outline-none">
                <img class="h-full w-full object-cover" src="images/profile/profile.png" alt="Your avatar">
            </button>
            <ul tabindex="0" class="dropdown-content z-[1] menu p-2 rounded-box w-52 shadow-xl bg-gray-50 border">
                <li class="border-b"><a>Hi, {{ Str::title(Auth::user()->username) }}!</a></li>
                <div class="pt-4">
                    <li><a href="/profile"
                            class="text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100">Profile</a>
                    </li>
                    <li><a href="/"
                            class="text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100">Home</a>
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

</div>
</header>
