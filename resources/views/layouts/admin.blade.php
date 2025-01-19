<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - 900 Ticket</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('style')
    <link rel="stylesheet" href="{{ asset('css/admin-style.css') }}">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">
</head>

<body>
    <header
        class='flex shadow-md py-3 px-4 sm:px-10 md:px-[90px] bg-white font-[sans-serif] min-h-[70px] tracking-wide relative z-50'>
        <div class='flex flex-wrap items-center justify-between lg:gap-y-4 gap-y-6 gap-x-4 w-full'>

            <a href="/admin"><img src="{{ asset('image/logo_alt.svg') }}" alt="logo"
                    class='w-[100px] md:w-26' />
            </a>



            <div x-data="{ actionNav: false }" class='flex items-center max-sm:ml-auto space-x-6'>
                <ul>
                    <li id=" profile-dropdown-toggle"
                        class="relative  px-1 after:absolute after:bg-black after:w-full after:h-[2px] after:block after:top-8 after:left-0 after:transition-all after:duration-300">
                        <svg @click="actionNav = ! actionNav" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                            class="cursor-pointer hover:fill-black" viewBox="0 0 512 512">
                            <path
                                d="M437.02 74.981C388.667 26.629 324.38 0 256 0S123.333 26.629 74.98 74.981C26.629 123.333 0 187.62 0 256s26.629 132.667 74.98 181.019C123.333 485.371 187.62 512 256 512s132.667-26.629 181.02-74.981C485.371 388.667 512 324.38 512 256s-26.629-132.667-74.98-181.019zM256 482c-66.869 0-127.037-29.202-168.452-75.511C113.223 338.422 178.948 290 256 290c-49.706 0-90-40.294-90-90s40.294-90 90-90 90 40.294 90 90-40.294 90-90 90c77.052 0 142.777 48.422 168.452 116.489C383.037 452.798 322.869 482 256 482z"
                                data-original="#000000" />
                        </svg>
                        <div x-show="actionNav" @click.outside="actionNav = false" id="profile-dropdown-menu"
                            class="bg-white block z-20 shadow-lg py-6 px-6 rounded sm:min-w-[320px] max-sm:min-w-[250px] absolute right-0 top-10">
                            <h6 class="font-semibold text-[15px]">Welcome</h6>
                            <p class="text-sm text-gray-500 mt-1">Manage 900 Events,Flight Order, Shortlet Listing and Hotel Booking  </p>
                            <button type='button'
                                class="bg-transparent border border-gray-300 hover:border-black rounded px-4 py-2 mt-4 text-sm text-black">LOGIN
                                / SIGNUP</button>
                            {{-- <hr class="border-b-0 my-4" /> --}}
                            <ul class="hidden space-y-1.5">
                                <li><a href='javascript:void(0)'
                                        class="text-sm text-gray-500 hover:text-black">Order</a></li>
                                <li><a href='javascript:void(0)'
                                        class="text-sm text-gray-500 hover:text-black">Wishlist</a></li>
                                <li><a href='javascript:void(0)' class="text-sm text-gray-500 hover:text-black">Gift
                                        Cards</a></li>
                                <li><a href='javascript:void(0)' class="text-sm text-gray-500 hover:text-black">Contact
                                        Us</a></li>
                            </ul>
                            {{-- <hr class="border-b-0 my-4" /> --}}
                            <ul class="hidden space-y-1.5">
                                <li><a href='javascript:void(0)'
                                        class="text-sm text-gray-500 hover:text-black">Coupons</a></li>
                                <li><a href='javascript:void(0)' class="text-sm text-gray-500 hover:text-black">Saved
                                        Credits</a></li>
                                <li><a href='javascript:void(0)' class="text-sm text-gray-500 hover:text-black">Contact
                                        Us</a></li>
                                <li><a href='javascript:void(0)' class="text-sm text-gray-500 hover:text-black">Saved
                                        Addresses</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>


            </div>
        </div>
    </header>

    <section x-data='{manageNav: false}' class="md:px-10 px-3 py-3 ">
        {{-- Grid Container --}}
        <div class="admin-grid">
            {{-- Grid Section One --}}
            <div class="adminGridSectionOne md:block hidden mt-4">
                <ul class="flex flex-col gap-y-2 md:w-[70%] ">

                    <li x-data="{ actionNavOne: false }" class="py-2 px-1 relative bg-slate-300 hover:bg-slate-100 rounded-sm">
                        <a @click="actionNavOne = ! actionNavOne" href="javascript:void(0)" class="flex items-center gap-1">
                            <img class="hidden" src="{{ asset('image/manage-icon.svg') }}" alt="lorem ipsum">
                            <span class="font-[600]">
                                Manage Admin Profile
                            </span>
                            <span class="mdi mdi-chevron-down"></span>
                        </a>

                        <div x-transition x-show="actionNavOne" @click.outside="actionNavOne = false"
                            class="relative bg-slate-200 px-1">
                            <ul class="flex flex-col gap-y-1 py-2">
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Update Admin Password
                                    </a>
                                </li>
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Reset Password
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li x-data="{ actionNavII: false }" class="py-2 px-1 relative bg-slate-300 hover:bg-slate-100 rounded-sm">
                        <a @click="actionNavII = ! actionNavII" href="javascript:void(0)" class="flex items-center gap-1">
                            <img class="hidden" src="{{ asset('image/manage-icon.svg') }}" alt="lorem ipsum">
                            <span class="font-[600]">
                                Manage 900 Events
                            </span>
                            <span class="mdi mdi-chevron-down"></span>
                        </a>

                        <div x-transition x-show="actionNavII" @click.outside="actionNavII = false"
                            class="relative bg-slate-200 px-1">
                            <ul class="flex flex-col gap-y-1 py-2">

                                <li class="hover:font-[600]">
                                    <a href="{{route('admin.events')}}">
                                        View Event Listings
                                    </a>
                                </li>
                                <li class="hover:font-[600]">
                                    <a href="{{route('admin.create.event')}}">
                                        Create Event Listing
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </li>

                    <li x-data="{ actionNavIII: false }" class="py-2 px-1 relative bg-slate-300 hover:bg-slate-100 rounded-sm">
                        <a @click="actionNavIII = ! actionNavIII" href="javascript:void(0)" class="flex items-center gap-1">
                            <img class="hidden" src="{{ asset('image/manage-icon.svg') }}" alt="lorem ipsum">
                            <span class="font-[600]">
                                Manage 900 Flight Bookings
                            </span>
                            <span class="mdi mdi-chevron-down"></span>
                        </a>

                        <div x-transition x-show="actionNavIII" @click.outside="actionNavIII = false"
                            class="relative bg-slate-200 px-1">
                            <ul class="flex flex-col gap-y-1 py-2">
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Update Admin Password
                                    </a>
                                </li>
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Reset Password
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li x-data="{ actionNavIV: false }" class="py-2 px-1 relative bg-slate-300 hover:bg-slate-100 rounded-sm">
                        <a @click="actionNavIV = ! actionNavIV" href="javascript:void(0)" class="flex items-center gap-1">
                            <img class="hidden" src="{{ asset('image/manage-icon.svg') }}" alt="lorem ipsum">
                            <span class="font-[600]">
                                Manage 900 Shortlet Listings
                            </span>
                            <span class="mdi mdi-chevron-down"></span>
                        </a>

                        <div x-transition x-show="actionNavIV" @click.outside="actionNavIV = false"
                            class="relative bg-slate-200 px-1">
                            <ul class="flex flex-col gap-y-1 py-2">
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Update Admin Password
                                    </a>
                                </li>
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Reset Password
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li x-data="{ actionNavV: false }" class="py-2 px-1 relative bg-slate-300 hover:bg-slate-100 rounded-sm">
                        <a @click="actionNavV = ! actionNavV" href="javascript:void(0)" class="flex items-center gap-1">
                            <img class="hidden" src="{{ asset('image/manage-icon.svg') }}" alt="lorem ipsum">
                            <span class="font-[600]">
                                Manage 900 Hotel Bookings
                            </span>
                            <span class="mdi mdi-chevron-down"></span>
                        </a>

                        <div x-transition x-show="actionNavV" @click.outside="actionNavV = false"
                            class="relative bg-slate-200 px-1">
                            <ul class="flex flex-col gap-y-1 py-2">
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Update Admin Password
                                    </a>
                                </li>
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Reset Password
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>






                </ul>
            </div>

            <div x-transition x-show="manageNav" @click.outside="manageNav = false" class="adminGridSectionOne md:hidden inline-block">
                <ul class="flex flex-col gap-y-2 md:w-[70%] ">

                    <li x-data="{ actionNavOne: false }" class="py-2 px-1 relative bg-slate-300 hover:bg-slate-100 rounded-sm">
                        <a @click="actionNavOne = ! actionNavOne" href="javascript:void(0)" class="flex items-center gap-1">
                            <img class="hidden" src="{{ asset('image/manage-icon.svg') }}" alt="lorem ipsum">
                            <span class="font-[600]">
                                Manage Admin Profile
                            </span>
                            <span class="mdi mdi-chevron-down"></span>
                        </a>

                        <div x-transition x-show="actionNavOne" @click.outside="actionNavOne = false"
                            class="relative bg-slate-200 px-1">
                            <ul class="flex flex-col gap-y-1 py-2">
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Update Admin Password
                                    </a>
                                </li>
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Reset Password
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li x-data="{ actionNavII: false }" class="py-2 px-1 relative bg-slate-300 hover:bg-slate-100 rounded-sm">
                        <a @click="actionNavII = ! actionNavII" href="javascript:void(0)" class="flex items-center gap-1">
                            <img class="hidden" src="{{ asset('image/manage-icon.svg') }}" alt="lorem ipsum">
                            <span class="font-[600]">
                                Manage 900 Events
                            </span>
                            <span class="mdi mdi-chevron-down"></span>
                        </a>

                        <div x-transition x-show="actionNavII" @click.outside="actionNavII = false"
                            class="relative bg-slate-200 px-1">
                            <ul class="flex flex-col gap-y-1 py-2">

                                <li class="hover:font-[600]">
                                    <a href="">
                                        View Event Listings
                                    </a>
                                </li>
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Create Event Listing
                                    </a>
                                </li>
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Edit Event Listings
                                    </a>
                                </li>
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Delete Event Listings
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li x-data="{ actionNavIII: false }" class="py-2 px-1 relative bg-slate-300 hover:bg-slate-100 rounded-sm">
                        <a @click="actionNavIII = ! actionNavIII" href="javascript:void(0)" class="flex items-center gap-1">
                            <img class="hidden" src="{{ asset('image/manage-icon.svg') }}" alt="lorem ipsum">
                            <span class="font-[600]">
                                Manage 900 Flight Bookings
                            </span>
                            <span class="mdi mdi-chevron-down"></span>
                        </a>

                        <div x-transition x-show="actionNavIII" @click.outside="actionNavIII = false"
                            class="relative bg-slate-200 px-1">
                            <ul class="flex flex-col gap-y-1 py-2">
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Update Admin Password
                                    </a>
                                </li>
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Reset Password
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li x-data="{ actionNavIV: false }" class="py-2 px-1 relative bg-slate-300 hover:bg-slate-100 rounded-sm">
                        <a @click="actionNavIV = ! actionNavIV" href="javascript:void(0)" class="flex items-center gap-1">
                            <img class="hidden" src="{{ asset('image/manage-icon.svg') }}" alt="lorem ipsum">
                            <span class="font-[600]">
                                Manage 900 Shortlet Listings
                            </span>
                            <span class="mdi mdi-chevron-down"></span>
                        </a>

                        <div x-transition x-show="actionNavIV" @click.outside="actionNavIV = false"
                            class="relative bg-slate-200 px-1">
                            <ul class="flex flex-col gap-y-1 py-2">
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Update Admin Password
                                    </a>
                                </li>
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Reset Password
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li x-data="{ actionNavV: false }" class="py-2 px-1 relative bg-slate-300 hover:bg-slate-100 rounded-sm">
                        <a @click="actionNavV = ! actionNavV" href="javascript:void(0)" class="flex items-center gap-1">
                            <img class="hidden" src="{{ asset('image/manage-icon.svg') }}" alt="lorem ipsum">
                            <span class="font-[600]">
                                Manage 900 Hotel Bookings
                            </span>
                            <span class="mdi mdi-chevron-down"></span>
                        </a>

                        <div x-transition x-show="actionNavV" @click.outside="actionNavV = false"
                            class="relative bg-slate-200 px-1">
                            <ul class="flex flex-col gap-y-1 py-2">
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Update Admin Password
                                    </a>
                                </li>
                                <li class="hover:font-[600]">
                                    <a href="">
                                        Reset Password
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>






                </ul>
            </div>

            {{-- Grid Section Two  --}}
            <div class="adminGridSectionTwo">
                <div @click="manageNav = ! manageNav" class="flex gap-2 md:hidden">
                    <img src="{{asset('image/manage-icon.svg')}}" alt="lorem ipsum">
                    <span  class="font-[500] hover:font-[600]">

                        Manage 900 Ticket
                    </span>
                </div>


                {{-- Flex Container  --}}
                {{-- to be lifed --}}
                <div>
                    @yield('content')
                </div>


                {{-- users --}}
                <div class="my-2">
                    <div class="overflow-x-auto">
                        <div class="shadow-md rounded-lg">
                            <h1 class="font-[700] uppercase">900 USERS LIST</h1>
                            <table class="w-full table-auto">
                                <thead class="uppercase bg-gray-700 text-white">
                                    <tr>
                                        <th class="py-2 px-4 text-left">User ID</th>
                                        <th class="py-2 px-4 text-left">Name</th>
                                        <th class="py-2 px-4 text-left">Email</th>
                                        <th class="py-2 px-4 text-left">Total Completed Orders</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white text-gray-500">
                                    <tr class="py-2">
                                        <td class="px-4">1</td>
                                        <td class="px-4">Urus Mark Donald</td>
                                        <td class="px-4">urusmkd@mail.com</td>
                                        <td class="px-4">N/A</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <footer class="bg-gray-900 pt-12 pb-6 px-10 font-[sans-serif] tracking-wide">
      <div class="max-w-screen-xl mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
          <div class="lg:flex lg:items-center">
            <a href="javascript:void(0)">
              <img src="{{asset('image/logo.png')}}" alt="logo" class="w-20" />
            </a>
          </div>

          <div class="lg:flex lg:items-center">
            <ul class="flex space-x-6">
              <li>
                <a href="javascript:void(0)">
                  <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-300 hover:fill-white w-7 h-7" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                      d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7v-7h-2v-3h2V8.5A3.5 3.5 0 0 1 15.5 5H18v3h-2a1 1 0 0 0-1 1v2h3v3h-3v7h4a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2z"
                      clip-rule="evenodd" />
                  </svg>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-300 hover:fill-white w-7 h-7" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                      d="M21 5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5zm-2.5 8.2v5.3h-2.79v-4.93a1.4 1.4 0 0 0-1.4-1.4c-.77 0-1.39.63-1.39 1.4v4.93h-2.79v-8.37h2.79v1.11c.48-.78 1.47-1.3 2.32-1.3 1.8 0 3.26 1.46 3.26 3.26zM6.88 8.56a1.686 1.686 0 0 0 0-3.37 1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68zm1.39 1.57v8.37H5.5v-8.37h2.77z"
                      clip-rule="evenodd" />
                  </svg>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="fill-gray-300 hover:fill-white w-7 h-7"
                    viewBox="0 0 24 24">
                    <path
                      d="M22.92 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.83 4.5 17.72 4 16.46 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98-3.56-.18-6.73-1.89-8.84-4.48-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.9 20.29 6.16 21 8.58 21c7.88 0 12.21-6.54 12.21-12.21 0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z" />
                  </svg>
                </a>
              </li>
            </ul>
          </div>

          <div class="hidden">
            <h4 class="text-lg mb-6 text-white">Useful links</h4>
            <ul class="space-y-4 pl-2">
              <li>
                <a href="javascript:void(0)" class="text-gray-300 hover:text-white text-sm">Featured</a>
              </li>
              <li>
                <a href="javascript:void(0)" class="text-gray-300 hover:text-white text-sm">New Arrivals</a>
              </li>
              <li>
                <a href="javascript:void(0)" class="text-gray-300 hover:text-white text-sm">New Arrivals</a>
              </li>
            </ul>
          </div>

          <div >
            <h4 class="text-lg mb-6 text-white">Information</h4>
            <ul class="space-y-4 pl-2">
              <li>
                <a href="javascript:void(0)" class="text-gray-300 hover:text-white text-sm">About Us</a>
              </li>
              <li>
                <a href="javascript:void(0)" class="text-gray-300 hover:text-white text-sm">Terms &amp; Conditions</a>
              </li>
              <li>
                <a href="javascript:void(0)" class="text-gray-300 hover:text-white text-sm">Privacy Policy</a>
              </li>
              <li>
                <a href="javascript:void(0)" class="text-gray-300 hover:text-white text-sm">Sale</a>
              </li>
              <li>
                <a href="javascript:void(0)" class="text-gray-300 hover:text-white text-sm">Documentation</a>
              </li>
            </ul>
          </div>
        </div>

        <p class='text-gray-300 text-sm mt-10'>©  900 Tickets. All rights reserved.
        </p>
      </div>
    </footer>

    <script src="{{ asset('js/admin_widget.js') }}"></script>
</body>

</html>
