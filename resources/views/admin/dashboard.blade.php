@extends('admin.layout')

@section('content')
    <div class="bg-gray-200 pt-14 pb-24">
        <div class="container mx-auto flex flex-col items-center py-12">
            <div class="w-11/12 sm:w-2/3 lg:flex justify-center items-center flex-col mb-5 sm:mb-10">
                <h2
                    class="text-2xl sm:text-3xl md:text-4xl xl:text-5xl text-center text-gray-800 font-black leading-7 md:leading-10">
                    Dashboard<br>
                    <span class="text-indigo-700 mt-4 block">Aplikasi Layanan Litbang</span>
                </h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 mt-10 md:mt-12 gap-14 md:gap-24">
                <div>
                    <div class="flex flex-col items-center py-8 px-12 border-solid border-4 border-indigo-600 rounded-md">
                        <h3 class="text-center text-sm md:text-xl font-medium mb-4 text-indigo-800">Daftar <br> Pengguna</h3>
                        <div>
                            <i class="fa-solid fa-user-tie fa-6x text-gray-800"></i>
                        </div>
                    </div>
                    <div class="mt-4 rounded">
                        <a href="{{ url('/admin/daftar-users') }}">
                            <button
                                class="w-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 lg:text-base lg:font-bold  rounded text-white px-4 sm:px-2 border border-indigo-700 py-1 sm:py-2 text-sm">Kelola</button>
                        </a>
                    </div>
                </div>
                <div>
                    <div class="flex flex-col items-center py-8 px-12 border-solid border-4 border-indigo-600 rounded-md">
                        <h3 class="text-center text-sm md:text-xl font-medium mb-4 text-indigo-800">Daftar <br> Permohonan
                        </h3>
                        <div>
                            <i class="fa-solid fa-file-lines fa-6x text-gray-800"></i>
                        </div>
                    </div>
                    <div class="mt-4 rounded">
                        <a href="{{ url('/admin/daftar-permohonan') }}">
                            <button
                                class="w-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 lg:text-base lg:font-bold  rounded text-white px-4 sm:px-2 border border-indigo-700 py-1 sm:py-2 text-sm">Kelola</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
@endsection
