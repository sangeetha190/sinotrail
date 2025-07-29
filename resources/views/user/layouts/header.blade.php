<style>
    .menu.menu-mobile li.active {
        background-color: #ffffff;

    }

    .menu.menu-mobile li.active a {
        color: rgb(232, 104, 0) !important;
        /* background-color: #010101; */

    }

    li.active a {
        /* background-color: #2457aa; */
        color: #2457aa !important;
        font-weight: 700 !important;
    }

    /* li.active a {
            color: white !important;
        } */
</style>
<!-- Header Area Start Here -->
{{-- <header id="header_1">
    <div class="header-top-bar bg-primary100 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-9 col-md-12 col-12 header-contact-layout3">
                    <ul>

                        <li>
                            <i class="fas fa-phone"></i>Call: 044-4542 8844
                        </li>
                        <li>
                            <i class="far fa-clock"></i>Mon - Fri:
                            9.00am - 11.00pm
                        </li>
                    </ul>
                </div>
                <div class="col-xl-4 col-lg-3 col-md-12 col-12 header-social-layout2">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-skype"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu-area header-menu-layout4">
        <div class="container">
            <div class="row no-gutters d-flex align-items-center">
                <div class="col-lg-3 logo-area-layout1">
                    <a href="{{ route('home') }}" class="temp-logo">
                        <img src=" {{ asset('user/assets/img/logo.png') }}" alt="logo" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-7 possition-static">
                    <div class="template-main-menu">
                        <nav id="dropdown">
                            <ul>
                                <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                                    <a href="{{ route('about') }}">About</a>
                                </li>
                                <li class="{{ request()->routeIs('service') ? 'active' : '' }}">
                                    <a href="{{ route('service') }}">Service</a>
                                </li>
                                <li
                                    class="{{ request()->routeIs('product') || request()->routeIs('category.products') || request()->routeIs('category.allproducts') || request()->routeIs('product') ? 'active' : '' }}">
                                    <a href="{{ route('product') }}">Product</a>
                                </li>
                                <li class="{{ request()->routeIs('gallery') ? 'active' : '' }}">
                                    <a href="{{ route('gallery') }}">Gallery</a>
                                </li>
                                <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                                    <a href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header-action-items-layout1">
                        <ul>

                            <li>
                                <a href="{{ route('contact') }}" class="action-items-primary-btn ml-3">Appointment</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header> --}}









<!-- Start Navbar Area -->
<div class="navbar-area style-one" id="navbar">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <ul class="contact-info list-style">
                        <li><i class="flaticon-mail"></i><a href="mailto:info@example.com">sinoatrialservice@gmail.com</a>
                        </li>
                        <li><i class="flaticon-phone-call"></i> 965944
                            68 37 / 98416 98 988</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <ul class="contact-info text-lg-end list-style">
                        <li><i class="flaticon-clock"></i>Mon - Sat:
                            09.00 to 6.00, Sunday: Closed</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.html">
                <img class="logo-light" src="{{ asset('user/assets/img/logo.png') }}" alt="logo">
                <img class="logo-dark" src="{{ asset('user/assets/img/logo-white.webp') }}" alt="logo">
            </a>
            <div class="other-option d-flex align-items-center justify-content-end d-lg-none">
                <!-- <button type="button" class="search-btn d-lg-none" data-bs-toggle="modal" data-bs-target="#searchModal">
          <i class="flaticon-search"></i>
        </button> -->
                <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button"
                    aria-controls="navbarOffcanvas">
                    <span class="burger-menu">
                        <span class="top-bar"></span>
                        <span class="middle-bar"></span>
                        <span class="bottom-bar"></span>
                    </span>
                </a>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="{{ route('home') }}"
                            class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                    <li class="nav-item"><a href="{{ route('about') }}"
                            class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                    <li class="nav-item"><a href="{{ route('service') }}"
                            class="nav-link {{ request()->routeIs('service') ? 'active' : '' }}">Services</a></li>
                    <li class="nav-item"><a href="{{ route('product') }}"
                            class="nav-link {{ request()->routeIs('product') || request()->routeIs('category.products') || request()->routeIs('category.allproducts') || request()->routeIs('product') ? 'active' : '' }}">Products</a>
                    </li>
                    <li class="nav-item"><a href="{{ route('gallery') }}"
                            class="nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}">Gallery</a></li>
                    <li class="nav-item"><a href="{{ route('contact') }}"
                            class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                </ul>

                <div class="others-option d-flex align-items-center">
                    <div class="option-item">
                        <!-- <button type="button" class="search-btn" data-bs-toggle="modal" data-bs-target="#searchModal">
              <i class="flaticon-search"></i>
            </button> -->
                    </div>
                    <div class="option-item">
                        <div class="contact-item">
                            <i class="flaticon-telephone"></i>
                            <span>Phone Number</span>
                            <a href="tel:968547856254">+044-4542
                                8844</a>
                        </div>
                    </div>
                    <div class="option-item">
                        <a class="sidebar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button"
                            aria-controls="navbarOffcanvas">
                            <i class="flaticon-list"></i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- End Navbar Area -->





