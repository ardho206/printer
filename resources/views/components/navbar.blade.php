<nav class="bg-black shadow-lg shadow-slate-500/30 sticky top-0 z-40">
    <div class="max-w-screen flex flex-wrap items-center justify-between mx-6 p-4 py-3">
        <a href="https://flowbite.com/" class="flex items-center space-x-1 rtl:space-x-reverse">
            <img src="{{ asset('img/rog-logo.png') }}" class="h-9" alt="Flowbite Logo" />
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            @guest
                <div class="dropdown dropdown-hover dropdown-bottom dropdown-end">
                    <div tabindex="0" role="button" class="m-1">
                        <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
                        </svg>
                    </div>
                    <ul class="dropdown-content z-[1] menu p-1 shadow bg-base-100 rounded-md w-44">
                        <li class="tracking-wider text-xs"><a class="text-gray-700 hover:text-red-500 hover:bg-slate-50"
                                onclick="login_modal.showModal()">Login</a>
                        </li>
                        <li class="tracking-wider text-xs"><a class="text-gray-700 hover:text-red-500 hover:bg-slate-50"
                                onclick="regist_modal.showModal()">Register</a>
                        </li>
                    </ul>
                </div>
            @endguest

            @auth
                <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
                    class="flex items-center text-sm pe-1 font-medium text-white rounded-full md:me-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white"
                    type="button">
                    <span class="sr-only">Open user menu</span>
                    <div class="avatar placeholder mr-1">
                        <div class="bg-neutral text-neutral-content rounded-full w-10">
                            <span class="text-xl">K</span>
                        </div>
                    </div>
                    {{ $user->username }}
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownAvatarName"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                        <div class="font-medium ">{{ $user->username }}</div>
                        <div class="truncate">{{ $user->email }}</div>
                    </div>
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                        aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                        <li>
                            <a href="{{ route('dashboard') }}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                        </li>
                    </ul>
                    <div class="py-2">
                        <form action="{{ url('/logout') }}" method="post">
                            @csrf
                            <button
                                class="block px-4 py-2 w-full text-left text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                out</button>
                        </form>
                    </div>
                </div>
            @endauth
            <button data-collapse-toggle="navbar-cta" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-cta" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
    </div>
</nav>
