@extends('layouts.main')
@section('container')
    <div class="flex flex-col gap-5 mb-12">
        <div class="flex gap-3 flex-col">
            <div class="flex pt-20 flex-col gap-3">
                <div class="flex items-center gap-4">
                    <h1 class="text-black text-5xl max-sm:text-3xl max-md:text-4xl font-bold">Anggota BEM Akusaraabhinaya
                    </h1>
                    <div class="w-20 h-[2px] mt-3 bg-cyan-500 lg:w-36 md:w-28 max-lg:hidden"></div>
                </div>
                <p class="text-gray-400">*Periode 2023</p>

                {{-- <div class="w-60 h-[2px] mt-5 bg-cyan-500"></div> --}}
            </div>
            <p class="text-cyan-500 text-base font-normal"><a class="text-slate-700" href="/">Beranda</a> > <span
                    class="text-black">{{ Str::title($title) }}</span></p>
        </div>
    </div>
    {{-- Ketua & Wakil --}}
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-12 gap-y-20 mb-20">
        <div class="flex flex-col">
            <div class="overflow-hidden rounded-lg">
                <img class="w-full h-48 md:h-72 object-cover" src="images/anggota-bem/15200044-mughni-rahmat-alaziz.jpg"
                    alt="Ketua BEM AKUSARAABHINAYA">
            </div>
            <div class="my-4">
                <div class="font-bold text-base">Mughni Rahmat Alaziz</div>
                <div class="text-sm font-semibold mt-1 text-cyan-500">Ketua BEM</div>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="overflow-hidden rounded-lg">
                <img class="w-full h-48 md:h-72 object-cover" src="images/anggota-bem/15200214-abdul-kholik.jpg"
                    alt="Wakil Ketua BEM AKUSARAABHINAYA">
            </div>
            <div class="my-4">
                <div class="font-bold text-base">Abdul Kholik</div>
                <div class="text-sm font-semibold mt-1 text-cyan-500">Wakil Ketua BEM</div>
            </div>
        </div>
    </div>
    {{-- Sekretaris & Bendahara --}}
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-12 gap-y-20 mb-20">
        <div class="flex flex-col">
            <div class="overflow-hidden rounded-lg">
                <img class="w-full h-48 md:h-72 object-cover" src="images/anggota-bem/12211124-airen-natasha.jpg"
                    alt="Sekretaris I BEM AKUSARAABHINAYA">
            </div>
            <div class="my-4">
                <div class="font-bold text-base">Airen Natasha</div>
                <div class="text-sm font-semibold mt-1 text-cyan-500">Sekretaris I</div>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="overflow-hidden rounded-lg">
                <img class="w-full h-48 md:h-72 object-cover" src="images/anggota-bem/19221161-tiara-rachma-aulia.png"
                    alt="Sekretaris II BEM AKUSARAABHINAYA">
            </div>
            <div class="my-4">
                <div class="font-bold text-base">Tiara Rachman Aulia</div>
                <div class="text-sm font-semibold mt-1 text-cyan-500">Sekretaris II</div>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="overflow-hidden rounded-lg">
                <img class="w-full h-48 md:h-72 object-cover" src="images/anggota-bem/19221538-silka-tiara.jpeg"
                    alt="Bendahara I BEM AKUSARAABHINAYA">
            </div>
            <div class="my-4">
                <div class="font-bold text-base">Silka Tiara</div>
                <div class="text-sm font-semibold mt-1 text-cyan-500">Bendahara I</div>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="overflow-hidden rounded-lg">
                <img class="w-full h-48 md:h-72 object-cover"
                    src="images/anggota-bem/19220044-siti-sobiyan-nuzulan-yusup.png" alt="Bendahara II BEM AKUSARAABHINAYA">
            </div>
            <div class="my-4">
                <div class="font-bold text-base">Siti Sobiyan Nuzulan Yusup</div>
                <div class="text-sm font-semibold mt-1 text-cyan-500">Bendahara II</div>
            </div>
        </div>
    </div>
    {{-- Kementrian Dalam Negeri --}}
    <div class="mb-20">
        <div class="text-2xl font-bold mb-8 text-zinc-800">Kementrian <span class="text-cyan-500">Dalam Negeri</span></div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-12 gap-y-20">
            <div class="flex flex-col">
                <div class="overflow-hidden rounded-lg">
                    <img class="w-full h-44 md:h-56 object-cover"
                        src="images/anggota-bem/19200772-muhammad-fadly-nurerwansyah.jpg"
                        alt="Koordiantor Menteri Dalam Negeri BEM AKUSARAABHINAYA">
                </div>
                <div class="my-4">
                    <div class="font-bold text-base">Muhammad Fadly</div>
                    <div class="text-xs font-semibold mt-1 text-cyan-500">Koordiantor Menteri Dalam Negeri</div>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="overflow-hidden rounded-lg">
                    <img class="w-full h-44 md:h-56 object-cover"
                        src="images/anggota-bem/19200772-muhammad-fadly-nurerwansyah.jpg"
                        alt="Sekretaris II BEM AKUSARAABHINAYA">
                </div>
                <div class="my-4">
                    <div class="font-bold text-base">Cahya Afriansyah</div>
                    <div class="text-xs font-semibold mt-1 text-cyan-500">Menteri Dalam Negeri Divisi Advokasi dan Kajian
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="overflow-hidden rounded-lg">
                    <img class="w-full h-44 md:h-56 object-cover" src="images/anggota-bem/19221258-mela-wati.png"
                        alt="Bendahara I BEM AKUSARAABHINAYA">
                </div>
                <div class="my-4">
                    <div class="font-bold text-base">Mela Wati</div>
                    <div class="text-xs font-semibold mt-1 text-cyan-500">Menteri Dalam Negeri Divisi Advokasi dan Kajian
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="overflow-hidden rounded-lg">
                    <img class="w-full h-44 md:h-56 object-cover"
                        src="images/anggota-bem/15210236-muhammad-abdul-aziz-albar.jpg"
                        alt="Bendahara II BEM AKUSARAABHINAYA">
                </div>
                <div class="my-4">
                    <div class="font-bold text-base">Muhammad Abdul Aziz Albar</div>
                    <div class="text-xs font-semibold mt-1 text-cyan-500">Menteri Dalam Negeri Divisi Pendidikan Dan
                        Keagamaan</div>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="overflow-hidden rounded-lg">
                    <img class="w-full h-44 md:h-56 object-cover" src="images/anggota-bem/19221453-adelia-trimarta.png"
                        alt="Bendahara II BEM AKUSARAABHINAYA">
                </div>
                <div class="my-4">
                    <div class="font-bold text-base">Adelia Trimarta</div>
                    <div class="text-xs font-semibold mt-1 text-cyan-500">Menteri Dalam Negeri Divisi Pendidikan Dan
                        Keagamaan</div>
                </div>
            </div>
        </div>
    </div>
    {{-- Kementrian Luar Negeri --}}
    <div class="mb-20">
        <div class="text-2xl font-bold mb-8 text-zinc-800">Kementrian <span class="text-cyan-500">Luar Negeri</span>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-12 gap-y-20">
            <div class="flex flex-col">
                <div class="overflow-hidden rounded-lg">
                    <img class="w-full h-44 md:h-56 object-cover" src="images/anggota-bem/15210278-m-diki-ramlan.jpg"
                        alt="Koordiantor Menteri Dalam Negeri BEM AKUSARAABHINAYA">
                </div>
                <div class="my-4">
                    <div class="font-bold text-base">M Diki Ramlan</div>
                    <div class="text-xs font-semibold mt-1 text-cyan-500">Koordiantor Menteri Luar Negeri</div>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="overflow-hidden rounded-lg">
                    <img class="w-full h-44 md:h-56 object-cover" src="images/anggota-bem/19220672-figur-ruzikna.png"
                        alt="Sekretaris II BEM AKUSARAABHINAYA">
                </div>
                <div class="my-4">
                    <div class="font-bold text-base">Figur Ruzikna</div>
                    <div class="text-xs font-semibold mt-1 text-cyan-500">Menteri Luar Negeri Divisi Hubungan External
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="overflow-hidden rounded-lg">
                    <img class="w-full h-44 md:h-56 object-cover"
                        src="images/anggota-bem/15210289-febrianetyo-bwanaputera.jpeg"
                        alt="Bendahara I BEM AKUSARAABHINAYA">
                </div>
                <div class="my-4">
                    <div class="font-bold text-base">Febrianetyo Bwanaputer</div>
                    <div class="text-xs font-semibold mt-1 text-cyan-500">Menteri Luar Negeri Divisi Hubungan External
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="overflow-hidden rounded-lg">
                    <img class="w-full h-44 md:h-56 object-cover" src="images/anggota-bem/15210237-dede-kurnia.jpg"
                        alt="Bendahara II BEM AKUSARAABHINAYA">
                </div>
                <div class="my-4">
                    <div class="font-bold text-base">Dede Kurnia</div>
                    <div class="text-xs font-semibold mt-1 text-cyan-500">Menteri Luar Negeri Divisi Kajian Dan Aksi</div>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="overflow-hidden rounded-lg">
                    <img class="w-full h-44 md:h-56 object-cover"
                        src="images/anggota-bem/19220258-m-fajri-mukti-alfaruk.jpeg"
                        alt="Bendahara II BEM AKUSARAABHINAYA">
                </div>
                <div class="my-4">
                    <div class="font-bold text-base">M Fajri Mukti Al Faruk</div>
                    <div class="text-xs font-semibold mt-1 text-cyan-500">Menteri Luar Negeri Divisi Kajian Dan Aksi</div>
                </div>
            </div>
        </div>
    </div>
    {{-- Kementrian Pengembangan Sumber Daya Mahasiswa (PDSM) --}}
    <div class="mb-20">
        <div class="text-2xl font-bold mb-8 text-zinc-800">Kementrian <span class="text-cyan-500">Pengembangan Sumber Daya
                Mahasiswa (PSDM)</span>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-12 gap-y-20">
            <div class="flex flex-col">
                <div class="overflow-hidden rounded-lg">
                    <img class="w-full h-44 md:h-56 object-cover" src="images/anggota-bem/19210702-adam-satriany.png"
                        alt="Koordiantor Menteri Dalam Negeri BEM AKUSARAABHINAYA">
                </div>
                <div class="my-4">
                    <div class="font-bold text-base">Adam Satriany</div>
                    <div class="text-xs font-semibold mt-1 text-cyan-500">Koordinator Menteri Pengembangan Sumber Daya
                        Mahasiswa (PSDM)</div>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="overflow-hidden rounded-lg">
                    <img class="w-full h-44 md:h-56 object-cover"
                        src="images/anggota-bem/19221233-darryl-hannan-hondo.jpeg"
                        alt="Sekretaris II BEM AKUSARAABHINAYA">
                </div>
                <div class="my-4">
                    <div class="font-bold text-base">Darryl Hannan Hondo</div>
                    <div class="text-xs font-semibold mt-1 text-cyan-500">Menteri PSDM Divisi Hubungan Ormawa
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="overflow-hidden rounded-lg">
                    <img class="w-full h-44 md:h-56 object-cover"
                        src="images/anggota-bem/19220283-muhammad-revanza-adhitama-hend.jpeg"
                        alt="Bendahara I BEM AKUSARAABHINAYA">
                </div>
                <div class="my-4">
                    <div class="font-bold text-base">M Revanza Adhitama Hendrika</div>
                    <div class="text-xs font-semibold mt-1 text-cyan-500">Menteri PSDM Divisi Hubungan Ormawa
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="overflow-hidden rounded-lg">
                    <img class="w-full h-44 md:h-56 object-cover"
                        src="images/anggota-bem/19200525-fikri-muhammad-fajrie.jpg"
                        alt="Bendahara II BEM AKUSARAABHINAYA">
                </div>
                <div class="my-4">
                    <div class="font-bold text-base">Fikri Muhammad Fajrie</div>
                    <div class="text-xs font-semibold mt-1 text-cyan-500">Menteri PSDM Divisi Minat dan Bakat</div>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="overflow-hidden rounded-lg">
                    <img class="w-full h-44 md:h-56 object-cover" src="images/anggota-bem/19221018-dita-putri-yuniar.png"
                        alt="Bendahara II BEM AKUSARAABHINAYA">
                </div>
                <div class="my-4">
                    <div class="font-bold text-base">Dita Putri Yuniar</div>
                    <div class="text-xs font-semibold mt-1 text-cyan-500">Menteri PSDM Divisi Minat dan Bakat</div>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="overflow-hidden rounded-lg">
                    <img class="w-full h-44 md:h-56 object-cover" src="images/anggota-bem/19221467-sholah-faridudin.png"
                        alt="Bendahara II BEM AKUSARAABHINAYA">
                </div>
                <div class="my-4">
                    <div class="font-bold text-base">Sholah Fardudin</div>
                    <div class="text-xs font-semibold mt-1 text-cyan-500">Menteri PSDM Divisi Minat dan Bakat</div>
                </div>
            </div>
        </div>
    </div>
    {{-- Kementrian Media Informasi & Teknologi --}}
    <div class="mb-20">
        <div class="text-2xl font-bold mb-8 text-zinc-800">Kementrian <span class="text-cyan-500">Media Informasi &
                Teknologi</span>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-12 gap-y-20">
            <div class="flex flex-col">
                <div class="overflow-hidden rounded-lg">
                    <img class="w-full h-44 md:h-56 object-cover"
                        src="images/anggota-bem/12210725-rikhsan-rieslye-rismansyah.png"
                        alt="Koordiantor Menteri Dalam Negeri BEM AKUSARAABHINAYA">
                </div>
                <div class="my-4">
                    <div class="font-bold text-base">Rikhsan R Rismansyah</div>
                    <div class="text-xs font-semibold mt-1 text-cyan-500">Koordinator Menteri Media Informasi dan Teknologi
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="overflow-hidden rounded-lg">
                    <img class="w-full h-44 md:h-56 object-cover" src="images/anggota-bem/19221509-arya-m-wijaya.jpeg"
                        alt="Sekretaris II BEM AKUSARAABHINAYA">
                </div>
                <div class="my-4">
                    <div class="font-bold text-base">Arya M Wijaya</div>
                    <div class="text-xs font-semibold mt-1 text-cyan-500">Menteri KOMINFO Divisi Media dan Design
                    </div>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="overflow-hidden rounded-lg">
                    <img class="w-full h-44 md:h-56 object-cover" src="images/anggota-bem/15220822-saugi-ramdan.jpeg"
                        alt="Bendahara I BEM AKUSARAABHINAYA">
                </div>
                <div class="my-4">
                    <div class="font-bold text-base">Saugi Ramadan</div>
                    <div class="text-xs font-semibold mt-1 text-cyan-500">Menteri KOMINFO Divisi Publikasi dan Informasi
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
