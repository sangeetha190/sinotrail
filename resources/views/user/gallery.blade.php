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
    <title>Gallery</title>
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
                                <h1>Gallery</h1>
                                <ul>
                                    <li>
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li>Gallery</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Inner Page Banner Area End Here -->

            <!-- Gallery Area Start Here -->
            <section class="gallery-wrap-layout1 bg-light-accent100">
                <div class="container">
                    <div class="isotope-wrap">

                        @php
                            use Illuminate\Support\Str;
                        @endphp

                        <!-- CATEGORY FILTER BUTTONS -->
                        <div class="text-center">
                            <div class="isotope-classes-tab isotop-btn">
                                <a href="#" class="current nav-item" data-filter="*">All</a>
                                @foreach ($gallery_categories as $category)
                                    <a href="#" class="nav-item" data-filter=".{{ Str::slug($category->name) }}">
                                        {{ $category->name }}
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        <!-- GALLERY IMAGES -->
                        <div class="row featuredContainer zoom-gallery">
                            @foreach ($gallery_images as $image)
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12 {{ Str::slug($image->category->name) }}">
                                    <div class="gallery-box-layout1">
                                        <img src="{{ asset($image->image) }}" alt="{{ $image->name }}"
                                            class="img-fluid">
                                        <div class="item-icon">
                                            <a href="{{ asset($image->image) }}" class="popup-zoom"
                                                data-fancybox-group="gallery" title="">
                                                <i class="flaticon-search"></i>
                                            </a>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title">{{ $image->name }}</h3>
                                            <span
                                                class="title-ctg">{{ $image->description ?? $image->category->name }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{-- <div class="row featuredContainer zoom-gallery">
                            @foreach ($gallery_images as $image)
                                <div
                                    class="col-lg-4 col-md-6 col-sm-6 col-12 {{ strtolower($image->category->slug ?? $image->category->name) }}">
                                    <div class="gallery-box-layout1">
                                        <img src="{{ asset($image->image) }}" alt="{{ $image->name }}"
                                            class="img-fluid">
                                        <div class="item-icon">
                                            <a href="{{ asset($image->image) }}" class="popup-zoom"
                                                data-fancybox-group="gallery" title="">
                                                <i class="flaticon-search"></i>
                                            </a>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title">{{ $image->name }}</h3>
                                            <span
                                                class="title-ctg">{{ $image->description ?? $image->category->name }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div> --}}


                        {{-- ================================================================= --}}
                        {{-- <div class="row featuredContainer zoom-gallery">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 dental cardiology">
                                <div class="gallery-box-layout1">
                                    <img src="img/gallery/gallery1.jpg" alt="gallery" class="img-fluid">
                                    <div class="item-icon">
                                        <a href="img/gallery/gallery1.jpg" class="popup-zoom"
                                            data-fancybox-group="gallery" title="">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <h3 class="item-title">Modern Clinic</h3>
                                        <span class="title-ctg">Cancer Care, Cardiac</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 orthopaedics">
                                <div class="gallery-box-layout1">
                                    <img src="img/gallery/gallery2.jpg" alt="gallery" class="img-fluid">
                                    <div class="item-icon">
                                        <a href="img/gallery/gallery2.jpg" class="popup-zoom"
                                            data-fancybox-group="gallery" title="">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <h3 class="item-title">Modern Clinic</h3>
                                        <span class="title-ctg">Cancer Care, Cardiac</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 dental eye">
                                <div class="gallery-box-layout1">
                                    <img src="img/gallery/gallery3.jpg" alt="gallery" class="img-fluid">
                                    <div class="item-icon">
                                        <a href="img/gallery/gallery3.jpg" class="popup-zoom"
                                            data-fancybox-group="gallery" title="">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <h3 class="item-title">Modern Clinic</h3>
                                        <span class="title-ctg">Cancer Care, Cardiac</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 cardiology orthopaedics">
                                <div class="gallery-box-layout1">
                                    <img src="img/gallery/gallery4.jpg" alt="gallery" class="img-fluid">
                                    <div class="item-icon">
                                        <a href="img/gallery/gallery4.jpg" class="popup-zoom"
                                            data-fancybox-group="gallery" title="">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <h3 class="item-title">Modern Clinic</h3>
                                        <span class="title-ctg">Cancer Care, Cardiac</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 orthopaedics">
                                <div class="gallery-box-layout1">
                                    <img src="img/gallery/gallery5.jpg" alt="gallery" class="img-fluid">
                                    <div class="item-icon">
                                        <a href="img/gallery/gallery5.jpg" class="popup-zoom"
                                            data-fancybox-group="gallery" title="">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <h3 class="item-title">Modern Clinic</h3>
                                        <span class="title-ctg">Cancer Care, Cardiac</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 orthopaedics">
                                <div class="gallery-box-layout1">
                                    <img src="img/gallery/gallery6.jpg" alt="gallery" class="img-fluid">
                                    <div class="item-icon">
                                        <a href="img/gallery/gallery6.jpg" class="popup-zoom"
                                            data-fancybox-group="gallery" title="">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <h3 class="item-title">Modern Clinic</h3>
                                        <span class="title-ctg">Cancer Care, Cardiac</span>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </section>
            <!-- Gallery Area End Here -->



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
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var $grid = $('.featuredContainer').isotope({
                itemSelector: '.col-lg-4',
                layoutMode: 'fitRows'
            });

            $('.isotop-btn .nav-item').on('click', function(e) {
                e.preventDefault();
                $('.isotop-btn .nav-item').removeClass('current');
                $(this).addClass('current');

                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });
        });
    </script>
</body>

</html>
