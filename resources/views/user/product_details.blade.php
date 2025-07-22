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



        {{-- content starts here  --}}

        <!-- Inner Page Banner Area Start Here -->
        <section class="inner-page-banner bg-common inner-page-top-margin"
            style="background-image: url({{ asset('user/assets/img/about/br.png') }});background-size: cover;background-position: right;background: #016db2;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Product Details</h1>
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li>Product Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inner Page Banner Area End Here -->
        <!-- Shop Details Start Here -->
        <section class="single-product-wrap bg-light-primary100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8 col-12 margin-b-30r">
                        <div class="single-product-box">


                            <div class="row">
                                <div class="col-xl-6 col-12">
                                    <div class="single-product-gallery">
                                        <div class="tab-content">
                                            @foreach ($product_images as $index => $image)
                                                <div role="tabpanel"
                                                    class="tab-pane fade {{ $index == 0 ? 'active show' : '' }}"
                                                    id="product-tab-{{ $index }}">
                                                    <a href="#">
                                                        <img alt="product-image"
                                                            src="{{ asset('storage/' . $image->image_path) }}"
                                                            class="img-responsive">
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>

                                        <ul class="nav nav-tabs">
                                            @foreach ($product_images as $index => $image)
                                                <li class="nav-item">
                                                    <a href="#product-tab-{{ $index }}" data-toggle="tab"
                                                        aria-expanded="false" class="{{ $index == 0 ? 'active' : '' }}">
                                                        <img alt="thumbnail"
                                                            src="{{ asset('storage/' . $image->image_path) }}"
                                                            class="img-responsive">
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                                {{-- Right Side Product Info (unchanged, dynamic values below optional) --}}
                                <div class="col-xl-6 col-12">
                                    <div class="single-product-info">
                                        <h2 class="item-title">{{ $product->name }}</h2>
                                        <ul class="rating">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <li>
                                                    <i
                                                        class="fa fa-star {{ $i <= round($product->rating) ? '' : 'text-muted' }}"></i>
                                                </li>
                                            @endfor
                                        </ul>
                                        <div class="price">₹{{ $product->discount_price ?? $product->price }}
                                        </div>
                                        {{-- <div class="item-sku">SKU: <span>{{ $product->sku ?? 'N/A' }}</span></div> --}}
                                        <div class="product_in-stock text-success">
                                            <i class="fa fa-check-circle"></i><span
                                                class=" {{ $product->stock > 10 ? 'text-success' : 'text-danger' }}">
                                                in
                                                Stock Only
                                                {{ $product->stock }}
                                                left</span>
                                        </div>
                                        {{-- <p>{{ $product->description }}</p> --}}

                                        @if ($product->description)
                                            <div class="my-2 mt-4">
                                                <p class="mb-0"><b>Product Description</b></p>
                                                <div class="product-details__short-description mt-0">
                                                    {{ $product->description }}
                                                </div>
                                            </div>
                                        @endif
                                        {{-- <div class="col-12 form-group margin-b-none"> --}}
                                        {{-- <button type="submit" class="item-btn">Submit Message</button> --}}
                                        <button type="submit" id="submitBtn"
                                            class="action-items-primary-btn contact-us_btn">
                                            Send Message
                                        </button>

                                        {{-- </div> --}}
                                        {{-- Add-to-cart section... (no changes needed here) --}}
                                    </div>
                                </div>
                            </div>
                        </div>





                        {{-- <div class="single-product-tab">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                                <a href="#description" data-toggle="tab" aria-expanded="false"
                                                    class="active">Description</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#review" data-toggle="tab" aria-expanded="false">Reviews(3)</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade active show" id="description">
                                                <p>Yorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                                    fringilla
                                                    augue
                                                    nec est tristique auctor. Donec non est at libero vulputate rutrum.
                                                    Morbi
                                                    justo gravida semper.</p>
                                                <ul class="list-content">
                                                    <li>Seat Height – Floor to Seat: 24”</li>
                                                    <li>Frame Material: Wood</li>
                                                    <li>Seat Material: Wood</li>
                                                    <li>Adjustable Height: No</li>
                                                    <li>Overall: 24” H x 17” W x 14” D</li>
                                                </ul>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="review">
                                                <p>Porem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                    nonummy nibh
                                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                                                    wisi
                                                    enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                                    suscipit
                                                    lobortis
                                                    nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit
                                                    adipiscing
                                                    elit ut laoreet dolore magna aliquam.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="related-product">
                                        <h3 class="item-title title-bar-primary2">Related Products</h3>
                                        <div class="rc-carousel nav-control-layout6" data-loop="true" data-items="4"
                                            data-margin="10" data-autoplay="true" data-autoplay-timeout="5000"
                                            data-smart-speed="2000" data-dots="false" data-nav="true"
                                            data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
                                            data-r-x-small-dots="false" data-r-x-medium="4" data-r-x-medium-nav="true"
                                            data-r-x-medium-dots="false" data-r-small="4" data-r-small-nav="true"
                                            data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="true"
                                            data-r-medium-dots="false" data-r-large="4" data-r-large-nav="true"
                                            data-r-large-dots="false" data-r-extra-large="4"
                                            data-r-extra-large-nav="false" data-r-extra-large-dots="false">

                                            @if ($related_products->count() > 0)
                                                @foreach ($related_products as $product)
                                                    <div class="shop-box-layout1">
                                                        <a href="{{ route('product_details', $product->slug) }}">
                                                            <div class="item-img">
                                                                <img src="/storage/{{ $product->thumbnail }}"
                                                                    alt="{{ $product->name }}" class="img-fluid">
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
                                                                                class="fas fa-star fs-5 {{ $i <= $averageRating ? 'text-warning' : 'text-secondary' }}"></i>
                                                                        @endfor
                                                                    @endif

                                                                </div>
                                                                {{-- <div class="item-price">
                                                                    @if ($product->discount_price)
                                                                        <del>
                                                                            <span class="product-Price-amount me-3">
                                                                                <span
                                                                                    class="product-Price-currencySymbol">Rs.</span>
                                                                                {{ $product->price }}
                                                                            </span>
                                                                        </del>
                                                                        <ins>
                                                                            <span class="product-Price-amount me-3">
                                                                                <span
                                                                                    class="product-Price-currencySymbol">Rs.</span>
                                                                                {{ $product->discount_price }}
                                                                            </span>
                                                                        </ins>
                                                                    @else
                                                                        <ins>
                                                                            <span class="product-Price-amount me-3">
                                                                                <span
                                                                                    class="product-Price-currencySymbol">Rs.</span>
                                                                                {{ $product->price }}
                                                                            </span>
                                                                        </ins>
                                                                    @endif
                                                                </div> --}}
                                                            </div>
                                                        </a>
                                                    </div>
                                                @endforeach
                                            @else
                                                <p class="text-left">No related products found.</p>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-widget-area sidebar-break-md col-xl-3 col-lg-4 col-12">
                        <div class="widget widget-categories">
                            <h3 class="section-title title-bar-primary">Categories</h3>
                            <ul class="menu-vertical">
                                {{-- <li class="{{ request()->routeIs('product') ? 'active' : '' }}">
                                    <a href="{{ route('product') }}" class="text-uppercase">All Categories</a>
                                </li> --}}
                                @foreach ($categories as $category)
                                    <li
                                        class="{{ request()->segment(2) == $category->name ? 'active' : '' }} text-capitalize">
                                        <a href="{{ route('category.products', $category->name) }}">
                                            {{ $category->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        {{-- <div class="widget widget-price-range">
                                <h3 class="section-title title-bar-primary">Filder By Price</h3>
                                <div id="price-range-wrapper" class="price-range-wrapper">
                                    <div id="price-range-filter"></div>
                                    <div class="price-filter-wrap d-flex align-items-center">
                                        <div class="price-range-select">
                                            <div class="price-range">Price:</div>
                                            <div class="price-range" id="price-range-min"></div>
                                            <div class="price-range">-</div>
                                            <div class="price-range" id="price-range-max"></div>
                                        </div>
                                        <div class="filter-button">
                                            <button class="item-btn btn-ghost size-xs radius-4 text-capitalize"
                                                type="submit" value="Login">Filter</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget widget-tag">
                                <h3 class="section-title title-bar-primary">Tags</h3>
                                <ul>
                                    <li>
                                        <a href="#">Dental</a>
                                    </li>
                                    <li>
                                        <a href="#">Eye Care</a>
                                    </li>
                                    <li>
                                        <a href="#">Labrotary</a>
                                    </li>
                                    <li>
                                        <a href="#">Care</a>
                                    </li>
                                    <li>
                                        <a href="#">Health</a>
                                    </li>
                                    <li>
                                        <a href="#">Modern Clinic</a>
                                    </li>
                                </ul>
                            </div> --}}
                    </div>


                </div>
            </div>
        </section>
        <!-- Shop Details End Here -->

    </div>
    {{-- content Ends here  --}}

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
