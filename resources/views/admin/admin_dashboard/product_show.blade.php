@extends('admin.layouts.main') // Meng-extend layout utama admin

@section('title', 'Dashboard || Product Show') // Menentukan judul halaman

<link rel="icon" href="{{ asset('img/home/Logo.png') }}"> // Menambahkan ikon untuk tab browser

@section('content')
    <div class="p-2 sm:ml-64">
        <div class="px-8 divide-y-4 divide-gray-300 mt-14"> 
            <div class="flex items-center h-20 font-poppins font-medium">
                <p class="text-3xl text-white font-poppins">Products Show</p>
            </div>
            <div class="flex items-center pl-5 h-3">
                {{-- // --}}
            </div>
        </div>
        <div class="px-8 mt-6"> 
            <div class="bg-gray-800 text-white rounded-lg shadow-lg overflow-hidden"> 
                <div class="flex justify-center bg-red-500 p-4">
                    @if (Str::startsWith($product->image, 'img/'))
                        <img src="{{ asset($product->image) }}" alt="{{ $product->name_product }}"
                            class="w-80 object-contain">
                    @else
                        <img src="{{ asset('storage/product-image/' . $product->image) }}" class="w-80 object-contain"
                            alt="{{ $product->name_product }}">
                    @endif
                </div>
                <div class="p-6">
                    <h1 class="text-3xl font-bold">{{ $product->name_product }}</h1>
                    <p class="mt-2">Brandlocal shoes by <span class="text-blue-600">{{ $product->name_localbrand }}</span>
                    </p>
                    <p class="mt-2">Price : Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
                    <p class="mt-2">Discount : Rp. {{ number_format($product->discount, 0, ',', '.') }}</p>
                    <p class="mt-2">Category People : {{ $product->category_people }}</p>
                    <p class="mt-2">Category Shoes : {{ $product->category_shoes }}</p>
                    <p class="mt-2">Link Shoes : <a class="text-blue-600 underline"
                            href="{{ $product->link_shoes }}">{{ $product->link_shoes }}</a></p>
                    sepatu
                    <div class="mt-4 flex justify-start">
                        <a href="/dashboard/product"
                            class="flex items-center gap-2 text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5">
                            <box-icon name='arrow-back' color='white'></box-icon>
                            Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection