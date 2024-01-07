@extends('layouts.base')
@section('main_content')
    <main>
        <!-- component -->
        <!-- Create By Joker Banny -->
        <style>
            @layer utilities {

                input[type="number"]::-webkit-inner-spin-button,
                input[type="number"]::-webkit-outer-spin-button {
                    -webkit-appearance: none;
                    margin: 0;
                }
            }
        </style>

        <body>
            <div class="h-screen bg-gray-100 pt-20">
                <h1 class="mb-10 text-center text-2xl font-bold">Cart Items</h1>
                <div class="mx-auto max-w-5xl justify-center px-6 md:flex md:space-x-6 xl:px-0">
                    <div class="rounded-lg md:w-2/3 h-fit bg-white shadow-md">
                        {{-- For Loop --}}
                        <div class="m-6 sm:flex sm:justify-start">
                            <div class="flex sm:ml-4 sm:flex sm:w-full sm:justify-between">
                                {{-- Nama produk/package --}}
                                <div class="mt-5 sm:mt-0">
                                    <h2 class="text-lg font-bold text-gray-900">Nike Air Max 2019</h2>
                                    <p class="mt-1 text-xs text-gray-700">36EU - 4US</p>
                                </div>
                                {{-- Status --}}
                                <div class="grid sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
                                    <p class="text-sm">Status</p>
                                    <p class="text-red-500">Ongoing</p>
                                </div>

                            </div>
                        </div>
                        <div class="grid p-6">
                            {{-- Upload Foto --}}
                                {{-- <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="file_input">Upload file</label> --}}
                                <input
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="file_input_help" id="file_input" type="file">
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG,
                                    PNG,
                                    JPG or GIF (MAX. 800x400px).</p>
                        </div>
                        {{-- For Loop --}}
                    </div>
                </div>
            </div>
        </body>
    </main>
@endsection
