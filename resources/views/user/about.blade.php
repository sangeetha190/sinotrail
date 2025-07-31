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
    <title>About</title>
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

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-2">
        <img src="{{ asset('user/assets/img/breadcrumb/br-shape-1.webp') }}" alt="Image"
            class="br-shape-one bounce sm-none">
        <img src="{{ asset('user/assets/img/breadcrumb/br-shape-2.webp') }}" alt="Image"
            class="br-shape-two moveHorizontal sm-none">
        <img src="{{ asset('user/assets/img/breadcrumb/br-shape-3.webp') }}" alt="Image" class="br-shape-three">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>About us</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>About us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

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
        <img src="{{ asset('user/assets/img/counter-shape.webp') }}" alt="Image" class="counter-shape">
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
            <a href="tel:+919123456789" class="btn-two order_btn" data-aos="zoom-in-up" data-aos-delay="600"
                data-aos-duration="1200">
                Order an Appointment
            </a>
        </div>
    </div>
    <!-- CTA Section End -->
    <!--footer start-->
    @include('user.layouts.footer')
    <!--footer end-->

    <!-- page end -->


    <!-- Javascript -->
    @include('user.layouts.script')
    {{-- main Layout Ends here --}}

</body>

</html>
