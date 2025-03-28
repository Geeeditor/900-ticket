@extends('layouts.app')

@section('title', 'Find Trendy Events')

@section('hero')
    <div class="w-full   relative">
        {{-- hero content --}}

        <div>


            <div class="relative ">
                {{-- hero bg --}}
                {{-- <video autoplay muted loop
                            >
                            <source src="{{ asset('image/video.webm') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video> --}}

                <img class="hero-bg absolute top-0 left-0 w-full h-[62.5vh] md:h-[70vh] object-cover"
                    src="{{ asset('image/eventhero.png') }}" alt="lorem ipsum">


                    {{-- hero content --}}
                <div class="relative z-10 flex items-center flex-col gap-10 justify-start    top-[22.5vh] w-full">
                    <div class="flex  items-center relative w-[70%] group">
                        <svg class="absolute left-4 fill-black w-4 h-4" aria-hidden="true" viewBox="0 0 24 24">
                            <g>
                                <path
                                    d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                                </path>
                            </g>
                        </svg>
                        <input placeholder="Look up the trendiest event..." type="search"
                            class="h-10 line-height[28px] pl-10 w-full border-2 border-transparent rounded-lg bg-[#ffffff] text-[#04030f] shadow shadow-gray-400 transition duration-300 ease-in-out focus:outline-none focus:border-red-200" />
                    </div>

                    <div class="flex justify-center mx-auto flex-wrap gap-[1.5rem] md:gap-[2rem] w-[70%] ">
                        <div
                            class="bg-white shadow shadow-gray-300 rounded-md border border-gray-200 px-7 md:px-[2rem] flex justify-center items-center  py-4 hover:scale-[1.1] ease-in-out hover:bg-slate-100 hover:shadow-md">
                            <a class="flex-col flex items-center justify-center" href="javascript:void(0)">
                                <img class="w-[35px]" src="{{ asset('image/icons/flight-alt.svg') }}" alt="lorem ipsum">
                                <span class="inline-block text-center text-sm font-[700]">
                                    Flight
                                </span>
                            </a>
                        </div>
                        <div
                            class="bg-white shadow shadow-gray-300 rounded-md px-7 border border-gray-200 md:px-[2rem] flex justify-center items-center  py-5 hover:scale-[1.1] ease-in-out hover:bg-slate-100 hover:shadow-md">
                            <a class="flex-col flex items-center justify-center" href="javascript:void(0)">
                                <img class="w-[35px]" src="{{ asset('image/icons/hotel-alt.svg') }}" alt="lorem ipsum">
                                <span class="inline-block text-center text-sm font-[700]">
                                    Hotel
                                </span>
                            </a>
                        </div>
                        <div
                            class="bg-white shadow shadow-gray-300 rounded-md px-6 md:px-[2rem] flex justify-center border border-gray-200 items-center  py-4 hover:scale-[1.1] ease-in-out hover:bg-slate-100 hover:shadow-md">
                            <a class="flex-col flex items-center justify-center" href="javascript:void(0)">
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
                            class="bg-white rounded-md border border-gray-200 px-5 md:px-[2rem] shadow shadow-gray-300 flex justify-center items-center  py-4 hover:scale-[1.1] ease-in-out hover:bg-slate-100 hover:shadow-md">
                            <a class="flex-col flex items-center justify-center" href="javascript:void(0)">
                                <img class="w-[35px]" src="{{ asset('image/icons/shortlet-alt.svg') }}" alt="lorem ipsum">
                                <span class="inline-block text-center text-sm font-[700]">
                                    Shortlet
                                </span>
                            </a>
                        </div>

                    </div>





                </div>
            </div>
        </div>


    </div>
@endsection

@section('content')
        <main class="mt-[235px]">
       <section class=" my-3  w-[85%] md:w-[80%] mx-auto">
        <div>
            <h2 class="mb-3 font-bold text-[18px] md:text-[22.5px] uppercase">Featured Events</h2>

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
                                <a href="j{{route('event.metadata')}}"
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

       <section class=" my-3  w-[85%] md:w-[80%] mx-auto">
        <div>
            <h2 class="mb-3 font-bold text-[18px] md:text-[22.5px] uppercase">All Events</h2>

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

    <section class="bg-red-700">
        <div class="py-4 md:py-8">
      <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-white md:text-5xl text-3xl font-bold mb-6">Join Our Exclusive Newsletter</h2>
        <p class="md:text-xl text-sm text-gray-300">Get your favourite artist ticket sales notifications from the comfort of your inbox. </p>

        <div class="bg-white shadow-lg rounded-lg p-8 mt-14 flex flex-col md:flex-row items-center justify-center">
          <input type="email" placeholder="Enter your email" class="w-full md:w-96 bg-transparent border-b-2 border-red-700 py-3 px-4 text-[#2e0249] text-base focus:outline-none placeholder-red-700 placeholder-opacity-70" />
          <button class="max-md:mt-6 md:ml-4 bg-red-700 hover:bg-red-500 text-white font-medium py-3 px-6 rounded hover:shadow-md hover:transform hover:scale-105 focus:outline-none">
            Join Now!
          </button>
        </div>
      </div>
    </div>
    </section></main>

@endsection
