@extends('admin.layout')

@section('content')
    <div class="bg-gray-200 pt-14 pb-6" style="min-height: 80vh">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 bg-slate-100 rounded-md pb-9">
            <div class="">
                <div class="pt-8 px-7 flex items-center bottom-3">
                    <a href="{{ url('admin/dashboard') }}">
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
                                @foreach ($surats as $surat)
                                    @if ($loop->iteration % 2 == 1)
                                        <tr class="bg-indigo-50">
                                        @else
                                        <tr class="bg-indigo-100">
                                    @endif
                                    <td class="text-center py-2 border border-gray-200">{{ $loop->iteration }}</td>
                                    <td class="pl-3 py-2 border border-gray-200">{{ $surat->title }}</td>
                                    <td class="pl-3 py-2 border border-gray-200">{{ $surat->description }}</td>
                                    <td class="py-2 border border-gray-200 text-center">
                                        <button
                                            class="text-white text-sm focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-purple-700 bg-purple-700 transition duration-150 ease-in-out hover:bg-purple-600 rounded-md border-purple-700 px-4 py-1 mx-1"
                                            data-bs-toggle="modal" data-bs-target="#editSurat-{{ $surat->id }}">
                                            Edit
                                        </button>
                                        <button
                                            class="text-white text-sm focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-red-700 bg-red-700 transition duration-150 ease-in-out hover:bg-red-600 rounded-md border-red-700 px-2 py-1 mx-1 "
                                            data-bs-toggle="modal" data-bs-target="#hapusSurat-{{ $surat->id }}">
                                            Hapus
                                        </button>
                                    </td>

                                    </tr>
                                @endforeach

                            </tbody>
                            <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                                id="tambahSurat" tabindex="-1" aria-labelledby="tambahSurat" aria-modal="true" role="dialog"
                                data-bs-backdrop="static">

                                <div
                                    class="modal-dialog modal-xl modal-dialog-centered relative w-auto pointer-events-none">
                                    <div
                                        class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                        <div
                                            class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md bg-blue-600">
                                            <h5 class="text-xl font-medium leading-normal text-gray-100"
                                                id="exampleModalScrollableLabel">
                                                Lengkapi data berikut !
                                            </h5>
                                            <button type="button"
                                                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="{{ url('admin/daftar-surat/add') }}" method="post">
                                            @csrf
                                            <div class="modal-body relative flex flex-col p-6 justify-center">
                                                <div class="flex flex-col">
                                                    <div class="mb-3 w-full">
                                                        <label for="tambahSurat"
                                                            class="form-label inline-block mb-2 text-gray-700">Jenis
                                                            Surat Permohonan</label>
                                                        <input type="text" name="title"
                                                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                            placeholder="Jenis Surat" />
                                                    </div>

                                                    <div class="mb-3 w-full">
                                                        <label for="tambahSurat"
                                                            class="form-label inline-block mb-2 text-gray-700">Deskripsi
                                                            Surat</label>

                                                        {{-- <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pesan</label> --}}
                                                        <textarea name="description" id="tambahDeskripsi" rows="6" class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                            placeholder="Deskripsi Surat..."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                                <button type="submit"
                                                    class="inline-block px-6 py-2.5 mr-3 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
                                                    Simpan
                                                </button>
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
                            @foreach ($surats as $surat)
                                <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                                    id="hapusSurat-{{ $surat->id }}" tabindex="-1"
                                    aria-labelledby="hapusSurat-{{ $surat->id }}" aria-modal="true" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
                                        <div
                                            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                            <div
                                                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                                <h5 class="text-xl font-medium leading-normal text-gray-800"
                                                    id="exampleModalScrollableLabel">
                                                    Hapus Surat
                                                </h5>
                                                <button type="button"
                                                    class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body relative p-4">
                                                <p>Apakah Anda yakin ingin menghapus
                                                    <span class="font-bold">{{ $surat->title }}</span> ?
                                                </p>
                                            </div>
                                            <div
                                                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                                <form action="{{ url('admin/daftar-surat/delete/' . $surat->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button"
                                                        class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                                                        data-bs-dismiss="modal">
                                                        Tidak
                                                    </button>
                                                    <button type="submit"
                                                        class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
                                                        Ya
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                                    id="editSurat-{{ $surat->id }}" tabindex="-1"
                                    aria-labelledby="editSurat-{{ $surat->id }}" aria-modal="true" role="dialog"
                                    data-bs-backdrop="static">

                                    <div
                                        class="modal-dialog modal-xl modal-dialog-centered relative w-auto pointer-events-none">
                                        <div
                                            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                            <div
                                                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md bg-blue-600">
                                                <h5 class="text-xl font-medium leading-normal text-gray-100"
                                                    id="exampleModalScrollableLabel">
                                                    Lengkapi data berikut !
                                                </h5>
                                                <button type="button"
                                                    class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="{{ url('admin/daftar-surat/edit/' . $surat->id) }}"
                                                method="post">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body relative flex flex-col p-6 justify-center">
                                                    <div class="flex flex-col">
                                                        <div class="mb-3 w-full">
                                                            <label class="form-label inline-block mb-2 text-gray-700">Jenis
                                                                Surat Permohonan</label>
                                                            <input type="text" value="{{ $surat->title }}" name="title"
                                                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                                placeholder="Jenis Surat" />
                                                        </div>

                                                        <div class="mb-3 w-full">
                                                            <label
                                                                class="form-label inline-block mb-2 text-gray-700">Deskripsi
                                                                Surat</label>

                                                            {{-- <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pesan</label> --}}
                                                            <textarea name="description" id="tambahDeskripsi" rows="6" class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                                placeholder="Deskripsi Surat...">{{ $surat->description }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                                    <button type="submit"
                                                        class="inline-block px-6 py-2.5 mr-3 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
                                                        Simpan
                                                    </button>
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
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
