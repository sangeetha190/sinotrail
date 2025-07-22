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
    <title>Contact</title>
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
                style="background-image: url({{ asset('user/assets/img/about/br.png') }});background-size: cover;background-position: right;background: #016db2;">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumbs-area">
                                <h1>Contact Us</h1>
                                <ul>
                                    <li>
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li>Contact</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Inner Page Banner Area End Here -->




            <!-- Contact Us Area Start Here -->
            <section class="contact-wrap-layout">
                <div class="container">
                    <div class="google-map-area">
                        <!-- <div id="googleMap" style="width:100%; height:496px;"></div> -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.910096947636!2d80.13860337980202!3d13.041394289606902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52610e55ef23b7%3A0x2a5034f49f43e426!2sSINOATRIAL%20MEDICAL%20TECHNOLOGIES!5e0!3m2!1sen!2sin!4v1753079804784!5m2!1sen!2sin"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="contact-box-layout1">
                                <h3 class="title title-bar-primary4">Leave Us Message</h3>
                                {{-- <form class="contact-form-box" id="contact-form"> --}}
                                <form id="contactForm" class="contact-form-box">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input type="text" placeholder="Name *" class="form-control"
                                                name="name" id="name" data-error="Phone field is required"
                                                required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="email" placeholder="E-mail *" class="form-control"
                                                name="email" id="email" data-error="Subject field is required"
                                                required>
                                            <span class="error text-danger" id="emailError"></span>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" placeholder="Phone *" class="form-control"
                                                name="mobile_no" id="mobile_no" data-error="Subject field is required"
                                                required>
                                            <span class="error text-danger" id="mobileNoError"></span>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <input type="text" placeholder="Subject *" class="form-control"
                                                name="subject" id="subject" data-error="Subject field is required"
                                                required>
                                            <span class="error text-danger" id="subjectError"></span>
                                        </div>

                                        <div class="col-12 form-group">
                                            <textarea placeholder="Message*" class="textarea form-control" name="enquiry" id="enquiry" rows="7"
                                                cols="20" data-error="Message field is required" required></textarea>
                                            <span class="error text-danger" id="enquiryError"></span>
                                        </div>

                                        <div class="col-12 form-group margin-b-none">
                                            <button type="submit" id="submitBtn" class="item-btn">
                                                Send Message
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-response"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="contact-box-layout1">
                                <h3 class="title title-bar-primary4">Address</h3>
                                <div class="contact-info">
                                    <ul>
                                        <li><i class="fas fa-map-marker-alt"></i>Sinoatrial Medical Technologies ,
                                            No.10A ,F2 First Floor,
                                            VGN Nagar,
                                            4th main road, Ayyapanthangal,
                                            Chennai-600056.</li>
                                        <li><i class="far fa-envelope"></i>sinoatrialservice@gmail.com</li>
                                        <li><i class="fas fa-phone"></i> 044-4542 8844</li>
                                        <li><i class="fas fa-mobile-alt"></i> 98416 98 988</li> <!-- Mobile -->
                                        <li><i class="fab fa-whatsapp"></i> 965944 68 37</li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact Us Area End Here -->

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
