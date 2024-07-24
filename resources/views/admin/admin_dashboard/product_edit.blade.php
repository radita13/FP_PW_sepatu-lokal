@extends('admin.layouts.main')

@section('title', 'Dashboard || Product Edit')

<link rel="icon" href="/img/home/Logo.png">

@section('content')
    <div class="p-2 sm:ml-64">
        <div class="px-8 divide-y-4 divide-gray-300 mt-14">
            <div class="flex items-center h-20 font-poppins font-medium">
                <p class="text-3xl text-white font-poppins">Products Edit</p>
            </div>
            <div class="flex items-center pl-5 h-3">
                {{-- // --}}
            </div>
        </div>
        <div class="px-8 mt-6">
            <div class="bg-gray-800 text-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <form class="space-y-6" method="POST"
                        action="{{ route('product.update', ['slug' => $product->slug]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="name_product" class="block mb-2 text-sm font-medium text-white">Name
                                Product</label>
                            <input type="text" id="name_product" name="name_product"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                value="{{ old('name_product', $product->name_product) }}" autofocus />
                            @error('name_product')
                                <p class="mt-2 text-xs text-red-600">
                                    <span class="font-medium">{{ $message }}</span>
                                </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name_localbrand" class="block mb-2 text-sm font-medium text-white">Name
                                Brand</label>
                            <input type="text" id="name_localbrand" name="name_localbrand"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                value="{{ old('name_localbrand', $product->name_localbrand) }}" />
                            @error('name_localbrand')
                                <p class="mt-2 text-xs text-red-600">
                                    <span class="font-medium">{{ $message }}</span>
                                </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="price" class="block mb-2 text-sm font-medium text-white">Price</label>
                            <input type="number" id="price" name="price"
                                class="form-control shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                value="{{ old('price', $product->price) }}" />
                            @error('price')
                                <p class="mt-2 text-xs text-red-600">
                                    <span class="font-medium">{{ $message }}</span>
                                </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="discount" class="block mb-2 text-sm font-medium text-white">Discount</label>
                            <input type="number" id="discount" name="discount"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                value="{{ old('discount', $product->discount) }}" />
                            @error('discount')
                                <p class="mt-2 text-xs text-red-600">
                                    <span class="font-medium">{{ $message }}</span>
                                </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image" class="block mb-2 text-sm font-medium text-white">Upload Image</label>
                            @if (Str::startsWith($product->image, 'img/'))
                                <img id="image-preview" src="{{ asset($product->image) }}"
                                    alt="{{ $product->name_product }}" class="w-60 mb-3">
                            @elseif ($product->image)
                                <img id="image-preview" src="{{ asset('storage/product-image/' . $product->image) }}"
                                    class="w-60 mb-3" alt="{{ $product->name_product }}">
                            @else
                                <img id="image-preview" class="hidden w-60 mb-3">
                            @endif
                            <div class="relative">
                                <input type="file" id="image" name="image"
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                                    onchange="previewImage()" />
                                <button type="button"
                                    class="absolute -top-[245px] right-[905px] bg-slate-400 text-white p-1 rounded-full cursor-pointer delete-image {{ $product->image ? 'block' : 'hidden' }}"
                                    onclick="deleteImage()">
                                    <box-icon name='x'></box-icon>
                                </button>
                            </div>
                            @error('image')
                                <p class="mt-2 text-xs text-red-600">
                                    <span class="font-medium">{{ $message }}</span>
                                </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="category_people" class="block mb-2 text-sm font-medium text-white">Category
                                People</label>
                            <select id="category_people" name="category_people"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option value="">Select Category People</option>
                                <option value="man"
                                    {{ old('category_people', $product->category_people) == 'man' ? 'selected' : '' }}>Man
                                </option>
                                <option value="women"
                                    {{ old('category_people', $product->category_people) == 'women' ? 'selected' : '' }}>
                                    Women
                                </option>
                            </select>
                            @error('category_people')
                                <p class="mt-2 text-xs text-red-600">
                                    <span class="font-medium">{{ $message }}</span>
                                </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="category_shoes" class="block mb-2 text-sm font-medium text-white">Category
                                Shoes</label>
                            <select id="category_shoes" name="category_shoes"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option value="">Select Category Shoes</option>
                                <option value="sneakers"
                                    {{ old('category_shoes', $product->category_shoes) == 'sneakers' ? 'selected' : '' }}>
                                    Sneakers</option>
                                <option value="sports"
                                    {{ old('category_shoes', $product->category_shoes) == 'sports' ? 'selected' : '' }}>
                                    Sports</option>
                                <option value="running"
                                    {{ old('category_shoes', $product->category_shoes) == 'running' ? 'selected' : '' }}>
                                    Running</option>
                            </select>
                            @error('category_shoes')
                                <p class="mt-2 text-xs text-red-600">
                                    <span class="font-medium">{{ $message }}</span>
                                </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="link_shoes" class="block mb-2 text-sm font-medium text-white">Link Shoes</label>
                            <input type="text" id="link_shoes" name="link_shoes"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                value="{{ old('link_shoes', $product->link_shoes) }}" />
                            @error('link_shoes')
                                <p class="mt-2 text-xs text-red-600">
                                    <span class="font-medium">{{ $message }}</span>
                                </p>
                            @enderror
                        </div>
                        <div class="col-span-2 text-right mt-5">
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-[11.3px]">Update
                                Product</button>
                        </div>
                    </form>
                    <div class="mt-4 flex justify-start">
                        <a href="/dashboard/product"
                            class="flex items-center gap-2 text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5">
                            <box-icon name='arrow-back' color='white'></box-icon>
                            Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imagePreview = document.querySelector('#image-preview');
            const deleteButton = document.querySelector('.delete-image');
            const previewContainer = document.querySelector('.preview-container');

            if (image.files && image.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.classList.remove('hidden');
                    deleteButton.classList.remove('hidden');
                    previewContainer.classList.add('mb-3');
                }

                reader.readAsDataURL(image.files[0]);
            } else {
                deleteImage();
            }
        }

        function deleteImage() {
            const image = document.querySelector('#image');
            const imagePreview = document.querySelector('#image-preview');
            const deleteButton = document.querySelector('.delete-image');
            const previewContainer = document.querySelector('.preview-container');

            image.value = '';
            imagePreview.src = '';
            imagePreview.classList.add('hidden');
            deleteButton.classList.add('hidden');
            previewContainer.classList.remove('mb-3');
        }

        // Initialize preview if there's an existing image
        document.addEventListener('DOMContentLoaded', function() {
            const imagePreview = document.querySelector('#image-preview');
            const deleteButton = document.querySelector('.delete-image');
            const previewContainer = document.querySelector('.preview-container');

            if (imagePreview.src && imagePreview.src.length > 0) {
                imagePreview.classList.remove('hidden');
                deleteButton.classList.remove('hidden');
                previewContainer.classList.add('mb-3');
            }
        });
    </script>
@endsection