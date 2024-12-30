@extends('layouts.app')
@section('title', 'Party Ticket Checkout')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/pages/event-item.css') }}">
    <link rel="stylesheet" href="{{ asset('css/desktop.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">



@endsection

@section('content')
    <div class="desktop-only-display">


        <section class="c-b-first-section">
            <p>/ back</p>
            <h3>Checkout Event</h3>
        </section>

        <section class="c-b-second-section">
            <div class="c-b-image-div">
                <img src="../../image/Rectangle 92.png" alt="">
            </div>
            <div class="c-b-text">
                <h2>BLACK OUT</h2>
                <div class="c-b-inner-test">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                            fill="none">
                            <path d="M11.0012 10.6675H7.33301" stroke="#5C6170" stroke-width="1.3" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M4.9989 10.5841C4.95285 10.5841 4.91553 10.6214 4.91553 10.6675C4.91553 10.7135 4.95285 10.7508 4.9989 10.7508C5.04494 10.7508 5.08226 10.7135 5.08226 10.6675C5.08226 10.6214 5.04494 10.5841 4.9989 10.5841Z"
                                stroke="#5C6170" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M11.0012 7.99949H7.33301" stroke="#5C6170" stroke-width="1.3" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M4.99854 1.99609V3.99693" stroke="#5C6170" stroke-width="1.3" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M11.0015 1.99609V3.99693" stroke="#5C6170" stroke-width="1.3" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M11.0026 2.99805H4.99756C3.3407 2.99805 1.99756 4.34119 1.99756 5.99805V11.0026C1.99756 12.6595 3.3407 14.0026 4.99756 14.0026H11.0026C12.6594 14.0026 14.0026 12.6595 14.0026 11.0026V5.99805C14.0026 4.34119 12.6594 2.99805 11.0026 2.99805Z"
                                stroke="#5C6170" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M4.9989 7.91612C4.95285 7.91612 4.91553 7.95345 4.91553 7.99949C4.91553 8.04553 4.95285 8.08286 4.9989 8.08286C5.04494 8.08286 5.08226 8.04553 5.08226 7.99949C5.08226 7.95345 5.04494 7.91612 4.9989 7.91612Z"
                                stroke="#5C6170" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p>Dec 13 2024</p>
                    </span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                            fill="none">
                            <path
                                d="M8.00006 14.0011C11.3151 14.0011 14.0026 11.3137 14.0026 7.99859C14.0026 4.6835 11.3151 1.99609 8.00006 1.99609C4.68497 1.99609 1.99756 4.6835 1.99756 7.99859C1.99756 11.3137 4.68497 14.0011 8.00006 14.0011Z"
                                stroke="#5C6170" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10.3036 8.76737L8 7.99971V3.99805" stroke="#5C6170" stroke-width="1.3"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p>8:00 pm</p>
                    </span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8 8.66602C6.89533 8.66602 6 7.77068 6 6.66602C6 5.56135 6.89533 4.66602 8 4.66602C9.10467 4.66602 10 5.56135 10 6.66602C10 7.77068 9.10467 8.66602 8 8.66602Z"
                                stroke="#5C6170" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.00017 14C8.00017 14 3.3335 10.1667 3.3335 6.66667C3.3335 4.08933 5.42284 2 8.00017 2C10.5775 2 12.6668 4.08933 12.6668 6.66667C12.6668 10.1667 8.00017 14 8.00017 14Z"
                                stroke="#5C6170" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p>21 Elizabeth St, off Ojuelegba Road, Surulere, Lagos 101283, Lagos, Nigeria</p>
                    </span>
                </div>
            </div>
            <div class="c-b-price">
                <h3>₦5,150.00</h3>
            </div>
        </section>

        <section class="c-b-third-section">
            <h2>checkout</h2>
            <p>Kindly fill in your personal details for ticket receipt</p>
            <div class="c-b-third-section-first-div">
                <span>
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect y="0.111084" width="20" height="20" rx="10" fill="#EEEEF2" />
                    </svg>
                    <p>Your Delivery Information</p>
                </span>
                <div class="input-section">
                    <div>
                        <input type="text" placeholder="First Name">
                        <input type="text" placeholder="Last Name">
                        <input type="text" placeholder="Phone">
                        <input type="text" placeholder="Gender">
                    </div>
                    <input type="email" placeholder="Email">
                </div>
            </div>
        </section>

        <section class="c-b-fourth-section">
            <section class="ticket-checkout">
                <div>
                    <span>
                        <p>Regular</p>
                        <small>1x</small>
                    </span>
                    <span>
                        <h5>0.00</h5>
                        <small>naira</small>
                    </span>
                </div>
                <div>
                    <span>
                        <p> subtotal</p>
                    </span>
                    <h5>#0.00</h5>
                </div>
                <div>
                    <span>
                        <p> fees</p>
                    </span>
                    <h5>#0.00</h5>
                </div>
                <div>
                    <h3>Total Price</h3>
                    <h5>#0.00</h5>
                </div>
                <div class="desktop-ticket-button">
                    <button>Make payment</button>
                </div>
            </section>
        </section>
    </div>
    <div class="mobile-only-display">
        <main class="party-ticket-main">
            <section class="complete-booking-header">
                <main>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="21" viewBox="0 0 24 21"
                        fill="none">
                        <path
                            d="M2.08866 9.45683H22.9566C23.2333 9.45683 23.4987 9.56676 23.6944 9.76244C23.8901 9.95811 24 10.2235 24 10.5002C24 10.777 23.8901 11.0424 23.6944 11.238C23.4987 11.4337 23.2333 11.5436 22.9566 11.5436H2.08866C1.81193 11.5436 1.54654 11.4337 1.35087 11.238C1.15519 11.0424 1.04526 10.777 1.04526 10.5002C1.04526 10.2235 1.15519 9.95811 1.35087 9.76244C1.54654 9.56676 1.81193 9.45683 2.08866 9.45683Z"
                            fill="black" />
                        <path
                            d="M2.52063 10.5002L11.1746 19.1521C11.3705 19.348 11.4806 19.6137 11.4806 19.8908C11.4806 20.1679 11.3705 20.4336 11.1746 20.6295C10.9786 20.8255 10.7129 20.9355 10.4358 20.9355C10.1588 20.9355 9.89303 20.8255 9.69711 20.6295L0.306537 11.239C0.209369 11.142 0.132277 11.0269 0.0796765 10.9001C0.0270759 10.7734 0 10.6375 0 10.5002C0 10.363 0.0270759 10.2271 0.0796765 10.1003C0.132277 9.97357 0.209369 9.85843 0.306537 9.76151L9.69711 0.370931C9.89303 0.175009 10.1588 0.0649414 10.4358 0.0649414C10.7129 0.0649414 10.9786 0.175009 11.1746 0.370931C11.3705 0.566853 11.4806 0.832581 11.4806 1.10966C11.4806 1.38673 11.3705 1.65246 11.1746 1.84838L2.52063 10.5002Z"
                            fill="black" />
                    </svg>
                    <h1>Complete your booking</h1>
                </main>
            </section>

            <section class="party-complete-booking">
                <img src="../../image/Rectangle 92 (1).png" alt="random">
                <div class="complete-booking-party-card">
                    <h2>Davido Timeless</h2>
                    <div class="card-div-1">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13"
                                fill="none">
                                <path
                                    d="M7 2.5V6.5L9.82667 9.32667M7 12.5C10.3137 12.5 13 9.81373 13 6.5C13 3.18629 10.3137 0.5 7 0.5C3.68629 0.5 1 3.18629 1 6.5C1 9.81373 3.68629 12.5 7 12.5Z"
                                    stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <p>Dec 06 2024</p>
                        </span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13"
                                fill="none">
                                <path
                                    d="M13 5.16667V3.16667C13 2.43029 12.3285 1.83333 11.5 1.83333H2.5C1.67157 1.83333 1 2.43029 1 3.16667V5.16667M13 5.16667V11.1667C13 11.9031 12.3285 12.5 11.5 12.5H2.5C1.67157 12.5 1 11.9031 1 11.1667V5.16667M13 5.16667H1M4 0.5V3.16667M10 0.5V3.16667"
                                    stroke="black" stroke-linecap="round" />
                            </svg>
                            <p>9:00PM (WAT)</p>
                        </span>
                    </div>
                    <div class="card-div-2">
                        <p>VIP 1x</p>
                        <p>Regular 1x</p>
                    </div>
                    <div class="card-div-3">
                        <h4>Total Price</h4>
                        <p>#22,000</p>
                    </div>
                </div>
            </section>

            <section class="passenger-forum-section">
                <h1 class="checkout-party">Check out</h1>
                <main>
                    <!-- break -->
                    <div class="passenger-form-sections">
                        <!-- break -->
                        <div class="passenger-form-input-style">
                            <span>
                                <label for="First Name">First Name</label>
                                <p>*</p>
                            </span>
                            <input type="text" placeholder="First Name">
                        </div>
                        <!-- break -->
                        <div class="passenger-form-input-style">
                            <span>
                                <label for="Last Name">Last Name</label>
                                <p>*</p>
                            </span>
                            <input type="text" placeholder="Last Nam">
                        </div>
                        <!-- break -->
                        <div class="passenger-form-input-style">
                            <span>
                                <label for="gender">gender</label>
                                <p>*</p>
                            </span>
                            <select id="gender" name="gender">
                                <option value="gender">gender</option>
                                <option value="male">male</option>
                                <option value="female">female</option>
                                <option value="other">other</option>
                            </select>
                        </div>
                        <!-- break -->
                        <div class="passenger-form-input-style">
                            <span>
                                <label for="Date of Birth">mobile number</label>
                                <p>*</p>
                            </span>
                            <div class="mobile-num">
                                <div class="input-flex-section">
                                    <h2>+234</h2>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 16 13" fill="none">
                                        <path
                                            d="M1.77778 0.5C1.30628 0.5 0.854097 0.694505 0.520699 1.04073C0.187301 1.38695 0 1.85652 0 2.34615V10.6538C0 11.1435 0.187301 11.6131 0.520699 11.9593C0.854097 12.3055 1.30628 12.5 1.77778 12.5H5.33333V0.5H1.77778Z"
                                            fill="#009A49" />
                                        <path d="M5.33333 0.5H10.6667V12.5H5.33333V0.5Z" fill="#EEEEEE" />
                                        <path
                                            d="M14.2222 0.5H10.6667V12.5H14.2222C14.6937 12.5 15.1459 12.3055 15.4793 11.9593C15.8127 11.6131 16 11.1435 16 10.6538V2.34615C16 1.85652 15.8127 1.38695 15.4793 1.04073C15.1459 0.694505 14.6937 0.5 14.2222 0.5Z"
                                            fill="#009A49" />
                                    </svg>
                                </div>
                                <input type="text" placeholder="yyyy-mm-dd">
                            </div>
                        </div>
                        <!-- break -->
                        <div class="passenger-form-input-style">
                            <span>
                                <label for="email">email</label>
                                <p>*</p>
                            </span>
                            <input type="email" placeholder="Email">
                        </div>
                    </div>
                </main>
            </section>

            <section class="promo-code">

                <h1>promo code</h1>
                <div>
                    <input type="text" placeholder="code">
                    <button>apply</button>
                </div>
            </section>

            <section class="terms-and-conditions">
                <input type="checkbox" placeholder="term and condition">
                <div>
                    <h4>by proceeding you agree with our</h4>
                    <p> Terms and conditions</p>
                </div>
            </section>

            <section class="checkout-button-section">
                <main>
                    <div>
                        <p>tip total</p>
                        <h3>$2,050,3455</h3>
                    </div>
                    <button>continue</button>
                </main>
            </section>
        </main>
    </div>
@endsection
