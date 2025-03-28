@extends('layouts.app')
@section('title', 'Home')

@section('hero')

@section('content')

    <main class="mt-[235px]">
    <section class="mt-2 mb-6">
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

        <ul class="banner ">

            <li class="banner-item" style="background: #f6bd60;">
                <img class="object-contain w-auto h-full" src="{{ asset('image/banner/AirportTransfer-v3-Recovered.jpg') }}"
                    alt="">
            </li>
            <li class="banner-item" style="background: #f7ede2;">
                <img class="object-contain w-auto h-full" src="{{ asset('image/banner/banner1.webp') }}" alt="">
            </li>
            <li class="banner-item" style="background: #f5cac3;">
                <img class="object-contain w-auto h-full" src="{{ asset('image/banner/banner3.webp') }}" alt="">
            </li>
            <li class="banner-item" style="background: #84a59d;">
                <img class="object-contain w-auto h-full" src="{{ asset('image/banner/banner4.webp') }}" alt="">
            </li>
            <li class="banner-item" style="background: #f28482;">
                <img class="object-contain w-auto h-full" src="{{ asset('image/banner/banner5.webp') }}" alt="">
            </li>
            <li class="banner-item" style="background: #f6bd60;">
                <img class="object-contain w-auto h-full" src="{{ asset('image/banner/banner6.webp') }}" alt="">
            </li>
            <li class="banner-item" style="background: #f7ede2;">
                <img class="object-contain w-auto h-full" src="{{ asset('image/banner/banner7.webp') }}" alt="">
            </li>
            <li class="banner-item" style="background: #f5cac3;">
                <img class="object-contain w-auto h-full" src="{{ asset('image/banner/banner8.webp') }}" alt="">
            </li>
            <li class="banner-item" style="background: #84a59d;">
                <img class="object-contain w-auto h-full" src="{{ asset('image/banner/banner9.webp') }}" alt="">
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

    <section class="block my-3 md:hidden w-[85%] md:w-[80%] mx-auto">
        <div class="rounded-md shadow shadow-gray-300 border bg-white flex flex-col py-4 px-5 border-gray-200 gap-1">
            <div class="flex gap-2 items-center bg-transparent  ">
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
            <div class="flex gap-2 items-center bg-transparent  ">
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
            <div class="flex gap-2 items-center bg-transparent  ">
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

    <section class="hidden my-3 md:block w-[85%] md:w-[80%] mx-auto">
        <div class="flex justify-between ">
            <div class="flex flex-col gap-2 w-1/4 items-center  justify-center">
                <img class="w-auto max-h-[]" src="{{ asset('image/Book-1-1-1.png') }}" alt="">
                <div class="text-center">
                    <h4 class="font-[800]">Look No Further</h4>
                    <p class="font-[500] w-[75%] mx-auto capitalize">Search all travel deals, in one go</p>
                </div>
            </div>
            <div class="flex flex-col gap-2 w-1/4 items-center  justify-center">
                <img class="w-auto max-h-[]" src="{{ asset('image/Book-1-2.png') }}" alt="">
                <div class="text-center">
                    <h4 class="font-[800]">Reliable Shopping</h4>
                    <p class="font-[500] w-[75%] mx-auto capitalize">No hidden charges or taxes</p>
                </div>
            </div>
            <div class="flex flex-col gap-2 w-1/4 items-center  justify-center">
                <img class="w-auto max-h-[]" src="{{ asset('image/Book-1-3.png') }}" alt="">
                <div class="text-center">
                    <h4 class="font-[800]">Instant Booking</h4>
                    <p class="font-[500] w-[75%] mx-auto capitalize">Booking with just few clicks</p>
                </div>
            </div>
            <div class="flex flex-col gap-2 w-1/4 items-center  justify-center">
                <img class="w-auto max-h-[]" src="{{ asset('image/Book-1-4.png') }}" alt="">
                <div class="text-center">
                    <h4 class="font-[800]">Easy Payout</h4>
                    <p class="font-[500] w-[75%] mx-auto capitalize">Search all travel deals, in one go</p>
                </div>
            </div>
        </div>
    </section>

    <section class=" my-3  w-[85%] md:w-[80%] mx-auto">
        <div>
            <h2 class="mb-3 font-bold uppercase text-[18px] md:text-[22.5px]">Popular Places</h2>

            {{-- Popular Places Flex --}}
            <div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-3">
                <div class=" border border-gray-200 shadow shadow-gray-300 rounded-md py-2 bg-white">
                    <div class="w-full ">
                        <img class="h-full rounded-b-md object-contain" src="{{ asset('image/imgdefault.png') }}"
                            alt="lorem ipsum">
                    </div>
                    <div class="px-2 py-2 ">
                        <div class="flex gap-1 w-full items-center ">

                            <div class="w-3/4">
                                <h4 class="text-sm">Best Deal</h4>
                                <p class="flex gap-1">
                                    <span class="block w-1/3 h-auto truncate">Lagossssssssssssssssss</span>
                                    <img class="max-w-[10px]" src="{{ asset('image/icons/arrow-right.svg') }}"
                                        alt="lorem ipsum">
                                    <span class="block w-1/3 truncate h-auto">London</span>
                                </p>
                            </div>

                            <div class="w-1/4 bg-red-700 rounded-full flex items-center justify-center h-[70%] p-2">
                                <a href="javascript:void(0)">
                                    <img class=" w-[20px]" src="{{ asset('image/icons/clipboard.svg') }}"
                                        alt="lorem ipsum">
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="px-2 py-1">
                        <div class="flex flex-wrap justify-between md:flex-nowrap gap-2 items-center">
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

                            <div class="w-full md:w-1/3 md:flex justify-end items-center">
                                <a href="javascript:void(0)"
                                    class="bg-red-700 text-white py-1 px-3 rounded-md md:text-center">
                                    Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" border border-gray-200 shadow shadow-gray-300 rounded-md py-2 bg-white">
                    <div class="w-full ">
                        <img class="h-full rounded-b-md object-contain" src="{{ asset('image/imgdefault.png') }}"
                            alt="lorem ipsum">
                    </div>
                    <div class="px-2 py-2 ">
                        <div class="flex gap-1 w-full items-center ">

                            <div class="w-3/4">
                                <h4 class="text-sm">Best Deal</h4>
                                <p class="flex gap-1">
                                    <span class="block w-1/3 h-auto truncate">Lagossssssssssssssssss</span>
                                    <img class="max-w-[10px]" src="{{ asset('image/icons/arrow-right.svg') }}"
                                        alt="lorem ipsum">
                                    <span class="block w-1/3 truncate h-auto">London</span>
                                </p>
                            </div>

                            <div class="w-1/4 bg-red-700 rounded-full flex items-center justify-center h-[70%] p-2">
                                <a href="javascript:void(0)">
                                    <img class=" w-[20px]" src="{{ asset('image/icons/clipboard.svg') }}"
                                        alt="lorem ipsum">
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="px-2 py-1">
                        <div class="flex flex-wrap justify-between md:flex-nowrap gap-2 items-center">
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

                            <div class="w-full md:w-1/3 md:flex justify-end items-center">
                                <a href="javascript:void(0)"
                                    class="bg-red-700 text-white py-1 px-3 rounded-md md:text-center">
                                    Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" border border-gray-200 shadow shadow-gray-300 rounded-md py-2 bg-white">
                    <div class="w-full ">
                        <img class="h-full rounded-b-md object-contain" src="{{ asset('image/imgdefault.png') }}"
                            alt="lorem ipsum">
                    </div>
                    <div class="px-2 py-2 ">
                        <div class="flex gap-1 w-full items-center ">

                            <div class="w-3/4">
                                <h4 class="text-sm">Best Deal</h4>
                                <p class="flex gap-1">
                                    <span class="block w-1/3 h-auto truncate">Lagossssssssssssssssss</span>
                                    <img class="max-w-[10px]" src="{{ asset('image/icons/arrow-right.svg') }}"
                                        alt="lorem ipsum">
                                    <span class="block w-1/3 truncate h-auto">London</span>
                                </p>
                            </div>

                            <div class="w-1/4 bg-red-700 rounded-full flex items-center justify-center h-[70%] p-2">
                                <a href="javascript:void(0)">
                                    <img class=" w-[20px]" src="{{ asset('image/icons/clipboard.svg') }}"
                                        alt="lorem ipsum">
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="px-2 py-1">
                        <div class="flex flex-wrap justify-between md:flex-nowrap gap-2 items-center">
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

                            <div class="w-full md:w-1/3 md:flex justify-end items-center">
                                <a href="javascript:void(0)"
                                    class="bg-red-700 text-white py-1 px-3 rounded-md md:text-center">
                                    Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" border border-gray-200 shadow shadow-gray-300 rounded-md py-2 bg-white">
                    <div class="w-full ">
                        <img class="h-full rounded-b-md object-contain" src="{{ asset('image/imgdefault.png') }}"
                            alt="lorem ipsum">
                    </div>
                    <div class="px-2 py-2 ">
                        <div class="flex gap-1 w-full items-center ">

                            <div class="w-3/4">
                                <h4 class="text-sm">Best Deal</h4>
                                <p class="flex gap-1">
                                    <span class="block w-1/3 h-auto truncate">Lagossssssssssssssssss</span>
                                    <img class="max-w-[10px]" src="{{ asset('image/icons/arrow-right.svg') }}"
                                        alt="lorem ipsum">
                                    <span class="block w-1/3 truncate h-auto">London</span>
                                </p>
                            </div>

                            <div class="w-1/4 bg-red-700 rounded-full flex items-center justify-center h-[70%] p-2">
                                <a href="javascript:void(0)">
                                    <img class=" w-[20px]" src="{{ asset('image/icons/clipboard.svg') }}"
                                        alt="lorem ipsum">
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="px-2 py-1">
                        <div class="flex flex-wrap justify-between md:flex-nowrap gap-2 items-center">
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

                            <div class="w-full md:w-1/3 md:flex justify-end items-center">
                                <a href="javascript:void(0)"
                                    class="bg-red-700 text-white py-1 px-3 rounded-md md:text-center">
                                    Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=" my-3  w-[85%] md:w-[80%] mx-auto">
        <div>
            <h2 class="mb-3 font-bold text-[18px] md:text-[22.5px] uppercase">Hotel in Trending Destination</h2>

            {{-- Popular Places Flex --}}
            <div class="grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-3">
                <div class=" border border-gray-200 shadow shadow-gray-300 rounded-md py-2 bg-white">
                    <div class="w-full ">
                        <img class="h-full rounded-b-md object-contain" src="{{ asset('image/imgdefault.png') }}"
                            alt="lorem ipsum">
                    </div>
                    <div class="px-2 py-2 ">
                        <div class="flex flex-col gap-1 w-full items-center ">

                            <div class="w-full">
                                <h4 class="text-base">Echo Hotel Lagos</h4>
                                <p class="flex gap-1 text-sm font-[400]">
                                    Wifi | 24/7 Power | Netflix
                                </p>
                            </div>

                            <div class="w-full">
                                <div class="   flex items-center justify-start">
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
                        <div class="flex flex-wrap justify-between md:flex-nowrap gap-2 items-center">
                            <div class="w-full md:w-2/3">
                                <h4 class="text-sm">
                                    Pay Now
                                </h4>
                                <p class="text-base">
                                    <span class="currency">
                                        ₦
                                    </span>
                                    <span>0.00</span>
                                    <span class="text-sm font-300">per night</span>
                                </p>
                            </div>

                            <div class="w-full md:w-1/3 md:flex justify-end items-center">
                                <a href="javascript:void(0)"
                                    class="bg-red-700 text-white py-1 px-3 rounded-md md:text-center">
                                    Reserve
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" border border-gray-200 shadow shadow-gray-300 rounded-md py-2 bg-white">
                    <div class="w-full ">
                        <img class="h-full rounded-b-md object-contain" src="{{ asset('image/imgdefault.png') }}"
                            alt="lorem ipsum">
                    </div>
                    <div class="px-2 py-2 ">
                        <div class="flex flex-col gap-1 w-full items-center ">

                            <div class="w-full">
                                <h4 class="text-base">Echo Hotel Lagos</h4>
                                <p class="flex gap-1 text-sm font-[400]">
                                    Wifi | 24/7 Power | Netflix
                                </p>
                            </div>

                            <div class="w-full">
                                <div class="   flex items-center justify-start">
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
                        <div class="flex flex-wrap justify-between md:flex-nowrap gap-2 items-center">
                            <div class="w-full md:w-2/3">
                                <h4 class="text-sm">
                                    Pay Now
                                </h4>
                                <p class="text-base">
                                    <span class="currency">
                                        ₦
                                    </span>
                                    <span>0.00</span>
                                    <span class="text-sm font-300">per night</span>
                                </p>
                            </div>

                            <div class="w-full md:w-1/3 md:flex justify-end items-center">
                                <a href="javascript:void(0)"
                                    class="bg-red-700 text-white py-1 px-3 rounded-md md:text-center">
                                    Reserve
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" border border-gray-200 shadow shadow-gray-300 rounded-md py-2 bg-white">
                    <div class="w-full ">
                        <img class="h-full rounded-b-md object-contain" src="{{ asset('image/imgdefault.png') }}"
                            alt="lorem ipsum">
                    </div>
                    <div class="px-2 py-2 ">
                        <div class="flex flex-col gap-1 w-full items-center ">

                            <div class="w-full">
                                <h4 class="text-base">Echo Hotel Lagos</h4>
                                <p class="flex gap-1 text-sm font-[400]">
                                    Wifi | 24/7 Power | Netflix
                                </p>
                            </div>

                            <div class="w-full">
                                <div class="   flex items-center justify-start">
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
                        <div class="flex flex-wrap justify-between md:flex-nowrap gap-2 items-center">
                            <div class="w-full md:w-2/3">
                                <h4 class="text-sm">
                                    Pay Now
                                </h4>
                                <p class="text-base">
                                    <span class="currency">
                                        ₦
                                    </span>
                                    <span>0.00</span>
                                    <span class="text-sm font-300">per night</span>
                                </p>
                            </div>

                            <div class="w-full md:w-1/3 md:flex justify-end items-center">
                                <a href="javascript:void(0)"
                                    class="bg-red-700 text-white py-1 px-3 rounded-md md:text-center">
                                    Reserve
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" border border-gray-200 shadow shadow-gray-300 rounded-md py-2 bg-white">
                    <div class="w-full ">
                        <img class="h-full rounded-b-md object-contain" src="{{ asset('image/imgdefault.png') }}"
                            alt="lorem ipsum">
                    </div>
                    <div class="px-2 py-2 ">
                        <div class="flex flex-col gap-1 w-full items-center ">

                            <div class="w-full">
                                <h4 class="text-base">Echo Hotel Lagos</h4>
                                <p class="flex gap-1 text-sm font-[400]">
                                    Wifi | 24/7 Power | Netflix
                                </p>
                            </div>

                            <div class="w-full">
                                <div class="   flex items-center justify-start">
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
                        <div class="flex flex-wrap justify-between md:flex-nowrap gap-2 items-center">
                            <div class="w-full md:w-2/3">
                                <h4 class="text-sm">
                                    Pay Now
                                </h4>
                                <p class="text-base">
                                    <span class="currency">
                                        ₦
                                    </span>
                                    <span>0.00</span>
                                    <span class="text-sm font-300">per night</span>
                                </p>
                            </div>

                            <div class="w-full md:w-1/3 md:flex justify-end items-center">
                                <a href="javascript:void(0)"
                                    class="bg-red-700 text-white py-1 px-3 rounded-md md:text-center">
                                    Reserve
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class=" my-3  w-[85%] md:w-[80%] mx-auto">
        <div>
            <h2 class="mb-3 font-bold text-[18px] md:text-[22.5px] uppercase">Top Event of the week</h2>

            {{-- Popular Places Flex --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-2 md:gap-3">
                <div class=" border border-gray-200 shadow shadow-gray-300 rounded-md py-2 bg-white">
                    <div class="w-full ">
                        <img class="h-full rounded-b-md object-contain" src="{{ asset('image/imgdefault.png') }}"
                            alt="lorem ipsum">
                    </div>
                    <div class="px-2 py-2 ">
                        <div class="flex flex-row gap-1 w-full items-center ">

                            <div class="w-[80%]">
                                <h4 class="text-base font-[800]">900Ticket Grand Reveal </h4>

                            </div>

                            <div class="w-[20%] bg-red-700 rounded-full flex items-center justify-center h-[70%] p-2">
                                <a href="javascript:void(0)">
                                    <img class=" w-[20px]" src="{{ asset('image/icons/clipboard.svg') }}"
                                        alt="lorem ipsum">
                                </a>
                            </div>

                        </div>
                        <div class="text-sm">
                            <p class="flex gap-1 font-thin items-center">
                                <img class="w-[15px]" src="{{ asset('image/date.svg') }}" alt="lorem ipsum">
                                <span>Dec 06 2025</span>
                            </p>
                            <p class="flex gap-1 font-thin items-center">
                                <img class="w-[15px]" src="{{ asset('image/clock.svg') }}" alt="lorem ipsum">
                                <span>09:00PM |</span>WAT
                            </p>
                            <p class="flex gap-1 font-thin items-center">
                                <img class="w-[15px]" src="{{ asset('image/location.svg') }}" alt="lorem ipsum">
                                <span>36 o2 arena street, Ikeja, lagos state.</span>
                            </p>
                        </div>
                    </div>
                    <div class="px-2 py-1">
                        <div class="flex flex-wrap justify-between md:flex-nowrap gap-2 items-center">
                            <div class="w-[55%]">
                                <h4 class="text-sm">
                                    Ticket Fee
                                </h4>
                                <p class="text-base">
                                    <span class="currency">
                                        ₦
                                    </span>
                                    <span>0.00</span>
                                </p>
                            </div>

                            <div class="w-[45%] text-sm md:flex justify-end items-center">
                                <a href="{{route('event.metadata')}}"
                                    class="bg-red-700 text-white py-1 px-3 rounded-md md:text-center">
                                    Get Ticket
                                    <i class="fa-solid fa-arrow-right text-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" border border-gray-200 shadow shadow-gray-300 rounded-md py-2 bg-white">
                    <div class="w-full ">
                        <img class="h-full rounded-b-md object-contain" src="{{ asset('image/imgdefault.png') }}"
                            alt="lorem ipsum">
                    </div>
                    <div class="px-2 py-2 ">
                        <div class="flex flex-row gap-1 w-full items-center ">

                            <div class="w-[80%]">
                                <h4 class="text-base font-[800]">900Ticket Grand Reveal </h4>

                            </div>

                            <div class="w-[20%] bg-red-700 rounded-full flex items-center justify-center h-[70%] p-2">
                                <a href="javascript:void(0)">
                                    <img class=" w-[20px]" src="{{ asset('image/icons/clipboard.svg') }}"
                                        alt="lorem ipsum">
                                </a>
                            </div>

                        </div>
                        <div class="text-sm">
                            <p class="flex gap-1 font-thin items-center">
                                <img class="w-[15px]" src="{{ asset('image/date.svg') }}" alt="lorem ipsum">
                                <span>Dec 06 2025</span>
                            </p>
                            <p class="flex gap-1 font-thin items-center">
                                <img class="w-[15px]" src="{{ asset('image/clock.svg') }}" alt="lorem ipsum">
                                <span>09:00PM |</span>WAT
                            </p>
                            <p class="flex gap-1 font-thin items-center">
                                <img class="w-[15px]" src="{{ asset('image/location.svg') }}" alt="lorem ipsum">
                                <span>36 o2 arena street, Ikeja, lagos state.</span>
                            </p>
                        </div>
                    </div>
                    <div class="px-2 py-1">
                        <div class="flex flex-wrap justify-between md:flex-nowrap gap-2 items-center">
                            <div class="w-[55%]">
                                <h4 class="text-sm">
                                    Ticket Fee
                                </h4>
                                <p class="text-base">
                                    <span class="currency">
                                        ₦
                                    </span>
                                    <span>0.00</span>
                                </p>
                            </div>

                            <div class="w-[45%] text-sm md:flex justify-end items-center">
                                <a href="{{route('event.metadata')}}"
                                    class="bg-red-700 text-white py-1 px-3 rounded-md md:text-center">
                                    Get Ticket
                                    <i class="fa-solid fa-arrow-right text-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" border border-gray-200 shadow shadow-gray-300 rounded-md py-2 bg-white">
                    <div class="w-full ">
                        <img class="h-full rounded-b-md object-contain" src="{{ asset('image/imgdefault.png') }}"
                            alt="lorem ipsum">
                    </div>
                    <div class="px-2 py-2 ">
                        <div class="flex flex-row gap-1 w-full items-center ">

                            <div class="w-[80%]">
                                <h4 class="text-base font-[800]">900Ticket Grand Reveal </h4>

                            </div>

                            <div class="w-[20%] bg-red-700 rounded-full flex items-center justify-center h-[70%] p-2">
                                <a href="javascript:void(0)">
                                    <img class=" w-[20px]" src="{{ asset('image/icons/clipboard.svg') }}"
                                        alt="lorem ipsum">
                                </a>
                            </div>

                        </div>
                        <div class="text-sm">
                            <p class="flex gap-1 font-thin items-center">
                                <img class="w-[15px]" src="{{ asset('image/date.svg') }}" alt="lorem ipsum">
                                <span>Dec 06 2025</span>
                            </p>
                            <p class="flex gap-1 font-thin items-center">
                                <img class="w-[15px]" src="{{ asset('image/clock.svg') }}" alt="lorem ipsum">
                                <span>09:00PM |</span>WAT
                            </p>
                            <p class="flex gap-1 font-thin items-center">
                                <img class="w-[15px]" src="{{ asset('image/location.svg') }}" alt="lorem ipsum">
                                <span>36 o2 arena street, Ikeja, lagos state.</span>
                            </p>
                        </div>
                    </div>
                    <div class="px-2 py-1">
                        <div class="flex flex-wrap justify-between md:flex-nowrap gap-2 items-center">
                            <div class="w-[55%]">
                                <h4 class="text-sm">
                                    Ticket Fee
                                </h4>
                                <p class="text-base">
                                    <span class="currency">
                                        ₦
                                    </span>
                                    <span>0.00</span>
                                </p>
                            </div>

                            <div class="w-[45%] text-sm md:flex justify-end items-center">
                                <a href="{{route('event.metadata')}}"
                                    class="bg-red-700 text-white py-1 px-3 rounded-md md:text-center">
                                    Get Ticket
                                    <i class="fa-solid fa-arrow-right text-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold leading-tight text-gray-900 capitalize">The journey
                    of a thousand miles begins with a footstep</h2>
                <p class=" font-light text-gray-500 md:text-lg">Let 900ticket help with your journey</p>
                <p class=" mt-2 hidden  md:flex gap-1 text-sm text-center justify-center font-[300] text-gray-400 ">
                    <span>Book Flight</span>
                    <span>| Make Hotel Reservation |</span>
                    <span> Pay For Party Ticket |</span>
                    <span>Find Shortlet Services</span>
                </p>
                <div class="mt-6">
                    <a href="#"
                        class="text-white  bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">LOGIN/CREATE
                        ACCOUNT</a>
                </div>
            </div>
        </div>
    </section>

    <section class=" my-3  w-[85%] md:w-[80%] mx-auto">
        <div>
            <h2 class="mb-3 font-bold text-[18px] md:text-[22.5px] uppercase">Top stories of the week</h2>

            {{-- Popular Places Flex --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-2 md:gap-3">
                <div class=" border border-gray-200 shadow shadow-gray-300 rounded-md py-2 bg-white">
                    <div class=" ">
                        <a href="#">
                            <img class="rounded-b-md" src="https://flowbite.com/docs/images/blog/image-1.jpg"
                                alt="">
                        </a>
                        <div class="py-2 px-5">
                            <p class="flex gap-1 font-thin items-center mb-2 text-sm">
                                <img class="w-[15px]" src="{{ asset('image/date.svg') }}" alt="lorem ipsum">
                                <span>Dec 06 2025</span>
                            </p>

                            <a href="#">
                                <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">Noteworthy technology
                                    acquisitions 2021</h5>
                            </a>
                            <p class="font-normal text-gray-700 mb-3 truncate">Here are the biggest enterprise technology
                                acquisitions of 2021 so far, in reverse chronological order.</p>
                            <a class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center"
                                href="#">
                                Read more
                            </a>
                        </div>
                    </div>
                    <div class="flex px-5 py-2 justify-between border-t border-gray-400 items-center">
                        <img class="w-[70px]" src="{{ asset('image/logo_alt.svg') }}" alt="lorem ipsum">
                        <p class="text-sm font-thin text-gray-700">
                            Travel Blog
                        </p>
                    </div>
                </div>
                <div class=" border border-gray-200 shadow shadow-gray-300 rounded-md py-2 bg-white">
                    <div class=" ">
                        <a href="#">
                            <img class="rounded-b-md" src="https://flowbite.com/docs/images/blog/image-1.jpg"
                                alt="">
                        </a>
                        <div class="py-2 px-5">
                            <p class="flex gap-1 font-thin items-center mb-2 text-sm">
                                <img class="w-[15px]" src="{{ asset('image/date.svg') }}" alt="lorem ipsum">
                                <span>Dec 06 2025</span>
                            </p>

                            <a href="#">
                                <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">Noteworthy technology
                                    acquisitions 2021</h5>
                            </a>
                            <p class="font-normal text-gray-700 mb-3 truncate">Here are the biggest enterprise technology
                                acquisitions of 2021 so far, in reverse chronological order.</p>
                            <a class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center"
                                href="#">
                                Read more
                            </a>
                        </div>
                    </div>
                    <div class="flex px-5 py-2 justify-between border-t border-gray-400 items-center">
                        <img class="w-[70px]" src="{{ asset('image/logo_alt.svg') }}" alt="lorem ipsum">
                        <p class="text-sm font-thin text-gray-700">
                            Travel Blog
                        </p>
                    </div>
                </div>
                <div class=" border border-gray-200 shadow shadow-gray-300 rounded-md py-2 bg-white">
                    <div class=" ">
                        <a href="#">
                            <img class="rounded-b-md" src="https://flowbite.com/docs/images/blog/image-1.jpg"
                                alt="">
                        </a>
                        <div class="py-2 px-5">
                            <p class="flex gap-1 font-thin items-center mb-2 text-sm">
                                <img class="w-[15px]" src="{{ asset('image/date.svg') }}" alt="lorem ipsum">
                                <span>Dec 06 2025</span>
                            </p>

                            <a href="#">
                                <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">Noteworthy technology
                                    acquisitions 2021</h5>
                            </a>
                            <p class="font-normal text-gray-700 mb-3 truncate">Here are the biggest enterprise technology
                                acquisitions of 2021 so far, in reverse chronological order.</p>
                            <a class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center"
                                href="#">
                                Read more
                            </a>
                        </div>
                    </div>
                    <div class="flex px-5 py-2 justify-between border-t border-gray-400 items-center">
                        <img class="w-[70px]" src="{{ asset('image/logo_alt.svg') }}" alt="lorem ipsum">
                        <p class="text-sm font-thin text-gray-700">
                            Travel Blog
                        </p>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <section class=" my-3  w-[85%] md:w-[80%] mx-auto">
        <div class="flex flex-col gap-1">
            <div x-data="{ chevDownOne: false }">
            <div class="flex justify-between">
                <h3 class="text-md md:text-lg  font-[800] uppercase mb-2">Flights to top cities from Nigeria</h3>
                <i @click="chevDownOne = !chevDownOne" :class="{ 'rotate-90': chevDownOne }"
                    class="fa-solid fa-chevron-down text-black transition-transform duration-300"></i>
            </div>
            <div x-transition x-show="chevDownOne" @click.outside="chevDownOne = false ">
                <ul class=" flex gap-2 md:gap-x-3 flex-wrap justify-start">
                    <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Lagos</a></li>
                    <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Enugu</a></li>
                    <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Port Harcourt</a></li>
                    <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Abuja</a></li>
                    <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Uyo</a></li>
                    <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Kano</a></li>
                    <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Owerri</a></li>
                    <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Katsina</a></li>
                    <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Sokoto</a></li>
                    <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Benin City</a></li>

                </ul>
            </div>
        </div>

        <div x-data="{ chevDownTwo: false }">
            <div class="flex justify-between">
                <h3 class="text-md md:text-lg font-[800] uppercase mb-2">Top International Destination</h3>
                <i @click="chevDownTwo = !chevDownTwo" :class="{ 'rotate-90': chevDownTwo }"
                    class="fa-solid fa-chevron-down text-black transition-transform duration-300"></i>
            </div>
            <div x-transition x-show="chevDownTwo" @click.outside="chevDownTwo = false ">
                <ul class=" flex gap-2 md:gap-x-3 flex-wrap justify-start">
                    <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Lagos</a></li>
                    <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Enugu</a></li>
                    <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Port Harcourt</a></li>
                    <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Abuja</a></li>
                    <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Uyo</a></li>
                    <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Kano</a></li>
                    <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Owerri</a></li>
                    <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Katsina</a></li>
                    <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Sokoto</a></li>
                    <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Benin City</a></li>

                </ul>
            </div>
        </div>
        <div x-data="{ chevDownThree: false }">
            <div class="flex justify-between">
                <h3 class="text-md md:text-lg  font-[800] uppercase mb-2">Flight to top countries</h3>
                <i @click="chevDownThree = !chevDownThree" :class="{ 'rotate-90': chevDownThree }"
                    class="fa-solid fa-chevron-down text-black transition-transform duration-300"></i>
            </div>
            <div x-transition x-show="chevDownThree" @click.outside="chevDownThree = false ">
                <ul class=" flex gap-2 md:gap-x-3 flex-wrap justify-start">
                    <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Lagos</a></li>
                    <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Enugu</a></li>
                    <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Port Harcourt</a></li>
                    <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Abuja</a></li>
                    <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Uyo</a></li>
                    <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Kano</a></li>
                    <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Owerri</a></li>
                    <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Katsina</a></li>
                    <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Sokoto</a></li>
                    <li class="h-fit w-fit"><a href="javascript:void(0)">Flights to Benin City</a></li>

                </ul>
            </div>
        </div>
        </div>

    </section>

    <section class="bg-red-700">
        <div class="py-4 md:py-8">
      <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-white md:text-5xl text-3xl font-bold mb-6">Join Our Exclusive Newsletter</h2>
        <p class="md:text-xl text-sm text-gray-300">Be part of our elite community. Get VIP access to curated content, early product releases, and special promotions.</p>

        <div class="bg-white shadow-lg rounded-lg p-8 mt-14 flex flex-col md:flex-row items-center justify-center">
          <input type="email" placeholder="Enter your email" class="w-full md:w-96 bg-transparent border-b-2 border-red-700 py-3 px-4 text-[#2e0249] text-base focus:outline-none placeholder-red-700 placeholder-opacity-70" />
          <button class="max-md:mt-6 md:ml-4 bg-red-700 hover:bg-red-500 text-white font-medium py-3 px-6 rounded hover:shadow-md hover:transform hover:scale-105 focus:outline-none">
            Get Started
          </button>
        </div>
      </div>
    </div>
    </section>
    </main>


@endsection
