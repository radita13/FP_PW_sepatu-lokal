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
                        class="{{ request()->is('home_page') ? 'bg-kuarterner md:bg-transparent' : 'hover:bg-gray-700 md:hover:bg-transparent' }} rounded">
                        <!-- Navbar url menuju ke halaman home -->
                        <a href="/home_page"
                            class="{{ request()->is('home_page') ? 'hover:text-white text-white md:text-font2' : 'text-white hover:text-font2 max-md:hover:text-font1' }} block py-2 px-3 rounded md:p-0 md:bg-transparent"
                            aria-current="page">Home</a>
                        <!-- Navbar url menuju ke halaman home -->
                    </li>
                    <!-- Navbar home area -->

                    <!-- Navbar man dropdown area -->
                    <li>
                        <!-- Membuat button man ketika diklik akan muncul dropdown pilihan kategori shoes -->
                        <button id="man" data-dropdown-toggle="dropdownNavbar_man"
                            class="{{ request()->is('man_sneakers_page') || request()->is('man_sports_page') || request()->is('man_running_page') ? 'bg-kuarterner md:bg-transparent md:hover:text-white text-white md:text-font2' : 'text-white hover:text-font2 max-md:hover:text-font1' }} flex items-center justify-between w-full py-2 px-3 md:p-0 text-font1 md:hover:text-font2 hover:bg-gray-700 md:hover:bg-transparent rounded">Man
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
                                    <a href="/man_sneakers_page"
                                        class="{{ request()->is('man_sneakers_page') ? 'hover:bg-kuarterner md:bg-font3 max-md:bg-font3' : 'hover:bg-kuarterner md:bg-transparent max-md:bg-transparent' }} block pl-1 py-2 mx-3 rounded">Sneakers</a>
                                    <!-- Navbar url menuju ke halaman Man Sneakers -->
                                </li>
                                <li>
                                    <!-- Navbar url menuju ke halaman Man Sports -->
                                    <a href="/man_sports_page"
                                        class="{{ request()->is('man_sports_page') ? 'hover:bg-kuarterner md:bg-font3 max-md:bg-font3' : 'hover:bg-kuarterner md:bg-transparent max-md:bg-transparent' }} block pl-1 py-2 mx-3 rounded">Sports</a>
                                    <!-- Navbar url menuju ke halaman Man Sports -->
                                </li>
                                <li>
                                    <!-- Navbar url menuju ke halaman Man Running -->
                                    <a href="/man_running_page"
                                        class="{{ request()->is('man_running_page') ? 'hover:bg-kuarterner md:bg-font3 max-md:bg-font3' : 'hover:bg-kuarterner md:bg-transparent max-md:bg-transparent' }} block pl-1 py-2 mx-3 rounded">Running</a>
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
                            class="{{ request()->is('women_sneakers_page') || request()->is('women_sports_page') || request()->is('women_running_page') ? 'bg-kuarterner md:bg-transparent md:hover:text-white text-white md:text-font2' : 'text-white hover:text-font2 max-md:hover:text-font1' }} flex items-center justify-between w-full py-2 px-3 md:p-0 text-font1 md:hover:text-font2 hover:bg-gray-700 md:hover:bg-transparent rounded">Women
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
                                    <a href="/women_sneakers_page"
                                        class="{{ request()->is('women_sneakers_page') ? 'hover:bg-kuarterner md:bg-font3 max-md:bg-font3' : 'hover:bg-kuarterner md:bg-transparent max-md:bg-transparent' }} block pl-1 py-2 mx-3 rounded">Sneakers</a>
                                    <!-- Navbar url menuju ke halaman Women Sneakers -->
                                </li>
                                <li>
                                    <!-- Navbar url menuju ke halaman Women Sports -->
                                    <a href="/women_sports_page"
                                        class="{{ request()->is('women_sports_page') ? 'hover:bg-kuarterner md:bg-font3 max-md:bg-font3' : 'hover:bg-kuarterner md:bg-transparent max-md:bg-transparent' }} block pl-1 py-2 mx-3 rounded">Sports</a>
                                    <!-- Navbar url menuju ke halaman Women Sports -->
                                </li>
                                <li>
                                    <!-- Navbar url menuju ke halaman Women Running -->
                                    <a href="/women_running_page"
                                        class="{{ request()->is('women_running_page') ? 'hover:bg-kuarterner md:bg-font3 max-md:bg-font3' : 'hover:bg-kuarterner md:bg-transparent max-md:bg-transparent' }} block pl-1 py-2 mx-3 rounded">Running</a>
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
                        <button id="brand" data-dropdown-toggle="dropdownNavbar_brand"
                            class="{{ request()->is('localbrand_johnson_page') || request()->is('localbrand_athletica_page') || request()->is('localbrand_aerostreet_page') || request()->is('localbrand_compass_page') ? 'bg-kuarterner md:bg-transparent md:hover:text-white text-white md:text-font2' : 'text-white hover:text-font2 max-md:hover:text-font1' }} flex items-center justify-between w-full py-2 px-3 md:p-0 text-font1 md:hover:text-font2 hover:bg-gray-700 md:hover:bg-transparent rounded">Local
                            Brands
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Membuat button local brand ketika diklik akan muncul dropdown pilihan brand local shoes -->

                        <!-- Dropdown local brand menu pilihan brand local area-->
                        <div id="dropdownNavbar_brand"
                            class="z-10 hidden font-normal bg-gray-700 divide-y rounded-lg shadow w-44 divide-gray-500">
                            <div class="py-1">
                                <h1 class="block px-4 py-2 text-sm text-font1 text-center">
                                    BRAND</h1>
                            </div>
                            <ul class="py-2 text-sm text-font1 text-center" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <!-- Navbar url menuju ke halaman Brand Local Johnson -->
                                    <a href="/localbrand_johnson_page"
                                        class="{{ request()->is('localbrand_johnson_page') ? 'hover:bg-kuarterner md:bg-font3 max-md:bg-font3' : 'hover:bg-kuarterner md:bg-transparent max-md:bg-transparent' }} block pl-1 py-2 mx-3 rounded">Johnson</a>
                                    <!-- Navbar url menuju ke halaman Brand Local Johnson -->
                                </li>
                                <li>
                                    <!-- Navbar url menuju ke halaman Brand Local Athletica -->
                                    <a href="/localbrand_athletica_page"
                                        class="{{ request()->is('localbrand_athletica_page') ? 'hover:bg-kuarterner md:bg-font3 max-md:bg-font3' : 'hover:bg-kuarterner md:bg-transparent max-md:bg-transparent' }} block pl-1 py-2 mx-3 rounded">Athletica</a>
                                    <!-- Navbar url menuju ke halaman Brand Local Athletica -->
                                </li>
                                <li>
                                    <!-- Navbar url menuju ke halaman Brand Local Aero Street -->
                                    <a href="/localbrand_aerostreet_page"
                                        class="{{ request()->is('localbrand_aerostreet_page') ? 'hover:bg-kuarterner md:bg-font3 max-md:bg-font3' : 'hover:bg-kuarterner md:bg-transparent max-md:bg-transparent' }} block pl-1 py-2 mx-3 rounded">Aero
                                        Street</a>
                                    <!-- Navbar url menuju ke halaman Brand Local Aero Street-->
                                </li>
                                <li>
                                    <!-- Navbar url menuju ke halaman Brand Local Compass -->
                                    <a href="/localbrand_compass_page"
                                        class="{{ request()->is('localbrand_compass_page') ? 'hover:bg-kuarterner md:bg-font3 max-md:bg-font3' : 'hover:bg-kuarterner md:bg-transparent max-md:bg-transparent' }} block pl-1 py-2 mx-3 rounded">Compass</a>
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
            <div class="flex items-center gap-5">
                <!-- Search area -->
                <form action="{{ route('search_login') }}" method="GET" class="max-w-md mx-auto mr-4">
                    <label for="default-search" class="mb-2 sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search" name="query"
                            class="block w-full p-4 ps-10 text-sm rounded-lg placeholder text-black"
                            placeholder="Search Shoes, Brand..." required />
                    </div>
                </form>
                <!-- Search area -->

                <!-- Button login area -->
                @php
                    $user = auth()->user();
                @endphp
                <div id="avatarButton" type="button" data-dropdown-toggle="userDropdown"
                    class="relative w-14 h-14 overflow-hidden rounded-full cursor-pointer mr-5">
                    @if (auth()->check() && auth()->user()->image)
                        @if (Str::startsWith(auth()->user()->image, 'img/'))
                            <img id="preview-image" src="{{ asset(auth()->user()->image) }}"
                                alt="{{ auth()->user()->username }}">
                        @else
                            <img id="preview-image" src="{{ asset('storage/' . auth()->user()->image) }}"
                                alt="{{ auth()->user()->username }}">
                        @endif
                    @else
                        <!-- Default avatar if user is not logged in or has no image -->
                        <img id="preview-image" src="{{ asset('path/to/default/avatar.png') }}"
                            alt="Default Avatar">
                    @endif
                    {{-- @if (Str::startsWith($user->image, 'img/'))
                        <img id="preview-image" src="{{ asset(auth()->user()->image) }}"
                            alt="{{ $user->username }}">
                    @else
                        <img id="preview-image" src="{{ asset('storage/' . $user->image) }}"
                            alt="{{ $user->username }}">
                    @endif --}}
                </div>

                <!-- Dropdown menu -->
                <div id="userDropdown" class="hidden bg-black divide-y divide-gray-100 rounded-lg shadow z-40">
                    <div class="px-4 py-3 text-sm text-white">
                        <div class="flex justify-center mb-1">{{ auth()->user()->username }}</div>
                        <div class="font-medium">{{ auth()->user()->email }}</div>
                    </div>
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                        <li>
                            <a href="{{ route('profile') }}"
                                class="block px-4 py-2 hover:bg-gray-600 text-white">Profile</a>
                        </li>
                        <div>
                            <form action="{{ route('logout.user') }}" method="POST"
                                class="block px-4 py-2 text-sm text-white hover:bg-gray-600">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                        </div>
                    </ul>
                </div>
            </div>
            <!-- Button sign up area -->
        </div>
        <!-- Search, button login dan button sign up -->
        </div>
    </nav>
    <!-- Navigasi area -->
</header>
<!-- Membuat Header area yang berisi logo IndoShoes, tombol toggle navbar responsif, navbar, search, tombol login, dan sign up -->
