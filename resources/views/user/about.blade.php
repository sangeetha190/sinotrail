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
    <!--page start-->
    <div class="page">

        <!--header start-->
        @include('user.layouts.header', ['categories' => $categories])
        <!--header end-->

        <div id="wrapper" class="wrapper">



            <!-- Inner Page Banner Area Start Here -->
            <section class="inner-page-banner bg-common inner-page-top-margin"
                style="background-image: url({{ asset('user/assets/img/about/br.png') }}); background-size: cover; background-position: right; background: #016db2;"
                data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumbs-area" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="300">
                                <h1>About Us</h1>
                                <ul>
                                    <li>
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li>About 2</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Inner Page Banner Area End Here -->



            <!-- About Us Start Here -->
            <section class="about-wrap-layout5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                            <div class="about-box-layout13">
                                <h2 class="item-title">
                                    Your Trusted <span>Medical Center & Laboratory</span>
                                </h2>
                                <p>
                                    Sinoatrial Medical Technologies is a young and professional company located in MGR
                                    Nagar and K.K. Nagar, Chennai. As one of India's leading industrial and production
                                    centers, Chennai provides the perfect environment for innovation and excellence. We
                                    are committed to delivering high-quality hospital equipment, with a strong focus on
                                    customer satisfaction and continuous growth.
                                </p>
                                <p>
                                    Our product range includes SpO2 sensors, medical cables, and various medical
                                    equipment accessories. These products are widely used across corporate hospitals in
                                    India. We continuously develop new and innovative solutions that meet the latest
                                    safety and quality standards in healthcare.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                            <div class="about-box-layout14">
                                <div class="item-video">
                                    <img src="{{ asset('user/assets/img/about/1.png') }}" alt="about">
                                    <a class="play-btn popup-youtube" href="#">
                                        <i class="flaticon-play-button"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Us Area End Here -->

            <!-- Progress Area Start Here -->
            <section class="progress-wrap-layout2 bg-overlay bg-overlay-primary80 bg-common parallaxie bg-themeblue">
                <div class="container">
                    <div class="row">
                        <div class="progress-box-layout2 col-md-4" data-aos="fade-up" data-aos-delay="0"
                            data-aos-duration="1000">
                            <div class="inner-item">
                                <div class="counting-text counter" data-num="59">59</div>
                                <p>Health Sections</p>
                            </div>
                        </div>
                        <div class="progress-box-layout2 col-md-4" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="1000">
                            <div class="inner-item">
                                <div class="counting-text counter" data-num="4709">4709</div>
                                <p>Happy Patients</p>
                            </div>
                        </div>
                        <div class="progress-box-layout2 col-md-4" data-aos="fade-up" data-aos-delay="400"
                            data-aos-duration="1000">
                            <div class="inner-item">
                                <div class="counting-text counter" data-num="128">128</div>
                                <p>Quality Doctors</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Progress Area End Here -->

            <!-- Why Choose Area Start Here -->
            <section class="why-choose-wrap-layout1">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="why-choose-box-layout1 col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                            <h2 class="item-title" data-aos="fade-up" data-aos-delay="0">Why People Choose Us?</h2>
                            <p class="sub-title" data-aos="fade-up" data-aos-delay="100">
                                We are committed to transforming healthcare delivery through exceptional product
                                quality, innovation, and service excellence.
                            </p>

                            <div class="choose-list-layout1" data-aos="fade-up" data-aos-delay="200">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading active">
                                            <div class="panel-title">
                                                <a aria-expanded="false" class="accordion-toggle" data-toggle="collapse"
                                                    data-parent="#accordion" href="#collapseOne">OUR VISION</a>
                                            </div>
                                        </div>
                                        <div aria-expanded="false" id="collapseOne" role="tabpanel"
                                            class="panel-collapse collapse show">
                                            <div class="panel-body">
                                                <p>To be passionate in providing the best medical accessories and have
                                                    our products in every hospital globally.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <a aria-expanded="false" class="accordion-toggle collapsed"
                                                    data-toggle="collapse" data-parent="#accordion"
                                                    href="#collapseTwo">OUR MISSION</a>
                                            </div>
                                        </div>
                                        <div aria-expanded="false" id="collapseTwo" role="tabpanel"
                                            class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>To provide unimaginable quality, superior customer service, and
                                                    exclusive products at affordable prices.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <a aria-expanded="false" class="accordion-toggle collapsed"
                                                    data-toggle="collapse" data-parent="#accordion"
                                                    href="#collapseThree">INNOVATION</a>
                                            </div>
                                        </div>
                                        <div aria-expanded="false" id="collapseThree" role="tabpanel"
                                            class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>SINOATRIAL always encourages employees to take risks and innovate in
                                                    the performance of their jobs.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                            <img src="{{ asset('user/assets/img/about/2.png') }}" alt="about" class="img-fluid">
                        </div>
                    </div>
                </div>
            </section>
            <!-- Why Choose Area End Here -->

            <!-- Blog and Testimonial Area Start Here -->
            <section class="both-side-half-bg w-100 bg-themeblue py-5" data-aos="fade-up">
                <div class="single-item bg-common container"
                    data-bg-image="{{ asset('user/assets/img/figure/figure9.png') }}" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="section-heading heading-light heading-layout5 text-center" data-aos="fade-up"
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
                        data-r-small-nav="false" data-r-small-dots="false" data-r-medium="1"
                        data-r-medium-nav="false" data-r-medium-dots="false" data-r-large="1"
                        data-r-large-nav="false" data-r-large-dots="false" data-r-extra-large="1"
                        data-r-extra-large-nav="false" data-r-extra-large-dots="false">

                        <!-- Testimonial 1 -->
                        <div class="item" data-aos="fade-up" data-aos-delay="300">
                            <div class="testmonial-box-layout2 text-center">
                                <h4 class="item-title">Arun<span><br> Biomedical Engineer</span></h4>
                                <p>"I have been using SINOATRIAL patient monitors and ECG machines for the past few
                                    years. The products are up to the mark and even better than those of competitors."
                                </p>
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
                        <div class="item" data-aos="fade-up" data-aos-delay="400">
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
                        <div class="item" data-aos="fade-up" data-aos-delay="500">
                            <div class="testmonial-box-layout2 text-center">
                                <h4 class="item-title">Dr. Balu<span><br> Surgeon</span></h4>
                                <p>"We’ve been using the EFLO 6D anesthesia workstation for 3 months and completed over
                                    60 procedures, including major surgeries. Our anesthetist is fully satisfied with
                                    the performance and service."</p>
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



            <!--footer start-->
            @include('user.layouts.footer')
            <!--footer end-->
        </div>
        <!-- page end -->
        <!-- Javascript -->
        @include('user.layouts.script')
</body>

</html>
