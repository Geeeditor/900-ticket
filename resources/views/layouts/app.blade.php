<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a21ee8a7f1.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <title>@yield('title') - 900 Ticket</title>
    <link rel="stylesheet" href="{{ asset('css/style-min.css') }}">


    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>




    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @yield('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Styles / Scripts -->
    {{-- @vite('resources/css/app.css') --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Figtree:wght@400;600&display=swap');

        body {
            font-family: 'Figtree', sans-serif;
        }

        /* Custom Colors */
        :root {
            --red-alt-700: #b61c1c;
            --red-alt-800: #8b0003;
            --gray-600: #707070;
        }

        .glass {
            /* From https://css.glass */
            background: rgba(185, 184, 184, 0.2);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(185, 184, 184, 0.3);
        }

        /* Example of how to use custom colors in a class */
        .red-alt-700 {
            background-color: var(--red-alt-700);
        }

        .red-alt-800 {
            background-color: var(--red-alt-800);
        }

        .gray-600 {
            color: var(--gray-600);
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-min.css') }}">
    <script src='https://code.jquery.com/jquery-3.6.3.js'></script>


    {{-- @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
             @vite('resources/css/app.css')
         @else
           <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        @endif --}}
    <style>
        /* #side-bar{
    display: inline-block !important;
} */

        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }



        .clear {
            clear: both;
        }

        .saveLog {
            display: flex;
            align-items: center;
            gap: 10px;
            width: 100%;
        }


        .saveLoginCheckBox {
            display: block;
            cursor: pointer;
            width: 15px;
            height: 15px;
            border: 1px solid rgb(63, 3, 3);
            border-radius: 5px;
            position: relative;
            overflow: hidden;

        }

        .saveLoginCheckBox div {
            width: 60px;
            height: 60px;
            background-color: rgb(199 11 11);
            top: -52px;
            left: -52px;
            position: absolute;
            transform: rotateZ(45deg);
            z-index: 100;
            box-shadow: 0px 0px 0px 2px rgba(56, 1, 1, 0.3);
        }

        .saveLoginCheckBox input[type=checkbox]:checked+div {
            left: -10px;
            top: -10px;
        }

        .saveLoginCheckBox input[type=checkbox] {
            position: absolute;
            left: 50px;
            visibility: hidden;
        }

        .transition {
            transition: 300ms ease;
        }

        .eye-close {
            margin-top: -12px;
            background: #000;
            min-height: 1px;
            transform: rotate(-45deg);
        }

        .hero-bg {
            clip-path: ellipse(62% 99% at 51% 0%);
        }




        @media (max-width: 600px) {
            /* #side-bar{
    display: inline-block !important;
} */

            .eye-close {
                margin-top: -12px;
                background: #625a5a;
                min-height: 1px !important;
                transform: rotate(-45deg);
                z-index: 999;
                position: relative;
            }

            /* end side bar section  */


            /* .hero-bg */

            .hero-bg {
                clip-path: ellipse(79% 87% at 51% 0%) !important;
            }


        }
    </style>

</head>

<body x-data="{ sideNav: false }" class="relative bg-[#FFF5F5]">

    {{-- Notification Tray --}}
    @if (session()->has('success'))
        <div class="flash-message tray-success animate__animated w-[50%] px-2 py-1">
            <p class="text-white">
                Your action was Successful, Welcome
                <span> John Doe</span>
            </p>
        </div>
    @endif


    {{-- <div class="flash-message tray-fail hidden w-[50%] px-2 py-1">
        <p class="text-white">
            Your action was Successful, Welcome
            <span> John Doe</span>
        </p>
    </div> --}}




    <nav class="-mb-[125px]">
        @hasSection('header')
            @yield('header')
        @else
            <header class="sticky top-0 z-[850] w-full rounded-b-md">

                <div>
                    <div class="mx-auto flex w-[90%] items-center justify-between py-4 md:w-[80%]">
                        <div class="flex w-[50%] items-center gap-2">
                            <svg @click="sideNav = true" class="bar icons h-[35px] text-white md:hidden"
                                id="show-side-bar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>

                            <div>
                                <a href="{{ route('index') }}">
                                    <img class="w-[80px] md:w-[150px]" src="{{ asset('image/logo_alt.svg') }}"
                                        alt="900 Logo"></a>

                            </div>
                        </div>

                        <div class="flex w-[50%] justify-end gap-3">
                            <div x-data="{ langCur: false }" class="relative cursor-pointer">
                                {{-- Language & Currency --}}
                                <div>
                                    <div @click="langCur = ! langCur" class="relative flex gap-1 text-white">
                                        {{-- <img class="h-auto w-[25px] rounded-md" src="{{ asset('image/nigeria.jpg') }}"
                                            alt="lorem ipsum"> --}}

                                        <span>
                                            EN | NGN
                                        </span>
                                    </div>
                                    <div x-transition x-show="langCur" @click.outside="langCur = false" id="lang-cur"
                                        class="absolute top-[40px] z-[999] rounded-md bg-white shadow-sm">
                                        <div>

                                            <div style="display: block; color:black" class="text-black">
                                                <h2 class="mb-[5px] font-[700] text-black" style="text-align:center;">
                                                    Select Language
                                                </h2>
                                                {{-- <input type="radio" id="en" name="lang" value="30">
                                                <label for="en">English</label>
                                                <br>
                                                <input type="radio" id="fr" name="lang" value="30">
                                                <label for="fr">French</label> --}}
                                                <div class="gtranslate_wrapper" style="text-align: center">

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div x-data="{ cart: false }" class="hidden cursor-pointer md:block">
                                {{-- Cart --}}
                                <div>
                                    <div @click="cart = !cart" class="relative flex gap-1 text-white">
                                        <img class="h-auto w-[25px] rounded-md"
                                            src="{{ asset('image/cart-white.svg') }}" alt="lorem ipsum">

                                        <span>
                                            CART
                                        </span>
                                    </div>

                                    <div x-transition x-show="cart" @click.outside="cart = false"
                                        class="absolute top-[80px] z-[999] rounded-md bg-slate-50 p-2">
                                        <div>

                                            No Item In Cart

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div x-data="{ authMenu: false }" class="hidden cursor-pointer md:block">
                                <div>
                                    <div @click="authMenu = !authMenu" class="relative flex gap-1 text-white">
                                        <img class="h-auto w-[25px] rounded-md" src="{{ asset('image/dropdown.svg') }}"
                                            alt="lorem ipsum">

                                    </div>

                                    <div x-transition
                                        style="position: absolute !important; top: 70px !important; width: 10.5rem; z-index: 1000 !important;"
                                        x-show="authMenu" @click.outside="authMenu = false"
                                        class="absolute right-0 rounded-md bg-white p-1 text-black shadow-lg">

                                        <ul class="flex w-full flex-col items-start justify-start pl-2 text-black"
                                            style="">
                                            @guest
                                                <li class="w-full rounded-lg py-2 pr-[10px] hover:bg-gray-200">
                                                    <a class="flex items-center justify-start gap-[5px]"
                                                        href="{{ route('index.login') }}">

                                                        <img class="h-[20px] w-[20px]" src="{{ asset('image/login.svg') }}"
                                                            alt="Login">


                                                        <span class="block">
                                                            Login
                                                        </span>
                                                    </a>

                                                </li>

                                                <li class="w-full rounded-lg py-2 pr-[10px] hover:bg-gray-200">
                                                    <a class="flex items-center justify-start gap-[5px]"
                                                        href="{{ route('index.register') }}">

                                                        {{-- <img class="h-[20px] w-[20px] rotate-180" src="{{asset('image/login.svg')}}" alt="Login"> --}}
                                                        <img class="h-[20px] w-[20px]"
                                                            src="{{ asset('image/register.svg') }}" alt="Login">


                                                        <span class="block">
                                                            Register
                                                        </span>
                                                    </a>

                                                </li>


                                            @endguest

                                            @auth
                                                <li class="w-full rounded-lg py-2 pr-[10px] hover:bg-gray-200">
                                                    <a class="flex items-center justify-start gap-[5px]" href="">

                                                        <img class="h-[20px] w-[20px] rotate-180"
                                                            src="{{ asset('image/login.svg') }}" alt="Login">



                                                        <span class="block">
                                                            Logout
                                                        </span>
                                                    </a>

                                                </li>
                                                <li class="w-full rounded-lg py-2 pr-[10px] hover:bg-gray-200">
                                                    <a class="flex items-center justify-start gap-[5px]" href="">

                                                        <img class="h-[20px] w-[20px]"
                                                            src="{{ asset('image/reset.svg') }}" alt="Login">


                                                        <span class="block">
                                                            Reset Password
                                                        </span>
                                                    </a>

                                                </li>

                                                <li class="w-full rounded-lg py-2 pr-[10px] hover:bg-gray-200">
                                                    <a class="flex items-center justify-start gap-[5px]" href="">

                                                        <img class="h-[20px] w-[20px]"
                                                            src="{{ asset('image/cart.svg') }}" alt="Login">



                                                        <span class="block">
                                                            Cart
                                                        </span>
                                                    </a>

                                                </li>

                                                <li class="w-full rounded-lg py-2 pr-[10px] hover:bg-gray-200">
                                                    <a class="flex items-center justify-start gap-[5px]" href="">

                                                        <img class="h-[20px] w-[20px]"
                                                            src="{{ asset('image/help.svg') }}" alt="Login">



                                                        <span class="block">
                                                            Support
                                                        </span>
                                                    </a>

                                                </li>



                                            @endauth

                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>


            </header>
        @endif
    </nav>


    <section x-transition:enter="transition transform duration-500"
        x-transition:enter-start="-translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100"
        x-transition:leave="transition transform duration-500" x-transition:leave-start="translate-x-0 opacity-100"
        x-transition:leave-end="-translate-x-full opacity-0" x-show="sideNav"
        class="absolute top-0 z-[998] h-screen w-full md:hidden">
        <main
            class="fixed z-[999] h-full w-[80%] overflow-y-auto overflow-x-hidden bg-white p-4 shadow shadow-gray-400">


            <div class="mb-4 flex items-center justify-between gap-2 py-2">
                <div class="items-center gap-1">


                    <p class="auth-greet flex items-center gap-2">
                        <img src="{{ asset('image/sideBar/Vector (4).png') }}" alt="lorem ipsum">
                        @guest
                            Sign in to get a personalized experience
                        @endguest
                        @auth
                            Hello Mike!
                        @endauth
                    </p>
                </div>

                <div @click="sideNav = false">


                    <svg class="cursor-pointer text-black" width="30" height="24"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </div>

            </div>

            <div class="mt-4 flex w-full flex-col gap-2 border-t border-gray-300 py-2">
                <div class="flex items-center gap-2 rounded-md py-2 hover:bg-gray-200">
                    <img class="w-[25px]" src="{{ asset('image/flight.svg') }}" alt="Flights Icon">
                    <a href="/flight" class="">Book a flight</a>
                </div>
                <div class="flex items-center gap-2 rounded-md py-2 hover:bg-gray-200">
                    <img class="w-[25px]" src="{{ asset('image/hotel.svg') }}" alt="Flights Icon">
                    <a href="" class="">Book a Hotel</a>
                </div>
                <div class="flex items-center gap-2 rounded-md py-2 hover:bg-gray-200">
                    <img class="w-[25px]" src="{{ asset('image/ticket.svg') }}" alt="Flights Icon">
                    <a href="{{route('event.index')}}" class="">Party Tickets</a>
                </div>
                <div class="flex items-center gap-2 rounded-md py-2 hover:bg-gray-200">
                    <img class="w-[25px]" src="{{ asset('image/shortlet.svg') }}" alt="Flights Icon">
                    <a href="/shortlet" class="">Shortlet Rentals</a>
                </div>
            </div>

            <div class="mt-4 flex w-full flex-col gap-2 border-t border-gray-300 py-2">
                @guest
                    <div class="flex items-center gap-2 rounded-md py-2 hover:bg-gray-200">
                        <img class="w-[25px]" src="{{ asset('image/sideBar/Vector (4).png') }}" alt="Flights Icon">
                        <a href="{{route("index.login")}}" class="">Login</a>
                    </div>
                    <div class="flex items-center gap-2 rounded-md py-2 hover:bg-gray-200">
                        <img class="w-[25px]" src="{{ asset('image/sideBar/Vector (4).png') }}" alt="Flights Icon">
                        <a href="{{route("index.register")}}" class="">Create an Account</a>
                    </div>
                @endguest

                @auth


                    <div class="flex items-center gap-2 rounded-md py-2 hover:bg-gray-200">
                        <img class="w-[25px]" src="{{ asset('image/sideBar/Vector (3).png') }}" alt="Flights Icon">
                        <a href="" class="">Manage Cart</a>
                    </div>

                    <div class="flex items-center gap-2 rounded-md py-2 hover:bg-gray-200">
                        <img class="w-[25px]" src="{{ asset('image/sideBar/Vector (4).png') }}" alt="Flights Icon">
                        <a href="" class="">Manage Profile</a>
                    </div>

                    <div class="flex items-center gap-2 rounded-md py-2 hover:bg-gray-200">
                        <img class="w-[25px]" src="{{ asset('image/logout.svg') }}" alt="Flights Icon">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="text-lg" type="submit">Logout</button>
                        </form>
                    </div>

                @endauth
            </div>

            <div class="mt-4 flex w-full flex-col gap-2 border-t border-gray-300 py-2">
                <div class="flex items-center gap-2 rounded-md py-2 hover:bg-gray-200">
                    <img class="w-[25px]" src="{{ asset('image/sideBar/Whatsapp.png') }}" alt="Flights Icon">
                    <a href="" class="">Reach us on Whatsapp</a>
                </div>
                <div class="flex items-center gap-2 rounded-md py-2 hover:bg-gray-200">
                    <img class="w-[25px]" src="{{ asset('image/sideBar/Vector (5).png') }}" alt="Flights Icon">
                    <a href="" class="">Customer Support</a>
                </div>
                <div class="flex items-center gap-2 rounded-md py-2 hover:bg-gray-200">
                    <img class="w-[25px]" src="{{ asset('image/sideBar/Vector (6).png') }}" alt="Flights Icon">
                    <a href="" class="">Contact Us</a>
                </div>

            </div>




        </main>
    </section>

    @guest



        {{-- Sign in modal --}}
        <div x-transition:enter="transition origin-top ease-out duration-300"
            x-transition:enter-start="transform translate-y- opacity-0"
            x-transition:enter-end="transform translate-y-full opacity-100"
            x-transition:leave="transition origin-top ease-out duration-300" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" x-data="{ authModal: true }" x-show="authModal"
            class="fle fixed top-[130px] z-50 ml-[8%] hidden w-[85%] items-center justify-center gap-2 rounded-lg border border-gray-200 bg-white md:border-2 lg:ml-[25%] lg:w-[50%]">
            <div class="hidden lg:block">
                <img class="h-[400px] w-[600px] object-contain p-1" src="{{ asset('image/profilePoP2-v3.jpg') }}"
                    alt="random img" />
            </div>
            <div class="p-2">

                <svg @click="authModal = !authModal" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-[90%] size-6 text-black">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>

                <div class="mx-auto flex w-full justify-center gap-1 text-lg capitalize">

                    <p>sign up</p>
                    <p>/</p>
                    <p>register</p>
                </div>

                <p class="my-2 text-center text-sm capitalize text-gray-400">manage your bookings with ease and <br />
                    enjoy members-only benefits</p>

                <form>
                    <div class="flex flex-col">
                        <label class="capitalize" for="email">email address</label>
                        <span class="hidden text-[10px] text-red-600">Email not correct!</span>
                        <input class="my-2 border border-gray-200 px-2 py-2 md:border-2" type="email"
                            placeholder="Enter your email address" />
                        <button class="my-2 rounded-sm bg-red-600 py-2 capitalize text-white">continue</button>
                    </div>
                    <div class="hidden">
                        <div class="flex flex-col">
                            <span>
                                <label class="capitalize" for="password">Password</label></span>
                            <span class="hidden text-[10px] text-red-600">Wrong password provided</span>
                            <div class="relative">
                                <input class="my-2 w-full border border-gray-200 px-2 py-2 md:border-2" type="email"
                                    placeholder="Enter your password" />
                                <div class="password-visibiliity absolute right-[5px] top-[17px] cursor-pointer">
                                    <img class="h-[25px]" src="{{ asset('image/eye.svg') }}" alt="lorem ipsum">
                                    <div class="eye-close"></div>

                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="saveLog">
                                <label class="saveLoginCheckBox">
                                    <input id="ch1" type="checkbox" name="remember">
                                    <div class="transition"></div>
                                </label>
                                <p>
                                    Remember Me
                                </p>
                            </div>
                            <button type="submit"
                                class="my-2 w-full rounded-sm bg-red-600 py-2 capitalize text-white">Login</button>
                        </div>
                    </div>
                </form>

                <p class="my-2 text-center uppercase">or</p>

                <button
                    class="duration-600 mx-auto flex max-w-xs items-center justify-center gap-1 rounded-lg border border-gray-300 bg-white px-5 py-2 text-sm font-bold uppercase text-gray-800 transition-transform hover:scale-105">
                    <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" viewBox="0 0 256 262"
                        class="h-6">
                        <path fill="#4285F4"
                            d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027">
                        </path>
                        <path fill="#34A853"
                            d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1">
                        </path>
                        <path fill="#FBBC05"
                            d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782">
                        </path>
                        <path fill="#EB4335"
                            d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251">
                        </path>
                    </svg>
                    Continue with Google
                </button>
                <p class="my-2 text-center text-sm"> By signing in or registering i confirm that i have read and agreed to
                    900Tickets <a class="text-red-500" href="#"> terms and conditions </a> and <a
                        class="text-red-500" href=""> privacy policy </a>
            </div>

        </div>
        <!-- sign up model section end -->
    @endguest


    <section>
        @hasSection('hero')
            @yield('hero')
        @else
            <div class="relative w-full">
                {{-- hero content --}}

                <div>


                    <div class="relative">
                        {{-- hero bg --}}
                        <video autoplay muted loop
                            class="hero-bg absolute left-0 top-0 h-[62.5vh] w-full object-cover md:h-[100vh]">
                            <source src="{{ asset('image/video.webm') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>

                        {{-- hero content --}}
                        <div
                            class="relative top-[22.5vh] z-10 flex w-full flex-col items-center justify-start gap-10 md:top-[35vh]">
                            <div class="group relative flex w-[70%] items-center md:hidden">
                                <svg class="absolute left-4 h-4 w-4 fill-black" aria-hidden="true"
                                    viewBox="0 0 24 24">
                                    <g>
                                        <path
                                            d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                                        </path>
                                    </g>
                                </svg>
                                <input placeholder="Search" type="search"
                                    class="line-height[28px] h-10 w-full rounded-lg border-2 border-transparent bg-[#ffffff] pl-10 text-[#04030f] shadow shadow-gray-400 transition duration-300 ease-in-out focus:border-red-200 focus:outline-none" />
                            </div>

                            <div class="mx-auto flex w-[70%] flex-wrap justify-center gap-[1.5rem] md:gap-[2rem]">
                                <div
                                    class="flex items-center justify-center rounded-md border border-gray-200 bg-white px-7 py-4 shadow shadow-gray-300 ease-in-out hover:scale-[1.1] hover:bg-slate-100 hover:shadow-md md:px-[2rem]">
                                    <a class="flex flex-col items-center justify-center" href="/flight">
                                        <img class="w-[35px]" src="{{ asset('image/icons/flight-alt.svg') }}"
                                            alt="lorem ipsum">
                                        <span class="inline-block text-center text-sm font-[700]">
                                            Flight
                                        </span>
                                    </a>
                                </div>
                                <div
                                    class="flex items-center justify-center rounded-md border border-gray-200 bg-white px-7 py-5 shadow shadow-gray-300 ease-in-out hover:scale-[1.1] hover:bg-slate-100 hover:shadow-md md:px-[2rem]">
                                    <a class="flex flex-col items-center justify-center" href="/hotel">
                                        <img class="w-[35px]" src="{{ asset('image/icons/hotel-alt.svg') }}"
                                            alt="lorem ipsum">
                                        <span class="inline-block text-center text-sm font-[700]">
                                            Hotel
                                        </span>
                                    </a>
                                </div>
                                <div
                                    class="flex items-center justify-center rounded-md border border-gray-200 bg-white px-6 py-4 shadow shadow-gray-300 ease-in-out hover:scale-[1.1] hover:bg-slate-100 hover:shadow-md md:px-[2rem]">
                                    <a class="flex flex-col items-center justify-center" href="{{route('event.index')}}">
                                        <img class="w-[35px]" src="{{ asset('image/icons/ticket-alt.svg') }}"
                                            alt="lorem ipsum">
                                        <span class="inline-block text-center text-sm font-[700]">
                                            Party
                                        </span>
                                        <span class="inline-block text-center text-sm font-[700]">
                                            Ticket
                                        </span>
                                    </a>
                                </div>
                                <div
                                    class="flex items-center justify-center rounded-md border border-gray-200 bg-white px-5 py-4 shadow shadow-gray-300 ease-in-out hover:scale-[1.1] hover:bg-slate-100 hover:shadow-md md:px-[2rem]">
                                    <a class="flex flex-col items-center justify-center" href="javascript:void(0)">
                                        <img class="w-[35px]" src="{{ asset('image/icons/shortlet-alt.svg') }}"
                                            alt="lorem ipsum">
                                        <span class="inline-block text-center text-sm font-[700]">
                                            Shortlet
                                        </span>
                                    </a>
                                </div>

                            </div>

                            <div class="mx-auto hidden w-[80%] p-4 md:block">
                                <div
                                    class="flex w-full flex-col rounded-md border border-gray-200 bg-gray-100 p-6 shadow shadow-gray-300">

                                    <form id="flight-form" onsubmit="return validateForm()">
                                        <div class="mb-5 grid grid-cols-1 gap-4 md:grid-cols-2">
                                            <div class="flex flex-col">
                                                <label for="origin" class="mb-1">From</label>
                                                <input type="text" placeholder="City or Airport"
                                                    class="rounded border border-gray-300 p-2" id="origin"
                                                    name="origin" required>
                                            </div>
                                            <div class="flex flex-col">
                                                <label for="depart" class="mb-1">To</label>
                                                <input type="text" placeholder="City or Airport"
                                                    class="rounded border border-gray-300 p-2" id="depart"
                                                    name="depart" required>
                                            </div>
                                        </div>
                                        <div class="mb-5 grid grid-cols-1 gap-4 md:grid-cols-2">
                                            <div class="flex flex-col">
                                                <label for="departure-date" class="mb-1">Depart</label>
                                                <input type="date" class="rounded border border-gray-300 p-2"
                                                    id="departure-date" name="departure-date"
                                                    onkeydown="return false" required>
                                            </div>
                                            <div class="flex flex-col">
                                                <label for="return-date" class="mb-1">Return</label>
                                                <input type="date" value=""
                                                    onchange="this.setAttribute('value', this.value)"
                                                    class="rounded border border-gray-300 p-2" name="return-date">
                                            </div>
                                        </div>
                                        <div class="mb-5 grid grid-cols-1 gap-4 md:grid-cols-3">
                                            <div class="flex flex-col">
                                                <label for="adults" class="mb-1">Adults <span
                                                        class="text-xs text-gray-500">12+</span></label>
                                                <select class="rounded border border-gray-300 p-2" id="adults"
                                                    onchange="dynamicDropDown(this.value);">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                </select>
                                            </div>
                                            <div class="flex flex-col">
                                                <label for="children" class="mb-1">Children <span
                                                        class="text-xs text-gray-500">2-11</span></label>
                                                <select class="rounded border border-gray-300 p-2" id="children">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                </select>
                                            </div>
                                            <div class="flex flex-col">
                                                <label for="infants" class="mb-1">Infants <span
                                                        class="text-xs text-gray-500">less than 2</span></label>
                                                <select class="rounded border border-gray-300 p-2" id="infants">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-5 grid grid-cols-1 gap-4 md:grid-cols-2">
                                            <div class="flex flex-col">
                                                <label for="cabin" class="mb-1">Cabin</label>
                                                <select class="rounded border border-gray-300 p-2" id="cabin">
                                                    <option value="ECONOMY">Economy</option>
                                                    <option value="PREMIUM_ECONOMY">Premium Economy</option>
                                                    <option value="BUSINESS">Business</option>
                                                    <option value="FIRST">First</option>
                                                </select>
                                            </div>
                                            <div class="flex flex-col pt-4">
                                                <div class="flex items-center">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="directFlights">
                                                    <label class="ml-2" for="directFlights">Direct flights</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-left">
                                            <button type="submit" class="rounded bg-blue-600 p-2 text-white">Search
                                                flights</button>
                                        </div>
                                    </form>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>


            </div>
        @endif
    </section>

    <main class="flex flex-col gap-2">
        @yield('content')
    </main>

    <footer class="bg-black">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0 md:w-[40%]">
                    <a href="{{route('index')}}" class="flex items-center">
                        <img src="{{ asset('image/logo_alt.svg') }}" class="me-3 h-10" alt="900 Ticket" />
                        <span class="self-center whitespace-nowrap text-2xl font-[800] text-white">900Ticket</span>


                    </a>
                    <p class="mt-4 text-white md:text-[17px]">Enjoy simple, hassle-free Bookings with 900Ticket, Let us
                        help you easily book and reserve4 the perfect experience</p>

                    <div class="w-full">
                        <h2 class="my-4 text-sm font-semibold uppercase text-white">Connect with us </h2>
                        <ul class="flex list-none items-center justify-start gap-2">
                            <li class="icon-content relative">
                                <a href="https://linkedin.com/" aria-label="LinkedIn" data-social="linkedin"
                                    class="relative flex h-10 w-10 items-center justify-center rounded-full bg-white text-gray-600 transition-all duration-300 ease-in-out hover:text-white hover:shadow-lg">
                                    <div
                                        class="filled absolute inset-0 h-0 bg-blue-600 transition-all duration-300 ease-in-out">
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-linkedin relative z-10" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"
                                            fill="currentColor"></path>
                                    </svg>
                                </a>

                            </li>
                            <li class="icon-content relative">
                                <a href="https://www.github.com/" aria-label="GitHub" data-social="github"
                                    class="relative flex h-10 w-10 items-center justify-center rounded-full bg-white text-gray-600 transition-all duration-300 ease-in-out hover:text-white hover:shadow-lg">
                                    <div
                                        class="filled absolute inset-0 h-0 bg-gray-800 transition-all duration-300 ease-in-out">
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-github relative z-10" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"
                                            fill="currentColor"></path>
                                    </svg>
                                </a>

                            </li>
                            <li class="icon-content relative">
                                <a href="https://www.instagram.com/" aria-label="Instagram" data-social="instagram"
                                    class="relative flex h-10 w-10 items-center justify-center rounded-full bg-white text-gray-600 transition-all duration-300 ease-in-out hover:text-white hover:shadow-lg">
                                    <div
                                        class="filled absolute inset-0 h-0 bg-gradient-to-r from-blue-500 to-pink-500 transition-all duration-300 ease-in-out">
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-instagram relative z-10"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
                                            fill="currentColor"></path>
                                    </svg>
                                </a>

                            </li>
                            <li class="icon-content relative">
                                <a href="https://youtube.com/" aria-label="Youtube" data-social="youtube"
                                    class="relative flex h-10 w-10 items-center justify-center rounded-full bg-white text-gray-600 transition-all duration-300 ease-in-out hover:text-white hover:shadow-lg">
                                    <div
                                        class="filled absolute inset-0 h-0 bg-red-600 transition-all duration-300 ease-in-out">
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-youtube relative z-10" viewBox="0 0 16 16">
                                        <path
                                            d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"
                                            fill="currentColor"></path>
                                    </svg>
                                </a>

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:grid-cols-3 sm:gap-6 md:w-[50%]">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold uppercase text-white">Company</h2>
                        <ul class="flex flex-col gap-y-2 font-medium text-white">
                            <li class="">
                                <a href="" class="hover:underline">About 900 Ticket</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline">Contact Us</a>
                            </li>

                            <li>
                                <a href="" class="hover:underline">900 Ticket Affiliate</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline">Refer a Customer</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline">Blog</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold uppercase text-white">Usefull Links</h2>
                        <ul class="flex flex-col gap-y-2 font-medium text-white">
                            <li>
                                <a href="" class="hover:underline">Privacy and policy</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline">Terms and Conditions</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline">Flights Schedules</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline">Advertise with us</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline">Hotlines</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <div class="w-full">
                            <h2 class="mb-6 text-sm font-semibold uppercase text-white">Legal</h2>
                            <ul class="font-medium text-white">
                                <li class="mb-4">
                                    <a href="#" class="hover:underline">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                                </li>
                            </ul>
                        </div>

                        <div class="w-full">

                        </div>

                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">


                <div class="text-gray-500">

                    All Rights Reserved.
                </div>

                <span class="text-sm text-gray-500 sm:text-center">© {{ date('Y') }} <a href=""
                        class="hover:underline">900Ticket™</a>.
                </span>

            </div>
        </div>
    </footer>

    @yield('script')




    <!-- swiper cdn -->
    {{-- route{{asset/}} --}}
    {{--
    <script>
        window.gtranslateSettings = {
            "default_language": "en",
            "detect_browser_language": true,
            "languages": ["en", "fr", "it", "es", "yo", "ig", "ha", "zh-CN", "de"],
            "globe_color": "#fff",
            "wrapper_selector": ".gtranslate_wrapper",
            "alt_flags": {
                "en": "usa"
            }
        }
    </script> --}}

    {{-- <script src="https://cdn.gtranslate.net/widgets/latest/globe.js" defer></script> --}}

    <script>
        window.gtranslateSettings = {
            "default_language": "en",
            "native_language_names": true,
            "detect_browser_language": true,
            "languages": ["en", "fr"],
            "wrapper_selector": ".gtranslate_wrapper"
        }
    </script>

    <script src="https://cdn.gtranslate.net/widgets/latest/ln.js" defer></script>


    <script>
        // Function to show the flash message
        function showFlashMessage() {
            const flashMessage = document.querySelector('.flash-message');
            flashMessage.style.display = 'block'; // Show the message
            flashMessage.classList.add('animate__fadeInRight'); // Add animation class

            // Optionally, hide the message after a few seconds
            setTimeout(() => {
                // flashMessage.classList.remove('animate__backInRight'); // Add animation
                flashMessage.classList.add('animate__fadeOutRight'); // Add animation
                flashMessage.style.display = 'none'; // Hide the message after 3 seconds
            }, 5000);
        }

        // Call the function to show the message (you can replace this with your own trigger)
        window.onload = showFlashMessage; // Trigger on page load for demonstration
    </script>

    <script src="{{ asset('js/widget.js') }}"></script>
    <script src="{{ asset('js/passwordValidator.js') }}"></script>
    <script src="{{ asset('js/toogles.js') }}"></script>
    <script src="{{ asset('js/routes.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/swiper.js') }}"></script>
</body>

</html>
