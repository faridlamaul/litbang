@extends('admin.layout')

@section('content')
<div class="bg-gray-200 pt-14 pb-6" style="min-height: 80vh">
    <div class="mx-5 px-2 sm:px-6 lg:px-8 bg-slate-100 rounded-md pb-9">
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
                    <table class="w-full drop-shadow-md">
                        <thead>
                            <tr class="bg-indigo-600 text-white ">
                                <th class="py-2 border border-gray-200 ">No</th>
                                <th class="py-2 border border-gray-200 ">Tanggal Pengajuan</th>
                                <th class="py-2 border border-gray-200 w-1/4">Nama</th>
                                <th class="py-2 border border-gray-200 w-1/4">Jenis Permohonan</th>
                                <th class="py-2 border border-gray-200 ">Status</th>
                                <th class="py-2 border border-gray-200 w-1/5">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permohonans as $permohonan)
                            @if ($loop->iteration % 2 == 1)
                            <tr class="bg-indigo-50">
                                @else
                            <tr class="bg-indigo-100">
                                @endif
                                <td class="text-center py-2 border border-gray-200">{{ $loop->iteration }}</td>
                                <td class="pl-3 py-2 border border-gray-200">{{ $permohonan->tanggal_permohonan }}
                                </td>
                                <td class="pl-3 py-2 border border-gray-200">{{ $permohonan->name }}</td>
                                <td class="pl-3 py-2 border border-gray-200">{{ $permohonan->title }}</td>
                                @if ($permohonan->status == 'Diproses')
                                <td class="pl-3 py-2 border border-gray-200 text-center text-gray-700">
                                    {{ $permohonan->status }}</td>
                                @elseif ($permohonan->status == 'Diterima')
                                <td class="pl-3 py-2 border border-gray-200 text-center text-blue-700">
                                    {{ $permohonan->status }}</td>
                                @else
                                <td class="pl-3 py-2 border border-gray-200 text-center text-red-700">
                                    {{ $permohonan->status }}</td>
                                @endif
                                <td class="py-2 border border-gray-200 text-center">
                                    <a href="{{ url('/admin/detail-permohonan/' . $permohonan->id) }}">
                                        <button class="text-white text-sm focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-purple-700 bg-purple-700 transition duration-150 ease-in-out hover:bg-purple-600 rounded-md border-purple-700 px-2 py-1">
                                            Detail
                                        </button>
                                    </a>
                                    @if ($permohonan->status == 'Diproses')
                                    <button class="text-white text-sm focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-blue-700 bg-blue-700 transition duration-150 ease-in-out hover:bg-blue-600 rounded-md border-blue-700 px-2 py-1 mx-2" data-bs-toggle="modal" data-bs-target="#konfirmasi-terima-{{ $permohonan->id }}">
                                        Terima
                                    </button>

                                    <button class="text-white text-sm focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-red-700 bg-red-700 transition duration-150 ease-in-out hover:bg-red-600 rounded-md border-red-700 px-2 py-1 " data-bs-toggle="modal" data-bs-target="#konfirmasi-tolak-{{ $permohonan->id }}">
                                        Tolak
                                    </button>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                        @foreach ($permohonans as $permohonan)
                        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="konfirmasi-terima-{{ $permohonan->id }}" tabindex="-1" aria-labelledby="konfirmasi-terima-{{ $permohonan->id }}" aria-modal="true" role="dialog">
                            <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
                                <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                    <form action="{{ url('admin/daftar-permohonan/terima/' . $permohonan->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                            <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                                                Terima Permohonan
                                            </h5>
                                            <button type="button" class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body relative p-4">
                                            <p>Untuk menerima Permohonan ini silakan untuk mengupload tanda tangan !
                                            </p>
                                            <input type="file" name="ttd" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100 pt-4" />
                                        </div>
                                        <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                            <button type="submit" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                                                Upload
                                            </button>
                                            <button type="button" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out ml-1" data-bs-dismiss="modal">
                                                Batal
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="konfirmasi-tolak-{{ $permohonan->id }}" tabindex="-1" aria-labelledby="konfirmasi-tolak-{{ $permohonan->id }}" aria-modal="true" role="dialog">
                            <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
                                <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                    <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                        <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                                            Tolak Permohonan
                                        </h5>
                                        <button type="button" class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body relative p-4">
                                        <p>Apakah Anda yakin ingin menolak permohonan ini?</p>
                                    </div>
                                    <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                        <button type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-dismiss="modal">
                                            Tidak
                                        </button>
                                        <button type="submit" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out ml-1" data-bs-toggle="modal" data-bs-target="#alasan-tolak-{{ $permohonan->id }}">
                                            Ya
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="alasan-tolak-{{ $permohonan->id }}" tabindex="-1" aria-labelledby="alasan-tolak-{{ $permohonan->id }}" aria-modal="true" role="dialog">
                            <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
                                <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                    <form action="{{ url('admin/daftar-permohonan/tolak/' . $permohonan->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                            <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                                                Detail Penolakan Permohonan
                                            </h5>
                                            <button type="button" class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body relative p-4">
                                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pesan</label>
                                            <textarea name="keterangan" id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ketik disini..."></textarea>
                                        </div>
                                        <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                            <button type="submit" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                                                Kirim
                                            </button>
                                            <button type="button" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out ml-1" data-bs-dismiss="modal">
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
