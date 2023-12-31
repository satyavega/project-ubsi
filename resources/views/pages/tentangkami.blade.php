@extends('layouts.main')
@section('container')
    <section class="min-h-[60vh] md:min-h-screen flex flex-col">
        <div class="flex flex-col gap-5 ">
            <div class="flex gap-3 flex-col pt-20">
                <div class="flex items-center gap-4">
                    <h1 class="text-black text-5xl max-sm:text-3xl max-md:text-4xl font-bold">Tentang BEM Akusaraabhinaya
                    </h1>
                    <div class="w-20 h-[2px] mt-3 bg-cyan-500 lg:w-36 md:w-28 max-lg:hidden"></div>
                </div>
                <p class="text-cyan-500 text-base font-normal"><a class="text-slate-700" href="/">Beranda</a> > <span
                        class="text-black">{{ Str::title($title) }}</span></p>
            </div>
            <p class="sm:text-xl leading-snug text-gray-500 font-normal">Lorem ipsum dolor sit amet consectetur
                adipisicing elit.
                Perferendis
                facere esse
                tenetur commodi, velit quo
                aspernatur repudiandae eos, maiores optio numquam alias omnis? Mollitia, suscipit pariatur molestiae minus
                nostrum facilis.</p>
        </div>
        {{-- Visi & Misi --}}
        <div class="pt-44 flex flex-col gap-52 justify-center items-center px-4 my-16 md:my-32">
            <div>
                <div class="block h-0 -z-50">
                    <div class="text-white text-[200px] max-lg:right-[40%] sm:text-[150px] md:text-[240px] xl:text-[250px] 2xl:text-[280px] font-bold relative leading-[128px] md:leading-[220px] 2xl:leading-[250px] right-[15%] -top-[100px] md:-top-[150px] 2xl:-top-44 opacity-30"
                        style="text-shadow:
                    1px 1px 0 #06B6D4,
                    -1px -1px 0 #06B6D4,
                    1px -1px 0 #06B6D4,
                    -1px 1px 0 #06B6D4,
                    1px 1px 0 #06B6D4;">
                        Visi</div>
                </div>
                <div class="flex gap-5 lg:gap-10 lg:flex-row-reverse flex-col">
                    <div class="flex items-center gap-3 justify-end">
                        <div class="hidden sm:block w-32 h-[2px] mt-5 bg-cyan-500"></div>
                        <h1 class="text-5xl md:text-8xl font-extrabold font-sans md:leading-[4rem] max-sm:pr-5 text-black">
                            Visi
                        </h1>
                    </div>
                    <p class="text-sm max-sm:pl-5 leading-relaxed font-medium z-10 text-shadow-lg shadow-slate-400">
                        Mewujudkan BEM UBSI Kota Sukabumi sebagai organisasi "SIIAP" (Solutif, Inovatif, Inspiratif,
                        Aspiratif,
                        Progresif) serta bersinergi dalam peningkatan kualitas mahasiswa
                    </p>
                </div>
            </div>
            <div>
                <div class="block h-0 -z-50">
                    <div class="text-white text-[200px] max-lg:right-[-50%] max-md:right-[-75%] max-sm:right-[-40%] sm:text-[150px] md:text-[240px] xl:text-[250px] 2xl:text-[280px] font-bold relative leading-[128px] md:leading-[220px] 2xl:leading-[250px] right-[-75%] -top-[100px] md:-top-[150px] 2xl:-top-44 opacity-30"
                        style="text-shadow:
                1px 1px 0 #06B6D4,
                -1px -1px 0 #06B6D4,
                1px -1px 0 #06B6D4,
                -1px 1px 0 #06B6D4,
                1px 1px 0 #06B6D4;">
                        Misi</div>
                </div>
                <div class="flex lg:gap-10 gap-5 flex-col lg:flex-row">
                    <div>
                        <div class="flex items-center gap-3">
                            <h1
                                class="text-5xl md:text-8xl font-extrabold font-sans md:leading-[4rem] max-sm:pl-12 text-black">
                                Misi</h1>
                            <div class="hidden sm:block w-32 h-[2px] mt-5 bg-cyan-500"></div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 z-10 max-sm:px-12">
                        <p class="text-sm font-medium leading-snug text-shadow-lg shadow-slate-400">
                            1. Menjadikan BEM sebagai mediator universitas dan mahasiswa dalam berkomunikasi dan berdiskusi,
                            juga menampung aspirasi mahasiswa.
                        </p>
                        <p class="text-sm font-medium leading-snug text-shadow-lg shadow-slate-400">
                            2. Menjalin komunikasi yang harmonis dengan ORMAWA secara internal maupun eksternal guna
                            mewujudkan visi misi BEM dan juga visi misi ORMAWA.
                        </p>
                        <p class="text-sm font-medium leading-snug text-shadow-lg shadow-slate-400">
                            3. Memberikan wadah dalam mengembangkan kualitas minat dan bakat mahasiswa.
                        </p>
                        <p class="text-sm font-medium leading-snug text-shadow-lg shadow-slate-400">
                            4. Mengamalkan tri darma perguruan tinggi.
                        </p>
                    </div>
                </div>
            </div>
            <div class="my-10" id="struktur-organisasi">
                <img class="shadow-2xl w-full min-h-[500px] py-10 box-border rounded-xl overflow-hidden"
                    src="images/Struktur-Organisasi-BEM-UBSI-Sukabumi.png" alt="Struktur Organisasi BEM UBSI Sukabumi">
                <title>Struktur Organisasi BEM UBSI Sukabumi</title>
            </div>
    </section>
@endsection
