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
            background-color: #2457aa;

        }

        li.active a {
            color: white !important;
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
    @include('user.layouts.loader')
    <!-- preloader start end-->
    <!--page start-->
    <div class="page">

        <!--header start-->
        @include('user.layouts.header', ['categories' => $categories])
        <!--header end-->
        <!-- page-title -->
        <div class="ttm-page-title-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <div class="page-title-heading">
                                <h1 class="title">Shop</h1>
                            </div>
                            <div class="breadcrumb-wrapper mt-2">
                                <span class="mr-1"><i class="ti ti-home"></i></span>
                                <a title="Homepage" href="{{ route('home') }}">Home</a>
                                <span class="ttm-bread-sep">&nbsp;/&nbsp;</span>
                                <span class="ttm-textcolor-skincolor">Shop</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- page-title end-->

        <!--site-main start-->
        <div class="site-main">


            <!-- sidebar -->
            <section class="sidebar ttm-sidebar-left clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-3 widget-area sidebar-left">
                            <aside class="widget menu-content">
                                {{-- <h3 class="widget-title">All Categories</h3> --}}
                                {{-- <a href="{{ route('product') }}">All</a> --}}

                                <ul class="menu-vertical">
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
                            </aside>
                        </div>
                        <div class="col-lg-9 content-area">

                            <div class="products products-fitter">
                                <div class="ttm-tabs">
                                    <div class="content-sec-head-style">
                                        <div class="content-area-sec-title">
                                            <h5>Our Products</h5>
                                        </div>
                                    </div>

                                    {{-- <h4>
                                        <h2>Products in {{ $category->name }}</h2>
                                        <ul>
                                            @foreach ($products as $product)
                                                <li>{{ $product->name }} - ${{ $product->price }}</li>
                                            @endforeach
                                        </ul>
                                    </h4> --}}
                                    <div class="content-tab">
                                        <div class="content-inner">
                                            <div class="products row">

                                                @if ($products->count() > 0)


                                                    @foreach ($products as $product)
                                                        <!-- product -->
                                                        <div class="product col-md-4 col-sm-6 col-xs-12">
                                                            <a href="{{ route('product_details', $product->slug) }}">
                                                                <div class="product-box">
                                                                    <!-- product-box-inner -->
                                                                    <div class="product-box-inner">
                                                                        <div class="product-image-box">
                                                                            @if ($product->is_new)
                                                                                <div class="onsale">
                                                                                    {{ $product->is_new ? 'New' : '' }}
                                                                                </div>
                                                                            @endif

                                                                            @if ($product->is_trending)
                                                                                <div class="trending">
                                                                                    {{ $product->is_trending ? 'Trending' : '' }}
                                                                                </div>
                                                                            @endif
                                                                            <img class="img-fluid pro-image-front "
                                                                                src="/storage/{{ $product->thumbnail }}"
                                                                                alt="{{ $product->name }}">
                                                                        </div>
                                                                    </div><!-- product-box-inner end -->
                                                                    <div class="product-content-box">
                                                                        <h6 class="text-blue">{{ $product->name }}
                                                                        </h6>
                                                                        <div class="star-ratings">
                                                                            @if ($product->rating > 0)
                                                                                @php
                                                                                    $averageRating = round(
                                                                                        $product->rating,
                                                                                    ); // Round the rating to the nearest integer
                                                                                @endphp
                                                                                @for ($i = 1; $i <= 5; $i++)
                                                                                    <i
                                                                                        class="fa-solid fa-star {{ $i <= $averageRating ? 'text-warning' : 'text-secondary' }}"></i>
                                                                                @endfor
                                                                            @endif
                                                                        </div>
                                                                        <span class="price">
                                                                            @if ($product->discount_price)
                                                                                <ins>
                                                                                    <span
                                                                                        class="product-Price-amount me-3">
                                                                                        <span
                                                                                            class="product-Price-currencySymbol">Rs.</span>
                                                                                        {{ $product->discount_price }}
                                                                                    </span>
                                                                                </ins>
                                                                                <span
                                                                                    class=" discount_price product-Price-amount me-3 ">
                                                                                    <span
                                                                                        class="product-Price-currencySymbol">Rs.</span>
                                                                                    {{ $product->price }}
                                                                                </span>
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
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!-- product end -->
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
