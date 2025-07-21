<style>
    .menu.menu-mobile li.active {
        background-color: #ffffff;

    }

    .menu.menu-mobile li.active a {
        color: rgb(232, 104, 0) !important;
        /* background-color: #010101; */

    }

    li.active {
        background-color: #2457aa;

    }

    li.active a {
        color: white !important;
    }
</style>
<!--header start-->
<header id="masthead" class="header ttm-header-style-01">
    <!-- header_main -->
    <div class="header_main">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-3 col-3 order-1">
                    <!-- site-branding -->
                    <div class="site-branding">
                        <a class="home-link" href="{{ route('home') }}" title="Fixfellow" rel="home">
                            <img id="logo-img" class="img-center"
                                src="{{ asset('user/assets/images/logo/aqua-color.png') }}" alt="aqua water purifier">
                        </a>
                    </div><!-- site-branding end -->
                </div>
                <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                    <!-- header_search -->
                    {{-- <div class="header_search">
                                <div class="header_search_content">
                                    <div id="search_block_top" class="search_block_top">
                                        <form id="searchbox" method="get" action="#">
                                            <input class="search_query form-control" type="text"
                                                id="search_query_top" name="s"
                                                placeholder="Search For Shopping...." value="">
                                            <div class="categories-block">
                                                <select id="search_category" name="search_category"
                                                    class="form-control">
                                                    <option value="all">All Categories</option>
                                                    <option value="Categories 1">Categories 1</option>
                                                    <option value="Categories 2">Categories 2</option>
                                                    <option value="Categories 3">Categories 3</option>
                                                </select>
                                            </div>
                                            <button type="submit" name="submit_search"
                                                class="btn btn-default button-search"><i
                                                    class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div> --}}
                    <!-- header_search end -->
                </div>
                <div
                    class="col-lg-3 col-9 order-lg-3 order-2 text-lg-left text-right d-flex flex-row align-items-center justify-content-end">
                    <!-- header_extra -->
                    <div class="header_extra d-flex flex-row align-items-center justify-content-end">

                        <div class="cart">
                            <div class="dropdown_link d-flex flex-row align-items-center justify-content-end">
                                <div
                                    class="user_zone_block d-flex flex-row align-items-center justify-content-end ml-auto my-0">
                                    <div class="icon"> <i class="fa fa-phone"></i></div>
                                    <a href="tel:+919047772117" class="call-icon mx-2 text-white">
                                        +91 90477 72117
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- header_extra end -->
                </div>
            </div>
        </div>
    </div>
    <!-- haeder-main end -->
    <!-- site-header-menu -->
    <div id="site-header-menu" class="site-header-menu ttm-bgcolor-white clearfix">
        <div class="site-header-menu-inner stickable-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main_nav_content d-flex flex-row justify-content-between">
                            <div class="cat_menu_container">
                                <a href="#" class="cat_menu d-flex flex-row align-items-center">
                                    <div class="cat_icon"><i class="fa fa-bars"></i></div>
                                    <div class="cat_text"><span>Shop by</span>
                                        <h4>Categories</h4>
                                    </div>
                                </a>
                                <ul class="cat_menu_list menu-vertical">
                                    <li><a href="#" class="close-side"><i class="fa fa-times"></i></a>
                                    </li>
                                    <li class="{{ request()->routeIs('product') ? 'active' : '' }}">
                                        <a href="{{ route('product') }}" class="text-uppercase">All
                                            Categories</a>
                                    </li>
                                    @foreach ($categories as $category)
                                        <li class="{{ request()->segment(2) == $category->name ? 'active' : '' }}">
                                            <a href="{{ route('category.products', $category->name) }}"
                                                class="text-uppercase">{{ $category->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!--site-navigation -->
                            <div id="site-navigation" class="site-navigation">
                                <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                    <span class="menubar-box">
                                        <span class="menubar-inner"></span>
                                    </span>
                                </div>
                                <!-- menu -->
                                <nav class="menu menu-mobile" id="menu">
                                    <ul class="nav">
                                        <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                            <a href="{{ route('home') }}">Home</a>
                                        </li>

                                        <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                                            <a href="{{ route('about') }}">About Us</a>
                                        </li>

                                        {{-- <li class="{{ request()->routeIs('service') ? 'active' : '' }}">
                                                    <a href="{{ route('service') }}">Service</a>
                                                </li> --}}

                                        <li
                                            class="{{ request()->routeIs('product') || request()->routeIs('category.products') || request()->routeIs('category.allproducts') || request()->routeIs('product') ? 'active' : '' }}">
                                            <a href="{{ route('product') }}">Products</a>
                                        </li>

                                        <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                                            <a href="{{ route('contact') }}">Contact Us</a>
                                        </li>
                                    </ul>

                                </nav>
                            </div><!-- site-navigation end-->
                            {{-- <div
                                        class="user_zone_block d-flex flex-row align-items-center justify-content-end ml-auto">
                                        <div class="icon"> <i class="fa fa-phone"></i></div>
                                        <a href="tel:+919876543210" class="call-icon mx-2">
                                            +919876543210
                                        </a>
                                    </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- site-header-menu end -->
</header>
<!--header end-->
