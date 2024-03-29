@extends('layouts.base')
@if (Auth::check() && Auth::user()->role == 'admin')
    @section('admin_content')
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
        <div class="max-h-full max-w-full">
            <div class="mt-16">
                <div class="flex items-center justify-center m-5">
                    <a href="{{ route('desain.create') }}"
                        class="text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </a>
                </div>

                <div class="container flex flex-wrap justify-between items-center mx-auto my-10">
                    <div
                        class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 grid-rows-auto gap-x-28 gap-y-4 mx-auto my-10">
                        @foreach ($desain as $item)
                            <div
                                class="w-72 bg-white border-2 shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">

                                <a href="#">
                                    <img src="{{ asset('storage/' . $item['templateProduct']) }}" alt="Product"
                                        class="h-80 w-72 object-cover rounded-t-xl" />
                                    <div class="px-4 py-3 w-72">
                                        <span class="text-gray-400 mr-3 uppercase text-xs">ForYou.Corp</span>
                                        <p class="text-lg font-bold text-black truncate block capitalize">
                                            {{ $item['deskripsi'] }}</p>


                                        {{-- <select id="default" name="status"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    <option selected>Choose a Package</option>
                                                    <option value="hide">Hide</option>
                                                    <option value="show">Show</option>
                                                </select> --}}


                                        <p class="block mb-2 text-sm font-medium text-gray-900 ">{{ $item['status'] }}
                                        </p>
                                        <form method="POST" action="{{ route('desain.update', $item->id) }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <div class="mb-2">
                                                <label for="countries"
                                                    class="block mb-2 text-sm font-medium text-gray-900 ">Select
                                                    Option</label>
                                                <select id="countries" name="status"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    <option selected>Choose Option</option>
                                                    <option value="hide">hide</option>
                                                    <option value="show">show</option>
                                                </select>
                                            </div>
                                            <input type="hidden" name="id_desain" value="{{ $item['id'] }}">
                                            <button type="submit"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">Edit</button>


                                        </form>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endsection
@elseif(Auth::check() && Auth::user()->role == 'member')
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
        <div class="container flex flex-wrap justify-between items-center mx-auto my-10">
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 grid-rows-auto gap-x-28 gap-y-4 mx-auto my-10">

                @foreach ($desain as $item)
                    <div class="w-72 bg-white border-2 shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                        <form action="{{ route('package.create') }}" method="GET" enctype="multipart/form-data">
                            @csrf
                            @if ($item['id'] == 1)
                                <div class="flex max-h-72 justify-center p-10">
                                    <img src="{{ asset('img/desain1.png') }}" alt=""
                                        class="rounded-lg object-contain" />
                                </div>
                            @elseif($item['id'] == 2)
                                <div class="flex max-h-72 justify-center p-10">
                                    <img src="{{ asset('img/desain2.png') }}" alt=""
                                        class="rounded-lg object-contain" />
                                </div>
                            @elseif($item['id'] == 3)
                                <div class="flex max-h-72 justify-center p-10">
                                    <img src="{{ asset('img/produkjadi1.png') }}" alt=""
                                        class="rounded-lg object-contain" />
                                </div>
                            @endif
                            <div class="px-4 py-3 w-72">
                                <span class="text-gray-400 mr-3 uppercase text-xs">ForYou.Corp</span>
                                <p class="text-lg font-bold text-black truncate block capitalize">
                                    {{ $item['nama_categories'] }}</p>
                                <p class="text-lg font-semibold text-black  my-3">{{ $item['deskripsi'] }}</p>

                                <input type="hidden" name="id_users" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="id_desains" value="{{ $item['id'] }}">
                                {{-- <input type="hidden" name="id_categories" value="{{$id_categories}}"> --}}
                                <button type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                                    Pilih Desain Ini
                                </button>
                            </div>
                        </form>

                    </div>
                @endforeach

            </div>
        </div>
    @endsection
@endif

@guest

@endguest
