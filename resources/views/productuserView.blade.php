@extends('layouts.base')
@section('main_content')
    <main>
        <div class="text-2xl text-bold text-center my-10">
            <p>Your Purchase</p>
        </div>
        
        @if (Auth::check() && Auth::user()->role == 'admin')
            <div class="my-auto">
                <div class="text-2xl text-bold text-center my-20">
                    <p>Customer Purchase</p>
                </div>
                @foreach ($user as $us)
                    @foreach ($desain as $des)
                        @foreach ($package as $pack)
                            @foreach ($prouser as $pus)
                                @if ($us['id'] == $pus['id_user'])
                                    {{-- <ul role="list" class="divide-y divide-gray-100 mx-10"> --}}
                                    <div class="bg-white shadow-md mt-5 w-1/2 mx-auto rounded-lg">
                                        <div class="flex justify-between gap-x-6 p-5">
                                            <div class="flex min-w-0 gap-x-4">
                                                <div class="min-w-0 flex-auto">
                                                    <p class="text-sm font-semibold leading-6 text-gray-900">
                                                        {{ $pack['nameMale'] }}
                                                    </p>
                                                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">
                                                        {{ $des['deskripsi'] }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                                                <p class="text-sm leading-6 text-gray-900">Status</p>
                                                <p class="mt-1 text-xs leading-5 text-red-500">
                                                    {{ $pus['statusProductUsers'] }}
                                                </p>
                                            </div>
                                        </div>

                                        <div
                                            class="w-full shadow-md text-white   focus:ring-4 focus:ring-blue-300 font-medium rounded-b-lg text-sm px-5 py-2.5 me-2 mb-2 text-center">
                                            <form method="POST" action="{{ route('prouser.update', $pus->id) }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PATCH')
                                                <div class="mb-2">
                                                    <label for="countries"
                                                        class="block mb-2 text-sm font-medium text-gray-900 ">Select
                                                        Option</label>
                                                    <select id="countries" name="statusProductUsers"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        <option selected>Choose Option</option>
                                                        <option value="ongoing">ongoing</option>
                                                        <option value="done">done</option>
                                                    </select>
                                                </div>
                                                <input type="hidden" name="id_productuser" value="{{ $pus['id'] }}">
                                                <button type="submit"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">Edit</button>


                                            </form>
                                        </div>

                                    </div>
                                @endif
                            @endforeach
                        @endforeach
                    @endforeach
                @endforeach
            </div>
        @elseif(Auth::check() && Auth::user()->role == 'member')
            @foreach ($prouser as $pro)
                @if ($pro['id_user'] == Auth::user()->id)
                    <div class="bg-white shadow-md mt-5 w-1/2 mx-auto rounded-lg">
                        <div class="flex justify-between gap-x-6 p-5">
                            <div class="flex min-w-0 gap-x-4">
                                <div class="min-w-0 flex-auto">
                                    @foreach ($package as $pac)
                                        @if ($pro['id_desains'] == $pac['id'])
                                            <p class="text-xl font-semibold leading-6 text-gray-900">{{ $pac['nameMale'] }}
                                            </p>
                                        @endif
                                    @endforeach
                                    @foreach ($desain as $des)
                                        @if ($pro['id_desains'] == $des['id'])
                                            <p class="mt-1 truncate text-sm leading-5 text-gray-500">{{ $des['deskripsi'] }}
                                            </p>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                                <p class="text-sm leading-6 text-gray-900">Status</p>
                                @if ($pro['statusProductUsers'] == 'ongoing')
                                    <p class="mt-1 text-xl leading-5 text-orange-300">{{ $pro['statusProductUsers'] }}
                                    @elseif ($pro['statusProductUsers'] == 'done')
                                    <p class="mt-1 text-xl leading-5 text-green-300">{{ $pro['statusProductUsers'] }}
                                @endif
                                </p>
                            </div>
                        </div>

                        @if ($pro['statusProductUsers'] == 'ongoing')
                            <button type="button"
                                class="w-full shadow-md text-white bg-gray-300 font-medium rounded-b-lg text-sm px-5 py-2.5 text-center"
                                disabled>
                                View Product
                            </button>
                        @elseif ($pro['statusProductUsers'] == 'done')
                            <a href="/">
                                <div
                                    class="w-full shadow-md text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-b-lg text-sm px-5 py-2.5 me-2 mb-2 text-center">
                                    View Product
                                </div>
                            </a>
                        @endif

                    </div>
                @endif
            @endforeach
        @endif
    </main>

@endsection
