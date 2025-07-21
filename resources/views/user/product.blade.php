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
        li.active {
            background-color: #2457aa;

        }

        li.active a {
            color: white !important;
        }

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
                                <h1 class="title">Shop</h1>
                            </div>
                            <div class="breadcrumb-wrapper mt-2">
                                <span class="mr-1"><i class="ti ti-home"></i></span>
                                <a title="Homepage" href="{{ route('home') }}">Home</a>
                                <span class="ttm-bread-sep">&nbsp;/&nbsp;</span>
                                <span class="ttm-textcolor-skincolor">Shop</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- page-title end-->

        <!--site-main start-->
        <div class="site-main">

            <!-- Button trigger modal -->
            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#quoteModal">
                Launch demo modal
            </button> --}}

            <!-- Modal -->
            <div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel" aria-hidden="true"
                style="z-index:9999 !important">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="quoteModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
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
                                        placeholder="Phone Number">
                                    <span class="text-danger" id="phoneError"></span>
                                </div>

                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                                    <span class="text-danger" id="messageError"></span>
                                </div>

                                <button type="submit" class="btn btn-primary" id="submitBtn">Submit</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            {{-- <button type="button" class="btn btn-primary">Sumbit</button> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- sidebar -->
            <section class="sidebar ttm-sidebar-left clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-3 widget-area sidebar-left">
                            <aside class="widget menu-content">
                                <ul class="menu-vertical">
                                    <li class="{{ request()->routeIs('product') ? 'active' : '' }}">
                                        <a href="{{ route('product') }}" class="text-uppercase">All
                                            Categories</a>
                                    </li>
                                    @foreach ($categories as $category)
                                        <li class="{{ request()->segment(2) == $category->name ? 'active' : '' }}">
                                            <a
                                                href="{{ route('category.products', $category->name) }}">{{ $category->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </aside>

                        </div>
                        <div class="col-lg-9 content-area">

                            <div class="products products-fitter">
                                <div class="ttm-tabs">
                                    <div class="content-sec-head-style">
                                        <div class="content-area-sec-title">
                                            <h5>Our Products</h5>
                                        </div>
                                    </div>
                                    <div class="content-tab">
                                        <div class="content-inner">
                                            <div class="products row">
                                                @if ($products->count() > 0)


                                                    @foreach ($products as $product)
                                                        <!-- product -->
                                                        <div class="product col-md-4 col-sm-6 col-xs-12">
                                                            {{-- <a href="{{ route('product_details', $product->id) }}"> --}}
                                                            <a href="{{ route('product_details', $product->slug) }}">
                                                                <div class="product-box">
                                                                    <!-- product-box-inner -->
                                                                    <div class="product-box-inner">
                                                                        <div class="product-image-box">
                                                                            @if ($product->is_new)
                                                                                <div class="onsale">
                                                                                    {{ $product->is_new ? 'New' : '' }}
                                                                                </div>
                                                                            @endif

                                                                            @if ($product->is_trending)
                                                                                <div class="trending">
                                                                                    {{ $product->is_trending ? 'Trending' : '' }}
                                                                                </div>
                                                                            @endif

                                                                            <img class="img-fluid pro-image-front "
                                                                                src="/storage/{{ $product->thumbnail }}"
                                                                                alt="{{ $product->name }}">
                                                                        </div>
                                                                    </div><!-- product-box-inner end -->
                                                                    <div class="product-content-box">
                                                                        {{-- <span class="product-title"> --}}
                                                                        <h6 class="text-blue">{{ $product->name }}
                                                                        </h6>
                                                                        {{-- </span> --}}
                                                                        <div class="star-ratings">
                                                                            @if ($product->rating > 0)
                                                                                @php
                                                                                    $averageRating = round(
                                                                                        $product->rating,
                                                                                    ); // Round the rating to the nearest integer
                                                                                @endphp
                                                                                @for ($i = 1; $i <= 5; $i++)
                                                                                    <i
                                                                                        class="fa-solid fa-star {{ $i <= $averageRating ? 'text-warning' : 'text-secondary' }}"></i>
                                                                                @endfor
                                                                            @endif
                                                                        </div>
                                                                        <span class="price">
                                                                            @if ($product->discount_price)
                                                                                <del>
                                                                                    <span
                                                                                        class="product-Price-amount me-3">
                                                                                        <span
                                                                                            class="product-Price-currencySymbol">Rs.</span>
                                                                                        {{ $product->price }}
                                                                                    </span>
                                                                                </del>
                                                                                <ins>
                                                                                    <span
                                                                                        class="product-Price-amount me-3">
                                                                                        <span
                                                                                            class="product-Price-currencySymbol">Rs.</span>
                                                                                        {{ $product->discount_price }}
                                                                                    </span>
                                                                                </ins>
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
                                                                            {{-- @if ($product->price)
                                                                                <del><span
                                                                                        class="product-Price-amount me-3">
                                                                                        <span
                                                                                            class="product-Price-currencySymbol">Rs.</span>
                                                                                        ${{ $product->price }}
                                                                                    </span>
                                                                                </del>
                                                                            @endif

                                                                            @if ($product->discount_price)
                                                                                <ins><span
                                                                                        class="product-Price-amount">
                                                                                        <span
                                                                                            class="product-Price-currencySymbol">Rs.</span>
                                                                                        {{ $product->discount_price }}
                                                                                    </span>
                                                                                </ins>
                                                                            @endif --}}
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!-- product end -->
                                                    @endforeach
                                                @else
                                                    <p class="text-left">No related products found.</p>
                                                @endif
                                            </div>
                                        </div>
                                        <!---two-->
                                        {{-- <div class="content-inner">
                                            <div class="products row">
                                                bhjfj

                                            </div>
                                        </div> --}}
                                        <!---three-->
                                        {{-- <div class="content-inner">
                                            <div class="products row">
                                                33

                                            </div>
                                        </div> --}}

                                        {{-- <div class="content-inner">
                                            <div class="products row">
                                                44444

                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- row end -->
                </div>
            </section>
            <!-- sidebar end -->

        </div><!--site-main end-->
        <!--footer start-->
        @include('user.layouts.footer')
        <!--footer end-->
    </div>
    <!-- page end -->
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
