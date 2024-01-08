@extends('layouts.base')
@section('main_content')
    <main>

        <div class="text-2xl text-bold text-center my-10">
            <p>Your Purchase</p>
        </div>
        {{-- <ul role="list" class="divide-y divide-gray-100 mx-10"> --}}
        @foreach ($prouser as $pro)
            @if ($pro['id_user'] == Auth::user()->id)
                <div class="bg-white shadow-md mt-5 w-1/2 mx-auto rounded-lg">
                    <div class="flex justify-between gap-x-6 p-5">
                        <div class="flex min-w-0 gap-x-4">
                            <div class="min-w-0 flex-auto">
                                @foreach ($package as $pac)
                                    @if ($pro['id_desains'] == $pac['id'])
                                        <p class="text-xl font-semibold leading-6 text-gray-900">{{ $pac['nameMale'] }}</p>
                                    @endif
                                @endforeach
                                @foreach ($desain as $des)
                                    @if ($pro['id_desains'] == $des['id'])
                                        <p class="mt-1 truncate text-sm leading-5 text-gray-500">{{ $des['deskripsi'] }}</p>
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
                        <button type="button" class="w-full shadow-md text-white bg-gray-300 font-medium rounded-b-lg text-sm px-5 py-2.5 text-center" disabled>
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
        {{-- </ul> --}}
    </main>
@endsection
