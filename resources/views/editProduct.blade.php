@extends('layouts.base')
@section('main_content')
    <main>
        <div class="flex items-center justify-center p-10">
            <div
                class="w-full max-w-lg p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <form method="POST" action="{{route('product.update',$product->id)}}"  enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="mb-5">
                        <label  for="nama_product" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Product</label>
                        <input name="nama_product" type="text" id="nama_product" value="{{ $product->nama_product }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-5">

                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="foto_product">Upload
                            file</label>
                        <input name="foto_product" value="{{ $product->foto_product }}"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="foto_product" type="file">

                    </div>

                    <div class="mb-5">
                        <button type="submit"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
