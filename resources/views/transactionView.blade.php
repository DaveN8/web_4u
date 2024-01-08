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

        <div class="h-screen bg-gray-100 pt-20">
            <h1 class="mb-10 text-center text-2xl font-bold">Transaction History</h1>

            @foreach ($transactions as $tsc)
                <div class="mx-auto max-w-5xl justify-center px-6 md:flex md:space-x-6 xl:px-0 mb-6">
                    @if ($tsc['id_users'] == Auth::user()->id)
                        @foreach ($categories as $cat)
                            @if ($cat['id'] == $tsc['id_categories'])
                                <div class="rounded-lg md:w-2/3 h-fit bg-white shadow-md">
                                    {{-- For Loop --}}

                                    {{-- <div class="m-6 sm:flex sm:justify-start"> --}}
                                    {{-- <div class="flex justify-between sm:flex sm:w-full sm:justify-between"> --}}
                                    {{-- <div class="bg-white shadow-md mt-5 w-1/2 mx-auto rounded-lg"> --}}
                                    {{-- Nama produk/package
                                            <div class="mt-5 sm:mt-0">
                                                <h2 class="text-lg font-bold text-gray-900">
                                                    {{ $cat['nama_categories'] }}
                                                </h2>
                                                <p class="mt-1 text-xs text-gray-700">{{ $cat['harga'] }}</p>
                                            </div>
                                            Status
                                            <div class="sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
                                                <p class="text-sm">Status</p>
                                                <p class="text-red-500">{{ $tsc['statusTransaction'] }}</p>
                                            </div> --}}

                                    <div class="flex justify-between gap-x-6 p-6">
                                        <div class="flex min-w-0 gap-x-4">
                                            <div class="min-w-0 flex-auto">
                                                <p class="text-xl font-semibold leading-6 text-gray-900">
                                                    {{ $cat['nama_categories'] }}</p>

                                                    <p class="mt-1 truncate text-sm leading-5 text-gray-500">
                                                        Rp. {{ $cat['harga'] }}</p>
                                            </div>
                                        </div>
                                        {{-- <div>
                                            <p class="mt-1 truncate text-lg leading-5 text-gray-500">
                                                Rp. {{ $cat['harga'] }}</p>
                                        </div> --}}
                                        <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                                            <p class="text-sm leading-6 text-gray-600">Status</p>
                                            @if ($tsc['statusTransaction'] == 'waiting')
                                                <p class="mt-1 text-xl leading-5 text-orange-300">
                                                    {{ $tsc['statusTransaction'] }}
                                                </p>
                                            @elseif ($tsc['statusTransaction'] == 'declined')
                                                <p class="mt-1 text-xl leading-5 text-red-500">
                                                    {{ $tsc['statusTransaction'] }}
                                                </p>
                                            @elseif ($tsc['statusTransaction'] == 'approved')
                                                <p class="mt-1 text-xl leading-5 text-green-500">
                                                    {{ $tsc['statusTransaction'] }}
                                                </p>
                                            @endif
                                        </div>
                                    </div>

                                    {{-- </div> --}}
                                    {{-- </div> --}}
                                    <div class="grid p-6 pt-0">

                                        @foreach ($transactions as $tra)
                                            @if ($tra['id'] == Auth::user()->id)
                                                @if ($tra['statusTransaction'] == 'waiting')
                                                    <button type="button" disabled
                                                        class="text-white bg-gray-300 hover:bg-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                                                        Pilih Desain
                                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 14 10">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                                                        </svg>
                                                    </button>
                                                @elseif ($tra['statusTransaction'] == 'approved')
                                                    <a href="{{ route('desain.index') }}" type="button"
                                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                                                        Pilih Desain
                                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 14 10">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                                                        </svg>
                                                    </a>
                                                @elseif ($tra['statusTransaction'] == 'declined')
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                    {{-- For Loop --}}
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            @endforeach

        </div>
    </main>
@endsection
