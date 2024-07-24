@extends('admin.layouts.main')

@section('title', 'Dashboard || Product')

<link rel="icon" href="/img/home/Logo.png">

@section('content')
    <div class="p-2 sm:ml-64">
        <div class="px-8 divide-y-4 divide-gray-300 mt-14">
            <div class="flex items-center h-20 font-poppins font-medium">
                <p class="text-3xl text-white font-poppins">Products</p>
            </div>
            <div class="flex items-center pl-5 h-3">
                {{-- // --}}
            </div>
        </div>

        @if (session()->has('success'))
            <div id="alert-3" class="flex items-center mx-8 p-4 my-2 text-green-800 rounded-lg bg-green-50" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                    {{ session('success') }}
                </div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8"
                    aria-label="Close" onclick="closeAlert('alert-3')">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @endif

        <div class="flex justify-end items-center px-8">
            <form class="max-w-sm items-center px-2 pt-2" method="GET">
                <label for="search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                        placeholder="Search branch name..." name="search" value="{{ $search }}" required />
                </div>
            </form>
            <a href="/dashboard/product/create"
                class="flex text-center justify-center items-center gap-2 text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-[9.5px] mb-2 focus:outline-none max-[410]:text-2xl">ADD
                NEW<box-icon name='plus' color='white'></box-icon></a>
        </div>
        <div class="relative overflow-x-auto px-8 shadow-md">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 border-separate border-black table-auto">
                <thead class="text-xs text-gray-700 uppercase bg-gray-400">
                    <tr>
                        <th scope="col" class="p-4 text-center">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Product name
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Brand Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Image
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Category People
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Category Shoes
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1 + ($products->currentPage() - 1) * $products->perPage();
                    @endphp
                    @foreach ($products as $product)
                        <tr class="bg-white border-b">
                            <td scope="col" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center">
                                {{ $no++ }}
                            </td>
                            <td scope="col" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center">
                                {{ $product->name_product }}
                            </td>
                            <td scope="col" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center">
                                {{ $product->name_localbrand }}
                            </td>
                            <td scope="col" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center justify-center flex">
                                @if (Str::startsWith($product->image, 'img/'))
                                    <img src="{{ asset($product->image) }}" alt="{{ $product->name_product }}"
                                        class="w-20">
                                @else
                                    <img src="{{ asset('storage/product-image/' . $product->image) }}"
                                        alt="{{ $product->name_product }}" class="w-20">
                                @endif
                            </td>
                            <td scope="col" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center">
                                {{ $product->category_people }}
                            </td>
                            <td scope="col" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center">
                                {{ $product->category_shoes }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex justify-center items-center gap-3">
                                    <a href="/dashboard/product/{{ $product->slug }}/edit"
                                        class="bg-blue-500 rounded p-2 flex items-center justify-center">
                                        <box-icon name='edit'></box-icon>
                                    </a>
                                    <form action="/dashboard/product/{{ $product->slug }}" method="POST" class="flex m-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 rounded p-2 flex items-center justify-center"
                                            onclick="return confirm('Are you sure?')">
                                            <box-icon name='x-circle'></box-icon>
                                        </button>
                                    </form>
                                    <a href="/dashboard/product/{{ $product->slug }}"
                                        class="bg-yellow-300 rounded p-2 flex items-center justify-center">
                                        <box-icon type='solid' name='low-vision'></box-icon>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-2 mb-2">
                {{-- {{ $products->links('pagination::tailwind') }} --}}
                {!! $products->appends(Request::except('page'))->render() !!}
            </div>
        </div>
    </div>

    <script>
        function closeAlert(alertId) {
            const alert = document.getElementById(alertId);
            alert.style.display = 'none';
        }
    </script>
@endsection
