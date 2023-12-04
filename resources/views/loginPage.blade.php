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
        <div class="h-screen overflow-hidden flex items-center justify-center"
            style="background: linear-gradient(to bottom, rgb({{ $color6 }}), rgb({{ $color0 }}));">
            <div class="lg:w-6/12 md:7/12 w-8/12 shadow-3xl rounded-xl" style="background-color: rgb({{ $color1 }});">
                <div class="absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    <div class="shadow-2xl rounded-full p-2 md:p-3">
                        <img height="130" width="150" src="{{ asset('img/logo4U.jpg') }}" class="rounded-full object-cover">
                    </div>
                </div>
                

                <form method="POST" action="{{ route('login.post') }}" class="p-12 md:p-24">
                    @csrf
                    <div class="mb-5">
                        <label for="email" class="block mb-2 text-sm font-medium"
                        style="color: rgb({{ $color6 }});">Your
                            email</label>
                        <input type="email" id="email" name="email"
                        style="background-color: rgb({{ $color6 }});"
                            class="text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="name@flowbite.com" required>
                    </div>
                    <div class="mb-5">
                        <label for="password" class="block mb-2 text-sm font-medium
                        style="color: rgb({{ $color6 }});">Your
                            password</label>
                        <input type="password" id="password" name="password"
                        style="background-color: rgb({{ $color6 }});"
                            class="text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="password here..." required>
                    </div>
                    <br>
                    <button
                        style="color: rgb({{ $color6 }}); background: linear-gradient(to bottom, rgb({{ $color3 }}), rgb({{ $color2 }}));"
                        class="font-medium p-2 md:p-4 uppercase w-full rounded transition transform hover:scale-95">Login</button>
                </form>
            </div>
        </div>
    </main>

    
@endsection
