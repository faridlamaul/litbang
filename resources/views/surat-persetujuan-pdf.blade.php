<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Persetujuan</title>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" /> --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- load css/app.css --}}
    <link rel="stylesheet" href="{{ public_path('css/app.css') }}" media="all" type="text/css">
    {{-- <link rel="stylesheet" href="{{ ltrim(asset('css/app.css'), '/') }}" media="all" type="text/css"> --}}

    <style>
        #surat_body {
            font-family: 'Times New Roman', Times, serif
        }

        #surat_body p {
            margin-bottom: 10px;
            font-size: 1rem;
            /* 24px */
            line-height: 2rem;
            /* 32px */
        }

    </style>

</head>

<body>
    <div class="container mx-auto">
        <div class="flex flex-row">
            {{-- {{ dd($surat->toArray()) }} --}}
            <img src="{{ public_path('pdf_assets/logo.png') }}" class="float-left relative" style="width: 16%;" alt="">
            <div class="flex flex-col w-full text-center float-right relative" style="width: 90%">
                <h1 class="uppercase font-bold text-md">Pemerintah Kabupaten gresik</h1>
                <h1 class="uppercase font-bold text-md">Badan Perencanaan Pembangunan, Penelitian, dan Pengembangan</h1>
                <p class="uppercase font-medium text-xs">Jl. Dr. Wahidin Sudirohusodo No. 245 Telp. 3952825 - 30 psw.
                    209, 3952812</p>
                <p class="uppercase font-medium text-xs">Website : http://bappeda.gresik.go.id email :
                    bappeda@gresikkab.go.id</p>
                <h3 class="uppercase font-semibold text-md tracking-widest"><u>Gresik</u></h3>
            </div>
        </div>
        <hr class="border-2 border-black my-6 mx-5 mt-36">
        <div id="surat_body" class="flex flex-col">
            <div id="duwuran" class="flex flex-row w-full">
                <div class="flex flex-col w-1/2 float-left" style="width: 60%">
                    <p>Nomor&emsp;&emsp;&emsp;:&emsp;<span>(nomor)</span></p>
                    <p>Sifat&emsp;&emsp;&emsp;&emsp;:&emsp;<span>Penting</span></p>
                    <p>Lampiran&emsp;&emsp;:&emsp;<span>1 (Satu) Berkas</span></p>
                    <p>Perihal&emsp;&emsp;&emsp;:&emsp;<span>{{ $surat->title }}</span></p>
                </div>
                <div class="flex flex-col w-1/2">
                    {{-- <p>Gresik, <span>{{ $permohonan->created_at }}</span></p> --}}
                    {{-- <p>Gresik, <span>{{ Carbon\Carbon::parse( $permohonan->created_at )->formatLocalized('%d %B %Y') }}</span></p> --}}
                    <p>Gresik, <span>{{ Carbon\Carbon::parse( $permohonan->created_at )->locale('id')->isoFormat('LL') }}</span></p>
                    <div class="flex flex-row">
                        <p class="">Kepada Yth</p>
                        <p class="text-2xl m-5">Kepala Departemen Fakultas Teknologi Kelautan Universitas Negeri
                            Surabaya</p>
                    </div>
                </div>
            </div>
            <div id="dasar" class="flex flex-col mt-10 ml-10">
                <p>Dasar</p>
                <div class="flex flex-row table">
                    <p class="pr-8 table-cell">1.</p>
                    <p class="text-justify">Peraturan Daerah Kabupaten Gresik Nomor 12 Tahun 2016 tentang Pembentukan Perangkat Daerah
                        Kabupaten Gresik</p>
                </div>
                <div class="flex flex-row table">
                    <p class="pr-8 table-cell">2.</p>
                    <p class="text-justify">Peraturan Bupati Gresik Nomor 38 Tahun 2019 tentang Kedudukan, Susunan Organisasi, Tugas, Fungsi
                        dan Tata Kerja Badan Perencanaan Pembangunan, Penelitian dan Pengembangan Kabupaten Gresik</p>
                </div>
                <div class="flex flex-row table">
                    <p class="pr-8 table-cell">3.</p>
                    <p class="text-justify">Surat dari Kepala Departemen Fakultas Teknologi Kelautan Universitas Negeri Surabaya Nomor:
                        1945/IT2.IX.4.1.4/B/TU.00.09/2022 tanggal 07 April 2022 Perihal Permohonan Ijin Penelitian</p>
                </div>
                <p class="text-justify">&emsp;Maka dengan ini Badan Perencanaan Pembangunan, Penelitian dan Pengembangan Kabupaten Gresik
                    menyatakan tidak keberatan atas dilakukannya kegiatan yang dilakukan oleh</p>
                <div class="table">
                    <div class="flex flex-row table-row">
                        <p class="px-6 table-cell">1.</p>
                        <p class="w-1/2 table-cell">Nama</p>
                        <p class="table-cell" style="width: 60%">:&emsp;&emsp;{{ $user->name }}</p>
                    </div>
                    {{-- <div class="flex flex-row table-row">
                        <p class="px-6 table-cell">2.</p>
                        <p class="w-1/2 table-cell">NIM/NIK/NIDN</p>
                        <p class="table-cell" style="width: 60%">:&emsp;&emsp;(value)</p>
                    </div> --}}
                    <div class="flex flex-row table-row">
                        <p class="px-6 table-cell">3.</p>
                        <p class="w-1/2 table-cell">Asal Sekolah</p>
                        <p class="table-cell" style="width: 60%">:&emsp;&emsp;{{ $riwayat->asal_sekolah }}</p>
                    </div>
                    <div class="flex flex-row table-row">
                        <p class="px-6 table-cell">4.</p>
                        <p class="w-1/2 table-cell">Alamat</p>
                        <p class="table-cell" style="width: 60%">:&emsp;&emsp;{{ $riwayat->alamat }}</p>
                    </div>
                    <div class="flex flex-row table-row">
                        <p class="px-6 table-cell">5.</p>
                        <p class="w-1/2 table-cell">Keperluan dilakukannya Penelitian/Survey/Riset/KKN/PKL</p>
                        <p class="table-cell" style="width: 60%">:&emsp;&emsp;Untuk mengajukan {{ $surat->title }}</p>
                    </div>
                </div>
                {{-- <div class="flex flex-row">
                    <p class="px-8">6.</p>
                    <p class="w-1/4">Tempat melakukan Penelitian/Survey/Riset/KKN/PKL</p>
                    <p>:&emsp;&emsp;(value)</p>
                </div>
                <div class="flex flex-row">
                    <p class="px-8">7.</p>
                    <p class="w-1/4">Waktu Pelaksanaan Penelitian/Survey/Riset/KKN/PKL</p>
                    <p>:&emsp;&emsp;(value)</p>
                </div>
                <div class="flex flex-row">
                    <p class="px-8">8.</p>
                    <p class="w-1/4">Peserta/Pengikut</p>
                    <p>:&emsp;&emsp;(value)</p>
                </div> --}}
            </div>
            <div id="perhatikan" class="flex flex-col mt-10">
                <p class="text-justify">Dalam melakukan kegiatan Penelitian/Survey/Riset/KKN/PKL agar memperhatikan hal-hal sebagai berikut :
                </p>
                <div class="flex flex-row table">
                    <p class="pr-8 float-left table-cell">1.</p>
                    <p class="text-justify">Sebelum dan setelah dilaksanakannya Penelitian/Survey/Riset/KKN/PKL diwajibkan melapor kepada
                        Instansi terkait;</p>
                </div>
                <div class="flex flex-row table">
                    <p class="pr-8 float-left table-cell">2.</p>
                    <p class="text-justify">Tidak diperkenankan melaksanakan kegiatan lain diluar kegiatan Penelitian/ Survey/ Riset/ KKN
                        /PKL yang dilakukan;</p>
                </div>
                <div class="flex flex-row table">
                    <p class="pr-8 float-left table-cell">3.</p>
                    <p class="text-justify">Setelah melakukan Penelitian/Survey/Riset/KKN/PKL selambat - lambatnya 1 (satu) bulan agar
                        menyerahkan 1 (satu) ex. / buku hasil Penelitian/Survey/Riset/KKN/PKL kepada Bupati Gresik
                        melalui Badan Perencanaan Pembangunan, Penelitian dan Pengembangan Kabupaten Gresik;</p>
                </div>
                <div class="flex flex-row table">
                    <p class="pr-8 float-left table-cell">4.</p>
                    <p class="text-justify">Dalam pelaksanaan wajib mematuhi Protokol Kesehatan sesuai dengan Peraturan yang berlaku.</p>
                </div>
                <p class="text-justify">&emsp;Demikian rekomendasi ijin Penelitian/Survey/Riset/KKN/PKL ini dibuat, untuk dapat dipergunakan
                    seperlunya.</p>
            </div>
            <div id="admin" class="flex flex-col mt-5">
                <div class="w-1/2 ml-auto text-center" style="width: 50%">
                    <p class="text-lg font-bold">An.KEPALA BADAN PERENCANAAN PEMBANGUNAN, PENELITIAN DAN PENGEMBANGAN
                        <br> KABUPATEN GRESIK
                    </p>
                    <p class="font-bold">Kabid. Penelitian dan Pengembangan</p>
                    <div class="text-center my-5" style="text-align: -webkit-center;">
                        <img src="data:image/png;base64, {{ $qrcode }}" alt="">

                    </div>
                    <p class="uppercase text-lg font-bold"><u>Dhiannita Triastuti</u></p>
                    <p>Pembina</p>
                    <p>NIP. <span>19730416 199901 2 002</span></p>
                </div>
            </div>
            <div id="tembusan" class="flex flex-col ml-10">
                <p class="text-justify">Tembusan</p>
                <div class="flex flex-row table">
                    <p class="pr-3 float-left table-cell">1.</p>
                    <p class="text-justify">Badan Kesatuan Bangsa Dan Politik</p>
                </div>
                <div class="flex flex-row table">
                    <p class="pr-3 float-left table-cell">2.</p>
                    <p class="text-justify">Badan Pendapatan, Pengelolaan Keuangan Dan Aset Daerah</p>
                </div>
                <div class="flex flex-row table">
                    <p class="pr-3 float-left table-cell">3.</p>
                    <p class="text-justify">Badan Perencanaan Pembangunan, Penelitian Dan Pengembangan Daerah</p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
