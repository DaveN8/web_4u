@extends('layouts.base')
@section('main_content')


<section class="bg-gradient-to-r from-purple-500 via-pink-500 to-red-500 h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-lg shadow-md max-w-md w-full text-center">
        <i class="fas fa-birthday-cake text-5xl text-pink-500 mb-4"></i>
        <h2 class="text-3xl font-semibold mb-4 text-gray-800">Undangan Ulang Tahun</h2>
        <p class="text-gray-600 mb-6">Halo teman-teman!<br> Kami mengundang kamu untuk merayakan ulang tahun kami.</p>
        
        <div class="mb-6">
            <p class="text-gray-600 mb-2">Tanggal:</p>
            <p class="font-semibold text-pink-500">Sabtu, 12 Februari 2024</p>
        </div>

        <div class="mb-6">
            <p class="text-gray-600 mb-2">Waktu:</p>
            <p class="font-semibold text-pink-500">15.00 WIB - 18.00 WIB</p>
        </div>

        <div class="mb-6">
            <p class="text-gray-600 mb-2">Lokasi:</p>
            <p class="font-semibold text-pink-500">Jalan Bahagia No. 123, Kota Bahagia</p>
        </div>

        <p class="text-gray-600 mb-6">Harap konfirmasi kehadiran Anda. Terima kasih!</p>

        <button class="bg-pink-500 text-white px-4 py-2 rounded-full hover:bg-pink-600 focus:outline-none focus:shadow-outline-pink active:bg-pink-800">
            <i class="fas fa-check-circle mr-2"></i> Konfirmasi Kehadiran
        </button>
    </div>

</section>


@endsection