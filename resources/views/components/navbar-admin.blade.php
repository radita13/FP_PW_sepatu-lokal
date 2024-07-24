<nav class="fixed top-0 z-50 w-full bg-[#24303f] border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                    type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                <a href="https://flowbite.com" class="flex ms-2 md:me-24">
                    <img src="/img/home/Logo.png" class="h-8 me-3" alt="FlowBite Logo" />
                    <span
                        class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap text-white font-poppins">INDOSHOES</span>
                </a>
            </div>
            <div class="flex items-center">
                <div class="w-auto overflow-hidden">
                    <p class="text-white truncate">{{ auth()->user()->email }}</p>
                </div>
                <div class="flex items-center ms-3">
                    <div>
                        @php
                            $user = auth()->user();
                        @endphp
                        <button type="button" class="flex text-sm bg-gray-800 rounded-full">
                            @if (Str::startsWith($user->image, 'img/'))
                                <img src="{{ asset(auth()->user()->image) }}" alt="{{ $user->username }}"
                                    class="w-10 h-w-10 rounded-full">
                                    <span class="top-3 end-5 absolute w-3.5 h-3.5 bg-green-500 border-2 border-white dark:border-gray-800 rounded-full"></span> 
                            @else
                                <img src="{{ asset('storage/' . $user->image) }}" alt="{{ $user->username }}"
                                    class="w-10 h-w-10 rounded-full">
                            @endif
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
