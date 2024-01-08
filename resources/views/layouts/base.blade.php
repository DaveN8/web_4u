<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/gsap@3.9.0/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <title>4U Invitation</title>


    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,700" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

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
</head>

<body class="font-sans antialiased">
    {{-- 
    @include('layouts.navbar')
    <div>
        @yield('main_content')
    </div> --}}

    @if (Auth::check() && Auth::user()->role == 'admin')
        @include('layouts.adminNavbar')

        {{-- <div>
            @yield('main_content')
        </div> --}}
    @elseif(Auth::check() && Auth::user()->role == 'member')
        @include('layouts.navbar')

        <div>
            @yield('main_content')
        </div>
    @else
        @include('layouts.navbar')
        <div>
            @yield('main_content')
        </div>
    @endif






    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>
