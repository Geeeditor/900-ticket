@extends('layouts.app')
@section('title', 'Checkout')
@section('hero')
    <div class="relative top-[0] flex h-[14vh] w-full justify-center bg-black md:h-[20vh] ">
        {{-- <img class="h-full w-full object-cover " src="{{ asset('image/eventhero.png') }}" alt="lorem ipsum"> --}}
        {{-- hero content --}}


    </div>

    {{-- @if (session('success')){

     } @elseif('error') {

     }  --}}


@endsection

@section('content')
    @php
        $title = $event->title;
        $date = $event->date;
        $time = $event->time;
        $location = $event->location;
        $event_reference = $event->event_reference;
        $event_id = $event->id;
        $regular_ticket_price = $event->regular_ticket_price;
        $vip_ticket_price = $event->vip_ticket_price;
        $vvip_ticket_price = $event->vvip_ticket_price;
        $regular_ticket_quantity = $regular_unit;
        $vip_ticket_quantity = $vip_unit;
        $vvip_ticket_quantity = $vvip_unit;
        $tax = 0.05; // 5% tax
        $total_order_value =
            $regular_ticket_price * $regular_ticket_quantity +
            $vip_ticket_price * $vip_ticket_quantity +
            $vvip_ticket_price * $vvip_ticket_quantity;
        $taxed_total_order = $total_order_value * $tax;

        $total_quantity = $regular_ticket_quantity + $vip_ticket_quantity + $vvip_ticket_quantity;
        $total_price = number_format($taxed_total_order + $total_order_value, 2);
    @endphp

    <main>
        <div class="mx-auto my-3 w-[85%] md:w-[80%] ">
            <a class="text-black" href="{{ url()->previous() }}">
                <i class="fa-solid fa-arrow-left-long">
                    Back
                </i>
            </a>
        </div>

        <section class="mx-auto  w-[85%] md:w-[80%]">
            <div class="flex flex-col gap-2 rounded-lg bg-white p-4 shadow-md ">
                <div>
                    <h1 class="md:text-2xl font-bold text-black uppercase">Checkout Your order</h1>
                </div>

                <div class="flex flex-col gap-2">

                    @auth
                        <div class="flex flex-col gap-2 rounded-lg bg-white p-4 shadow-md">
                            <h2 class="text-lg font-bold text-black">Hi {{ Auth()->user()->firstname }}!</h2>
                            <p class="text-sm text-gray-500 flex flex-col">Below is your order summary
                            </p>
                        </div>
                    @endauth

                    @guest

                        <div class="flex flex-col gap-1 rounded-lg bg-white p-4 shadow-md">
                            <h2 class="text-lg font-bold text-black">Hi Guest!</h2>
                            <p class="text-sm text-gray-500 flex flex-col">Below is your order summary
                            </p>
                            <p class="text-start text-[0.7rem] hover:underline text-gray-500 flex flex-col ">Login/create an
                                Account to complete checkout</p>
                        </div>

                    @endguest

                    <form method="POST" action="{{ route('payment.pay') }}"   class="flex flex-col gap-2 rounded-lg bg-white p-4 shadow-md">
                        @csrf
                        <h2 class="text-lg font-bold text-black">Order Summary</h2>
                        <div  class="flex flex-col gap-2">
                            {{-- @csrf --}}
                            <div class="flex justify-between md:flex-row flex-col">
                                <p class="text-sm text-gray-500">Event Name</p>
                                {{-- <input type="text" name="" value="{{ $event_id }}" hidden> --}}
                                <p class="text-sm text-gray-500">{{ $title }}</p>
                            </div>
                            <div class="flex justify-between md:flex-row flex-col">
                                <p class="text-sm text-gray-500">Event Date</p>
                                <p class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($date)->format('l, F j, Y') }}
                                </p>
                            </div>
                            <div class="flex justify-between md:flex-row flex-col">
                                <p class="text-sm text-gray-500">Event Reference</p>
                                <p class="text-sm text-gray-500">{{ $event_reference }}</p>
                            </div>
                            <div class="flex justify-between md:flex-row flex-col">
                                <p class="text-sm text-gray-500">Time</p>
                                <p class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($time)->format('H:iA') }}</p>
                            </div>
                            <div class="flex justify-between md:flex-row flex-col">
                                <p class="text-sm text-gray-500">Regular Ticket Price</p>
                                <p class="text-sm text-gray-500">
                                    <span>
                                        ₦{{ number_format($regular_ticket_price) == 0 ? '0' : number_format($regular_ticket_price) }}
                                    </span>
                                    <span class="text-[0.7rem]">

                                        x
                                        {{ $regular_ticket_quantity == 0 ? '0' : $regular_ticket_quantity }}
                                    </span>
                                </p>
                            </div>
                            <div class="flex justify-between md:flex-row flex-col">
                                <p class="text-sm text-gray-500">VIP Ticket Price</p>
                                <p class="text-sm text-gray-500">
                                    <span>
                                        ₦{{ number_format($vip_ticket_price) == 0 ? '0' : number_format($vip_ticket_price) }}
                                    </span>
                                    <span class="text-[0.7rem]">

                                        x
                                        {{ $vip_ticket_quantity == 0 ? '0' : $vip_ticket_quantity }}
                                    </span>
                                </p>
                            </div>
                            <div class="flex justify-between md:flex-row flex-col">
                                <p class="text-sm text-gray-500">VVIP Ticket Price</p>
                                <p class="text-sm text-gray-500">
                                    <span>
                                        ₦{{ number_format($vvip_ticket_price) == 0 ? '0' : number_format($vvip_ticket_price) }}
                                    </span>
                                    <span class="text-[0.7rem]">

                                        x
                                        {{ $vvip_ticket_quantity == 0 ? '0' : $vvip_ticket_quantity }}
                                    </span>
                                </p>
                            </div>
                            <div class="flex justify-between md:flex-row flex-col">
                                <p class="text-sm text-gray-500">Fee</p>
                                <p class="text-sm text-gray-500">
                                    <span>
                                        {{ $tax }}%
                                    </span>

                                </p>
                            </div>
                            <div class="flex justify-between md:flex-row flex-col">
                                <p class="text-sm text-gray-500">Total Price</p>
                                <p class="text-sm text-gray-500">
                                    ₦{{ $total_price }}
                                </p>
                            </div>
                            <div class="w-full flex justify-end">
                           
                                    <button type="submit"
                                        class="ld-ext-right rounded-md bg-[#cc2121] px-4 py-2 text-white ld-ext-right"
                                        onclick="this.classList.toggle('running')">

                                        Pay Now
                                        <div class="ld ld-ring ld-spin"></div>

                                    </button>
                               



                            </div>
                        </div>
                    </form>




                </div>



        </section>

    </main>
@endsection
