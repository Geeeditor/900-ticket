@extends('layouts.app')
@section('title', 'Home')

@section('hero')

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
                    <img class="h-full w-auto object-contain" src="{{ asset('image/banner/banner1.webp') }}" alt="">
                </li>
                <li class="banner-item" style="background: #f5cac3;">
                    <img class="h-full w-auto object-contain" src="{{ asset('image/banner/banner3.webp') }}" alt="">
                </li>
                <li class="banner-item" style="background: #84a59d;">
                    <img class="h-full w-auto object-contain" src="{{ asset('image/banner/banner4.webp') }}" alt="">
                </li>
                <li class="banner-item" style="background: #f28482;">
                    <img class="h-full w-auto object-contain" src="{{ asset('image/banner/banner5.webp') }}" alt="">
                </li>
                <li class="banner-item" style="background: #f6bd60;">
                    <img class="h-full w-auto object-contain" src="{{ asset('image/banner/banner6.webp') }}" alt="">
                </li>
                <li class="banner-item" style="background: #f7ede2;">
                    <img class="h-full w-auto object-contain" src="{{ asset('image/banner/banner7.webp') }}" alt="">
                </li>
                <li class="banner-item" style="background: #f5cac3;">
                    <img class="h-full w-auto object-contain" src="{{ asset('image/banner/banner8.webp') }}" alt="">
                </li>
                <li class="banner-item" style="background: #84a59d;">
                    <img class="h-full w-auto object-contain" src="{{ asset('image/banner/banner9.webp') }}" alt="">
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

        <section class="mx-auto my-3 block w-[85%] md:hidden md:w-[80%]">
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

        <section class="mx-auto my-3 w-[85%] md:w-[80%]">
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

        <section class="mx-auto my-3 w-[85%] md:w-[80%]">
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

        <section class="mx-auto my-3 w-[85%] md:w-[80%]">
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
                                <img class="h-full rounded-b-md object-contain" src="{{ asset('image/imgdefault.png') }}"
                                    alt="lorem ipsum">
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
                        Nothing to show
                    @endforelse



                </div>

            </div>
        </section>

        <section class="bg-white">
            @guest

                <div class="mx-auto max-w-screen-xl px-4 py-8 sm:py-16 lg:px-6">
                    <div class="mx-auto max-w-screen-sm text-center">
                        <h2 class="mb-4 text-4xl font-extrabold capitalize leading-tight tracking-tight text-gray-900">The
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
                            <a href="{{ route('index.login') }}"
                                class="mb-2 mr-2 rounded-lg bg-red-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-red-800 focus:ring-4 focus:ring-red-300">LOGIN/CREATE
                                ACCOUNT</a>
                        </div>
                    </div>
                </div>

            @endguest

            @auth

                <div class="mx-auto max-w-screen-xl px-4 py-8 sm:py-16 lg:px-6">
                    <div class="mx-auto max-w-screen-sm text-center">
                        <h2 class="mb-4 text-4xl font-extrabold capitalize leading-tight tracking-tight text-gray-900">The
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

            @endauth
        </section>


        <section class="mx-auto my-3 w-[85%] md:w-[80%]">
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

        <section class="mx-auto my-3 w-[85%] md:w-[80%]">
            <div class="flex flex-col gap-1">
                <div x-data="{ chevDownOne: false }">
                    <div class="flex justify-between">
                        <h3 class="text-md mb-2 font-[800] uppercase md:text-lg">Flights to top cities from Nigeria</h3>
                        <i @click="chevDownOne = !chevDownOne" :class="{ 'rotate-90': chevDownOne }"
                            class="fa-solid fa-chevron-down text-black transition-transform duration-300"></i>
                    </div>
                    <div x-transition x-show="chevDownOne" @click.outside="chevDownOne = false ">
                        <ul class="flex flex-wrap justify-start gap-2 md:gap-x-3">
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
                        <h3 class="text-md mb-2 font-[800] uppercase md:text-lg">Top International Destination</h3>
                        <i @click="chevDownTwo = !chevDownTwo" :class="{ 'rotate-90': chevDownTwo }"
                            class="fa-solid fa-chevron-down text-black transition-transform duration-300"></i>
                    </div>
                    <div x-transition x-show="chevDownTwo" @click.outside="chevDownTwo = false ">
                        <ul class="flex flex-wrap justify-start gap-2 md:gap-x-3">
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
                        <h3 class="text-md mb-2 font-[800] uppercase md:text-lg">Flight to top countries</h3>
                        <i @click="chevDownThree = !chevDownThree" :class="{ 'rotate-90': chevDownThree }"
                            class="fa-solid fa-chevron-down text-black transition-transform duration-300"></i>
                    </div>
                    <div x-transition x-show="chevDownThree" @click.outside="chevDownThree = false ">
                        <ul class="flex flex-wrap justify-start gap-2 md:gap-x-3">
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
                <div class="mx-auto max-w-6xl text-center">
                    <h2 class="mb-6 text-3xl font-bold text-white md:text-5xl">Join Our Exclusive Newsletter</h2>
                    <p class="text-sm text-gray-300 md:text-xl">Be part of our elite community. Get VIP access to curated
                        content, early product releases, and special promotions.</p>

                    <div
                        class="mt-14 flex flex-col items-center justify-center rounded-lg bg-white p-8 shadow-lg md:flex-row">
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
