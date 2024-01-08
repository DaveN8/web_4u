@extends('layouts.base')
@section('main_content')
    <img src="{{ asset('storage/' . $desain['templateProduct']) }}" alt="Product" class="max-h-full max-w-full object-cover" />
@endsection
