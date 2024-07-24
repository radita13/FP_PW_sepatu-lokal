@extends('layouts.women-login')

@section('title', 'Women || Running')

@section('style')
    <link rel="stylesheet" href="{{ asset('style/women_style.css') }}">
@endsection

<!-- Link ini digunakan untuk mengcostume icon pada tab web -->
<link rel="icon" href="{{ asset('img/women/Logo.png') }}">
<!-- Link ini digunakan untuk mengcostume icon pada tab web -->

@section('content')
    @foreach ($products as $brand => $brandProducts)
        @if (
            $brandProducts->isNotEmpty() &&
                $brandProducts->contains(function ($product) {
                    return $product->image !== null;
                }))
            <div class="max-w-7xl sm:px-6 lg:px-8 mx-auto font-poppins">
                <div class="mt-6 mb-2">
                    <h2 class="font-semibold text-2xl">{{ $brand }}</h2>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    @foreach ($brandProducts as $product)
                        @if ($product->image)
                            <div
                                class="product border p-2 mb-5 transition transform hover:-translate-x-1 hover:scale-105 rounded-lg shadow-md flex flex-col justify-between">
                                @if (Str::startsWith($product->image, 'img/'))
                                    <img src="{{ asset($product->image) }}" alt="{{ $product->name_product }}"
                                        class="w-full h-auto">
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
                        @endif
                    @endforeach
                </div>
            </div>
        @endif
    @endforeach
@endsection