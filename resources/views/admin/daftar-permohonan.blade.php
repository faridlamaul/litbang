@extends('admin.layout')

@section('content')
    <div class="bg-gray-200 pt-14 pb-6">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 bg-slate-100 rounded-md">
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
                    <h4 class="text-2xl pl-3 py-4 text-gray-800 font-medium">Daftar Surat Permohonan</h4>
                </div>
                <div>
                    <div class=" px-7 py-3">
                        <table class="w-full drop-shadow-md">
                            <thead>
                                <tr class="bg-indigo-600 text-white ">
                                    <th class="py-2 border border-gray-200 w-1/">No</th>
                                    <th class="py-2 border border-gray-200 w-1/3">Nama</th>
                                    <th class="py-2 border border-gray-200">Jenis Permohonan</th>
                                    <th class="py-2 border border-gray-200 w-1/6">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-indigo-50">
                                    <td class="text-center py-2 border border-gray-200">1</td>
                                    <td class="pl-3 py-2 border border-gray-200">Ifanu Antoni</td>
                                    <td class="pl-3 py-2 border border-gray-200">Surat Perizinan 1</td>
                                    <td class="py-2 border border-gray-200 text-center">
                                        <a href="{{ url('/admin/detail-permohonan') }}">
                                            <button
                                                class="text-white focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-purple-700 bg-purple-700 transition duration-150 ease-in-out hover:bg-purple-600 rounded-lg border-purple-700 px-2 py-1 mx-1">
                                                Detail
                                            </button>
                                        </a>
                                        <button
                                            class="text-white focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-red-700 bg-red-700 transition duration-150 ease-in-out hover:bg-red-600 rounded-lg border-red-700 px-2 py-1 "
                                            data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                            Hapus
                                        </button>
                                    </td>
                                    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                                        id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
                                        aria-modal="true" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
                                            <div
                                                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                                <div
                                                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                                    <h5 class="text-xl font-medium leading-normal text-gray-800"
                                                        id="exampleModalScrollableLabel">
                                                        Hapus Permohonan
                                                    </h5>
                                                    <button type="button"
                                                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body relative p-4">
                                                    <p>Apakah Anda yakin ingin menghapus permohonan ini?</p>
                                                </div>
                                                <div
                                                    class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                                    <button type="button"
                                                        class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                                                        data-bs-dismiss="modal">
                                                        Tidak
                                                    </button>
                                                    <button type="button"
                                                        class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
                                                        Ya
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </tr>
                                <tr class="bg-indigo-100">
                                    <td class="text-center py-2 border border-gray-200">2</td>
                                    <td class="pl-3 py-2 border border-gray-200">Ahmad lamaul farid</td>
                                    <td class="pl-3 py-2 border border-gray-200">Surat Perizinan 2</td>
                                    <td class="py-2 border border-gray-200 text-center">
                                        <button
                                            class="text-white focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-purple-700 bg-purple-700 transition duration-150 ease-in-out hover:bg-purple-600 rounded-lg border-purple-700 px-2 py-1 mx-1">
                                            Detail
                                        </button>
                                        <button
                                            class="text-white focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-red-700 bg-red-700 transition duration-150 ease-in-out hover:bg-red-600 rounded-lg border-red-700 px-2 py-1">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                                <tr class="bg-indigo-50">
                                    <td class="text-center py-2 border border-gray-200">3</td>
                                    <td class="pl-3 py-2 border border-gray-200">Aufi fillah</td>
                                    <td class="pl-3 py-2 border border-gray-200">Surat Perizinan 3</td>
                                    <td class="py-2 border border-gray-200 text-center">
                                        <button
                                            class="text-white focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-purple-700 bg-purple-700 transition duration-150 ease-in-out hover:bg-purple-600 rounded-lg border-purple-700 px-2 py-1 mx-1">
                                            Detail
                                        </button>
                                        <button
                                            class="text-white focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-red-700 bg-red-700 transition duration-150 ease-in-out hover:bg-red-600 rounded-lg border-red-700 px-2 py-1">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                                <tr class="bg-indigo-100">
                                    <td class="text-center py-2 border border-gray-200">4</td>
                                    <td class="pl-3 py-2 border border-gray-200">Ahmad lamaul farid</td>
                                    <td class="pl-3 py-2 border border-gray-200">Surat Perizinan 2</td>
                                    <td class="py-2 border border-gray-200 text-center">
                                        <button
                                            class="text-white focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-purple-700 bg-purple-700 transition duration-150 ease-in-out hover:bg-purple-600 rounded-lg border-purple-700 px-2 py-1 mx-1">
                                            Detail
                                        </button>
                                        <button
                                            class="text-white focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-red-700 bg-red-700 transition duration-150 ease-in-out hover:bg-red-600 rounded-lg border-red-700 px-2 py-1">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                                <tr class="bg-indigo-50">
                                    <td class="text-center py-2 border border-gray-200">5</td>
                                    <td class="pl-3 py-2 border border-gray-200">Aufi fillah</td>
                                    <td class="pl-3 py-2 border border-gray-200">Surat Perizinan 3</td>
                                    <td class="py-2 border border-gray-200 text-center">
                                        <button
                                            class="text-white focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-purple-700 bg-purple-700 transition duration-150 ease-in-out hover:bg-purple-600 rounded-lg border-purple-700 px-2 py-1 mx-1">
                                            Detail
                                        </button>
                                        <button
                                            class="text-white focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-red-700 bg-red-700 transition duration-150 ease-in-out hover:bg-red-600 rounded-lg border-red-700 px-2 py-1">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                                <tr class="bg-indigo-100">
                                    <td class="text-center py-2 border border-gray-200">6</td>
                                    <td class="pl-3 py-2 border border-gray-200">Ahmad lamaul farid</td>
                                    <td class="pl-3 py-2 border border-gray-200">Surat Perizinan 2</td>
                                    <td class="py-2 border border-gray-200 text-center">
                                        <button
                                            class="text-white focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-purple-700 bg-purple-700 transition duration-150 ease-in-out hover:bg-purple-600 rounded-lg border-purple-700 px-2 py-1 mx-1">
                                            Detail
                                        </button>
                                        <button
                                            class="text-white focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-red-700 bg-red-700 transition duration-150 ease-in-out hover:bg-red-600 rounded-lg border-red-700 px-2 py-1">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                                <tr class="bg-indigo-50">
                                    <td class="text-center py-2 border border-gray-200">7</td>
                                    <td class="pl-3 py-2 border border-gray-200">Aufi fillah</td>
                                    <td class="pl-3 py-2 border border-gray-200">Surat Perizinan 3</td>
                                    <td class="py-2 border border-gray-200 text-center">
                                        <button
                                            class="text-white focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-purple-700 bg-purple-700 transition duration-150 ease-in-out hover:bg-purple-600 rounded-lg border-purple-700 px-2 py-1 mx-1">
                                            Detail
                                        </button>
                                        <button
                                            class="text-white focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-red-700 bg-red-700 transition duration-150 ease-in-out hover:bg-red-600 rounded-lg border-red-700 px-2 py-1">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                                <tr class="bg-indigo-100">
                                    <td class="text-center py-2 border border-gray-200">8</td>
                                    <td class="pl-3 py-2 border border-gray-200">Ahmad lamaul farid</td>
                                    <td class="pl-3 py-2 border border-gray-200">Surat Perizinan 2</td>
                                    <td class="py-2 border border-gray-200 text-center">
                                        <button
                                            class="text-white focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-purple-700 bg-purple-700 transition duration-150 ease-in-out hover:bg-purple-600 rounded-lg border-purple-700 px-2 py-1 mx-1">
                                            Detail
                                        </button>
                                        <button
                                            class="text-white focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-red-700 bg-red-700 transition duration-150 ease-in-out hover:bg-red-600 rounded-lg border-red-700 px-2 py-1">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                                <tr class="bg-indigo-50">
                                    <td class="text-center py-2 border border-gray-200">9</td>
                                    <td class="pl-3 py-2 border border-gray-200">Aufi fillah</td>
                                    <td class="pl-3 py-2 border border-gray-200">Surat Perizinan 3</td>
                                    <td class="py-2 border border-gray-200 text-center">
                                        <button
                                            class="text-white focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-purple-700 bg-purple-700 transition duration-150 ease-in-out hover:bg-purple-600 rounded-lg border-purple-700 px-2 py-1 mx-1">
                                            Detail
                                        </button>
                                        <button
                                            class="text-white focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-red-700 bg-red-700 transition duration-150 ease-in-out hover:bg-red-600 rounded-lg border-red-700 px-2 py-1">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                                <tr class="bg-indigo-100">
                                    <td class="text-center py-2 border border-gray-200">10</td>
                                    <td class="pl-3 py-2 border border-gray-200">Ahmad lamaul farid</td>
                                    <td class="pl-3 py-2 border border-gray-200">Surat Perizinan 2</td>
                                    <td class="py-2 border border-gray-200 text-center">
                                        <button
                                            class="text-white focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-purple-700 bg-purple-700 transition duration-150 ease-in-out hover:bg-purple-600 rounded-lg border-purple-700 px-2 py-1 mx-1">
                                            Detail
                                        </button>
                                        <button
                                            class="text-white focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-red-700 bg-red-700 transition duration-150 ease-in-out hover:bg-red-600 rounded-lg border-red-700 px-2 py-1">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="pt-6 pb-6 flex justify-center">
                            <button>
                                <i class="fa-solid fa-angle-left fa-lg text-gray-400 hover:text-gray-600"></i>
                            </button>
                            <h5 class="px-5 text-gray-400">
                                10 dari 100
                            </h5>
                            <button>
                                <i class="fa-solid fa-angle-right fa-lg text-gray-400 hover:text-gray-600"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
