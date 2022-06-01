@extends('admin.layout')

@section('content')

<div class="bg-gray-200 pt-14 pb-6">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 bg-slate-100 rounded-md">
        <div class="">
            <div class="pt-8 px-7 flex items-center bottom-3">
                <a href="javascript:history.back()">
                    <button class="focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-indigo-700 bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded-full border-indigo-700 p-2">
                        <i class="fa-solid fa-arrow-left fa-xl text-white"></i>
                    </button>
                </a>

                <div class="border-solid border-2 border-indigo-600 p-2 ml-3 rounded-full">
                    <i class="fa-solid fa-file-lines fa-xl text-gray-800"></i>
                </div>
                <h4 class="text-2xl pl-3 py-4 text-gray-800 font-medium">Daftar Surat Permohonan</h4>
            </div>
            <div>
                <div class=" px-7 py-3">
                    <div class="border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current mb-10">
                        <div class="flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-md">
                            <h5 class="text-xl font-medium leading-normal text-gray-800">
                                Persyaratan
                            </h5>
                            <button type="button" class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="" method="post">
                            <div class="p-6 justify-center">
                                <div class="">
                                    <div class="mb-3 flex">
                                        <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700 w-1/6">Nama</label>
                                        <input disabled type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Nama" />
                                    </div>

                                    <div class="mb-3 flex">
                                        <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700 w-1/6">Alamat</label>
                                        <input disabled type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Alamat" />
                                    </div>

                                    <div class="mb-3 flex">
                                        <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700 w-1/6">Asal Sekolah</label>
                                        <input disabled type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Asal Sekolah" />
                                    </div>

                                    <div class="mb-3 flex">
                                        <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700 w-1/6">Email</label>
                                        <input disabled type="email" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Email" />
                                    </div>

                                    <div class="mb-3 flex">
                                        <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700 w-1/6">Nomor Telepon</label>
                                        <input disabled type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Nomor Telepon" />
                                    </div>
                                </div>

                                <div class="grid grid-cols-4 gap-2 justify-between mt-12 px-20">
                                    <div class="text-center">
                                        <div class="rounded-lg mx-4 w-full shadow-lg bg-white max-w-sm">
                                            <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>
                                            <div class="p-6">
                                                <h5 class="text-gray-900 text-xl font-medium text-center">Surat Sekolah1</h5>
                                                <button class="block w-full mr-4 py-2 px-4 mt-4 rounded-full border-0 text-md font-semibold bg-violet-50 text-violet-700 hover:bg-violet-100"> Unduh </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <div class="rounded-lg  mx-4 w-full  shadow-lg bg-white max-w-sm">
                                            <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>
                                            <div class="p-6">
                                                <h5 class="text-gray-900 text-xl font-medium text-center">Proposal</h5>
                                                {{-- <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</button> --}}
                                                <button class="block w-full mr-4 py-2 px-4 mt-4 rounded-full border-0 text-md font-semibold bg-violet-50 text-violet-700 hover:bg-violet-100"> Unduh </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <div class="rounded-lg  mx-4 w-full  shadow-lg bg-white max-w-sm">
                                            <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>
                                            <div class="p-6">
                                                <h5 class="text-gray-900 text-xl font-medium text-center">KTP/Kartu Pelajar</h5>
                                                {{-- <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</button> --}}
                                                <button class="block w-full mr-4 py-2 px-4 mt-4 rounded-full border-0 text-md font-semibold bg-violet-50 text-violet-700 hover:bg-violet-100"> Unduh </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <div class="rounded-lg  mx-4 w-full  shadow-lg bg-white max-w-sm">
                                            <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>
                                            <div class="p-6">
                                                <h5 class="text-gray-900 text-xl font-medium text-center">Surat dari Instansi</h5>
                                                {{-- <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</button> --}}
                                                <button class="block w-full mr-4 py-2 px-4 mt-4 rounded-full border-0 text-md font-semibold bg-violet-50 text-violet-700 hover:bg-violet-100"> Unduh </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')

@endsection
