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
    <title>Service</title>
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
    {{-- <a href="#wrapper" data-type="section-switch" class="scrollUp">
        <i class="fas fa-angle-double-up"></i>
    </a> --}}
    <!-- scrollUp End Here -->

    {{-- main Layout Starts here --}}

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-2">
        <img src="{{ asset('user/assets/img/breadcrumb/br-shape-1.webp') }}" alt="Image"
            class="br-shape-one bounce sm-none">
        <img src="{{ asset('user/assets/img/breadcrumb/br-shape-2.webp') }}" alt="Image"
            class="br-shape-two moveHorizontal sm-none">
        <img src="{{ asset('user/assets/img/breadcrumb/br-shape-3.webp') }}" alt="Image" class="br-shape-three">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Service</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Service</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->



    <!-- Service Section Start -->
    <div class="service-wrap style-two bg_optional ptb-100">
        <div class="container">
            <img src="{{ asset('user/assets/img/services/service-shape-3.png') }}" alt="Image"
                class="service-shape moveHorizontal">
            <img src="{{ asset('user/assets/img/services/service-shape-1.png') }}" alt="Image"
                class="service-shape-two bounce">

            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="content-title style-one text-center mb-40" data-aos="fade-up" data-aos-delay="100">
                        <span>MEDICAL EQUIPMENT</span>
                        <h2>We Provide Advanced & Reliable
                            <span>Hospital Equipment
                                <img src="{{ asset('user/assets/img/section-shape-2.png') }}" alt="Image">
                            </span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="service-slider-wrap" data-aos="fade-up" data-aos-delay="200">
                <div class="row g-4 justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <!-- Card 1 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card style-two">
                            <span class="service-icon">
                                <img src="{{ asset('user/assets/img/services/service-shape-1.png') }}" alt>
                            </span>
                            <span class="service-count">01</span>
                            <h3><a href="#">SpO₂ Sensors</a></h3>
                            <p>High-precision sensors for accurate oxygen
                                saturation monitoring in critical and
                                routine care.</p>
                            <a href="#" class="btn-three">Read More<i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card style-two">
                            <span class="service-icon">
                                <img src="{{ asset('user/assets/img/services/service-shape-1.png') }}" alt>
                            </span>
                            <span class="service-count">02</span>
                            <h3><a href="#">ECG Cables</a></h3>
                            <p>Durable and shielded ECG cables designed for
                                accurate cardiac monitoring and
                                diagnostics.</p>
                            <a href="#" class="btn-three">Read More<i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card style-two">
                            <span class="service-icon">
                                <img src="{{ asset('user/assets/img/services/service-shape-1.png') }}" alt>
                            </span>
                            <span class="service-count">03</span>
                            <h3><a href="#">Patient Monitoring
                                    Accessories</a></h3>
                            <p>Comprehensive range of accessories compatible
                                with major monitoring systems and
                                brands.</p>
                            <a href="#" class="btn-three">Read More<i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card style-two">
                            <span class="service-icon">
                                <img src="{{ asset('user/assets/img/services/service-shape-1.png') }}" alt>
                            </span>
                            <span class="service-count">04</span>
                            <h3><a href="#">Custom Medical
                                    Solutions</a></h3>
                            <p>Tailor-made device and cable solutions for
                                specialized medical applications and OEM
                                requirements.</p>
                            <a href="#" class="btn-three">Read More<i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Slider Navigation -->

            </div>

        </div>
    </div>
    <!-- Service Section End -->
    <!--footer start-->
    @include('user.layouts.footer')
    <!--footer end-->
    {{-- main Layout Ends here --}}
    <!-- Javascript -->
    @include('user.layouts.script')


</body>

</html>
