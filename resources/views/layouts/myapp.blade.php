<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <link rel="icon" type="image/x-icon" href="/images/logos/LogoPFE.png">
    @vite('node_modules/flowbite/dist/flowbite.min.js')
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-sec-300">

    {{-- -------------------------------------------------------------- Header -------------------------------------------------------------- --}}
    @guest
        <header>
            <nav class="bg-sec-600 border-gray-200 px-4 lg:px-6 py-4 dark:bg-gray-800">
                <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl drop-shadow-2xl">
                    {{-- LOGO --}}
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img loading="lazy" src="/images/logos/LogoPFE.png" class="mr-3 h-16 lg:h-24 w-auto" alt="Flowbite Logo" />

                    </a>

                    {{-- login & Register buttons --}}
                    <div class="flex items-center  lg:order-2">
                        <a href="{{ route('login') }}">
                            <button type="button"
                                class=" px-4 lg:px-5 py-2 lg:py-2.5 mr-2 text-white bg-gradient-to-br from-pr-400 to-pr-300 hover:bg-gradient-to-bl font-medium rounded-lg text-sm ">
                                login
                            </button>

                        </a>
                        <a href="{{ route('register') }}">
                            <button
                                class="relative inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-200 via-red-300 to-yellow-200 group-hover:from-red-200 group-hover:via-red-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900 ">
                                <span
                                    class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-sec-600 dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    Register
                                </span>
                            </button>

                        </a>

                        {{-- Mobile menu --}}
                        <button data-collapse-toggle="mobile-menu-2" type="button"
                            class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            aria-controls="mobile-menu-2" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>

                    {{-- Menu --}}
                    <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                        <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                            <li>
                                <a href="/">
                                    <div class="group text-center">
                                        <div class="group-hover:cursor-pointer font-extrabold italic">Home</div>
                                        <div
                                            class="block invisible bg-pr-400 w-12 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                                        </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('bikes') }}">
                                    <div class="group text-center">
                                        <div class="group-hover:cursor-pointer font-extrabold italic">bikes</div>
                                        <div
                                            class="block invisible bg-pr-400 w-8 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                                        </div>
                                </a>
                            </li>
                            <li>
                                <a href="/location">
                                    <div class="group text-center">
                                        <div class="group-hover:cursor-pointer font-extrabold italic">Location</div>
                                        <div
                                            class="block invisible bg-pr-400 w-16 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                                        </div>
                                </a>
                            </li>
                            <li>
                                <a href="/contact_us">
                                    <div class="group text-center">
                                        <div class="group-hover:cursor-pointer font-extrabold italic">Contact Us</div>
                                        <div
                                            class="block invisible bg-pr-400 w-20 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                                        </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    @else
        <header>
            <nav class="bg-sec-600 border-gray-200 px-4 lg:px-6 py-4 dark:bg-gray-800">
                <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                    {{-- LOGO --}}
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img loading="lazy" src="/images/logos/LogoPFE.png" class="mr-3 h-24" alt="Flowbite Logo" />
                    </a>

                    {{-- Dropdown button --}}


                    @if (Auth::user()->role == 'admin')
                        <div class="hidden justify-between mb-6 items-center w-full lg:flex lg:w-auto" id="mobile-menu-2">
                            <ul class="flex flex-col  font-medium lg:flex-row lg:space-x-8 lg:mt-0 ">
                                <li>
                                    <a href='{{ route('adminDashboard') }}'>
                                        <div class="group text-center">
                                            <div class="group-hover:cursor-pointer font-extrabold italic">Dashboard</div>
                                            <div
                                                class="block invisible bg-pr-400 w-20 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                                            </div>
                                    </a>

                                </li>

                                <li class=' '>
                                    <a href="{{ route('bikes.index') }}">
                                        <div class="group text-center">
                                            <div class="group-hover:cursor-pointer font-extrabold italic ">bikes</div>
                                            <div
                                                class="block invisible bg-pr-400 w-8 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                                            </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('users') }}">
                                        <div class="group text-center">
                                            <div class="group-hover:cursor-pointer font-extrabold italic">Users</div>
                                            <div
                                                class="block invisible bg-pr-400 w-10 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                                            </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                            class="text-black bg-pr-400 hover:bg-pr-600 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center "
                            type="button">
                            <img loading="lazy" src="/images/user.png" width="24" alt="user icon" class="mr-3">
                            <p> Admin ( {{ Auth::user()->name }} ) </p>
                            <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>

                        <div id="dropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="{{ route('adminDashboard') }}"
                                        class="block px-4 py-2 hover:bg-pr-200 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                </li>
                                <li>
                                    <a class="block px-4 py-2 hover:bg-pr-200 " href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="hidden">
                                        @csrf
                                    </form>

                                </li>
                            </ul>
                        </div>
                    @else
                        <div class="hidden justify-between items-center w-full lg:flex lg:w-auto" id="mobile-menu-2">
                            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                                <li>

                                    <a href="/">
                                        <div class="group text-center">
                                            <div class="group-hover:cursor-pointer font-extrabold italic">Home</div>
                                            <div
                                                class="block invisible bg-pr-400 w-12 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                                            </div>
                                        </div>
                                    </a>



                                </li>
                                <li>
                                    <a href="{{ route('bikes') }}">
                                        <div class="group text-center">
                                            <div class="group-hover:cursor-pointer font-extrabold italic">bikes</div>
                                            <div
                                                class="block invisible bg-pr-400 w-8 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/location">
                                        <div class="group text-center">
                                            <div class="group-hover:cursor-pointer font-extrabold italic">Location</div>
                                            <div
                                                class="block invisible bg-pr-400 w-16 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                                            </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="/contact_us">
                                        <div class="group text-center">
                                            <div class="group-hover:cursor-pointer font-extrabold italic">Contact Us</div>
                                            <div
                                                class="block invisible bg-pr-400 w-20 h-1 rounded-md text-center -bottom-1 mx-auto relative group-hover:visible">
                                            </div>
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                            class="text-black bg-pr-400 hover:bg-pr-600 font-medium rounded-lg text-sm px-3 py-2.5 text-center inline-flex items-center "
                            type="button">
                            <img loading="lazy" src="/images/user.png" width="24" alt="user icon" class="mr-3">
                            {{ Auth::user()->name }}
                            <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownDefaultButton">

                                <li>
                                    <a href="{{ route('clientReservation') }}"
                                        class="block px-4 py-2 hover:bg-pr-200 ">Reservations</a>
                                </li>

                                <li>
                                    <a class="block px-4 py-2 hover:bg-pr-200 " href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="hidden">
                                        @csrf
                                    </form>

                                </li>
                            </ul>
                        </div>
                    @endif
                    {{-- Mobile menu --}}
                    <button data-collapse-toggle="mobile-menu-2" type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    {{-- Menu --}}

                </div>
            </nav>
        </header>
    @endguest

    {{-- --------------------------------------------------------------- Main  --------------------------------------------------------------- --}}
    <main>
        @yield('content')
    </main>
    {{-- --------------------------------------------------------------- Footer  --------------------------------------------------------------- --}}
    @if (Auth::check() && Auth::user()->role == 'admin')
        <footer class="px-4 h-[100px]  sm:p-6 bg-gray-800 flex justify-center items-center">
            <p class="text-gray-100 font-bike font-medium text-5xl ">admin panel</p>
        </footer>
    @else
        <footer class="px-4  sm:p-6 bg-gray-800">
            <div class="pt-10 mx-auto max-w-screen-xl relative">
                <div class="md:flex md:justify-between">
                    <div class="mb-12 md:mb-0 flex justify-center ">
                        <a href="" class="flex items-center">
                            <img loading="lazy" src="/images/logos/LogoPFEblanc.png" class="mr-3 h-32 w-32"
                                alt="Logo" />
                        </a>
                    </div>

                    <div class="grid grid-cols-3 gap-8 ">
                        <div>
                            <h2 class="mb-6 text-sm font-semibold  uppercase text-white">Resources</h2>
                            <ul class=" text-gray-400">
                                <li class="mb-4">
                                    <a href="https://laravel.com/" target='_blank'="hover:underline">Laravel 10.x</a>
                                </li>
                                <li>
                                    <a href="https://tailwindcss.com/" target='_blank'
                                        class="hover:underline">Tailwind
                                        CSS</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold  uppercase text-white">Legal</h2>
                            <ul class=" text-gray-400">
                                <li class="mb-4">
                                    <a href="{{route('privacy_policy')}}" class="hover:underline">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="{{route('terms_conditions')}}" class="hover:underline">Terms &amp; Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                
                    <a href="javascript:void(0);" onclick="scrollToTop();"
                        class="text-white absolute top-4 md:-right-8 -right-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="3em" viewBox="0 0 512 512">
                            <path
                                d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM135.1 217.4l107.1-99.9c3.8-3.5 8.7-5.5 13.8-5.5s10.1 2 13.8 5.5l107.1 99.9c4.5 4.2 7.1 10.1 7.1 16.3c0 12.3-10 22.3-22.3 22.3H304v96c0 17.7-14.3 32-32 32H240c-17.7 0-32-14.3-32-32V256H150.3C138 256 128 246 128 233.7c0-6.2 2.6-12.1 7.1-16.3z" />
                        </svg>
                    </a>

                </div>
            </div>

        </footer>
    @endif


</body>
<script>
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>

</html>
