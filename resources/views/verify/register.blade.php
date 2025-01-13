@extends('layouts.app')
@section('title', 'Register With Us')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
    <section class="px-8 py-8  w-full  flex-col items-center justify-center">


        {{-- Mini Nav --}}
        <div class="bg-white px-3 py-2">


            <div class="flex gap-3">
                <a id="" href="{{route('index.login')}}"
                    class="loginLink cursor-pointer font-[400] no-underline hover:underline">Login</a>
                <a id="" href="{{route('index.register')}}"
                    class="signupLink cursor-pointer font-[600] text-red-900 underline hover:no-underline">Sign-Up</a>
            </div>
        </div>


        {{-- Sign up section --}}
        <div id=""
            class="signupSection  h-fit  md:w-full flex-col gap-2 rounded-b-md bg-white px-3 pb-2 shadow-lg">
            <div>
                <form method="POST" class="flex signupForm flex-col gap-2" action="{{ route('register.store') }}">
                    @csrf
                    <div class="login-field flex flex-col gap-1">
                        <label class="font-[500]" for="firstName">First Name</label>
                        <input class="input" type="text" name="firstname" value="{{ old('firstname') }}"
                            placeholder="Enter Firstname">
                        <span class="text-[12px] font-[200] text-red-700">
                            @error('firstname')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="login-field flex flex-col gap-1">
                        <label class="font-[500]" for="lastName">Surname</label>
                        <input class="input" value="{{ old('lastname') }}" type="text" name="lastname"
                            placeholder="Enter a Last name">
                        <span class="text-[12px] font-[200] text-red-700">
                            @error('lastname')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="login-field flex flex-col gap-1">
                        <label class="font-[500]" for="address">Address</label>
                        <input class="input" type="text" name="address" value="{{ old('address') }}"
                            placeholder="Enter Address">
                        <span class="text-[12px] font-[200] text-red-700">
                            @error('address')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="login-field flex flex-col gap-1">
                        <label class="font-[500]" for="email">Email</label>
                        <input title="Eg: mark@yokomail.com" class="input" type="email" name="email"
                            value="{{ old('email') }}" placeholder="Enter your Email">
                        <span class="text-[12px] font-[200] text-red-700">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="login-field flex flex-col gap-1">
                        <label class="font-[500]" for="email">Phone Number</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                                    <path
                                        d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z" />
                                </svg>
                            </div> <input style="padding-left: 35px !important;" title="+234..." class="input " value="{{old('phone')}}"
                                type="tel" name="phone" placeholder="+234....">
                        </div>
                        <span class="text-[12px] font-[200] text-red-700">
                            @error('phone')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="flex flex-col gap-1">
                        <label class="font-[500]" for="password">Password</label>
                        <div class="flex items-center">
                            <input class="signupPassword passMain input" id="password" type="password" name="password"
                                placeholder="Enter Password">
                            <input type="checkbox" id="" class="toggleSignupPassword ml-2"
                                onclick="togglePasswordVisibility('signup')">
                            <label for="toggleSignupPassword" class="cursor-pointer">
                                <svg fill="#8b0003" width="34px" height="34px" viewBox="0 0 512 512"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g id="Password">
                                            <path
                                                d="M391,233.9478H121a45.1323,45.1323,0,0,0-45,45v162a45.1323,45.1323,0,0,0,45,45H391a45.1323,45.1323,0,0,0,45-45v-162A45.1323,45.1323,0,0,0,391,233.9478ZM184.123,369.3794a9.8954,9.8954,0,1,1-9.8964,17.1387l-16.33-9.4287v18.8593a9.8965,9.8965,0,0,1-19.793,0V377.0894l-16.33,9.4287a9.8954,9.8954,0,0,1-9.8964-17.1387l16.3344-9.4307-16.3344-9.4306a9.8954,9.8954,0,0,1,9.8964-17.1387l16.33,9.4282V323.9487a9.8965,9.8965,0,0,1,19.793,0v18.8589l16.33-9.4282a9.8954,9.8954,0,0,1,9.8964,17.1387l-16.3344,9.4306Zm108,0a9.8954,9.8954,0,1,1-9.8964,17.1387l-16.33-9.4287v18.8593a9.8965,9.8965,0,0,1-19.793,0V377.0894l-16.33,9.4287a9.8954,9.8954,0,0,1-9.8964-17.1387l16.3344-9.4307-16.3344-9.4306a9.8954,9.8954,0,0,1,9.8964-17.1387l16.33,9.4282V323.9487a9.8965,9.8965,0,0,1,19.793,0v18.8589l16.33-9.4282a9.8954,9.8954,0,0,1,9.8964,17.1387l-16.3344,9.4306Zm108,0a9.8954,9.8954,0,1,1-9.8964,17.1387l-16.33-9.4287v18.8593a9.8965,9.8965,0,0,1-19.793,0V377.0894l-16.33,9.4287a9.8954,9.8954,0,0,1-9.8964-17.1387l16.3344-9.4307-16.3344-9.4306a9.8954,9.8954,0,0,1,9.8964-17.1387l16.33,9.4282V323.9487a9.8965,9.8965,0,0,1,19.793,0v18.8589l16.33-9.4282a9.8954,9.8954,0,0,1,9.8964,17.1387l-16.3344,9.4306Z">
                                            </path>
                                            <path
                                                d="M157.8965,143.9487a98.1035,98.1035,0,1,1,196.207,0V214.147h19.793V143.9487a117.8965,117.8965,0,0,0-235.793,0V214.147h19.793Z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </label>



                        </div>
                        <span class="text-[12px] font-[200] text-red-700">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="flex flex-col gap-1">
                        <label class="font-[500]" for="password">Confirm Password</label>
                        <div class="flex items-center">
                            <input class="signupPassword confirmPassword input" id="password_confirmation"
                                type="password" name="password_confirmation" placeholder="Confirm  Password">




                        </div>
                        <span class="text-[12px] font-[200] text-red-700">
                            @error('password_confirmation')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <button
                        class="hover:red-alt-800 w-full rounded-md bg-red-alt-700 py-2 text-center uppercase text-white submit"
                        type="submit">
                        Sign Up
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

    </section>


@endsection
