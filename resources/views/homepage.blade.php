@extends('layout')

@section('content')
    <div class="bg-gray-100">
        <div class="container mx-auto flex flex-col items-center py-12 sm:py-24">
            <div class="w-11/12 sm:w-2/3 lg:flex justify-center items-center flex-col  mb-5 sm:mb-10">
                <h1
                    class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl text-center text-gray-800 font-black leading-7 md:leading-10">
                    Selamat Datang di
                    <span class="text-indigo-700">Aplikasi Layanan Litbang</span>
                </h1>
                <p class="mt-5 sm:mt-10 lg:w-10/12 text-gray-400 font-normal text-center text-sm sm:text-lg">Apikasi layanan
                    litbang yang berguna untuk mempermudah pengajuan surat perizinan magang, kerja praktek, KKN, dan
                    penelitian pada Pemerintah Kabupaten Gresik.</p>

            </div>
            @guest
                <div class="flex justify-center items-center">
                    <a href="{{ url('/login') }}">
                        <button
                            class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 lg:text-xl lg:font-bold  rounded text-white px-4 sm:px-10 border border-indigo-700 py-2 sm:py-4 text-sm">Buat
                            permohonan surat</button>
                    </a>
                    <a href="#works">
                        <button
                            class="ml-4 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 bg-transparent transition duration-150 ease-in-out hover:border-indigo-600 lg:text-xl lg:font-bold  hover:text-indigo-600 rounded border border-indigo-700 text-indigo-700 px-4 sm:px-10 py-2 sm:py-4 text-sm">Cara
                            Kerja</button>
                    </a>
                </div>
            @endguest
            @auth
                @if (Auth::user()->hasRole('user'))
                    <div class="flex justify-center items-center">
                        <a href="{{ url('/login') }}">
                            <button
                                class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 lg:text-xl lg:font-bold  rounded text-white px-4 sm:px-10 border border-indigo-700 py-2 sm:py-4 text-sm">Buat
                                permohonan surat</button>
                        </a>
                        <a href="#works">
                            <button
                                class="ml-4 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 bg-transparent transition duration-150 ease-in-out hover:border-indigo-600 lg:text-xl lg:font-bold  hover:text-indigo-600 rounded border border-indigo-700 text-indigo-700 px-4 sm:px-10 py-2 sm:py-4 text-sm">Cara
                                Kerja</button>
                        </a>
                    </div>
                @endif
            @endauth
        </div>
        <section id="works">
            @guest
                <div class="max-w-8xl mx-auto container bg-white dark:bg-gray-900 pt-16 mt- mb-4">
                    <div role="contentinfo" class="flex items-center flex-col px-4">
                        {{-- <p tabindex="0" class="focus:outline-none uppercase text-sm text-center text-gray-600 dark:text-gray-200 leading-4">in few easy steps</p> --}}
                        <h1 tabindex="0"
                            class="focus:outline-none text-4xl lg:text-4xl font-extrabold text-center leading-10 text-gray-800 dark:text-white lg:w-5/12 md:w-9/12 pt-4">
                            Cara kerja web aplikasi Litbang</h1>
                    </div>
                    <div tabindex="0" aria-label="group of cards"
                        class="focus:outline-none mt-20 flex flex-wrap justify-center gap-10 px-4">
                        <div tabindex="0" aria-label="card 1" class="focus:outline-none flex sm:w-full md:w-5/12 pb-20">
                            <div class="w-20 h-20 relative mr-5">
                                <div class="absolute top-0 right-0 bg-indigo-100 rounded w-16 h-16 mt-2 mr-1"></div>
                                <div
                                    class="absolute text-white bottom-0 left-0 bg-indigo-700 rounded w-16 h-16 flex items-center justify-center mt-2 mr-3">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/icon_and_text-SVG1.svg"
                                        alt="drawer">
                                </div>
                            </div>
                            <div class="w-10/12">
                                <h2 tabindex="0"
                                    class="focus:outline-none text-lg font-bold leading-tight text-gray-800 dark:text-white">
                                    Ready to use components</h2>
                                <p tabindex="0"
                                    class="focus:outline-none text-base text-gray-600 dark:text-gray-200 leading-normal pt-2">It
                                    provides a very simple start, no need to write a lot of code, you just import it and start
                                    the primitive components and create the ones you need.</p>
                            </div>
                        </div>
                        <div tabindex="0" aria-label="card 2" class="focus:outline-none flex sm:w-full md:w-5/12 pb-20">
                            <div class="w-20 h-20 relative mr-5">
                                <div class="absolute top-0 right-0 bg-indigo-100 rounded w-16 h-16 mt-2 mr-1"></div>
                                <div
                                    class="absolute text-white bottom-0 left-0 bg-indigo-700 rounded w-16 h-16 flex items-center justify-center mt-2 mr-3">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/icon_and_text-SVG2.svg" alt="check">
                                </div>
                            </div>
                            <div class="w-10/12">
                                <h2 tabindex="0"
                                    class="focus:outline-none text-lg font-semibold leading-tight text-gray-800 dark:text-white">
                                    Hight Quality UI you can reply on</h2>
                                <p tabindex="0"
                                    class="focus:outline-none text-base text-gray-600 dark:text-gray-200 leading-normal pt-2">
                                    Modify the visual appearance of your site – including colors, fonts, margins and other
                                    style-related properties – with a sophisticated style.</p>
                            </div>
                        </div>
                        <div tabindex="0" aria-label="card 3" class="focus:outline-none flex sm:w-full md:w-5/12 pb-20">
                            <div class="w-20 h-20 relative mr-5">
                                <div class="absolute top-0 right-0 bg-indigo-100 rounded w-16 h-16 mt-2 mr-1"></div>
                                <div
                                    class="absolute text-white bottom-0 left-0 bg-indigo-700 rounded w-16 h-16 flex items-center justify-center mt-2 mr-3">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/icon_and_text-SVG3.svg"
                                        alt="html tag">
                                </div>
                            </div>
                            <div class="w-10/12">
                                <h2 tabindex="0"
                                    class="focus:outline-none text-lg font-semibold leading-tight text-gray-800 dark:text-white">
                                    Coded by Developers for Developers</h2>
                                <p tabindex="0"
                                    class="focus:outline-none text-base text-gray-600 dark:text-gray-200 leading-normal pt-2">
                                    Instead of just giving you the tools to create your own site, they offer you a list of
                                    themes you can choose from. Thus a handy product.</p>
                            </div>
                        </div>
                        <div tabindex="0" aria-label="card 4" class="focus:outline-none flex sm:w-full md:w-5/12 pb-20">
                            <div class="w-20 h-20 relative mr-5">
                                <div class="absolute top-0 right-0 bg-indigo-100 rounded w-16 h-16 mt-2 mr-1"></div>
                                <div
                                    class="absolute text-white bottom-0 left-0 bg-indigo-700 rounded w-16 h-16 flex items-center justify-center mt-2 mr-3">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/icon_and_text-SVG4.svg"
                                        alt="monitor">
                                </div>
                            </div>
                            <div class="w-10/12">
                                <h2 tabindex="0"
                                    class="focus:outline-none text-lg font-semibold leading-tight text-gray-800 dark:text-white">
                                    The Last UI kit you’ll ever need</h2>
                                <p tabindex="0"
                                    class="focus:outline-none text-base text-gray-600 dark:text-gray-200 leading-normal pt-2">We
                                    have chosen the bright color palettes that arouse the only positive emotions. The kit that
                                    simply assures to be loved by everyone.</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endguest
            @auth
                @if (Auth::user()->hasRole('user'))
                    <div class="max-w-8xl mx-auto container bg-white dark:bg-gray-900 pt-16 mt- mb-4">
                        <div role="contentinfo" class="flex items-center flex-col px-4">
                            {{-- <p tabindex="0" class="focus:outline-none uppercase text-sm text-center text-gray-600 dark:text-gray-200 leading-4">in few easy steps</p> --}}
                            <h1 tabindex="0"
                                class="focus:outline-none text-4xl lg:text-4xl font-extrabold text-center leading-10 text-gray-800 dark:text-white lg:w-5/12 md:w-9/12 pt-4">
                                Cara kerja web aplikasi Litbang</h1>
                        </div>
                        <div tabindex="0" aria-label="group of cards"
                            class="focus:outline-none mt-20 flex flex-wrap justify-center gap-10 px-4">
                            <div tabindex="0" aria-label="card 1" class="focus:outline-none flex sm:w-full md:w-5/12 pb-20">
                                <div class="w-20 h-20 relative mr-5">
                                    <div class="absolute top-0 right-0 bg-indigo-100 rounded w-16 h-16 mt-2 mr-1"></div>
                                    <div
                                        class="absolute text-white bottom-0 left-0 bg-indigo-700 rounded w-16 h-16 flex items-center justify-center mt-2 mr-3">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/icon_and_text-SVG1.svg"
                                            alt="drawer">
                                    </div>
                                </div>
                                <div class="w-10/12">
                                    <h2 tabindex="0"
                                        class="focus:outline-none text-lg font-bold leading-tight text-gray-800 dark:text-white">
                                        Ready to use components</h2>
                                    <p tabindex="0"
                                        class="focus:outline-none text-base text-gray-600 dark:text-gray-200 leading-normal pt-2">
                                        It
                                        provides a very simple start, no need to write a lot of code, you just import it and
                                        start
                                        the primitive components and create the ones you need.</p>
                                </div>
                            </div>
                            <div tabindex="0" aria-label="card 2" class="focus:outline-none flex sm:w-full md:w-5/12 pb-20">
                                <div class="w-20 h-20 relative mr-5">
                                    <div class="absolute top-0 right-0 bg-indigo-100 rounded w-16 h-16 mt-2 mr-1"></div>
                                    <div
                                        class="absolute text-white bottom-0 left-0 bg-indigo-700 rounded w-16 h-16 flex items-center justify-center mt-2 mr-3">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/icon_and_text-SVG2.svg"
                                            alt="check">
                                    </div>
                                </div>
                                <div class="w-10/12">
                                    <h2 tabindex="0"
                                        class="focus:outline-none text-lg font-semibold leading-tight text-gray-800 dark:text-white">
                                        Hight Quality UI you can reply on</h2>
                                    <p tabindex="0"
                                        class="focus:outline-none text-base text-gray-600 dark:text-gray-200 leading-normal pt-2">
                                        Modify the visual appearance of your site – including colors, fonts, margins and other
                                        style-related properties – with a sophisticated style.</p>
                                </div>
                            </div>
                            <div tabindex="0" aria-label="card 3" class="focus:outline-none flex sm:w-full md:w-5/12 pb-20">
                                <div class="w-20 h-20 relative mr-5">
                                    <div class="absolute top-0 right-0 bg-indigo-100 rounded w-16 h-16 mt-2 mr-1"></div>
                                    <div
                                        class="absolute text-white bottom-0 left-0 bg-indigo-700 rounded w-16 h-16 flex items-center justify-center mt-2 mr-3">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/icon_and_text-SVG3.svg"
                                            alt="html tag">
                                    </div>
                                </div>
                                <div class="w-10/12">
                                    <h2 tabindex="0"
                                        class="focus:outline-none text-lg font-semibold leading-tight text-gray-800 dark:text-white">
                                        Coded by Developers for Developers</h2>
                                    <p tabindex="0"
                                        class="focus:outline-none text-base text-gray-600 dark:text-gray-200 leading-normal pt-2">
                                        Instead of just giving you the tools to create your own site, they offer you a list of
                                        themes you can choose from. Thus a handy product.</p>
                                </div>
                            </div>
                            <div tabindex="0" aria-label="card 4" class="focus:outline-none flex sm:w-full md:w-5/12 pb-20">
                                <div class="w-20 h-20 relative mr-5">
                                    <div class="absolute top-0 right-0 bg-indigo-100 rounded w-16 h-16 mt-2 mr-1"></div>
                                    <div
                                        class="absolute text-white bottom-0 left-0 bg-indigo-700 rounded w-16 h-16 flex items-center justify-center mt-2 mr-3">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/icon_and_text-SVG4.svg"
                                            alt="monitor">
                                    </div>
                                </div>
                                <div class="w-10/12">
                                    <h2 tabindex="0"
                                        class="focus:outline-none text-lg font-semibold leading-tight text-gray-800 dark:text-white">
                                        The Last UI kit you’ll ever need</h2>
                                    <p tabindex="0"
                                        class="focus:outline-none text-base text-gray-600 dark:text-gray-200 leading-normal pt-2">
                                        We
                                        have chosen the bright color palettes that arouse the only positive emotions. The kit
                                        that
                                        simply assures to be loved by everyone.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endauth
        </section>

    </div>
@endsection

@section('scripts')
@endsection
