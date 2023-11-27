<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>4U Invitation</title>
    

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,700" />
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    @include('layouts.navbar')

    <div class="min-h-screen bg-gray-100">

        <div>
            @yield('main_content')
        </div>

    </div>

    {{-- @include('components.footer') --}}


    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>
