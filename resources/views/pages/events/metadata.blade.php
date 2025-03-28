@extends('layouts.app')
@section('title', 'Event Meta Data')

@section('hero')
    <div class="relative top-[0] flex h-[17.5vh] w-full justify-center bg-black md:h-[20vh]">
        <img class="h-full w-full object-cover" src="{{ asset('image/eventhero.png') }}" alt="lorem ipsum">
        {{-- hero content --}}
    </div>
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
            @php
                $regularPrice = 8100.05;
                $vipPrice = 81000.05;
                $vvipPrice = 100100.05;
                $tax = 2;
            @endphp
            <div class="flex flex-col gap-2 md:flex-row md:gap-3">
                <div class="w-full md:w-1/3">
                    <div class="flex flex-col gap-1">
                        <div class="relative h-fit rounded-md">
                            <img class="h-full object-cover" src="{{ asset('image/imgdefault.png') }}" alt="lorem ipsum">
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
                            900Ticket Grand
                            Reveal</h2>

                        <div class="flex flex-col gap-1 border-b border-gray-300 py-2">
                            <p class="flex items-center gap-2 text-sm font-thin">
                                <img src="{{ asset('image/date.svg') }}" alt="lorem ipsum">
                                <span>December 06 2024</span>
                            </p>
                            <p class="flex items-center gap-2 text-sm font-thin">
                                <img src="{{ asset('image/clock.svg') }}" alt="lorem ipsum">
                                <span>00:00 (WAT)</span>
                            </p>



                            <p class="flex items-center gap-2 text-sm font-thin">
                                <img src="{{ asset('image/location.svg') }}" alt="lorem ipsum">
                                <span class="capitalize">36 o2 arena street, Ikeja, lagos state.</span>
                            </p>
                            <div x-data="{ otherPrices: false }">
                                <div class="flex justify-between gap-2 md:w-fit md:gap-3">
                                    <div class="flex items-center gap-2 text-sm font-thin">
                                        <img class="w-[20px]" src="{{ asset('image/price-tag.svg') }}" alt="lorem ipsum">
                                        <span class="capitalize">N
                                            <span class="regular-price">

                                                {{ $regularPrice }}
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
                                                {{ $vipPrice }}

                                            </span>
                                        </span>
                                        <span class="text-[7px] font-[200]">VIP</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-sm font-thin">
                                        <img class="w-[20px]" src="{{ asset('image/price-tag.svg') }}" alt="lorem ipsum">
                                        <span class="capitalize">N
                                            <span class="vvip-price">
                                                {{ $vvipPrice }}
                                            </span>
                                        </span>
                                        <span class="text-[7px] font-[200]">VVIP</span>
                                    </div>
                                </div>
                            </div>
                            <p class="flex items-center gap-2 text-sm font-thin">
                                <img src="{{ asset('image/map-pin.svg') }}" alt="lorem ipsum">
                                <a href="javascript:void(0)" class="capitalize">http://localhost:8000/home</a>
                            </p>
                        </div>
                        <div class="">
                            <h2 class="flex items-center gap-2 text-base font-[700] tracking-wide">Event Description
                            </h2>
                            <p class="my-1 text-sm font-thin">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis quas temporibus explicabo
                                quisquam fugiat minus ut accusamus voluptates, consequuntur blanditiis aut veniam asperiores
                                eos!
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
            x-show="checkoutModal" @click.outside ="checkoutModal = false"
            class="fixed top-0 z-[999] flex h-full w-full justify-center overflow-y-auto py-5 md:overflow-y-hidden">
            <div class="relative mx-auto w-full md:mt-[132px] md:w-[100%]">
                <form class="rounded-md bg-white px-[1rem] py-4 shadow-md md:px-8" action="">
                    <div class="my-4 w-full">
                        <h3 class="text-center text-[20px] font-[700] md:text-left md:text-[25px]"
                            style="text-transform: uppercase  !important">Reserve your ticket now</h3>
                    </div>

                    {{-- reservation-container --}}
                    <div class="flex flex-col gap-2 md:flex-row md:gap-4">
                        {{-- reservation input section --}}
                        <div class="flex w-full flex-col gap-1 md:w-1/2 md:gap-4">
                            {{-- reservation-row --}}
                            <div class="flex items-center rounded-lg border border-gray-200 bg-gray-100">
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
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                            </svg>
                                        </button>

                                        <input type="text" disabled
                                            class="quantity-input block h-full w-full border-x-0 border-gray-300 bg-gray-50 py-2.5 text-center text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                                            placeholder="0" />

                                        <button type="button" data-value="regularIncrement"
                                            class="increment-button h-full rounded-e-lg border border-gray-300 bg-gray-100 p-2 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 md:p-3">
                                            <svg class="h-3 w-3 text-gray-900" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                            </svg>
                                        </button>
                                    </div>

                                </div>

                            </div>
                            {{-- reservation-row --}}
                            <div class="flex items-center rounded-lg border border-gray-200 bg-gray-100">
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
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                            </svg>
                                        </button>

                                        <input type="text" disabled
                                            class="quantity-input block h-full w-full border-x-0 border-gray-300 bg-gray-50 py-2.5 text-center text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                                            placeholder="0" />

                                        <button type="button" data-value="vipIncrement"
                                            class="increment-button h-full rounded-e-lg border border-gray-300 bg-gray-100 p-2 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 md:p-3">
                                            <svg class="h-3 w-3 text-gray-900" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                            </svg>
                                        </button>
                                    </div>

                                </div>

                            </div>
                            {{-- reservation-row --}}
                            <div class="flex items-center rounded-lg border border-gray-200 bg-gray-100">
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
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                            </svg>
                                        </button>

                                        <input type="text" disabled
                                            class="quantity-input block h-full w-full border-x-0 border-gray-300 bg-gray-50 py-2.5 text-center text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                                            placeholder="0" />

                                        <button type="button" data-value="vvipIncrement"
                                            class="increment-button h-full rounded-e-lg border border-gray-300 bg-gray-100 p-2 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 md:p-3">
                                            <svg class="h-3 w-3 text-gray-900" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                            </svg>
                                        </button>
                                    </div>

                                </div>

                            </div>


                        </div>

                        {{-- reservaton order summar div --}}
                        <div class="w-full md:w-1/2">
                            {{-- reservation order row  --}}
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
                                        <h5 class="font-[700]" id="fees">{{$tax}}</h5>
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

                                <button class="rounded-md bg-[#cc2121] px-4 py-2 text-white">

                                    Add Item to Queue
                                </button>
                                <button class="rounded-md bg-[#cc2121] px-4 py-2 text-white">

                                    Pay Now
                                </button>
                            </div>

                        </div>
                    </div>
                </form>
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

                const subTotalContent = document.getElementById('subTotal');

                document.addEventListener('DOMContentLoaded', function() {
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

                        // Initialize the input value to 0
                        quantityInput.value = 0;

                        // Increment function
                        incrementButton.addEventListener('click', function() {
                            let currentValue = parseInt(quantityInput.value) ||
                            0; // Get current value or default to 0
                            currentValue += 1; // Increment by 1
                            quantityInput.value = currentValue; // Update the input value

                            if (incrementbuttonValue === 'regularIncrement') {
                                regularTicketUnit.textContent = quantityInput.value;
                                regTotal = currentValue *
                                regularPrice; // Update total based on current value
                                regularTicketTotal.textContent = numFormat(regTotal);
                            } else if (incrementbuttonValue === 'vipIncrement') {
                                vipTicketUnit.textContent = quantityInput.value;
                                vipTotal = currentValue * vipPrice; // Update total based on current value
                                vipTicketTotal.textContent = numFormat(vipTotal);
                            } else if (incrementbuttonValue === 'vvipIncrement') {
                                vvipTicketUnit.textContent = quantityInput.value;
                                vvipTotal = currentValue * vvipPrice; // Update total based on current value
                                vvipTicketTotal.textContent = numFormat(vvipTotal);
                            }

                            runTotals(regTotal, vipTotal, vvipTotal);
                        });

                        // Decrement function
                        decrementButton.addEventListener('click', function() {
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
                            } else if (incrementbuttonValue === 'vipIncrement') {
                                vipTicketUnit.textContent = quantityInput.value;
                                vipTotal = currentValue * vipPrice; // Update total based on current value
                                vipTicketTotal.textContent = numFormat(vipTotal);
                            } else if (incrementbuttonValue === 'vvipIncrement') {
                                vvipTicketUnit.textContent = quantityInput.value;
                                vvipTotal = currentValue * vvipPrice; // Update total based on current value
                                vvipTicketTotal.textContent = numFormat(vvipTotal);
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

                    const findSubTotal = regular + vip + vvip ;

                    // tax = tax / 100;

                    subTotalContent.textContent = numFormat(findSubTotal);

                    let taxable = ( tax / 100 ) * findSubTotal;

                    let totalPayable = taxable + findSubTotal;

                    totalPayment.textContent = numFormat(totalPayable);

                }
                //  const totalBillable = findSubTotal + totalPayment;
                //     totalPayment.textContent = numFormat(totalBillable);


                // function netPaymentFee()
            </script>

            {{-- <script>

            </script> --}}



        </section>
    </main>
@endsection
