<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - 900 Ticket</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('style')
</head>

<body>
    <header
        class='flex shadow-md py-3 px-4 sm:px-10 bg-white font-[sans-serif] min-h-[70px] tracking-wide relative z-50'>
        <div class='flex flex-wrap items-center justify-between lg:gap-y-4 gap-y-6 gap-x-4 w-full'>
            <a href="javascript:void(0)"><img src="https://readymadeui.com/readymadeui.svg" alt="logo"
                    class='w-36' />
            </a>

            <div id="collapseMenu"
                class='max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-40 max-lg:before:inset-0 max-lg:before:z-50'>
                <button id="toggleClose"
                    class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white w-9 h-9 flex items-center justify-center border'>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 fill-black"
                        viewBox="0 0 320.591 320.591">
                        <path
                            d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                            data-original="#000000"></path>
                        <path
                            d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                            data-original="#000000"></path>
                    </svg>
                </button>

                <ul
                    class='lg:flex lg:gap-x-10 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-2/3 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-4 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
                    <li class='mb-6 hidden max-lg:block'>
                        <a href="javascript:void(0)"><img src="https://readymadeui.com/readymadeui.svg" alt="logo"
                                class='w-36' />
                        </a>
                    </li>
                    <li
                        class='max-lg:border-b max-lg:py-3 max-lg:px-3 relative lg:after:absolute lg:after:bg-black lg:after:w-full lg:after:h-[2px] lg:after:block lg:after:top-7 lg:after:transition-all lg:after:duration-300'>
                        <a href='javascript:void(0)' class='text-black block text-[15px]'>Shopping</a>
                    </li>
                    <li
                        class='max-lg:border-b max-lg:py-3 max-lg:px-3 relative lg:hover:after:absolute lg:after:bg-black lg:after:w-0 lg:hover:after:w-full lg:hover:after:h-[2px] lg:after:block lg:after:top-7 lg:after:transition-all lg:after:duration-300'>
                        <a href='javascript:void(0)' class='text-black block text-[15px]'>Tracking</a>
                    </li>
                    <li
                        class='max-lg:border-b max-lg:py-3 max-lg:px-3 relative lg:hover:after:absolute lg:after:bg-black lg:after:w-0 lg:hover:after:w-full lg:hover:after:h-[2px] lg:after:block lg:after:top-7 lg:after:transition-all lg:after:duration-300'>
                        <a href='javascript:void(0)' class='text-black block text-[15px]'>Support</a>
                    </li>
                    <li
                        class='max-lg:border-b max-lg:py-3 max-lg:px-3 relative lg:hover:after:absolute lg:after:bg-black lg:after:w-0 lg:hover:after:w-full lg:hover:after:h-[2px] lg:after:block lg:after:top-7 lg:after:transition-all lg:after:duration-300'>
                        <a href='javascript:void(0)' class='text-black block text-[15px]'>Account</a>
                    </li>
                    <li
                        class='max-lg:border-b max-lg:py-3 max-lg:px-3 relative lg:hover:after:absolute lg:after:bg-black lg:after:w-0 lg:hover:after:w-full lg:hover:after:h-[2px] lg:after:block lg:after:top-7 lg:after:transition-all lg:after:duration-300'>
                        <a href='javascript:void(0)' class='text-black block text-[15px]'>Places</a>
                    </li>
                    <li
                        class='max-lg:border-b max-lg:py-3 max-lg:px-3 relative lg:hover:after:absolute lg:after:bg-black lg:after:w-0 lg:hover:after:w-full lg:hover:after:h-[2px] lg:after:block lg:after:top-7 lg:after:transition-all lg:after:duration-300'>
                        <a href='javascript:void(0)' class='text-black block text-[15px]'>Contact</a>
                    </li>
                </ul>
            </div>

            <div class='flex items-center max-sm:ml-auto space-x-6'>
                <ul>
                    <li id="profile-dropdown-toggle"
                        class="relative px-1 after:absolute after:bg-black after:w-full after:h-[2px] after:block after:top-8 after:left-0 after:transition-all after:duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                            class="cursor-pointer hover:fill-black" viewBox="0 0 512 512">
                            <path
                                d="M437.02 74.981C388.667 26.629 324.38 0 256 0S123.333 26.629 74.98 74.981C26.629 123.333 0 187.62 0 256s26.629 132.667 74.98 181.019C123.333 485.371 187.62 512 256 512s132.667-26.629 181.02-74.981C485.371 388.667 512 324.38 512 256s-26.629-132.667-74.98-181.019zM256 482c-66.869 0-127.037-29.202-168.452-75.511C113.223 338.422 178.948 290 256 290c-49.706 0-90-40.294-90-90s40.294-90 90-90 90 40.294 90 90-40.294 90-90 90c77.052 0 142.777 48.422 168.452 116.489C383.037 452.798 322.869 482 256 482z"
                                data-original="#000000" />
                        </svg>
                        <div id="profile-dropdown-menu"
                            class="bg-white block z-20 shadow-lg py-6 px-6 rounded sm:min-w-[320px] max-sm:min-w-[250px] absolute right-0 top-10">
                            <h6 class="font-semibold text-[15px]">Welcome</h6>
                            <p class="text-sm text-gray-500 mt-1">To access account and manage orders</p>
                            <button type='button'
                                class="bg-transparent border border-gray-300 hover:border-black rounded px-4 py-2 mt-4 text-sm text-black">LOGIN
                                / SIGNUP</button>
                            <hr class="border-b-0 my-4" />
                            <ul class="space-y-1.5">
                                <li><a href='javascript:void(0)'
                                        class="text-sm text-gray-500 hover:text-black">Order</a></li>
                                <li><a href='javascript:void(0)'
                                        class="text-sm text-gray-500 hover:text-black">Wishlist</a></li>
                                <li><a href='javascript:void(0)' class="text-sm text-gray-500 hover:text-black">Gift
                                        Cards</a></li>
                                <li><a href='javascript:void(0)' class="text-sm text-gray-500 hover:text-black">Contact
                                        Us</a></li>
                            </ul>
                            <hr class="border-b-0 my-4" />
                            <ul class="space-y-1.5">
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

                <button id="toggleOpen" class='lg:hidden ml-7'>
                    <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="bg-gray-900 pt-12 pb-6 px-10 font-[sans-serif] tracking-wide">
      <div class="max-w-screen-xl mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
          <div class="lg:flex lg:items-center">
            <a href="javascript:void(0)">
              <img src="https://readymadeui.com/readymadeui-light.svg" alt="logo" class="w-48" />
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

          <div>
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

          <div>
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

        <p class='text-gray-300 text-sm mt-10'>© ReadymadeUI. All rights reserved.
        </p>
      </div>
    </footer>

    <script src="{{ asset('js/admin_widget.js') }}"></script>
</body>

</html>
