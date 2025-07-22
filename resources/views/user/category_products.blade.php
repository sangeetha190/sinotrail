<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content=" ">
    <meta name="description" content="" />
    <meta name="author" content="#" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Product</title>
    @include('user.layouts.link')
    <style>
        li.active {
            /* background-color: #2457aa; */
            color: #2457aa
        }

        li.active a {
            /* background-color: #2457aa; */
            color: #2457aa !important;
            font-weight: 700 !important;
        }

        .discount_price.product-Price-amount {
            font-weight: 500;
            text-decoration: line-through;
            margin-left: 5px;
            color: #656c76;
        }
    </style>
</head>

<body>
    <!-- preloader start-->
    {{-- @include('user.layouts.loader') --}}
    <!-- preloader start end-->

    <!--header start-->
    @include('user.layouts.header', ['categories' => $categories])
    <!--header end-->




    <!-- scrollUp Start Here -->
    <a href="#wrapper" data-type="section-switch" class="scrollUp">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <!-- scrollUp End Here -->
    <div class="page">

        <!-- Inner Page Banner Area Start Here -->
        <section class="inner-page-banner bg-common inner-page-top-margin"
            style="background-image: url({{ asset('user/assets/img/about/br.png') }});background-size: cover;background-position: right;background: #016db2;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Categories Details</h1>
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li>Categories Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inner Page Banner Area End Here -->




        <!--site-main start-->
        <div class="site-main my-5">


            <!-- sidebar -->
            <section class="sidebar ttm-sidebar-left clearfix mb-5">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-3 widget-area sidebar-left">








                            <aside class="widget menu-content">

                                <div class="widget widget-categories">
                                    <h3 class="section-title title-bar-primary">Categories</h3>
                                    <ul class="menu-vertical">
                                        {{-- <li class="{{ request()->routeIs('product') ? 'active' : '' }}">
                                    <a href="{{ route('product') }}" class="text-uppercase">All Categories</a>
                                </li> --}}
                                        @foreach ($categories as $category)
                                            <li
                                                class="{{ request()->segment(2) == $category->name ? 'active' : '' }} text-capitalize">
                                                <a href="{{ route('category.products', $category->name) }}">
                                                    {{ $category->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>

                                    {{-- <ul class="menu-vertical">
                                        <li class="{{ request()->routeIs('product') ? 'active' : '' }}">
                                            <h4 class="mb-0 mb-4">
                                                <a href="{{ route('product') }}" class="text-uppercase text-dark">All
                                                    Categories</a>
                                            </h4>

                                        </li>
                                        @foreach ($categories as $category)
                                            <li class="{{ request()->segment(2) == $category->name ? 'active' : '' }}"
                                                style="border-bottom:2px solid rgba(232, 232, 232, 0.79)">
                                                <a href="{{ route('category.products', $category->name) }}"
                                                    class="text-uppercase">{{ $category->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul> --}}
                            </aside>
                        </div>
                        <div class="col-lg-9 content-area">

                            <div class="products products-fitter">
                                <div class="ttm-tabs">
                                    <div class="content-sec-head-style">
                                        <div class="content-area-sec-title">
                                            <h3>Our Products</h3>
                                        </div>
                                    </div>
                                    <div class="content-tab">
                                        <div class="content-inner">
                                            <div class="products row">

                                                @if ($products->count() > 0)
                                                    @foreach ($products as $product)
                                                        <a href="{{ route('product_details', $product->slug) }}">
                                                            <!-- product -->
                                                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
                                                                <div class="shop-box-layout1 margin-b-30">
                                                                    <div class="item-img">
                                                                        <img src="/storage/{{ $product->thumbnail }}"
                                                                            alt="{{ $product->name }}">

                                                                    </div>
                                                                    <div class="item-content">
                                                                        <h4 class="item-title">
                                                                            <a href="">{{ $product->name }}</a>
                                                                        </h4>
                                                                        <div class="rate-items">
                                                                            <div class="star-ratings">
                                                                                @if ($product->rating > 0)
                                                                                    @php
                                                                                        $averageRating = round(
                                                                                            $product->rating,
                                                                                        ); // Round the rating to the nearest integer
                                                                                    @endphp
                                                                                    @for ($i = 1; $i <= 5; $i++)
                                                                                        <i
                                                                                            class="fas fa-star {{ $i <= $averageRating ? 'text-warning' : 'text-secondary' }}"></i>
                                                                                    @endfor
                                                                                @endif
                                                                            </div>
                                                                            {{-- <div class="rate-item">
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="rate-item">
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="rate-item">
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="rate-item">
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="rate-item">
                                                <i class="fas fa-star"></i>
                                            </div> --}}
                                                                        </div>
                                                                        {{-- <div class="item-price">

                                                                            @if ($product->discount_price)
                                                                                <del>
                                                                                    <span
                                                                                        class="product-Price-amount me-3">
                                                                                        <span
                                                                                            class="product-Price-currencySymbol text-no">Rs.</span>
                                                                                        {{ $product->price }}
                                                                                    </span>
                                                                                </del>
                                                                                <ins>
                                                                                    <span
                                                                                        class="product-Price-amount mx-3">
                                                                                        <span
                                                                                            class="product-Price-currencySymbol">Rs.</span>
                                                                                        {{ $product->discount_price }}
                                                                                    </span>
                                                                                </ins>
                                                                            @else
                                                                                <ins>
                                                                                    <span
                                                                                        class="product-Price-amount me-3">
                                                                                        <span
                                                                                            class="product-Price-currencySymbol">Rs.</span>
                                                                                        {{ $product->price }}
                                                                                    </span>
                                                                                </ins>
                                                                            @endif
                                                                        </div> --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- product end -->
                                                        </a>
                                                    @endforeach
                                                @else
                                                    <p class="text-left">No related products found.</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- row end -->
                </div>
            </section>
            <!-- sidebar end -->

        </div><!--site-main end-->
        <!--footer start-->
        @include('user.layouts.footer')
        <!--footer end-->
    </div>
    <!-- page end -->
    <!-- Javascript -->
    @include('user.layouts.script')
</body>

</html>
