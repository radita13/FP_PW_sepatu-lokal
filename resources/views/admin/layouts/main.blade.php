<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>

    <!-- Connect Google Font "Koulen" -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
    <!-- Connect Google Font "Koulen" -->

    <!-- Connect Google Font "Poppins" -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Connect Google Font "Poppins" -->

    <!-- Link connect style eksternal css -->
    @yield('style')
    <!-- Link connect style eksternal css -->

    <!-- Mengubah tampilan website secara otomatis ketika disave -->
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Mengubah tampilan website secara otomatis ketika disave -->

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>

<body body class="bg-[#1a222c]">
    <!-- Navbar -->
    <x-navbar-admin></x-navbar-admin>

    <!-- Sidebar -->
    <x-sidebar-admin></x-sidebar-admin>

    <!-- Main content -->
    <main>
        @yield('content')
    </main>
</body>

</html>