<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - 900 Ticket</title>
    <link rel="stylesheet" href="{{asset('css/mobile.css')}}">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
    @yield('style')
    <!-- Styles / Scripts -->
    {{-- @vite('resources/css/app.css') --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])
        {{-- @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
             @vite('resources/css/app.css')
         @else
           <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        @endif --}}
</head>
<body>
            <!-- side bar section -->

        <section id="side-bar">
            <main class="main-side-bar">
                <svg class="icon-cancle" id="hide-side-bar" width="83" height="24"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                  </svg>
                  <div class="side-bar-first-section">
                    <img src="image/Vector (2).png" alt="nigeria flag">
                    <p><a id="region-language" href="javascript:void(0)">nigeria,eN</a></p>
                    <p><a id="currency" href="javascript:void(0)">naira</a></p>
                  </div>

                <div class="side-bar-second-section">
                    <!-- flight -->
                    <a id="flight-link" href="javascript:void(0)">
                        <span>
                            <img src="image/sideBar/menu-active-flight-icon 1.png" alt=" flight icon">
                            <p>flight</p>
                        </span>
                    </a>
                    <!-- hotels -->
                    <span>
                        <img src="image/sideBar/menu-active-hotel 1.png" alt=" hotel icon">
                        <p>hotels</p>
                    </span>
                    <!-- club reservation -->
                    <span>
                        <img src="image/sideBar/Vector.png" alt=" club reservation">
                        <p>club reservation</p>
                    </span>
                    <!-- sports tickets -->
                    <span>
                        <img src="image/sideBar/Vector (1).png" alt=" sport tickets">
                        <p>sport tickets</p>
                    </span>
                    <!-- holidays -->
                    <span>
                        <img src="image/sideBar/Vector (2).png" alt=" holidays">
                        <p>holidays</p>
                    </span>
                </div>

                <div class="side-bar-third-section">
                    <!-- my carts -->
                    <span>
                        <img src="image/sideBar/Vector (3).png" alt=" my carts">
                        <p>my carts</p>
                    </span>

                    <!-- users profile icon -->
                    <span>
                        <img src="image/sideBar/Vector (4).png" alt=" user profile">
                        <p>you</p>
                    </span>

                </div>

                <div class="side-bar-fourth-section">
                    <!-- whatapp -->
                    <span>
                        <img src="image/sideBar/Whatsapp.png" alt=" whatsapp">
                        <p>whatapp</p>
                    </span>

                    <!-- customer support -->
                    <span>
                        <img src="image/sideBar/Vector (5).png" alt="customer support">
                        <p>custormer support</p>
                    </span>

                    <!-- contact us -->
                    <span>
                        <img src="image/sideBar/Vector (6).png" alt="customer support">
                        <p>contact us</p>
                    </span>

                </div>
            </main>
        </section>

         <!-- side bar section  end -->
        <header>
            <div class="header-grid">
                <div class="header-first-div">
                    <svg class="icons bar" id="show-side-bar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>

                    <div>
                        <img src="image/20241028_211741 1.png" alt="900 logo">
                    </div>
                </div>
                <div class="header-second-div">
                    <div>
                        <img src="image/Vector (2).png" alt="nigeria flag">

                        <a id="region-language" href="javascript:void(0)">
                        <div>
                                <h3>ng</h3>
                                    <p>|</p>
                                <h3>en</h3>
                                <svg class="icons arrow-down" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                        </a>

                            <svg class="icons user" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>

                        </div>
                    </div>
            </div>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <img src="image/20241028_211741 1.png" alt="900 logo">
            <h2>We are 900Ticket, a B2B booking company specializing in travel and entertainment reservations for businesses and organizations. </h2>
            <main>
                <div>
                    <h3>Company</h3>
                    <p>about 900 ticket</p>
                    <p>contact us</p>
                    <p>900 tiket affiliate</p>
                    <p>refer a customer</p>
                    <p>blog</p>
                </div>
                <div>
                    <h3>Useful Links</h3>
                    <p>privacy and policy</p>
                    <p>terms and condition</p>
                    <p>fligh schedules</p>
                    <p>advertise with us</p>
                    <p>hotlines</p>
                </div>
            </main>
            <h2>CONNECT WITH US</h2>
            <main>
                <img src="image/Book (2) 1.png" alt="instagram">
                <img src="image/Book (2) 2.png" alt="facebook">
                <img src="image/Book (2) 3.png" alt="x">
                <img src="image/Book (2) 4.png" alt="lindkin">
                <img src="image/Book (2) 5.png" alt="you tube">
            </main>

            <h1>© 2024 900Ticket Ltd</h1>
        </footer>
       <!-- swiper cdn -->
       {{-- route{{asset/}} --}}
    <script src="{{asset('js/toogles.js')}}"></script>
    <script src="{{asset('js/routes.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{asset('js/swiper.js')}}"></script>
</body>
</html>
