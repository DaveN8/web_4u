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
            <div class="relative mt-4">
                <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gray-100"></div>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 relative">
                    <div class="relative shadow-xl sm:rounded-2xl sm:overflow-hidden">
                        <div class="absolute inset-0">
                            <img class="h-full w-full object-fill" src="{{ asset('img/banner4u.png') }}">
                            <div class="absolute inset-0 bg-white mix-blend-multiply"></div>
                        </div>
                        <!-- Smaller overlapping rounded rectangle -->
                        <div class="absolute inset-0 bg-amber-100 opacity-60 rounded-xl mx-4 my-4"></div>
                        <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
                            <h1 class="text-center text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                                <span class="block text-black">Welcome to 4U</span>
                                <span class="block text-slate-950">E-Invitation</span>
                            </h1>
                            <p class="mt-6 max-w-lg mx-auto text-center text-xl text-sky-950 sm:max-w-3xl">Anim aute id
                                magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet
                                fugiat veniam occaecat fugiat aliqua.</p>
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
                        <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">For you adalah bisnis undangan digital yang menawarkan layanan pembuatan undangan digital yang praktis, cepat, dan menarik. Bisnis ini memiliki platform online yang mudah digunakan dengan berbagai pilihan template dan desain yang dapat disesuaikan dengan kebutuhan dan selera pelanggan. Foryou juga menyediakan fitur interaktif seperti RSVP online dan tampilan galeri foto, sehingga undangan digital menjadi modern dan ramah lingkungan. Dengan layanan yang efisien dan berkualitas, Foryou merupakan pilihan yang sempurna bagi mereka yang ingin membuat undangan digital yang elegan dan mudah dibagikan kepada tamu undangan mereka.</p>
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
                                <dd class="mt-2 ml-16 text-base text-gray-500">Hadirkan keindahan ke dalam undangan Anda tanpa mengorbankan kantong Anda. 4U E-Invitation menghadirkan sentuhan elegan dengan harga yang terjangkau. Jadilah bagian dari perayaan kami dan nikmati keindahan tanpa batasan.</dd>
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
                                <dd class="mt-2 ml-16 text-base text-gray-500">Kami memahami bahwa setiap acara adalah cerita unik. Dengan 4U E-Invitation, Anda dapat mengubah undangan Anda sesuai dengan keinginan Anda. Pilih warna, gaya, dan detail lainnya untuk menciptakan undangan yang benar-benar mencerminkan Anda.</dd>
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
                                <dd class="mt-2 ml-16 text-base text-gray-500">Kami merayakan momen istimewa dengan memberikan cinta pada lingkungan. 4U E-Invitation tidak hanya indah, tetapi juga ramah lingkungan. Pilih opsi undangan digital untuk mengurangi jejak karbon dan menciptakan perubahan yang berkelanjutan.
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
                </template>

                


            </div>


            <!-- More main page content here... -->
    </main>
@endsection
