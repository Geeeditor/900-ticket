@extends('layouts.app')
@section('title', 'Register With Us')
@section('hero')
    <div style="background: url('./image/eventhero.png')"
        class="w-full relative top-[0] bg-black md:h-[20vh] h-[17.5vh]   flex justify-center">
        {{-- hero content --}}
    </div>
@endsection

@section('content')
    <main class="w-full mx-auto">
        <section
            class="md:px-8 md:py-8 py-4 md:w-[80%] mx-auto  flex items-center justify-center bg-white rounded-b-md  shadow-lg p-1 m-1">
            <div class="hidden md:block w-1/2 ">
                <img class="object-cover w-full h-full" src="{{ asset('image/profilePop1-v3.jpg') }}" alt="lorem ipsum">
            </div>
            <div class="w-[100%] md:w-1/2 ">
                {{-- Mini Nav --}}

                <div class="bg-white px-3 py-2 ">


                    <div class="flex gap-3 justify-start">

                        <a id="" href="{{ route('index.login') }}"
                            class="signupLink cursor-pointer font-[600]   bg-red-700 text-white px-2 py- md:px-4 md:py-2 rounded-md hover:bg-red-900">Login</a>

                        <a id="" href="{{ route('index.register') }}"
                            class="loginLink cursor-pointer font-[600]   bg-red-700 text-white px-2 py- md:px-4 md:py-2 rounded-md hover:bg-red-900">Register</a>
                    </div>

                </div>




                {{-- Sign up section --}}
                <div id="" class="signupSection  h-fit  md:w-full flex-col gap-2  bg-white px-3 pb-2 ">
                    <div>
                        <div>
                            <div class="mx-auto flex w-full justify-start gap-1 text-lg uppercase font-bold">
                                <p>Create an account</p>
                            </div>

                            <p class="my-2 text-left text-sm capitalize text-gray-400">Manage your bookings with
                                ease and <br />
                                enjoy members-only benefits</p>
                        </div>
                        <form method="POST" class="flex signupForm flex-col gap-2" action="{{ route('register.store') }}">
                            @csrf

                            <div class="login-field flex flex-col gap-1">
                                <label class="font-[500]" for="firstName">First Name</label>
                                <input class="my-2 w-full border border-gray-200 px-2 py-2 md:border-2" type="text"
                                    name="firstname" value="{{ old('firstname') }}" placeholder="Enter Firstname">
                                <span class="text-[12px] font-[200] text-red-700">
                                    @error('firstname')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="login-field flex flex-col gap-1">
                                <label class="font-[500]" for="lastName">Surname</label>
                                <input class="my-2 w-full border border-gray-200 px-2 py-2 md:border-2"
                                    value="{{ old('lastname') }}" type="text" name="lastname"
                                    placeholder="Enter a Last name">
                                <span class="text-[12px] font-[200] text-red-700">
                                    @error('lastname')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="login-field flex flex-col gap-1">
                                <label class="font-[500]" for="address">Address</label>
                                <input class="my-2 w-full border border-gray-200 px-2 py-2 md:border-2" type="text"
                                    name="address" value="{{ old('address') }}" placeholder="Enter Address">
                                <span class="text-[12px] font-[200] text-red-700">
                                    @error('address')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="login-field flex flex-col gap-1">
                                <label class="font-[500]" for="email">Email</label>
                                <input title="Eg: mark@yokomail.com"
                                    class="my-2 w-full border border-gray-200 px-2 py-2 md:border-2" type="email"
                                    name="email" value="{{ old('email') }}" placeholder="Enter your Email">
                                <span class="text-[12px] font-[200] text-red-700">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="login-field flex flex-col gap-1 ">
                                <label class="font-[500]" for="email">Phone Number</label>
                                <div class="my-2 w-full border border-gray-200 px-2 py-2 md:border-2 relative">
                                    <div
                                        class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                                            <path
                                                d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z" />
                                        </svg>
                                    </div> <input
                                        style="padding-left: 35px !important;user-select: text;width: 80%;padding-top: 2.5px;padding-bottom: 2.5px;"
                                        title="+234..." class="input " value="{{ old('phone') }}" type="tel"
                                        name="phone" placeholder="+234....">
                                </div>
                                <span class="text-[12px] font-[200] text-red-700">
                                    @error('phone')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="flex flex-col gap-1">
                                <label class="font-[500]" for="password">Password</label>
                                <div class="relative">

                                    <input id="password" name="password"
                                        class="my-2 w-full border border-gray-200 px-2 py-2 md:border-2" type="password"
                                        placeholder="Enter your password" />
                                    <div id=""
                                        class="password-visibility absolute right-[5px] top-[17px] cursor-pointer togglePassword">
                                        <img class="h-[25px]" src="{{ asset('image/eye.svg') }}" alt="Toggle visibility">
                                        <div id="" class="stroke"></div>
                                    </div>
                                </div>
                                <span class="text-[12px] font-[200] text-red-700">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="flex flex-col gap-1">
                                <label class="font-[500]" for="password">Confirm Password</label>
                                <div class="relative">

                                    <input id="password" name=""
                                        class="my-2 w-full border border-gray-200 px-2 py-2 md:border-2" type="password"
                                        placeholder="Confirm your password" />
                                    <div id=""
                                        class="password-visibility absolute right-[5px] top-[17px] cursor-pointer togglePassword">
                                        <img class="h-[25px]" src="{{ asset('image/eye.svg') }}"
                                            alt="Toggle visibility">
                                        <div id="" class="stroke"></div>
                                    </div>
                                </div>
                                <span class="text-[12px] font-[200] text-red-700">
                                    @error('password_confirmation')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <button
                                class="hover:red-alt-800 w-full rounded-md bg-red-700 hover:bg-red-900 py-2  text-start uppercase text-white submit px-2"
                                type="submit">
                                Create an Account
                            </button>
                        </form>

                        {{--   <div class="divider"></div>

                            <a href="javascript:void(0)"
                                class="mt-[32px] flex items-center justify-between rounded-md border border-gray-600 px-2 py-2">
                                <svg width="34px" height="34px" viewBox="-0.5 0 48 48" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title>Google-color</title>
                                        <desc>Created with Sketch.</desc>
                                        <defs> </defs>
                                        <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="Color-" transform="translate(-401.000000, -860.000000)">
                                                <g id="Google" transform="translate(401.000000, 860.000000)">
                                                    <path
                                                        d="M9.82727273,24 C9.82727273,22.4757333 10.0804318,21.0144 10.5322727,19.6437333 L2.62345455,13.6042667 C1.08206818,16.7338667 0.213636364,20.2602667 0.213636364,24 C0.213636364,27.7365333 1.081,31.2608 2.62025,34.3882667 L10.5247955,28.3370667 C10.0772273,26.9728 9.82727273,25.5168 9.82727273,24"
                                                        id="Fill-1" fill="#FBBC05"> </path>
                                                    <path
                                                        d="M23.7136364,10.1333333 C27.025,10.1333333 30.0159091,11.3066667 32.3659091,13.2266667 L39.2022727,6.4 C35.0363636,2.77333333 29.6954545,0.533333333 23.7136364,0.533333333 C14.4268636,0.533333333 6.44540909,5.84426667 2.62345455,13.6042667 L10.5322727,19.6437333 C12.3545909,14.112 17.5491591,10.1333333 23.7136364,10.1333333"
                                                        id="Fill-2" fill="#EB4335"> </path>
                                                    <path
                                                        d="M23.7136364,37.8666667 C17.5491591,37.8666667 12.3545909,33.888 10.5322727,28.3562667 L2.62345455,34.3946667 C6.44540909,42.1557333 14.4268636,47.4666667 23.7136364,47.4666667 C29.4455,47.4666667 34.9177955,45.4314667 39.0249545,41.6181333 L31.5177727,35.8144 C29.3995682,37.1488 26.7323182,37.8666667 23.7136364,37.8666667"
                                                        id="Fill-3" fill="#34A853"> </path>
                                                    <path
                                                        d="M46.1454545,24 C46.1454545,22.6133333 45.9318182,21.12 45.6113636,19.7333333 L23.7136364,19.7333333 L23.7136364,28.8 L36.3181818,28.8 C35.6879545,31.8912 33.9724545,34.2677333 31.5177727,35.8144 L39.0249545,41.6181333 C43.3393409,37.6138667 46.1454545,31.6490667 46.1454545,24"
                                                        id="Fill-4" fill="#4285F4"> </path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <p class="w-[60%]">Google</p>
                            </a> --}}
                    </div>
                </div>
            </div>

        </section>
        <script>
            const togglePasswords = document.querySelectorAll(".togglePassword");

            togglePasswords.forEach((togglePassword) => {
                togglePassword.addEventListener("click", function() {
                    const passwordInput = this
                        .previousElementSibling; // Assuming input is before the toggle
                    const type = passwordInput.getAttribute("type") === "password" ? "text" :
                        "password";
                    passwordInput.setAttribute("type", type);

                    const strokes = document.querySelectorAll(
                        '.stroke'); // Use class selector for strokes
                    strokes.forEach((stroke) => {
                        stroke.classList.toggle(
                            "eye-close"); // Toggle the class for each stroke
                    });
                });
            });

            // Email validation function
            function validateEmail(email) {
                const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(String(email).toLowerCase());
            }
        </script>
    </main>
@endsection
