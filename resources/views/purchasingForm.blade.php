@extends('layouts.base')
@section('main_content')
        <div class="text-2xl text-bold text-center my-10">
            <p>Your Purchase</p>
        </div>

        <div class="max-w-lg mx-auto mt-5 bg-white shadow-md p-5">
            <h1 class="text-6xl">Perhatian!!</h1>
            <br>
            <p class="text-lg">Berikut adalah panduan bukti transfer</p>
            <br>

            <!-- Modal toggle -->
            <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">
                Bukti Transfer
            </button>

            <!-- Main modal -->
            <div id="default-modal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full mx-auto">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Tata cara melakukan pembayaran di ForYou
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="default-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4">
                            <p class="text-base leading-relaxed text-gray-500">
                                Saat melakukan proses transfer, pastikan berita transfer diisi dengan benar. Berikut
                                format pengisian berita transfer:
                            </p>
                            <p>
                                Username &nbsp &nbsp &nbsp &nbsp &nbsp Paket Order &nbsp &nbsp &nbsp &nbsp &nbsp No Hp
                            </p>

                            <p class="text-base leading-relaxed text-gray-500">
                                Berikut contoh berita bukti transfer yang salah
                            </p>
                            <figure class="max-w-lg">
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/buktitrf2.png') }}"
                                    alt="image description">
                                <figcaption class="mt-2 text-sm text-center text-gray-500">Contoh berita bukti transfer
                                    yang salah</figcaption>
                            </figure>
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                Berikut Contoh berita bukti transfer yang benar
                            </p>
                            <figure class="max-w-lg">
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/buktitrf2.png') }}"
                                    alt="image description">
                                <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Contoh berita
                                    bukti transfer
                                    yang salah</figcaption>
                            </figure>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="default-modal" type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
                                accept</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <form method="POST" action="{{ route('transaction.store') }}" enctype="multipart/form-data"
            class="max-w-lg mx-auto mb-6">
            @csrf
            <div class="max-w-lg mx-auto mt-5 bg-white shadow-md p-5">
                <div class="relative z-0 w-full mb-5 group">
                    @foreach ($users as $us)
                        @if ($us['id'] == $id_users)
                            <input type="text" name="username" id="username"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " disabled />
                            <label for="floating_uname"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">{{ $us['name'] }}</label>
                        @endif
                    @endforeach
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900">Selected packages</label>
                    <select id="countries"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        disabled>
                        @foreach ($categories as $cat)
                            @if ($cat['id'] == $id_categories)
                                <option>{{ $cat['nama_categories'] }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <p>Berikut adalah total yang perlu anda bayar</p>
                    @foreach ($categories as $cat)
                        @if ($cat['id'] == $id_categories)
                            <p class="text-3xl font-semibold">Rp. {{ $cat['harga'] }}</p>
                        @endif
                    @endforeach
                    <br>
                    <p>Silahkan transfer ke nomor rekening berikut</p>
                    <p class="font-bold text-xl">BCA 5610376357 a/n Muhammad Gathfan Fasha A</p>
                </div>
                <div class="relative z-0 w-full mb-5 group">

                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload
                        file</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50"
                        aria-describedby="file_input_help" id="file_input" type="file" name="buktiTransfer" required>
                    <p class="mt-1 text-sm text-gray-500 id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>

                </div>

                <input type="hidden" name="id_users" value="{{ $id_users }}">
                <input type="hidden" name="id_categories" value="{{ $id_categories }}">

                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </div>
        </form>

@endsection
