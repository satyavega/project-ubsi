@extends('layouts.main')
@section('container')
    <section class="min-h-[60vh] md:min-h-screen flex flex-col">
        <div class="flex pt-20 flex-col gap-3 mb-20">
            <div class="flex items-center gap-4">
                <h1 class="text-black lg:text-5xl text-3xl font-bold">Kementrian BEM Akusaraabhinaya</h1>
                <div class="lg:block hidden w-20 h-[2px] mt-3 xl:w-60 bg-cyan-500 max-lg:w-36 max-md:w-screen"></div>
            </div>
            <p class="text-cyan-500 text-base font-normal"><a class="text-slate-700" href="/">Beranda</a> > <span
                    class="text-black">{{ Str::title($title) }}</span></p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 gap-y-6 mb-20">
            <a class="group transition-all ease-in-out duration-500 bg-gray-50 hover:bg-gray-300 rounded-lg h-14 flex flex-row overflow-hidden items-center w-full"
                href="kementrian/sekretaris">
                <div
                    class="bg-cyan-500 p-4 rounded-md items-center justify-center transition-all ease-in-out duration-500 group-hover:bg-cyan-600">
                    <i
                        class="fa-solid fa-file-pen text-white fa-2xl transition-all ease-in-out duration-500 group-hover:text-gray-200"></i>
                </div>
                <p
                    class="flex-auto text-base px-4 group-hover:translate-x-1 leading-4 transition-all ease-in-out duration-500">
                    Sekretaris</p>
                <i
                    class="fa-solid fa-arrow-right px-3 group-hover:translate-x-1 transition-all ease-in-out duration-500"></i>
            </a>
            <a class="group transition-all ease-in-out duration-500 bg-gray-50 hover:bg-gray-300 rounded-lg h-14 flex flex-row overflow-hidden items-center w-full"
                href="">
                <div
                    class="bg-cyan-500 p-4 rounded-md items-center justify-center transition-all ease-in-out duration-500 group-hover:bg-cyan-600">
                    <i
                        class="fa-solid fa-money-bill-transfer text-white fa-2xl transition-all ease-in-out duration-500 group-hover:text-gray-200"></i>
                </div>
                <p
                    class="flex-auto text-base px-4 group-hover:translate-x-1 leading-4 transition-all ease-in-out duration-500">
                    Bendahara</p>
                <i
                    class="fa-solid fa-arrow-right px-3 group-hover:translate-x-1 transition-all ease-in-out duration-500"></i>
            </a>
        </div>
        {{-- Dalam Negeri --}}
        <div class="mb-20">
            <div class="text-2xl font-bold mb-8 text-zinc-800">Kementrian <span class="text-cyan-500">Dalam Negeri</span>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 gap-y-6">
                <a class="group transition-all ease-in-out duration-500 bg-gray-50 hover:bg-gray-300 rounded-lg h-14 flex flex-row overflow-hidden items-center w-full"
                    href="kementrian/divisi-advokasi-dan-kajian">
                    <div
                        class="bg-cyan-500 p-4 rounded-md items-center justify-center transition-all ease-in-out duration-500 group-hover:bg-cyan-600">
                        <i
                            class="fa-solid fa-scale-balanced text-white fa-2xl transition-all ease-in-out duration-500 group-hover:text-gray-200"></i>
                    </div>
                    <p
                        class="flex-auto text-base px-4 group-hover:translate-x-1 leading-4 transition-all ease-in-out duration-500">
                        Divisi Advokasi dan Kajian</p>
                    <i
                        class="fa-solid fa-arrow-right px-3 group-hover:translate-x-1 transition-all ease-in-out duration-500"></i>
                </a>
                <a class="group transition-all ease-in-out duration-500 bg-gray-50 hover:bg-gray-300 rounded-lg h-14 flex flex-row overflow-hidden items-center w-full"
                    href="kementrian/divisi-pendidikan-dan-keagamaan">
                    <div
                        class="bg-cyan-500 p-4 rounded-md items-center justify-center transition-all ease-in-out duration-500 group-hover:bg-cyan-600">
                        <i
                            class="fa-solid fa-book-bookmark text-white fa-2xl transition-all ease-in-out duration-500 group-hover:text-gray-200"></i>
                    </div>
                    <p
                        class="flex-auto text-base px-4 group-hover:translate-x-1 leading-4 transition-all ease-in-out duration-500">
                        Divisi Pendidikan Dan Keagamaan</p>
                    <i
                        class="fa-solid fa-arrow-right px-3 group-hover:translate-x-1 transition-all ease-in-out duration-500"></i>
                </a>
            </div>
        </div>
        {{-- Luar Negeri --}}
        <div class="mb-20">
            <div class="text-2xl font-bold mb-8 text-zinc-800">Kementrian <span class="text-cyan-500">Luar Negeri</span>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 gap-y-6">
                <a class="group transition-all ease-in-out duration-500 bg-gray-50 hover:bg-gray-300 rounded-lg h-14 flex flex-row overflow-hidden items-center w-full"
                    href="kementrian/divisi-advokasi-dan-kajian">
                    <div
                        class="bg-cyan-500 p-4 rounded-md items-center justify-center transition-all ease-in-out duration-500 group-hover:bg-cyan-600">
                        <i
                            class="fa-solid fa-handshake text-white fa-2xl transition-all ease-in-out duration-500 group-hover:text-gray-200"></i>
                    </div>
                    <p
                        class="flex-auto text-base px-4 group-hover:translate-x-1 leading-4 transition-all ease-in-out duration-500">
                        Divisi Hubungan External</p>
                    <i
                        class="fa-solid fa-arrow-right px-3 group-hover:translate-x-1 transition-all ease-in-out duration-500"></i>
                </a>
                <a class="group transition-all ease-in-out duration-500 bg-gray-50 hover:bg-gray-300 rounded-lg h-14 flex flex-row overflow-hidden items-center w-full"
                    href="kementrian/divisi-pendidikan-dan-keagamaan">
                    <div
                        class="bg-cyan-500 p-4 rounded-md items-center justify-center transition-all ease-in-out duration-500 group-hover:bg-cyan-600">
                        <i
                            class="fa-solid fa-book text-white fa-2xl transition-all ease-in-out duration-500 group-hover:text-gray-200"></i>
                    </div>
                    <p
                        class="flex-auto text-base px-4 group-hover:translate-x-1 leading-4 transition-all ease-in-out duration-500">
                        Divisi Kajian Dan Aksi</p>
                    <i
                        class="fa-solid fa-arrow-right px-3 group-hover:translate-x-1 transition-all ease-in-out duration-500"></i>
                </a>
            </div>
        </div>
        {{-- Kementrian Pengembangan Sumber Daya Mahasiswa (PDSM) --}}
        <div class="mb-20">
            <div class="text-2xl font-bold mb-8 text-zinc-800">Kementrian <span class="text-cyan-500">Pengembangan Sumber
                    Daya
                    Mahasiswa (PSDM)</span>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 gap-y-6">
                <a class="group transition-all ease-in-out duration-500 bg-gray-50 hover:bg-gray-300 rounded-lg h-14 flex flex-row overflow-hidden items-center w-full"
                    href="kementrian/divisi-advokasi-dan-kajian">
                    <div
                        class="bg-cyan-500 p-4 rounded-md items-center justify-center transition-all ease-in-out duration-500 group-hover:bg-cyan-600">
                        <i
                            class="fa-solid fa-building-columns text-white fa-2xl transition-all ease-in-out duration-500 group-hover:text-gray-200"></i>
                    </div>
                    <p
                        class="flex-auto text-base px-4 group-hover:translate-x-1 leading-4 transition-all ease-in-out duration-500">
                        Divisi Hubungan Ormawa</p>
                    <i
                        class="fa-solid fa-arrow-right px-3 group-hover:translate-x-1 transition-all ease-in-out duration-500"></i>
                </a>
                <a class="group transition-all ease-in-out duration-500 bg-gray-50 hover:bg-gray-300 rounded-lg h-14 flex flex-row overflow-hidden items-center w-full"
                    href="kementrian/divisi-pendidikan-dan-keagamaan">
                    <div
                        class="bg-cyan-500 p-4 rounded-md items-center justify-center transition-all ease-in-out duration-500 group-hover:bg-cyan-600">
                        <i
                            class="fa-solid fa-puzzle-piece text-white fa-2xl transition-all ease-in-out duration-500 group-hover:text-gray-200"></i>
                    </div>
                    <p
                        class="flex-auto text-base px-4 group-hover:translate-x-1 leading-4 transition-all ease-in-out duration-500">
                        Divisi Minat dan Bakat</p>
                    <i
                        class="fa-solid fa-arrow-right px-3 group-hover:translate-x-1 transition-all ease-in-out duration-500"></i>
                </a>
            </div>
        </div>
        {{-- Kementrian Media Informasi & Teknologi --}}
        <div class="mb-20">
            <div class="text-2xl font-bold mb-8 text-zinc-800">Kementrian <span class="text-cyan-500">Media Informasi &
                    Teknologi</span>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 gap-y-6">
                <a class="group transition-all ease-in-out duration-500 bg-gray-50 hover:bg-gray-300 rounded-lg h-14 flex flex-row overflow-hidden items-center w-full"
                    href="kementrian/divisi-advokasi-dan-kajian">
                    <div
                        class="bg-cyan-500 p-4 rounded-md items-center justify-center transition-all ease-in-out duration-500 group-hover:bg-cyan-600">
                        <i
                            class="fa-solid fa-photo-film text-white fa-2xl transition-all ease-in-out duration-500 group-hover:text-gray-200"></i>
                    </div>
                    <p
                        class="flex-auto text-base px-4 group-hover:translate-x-1 leading-4 transition-all ease-in-out duration-500">
                        Divisi Media dan Design</p>
                    <i
                        class="fa-solid fa-arrow-right px-3 group-hover:translate-x-1 transition-all ease-in-out duration-500"></i>
                </a>
                <a class="group transition-all ease-in-out duration-500 bg-gray-50 hover:bg-gray-300 rounded-lg h-14 flex flex-row overflow-hidden items-center w-full"
                    href="kementrian/divisi-pendidikan-dan-keagamaan">
                    <div
                        class="bg-cyan-500 p-4 rounded-md items-center justify-center transition-all ease-in-out duration-500 group-hover:bg-cyan-600">
                        <i
                            class="fa-solid fa-circle-info text-white fa-2xl transition-all ease-in-out duration-500 group-hover:text-gray-200"></i>
                    </div>
                    <p
                        class="flex-auto text-base px-4 group-hover:translate-x-1 leading-4 transition-all ease-in-out duration-500">
                        Divisi Publikasi dan Informasi</p>
                    <i
                        class="fa-solid fa-arrow-right px-3 group-hover:translate-x-1 transition-all ease-in-out duration-500"></i>
                </a>
            </div>
        </div>

    </section>
@endsection