{{-- mobile header starts --}}
<div class="responsive-navbar offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="navbarOffcanvas">
    <div class="offcanvas-header">
        <a href="index.html" class="logo d-inline-block">
            <img class="logo-light" src="{{ asset('user/assets/img/logo.png') }}" alt="logo">
            <img class="logo-dark" src="{{ asset('user/assets/img/logo-white.webp') }}" alt="logo">
        </a>
        <button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="ri-close-line"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        <div class="accordion" id="navbarAccordion">

            <div class="accordion-item">
                <a class="accordion-button without-icon active" href="{{ route('home') }}">
                    Home
                </a>
            </div>

            <div class="accordion-item">
                <a class="accordion-button without-icon" href="{{ route('about') }}">
                    About
                </a>
            </div>

            <div class="accordion-item">
                <a class="accordion-button without-icon" href="{{ route('service') }}">
                    Services
                </a>
            </div>

            <div class="accordion-item">
                <a class="accordion-button without-icon" href="{{ route('product') }}">
                    Products
                </a>
            </div>

            <div class="accordion-item">
                <a class="accordion-button without-icon" href="{{ route('gallery') }}">
                    Gallery
                </a>
            </div>

            <div class="accordion-item">
                <a class="accordion-button without-icon" href="{{ route('contact') }}">
                    Contact
                </a>
            </div>

        </div>

        <!-- Contact Info Section -->
        <div class="offcanvas-contact-info">
            <h4>Contact Info</h4>
            <ul class="contact-info list-style">
                <li>
                    <i class="flaticon-pin"></i>
                    <p>Sinoatrial Medical Technologies ,
                        No.10A ,F2 First Floor,
                        VGN Nagar,
                        4th main road, Ayyapanthangal,
                        Chennai-600056.</p>
                </li>
                <li>
                    <i class="flaticon-mail"></i>
                    <a href="mailto:info@example.com">sinoatrialservice@gmail.com</a>
                </li>
                <li>
                    <i class="flaticon-phone-call"></i>
                    <a href="tel:968547856254">+ 98416 98 988</a>
                </li>
                <li>
                    <i class="flaticon-phone-call"></i>
                    <a href="tel:968547856254">+ 965944 68 37</a>
                </li>
            </ul>
            <ul class="social-profile list-style">
                <li><a href="#"><i class="ri-facebook-fill"></i></a></li>
                <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                <li><a href="#"><i class="ri-linkedin-fill"></i></a></li>
                <li><a href="#"><i class="ri-twitter-fill"></i></a></li>
            </ul>
        </div>

        <!-- Optional for Mobile -->
        <div class="others-option d-lg-none">
            <div class="contact-item">
                <i class="flaticon-emergency-call"></i>
                <span>Phone Number</span>
                <a href="tel:968547856254">+968 547856 254</a>
            </div>
        </div>
    </div>

</div>
{{-- mobile header Ends --}}
<!-- Header Area End Here -->
