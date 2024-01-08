@extends('layouts.base')
@section('admin_content')
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

                    <form method="POST" action="{{ route('desain.store') }}" enctype="multipart/form-data" 
                        class="p-12 md:p-24">
                        @csrf
                        
                        <div class="mb-5">

                            <label class="block mb-2 text-sm font-medium" for="templateProduct">Upload
                                file</label>
                            <input name="templateProduct"
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none "
                                id="templateProduct" type="file">

                        </div>

                        <div class="sm:col-span-2 mb-5">
                            <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 ">Description</label>
                            <textarea id="deskripsi" rows="8" name="deskripsi"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Your description here"></textarea>
                        </div>
    

                        <div class="mb-5">
                            <button type="submit"
                                style="color: rgb({{ $color6 }}); background: linear-gradient(to bottom, rgb({{ $color3 }}), rgb({{ $color2 }}));"
                                class="font-medium p-2 md:p-4 uppercase w-full rounded transition transform hover:scale-95">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
       
        @endif

    </main>
@endsection
