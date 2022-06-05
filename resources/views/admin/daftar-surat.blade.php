@extends('admin.layout')

@section('content')
    <div class="bg-gray-200 pt-14 pb-6" style="min-height: 80vh">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 bg-slate-100 rounded-md pb-9">
            <div class="">
                <div class="pt-8 px-7 flex items-center bottom-3">
                    <a href="javascript:history.back()">
                        <button
                            class="focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-indigo-700 bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded-full border-indigo-700 p-2">
                            <i class="fa-solid fa-arrow-left fa-xl text-white"></i>
                        </button>
                    </a>

                    <div class="border-solid border-2 border-indigo-600 p-2 ml-3 rounded-full">
                        <i class="fa-solid fa-file-lines fa-xl text-gray-800"></i>
                    </div>
                    <h4 class="text-2xl pl-3 py-4 text-gray-800 font-medium">Kelola Daftar Surat</h4>
                </div>
                <div class="px-7 pt-5">
                    <a href="#">
                        <button
                            class="text-white text-sm focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-blue-700 bg-blue-700 transition duration-150 ease-in-out hover:bg-blue-600 rounded-md border-blue-700 px-4 py-2 mx-1"
                            data-bs-toggle="modal" data-bs-target="#tambahSurat">
                            Tambah Daftar Surat
                        </button>
                    </a>
                </div>
                <div>
                    <div class=" px-7 py-3">
                        <table class="w-full drop-shadow-md">
                            <thead>
                                <tr class="bg-indigo-600 text-white ">
                                    <th class="py-2 border border-gray-200 px-4">No</th>
                                    <th class="py-2 border border-gray-200 w-1/6">Jenis Permohanan</th>
                                    <th class="py-2 border border-gray-200">Deskripsi</th>
                                    <th class="py-2 border border-gray-200 w-1/6">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-indigo-50">
                                    <td class="text-center py-2 border border-gray-200">1</td>
                                    <td class="pl-3 py-2 border border-gray-200">Surat 1</td>
                                    <td class="pl-3 py-2 border border-gray-200">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</td>
                                    <td class="py-2 border border-gray-200 text-center">
                                        <button
                                            class="text-white text-sm focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-purple-700 bg-purple-700 transition duration-150 ease-in-out hover:bg-purple-600 rounded-md border-purple-700 px-4 py-2 mx-1"
                                            data-bs-toggle="modal" data-bs-target="#editSurat">
                                            Edit
                                        </button>
                                        <button
                                            class="text-white text-sm focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-red-700 bg-red-700 transition duration-150 ease-in-out hover:bg-red-600 rounded-md border-red-700 px-2 py-2 mx-1 "
                                            data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                            Hapus
                                        </button>
                                    </td>
                                    
                                </tr>
                                <tr class="bg-indigo-100">
                                    <td class="text-center py-2 border border-gray-200">2</td>
                                    <td class="pl-3 py-2 border border-gray-200">Surat 2</td> 
                                    <td class="pl-3 py-2 border border-gray-200">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                    <td class="py-2 border border-gray-200 text-center">
                                        <a href="#">
                                            <button
                                            class="text-white text-sm focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-purple-700 bg-purple-700 transition duration-150 ease-in-out hover:bg-purple-600 rounded-md border-purple-700 px-4 py-2 mx-1"
                                            data-bs-toggle="modal" data-bs-target="#editSurat">
                                            Edit
                                            </button>
                                        </a>
                                        <button
                                            class="text-white text-sm focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-red-700 bg-red-700 transition duration-150 ease-in-out hover:bg-red-600 rounded-md border-red-700 px-2 py-2 mx-1 "
                                            data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                                
                                <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                                    id="tambahSurat" tabindex="-1" aria-labelledby="tambahSurat" aria-modal="true"
                                    role="dialog" data-bs-backdrop="static">

                                    <div class="modal-dialog modal-xl modal-dialog-centered relative w-auto pointer-events-none">
                                        <div
                                            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                            <div
                                                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md bg-blue-600">
                                                <h5 class="text-xl font-medium leading-normal text-gray-100" id="exampleModalScrollableLabel">
                                                    Lengkapi data berikut !
                                                </h5>
                                                <button type="button"
                                                    class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="" method="post">
                                                <div class="modal-body relative flex flex-col p-6 justify-center">
                                                    <div class="flex flex-col">
                                                        <div class="mb-3 w-full">
                                                            <label for="tambahSurat"
                                                                class="form-label inline-block mb-2 text-gray-700">Jenis Surat Permohonan</label>
                                                            <input type="text"
                                                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                                placeholder="Jenis Surat" />
                                                        </div>

                                                        <div class="mb-3 w-full">
                                                            <label for="tambahSurat"
                                                                class="form-label inline-block mb-2 text-gray-700">Deskripsi Surat</label>
                                                            
                                                            {{-- <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pesan</label> --}}
                                                            <textarea id="tambahDeskripsi" rows="6" class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Deskripsi Surat..."></textarea>
                                                        </div>
                                                    </div>
                                               </div>
                                                <div
                                                    class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                                    <a href="{{ url('/user/proccess') }}">
                                                        <button type="button"
                                                        class="inline-block px-6 py-2.5 mr-3 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
                                                        Simpan
                                                    </button>
                                                    </a>
                                                    <button type="button"
                                                        class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"
                                                        data-bs-dismiss="modal">
                                                        Batal
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                                <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                                    id="editSurat" tabindex="-1" aria-labelledby="editSurat" aria-modal="true"
                                    role="dialog" data-bs-backdrop="static">

                                    <div class="modal-dialog modal-xl modal-dialog-centered relative w-auto pointer-events-none">
                                        <div
                                            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                            <div
                                                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md bg-blue-600">
                                                <h5 class="text-xl font-medium leading-normal text-gray-100" id="exampleModalScrollableLabel">
                                                    Lengkapi data berikut !
                                                </h5>
                                                <button type="button"
                                                    class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="" method="post">
                                                <div class="modal-body relative flex flex-col p-6 justify-center">
                                                    <div class="flex flex-col">
                                                        <div class="mb-3 w-full">
                                                            <label for="tambahSurat"
                                                                class="form-label inline-block mb-2 text-gray-700">Jenis Surat Permohonan</label>
                                                            <input type="text"
                                                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                                placeholder="Jenis Surat" />
                                                        </div>

                                                        <div class="mb-3 w-full">
                                                            <label for="tambahSurat"
                                                                class="form-label inline-block mb-2 text-gray-700">Deskripsi Surat</label>
                                                            
                                                            {{-- <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pesan</label> --}}
                                                            <textarea id="tambahDeskripsi" rows="6" class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Deskripsi Surat..."></textarea>
                                                        </div>
                                                    </div>
                                               </div>
                                                <div
                                                    class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                                    <a href="{{ url('/user/proccess') }}">
                                                        <button type="button"
                                                        class="inline-block px-6 py-2.5 mr-3 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
                                                        Simpan
                                                    </button>
                                                    </a>
                                                    <button type="button"
                                                        class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out"
                                                        data-bs-dismiss="modal">
                                                        Batal
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </tbody>
                        </table>
                        {{-- <div class="pt-6 pb-6 flex justify-center">
                            <button>
                                <i class="fa-solid fa-angle-left fa-lg text-gray-400 hover:text-gray-600"></i>
                            </button>
                            <h5 class="px-5 text-gray-400">
                                10 dari 100
                            </h5>
                            <button>
                                <i class="fa-solid fa-angle-right fa-lg text-gray-400 hover:text-gray-600"></i>
                            </button>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
