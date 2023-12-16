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

    <main class="max-w-full max-h-full">
        @if (Auth::check() && Auth::user()->role == 'admin')
            <div class=" sm:ml-64">
                <div class="  mt-16">
                    <div class="flex items-center justify-center m-5">
                        <a href="{{ route('product.create') }}"
                            class="text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                              </svg>                              
                        </a>
                    </div>



                    <div class="container flex flex-wrap justify-between items-center mx-auto my-10">
                        <div
                            class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 grid-rows-auto gap-x-28 gap-y-4 mx-auto my-10">


                            @foreach ($product as $item)
                                <div
                                    class="w-72 bg-white border-2 shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">

                                    <a href="#">
                                        <img src="{{ asset('storage/' . $item['foto_product']) }}" alt="Product"
                                            class="h-80 w-72 object-cover rounded-t-xl" />
                                        <div class="px-4 py-3 w-72">
                                            <span class="text-gray-400 mr-3 uppercase text-xs">ForYou.Corp</span>
                                            <p class="text-lg font-bold text-black truncate block capitalize">
                                                {{ $item['nama_product'] }}</p>
                                            <div class="flex items-center">
                                                <p class="text-lg font-semibold text-black cursor-auto my-3">$149</p>
                                                <del>
                                                    <p class="text-sm text-gray-600 cursor-auto ml-2">$199</p>
                                                </del>
                                                <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                        height="20" fill="currentColor" class="bi bi-bag-plus"
                                                        viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                                        <path
                                                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                {{-- <div class="relative mb-6 rounded-xl"
                    style="background: linear-gradient(to bottom, rgb({{ $color2 }}), rgb({{ $color1 }}));">
                    @if (Auth::check() && Auth::user()->role == 'admin')
                        <a href="{{ route('product.edit', $item->id) }}"
                            class="absolute top-0 right-0 px-11 py-2 text-sm font-medium text-white bg-yellow-500 rounded-bl-lg hover:bg-yellow-600 focus:outline-none focus:ring-4 focus:ring-yellow-300 dark:bg-yellow-400 dark:hover:bg-yellow-500 dark:focus:ring-yellow-600">
                            Edit
                        </a>
                    @endif
                    <div class="max-w-sm border-gray-200 rounded-lg shadow-2xl dark:border-gray-700 p-10">
                        <div class="text-center m-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">
                                {{ $item['nama_product'] }}
                            </h5>
                        </div>
                        <a href="">
                            <img class="rounded-t-lg" src="{{ asset('storage/' . $item['foto_product']) }}"
                                alt="" />
                        </a>
                        <div class="">
                            <div class="flex items-center justify-center ">
                                <a href="{{ url('formPackage') }}"
                                    class="inline-flex items-center px-3 py-2 text-sm mx-5 font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Pesan Sekarang
                                </a>
                                <a href="contoh1"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Lihat Tampilan
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="container flex flex-wrap justify-between items-center mx-auto my-10">
                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 grid-rows-auto gap-x-28 gap-y-4 mx-auto my-10">


                    @foreach ($product as $item)
                        <div
                            class="w-72 bg-white border-2 shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">

                            <a href="#">
                                <img src="{{ asset('storage/' . $item['foto_product']) }}" alt="Product"
                                    class="h-80 w-72 object-cover rounded-t-xl" />
                                <div class="px-4 py-3 w-72">
                                    <span class="text-gray-400 mr-3 uppercase text-xs">ForYou.Corp</span>
                                    <p class="text-lg font-bold text-black truncate block capitalize">
                                        {{ $item['nama_product'] }}</p>
                                    <div class="flex items-center">
                                        <p class="text-lg font-semibold text-black cursor-auto my-3">$149</p>
                                        <del>
                                            <p class="text-sm text-gray-600 cursor-auto ml-2">$199</p>
                                        </del>
                                        <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                height="20" fill="currentColor" class="bi bi-bag-plus"
                                                viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                                <path
                                                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                            </svg></div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        {{-- <div class="relative mb-6 rounded-xl"
        style="background: linear-gradient(to bottom, rgb({{ $color2 }}), rgb({{ $color1 }}));">
        @if (Auth::check() && Auth::user()->role == 'admin')
            <a href="{{ route('product.edit', $item->id) }}"
                class="absolute top-0 right-0 px-11 py-2 text-sm font-medium text-white bg-yellow-500 rounded-bl-lg hover:bg-yellow-600 focus:outline-none focus:ring-4 focus:ring-yellow-300 dark:bg-yellow-400 dark:hover:bg-yellow-500 dark:focus:ring-yellow-600">
                Edit
            </a>
        @endif
        <div class="max-w-sm border-gray-200 rounded-lg shadow-2xl dark:border-gray-700 p-10">
            <div class="text-center m-5">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">
                    {{ $item['nama_product'] }}
                </h5>
            </div>
            <a href="">
                <img class="rounded-t-lg" src="{{ asset('storage/' . $item['foto_product']) }}"
                    alt="" />
            </a>
            <div class="">
                <div class="flex items-center justify-center ">
                    <a href="{{ url('formPackage') }}"
                        class="inline-flex items-center px-3 py-2 text-sm mx-5 font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Pesan Sekarang
                    </a>
                    <a href="contoh1"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Lihat Tampilan
                    </a>
                </div>
            </div>
        </div>
    </div> --}}
                    @endforeach
                </div>
            </div>
        @endif




    </main>
@endsection
