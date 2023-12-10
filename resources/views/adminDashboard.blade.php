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
    <main class="container mx-auto mt-8">
        <h1 class="text-3xl font-semibold mb-4">Admin Dashboard</h1>

        <!-- Contoh Tabel Data -->
        <div class="bg-white p-4 shadow-md rounded-md mb-6">
            <h2 class="text-xl font-semibold mb-4">Data Pengguna</h2>

            <table class="min-w-full border border-gray-300">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Nama</th>
                        <th class="py-2 px-4 border-b">Email</th>
                        <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4 border-b">1</td>
                        <td class="py-2 px-4 border-b">John Doe</td>
                        <td class="py-2 px-4 border-b">john@example.com</td>
                        <!-- Tambahkan data lainnya sesuai kebutuhan -->
                    </tr>
                    <!-- Tambahkan baris data lainnya sesuai kebutuhan -->
                </tbody>
            </table>
        </div>

        <!-- Contoh Form Tambah Data -->
        <div class="bg-white p-4 shadow-md rounded-md mb-6">
            <h2 class="text-xl font-semibold mb-4">Tambah Pengguna Baru</h2>

            <form action="{{ route('admin.users.store') }}" method="post">
                @csrf
                <label for="nama" class="block mb-2">Nama:</label>
                <input type="text" id="nama" name="nama" class="w-full border px-4 py-2 mb-2">

                <label for="email" class="block mb-2">Email:</label>
                <input type="email" id="email" name="email" class="w-full border px-4 py-2 mb-2">

                <!-- Tambahkan input lainnya sesuai kebutuhan -->

                <button type="submit" class="bg-blue-500 text-white px-4 py-2">Simpan</button>
            </form>
        </div>

        <!-- Tambahkan konten admin lainnya sesuai kebutuhan -->

    </main>

    
@endsection
