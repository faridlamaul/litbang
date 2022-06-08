@extends('layout')

@section('content')
    <div class="bg-gray-200 pt-14 pb-6" style="min-height: 80vh">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 bg-slate-100 rounded-md pb-9">
            <div class="">
                <div class="pt-8 px-7 flex items-center bottom-3">
                    <a href="{{ url('user/dashboard') }}">
                        <button
                            class="focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-indigo-700 bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded-full border-indigo-700 p-2">
                            <i class="fa-solid fa-arrow-left fa-xl text-white"></i>
                        </button>
                    </a>

                    <div class="border-solid border-2 border-indigo-600 p-2 ml-3 rounded-full">
                        <i class="fa-solid fa-user-tie fa-xl text-gray-800"></i>
                    </div>
                    <h4 class="text-2xl pl-3 py-4 text-gray-800 font-medium">Riwayat Permohonan</h4>
                </div>
                <div>
                    <div class=" px-7 py-3">
                        <table class="w-full drop-shadow-md">
                            <thead>
                                <tr class="bg-indigo-600 text-white ">
                                    <th class="py-2 border border-gray-200">No</th>
                                    <th class="py-2 border border-gray-200 w-1/5">Tanggal Pengajuan</th>
                                    <th class="py-2 border border-gray-200">Jenis Permohonan</th>
                                    <th class="py-2 border border-gray-200">Status</th>
                                    <th class="py-2 border border-gray-200">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($users as $user) --}}
                                @foreach ($permohonans as $permohonan)
                                    @if ($permohonan->user_id == Auth::user()->id)
                                        @if ($loop->iteration % 2 == 1)
                                            <tr class="bg-indigo-50">
                                            @else
                                            <tr class="bg-indigo-100">
                                        @endif
                                        <td class="text-center py-2 border border-gray-200">{{ $loop->iteration }}</td>
                                        <td class="pl-3 py-2 border border-gray-200">{{ $permohonan->tanggal_permohonan }}
                                        </td>
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

                                            @if ($permohonan->status == 'Diproses')
                                                <a href="#">
                                                    <button
                                                        class="text-white text-sm focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-purple-700 bg-purple-700 transition duration-150 ease-in-out hover:bg-purple-600 rounded-lg border-purple-700 px-3 py-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#riwayat-diproses-{{ $permohonan->id }}">
                                                        Detail
                                                    </button>
                                                </a>
                                            @elseif ($permohonan->status == 'Diterima')
                                                <a href="#">
                                                    <button
                                                        class="text-white text-sm focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-blue-700 bg-blue-700 transition duration-150 ease-in-out hover:bg-blue-600 rounded-lg border-blue-700 px-3 py-1"
                                                        {{-- data-bs-toggle="modal" data-bs-target="#modal-" --}}>
                                                        Unduh
                                                    </button>
                                                </a>
                                            @else
                                                <a href="#">
                                                    <button
                                                        class="text-white text-sm focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-purple-700 bg-purple-700 transition duration-150 ease-in-out hover:bg-purple-600 rounded-lg border-purple-700 px-3 py-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#riwayat-ditolak-{{ $permohonan->id }}">
                                                        Detail
                                                    </button>
                                                </a>
                                            @endif
                                            {{-- </a> --}}
                                        </td>

                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                            @foreach ($permohonans as $permohonan)
                                @if ($permohonan->user_id == Auth::user()->id)
                                    @if ($permohonan->status == 'Diproses')
                                        <div class="
                                        modal fade fixed top-0 left-0 hidden w-full h-full outline-none
                                        overflow-x-hidden overflow-y-auto"
                                            id="riwayat-diproses-{{ $permohonan->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
                                            <div
                                                class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
                                                <div
                                                    class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                                    <div
                                                        class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                                        <h5 class="text-xl font-medium leading-normal text-gray-800"
                                                            id="exampleModalScrollableLabel">
                                                            Detail surat permohonan
                                                        </h5>
                                                        <button type="button"
                                                            class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body relative p-4">
                                                        <p>
                                                            {{ $permohonan->keterangan }}
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                                        <button type="button"
                                                            class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                                                            data-bs-dismiss="modal">
                                                            Oke
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                                            id="riwayat-ditolak-{{ $permohonan->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
                                            <div
                                                class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
                                                <div
                                                    class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">

                                                    <div
                                                        class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                                        <h5 class="text-xl font-medium leading-normal text-gray-800"
                                                            id="exampleModalScrollableLabel">
                                                            Detail surat permohonan
                                                        </h5>
                                                        <button type="button"
                                                            class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body relative p-4">
                                                        <p>
                                                            {{ $permohonan->keterangan }}
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                                        <button type="button"
                                                            class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                                                            data-bs-dismiss="modal">
                                                            Oke
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endif
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
