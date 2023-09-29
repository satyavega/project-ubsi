<footer class="footer flex flex-col text-white p-5 mt-10 bg-slate-900">
    <div class="flex flex-row gap-20 border-b w-full pb-5 border-gray-600 max-lg:flex-col max-lg:gap-10">
        @foreach ($logos as $logo)
            <a class="flex items-center gap-5" href="/"><img class="rounded w-20"
                    src="{{ asset('storage/' . $logo->image) }}" alt="logo BEM BSI" title="logo BEM BSI">
                <span class="flex text-2xl flex-col items-center">BEM UBSI Sukabumi</span>
            </a>
        @endforeach
        <div class="flex flex-col gap-5">
            <div class="flex flex-col gap-3">
                <h1 class="text-2xl font-semibold">Alamat</h1>
                <div class="w-80 h-[2px] bg-cyan-900 max-sm:w-1/2"></div>
            </div>
            <div class="flex flex-row gap-5 max-md:flex-col">
                <div class="flex flex-col gap-2">
                    <h3 class="text-xl font-semibold">UBSI Sukabumi</h3>
                    <p class="text-base">Jl. Raya Cemerlang No.8, Sukakarya, Kec. Warudoyong, Kota Sukabumi, Jawa Barat
                        43135
                    </p>
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="text-xl font-semibold">UBSI Sukabumi Kampus B</h3>
                    <p class="text-base">Jl. Veteran II No.20A, Selabatu, Kec. Cikole, Kota Sukabumi, Jawa Barat 43114
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="px-5 w-full">
        <div class="flex flex-col gap-3">
            <h1 class="text-3xl font-semibold">Follow us!</h1>
            <ul class="text-base font-normal flex gap-3">
                <li><a target="_blank" class="hover:text-cyan-400 transition-all duration-500 ease-in-out"
                        href="https://www.instagram.com/bemubsisukabumi/"><i class="fa-brands fa-instagram fa-xl"></i>
                    </a>
                </li>
                <li><a target="_blank" class="hover:text-cyan-400 transition-all duration-500 ease-in-out"
                        href="https://m.facebook.com/profile.php/?id=100067185642359"><i
                            class="fa-brands fa-facebook fa-xl"></i></a>
                </li>
                <li><a target="_blank" class="hover:text-cyan-400 transition-all duration-500 ease-in-out"
                        href="https://twitter.com/ubsi_sukabumi"><i class="fa-brands fa-x-twitter fa-xl"></i></a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<div class="footer text-white font-thin p-5 bg-slate-950 w-full">
    <p>&#169; UNIVERSITAS BINA SARANA INFORMATIKA</p>
</div>
