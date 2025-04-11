@extends('layouts.app')
@section('title', 'Checkout')
@section('hero')
    <div class="relative top-[0] flex h-[14vh] w-full justify-center bg-black md:h-[20vh] ">
        {{-- <img class="h-full w-full object-cover " src="{{ asset('image/eventhero.png') }}" alt="lorem ipsum"> --}}
        {{-- hero content --}}

        @guest



            {{-- Sign in modal --}}
            <section id="authModal" style="background-color: rgba(16, 1, 1, .2)"
                class="hidden z-[997] fixed flex justify-center items-center w-full h-[106%]">


                <div
                    class="flex bg-white items-center justify-center gap-2   lg:w-[70%]   w-[85%] rounded-lg border border-gray-200  md:border-2">
                    <div class="hidden lg:block">
                        <img class="h-fit w-[600px] object-cover p-1" src="{{ asset('image/profilePoP2-v3.jpg') }}"
                            alt="random img" />
                    </div>

                    <div class="p-2">
                        <div id="loginform">
                            
                             
                            <svg id="closeModal" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="ml-[90%] size-6 text-black">
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

                            <form action="{{route('checkout.getOrder.login')}}" method="post">
                                @csrf
                                <input type="text" name="event_reference" value="{{ trim($event_reference) }}" hidden>
                                <input type="number" name="regular_unit" class="regular_unit" id="regular_unit" value="{{ trim( $regular_unit == 0 ? '0' : $regular_unit) }}" hidden>
                                <input type="number" name="vip_unit" class="vip_unit" id="vip_unit" value="{{ trim( $vip_unit == 0 ? '0' : $vip_unit) }}" hidden>
                                <input type="number" name="vvip_unit" class="vvip_unit" id="vvip_unit" value="{{ trim( $vvip_unit == 0 ? '0' : $vvip_unit) }}" hidden>
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

                            <form action="" method="post">
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
                                            <img class="h-[25px]" src="{{ asset('image/eye.svg') }}" alt="Toggle visibility">
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
                            <h2 class="text-lg font-bold text-black">Hi {{Auth()->user()->firstname}}!</h2>
                            <p class="text-sm text-gray-500 flex flex-col">Below is your order summary
                            </p>
                        </div>
                    @endauth

                    @guest

                        <div class="flex flex-col gap-1 rounded-lg bg-white p-4 shadow-md">
                            <h2 class="text-lg font-bold text-black">Hi Guest!</h2>
                            <p class="text-sm text-gray-500 flex flex-col">Below is your order summary
                            </p>
                            <p 
                                class="text-start text-[0.7rem] hover:underline text-gray-500 flex flex-col ">Login/create an
                                Account to complete checkout</p>
                        </div>

                    @endguest

                    <div class="flex flex-col gap-2 rounded-lg bg-white p-4 shadow-md">
                        <h2 class="text-lg font-bold text-black">Order Summary</h2>
                        <form action="" class="flex flex-col gap-2">
                            @csrf
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
                                @guest
                                     <button type="button" id="openModal" 
                                    class="rounded-sm bg-[#cc2121] hover:bg-red-900 py-2 px-4 text-white font-bold text-sm hover:animate-pulse">
                                        Login/Register to Pay
                                    </button>
                                @endguest

                                @auth
                                    <button type="submit" class="ld-ext-right rounded-md bg-[#cc2121] px-4 py-2 text-white ld-ext-right"
                                    onclick="this.classList.toggle('running')">

                                    Pay Now
                                    <div class="ld ld-ring ld-spin"></div>

                                    </button>
                                @endauth

                               

                            </div>
                        </form>
                    </div>




                </div>



        </section>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const authModal = document.getElementById('authModal');
                const closeModal = document.getElementById('closeModal');
                const openModal = document.getElementById('openModal');
                const closeRegisterModal = document.getElementById('closeRegisterModal');
                const continueToPwd = document.getElementById('continueToPwd');
                const provideAuthPwd = document.getElementById('provideAuthPwd');
                const provideAuthEmail = document.getElementById('provideAuthEmail');

                // Show the modal
                authModal.classList.remove('hidden');

                // Close the modal
                closeModal.addEventListener('click', function() {
                    authModal.classList.add('hidden');
                });


                openModal.addEventListener('click', function() {
                    authModal.classList.remove('hidden');
                });




                closeRegisterModal.addEventListener('click', function() {
                    authModal.classList.add('hidden');
                });

                // Show password input
                continueToPwd.addEventListener('click', function() {
                    provideAuthEmail.classList.add('hidden');
                    provideAuthPwd.classList.remove('hidden');
                });
            });
        </script>
    </main>
@endsection
