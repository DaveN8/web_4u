@extends('layouts.base')
@section('main_content')
    @php
        $color0 = '249, 243, 235'; //lighter cream
        $color1 = '248, 240, 229'; // light cream
        $color2 = '234, 219, 200'; // mid cream
        $color3 = '218, 192, 163'; // dark cream
        $color4 = '205, 170, 131'; // darker cream
        $color5 = '189, 158, 122'; // very dark cream
        $color6 = '15, 44, 89'; // navy
        $color7 = '255, 255, 255'; // white
        $color8 = '100, 100, 100'; // gray
        $color9 = '242, 242, 242'; // light gray

        // command utk pakai rgb color
        // style="color: rgb({{ $color1 }});"
        // style="background-color: rgb({{ $color6 }});"
        // style="background: linear-gradient(to bottom, rgb({{ $color2 }}), rgb({{ $color1 }}));"

    @endphp

    <main>
        @if (Auth::check() && Auth::user()->role == 'admin')
            <div class="h-screen overflow-hidden flex items-center justify-center"
                style="background: linear-gradient(to bottom, rgb({{ $color6 }}), rgb({{ $color0 }}));">
                <div class="lg:w-6/12 md:7/12 w-8/12 shadow-3xl rounded-xl"
                    style="background-color: rgb({{ $color1 }});">

                    <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data"
                        class="p-12 md:p-24">
                        @csrf
                        @method('POST')
                        <div class="mb-5">
                            <label for="nama_product" class="block mb-2 text-sm font-medium">Nama
                                Product</label>
                            <input name="nama_product" type="text" id="nama_product"
                                class="text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                        </div>
                        <div class="mb-5">

                            <label class="block mb-2 text-sm font-medium" for="foto_product">Upload
                                file</label>
                            <input name="foto_product"
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none "
                                id="foto_product" type="file">

                        </div>

                        <div class="mb-5">
                            <button type="submit"
                                style="color: rgb({{ $color6 }}); background: linear-gradient(to bottom, rgb({{ $color3 }}), rgb({{ $color2 }}));"
                                class="font-medium p-2 md:p-4 uppercase w-full rounded transition transform hover:scale-95">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        @else
            <div class="flex items-center justify-center p-10">
                <div
                    class="w-full max-w-lg p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="mb-5">
                            <label for="nama_product" class="block mb-2 text-sm font-medium text-gray-900 ">Nama
                                Product</label>
                            <input name="nama_product" type="text" id="nama_product"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="mb-5">

                            <label class="block mb-2 text-sm font-medium text-gray-900 " for="foto_product">Upload
                                file</label>
                            <input name="foto_product"
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="foto_product" type="file">

                        </div>

                        <div class="mb-5">
                            <button type="submit"
                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        @endif

    </main>
@endsection
