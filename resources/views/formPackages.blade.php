@extends('layouts.base')
@section('main_content')
    <main class="bg-white">
        <div class="p-10  flex items-center justify-center">
            <div
                class="w-full max-w-lg p-4 bg-white border border-gray-200 rounded-lg shadow-lg sm:p-6 md:p-8 dark:bg-lime-50 dark:border-amber-50">
                <form method="POST" action="{{ route('storePackage') }}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <h5 class="text-xl font-medium text-gray-900 ">Packages Form</h5>
                    <div class="mb-5">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Full
                            Name</label>
                        <input type="name" name="fullname" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    </div>

                    <div class="mb-5">
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 ">Address</label>
                        <input type="text" id="address" name="addressAcara"
                            class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500  dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-5">
                        <label for="date" class="block mb-2 text-sm font-medium text-gray-900 ">Date</label>
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
                        <label for="default" class="block mb-2 text-sm font-medium text-gray-900 ">Select Packages</label>
                        <select id="default" name="jenisPaket"
                            class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose a Package</option>
                            <option value="paket 1">Package 1</option>
                            <option value="paket 2">Package 2</option>
                            <option value="paket 3">Package 3</option>
                        </select>
                    </div>

                    <div class="sm:col-span-2 mb-5">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Description
                            (deskripsikan acara anda dan deskripsikan seperti apa undangan yang anda inginkan)</label>
                        <textarea id="description" rows="8" name="deskripsiAcara"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Your description here"></textarea>
                    </div>



                    <button type="submit"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
        </div>


    </main>
@endsection
