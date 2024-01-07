@extends('layouts.base')
@section('main_content')
    <main class="bg-white">
        <div class="p-10  flex items-center justify-center">
            <div
                class="w-full max-w-lg p-4 bg-white border border-gray-200 rounded-lg shadow-lg sm:p-6 md:p-8 dark:bg-lime-50 dark:border-amber-50">
                <form method="POST" action="{{ route('package.store') }}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <h5 class="text-xl font-medium text-gray-900 mb-5">Packages Form</h5>
                    <div class="mb-5">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Full Name (Person
                            1)</label>
                        <input type="name" name="nameMale" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    </div>
                    <div class="mb-5">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Full Name (Person
                            2)</label>
                        <input type="name" name="nameFemale" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    </div>

                    <div class="mb-5">
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 ">Address</label>
                        <input type="text" id="address" name="addressAcara"
                            class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500  dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-5">
                        <label for="date" class="block mb-2 text-sm font-medium text-gray-900 ">Date Event</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input datepicker datepicker-autohide type="date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5    dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Select date" id="date" name="dateAcara">
                        </div>
                    </div>


                    <div class="mb-5">
                        <label for="waktuAcara" class="block mb-2 text-sm font-medium text-gray-900 ">Time Event</label>
                        <input type="time" name="waktuAcara" id="waktuAcara"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    </div>


                    <div class="mb-5">
                        <label for="phone-input" class="block mb-2 text-sm font-medium text-gray-900">Phone
                            number:</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 " aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                                    <path
                                        d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z" />
                                </svg>
                            </div>
                            <input type="text" id="phone-input" name="noTelp" aria-describedby="helper-text-explanation"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  "
                                placeholder="123-456-7890" required>
                        </div>
                    </div>

                    {{-- <div class="mb-5">
                        <label for="default" class="block mb-2 text-sm font-medium text-gray-900 ">Select Packages</label>
                        <select id="default" name="jenisPaket"
                            class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose a Package</option>
                            <option value="basic">basic</option>
                            <option value="elite">elite</option>
                            <option value="ultra">ultra</option>
                        </select>
                    </div> --}}

                    <div class="sm:col-span-2 mb-5">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Description
                            (deskripsikan acara anda dan deskripsikan seperti apa undangan yang anda inginkan)</label>
                        <textarea id="description" rows="8" name="deskripsiAcara"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Your description here"></textarea>
                    </div>

                    <div class="mb-5">

                        {{-- <label class="block mb-2 text-sm font-medium text-gray-900 " for="foto_product">Upload
                            Bukti Transfer</label>
                        <input name="buktiTransfer"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none "
                            id="foto_product" type="file"> --}}

                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Link Gdrive (Photos of event)</label>
                        <input type="name" name="linkGdrive" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    </div>



                    <button type="submit"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
        </div>


    </main>
@endsection
