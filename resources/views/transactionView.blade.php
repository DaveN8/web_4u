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
            @if (Auth::check() && Auth::user()->role == 'admin')
                <div class=" sm:ml-64">
                    <div class="h-screen bg-gray-100 pt-20">
                        <h1 class="mb-10 text-center text-2xl font-bold">Cart Items</h1>

                        <div class="mx-auto max-w-5xl justify-center px-6 md:flex md:space-x-6 xl:px-0">

                            @foreach ($transactions as $tsc)
                                @foreach ($user as $us)
                                    @foreach ($categories as $cat)
                                        @if ($cat['id'] == $tsc['id_categories'])
                                            @if ($us['id'] == $tsc['id_users'])
                                                <div class="rounded-lg md:w-2/3 h-fit bg-white shadow-md">
                                                    {{-- For Loop --}}

                                                    <div class="m-6 sm:flex sm:justify-start">
                                                        <div class="flex sm:ml-4 sm:flex sm:w-full sm:justify-between">
                                                            {{-- Nama produk/package --}}
                                                            <div class="mt-5 sm:mt-0">
                                                                <h2 class="text-lg font-bold text-gray-900">
                                                                    {{ $cat['nama_categories'] }} - {{ $us['name'] }}
                                                                </h2>
                                                                <p class="mt-1 text-xs text-gray-700">{{ $cat['harga'] }}
                                                                </p>
                                                            </div>
                                                            {{-- Status --}}
                                                            <div class="grid sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
                                                                <p class="text-sm">Status</p>
                                                                <p class="text-red-500">{{ $tsc['statusTransaction'] }}</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="grid p-6">
                                                        {{-- Upload Foto --}}
                                                        {{-- <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="file_input">Upload file</label> --}}


                                                        {{-- <input type="hidden" name="id_productUser" value="{{ Auth::user()->id }}"> --}}

                                                        <form method="POST"
                                                            action="{{ route('transaction.update', $tsc->id) }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PATCH')
                                                            <div class="mb-2">
                                                                <label for="countries"
                                                                    class="block mb-2 text-sm font-medium text-gray-900 ">Select
                                                                    Option</label>
                                                                <select id="countries" name="statusTransaction"
                                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                    <option selected>Choose Option</option>
                                                                    <option value="approved">approved</option>
                                                                    <option value="waiting">waiting</option>
                                                                    <option value="declined">declined</option>
                                                                </select>
                                                            </div>
                                                            <input type="hidden" name="id_transaction"
                                                                value="{{ $tsc['id'] }}">
                                                            <button type="submit"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">Edit</button>


                                                        </form>
                                                        </a>
                                                    </div>

                                                    {{-- For Loop --}}
                                                </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endforeach
                            @endforeach

                        </div>
                    </div>
                </div>
            @elseif(Auth::check() && Auth::user()->role == 'member')
                <div class=" sm:ml-64">
                    <div class="h-screen bg-gray-100 pt-20">
                        <h1 class="mb-10 text-center text-2xl font-bold">Cart Items</h1>

                        <div class="mx-auto max-w-5xl justify-center px-6 md:flex md:space-x-6 xl:px-0">

                            @foreach ($transactions as $tsc)
                                @if ($tsc['id_users'] == Auth::user()->id)
                                    @foreach ($categories as $cat)
                                        @if ($cat['id'] == $tsc['id_categories'])
                                            <div class="rounded-lg md:w-2/3 h-fit bg-white shadow-md">
                                                {{-- For Loop --}}

                                                <div class="m-6 sm:flex sm:justify-start">
                                                    <div class="flex sm:ml-4 sm:flex sm:w-full sm:justify-between">
                                                        {{-- Nama produk/package --}}
                                                        <div class="mt-5 sm:mt-0">
                                                            <h2 class="text-lg font-bold text-gray-900">
                                                                {{ $cat['nama_categories'] }}
                                                            </h2>
                                                            <p class="mt-1 text-xs text-gray-700">{{ $cat['harga'] }}</p>
                                                        </div>
                                                        {{-- Status --}}
                                                        <div class="grid sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
                                                            <p class="text-sm">Status</p>
                                                            <p class="text-red-500">{{ $tsc['statusTransaction'] }}</p>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="grid p-6">
                                                    {{-- Upload Foto --}}
                                                    {{-- <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="file_input">Upload file</label> --}}


                                                    {{-- <input type="hidden" name="id_productUser" value="{{ Auth::user()->id }}"> --}}

                                                    <a href="{{ route('desain.index') }}" type="button"
                                                        class="text-white mt-5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                        Pilih Desain
                                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 14 10">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                                                        </svg>
                                                    </a>
                                                </div>

                                                {{-- For Loop --}}
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach

                        </div>
                    </div>
                </div>
            @endif

        </body>
    </main>
@endsection
