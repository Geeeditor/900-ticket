@extends('layouts.app')
@section('title', 'Event Meta Data')
@section('style')


@endsection



@section('hero')
<div class="relative top-[0] flex h-[14vh] w-full justify-center bg-black md:h-[20vh] ">
    <img class="h-full w-full object-cover " src="{{ asset('image/eventhero.png') }}" alt="lorem ipsum">
    {{-- hero content --}}
</div>

{{-- @if (session('success')){

} @elseif('error') {

} --}}


@endsection

@section('content')
<main x-data="{ checkoutModal: false }">
    <div class="mx-auto my-3 w-[85%] md:w-[80%]">
        <a class="text-black" href="{{ url()->previous() }}">
            <i class="fa-solid fa-arrow-left-long">
                Back
            </i>
        </a>
    </div>



    <section class="mx-auto my-3 w-[85%] md:w-[80%]">

        <div class="flex flex-col gap-2 md:flex-row md:gap-3">
            <div class="w-full md:w-1/3">
                <div class="flex flex-col gap-1">
                    <div class="relative h-fit rounded-md bg-white">
                        @if ($event->hero_image)
                        <img class="h-full object-cover"
                            src="{{ asset('/image/events/' . basename($event->hero_image)) }}" alt="lorem ipsum">
                        @else
                        <img class="h-full object-cover" src="{{ asset('image/imgdefault.png') }}" alt="lorem ipsum">
                        @endif

                        <a href="javascript:void(0)"
                            class="absolute bottom-0 right-1 flex w-[50px] items-center justify-center rounded-full bg-red-700 px-1 py-3 shadow-sm shadow-gray-600 hover:bg-red-800 focus:bg-red-600">
                            <img class="h-[15px] object-contain" src="{{ asset('image/icons/clipboard.svg') }}"
                                alt="lorem ipsum">
                        </a>
                    </div>

                    <button
                        class="hidden w-full rounded-md bg-red-700 py-3 text-center capitalize text-white hover:bg-red-800 focus:bg-red-600 md:block"
                        @click="checkoutModal = true">Add
                        to cart</button>
                </div>
            </div>

            <div class="w-full rounded-md bg-white p-2 shadow shadow-gray-300 md:w-2/3">
                <div class="flex flex-col gap-2">
                    <h2 class="border-b border-gray-300 text-lg font-[800] uppercase tracking-wide md:text-2xl">
                        {{ $event->title }}
                    </h2>

                    <div class="flex flex-col gap-1 border-b border-gray-300 py-2">
                        <p class="flex items-center gap-2 text-sm font-thin">
                            <img src="{{ asset('image/date.svg') }}" alt="lorem ipsum">
                            <span>{{ \Carbon\Carbon::parse($event->date)->format('l, F j, Y') }}</span>
                        </p>
                        <p class="flex items-center gap-2 text-sm font-thin">
                            <img src="{{ asset('image/clock.svg') }}" alt="lorem ipsum">
                            <span> <span>{{ \Carbon\Carbon::parse($event->time)->format('H:iA') }}</span> WAT</span>
                        </p>




                        <p class="flex items-center gap-2 text-sm font-thin">
                            <img src="{{ asset('image/location.svg') }}" alt="lorem ipsum">
                            <span class="capitalize">{{ $event->location }}</span>
                        </p>
                        <div x-data="{ otherPrices: false }">
                            <div class="flex justify-between gap-2 md:w-fit md:gap-3">
                                <div class="flex items-center gap-2 text-sm font-thin">
                                    <img class="w-[20px]" src="{{ asset('image/price-tag.svg') }}" alt="lorem ipsum">
                                    <span class="capitalize">N
                                        <span class="regular-price">

                                            @if ($event->regular_ticket_price == null)
                                            <span>0.00</span>
                                            @else
                                            <span>
                                                {{ $event->regular_ticket_price }}
                                            </span>
                                            @endif
                                        </span>
                                    </span>
                                    <span class="text-[7px] font-[200]">Regular</span>
                                </div>

                                <i @click="otherPrices = !otherPrices" :class='{ "rotate-90": otherPrices }'
                                    class="fa-solid fa-chevron-down text-black"></i>
                            </div>
                            <div x-transition x-show="otherPrices" class="mt-1 flex flex-col gap-1">
                                <div class="flex items-center gap-2 text-sm font-thin">
                                    <img class="w-[20px]" src="{{ asset('image/price-tag.svg') }}" alt="lorem ipsum">
                                    <span class="capitalize">N
                                        <span class="vip-price">
                                            @if ($event->vip_ticket_price == null)
                                            <span>0.00</span>
                                            @else
                                            <span>
                                                {{ $event->vip_ticket_price }}
                                            </span>
                                            @endif

                                        </span>
                                    </span>
                                    <span class="text-[7px] font-[200]">VIP</span>
                                </div>
                                <div class="flex items-center gap-2 text-sm font-thin">
                                    <img class="w-[20px]" src="{{ asset('image/price-tag.svg') }}" alt="lorem ipsum">
                                    <span class="capitalize">N
                                        <span class="vvip-price">
                                            @if ($event->vvip_ticket_price == null)
                                            <span>0.00</span>
                                            @else
                                            <span>
                                                {{ $event->vvip_ticket_price }}
                                            </span>
                                            @endif
                                        </span>
                                    </span>
                                    <span class="text-[7px] font-[200]">VVIP</span>
                                </div>
                            </div>
                        </div>
                        <p class="flex items-center gap-2 text-sm font-thin">
                            <img src="{{ asset('image/map-pin.svg') }}" alt="lorem ipsum">
                            <a href="javascript:void(0)" class="lowercase">{{ $event->map_link }}</a>
                        </p>
                    </div>
                    <div class="">
                        <h2 class="flex items-center gap-2 text-base font-[700] tracking-wide">Event Description
                        </h2>
                        <p class="my-1 text-sm font-thin">
                            {!! nl2br(e($event->description)) !!}
                        </p>
                        <button @click="checkoutModal = true"
                            class="my-1 block w-full rounded-md bg-red-700 py-3 text-center capitalize text-white hover:bg-red-800 focus:bg-red-600 md:hidden">Add
                            to cart</button>
                    </div>
                </div>
            </div>


        </div>
    </section>

    {{-- - Get Regular/VIP/VVIP Ticket Price
    - Display Ticket Price
    - Create Quote --}}

    <section x-transition:enter="transition-transform duration-300 ease-out"
        x-transition:enter-start="transform translate-y-full" x-transition:enter-end="transform translate-y-0"
        x-transition:leave="transition-transform duration-300 ease-in"
        x-transition:leave-start="transform translate-y-0" x-transition:leave-end="transform translate-y-full"
        x-show="checkoutModal" @click.outside="checkoutModal = false"
        class="fixed top-0 z-[999] flex h-full w-full justify-center overflow-y-auto py-5 md:overflow-y-hidden">
        <div class="relative mx-auto w-full md:mt-[132px] md:w-[100%]">
            <div class="rounded-md bg-white px-[1rem] py-4 shadow-md md:px-8" action=""
                method="post">
                @csrf
                <div class="my-4 w-full">
                    <h3 class="text-center text-[20px] font-[700] md:text-left md:text-[25px]"
                        style="text-transform: uppercase  !important">Reserve your ticket now</h3>
                </div>

                {{-- Ticket Title --}}
                <input type="text" name="event_reference" value="{{ trim($event->event_reference) }}" hidden>

                {{-- reservation-container --}}
                <div class="flex flex-col gap-2 md:flex-row md:gap-4">
                    {{-- reservation input section --}}
                    <div class="flex w-full flex-col gap-1 md:w-1/2 md:gap-4">
                        {{-- reservation-row --}}
                        <div id="regularContainer"
                            class="flex items-center rounded-lg border border-gray-200 bg-gray-100">
                            <h3 class="w-1/3 px-4 py-2 text-base font-[700] text-[#1F242F] md:w-2/3 md:text-2xl">
                                REGULAR
                            </h3>

                            {{-- reservation price input --}}
                            <div
                                class="flex w-2/3 flex-col items-end justify-center bg-white px-3 py-2 md:w-1/3 md:px-4 md:py-2">
                                <label for="quantity-input"
                                    class="mb-0 block font-mono text-base font-medium text-gray-900 md:mb-2 md:text-lg">
                                    <span>N</span> <span id="setRegularPrice">0.00</span>
                                </label>

                                <div
                                    class="counter-container relative flex h-[45px] max-w-[8rem] items-center md:h-[50px]">
                                    <button type="button" data-value="regularDecrement"
                                        class="decrement-button h-full rounded-s-lg border border-gray-300 bg-gray-100 p-2 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 md:p-3">
                                        <svg class="h-3 w-3 text-gray-900" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 1h16" />
                                        </svg>
                                    </button>

                                    <input type="number" name="regular_unit" readonly
                                        class="quantity-input block h-full w-full border-x-0 border-gray-300 bg-gray-50 py-2.5 text-center text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                                        placeholder="0" />

                                    <button type="button" data-value="regularIncrement"
                                        class="increment-button h-full rounded-e-lg border border-gray-300 bg-gray-100 p-2 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 md:p-3">
                                        <svg class="h-3 w-3 text-gray-900" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M9 1v16M1 9h16" />
                                        </svg>
                                    </button>
                                </div>

                            </div>

                        </div>

                        {{-- reservation-row --}}
                        <div id="vipContainer" class="flex items-center rounded-lg border border-gray-200 bg-gray-100">
                            <h3 class="w-1/3 px-4 py-2 text-base font-[700] text-[#1F242F] md:w-2/3 md:text-2xl">
                                VIP
                            </h3>

                            {{-- reservation price input --}}
                            <div
                                class="flex w-2/3 flex-col items-end justify-center bg-white px-3 py-2 md:w-1/3 md:px-4 md:py-2">
                                <label for="quantity-input"
                                    class="mb-0 block font-mono text-base font-medium text-gray-900 md:mb-2 md:text-lg">
                                    <span>N</span> <span id="setVipPrice">0.00</span>
                                </label>

                                <div
                                    class="counter-container relative flex h-[45px] max-w-[8rem] items-center md:h-[50px]">
                                    <button type="button" data-value="vipDecrement"
                                        class="decrement-button h-full rounded-s-lg border border-gray-300 bg-gray-100 p-2 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 md:p-3">
                                        <svg class="h-3 w-3 text-gray-900" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 1h16" />
                                        </svg>
                                    </button>

                                    <input type="number" name="vip_unit" readonly
                                        class="quantity-input block h-full w-full border-x-0 border-gray-300 bg-gray-50 py-2.5 text-center text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                                        placeholder="0" />

                                    <button type="button" data-value="vipIncrement"
                                        class="increment-button h-full rounded-e-lg border border-gray-300 bg-gray-100 p-2 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 md:p-3">
                                        <svg class="h-3 w-3 text-gray-900" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M9 1v16M1 9h16" />
                                        </svg>
                                    </button>
                                </div>

                            </div>

                        </div>

                        {{-- reservation-row --}}
                        <div id="vvipContainer" class="flex items-center rounded-lg border border-gray-200 bg-gray-100">
                            <h3 class="w-1/3 px-4 py-2 text-base font-[700] text-[#1F242F] md:w-2/3 md:text-2xl">
                                VVIP
                            </h3>

                            {{-- reservation price input --}}
                            <div
                                class="flex w-2/3 flex-col items-end justify-center bg-white px-3 py-2 md:w-1/3 md:px-4 md:py-2">
                                <label for="quantity-input"
                                    class="mb-0 block font-mono text-base font-medium text-gray-900 md:mb-2 md:text-lg">
                                    <span>N</span> <span id="setVvipPrice">0.00</span>
                                </label>

                                <div
                                    class="counter-container relative flex h-[45px] max-w-[8rem] items-center md:h-[50px]">
                                    <button type="button" data-value="vvipDecrement"
                                        class="decrement-button h-full rounded-s-lg border border-gray-300 bg-gray-100 p-2 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 md:p-3">
                                        <svg class="h-3 w-3 text-gray-900" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 1h16" />
                                        </svg>
                                    </button>

                                    <input type="number" name="vvip_unit" readonly
                                        class="quantity-input block h-full w-full border-x-0 border-gray-300 bg-gray-50 py-2.5 text-center text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                                        placeholder="0" />

                                    <button type="button" data-value="vvipIncrement"
                                        class="increment-button h-full rounded-e-lg border border-gray-300 bg-gray-100 p-2 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 md:p-3">
                                        <svg class="h-3 w-3 text-gray-900" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M9 1v16M1 9h16" />
                                        </svg>
                                    </button>
                                </div>

                            </div>

                        </div>


                    </div>

                    {{-- reservaton order summar div --}}
                    <div class="w-full md:w-1/2">
                        {{-- reservation order row --}}
                        <div class="flex flex-col gap-1 md:gap-4">
                            <div class="flex flex-col justify-between">
                                <div class="flex w-full flex-col items-start">
                                    {{-- manifest --}}
                                    <div class="flex w-full items-center justify-between gap-2">
                                        <div class="flex w-2/3 items-center gap-2">
                                            <h3 class="font-[700]">Regular</h3>
                                            <small class="text-[5px]">
                                                unit:
                                                <span class="text-[10px]">
                                                    <span id="regularTicketUnit">
                                                        0
                                                    </span>
                                                    x
                                                </span>
                                            </small>
                                        </div>
                                        <div clqss="w-1/3 text-right">
                                            <h5 id="regularTicketTotal" class="font-[700]">0.00</h5>
                                        </div>
                                    </div>
                                    {{-- manifest --}}
                                    <div class="flex w-full items-center justify-between gap-2">
                                        <div class="flex w-2/3 items-center gap-2">
                                            <h3 class="font-[700]">VIP</h3>
                                            <small class="text-[5px]">
                                                unit:
                                                <span class="text-[10px]">
                                                    <span id="vipTicketUnit">
                                                        0
                                                    </span>
                                                    x
                                                </span>
                                            </small>
                                        </div>
                                        <div clqss="w-1/3 text-right">
                                            <h5 id="vipTicketTotal" class="font-[700]">0.00</h5>
                                        </div>
                                    </div>
                                    {{-- manifest --}}
                                    <div class="flex w-full items-center justify-between gap-2">
                                        <div class="flex w-2/3 items-center gap-2">
                                            <h3 class="font-[700]">VVIP</h3>
                                            <small class="text-[5px]">
                                                unit:
                                                <span class="text-[10px]">

                                                    <span id="vvipTicketUnit">
                                                        0
                                                    </span>
                                                    x
                                                </span>
                                            </small>
                                        </div>
                                        <div clqss="w-1/3 text-right">
                                            <h5 id="vvipTicketTotal" class="font-[700]">0.00</h5>
                                        </div>
                                    </div>


                                </div>
                                <div class="w-full text-right">
                                    <small class="text-[60%] font-[300]">NGN</small>
                                </div>
                            </div>

                            <div class="flex justify-between">
                                <div class="flex w-2/3 flex-col items-start">
                                    <h3 class="font-[700]">Subtotal</h3>
                                </div>
                                <div class="w-1/3 text-right">
                                    <h5 class="font-[700]" id="subTotal">0.00</h5>
                                    <small class="text-[60%] font-[300]">NGN</small>
                                </div>
                            </div>

                            <div class="flex justify-between">
                                <div class="flex w-2/3 flex-col items-start">
                                    <h3 class="font-[700]">Fees</h3>
                                </div>
                                <div class="w-1/3 text-right">
                                    <h5 class="font-[700]" id="fees">2</h5>
                                    <small class="text-[60%] font-[300]">%</small>
                                </div>
                            </div>

                            <div class="flex justify-between">
                                <div class="flex w-2/3 flex-col items-start">
                                    <h3 class="font-[700]">Total Price</h3>
                                </div>
                                <div class="w-1/3 text-right">
                                    <h5 class="font-[700]" id="totalPayment">0.00</h5>
                                    <small class="text-[60%] font-[300]">NGN</small>
                                </div>
                            </div>




                        </div>
                        <a href="javascript:void(0)" @click="checkoutModal = false"
                            class="absolute right-0 top-0 -mt-2 flex cursor-pointer items-center gap-1 rounded-full border-t border-gray-400 bg-white px-3 py-4 text-[20px] font-[700] text-[#1F242F] hover:border-gray-500 md:-mt-5">

                            <i class="fa-solid fa-xmark text-lg text-red-700"></i>

                        </a>
                        {{-- reservation button --}}
                        <div class="flex justify-between">
                            <form method="POST" action="{{ route('event.addtocart') }}">
                                @csrf
                                <input type="text" name="event_reference" class=" hidden" value="{{ trim($event->event_reference) }}" readonly>
                                <input type="number" name="regular_unit" class="regular_unit hidden" id="regular_unit" value="0" readonly>
                                <input type="number" name="vip_unit" class="vip_unit hidden" id="vip_unit" value="0" hidden>
                                <input type="number" name="vvip_unit" class="vvip_unit hidden" id="vvip_unit" value="0" readonly>
                                 <button type="submit" class="ld-ext-right rounded-md bg-[#cc2121] px-4 py-2 text-white btn-animation" 
                                >

                                Add Item to Queue
                                <div class="ld ld-ring ld-spin"></div>

                                </button>
                            </form>

                           

                              <form method="POST" action="{{route('checkout.getOrder')}}">
                                @csrf
                                <input type="text" name="event_reference" value="{{ trim($event->event_reference) }}" hidden>
                                <input type="text" name="regular_unit" class="regular_unit" id="regular_unit" value="0" hidden>
                                <input type="text" name="vip_unit" class="vip_unit" id="vip_unit" value="0" hidden>
                                <input type="text" name="vvip_unit" class="vvip_unit" id="vvip_unit" value="0" hidden>
                                <button type="submit" class="btn-animation ld-ext-right rounded-md bg-[#cc2121] px-4 py-2 text-white ld-ext-right"
                                    >

                                    Pay Now
                                    <div class="ld ld-ring ld-spin"></div>

                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

          
        </div>

        <script>
            // Get price values
            let regularPrice = parseFloat($('.regular-price').text());
            let vipPrice = parseFloat($('.vip-price').text());
            let vvipPrice = parseFloat($('.vvip-price').text());
            let tax = parseFloat($('#fees').text());



            // console.log(tax);
            // Display price values
            $('.regular-price').text(numFormat(regularPrice));
            $('.vip-price').text(numFormat(vipPrice));
            $('.vvip-price').text(numFormat(vvipPrice));
            $('#setRegularPrice').text(numFormat(regularPrice));
            $('#setVipPrice').text(numFormat(vipPrice));
            $('#setVvipPrice').text(numFormat(vvipPrice));


            // Hide containers if prices are 0.00
            if (regularPrice === 0.00) {
                $('#regularContainer').hide();
            }
            if (vipPrice === 0.00) {
                $('#vipContainer').hide();
            }
            if (vvipPrice === 0.00) {
                $('#vvipContainer').hide();
            }


            const subTotalContent = document.getElementById('subTotal');
            const btnAnimation = document.querySelectorAll('.btn-animation');
            btnAnimation.forEach((animation)=>{
                    animation.addEventListener('click', ()=>{
                        animation.classList.toggle('running');
                        console.log('clicked')
                    })
                })

            document.addEventListener('DOMContentLoaded', function () {
                // Select all counter containers
                const counters = document.querySelectorAll('.counter-container');

                

                // Declare total variables outside the loop
                let regTotal = 0;
                let vipTotal = 0;
                let vvipTotal = 0;

                counters.forEach(counter => {
                    const quantityInput = counter.querySelector('.quantity-input');
                    const incrementButton = counter.querySelector('.increment-button');
                    const decrementButton = counter.querySelector('.decrement-button');
                    const incrementbuttonValue = incrementButton.getAttribute('data-value');
                    const regularTicketUnit = document.getElementById('regularTicketUnit');
                    const vipTicketUnit = document.getElementById('vipTicketUnit');
                    const vvipTicketUnit = document.getElementById('vvipTicketUnit');
                    const regularTicketTotal = document.getElementById('regularTicketTotal');
                    const vipTicketTotal = document.getElementById('vipTicketTotal');
                    const vvipTicketTotal = document.getElementById('vvipTicketTotal');
                    const totalPayment = document.getElementById('totalPayment');
                    const regularUnit = document.querySelectorAll('.regular_unit');
                    const vipUnit = document.querySelectorAll('.vip_unit');
                    const vvipUnit = document.querySelectorAll('.vvip_unit');

                    // Initialize the input value to 0
                    quantityInput.value = 0;

                    // Increment function
                    incrementButton.addEventListener('click', function () {
                        let currentValue = parseInt(quantityInput.value) ||
                            0; // Get current value or default to 0
                        currentValue += 1; // Increment by 1
                        quantityInput.value = currentValue; // Update the input value

                       
                        if (incrementbuttonValue === 'regularIncrement') {
                            regularTicketUnit.textContent = quantityInput.value;
                            regTotal = currentValue *
                                regularPrice; // Update total based on current value
                            regularTicketTotal.textContent = numFormat(regTotal);

                            regularUnit.forEach(regular => {
                                regular.value = quantityInput.value; 
                                console.log(regular.value);    
                            });

                        } else if (incrementbuttonValue === 'vipIncrement') {
                            vipTicketUnit.textContent = quantityInput.value;
                            vipTotal = currentValue * vipPrice; // Update total based on current value
                            vipTicketTotal.textContent = numFormat(vipTotal);

                             vipUnit.forEach(vip => {
                                vip.value = quantityInput.value;   
                                console.log(vip.value);  
                            });
                            
                        } else if (incrementbuttonValue === 'vvipIncrement') {
                            vvipTicketUnit.textContent = quantityInput.value;
                            vvipTotal = currentValue * vvipPrice; // Update total based on current value
                            vvipTicketTotal.textContent = numFormat(vvipTotal);
                            vvipUnit.forEach(vvip => {
                                vvip.value = quantityInput.value;   
                                console.log(vvip.value);  
                            });
                        }

                        runTotals(regTotal, vipTotal, vvipTotal);
                    });

                    // Decrement function
                    decrementButton.addEventListener('click', function () {
                        let currentValue = parseInt(quantityInput.value) ||
                            0; // Get current value or default to 0
                        if (currentValue > 0) { // Prevent going below 0
                            currentValue -= 1; // Decrement by 1
                            quantityInput.value = currentValue; // Update the input value
                        }

                        if (incrementbuttonValue === 'regularIncrement') {
                            regularTicketUnit.textContent = quantityInput.value;
                            regTotal = currentValue *
                                regularPrice; // Update total based on current value
                            regularTicketTotal.textContent = numFormat(regTotal);
                            regularUnit.forEach(regular => {
                            regular.value = quantityInput.value; 
                            console.log(regular.value);    
                        });
                        } else if (incrementbuttonValue === 'vipIncrement') {
                            vipTicketUnit.textContent = quantityInput.value;
                            vipTotal = currentValue * vipPrice; // Update total based on current value
                            vipTicketTotal.textContent = numFormat(vipTotal);
                            vipUnit.forEach(vip => {
                                vip.value = quantityInput.value;   
                                console.log(vip.value);  
                            });
                        } else if (incrementbuttonValue === 'vvipIncrement') {
                            vvipTicketUnit.textContent = quantityInput.value;
                            vvipTotal = currentValue * vvipPrice; // Update total based on current value
                            vvipTicketTotal.textContent = numFormat(vvipTotal);
                            vvipUnit.forEach(vvip => {
                                vvip.value = quantityInput.value;    
                                console.log(vvip.value);
                            });
                        }

                        runTotals(regTotal, vipTotal, vvipTotal);
                    });
                });
            });

            // Format price values
            function numFormat(number) {
                return number.toLocaleString(undefined, {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                });
            }

            // Find Subtotal
            function runTotals(regular, vip, vvip) {

                const findSubTotal = regular + vip + vvip;

                // tax = tax / 100;

                subTotalContent.textContent = numFormat(findSubTotal);

                let taxable = (tax / 100) * findSubTotal;

                let totalPayable = taxable + findSubTotal;

                totalPayment.textContent = numFormat(totalPayable);

            }
            //  const totalBillable = findSubTotal + totalPayment;
            //     totalPayment.textContent = numFormat(totalBillable);


            // function netPaymentFee()
        </script>

        {{--
        <script>

        </script> --}}



    </section>
</main>
@endsection