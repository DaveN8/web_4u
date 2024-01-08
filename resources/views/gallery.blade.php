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
    <div class="text-center py-24 shadow-md">
        <p class="text-3xl font-bold">
            Yuk di lihat-lihat
        </p>
        <br>
        <p class="text-xl font-semibold">
            Desain dan produk yang sudah kami buat
        </p>
    </div>
    <div class="flex p-5 ml-20">
        <p class="text-2xl font-bold">
            Designs
        </p>
    </div>
    <div class="container flex flex-wrap justify-between items-center mx-auto mb-10">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 grid-rows-auto gap-x-28 gap-y-4 mx-auto my-10">


            @foreach ($desain as $item)
                <div class="w-72 bg-white border-2 shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                    <form action="{{ route('desain.edit', $item->id) }}" method="GET" enctype="multipart/form-data">
                        @csrf
                        @method('GET')
                        <div class="flex max-h-72 justify-center p-10">
                            <img src="{{ asset('storage/' . $item['templateProduct']) }}"
                                class="rounded-lg object-scale-down object-contain" alt="">
                        </div>
                        <div class="px-4 py-3 w-72">
                            <span class="text-gray-400 mr-3 uppercase text-xs">ForYou.Corp</span>
                            {{-- <p class="text-lg font-bold text-black truncate block capitalize">
                                {{ $item['nama'] }}</p> --}}
                            <p class="text-lg font-semibold text-black  my-3">{{ $item['deskripsi'] }}</p>
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                                Lihat Desain Ini
                            </button>
                        </div>
                    </form>
                </div>
            @endforeach


        </div>
    </div>
    <div class="flex p-5 ml-20">
        <p class="text-2xl font-bold">
            Contoh Produk
        </p>
    </div>
    <div class="container flex flex-wrap justify-between items-center mx-auto mb-10">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 grid-rows-auto gap-x-28 gap-y-4 mx-auto my-10">
            <div class="w-72 bg-white border-2 shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                <div class="flex max-h-72 justify-center p-10">
                    <img src="{{ asset('img/produkjadi1-1.png') }}" class="rounded-lg object-scale-down object-contain"
                        alt="">
                </div>
                <div class="px-4 py-3 w-72">
                    <span class="text-gray-400 mr-3 uppercase text-xs">ForYou.Corp</span>
                    <p class="text-lg font-bold text-black truncate block capitalize">
                        Joyceline Lovenna Kurniawan </p>
                    <p class="text-lg font-semibold text-black  my-3">Paket: Elite</p>
                    <a href="{{ url('/produk') }}"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                        Lihat Desain Ini
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
