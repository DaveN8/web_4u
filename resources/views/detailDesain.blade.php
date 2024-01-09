@extends('layouts.base')
@section('main_content')
    @if ($img == 1)
    <img src="{{ asset('img/desain1.png') }}" alt="Product" class="max-h-full max-w-full object-cover" />
    @elseif ($img == 2)
    <img src="{{ asset('img/desain2.png') }}" alt="Product" class="max-h-full max-w-full object-cover" />
    @elseif ($img == 3)
    <img src="{{ asset('img/produkjadi1.png') }}" alt="Product" class="max-h-full max-w-full object-cover" />
    @endif
@endsection
