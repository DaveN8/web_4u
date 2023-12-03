@extends('layouts.base')
@section('main_content')
    @php
        $color1 = '248, 240, 229'; // light cream
        $color2 = '234, 219, 200'; // mid cream
        $color3 = '218, 192, 163'; // dark cream
        $color4 = '205, 170, 131'; // darker cream
        $color5 = '189, 158, 122'; // very dark cream
        $color6 = '15, 44, 89'; // navy
        $color7 = '255, 255, 255'; // white
        $color8 = '100, 100, 100'; // gray

        // command utk pakai rgb color
        // style="background-color: rgb({{ $color6 }});"

    @endphp

    <main>
        @if (Auth::check() && Auth::user()->role == 'admin')
            <div class="flex items-center justify-center m-5">
                <a href="{{ url('createProducts') }}"
                    class="text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800">Nambah
                    Product</a>
            </div>
        @endif

        <div class="m-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 ">
                <div class="max-w-sm  border-gray-200 rounded-lg shadow-lg dark:border-gray-700 p-10">
                    <div class="text-center m-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Noteworthy technology
                            acquisitions 2021</h5>
                    </div>
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('img/akad.png') }}" alt="" />
                    </a>
                    <div class="">
                        <div class="flex items-center justify-center ">
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm mx-5 font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Pesan Sekarang
                            </a>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Lihat Tampilan
                            </a>
                        </div>

                    </div>
                </div>
                <div class="max-w-sm  border-gray-200 rounded-lg shadow-lg dark:border-gray-700 p-10">
                    <div class="text-center m-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Noteworthy technology
                            acquisitions 2021</h5>
                    </div>
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('img/akad.png') }}" alt="" />
                    </a>
                    <div class="">
                        <div class="flex items-center justify-center">
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm mx-5 font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Pesan Sekarang
                            </a>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Lihat Tampilan
                            </a>
                        </div>

                    </div>
                </div>
                <div class="max-w-sm  border-gray-200 rounded-lg shadow-lg dark:border-gray-700 p-10">
                    <div class="text-center m-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Noteworthy technology
                            acquisitions 2021</h5>
                    </div>
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('img/akad.png') }}" alt="" />
                    </a>
                    <div class="">
                        <div class="flex items-center justify-center">
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm mx-5 font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Pesan Sekarang
                            </a>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Lihat Tampilan
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
