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
    <title>Sinoatrial Medical Technologies</title>
    @include('user.layouts.link')
</head>

<body>
    <!-- preloader start-->
    @include('user.layouts.loader')
    <!-- preloader start end-->

    <!--header start-->
    @include('user.layouts.header', ['categories' => $categories])
    <!--header end-->




    <!-- scrollUp Start Here -->
    <a href="#wrapper" data-type="section-switch" class="scrollUp">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <!-- scrollUp End Here -->



    <div id="wrapper" class="wrapper">

        <section class="banner py-4 bg-light-primary100 slider-top-margin2 bannerhei"
            style="background:url({{ asset('user/assets/img/bg.png') }}); background-size:cover; background-position:center; ">
            <div id="carouselExampleIndicators" class="carousel slide h-100" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner h-100">

                    <!-- Slide 1 -->
                    <div class="carousel-item active h-100">
                        <div class="container h-100">
                            <div class="row align-items-center h-100">
                                <div class="col-lg-6 col-md-12 ">
                                    <div class="slider-area slider-layout2">
                                        <div class="item position-relative">
                                            <div class="slider-content s-tb slide-2">
                                                <div class="text-left title-container s-tb-c">
                                                    <div class="container">
                                                        <div class="text-box" data-aos="fade-up" data-aos-delay="100">
                                                            <h4 data-aos="fade-right " data-aos-delay="200"
                                                                style="font-size: 500;">Sinoatrial</h4>
                                                            <h3 class="slider-big-text" data-aos="fade-right"
                                                                data-aos-delay="300">
                                                                We are Manufacturing and Supplying <span class=""
                                                                    style="font-weight: 700;font-size:30px">Medical
                                                                    technology across India</span>
                                                            </h3>
                                                            <p class="slider-paragraph" data-aos="fade-up"
                                                                data-aos-delay="400">
                                                                Trusted by leading hospitals and clinics, we provide
                                                                scalable and certified medical equipment solutions to
                                                                support clinical excellence across regions.
                                                            </p>
                                                            <div class="slider-btn-area" data-aos="zoom-in"
                                                                data-aos-delay="500">
                                                                <a href=" {{ route('about') }}" class="btn-btn">READ
                                                                    MORE<i class="fas fa-chevron-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mobile-none" data-aos="zoom-in-left"
                                    data-aos-delay="600">
                                    <img src=" {{ asset('user/assets/img/slider/4.png') }}" alt=""
                                        class="rounded">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item h-100">
                        <div class="container h-100">
                            <div class="row align-items-center h-100">
                                <div class="col-lg-6 col-md-12">
                                    <div class="slider-area slider-layout2">
                                        <div class="item position-relative">
                                            <div class="slider-content s-tb slide-2">
                                                <div class="text-left title-container s-tb-c">
                                                    <div class="container">
                                                        <div class="text-box" data-aos="fade-up" data-aos-delay="100">
                                                            <h4 data-aos="fade-right" data-aos-delay="200"
                                                                style="font-size: 500;">Sinoatrial</h4>
                                                            <h3 class="slider-big-text" data-aos="fade-right"
                                                                data-aos-delay="300">
                                                                Your Trusted Partner in <span
                                                                    style="font-weight: 700; font-size: 30px;">Advanced
                                                                    Medical Solutions</span>
                                                            </h3>
                                                            <p class="slider-paragraph" data-aos="fade-up"
                                                                data-aos-delay="400">
                                                                We specialize in delivering cutting-edge medical
                                                                equipment tailored to the evolving needs of healthcare
                                                                providers—ensuring accuracy, reliability, and patient
                                                                safety across India.
                                                            </p>
                                                            <div class="slider-btn-area" data-aos="zoom-in"
                                                                data-aos-delay="500">
                                                                <a href=" {{ route('about') }}" class="btn-btn">READ
                                                                    MORE <i class="fas fa-chevron-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mobile-none" data-aos="zoom-in-left"
                                    data-aos-delay="600">
                                    <img src="{{ asset('user/assets/img/slider/5.png ') }}" alt=""
                                        class="rounded">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item h-100">
                        <div class="container h-100">
                            <div class="row align-items-center h-100">
                                <div class="col-lg-6 col-md-12">
                                    <div class="slider-area slider-layout2">
                                        <div class="item position-relative">
                                            <div class="slider-content s-tb slide-2">
                                                <div class="text-left title-container s-tb-c">
                                                    <div class="container">
                                                        <div class="text-box" data-aos="fade-up"
                                                            data-aos-delay="100">
                                                            <h4 data-aos="fade-right" data-aos-delay="200"
                                                                style="font-size: 500;">All over India</h4>

                                                            <h2 class="slider-big-text" data-aos="fade-right"
                                                                data-aos-delay="300" style="font-weight: 700;">

                                                            </h2>

                                                            <h3 class="slider-big-text" data-aos="fade-right"
                                                                data-aos-delay="300">
                                                                We are <span
                                                                    style="font-weight: 700; font-size: 30px;">Leading
                                                                    High-Quality Services & Delivering reliable </span>
                                                            </h3>

                                                            <p class="slider-paragraph" data-aos="fade-up"
                                                                data-aos-delay="400">
                                                                Specialized in Accessories and Maintenance Products —
                                                                ensuring uninterrupted medical operations. Trusted by
                                                                healthcare professionals for our reliability, fast
                                                                delivery, and nationwide support.
                                                            </p>

                                                            <div class="slider-btn-area" data-aos="zoom-in"
                                                                data-aos-delay="500">
                                                                <a href=" {{ route('about') }}" class="btn-btn">READ
                                                                    MORE <i class="fas fa-chevron-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mobile-none" data-aos="zoom-in-left"
                                    data-aos-delay="600">
                                    <img src="{{ asset('user/assets/img/slider/6.png ') }}" alt=""
                                        class="rounded">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <!-- Carousel Controls -->
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>


        <!-- Slider Area End Here -->
        <!-- About Area Start Here -->
        <!-- About Area Start Here -->
        <section class="about-wrap-layout2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12" data-aos="fade-up">
                        <div class="about-box-layout3">
                            <h2 class="item-title">Welcome To Sinoatrial
                                <span>Medical Technologies</span>
                            </h2>
                            <p>Sinoatrial Medical Technologies is a leading
                                provider of high-quality hospital equipment
                                and accessories, proudly based in MGR Nagar
                                and K.K. Nagar, Chennai. Our mission is to
                                deliver safe, innovative, and reliable
                                medical devices—such as SpO₂ sensors, ECG
                                cables, and monitoring accessories—trusted
                                by top hospitals across India. We are
                                committed to improving healthcare standards
                                through technology, precision, and service
                                excellence.</p>
                        </div>
                    </div>

                    <div class="col-lg-12 col-12">
                        <div class="row">
                            <div class="col-md-6 col-12" data-aos="fade-right" data-aos-delay="100">
                                <div class="about-box-layout4">
                                    <div class="media">
                                        <div class="item-icon">
                                            <img src="{{ asset('user/assets/img/brand/1.png ') }}" alt srcset
                                                width="64px">
                                        </div>
                                        <div class="media-body space-md">
                                            <h3 class="item-title">Expert
                                                Manufacturing Team</h3>
                                            <p>Our skilled professionals
                                                ensure every product is
                                                crafted with care,
                                                precision, and compliance to
                                                international medical
                                                standards.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12" data-aos="fade-left" data-aos-delay="200">
                                <div class="about-box-layout4">
                                    <div class="media">
                                        <div class="item-icon">
                                            <img src="{{ asset('user/assets/img/brand/2.png') }}" alt srcset
                                                width="64px">
                                        </div>
                                        <div class="media-body space-md">
                                            <h3 class="item-title">Fast
                                                Nationwide Delivery</h3>
                                            <p>With efficient logistics and
                                                a reliable supply chain, we
                                                ensure prompt delivery of
                                                medical equipment across
                                                India’s healthcare
                                                network.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12" data-aos="fade-right" data-aos-delay="300">
                                <div class="about-box-layout4">
                                    <div class="media">
                                        <div class="item-icon">
                                            <img src="{{ asset('user/assets/img/brand/3.png') }}" alt srcset
                                                width="64px">
                                        </div>
                                        <div class="media-body space-md">
                                            <h3 class="item-title">Certified
                                                & Reliable Products</h3>
                                            <p>Our equipment undergoes
                                                rigorous testing to meet
                                                safety regulations and is
                                                trusted by corporate
                                                hospitals throughout the
                                                country.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12" data-aos="fade-left" data-aos-delay="400">
                                <div class="about-box-layout4">
                                    <div class="media">
                                        <div class="item-icon">
                                            <img src="{{ asset('user/assets/img/brand/4.png') }}" alt srcset
                                                width="54px">
                                        </div>
                                        <div class="media-body space-md">
                                            <h3 class="item-title">Dedicated
                                                Support & Service</h3>
                                            <p>We offer 24/7 technical
                                                support and service
                                                assistance to ensure minimal
                                                downtime and maximum
                                                performance in healthcare
                                                facilities.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End Row -->

                        <div class="call-to-action-wrap-layout4 p-0" data-aos="zoom-in" data-aos-delay="500">
                            <div class="container">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="call-to-action-box-layout4 text-center text-lg-start">
                                            <div class="call-to-action-btn">
                                                <a href="#" class="item-btn btn btn-primary">
                                                    Make an Appointment
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- End Column -->
                </div> <!-- End Row -->
            </div> <!-- End Container -->
        </section>
        <!-- About Area End Here -->

        <!-- About Area End Here -->





        <!-- Shop Area Start Here -->
        <section class="shop-wrap-layout1 bg-light-primary100 bg-light-secondary100">
            <div class="container">
                <div class="section-heading heading-dark text-center heading-layout1">
                    <h2>Our Online Store</h2>
                    <p>Shop Online Any Where</p>
                </div>
                <div class="rc-carousel dot-control-layout3" data-loop="true" data-items="4" data-margin="30"
                    data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="true"
                    data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false"
                    data-r-x-small-dots="true" data-r-x-medium="2" data-r-x-medium-nav="false"
                    data-r-x-medium-dots="true" data-r-small="2" data-r-small-nav="false" data-r-small-dots="true"
                    data-r-medium="3" data-r-medium-nav="false" data-r-medium-dots="true" data-r-large="4"
                    data-r-large-nav="false" data-r-large-dots="true" data-r-extra-large="4"
                    data-r-extra-large-nav="false" data-r-extra-large-dots="true">

                    {{-- Test starts here --}}



                    {{-- starts --}}


                    @if ($products->count() > 0)
                        @foreach ($products as $product)
                            <div class="shop-box-layout1">
                                <a href="{{ route('product_details', $product->slug) }}">
                                    <div class="item-img">
                                        <img src="/storage/{{ $product->thumbnail }}" alt="{{ $product->name }}"
                                            class="img-fluid">
                                        {{-- <ul class="shop-action-items">
                                            <li>
                                                <a href="#">
                                                    <i class="flaticon-shopping-cart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="flaticon-exchange-arrows"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="flaticon-favorite-heart-button"></i>
                                                </a>
                                            </li>
                                        </ul> --}}
                                    </div>
                                    <div class="item-content">
                                        <h4 class="item-title">
                                            {{ $product->name }}
                                        </h4>
                                        <div class="rate-items">
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
                                                        <span class="product-Price-currencySymbol">Rs.</span>
                                                        {{ $product->price }}
                                                    </span>
                                                </del>
                                                <ins>
                                                    <span class="product-Price-amount me-3">
                                                        <span class="product-Price-currencySymbol">Rs.</span>
                                                        {{ $product->discount_price }}
                                                    </span>
                                                </ins>
                                            @else
                                                <ins>
                                                    <span class="product-Price-amount me-3">
                                                        <span class="product-Price-currencySymbol">Rs.</span>
                                                        {{ $product->price }}
                                                    </span>
                                                </ins>
                                            @endif
                                        </div> --}}
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @else
                        <p class="text-left">No related products found.</p>
                    @endif
                </div>
            </div>
        </section>
        <!-- Shop Area End Here -->
        {{-- ============================================================================================== --}}


        <!-- Services Area Start Here -->
        <section class="departments-wrap-layout2 bg-light-secondary100 py-5">
            <div class="container">
                <div class="section-heading heading-dark text-left heading-layout1" data-aos="fade-right">
                    <h2>Our Services</h2>
                    <p>Specialized Medical Equipment Solutions</p>
                </div>
                <div class="rc-carousel nav-control-layout2" data-loop="true" data-items="4" data-margin="20"
                    data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false"
                    data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false"
                    data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="false"
                    data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="false" data-r-small-dots="false"
                    data-r-medium="3" data-r-medium-nav="false" data-r-medium-dots="false" data-r-large="4"
                    data-r-large-nav="false" data-r-large-dots="false" data-r-extra-large="3"
                    data-r-extra-large-nav="false" data-r-extra-large-dots="false">

                    <div class="departments-box-layout2 bg-white p-2 rounded" data-aos="zoom-in"
                        data-aos-delay="100">
                        <span class="departments-sl">01.</span>
                        <div class="item-icon ser">
                            <img src="{{ asset('user/assets/img/brand/5.png') }}" alt="">
                        </div>
                        <h3 class="item-title"><a href="#">Patient Monitoring Solutions</a></h3>
                        <p>High-quality monitors and accessories including SpO₂, ECG, and temperature sensors for
                            critical patient care.</p>

                        <a href="{{ route('about') }}">Read More</a>
                    </div>

                    <div class="departments-box-layout2 bg-white p-2 rounded" data-aos="zoom-in"
                        data-aos-delay="200">
                        <span class="departments-sl">02.</span>
                        <div class="item-icon ser">
                            <img src="{{ asset('user/assets/img/brand/5.png') }}" alt="">
                        </div>
                        <h3 class="item-title"><a href="#">Medical Cables & Leads</a></h3>
                        <p>We manufacture and supply durable ECG/EKG cables, IBP/NIBP connectors, and lead wires
                            compatible with major brands.</p>

                        <a href="{{ route('about') }}">Read More</a>
                    </div>

                    <div class="departments-box-layout2 bg-white p-2 rounded" data-aos="zoom-in"
                        data-aos-delay="300">
                        <span class="departments-sl">03.</span>
                        <div class="item-icon ser">
                            <img src="{{ asset('user/assets/img/brand/5.png') }}" alt="">
                        </div>
                        <h3 class="item-title"><a href="#">Ventilator Accessories</a></h3>
                        <p>Complete range of ventilator-compatible accessories including reusable and disposable tubing
                            and sensors.</p>

                        <a href="{{ route('about') }}">Read More</a>
                    </div>

                    <div class="departments-box-layout2 bg-white p-2 rounded" data-aos="zoom-in"
                        data-aos-delay="400">
                        <span class="departments-sl">04.</span>
                        <div class="item-icon">
                            <i class="flaticon-delivery-truck"></i>
                        </div>
                        <h3 class="item-title"><a href="#">Nationwide Dealership & Service</a></h3>
                        <p>We support over 2000+ clients across 20 states with fast delivery and efficient post-sales
                            technical support.</p>
                        <a href="{{ route('about') }}">Read More</a>
                    </div>

                </div>
            </div>
        </section>
        <!-- Services Area End Here -->


        <!-- Progress Area Start Here -->
        <section class="progress-wrap-layout2 bg-overlay bg-overlay-primary80 bg-common parallaxie bg-themeblue"
            data-bg-image="user/assets/img/figure/figure1.jpg">
            <div class="container">
                <div class="section-heading heading-light text-center mb-5">
                    <h2>Our Impact in Numbers</h2>
                    <p>Serving Healthcare with Excellence Across the
                        Nation</p>
                </div>
                <div class="row">
                    <div class="progress-box-layout2 col-md-4">
                        <div class="inner-item">
                            <div class="counting-text counter" data-num="59">59</div>
                            <p>Health Sections</p>
                        </div>
                    </div>
                    <div class="progress-box-layout2 col-md-4">
                        <div class="inner-item">
                            <div class="counting-text counter" data-num="4709">4709</div>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                    <div class="progress-box-layout2 col-md-4">
                        <div class="inner-item">
                            <div class="counting-text counter" data-num="128">128</div>
                            <p>Service Engineers</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Progress Area End Here -->

        <!-- About Us Start Here -->
        <section class="about-wrap-layout5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="about-box-layout13">
                            <h2 class="item-title">
                                Your Trusted <span>Medical Center & Laboratory</span>
                            </h2>
                            <p>Sinoatrial Medical Technologies is a young and professional company located in MGR Nagar
                                and K.K. Nagar, Chennai. As one of India's leading industrial and production centers,
                                Chennai provides the perfect environment for innovation and excellence. We are committed
                                to delivering high-quality hospital equipment, with a strong focus on customer
                                satisfaction and continuous growth.</p>
                            <p>Our product range includes SpO2 sensors, medical cables, and various medical equipment
                                accessories. These products are widely used across corporate hospitals in India. We
                                continuously develop new and innovative solutions that meet the latest safety and
                                quality standards in healthcare.</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="zoom-in">
                        <div class="about-box-layout14">
                            <div class="item-video">
                                <img src="{{ asset('user/assets/img/about/1.png') }}" alt="about">
                                {{-- <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                                    <i class="flaticon-play-button"></i>
                                </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Area End Here -->

        <!-- Shop Area End Here -->
        <!-- Brand Area End Here -->

        <!-- Blog and Testimonial Area Start Here -->
        <section class="both-side-half-bg w-100 bg-themeblue py-5" data-aos="fade-up" data-aos-duration="1000">
            <div class="single-item bg-common container" data-bg-image="img/figure/figure9.png">
                <div class="section-heading heading-light heading-layout5 text-center" data-aos="zoom-in"
                    data-aos-delay="200">
                    <h2>Testimonials</h2>
                    <div id="owl-nav3" class="owl-nav-layout2">
                        <span class="rt-prev">
                            <i class="fas fa-chevron-left"></i>
                        </span>
                        <span class="rt-next">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </div>
                </div>

                <div class="rc-carousel nav-control-layout7" data-loop="true" data-items="4" data-margin="30"
                    data-autoplay="false" data-autoplay-timeout="5000" data-custom-nav="#owl-nav3"
                    data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false"
                    data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="1"
                    data-r-x-medium-nav="false" data-r-x-medium-dots="false" data-r-small="1"
                    data-r-small-nav="false" data-r-small-dots="false" data-r-medium="1" data-r-medium-nav="false"
                    data-r-medium-dots="false" data-r-large="1" data-r-large-nav="false" data-r-large-dots="false"
                    data-r-extra-large="1" data-r-extra-large-nav="false" data-r-extra-large-dots="false">

                    <!-- Testimonial 1 -->
                    <div class="item" data-aos="fade-right" data-aos-delay="100">
                        <div class="testmonial-box-layout2 text-center">
                            <h4 class="item-title">Arun<span><br> Biomedical Engineer</span></h4>
                            <p>"I have been using SINOATRIAL patient monitors and ECG machines for the past few years.
                                The products are up to the mark and even better than those of competitors."</p>
                            <ul class="rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="item" data-aos="fade-up" data-aos-delay="200">
                        <div class="testmonial-box-layout2 text-center">
                            <h4 class="item-title">Dr. Ravi<span><br> Anesthesiologist</span></h4>
                            <p>"The SINOATRIAL E-Flo Anesthesia Workstation is extremely useful during critical
                                surgeries. I’ve been using their products for 20 years — international quality at an
                                Indian price."</p>
                            <ul class="rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="item" data-aos="fade-left" data-aos-delay="300">
                        <div class="testmonial-box-layout2 text-center">
                            <h4 class="item-title">Dr. Balu<span><br> Surgeon</span></h4>
                            <p>"We’ve been using the EFLO 6D anesthesia workstation for 3 months and completed over 60
                                procedures, including major surgeries. Our anesthetist is fully satisfied with the
                                performance and service."</p>
                            <ul class="rating">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Blog and Testimonial Area End Here -->

        <!-- Call to Action Area Start Here -->
        <section class="call-to-action-wrap-layout4" data-aos="zoom-in" data-aos-delay="200">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="call-to-action-box-layout4 text-center text-lg-start">
                            <h2 class="item-title">
                                We Provide the Highest Level of Satisfaction, Care &amp; Services to Our Patients.
                            </h2>
                            <div class="call-to-action-btn">
                                <a href="{{ route('home') }}" class="item-btn btn btn-primary">
                                    Make an Appointment
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to Action End Here -->













































        <!-- Slider Area Start Here -->
        {{-- <div class="slider-area slider-layout2 bg-light-primary100 slider-top-margin2">
            <div class="bend niceties preview-1">
                <div id="ensign-nivoslider-1" class="slides">
                    <img src="{{ asset('user/assets/img/slider/1.png') }}" alt="slider"
                        title="#slider-direction-1" />
                    <img src="{{ asset('user/assets/img/slider/2.png') }}" alt="slider"
                        title="#slider-direction-2" />
                    <img src="{{ asset('user/assets/img/slider/3.png') }}" alt="slider"
                        title="#slider-direction-3" />
                </div>
                <div id="slider-direction-1" class="t-cn slider-direction">
                    <div class="slider-content s-tb slide-1">
                        <div class="text-left title-container s-tb-c">
                            <div class="container">
                                <div class="text-box">
                                    <div class="slider-big-text">We are
                                        providing <span> healthcare
                                            solutions.</span></div>
                                    <p class="slider-paragraph">Mimply dummy
                                        text of the printing and type settin
                                        age
                                        ipsum dolor sit amet, consecte tur
                                        adipiscing pitaeir ding total
                                        healthcare
                                        solutions.
                                    </p>
                                    <div class="slider-btn-area">
                                        <a href="#" class="item-btn">READ
                                            MORE<i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slider-direction-2" class="t-cn slider-direction">
                    <div class="slider-content s-tb slide-2">
                        <div class="text-left title-container s-tb-c">
                            <div class="container">
                                <div class="text-box">
                                    <div class="slider-big-text">We are
                                        <div style="color:#E2231A;">providing</div> <span> healthcare
                                            solutions.</span>
                                    </div>
                                    <p class="slider-paragraph">Mimply dummy
                                        text of the printing and type settin
                                        age
                                        ipsum dolor sit amet, consecte tur
                                        adipiscing pitaeir ding total
                                        healthcare
                                        solutions.
                                    </p>
                                    <div class="slider-btn-area">
                                        <a href="#" class="item-btn">READ
                                            MORE<i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slider-direction-3" class="t-cn slider-direction">
                    <div class="slider-content s-tb slide-3">
                        <div class="text-left title-container s-tb-c">
                            <div class="container">
                                <div class="text-box">
                                    <div class="slider-big-text">We are
                                        providing<span> healthcare
                                            solutions.</span></div>
                                    <p class="slider-paragraph">Mimply dummy
                                        text of the printing and type settin
                                        age
                                        ipsum dolor sit amet, consecte tur
                                        adipiscing pitaeir ding total
                                        healthcare
                                        solutions.
                                    </p>
                                    <div class="slider-btn-area">
                                        <a href="#" class="item-btn">READ
                                            MORE<i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Slider Area End Here -->
        {{-- =========================================================================================================== --}}




        <!-- Footer Area Start Here -->
        @include('user.layouts.footer')
        <!-- Footer Area End Here -->
    </div>



    {{-- full code Ends --}}





    <!-- Javascript -->

    @include('user.layouts.script')


</body>

</html>
