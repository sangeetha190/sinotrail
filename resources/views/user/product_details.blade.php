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

    <style>
        .product-card.style-two {
            background: #ffffff;
            border-radius: 15px;
            padding: 20px 20px;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.05);
            position: relative;
            z-index: 1;
        }

        .product-card.style-two:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        }

        .product-card.style-two .product-image img {

            width: auto;
            margin-bottom: 15px;
            border-radius: 10px;
            object-fit: contain;
        }

        .product-card.style-two h3 {
            font-size: 20px;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .product-card.style-two p {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
            min-height: 60px;
        }

        .product-card.style-two .btn-three {
            font-size: 14px;
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
            display: inline-block;
            margin-top: 10px;
            transition: 0.3s;
        }

        .product-card.style-two .btn-three i {
            margin-left: 6px;
            transition: 0.3s;
        }

        .product-card.style-two .btn-three:hover i {
            transform: translateX(5px);
        }
    </style>
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
        <!-- <img src="assets/img/breadcrumb/br-shape-1.webp" alt="Image" class="br-shape-one bounce sm-none"> -->
        <img src="{{ asset('user/assets/img/breadcrumb/br-shape-2.webp') }}" alt="Image"
            class="br-shape-two moveHorizontal sm-none">
        <img src="{{ asset('user/assets/img/breadcrumb/br-shape-3.webp') }}" alt="Image" class="br-shape-three">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Product Details</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Product Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <section class="shop-details-wrap py-5 bg-light">
        <div class="container">
            <div class="row g-4">




                <!-- Product Image -->
                @foreach ($product_images as $index => $image)
                    <div class="col-lg-6">

                        <div class="product-image">

                            <img src="{{ asset('storage/' . $image->image_path) }}" alt="Medical Bottle"
                                class="img-fluid rounded shadow-sm w-75">

                        </div>

                    </div>
                @endforeach

                <!-- Product Details -->
                <div class="col-lg-6">
                    <div class="product-details">
                        <h4 class="mb-3">{{ $product->name }}</h4>

                        <div class="rate-items text-warning mb-2">

                            <ul class="" style="display: flex;list-style: none;padding: 0;">
                                @for ($i = 1; $i <= 5; $i++)
                                    <li style="padding: 0 4px;">
                                        <i
                                            class="fa fa-star {{ $i <= round($product->rating) ? '' : 'text-muted' }}"></i>
                                    </li>
                                @endfor
                            </ul>

                            {{-- <i class="fas fa-star"></i> --}}
                            {{-- <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i> --}}
                            <span class="ms-2 text-muted">(4.5/5)</span>
                        </div>
                        <h3 class="text-primary mb-3">₹{{ $product->discount_price ?? $product->price }}</h3>
                        <p> <i class="fa fa-check-circle"></i><span
                                class=" {{ $product->stock > 10 ? 'text-success' : 'text-danger' }}">
                                in
                                Stock Only
                                {{ $product->stock }}
                                left</span></p>

                        @if ($product->description)
                            <div class="my-2 mt-4">
                                <p class="mb-4"><b>Product Description</b></p>
                                <div class="product-details__short-description mt-0">
                                    {{ $product->description }}
                                </div>
                            </div>
                        @endif
                        {{-- <p class="mb-4">
                            This high-quality medical bottle is made of
                            BPA-free materials and suitable for both
                            clinical and home use. Designed for safety and
                            precision.
                        </p> --}}

                        <a href="{{ route('contact') }}">
                            <button class="btn btn-primary me-3 btn-two px-4 py-2">Contact
                                Us</button>
                        </a>
                        {{-- <button class="btn btn-outline-secondary disabled">Buy
                            Now</button> --}}
                    </div>
                </div>
            </div>

            <!-- Additional Description / Tabs -->
            {{-- <div class="row mt-5">
                <div class="col-12">
                    <ul class="nav nav-tabs" id="productTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="desc-tab" data-bs-toggle="tab" data-bs-target="#desc"
                                type="button">Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review"
                                type="button">Reviews</button>
                        </li>
                    </ul>
                    <div class="tab-content p-4 border bg-white" id="productTabContent">
                        <div class="tab-pane fade show active" id="desc">
                            <p>The medical bottle is lightweight, durable,
                                and designed for ease of use. It is often
                                used in hospitals, clinics, and personal
                                medical kits. The product is sterilized and
                                compliant with industry safety
                                standards.</p>
                        </div>
                        <div class="tab-pane fade" id="review">
                            <p>No reviews yet. Be the first to review this
                                product!</p>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>

    <!-- Shop Area End Here -->


    <section>
        <!-- Related Products Section Start -->
        <div class="related-products-wrap style-two bg_optional ptb-100">
            <div class="container">

                <img src="{{ asset('user/assets/img/services/service-shape-1.png') }}" alt="Shape"
                    class="service-shape-two bounce">

                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <div class="content-title style-one text-center mb-40" data-aos="fade-up" data-aos-delay="100">
                            <span>RECOMMENDED FOR YOU</span>
                            <h2>Related <span>Products
                                    <img src="{{ asset('user/assets/img/section-shape-2.png') }}" alt="Shape">
                                </span></h2>
                        </div>
                    </div>
                </div>

                <div class="product-slider-wrap" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper related-products-slider">
                        <div class="swiper-wrapper">

                            <!-- Product 1 -->

                            @if ($related_products->count() > 0)
                                @foreach ($related_products as $product)
                                    <div class="swiper-slide">
                                        <div class="product-card style-two">
                                            <a href="{{ route('product_details', $product->slug) }}">
                                                <div class="product-image mb-3">
                                                    <img src="/storage/{{ $product->thumbnail }}"
                                                        class="img-fluid rounded" alt="{{ $product->name }}">
                                                </div>
                                                <h3 class="ellipsis-text">{{ $product->name }}</h3>
                                                @if ($product->rating > 0)
                                                    @php
                                                        $averageRating = round($product->rating); // Round the rating to the nearest integer
                                                    @endphp
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        <i
                                                            class="fas fa-star fs-6 {{ $i <= $averageRating ? 'text-warning' : 'text-secondary' }}"></i>
                                                    @endfor
                                                @endif
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p class="text-left">No related products found.</p>
                            @endif
                            {{-- <div class="swiper-slide">
                                <div class="product-card style-two">
                                    <div class="product-image mb-3">
                                        <img src="https://sinoatrial.in/images/new/blog_3.png" class="img-fluid rounded"
                                            alt="SpO₂ Sensor">
                                    </div>
                                    <h3><a href="#">SpO₂ Finger Sensor</a></h3>
                                    <p>Reliable oxygen saturation monitoring compatible with most devices.</p>
                                    <a href="#" class="btn-three">View Product <i
                                            class="flaticon-right-arrow"></i></a>
                                </div>
                            </div> --}}


                        </div>
                    </div>

                    <!-- Slider Navigation -->
                    <div class="product-slider-btn slider-btn mt-3">
                        <div class="product-prev prev-btn"><img src="{{ asset('user/assets/img/left-arrow.svg') }}"
                                alt="Left Arrow">
                        </div>
                        <div class="product-next next-btn"><img src="{{ asset('user/assets/img/right-arrow.svg') }}"
                                alt="Right Arrow">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Related Products Section End -->

    </section>
    {{-- main Layout ends here --}}

    <!--footer start-->
    @include('user.layouts.footer')
    <!--footer end-->

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

    <script>
        const relatedSlider = new Swiper('.related-products-slider', {
            loop: true,
            spaceBetween: 30,
            slidesPerView: 1,
            navigation: {
                nextEl: '.product-next',
                prevEl: '.product-prev',
            },
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            breakpoints: {
                576: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 3,
                }
            }
        });
    </script>
</body>

</html>
