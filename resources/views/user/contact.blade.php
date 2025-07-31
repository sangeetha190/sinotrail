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

        <div class="container">
            <div class="breadcrumb-content">
                <h2>Contact</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Service Section End -->

    <!-- Contact Us section Start -->
    <section class="contact-us-wrap ptb-50">

        <div class="row">
            <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                <div class="section-title style-one text-center mb-40">
                    <span class="mt-3">Contact Us</span>
                    <h2> Share Your Message <span>With Us.</span><img
                            src="{{ asset('user/assets/img/section-shape-2.png') }}" alt="Image"></h2>
                </div>
            </div>
            <div class="col-xl-10 offset-xl-1">
                <div class="contact-form">
                    {{-- <form class="form-wrap" id="contactForm"> --}}
                    <form id="contactForm" class="contact-form-box">
                        @csrf
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Full Name*" id="name"
                                        required data-error="Please enter your name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" required
                                        placeholder="Your Email Address*" data-error="Please enter your email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" name="mobile_no" id="mobile_no" required
                                        placeholder="Phone Number*" data-error="Please enter your email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="subject" placeholder="Subject*" id="subject" required
                                        data-error="Please enter your subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>



                            <div class="col-12">
                                <div class="form-group">
                                    <textarea name="enquiry" id="enquiry" placeholder="Your Messages.." cols="30" rows="10" required
                                        data-error="Please enter your message"></textarea>
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <div class="form-check checkbox">
                                    <input name="gridCheck" value="I agree to the terms and privacy policy."
                                        class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label class="form-check-label" for="gridCheck">
                                        I agree to the <a href="terms-conditions.html">Terms
                                            &amp; Conditions</a> and <a href="privacy-policy.html">Privacy
                                            Policy</a>
                                    </label>
                                    <div class="help-block with-errors gridCheck-error"></div>
                                </div>
                            </div> --}}
                            <div class="col-md-12">
                                <button type="submit" class="btn-two" id="submitBtn">Send
                                    Message</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        </div>

        <div class="row mt-5">
            <div class="col-xl-10 offset-xl-1">
                <div class="row justify-content-center pb-75 mx-xxl-5">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="contact-card">
                            <img src="{{ asset('user/assets/img/contact-card-shape.webp') }}" alt="Image"
                                class="contact-shape">
                            <span class="contact-icon">
                                <i class="flaticon-pin"></i>
                            </span>
                            <div class="contact-info">
                                <h3>Our Location</h3>
                                <p class="text-white">Sinoatrial Medical
                                    Technologies , No.10A ,F2 First
                                    Floor, VGN Nagar, 4th main road,
                                    Ayyapanthangal, Chennai-600056.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="contact-card">
                            <img src="{{ asset('user/assets/img/contact-card-shape.webp') }}" alt="Image"
                                class="contact-shape">
                            <span class="contact-icon">
                                <i class="flaticon-mail"></i>
                            </span>
                            <div class="contact-info">
                                <h3>Email Address</h3>
                                <a
                                    href="https://templates.hibotheme.com/cdn-cgi/l/email-protection#5a292f2a2a35282e1a3e35362e74393537"><span
                                        class="__cf_email__ text-white"
                                        data-cfemail="5f2c2a2f2f302d2b1f3b30332b713c3032">sinoatrialservice@gmail.com</span></a>
                                <a
                                    href="https://templates.hibotheme.com/cdn-cgi/l/email-protection#5a292f2a2a35282e1a3e35362e74393537"><span
                                        class="__cf_email__ text-white"
                                        data-cfemail="5f2c2a2f2f302d2b1f3b30332b713c3032">sinoatrialservice@gmail.com</span></a>
                                <a
                                    href="https://templates.hibotheme.com/cdn-cgi/l/email-protection#5a292f2a2a35282e1a3e35362e74393537"><span
                                        class="__cf_email__ text-white"
                                        data-cfemail="5f2c2a2f2f302d2b1f3b30332b713c3032">sinoatrialservice@gmail.com</span></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="contact-card">
                            <img src="{{ asset('user/assets/img/contact-card-shape.webp') }}" alt="Image"
                                class="contact-shape">
                            <span class="contact-icon">
                                <i class="flaticon-phone-call"></i>
                            </span>
                            <div class="contact-info">
                                <h3>Phone Number</h3>
                                <a class="text-white" href="tel:088123654987">+044-4542
                                    8844</a>
                                <a class="text-white" href="tel:088123654612">+98416 98
                                    988</a>
                                <a class="text-white" href="tel:088123654612">+965944 68
                                    37</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- iframes -->
                <div class="w-100 mb-5">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.910096947636!2d80.13860337980202!3d13.041394289606902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52610e55ef23b7%3A0x2a5034f49f43e426!2sSINOATRIAL%20MEDICAL%20TECHNOLOGIES!5e0!3m2!1sen!2sin!4v1753079804784!5m2!1sen!2sin"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us section End -->


    <!--footer start-->
    @include('user.layouts.footer')
    <!--footer end-->


    {{-- main Layout Ends here --}}
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
