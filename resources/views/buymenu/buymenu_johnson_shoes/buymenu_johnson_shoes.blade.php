<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buymenu || Johnson</title>

    <!-- Connect Google Font "Koulen" -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
    <!-- Connect Google Font "Koulen" -->

    <!-- Connet Google Font "Poppins" -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Connet Google Font "Poppins" -->

    <!-- Link connect style eksternal css -->
    <link rel="stylesheet" href="{{ asset('style/buymenu_style.css') }}">
    <!-- Link connect style eksternal css -->

    {{-- Icon --}}
    <link rel="icon" href="{{ asset('img/brand/Johnson_brand/Icon_johnson.png') }}">

    <!-- Mengubah tampilan webite secara otomatis ketika disave -->
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Mengubah tampilan webite secara otomatis ketika disave -->
</head>

<body>
    <!-- Header area isinya ada logoback, logo brand johnson, dan tulisan brand -->
    <header>
        <!-- div untuk membuat navbar -->
        <div class="navbar-wrapper">
            <!-- menambahkan wrapper untuk pembungkus logoback -->
            <div class="backlogo-wrapper">
                <button onclick="goBack()" class="backlogo">
                    <img src="{{ asset('img/buymenu/logoback.png') }}" alt="Back" />
                </button>
            </div>
            <!-- menambahkan wrapper untuk pembungkus logoback -->

            <!-- menambahkan wrapper untuk pembungkus logojohnson dan tulisan brnad -->
            <div class="johnsonlogo-wrapper">
                <img src="{{ asset('img/buymenu/logojonhson.png') }}" class="johnsonlogo" />
                <h1 class="h1-class"><b>{{ $product->name_localbrand }}</b></h1>
            </div>
            <!-- menambahkan wrapper untuk pembungkus logojohnson -->
        </div>
        <!-- div untuk membuat navbar -->
    </header>
    <!-- Header area isinya ada logoback, logo brand johnson, dan tulisan brand -->

    <!-- Content area isinya image shoes slide, nama shoes, harga, deskripsi shoes, spesifikasi shoes, button buy now!, tulisan "! MAYBE YOU MISSED !", content image shoes "For Strong Man", dan content image shoes "For The Beauty".-->
    <main>
        <!-- Wrapper utama -->
        <div class="wrapper-all">
            <!-- Bagian konten -->
            <div class="content-section">
                <!-- Bagian konten kiri -->
                <div class="content-left">
                    <!-- Kontainer slideshow -->
                    <div class="slideshow-container">
                        <!-- Wrapper foto sepatu dengan efek fade -->
                        <div class="fotosepatu-wrapper">
                            <!-- Indikator nomor slide -->
                            <div class="numbertext">1 / 3</div>
                            <img src="{{ asset($productDetails->image_1_header) }}" alt="" class="fotosepatu" />
                            <!-- Gambar sepatu utama -->
                        </div>
                        <div class="fotosepatu-wrapper">
                            <!-- Indikator nomor slide -->
                            <div class="numbertext">2 / 3</div>
                            <img src="{{ asset($productDetails->image_2_header) }}" alt="" class="fotosepatu" />
                            <!-- Gambar sepatu kedua -->
                        </div>
                        <div class="fotosepatu-wrapper">
                            <!-- Indikator nomor slide -->
                            <div class="numbertext">3 / 3</div>
                            <img src="{{ asset($productDetails->image_3_header) }}" alt="" class="fotosepatu" />
                            <!-- Gambar sepatu kedua -->
                        </div>
                        <!-- Wrapper foto sepatu dengan efek fade -->

                        <!-- Tombol navigasi slideshow -->
                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>
                        <!-- Tombol navigasi slideshow -->

                        <!-- Wrapper untuk thumbnail bawah -->
                        <div class="fotosepatubawah-wrapper">
                            <!-- Thumbnail sepatu -->
                            <img src="{{ asset($productDetails->image_1) }}" alt="" class="fotosepatubawah"
                                onclick="currentSlide(1)" />
                            <img src="{{ asset($productDetails->image_2) }}" alt="" class="fotosepatubawah"
                                onclick="currentSlide(2)" />
                            <img src="{{ asset($productDetails->image_3) }}" alt="" class="fotosepatubawah"
                                onclick="currentSlide(3)" />
                            <!-- Thumbnail sepatu -->
                        </div>
                        <!-- Wrapper untuk thumbnail bawah -->
                    </div>
                    <!-- Kontainer slideshow -->
                </div>
                <!-- Bagian konten kiri -->

                <!-- Bagian konten kanan -->
                <div class="content-right">
                    <!-- Nama sepatu -->
                    <div class="namasepatu">
                        <h1 class="h1-class"><b>{{ $product->name_product }}</b></h1>
                        <!-- Nama sepatu dengan tag h1 -->
                        <p><del style="color: red">Rp.{{ number_format($product->discount, '0', ',', '.') }}</del>
                            Rp.{{ number_format($product->price, '0', ',', '.') }}</p>
                        <!-- Harga sepatu -->
                    </div>
                    <div class="product-description">
                        <!-- Deskripsi sepatu -->
                        <p class="font-poppins">
                            {{ $productDetails->description }}
                        </p>
                        <!-- Deskripsi sepatu -->
                    </div>
                    <!-- Spesifikasi sepatu -->
                    <div class="spesifikasi">
                        <h1 class="h1-class"><b>Specification</b></h1>
                        <div class="list">
                            <!-- Daftar spesifikasi bagian kiri -->
                            <div class="list-left">
                                @foreach (array_slice(explode(',', $productDetails->specification), 0, 3) as $spec)
                                    <li class="li-class">{{ $spec }}</li>
                                @endforeach
                            </div>
                            <!-- Daftar spesifikasi bagian kanan -->
                            <div class="list-right">
                                @foreach (array_slice(explode(',', $productDetails->specification), 3, 3) as $spec)
                                    <li class="li-class">{{ $spec }}</li>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Spesifikasi sepatu -->

                    <!-- Tombol beli -->
                    <a href="{{ $product->link_shoes }}" class="button-beli">
                        <p class="buy-now">Buy Now!</p>
                    </a>
                    <!-- Tombol beli -->
                </div>
                <!-- Bagian konten kanan -->
            </div>
            <!-- Bagian konten -->

            <!-- Konten sepatu lainnya -->
            <div class="shoes-content">
                <div class="shoes-other">
                    <h1 class="text-[50px] font-koulen tracking-[2px]">! MAYBE YOU MISSED !</h1>
                </div>
                <!-- Judul content pria shoes -->
                <div class="gender-tag">
                    <h1 class="font-poppins font-semibold mb-3 text-[30px]">For Strong Man</h1>
                </div>
                <!-- Judul content pria shoes -->

                <!-- showcase sepatu untuk pria -->
                <div class="shoes-case">
                    <div class="case">
                        <div class="case1-wrapper">
                            <img src="/img/buymenu/caseman1.png" alt="" class="case-img" />
                            <!-- Gambar sepatu pria 1 -->
                        </div>
                        <div class="case1-text">
                            <h1 class="product">Johnson - Hydra White Black</h1>
                            <p><del style="color: red">Rp. 200.000</del></p>
                            <p>Rp. 85.000</p>
                        </div>
                    </div>
                    <div class="case">
                        <div class="case2-wrapper">
                            <img src="/img/buymenu/caseman2.png" alt="" class="case-img" />
                            <!-- Gambar sepatu pria 2 -->
                        </div>
                        <div class="case1-text">
                            <h1 class="product">Johnson Basic Lowcut (LC) London</h1>
                            <p><del style="color: red">Rp. 200.000</del></p>
                            <p>Rp. 85.000</p>
                        </div>
                    </div>
                    <div class="case">
                        <div class="case3-wrapper">
                            <img src="/img/buymenu/caseman3.png" alt="" class="case-img" />
                            <!-- Gambar sepatu pria 3 -->
                        </div>
                        <div class="case1-text">
                            <h1 class="product">Johnson - Galaxy Pro Lowcut (LC) Green</h1>
                            <p><del style="color: red">Rp. 200.000</del></p>
                            <p>Rp. 85.000</p>
                        </div>
                    </div>
                </div>
                <!-- showcase sepatu untuk pria -->

                <!-- Judul content women shoes-->
                <div class="gender-tag">
                    <h1 class="font-poppins font-semibold mb-3 text-[30px]">For The Beauty</h1>
                </div>
                <!-- Judul content women shoes-->

                <!-- showcase sepatu untuk wanita -->
                <div class="shoes-case">
                    <div class="case">
                        <div class="case1-wrapper">
                            <img src="/img/buymenu/casewomen1.png" alt="" class="case-img" />
                            <!-- Gambar sepatu wanita 1 -->
                        </div>
                        <div class="case1-text">
                            <h1 class="product">Johnson - Delta V.2 Lowcut (LC) Cartoon</h1>
                            <p><del style="color: red">Rp. 200.000</del></p>
                            <p>Rp. 85.000</p>
                        </div>
                    </div>
                    <div class="case">
                        <div class="case2-wrapper">
                            <img src="/img/buymenu/casewomen2.png" alt="" class="case-img" />
                            <!-- Gambar sepatu wanita 2 -->
                        </div>
                        <div class="case1-text">
                            <h1 class="product">Johnson - Delta Lowcut (LC) Rainbow</h1>
                            <p><del style="color: red">Rp. 200.000</del></p>
                            <p>Rp. 85.000</p>
                        </div>
                    </div>
                    <div class="case">
                        <div class="case3-wrapper">
                            <img src="/img/buymenu/casewomen3.png" alt="" class="case-img" />
                            <!-- Gambar sepatu wanita 3 -->
                        </div>
                        <div class="case1-text">
                            <h1 class="product">Johnson - Orion Lowcut (LC) Pink</h1>
                            <p><del style="color: red">Rp. 200.000</del></p>
                            <p>Rp. 85.000</p>
                        </div>
                    </div>
                </div>
                <!-- showcase sepatu untuk wanita -->

                <!-- Teks penutup -->
                <div class="quot">
                    <h3>Rejuvenate your soul with Johnson shoes.</h3>
                </div>
                <!-- Teks penutup -->
            </div>
            <!-- Konten sepatu lainnya -->
        </div>
        <!-- Wrapper utama -->
    </main>
    <!-- Content area isinya image shoes slider, nama shoes, harga, deskripsi shoes, spesifikasi shoes, button buy now!, tulisan "! MAYBE YOU MISSED !", content image shoes "For Strong Man", dan content image shoes "For The Beauty".-->

    <!-- footer area -->
    <footer class="bg-black">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <!-- Content footer diatas garis horizontal area -->
            <div class="md:flex md:justify-between">
                <!-- Logo dan tulisan "INDO SHOES" area-->
                <div class="mb-6 md:mb-0">
                    <div class="flex items-center">
                        <img src="/img/home/Logo.png" class="h-12 me-3" alt="FlowBite Logo" />
                        <span class="self-center text-2xl font-extrabold text-font1 font-poppins">INDO SHOES</span>
                    </div>
                </div>
                <!-- Logo dan tulisan "INDO SHOES" area-->

                <!-- Content pemisah resources, help, and legal. -->
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-4">
                    <!-- Content resource area -->
                    <div>
                        <h2 class="mb-6 text-sm font-semibold uppercase text-font1">Resources
                        </h2>
                        <ul class="text-font4 font-medium">
                            <li class="mb-4">
                                <a href="https://johnson.id/" target="_blank" class="hover:underline">Johnson</a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/athletica.id/" target="_blank"
                                    class="hover:underline">Athletica</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold">‎
                        </h2>
                        <ul class="text-font4 font-medium">
                            <li class="mb-4">
                                <a href="https://www.instagram.com/aerostreet/" target="_blank"
                                    class="hover:underline">Aero Street</a>
                            </li>
                            <li>
                                <a href="https://sepatucompass.com/" target="_blank"
                                    class="hover:underline">Compass</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Content resource area -->

                    <!-- Content help area -->
                    <div>
                        <h2 class="mb-6 text-sm font-semibold uppercase text-font1">Help
                        </h2>
                        <ul class="text-font4 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Get Help</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Content help area -->

                    <!-- Content legal area -->
                    <div>
                        <h2 class="mb-6 text-sm font-semibold uppercase text-font1">Legal</h2>
                        <ul class="text-font4 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Content legal area -->
                </div>
                <!-- Content pemisah resources, help, and legal. -->
            </div>
            <!-- Content footer diatas garis horizontal area -->

            <!-- Garis horizontal pemisah content atas dan bawah -->
            <hr class="my-6 sm:mx-auto border-gray-700 lg:my-8" />
            <!-- Garis horizontal pemisah content atas dan bawah -->

            <!-- Content footer dibawah garis horizontal area -->
            <div class="sm:flex sm:items-center sm:justify-between">
                <!-- Copyright content area-->
                <span class="text-sm sm:text-center text-font4">© 2024 Indoshoes™. AllRights Reserved.</span>
                <!-- Copyright content area -->

                <!-- Content footer icon -->
                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <!-- Icon facebook area -->
                    <a href="#" class="text-gray-500 hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M17.525,9H14V7c0-1.032,0.084-1.682,1.563-1.682h1.868v-3.18C16.522,2.044,15.608,1.998,14.693,2C11.98,2,10,3.657,10,6.699V9H7v4l3-0.001V22h4v-9.003l3.066-0.001L17.525,9z" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <!-- Icon facebook area -->

                    <!-- Icon Discord area -->
                    <a href="#" class="text-gray-500 hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 50 50" fill="currentColor">
                            <path
                                d="M42.298,11.65c-0.676-1.021-1.633-1.802-2.768-2.256c-2.464-0.988-4.583-1.648-6.479-2.02	C31.721,7.114,30.404,7.768,29.771,9l-0.158,0.308c-1.404-0.155-2.895-0.207-4.593-0.164c-1.741-0.042-3.237,0.009-4.643,0.164	L20.22,9c-0.633-1.232-1.952-1.885-3.279-1.625c-1.896,0.371-4.016,1.031-6.479,2.02c-1.134,0.454-2.091,1.234-2.768,2.256	c-4.721,7.131-6.571,14.823-5.655,23.517c0.032,0.305,0.202,0.578,0.461,0.741c3.632,2.29,6.775,3.858,9.891,4.936	c1.303,0.455,2.748-0.054,3.517-1.229l1.371-2.101c-1.092-0.412-2.158-0.9-3.18-1.483c-0.479-0.273-0.646-0.884-0.373-1.363	c0.273-0.481,0.884-0.65,1.364-0.373c3.041,1.734,6.479,2.651,9.942,2.651s6.901-0.917,9.942-2.651	c0.479-0.277,1.09-0.108,1.364,0.373c0.273,0.479,0.106,1.09-0.373,1.363c-1.056,0.603-2.16,1.105-3.291,1.524l1.411,2.102	c0.581,0.865,1.54,1.357,2.528,1.357c0.322,0,0.647-0.053,0.963-0.161c3.125-1.079,6.274-2.649,9.914-4.944	c0.259-0.163,0.429-0.437,0.461-0.741C48.869,26.474,47.019,18.781,42.298,11.65z M18.608,28.983c-1.926,0-3.511-2.029-3.511-4.495	c0-2.466,1.585-4.495,3.511-4.495s3.511,2.029,3.511,4.495C22.119,26.954,20.534,28.983,18.608,28.983z M31.601,28.957	c-1.908,0-3.478-2.041-3.478-4.522s1.57-4.522,3.478-4.522c1.908,0,3.478,2.041,3.478,4.522S33.509,28.957,31.601,28.957z" />
                        </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <!-- Icon Discord area -->

                    <!-- Icon TwitterX area -->
                    <a href="#" class="text-gray-500 hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 50 50" fill="currentColor">
                            <path
                                d="M 6.9199219 6 L 21.136719 26.726562 L 6.2285156 44 L 9.40625 44 L 22.544922 28.777344 L 32.986328 44 L 43 44 L 28.123047 22.3125 L 42.203125 6 L 39.027344 6 L 26.716797 20.261719 L 16.933594 6 L 6.9199219 6 z" />
                        </svg>
                        <span class="sr-only">Twitterx page</span>
                    </a>
                    <!-- Icon TwitterX area -->

                    <!-- Icon Instagram area -->
                    <a href="#" class="text-gray-500 hover:text-white ms-5">
                        <svg class="w-3.5 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 26 26">
                            <path
                                d="M 7.546875 0 C 3.390625 0 0 3.390625 0 7.546875 L 0 18.453125 C 0 22.609375 3.390625 26 7.546875 26 L 18.453125 26 C 22.609375 26 26 22.609375 26 18.453125 L 26 7.546875 C 26 3.390625 22.609375 0 18.453125 0 Z M 7.546875 2 L 18.453125 2 C 21.527344 2 24 4.46875 24 7.546875 L 24 18.453125 C 24 21.527344 21.53125 24 18.453125 24 L 7.546875 24 C 4.472656 24 2 21.53125 2 18.453125 L 2 7.546875 C 2 4.472656 4.46875 2 7.546875 2 Z M 20.5 4 C 19.671875 4 19 4.671875 19 5.5 C 19 6.328125 19.671875 7 20.5 7 C 21.328125 7 22 6.328125 22 5.5 C 22 4.671875 21.328125 4 20.5 4 Z M 13 6 C 9.144531 6 6 9.144531 6 13 C 6 16.855469 9.144531 20 13 20 C 16.855469 20 20 16.855469 20 13 C 20 9.144531 16.855469 6 13 6 Z M 13 8 C 15.773438 8 18 10.226563 18 13 C 18 15.773438 15.773438 18 13 18 C 10.226563 18 8 15.773438 8 13 C 8 10.226563 10.226563 8 13 8 Z" />
                        </svg>
                        <span class="sr-only">Instagram Page</span>
                    </a>
                    <!-- Icon Instagram area -->
                </div>
                <!-- Content footer icon -->
            </div>
            <!-- Content footer dibawah garis horizontal area -->
        </div>
    </footer>
    <!-- footer area -->

    <!-- Script area javascript -->
    <script src="/js/buymenu.js"></script>
</body>

</html>
