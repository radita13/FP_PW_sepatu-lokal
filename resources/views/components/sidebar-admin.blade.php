<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-[#24303f] sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-[#24303f]">
        <ul class="space-y-2 font-medium">
            <li class="divide-y divide-gray-300">
                <div class="flex items-center pl-2 text-gray-900 mb-2">
                    <p class="text-white font-poppins text-xl">Menu</p>
                </div>
                <div></div>
            </li>
            <li>
                <a href="/dashboard/admin"
                    class="{{ Request::is('dashboard/admin') ? 'bg-gray-100 text-gray-900 w-full' : 'hover:bg-gray-100 w-full' }} flex items-center p-2 rounded-lg group">
                    <svg class="{{ Request::is('dashboard/admin') ? 'text-gray-900 w-5 h-5 transition duration-75 group-hover:text-gray-900' : 'text-white transition duration-75 group-hover:text-gray-900' }} w-5 h-5 transition duration-75" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span
                        class="{{ Request::is('dashboard/admin') ? '' : 'text-white' }} ms-3 text-gray-900 group-hover:text-gray-900">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/product"
                    class="{{ Request::is('dashboard/product*') ? 'bg-gray-100 text-gray-900 w-full' : 'hover:bg-gray-100 w-full' }} flex items-center p-2 rounded-lg group">
                    <svg class="{{ Request::is('dashboard/product*') ? 'text-gray-900 w-5 h-5 transition duration-75 group-hover:text-gray-900' : 'text-white transition duration-75 group-hover:text-gray-900' }} w-5 h-5 transition duration-75
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path
                            d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                    </svg>
                    <span
                        class="{{ Request::is('dashboard/product*') ? '' : 'text-white' }} ms-3 text-gray-900 group-hover:text-gray-900">Products</span>
                </a>
            </li>
            <li>
                <form action="{{ route('logout.admin') }}" method="POST"
                    class="text-gray-900 hover:bg-gray-100 w-full flex items-center p-2 rounded-lg group">
                    @csrf
                    <svg class="w-5 h-5 transition duration-75 group-hover:text-gray-900 text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2" />
                    </svg>
                    <button type="submit" class="ms-3 text-white group-hover:text-gray-900">Logout</button>
                </form>
            </li>
        </ul>
    </div>
</aside>