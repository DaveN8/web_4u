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
            <div class="flex items-center justify-center m-5">
                <a href="{{ url('createProducts') }}"
                    class="text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800">Nambah
                    Product</a>
            </div>
        @endif


        <div class="container flex flex-wrap justify-between items-center mx-auto my-10">
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 grid-rows-auto gap-x-28 gap-y-4 mx-auto my-10">
                @foreach ($product as $item)
                    <div class="relative mb-6 rounded-xl" style="background: linear-gradient(to bottom, rgb({{ $color2 }}), rgb({{ $color1 }}));">
                        @if (Auth::check() && Auth::user()->role == 'admin')
                            <a href="{{ route('product.edit',$item->id)}}"
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
                    </div>
                @endforeach
            </div>
        </div>



    </main>
@endsection
