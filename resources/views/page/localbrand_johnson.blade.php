<!DOCTYPE html>
@extends('layouts.localbrand')

@section('title', 'Localbrand || Johnson')

@section('style')
    <link rel="stylesheet" href="{{ asset('style/localbrand_style.css') }}">
    <style>
        .slideshow-container {
            position: relative;
            max-width: 100%;
            overflow: hidden;
        }

        .mySlides {
            display: none;
            width: 100%;
            height: auto;
            object-fit: cover;
            animation: fade 1s ease-out;
        }

        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -30px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            background-color: black;
        }

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active,
        .dot:hover {
            background-color: #717171;
        }

        .dot-container {
            text-align: center;
            padding: 20px;
            position: absolute;
            top: 885px;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            background: rgba(0, 0, 0, 0.3);
        }

        * {
            box-sizing: border-box;
        }

        .slideshow {
            width: 100%;
            margin: auto;
            overflow: hidden;
        }

        .slideshow-wrapper {
            display: flex;
            margin: 0px 50px;
            flex-wrap: wrap;
            transition: transform 0.5s ease;
        }

        .column {
            position: relative;
            flex: 0 0 calc(20% - 10px);
            margin: 5px;
            padding: 0px;
            text-align: center;
            overflow: hidden;
        }

        .image {
            display: block;
            width: 100%;
            height: auto;
        }

        .column img {
            width: 100%;
            vertical-align: middle;
            transition: transform 0.5s ease;
        }

        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            width: 100%;
            transition: .5s ease;
            opacity: 0;
            padding: 20px;
            text-align: center;
            transform: translateY(100%);
        }

        .column:hover .overlay {
            opacity: 1;
            transform: translateY(0);
        }

        .header1 {
            font-size: 40px;
        }

        .header2 {
            font-size: 80px;
            line-height: 80px;
        }

        .header3 {
            font-size: 20px;
        }

        @media screen and (max-width: 1024px) {
            .dot-container {
                top: 604px;
            }

            .prev,
            .next {
                top: 45%;
            }
        }

        @media screen and (max-width: 640px) {
            .dot-container {
                top: 386px;
            }

            .header1 {
                font-size: 30px;
            }

            .header2 {
                font-size: 60px;
                line-height: 50px;
            }

            .header1 {
                font-size: 30px;
            }
        }

        @media (max-width: 768px) {
            .slideshow-wrapper {
                flex-direction: column;
            }

            .column {
                flex: 0 0 100%;
            }
        }
    </style>
@endsection

<link rel="icon" href="{{ asset('img/brand/Johnson_brand/Icon_johnson.png') }}">

