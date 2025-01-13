@extends('layouts.app')
@section('title', 'Login')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')

    <section class="blur-background px-10 md:w-3/4 mx-auto mt-3 py-8 flex-col items-center justify-center">


        {{-- Mini Nav --}}
        <div class="bg-white px-3 py-2">


            <div class="flex gap-3">

                <a id="" href="{{ route('index.login') }}"
                    class="signupLink cursor-pointer font-[600] text-red-900 underline hover:no-underline">Login</a>

                <a id="" href="{{ route('index.register') }}"
                    class="loginLink cursor-pointer font-[400] no-underline hover:underline">Register</a>
            </div>
        </div>
        {{-- Login Section --}}
        <div id="" class="loginSection h-fit  flex-col gap-2 rounded-sm bg-white px-3 py-2 shadow-lg">
            <div>
                <form action="{{route('index.login.store')}}" method="post" class="flex flex-col gap-2">
                    @csrf
                    <div class="login-field flex flex-col gap-1">
                        <label class="font-[500]" for="email">Email</label>
                        <input title="Eg: mark@yokomail.com" class="input" type="text" name="email"
                            placeholder="Enter your email">
                        <span class="text-[12px] font-[200] text-red-700">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="flex flex-col gap-1">
                        <label class="font-[500]" for="password">Password</label>
                        <div class="flex items-center">
                            <input class="loginPassword input" id="" type="password" name="password"
                                placeholder="Enter your password">
                            <input type="checkbox" id="" class="toggleLoginPassword ml-2"
                                onclick="togglePasswordVisibility('login')">
                            <label for="toggleLoginPassword" class="cursor-pointer"><svg fill="#8b0003" width="24px"
                                    height="24px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
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
                                </svg></label>

                        </div>
                        <span class="text-[12px] font-[200] text-red-700">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                     <div >
                           <div class="saveLog">
                                <label class="saveLoginCheckBox">
                                    <input id="ch1" type="checkbox" name="remember">
                                    <div class="transition"></div>
                                </label>
                                <p>
                                Remember Me
                                </p>
                            </div>
                        </div>

                    <button class="hover:red-alt-800 w-full rounded-md bg-red-alt-700 py-2 text-center uppercase text-white"
                        type="submit">Login</button>
                </form>


            </div>
        </div>



    </section>
@endsection
