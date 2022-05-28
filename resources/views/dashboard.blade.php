@extends('layout')

@section('content')

<div class="container mx-auto py-16">
    <div class="flex flex-row flex-wrap space-x-4 w-full justify-center">
        <div class="w-1/4">
            <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light" data-bs-toggle="modal" data-bs-target="#suratPerizinanModal">
                <div class="rounded-lg shadow-lg bg-white max-w-sm">
                    <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/182.jpg" alt="" />
                    <div class="p-6">
                        <h5 class="text-gray-900 text-xl font-medium mb-2">Surat Perizinan 1</h5>
                        <p class="text-gray-700 text-base mb-4">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore nemo repudiandae vel quae minus enim. Doloribus, dicta illo. Suscipit nulla quidem sapiente voluptas perspiciatis odit nihil ad. Sit, numquam facilis.
                        </p>
                        {{-- <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</button> --}}
                    </div>
                </div>
            </a>
        </div>
        <div class="w-1/4">
            <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light" data-bs-toggle="modal" data-bs-target="#suratPerizinanModal">
                <div class="rounded-lg shadow-lg bg-white max-w-sm">
                    <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/182.jpg" alt="" />
                    <div class="p-6">
                        <h5 class="text-gray-900 text-xl font-medium mb-2">Surat Perizinan 2</h5>
                        <p class="text-gray-700 text-base mb-4">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore nemo repudiandae vel quae minus enim. Doloribus, dicta illo. Suscipit nulla quidem sapiente voluptas perspiciatis odit nihil ad. Sit, numquam facilis.
                        </p>
                        {{-- <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</button> --}}
                    </div>
                </div>
            </a>
        </div>
    </div>


    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="suratPerizinanModal" tabindex="-1" aria-labelledby="suratPerizinanModalTitle" aria-modal="true" role="dialog" data-bs-backdrop="static">

        <div class="modal-dialog modal-xl modal-dialog-centered relative w-auto pointer-events-none">
            <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                        Persyaratan
                    </h5>
                    <button type="button" class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    <div class="modal-body relative flex flex-col p-6 justify-center">
                        <div class="flex flex-row space-x-4">
                            <div class="mb-3 xl:w-96">
                                <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700">Nama</label>
                                <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Nama" />
                            </div>

                            <div class="mb-3 xl:w-96">
                                <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700">Alamat</label>
                                <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Alamat" />
                            </div>

                            <div class="mb-3 xl:w-96">
                                <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700">Asal Sekolah</label>
                                <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Asal Sekolah" />
                            </div>

                            <div class="mb-3 xl:w-96">
                                <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700">Email</label>
                                <input type="email" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Email" />
                            </div>

                            <div class="mb-3 xl:w-96">
                                <label for="exampleFormControlInput1" class="form-label inline-block mb-2 text-gray-700">Nomor Telepon</label>
                                <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Nomor Telepon" />
                            </div>
                        </div>

                        <div class="flex mt-5">
                            <a href="#!" class="text-center">
                                <div class="rounded-lg shadow-lg bg-white max-w-sm">
                                    <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>
                                    <div class="p-6">
                                        <h5 class="text-gray-900 text-xl font-medium text-center">Surat Sekolah1</h5>
                                        <input type="file" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100" />
                                    </div>
                                </div>
                            </a>
                            <a href="#!" class="text-center">
                                <div class="rounded-lg shadow-lg bg-white max-w-sm">
                                    <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>
                                    <div class="p-6">
                                        <h5 class="text-gray-900 text-xl font-medium text-center">Proposal</h5>
                                        {{-- <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</button> --}}
                                        <input type="file" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100" />
                                    </div>
                                </div>
                            </a>
                            <a href="#!" class="text-center">
                                <div class="rounded-lg shadow-lg bg-white max-w-sm">
                                    <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>
                                    <div class="p-6">
                                        <h5 class="text-gray-900 text-xl font-medium text-center">KTP/Kartu Pelajar</h5>
                                        {{-- <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</button> --}}
                                        <input type="file" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100" />
                                    </div>
                                </div>
                            </a>
                            <a href="#!" class="text-center">
                                <div class="rounded-lg shadow-lg bg-white max-w-sm">
                                    <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>
                                    <div class="p-6">
                                        <h5 class="text-gray-900 text-xl font-medium text-center">Surat dari Instansi</h5>
                                        {{-- <button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</button> --}}
                                        <input type="file" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100" />
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                        <button type="button" class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-dismiss="modal">
                            Batalkan
                        </button>
                        <a href="{{ url('proccess') }}">
                            <button type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
                                Submit
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>

@endsection