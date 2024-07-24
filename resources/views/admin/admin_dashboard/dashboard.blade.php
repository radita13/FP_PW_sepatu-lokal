@extends('admin.layouts.main')

@section('title', 'Dashboard || Admin')

<link rel="icon" href="/img/home/Logo.png">

@section('content')
    <div class="p-2 sm:ml-64">
        <div class="px-8 divide-y-4 divide-gray-300 mt-14">
            <div class="flex items-center h-20 font-poppins font-medium">
                <p class="text-3xl text-white font-poppins">Welcome Back, <span id="element"></span></p>
            </div>
            <div class="flex items-center pl-5 h-6">

            </div>
        </div>

        <div class="px-8">
            <div class="mb-5">
                <h1 class="text-white font-semibold text-xl">TIMELINE PROJECT WEBSITE SEPATU LOKAL</h1>
            </div>
            <ol class="items-center sm:flex">
                <li class="relative mb-6 sm:mb-0">
                    <div class="flex items-center">
                        <div
                            class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white shrink-0">
                            <svg class="w-2.5 h-2.5 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <div class="hidden sm:flex w-full bg-gray-200 h-0.5"></div>
                    </div>
                    <div class="mt-3 sm:pe-8">
                        <h3 class="text-lg font-semibold text-white">UI/UX Website Sepatu Lokal</h3>
                        <time class="block mb-2 text-sm font-normal leading-none text-gray-400">Start
                            on Maret 5, 2024</time>
                        <p class="text-base font-normal text-gray-500">Menentukan element yang akan dipakai dalam tampilan
                            frontend. mulai dari icon, color, dan element pendukung lainnya.</p>
                    </div>
                </li>
                <li class="relative mb-6 sm:mb-0">
                    <div class="flex items-center">
                        <div
                            class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white shrink-0">
                            <svg class="w-2.5 h-2.5 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <div class="hidden sm:flex w-full bg-gray-200 h-0.5"></div>
                    </div>
                    <div class="mt-3 sm:pe-8">
                        <h3 class="text-lg font-semibold text-white">Slashing Frontend</h3>
                        <time class="block mb-2 text-sm font-normal leading-none text-gray-400">Start
                            on April 1, 2024</time>
                        <p class="text-base font-normal text-gray-500">Mulai melakukan implemantasi design UI/UX ke dalam
                            codingan untuk tampilan frontendnya dengan menggunakan framework tailwind dan laravel.</p>
                    </div>
                </li>
                <li class="relative mb-6 sm:mb-0">
                    <div class="flex items-center">
                        <div
                            class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white shrink-0">
                            <svg class="w-2.5 h-2.5 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <div class="hidden sm:flex w-full bg-gray-200 h-0.5"></div>
                    </div>
                    <div class="mt-3 sm:pe-8">
                        <h3 class="text-lg font-semibold text-white">Perancangan Database</h3>
                        <time class="block mb-2 text-sm font-normal leading-none text-gray-400">Start
                            on Mei 2, 2024</time>
                        <p class="text-base font-normal text-gray-500">Melakukan perancangan database sesuai dengan project
                            yang diimplementasikan menggunakan XAMPP (Mysql).</p>
                    </div>
                </li>
                <li class="relative mb-6 sm:mb-0">
                    <div class="flex items-center">
                        <div
                            class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white shrink-0">
                            <svg class="w-2.5 h-2.5 text-blue-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <div class="hidden sm:flex w-full bg-gray-200 h-0.5"></div>
                    </div>
                    <div class="mt-3 sm:pe-8">
                        <h3 class="text-lg font-semibold text-white">Interaksi Frontend & Database</h3>
                        <time class="block mb-2 text-sm font-normal leading-none text-gray-400">Start
                            on Juni 6, 2024</time>
                        <p class="text-base font-normal text-gray-500">Menghubungkan frontend dan database agar bisa saling
                            berinteraksi satu sama lain, agar website berjalan dengan sempurna.</p>
                    </div>
                </li>
            </ol>
        </div>
    </div>
    <script>
        // typing 
        var username = "{{ auth()->user()->username }}";
        new Typed('#element', {
            strings: [username,
                'Terimakasih sudah login kembali !!!'
            ],
            loop: true,
            typeSpeed: 100,
            backSpeed: 50,
        });
    </script>
@endsection
