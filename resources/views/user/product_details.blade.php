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
    <title>Product</title>
    @include('user.layouts.link')
    <style>
        .modal-backdrop {
            display: none;
            --bs-backdrop-zindex: 8899;
            --bs-backdrop-bg: #ededed00;
            --bs-backdrop-opacity: 0.5;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 8899 !important;
            width: 100vw;
            height: 100vh;
            background-color: var(--bs-backdrop-bg);
        }

        .modal-backdrop.show {
            opacity: 1 !important;
        }

        .discount_price.product-Price-amount {
            font-weight: 500;
            text-decoration: line-through;
            margin-left: 5px;
            color: #656c76;
        }
    </style>
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
                                <h1 class="title">{{ $product->name }}</h1>
                            </div>
                            <div class="breadcrumb-wrapper mt-2">
                                <span class="mr-1"><i class="ti ti-home"></i></span>
                                <a title="Homepage" href="{{ route('home') }}">Home</a>
                                <span class="ttm-bread-sep">&nbsp;/&nbsp;</span>
                                <span class="ttm-textcolor-skincolor">{{ $product->name }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-title end-->

        <!--site-main start-->
        <div class="site-main">
            <!-- single-product-section -->
            <section class="single-product-section layout-2 clearfix">
                <div class="container">

                    {{-- @foreach ($products as $product)
                        <div class="product-item">
                            <h3>{{ $product->name }}</h3>
                            <a href="{{ route('product.details', $product->id) }}">View Details</a>
                        </div>
                    @endforeach --}}
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ttm-single-product-details">
                                <div class="ttm-single-product-info clearfix">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 ml-auto mr-auto">
                                            <div class="product-gallery easyzoom-product-gallery clearfix">
                                                <div class="product-look-preview-plus left">
                                                    <div class="pr-35 res-767-pr-15">
                                                        <div
                                                            class="easyzoom easyzoom--overlay easyzoom--with-thumbnails">
                                                            <a href="/storage/{{ $product->thumbnail }}">
                                                                <img class="img-fluid"
                                                                    src="/storage/{{ $product->thumbnail }}"
                                                                    alt="" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-look-views right">
                                                    <div class="mt-35 mb-35">
                                                        <ul class="thumbnails easyzoom-gallery-slider"
                                                            data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "arrows": true, "infinite": true, "vertical": true}'>
                                                            <li>
                                                                <a href="/storage/{{ $product->thumbnail }}"
                                                                    data-standard="/storage/{{ $product->thumbnail }}">
                                                                    <img class="img-fluid"
                                                                        src="/storage/{{ $product->thumbnail }}"
                                                                        alt="Product Image" />
                                                                </a>
                                                            </li>
                                                            @foreach ($product_images as $image)
                                                                <li>
                                                                    <a href="/storage/{{ $image->image_path }}"
                                                                        data-standard="/storage/{{ $image->image_path }}">
                                                                        <img class="img-fluid"
                                                                            src="/storage/{{ $image->image_path }}"
                                                                            alt="Product Image" />
                                                                    </a>
                                                                </li>
                                                            @endforeach

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="summary entry-summary pl-30 res-991-pl-0 res-991-pt-40">
                                                <h2 class="product_title entry-title mb-0">
                                                    {{ $product->name }}
                                                </h2>
                                                <span>{{ $product->brand }}</span>
                                                <hr />
                                                <div class="product_in-stock text-success">
                                                    <i class="fa fa-check-circle"></i><span
                                                        class=" {{ $product->stock > 10 ? 'text-success' : 'text-danger' }}">
                                                        in
                                                        Stock Only
                                                        {{ $product->stock }}
                                                        left</span>
                                                </div>
                                                <span class="price">
                                                    @if ($product->discount_price)
                                                        <ins>
                                                            <span class="product-Price-amount me-3">
                                                                <span class="product-Price-currencySymbol">Rs.</span>
                                                                {{ $product->discount_price }}
                                                            </span>
                                                        </ins>
                                                        <span class=" discount_price product-Price-amount me-3 ">
                                                            <span class="product-Price-currencySymbol">Rs.</span>
                                                            {{ $product->price }}
                                                        </span>
                                                    @else
                                                        <ins>
                                                            <span class="product-Price-amount me-3">
                                                                <span class="product-Price-currencySymbol">Rs.</span>
                                                                {{ $product->price }}
                                                            </span>
                                                        </ins>
                                                    @endif
                                                </span>

                                                <div class="my-2">
                                                    <p class="mb-0"><b>Rating</b></p>
                                                    @if ($product->rating > 0)
                                                        @php
                                                            $averageRating = round($product->rating); // Round the rating to the nearest integer
                                                        @endphp
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            <i
                                                                class="fa-solid fa-star {{ $i <= $averageRating ? 'text-warning' : 'text-secondary' }}"></i>
                                                        @endfor
                                                    @endif
                                                </div>

                                                @if ($product->description)
                                                    <div class="my-2">
                                                        <p class="mb-0"><b>Product Description</b></p>
                                                        <div class="product-details__short-description mt-0">
                                                            {{ $product->description }}
                                                        </div>


                                                    </div>
                                                @endif

                                                @if ($product->feature->isNotEmpty())
                                                    <hr />
                                                    <div class="row">
                                                        <div class="col-md-10 col-sm-12">
                                                            <p class="mb-0"><b>Product Details</b></p>
                                                            <table class="table table-borderless">
                                                                <tbody>
                                                                    @foreach ($product->feature as $feature)
                                                                        <tr>
                                                                            <td class="text-capitalize mb-0 pb-0">
                                                                                <b>{{ $feature->feature }}</b>
                                                                            </td>
                                                                            <td class="text-capitalize mb-0 pb-0">
                                                                                {{ $feature->value }}
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                @endif
                                                <div class="actions">
                                                    <div class="add-to-cart">
                                                        {{-- <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor"
                                                            href="#" data-bs-toggle="modal"
                                                            data-bs-target="#quoteModal">Get a Quote</a> --}}
                                                        {{-- <a href="tel:+91 834566777">+ --}}
                                                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor"
                                                            href="tel:+91 9047772117">Contact Us 90477 72117</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-30 pb-60 res-991-pt-0 res-991-pb-30">
                                    <div class="row no-gutters ttm-bgcolor-grey border">
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <!-- featured-icon-box -->
                                            <div class="featured-icon-box style3 text-center">
                                                <div
                                                    class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                    <i class="themifyicon ti-truck"></i>
                                                </div>
                                                <div class="featured-content">
                                                    <div class="featured-title">
                                                        <h5>Fast & Free Shopping</h5>
                                                    </div>
                                                    <div class="featured-desc">
                                                        <p>All Order Over $199</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- featured-icon-box end-->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <!-- featured-icon-box -->
                                            <div class="featured-icon-box style3 text-center">
                                                <div
                                                    class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                    <i class="themifyicon ti-reload"></i>
                                                </div>
                                                <div class="featured-content">
                                                    <div class="featured-title">
                                                        <h5>100% Money Back Guaranty</h5>
                                                    </div>
                                                    <div class="featured-desc">
                                                        <p>30 Days Money Return</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- featured-icon-box end-->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <!-- featured-icon-box -->
                                            <div class="featured-icon-box style3 text-center">
                                                <div
                                                    class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                    <i class="themifyicon ti-comments"></i>
                                                </div>
                                                <div class="featured-content">
                                                    <div class="featured-title">
                                                        <h5>Support 24/7 Days</h5>
                                                    </div>
                                                    <div class="featured-desc">
                                                        <p>Hot Line: +123 456 789</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- featured-icon-box end-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if ($related_products && count($related_products) > 0)
                                <div class="pt-35 related products">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="content-sec-head-style">
                                                <div class="content-area-sec-title">
                                                    <h5>Related Products</h5>
                                                    {{-- <h5>Our Top Selling Products</h5> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <!-- slick_slider -->
                                            <div class="slick_slider"
                                                data-slick='{"slidesToShow": 4, "slidesToScroll": 4, "arrows":true, "autoplay":true, "infinite":false}'>
                                                <!-- product -->
                                                @foreach ($related_products as $related)
                                                    <a href="{{ route('product_details', $related->slug) }}">
                                                        <div class="product">
                                                            <div class="product-box">
                                                                <!-- product-box-inner -->
                                                                <div class="product-box-inner">
                                                                    <div class="product-image-box">
                                                                        <img class="img-fluid pro-image-front"
                                                                            src="/storage/{{ $related->thumbnail }}"
                                                                            alt="{{ $related->name }}" />
                                                                    </div>

                                                                </div>
                                                                <!-- product-box-inner end -->
                                                                <div class="product-content-box">

                                                                    <h6 class="text-blue">{{ $product->name }}
                                                                    </h6>

                                                                    <div class="star-ratings">
                                                                        @if ($related->rating > 0)
                                                                            @php
                                                                                $averageRating = round(
                                                                                    $related->rating,
                                                                                ); // Round the rating to the nearest integer
                                                                            @endphp
                                                                            @for ($i = 1; $i <= 5; $i++)
                                                                                <i
                                                                                    class="fa-solid fa-star fs-6 {{ $i <= $averageRating ? 'text-warning' : 'text-secondary' }}"></i>
                                                                            @endfor
                                                                        @endif

                                                                    </div>
                                                                    <span class="price">
                                                                        @if ($product->discount_price)
                                                                            <ins>
                                                                                <span
                                                                                    class="product-Price-amount me-3">
                                                                                    <span
                                                                                        class="product-Price-currencySymbol">Rs.</span>
                                                                                    {{ $product->discount_price }}
                                                                                </span>
                                                                            </ins>
                                                                            <span
                                                                                class=" discount_price product-Price-amount me-3 ">
                                                                                <span
                                                                                    class="product-Price-currencySymbol">Rs.</span>
                                                                                {{ $product->price }}
                                                                            </span>
                                                                        @else
                                                                            <ins>
                                                                                <span
                                                                                    class="product-Price-amount me-3">
                                                                                    <span
                                                                                        class="product-Price-currencySymbol">Rs.</span>
                                                                                    {{ $product->price }}
                                                                                </span>
                                                                            </ins>
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                @endforeach
                                            </div>
                                            <!-- slick_slider end -->
                                        </div>
                                    </div>
                                </div>
                            @endif()

                        </div>
                    </div>
                </div>
                <!-- row end -->
        </div>
        </section>
        <!-- single-product-section end -->
    </div>
    <!--site-main end-->
    <!--footer start-->
    @include('user.layouts.footer')
    <!--footer end-->
    </div>
    <!-- page end -->

    <!-- Button trigger modal -->
    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#quoteModal">
        Launch demo modal
    </button> --}}

    <!-- Modal -->
    <div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel" aria-hidden="true"
        style="background:#0000004f">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="quoteModalLabel">Send an Enquiry
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ asset('user/assets/images/Products/img_1.jpg') }}" alt=""
                                class="w-100 h-100" style="object-fit: cover">
                        </div>
                        <div class="col-6">
                            <form id="quoteForm">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Name">
                                    <span class="text-danger" id="nameError"></span>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="name@gmail.com">
                                    <span class="text-danger" id="emailError"></span>
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="number" class="form-control" id="phone" name="phone"
                                        placeholder="10-digits">
                                    <span class="text-danger" id="phoneError"></span>
                                </div>

                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                                    <span class="text-danger" id="messageError"></span>
                                </div>

                                <button type="submit"
                                    class="ttm-btn ttm-btn-size-md ttm-btn-shape-square
                                    ttm-btn-style-fill ttm-btn-color-skincolor"
                                    id="submitBtn">Submit</button>

                            </form>
                        </div>
                    </div>

                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Sumbit</button>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Javascript -->
    @include('user.layouts.script')
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.7/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.7/dist/sweetalert2.all.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#quoteForm").submit(function(event) {
                event.preventDefault();

                let submitBtn = $("#submitBtn");
                submitBtn.prop("disabled", true).text("Submitting..."); // Disable button and change text
                $("#nameError, #emailError, #phoneError, #messageError").text(""); // Clear previous errors

                let formData = {
                    name: $("#name").val(),
                    email: $("#email").val(),
                    phone: $("#phone").val(),
                    message: $("#message").val(),
                    _token: "{{ csrf_token() }}"
                };

                $.ajax({
                    type: "POST",
                    url: "{{ route('submit.quote') }}",
                    data: formData,
                    success: function(response) {
                        Swal.fire({
                            title: "Success!",
                            text: "Quote submitted successfully. Our team will contact you soon.",
                            icon: "success",
                            confirmButtonColor: "#3085d6",
                            confirmButtonText: "OK"
                        }).then(() => {
                            $("#quoteForm")[0].reset(); // Reset form fields
                            submitBtn.prop("disabled", false).text(
                                "Submit"); // Enable button and reset text
                            $("#quoteModal").modal("hide"); // Close the modal
                        });
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) { // Validation error
                            let errors = xhr.responseJSON.errors;
                            if (errors.name) $("#nameError").text(errors.name[0]);
                            if (errors.email) $("#emailError").text(errors.email[0]);
                            if (errors.phone) $("#phoneError").text(errors.phone[0]);
                            if (errors.message) $("#messageError").text(errors.message[0]);
                        } else {
                            Swal.fire({
                                title: "Error!",
                                text: "Something went wrong. Please try again.",
                                icon: "error",
                                confirmButtonColor: "#d33",
                                confirmButtonText: "OK"
                            });
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>
