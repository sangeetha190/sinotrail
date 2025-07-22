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
</head>

<body>
    <!-- preloader start-->
    {{-- @include('user.layouts.loader') --}}
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


            <!-- sidebar -->
            <section class="sidebar ttm-sidebar-left clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-3 widget-area sidebar-left">
                            <aside class="widget menu-content">
                                <h3 class="widget-title"><i class="fa fa-bars"></i>All Categories</h3>
                                <ul class="menu-vertical">
                                    <li class="">
                                        <a href="#">Aquaguard</a>

                                    </li>
                                    <li class="">
                                        <a href="#">Purosis</a>

                                    </li>
                                    <li><a href="#">AO-Smith</a></li>
                                    <li><a href="#">Power Tools</a></li>
                                    <li><a href="#">Blueshell</a></li>
                                    <li><a href="#">Lexcruze</a></li>
                                    <li><a href="#">Aquaara</a></li>
                                    <li><a href="#">Usha</a></li>
                                    <li><a href="#">Finpure</a></li>
                                    <li><a href="#">Ro-Spares</a></li>

                                </ul>
                            </aside>
                            {{-- <aside class="widget widget-price-filter">
                                <h3 class="widget-title"><i class="fa fa-bars"></i>Catalog</h3>
                                <div class="product_content">
                                    <div class="price_slider_wrapper">
                                        <h5>Price :</h5>
                                        <form method="get">
                                            <div id="slider-range" class="price-filter-range"></div>
                                            <!-- price_slider_amount -->
                                            <div class="price_slider_amount">
                                                <input type="text" id="min_price" name="min_price" value="$0"
                                                    data-min="$0" placeholder="Min price" />
                                                <input type="text" id="max_price" name="max_price" value="$780"
                                                    data-max="$2400" placeholder="Max price" />
                                                <button type="submit" class="button">Filter</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="size_wrapper">
                                        <h5>size</h5>
                                        <div class="choose-option-point">
                                            <select>
                                                <option value="">Choose size</option>
                                                <option value="">XL</option>
                                                <option value="">XX</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="color_wrapper">
                                        <h5>color</h5>
                                        <div class="choose-option-point">
                                            <select>
                                                <option value="">Choose color</option>
                                                <option value="">Aqua</option>
                                                <option value="">Black</option>
                                                <option value="">White</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </aside> --}}


                        </div>
                        <div class="col-lg-9 content-area">

                            <div class="products products-fitter">
                                <div class="ttm-tabs">
                                    <div class="content-sec-head-style">
                                        <div class="content-area-sec-title">
                                            <h5>Our Products</h5>
                                        </div>
                                        {{-- <ul class="tabs text-right">
                                            @foreach ($products as $product)
                                                <li class="tab active"><a href="#"> {{ $category->new }}</a></li>
                                                <li class="tab"><a href="#">Special</a></li>
                                                <li class="tab"><a href="#">Onsale</a></li>
                                            @endforeach
                                        </ul> --}}
                                    </div>

                                    <h4>
                                        <h2>Products in {{ $category->name }}</h2>
                                        <ul>
                                            @foreach ($products as $product)
                                                <li>{{ $product->name }} - ${{ $product->price }}</li>
                                            @endforeach
                                        </ul>
                                    </h4>
                                    <div class="content-tab">
                                        <div class="content-inner">
                                            <div class="products row">


                                                @foreach ($products as $product)
                                                    <!-- product -->
                                                    <div class="product col-md-3 col-sm-6 col-xs-12">
                                                        <div class="product-box">
                                                            <!-- product-box-inner -->
                                                            <div class="product-box-inner">
                                                                <div class="product-image-box">
                                                                    <div class="onsale">Sale!</div>
                                                                    <img class="img-fluid pro-image-front "
                                                                        src="/storage/{{ $product->thumbnail }}"
                                                                        alt="{{ $product->name }}">

                                                                </div>
                                                                {{-- <div class="product-btn-links-wrapper">
                                                                    <div class="product-btn"><a href="#"
                                                                            class="add-to-cart-btn tooltip-top"
                                                                            data-tooltip="Add To Cart"><i
                                                                                class="ti ti-shopping-cart"></i></a>
                                                                    </div>
                                                                    <div class="product-btn"><a href="#"
                                                                            class="quick-view-btn js-show-modal1 tooltip-top"
                                                                            data-tooltip="Quick View"><i
                                                                                class="ti ti-search"></i></a>
                                                                    </div>
                                                                    <div class="product-btn"><a href="#"
                                                                            class="wishlist-btn tooltip-top"
                                                                            data-tooltip="Add To Wishlist"><i
                                                                                class="ti ti-heart"></i></a>
                                                                    </div>
                                                                </div> --}}
                                                            </div><!-- product-box-inner end -->
                                                            <div class="product-content-box">
                                                                <a class="product-title" href=" #">
                                                                    <h2>{{ $product->name }}</h2>
                                                                </a>
                                                                <div class="star-ratings">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <span class="price">
                                                                    <del><span class="product-Price-amount me-3">
                                                                            <span
                                                                                class="product-Price-currencySymbol">Rs.</span>${{ $product->price }}
                                                                        </span>
                                                                    </del>
                                                                    <ins><span class="product-Price-amount">
                                                                            <span
                                                                                class="product-Price-currencySymbol">Rs.</span>110.00
                                                                        </span>
                                                                    </ins>

                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- product end -->
                                                @endforeach

                                            </div>
                                        </div>
                                        <!---two-->
                                        <div class="content-inner">
                                            <div class="products row">
                                                <!-- product -->
                                                <div class="product col-md-3 col-sm-6 col-xs-12">
                                                    <div class="product-box">
                                                        <!-- product-box-inner -->
                                                        <div class="product-box-inner">
                                                            <div class="product-image-box">
                                                                <img class="img-fluid pro-image-front"
                                                                    src="images/Products/Aqua-55.png" alt="">

                                                            </div>
                                                            <div class="product-btn-links-wrapper">
                                                                <div class="product-btn"><a href="#"
                                                                        class="add-to-cart-btn tooltip-top"
                                                                        data-tooltip="Add To Cart"><i
                                                                            class="ti ti-shopping-cart"></i></a>
                                                                </div>
                                                                <div class="product-btn"><a href="#"
                                                                        class="quick-view-btn js-show-modal1 tooltip-top"
                                                                        data-tooltip="Quick View"><i
                                                                            class="ti ti-search"></i></a>
                                                                </div>
                                                                <div class="product-btn"><a href="#"
                                                                        class="wishlist-btn tooltip-top"
                                                                        data-tooltip="Add To Wishlist"><i
                                                                            class="ti ti-heart"></i></a>
                                                                </div>
                                                            </div>
                                                        </div><!-- product-box-inner end -->
                                                        <div class="product-content-box">
                                                            <a class="product-title" href=" #">
                                                                <h2>Finpure</h2>
                                                            </a>
                                                            <div class="star-ratings">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                            <span class="price">
                                                                <span class="product-Price-amount">
                                                                    <span
                                                                        class="product-Price-currencySymbol">$</span>40.00
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product end -->
                                                <!-- product -->
                                                <div class="product col-md-3 col-sm-6 col-xs-12">
                                                    <div class="product-box">
                                                        <!-- product-box-inner -->
                                                        <div class="product-box-inner">
                                                            <div class="product-image-box">
                                                                <div class="onsale">Sale!</div>
                                                                <img class="img-fluid pro-image-front"
                                                                    src="images/products/Aqua-66.png" alt="">

                                                            </div>
                                                            <div class="product-btn-links-wrapper">
                                                                <div class="product-btn"><a href="#"
                                                                        class="add-to-cart-btn tooltip-top"
                                                                        data-tooltip="Add To Cart"><i
                                                                            class="ti ti-shopping-cart"></i></a>
                                                                </div>
                                                                <div class="product-btn"><a href="#"
                                                                        class="quick-view-btn js-show-modal1 tooltip-top"
                                                                        data-tooltip="Quick View"><i
                                                                            class="ti ti-search"></i></a>
                                                                </div>
                                                                <div class="product-btn"><a href="#"
                                                                        class="wishlist-btn tooltip-top"
                                                                        data-tooltip="Add To Wishlist"><i
                                                                            class="ti ti-heart"></i></a>
                                                                </div>
                                                            </div>
                                                        </div><!-- product-box-inner end -->
                                                        <div class="product-content-box">
                                                            <a class="product-title" href=" #">
                                                                <h2>Finpure</h2>
                                                            </a>
                                                            <div class="star-ratings">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                            <span class="price">
                                                                <ins><span class="product-Price-amount">
                                                                        <span
                                                                            class="product-Price-currencySymbol">$</span>110.00
                                                                    </span>
                                                                </ins>
                                                                <del><span class="product-Price-amount">
                                                                        <span
                                                                            class="product-Price-currencySymbol">$</span>123.00
                                                                    </span>
                                                                </del>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product end -->
                                                <!-- product -->
                                                <div class="product col-md-3 col-sm-6 col-xs-12">
                                                    <div class="product-box">
                                                        <!-- product-box-inner -->
                                                        <div class="product-box-inner">
                                                            <div class="product-image-box">
                                                                <img class="img-fluid pro-image-front"
                                                                    src="images/products/Aqua-77.png" alt="">

                                                            </div>
                                                            <div class="product-btn-links-wrapper">
                                                                <div class="product-btn"><a href="#"
                                                                        class="add-to-cart-btn tooltip-top"
                                                                        data-tooltip="Add To Cart"><i
                                                                            class="ti ti-shopping-cart"></i></a>
                                                                </div>
                                                                <div class="product-btn"><a href="#"
                                                                        class="quick-view-btn js-show-modal1 tooltip-top"
                                                                        data-tooltip="Quick View"><i
                                                                            class="ti ti-search"></i></a>
                                                                </div>
                                                                <div class="product-btn"><a href="#"
                                                                        class="wishlist-btn tooltip-top"
                                                                        data-tooltip="Add To Wishlist"><i
                                                                            class="ti ti-heart"></i></a>
                                                                </div>
                                                            </div>
                                                        </div><!-- product-box-inner end -->
                                                        <div class="product-content-box">
                                                            <a class="product-title" href=" #">
                                                                <h2>Finpure</h2>
                                                            </a>
                                                            <div class="star-ratings">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                            <span class="price">
                                                                <span class="product-Price-amount">
                                                                    <span
                                                                        class="product-Price-currencySymbol">$</span>38.00
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product end -->

                                            </div>
                                        </div>
                                        <!---three-->

                                        <div class="content-inner">
                                            <div class="products row">
                                                <!-- product -->
                                                <div class="product col-md-3 col-sm-6 col-xs-12">
                                                    <div class="product-box">
                                                        <!-- product-box-inner -->
                                                        <div class="product-box-inner">
                                                            <div class="product-image-box">
                                                                <img class="img-fluid pro-image-front"
                                                                    src="images/products/Aqua-77.png" alt="">

                                                            </div>
                                                            <div class="product-btn-links-wrapper">
                                                                <div class="product-btn"><a href="#"
                                                                        class="add-to-cart-btn tooltip-top"
                                                                        data-tooltip="Add To Cart"><i
                                                                            class="ti ti-shopping-cart"></i></a>
                                                                </div>
                                                                <div class="product-btn"><a href="#"
                                                                        class="quick-view-btn js-show-modal1 tooltip-top"
                                                                        data-tooltip="Quick View"><i
                                                                            class="ti ti-search"></i></a>
                                                                </div>
                                                                <div class="product-btn"><a href="#"
                                                                        class="wishlist-btn tooltip-top"
                                                                        data-tooltip="Add To Wishlist"><i
                                                                            class="ti ti-heart"></i></a>
                                                                </div>
                                                            </div>
                                                        </div><!-- product-box-inner end -->
                                                        <div class="product-content-box">
                                                            <a class="product-title" href=" #">
                                                                <h2>Finpure</h2>
                                                            </a>
                                                            <div class="star-ratings">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                            <span class="price">
                                                                <span class="product-Price-amount">
                                                                    <span
                                                                        class="product-Price-currencySymbol">$</span>62.00
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product end -->
                                                <!-- product -->
                                                <div class="product col-md-3 col-sm-6 col-xs-12">
                                                    <div class="product-box">
                                                        <!-- product-box-inner -->
                                                        <div class="product-box-inner">
                                                            <div class="onsale">Sale!</div>
                                                            <div class="product-image-box">
                                                                <img class="img-fluid pro-image-front"
                                                                    src="images/products/Aqua-88.png" alt="">

                                                            </div>
                                                            <div class="product-btn-links-wrapper">
                                                                <div class="product-btn"><a href="#"
                                                                        class="add-to-cart-btn tooltip-top"
                                                                        data-tooltip="Add To Cart"><i
                                                                            class="ti ti-shopping-cart"></i></a>
                                                                </div>
                                                                <div class="product-btn"><a href="#"
                                                                        class="quick-view-btn js-show-modal1 tooltip-top"
                                                                        data-tooltip="Quick View"><i
                                                                            class="ti ti-search"></i></a>
                                                                </div>
                                                                <div class="product-btn"><a href="#"
                                                                        class="wishlist-btn tooltip-top"
                                                                        data-tooltip="Add To Wishlist"><i
                                                                            class="ti ti-heart"></i></a>
                                                                </div>
                                                            </div>
                                                        </div><!-- product-box-inner end -->
                                                        <div class="product-content-box">
                                                            <a class="product-title" href=" #">
                                                                <h2>Finpure</h2>
                                                            </a>
                                                            <div class="star-ratings">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                            <span class="price">
                                                                <ins><span class="product-Price-amount">
                                                                        <span
                                                                            class="product-Price-currencySymbol">$</span>124.00
                                                                    </span>
                                                                </ins>
                                                                <del><span class="product-Price-amount">
                                                                        <span
                                                                            class="product-Price-currencySymbol">$</span>111.00
                                                                    </span>
                                                                </del>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product end -->
                                                <!-- product -->
                                                <div class="product col-md-3 col-sm-6 col-xs-12">
                                                    <div class="product-box">
                                                        <!-- product-box-inner -->
                                                        <div class="product-box-inner">
                                                            <div class="product-image-box">
                                                                <img class="img-fluid pro-image-front"
                                                                    src="images/products/Aqua-99.png" alt="">

                                                            </div>
                                                            <div class="product-btn-links-wrapper">
                                                                <div class="product-btn"><a href="#"
                                                                        class="add-to-cart-btn tooltip-top"
                                                                        data-tooltip="Add To Cart"><i
                                                                            class="ti ti-shopping-cart"></i></a>
                                                                </div>
                                                                <div class="product-btn"><a href="#"
                                                                        class="quick-view-btn js-show-modal1 tooltip-top"
                                                                        data-tooltip="Quick View"><i
                                                                            class="ti ti-search"></i></a>
                                                                </div>
                                                                <div class="product-btn"><a href="#"
                                                                        class="wishlist-btn tooltip-top"
                                                                        data-tooltip="Add To Wishlist"><i
                                                                            class="ti ti-heart"></i></a>
                                                                </div>
                                                            </div>
                                                        </div><!-- product-box-inner end -->
                                                        <div class="product-content-box">
                                                            <a class="product-title" href=" #">
                                                                <h2>Finpure</h2>
                                                            </a>
                                                            <div class="star-ratings">
                                                                <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                    <li><i class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                            <span class="price">
                                                                <span class="product-Price-amount">
                                                                    <span
                                                                        class="product-Price-currencySymbol">$</span>149.00
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product end -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="pagination-block">
                                <span class="page-numbers current">1</span>
                                <a class="page-numbers" href="#">2</a>
                                <a class="page-numbers" href="#">3</a>
                                <a class="next page-numbers" href="#"><i class="ti ti-arrow-right"></i></a>
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
</body>

</html>
