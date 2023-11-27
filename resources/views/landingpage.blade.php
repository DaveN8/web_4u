@extends('layouts.base')
@section('main_content')
    <!-- This example requires Tailwind CSS v2.0+ -->
    <header>
        <div class="relative bg-white">
            <div class="absolute z-30 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
                <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">

                </div>
            </div>
        </div>
    </header>

    <main>
        <div>
            <!-- Hero card -->
            <div class="relative">
                <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gray-100"></div>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 relative">
                    <div class="relative shadow-xl sm:rounded-2xl sm:overflow-hidden">
                        <div class="absolute inset-0">
                            <img class="h-full w-full object-fill" src="{{ asset('img/banner4u.png') }}">
                            <div class="absolute inset-0 bg-white mix-blend-multiply"></div>
                        </div>
                        <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-96 lg:px-8">
                            <div class="mt-10 max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center">
                                <div class="space-y-4 sm:space-y-0 sm:mx-auto sm:inline-grid sm:grid-cols-2 sm:gap-5">
                                    {{-- <a href="#" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-indigo-700 bg-white hover:bg-indigo-50 sm:px-8">Get started </a>
                                        <a href="#" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-500 bg-opacity-60 hover:bg-opacity-70 sm:px-8">Live demo </a> --}}
                                </div>
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
                            yang menawarkan layanan pembuatan undangan digital yang praktis, cepat, dan menarik. Bisnis ini
                            memiliki platform online yang mudah digunakan dengan berbagai pilihan template dan desain yang
                            dapat disesuaikan dengan kebutuhan dan selera pelanggan. Foryou juga menyediakan fitur
                            interaktif seperti RSVP online dan tampilan galeri foto, sehingga undangan digital menjadi
                            modern dan ramah lingkungan. Dengan layanan yang efisien dan berkualitas, Foryou merupakan
                            pilihan yang sempurna bagi mereka yang ingin membuat undangan digital yang elegan dan mudah
                            dibagikan kepada tamu undangan mereka.</p>
                    </div>

                    <div class="mt-16">
                        <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                            <div class="relative">
                                <dt>
                                    <div
                                        class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                        <!-- Heroicon name: outline/inbox -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414a1 1 0 00-.707-.293H4.293a1 1 0 01-.707.293l-2.414 2.414c-.411.061-.82-.176-1.171-.518a1 1 0 00-1.414-1.414l2.414-2.414a1 1 0 00-.518-1.171c.061-.411.176-.82.518-1.171l2.414-2.414a1 1 0 011.414 1.414c.411.061.82.176 1.171.518l2.414 2.414a1 1 0 01.518 1.171c-.061.411-.176.82-.518 1.171l-2.414 2.414a1 1 0 001.414 1.414c.411.061.82.176 1.171.518l2.414-2.414a1 1 0 01.707.293H19.707a1 1 0 01.707-.293l2.414-2.414a1 1 0 00-.518-1.171c-.061-.411-.176-.82-.518-1.171l-2.414-2.414zM12 13c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zm0-10c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4z" />
                                        </svg>
                                    </div>
                                    {{-- AFFORDABLE SERVICES --}}
                                    <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Affordable
                                    </p>
                                </dt>
                                <dd class="mt-2 ml-16 text-base text-gray-500">Hadirkan keindahan ke dalam undangan Anda
                                    tanpa mengorbankan kantong Anda. 4U E-Invitation menghadirkan sentuhan elegan dengan
                                    harga yang terjangkau. Jadilah bagian dari perayaan kami dan nikmati keindahan tanpa
                                    batasan.</dd>
                            </div>

                            <div class="relative">
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
                                    cerita unik. Dengan 4U E-Invitation, Anda dapat mengubah undangan Anda sesuai dengan
                                    keinginan Anda. Pilih warna, gaya, dan detail lainnya untuk menciptakan undangan yang
                                    benar-benar mencerminkan Anda.</dd>
                            </div>

                            <div class="relative">
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
                                    memberikan cinta pada lingkungan. 4U E-Invitation tidak hanya indah, tetapi juga ramah
                                    lingkungan. Pilih opsi undangan digital untuk mengurangi jejak karbon dan menciptakan
                                    perubahan yang berkelanjutan.
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
                </template>


                {{-- Price Packages --}}
                <!-- This example requires Tailwind CSS v2.0+ -->
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
                                                                viewBox="0 0 24 24" stroke="currentColor"
                                                                aria-hidden="true">
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
                                                                viewBox="0 0 24 24" stroke="currentColor"
                                                                aria-hidden="true">
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
                                                                viewBox="0 0 24 24" stroke="currentColor"
                                                                aria-hidden="true">
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
                                                                viewBox="0 0 24 24" stroke="currentColor"
                                                                aria-hidden="true">
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
                                                                viewBox="0 0 24 24" stroke="currentColor"
                                                                aria-hidden="true">
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
                                                        <a href="https://formfacade.com/sm/HMYxoxFEr"
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
                <div class="flex items-center justify-center w-full h-full py-24 sm:py-8 px-4">
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
                        <div class="w-full h-full mx-auto overflow-x-hidden overflow-y-hidden">
                            <div id="slider"
                                class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                                <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                    <img src="https://i.ibb.co/fDngH9G/carosel-1.png" alt="black chair and white table"
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


            <!-- More main page content here... -->
    </main>

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
