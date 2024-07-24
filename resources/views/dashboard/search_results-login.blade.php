@extends('layouts.main')

@section('title', 'Search Results')

@section('style')
    <link rel="stylesheet" href="{{ asset('style/home_style.css') }}">
@endsection

<link rel="icon" href="{{ asset('img/home/Logo.png') }}">

@section('content')
    <div class="max-w-7xl mx-auto pt-10">
        <h1 class="text-3xl font-bold mb-6">Search Results for "{{ $query }}"</h1>

        @if ($products->isEmpty())
            <p class="text-center text-xl h-[168px] flex justify-center items-center"><span id="search"></span></p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach ($products as $product)
                    <div
                        class="product border p-2 mb-5 transition transform hover:-translate-x-1 hover:scale-105 rounded-lg shadow-md flex flex-col justify-between">
                        @if (Str::startsWith($product->image, 'img/'))
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name_product }}" class="w-full h-auto">
                        @else
                            <img id="image-preview" src="{{ asset('storage/product-image/' . $product->image) }}"
                                class="w-full h-auto" alt="{{ $product->name_product }}">
                        @endif
                        <div class="flex-1">
                            <p class="font-semibold text-sm pt-1">{{ $product->name_product }}</p>
                        </div>
                        <div>
                            <div class="text-red-600 text-xs">
                                <del>Rp. {{ number_format($product->discount, '0', ',', '.') }}</del>
                            </div>
                            <p class="text-xs">Rp. {{ number_format($product->price, '0', ',', '.') }}</p>
                            <div class="flex mt-2">
                                <a href="{{ route('product.show', $product->slug) }}"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-2 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 my-1">Buy
                                    Menu</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <script>
        let typed = new Typed('#search', {
            strings: [
                'Product tidak ditemukan',
                'silahkan search lagi dengan kata kunci',
                'nama produk',
                'nama lokalbrand',
                'kategori orang',
                'dan kategori sepatu.'
            ],
            loop: true,
            typeSpeed: 50,
            backSpeed: 50,
        });
    </script>
@endsection