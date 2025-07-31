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
    @include('user.layouts.loader')
    <!-- preloader start end-->

    <!--header start-->
    @include('user.layouts.header', ['categories' => $categories])
    <!--header end-->

    <!-- scrollUp Start Here -->
    {{-- <a href="#wrapper" data-type="section-switch" class="scrollUp">
        <i class="fas fa-angle-double-up"></i>
    </a> --}}
    <!-- scrollUp End Here -->


    {{-- main Layout starts here --}}
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-2">
        <!-- <img src="assets/img/breadcrumb/br-shape-1.webp" alt="Image" class="br-shape-one bounce sm-none"> -->
        <img src="{{ asset('user/assets/img/breadcrumb/br-shape-2.webp') }}" alt="Image"
            class="br-shape-two moveHorizontal sm-none">
        <img src="{{ asset('user/assets/img/breadcrumb/br-shape-3.webp') }}" alt="Image" class="br-shape-three">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Categories Details</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Categories</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <section class="shop-wrap-layout1 py-5 bg-light">
        <div class="container">
            <div class="row">

                <!-- Sidebar Column -->
                <div class="col-xl-3 col-lg-4">
                    <div class="widget widget-categories">
                        <h3 class="mb-3">Categories</h3>
                        <ul class="list-unstyled">
                            @foreach ($categories as $category)
                                <li
                                    class="{{ request()->segment(2) == $category->name ? 'active' : '' }} text-capitalize">
                                    <a href="{{ route('category.products', $category->name) }}">
                                        {{ $category->name }} <span
                                            class="badge text-primary ">({{ $category->products_count }})</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- Products Column -->
                <div class="col-xl-9 col-lg-8">
                    <div class="row">
                        {{-- starts --}}
                        @if ($products->count() > 0)
                            @foreach ($products as $product)
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 mb-4">
                                    <a href="{{ route('product_details', $product->slug) }}">
                                        <div class="shop-box-layout1">
                                            <div class="item-img">
                                                <img src="{{ asset('storage/' . $product->thumbnail) }}" alt="Product"
                                                    class="img-fluid">
                                            </div>
                                            <div class="item-content">
                                                <h4 class="item-title ellipsis-text"> {{ $product->name }}</h4>
                                                <div class="rate-items text-warning mb-2">
                                                    @if ($product->rating > 0)
                                                        @php
                                                            $averageRating = round($product->rating); // Round the rating to the nearest integer
                                                        @endphp
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            <i
                                                                class="fas fa-star {{ $i <= $averageRating ? 'text-warning' : 'text-secondary' }}"></i>
                                                        @endfor
                                                    @endif
                                                </div>
                                                {{-- <div class="item-price">
                                                    @if ($product->discount_price)
                                                        <del>
                                                            <span class="product-Price-amount me-3">
                                                                <span
                                                                    class="product-Price-currencySymbol text-no">Rs.</span>
                                                                {{ $product->price }}
                                                            </span>
                                                        </del>

                                                        <span class="product-Price-amount mx-3  fs-6 ">
                                                            <span class="product-Price-currencySymbol">Rs.</span>
                                                            {{ $product->discount_price }}
                                                        </span>
                                                    @else
                                                        <span class="product-Price-amount me-3  fs-6 fw-600 ">
                                                            <span class="product-Price-currencySymbol">Rs.</span>
                                                            {{ $product->price }}
                                                        </span>
                                                    @endif
                                                </div> --}}
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!-- product end -->
                            @endforeach
                        @else
                            <p class="text-left">No related products found.</p>
                        @endif
                        {{-- ends --}}

                    </div>

                    <!-- Pagination -->
                    {{-- <nav class="mt-4">
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav> --}}
                </div>


            </div>
        </div>
    </section>


    {{-- main Layout ends here --}}

    <!--footer start-->
    @include('user.layouts.footer')
    <!--footer end-->


    <!-- Javascript -->
    @include('user.layouts.script')
</body>

</html>
