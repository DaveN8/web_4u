@extends('layouts.base')
@section('main_content')
    <main>
        <div class="text-2xl text-bold text-center my-10">
            <p>Your Purchase</p>
        </div>
        {{-- <ul role="list" class="divide-y divide-gray-100 mx-10"> --}}
        <div class="bg-white shadow-md mt-5 w-1/2 mx-auto rounded-lg">
            <div class="flex justify-between gap-x-6 p-5">
                <div class="flex min-w-0 gap-x-4">
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">Leslie Alexander</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">leslie.alexander@example.com</p>
                    </div>
                </div>
                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                    <p class="text-sm leading-6 text-gray-900">Status</p>
                    <p class="mt-1 text-xs leading-5 text-red-500">on progress
                    </p>
                </div>
            </div>
            <a href="/">
                <div 
                class="w-full shadow-md text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-b-lg text-sm px-5 py-2.5 me-2 mb-2 text-center">
                    View Product
                </div>
            </a>
        </div>
        {{-- </ul> --}}
    </main>
@endsection
