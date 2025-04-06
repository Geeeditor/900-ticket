@extends('layouts.app')
@section('title', 'Login')
{{--
@section('style')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection --}}

@section('hero')
    <div style="background: url('./image/eventhero.png')"
        class="w-full relative top-[0] bg-black md:h-[20vh] h-[17.5vh]   flex justify-center">
        {{-- hero content --}}
    </div>
@endsection

@section('content')
    <section class="w-full mx-auto">
        <section class="md:px-8 md:py-8 py-4 md:w-[80%] mx-auto  flex items-center justify-center bg-white rounded-b-md  shadow-lg p-1 m-1">
                <div class="hidden md:block w-1/2 ">
                    <img class="object-cover w-full h-full" src="{{asset('image/profilePop1-v3.jpg')}}" alt="lorem ipsum">
                </div>
                <div class="w-[100%] md:w-1/2   ">


        {{-- Mini Nav --}}
        <div class="bg-white px-3 py-2">


            <div class="flex gap-3 justify-start">

                <a id="" href="{{ route('index.login') }}"
                    class="signupLink cursor-pointer font-[600]    text-white px-2 py- md:px-4 md:py-2 rounded-md bg-red-700 hover:bg-red-900">Login</a>

                <a id="" href="{{ route('index.register') }}"
                    class="loginLink cursor-pointer font-[600]   bg-red-700 text-white px-2 py- md:px-4 md:py-2 rounded-md hover:bg-red-900">Register</a>
            </div>
        </div>

        {{-- Login Section --}}
        <div id="" class="loginSection h-[100%]  flex-col gap-2 rounded-sm bg-white px-3 py-2 shadow-lg">
            <div>
                <div>
                            <div class="mx-auto flex w-full justify-start gap-1 text-lg uppercase font-bold">
                                <p>Sign in</p>
                            </div>

                            <p class="my-2 text-left text-sm capitalize text-gray-400">Manage your bookings with
                                ease and <br />
                                enjoy members-only benefits</p>
                        </div>
                <form action="{{route('index.login.store')}}" method="post" class="flex flex-col gap-2">
                    @csrf
                    <div class="login-field flex flex-col gap-1">
                        <label class="font-[500]" for="email">Email</label>
                        <input title="Eg: mark@yokomail.com" class="input my-2 w-full border border-gray-200 px-2 py-2 md:border-2" type="text" name="email"
                            placeholder="Enter your email">
                        <span class="text-[12px] font-[200] text-red-700">
                            @error('email')
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

                    <button class="hover:red-alt-800 w-full rounded-md bg-red-700 hover:bg-red-900 py-2  text-start uppercase text-white submit px-2"
                        type="submit">Login</button>
                </form>


            </div>
        </div>

                </div>



    </section>
@endsection