@section('content')
    <div class="slideshow-container">
        <!-- Full-width images with number and caption text -->
        <div class="mySlides">
            <img src="{{ asset('img/brand/Johnson_brand/header/Johnson_header1.png') }}" style="width:100%">
        </div>

        <div class="mySlides">
            <img src="{{ asset('img/brand/Johnson_brand/header/Johnson_header2.png') }}" style="width:100%">
        </div>

        <div class="mySlides">
            <img src="{{ asset('img/brand/Johnson_brand/header/Johnson_header3.png') }}" style="width:100%">
        </div>

        <!-- Previous and next buttons -->
        <a class="prev" onclick="plusDivs(-1)">&#10094;</a>
        <a class="next" onclick="plusDivs(1)">&#10095;</a>
    </div>

    <div class="dot-container" style="text-align:center">
        <span class="dot" onclick="currentDiv(1)"></span>
        <span class="dot" onclick="currentDiv(2)"></span>
        <span class="dot" onclick="currentDiv(3)"></span>
    </div>

    <div class="slideshow">
        <div class="flex justify-center text-5xl font-koulen mt-10">
            <h2>Express your style</h2>
        </div>
        <div class="flex justify-center text-2xl font-poppins mb-3">
            <p>WITH JOHNSON</p>
        </div>
        <div class="slideshow-wrapper">
            <div class="column">
                <img src="{{ asset('img/brand/Johnson_brand/Ekspresi/Johnson1.png') }}" alt="Slide 1" class="image">
                <div class="overlay">JOHNSON STYLE</div>
            </div>
            <div class="column">
                <img src="{{ asset('img/brand/Johnson_brand/Ekspresi/Johnson2.png') }}" alt="Slide 2" class="image">
                <div class="overlay">JOHNSON STYLE</div>
            </div>
            <div class="column">
                <img src="{{ asset('img/brand/Johnson_brand/Ekspresi/Johnson3.png') }}" alt="Slide 3" class="image">
                <div class="overlay">JOHNSON STYLE</div>
            </div>
            <div class="column">
                <img src="{{ asset('img/brand/Johnson_brand/Ekspresi/Johnson4.png') }}" alt="Slide 4" class="image">
                <div class="overlay">JOHNSON STYLE</div>
            </div>
            <div class="column">
                <img src="{{ asset('img/brand/Johnson_brand/Ekspresi/Johnson5.png') }}" alt="Slide 5" class="image">
                <div class="overlay">JOHNSON STYLE</div>
            </div>
        </div>
    </div>

    <div class="max-w-screen-lg mx-auto px-4">
        <div class="text-center">
            <p class="header1 font-poppins mt-20">VIDEO CLIP</p>
            <h2 class="header2 font-koulen">Johnson x one piece</h2>
            <p class="header3 font-poppins mb-3">COLLABORATION</p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <video class="w-full md:w-auto" autoplay muted loop>
            <source src="{{ asset('video/localbrand_video/Onepiecexjohnson_video.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <div class="mt-10 mb-10">
        <div class="flex justify-center">
            <img src="{{ asset('img/brand/Johnson_brand/Logo_johnson.png') }}" alt=""
                class="outline p-5 w-[214px] max-[1024px]:w-[150px] max-[640px]:w-[100px]">
        </div>
        <div class="mt-2">
            <h1 class="flex justify-center font-koulen text-[96px] max-[1024px]:text-[60px] max-[640px]:text-[40px]">
                JOHNSON SHOES</h1>
            <!-- Deskripsi indonesian shoes -->
            <div class="flex justify-center align-middle mb-[48px]">
                <div class="max-w-[1430px] p-14 rounded-lg shadow-2xl bg-secondary font-poppins">
                    <!-- Paragraf deskripsi pertama area -->
                    <p class="font-normal text-font3 text-center">
                        Johnson adalah salah satu brand sepatu lokal asal Bandung, Indonesia yang berdiri sejak
                        2019. Brand ini mengusung konsep #GayaGaPakeMahal karena ingin menciptakan sepatu
                        berkualitas dengan harga yang pas dikantong semua kalangan1. Harga murah bukan berarti
                        murahan.
                    </p>
                    <!-- Paragraf deskripsi kedua area -->
                    <p class="font-normal text-font3 mt-5 text-center">
                        Produk Johnson berfokus pada sepatu vulcanized, cementing, injeksi, apparel, dan sandal.
                        Mereka juga memiliki berbagai edisi khusus seperti "Galaxy X Edition" dan kolaborasi dengan
                        "One Piece" yang mencakup berbagai karakter seperti Luffy, Zoro, Chopper, Robin, dan Brook.
                    </p>
                    <!-- Paragraf deskripsi ketiga area -->
                    <p class="font-normal text-font3 mt-5 text-center">
                        Johnson Indonesia tidak hanya menyediakan produk alas kaki yang bervariatif, tetapi juga
                        memperluas ke produk apparel3. Dengan demikian, Johnson menawarkan berbagai pilihan untuk
                        konsumen di semua kalangan1.
                    </p>
                </div>
            </div>
            <!-- End Deskripsi indonesian shoes -->
        </div>
    </div>

    <!-- Konten sepatu lainnya terbaru -->
    <div class="shoes-content">
        <div class="shoes-other">
            <h1 class="text-[50px] font-koulen tracking-[2px]">! NEW SHOES JOHNSON !</h1>
        </div>

        @if ($menProducts->isNotEmpty())
            <div class="max-w-7xl sm:px-6 lg:px-8 mx-auto font-poppins">
                <div class="mt-6 mb-2">
                    <h2 class="font-semibold text-3xl">Latest Shoes Man</h2>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    @foreach ($menProducts as $product)
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
                                        <del>Rp. {{ number_format($product->discount) }}</del>
                                    </div>
                                    <p class="text-xs">Rp. {{ number_format($product->price) }}</p>
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

        @if ($womenProducts->isNotEmpty())
            <div class="max-w-7xl sm:px-6 lg:px-8 mx-auto font-poppins">
                <div class="mt-6 mb-2">
                    <h2 class="font-semibold text-3xl">Latest Shoes Women</h2>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    @foreach ($womenProducts as $product)
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
                                        <del>Rp. {{ number_format($product->discount) }}</del>
                                    </div>
                                    <p class="text-xs">Rp. {{ number_format($product->price) }}</p>
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
    </div>

    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 4000);
        }

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function currentDiv(n) {
            showDivs(slideIndex = n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > x.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = x.length
            }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            x[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>


@endsection
