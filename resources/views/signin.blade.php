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
</head>

<body class="font-sans antialiased">

        <div class="h-screen overflow-hidden flex items-center justify-center"
            style="background: linear-gradient(to bottom, rgb({{ $color6 }}), rgb({{ $color0 }}));">
            <div class="lg:w-6/12 md:7/12 w-8/12 shadow-3xl rounded-xl"
                style="background-color: rgb({{ $color1 }});">
                <div class="absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    <div class="shadow-2xl rounded-full p-2 md:p-3">
                        <img height="130" width="150" src="{{ asset('img/logo4U.jpg') }}"
                            class="rounded-full object-cover">
                    </div>
                </div>

                <form method="POST" action="{{ route('user.store') }}" class="p-12 md:p-24">
                    @csrf
                    <div class="mb-5">
                        <label for="name" class="block mb-2 text-sm font-medium"
                            style="color: rgb({{ $color6 }});">Your Name</label>
                        <input type="text" id="name" name="name"
                            style="background-color: rgb({{ $color6 }});"
                            class="text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="your name here...">
                    </div>
                    <div class="mb-5">
                        <label for="email" class="block mb-2 text-sm font-medium"
                            style="color: rgb({{ $color6 }});">Your email</label>
                        <input type="email" id="email" name="email"
                            style="background-color: rgb({{ $color6 }});"
                            class="text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="name@email.com" required>
                    </div>
                    <div class="mb-5">
                        <label for="password" class="block mb-2 text-sm font-medium"
                            style="color: rgb({{ $color6 }});">Your password</label>
                        <input type="password" id="password" name="password"
                            style="background-color: rgb({{ $color6 }});"
                            class="text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="password here..." required>
                    </div>

                    <button
                        style="color: rgb({{ $color6 }}); background: linear-gradient(to bottom, rgb({{ $color3 }}), rgb({{ $color2 }}));"
                        class="font-medium p-2 md:p-4 uppercase w-full rounded transition transform hover:scale-95">Register
                        new account</button>
                </form>
            </div>
        </div>

</body>

</html>
