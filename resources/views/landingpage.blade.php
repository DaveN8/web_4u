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
        // @dd($categories)

    @endphp


    <main style="background-color: rgb({{ $color1 }});">

        <div>
            {{-- Background Gradasi Banner -> About --}}
            <div style="background: linear-gradient(to bottom, rgb({{ $color2 }}), rgb({{ $color6 }}));">
                {{-- <div style="background: linear-gradient(to bottom, rgb({{ $color6 }}), rgb({{ $color1 }}));"> --}}
                <div>
                    <!-- BANNER -->
                    <div class="relative flex flex-col md:flex-row">

                        <!-- Image Column with Shadow Container -->
                        <div class="md:w-1/2 relative p-10 order-1 md:order-1">
                            <div class="shadow-2xl sm:rounded-2xl sm:overflow-hidden">
                                <img class="h-full w-full object-fill" src="{{ asset('img/banner4u.png') }}"
                                    alt="Banner Image">
                                <div class="absolute inset-0 mix-blend-multiply"></div>
                            </div>
                        </div>

                        <!-- Text Column -->
                        <div class="md:w-1/2 order-2 md:order-2">
                            <div class="max-w-3xl mx-auto px-4 py-32 sm:px-6 lg:flex lg:items-center lg:px-8">
                                <div class="max-w-5xl">
                                    <p class="font-sans text-4xl font-bold lg:text-7xl lg:pr-24 md:text-6xl">
                                        Make Your Own Invitation Card
                                    </p>
                                    <div class="h-10"></div>
                                    <p class="max-w-2xl font-serif text-xl md:text-2xl">
                                        Imagine being able to spend less time and less money to create your own
                                        invitation
                                        card
                                    </p>
                                    <br>

                                    <a href="#introduction"
                                        class="flex items-center justify-center mx-28 py-3 border border-transparent text-base font-medium rounded-md shadow-xl"
                                        style="color: rgb({{ $color1 }}); background-color: rgb({{ $color6 }});">
                                        Get Started
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <!-- About section -->
                <div id="introduction" class="py-16 overflow-hidden">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="text-center">
                            <p class="mt-2 text-3xl font-extrabold tracking-tight sm:text-4xl"
                                style="color: rgb({{ $color3 }});">Introducing
                                4U</p>
                            <p class="mt-4 max-w-2xl text-xl mx-auto" style="color: rgb({{ $color2 }});">
                                For you
                                adalah bisnis undangan
                                digital
                                yang
                                menawarkan layanan pembuatan undangan digital yang praktis, cepat, dan menarik.
                                Bisnis ini
                                memiliki
                                platform online yang mudah digunakan dengan berbagai pilihan template dan desain
                                yang dapat
                                disesuaikan dengan kebutuhan dan selera pelanggan. Foryou juga menyediakan fitur
                                interaktif
                                seperti
                                RSVP online dan tampilan galeri foto, sehingga undangan digital menjadi modern dan
                                ramah
                                lingkungan. Dengan layanan yang efisien dan berkualitas, Foryou merupakan pilihan
                                yang
                                sempurna
                                bagi
                                mereka yang ingin membuat undangan digital yang elegan dan mudah dibagikan kepada
                                tamu
                                undangan
                                mereka.</p>
                        </div>

                        <div class="mt-16 flex justify-center">
                            <div class="max-w-full space-y-10 md:space-y-0 md:grid md:grid-cols-3 md:gap-x-8 md:gap-y-10">
                                <div class="relative" id="affordable">
                                    <dt>
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md"
                                            style="color: rgb({{ $color1 }}); background-color: rgb({{ $color6 }});">
                                            <!-- Heroicon name: outline/inbox -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414a1 1 0 00-.707-.293H4.293a1 1 0 01-.707.293l-2.414 2.414c-.411.061-.82-.176-1.171-.518a1 1 0 00-1.414-1.414l2.414-2.414a1 1 0 00-.518-1.171c.061-.411.176-.82.518-1.171l2.414-2.414a1 1 0 011.414 1.414c.411.061.82.176 1.171.518l2.414 2.414a1 1 0 01.518 1.171c-.061.411-.176.82-.518 1.171l-2.414 2.414a1 1 0 001.414 1.414c.411.061.82.176 1.171.518l2.414-2.414a1 1 0 01.707.293H19.707a1 1 0 01.707-.293l2.414-2.414a1 1 0 00-.518-1.171c-.061-.411-.176-.820-.518-1.171l-2.414-2.414zM12 13c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zm0-10c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4z" />
                                            </svg>
                                        </div>
                                        {{-- AFFORDABLE SERVICES --}}
                                        <p class="ml-16 text-lg leading-6 font-medium"
                                            style="color: rgb({{ $color3 }});">Affordable
                                        </p>
                                    </dt>
                                    <dd class="mt-2 ml-16 text-base" style="color: rgb({{ $color1 }});">
                                        Hadirkan
                                        keindahan ke dalam undangan Anda
                                        tanpa
                                        mengorbankan kantong Anda. 4U E-Invitation menghadirkan sentuhan elegan
                                        dengan harga
                                        yang
                                        terjangkau. Jadilah bagian dari perayaan kami dan nikmati keindahan tanpa
                                        batasan.
                                    </dd>
                                </div>

                                <div class="relative" id="customizable">
                                    <dt>
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md"
                                            style="color: rgb({{ $color1 }}); background-color: rgb({{ $color6 }});">
                                            <!-- Heroicon name: outline/reply -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                            </svg>
                                        </div>
                                        {{-- CUSTOMIZEABLE SERVICES --}}
                                        <p class="ml-16 text-lg leading-6 font-medium"
                                            style="color: rgb({{ $color3 }});">Customizable</p>
                                    </dt>
                                    <dd class="mt-2 ml-16 text-base" style="color: rgb({{ $color1 }});">Kami
                                        memahami
                                        bahwa setiap acara adalah
                                        cerita
                                        unik. Dengan 4U E-Invitation, Anda dapat mengubah undangan Anda sesuai
                                        dengan
                                        keinginan
                                        Anda.
                                        Pilih warna, gaya, dan detail lainnya untuk menciptakan undangan yang
                                        benar-benar
                                        mencerminkan
                                        Anda.</dd>
                                </div>

                                <div class="relative" id="reusable">
                                    <dt>
                                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md"
                                            style="color: rgb({{ $color1 }}); background-color: rgb({{ $color6 }});">
                                            <!-- Heroicon name: outline/lightning-bolt -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                                            </svg>
                                        </div>
                                        {{-- REUSEABLE SERVICES --}}
                                        <p class="ml-16 text-lg leading-6 font-medium"
                                            style="color: rgb({{ $color3 }});">Reusable</p>
                                    </dt>
                                    <dd class="mt-2 ml-16 text-base" style="color: rgb({{ $color1 }});">Kami
                                        merayakan momen istimewa dengan
                                        memberikan
                                        cinta pada lingkungan. 4U E-Invitation tidak hanya indah, tetapi juga ramah
                                        lingkungan.
                                        Pilih
                                        opsi undangan digital untuk mengurangi jejak karbon dan menciptakan
                                        perubahan yang
                                        berkelanjutan.
                                    </dd>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Price Packages --}}
            <div x-data="{ flyIn: false }" x-init="window.addEventListener('scroll', () => { flyIn = (window.scrollY > 810); })">
                <div class=" mt-10" style="background-color: rgb({{ $color6 }});">
                    <div class="pt-10 px-2 sm:px-6 lg:px-8 lg:pt-20">
                        <div class="text-center">
                            <h2 class="text-lg leading-6 font-semibold uppercase tracking-wider"
                                style="color: rgb({{ $color2 }});">Packages</h2>
                            <p class="mt-2 text-3xl font-extrabold sm:text-4xl lg:text-5xl"
                                style="color: rgb({{ $color2 }});">Paket yang kami
                                sediakan</p>
                            <p class="mt-3 max-w-4xl mx-auto text-xl sm:mt-5 sm:text-2xl"
                                style="color: rgb({{ $color1 }});">Selamat datang di
                                layanan undangan digital kami! Untuk memenuhi kebutuhan unik acara Anda, kami dengan
                                bangga
                                menyajikan beberapa paket pilihan. Silakan jelajahi opsi di bawah ini dan temukan
                                yang
                                paling sesuai dengan gaya dan anggaran Anda.</p>
                        </div>

                        @if (Auth::check() && Auth::user()->role == 'admin')
                            <div class="flex items-center justify-center m-5">
                                <a href="{{ url('package') }}"
                                    class="text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800">Lihat
                                    Pembelian</a>
                            </div>
                        @endif
                    </div>

                    {{-- BG putih paket --}}
                    <div x-show="flyIn" x-transition:enter="transition transform ease-in-out duration-1000"
                        x-transition:enter-start="opacity-0 translate-y-10"
                        x-transition:enter-end="opacity-100 translate-y-0">
                        <div class="mt-16 pb-12 lg:mt-20 lg:pb-20"
                            style="background-color: rgb({{ $color6 }});>
                            <div class="relative
                            z-0">
                            <div class="absolute inset-0 h-5/6 lg:h-2/3"
                                style="background-color: rgb({{ $color6 }});">
                            </div>
                            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                <div class="relative lg:grid lg:grid-cols-7">
                                    {{-- Start Paket --}}
                                    {{-- @foreach ($data as $cat) --}}
                                    {{-- PAKET 1 --}}
                                    <div
                                        class="mx-auto max-w-md lg:mx-0 lg:max-w-none lg:col-start-1 lg:col-end-3 lg:row-start-2 lg:row-end-3 hover:scale-105">
                                        <div
                                            class="h-full flex flex-col rounded-lg shadow-lg overflow-hidden lg:rounded-none lg:rounded-l-lg">
                                            <div class="flex-1 flex flex-col">
                                                <div class="px-6 py-10"
                                                    style="background: linear-gradient(to bottom, rgb({{ $color2 }}), rgb({{ $color1 }}));">
                                                    <div>
                                                        <h3 class="text-center text-2xl font-medium text-gray-900">
                                                            <span class="text-green-500">✨</span>
                                                            Basic
                                                            <!-- Add a star icon for emphasis -->
                                                        </h3>
                                                        <div class="mt-4 flex items-center justify-center">
                                                            <span
                                                                class="px-3 flex items-start text-6xl tracking-tight text-gray-900">
                                                                <span class="mt-2 mr-2 text-xl font-normal"> IDR.
                                                                </span>
                                                                <span class="font-extrabold">69.000
                                                                </span>
                                                            </span>
                                                            {{-- <span class="text-xl font-medium text-gray-500"> /month
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-1 flex flex-col justify-between border-t-2 p-6 sm:p-10 lg:p-6 xl:p-10"
                                                    style="background: linear-gradient(to bottom, rgb({{ $color1 }}), rgb({{ $color0 }}));">
                                                    <ul role="list" class="space-y-4">
                                                        {{-- fitur 1 --}}
                                                        <li class="flex items-start">
                                                            <div class="flex-shrink-0">
                                                                <!-- Heroicon name: outline/check -->
                                                                <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor"
                                                                    aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                                </svg>
                                                            </div>
                                                            <p class="ml-3 text-base font-medium text-gray-500">
                                                                Masa Aktif 3 Bulan
                                                            </p>
                                                        </li>
                                                        <li class="flex items-start">
                                                            <div class="flex-shrink-0">
                                                                <!-- Heroicon name: outline/check -->
                                                                <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor"
                                                                    aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                                </svg>
                                                            </div>
                                                            <p class="ml-3 text-base font-medium text-gray-500">
                                                                Bahasa Indonesia / Inggris
                                                            </p>
                                                        </li>
                                                        <li class="flex items-start">
                                                            <div class="flex-shrink-0">
                                                                <!-- Heroicon name: outline/check -->
                                                                <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor"
                                                                    aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                                </svg>
                                                            </div>
                                                            <p class="ml-3 text-base font-medium text-gray-500">
                                                                Jumlah Tamu Tidak Terbatas
                                                            </p>
                                                        </li>
                                                        <li class="flex items-start">
                                                            <div class="flex-shrink-0">
                                                                <!-- Heroicon name: outline/check -->
                                                                <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor"
                                                                    aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                                </svg>
                                                            </div>
                                                            <p class="ml-3 text-base font-medium text-gray-500">
                                                                Cover Undangan Pembuka
                                                            </p>
                                                        </li>
                                                        <li class="flex items-start">
                                                            <div class="flex-shrink-0">
                                                                <!-- Heroicon name: outline/check -->
                                                                <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor"
                                                                    aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                                </svg>
                                                            </div>
                                                            <p class="ml-3 text-base font-medium text-gray-500">
                                                                Detail Info Acara
                                                            </p>
                                                        </li>
                                                        <li class="flex items-start">
                                                            <div class="flex-shrink-0">
                                                                <!-- Heroicon name: outline/check -->
                                                                <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor"
                                                                    aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                                </svg>
                                                            </div>
                                                            <p class="ml-3 text-base font-medium text-gray-500">
                                                                Profil Pembuat Undangan
                                                            </p>
                                                        </li>
                                                        <li class="flex items-start">
                                                            <div class="flex-shrink-0">
                                                                <!-- Heroicon name: outline/check -->
                                                                <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor"
                                                                    aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                                </svg>
                                                            </div>
                                                            <p class="ml-3 text-base font-medium text-gray-500">
                                                                Navigasi Lokasi
                                                            </p>
                                                        </li>
                                                    </ul>
                                                    <div class="mt-8">
                                                        <div class="rounded-lg shadow-md">
                                                            @if (Auth::check() && Auth::user()->role == 'member')
                                                                <form action="{{ route('transaction.create') }}"
                                                                    method="GET" enctype="multipart/form-data">
                                                                    <input type="hidden" name="id_categories"
                                                                        value="1">
                                                                    <input type="hidden" name="id_users"
                                                                        value="{{ Auth::user()->id }}">
                                                                    <button type="submit"
                                                                        class="block w-full text-center rounded-lg border border-transparent bg-white px-6 py-3 text-base font-medium text-indigo-600 hover:bg-gray-50"
                                                                        aria-describedby="tier-hobby"> Choose Packages
                                                                    </button>
                                                                </form>
                                                            @else
                                                                <a href="{{ route('login.create') }}"
                                                                    class="block w-full text-center rounded-lg border border-transparent bg-white px-6 py-3 text-base font-medium text-indigo-600 hover:bg-gray-50"
                                                                    aria-describedby="tier-hobby"> Choose Packages </a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- PAKET 3 --}}
                                    <div
                                        class="mt-10 max-w-lg mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-start-3 lg:col-end-6 lg:row-start-1 lg:row-end-4 hover:scale-105">
                                        <div class="relative z-10 rounded-lg shadow-xl">
                                            <div class="pointer-events-none absolute inset-0 rounded-lg border-2 border-indigo-600"
                                                aria-hidden="true"></div>
                                            <div class="absolute inset-x-0 top-0 transform translate-y-px">
                                                <div class="flex justify-center transform -translate-y-1/2">
                                                    <span
                                                        class="inline-flex rounded-full bg-indigo-600 px-4 py-1 text-sm font-semibold tracking-wider uppercase text-white">
                                                        Most popular </span>
                                                </div>
                                            </div>

                                            <div class="rounded-t-lg px-6 pt-12 pb-10"
                                                style="background: linear-gradient(to bottom, rgb({{ $color2 }}), rgb({{ $color1 }}));">
                                                <div>
                                                    <h3 class="text-center text-3xl font-semibold text-gray-900 sm:-mx-6">
                                                        <span class="text-indigo-600">🌟</span> Ultra
                                                        <!-- Add a star icon for emphasis -->
                                                    </h3>
                                                    <div class="mt-4 flex items-center justify-center">
                                                        <span
                                                            class="px-3 flex items-start text-6xl tracking-tight text-gray-900 sm:text-6xl">
                                                            <span class="mt-2 mr-2 text-4xl font-medium"> IDR.
                                                            </span>
                                                            <span class="font-extrabold"> 109.000 </span>
                                                        </span>
                                                        {{-- <span class="text-2xl font-medium text-gray-500"> /month
                                                        </span> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border-t-2 border-gray-100 rounded-b-lg pt-10 pb-8 px-6 sm:px-10 sm:py-10"
                                                style="background: linear-gradient(to bottom, rgb({{ $color1 }}), rgb({{ $color0 }}));">
                                                <ul role="list" class="space-y-4">
                                                    {{-- paket 1 --}}
                                                    <li class="flex items-start">
                                                        <div class="flex-shrink-0">
                                                            <!-- Heroicon name: outline/check -->
                                                            <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor"
                                                                aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M5 13l4 4L19 7" />
                                                            </svg>
                                                        </div>
                                                        <p class="ml-3 text-base font-medium text-gray-500">
                                                            Masa Aktif 12 Bulan</p>
                                                    </li>
                                                    {{-- paket 2 --}}
                                                    <li class="flex items-start">
                                                        <div class="flex-shrink-0">
                                                            <!-- Heroicon name: outline/check -->
                                                            <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor"
                                                                aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M5 13l4 4L19 7" />
                                                            </svg>
                                                        </div>
                                                        <p class="ml-3 text-base font-medium text-gray-500">
                                                            Bahasa Indonesia / Inggris
                                                        </p>
                                                    </li>
                                                    {{-- paket 3 --}}
                                                    <li class="flex items-start">
                                                        <div class="flex-shrink-0">
                                                            <!-- Heroicon name: outline/check -->
                                                            <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor"
                                                                aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M5 13l4 4L19 7" />
                                                            </svg>
                                                        </div>
                                                        <p class="ml-3 text-base font-medium text-gray-500">
                                                            Jumlah Tamu Tidak Terbatas</p>
                                                    </li>
                                                    {{-- paket 4 --}}
                                                    <li class="flex items-start">
                                                        <div class="flex-shrink-0">
                                                            <!-- Heroicon name: outline/check -->
                                                            <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor"
                                                                aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M5 13l4 4L19 7" />
                                                            </svg>
                                                        </div>
                                                        <p class="ml-3 text-base font-medium text-gray-500">
                                                            Cover Undangan Pembuka</p>
                                                    </li>
                                                    {{-- paket 5 --}}
                                                    <li class="flex items-start">
                                                        <div class="flex-shrink-0">
                                                            <!-- Heroicon name: outline/check -->
                                                            <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor"
                                                                aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M5 13l4 4L19 7" />
                                                            </svg>
                                                        </div>
                                                        <p class="ml-3 text-base font-medium text-gray-500">
                                                            Detail Info Acara</p>
                                                    </li>
                                                    {{-- paket 6 --}}
                                                    <li class="flex items-start">
                                                        <div class="flex-shrink-0">
                                                            <!-- Heroicon name: outline/check -->
                                                            <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor"
                                                                aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M5 13l4 4L19 7" />
                                                            </svg>
                                                        </div>
                                                        <p class="ml-3 text-base font-medium text-gray-500">
                                                            Profil Pembuat Undangan</p>
                                                    </li>
                                                    {{-- paket 7 --}}
                                                    <li class="flex items-start">
                                                        <div class="flex-shrink-0">
                                                            <!-- Heroicon name: outline/check -->
                                                            <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor"
                                                                aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M5 13l4 4L19 7" />
                                                            </svg>
                                                        </div>
                                                        <p class="ml-3 text-base font-medium text-gray-500">
                                                            Navigasi Lokasi</p>
                                                    </li>
                                                    {{-- paket 8 --}}
                                                    {{-- <li class="flex items-start">
                                                        <div class="flex-shrink-0">
                                                            <!-- Heroicon name: outline/check -->
                                                            <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor"
                                                                aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M5 13l4 4L19 7" />
                                                            </svg>
                                                        </div>
                                                        <p class="ml-3 text-base font-medium text-gray-500">
                                                            Kolom Komentar / Konfirmasi Kehadiran</p>
                                                    </li> --}}
                                                    {{-- paket 9 --}}
                                                    <li class="flex items-start">
                                                        <div class="flex-shrink-0">
                                                            <!-- Heroicon name: outline/check -->
                                                            <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor"
                                                                aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M5 13l4 4L19 7" />
                                                            </svg>
                                                        </div>
                                                        <p class="ml-3 text-base font-medium text-gray-500">
                                                            Galeri Foto (Max 20)</p>
                                                    </li>
                                                    {{-- paket 10 --}}
                                                    <li class="flex items-start">
                                                        <div class="flex-shrink-0">
                                                            <!-- Heroicon name: outline/check -->
                                                            <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor"
                                                                aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M5 13l4 4L19 7" />
                                                            </svg>
                                                        </div>
                                                        <p class="ml-3 text-base font-medium text-gray-500">
                                                            Video (1) "prewed / ultah / sunatan</p>
                                                    </li>
                                                    {{-- paket 11 --}}
                                                    <li class="flex items-start">
                                                        <div class="flex-shrink-0">
                                                            <!-- Heroicon name: outline/check -->
                                                            <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor"
                                                                aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M5 13l4 4L19 7" />
                                                            </svg>
                                                        </div>
                                                        <p class="ml-3 text-base font-medium text-gray-500">
                                                            Link Gdrive Foto Acara</p>
                                                    </li>
                                                </ul>
                                                <div class="mt-10">
                                                    <div class="rounded-lg shadow-md">
                                                        @if (Auth::check() && Auth::user()->role == 'member')
                                                            <form action="{{ route('transaction.create') }}"
                                                                method="GET" enctype="multipart/form-data">
                                                                <input type="hidden" name="id_categories"
                                                                    value="3">
                                                                <input type="hidden" name="id_users"
                                                                    value="{{ Auth::user()->id }}">
                                                                <button type="submit"
                                                                    class="block w-full text-center rounded-lg border border-transparent bg-white px-6 py-3 text-base font-medium text-indigo-600 hover:bg-gray-50"
                                                                    aria-describedby="tier-hobby"> Choose Packages
                                                                </button>
                                                            </form>
                                                        @else
                                                            <a href="{{ route('login.create') }}"
                                                                class="block w-full text-center rounded-lg border border-transparent bg-white px-6 py-3 text-base font-medium text-indigo-600 hover:bg-gray-50"
                                                                aria-describedby="tier-hobby"> Choose Packages </a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- PAKET 2 --}}
                                    <div
                                        class="mt-10 mx-auto max-w-md lg:m-0 lg:max-w-none lg:col-start-6 lg:col-end-8 lg:row-start-2 lg:row-end-3 hover:scale-105">
                                        <div
                                            class="h-full flex flex-col rounded-lg shadow-lg overflow-hidden lg:rounded-none lg:rounded-r-lg">
                                            <div class="flex-1 flex flex-col">
                                                {{-- PAKET 3 --}}
                                                <div class="px-6 py-10"
                                                    style="background: linear-gradient(to bottom, rgb({{ $color2 }}), rgb({{ $color1 }}));">
                                                    <div>
                                                        <h3 class="text-center text-2xl font-medium text-gray-900">
                                                            <span class="text-orange-500">✨</span> Elite
                                                            <!-- Add a star icon for emphasis -->
                                                        </h3>
                                                        <div class="mt-4 flex items-center justify-center">
                                                            <span
                                                                class="px-3 flex items-start text-6xl tracking-tight text-gray-900">
                                                                <span class="mt-2 mr-2 text-xl font-normal"> IDR.
                                                                </span>
                                                                <span class="font-extrabold"> 85.000 </span>
                                                            </span>
                                                            {{-- <span class="text-xl font-medium text-gray-500"> /month
                                                            </span> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-1 flex flex-col justify-between border-t-2 p-6 sm:p-10 lg:p-6 xl:p-10"
                                                    style="background: linear-gradient(to bottom, rgb({{ $color1 }}), rgb({{ $color0 }}));">
                                                    <ul role="list" class="space-y-4">
                                                        {{-- fitur 1 --}}
                                                        <li class="flex items-start">
                                                            <div class="flex-shrink-0">
                                                                <!-- Heroicon name: outline/check -->
                                                                <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor"
                                                                    aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                                </svg>
                                                            </div>
                                                            <p class="ml-3 text-base font-medium text-gray-500">
                                                                Masa Aktif 3 Bulan
                                                            </p>
                                                        </li>
                                                        {{-- fitur 2 --}}
                                                        <li class="flex items-start">
                                                            <div class="flex-shrink-0">
                                                                <!-- Heroicon name: outline/check -->
                                                                <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor"
                                                                    aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                                </svg>
                                                            </div>
                                                            <p class="ml-3 text-base font-medium text-gray-500">
                                                                Bahasa Indonesia / Inggris
                                                            </p>
                                                        </li>
                                                        {{-- fitur 3 --}}
                                                        <li class="flex items-start">
                                                            <div class="flex-shrink-0">
                                                                <!-- Heroicon name: outline/check -->
                                                                <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor"
                                                                    aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                                </svg>
                                                            </div>
                                                            <p class="ml-3 text-base font-medium text-gray-500">
                                                                Jumlah Tamu Tidak Terbatas</p>
                                                        </li>
                                                        {{-- fitur 4 --}}
                                                        <li class="flex items-start">
                                                            <div class="flex-shrink-0">
                                                                <!-- Heroicon name: outline/check -->
                                                                <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor"
                                                                    aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                                </svg>
                                                            </div>
                                                            <p class="ml-3 text-base font-medium text-gray-500">
                                                                Cover Undangan Pembuka
                                                            </p>
                                                        </li>
                                                        {{-- fitur 5 --}}
                                                        <li class="flex items-start">
                                                            <div class="flex-shrink-0">
                                                                <!-- Heroicon name: outline/check -->
                                                                <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor"
                                                                    aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                                </svg>
                                                            </div>
                                                            <p class="ml-3 text-base font-medium text-gray-500">
                                                                Detail Info Acara
                                                            </p>
                                                        </li>
                                                        {{-- fitur 6 --}}
                                                        <li class="flex items-start">
                                                            <div class="flex-shrink-0">
                                                                <!-- Heroicon name: outline/check -->
                                                                <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor"
                                                                    aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                                </svg>
                                                            </div>
                                                            <p class="ml-3 text-base font-medium text-gray-500">
                                                                Profil Pembuat Undangan
                                                            </p>
                                                        </li>
                                                        {{-- fitur 7 --}}
                                                        <li class="flex items-start">
                                                            <div class="flex-shrink-0">
                                                                <!-- Heroicon name: outline/check -->
                                                                <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor"
                                                                    aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                                </svg>
                                                            </div>
                                                            <p class="ml-3 text-base font-medium text-gray-500">
                                                                Navigasi Lokasi
                                                            </p>
                                                        </li>
                                                        {{-- fitur 8 --}}
                                                        {{-- <li class="flex items-start">
                                                            <div class="flex-shrink-0">
                                                                <!-- Heroicon name: outline/check -->
                                                                <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor"
                                                                    aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                                </svg>
                                                            </div>
                                                            <p class="ml-3 text-base font-medium text-gray-500">
                                                                Kolom Komentar / Konfirmasi Kehadiran
                                                            </p>
                                                        </li> --}}
                                                        {{-- fitur 9 --}}
                                                        <li class="flex items-start">
                                                            <div class="flex-shrink-0">
                                                                <!-- Heroicon name: outline/check -->
                                                                <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor"
                                                                    aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                                </svg>
                                                            </div>
                                                            <p class="ml-3 text-base font-medium text-gray-500">
                                                                Galeri Foto (Max 10)
                                                            </p>
                                                        </li>
                                                    </ul>
                                                    <div class="mt-8">
                                                        <div class="rounded-lg shadow-md">
                                                            @if (Auth::check() && Auth::user()->role == 'member')
                                                                <form action="{{ route('transaction.create') }}"
                                                                    method="GET" enctype="multipart/form-data">
                                                                    <input type="hidden" name="id_categories"
                                                                        value="2">
                                                                    <input type="hidden" name="id_users"
                                                                        value="{{ Auth::user()->id }}">
                                                                    <button type="submit"
                                                                        class="block w-full text-center rounded-lg border border-transparent bg-white px-6 py-3 text-base font-medium text-indigo-600 hover:bg-gray-50"
                                                                        aria-describedby="tier-hobby"> Choose Packages
                                                                    </button>
                                                                </form>
                                                            @else
                                                                <a href="{{ route('login.create') }}"
                                                                    class="block w-full text-center rounded-lg border border-transparent bg-white px-6 py-3 text-base font-medium text-indigo-600 hover:bg-gray-50"
                                                                    aria-describedby="tier-hobby"> Choose Packages </a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Main Gradient --}}
        <div style="background: linear-gradient(to bottom, rgb({{ $color3 }}), rgb({{ $color0 }}));">
            <br>
            {{-- Image Carousel --}}
            {{-- gradient box carousel --}}
            <div class="rounded-t-lg mx-10 px-10 py-6">
                <div class="flex items-center justify-center w-full h-full py-24 sm:py-8 px-14">
                    <div class="w-full relative flex items-center justify-center">
                        <button aria-label="slide backward"
                            class="absolute z-30 left-0 ml-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer"
                            id="prev">
                            <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>

                        {{-- Start IMG --}}
                        {{-- src="{{ asset('img/contoh.png') }}" --}}
                        {{-- Produk 1 --}}
                        <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
                            <div id="slider"
                                class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                                {{-- START GRID PER IMAGE --}}
                                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                    <img src="{{ asset('img/produk1.png') }}" alt=""
                                        class="object-cover object-center w-full" />
                                    <div class="absolute w-full h-full p-6">
                                        <h2
                                            class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                            {{-- nama produk --}}
                                        </h2>
                                        <div class="flex h-full items-end pb-6">
                                            <h3
                                                class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                                {{-- Produk</h3> --}}
                                        </div>
                                    </div>
                                </div>
                                {{-- Produk 2 --}}
                                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                    <img src="{{ asset('img/produk2.png') }}" alt=""
                                        class="object-cover object-center w-full" style="width: 95%;" />
                                    <div class="absolute w-full h-full p-6">
                                        <h2
                                            class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                            {{-- nama produk --}}
                                        </h2>
                                        <div class="flex h-full items-end pb-6">
                                            <h3
                                                class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                                {{-- Produk --}}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                {{-- Produk 3 --}}
                                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                    <img src="{{ asset('img/produk3.png') }}" alt=""
                                        class="object-cover object-center w-full" style="width: 95%;" />
                                    <div class="absolute w-full h-full p-6">
                                        <h2
                                            class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                            {{-- nama produk --}}
                                        </h2>
                                        <div class="flex h-full items-end pb-6">
                                            <h3
                                                class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                                {{-- Produk --}}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                {{-- Produk 4 --}}
                                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                    <img src="{{ asset('img/produk4.png') }}" alt=""
                                        class="object-cover object-center w-full" />
                                    <div class="absolute w-full h-full p-6">
                                        <h2
                                            class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                            {{-- nama produk --}}
                                        </h2>
                                        <div class="flex h-full items-end pb-6">
                                            <h3
                                                class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                                {{-- Produk --}}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                {{-- Produk 5 --}}
                                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                    <img src="{{ asset('img/produk5.png') }}" alt=""
                                        class="object-cover object-center w-full" style="width: 98%;" />
                                    <div class="absolute w-full h-full p-6">
                                        <h2
                                            class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                            {{-- nama produk --}}
                                        </h2>
                                        <div class="flex h-full items-end pb-6">
                                            <h3
                                                class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                                {{-- Produk --}}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                {{-- Produk 6 --}}
                                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                    <img src="{{ asset('img/produk6.png') }}" alt=""
                                        class="object-cover object-center w-full" style="width: 95%;" />
                                    <div class="absolute w-full h-full p-6">
                                        <h2
                                            class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                            {{-- nama produk --}}
                                        </h2>
                                        <div class="flex h-full items-end pb-6">
                                            <h3
                                                class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                                {{-- Produk --}}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                {{-- Produk 7 --}}
                                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                    <img src="{{ asset('img/produk7.png') }}" alt=""
                                        class="object-cover object-center w-full" />
                                    <div class="absolute w-full h-full p-6">
                                        <h2
                                            class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                            {{-- nama produk --}}
                                        </h2>
                                        <div class="flex h-full items-end pb-6">
                                            <h3
                                                class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                                {{-- Produk --}}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                {{-- Produk 8 --}}
                                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                    <img src="{{ asset('img/produk8.png') }}" alt=""
                                        class="object-cover object-center w-full" style="width: 95%;" />
                                    <div class="absolute w-full h-full p-6">
                                        <h2
                                            class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                            {{-- nama produk --}}
                                        </h2>
                                        <div class="flex h-full items-end pb-6">
                                            <h3
                                                class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                                {{-- Produk --}}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                {{-- Produk 9 --}}
                                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                    <img src="{{ asset('img/produkultah1.png') }}" alt=""
                                        class="object-cover object-center w-full" />
                                    <div class="absolute w-full h-full p-6">
                                        <h2
                                            class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                            {{-- nama produk --}}
                                        </h2>
                                        <div class="flex h-full items-end pb-6">
                                            <h3
                                                class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                                {{-- Produk --}}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                {{-- Produk 10 --}}
                                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                    <img src="{{ asset('img/produkultah2.png') }}" alt=""
                                        class="object-cover object-center w-full" />
                                    <div class="absolute w-full h-full p-6">
                                        <h2
                                            class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                            {{-- nama produk --}}
                                        </h2>
                                        <div class="flex h-full items-end pb-6">
                                            <h3
                                                class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                                {{-- Produk --}}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                {{-- Produk 11 --}}
                                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                    <img src="{{ asset('img/produkultah3.png') }}" alt=""
                                        class="object-cover object-center w-full" />
                                    <div class="absolute w-full h-full p-6">
                                        <h2
                                            class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                            {{-- nama produk --}}
                                        </h2>
                                        <div class="flex h-full items-end pb-6">
                                            <h3
                                                class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                                {{-- Produk --}}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                {{-- Produk 12 --}}
                                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                    <img src="{{ asset('img/produkultah4.png') }}" alt=""
                                        class="object-cover object-center w-full" />
                                    <div class="absolute w-full h-full p-6">
                                        <h2
                                            class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                            {{-- nama produk --}}
                                        </h2>
                                        <div class="flex h-full items-end pb-6">
                                            <h3
                                                class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                                {{-- Produk --}}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button aria-label="slide forward"
                            class="absolute z-30 right-0 mr-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400"
                            id="next">
                            <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            {{-- CONTACT FORM --}}
            {{-- <div>
                <br>
                <div class="flex flex-col min-w-0 max-w-2xl mx-auto break-words rounded-3xl"
                    style="background: linear-gradient(to right, rgb({{ $color4 }}), rgb({{ $color2 }}));"
                    class="w-full mb-6 shadow-xl rounded-lg mt-16 transition-all duration-300 ease-in-out transform hover:scale-105">
                    <div class="rounded-t mb-0 px-4 py-3 border-0">
                        <div class="flex flex-wrap items-center">
                            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                <h3 class="font-semibold text-base text-white">Contact Us</h3>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 flex-auto">
                        <form class="mb-6">
                            <div class="flex flex-wrap mb-6">
                                <div class="w-full px-3">
                                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                                        for="grid-password">
                                        Name
                                    </label>
                                    <input
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                        id="grid-password" type="text" name="name" placeholder="Name" required>
                                </div>
                                <div class="w-full px-3">
                                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                                        for="grid-password">
                                        Email
                                    </label>
                                    <input
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                        id="grid-password" type="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="w-full px-3">
                                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"
                                        for="grid-password">
                                        Message
                                    </label>
                                    <textarea
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                        id="grid-password" type="text" name="message" placeholder="Message" required></textarea>
                                </div>
                                <div class="flex flex-wrap justify-center items-center w-full">
                                    <button
                                        class="bg-gradient-to-r from-red-500 to-amber-400 hover:from-pink-500 hover:to-yellow-400 text-white font-bold py-2 px-4 rounded">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <br>
                </div>
            </div> --}}
            <br>
        </div>


        <!-- FOOTER -->
        <div>
            <footer class="bg-gray-800">
                <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
                    <div class="flex justify-center space-x-6 md:order-2">
                        <a href="https://www.tiktok.com/@gathfanfs?_t=8huB3n8bnRy&_r=1"
                            class="text-gray-400 hover:text-gray-500">
                            <span class="sr-only">Tiktok</span>
                            <img class="h-8 w-8" src="{{ asset('img/logoTiktok.png') }}" alt="Tiktok">
                        </a>

                        <a href="https://www.instagram.com/foryou.corp/" class="text-gray-400 hover:text-gray-500">
                            <span class="sr-only">Instagram</span>
                            <img class="h-8 w-8" src="{{ asset('img/logoIg.png') }}" alt="Instagram">
                        </a>

                        <a href="https://www.instagram.com/foryou.corp/" class="text-gray-400 hover:text-gray-500">
                            <span class="sr-only">Whatsapp</span>
                            <img class="h-8 w-8" src="{{ asset('img/logoWA.png') }}" alt="Whatsapp">
                        </a>
                    </div>
                    <div class="mt-8 md:mt-0 md:order-1">
                        <p class="text-center text-base text-gray-400">&copy; 2023 4U Inc. All rights reserved.</p>
                    </div>
                </div>
            </footer>
        </div>

    </main>

    <script>
        // gsap untuk animations
        gsap.from("#affordable", {
            opacity: 0,
            y: 50,
            duration: 1,
            delay: 1.5
        });
        gsap.from("#customizable", {
            opacity: 0,
            y: 50,
            duration: 1,
            delay: 2
        });
        gsap.from("#reusable", {
            opacity: 0,
            y: 50,
            duration: 1,
            delay: 2.5
        });
    </script>


    <script>
        let defaultTransform = 0;

        function goNext() {
            defaultTransform = defaultTransform - 398;
            var slider = document.getElementById("slider");
            if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        next.addEventListener("click", goNext);

        function goPrev() {
            var slider = document.getElementById("slider");
            if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
            else defaultTransform = defaultTransform + 398;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        prev.addEventListener("click", goPrev);
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const getStartedButton = document.querySelector('a[href="#introduction"]');

            const originalText = getStartedButton.textContent;
            const originalStyle = getComputedStyle(getStartedButton);

            getStartedButton.addEventListener("click", function(event) {
                event.preventDefault();

                // target perpindahan
                const targetElement = document.getElementById("introduction");

                // Smooth scroll saat ke bagian #introduction
                targetElement.scrollIntoView({
                    behavior: "smooth"
                });
            });


            // event listener dari mouse hover
            // warna button saat mouse di hover
            getStartedButton.addEventListener("mouseover", function() {
                getStartedButton.textContent = "Know Us More !";
                getStartedButton.style.backgroundColor =
                    "rgb({{ $color1 }})"; // Change to the desired color variable
                getStartedButton.style.color =
                    "rgb({{ $color6 }})"; // Change to the desired color variable
            });

            // warna button saat mouse tdk di hover
            getStartedButton.addEventListener("mouseout", function() {
                getStartedButton.textContent = "Get Started";
                getStartedButton.style.backgroundColor =
                    "rgb({{ $color6 }})";
                getStartedButton.style.color =
                    "rgb({{ $color1 }})";
            });
        });
    </script>
