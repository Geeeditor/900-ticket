@extends('layouts.app')
@section('title', 'Home')

@section('hero')
    <div class="relative w-full">
        @guest



            {{-- Sign in modal --}}
            <section x-transition:enter="transition origin-top ease-out duration-300"
                x-transition:enter-start="transform translate-y- opacity-0"
                x-transition:enter-end="transform translate-y-full opacity-100"
                x-transition:leave="transition origin-top ease-out duration-300" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0" x-data="{ authModal: true }" x-show="authModal"
                style="background-color: rgba(16, 1, 1, .2)"
                class="flex fixed items-center justify-center z-[997]  w-full h-[106%] ">


                <div
                    class="flex bg-white items-center justify-center gap-2   lg:w-[70%]   w-[85%] rounded-lg border border-gray-200  md:border-2">
                    <div class="hidden lg:block">
                        <img class="h-fit w-[600px] object-cover p-1" src="{{ asset('image/profilePoP2-v3.jpg') }}"
                            alt="random img" />
                    </div>

                    <div class="p-2">
                        <div id="loginform">
                            <svg @click="authModal = !authModal" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-[90%] size-6 text-black">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>

                            <div class="mx-auto flex w-full justify-center md:justify-start gap-1 text-lg uppercase font-bold">
                                <p>Sign Up</p>
                                <p>/</p>
                                <p>Register</p>
                            </div>

                            <p class="my-2 text-center md:text-left text-sm capitalize text-gray-400">
                                Manage your bookings with ease and <br /> enjoy members-only benefits
                            </p>

                            <form action="{{ route('index.login.store') }}" method="post">
                                @csrf
                                <div id="provideAuthEmail" class="flex flex-col">
                                    {{--     <span
                                    class="text-[12px] font-[200] text-red-700 text-center md:text-start  flex flex-col gap-1 ">

                                    <span class="block">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <span class="block">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </span> --}}


                                    </span>

                                    <label class="block capitalize font-bold text-center md:text-left text-black text-base"
                                        for="password">Provide Email Address </label>


                                    <span id="email-error"
                                        class="hidden text-[12px] font-[200] text-red-700 text-center md:text-start">
                                        Email Provided incorrect!!
                                    </span>
                                    <input id="email" name="email"
                                        class="input my-2 border border-gray-200 px-2 py-2 md:border-2 w-full" type="email"
                                        placeholder="Enter your email address" />
                                    <button type="button" id="continueToPwd"
                                        class="my-2 rounded-sm bg-red-600 hover:bg-red-900 py-2 capitalize text-white w-full">Continue</button>
                                </div>
                                <div id="provideAuthPwd" class="hidden">
                                    <div class="flex flex-col">
                                        <span class="block w-full">
                                            <label
                                                class="capitalize font-bold text-center md:text-left input-label block w-full"
                                                for="password">Password</label>
                                        </span>
                                        <div class="relative ">
                                            <input id="password" name="password"
                                                class="input my-2 w-full border border-gray-200 px-2 py-2 md:border-2"
                                                type="password" placeholder="Enter your password" />
                                            <div id=""
                                                class="password-visibility absolute right-[5px] top-[17px] cursor-pointer togglePassword">
                                                <img class="h-[25px]" src="{{ asset('image/eye.svg') }}"
                                                    alt="Toggle visibility">
                                                <div id="" class="stroke"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="saveLog">
                                            <label class="saveLoginCheckBox">
                                                <input id="ch1" type="checkbox" name="remember">
                                                <div class="transition"></div>
                                            </label>
                                            <p>Remember Me</p>
                                        </div>
                                        <button type="submit"
                                            class="my-2 rounded-sm bg-red-600 hover:bg-red-900 py-2 capitalize text-white w-full">Login</button>
                                    </div>
                                </div>
                            </form>

                            <p class="my-2 text-center md:text-left uppercase">or</p>
                            <button
                                class="duration-600 mx-auto md:mx-0 flex max-w-xs items-center justify-center md:justify-start gap-1 rounded-lg border border-gray-300 bg-white px-5 py-2 text-sm font-bold uppercase text-gray-800 transition-transform hover:scale-105">
                                Continue with Google
                            </button>

                            <p class="my-2 text-center text-sm md:text-left"> By signing in or registering I confirm that I
                                have read and agreed to
                                900Tickets <a class="text-red-500" href="#">terms and conditions</a> and <a
                                    class="text-red-500" href="#">privacy policy</a>
                            </p>
                            <div
                                class="text-center md:text-left text-sm my-2 block text-red-500 capitalize underline hover:no-underline login cursor-pointer">
                                Don't have an account? Create one now!!!
                            </div>
                        </div>

                        <div id="registerform">
                            <svg @click="authModal = !authModal" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-[90%] size-6 text-black">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>

                            <div class="mx-auto flex w-full justify-center md:justify-start gap-1 text-lg uppercase font-bold">
                                <p>Create an account</p>
                            </div>

                            <p class="my-2 text-center md:text-left text-sm capitalize text-gray-400">Manage your bookings with
                                ease and <br />
                                enjoy members-only benefits</p>

                            <form action="{{ route('register.store') }}" method="post">
                                @csrf

                                <div id="sectionOne" class="flex flex-col">
                                    <label class="capitalize font-bold text-center md:text-left">First Name</label>
                                    <input value="{{ old('firstname') }}" name="firstname"
                                        class="my-2 border w-full border-gray-200 px-2 py-2 md:border-2 input" type="text"
                                        placeholder="Enter your First Name" />
                                    <label class="capitalize font-bold text-center md:text-left">Last Name</label>
                                    <input value="{{ old('lastname') }}" name="lastname"
                                        class="my-2 border w-full border-gray-200 px-2 py-2 md:border-2 input" type="text"
                                        placeholder="Enter your Last Name" />
                                    <button type="button"
                                        class="continueButton my-2 rounded-sm bg-red-600 hover:bg-red-900 py-2 capitalize text-white w-full">Continue</button>
                                </div>

                                <div id="sectionTwo" class="hidden  flex-col">
                                    <div class="flex flex-col">
                                        <label class="capitalize font-bold text-center md:text-left ">Email Address</label>
                                        <input value="{{ old('email') }}" name="email"
                                            class="my-2 border w-full border-gray-200 px-2 py-2 md:border-2 input"
                                            type="email" placeholder="Enter your Email" />
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="capitalize font-bold text-center md:text-left">Contact</label>
                                        <input name="phone"
                                            class="my-2 border w-full border-gray-200 px-2 py-2 md:border-2 input"
                                            type="text" value="{{ old('phone') }}"
                                            placeholder="Enter your Phone Number" />
                                    </div>
                                    <button type="button"
                                        class="continueButton my-2 rounded-sm bg-red-600 hover:bg-red-900 py-2 capitalize text-white w-full ">Continue</button>
                                    <div class="arrowback cursor-pointer text-back input-label">← Back</div>
                                </div>

                                <div id="sectionThree" class="hidden  flex-col">
                                    <label class="capitalize font-bold text-center md:text-left input-label">House
                                        Address</label>
                                    <input name="address"
                                        class="my-2 border w-full border-gray-200 px-2 py-2 md:border-2 input"
                                        value="{{ old('address') }}" type="text"
                                        placeholder="Provide your Residential Address" /><label
                                        class="capitalize font-bold text-center input-label md:text-left ">Password</label>
                                    <div class="relative">

                                        <input id="password" name="password"
                                            class="my-2 w-full border border-gray-200 px-2 py-2 md:border-2 input"
                                            type="password" placeholder="Enter your password" />
                                        <div id=""
                                            class="password-visibility absolute right-[5px] top-[17px] cursor-pointer togglePassword">
                                            <img class="h-[25px]" src="{{ asset('image/eye.svg') }}" alt="Toggle visibility">
                                            <div id="" class="stroke"></div>
                                        </div>
                                    </div>
                                    <button type="button"
                                        class="continueButton my-2 rounded-sm bg-red-600 hover:bg-red-900 py-2 capitalize text-white w-full">Continue</button>
                                    <div class="arrowback cursor-pointer text-black input-label">← Back</div>
                                </div>

                                <div id="sectionFour" class="hidden  flex-col">
                                    <label class="capitalize font-bold text-center md:text-left input-label">Confirm
                                        Password</label>
                                    <div class="relative">

                                        <input id="password" name="password"
                                            class="my-2 w-full border border-gray-200 px-2 py-2 md:border-2 input"
                                            type="password" placeholder="Confirm your password" />
                                        <div id=""
                                            class="password-visibility absolute right-[5px] top-[17px] cursor-pointer togglePassword">
                                            <img class="h-[25px]" src="{{ asset('image/eye.svg') }}"
                                                alt="Toggle visibility">
                                            <div id="" class="stroke"></div>
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="my-2 rounded-sm bg-red-600 hover:bg-red-900 py-2 capitalize text-white w-full">Create
                                        Account</button>
                                    <div class="arrowback cursor-pointer text-black input-label">← Back</div>
                                </div>
                            </form>

                            <p class="my-2 text-center md:text-left uppercase">or</p>
                            <button
                                class="duration-600 mx-auto md:mx-0 flex max-w-xs items-center justify-center md:justify-start gap-1 rounded-lg border border-gray-300 bg-white px-5 py-2 text-sm font-bold uppercase text-gray-800 transition-transform hover:scale-105">
                                Continue with Google
                            </button>

                            <p class="my-2 text-center text-sm md:text-left"> By signing in or registering I confirm that I
                                have read and agreed to
                                900Tickets <a class="text-red-500" href="#">terms and conditions</a> and <a
                                    class="text-red-500" href="#">privacy policy</a>
                            </p>
                            <div
                                class="text-center md:text-left text-sm my-2 block text-red-500 capitalize underline hover:no-underline register cursor-pointer">
                                Already have an account? Sign in
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- sign up model section end -->
        @endguest
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
                        <svg class="absolute left-4 h-4 w-4 fill-black" aria-hidden="true" viewBox="0 0 24 24">
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
                                <img class="w-[35px]" src="{{ asset('image/icons/flight-alt.svg') }}" alt="lorem ipsum">
                                <span class="inline-block text-center text-sm font-[700]">
                                    Flight
                                </span>
                            </a>
                        </div>
                        <div
                            class="flex items-center justify-center rounded-md border border-gray-200 bg-white px-7 py-5 shadow shadow-gray-300 ease-in-out hover:scale-[1.1] hover:bg-slate-100 hover:shadow-md md:px-[2rem]">
                            <a class="flex flex-col items-center justify-center" href="/hotel">
                                <img class="w-[35px]" src="{{ asset('image/icons/hotel-alt.svg') }}" alt="lorem ipsum">
                                <span class="inline-block text-center text-sm font-[700]">
                                    Hotel
                                </span>
                            </a>
                        </div>
                        <div
                            class="flex items-center justify-center rounded-md border border-gray-200 bg-white px-6 py-4 shadow shadow-gray-300 ease-in-out hover:scale-[1.1] hover:bg-slate-100 hover:shadow-md md:px-[2rem]">
                            <a class="flex flex-col items-center justify-center" href="{{ route('event.index') }}">
                                <img class="w-[35px]" src="{{ asset('image/icons/ticket-alt.svg') }}" alt="lorem ipsum">
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
                                            class="rounded border border-gray-300 p-2" id="origin" name="origin"
                                            required>
                                    </div>
                                    <div class="flex flex-col">
                                        <label for="depart" class="mb-1">To</label>
                                        <input type="text" placeholder="City or Airport"
                                            class="rounded border border-gray-300 p-2" id="depart" name="depart"
                                            required>
                                    </div>
                                </div>
                                <div class="mb-5 grid grid-cols-1 gap-4 md:grid-cols-2">
                                    <div class="flex flex-col">
                                        <label for="departure-date" class="mb-1">Depart</label>
                                        <input type="date" class="rounded border border-gray-300 p-2"
                                            id="departure-date" name="departure-date" onkeydown="return false" required>
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
                                            <input class="form-check-input" type="checkbox" id="directFlights">
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

