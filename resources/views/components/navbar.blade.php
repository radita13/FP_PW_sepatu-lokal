<!-- Membuat Header area yang berisi logo IndoShoes, tombol toggle navbar responsif, navbar, search, tombol login, dan sign up -->
<header>
    <!-- Membuat area navigasi-->
    <nav class="bg-primary font-poppins">
        <div class="max-w-screen-1xl flex flex-wrap items-center justify-between mx-auto p-4">
            <!-- Logo indoshoes area -->
            <div class="flex items-center space-x-3 rtl:space-x-reverse">
                <!-- Digunakan untuk menyisipkan gambar kedalam website -->
                <img src="img/home/Logo.png" class="h-14 w-14" alt="Indo Shoes">
                <!-- digunakan untuk membungkus bagian kecil dari teks atau elemen lainnya tanpa menambahkan jeda baris baru -->
                <span class="self-center text-2xl font-extrabold whitespace-nowrap text-font1 items-center">INDO
                    SHOES</span>
            </div>
            <!-- logo indoshoes area -->

            <!-- Tombol toggle navbar responsif -->
            <!-- Button ini digunakan untuk membuka atau menutup menu utama saat di tampilan mobile. Ini berguna untuk membuat navbar lebih responsif -->
            <button data-collapse-toggle="navbar-multi-level" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden focus:outline-none hover:bg-tertiary"
                aria-controls="navbar-multi-level" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <!-- Svg ini merupakan format yang digunakan oleh gambar berbentuk code html  -->
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <!-- Tombol toggle navbar responsif -->

            <!-- Area Navbar -->
            <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 bg-tertiary md:bg-primary">
                    <!-- Navbar home area -->

                    <li
                        class="{{ request()->is('/') ? 'bg-kuarterner md:bg-transparent' : 'hover:bg-gray-700 md:hover:bg-transparent' }} rounded">
                        <!-- Navbar url menuju ke halaman home -->
                        <a href="/"
                            class="{{ request()->is('/') ? 'hover:text-white text-white md:text-font2' : 'text-white hover:text-font2 max-md:hover:text-font1' }} block py-2 px-3 rounded md:p-0 md:bg-transparent"
                            aria-current="page">Home</a>
                        <!-- Navbar url menuju ke halaman home -->
                    </li>
                    <!-- Navbar home area -->

                    <!-- Navbar man dropdown area -->
                    <li>
                        <!-- Membuat button man ketika diklik akan muncul dropdown pilihan kategori shoes -->
                        <button id="man" data-dropdown-toggle="dropdownNavbar_man"
                            class="{{ request()->is('man_sneakers') || request()->is('man_sports') || request()->is('man_running') ? 'bg-kuarterner md:bg-transparent md:hover:text-white text-white md:text-font2' : 'text-white hover:text-font2 max-md:hover:text-font1' }} flex items-center justify-between w-full py-2 px-3 md:p-0 text-font1 md:hover:text-font2 hover:bg-gray-700 md:hover:bg-transparent rounded">Man
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Membuat button man ketika diklik akan muncul dropdown pilihan kategori shoes -->

                        <!-- Dropdown man menu pilihan shoes area-->
                        <div id="dropdownNavbar_man"
                            class="z-10 hidden font-normal bg-gray-700 divide-y rounded-lg shadow w-44 divide-gray-500">
                            <div class="py-1">
                                <h1 class="block px-4 py-2 text-sm text-font1 text-center">
                                    SHOES</h1>
                            </div>
                            <ul class="py-2 text-sm text-font1 text-center" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <!-- Navbar url menuju ke halaman Man Sneakers -->
                                    <a href="/man_sneakers"
                                        class="{{ request()->is('man_sneakers') ? 'hover:bg-kuarterner md:bg-font3 max-md:bg-font3' : 'hover:bg-kuarterner md:bg-transparent max-md:bg-transparent' }} block pl-1 py-2 mx-3 rounded">Sneakers</a>
                                    <!-- Navbar url menuju ke halaman Man Sneakers -->
                                </li>
                                <li>
                                    <!-- Navbar url menuju ke halaman Man Sports -->
                                    <a href="/man_sports"
                                        class="{{ request()->is('man_sports') ? 'hover:bg-kuarterner md:bg-font3 max-md:bg-font3' : 'hover:bg-kuarterner md:bg-transparent max-md:bg-transparent' }} block pl-1 py-2 mx-3 rounded">Sports</a>
                                    <!-- Navbar url menuju ke halaman Man Sports -->
                                </li>
                                <li>
                                    <!-- Navbar url menuju ke halaman Man Running -->
                                    <a href="/man_running"
                                        class="{{ request()->is('man_running') ? 'hover:bg-kuarterner md:bg-font3 max-md:bg-font3' : 'hover:bg-kuarterner md:bg-transparent max-md:bg-transparent' }} block pl-1 py-2 mx-3 rounded">Running</a>
                                    <!-- Navbar url menuju ke halaman Man Running -->
                                </li>
                            </ul>
                        </div>
                        <!-- Dropdown man menu pilihan shoes area-->
                    </li>
                    <!-- Navbar man dropdown area -->

                    <!-- Navbar women dropdown area -->
                    <li>
                        <!-- Membuat button women ketika diklik akan muncul dropdown pilihan kategori shoes -->
                        <button id="women" data-dropdown-toggle="dropdownNavbar_women"
                            class="{{ request()->is('women_sneakers') || request()->is('women_sports') || request()->is('women_running') ? 'bg-kuarterner md:bg-transparent md:hover:text-white text-white md:text-font2' : 'text-white hover:text-font2 max-md:hover:text-font1' }} flex items-center justify-between w-full py-2 px-3 md:p-0 text-font1 md:hover:text-font2 hover:bg-gray-700 md:hover:bg-transparent rounded">Women
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Membuat button women ketika diklik akan muncul dropdown pilihan kategori shoes -->

                        <!-- Dropdown women menu pilihan shoes area-->
                        <div id="dropdownNavbar_women"
                            class="z-10 hidden font-normal bg-gray-700 divide-y rounded-lg shadow w-44 divide-gray-500">
                            <div class="py-1">
                                <h1 class="block px-4 py-2 text-sm text-font1 text-center">
                                    SHOES</h1>
                            </div>
                            <ul class="py-2 text-sm text-font1 text-center" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <!-- Navbar url menuju ke halaman Women Sneakers -->
                                    <a href="/women_sneakers"
                                        class="{{ request()->is('women_sneakers') ? 'hover:bg-kuarterner md:bg-font3 max-md:bg-font3' : 'hover:bg-kuarterner md:bg-transparent max-md:bg-transparent' }} block pl-1 py-2 mx-3 rounded">Sneakers</a>
                                    <!-- Navbar url menuju ke halaman Women Sneakers -->
                                </li>
                                <li>
                                    <!-- Navbar url menuju ke halaman Women Sports -->
                                    <a href="/women_sports"
                                        class="{{ request()->is('women_sports') ? 'hover:bg-kuarterner md:bg-font3 max-md:bg-font3' : 'hover:bg-kuarterner md:bg-transparent max-md:bg-transparent' }} block pl-1 py-2 mx-3 rounded">Sports</a>
                                    <!-- Navbar url menuju ke halaman Women Sports -->
                                </li>
                                <li>
                                    <!-- Navbar url menuju ke halaman Women Running -->
                                    <a href="/women_running"
                                        class="{{ request()->is('women_running') ? 'hover:bg-kuarterner md:bg-font3 max-md:bg-font3' : 'hover:bg-kuarterner md:bg-transparent max-md:bg-transparent' }} block pl-1 py-2 mx-3 rounded">Running</a>
                                    <!-- Navbar url menuju ke halaman Women Running -->
                                </li>
                            </ul>
                        </div>
                        <!-- Dropdown women menu pilihan shoes area-->
                    </li>
                    <!-- Navbar women dropdown area -->

                    <!-- Navbar local brand dropdown area -->
                    <li>
                        <!-- Membuat button local brand ketika diklik akan muncul dropdown pilihan brand local shoes -->
                        <button id="brand" data-dropdown-toggle="dropdownNavbar_localbrand"
                            class="{{ request()->is('localbrand_johnson') || request()->is('localbrand_athletica') || request()->is('localbrand_aerostreet') || request()->is('localbrand_compass') ? 'bg-kuarterner md:bg-transparent md:hover:text-white text-white md:text-font2' : 'text-white hover:text-font2 max-md:hover:text-font1' }} flex items-center justify-between w-full py-2 px-3 md:p-0 text-font1 md:hover:text-font2 hover:bg-gray-700 md:hover:bg-transparent rounded">Local
                            Brands
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Membuat button local brand ketika diklik akan muncul dropdown pilihan brand local shoes -->

                        <!-- Dropdown local brand menu pilihan brand local area-->
                        <div id="dropdownNavbar_localbrand"
                            class="z-10 hidden font-normal bg-gray-700 divide-y rounded-lg shadow w-44 divide-gray-500">
                            <div class="py-1">
                                <h1 class="block px-4 py-2 text-sm text-font1 text-center">
                                    BRAND</h1>
                            </div>
                            <ul class="py-2 text-sm text-font1 text-center" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <!-- Navbar url menuju ke halaman Brand Local Johnson -->
                                    <a href="/localbrand_johnson"
                                        class="{{ request()->is('localbrand_johnson') ? 'hover:bg-kuarterner md:bg-font3 max-md:bg-font3' : 'hover:bg-kuarterner md:bg-transparent max-md:bg-transparent' }} block pl-1 py-2 mx-3 rounded">Johnson</a>
                                    <!-- Navbar url menuju ke halaman Brand Local Johnson -->
                                </li>
                                <li>
                                    <!-- Navbar url menuju ke halaman Brand Local Athletica -->
                                    <a href="/localbrand_athletica"
                                        class="{{ request()->is('localbrand_athletica') ? 'hover:bg-kuarterner md:bg-font3 max-md:bg-font3' : 'hover:bg-kuarterner md:bg-transparent max-md:bg-transparent' }} block pl-1 py-2 mx-3 rounded">Athletica</a>
                                    <!-- Navbar url menuju ke halaman Brand Local Athletica -->
                                </li>
                                <li>
                                    <!-- Navbar url menuju ke halaman Brand Local Aero Street -->
                                    <a href="/localbrand_aerostreet"
                                        class="{{ request()->is('localbrand_aerostreet') ? 'hover:bg-kuarterner md:bg-font3 max-md:bg-font3' : 'hover:bg-kuarterner md:bg-transparent max-md:bg-transparent' }} block pl-1 py-2 mx-3 rounded">Aero
                                        Street</a>
                                    <!-- Navbar url menuju ke halaman Brand Local Aero Street-->
                                </li>
                                <li>
                                    <!-- Navbar url menuju ke halaman Brand Local Compass -->
                                    <a href="/localbrand_compass"
                                        class="{{ request()->is('localbrand_compass') ? 'hover:bg-kuarterner md:bg-font3 max-md:bg-font3' : 'hover:bg-kuarterner md:bg-transparent max-md:bg-transparent' }} block pl-1 py-2 mx-3 rounded">Compass</a>
                                    <!-- Navbar url menuju ke halaman Brand Local Compass -->
                                </li>
                            </ul>
                        </div>
                        <!-- Dropdown local brand menu pilihan brand local area-->
                    </li>
                    <!-- Navbar local brand dropdown area -->
                </ul>
            </div>
            <!-- Navbar area -->

            <!-- Search, button login dan button sign up -->
            <div class="flex">
                <!-- Search area -->
                <form action="{{ route('search') }}" method="GET" class="max-w-md mx-auto mr-4">
                    <label for="default-search" class="mb-2 sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search" name="query" class="block w-full p-4 ps-10 text-sm rounded-lg placeholder text-black" placeholder="Search Shoes, Brand..." required />
                    </div>
                </form>                
                <!-- Search area -->

                <!-- Button login area -->
                <a href="{{ route('login') }}"
                    class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-kuarterner hover:bg-gray-700 rounded-lg text-center mr-4 max-[500px]:text-xs">
                    <button type="button" class="inline-flex items-center">
                        <!-- Icon login akun -->
                        <svg class="w-7 h-7 me-2" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="50" height="50" fill="url(#pattern0_67_33)" />
                            <defs>
                                <pattern id="pattern0_67_33" patternContentUnits="objectBoundingBox" width="1"
                                    height="1">
                                    <use xlink:href="#image0_67_33" transform="scale(0.0111111)" />
                                </pattern>
                                <image id="image0_67_33" width="90" height="90"
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFuUlEQVR4nO2dW4hVVRjHlzqNSTPa7SEdg6B7PURpPRVGRGViTUEaZUFOGpndsILuQtANelG7Gb30GN3V
                                    jHqqBy/ROOZQRFlZzoyh45hYOWPpLz7mGyiZfc7e56xv7b3PrB9s2Jxz9lrf+rP22t/61rfXcS4SiUQikUgkEolEIukAJgAXAx3Ai8AHwDbgR2AAGNJjQD/bpr95Qa+ZKWWkrG5sAUwHHgDWAPupn9+Bj4D7gTY3lgEmAbcBnwGHseMf4FNgAXCsGysALd
                                    rTegnPbmA5MMU1KsAxwMPAXvJHbFgmNrlGArgM6KZ4fAdc6cqOjInAy8ARiovYtgKY6MoIcBqwifLQCZzhyoTcjp7ctNCIW3iFKwPADcBByssQMN8VGWCxsU8cCmnDIldEgHadHDQKh4F5rkjIuAYM0ngMAVe5IgCcWdIHX5YH5Ol5izxR3aJG56tc/
                                    WydjIwVVuQ5rS7yjM830tZZoUVuAr5m7NEdNBClUbhQ/AqsBK4BzgGO00POZwOrgJ0B7XkwZDy5P0CDenQC1JTCpvHATcCOAHZJ21tCCP1IgMZ8CLTWYFurLmFZs8xG3f8vP/1m3IgV0kPrsHG8DjWW9JkuiwG3GzfgYx8r2Cq23BWW3OJH1dEbIAupl
                                    mNyq0dbJ2vPs+ITX7aOlhJgGZnrqDIDvU8XEv7QQ86XAs0VrpOHqRUSQJtqIbTkXVi6cBMS6m0Dtla4tispd0P9fblTrFhqIbQkt1ixskJPriTyCFuSerZxmOB93yI3aRTLitkJ9cpwkZZ7EsqYY2j3gNf0M82Fs+SshHo3ZyhjY0IZMoO0ZIZPoe80Nr
                                    Ylod4DGco4UGEma8kdPoWWrE4zXHK9uZSTked8Cm3q/LtyC/2eT6FNQ6Ku3EJ3+RTaOirW6mGM3l9hhmjJTz6F7s/J69iUoYwNOXkde3wKLcvu5OBH35uhjCU5+NHCoE+hrXM2VlWYGcoUuxqdFWaGr5RJ6D3Gxu5MWknRWEdXFZGn5RTrEHb7FFrefr
                                    JmUYX6mzVSt0EfkAf0fEmV6N1dAeze7lPoNLdvvfR6jkdPAXYFsLvTeTQ6xDqcsN7jCotltNEmggc8TzhWelgzlBSEUDxbprXCo5HeOLnG4WItYVngU+gZhKcvQ15Hkz74QozJR3ORT6GlIfvIhx71ha8FztWwZ4uez9HvrF24SoH/qh0hq9jv5tSYIv
                                    O2V5EDrCiXlQ4LoU9tkBeBfKYbjDoj9SG2+LmRYdaaiKxC36iVROB66x0KLNOsykKvd29jFLEfCtCQIeBLYLUGk2YB50kKlr7IL1mt04Dzgcs1bv2GXnOo9Gm7KvQkI7/1F+BVuSXrSfTWHGl5ufQ1TTWzCOmG2ckGuNuT0YPiiwJzLTac0rjHpcDrwJ+
                                    ebA736rKO1bI7V630A08AJwS0+UTgyTp3wNlqPjYnxD/+zmjoPuBRn3HnGuyWVfHHa8gllLH/wryMfiZjRG66KwjAKcBbGexfnqexzfqkrxZ4ua7Gnidj99MaZ/lWo3MH9ejTz97R38yt8QWj9hQBs82VlsyCoIunSVur/QCcnaGsqbp71xc1DEsjt/fn
                                    8i6g9NgM9UokcHtCmT1mU+2sAJeMsuuMpJGdlOLacRoCXe95vw8pax1wtdSRwo6TR9nJ7C9JWXZFQqfnh/7jVbSlEPhm4Bvs6dYXPselCJyNeCXSlnZXRHS8k1ndrVV+NzPF2G7Bxmqeg27jOWQay/CBPpSmVOjFT9U4/vpCeupjSb0bOF7a4MoM8CbFY
                                    bVrVBh29YpCv2tUKJbQe12jQrGEHnCNCsNbw/+ct8Jqg/+F1SLBcORPMp++z0HgHbpJeDl31q1D8PmyS0CAredl1jkveIizaDAc41js+c8U1miZqWMeY/HvQS4AFgIvqWBbNHI3oNuiHdHzXfrdGv3tQr02/j1IJBKJRCKRSCQSibiU/AuyjaVXJ6fKmQA
                                    AAABJRU5ErkJggg==" />
                            </defs>
                        </svg>
                        <!-- Icon login akun -->
                        Login
                    </button>
                </a>

                <a href="{{ route('signup') }}"
                    class="px-5 py-2.5 text-sm font-medium text-white inline-flex items-center bg-kuarterner hover:bg-gray-700 rounded-lg text-center max-[500px]:text-xs">
                    <button id="signupButton" type="button">
                        Sign Up
                    </button>
                </a>

            </div>
            <!-- Search, button login dan button sign up -->
        </div>
    </nav>
    <!-- Navigasi area -->
</header>
<!-- Membuat Header area yang berisi logo IndoShoes, tombol toggle navbar responsif, navbar, search, tombol login, dan sign up -->
