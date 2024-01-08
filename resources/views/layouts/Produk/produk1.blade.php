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
        {{-- Web Cover --}}
        {{-- Section heropage --}}
        <div class="flex items-center justify-center w-full h-screen bg-center bg-cover"
            style="background-image: url('img/background1.jpg'); overflow: hidden;">
            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16">
                <div class="mx-auto place-self-center text-center lg:col-span-7">
                    <img class="object-fill mx-auto mb-4 w-4/5" src="{{ asset('img/title1.png') }}" alt="Judul">
                    {{-- Name --}}
                    <p class="font-bold text-xl lg:text-2xl xl:text-4xl">Joyceline Lovenna Kurniawan</p>
                    {{-- Date --}}
                    <h1 class="font-['Playfair-Display'] font-light italic text-lg lg:text-xl xl:text-2xl">24.01.2024</h1>
                    <br>
                    <br>
                    <a id="openUndangan" href="#undangan"
                        class="flex items-center justify-center mx-8 lg:mx-28 py-2 px-4 border border-transparent text-base font-medium rounded-md shadow-xl"
                        style="color: rgb({{ $color1 }}); background-color: rgb({{ $color6 }});">
                        Buka Undangan
                    </a>
                </div>
            </div>
        </div>




        {{-- Buka Undangan --}}
        <div id="undanganSection"
            style="display: none; background-image: url('img/bgprodukpage.jpg'); background-size: 100% auto; background-position: top;">
            {{-- Section Undangan --}}
            <div id="undangan" class="min-h-screen overflow-y-auto"
                style="background-size: cover; background-repeat: no-repeat;">

                {{-- Profile Picture --}}
                <div class="flex justify-center profile-picture-container">
                    <div class="mt-14 profile-picture">
                        <img src="{{ asset('img/foto1.jpg') }}" alt="Foto UlangTahun" class="rounded-full ring w-40 h-40">
                    </div>
                </div>

                {{-- Nama --}}
                <div class="text-center font-['Open-sans'] font-bold text-2xl lg:text-5xl mt-10">
                    <p>
                        Joyceline Lovenna Kurniawan
                    </p>
                </div>

                {{-- Usia --}}
                <div class="text-center text-xl lg:text-4xl" style="color: rgb({{ $color6 }});">
                    <p class="font-['Playfair-Display'] font-light italic">
                        20th Birthday
                    </p>
                </div>

                {{-- Logo Save The Date GIF --}}
                <div class="mt-10 text-center text-gray-800 text-lg">
                    <img class="object-fill mx-auto mb-4 w-1/6" src="{{ asset('img/savethedate1.gif') }}"
                        alt="Logo Save The Date">
                </div>

                {{-- Hari, Tanggal, Waktu --}}
                <div class="text-center text-xl hari-tanggal-waktu fly-in">
                    {{-- Date --}}
                    <p class="font-['Roboto'] font-bold text-2xl">
                        Date
                    </p>
                    <p>
                        <span class="font-['Playfair-Display'] font-bold italic text-2xl">24-01-2024</span>
                    </p>
                    <p class="font-['Playfair-Display'] font-bold text-2xl">
                        ______________
                    </p>
                    {{-- Time --}}
                    <p class="font-['Roboto'] font-bold text-2xl">
                        Time
                    </p>
                    <p class="font-['Playfair-Display'] font-bold italic text-2xl">12.00</p>
                    <p class="font-['Playfair-Display'] font-bold text-2xl">
                        ______________
                    </p>
                    {{-- Place --}}
                    <p class="font-['Roboto'] font-bold text-2xl">
                        Place
                    </p>
                    <span class="font-['Playfair-Display'] font-bold italic text-2xl">Sekolah Kalam Kudus</span>
                </div>


                <div class="mt-10 text-center text-xl lg:text-4xl">
                    <p class="font-['Playfair-Display'] font-bold italic text-2xl mt-5">
                        Can't wait to see all of you at this event
                    </p>
                    <br>
                    <br>
                </div>
            </div>

            {{-- Countdown Section --}}
            <div id="countdown"
                class="font-['Playfair-Display'] font-bold italic mt-5 text-center text-2xl lg:text-5xl relative">
                <img class="object-fill mx-auto mb-4 w-1/4" src="{{ asset('img/savethedate1.png') }}"
                    alt="Logo Save The Date">

                <p>Countdown to Event</p>
                <div id="timer" class="mt-4 font-bold flex justify-center">
                    <div class="flex flex-col items-center mx-2">
                        {{-- Days --}}
                        <span id="days" class="text-xl lg:text-2xl xl:text-4xl"></span>
                        <p class="text-xs lg:text-sm xl:text-base">Days</p>
                    </div>
                    <div class="flex flex-col items-center mx-2">
                        {{-- Hours --}}
                        <span id="hours" class="text-xl lg:text-2xl xl:text-4xl"></span>
                        <p class="text-xs lg:text-sm xl:text-base">Hours</p>
                    </div>
                    <div class="flex flex-col items-center mx-2">
                        {{-- Minutes --}}
                        <span id="minutes" class="text-xl lg:text-2xl xl:text-4xl"></span>
                        <p class="text-xs lg:text-sm xl:text-base">Minutes</p>
                    </div>
                    <div class="flex flex-col items-center mx-2">
                        {{-- Seconds --}}
                        <span id="seconds" class="text-xl lg:text-2xl xl:text-4xl"></span>
                        <p class="text-xs lg:text-sm xl:text-base">Seconds</p>
                    </div>
                </div>
                <img class="object-fill mx-auto mb-4 w-1/3" src="{{ asset('img/line1.png') }}" alt="Split Line">
            </div>




            {{-- Section Galery dan Map --}}
            <div class="min-h-screen overflow-y-auto h-auto p-5"
                style="background-size: cover; background-repeat: no-repeat;">
                <div class="flex flex-col md:flex-row justify-center">
                    {{-- Gallery Section --}}
                    <div class="w-full md:w-5/12 pr-0 md:pr-20 mb-5 md:mb-0">
                        <div class="p-3 rounded-lg" style="background-color: rgb({{ $color1 }});">
                            <div class="text-center font-['Open-sans'] font-bold text-2xl lg:text-5xl my-10">
                                <p>Gallery Photo</p>
                            </div>
                            <div id="gallery" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                                <div class="relative">
                                    <img src="{{ asset('img/foto1.jpg') }}" alt="Gallery Image 1"
                                        class="object-cover w-full h-full rounded-lg">
                                </div>
                                <div class="relative">
                                    <img src="{{ asset('img/foto2.jpg') }}" alt="Gallery Image 2"
                                        class="object-cover w-full h-full rounded-lg">
                                </div>
                                <div class="relative">
                                    <img src="{{ asset('img/foto3.jpg') }}" alt="Gallery Image 3"
                                        class="object-cover w-full h-full rounded-lg">
                                </div>
                                <div class="relative">
                                    <img src="{{ asset('img/foto4.jpg') }}" alt="Gallery Image 4"
                                        class="object-cover w-full h-full rounded-lg">
                                </div>
                                <div class="relative">
                                    <img src="{{ asset('img/foto5.jpeg') }}" alt="Gallery Image 5"
                                        class="object-cover w-full h-full rounded-lg">
                                </div>
                                <div class="relative">
                                    <img src="{{ asset('img/foto6.jpeg') }}" alt="Gallery Image 6"
                                        class="object-cover w-full h-full rounded-lg">
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>

                    {{-- Map Section --}}
                    <div class="w-full md:w-5/12">
                        <div class="p-2 rounded-lg" style="background-color: rgb({{ $color1 }});">
                            <div class="mt-10">
                                <div class="text-center font-['Open-sans'] font-bold text-2xl lg:text-5xl my-10">
                                    <p>Map</p>
                                </div>
                            </div>
                            <div class="flex justify-center items-center mx-auto">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15805.33399644559!2d112.58569658715822!3d-7.964444999999981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788289cb039897%3A0x538584e21e40f333!2sSekolah%20Kristen%20Kalam%20Kudus%20Malang!5e0!3m2!1sen!2sid!4v1704739245361!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>


            {{-- Music Background --}}
            <audio id="backgroundMusic" loop autoplay>
                <source src="{{ asset('img/laguultah1.mp3') }}" type="audio/mp3">
                Your browser does not support the audio element.
            </audio>
            {{-- Button Mute BG Music --}}
            <div id="muteButton" class="fixed bottom-4 left-4 z-10 cursor-pointer">
                <img id="muteIcon" src="{{ asset('img/musicunmuted.png') }}" alt="Mute Icon"
                    class="h-8 w-8 text-white">
            </div>
        </div>



    </main>

    <style>
        /* Add this style to handle the flip animation */
        .profile-picture-container {
            position: relative;
            perspective: 1000px;
        }

        .profile-picture {
            transition: transform 0.5s;
            transform-style: preserve-3d;
        }

        .profile-picture:hover {
            transform: rotateY(180deg);
        }

        /* Add this style for the fly-in animation */
        .fly-in {
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .fly-in.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const getStartedButton = document.querySelector('#openUndangan');

            const originalText = getStartedButton.textContent;
            const originalStyle = getComputedStyle(getStartedButton);

            getStartedButton.addEventListener("click", function(event) {
                event.preventDefault();

                // target perpindahan
                const targetElement = document.getElementById("undangan");

                // Smooth scroll saat ke bagian #undangan
                targetElement.scrollIntoView({
                    behavior: "smooth"
                });
            });

            // event listener dari mouse hover
            // warna button saat mouse di hover
            getStartedButton.addEventListener("mouseover", function() {
                getStartedButton.textContent = "Click Me";
                getStartedButton.style.backgroundColor =
                    "rgb({{ $color1 }})"; // Change to the desired color variable
                getStartedButton.style.color =
                    "rgb({{ $color6 }})"; // Change to the desired color variable
            });

            // warna button saat mouse tdk di hover
            getStartedButton.addEventListener("mouseout", function() {
                getStartedButton.textContent = "Buka Undangan";
                getStartedButton.style.backgroundColor =
                    "rgb({{ $color6 }})";
                getStartedButton.style.color =
                    "rgb({{ $color1 }})";
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Set the date we're counting down to
            const eventDate = new Date("January 20, 2024 10:00:00 GMT+0700").getTime();

            // Update the countdown every 1 second
            const countdownTimer = setInterval(function() {
                // Get the current date and time
                const currentDate = new Date().getTime();

                // Calculate the remaining time
                const timeRemaining = eventDate - currentDate;

                // Calculate days, hours, minutes, and seconds
                const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

                // Display the countdown
                const daysElement = document.getElementById("days");
                const hoursElement = document.getElementById("hours");
                const minutesElement = document.getElementById("minutes");
                const secondsElement = document.getElementById("seconds");

                daysElement.textContent = days;
                hoursElement.textContent = hours;
                minutesElement.textContent = minutes;
                secondsElement.textContent = seconds;

                // If the countdown is over, display a message
                if (timeRemaining < 0) {
                    clearInterval(countdownTimer);
                    daysElement.textContent = "Event has started!";
                    hoursElement.textContent = "";
                    minutesElement.textContent = "";
                    secondsElement.textContent = "";
                }
            }, 1000);
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const hariTanggalWaktuSection = document.querySelector('.hari-tanggal-waktu');
            const flyInClass = 'fly-in';
            const isVisibleClass = 'is-visible';

            const options = {
                rootMargin: '0px',
                threshold: 0.5,
            };

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add(isVisibleClass);
                        observer.unobserve(entry.target);
                    }
                });
            }, options);

            observer.observe(hariTanggalWaktuSection);
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const backgroundMusic = document.getElementById("backgroundMusic");
            const muteButton = document.getElementById("muteButton");
            const muteIcon = document.getElementById("muteIcon");

            muteButton.addEventListener("click", function() {
                if (backgroundMusic.paused) {
                    backgroundMusic.play();
                    muteIcon.src = "{{ asset('img/musicunmuted.png') }}";
                } else {
                    backgroundMusic.pause();
                    muteIcon.src = "{{ asset('img/musicmuted.png') }}";
                }
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const openUndanganButton = document.getElementById('openUndangan');
            const undanganSection = document.getElementById('undanganSection');

            openUndanganButton.addEventListener("click", function(event) {
                event.preventDefault();

                // Smooth scroll to the next section
                undanganSection.style.display = 'block';
                undanganSection.scrollIntoView({
                    behavior: "smooth"
                });
            });
        });
    </script>
@endsection