@endsection


{{-- Blog Post for Article --}}
{{-- <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Blog post-->
            <div class="bg-white rounded-lg shadow p-6">
                <img class="rounded-lg mb-4" src="https://via.placeholder.com/350x250" alt="Placeholder image">
                <h2 class="text-xl font-semibold mb-4">Blog Post Title</h2>
                <p class="text-gray-600 mb-4">This is a short excerpt from the blog post. It can be a few sentences long
                    and give a reader a taste of the content.</p>
                <div class="flex justify-between">
                    <span class="text-gray-600">2 days ago</span>
                    <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Read more</a>
                </div>
            </div>
            <!-- Repeat above for additional blog posts-->
        </div> --}}


{{-- Card Content --}}
{{-- <div class="mt-4">
            <div class="flex flex-wrap -mx-2 overflow-hidden sm:-mx-2 md:-mx-3 lg:-mx-3 xl:-mx-3">
                <div class="my-2 px-2 w-full overflow-hidden sm:my-2 sm:px-2 sm:w-1/2 md:my-3 md:px-3 md:w-1/2 lg:my-3 lg:px-3 lg:w-1/2 xl:my-3 xl:px-3 xl:w-1/2">
                    <div class="bg-white shadow rounded p-4">
                        <!-- Card Content Goes Here -->
                    </div>
                </div>
                <div class="my-2 px-2 w-full overflow-hidden sm:my-2 sm:px-2 sm:w-1/2 md:my-3 md:px-3 md:w-1/2 lg:my-3 lg:px-3 lg:w-1/2 xl:my-3 xl:px-3 xl:w-1/2">
                    <div class="bg-white shadow rounded p-4">
                        <!-- Card Content Goes Here -->
                    </div>
                </div>
            </div>
        </div> --}}
