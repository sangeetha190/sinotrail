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
    {{-- @include('user.layouts.loader') --}}
    <!-- preloader start end-->

    <!--header start-->
    @include('user.layouts.header', ['categories' => $categories])
    <!--header end-->
    <!--page start-->

    <!-- scrollUp Start Here -->
    <a href="#wrapper" data-type="section-switch" class="scrollUp">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <!-- scrollUp End Here -->



    <div class="page">
        <div id="wrapper" class="wrapper">


            <!-- Inner Page Banner Area Start Here -->
            <section class="inner-page-banner bg-common inner-page-top-margin"
                style="background-image: url({{ asset('user/assets/img/about/br.png') }}); background-size: cover; background-position: right; background: #016db2;"
                data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumbs-area" data-aos="fade-up" data-aos-delay="300"
                                data-aos-duration="1000">
                                <h1>services</h1>
                                <ul>
                                    <li>
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li>Services</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Inner Page Banner Area End Here -->


            <!-- Department Start Here -->
            <section class="departments-wrap-layout5 bg-light-accent100 p-5">
                <div class="container">
                    <div class="row gutters-20 py-3">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-5" data-aos="fade-up" data-aos-delay="100">
                            <div class="departments-box-layout2 bg-white p-2 rounded">
                                <span class="departments-sl">01.</span>
                                <div class="item-icon ser">
                                    <img src="{{ asset('user/assets/img/brand/5.png ') }}" alt="Patient Monitoring">
                                </div>
                                <h3 class="item-title">Patient Monitoring</h3>
                                <p>Advanced multi-parameter monitors designed for accurate tracking of vital signs in
                                    ICUs, wards, and emergency care units.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-5" data-aos="fade-up" data-aos-delay="200">
                            <div class="departments-box-layout2 bg-white p-2 rounded">
                                <span class="departments-sl">02.</span>
                                <div class="item-icon ser">
                                    <img src="{{ asset('user/assets/img/brand/5.png') }}" alt="ECG Machines">
                                </div>
                                <h3 class="item-title">ECG Machines</h3>
                                <p>Reliable and easy-to-use ECG machines for precise cardiac diagnostics, used across
                                    major hospitals and clinics in India.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-5" data-aos="fade-up" data-aos-delay="300">
                            <div class="departments-box-layout2 bg-white p-2 rounded">
                                <span class="departments-sl">03.</span>
                                <div class="item-icon ser">
                                    <img src="{{ asset('user/assets/img/brand/5.png') }}" alt="Accessories">
                                </div>
                                <h3 class="item-title">Medical Cables &
                                    Accessories</h3>
                                <p>Durable and compatible medical cables, SpO2 sensors, ECG leads, and accessories that
                                    meet global healthcare standards.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-5" data-aos="fade-up" data-aos-delay="400">
                            <div class="departments-box-layout2 bg-white p-2 rounded">
                                <span class="departments-sl">04.</span>
                                <div class="item-icon ser">
                                    <img src="{{ asset('user/assets/img/brand/5.png') }}" alt="Integration">
                                </div>
                                <h3 class="item-title">Custom Equipment
                                    Integration</h3>
                                <p>Tailored hardware solutions for medical OEMs, including integration, product
                                    sourcing, and calibration services.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-5" data-aos="fade-up" data-aos-delay="500">
                            <div class="departments-box-layout2 bg-white p-2 rounded">
                                <span class="departments-sl">05.</span>
                                <div class="item-icon ser">
                                    <img src="{{ asset('user/assets/img/brand/5.png') }}" alt="Support">
                                </div>
                                <h3 class="item-title">After-Sales & AMC</h3>
                                <p>Dedicated technical support and annual maintenance contracts (AMC) ensuring
                                    reliability, performance, and service continuity.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-5" data-aos="fade-up" data-aos-delay="600">
                            <div class="departments-box-layout2 bg-white p-2 rounded">
                                <span class="departments-sl">06.</span>
                                <div class="item-icon ser">
                                    <img src="{{ asset('user/assets/img/brand/5.png') }}" alt="Distribution">
                                </div>
                                <h3 class="item-title">Pan-India Supply</h3>
                                <p>Efficient distribution network delivering high-quality medical devices and
                                    accessories to corporate hospitals across India.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Department Area End Here -->

        </div>
        <!--footer start-->
        @include('user.layouts.footer')
        <!--footer end-->
    </div>
    <!-- page end -->
    <!-- Javascript -->
    @include('user.layouts.script')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            $("#contactForm").submit(function(event) {
                event.preventDefault();

                let submitButton = $("#submitBtn");
                submitButton.prop("disabled", true).text("Submitting..."); // Disable button & change text

                let formData = {
                    name: $("#name").val(),
                    mobile_no: $("#mobile_no").val(),
                    email: $("#email").val(),
                    subject: $("#subject").val(),
                    enquiry: $("#enquiry").val(),
                    _token: "{{ csrf_token() }}"
                };

                // Clear previous error messages
                $(".error").text("");

                $.ajax({
                    type: "POST",
                    url: "{{ route('contact.store') }}",
                    data: formData,
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                title: "Success!",
                                text: "Contact Details Submitted Successfully. Our team will contact you soon.",
                                icon: "success"
                            }).then(() => {
                                $("#contactForm")[0].reset(); // Reset form fields
                            });
                        }
                        submitButton.prop("disabled", false).text(
                            "Send Message"); // Re-enable button
                    },
                    error: function(xhr) {
                        let errors = xhr.responseJSON.errors;
                        if (errors) {
                            if (errors.name) $("#nameError").text(errors.name[0]);
                            if (errors.mobile_no) $("#mobileNoError").text(errors.mobile_no[0]);
                            if (errors.email) $("#emailError").text(errors.email[0]);
                            if (errors.subject) $("#subjectError").text(errors.subject[0]);
                            if (errors.enquiry) $("#enquiryError").text(errors.enquiry[0]);
                        } else {
                            Swal.fire("Error!", "Something went wrong. Please try again.",
                                "error");
                        }
                        submitButton.prop("disabled", false).text(
                            "Send Message"); // Re-enable button
                    }
                });
            });
        });
    </script>
</body>

</html>
