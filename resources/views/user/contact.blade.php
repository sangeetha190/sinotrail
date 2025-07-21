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
                                <h1 class="title">Contact Us</h1>
                            </div>
                            <div class="breadcrumb-wrapper mt-2">
                                <span class="mr-1"><i class="ti ti-home"></i></span>
                                <a title="Homepage" href="{{ route('home') }}">Home</a>
                                <span class="ttm-bread-sep">&nbsp;/&nbsp;</span>
                                <span class="ttm-textcolor-skincolor">Contact Us</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- page-title end-->


        <!--site-main start-->
        <div class="site-main">
            <section class="contact-section bg-layer bg-layer-equal-height clearfix">
                <div class="container">
                    <div class="row g-0">
                        <div class="col-lg-8 col-md-7">
                            <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-grey spacing-2">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                <div class="layer-content">
                                    <!-- section title -->
                                    <div class="section-title style2">
                                        <div class="title-header">
                                            <h5>GET IN TOUCH</h5>
                                            <h2 class="title">Contact Form</h2>
                                        </div>
                                    </div><!-- section title end -->

                                    <form id="contactForm" class="ttm-contactform wrap-form clearfix">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label>
                                                    <span class="text-input"><i
                                                            class="ttm-textcolor-darkgrey ti-user"></i>
                                                        <input name="name" type="text" id="name"
                                                            placeholder="Your Name" required="required">
                                                    </span>
                                                </label>
                                                <span class="error text-danger" id="nameError"></span>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>
                                                    <span class="text-input"><i
                                                            class="ttm-textcolor-darkgrey ti-mobile"></i>
                                                        <input name="mobile_no" type="text" id="mobile_no"
                                                            placeholder="Cell Phone" required="required">
                                                    </span>
                                                </label>
                                                <span class="error text-danger" id="mobileNoError"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label>
                                                    <span class="text-input"><i
                                                            class="ttm-textcolor-darkgrey ti-email"></i>
                                                        <input name="email" type="email" id="email"
                                                            placeholder="Email" required="required">
                                                    </span>
                                                </label>
                                                <span class="error text-danger" id="emailError"></span>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>
                                                    <span class="text-input"><i
                                                            class="ttm-textcolor-darkgrey ti-comment"></i>
                                                        <input name="subject" type="text" id="subject"
                                                            placeholder="Subject" required="required">
                                                    </span>
                                                </label>
                                                <span class="error text-danger" id="subjectError"></span>
                                            </div>
                                        </div>
                                        <label>
                                            <span class="text-input"><i class="ttm-textcolor-darkgrey ti-comment"></i>
                                                <textarea name="enquiry" rows="3" id="enquiry" placeholder="Message" required="required"></textarea>
                                            </span>
                                        </label>
                                        <span class="error text-danger" id="enquiryError"></span>

                                        <button type="submit" id="submitBtn"
                                            class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor">
                                            Send Message
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-skincolor spacing-3">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                <div class="layer-content">
                                    <div class="box-header">
                                        <div class="box-icon">
                                            <i class="fa fa-paper-plane"></i>
                                        </div>
                                    </div>
                                    <h4>Contact Information</h4>
                                    <ul class="ttm_contact_widget_wrapper">
                                        <li><i class="ttm-textcolor-highlight ti ti-location-pin text-white"></i>15A,
                                            Shastri Nagar Main Rd, near Kakkan bridge, Adambakkam, Chennai, Tamil Nadu
                                            India-600088</li>


                                        <li> <a href="tel:+919047772117">
                                                <i class="ttm-textcolor-highlight ti ti-headphone text-white"></i>+91
                                                90477 72117
                                            </a> </li>

                                        <li><i class="fa-solid fa-envelope"></i><a
                                                href="mailto:aquawaterpurifierspondicherry@gmail.com">aquawaterpurifierspondicherry@gmail.com</a>
                                        </li>
                                    </ul>
                                    <div class="social-icons circle social-hover">
                                        <ul class="list-inline">
                                            {{-- <li class="social-facebook"><a class="tooltip-top ttm-textcolor-skincolor"
                                                    href="" data-tooltip="Facebook" target="_blank"><i
                                                        class="ti ti-facebook" aria-hidden="true"></i></a></li>
                                            <li class="social-linkedin"><a class="tooltip-top ttm-textcolor-skincolor"
                                                    href="" data-tooltip="Facebook" target="_blank"><i
                                                        class="ti ti-linkedin" aria-hidden="true"></i></a></li>
                                            <li class="social-instagram"><a
                                                    class="tooltip-top ttm-textcolor-skincolor" href=""
                                                    data-tooltip="Instagram" target="_blank"><i
                                                        class="ti ti-instagram" aria-hidden="true"></i></a></li>
                                            <li class="social-whatsapp"><a class="tooltip-top ttm-textcolor-skincolor"
                                                    href="" data-tooltip="Twitter" target="_blank"><i
                                                        class="ti ti-twitter-alt" aria-hidden="true"></i></a></li>
                                            <li class="social-dribbble"><a class="tooltip-top ttm-textcolor-skincolor"
                                                    href="" data-tooltip="Dribbble" target="_blank"><i
                                                        class="ti ti-dribbble" aria-hidden="true"></i></a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- row end -->
                </div>
            </section>

            <!--google_map-->
            <div id="google_map" class="google_map mb-4">
                <div class="container">
                    <div class="map_container">
                        <div class="map">
                            {{-- <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15550.978806747717!2d80.204654!3d12.988174!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52677d1e9b0b21%3A0x9fdb5e2c1ce92ab9!2sAqua%20Care%20Hi-Tech%20System!5e0!3m2!1sen!2sin!4v1739335923679!5m2!1sen!2sin"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31227.67955670206!2d79.76599997431641!3d11.942624500000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a53619b717b15a3%3A0x428c636d0d5cdd2d!2sAquaguard%20water%20purifier%20pondicherry!5e0!3m2!1sen!2sin!4v1741259728055!5m2!1sen!2sin"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                </div>
            </div>

            <!-- google_map end -->


        </div>
        <!--site-main end-->
        <!--footer start-->
        @include('user.layouts.footer')
        <!--footer end-->
    </div>
    <!-- page end -->
    <!-- Javascript -->
    @include('user.layouts.script')
    {{-- <script>
        document.getElementById("contactForm").addEventListener("submit", function(event) {
            let submitButton = document.getElementById("submitBtn");
            submitButton.disabled = true;
            submitButton.innerHTML = "Submitting..."; // Change button text while submitting
        });
    </script> --}}
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
