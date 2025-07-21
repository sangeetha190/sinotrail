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
                                <h1 class="title">About Us</h1>
                            </div>
                            <div class="breadcrumb-wrapper mt-2">
                                <span class="mr-1"><i class="ti ti-home"></i></span>
                                <a title="Homepage" href="{{ route('home') }}">Home</a>
                                <span class="ttm-bread-sep">&nbsp;/&nbsp;</span>
                                <span class="ttm-textcolor-skincolor">About Us</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- page-title end-->
        <!--site-main start-->
        <div class="site-main">

            <!--history-section-->
            <section class="history-section clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-7 col-sm-12">
                            <div class="pr-70 res-991-pr-0">
                                <!-- section title -->
                                <div class="section-title clearfix">
                                    <div class="title-header">
                                        <h5>About Us</h5>
                                        <h2 class="title"> Aqua Water Purifiers</h2>
                                    </div>
                                    <div class="m-0 mb-0">At Aqua Water Purifiers, we are committed to delivering clean,
                                        safe, and healthy drinking water for every home and business. Led by Mr.
                                        Sridhar, Senior Sales and Service Executive, our team specializes in all-brand
                                        water purifier sales and services, ensuring top-quality solutions for our
                                        customers.

                                        Our product range includes advanced RO purifiers, UV filtration systems, and
                                        alkaline water solutions, designed to meet diverse needs. With cutting-edge
                                        technology and stringent quality checks, we guarantee superior performance and
                                        durability. Our eco-friendly systems are energy-efficient and sustainable,
                                        contributing to a healthier environment.

                                        Customer satisfaction is our priority. We provide expert after-sales service,
                                        including installation, maintenance, and repairs, ensuring optimal performance.
                                        Trust Aqua Water Purifiers for reliable water purification—because your health
                                        and safety matter!</div>
                                </div><!-- section title end -->

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-grey spacing-1">
                                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                            <div class="layer-content">
                                                <!--featured-icon-box-->
                                                <div class="featured-icon-box style2">
                                                    <div class="featured-icon">
                                                        <div
                                                            class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-skincolor ttm-icon_element-color-white ttm-icon_element-size-sm ttm-icon_element-style-rounded">
                                                            <i class="fa fa-phone"></i>
                                                        </div>
                                                    </div>
                                                    <div class="featured-content">
                                                        <div class="featured-desc">
                                                            <p>Contact Us</p>
                                                        </div>
                                                        <div class="featured-title">
                                                            <a href="tel:919047772117" class="p-0">
                                                                <h5>+91 90477 72117</h5>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div><!-- featured-icon-box end-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-grey spacing-1">
                                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                            <div class="layer-content">
                                                <!--featured-icon-box-->
                                                <div class="featured-icon-box style2">
                                                    <div class="featured-icon">
                                                        <div
                                                            class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-skincolor ttm-icon_element-color-white ttm-icon_element-size-sm ttm-icon_element-style-rounded">
                                                            <i class="fa-solid fa-envelope text-white me-2"></i>
                                                        </div>
                                                    </div>
                                                    <div class="featured-content">
                                                        <div class="featured-desc">
                                                            <p>Email Us:</p>
                                                        </div>
                                                        <div class="featured-title">
                                                            <h5>aquawaterpurifierspondicherry@gmail.com</h5>
                                                        </div>
                                                    </div>
                                                </div><!-- featured-icon-box end-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-35">
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor"
                                        href="{{ route('contact') }}">Contact us!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xs-12">
                            <!-- ttm_single_image-wrapper -->
                            <div class="ttm_single_image-wrapper position-relative ml-15 res-991-ml-0 res-991-mt-30">
                                <img class="img-fluid" src="{{ asset('user/assets/images/about_imgs.png') }}"
                                    alt="about_image" style="border-radius:10px">

                            </div><!-- ttm_single_image-wrapper end -->
                        </div>
                    </div><!-- row end-->
                </div>
            </section>
            <!-- history-section end -->

            <!-- fid-section -->
            {{-- <section class="fid-section ttm-bg ttm-bgcolor-skincolor clearfix mb-4">
                <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
                <div class="container">
                    <div class="row ttm-facts-colum-sep">
                        <div class="col-md-3 col-sm-3 co-xs-12">
                            <div class="ttm-fid inside ttm-fid-view-topicon">
                                <div class="ttm-fid-icon-wrapper"><i class="themifyicon ti-cup"></i></div>
                                <div class="ttm-fid-contents">
                                    <h4><span data-appear-animation="animateDigits" data-from="0" data-to="201"
                                            data-interval="10" data-before="" data-before-style="sup" data-after=""
                                            data-after-style="sub">201
                                        </span>
                                    </h4>
                                    <h3 class="ttm-fid-title"><span>Award Shows<br></span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-3 co-xs-12">
                            <div class="ttm-fid inside ttm-fid-view-topicon">
                                <div class="ttm-fid-icon-wrapper"><i class="themifyicon ti-user"></i></div>
                                <div class="ttm-fid-contents">
                                    <h4><span data-appear-animation="animateDigits" data-from="0" data-to="100"
                                            data-interval="10" data-before="" data-before-style="sup" data-after=""
                                            data-after-style="sub">100+
                                        </span>
                                    </h4>
                                    <h3 class="ttm-fid-title"><span>Happy Customer<br></span></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-3 co-xs-12">
                            <div class="ttm-fid inside ttm-fid-view-topicon">
                                <div class="ttm-fid-icon-wrapper"><i class="themifyicon ti-shopping-cart-full"></i>
                                </div>
                                <div class="ttm-fid-contents">
                                    <h4><span data-appear-animation="animateDigits" data-from="0" data-to="124"
                                            data-interval="10" data-before="" data-before-style="sup" data-after=""
                                            data-after-style="sub">124
                                        </span>
                                    </h4>
                                    <h3 class="ttm-fid-title"><span>Store Locations<br></span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- fid-section end -->
        </div>
        <!--site-main end-->
        <!--footer start-->
        @include('user.layouts.footer')
        <!--footer end-->
    </div>
    <!-- page end -->
    <!-- Javascript -->
    @include('user.layouts.script')
</body>

</html>
