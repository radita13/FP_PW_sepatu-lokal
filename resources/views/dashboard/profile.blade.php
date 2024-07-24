<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile User</title>
    <link rel="stylesheet" href="{{ '/style/profile.css' }} ">
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="{{ asset('img/home/Logo.png') }}">
</head>

<body>
    @if (session()->has('success'))
        <div id="alert-3" class="absolute-alert flex items-center mx-8 p-4 my-2 text-green-800 rounded-lg bg-green-50" role="alert">
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

    <div class="wrapper-all">
        <div class="vw-wrapper">
            <div class="profile">
                <h1 class="font-bold text-2xl">User Profile</h1>
                @php
                    $user = auth()->user();
                @endphp
                <div class="img-prof-wrapper">
                    @if (Str::startsWith($user->image, 'img/'))
                        <img id="preview-image" src="{{ asset(auth()->user()->image) }}" alt="{{ $user->username }}"
                            class="img-profile">
                    @else
                        <img id="preview-image" src="{{ asset('storage/' . $user->image) }}" alt="{{ $user->username }}"
                            class="img-profile">
                    @endif
                </div>
                <p class="text-xl">{{ auth()->user()->username }}</p>
                <div class="photo-option mb-5">
                    <form action="{{ route('profile.upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="flex justify-center items-center px-20">
                            <label for="image"
                                class="bg-white p-3 rounded-lg mr-4 hover:bg-gray-300 cursor-pointer font-semibold text-center">
                                <input type="file" name="image" id="image" accept="image/*"
                                    style="display: none;" required>
                                Upload Photo
                            </label>
                            <button type="submit"
                                class="px-10 bg-white p-3 rounded-lg hover:bg-gray-300 cursor-pointer font-semibold text-center">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="form-wrapper">
                <form action="{{ route('profile.update') }}" method="POST" class="max-w-sm mx-auto">
                    @csrf
                    <div class="mb-5">
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                        <input type="text" id="username" name="username"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5"
                            value="{{ old('username', auth()->user()->username) }}" required />
                    </div>
                    <div class="mb-5">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="email" id="email" name="email"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            value="{{ old('email', auth()->user()->email) }}" placeholder="name@gmail.com" required />
                    </div>
                    <div class="mb-5">
                        <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900">Phone
                            Number</label>
                        <input type="text" id="phone_number" name="phone_number"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            value="{{ old('phone_number', auth()->user()->phone_number) }}" required />
                    </div>
                    <div class="button-save">
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.getElementById('image');
            const preview = document.getElementById('preview-image');

            input.addEventListener('change', function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        preview.src = event.target.result;
                    };
                    reader.readAsDataURL(file);
                } else {
                    preview.src = '{{ asset('placeholder.jpg') }}';
                }
            });
        });


        function closeAlert(alertId) {
            const alert = document.getElementById(alertId);
            alert.style.display = 'none';
        }
    </script>
</body>

</html>