@endsection

@section('content')

    <main class="mt-[235px]">


        <section class="mb-6 mt-2">
            <style>
                .banner {
                    padding: 1rem;
                    display: grid;
                    grid-template-columns: repeat(10, 50vw);
                    grid-template-rows: 1fr;
                    grid-column-gap: 1rem;
                    grid-row-gap: 1rem;
                    overflow: scroll;
                    height: 50vh;
                    scroll-snap-type: both mandatory;
                    scroll-padding: 1rem;
                }

                @media (max-width: 650px) {


                    .banner {
                        padding: 1rem;
                        display: grid;
                        grid-template-columns: repeat(10, 80vw);
                        grid-template-rows: 1fr;
                        grid-column-gap: 1rem;
                        grid-row-gap: 1rem;
                        overflow: scroll;
                        height: 25vh;
                        scroll-snap-type: both mandatory;
                        scroll-padding: 1rem;
                    }

                }

                .active {
                    scroll-snap-type: unset;
                }

                .banner-item {
                    scroll-snap-align: center;
                    display: inline-block;
                    border-radius: 3px;
                    font-size: 0;
                }
            </style>

            <ul class="banner">

                <li class="banner-item" style="background: #f6bd60;">
                    <img class="h-full w-auto object-contain"
                        src="{{ asset('image/banner/AirportTransfer-v3-Recovered.jpg') }}" alt="">
                </li>
                <li class="banner-item" style="background: #f7ede2;">
                    <img class="h-full w-auto object-contain" src="{{ asset('image/banner/banner1.webp') }}"
                        alt="">
                </li>
                <li class="banner-item" style="background: #f5cac3;">
                    <img class="h-full w-auto object-contain" src="{{ asset('image/banner/banner3.webp') }}"
                        alt="">
                </li>
                <li class="banner-item" style="background: #84a59d;">
                    <img class="h-full w-auto object-contain" src="{{ asset('image/banner/banner4.webp') }}"
                        alt="">
                </li>
                <li class="banner-item" style="background: #f28482;">
                    <img class="h-full w-auto object-contain" src="{{ asset('image/banner/banner5.webp') }}"
                        alt="">
                </li>
                <li class="banner-item" style="background: #f6bd60;">
                    <img class="h-full w-auto object-contain" src="{{ asset('image/banner/banner6.webp') }}"
                        alt="">
                </li>
                <li class="banner-item" style="background: #f7ede2;">
                    <img class="h-full w-auto object-contain" src="{{ asset('image/banner/banner7.webp') }}"
                        alt="">
                </li>
                <li class="banner-item" style="background: #f5cac3;">
                    <img class="h-full w-auto object-contain" src="{{ asset('image/banner/banner8.webp') }}"
                        alt="">
                </li>
                <li class="banner-item" style="background: #84a59d;">
                    <img class="h-full w-auto object-contain" src="{{ asset('image/banner/banner9.webp') }}"
                        alt="">
                </li>

            </ul>

            <script>
                const slider = document.querySelector('.banner');
                let isDown = false;
                let startX;
                let scrollLeft;

                slider.addEventListener('mousedown', e => {
                    isDown = true;
                    slider.classList.add('active');
                    startX = e.pageX - slider.offsetLeft;
                    scrollLeft = slider.scrollLeft;
                });
                slider.addEventListener('mouseleave', _ => {
                    isDown = false;
                    slider.classList.remove('active');
                });
                slider.addEventListener('mouseup', _ => {
                    isDown = false;
                    slider.classList.remove('active');
                });
                slider.addEventListener('mousemove', e => {
                    if (!isDown) return;
                    e.preventDefault();
                    const x = e.pageX - slider.offsetLeft;
                    const SCROLL_SPEED = 3;
                    const walk = (x - startX) * SCROLL_SPEED;
                    slider.scrollLeft = scrollLeft - walk;
                });
            </script>

        </section>

        <section class="mx-auto my-3 block w-[90%] md:hidden md:w-[80%]">
            <div class="flex flex-col gap-1 rounded-md border border-gray-200 bg-white px-5 py-4 shadow shadow-gray-300">
                <div class="flex items-center gap-2 bg-transparent">
                    <img src="{{ asset('image/Rectangle-11.jpg') }}" alt="lorem ipsum">
                    <div>
                        <h3 class="text-[15.5px] font-[700]">
                            Exclusive Holiday
                        </h3>
                        <p class="text-[13.5px] font-[500]">
                            Experience an exciting holiday at affordable prices
                        </p>
                    </div>
                </div>
                <div class="flex items-center gap-2 bg-transparent">
                    <img src="{{ asset('image/Rectangle-12.jpg') }}" alt="lorem ipsum">
                    <div>
                        <h3 class="text-[15.5px] font-[700]">
                            Manage Booking
                        </h3>
                        <p class="text-[13.5px] font-[500]">
                            Experience an exciting holiday at affordable prices
                        </p>
                    </div>
                </div>
                <div class="flex items-center gap-2 bg-transparent">
                    <img src="{{ asset('image/Rectangle-13.jpg') }}" alt="lorem ipsum">
                    <div>
                        <h3 class="text-[15.5px] font-[700]">
                            Travel Blog
                        </h3>
                        <p class="text-[13.5px] font-[500]">
                            Experience an exciting holiday at affordable prices
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <section class="mx-auto my-3 hidden w-[85%] md:block md:w-[80%]">
            <div class="flex justify-between">
                <div class="flex w-1/4 flex-col items-center justify-center gap-2">
                    <img class="max-h-[] w-auto" src="{{ asset('image/Book-1-1-1.png') }}" alt="">
                    <div class="text-center">
                        <h4 class="font-[800]">Look No Further</h4>
                        <p class="mx-auto w-[75%] font-[500] capitalize">Search all travel deals, in one go</p>
                    </div>
                </div>
                <div class="flex w-1/4 flex-col items-center justify-center gap-2">
                    <img class="max-h-[] w-auto" src="{{ asset('image/Book-1-2.png') }}" alt="">
                    <div class="text-center">
                        <h4 class="font-[800]">Reliable Shopping</h4>
                        <p class="mx-auto w-[75%] font-[500] capitalize">No hidden charges or taxes</p>
                    </div>
                </div>
                <div class="flex w-1/4 flex-col items-center justify-center gap-2">
                    <img class="max-h-[] w-auto" src="{{ asset('image/Book-1-3.png') }}" alt="">
                    <div class="text-center">
                        <h4 class="font-[800]">Instant Booking</h4>
                        <p class="mx-auto w-[75%] font-[500] capitalize">Booking with just few clicks</p>
                    </div>
                </div>
                <div class="flex w-1/4 flex-col items-center justify-center gap-2">
                    <img class="max-h-[] w-auto" src="{{ asset('image/Book-1-4.png') }}" alt="">
                    <div class="text-center">
                        <h4 class="font-[800]">Easy Payout</h4>
                        <p class="mx-auto w-[75%] font-[500] capitalize">Search all travel deals, in one go</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mx-auto my-3 w-[90%] md:w-[80%]">
            <div>
                <h2 class="mb-3 text-[18px] font-bold uppercase md:text-[22.5px]">Popular Places</h2>

                {{-- Popular Places Flex --}}
                <div class="grid grid-cols-2 gap-2 md:grid-cols-4 md:gap-3">
                    <div class="rounded-md border border-gray-200 bg-white py-2 shadow shadow-gray-300">
                        <div class="w-full">
                            <img class="h-full rounded-b-md object-contain" src="{{ asset('image/imgdefault.png') }}"
                                alt="lorem ipsum">
                        </div>
                        <div class="px-2 py-2">
                            <div class="flex w-full items-center gap-1">

                                <div class="w-3/4">
                                    <h4 class="text-sm">Best Deal</h4>
                                    <p class="flex gap-1">
                                        <span class="block h-auto w-1/3 truncate">Lagossssssssssssssssss</span>
                                        <img class="max-w-[10px]" src="{{ asset('image/icons/arrow-right.svg') }}"
                                            alt="lorem ipsum">
                                        <span class="block h-auto w-1/3 truncate">London</span>
                                    </p>
                                </div>

                                <div class="flex h-[70%] w-1/4 items-center justify-center rounded-full bg-red-700 p-2">
                                    <a href="javascript:void(0)">
                                        <img class="w-[20px]" src="{{ asset('image/icons/clipboard.svg') }}"
                                            alt="lorem ipsum">
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="px-2 py-1">
                            <div class="flex flex-wrap items-center justify-between gap-2 md:flex-nowrap">
                                <div class="w-full md:w-2/3">
                                    <h4 class="text-sm">
                                        Pay Now
                                    </h4>
                                    <p class="text-base">
                                        <span class="currency">
                                            ₦
                                        </span>
                                        <span>0.00</span>
                                    </p>
                                </div>

                                <div class="w-full items-center justify-end md:flex md:w-1/3">
                                    <a href="javascript:void(0)"
                                        class="rounded-md bg-red-700 px-3 py-1 text-white md:text-center">
                                        Book Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-md border border-gray-200 bg-white py-2 shadow shadow-gray-300">
                        <div class="w-full">
                            <img class="h-full rounded-b-md object-contain" src="{{ asset('image/imgdefault.png') }}"
                                alt="lorem ipsum">
                        </div>
                        <div class="px-2 py-2">
                            <div class="flex w-full items-center gap-1">

                                <div class="w-3/4">
                                    <h4 class="text-sm">Best Deal</h4>
                                    <p class="flex gap-1">
                                        <span class="block h-auto w-1/3 truncate">Lagossssssssssssssssss</span>
                                        <img class="max-w-[10px]" src="{{ asset('image/icons/arrow-right.svg') }}"
                                            alt="lorem ipsum">
                                        <span class="block h-auto w-1/3 truncate">London</span>
                                    </p>
                                </div>

                                <div class="flex h-[70%] w-1/4 items-center justify-center rounded-full bg-red-700 p-2">
                                    <a href="javascript:void(0)">
                                        <img class="w-[20px]" src="{{ asset('image/icons/clipboard.svg') }}"
                                            alt="lorem ipsum">
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="px-2 py-1">
                            <div class="flex flex-wrap items-center justify-between gap-2 md:flex-nowrap">
                                <div class="w-full md:w-2/3">
                                    <h4 class="text-sm">
                                        Pay Now
                                    </h4>
                                    <p class="text-base">
                                        <span class="currency">
                                            ₦
                                        </span>
                                        <span>0.00</span>
                                    </p>
                                </div>

                                <div class="w-full items-center justify-end md:flex md:w-1/3">
                                    <a href="javascript:void(0)"
                                        class="rounded-md bg-red-700 px-3 py-1 text-white md:text-center">
                                        Book Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-md border border-gray-200 bg-white py-2 shadow shadow-gray-300">
                        <div class="w-full">
                            <img class="h-full rounded-b-md object-contain" src="{{ asset('image/imgdefault.png') }}"
                                alt="lorem ipsum">
                        </div>
                        <div class="px-2 py-2">
                            <div class="flex w-full items-center gap-1">

                                <div class="w-3/4">
                                    <h4 class="text-sm">Best Deal</h4>
                                    <p class="flex gap-1">
                                        <span class="block h-auto w-1/3 truncate">Lagossssssssssssssssss</span>
                                        <img class="max-w-[10px]" src="{{ asset('image/icons/arrow-right.svg') }}"
                                            alt="lorem ipsum">
                                        <span class="block h-auto w-1/3 truncate">London</span>
                                    </p>
                                </div>

                                <div class="flex h-[70%] w-1/4 items-center justify-center rounded-full bg-red-700 p-2">
                                    <a href="javascript:void(0)">
                                        <img class="w-[20px]" src="{{ asset('image/icons/clipboard.svg') }}"
                                            alt="lorem ipsum">
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="px-2 py-1">
                            <div class="flex flex-wrap items-center justify-between gap-2 md:flex-nowrap">
                                <div class="w-full md:w-2/3">
                                    <h4 class="text-sm">
                                        Pay Now
                                    </h4>
                                    <p class="text-base">
                                        <span class="currency">
                                            ₦
                                        </span>
                                        <span>0.00</span>
                                    </p>
                                </div>

                                <div class="w-full items-center justify-end md:flex md:w-1/3">
                                    <a href="javascript:void(0)"
                                        class="rounded-md bg-red-700 px-3 py-1 text-white md:text-center">
                                        Book Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-md border border-gray-200 bg-white py-2 shadow shadow-gray-300">
                        <div class="w-full">
                            <img class="h-full rounded-b-md object-contain" src="{{ asset('image/imgdefault.png') }}"
                                alt="lorem ipsum">
                        </div>
                        <div class="px-2 py-2">
                            <div class="flex w-full items-center gap-1">

                                <div class="w-3/4">
                                    <h4 class="text-sm">Best Deal</h4>
                                    <p class="flex gap-1">
                                        <span class="block h-auto w-1/3 truncate">Lagossssssssssssssssss</span>
                                        <img class="max-w-[10px]" src="{{ asset('image/icons/arrow-right.svg') }}"
                                            alt="lorem ipsum">
                                        <span class="block h-auto w-1/3 truncate">London</span>
                                    </p>
                                </div>

                                <div class="flex h-[70%] w-1/4 items-center justify-center rounded-full bg-red-700 p-2">
                                    <a href="javascript:void(0)">
                                        <img class="w-[20px]" src="{{ asset('image/icons/clipboard.svg') }}"
                                            alt="lorem ipsum">
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="px-2 py-1">
                            <div class="flex flex-wrap items-center justify-between gap-2 md:flex-nowrap">
                                <div class="w-full md:w-2/3">
                                    <h4 class="text-sm">
                                        Pay Now
                                    </h4>
                                    <p class="text-base">
                                        <span class="currency">
                                            ₦
                                        </span>
                                        <span>0.00</span>
                                    </p>
                                </div>

                                <div class="w-full items-center justify-end md:flex md:w-1/3">
                                    <a href="javascript:void(0)"
                                        class="rounded-md bg-red-700 px-3 py-1 text-white md:text-center">
                                        Book Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mx-auto my-3 w-[90%] md:w-[80%]">
            <div>
                <h2 class="mb-3 text-[18px] font-bold uppercase md:text-[22.5px]">Hotel in Trending Destination</h2>

                {{-- Popular Places Flex --}}
                <div class="grid grid-cols-2 gap-2 md:grid-cols-4 md:gap-3">
                    <div class="rounded-md border border-gray-200 bg-white py-2 shadow shadow-gray-300">
                        <div class="w-full">
                            <img class="h-full rounded-b-md object-contain" src="{{ asset('image/imgdefault.png') }}"
                                alt="lorem ipsum">
                        </div>
                        <div class="px-2 py-2">
                            <div class="flex w-full flex-col items-center gap-1">

                                <div class="w-full">
                                    <h4 class="text-base">Echo Hotel Lagos</h4>
                                    <p class="flex gap-1 text-sm font-[400]">
                                        Wifi | 24/7 Power | Netflix
                                    </p>
                                </div>

                                <div class="w-full">
                                    <div class="flex items-center justify-start">
                                        <style>
                                            .fas .far {
                                                font-size: 24px;
                                                /* Adjust size as needed */
                                                margin-right: 5px;
                                                /* Add spacing */
                                            }

                                            @media (max-width: 650px) {
                                                .fas .far {
                                                    font-size: 14px !important;
                                                }
                                            }
                                        </style>
                                        <div>
                                            @php
                                                $rating = 2.5; // Example rating value from the database
                                            @endphp

                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($rating >= $i)
                                                    <i class="fas fa-star" style="color: rgb(255, 0, 0);"></i>
                                                    <!-- Filled star -->
                                                @elseif($rating > $i - 1 && $rating < $i)
                                                    <i class="fas fa-star-half-alt" style="color: rgb(255, 0, 0); "></i>
                                                    <!-- Half star -->
                                                @else
                                                    <i class="far fa-star"></i> <!-- Empty star -->
                                                @endif
                                            @endfor
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="px-2 py-1">
                            <div class="flex flex-wrap items-center justify-between gap-2 md:flex-nowrap">
                                <div class="w-full md:w-2/3">
                                    <h4 class="text-sm">
                                        Pay Now
                                    </h4>
                                    <p class="text-base">
                                        <span class="currency">
                                            ₦
                                        </span>
                                        <span>0.00</span>
                                        <span class="font-300 text-sm">per night</span>
                                    </p>
                                </div>

                                <div class="w-full items-center justify-end md:flex md:w-1/3">
                                    <a href="javascript:void(0)"
                                        class="rounded-md bg-red-700 px-3 py-1 text-white md:text-center">
                                        Reserve
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-md border border-gray-200 bg-white py-2 shadow shadow-gray-300">
                        <div class="w-full">
                            <img class="h-full rounded-b-md object-contain" src="{{ asset('image/imgdefault.png') }}"
                                alt="lorem ipsum">
                        </div>
                        <div class="px-2 py-2">
                            <div class="flex w-full flex-col items-center gap-1">

                                <div class="w-full">
                                    <h4 class="text-base">Echo Hotel Lagos</h4>
                                    <p class="flex gap-1 text-sm font-[400]">
                                        Wifi | 24/7 Power | Netflix
                                    </p>
                                </div>

                                <div class="w-full">
                                    <div class="flex items-center justify-start">
                                        <style>
                                            .fas .far {
                                                font-size: 24px;
                                                /* Adjust size as needed */
                                                margin-right: 5px;
                                                /* Add spacing */
                                            }

                                            @media (max-width: 650px) {
                                                .fas .far {
                                                    font-size: 14px !important;
                                                }
                                            }
                                        </style>
                                        <div>
                                            @php
                                                $rating = 2.5; // Example rating value from the database
                                            @endphp

                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($rating >= $i)
                                                    <i class="fas fa-star" style="color: rgb(255, 0, 0);"></i>
                                                    <!-- Filled star -->
                                                @elseif($rating > $i - 1 && $rating < $i)
                                                    <i class="fas fa-star-half-alt" style="color: rgb(255, 0, 0); "></i>
                                                    <!-- Half star -->
                                                @else
                                                    <i class="far fa-star"></i> <!-- Empty star -->
                                                @endif
                                            @endfor
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="px-2 py-1">
                            <div class="flex flex-wrap items-center justify-between gap-2 md:flex-nowrap">
                                <div class="w-full md:w-2/3">
                                    <h4 class="text-sm">
                                        Pay Now
                                    </h4>
                                    <p class="text-base">
                                        <span class="currency">
                                            ₦
                                        </span>
                                        <span>0.00</span>
                                        <span class="font-300 text-sm">per night</span>
                                    </p>
                                </div>

                                <div class="w-full items-center justify-end md:flex md:w-1/3">
                                    <a href="javascript:void(0)"
                                        class="rounded-md bg-red-700 px-3 py-1 text-white md:text-center">
                                        Reserve
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-md border border-gray-200 bg-white py-2 shadow shadow-gray-300">
                        <div class="w-full">
                            <img class="h-full rounded-b-md object-contain" src="{{ asset('image/imgdefault.png') }}"
                                alt="lorem ipsum">
                        </div>
                        <div class="px-2 py-2">
                            <div class="flex w-full flex-col items-center gap-1">

                                <div class="w-full">
                                    <h4 class="text-base">Echo Hotel Lagos</h4>
                                    <p class="flex gap-1 text-sm font-[400]">
                                        Wifi | 24/7 Power | Netflix
                                    </p>
                                </div>

                                <div class="w-full">
                                    <div class="flex items-center justify-start">
                                        <style>
                                            .fas .far {
                                                font-size: 24px;
                                                /* Adjust size as needed */
                                                margin-right: 5px;
                                                /* Add spacing */
                                            }

                                            @media (max-width: 650px) {
                                                .fas .far {
                                                    font-size: 14px !important;
                                                }
                                            }
                                        </style>
                                        <div>
                                            @php
                                                $rating = 2.5; // Example rating value from the database
                                            @endphp

                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($rating >= $i)
                                                    <i class="fas fa-star" style="color: rgb(255, 0, 0);"></i>
                                                    <!-- Filled star -->
                                                @elseif($rating > $i - 1 && $rating < $i)
                                                    <i class="fas fa-star-half-alt" style="color: rgb(255, 0, 0); "></i>
                                                    <!-- Half star -->
                                                @else
                                                    <i class="far fa-star"></i> <!-- Empty star -->
                                                @endif
                                            @endfor
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="px-2 py-1">
                            <div class="flex flex-wrap items-center justify-between gap-2 md:flex-nowrap">
                                <div class="w-full md:w-2/3">
                                    <h4 class="text-sm">
                                        Pay Now
                                    </h4>
                                    <p class="text-base">
                                        <span class="currency">
                                            ₦
                                        </span>
                                        <span>0.00</span>
                                        <span class="font-300 text-sm">per night</span>
                                    </p>
                                </div>

                                <div class="w-full items-center justify-end md:flex md:w-1/3">
                                    <a href="javascript:void(0)"
                                        class="rounded-md bg-red-700 px-3 py-1 text-white md:text-center">
                                        Reserve
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-md border border-gray-200 bg-white py-2 shadow shadow-gray-300">
                        <div class="w-full">
                            <img class="h-full rounded-b-md object-contain" src="{{ asset('image/imgdefault.png') }}"
                                alt="lorem ipsum">
                        </div>
                        <div class="px-2 py-2">
                            <div class="flex w-full flex-col items-center gap-1">

                                <div class="w-full">
                                    <h4 class="text-base">Echo Hotel Lagos</h4>
                                    <p class="flex gap-1 text-sm font-[400]">
                                        Wifi | 24/7 Power | Netflix
                                    </p>
                                </div>

                                <div class="w-full">
                                    <div class="flex items-center justify-start">
                                        <style>
                                            .fas .far {
                                                font-size: 24px;
                                                /* Adjust size as needed */
                                                margin-right: 5px;
                                                /* Add spacing */
                                            }

                                            @media (max-width: 650px) {
                                                .fas .far {
                                                    font-size: 14px !important;
                                                }
                                            }
                                        </style>
                                        <div>
                                            @php
                                                $rating = 2.5; // Example rating value from the database
                                            @endphp

                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($rating >= $i)
                                                    <i class="fas fa-star" style="color: rgb(255, 0, 0);"></i>
                                                    <!-- Filled star -->
                                                @elseif($rating > $i - 1 && $rating < $i)
                                                    <i class="fas fa-star-half-alt" style="color: rgb(255, 0, 0); "></i>
                                                    <!-- Half star -->
                                                @else
                                                    <i class="far fa-star"></i> <!-- Empty star -->
                                                @endif
                                            @endfor
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="px-2 py-1">
                            <div class="flex flex-wrap items-center justify-between gap-2 md:flex-nowrap">
                                <div class="w-full md:w-2/3">
                                    <h4 class="text-sm">
                                        Pay Now
                                    </h4>
                                    <p class="text-base">
                                        <span class="currency">
                                            ₦
                                        </span>
                                        <span>0.00</span>
                                        <span class="font-300 text-sm">per night</span>
                                    </p>
                                </div>

                                <div class="w-full items-center justify-end md:flex md:w-1/3">
                                    <a href="javascript:void(0)"
                                        class="rounded-md bg-red-700 px-3 py-1 text-white md:text-center">
                                        Reserve
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>

        <section class="mx-auto my-3 w-[90%] md:w-[80%]">
            <div>
                <div class="flex justify-between">
                    <h2 class="mb-3 text-[18px] font-bold uppercase md:text-[22.5px]">Top Event of the week</h2>

                    <span>
                        {{ $events->links() }}
                    </span>
                </div>

                {{-- Popular Places Flex --}}
                <div class="grid grid-cols-1 gap-2 md:grid-cols-3 md:gap-3">
                    @forelse ($events as $event)
                        <div class="rounded-md border border-gray-200 bg-white py-2 shadow shadow-gray-300">
                            <div class="w-full">
                                @if ($event->hero_image !== null && $event->hero_image !== '')
                                    <img class="h-full rounded-b-md object-cover"
                                        src="{{ asset('image/events/' . basename($event->hero_image)) }}"
                                        alt="lorem ipsum">
                                @else
                                    <img class="h-full rounded-b-md object-contain"
                                        src="{{ asset('image/imgdefault.png') }}" alt="lorem ipsum">
                                @endif

                            </div>
                            <div class="px-2 py-2">
                                <div class="flex w-full flex-row items-center gap-1">

                                    <div class="w-[80%]">
                                        <h4 class="text-base font-[800]">{{ $event->title }} </h4>

                                    </div>

                                    <div
                                        class="flex h-[70%] w-[20%] items-center justify-center rounded-full bg-red-700 p-2">
                                        <a href="javascript:void(0)">

                                            <img class="w-[20px]" src="{{ asset('image/icons/clipboard.svg') }}"
                                                alt="lorem ipsum">
                                        </a>
                                    </div>

                                </div>
                                <div class="text-sm">
                                    <p class="flex items-center gap-1 font-thin">
                                        <img class="w-[15px]" src="{{ asset('image/date.svg') }}" alt="lorem ipsum">
                                        <span>{{ \Carbon\Carbon::parse($event->date)->format('l, F j, Y') }}</span>
                                    </p>
                                    <p class="flex items-center gap-1 font-thin">
                                        <img class="w-[15px]" src="{{ asset('image/clock.svg') }}" alt="lorem ipsum">
                                        <span>{{ \Carbon\Carbon::parse($event->time)->format('H:i A') }}</span>WAT
                                    </p>
                                    <p class="flex items-center gap-1 font-thin">
                                        <img class="w-[15px]" src="{{ asset('image/location.svg') }}" alt="lorem ipsum">
                                        <span>{{ $event->location }}</span>
                                    </p>
                                </div>
                            </div>
                            <div class="px-2 py-1">
                                <div class="flex flex-wrap items-center justify-between gap-2 md:flex-nowrap">
                                    <div class="w-[55%]">
                                        <h4 class="text-sm">
                                            Base Ticket Fee
                                        </h4>
                                        <p class="text-base">
                                            <span class="currency">
                                                ₦
                                            </span>
                                            @if ($event->regular_ticket_price == null)
                                                <span>0.00</span>
                                            @else
                                                <span>{{ $event->regular_ticket_price }}

                                                </span>
                                            @endif
                                        </p>
                                    </div>

                                    <div class="w-[45%] items-center justify-end text-sm md:flex">
                                        <a href="{{ route('event.metadata', $event->id) }}"
                                            class="rounded-md bg-red-700 px-3 py-1 text-white md:text-center">
                                            Get Ticket
                                            <i class="fa-solid fa-arrow-right text-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @empty
                        <div class="col-span-4 py-5 md:py-10">
                            <div class="flex flex-col items-center justify-center gap-0">
                                <img src="{{ asset('image/error.svg') }}" alt="lorem ipsum">
                                <span class="capitalize font-bold text-1xl md:text-2xl py-1">
                                    Sorry no Party Ticket Available
                                </span>
                                <div class=" font-thin">
                                    <span>
                                        Stay tuned..
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforelse



                </div>

            </div>
        </section>

        <section class="bg-white">
           

                <div class="mx-auto max-w-screen-xl px-4 py-8 sm:py-16 lg:px-6">
                    <div class="mx-auto max-w-screen-sm text-center">
                        <h2
                            class="mb-4 text-3xl  uppercase md:text-4xl font-extrabold md:capitalize leading-tight tracking-tight text-gray-900">
                            The
                            journey
                            of a thousand miles begins with a footstep</h2>
                        <p class="font-light text-gray-500 md:text-lg">Let 900ticket help with your journey</p>
                        <p class="mt-2 hidden justify-center gap-1 text-center text-sm font-[300] text-gray-400 md:flex">
                            <span>Book Flight</span>
                            <span>| Make Hotel Reservation |</span>
                            <span> Pay For Party Ticket |</span>
                            <span>Find Shortlet Services</span>
                        </p>
                        <div class="mt-6">
                            <a href="/#hero"
                                class="mb-2 mr-2 rounded-lg bg-red-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-red-800 focus:ring-4 focus:ring-red-300">ADD
                                AN ITEM TO CART TO BEING YOUR JOURNEY</a>
                        </div>
                    </div>
                </div>

          
        </section>


        <section class="mx-auto my-3 w-[90%] md:w-[80%]">
            <div>
                <h2 class="mb-3 text-[18px] font-bold uppercase md:text-[22.5px]">Top stories of the week</h2>

                {{-- Popular Places Flex --}}
                <div class="grid grid-cols-1 gap-2 md:grid-cols-3 md:gap-3">
                    <div class="rounded-md border border-gray-200 bg-white py-2 shadow shadow-gray-300">
                        <div class=" ">
                            <a href="#">
                                <img class="rounded-b-md" src="https://flowbite.com/docs/images/blog/image-1.jpg"
                                    alt="">
                            </a>
                            <div class="px-5 py-2">
                                <p class="mb-2 flex items-center gap-1 text-sm font-thin">
                                    <img class="w-[15px]" src="{{ asset('image/date.svg') }}" alt="lorem ipsum">
                                    <span>Dec 06 2025</span>
                                </p>

                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy technology
                                        acquisitions 2021</h5>
                                </a>
                                <p class="mb-3 truncate font-normal text-gray-700">Here are the biggest enterprise
                                    technology
                                    acquisitions of 2021 so far, in reverse chronological order.</p>
                                <a class="inline-flex items-center rounded-lg bg-red-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-red-800 focus:ring-4 focus:ring-red-300"
                                    href="#">
                                    Read more
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center justify-between border-t border-gray-400 px-5 py-2">
                            <img class="w-[70px]" src="{{ asset('image/logo_alt.svg') }}" alt="lorem ipsum">
                            <p class="text-sm font-thin text-gray-700">
                                Travel Blog
                            </p>
                        </div>
                    </div>
                    <div class="rounded-md border border-gray-200 bg-white py-2 shadow shadow-gray-300">
                        <div class=" ">
                            <a href="#">
                                <img class="rounded-b-md" src="https://flowbite.com/docs/images/blog/image-1.jpg"
                                    alt="">
                            </a>
                            <div class="px-5 py-2">
                                <p class="mb-2 flex items-center gap-1 text-sm font-thin">
                                    <img class="w-[15px]" src="{{ asset('image/date.svg') }}" alt="lorem ipsum">
                                    <span>Dec 06 2025</span>
                                </p>

                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy technology
                                        acquisitions 2021</h5>
                                </a>
                                <p class="mb-3 truncate font-normal text-gray-700">Here are the biggest enterprise
                                    technology
                                    acquisitions of 2021 so far, in reverse chronological order.</p>
                                <a class="inline-flex items-center rounded-lg bg-red-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-red-800 focus:ring-4 focus:ring-red-300"
                                    href="#">
                                    Read more
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center justify-between border-t border-gray-400 px-5 py-2">
                            <img class="w-[70px]" src="{{ asset('image/logo_alt.svg') }}" alt="lorem ipsum">
                            <p class="text-sm font-thin text-gray-700">
                                Travel Blog
                            </p>
                        </div>
                    </div>
                    <div class="rounded-md border border-gray-200 bg-white py-2 shadow shadow-gray-300">
                        <div class=" ">
                            <a href="#">
                                <img class="rounded-b-md" src="https://flowbite.com/docs/images/blog/image-1.jpg"
                                    alt="">
                            </a>
                            <div class="px-5 py-2">
                                <p class="mb-2 flex items-center gap-1 text-sm font-thin">
                                    <img class="w-[15px]" src="{{ asset('image/date.svg') }}" alt="lorem ipsum">
                                    <span>Dec 06 2025</span>
                                </p>

                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy technology
                                        acquisitions 2021</h5>
                                </a>
                                <p class="mb-3 truncate font-normal text-gray-700">Here are the biggest enterprise
                                    technology
                                    acquisitions of 2021 so far, in reverse chronological order.</p>
                                <a class="inline-flex items-center rounded-lg bg-red-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-red-800 focus:ring-4 focus:ring-red-300"
                                    href="#">
                                    Read more
                                </a>
                            </div>
                        </div>
                        <div class="flex items-center justify-between border-t border-gray-400 px-5 py-2">
                            <img class="w-[70px]" src="{{ asset('image/logo_alt.svg') }}" alt="lorem ipsum">
                            <p class="text-sm font-thin text-gray-700">
                                Travel Blog
                            </p>
                        </div>
                    </div>



                </div>
            </div>
        </section>

        <section class="py-6 md:py-8 bg-white my-3 flex flex-col gap-2">
            <div class=" ">

                <div class="mx-auto  w-[90%] md:w-[80%] flex flex-col gap-2">

                    <div class="flex flex-col gap-2 ">
                        <h2
                            class="text-dark-grey-900 text-2xl font-extrabold tracking-wider leading-tight lg:text-4xl  uppercase md:capitalize text-center mb-3 w-full">
                            900ticket is the best place to book your flight
                        </h2>

                        <div class="flex flex-col gap-2 w-[90%] md:w-full mx-auto">
                            <div x-data="{ chevDownOne: false }">
                                <div class="flex justify-between">
                                    <h3 class="text-md mb-2 font-[800] uppercase md:text-lg">Flights to top cities from
                                        Nigeria</h3>
                                    <i @click="chevDownOne = !chevDownOne" :class="{ 'rotate-90': chevDownOne }"
                                        class="fa-solid fa-chevron-down text-black transition-transform duration-300"></i>
                                </div>
                                <div x-transition x-show="chevDownOne" @click.outside="chevDownOne = false ">
                                    <ul class="flex flex-wrap justify-start gap-2 md:gap-x-3">
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Lagos</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Enugu</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Port Harcourt</a>
                                        </li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Abuja</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Uyo</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Kano</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Owerri</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Katsina</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Sokoto</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Benin City</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                            <div x-data="{ chevDownTwo: false }">
                                <div class="flex justify-between">
                                    <h3 class="text-md mb-2 font-[800] uppercase md:text-lg">Top International Destination
                                    </h3>
                                    <i @click="chevDownTwo = !chevDownTwo" :class="{ 'rotate-90': chevDownTwo }"
                                        class="fa-solid fa-chevron-down text-black transition-transform duration-300"></i>
                                </div>
                                <div x-transition x-show="chevDownTwo" @click.outside="chevDownTwo = false ">
                                    <ul class="flex flex-wrap justify-start gap-2 md:gap-x-3">
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Lagos</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Enugu</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Port Harcourt</a>
                                        </li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Abuja</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Uyo</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Kano</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Owerri</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Katsina</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Sokoto</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Benin City</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div x-data="{ chevDownThree: false }">
                                <div class="flex justify-between">
                                    <h3 class="text-md mb-2 font-[800] uppercase md:text-lg">Flight to top countries</h3>
                                    <i @click="chevDownThree = !chevDownThree" :class="{ 'rotate-90': chevDownThree }"
                                        class="fa-solid fa-chevron-down text-black transition-transform duration-300"></i>
                                </div>
                                <div x-transition x-show="chevDownThree" @click.outside="chevDownThree = false ">

                                    <ul class="flex flex-wrap justify-start gap-2 md:gap-x-3">
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Lagos</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Enugu</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Port Harcourt</a>
                                        </li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Abuja</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Uyo</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Kano</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Owerri</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Katsina</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Sokoto</a></li>
                                        <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Benin City</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container mx-auto my-4 flex flex-col items-center gap-8 md:gap-16">
                        <div class="flex flex-col md:gap-16">
                            <div class="flex flex-col gap-2 text-center">
                                <h2
                                    class="text-dark-grey-900 md:mb-2 md:text-4xl font-extrabold leading-tight lg:text-4xl md:capitalize uppercase text-2xl">
                                    How 900Ticket works?
                                </h2>
                                <p
                                    class="mt-2 hidden justify-center gap-1 text-center text-sm font-[300] text-gray-400 md:flex">
                                    <span>Book Flight</span>
                                    <span>| Make Hotel Reservation |</span>
                                    <span> Pay For Party Ticket |</span>
                                    <span>Find Shortlet Services</span>
                                </p>
                            </div>
                        </div>
                        <div
                            class="flex w-full flex-col items-center justify-between gap-y-5 md:gap-y-10 lg:flex-row lg:gap-x-8 lg:gap-y-0 xl:gap-x-10">
                            <div class="flex items-start gap-4">
                                <div
                                    class="border-red-300 bg-red-700 text-purple-blue-500 text-white flex h-12 w-12 shrink-0 items-center justify-center rounded-full border-2 border-solid">
                                    <span class="text-base font-bold leading-7 text-white">1</span>
                                </div>
                                <div class="flex flex-col">
                                    <h3 class="text-dark-grey-900 mb-2 text-base font-bold leading-tight">
                                        Create your Account
                                    </h3>
                                    <p class="text-dark-grey-600 text-base font-medium leading-7">
                                        Sign up using your work/personal mail for a free account to get started.
                                    </p>
                                </div>
                            </div>
                            <div class="rotate-90 md:rotate-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="43" height="42"
                                    viewBox="0 0 43 42" fill="none">
                                    <g clip-path="url(#clip0_3346_6663)">
                                        <path
                                            d="M16.9242 11.7425C16.2417 12.425 16.2417 13.5275 16.9242 14.21L23.7142 21L16.9242 27.79C16.2417 28.4725 16.2417 29.575 16.9242 30.2575C17.6067 30.94 18.7092 30.94 19.3917 30.2575L27.4242 22.225C28.1067 21.5425 28.1067 20.44 27.4242 19.7575L19.3917 11.725C18.7267 11.06 17.6067 11.06 16.9242 11.7425Z"
                                            fill="#b61c1c" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_3346_6663">
                                            <rect width="42" height="42" fill="white"
                                                transform="translate(0.666748)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="flex items-start gap-4">
                                <div
                                    class="border-red-300 bg-red-700 text-purple-blue-500 text-white flex h-12 w-12 shrink-0 items-center justify-center rounded-full border-2 border-solid ">
                                    <span class="text-base font-bold leading-7">2</span>
                                </div>
                                <div class="flex flex-col">
                                    <h3 class="text-dark-grey-900 mb-2 text-base font-bold leading-tight">
                                        Setup your Account
                                    </h3>
                                    <p class="text-dark-grey-600 text-base font-medium leading-7">
                                        Verify your email address and set up your profile to get started with making orders.
                                    </p>
                                </div>
                            </div>
                            <div class="rotate-90 lg:rotate-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="43" height="42"
                                    viewBox="0 0 43 42" fill="none">
                                    <g clip-path="url(#clip0_3346_6663)">
                                        <path
                                            d="M16.9242 11.7425C16.2417 12.425 16.2417 13.5275 16.9242 14.21L23.7142 21L16.9242 27.79C16.2417 28.4725 16.2417 29.575 16.9242 30.2575C17.6067 30.94 18.7092 30.94 19.3917 30.2575L27.4242 22.225C28.1067 21.5425 28.1067 20.44 27.4242 19.7575L19.3917 11.725C18.7267 11.06 17.6067 11.06 16.9242 11.7425Z"
                                            fill="#b61c1c" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_3346_6663">
                                            <rect width="42" height="42" fill="white"
                                                transform="translate(0.666748)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="flex items-start gap-4">
                                <div
                                    class="border-red-300 bg-red-700 text-purple-blue-500 text-white flex h-12 w-12 shrink-0 items-center justify-center rounded-full border-2 border-solid">
                                    <span class="text-base font-bold leading-7">3</span>
                                </div>
                                <div class="flex flex-col">
                                    <h3 class="text-dark-grey-900 mb-2 text-base font-bold leading-tight">
                                        Start Shopping with 900Ticket
                                    </h3>
                                    <p class="text-dark-grey-600 text-base font-medium leading-7">
                                        Browse through our wide range of products and services to find what you need.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

            <div class="flex flex-col gap-2 ">

                <h2
                    class="text-dark-grey-900 text-2xl font-extrabold leading-tight lg:text-4xl uppercase md:capitalize  text-center ">
                    Here's How We Stack Up
                </h2>

                <div class="mx-8 grid grid-cols-2 place-items-center items-center gap-2 lg:flex">
                    <div class="flex w-[80%] flex-col items-center justify-center p-1">
                        <img class="my-2 w-[30%]" src="{{ asset('image/icons/iot.webp') }}" alt="robot img" />
                        <div class="text-center">
                            <h2 class="text-[1rem] capitalize text-gray-900">102+</h2>
                            <p class="capitalize text-gray-500">ai & iot solutions</p>
                        </div>
                    </div>
                    <div class="flex w-[80%] flex-col items-center justify-center p-1">
                        <img class="my-2 w-[30%]" src="{{ asset('image/icons/happyclients.webp') }}" alt="robot img" />
                        <div class="text-center">
                            <h2 class="text-[1rem] capitalize text-gray-900">2700+</h2>
                            <p class="capitalize text-gray-500">happy clients</p>
                        </div>
                    </div>
                    <div class="flex w-[80%] flex-col items-center justify-center p-1">
                        <img class="my-2 w-[35%]" src="{{ asset('image/icons/10753196.webp') }}" alt="robot img" />
                        <div class="text-center">
                            <h2 class="text-[1rem] capitalize text-gray-900">120+</h2>
                            <p class="capitalize text-gray-500">salesforce solution</p>
                        </div>
                    </div>
                    <div class="flex w-[80%] flex-col items-center justify-center p-1">
                        <img class="my-2 w-[30%]" src="{{ asset('image/icons/datascience.webp') }}" alt="robot img" />
                        <div class="text-center">
                            <h2 class="text-[1rem] capitalize text-gray-900">40+</h2>
                            <p class="capitalize text-gray-500">data science</p>
                        </div>
                    </div>
                </div>


            </div>
        </section>

        <section class="bg-red-700 py-4 md:py-8 ">

            <div class="  text-white mb-8">
                <div class="">
                    <div>
                        <h2
                            class="mb-6 text-2xl font-bold text-white md:text-3xl text-center px-2 md:capitalize uppercase">
                            Trusted By Top Companies in Nigeria </h2>
                    </div>
                    <div class="mx-8 flex items-center justify-between md:px-16">
                        <img class="w-[10%]" src="image/fig-pic/download-2022-11-18T145151.694.png" alt="random" />
                        <img class="w-[20%]" src="image/fig-pic/LAUTECH-Payment-Portal.png" alt="random" />
                        <img class="w-[10%]"
                            src="image/fig-pic/List-of-Courses-Offered-in-Kwara-State-University-KWASU.webp"
                            alt="random" />
                    </div>
                </div>

            </div>

            <div class="">
                <div class="mx-auto max-w-6xl text-center">
                    <h2 class="mb-3 text-2xl font-bold text-white md:text-3xl md:capitalize uppercase px-2">Join Our
                        Exclusive Newsletter</h2>
                    <p class="text-sm text-gray-300 md:text-xl">Be part of our elite community. Get VIP access to curated
                        content, early product releases, and special promotions.</p>

                    <div
                        class="mt-7 flex flex-col items-center justify-center rounded-lg bg-white p-8 shadow-lg md:flex-row">
                        <input type="email" placeholder="Enter your email"
                            class="w-full border-b-2 border-red-700 bg-transparent px-4 py-3 text-base text-[#2e0249] placeholder-red-700 placeholder-opacity-70 focus:outline-none md:w-96" />
                        <button
                            class="rounded bg-red-700 px-6 py-3 font-medium text-white hover:scale-105 hover:transform hover:bg-red-500 hover:shadow-md focus:outline-none max-md:mt-6 md:ml-4">
                            Get Started
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection
