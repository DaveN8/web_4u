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


    <main style="background-color: rgb({{ $color1 }});" class="max-w-full max-h-full">


        <div class="relative overflow-x-auto">
            <div class="m-14 shadow-md md:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="p-4">
                                <div class="flex items-center">

                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Full Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Address Event
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date Event
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Time Event
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Package
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Description Event
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Bukti Transfer
                            </th>
                            {{-- <th scope="col" class="px-6 py-3">
                                Weight
                            </th> --}}
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($package as $pack)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-1" type="checkbox"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td>

                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $pack['fullname'] }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $pack['addressAcara'] }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $pack['dateAcara'] }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $pack['waktuAcara'] }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $pack['jenisPaket'] }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $pack['deskripsiAcara'] }}
                                </td>
                                <td class="px-6 py-4">
                                    <img class="rounded-t-lg" src="{{ asset('storage/' . $pack['buktiTransfer']) }}"
                                        alt="" />
                                </td>
                                {{-- <td class="px-6 py-4">
                                $2999
                            </td>
                            <td class="px-6 py-4">
                                3.0 lb.
                            </td> --}}
                                <td class="flex items-center px-6 py-4">
                                    <a href="#"
                                        class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
