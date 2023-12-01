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
    @endphp


    <main style="background-color: rgb({{ $color1 }});">
        <div>
            <div class="bg-lime-50"
            style="background-color: rgb({{ $color2 }});">
                <!-- BANNER -->
                <div class="relative flex flex-col md:flex-row">

                    <!-- Image Column with Shadow Container -->
                    <div class="md:w-1/2 relative p-10 order-1 md:order-1">
                        <div class="shadow-2xl sm:rounded-2xl sm:overflow-hidden">
                            <img class="h-full w-full object-fill" src="{{ asset('img/banner4u.png') }}" alt="Banner Image">
                            <div class="absolute inset-0 bg-white mix-blend-multiply"></div>
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
                                    Imagine being able to spend less time and less money to create your own invitation card
                                </p>
                                <br>
                                <a href="#"
                                    class="flex items-center justify-center mx-28 py-3 border border-transparent text-base font-medium rounded-md shadow-xl text-indigo-700 bg-white hover:bg-indigo-50 sm:px-8">
                                    Get started
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <!-- About section -->
            <div class="py-16 bg-white overflow-hidden">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center">
                        <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Introducing
                            Banner4U</p>
                        <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">For you adalah bisnis undangan digital
                            yang
                            menawarkan layanan pembuatan undangan digital yang praktis, cepat, dan menarik. Bisnis ini
                            memiliki
                            platform online yang mudah digunakan dengan berbagai pilihan template dan desain yang dapat
                            disesuaikan dengan kebutuhan dan selera pelanggan. Foryou juga menyediakan fitur interaktif
                            seperti
                            RSVP online dan tampilan galeri foto, sehingga undangan digital menjadi modern dan ramah
                            lingkungan. Dengan layanan yang efisien dan berkualitas, Foryou merupakan pilihan yang sempurna
                            bagi
                            mereka yang ingin membuat undangan digital yang elegan dan mudah dibagikan kepada tamu undangan
                            mereka.</p>
                    </div>

                    <div class="mt-16 flex justify-center">
                        <div class="max-w-full space-y-10 md:space-y-0 md:grid md:grid-cols-3 md:gap-x-8 md:gap-y-10">
                            <div class="relative" id="affordable">
                                <dt>
                                    <div
                                        class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                        <!-- Heroicon name: outline/inbox -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414a1 1 0 00-.707-.293H4.293a1 1 0 01-.707.293l-2.414 2.414c-.411.061-.82-.176-1.171-.518a1 1 0 00-1.414-1.414l2.414-2.414a1 1 0 00-.518-1.171c.061-.411.176-.82.518-1.171l2.414-2.414a1 1 0 011.414 1.414c.411.061.82.176 1.171.518l2.414 2.414a1 1 0 01.518 1.171c-.061.411-.176.82-.518 1.171l-2.414 2.414a1 1 0 001.414 1.414c.411.061.82.176 1.171.518l2.414-2.414a1 1 0 01.707.293H19.707a1 1 0 01.707-.293l2.414-2.414a1 1 0 00-.518-1.171c-.061-.411-.176-.820-.518-1.171l-2.414-2.414zM12 13c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zm0-10c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4z" />
                                        </svg>
                                    </div>
                                    {{-- AFFORDABLE SERVICES --}}
                                    <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Affordable
                                    </p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500">Hadirkan keindahan ke dalam undangan Anda
                                    tanpa
                                    mengorbankan kantong Anda. 4U E-Invitation menghadirkan sentuhan elegan dengan harga
                                    yang
                                    terjangkau. Jadilah bagian dari perayaan kami dan nikmati keindahan tanpa batasan.</dd>
                            </div>

                            <div class="relative" id="customizable">
                                <dt>
                                    <div
                                        class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                        <!-- Heroicon name: outline/reply -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                        </svg>
                                    </div>
                                    {{-- CUSTOMIZEABLE SERVICES --}}
                                    <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Customizable</p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500">Kami memahami bahwa setiap acara adalah
                                    cerita
                                    unik. Dengan 4U E-Invitation, Anda dapat mengubah undangan Anda sesuai dengan keinginan
                                    Anda.
                                    Pilih warna, gaya, dan detail lainnya untuk menciptakan undangan yang benar-benar
                                    mencerminkan
                                    Anda.</dd>
                            </div>

                            <div class="relative" id="reusable">
                                <dt>
                                    <div
                                        class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                        <!-- Heroicon name: outline/lightning-bolt -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                    </div>
                                    {{-- REUSEABLE SERVICES --}}
                                    <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Reusable</p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500">Kami merayakan momen istimewa dengan
                                    memberikan
                                    cinta pada lingkungan. 4U E-Invitation tidak hanya indah, tetapi juga ramah lingkungan.
                                    Pilih
                                    opsi undangan digital untuk mengurangi jejak karbon dan menciptakan perubahan yang
                                    berkelanjutan.
                                </dd>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- Price Packages --}}
            <div class="bg-gray-900 mt-10">
                <div class="pt-10 px-2 sm:px-6 lg:px-8 lg:pt-20">
                    <div class="text-center">
                        <h2 class="text-lg leading-6 font-semibold text-gray-300 uppercase tracking-wider">Packages</h2>
                        <p class="mt-2 text-3xl font-extrabold text-white sm:text-4xl lg:text-5xl">Paket yang kami
                            sediakan</p>
                        <p class="mt-3 max-w-4xl mx-auto text-xl text-gray-300 sm:mt-5 sm:text-2xl">Selamat datang di
                            layanan undangan digital kami! Untuk memenuhi kebutuhan unik acara Anda, kami dengan bangga
                            menyajikan beberapa paket pilihan. Silakan jelajahi opsi di bawah ini dan temukan yang
                            paling sesuai dengan gaya dan anggaran Anda.</p>
                    </div>
                </div>

                <div class="mt-16 bg-white pb-12 lg:mt-20 lg:pb-20">
                    <div class="relative z-0">
                        <div class="absolute inset-0 h-5/6 bg-gray-900 lg:h-2/3"></div>
                        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                            <div class="relative lg:grid lg:grid-cols-7">
                                <div
                                    class="mx-auto max-w-md lg:mx-0 lg:max-w-none lg:col-start-1 lg:col-end-3 lg:row-start-2 lg:row-end-3">
                                    <div
                                        class="h-full flex flex-col rounded-lg shadow-lg overflow-hidden lg:rounded-none lg:rounded-l-lg">
                                        <div class="flex-1 flex flex-col">
                                            <div class="bg-white px-6 py-10">
                                                <div>
                                                    <h3 class="text-center text-2xl font-medium text-gray-900"
                                                        id="tier-hobby">Paket 1</h3>
                                                    <!-- Add space for the package photo -->
                                                    <div class="mt-4">
                                                        <img src="{{ asset('img/logo4U.jpg') }}">
                                                    </div>
                                                    <div class="mt-4 flex items-center justify-center">
                                                        <span
                                                            class="px-3 flex items-start text-6xl tracking-tight text-gray-900">
                                                            <span class="mt-2 mr-2 text-4xl font-medium"> $ </span>
                                                            <span class="font-extrabold"> 79 </span>
                                                        </span>
                                                        <span class="text-xl font-medium text-gray-500"> /month </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="flex-1 flex flex-col justify-between border-t-2 border-gray-100 p-6 bg-gray-50 sm:p-10 lg:p-6 xl:p-10">
                                                <ul role="list" class="space-y-4">
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
                                                        <p class="ml-3 text-base font-medium text-gray-500">Pariatur
                                                            quod similique</p>
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
                                                        <p class="ml-3 text-base font-medium text-gray-500">Sapiente
                                                            libero doloribus</p>
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
                                                        <p class="ml-3 text-base font-medium text-gray-500">Vel ipsa
                                                            esse repudiandae</p>
                                                    </li>
                                                </ul>
                                                <div class="mt-8">
                                                    <div class="rounded-lg shadow-md">
                                                        <a href="https://formfacade.com/sm/HMYxoxFEr"
                                                            class="block w-full text-center rounded-lg border border-transparent bg-white px-6 py-3 text-base font-medium text-indigo-600 hover:bg-gray-50"
                                                            aria-describedby="tier-hobby"> Choose Packages </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mt-10 max-w-lg mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-start-3 lg:col-end-6 lg:row-start-1 lg:row-end-4">
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
                                        <div class="bg-white rounded-t-lg px-6 pt-12 pb-10">
                                            <div>
                                                <h3 class="text-center text-3xl font-semibold text-gray-900 sm:-mx-6"
                                                    id="tier-growth">Paket 2</h3>
                                                <!-- Add space for the package photo -->
                                                <div class="mt-4">
                                                    <img src="{{ asset('img/logo4U.jpg') }}">
                                                </div>
                                                <div class="mt-4 flex items-center justify-center">
                                                    <span
                                                        class="px-3 flex items-start text-6xl tracking-tight text-gray-900 sm:text-6xl">
                                                        <span class="mt-2 mr-2 text-4xl font-medium"> $ </span>
                                                        <span class="font-extrabold"> 149 </span>
                                                    </span>
                                                    <span class="text-2xl font-medium text-gray-500"> /month </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="border-t-2 border-gray-100 rounded-b-lg pt-10 pb-8 px-6 bg-gray-50 sm:px-10 sm:py-10">
                                            <ul role="list" class="space-y-4">
                                                <li class="flex items-start">
                                                    <div class="flex-shrink-0">
                                                        <!-- Heroicon name: outline/check -->
                                                        <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                    </div>
                                                    <p class="ml-3 text-base font-medium text-gray-500">Quia rem est
                                                        sed impedit magnam</p>
                                                </li>

                                                <li class="flex items-start">
                                                    <div class="flex-shrink-0">
                                                        <!-- Heroicon name: outline/check -->
                                                        <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                    </div>
                                                    <p class="ml-3 text-base font-medium text-gray-500">Dolorem vero
                                                        ratione voluptates</p>
                                                </li>

                                                <li class="flex items-start">
                                                    <div class="flex-shrink-0">
                                                        <!-- Heroicon name: outline/check -->
                                                        <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                    </div>
                                                    <p class="ml-3 text-base font-medium text-gray-500">Qui sed ab
                                                        doloribus voluptatem dolore</p>
                                                </li>

                                                <li class="flex items-start">
                                                    <div class="flex-shrink-0">
                                                        <!-- Heroicon name: outline/check -->
                                                        <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                    </div>
                                                    <p class="ml-3 text-base font-medium text-gray-500">Laborum commodi
                                                        molestiae id et fugiat</p>
                                                </li>

                                                <li class="flex items-start">
                                                    <div class="flex-shrink-0">
                                                        <!-- Heroicon name: outline/check -->
                                                        <svg class="flex-shrink-0 h-6 w-6 text-green-500"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                    </div>
                                                    <p class="ml-3 text-base font-medium text-gray-500">Nam ut ipsa
                                                        nesciunt culpa modi dolor</p>
                                                </li>
                                            </ul>
                                            <div class="mt-10">
                                                <div class="rounded-lg shadow-md">
                                                    <a href="{{ url('/formPackages') }}"
                                                        class="block w-full text-center rounded-lg border border-transparent bg-indigo-600 px-6 py-4 text-xl leading-6 font-medium text-white hover:bg-indigo-700"
                                                        aria-describedby="tier-growth"> Choose Packages </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mt-10 mx-auto max-w-md lg:m-0 lg:max-w-none lg:col-start-6 lg:col-end-8 lg:row-start-2 lg:row-end-3">
                                    <div
                                        class="h-full flex flex-col rounded-lg shadow-lg overflow-hidden lg:rounded-none lg:rounded-r-lg">
                                        <div class="flex-1 flex flex-col">
                                            <div class="bg-white px-6 py-10">
                                                <div>
                                                    <h3 class="text-center text-2xl font-medium text-gray-900"
                                                        id="tier-scale">Paket 3</h3>
                                                    <!-- Add space for the package photo -->
                                                    <div class="mt-4">
                                                        <img src="{{ asset('img/logo4U.jpg') }}">
                                                    </div>
                                                    <div class="mt-4 flex items-center justify-center">
                                                        <span
                                                            class="px-3 flex items-start text-6xl tracking-tight text-gray-900">
                                                            <span class="mt-2 mr-2 text-4xl font-medium"> $ </span>
                                                            <span class="font-extrabold"> 349 </span>
                                                        </span>
                                                        <span class="text-xl font-medium text-gray-500"> /month </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="flex-1 flex flex-col justify-between border-t-2 border-gray-100 p-6 bg-gray-50 sm:p-10 lg:p-6 xl:p-10">
                                                <ul role="list" class="space-y-4">
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
                                                        <p class="ml-3 text-base font-medium text-gray-500">Pariatur
                                                            quod similique</p>
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
                                                        <p class="ml-3 text-base font-medium text-gray-500">Sapiente
                                                            libero doloribus</p>
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
                                                        <p class="ml-3 text-base font-medium text-gray-500">Vel ipsa
                                                            esse repudiandae</p>
                                                    </li>
                                                </ul>
                                                <div class="mt-8">
                                                    <div class="rounded-lg shadow-md">
                                                        <a href="https://formfacade.com/sm/HMYxoxFEr"
                                                            class="block w-full text-center rounded-lg border border-transparent bg-white px-6 py-3 text-base font-medium text-indigo-600 hover:bg-gray-50"
                                                            aria-describedby="tier-scale"> Choose Packages </a>
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

            {{-- Image Carousel --}}
            <div class="bg-yellow-100 rounded-t-lg mx-10">
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

                        {{-- Produk 1 --}}
                        <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
                            <div id="slider"
                                class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                    <img src="{{ asset('img/logo4U.jpg') }}" alt="black chair and white table"
                                        class="object-cover object-center w-full" />
                                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                        <h2
                                            class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                            Catalog 1</h2>
                                        <div class="flex h-full items-end pb-6">
                                            <h3
                                                class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                                Minimal Interior</h3>
                                        </div>
                                    </div>
                                </div>
                                {{-- Produk 2 --}}
                                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                    <img src="https://i.ibb.co/DWrGxX6/carosel-2.png" alt="sitting area"
                                        class="object-cover object-center w-full" />
                                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                        <h2
                                            class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                            Catalog 2</h2>
                                        <div class="flex h-full items-end pb-6">
                                            <h3
                                                class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                                Minimal Interior</h3>
                                        </div>
                                    </div>
                                </div>
                                {{-- Produk 3 --}}
                                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                    <img src="https://i.ibb.co/tCfVky2/carosel-3.png" alt="sitting area"
                                        class="object-cover object-center w-full" />
                                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                        <h2
                                            class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                            Catalog 2</h2>
                                        <div class="flex h-full items-end pb-6">
                                            <h3
                                                class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                                Minimal Interior</h3>
                                        </div>
                                    </div>
                                </div>
                                {{-- Produk 4 --}}
                                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                    <img src="https://i.ibb.co/rFsGfr5/carosel-4.png" alt="sitting area"
                                        class="object-cover object-center w-full" />
                                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                        <h2
                                            class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                            Catalog 2</h2>
                                        <div class="flex h-full items-end pb-6">
                                            <h3
                                                class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                                Minimal Interior</h3>
                                        </div>
                                    </div>
                                </div>
                                {{-- Produk 5 --}}
                                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                    <img src="https://i.ibb.co/fDngH9G/carosel-1.png" alt="black chair and white table"
                                        class="object-cover object-center w-full" />
                                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                        <h2
                                            class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                            Catalog 2</h2>
                                        <div class="flex h-full items-end pb-6">
                                            <h3
                                                class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                                Minimal Interior</h3>
                                        </div>
                                    </div>
                                </div>
                                {{-- Produk 6 --}}
                                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                    <img src="https://i.ibb.co/DWrGxX6/carosel-2.png" alt="sitting area"
                                        class="object-cover object-center w-full" />
                                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                        <h2
                                            class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                            Catalog 2</h2>
                                        <div class="flex h-full items-end pb-6">
                                            <h3
                                                class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                                Minimal Interior</h3>
                                        </div>
                                    </div>
                                </div>
                                {{-- Produk 7 --}}
                                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                    <img src="https://i.ibb.co/tCfVky2/carosel-3.png" alt="sitting area"
                                        class="object-cover object-center w-full" />
                                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                        <h2
                                            class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                            Catalog 2</h2>
                                        <div class="flex h-full items-end pb-6">
                                            <h3
                                                class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                                Minimal Interior</h3>
                                        </div>
                                    </div>
                                </div>
                                {{-- Produk 8 --}}
                                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                    <img src="https://i.ibb.co/rFsGfr5/carosel-4.png" alt="sitting area"
                                        class="object-cover object-center w-full" />
                                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                        <h2
                                            class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                            Catalog 2</h2>
                                        <div class="flex h-full items-end pb-6">
                                            <h3
                                                class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                                Minimal Interior</h3>
                                        </div>
                                    </div>
                                </div>
                                {{-- Produk 9 --}}
                                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                    <img src="https://i.ibb.co/fDngH9G/carosel-1.png" alt="black chair and white table"
                                        class="object-cover object-center w-full" />
                                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                        <h2
                                            class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                            Catalog 2</h2>
                                        <div class="flex h-full items-end pb-6">
                                            <h3
                                                class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                                Minimal Interior</h3>
                                        </div>
                                    </div>
                                </div>
                                {{-- Produk 10 --}}
                                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                    <img src="https://i.ibb.co/DWrGxX6/carosel-2.png" alt="sitting area"
                                        class="object-cover object-center w-full" />
                                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                        <h2
                                            class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                            Catalog 2</h2>
                                        <div class="flex h-full items-end pb-6">
                                            <h3
                                                class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                                Minimal Interior</h3>
                                        </div>
                                    </div>
                                </div>
                                {{-- Produk 11 --}}
                                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                    <img src="https://i.ibb.co/tCfVky2/carosel-3.png" alt="sitting area"
                                        class="object-cover object-center w-full" />
                                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                        <h2
                                            class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                            Catalog 2</h2>
                                        <div class="flex h-full items-end pb-6">
                                            <h3
                                                class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                                Minimal Interior</h3>
                                        </div>
                                    </div>
                                </div>
                                {{-- Produk 12 --}}
                                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                    <img src="https://i.ibb.co/rFsGfr5/carosel-4.png" alt="sitting area"
                                        class="object-cover object-center w-full" />
                                    <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                        <h2
                                            class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                            Catalog 2</h2>
                                        <div class="flex h-full items-end pb-6">
                                            <h3
                                                class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                                Minimal Interior</h3>
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
            <div class="bg-lime-50">
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
                </div>
                <br>
            </div>


            <!-- FOOTER -->
            <div>
                <footer class="bg-gray-800">
                    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
                        <div class="flex justify-center space-x-6 md:order-2">
                            <a href="#" class="text-gray-400 hover:text-gray-500">
                                <span class="sr-only">Tiktok</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>

                            <a href="#" class="text-gray-400 hover:text-gray-500">
                                <span class="sr-only">Instagram</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>

                            <a href="#" class="text-gray-400 hover:text-gray-500">
                                <span class="sr-only">Twitter</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                </svg>
                            </a>

                        </div>
                        <div class="mt-8 md:mt-0 md:order-1">
                            <p class="text-center text-base text-gray-400">&copy; 2023 4U Inc. All rights reserved.</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </main>



    <script>
        // Use gsap for animations
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
