<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Aqua Water Purifiers</title>
    @include('user.layouts.link')
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

        <div id="rev_slider_5_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container slide-overlay"
            data-alias="classic4export" data-source="gallery">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <!-- Slide 1 (Left Side Content) -->
                    <div class="swiper-slide">
                        <img src="{{ asset('user/assets/images/slides/Untitled design.jpg') }}" alt="Slide 1">
                        <div class="slide-content left">
                            <h2>Exclusive Offer!</h2>
                            <p>Get 50% off on your first purchase</p>
                            <a href="{{ route('contact') }}" class="btn-buy">Buy Now</a>
                        </div>
                    </div>

                    <!-- Slide 2 (Right Side Content) -->
                    <div class="swiper-slide">
                        <img src="{{ asset('user/assets/images/slides/h2-banner1.png') }}" alt="Slide 2">
                        <div class="slide-content right">
                            <h2>New Collection!</h2>
                            <p>Explore the latest arrivals with amazing discounts</p>
                            <a href="{{ route('contact') }}" class="btn-buy">Buy Now</a>
                        </div>
                    </div>

                    <!-- Slide 3 (Left Side Content Again) -->
                    <div class="swiper-slide">
                        <img src="{{ asset('user/assets/images/slides/newww.png') }}" alt="Slide 3">
                        <div class="slide-content left">
                            <h2>Limited Time Deal!</h2>
                            <p>Hurry up! Offer ends soon</p>
                            <a href="{{ route('contact') }}" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="swiper-button-next text-white d-none"></div>
                <div class="swiper-button-prev text-white d-none"></div>
                <!-- Pagination -->
                <div class="swiper-pagination d-none"></div>
            </div>



        </div>
        <!-- END REVOLUTION SLIDER -->

        <!--site-main start-->
        <div class="site-main">

            <!-- product-section -->
            <section class="product-section clearfix pt-4">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-7 col-md-8 ml-auto mr-auto">
                            <!-- section title -->
                            <div class="section-title title-style-center_text style2">
                                <div class="title-header">
                                    <h5>how it works</h5>
                                    <h2 class="title">Top Selling Products</h2>
                                </div>
                            </div><!-- section title end -->
                        </div>
                    </div><!-- row end -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ttm-tabs tabs-for-products" data-effect="fadeIn">
                                {{-- <ul class="tabs clearfix">
                                    <li class="tab active"><a href="#">View All</a></li>
                                    <li class="tab"><a href="#">Aquaguard</a></li>
                                    <li class="tab"><a href="#">Purosis</a></li>
                                    <li class="tab"><a href="#">AO-Smith</a></li>
                                    <li class="tab"><a href="#">Blueshell</a></li>
                                    <li class="tab"><a href="#">Lexcruze</a></li>
                                    <li class="tab"><a href="#">Aquaara</a></li>
                                    <li class="tab"><a href="#">Usha</a></li>
                                    <li class="tab"><a href="#">Finpure</a></li>
                                    <li class="tab active"><a href="#">View All</a></li>
                                    @foreach ($categories as $category)
                                        <li class="{{ request()->segment(2) == $category->name ? 'active' : '' }}">
                                            <a
                                                href="{{ route('category.products', $category->name) }}">{{ $category->name }}</a>
                                        </li>
                                    @endforeach
                                </ul> --}}

                                <div class="content-tab">


                                    {{-- starts --}}
                                    <div class="content-inner">
                                        <div class="products row">
                                            @if ($products->count() > 0)
                                                @foreach ($products as $product)
                                                    <!-- product -->
                                                    <div class="product col-md-3 col-sm-6 col-xs-12">
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
                                                                            <del>
                                                                                <span class="product-Price-amount me-3">
                                                                                    <span
                                                                                        class="product-Price-currencySymbol">Rs.</span>
                                                                                    {{ $product->price }}
                                                                                </span>
                                                                            </del>
                                                                            <ins>
                                                                                <span class="product-Price-amount me-3">
                                                                                    <span
                                                                                        class="product-Price-currencySymbol">Rs.</span>
                                                                                    {{ $product->discount_price }}
                                                                                </span>
                                                                            </ins>
                                                                        @else
                                                                            <ins>
                                                                                <span class="product-Price-amount me-3">
                                                                                    <span
                                                                                        class="product-Price-currencySymbol">Rs.</span>
                                                                                    {{ $product->price }}
                                                                                </span>
                                                                            </ins>
                                                                        @endif

                                                                        {{-- @if ($product->discount_price)
                                                                            <del><span
                                                                                    class="product-Price-amount me-3">
                                                                                    <span
                                                                                        class="product-Price-currencySymbol">Rs.</span>
                                                                                    ${{ $product->price }}
                                                                                </span>
                                                                            </del>
                                                                        @endif


                                                                        @if ($product->discount_price)
                                                                            <ins><span class="product-Price-amount">
                                                                                    <span
                                                                                        class="product-Price-currencySymbol">Rs.</span>
                                                                                    {{ $product->discount_price }}
                                                                                </span>
                                                                            </ins>
                                                                        @endif --}}

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
                                    {{-- Ends --}}





                                </div>



                            </div>
                        </div>
                    </div>
                </div>
                <!---------->
                <div class="col-12 mt-5">
                    <div class="deliver-btn text-center">
                        <a href="{{ route('product') }}" class="btn order-btn">
                            View all Products
                        </a>
                    </div>
                </div>

            </section>
            <!-- product-section end-->

            <!-- testimonial-section -->
            <section class="testimonial-section bg-img1 ttm-bgcolor-darkgrey clearfix">
                <div class="row-wrapper-bg-layer ttm-bg-layer"></div>
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-7 ml-auto mr-auto">
                            <!-- section title -->
                            <div class="section-title title-style-center_text style2">
                                <div class="title-header">
                                    <h5>TESTIMONIAL</h5>
                                    <h2 class="title">What Our Customers Saying</h2>
                                </div>
                            </div><!-- section title end -->
                        </div>
                    </div><!-- row end -->
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <!-- slick_slider -->
                            <div class="slick_slider"
                                data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "autoplay":true, "centerMode":true, "centerPadding":0, "infinite":true, "initialSlide":2}'>
                                <!-- testimonials -->
                                <div class="testimonials ttm-testimonial-box-view-style1">
                                    <div class="testimonial-content">
                                        <div class="testimonial-avatar">
                                            {{-- <div class="testimonial-img">
                                                <img class="img-center"
                                                    src="{{ asset('user/assets/images/testimonial/01.jpg') }}"
                                                    alt="testimonial-img">
                                            </div> --}}
                                        </div>
                                        {{-- <div class="quote-icon">
                                            <i class="ti ti-quote-left"></i>
                                        </div> --}}
                                        <blockquote>From past one year I am the user of aquaguard water purifier
                                            pondycherry. Its really a fantastic purifier for middle class people with
                                            optimum cost. The service back up is also very good.in the evening itself I
                                            got it. It Was to good and well service</blockquote>
                                        <div class="testimonial-caption">
                                            <h5>
                                                janki janu</h5>
                                            {{-- <label>CEO At Founder</label> --}}
                                            <div class="star-ratings">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- testimonials end -->
                                <!-- testimonials -->
                                <div class="testimonials ttm-testimonial-box-view-style1">
                                    <div class="testimonial-content">
                                        <div class="testimonial-avatar">
                                            {{-- <div class="testimonial-img">
                                                <img class="img-center"
                                                    src="{{ asset('user/assets/images/testimonial/02.jpg') }}"
                                                    alt="testimonial-img">
                                            </div> --}}
                                        </div>
                                        {{-- <div class="quote-icon">
                                            <i class="ti ti-quote-left"></i>
                                        </div> --}}
                                        <blockquote>Products are really money worthy. Good service 👍</blockquote>
                                        <div class="testimonial-caption">
                                            <h5>Easter raj</h5>
                                            {{-- <label>CEO At Founder</label> --}}
                                            <div class="star-ratings">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- testimonials end -->
                                <!-- testimonials -->
                                <div class="testimonials ttm-testimonial-box-view-style1">
                                    <div class="testimonial-content">
                                        <div class="testimonial-avatar">
                                            {{-- <div class="testimonial-img">
                                                <img class="img-center"
                                                    src="{{ asset('user/assets/images/testimonial/01.jpg') }}"
                                                    alt="testimonial-img">
                                            </div> --}}
                                        </div>
                                        {{-- <div class="quote-icon">
                                            <i class="ti ti-quote-left"></i>
                                        </div> --}}
                                        <blockquote>Good product and good service, maintenance and service also is
                                            excellent</blockquote>
                                        <div class="testimonial-caption">
                                            <h5>Sivasankaran</h5>
                                            {{-- <label>CEO At Founder</label> --}}
                                            <div class="star-ratings">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- testimonials end -->



                                {{--  --}}
                                <!-- testimonials -->
                                <div class="testimonials ttm-testimonial-box-view-style1">
                                    <div class="testimonial-content">

                                        <blockquote>From past one year I am the user of aquaguard water purifier
                                            pondycherry. Its really a fantastic purifier for middle class people with
                                            optimum cost. The service back up is also very good.in the evening itself I
                                            got it. It Was to good and well service</blockquote>
                                        <div class="testimonial-caption">
                                            <h5>janki janu</h5>
                                            <div class="star-ratings">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- testimonials end -->
                                <!-- testimonials -->
                                <div class="testimonials ttm-testimonial-box-view-style1">
                                    <div class="testimonial-content">

                                        <blockquote>Nice product and best sellar... Best service and maintenance ...
                                        </blockquote>
                                        <div class="testimonial-caption">
                                            <h5>Prabu</h5>}
                                            <div class="star-ratings">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- testimonials end -->
                                <!-- testimonials -->
                                <div class="testimonials ttm-testimonial-box-view-style1">
                                    <div class="testimonial-content">

                                        <blockquote>Best service❤️🤩comparing to others</blockquote>
                                        <div class="testimonial-caption">
                                            <h5>k. Dhanalakshmi</h5>
                                            <div class="star-ratings">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- testimonials end -->
                                {{--  --}}



                            </div><!-- testimonial-slide end-->
                        </div>
                    </div><!-- row end-->
                </div>
            </section>
            <!-- testimonial-section end-->
            <!-- row-top-section -->
            <section class="row-top-section clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mt-4 mb-4 pt-4 pb-4 res-991-mt-0">
                                <div class="row g-0">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <!-- featured-icon-box -->
                                        <div class="featured-icon-box style1 ttm-bgcolor-grey">
                                            <div class="featured-icon">
                                                <div
                                                    class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                    <i class="themifyicon ti-truck"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>Free Shipping</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>Pure water, pure service—enjoy fast, free delivery on all orders
                                                        and stay refreshed every day!
                                                    </p>
                                                </div>
                                            </div>
                                        </div><!-- featured-icon-box end-->
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <!-- featured-icon-box -->
                                        <div class="featured-icon-box style1 ttm-bgcolor-highlight">
                                            <div class="featured-icon">
                                                <div
                                                    class="ttm-icon ttm-icon_element-color-darkgrey ttm-icon_element-size-md">
                                                    <i class="themifyicon ti-reload text-white"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5 class="text-white">Get a Free Demo!</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p class="text-black">"Experience pure, clean water with our free
                                                        demo. See how our solutions improve your water quality!
                                                    </p>
                                                </div>
                                            </div>
                                        </div><!-- featured-icon-box end-->
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <!-- featured-icon-box -->
                                        <div class="featured-icon-box style1 ttm-bgcolor-grey">
                                            <div class="featured-icon">
                                                <div
                                                    class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                    <i class="themifyicon ti-comments"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>Get Your Water Tested for Free!</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>Your health matters! Book a free water test today and discover
                                                        what’s really in your water.</p>
                                                </div>
                                            </div>
                                        </div><!-- featured-icon-box end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- row end -->
                </div>
            </section>
            <!-- row-top-section end -->

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
