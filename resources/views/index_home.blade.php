@extends('layouts.home-guest')

@section('title', 'Home')

@section('style')
    <link rel="stylesheet" href="{{ asset('style/home_style.css') }}">
@endsection

<link rel="icon" href="img/home/Logo.png">

@section('content')
    <!-- Image content shoes "tulisan quot", content tulisan quot "indonesia shoes", dan deskripsi indonesian shoes -->
    <div>
        <!-- Image content shoes "tulisan quot" -->
        <div class="flex">
            <!-- Image content shoes area -->
            <img src="img/home/Content.png" alt="" class="w-full">
            <!-- Image content shoes area -->

            <!-- Tulisan quot "Brand Local Shoes" area -->
            <section class="absolute font-koulen">
                <!-- tulisan brand local -->
                <h2
                    class="text-[100px] ml-8 font-bold text-font1 tracking-[5px] max-[768px]:text-[50px] max-[768px]:mt-5 max-[500px]:text-[25px]">
                    BRAND</h2>
                <h2
                    class="text-[100px] ml-8 font-bold text-font1 tracking-[5px] max-[768px]:text-[50px] max-[768px]:leading-[50px] max-[500px]:text-[25px] max-[500px]:leading-[25px] leading-[80px]">
                    LOCAL</h2>
                <h2
                    class="text-[100px] ml-8 font-bold text-font1 tracking-[5px] max-[768px]:text-[50px] max-[500px]:text-[25px]">
                    SHOES</h2>
            </section>
            <!-- Tulisan quot "Brand Local Shoes" area -->

            <!-- Tulisan quot "Step into Heritage,Stride with Style:Indonesian Footwear Elegance" screen tablet 640, laptop 1024, dan 1280 desktop area -->
            <section
                class="absolute end-0 top-[780px] max-[1280px]:top-[670px] max-[1024px]:top-[600px] max-[640px]:top-[425px] max-[640px]:pr-[25px] px-10 text-center font-poppins">
                <p
                    class="text-font1 italic text-[30px] max-[1280px]:text-[25px] max-[1024px]:text-[20px] max-[640px]:text-[13px]">
                    “Step into Heritage, Stride with</p>
                <p
                    class="text-font1 italic text-[30px] max-[1280px]:text-[25px] max-[1024px]:text-[20px] max-[640px]:text-[13px]">
                    Style: Indonesian Footwear</p>
                <p
                    class="text-font1 italic text-[30px] max-[1280px]:text-[25px] max-[1024px]:text-[20px] max-[640px]:text-[13px]">
                    Elegance"</p>
            </section>
            <!-- Tulisan quot "Step into Heritage,Stride with Style:Indonesian Footwear Elegance" screen tablet 640, laptop 1024, dan 1280 desktop area -->
        </div>
        <!-- Image content shoes "tulisan quot" -->

        <!-- Content tulisan quot "indonesia shoes" area -->
        <div class="mt-[48px] mb-[48px]">
            <!-- Tulisan "Show that your generation is the best with the shoes of your choice." area -->
            <div class="font-poppins">
                <h2 class="text-center md:text-[10px] lg:text-[20px] font-semibold">Show that your generation is
                    the
                    best with the shoes
                    of your choice.</h2>
            </div>
            <!-- Tulisan "Show that your generation is the best with the shoes of your choice." area -->

            <!-- Tulisan indonesia shoes area -->
            <div class="font-koulen m-0 p-0">
                <h2
                    class="font-bold tracking-[1px] md:text-5xl lg:text-8xl text-font3 text-center align-middle justify-center">
                    INDONESIAN</h2>
                <h2
                    class="font-bold tracking-[1px] md:text-5xl lg:text-8xl text-font3 text-center align-middle justify-center">
                    SHOES</h2>
            </div>
            <!-- Tulisan indonesia shoes area -->

            <!-- Tulisan "Soar Higher with Local Shoes made in Indonesia." -->
            <div class="font-poppins">
                <h2 class="text-center md:text-[10px] lg:text-[20px] font-semibold">Soar Higher with Local Shoes
                    made in
                    Indonesia.</h2>
            </div>
            <!-- Tulisan "Soar Higher with Local Shoes made in Indonesia." -->
        </div>
        <!-- Content tulisan quot "indonesia shoes" area -->

        <!-- Deskripsi indonesian shoes -->
        <div class="flex justify-center align-middle mb-[48px]">
            <div class="max-w-[1430px] p-14 rounded-lg shadow-2xl bg-secondary font-poppins">
                <!-- Judul Indonesian Shoes area -->
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-font3">
                    Indonesian Shoes
                </h5>
                <!-- Judul Indonesian Shoes area -->

                <!-- Paragraf deskripsi pertama area -->
                <p class="font-normal text-font3">
                    Sepatu lokal Indonesia menampilkan keindahan dan
                    keunikannya sendiri dalam desain, kerajinan tangan yang teliti, serta nilai-nilai budaya yang
                    ditanamkan di dalamnya. Mereka sering kali memadukan unsur-unsur tradisional dengan sentuhan
                    modern,
                    menciptakan produk yang memikat baik dari segi visual maupun kualitasnya.
                </p>
                <!-- Paragraf deskripsi pertama area -->

                <!-- Paragraf deskripsi kedua area -->
                <p class="font-normal text-font3 mt-5">
                    Desain sepatu lokal Indonesia sering kali terinspirasi oleh kekayaan alam dan warisan budaya
                    yang
                    dimiliki oleh negeri ini. Mereka mungkin mengambil motif-motif tradisional seperti batik, tenun,
                    atau ukiran kayu, dan menggabungkannya dengan bahan-bahan inovatif dan teknologi produksi
                    terkini
                    untuk menciptakan produk yang unik dan berkualitas.
                </p>
                <!-- Paragraf deskripsi kedua area -->
            </div>
        </div>
        <!-- Deskripsi indonesian shoes -->
    </div>
    <!-- Image content shoes "tulisan quot", content tulisan quot "indonesia shoes", dan deskripsi indonesian shoes -->

    <div class="shoes-text-man">
        <h1>Shoes Highlights Man</h1>
    </div>
    <!-- Johnson Shoes carousel area -->
    <div class="slide">
        <!-- Tulisan quot "Shoes Highlights" area -->
        <div class="shoes-text">
            <h1 class="text-shoes">Johnson Shoes</h1>
        </div>
        <!-- Tulisan quot "Shoes Highlights" area -->

        <!-- Image shoes carousel -->
        <div class="slider-wrapper">
            <div class="image-row">
                <div class="container">
                    <img src="/img/man/Johnson/Johnson_man1.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Johnson - Pluto Lowcut (LC) Black White</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/man/Johnson/Johnson_man2.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Johnson - Galaxy Pro Lowcut (LC) Green</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/man/Johnson/Johnson_man3.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Johnson - Hydra White Black</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/man/Johnson/Johnson_man4.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Johnson Astro Lowcut (LC) Black White</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/man/Johnson/Johnson_man5.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Johnson Basic Lowcut (LC) London</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/man/Johnson/Johnson_man6.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Johnson - Basic Highcut (HC) Milky</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Image shoes carousel -->
    </div>
    <!-- Johnson Shoes carousel area -->

    <!-- Athletica Shoes carousel area -->
    <div class="slide">
        <!-- Tulisan quot "Shoes Highlights" area -->
        <div class="shoes-text" id="athletica_man">
            <h1 class="text-shoes">Athletica Shoes</h1>
        </div>
        <!-- Tulisan quot "Shoes Highlights" area -->

        <!-- Image shoes carousel -->
        <div class="slider-wrapper">
            <div class="image-row">
                <div class="container">
                    <img src="/img/man/Athletica/Athletica_man1.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Athletica - Warner 1 Dark Grey</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/man/Athletica/Athletica_man2.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Athletica Geoff Max - Jarvis Navy White</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/man/Athletica/Athletica_man3.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Athletica - James Navy White</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/man/Athletica/Athletica_man4.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Athletica RBS - RBS Veldora Black White</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/man/Athletica/Athletica_man5.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Athletica - ATH-4 Navy Red White</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/man/Athletica/Athletica_man6.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Athletica - Blade Navy White</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Image shoes carousel -->
    </div>
    <!-- Athletica Shoes carousel area -->

    <!-- Aerostreet Shoes carousel area -->
    <div class="slide">
        <!-- Tulisan quot "Shoes Highlights" area -->
        <div class="shoes-text" id="aerostreet_man">
            <h1 class="text-shoes">Aerostreet Shoes</h1>
        </div>
        <!-- Tulisan quot "Shoes Highlights" area -->

        <!-- Image shoes carousel -->
        <div class="slider-wrapper">
            <div class="image-row">
                <div class="container">
                    <img src="/img/man/Aerostreet/Aerostreet_man1.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Aerostreet Massive Low Hitam Natural</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/man/Aerostreet/Aerostreet_man2.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Aerostreet Brave Low Hitam Natural</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/man/Aerostreet/Aerostreet_man3.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Aerostreet Hoops High Putih Hitam Abu Mudal</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/man/Aerostreet/Aerostreet_man4.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Aerostreet Classic Natural Natural Navy</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/man/Aerostreet/Aerostreet_man5.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Aerostreet Riku Putih Biru Tua Merah</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/man/Aerostreet/Aerostreet_man6.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Aerostreet Osaka Putih Abu Merah</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Image shoes carousel -->
    </div>
    <!-- Aerostreet Shoes carousel area -->

    <!-- Compass Shoes carousel area -->
    <div class="slide">
        <!-- Tulisan quot "Shoes Highlights" area -->
        <div class="shoes-text" id="compass_man">
            <h1 class="text-shoes">Compass Shoes</h1>
        </div>
        <!-- Tulisan quot "Shoes Highlights" area -->

        <!-- Image shoes carousel -->
        <div class="slider-wrapper">
            <div class="image-row">
                <div class="container">
                    <img src="/img/man/Compass/Compass_man1.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Compass Gazelle Low Black Gum</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/man/Compass/Compass_man2.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Compass Gazelle Low Black White</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/man/Compass/Compass_man3.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Compass Gazelle Hi Black Gum</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/man/Compass/Compass_man4.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Compass Retrograde Low White Blue</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/man/Compass/Compass_man5.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Compass Velocity Grey</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/man/Compass/Compass_man6.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Compass Proto 2 Low MAKNA</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Image shoes carousel -->
    </div>
    <!-- Compass Shoes carousel area -->

    <div class="shoes-text-women">
        <h1>Shoes Highlights Women</h1>
    </div>

    <!-- Johnson Shoes carousel area -->
    <div class="slide">
        <!-- Tulisan quot "Shoes Highlights" area -->
        <div class="shoes-text">
            <h1 class="text-shoes">Johnson Shoes</h1>
        </div>
        <!-- Tulisan quot "Shoes Highlights" area -->

        <!-- Image shoes carousel -->
        <div class="slider-wrapper">
            <div class="image-row">
                <div class="container">
                    <img src="/img/women/Johnson/Johnson_women1.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Johnson - Delta V.2 Lowcut (LC) Cartoon</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/women/Johnson/Johnson_women2.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Johnson - Orion Lowcut (LC) Pink</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/women/Johnson/Johnson_women3.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Johnson - Delta Lowcut (LC) Rainbow</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/women/Johnson/Johnson_women4.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Johnson - Infinite V Lowcut (LC) Rainbow</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/women/Johnson/Johnson_women5.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Johnson - Angkasa Lowcut (LC) White Grey</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/women/Johnson/Johnson_women6.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Johnson - Angkasa Lowcut (LC) White</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Image shoes carousel -->
    </div>
    <!-- Johnson Shoes carousel area -->

    <!-- Athletica Shoes carousel area -->
    <div class="slide">
        <!-- Tulisan quot "Shoes Highlights" area -->
        <div class="shoes-text" id="athletica_women">
            <h1 class="text-shoes">Athletica Shoes</h1>
        </div>
        <!-- Tulisan quot "Shoes Highlights" area -->

        <!-- Image shoes carousel -->
        <div class="slider-wrapper">
            <div class="image-row">
                <div class="container">
                    <img src="/img/women/Athletica/Athletica_women1.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Athletica - Sala Court Suede White</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/women/Athletica/Athletica_women2.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Athletica Geoff Max - Timeless Hi Salmon White</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/women/Athletica/Athletica_women3.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Athletica - Blade Red White</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/women/Athletica/Athletica_women4.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Athletica RBS - RBS Carera Blue White</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/women/Athletica/Athletica_women5.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Athletica - Sala Court Suede Warm Gumon White</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/women/Athletica/Athletica_women6.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Athletica Geoff Max - Ethan Maroon White</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Image shoes carousel -->
    </div>
    <!-- Athletica Shoes carousel area -->

    <!-- Aerostreet Shoes carousel area -->
    <div class="slide">
        <!-- Tulisan quot "Shoes Highlights" area -->
        <div class="shoes-text" id="aerostreet_women">
            <h1 class="text-shoes">Aerostreet Shoes</h1>
        </div>
        <!-- Tulisan quot "Shoes Highlights" area -->

        <!-- Image shoes carousel -->
        <div class="slider-wrapper">
            <div class="image-row">
                <div class="container">
                    <img src="/img/women/Aerostreet/Aerostreet_women1.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Aerostreet Massive Low Hitam Natural</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/women/Aerostreet/Aerostreet_women2.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Aerostreet Jisoo Natural Merah Muda Pastel Biru Tua</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/women/Aerostreet/Aerostreet_women3.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Aerostreet Aurora Lilac Lilac Putih</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/women/Aerostreet/Aerostreet_women4.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Aerostreet Livy Natural</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/women/Aerostreet/Aerostreet_women5.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Aerostreet Jennie Putih Abu Muda</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/women/Aerostreet/Aerostreet_women6.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Aerostreet Olivia Natural Natural Hitam</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Image shoes carousel -->
    </div>
    <!-- Aerostreet Shoes carousel area -->

    <!-- Compass Shoes carousel area -->
    <div class="slide">
        <!-- Tulisan quot "Shoes Highlights" area -->
        <div class="shoes-text" id="compass_women">
            <h1 class="text-shoes">Compass Shoes</h1>
        </div>
        <!-- Tulisan quot "Shoes Highlights" area -->

        <!-- Image shoes carousel -->
        <div class="slider-wrapper">
            <div class="image-row">
                <div class="container">
                    <img src="/img/women/Compass/Compass_women1.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Compass Gazelle Low White Blue</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/women/Compass/Compass_women2.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Compass Geoff Max - Timeless Hi Salmon White</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/women/Compass/Compass_women3.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Compass Gazelle Low Cream</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/women/Compass/Compass_women4.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Compass 25th Logo Pattern Slip On Type 1</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/women/Compass/Compass_women5.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Compass Gazelle 25th Low Bluesky Silver</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
            <div class="image-row">
                <div class="container">
                    <img src="/img/women/Compass/Compass_women6.png" alt="" class="image-items">
                    <div class="count">
                        <span class="product">Compass Retrograde Slip On Cream</span>
                        <del class="diskon">Rp.209.000</del>
                        <span class="normal">Rp.85.000</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Image shoes carousel -->
    </div>
    <!-- Compass Shoes carousel area -->
@endsection