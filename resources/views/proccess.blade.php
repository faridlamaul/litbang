@extends('layout')

@section('content')

<div class="container mx-auto h-screen">
    <div class="min-h-full flex flex-col items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <h1 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Terima Kasih Telah Menggunakan Layanan Kami</h1>
        <h1 class="mt-6 mb-10 text-center text-2xl font-extrabold text-gray-900">Surat Anda Sedang di Proses</h1>
        <a href="{{ url('/proccess') }}" data-bs-toggle="modal" data-bs-target="#beriPenilaian">
            <button class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 lg:text-xl lg:font-bold  rounded text-white px-4 sm:px-10 border border-indigo-700 py-2 sm:py-4 text-sm">Beri Penilaian</button>
        </a>
    </div>
</div>


<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="beriPenilaian" tabindex="-1" aria-labelledby="beriPenilaianTitle" aria-modal="true" role="dialog">

    <div class="modal-dialog modal-xl modal-dialog-centered relative w-auto pointer-events-none">
        <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div class="container mx-auto my-10 text-center">
                Apakah Anda puas dengan layanan Kami?
                <div class="flex flex-row justify-center mt-5 space-x-4">
                    <a href="" class="text-2xl p-5 rounded-md bg-gray-200">
                        <i class="fa-solid fa-face-frown fa-2xl"></i>
                        <p class="mt-3">Tidak Suka</p>
                    </a>
                    <a href="" class="text-2xl p-5 rounded-md bg-gray-200">
                        <i class="fa-solid fa-face-meh fa-2xl"></i>
                        <p class="mt-3">Biasa Saja</p>
                    </a>
                    <a href="" class="text-2xl p-5 rounded-md bg-gray-200">
                        <i class="fa-solid fa-face-smile fa-2xl"></i>
                        <p class="mt-3">Suka</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
