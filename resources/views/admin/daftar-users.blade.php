@extends('admin.layout')

@section('content')

<div class="bg-gray-200 pt-14 pb-6">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 bg-slate-100 rounded-md">
        <div class="">
            <div class="pt-8 px-7 flex items-center bottom-3">
              <button class="focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-indigo-700 bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded-full border-indigo-700 p-2"> 
                <i class="fa-solid fa-arrow-left fa-xl text-white"></i></button>

              <div class="border-solid border-2 border-indigo-600 p-2 ml-3 rounded-full">
                <i class="fa-solid fa-user-tie fa-xl text-gray-800"></i>
              </div>
                <h4 class="text-2xl pl-3 py-4 text-gray-800 font-medium">Daftar Pengguna</h4> 
            </div>
            <div>
                <div class=" px-7 py-3">
                    <table class="w-full drop-shadow-md">
                        <thead>
                          <tr class="bg-indigo-600 text-white ">
                            <th class="py-2 border border-gray-200" >No</th>
                            <th class="py-2 border border-gray-200" >Nama</th>
                            <th class="py-2 border border-gray-200" >Email</th>
                            <th class="py-2 border border-gray-200" >Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="bg-indigo-50">
                            <td class="text-center py-2 border border-gray-200" >1</td>
                            <td class="pl-3 py-2 border border-gray-200" >Ifanu Antoni</td>
                            <td class="pl-3 py-2 border border-gray-200">ifanu@gmail.com</td>
                            <td class="py-2 border border-gray-200 text-center" >
                              {{-- <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light" data-bs-toggle="modal" data-bs-target="#alertHapus"> --}}
                              <button class="text-white focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-red-700 bg-red-700 transition duration-150 ease-in-out hover:bg-red-600 rounded-lg border-red-700 px-3 py-1">
                                Hapus
                              </button>
                            {{-- </a> --}}
                            </td>
                          </tr>
                          <tr class="bg-indigo-100">
                            <td class="text-center py-2 border border-gray-200" >2</td>
                            <td class="pl-3 py-2 border border-gray-200">Ahmad lamaul farid</td>
                            <td class="pl-3 py-2 border border-gray-200">farid@gmail.com</td>
                            <td class="py-2 border border-gray-200 text-center">
                              <button class="text-white focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-red-700 bg-red-700 transition duration-150 ease-in-out hover:bg-red-600 rounded-lg border-red-700 px-3 py-1">
                                Hapus
                              </button>
                            </td>
                          </tr>
                          <tr class="bg-indigo-50" >
                            <td class="text-center py-2 border border-gray-200" >3</td>
                            <td class="pl-3 py-2 border border-gray-200">Aufi fillah</td>
                            <td class="pl-3 py-2 border border-gray-200">opi@gmail.com</td>
                            <td class="py-2 border border-gray-200 text-center">
                              <button class="text-white focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-red-700 bg-red-700 transition duration-150 ease-in-out hover:bg-red-600 rounded-lg border-red-700 px-3 py-1">
                                Hapus
                              </button>
                            </td>
                          </tr>
                          <tr class="bg-indigo-100">
                            <td class="text-center py-2 border border-gray-200" >4</td>
                            <td class="pl-3 py-2 border border-gray-200">Ahmad lamaul farid</td>
                            <td class="pl-3 py-2 border border-gray-200">farid@gmail.com</td>
                            <td class="py-2 border border-gray-200 text-center">
                              <button class="text-white focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-red-700 bg-red-700 transition duration-150 ease-in-out hover:bg-red-600 rounded-lg border-red-700 px-3 py-1">
                                Hapus
                              </button>
                            </td>
                          </tr>
                          <tr class="bg-indigo-50" >
                            <td class="text-center py-2 border border-gray-200" >5</td>
                            <td class="pl-3 py-2 border border-gray-200">Aufi fillah</td>
                            <td class="pl-3 py-2 border border-gray-200">opi@gmail.com</td>
                            <td class="py-2 border border-gray-200 text-center">
                              <button class="text-white focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-red-700 bg-red-700 transition duration-150 ease-in-out hover:bg-red-600 rounded-lg border-red-700 px-3 py-1">
                                Hapus
                              </button>
                            </td>
                          </tr>
                          <tr class="bg-indigo-100">
                            <td class="text-center py-2 border border-gray-200" >6</td>
                            <td class="pl-3 py-2 border border-gray-200">Ahmad lamaul farid</td>
                            <td class="pl-3 py-2 border border-gray-200">farid@gmail.com</td>
                            <td class="py-2 border border-gray-200 text-center">
                              <button class="text-white focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-red-700 bg-red-700 transition duration-150 ease-in-out hover:bg-red-600 rounded-lg border-red-700 px-3 py-1">
                                Hapus
                              </button>
                            </td>
                          </tr>
                          <tr class="bg-indigo-50" >
                            <td class="text-center py-2 border border-gray-200" >7</td>
                            <td class="pl-3 py-2 border border-gray-200">Aufi fillah</td>
                            <td class="pl-3 py-2 border border-gray-200">opi@gmail.com</td>
                            <td class="py-2 border border-gray-200 text-center">
                              <button class="text-white focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-red-700 bg-red-700 transition duration-150 ease-in-out hover:bg-red-600 rounded-lg border-red-700 px-3 py-1">
                                Hapus
                              </button>
                            </td>
                          </tr>
                          <tr class="bg-indigo-100">
                            <td class="text-center py-2 border border-gray-200" >8</td>
                            <td class="pl-3 py-2 border border-gray-200">Ahmad lamaul farid</td>
                            <td class="pl-3 py-2 border border-gray-200">farid@gmail.com</td>
                            <td class="py-2 border border-gray-200 text-center">
                              <button class="text-white focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-red-700 bg-red-700 transition duration-150 ease-in-out hover:bg-red-600 rounded-lg border-red-700 px-3 py-1">
                                Hapus
                              </button>
                            </td>
                          </tr>
                          <tr class="bg-indigo-50" >
                            <td class="text-center py-2 border border-gray-200" >9</td>
                            <td class="pl-3 py-2 border border-gray-200">Aufi fillah</td>
                            <td class="pl-3 py-2 border border-gray-200">opi@gmail.com</td>
                            <td class="py-2 border border-gray-200 text-center">
                              <button class="text-white focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-red-700 bg-red-700 transition duration-150 ease-in-out hover:bg-red-600 rounded-lg border-red-700 px-3 py-1">
                                Hapus
                              </button>
                            </td>
                          </tr>
                          <tr class="bg-indigo-100">
                            <td class="text-center py-2 border border-gray-200" >10</td>
                            <td class="pl-3 py-2 border border-gray-200">Ahmad lamaul farid</td>
                            <td class="pl-3 py-2 border border-gray-200">farid@gmail.com</td>
                            <td class="py-2 border border-gray-200 text-center">
                              <button class="text-white focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-red-700 bg-red-700 transition duration-150 ease-in-out hover:bg-red-600 rounded-lg border-red-700 px-3 py-1">
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
