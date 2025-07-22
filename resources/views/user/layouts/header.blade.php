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
<header id="header_1">
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
</header>
<!-- Header Area End Here -->
