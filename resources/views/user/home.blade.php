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
    {{-- <a href="#wrapper" data-type="section-switch" class="scrollUp">
        <i class="fas fa-angle-double-up"></i>
    </a> --}}
    <!-- scrollUp End Here -->


    {{-- main Layout starts here --}}
    <!-- Start Responsive Navbar Area -->

    <!-- Start Search Modal -->
    <div class="modal fade searchModal" id="searchModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <input type="text" class="form-control" placeholder="Search here....">
                    <button type="submit"><i class="ri-search-line"></i></button>
                </form>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ri-close-fill"></i></button>
            </div>
        </div>
    </div>
    <!-- End Search Modal -->

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000"
        data-bs-wrap="true">

        <!-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel"
                    data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#heroCarousel"
                    data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#heroCarousel"
                    data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div> -->

        <div class="carousel-inner">

            <div class="carousel-item active bg-primary text-white">
                <!-- Hero Section Start -->
                <div class="hero-wrap style-three mt-0 pt-70">
                    <div class="hero-bg bg-f"></div>
                    <img src="{{ asset('user/assets/img/hero/hero-shape-7.webp') }}" alt="Image"
                        class="hero-shape-one bounce">
                    <div class="container h-100">
                        <div class="row gx-5 align-items-center h-100">
                            <div class="col-lg-6">
                                <div class="hero-content">
                                    <h5 class="text-white">Precision Imaging for Women's Health</h5>
                                    <h1>Voluson 4D <span style>Ultrasound
                                        </span>& Imaging System </h1>

                                    <p>Deliver crystal-clear visuals with real-time 4D imaging. Voluson enables accurate
                                        fetal assessments, early diagnostics, and better care decisions with intuitive
                                        controls and advanced imaging technologies.

                                        .</p>
                                    <a href="{{ route('contact') }}" class="btn-two">Make
                                        An Appointment<i class="flaticon-right-arrow"></i></a>

                                </div>
                            </div>

                            <!-- Right Image with Effects -->
                            <!-- Right Image with Effects -->

                            <!-- Right Image & Animation -->
                            <div class="col-lg-6 position-relative">
                                <!-- Background Circle -->
                                <div class="circle-wrapper position-absolute top-50 start-50 translate-middle">
                                    <div class="circle circle-1"></div>
                                    <div class="circle circle-2"></div>
                                    <div class="circle circle-3"></div>
                                </div>

                                <div class="w-100 d-flex justify-content-center">
                                    <!-- Doctor Image -->
                                    <img src="https://configure-my-voluson.com/data/s8touch-YAZ6mi6F.png" alt="Doctor"
                                        class="img-fluid position-relative z-1 floating" data-aos="zoom-in">

                                </div>


                                <!-- Diagnosis Stat -->

                                <!-- Heart Icon -->
                                <div class="heart-icon position-absolute" data-aos="zoom-in" data-aos-delay="200">
                                    <img src="https://clinicmaster.dexignzone.com/xhtml/medical/images/hero-banner/heart.png"
                                        alt="Heart" width="40">
                                </div>

                                <!-- Patient Recovered -->
                                <div
                                    class="patient-recovered position-absolute bg-white rounded-pill shadow-sm d-flex align-items-center p-2 px-3">
                                    <div class="avatars d-flex me-2">
                                        <img src="https://randomuser.me/api/portraits/men/11.jpg" class="rounded-circle"
                                            width="24">
                                        <img src="https://randomuser.me/api/portraits/women/22.jpg"
                                            class="rounded-circle ms-n2" width="24">
                                        <img src="https://randomuser.me/api/portraits/men/33.jpg"
                                            class="rounded-circle ms-n2" width="24">
                                    </div>
                                    <small><strong class="text-primary">150k</strong>
                                        Patient recovers</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Section End -->
            </div>

            <div class="carousel-item bg-success text-white">
                <!-- Hero Section Start -->
                <div class="hero-wrap style-three mt-0 pt-70">
                    <div class="hero-bg bg-f"></div>
                    <img src="{{ asset('user/assets/img/hero/hero-shape-7.webp') }}" alt="Image"
                        class="hero-shape-one bounce">
                    <div class="container h-100">
                        <div class="row gx-5 align-items-center h-100">
                            <div class="col-lg-6">
                                <div class="hero-content">
                                    <h5 class="text-white">Advanced Life-Support</h5>
                                    <h1>ICU <span style>High-Quality

                                        </span>Ventilator System </h1>
                                    <p>Engineered for intensive care, this ventilator delivers precise airflow, oxygen
                                        levels, and multiple ventilation modes. Designed for both adult and pediatric
                                        patients, it ensures continuous and customizable respiratory support with safety
                                        alarms and real-time monitoring.

                                        .</p>
                                    <a href="{{ route('contact') }}" class="btn-two">Make
                                        An Appointment<i class="flaticon-right-arrow"></i></a>

                                </div>
                            </div>

                            <!-- Right Image with Effects -->
                            <!-- Right Image with Effects -->

                            <!-- Right Image & Animation -->
                            <div class="col-lg-6 position-relative">
                                <!-- Background Circle -->
                                <div class="circle-wrapper position-absolute top-50 start-50 translate-middle">
                                    <div class="circle circle-1"></div>
                                    <div class="circle circle-2"></div>
                                    <div class="circle circle-3"></div>
                                </div>
                                <div class="w-100 d-flex justify-content-center">
                                    <img src="{{ asset('user/assets/img/hero/1.png') }}" alt="Doctor"
                                        class="img-fluid position-relative z-1 floating" data-aos="zoom-in">

                                </div>
                                <!-- Doctor Image -->

                                <!-- Diagnosis Stat -->

                                <!-- Heart Icon -->
                                <div class="heart-icon position-absolute" data-aos="zoom-in" data-aos-delay="200">
                                    <img src="https://clinicmaster.dexignzone.com/xhtml/medical/images/hero-banner/heart.png"
                                        alt="Heart" width="40">
                                </div>

                                <!-- Patient Recovered -->
                                <div
                                    class="patient-recovered position-absolute bg-white rounded-pill shadow-sm d-flex align-items-center p-2 px-3">
                                    <div class="avatars d-flex me-2">
                                        <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                            class="rounded-circle" width="24">
                                        <img src="https://randomuser.me/api/portraits/women/22.jpg"
                                            class="rounded-circle ms-n2" width="24">
                                        <img src="https://randomuser.me/api/portraits/men/33.jpg"
                                            class="rounded-circle ms-n2" width="24">
                                    </div>
                                    <small><strong class="text-primary">150k</strong>
                                        Patient recovers</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Section End -->
            </div>

            <div class="carousel-item bg-warning text-dark">
                <!-- Hero Section Start -->
                <div class="hero-wrap style-three mt-0 pt-70">
                    <div class="hero-bg bg-f"></div>
                    <img src="{{ asset('user/assets/img/hero/hero-shape-7.webp') }}" alt="Image"
                        class="hero-shape-one bounce">
                    <div class="container h-100">
                        <div class="row gx-5 align-items-center h-100">
                            <div class="col-lg-6">
                                <div class="hero-content">
                                    <h5 class="text-white">Powerful Respiratory Support, Anytime, Anywhere.</h5>
                                    <h1>OxyMag <span style>Portable Ventilator
                                        </span>& Delivering </h1>

                                    <p>OxyMag offers precise ventilation modes for adult and pediatric patients in
                                        critical care. Its compact design, intuitive interface, and reliable performance
                                        make it ideal for emergency and mobile healthcare.

                                        .</p>
                                    <a href="{{ route('contact') }}" class="btn-two">Make
                                        An Appointment<i class="flaticon-right-arrow"></i></a>

                                </div>
                            </div>

                            <!-- Right Image with Effects -->
                            <!-- Right Image with Effects -->

                            <!-- Right Image & Animation -->
                            <div class="col-lg-6 position-relative">
                                <!-- Background Circle -->
                                <div class="circle-wrapper position-absolute top-50 start-50 translate-middle">
                                    <div class="circle circle-1"></div>
                                    <div class="circle circle-2"></div>
                                    <div class="circle circle-3"></div>
                                </div>
                                <div class="w-100 d-flex justify-content-center">
                                    <img src="{{ asset('user/assets/img/hero/3.png') }}" alt="Doctor"
                                        class="img-fluid position-relative z-1 floating" data-aos="zoom-in">
                                </div>
                                <!-- Doctor Image -->


                                <!-- Diagnosis Stat -->

                                <!-- Heart Icon -->
                                <div class="heart-icon position-absolute" data-aos="zoom-in" data-aos-delay="200">
                                    <img src="https://clinicmaster.dexignzone.com/xhtml/medical/images/hero-banner/heart.png"
                                        alt="Heart" width="40">
                                </div>

                                <!-- Patient Recovered -->
                                <div
                                    class="patient-recovered position-absolute bg-white rounded-pill shadow-sm d-flex align-items-center p-2 px-3">
                                    <div class="avatars d-flex me-2">
                                        <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                            class="rounded-circle" width="24">
                                        <img src="https://randomuser.me/api/portraits/women/22.jpg"
                                            class="rounded-circle ms-n2" width="24">
                                        <img src="https://randomuser.me/api/portraits/men/33.jpg"
                                            class="rounded-circle ms-n2" width="24">
                                    </div>
                                    <small><strong class="text-primary">150k</strong>
                                        Patient recovers</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Section End -->
            </div>

            <div class="carousel-item bg-warning text-dark">
                <!-- Hero Section Start -->
                <div class="hero-wrap style-three mt-0 pt-70">
                    <div class="hero-bg bg-f"></div>
                    <img src="{{ asset('user/assets/img/hero/hero-shape-7.webp') }}" alt="Image"
                        class="hero-shape-one bounce">
                    <div class="container h-100">
                        <div class="row gx-5 align-items-center h-100">
                            <div class="col-lg-6">
                                <div class="hero-content">
                                    <h5 class="text-white">All over
                                        India</h5>
                                    <h1>Advanced Patient & <span style>Delivering reliable
                                            Services
                                        </span> </h1>


                                    <p>Ensure real-time patient data tracking with high-definition displays and advanced
                                        multi-parameter monitoring. Ideal for ICUs, emergency rooms, and surgical units,
                                        these monitors support better decision-making and patient care.

                                        .</p>
                                    <a href="{{ route('contact') }}" class="btn-two">Make
                                        An Appointment<i class="flaticon-right-arrow"></i></a>

                                </div>
                            </div>

                            <!-- Right Image with Effects -->
                            <!-- Right Image with Effects -->

                            <!-- Right Image & Animation -->
                            <div class="col-lg-6 position-relative">
                                <!-- Background Circle -->
                                <div class="circle-wrapper position-absolute top-50 start-50 translate-middle">
                                    <div class="circle circle-1"></div>
                                    <div class="circle circle-2"></div>
                                    <div class="circle circle-3"></div>
                                </div>

                                <div class="w-100 d-flex justify-content-center">
                                    <img src="{{ asset('user/assets/img/hero/5.png') }}" alt="Doctor"
                                        class="img-fluid position-relative z-1 floating" data-aos="zoom-in">
                                </div>

                                <!-- Doctor Image -->


                                <!-- Diagnosis Stat -->

                                <!-- Heart Icon -->
                                <div class="heart-icon position-absolute" data-aos="zoom-in" data-aos-delay="200">
                                    <img src="https://clinicmaster.dexignzone.com/xhtml/medical/images/hero-banner/heart.png"
                                        alt="Heart" width="40">
                                </div>

                                <!-- Patient Recovered -->
                                <div
                                    class="patient-recovered position-absolute bg-white rounded-pill shadow-sm d-flex align-items-center p-2 px-3">
                                    <div class="avatars d-flex me-2">
                                        <img src="https://randomuser.me/api/portraits/men/11.jpg"
                                            class="rounded-circle" width="24">
                                        <img src="https://randomuser.me/api/portraits/women/22.jpg"
                                            class="rounded-circle ms-n2" width="24">
                                        <img src="https://randomuser.me/api/portraits/men/33.jpg"
                                            class="rounded-circle ms-n2" width="24">
                                    </div>
                                    <small><strong class="text-primary">150k</strong>
                                        Patient recovers</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Section End -->
            </div>

        </div>

        <!-- <button class="carousel-control-prev" type="button"
                data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"
                    aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button"
                data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"
                    aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Feature Section Start -->
    <!-- Feature Section Start -->
    <!-- Feature Section Start -->
    <div class="bg_optional">
        <div class="container pt-100 pb-70">
            <div class="row">
                <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="section-title style-one text-center mb-40" data-aos="fade-down"
                        data-aos-duration="1000">
                        <span>Our Work</span>
                        <h2>
                            Welcome To Sinoatrial Medical
                            <span>Technologies <img src="{{ asset('user/assets/img/section-shape-2.png') }}"
                                    alt="Image"></span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center feature-card-wrap">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6" data-aos="flip-left" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="feature-card">
                        <span><img src="{{ asset('user/assets/img/icons/1.png') }}" alt width="58px"></span>
                        <h3>Expert Manufacturing</h3>
                        <p>Our skilled professionals ensure every product is
                            crafted with care, precision, and compliance to
                            international medical standards.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>

                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6" data-aos="flip-right" data-aos-delay="200"
                    data-aos-duration="1000">
                    <div class="feature-card">
                        <span><img src="{{ asset('user/assets/img/icons/2.png') }}" alt width="58px"></span>
                        <h3>Fast Nationwide Delivery</h3>
                        <p>With efficient logistics and a reliable supply
                            chain, we ensure prompt delivery of medical
                            equipment across India’s healthcare network.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>

                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6" data-aos="zoom-in-up" data-aos-delay="300"
                    data-aos-duration="1000">
                    <div class="feature-card">
                        <span><img src="{{ asset('user/assets/img/icons/3.png') }}"alt width="58px"></span>
                        <h3>Certified & Reliable Products</h3>
                        <p>Our equipment undergoes rigorous testing to meet
                            safety regulations and is trusted by corporate
                            hospitals throughout the country.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>

                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6" data-aos="zoom-in-up" data-aos-delay="400"
                    data-aos-duration="1000">
                    <div class="feature-card">
                        <span><img src="{{ asset('user/assets/img/icons/4.png') }}" alt width="58px"></span>
                        <h3>Dedicated Support & Service</h3>
                        <p>We offer 24/7 technical support and service
                            assistance to ensure minimal downtime and
                            maximum performance in healthcare
                            facilities.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-4" data-aos="fade-up" data-aos-delay="500"
                data-aos-duration="1200">
                <a href="book-appointment.html" class="btn-two">Book
                    Appointment</a>
            </div>
        </div>
    </div>
    <!-- Feature Section End -->

    <!-- Feature Section End -->

    <!-- Feature Section End -->

    <!-- About Section Start -->
    <div class="about-wrap style-two ptb-100">
        <div class="container">
            <img src="{{ asset('user/assets/img/about/about-shape-3.png') }}" alt="Image"
                class="about-shape-one moveHorizontal" data-aos="zoom-in" data-aos-delay="100">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                    <div class="about-img-wrap">
                        <img src="{{ asset('user/assets/img/about/about-shape-4.webp') }}" alt="Image"
                            class="about-img-shape" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ asset('user/assets/img/about/about-img-2.png') }}" alt="Image"
                            class="about-img-one" data-aos="zoom-in" data-aos-delay="400">
                        <img src="{{ asset('user/assets/img/about/about-img-3.png') }}" alt="Image"
                            class="about-img-two" data-aos="zoom-in" data-aos-delay="500">
                        <div class="promo-box" data-aos="fade-up" data-aos-delay="600">
                            <h5>95%</h5>
                            <span>Positive Feedback</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-xxl-0" data-aos="fade-left" data-aos-delay="300">
                    <div class="about-content">
                        <div class="content-title style-one" data-aos="fade-up" data-aos-delay="400">
                            <span>WHO WE ARE</span>
                            <h2>15 Years of Trusted Service in
                                <span>Medical Technology
                                    <img src="{{ asset('user/assets/img/section-shape-2.png') }}" alt="Image">
                                </span>
                            </h2>
                            <p>Sinoatrial Medical Technologies is a
                                Chennai-based provider of high-quality
                                hospital equipment and accessories. With
                                locations in MGR Nagar and K.K. Nagar, we
                                supply advanced, reliable solutions tailored
                                to the needs of top hospitals and clinics
                                across India.</p>
                        </div>
                        <div class="feature-item" data-aos="zoom-in-up" data-aos-delay="500">
                            <span><img src="{{ asset('user/assets/img/about/like.svg') }}" alt="Image"></span>
                            <h6>Delivering precision-driven and innovative
                                medical equipment with quality
                                assurance.</h6>
                        </div>
                        <p data-aos="fade-up" data-aos-delay="600">
                            We offer a wide range of medical accessories
                            including SpO₂ sensors, ECG cables, and
                            monitoring accessories—all designed to meet
                            rigorous healthcare standards.
                        </p>
                        <a href="book-appointment.html" class="btn-two" data-aos="zoom-in" data-aos-delay="700">Get
                            in
                            Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Service Section Start -->
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
                <div class="service-slider swiper">
                    <div class="swiper-wrapper">

                        <!-- Slide 1 - Left -->
                        <div class="swiper-slide">
                            <div class="service-card style-two">
                                <span class="service-icon">
                                    <img src="{{ asset('user/assets/img/services/service-shape-1.png') }}" alt>
                                </span>
                                <span class="service-count">01</span>
                                <h3><a href="#">SpO₂ Sensors</a></h3>
                                <p>High-precision sensors for accurate
                                    oxygen saturation monitoring in critical
                                    and routine care.</p>
                                <a href="#" class="btn-three">Read More<i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>

                        <!-- Slide 2 - Bottom Center -->
                        <div class="swiper-slide">
                            <div class="service-card style-two">
                                <span class="service-icon">
                                    <img src="{{ asset('user/assets/img/services/service-shape-1.png') }}" alt>
                                </span>
                                <span class="service-count">02</span>
                                <h3><a href="#">ECG Cables</a></h3>
                                <p>Durable and shielded ECG cables designed
                                    for accurate cardiac monitoring and
                                    diagnostics.</p>
                                <a href="#" class="btn-three">Read More<i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>

                        <!-- Slide 3 - Top -->
                        <div class="swiper-slide">
                            <div class="service-card style-two">
                                <span class="service-icon">
                                    <img src="{{ asset('user/assets/img/services/service-shape-1.png') }}" alt>
                                </span>
                                <span class="service-count">03</span>
                                <h3><a href="#">Patient Monitoring
                                        Accessories</a></h3>
                                <p>Comprehensive range of accessories
                                    compatible with major monitoring systems
                                    and brands.</p>
                                <a href="#" class="btn-three">Read More<i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>

                        <!-- Slide 4 - Right to Left (like car movement) -->
                        <div class="swiper-slide" data-aos="fade-left" data-aos-delay="500">
                            <div class="service-card style-two">
                                <span class="service-icon">
                                    <img src="{{ asset('user/assets/img/services/service-shape-1.png') }}" alt>
                                </span>
                                <span class="service-count">04</span>
                                <h3><a href="#">Custom Medical
                                        Solutions</a></h3>
                                <p>Tailor-made device and cable solutions
                                    for specialized medical applications and
                                    OEM requirements.</p>
                                <a href="#" class="btn-three">Read More<i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Slider Navigation -->
                <div class="service-slider-btn slider-btn">
                    <div class="service-prev prev-btn"><img src="{{ asset('user/assets/img/left-arrow.svg') }}"
                            alt="Image"></div>
                    <div class="service-next next-btn"><img src="{{ asset('user/assets/img/right-arrow.svg') }}"
                            alt="Image"></div>
                </div>
            </div>

        </div>
    </div>
    <!-- Service Section End -->

    <!-- Service Section End -->

    <!-- Why Choose Us Section Start -->
    <div class="wh-wrap style-one ptb-100">
        <div class="container">
            <img src="{{ asset('user/assets/img/about/wh-shape-3.png') }}" alt="Image" class="wh-shape-one"
                data-aos="fade-down" data-aos-delay="100">
            <div class="row gx-5 align-items-center">
                <!-- Content Left -->
                <div class="col-lg-6">
                    <div class="wh-content" data-aos="fade-right" data-aos-delay="200">
                        <div class="content-title style-one">
                            <span data-aos="fade-up" data-aos-delay="300">
                                Why Choose Us
                            </span>
                            <h2 data-aos="fade-up" data-aos-delay="400">
                                Trusted by India’s Leading <span>Hospitals &
                                    Clinics</span>
                                <img src="{{ asset('user/assets/img/section-shape-2.png') }}" alt="Image">
                            </h2>
                            <p data-aos="fade-up" data-aos-delay="500">
                                At Sinoatrial Medical Technologies, we
                                prioritize safety, innovation, and
                                performance.
                                Our products are developed with deep
                                technical expertise and a strong focus on
                                hospital-grade reliability.
                            </p>
                        </div>
                        <ul class="feature-list list-style">
                            <li data-aos="fade-left" data-aos-delay="600">ISO-compliant,
                                quality-tested equipment</li>
                            <li data-aos="fade-left" data-aos-delay="700">In-house R&D for
                                innovative solutions</li>
                            <li data-aos="fade-left" data-aos-delay="800">Trusted by top
                                hospitals and medical chains</li>
                            <li data-aos="fade-left" data-aos-delay="900">Dedicated post-sales
                                and support service</li>
                        </ul>
                        <a href="tel:+919123456789" class="btn-two" data-aos="zoom-in" data-aos-delay="1000">
                            <i class="flaticon-phone-call"></i>+91 91234
                            56789
                        </a>
                    </div>
                </div>

                <!-- Image Right -->
                <div class="col-lg-6">
                    <div class="wh-img-wrap" data-aos="zoom-in-up" data-aos-delay="400">
                        <div class="wh-img">
                            <img src="{{ asset('user/assets/img/about/wh-img-1.png') }}" alt="Image">
                        </div>
                        <div class="circle-wrap" data-aos="flip-up" data-aos-delay="600">
                            <i class="flaticon-heartbeat"></i>
                            <div class="circle-text">
                                <svg class="rotate" viewBox="0 0 300 300">
                                    <defs>
                                        <path id="circlePath_one"
                                            d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                                    </defs>
                                    <g>
                                        <use xlink:href="#circlePath_one" fill="none" />
                                        <text fill="#000A2D">
                                            <textpath xlink:href="#circlePath_one">
                                                MEDICAL INNOVATION TRUST
                                            </textpath>
                                        </text>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->

    <!-- Counter Section Start -->
    <div class="counter-wrap style-one pt-100 pb-75 bg_optional">
        <img src="{{ asset('user/assets/img/counter-shape.webp') }}"alt="Image" class="counter-shape">
        <div class="container">
            <div class="counter-card-wrap">
                <div class="counter-card" data-aos="zoom-in-up" data-aos-delay="100">
                    <span class="counter-icon">
                        <img src="{{ asset('user/assets/img/icons/h.png') }}" alt>
                    </span>
                    <div class="counter-text">
                        <span class="counter">300</span>
                        <p>Hospitals Served</p>
                    </div>
                </div>
                <div class="counter-card" data-aos="zoom-in-up" data-aos-delay="200">
                    <span class="counter-icon">
                        <img src="{{ asset('user/assets/img/icons/p.png') }}" alt>
                    </span>
                    <div class="counter-text">
                        <span class="counter">500</span>
                        <p>Products Delivered</p>
                    </div>
                </div>
                <div class="counter-card" data-aos="zoom-in-up" data-aos-delay="300">
                    <span class="counter-icon">
                        <img src="{{ asset('user/assets/img/icons/m.png') }}" alt>
                    </span>
                    <div class="counter-text">
                        <span class="counter">20</span>
                        <p>Years of Expertise</p>
                    </div>
                </div>
                <div class="counter-card" data-aos="zoom-in-up" data-aos-delay="400">
                    <span class="counter-icon">
                        <img src="{{ asset('user/assets/img/icons/c.png') }}" alt>
                    </span>
                    <div class="counter-text">
                        <span class="counter">1200</span>
                        <p>Satisfied Clients</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Counter Section End -->

    <!-- Testimonial Section Start -->
    <div class="testimonial-wrap style-two pt-100 pb-75">
        <div class="container">
            <img src="{{ asset('user/assets/img/services/service-shape-3.png') }}" alt="Shape"
                class="testimonial-shape-one bounce sm-none" data-aos="zoom-in" data-aos-delay="100">

            <div class="row mb-40 align-items-center">
                <div class="col-xxl-6 col-xl-8 col-lg-7 col-md-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="section-title style-one">
                        <span>Client Testimonials</span>
                        <h2>Valuable Feedback From Our <span>Medical
                                Equipment Clients</span></h2>
                    </div>
                </div>
                <div class="testimonial-slider-btn slider-btn" data-aos="fade-left" data-aos-delay="200">
                    <div class="testimonial-prev prev-btn">
                        <img src="{{ asset('user/assets/img/left-arrow.svg') }}" alt="Left Arrow">
                    </div>
                    <div class="testimonial-next next-btn">
                        <img src="{{ asset('user/assets/img/right-arrow.svg') }}" alt="Right Arrow">
                    </div>
                </div>
            </div>

            <div class="testimonial-slider-wrap style-two" data-aos="fade-up" data-aos-delay="200">
                <div class="testimonial-slider-two swiper">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="testimonial-card style-two" data-aos="fade-up" data-aos-delay="100">
                                <div class="client-info-wrap">
                                    <div class="client-img">
                                        <img src="https://png.pngtree.com/png-vector/20240131/ourmid/pngtree-man-profile-account-picture-character-png-image_11577305.png"
                                            alt="Dr. Arun">
                                    </div>
                                    <div class="client-info">
                                        <h5>Dr. Arun Kumar</h5>
                                        <ul class="rating list-style">
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="client-quote">
                                    <span class="quote-icon"><i class="flaticon-quote"></i></span>
                                    <p>We’ve been using Sinoatrial’s SpO₂
                                        sensors and ECG cables for over 2
                                        years now, and the quality is
                                        unmatched.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="testimonial-card style-two" data-aos="fade-up" data-aos-delay="150">
                                <div class="client-info-wrap">
                                    <div class="client-img">
                                        <img src="https://cdni.iconscout.com/illustration/premium/thumb/female-user-image-illustration-download-in-svg-png-gif-file-formats--person-girl-business-pack-illustrations-6515859.png?f=webp"
                                            alt="Dr. Leena">
                                    </div>
                                    <div class="client-info">
                                        <h5>Dr. Leena George</h5>
                                        <ul class="rating list-style">
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="client-quote">
                                    <span class="quote-icon"><i class="flaticon-quote"></i></span>
                                    <p>The team at Sinoatrial Medical is
                                        incredibly professional. Their
                                        response time and service support
                                        are exceptional.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div class="testimonial-card style-two" data-aos="fade-up" data-aos-delay="200">
                                <div class="client-info-wrap">
                                    <div class="client-img">
                                        <img src="https://png.pngtree.com/png-vector/20230903/ourmid/pngtree-man-avatar-isolated-png-image_9935806.png"
                                            alt="Prakash">
                                    </div>
                                    <div class="client-info">
                                        <h5>Mr. Prakash Nair</h5>
                                        <ul class="rating list-style">
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="client-quote">
                                    <span class="quote-icon"><i class="flaticon-quote"></i></span>
                                    <p>Their range of accessories and
                                        sensors meet all our needs with
                                        top-notch safety and
                                        reliability.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 4 -->
                        <div class="swiper-slide">
                            <div class="testimonial-card style-two" data-aos="fade-up" data-aos-delay="250">
                                <div class="client-info-wrap">
                                    <div class="client-img">
                                        <img src="https://png.pngtree.com/png-clipart/20231020/original/pngtree-avatar-of-a-brunette-man-png-image_13379739.png"
                                            alt="Ravi">
                                    </div>
                                    <div class="client-info">
                                        <h5>Dr. Ravi</h5>
                                        <span>Healthcare Consultant</span>
                                        <ul class="rating list-style">
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="client-quote">
                                    <span class="quote-icon"><i class="flaticon-quote"></i></span>
                                    <p>I appreciate their focus on quality
                                        and innovation. Their products are
                                        durable and reliable.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 5 -->
                        <div class="swiper-slide">
                            <div class="testimonial-card style-two" data-aos="fade-up" data-aos-delay="300">
                                <div class="client-info-wrap">
                                    <div class="client-img">
                                        <img src="https://png.pngtree.com/png-vector/20240131/ourmid/pngtree-man-profile-account-picture-character-png-image_11577305.png"
                                            alt="Naveen">
                                    </div>
                                    <div class="client-info">
                                        <h5>Mr. Naveen Raj</h5>
                                        <span>Medical Distributor</span>
                                        <ul class="rating list-style">
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="client-quote">
                                    <span class="quote-icon"><i class="flaticon-quote"></i></span>
                                    <p>One of the best suppliers we've
                                        worked with. Their prompt delivery
                                        and service are remarkable.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 6 -->
                        <div class="swiper-slide">
                            <div class="testimonial-card style-two" data-aos="fade-up" data-aos-delay="350">
                                <div class="client-info-wrap">
                                    <div class="client-img">
                                        <img src="https://finologyuk.com/wp-content/uploads/2025/03/pngtree-man-avatar-image-for-profile-png-image_13001877.png"
                                            alt="Ramesh">
                                    </div>
                                    <div class="client-info">
                                        <h5>Dr. Ramesh Kannan</h5>
                                        <span>Chief Surgeon</span>
                                        <ul class="rating list-style">
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="client-quote">
                                    <span class="quote-icon"><i class="flaticon-quote"></i></span>
                                    <p>Sinoatrial's commitment to precision
                                        gives us confidence in their
                                        critical care equipment.</p>
                                </div>
                            </div>
                        </div>

                    </div> <!-- swiper-wrapper -->
                </div> <!-- testimonial-slider-two -->
            </div> <!-- testimonial-slider-wrap -->
        </div> <!-- container -->
    </div>
    <!-- Testimonial Section End -->

    <!-- CTA Section Start -->
    <div class="cta-wrap style-one bg_optional" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
        <img src="{{ asset('user/assets/img/cta-shape.webp') }}" alt="Image" class="cta-shape"
            data-aos="zoom-in-up" data-aos-delay="200" data-aos-duration="1000">
        <div class="container text-center">
            <h4 data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">
                Have Any Questions? Feel Free to Contact Our Team
            </h4>
            <a class="cta-contact position-relative" href="tel:+1-123-456-7899" data-aos="flip-up"
                data-aos-delay="500" data-aos-duration="1200">
                +044-4542 8844
                <img src="{{ asset('user/assets/img/1.png') }}" alt="Image" width="64px"
                    class="position-absolute" data-aos="fade-in" data-aos-delay="800" data-aos-duration="1000">
            </a>
            <a href="tel:+044-4542 8844" class="btn-two order_btn" data-aos="zoom-in-up" data-aos-delay="600"
                data-aos-duration="1200">
                Order an Appointment
            </a>
        </div>
    </div>
    <!-- CTA Section End -->

    <!-- Blog Section Start -->
    <div class="blog-wrap style-one pt-100 pb-75 bg_optional" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <!-- <img src="assets/img/blog/blog-shape-1.webp" alt="Image"
                    class="blog-shape sm-none bounce"
                    data-aos="zoom-in" data-aos-delay="200"
                    data-aos-duration="1000"> -->

            <div class="row">
                <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="section-title style-one text-center mb-40" data-aos="fade-down" data-aos-delay="300">
                        <span>Our Latest Articles</span>
                        <h2>
                            Stay Updated With Our Latest News & Blog
                            <span>Articles.</span>
                            <img src="{{ asset('user/assets/img/section-shape-2.png') }}" alt="Image">
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-right" data-aos-delay="400"
                    data-aos-duration="1000">
                    <div class="blog-card style-one">
                        <div class="blog-card-img">
                            <img src="https://sinoatrial.in/images/new/blog_1.png" alt="spo2 sensor">
                        </div>
                        <div class="blog-card-info">
                            <a href="#" class="blog-date"><i class="flaticon-calendar"></i>Dec 22,
                                2022</a>
                            <ul class="blog-metainfo list-style">
                                <li><a href="#">Medical Devices</a></li>
                                <li>No Comment</li>
                            </ul>
                            <h3><a href="#">SPO2 Sensor</a></h3>
                            <p>SINOATRIAL provides reliable SPO2 sensors
                                manufactured in an ISO 13485:2016 certified
                                facility, ensuring global quality standards
                                and dependable service.</p>
                            <a href="#" class="link-one">Read More...</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="500"
                    data-aos-duration="1000">
                    <div class="blog-card style-one">
                        <div class="blog-card-img">
                            <img src="https://sinoatrial.in/images/new/blog_2.png" alt="Blood Pressure Accessories">
                        </div>
                        <div class="blog-card-info">
                            <a href="#" class="blog-date"><i class="flaticon-calendar"></i>Dec 22,
                                2022</a>
                            <ul class="blog-metainfo list-style">
                                <li><a href="#">Healthcare
                                        Accessories</a></li>
                                <li>No Comment</li>
                            </ul>
                            <h3><a href="#">Blood Pressure NIBP / IBP &
                                    Ventilator Accessories</a></h3>
                            <p>Explore our wide range of NIBP/IBP and
                                ventilator accessories, engineered to meet
                                the highest quality assurance practices and
                                certifications.</p>
                            <a href="#" class="link-one">Read More...</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-left" data-aos-delay="600"
                    data-aos-duration="1000">
                    <div class="blog-card style-one">
                        <div class="blog-card-img">
                            <img src="https://sinoatrial.in/images/new/blog_3.png"
                                alt="ECG Cables & Surgical Accessories">
                        </div>
                        <div class="blog-card-info">
                            <a href="#" class="blog-date"><i class="flaticon-calendar"></i>Dec 22,
                                2022</a>
                            <ul class="blog-metainfo list-style">
                                <li><a href="#">Surgical Equipment</a></li>
                                <li>No Comment</li>
                            </ul>
                            <h3><a href="#">ECG, EKG Cables and Surgical
                                    Accessories</a></h3>
                            <p>High-quality ECG/EKG cables and surgical
                                accessories from SINOATRIAL, trusted
                                globally for their performance and
                                compliance with medical standards.</p>
                            <a href="#" class="link-one">Read More...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section End -->

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
                        <span>MEDICAL EQUIPMENT </span>
                        <h2>We Provide Best
                            <span>Installation
                                <img src="{{ asset('user/assets/img/section-shape-2.png') }}" alt="Image">
                            </span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="service-slider-wrap" data-aos="fade-up" data-aos-delay="200">
                <div class="service-slider swiper">
                    <div class="swiper-wrapper">

                        <!-- Slide 1 - Left -->
                        <div class="swiper-slide">
                            <div class="d-flex justify-content-center">

                                <img class="rounded" src="{{ asset('user/assets/img/IND/1.png') }}" alt>


                            </div>
                        </div>

                        <!-- Slide 1 - Left -->
                        <div class="swiper-slide">
                            <div class="d-flex justify-content-center">

                                <img class="rounded" src=" {{ asset('user/assets/img/IND/2.png') }}" alt>


                            </div>
                        </div>

                        <!-- Slide 1 - Left -->
                        <div class="swiper-slide">
                            <div class="d-flex justify-content-center">

                                <img class="rounded" src=" {{ asset('user/assets/img/IND/3.png') }}" alt>


                            </div>
                        </div>

                        <!-- Slide 1 - Left -->
                        <div class="swiper-slide">
                            <div class="d-flex justify-content-center">

                                <img class="rounded" src=" {{ asset('user/assets/img/IND/4.png') }}" alt>


                            </div>
                        </div>

                        <!-- Slide 1 - Left -->
                        <div class="swiper-slide">
                            <div class="d-flex justify-content-center">

                                <img src=" {{ asset('user/assets/img/IND/5.png') }}" alt>


                            </div>
                        </div>



                    </div>
                </div>

                <!-- Slider Navigation -->
                <div class="service-slider-btn slider-btn">
                    <div class="service-prev prev-btn"><img src="{{ asset('user/assets/img/left-arrow.svg') }}"
                            alt="Image"></div>
                    <div class="service-next next-btn"><img src="{{ asset('user/assets/img/right-arrow.svg') }}"
                            alt="Image"></div>
                </div>
            </div>

        </div>
    </div>
    <!-- Service Section End -->


    <!--footer start-->
    @include('user.layouts.footer')
    <!--footer end-->

    <!-- Back to Top -->
    <button type="button" id="backtotop" class="position-fixed text-center border-0 p-0">
        <i class="ri-arrow-up-line"></i>
    </button>

    {{-- main Layout Ends here --}}




    <!-- Shop Area Start Here -->
    {{-- <section class="shop-wrap-layout1 bg-light-primary100 bg-light-secondary100">
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

                @if ($products->count() > 0)
                    @foreach ($products as $product)
                        <div class="shop-box-layout1">
                            <a href="{{ route('product_details', $product->slug) }}">
                                <div class="item-img">
                                    <img src="/storage/{{ $product->thumbnail }}" alt="{{ $product->name }}"
                                        class="img-fluid">

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

                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    <p class="text-left">No related products found.</p>
                @endif
            </div>
        </div>
    </section> --}}
    <!-- Shop Area End Here -->
    <!-- Javascript -->
    @include('user.layouts.script')
</body>

</html>
