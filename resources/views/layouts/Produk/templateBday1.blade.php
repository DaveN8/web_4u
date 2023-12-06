@extends('layouts.base')
@section('main_content')
    {{-- Section heropage --}}
    <section class="flex items-center min-h-screen bg-center bg-[url('img/bg1.png')]">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16">
            <div class="ml-auto place-self-center text-center lg:col-span-7">
                <p class="max-w-2xl mb-6 font-light text-black lg:mb-12 md:text-lg lg:text-xl text-center">Kami mengundangmu
                    untuk merayakan</p>
                <p class="max-w-2xl mb-6 font-light font-['Open-sans'] text-black lg:mb-8 md:text-lg lg:text-l text-center">
                    Ulang Tahun dari</p>
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold font-['Open-sans'] tracking-tight leading-none md:text-5xl xl:text-6xl">
                    Fasha</h1>
                <a
                    class="flex lg:inline-flex items-center justify-center py-3 text-base font-medium text-center rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300">
                    Scroll
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 mx-5 animate-bounce">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
                    </svg>
                </a>
            </div>

        </div>
    </section>

    {{-- Section Undangan --}}
    <section class="bg-[url('img/bg2.png')] bg-center min-h-screen overflow-y-auto">
        <div class="flex justify-center">
            <div class="mt-14">
                <img src="{{ asset('img/profile.png') }}" alt="Foto UlangTahun" class="rounded-full ring w-40 h-40">
            </div>
        </div>

        {{-- Nama --}}
        <div class="text-center font-['Open-sans'] font-bold text-2xl lg:text-5xl mt-10">
            <p>
                Fasha Muhammad Gathfan
            </p>
        </div>

        {{-- Usia --}}
        <div class="mt-10 text-center text-4xl lg:text-7xl text-[#6DB9EF]">
            <p>
                ke - 5th
            </p>
        </div>

        <div class="mt-10 text-center text-gray-800 text-lg">
            <p>
                Ulang tahun ku akan dirayakan pada:
            </p>
        </div>

        {{-- Hari, Tanggal --}}
        <div class="mt-10 text-center text-xl">
            <p>
                Hari, Tanggal
            </p>
            <p>
                <span class="font-bold text-2xl">Minggu, 29 Februari 2024</span>
            </p>
            <p>
                ______________
            </p>
        </div>

        {{-- Waktu --}}
        <div class="mt-5 text-center text-xl">
            <p>
                Waktu
            </p>
            <p>
                <span class="font-bold  text-2xl">10.00 s/d 12.00 WIB</span>
            </p>
            <p>
                ______________
            </p>
        </div>

        {{-- Tempat --}}
        <div class="mt-5 text-center text-xl">
            <p>
                Tempat
            </p>
            <p>
                <span class="font-bold text-2xl">CitraLand CBD Boulevard, Made, Kec. Sambikerep, Surabaya, Jawa Timur
                    60219</span>
            </p>
        </div>

        <div class="mt-10 text-center text-xl lg:text-4xl">
            <p class="mt-5">
                Aku senang sekali kalau kalian datang, aku tunggu kehadirannya ya.
            </p>
        </div>
    </section>

    {{-- Section Galery dan Map --}}
    <section class="bg-[url('img/bg2.png')] bg-center min-h-screen overflow-y-auto">
        {{-- Section Galery --}}
        <div class="px-5 lg:px-0">
            <div>
                <div class="text-center font-['Open-sans'] font-bold text-2xl lg:text-5xl my-10">
                    <p>
                        Galery Photo
                    </p>
                </div>
            </div>
            <div id="gallery" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{asset('img/gl1.jpeg')}}"
                            class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 w-full"
                            alt="">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="{{asset('img/gl2.jpeg')}}"
                            class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 w-full"
                            alt="">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{asset('img/gl3.jpeg')}}"
                            class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 w-full"
                            alt="">
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>

        {{-- Section Map --}}

            <div class="mt-10">
                <div class="text-center font-['Open-sans'] font-bold text-2xl lg:text-5xl my-10">
                    <p>
                        Map
                    </p>
                </div>
            </div>
            <div class="flex justify-center items-center md:w-fit px-5 lg:px-0 mx-auto">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6060211291524!2d112.62902131141374!3d-7.2855871926913975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fde455555555%3A0xd7e2611ae591f046!2sUniversitas%20Ciputra%20Surabaya!5e0!3m2!1sen!2sid!4v1701709454918!5m2!1sen!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="text-center font-['Open-sans'] my-10">
                    <a href="https://maps.app.goo.gl/ATBFcT7peLShVVTcA"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">PETUNJUK
                        KE ARAH LOKASI</a>
            </div>

    </section>
@endsection