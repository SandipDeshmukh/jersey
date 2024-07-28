@extends('layouts.app')
@section('content')
    <!-- Body Container -->
    <div id="page-content" class="mb-0">
        <!--Home Slideshow-->
        <section class="slideshow slideshow-wrapper">
            <div class="home-slideshow slick-arrow-dots">
                <div class="slide">
                    <div class="slideshow-wrap">
                        <picture>
                            <source media="(max-width:767px)" srcset="assets/images/slideshow/demo1-banner1-mbl.jpg" width="1150" height="800">
                            <img class="blur-up lazyload" src="assets/images/slideshow/demo1-banner1.jpg" alt="slideshow" title="" width="1920" height="795" />
                        </picture>
                        <div class="container">
                            <div class="slideshow-content slideshow-overlay middle-left">
                                <div class="slideshow-content-in">
                                    <div class="wrap-caption animation style1">
                                        <p class="ss-small-title">Elegant design</p>
                                        <h2 class="ss-mega-title">Making someone feel <br>pretty is an art</h2>
                                        <p class="ss-sub-title xs-hide">Perfectly designed to ensures ultimate comfort and style</p>
                                        <div class="ss-btnWrap">
                                            <a class="btn btn-primary" href="shop-grid-view.html">Shop Women</a>
                                            <a class="btn btn-secondary" href="shop-grid-view.html">Shop Men</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="slideshow-wrap">
                        <picture>
                            <source media="(max-width:767px)" srcset="assets/images/slideshow/demo1-banner2-mbl.jpg" width="1150" height="800">
                            <img class="blur-up lazyload" src="assets/images/slideshow/demo1-banner2.jpg" alt="slideshow" title="" width="1920" height="795" />
                        </picture>
                        <div class="container">
                            <div class="slideshow-content slideshow-overlay middle-right">
                                <div class="slideshow-content-in">
                                    <div class="wrap-caption animation style1">
                                        <h2 class="ss-mega-title">Spread Positive <br>Energy With Hema</h2>
                                        <p class="ss-sub-title xs-hide">The must-have closet essential women wardrobe for the year</p>
                                        <div class="ss-btnWrap d-flex-justify-start">
                                            <a class="btn btn-primary" href="shop-grid-view.html">Explore Now!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="slideshow-wrap">
                        <picture>
                            <source media="(max-width:767px)" srcset="assets/images/slideshow/demo1-banner2-mbl.jpg" width="1150" height="800">
                            <img class="blur-up lazyload" src="assets/images/slideshow/demo1-banner2.jpg" alt="slideshow" title="" width="1920" height="795" />
                        </picture>
                        <div class="container">
                            <div class="slideshow-content slideshow-overlay middle-right">
                                <div class="slideshow-content-in">
                                    <div class="wrap-caption animation style1">
                                        <h2 class="ss-mega-title">Design Your Next <br>Favourite Wear</h2>
                                        <p class="ss-sub-title xs-hide">The outfit that blend elegance and style for your casual wear</p>
                                        <div class="ss-btnWrap">
                                            <a class="btn btn-primary" href="shop-grid-view.html">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Home Slideshow-->

        <!--Service Section-->
        <section class="section service-section pb-0">
            <div class="container">
                <div class="service-info row col-row row-cols-lg-4 row-cols-md-4 row-cols-sm-2 row-cols-2 text-center">
                    <div class="service-wrap col-item">
                        <div class="service-icon mb-3">
                            <i class="icon anm anm-phone-call-l"></i>
                        </div>
                        <div class="service-content">
                            <h3 class="title mb-2">Call us any time</h3>
                            <span class="text-muted">Contact us 24/7 hours a day</span>
                        </div>
                    </div>
                    <div class="service-wrap col-item">
                        <div class="service-icon mb-3">
                            <i class="icon anm anm-truck-l"></i>
                        </div>
                        <div class="service-content">
                            <h3 class="title mb-2">Pickup At Any Store</h3>
                            <span class="text-muted">Free shipping on orders over $65</span>
                        </div>
                    </div>
                    <div class="service-wrap col-item">
                        <div class="service-icon mb-3">
                            <i class="icon anm anm-credit-card-l"></i>
                        </div>
                        <div class="service-content">
                            <h3 class="title mb-2">Secured Payment</h3>
                            <span class="text-muted">We accept all major credit cards</span>
                        </div>
                    </div>
                    <div class="service-wrap col-item">
                        <div class="service-icon mb-3">
                            <i class="icon anm anm-redo-l"></i>
                        </div>
                        <div class="service-content">
                            <h3 class="title mb-2">Free Returns</h3>
                            <span class="text-muted">30-days free return policy</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Service Section-->

        <!--Collection banner-->
        <section class="section collection-banners pb-0">
            <div class="container">
                <div class="collection-banner-grid">
                    <div class="row sp-row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 collection-banner-item">
                            <div class="collection-item sp-col">
                                <a href="shop-left-sidebar.html" class="zoom-scal">
                                    <div class="img">
                                        <img class="blur-up lazyload" data-src="assets/images/collection/demo1-ct-img1.jpg" src="assets/images/collection/demo1-ct-img1.jpg" alt="Women Wear" title="Women Wear" width="645" height="723" />
                                    </div>
                                    <div class="details middle-right">
                                        <div class="inner">
                                            <p class="mb-2">Trending Now</p>
                                            <h3 class="title">Women Wear</h3>
                                            <span class="btn btn-outline-secondary btn-md">Shop Now</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 collection-banner-item">
                            <div class="collection-item sp-col">
                                <a href="shop-left-sidebar.html" class="zoom-scal">
                                    <div class="img">
                                        <img class="blur-up lazyload" data-src="assets/images/collection/demo1-ct-img2.jpg" src="assets/images/collection/demo1-ct-img2.jpg" alt="Mens Wear" title="Mens Wear" width="645" height="350" />
                                    </div>
                                    <div class="details middle-left">
                                        <div class="inner">
                                            <h3 class="title mb-2">Mens Wear</h3>
                                            <p class="mb-3">Tailor-made with passion</p>
                                            <span class="btn btn-outline-secondary btn-md">Shop Now</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="collection-item sp-col">
                                <a href="shop-left-sidebar.html" class="zoom-scal">
                                    <div class="img">
                                        <img class="blur-up lazyload" data-src="assets/images/collection/demo1-ct-img3.jpg" src="assets/images/collection/demo1-ct-img3.jpg" alt="Kids Wear" title="Kids Wear" width="645" height="350" />
                                    </div>
                                    <div class="details middle-right">
                                        <div class="inner">
                                            <p class="mb-2">Buy one get one free</p>
                                            <h3 class="title">Kids Wear</h3>
                                            <span class="btn btn-outline-secondary btn-md">Shop Now</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Collection banner-->

        <!--Popular Categories-->
        <section class="section collection-slider pb-0">
            <div class="container">
                <div class="section-header">
                    <p class="mb-2 mt-0">Shop by category</p>
                    <h2>Popular Collections</h2>
                </div>

                <div class="collection-slider-5items gp15 arwOut5 hov-arrow">
                    <div class="category-item zoomscal-hov">
                        <a href="shop-left-sidebar.html" class="category-link clr-none">
                            <div class="zoom-scal zoom-scal-nopb rounded-3"><img class="blur-up lazyload" data-src="assets/images/collection/sub-collection1.jpg" src="assets/images/collection/sub-collection1.jpg" alt="Men's Jakets" title="Men's Jakets" width="365" height="365" /></div>
                            <div class="details mt-3 text-center">
                                <h4 class="category-title mb-0">Men's Jakets</h4>
                                <p class="counts">20 Products</p>
                            </div>
                        </a>
                    </div>
                    <div class="category-item zoomscal-hov">
                        <a href="shop-left-sidebar.html" class="category-link clr-none">
                            <div class="zoom-scal zoom-scal-nopb rounded-3"><img class="blur-up lazyload" data-src="assets/images/collection/sub-collection1.jpg" src="assets/images/collection/sub-collection1.jpg" alt="Tops" title="Tops" width="365" height="365" /></div>
                            <div class="details mt-3 text-center">
                                <h4 class="category-title mb-0">Tops</h4>
                                <p class="counts">13 Products</p>
                            </div>
                        </a>
                    </div>
                    <div class="category-item zoomscal-hov">
                        <a href="shop-left-sidebar.html" class="category-link clr-none">
                            <div class="zoom-scal zoom-scal-nopb rounded-3"><img class="blur-up lazyload" data-src="assets/images/collection/sub-collection1.jpg" src="assets/images/collection/sub-collection1.jpg" alt="T-Shirts" title="T-Shirts" width="365" height="365" /></div>
                            <div class="details mt-3 text-center">
                                <h4 class="category-title mb-0">T-Shirts</h4>
                                <p class="counts">18 Products</p>
                            </div>
                        </a>
                    </div>
                    <div class="category-item zoomscal-hov">
                        <a href="shop-left-sidebar.html" class="category-link clr-none">
                            <div class="zoom-scal zoom-scal-nopb rounded-3"><img class="blur-up lazyload" data-src="assets/images/collection/sub-collection1.jpg" src="assets/images/collection/sub-collection1.jpg" alt="Shoes" title="Shoes" width="365" height="365" /></div>
                            <div class="details mt-3 text-center">
                                <h4 class="category-title mb-0">Shoes</h4>
                                <p class="counts">11 Products</p>
                            </div>
                        </a>
                    </div>
                    <div class="category-item zoomscal-hov">
                        <a href="shop-left-sidebar.html" class="category-link clr-none">
                            <div class="zoom-scal zoom-scal-nopb rounded-3"><img class="blur-up lazyload" data-src="assets/images/collection/sub-collection1.jpg" src="assets/images/collection/sub-collection1.jpg" alt="Shorts" title="Shorts" width="365" height="365" /></div>
                            <div class="details mt-3 text-center">
                                <h4 class="category-title mb-0">Shorts</h4>
                                <p class="counts">28 Products</p>
                            </div>
                        </a>
                    </div>
                    <div class="category-item zoomscal-hov">
                        <a href="shop-left-sidebar.html" class="category-link clr-none">
                            <div class="zoom-scal zoom-scal-nopb rounded-3"><img class="blur-up lazyload" data-src="assets/images/collection/sub-collection1.jpg" src="assets/images/collection/sub-collection1.jpg" alt="Sunglasses" title="Sunglasses" width="365" height="365" /></div>
                            <div class="details mt-3 text-center">
                                <h4 class="category-title mb-0">Sunglasses</h4>
                                <p class="counts">24 Products</p>
                            </div>
                        </a>
                    </div>
                    <div class="category-item zoomscal-hov">
                        <a href="shop-left-sidebar.html" class="category-link clr-none">
                            <div class="zoom-scal zoom-scal-nopb rounded-3"><img class="blur-up lazyload" data-src="assets/images/collection/sub-collection1.jpg" src="assets/images/collection/sub-collection1.jpg" alt="Girls Top" title="Girls Top" width="365" height="365" /></div>
                            <div class="details mt-3 text-center">
                                <h4 class="category-title mb-0">Girls Top</h4>
                                <p class="counts">26 Products</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--End Popular Categories-->

        <!--Products With Tabs-->
        <section class="section product-slider tab-slider-product">
            <div class="container">
                <div class="section-header d-none">
                    <h2>Special Offers</h2>
                    <p>Browse the huge variety of our best seller</p>
                </div>

                <div class="tabs-listing">
                    <ul class="nav nav-tabs style1 justify-content-center" id="productTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link head-font active" id="bestsellers-tab" data-bs-toggle="tab" data-bs-target="#bestsellers" type="button" role="tab" aria-controls="bestsellers" aria-selected="true">Bestseller</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link head-font" id="newarrivals-tab" data-bs-toggle="tab" data-bs-target="#newarrivals" type="button" role="tab" aria-controls="newarrivals" aria-selected="false">New Arrivals</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link head-font" id="toprated-tab" data-bs-toggle="tab" data-bs-target="#toprated" type="button" role="tab" aria-controls="toprated" aria-selected="false">Top Rated</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="productTabsContent">
                        <div class="tab-pane show active" id="bestsellers" role="tabpanel" aria-labelledby="bestsellers-tab">
                            <!--Product Grid-->
                            <div class="grid-products grid-view-items">
                                <div class="row col-row product-options row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">
                                    <div class="item col-item">
                                        <div class="product-box">
                                            <!-- Start Product Image -->
                                            <div class="product-image">
                                                <!-- Start Product Image -->
                                                <a href="product-layout1.html" class="product-img rounded-3"><img class="blur-up lazyload" src="assets/images/products/product1.jpg" alt="Product" title="Product" width="625" height="808" /></a>
                                                <!-- End Product Image -->
                                            </div>
                                            <!-- End Product Image -->
                                            <!-- Start Product Details -->
                                            <div class="product-details">
                                                <!-- Product Name -->
                                                <div class="product-name">
                                                    <a href="product-layout1.html">Oxford Cuban Shirt</a>
                                                </div>
                                                <!-- End Product Name -->
                                                <!-- Product Price -->
                                                <div class="product-price">
                                                    <span class="price old-price">$114.00</span><span class="price">$99.00</span>
                                                </div>
                                                <!-- End Product Price -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>

                                </div>

                                <div class="view-collection text-center mt-4 mt-md-5">
                                    <a href="shop-left-sidebar.html" class="btn btn-secondary btn-lg">View Collection</a>
                                </div>
                            </div>
                            <!--End Product Grid-->
                        </div>

                        <div class="tab-pane" id="newarrivals" role="tabpanel" aria-labelledby="newarrivals-tab">
                            <!--Product Grid-->
                            <div class="grid-products grid-view-items">
                                <div class="row col-row product-options row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">
                                    <div class="item col-item">
                                        <div class="product-box">
                                            <!-- Start Product Image -->
                                            <div class="product-image">
                                                <!-- Start Product Image -->
                                                <a href="product-layout1.html" class="product-img rounded-3">
                                                    <!-- Image -->
                                                    <img class="primary blur-up lazyload" data-src="assets/images/products/product1.jpg" src="assets/images/products/product1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Image -->
                                                    <!-- Hover Image -->
                                                    <img class="hover blur-up lazyload" data-src="assets/images/products/product1-1.jpg" src="assets/images/products/product1-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Hover Image -->
                                                </a>
                                                <!-- End Product Image -->
                                                <!--Product Button-->
                                                <div class="button-set style1">
                                                    <!--Cart Button-->
                                                    <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                                    </a>
                                                    <!--End Cart Button-->
                                                    <!--Quick View Button-->
                                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal" data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="icon anm anm-search-plus-l"></i><span class="text">Quick View</span></span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                    <!--Wishlist Button-->
                                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip" data-bs-placement="left" title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span class="text">Add To Wishlist</span></a>
                                                    <!--End Wishlist Button-->
                                                    <!--Compare Button-->
                                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare"><i class="icon anm anm-random-r"></i><span class="text">Add to Compare</span></a>
                                                    <!--End Compare Button-->
                                                </div>
                                                <!--End Product Button-->
                                            </div>
                                            <!-- End Product Image -->
                                            <!-- Start Product Details -->
                                            <div class="product-details">
                                                <!-- Product Name -->
                                                <div class="product-name">
                                                    <a href="product-layout1.html">Narror Neck Tie</a>
                                                </div>
                                                <!-- End Product Name -->
                                                <!-- Product Price -->
                                                <div class="product-price">
                                                    <span class="price">$134.00</span>
                                                </div>
                                                <!-- End Product Price -->
                                                <!-- Product Review -->
                                                <div class="product-review">
                                                    <i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                                    <span class="caption hidden ms-1">0 Reviews</span>
                                                </div>
                                                <!-- End Product Review -->
                                                <!-- Variant -->
                                                <ul class="variants-clr swatches">
                                                    <li class="swatch medium radius black"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="black"></span></li>
                                                    <li class="swatch medium radius navy"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="navy"></span></li>
                                                    <li class="swatch medium radius darkgreen"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="darkgreen"></span></li>
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>
                                    <div class="item col-item">
                                        <div class="product-box">
                                            <!-- Start Product Image -->
                                            <div class="product-image">
                                                <!-- Start Product Image -->
                                                <a href="product-layout1.html" class="product-img rounded-3">
                                                    <!-- Image -->
                                                    <img class="primary blur-up lazyload" data-src="assets/images/products/product1.jpg" src="assets/images/products/product1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Image -->
                                                    <!-- Hover Image -->
                                                    <img class="hover blur-up lazyload" data-src="assets/images/products/product1-1.jpg" src="assets/images/products/product1-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Hover Image -->
                                                </a>
                                                <!-- End Product Image -->
                                                <!-- Product label -->
                                                <div class="product-labels"><span class="lbl pr-label4">Popular</span></div>
                                                <!-- End Product label -->
                                                <!--Product Button-->
                                                <div class="button-set style1">
                                                    <!--Cart Button-->
                                                    <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                                    </a>
                                                    <!--End Cart Button-->
                                                    <!--Quick View Button-->
                                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal" data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="icon anm anm-search-plus-l"></i><span class="text">Quick View</span></span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                    <!--Wishlist Button-->
                                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip" data-bs-placement="left" title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span class="text">Add To Wishlist</span></a>
                                                    <!--End Wishlist Button-->
                                                    <!--Compare Button-->
                                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare"><i class="icon anm anm-random-r"></i><span class="text">Add to Compare</span></a>
                                                    <!--End Compare Button-->
                                                </div>
                                                <!--End Product Button-->
                                            </div>
                                            <!-- End Product Image -->
                                            <!-- Start Product Details -->
                                            <div class="product-details">
                                                <!-- Product Name -->
                                                <div class="product-name">
                                                    <a href="product-layout1.html">Men's Cheater Jacket</a>
                                                </div>
                                                <!-- End Product Name -->
                                                <!-- Product Price -->
                                                <div class="product-price">
                                                    <span class="price">$99.00</span>
                                                </div>
                                                <!-- End Product Price -->
                                                <!-- Product Review -->
                                                <div class="product-review">
                                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                                    <span class="caption hidden ms-1">19 Reviews</span>
                                                </div>
                                                <!-- End Product Review -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>
                                    <div class="item col-item">
                                        <div class="product-box">
                                            <!-- Start Product Image -->
                                            <div class="product-image">
                                                <!-- Start Product Image -->
                                                <a href="product-layout1.html" class="product-img rounded-3">
                                                    <!-- Image -->
                                                    <img class="primary blur-up lazyload" data-src="assets/images/products/product1.jpg" src="assets/images/products/product1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Image -->
                                                    <!-- Hover Image -->
                                                    <img class="hover blur-up lazyload" data-src="assets/images/products/product1-1.jpg" src="assets/images/products/product1-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Hover Image -->
                                                </a>
                                                <!-- End Product Image -->
                                                <!--Product Button-->
                                                <div class="button-set style1">
                                                    <!--Cart Button-->
                                                    <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                                    </a>
                                                    <!--End Cart Button-->
                                                    <!--Quick View Button-->
                                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal" data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="icon anm anm-search-plus-l"></i><span class="text">Quick View</span></span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                    <!--Wishlist Button-->
                                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip" data-bs-placement="left" title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span class="text">Add To Wishlist</span></a>
                                                    <!--End Wishlist Button-->
                                                    <!--Compare Button-->
                                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare"><i class="icon anm anm-random-r"></i><span class="text">Add to Compare</span></a>
                                                    <!--End Compare Button-->
                                                </div>
                                                <!--End Product Button-->
                                            </div>
                                            <!-- End Product Image -->
                                            <!-- Start Product Details -->
                                            <div class="product-details">
                                                <!-- Product Name -->
                                                <div class="product-name">
                                                    <a href="product-layout1.html">Casual Mustard Shirt</a>
                                                </div>
                                                <!-- End Product Name -->
                                                <!-- Product Price -->
                                                <div class="product-price">
                                                    <span class="price">$167.00</span>
                                                </div>
                                                <!-- End Product Price -->
                                                <!-- Product Review -->
                                                <div class="product-review">
                                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i>
                                                    <span class="caption hidden ms-1">7 Reviews</span>
                                                </div>
                                                <!-- End Product Review -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>
                                    <div class="item col-item">
                                        <div class="product-box">
                                            <!-- Start Product Image -->
                                            <div class="product-image">
                                                <!-- Start Product Image -->
                                                <a href="product-layout1.html" class="product-img rounded-3">
                                                    <!-- Image -->
                                                    <img class="primary blur-up lazyload" data-src="assets/images/products/product1.jpg" src="assets/images/products/product1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Image -->
                                                    <!-- Hover Image -->
                                                    <img class="hover blur-up lazyload" data-src="assets/images/products/product1-1.jpg" src="assets/images/products/product1-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Hover Image -->
                                                </a>
                                                <!-- End Product Image -->
                                                <!--Product Button-->
                                                <div class="button-set style1">
                                                    <!--Cart Button-->
                                                    <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                                    </a>
                                                    <!--End Cart Button-->
                                                    <!--Quick View Button-->
                                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal" data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="icon anm anm-search-plus-l"></i><span class="text">Quick View</span></span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                    <!--Wishlist Button-->
                                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip" data-bs-placement="left" title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span class="text">Add To Wishlist</span></a>
                                                    <!--End Wishlist Button-->
                                                    <!--Compare Button-->
                                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare"><i class="icon anm anm-random-r"></i><span class="text">Add to Compare</span></a>
                                                    <!--End Compare Button-->
                                                </div>
                                                <!--End Product Button-->
                                            </div>
                                            <!-- End Product Image -->
                                            <!-- Start Product Details -->
                                            <div class="product-details">
                                                <!-- Product Name -->
                                                <div class="product-name">
                                                    <a href="product-layout1.html">Sleeve Round T-Shirt</a>
                                                </div>
                                                <!-- End Product Name -->
                                                <!-- Product Price -->
                                                <div class="product-price">
                                                    <span class="price">$154.00</span>
                                                </div>
                                                <!-- End Product Price -->
                                                <!-- Product Review -->
                                                <div class="product-review">
                                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i>
                                                    <span class="caption hidden ms-1">19 Reviews</span>
                                                </div>
                                                <!-- End Product Review -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>
                                    <div class="item col-item">
                                        <div class="product-box">
                                            <!-- Start Product Image -->
                                            <div class="product-image">
                                                <!-- Start Product Image -->
                                                <a href="product-layout1.html" class="product-img rounded-3">
                                                    <!-- Image -->
                                                    <img class="primary blur-up lazyload" data-src="assets/images/products/product1.jpg" src="assets/images/products/product1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Image -->
                                                    <!-- Hover Image -->
                                                    <img class="hover blur-up lazyload" data-src="assets/images/products/product1-1.jpg" src="assets/images/products/product1-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Hover Image -->
                                                </a>
                                                <!-- End Product Image -->
                                                <!--Product Button-->
                                                <div class="button-set style1">
                                                    <!--Cart Button-->
                                                    <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                                    </a>
                                                    <!--End Cart Button-->
                                                    <!--Quick View Button-->
                                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal" data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="icon anm anm-search-plus-l"></i><span class="text">Quick View</span></span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                    <!--Wishlist Button-->
                                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip" data-bs-placement="left" title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span class="text">Add To Wishlist</span></a>
                                                    <!--End Wishlist Button-->
                                                    <!--Compare Button-->
                                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare"><i class="icon anm anm-random-r"></i><span class="text">Add to Compare</span></a>
                                                    <!--End Compare Button-->
                                                </div>
                                                <!--End Product Button-->
                                            </div>
                                            <!-- End Product Image -->
                                            <!-- Start Product Details -->
                                            <div class="product-details">
                                                <!-- Product Name -->
                                                <div class="product-name">
                                                    <a href="product-layout1.html">Backpack Laptop Bag</a>
                                                </div>
                                                <!-- End Product Name -->
                                                <!-- Product Price -->
                                                <div class="product-price">
                                                    <span class="price">$121.00</span>
                                                </div>
                                                <!-- End Product Price -->
                                                <!-- Product Review -->
                                                <div class="product-review">
                                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                                    <span class="caption hidden ms-1">6 Reviews</span>
                                                </div>
                                                <!-- End Product Review -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>
                                    <div class="item col-item">
                                        <div class="product-box">
                                            <!-- Start Product Image -->
                                            <div class="product-image">
                                                <!-- Start Product Image -->
                                                <a href="product-layout1.html" class="product-img rounded-3">
                                                    <!-- Image -->
                                                    <img class="primary blur-up lazyload" data-src="assets/images/products/product1.jpg" src="assets/images/products/product1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Image -->
                                                    <!-- Hover Image -->
                                                    <img class="hover blur-up lazyload" data-src="assets/images/products/product1-1.jpg" src="assets/images/products/product1-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Hover Image -->
                                                </a>
                                                <!-- End Product Image -->
                                                <!--Product Button-->
                                                <div class="button-set style1">
                                                    <!--Cart Button-->
                                                    <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                                    </a>
                                                    <!--End Cart Button-->
                                                    <!--Quick View Button-->
                                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal" data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="icon anm anm-search-plus-l"></i><span class="text">Quick View</span></span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                    <!--Wishlist Button-->
                                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip" data-bs-placement="left" title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span class="text">Add To Wishlist</span></a>
                                                    <!--End Wishlist Button-->
                                                    <!--Compare Button-->
                                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare"><i class="icon anm anm-random-r"></i><span class="text">Add to Compare</span></a>
                                                    <!--End Compare Button-->
                                                </div>
                                                <!--End Product Button-->
                                            </div>
                                            <!-- End Product Image -->
                                            <!-- Start Product Details -->
                                            <div class="product-details">
                                                <!-- Product Name -->
                                                <div class="product-name">
                                                    <a href="product-layout1.html">Cotton Casual Tshirt</a>
                                                </div>
                                                <!-- End Product Name -->
                                                <!-- Product Price -->
                                                <div class="product-price">
                                                    <span class="price">$167.00</span>
                                                </div>
                                                <!-- End Product Price -->
                                                <!-- Product Review -->
                                                <div class="product-review">
                                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                                    <span class="caption hidden ms-1">13 Reviews</span>
                                                </div>
                                                <!-- End Product Review -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>
                                    <div class="item col-item">
                                        <div class="product-box">
                                            <!-- Start Product Image -->
                                            <div class="product-image">
                                                <!-- Start Product Image -->
                                                <a href="product-layout1.html" class="product-img rounded-3">
                                                    <!-- Image -->
                                                    <img class="primary blur-up lazyload" data-src="assets/images/products/product1.jpg" src="assets/images/products/product1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Image -->
                                                    <!-- Hover Image -->
                                                    <img class="hover blur-up lazyload" data-src="assets/images/products/product1-1.jpg" src="assets/images/products/product1-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Hover Image -->
                                                </a>
                                                <!-- End Product Image -->
                                                <!--Product Button-->
                                                <div class="button-set style1">
                                                    <!--Cart Button-->
                                                    <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                                    </a>
                                                    <!--End Cart Button-->
                                                    <!--Quick View Button-->
                                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal" data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="icon anm anm-search-plus-l"></i><span class="text">Quick View</span></span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                    <!--Wishlist Button-->
                                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip" data-bs-placement="left" title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span class="text">Add To Wishlist</span></a>
                                                    <!--End Wishlist Button-->
                                                    <!--Compare Button-->
                                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare"><i class="icon anm anm-random-r"></i><span class="text">Add to Compare</span></a>
                                                    <!--End Compare Button-->
                                                </div>
                                                <!--End Product Button-->
                                            </div>
                                            <!-- End Product Image -->
                                            <!-- Start Product Details -->
                                            <div class="product-details">
                                                <!-- Product Name -->
                                                <div class="product-name">
                                                    <a href="product-layout1.html">Ankle Casual Pants</a>
                                                </div>
                                                <!-- End Product Name -->
                                                <!-- Product Price -->
                                                <div class="product-price">
                                                    <span class="price">$125.00</span>
                                                </div>
                                                <!-- End Product Price -->
                                                <!-- Product Review -->
                                                <div class="product-review">
                                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i>
                                                    <span class="caption hidden ms-1">20 Reviews</span>
                                                </div>
                                                <!-- End Product Review -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>
                                    <div class="item col-item">
                                        <div class="product-box">
                                            <!-- Start Product Image -->
                                            <div class="product-image">
                                                <!-- Start Product Image -->
                                                <a href="product-layout1.html" class="product-img rounded-3">
                                                    <!-- Image -->
                                                    <img class="primary blur-up lazyload" data-src="assets/images/products/product1.jpg" src="assets/images/products/product1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Image -->
                                                    <!-- Hover Image -->
                                                    <img class="hover blur-up lazyload" data-src="assets/images/products/product1-1.jpg" src="assets/images/products/product1-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Hover Image -->
                                                </a>
                                                <!-- End Product Image -->
                                                <!--Product Button-->
                                                <div class="button-set style1">
                                                    <!--Cart Button-->
                                                    <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                                    </a>
                                                    <!--End Cart Button-->
                                                    <!--Quick View Button-->
                                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal" data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="icon anm anm-search-plus-l"></i><span class="text">Quick View</span></span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                    <!--Wishlist Button-->
                                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip" data-bs-placement="left" title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span class="text">Add To Wishlist</span></a>
                                                    <!--End Wishlist Button-->
                                                    <!--Compare Button-->
                                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare"><i class="icon anm anm-random-r"></i><span class="text">Add to Compare</span></a>
                                                    <!--End Compare Button-->
                                                </div>
                                                <!--End Product Button-->
                                            </div>
                                            <!-- End Product Image -->
                                            <!-- Start Product Details -->
                                            <div class="product-details">
                                                <!-- Product Name -->
                                                <div class="product-name">
                                                    <a href="product-layout1.html">Straight Fit Trousers</a>
                                                </div>
                                                <!-- End Product Name -->
                                                <!-- Product Price -->
                                                <div class="product-price">
                                                    <span class="price">$122.00</span>
                                                </div>
                                                <!-- End Product Price -->
                                                <!-- Product Review -->
                                                <div class="product-review">
                                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                                    <span class="caption hidden ms-1">11 Reviews</span>
                                                </div>
                                                <!-- End Product Review -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>
                                </div>

                                <div class="view-collection text-center mt-4 mt-md-5">
                                    <a href="shop-left-sidebar.html" class="btn btn-secondary btn-lg">View Collection</a>
                                </div>
                            </div>
                            <!--End Product Grid-->
                        </div>

                        <div class="tab-pane" id="toprated" role="tabpanel" aria-labelledby="toprated-tab">
                            <!--Product Grid-->
                            <div class="grid-products grid-view-items">
                                <div class="row col-row product-options row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">
                                    <div class="item col-item">
                                        <div class="product-box">
                                            <!-- Start Product Image -->
                                            <div class="product-image">
                                                <!-- Start Product Image -->
                                                <a href="product-layout1.html" class="product-img rounded-3">
                                                    <!-- Image -->
                                                    <img class="primary blur-up lazyload" data-src="assets/images/products/product1.jpg" src="assets/images/products/product1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Image -->
                                                    <!-- Hover Image -->
                                                    <img class="hover blur-up lazyload" data-src="assets/images/products/product1-1.jpg" src="assets/images/products/product1-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Hover Image -->
                                                </a>
                                                <!-- End Product Image -->
                                                <!-- Product label -->
                                                <div class="product-labels"><span class="lbl pr-label2">Hot</span></div>
                                                <!-- End Product label -->
                                                <!--Product Button-->
                                                <div class="button-set style1">
                                                    <!--Cart Button-->
                                                    <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                                    </a>
                                                    <!--End Cart Button-->
                                                    <!--Quick View Button-->
                                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal" data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="icon anm anm-search-plus-l"></i><span class="text">Quick View</span></span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                    <!--Wishlist Button-->
                                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip" data-bs-placement="left" title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span class="text">Add To Wishlist</span></a>
                                                    <!--End Wishlist Button-->
                                                    <!--Compare Button-->
                                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare"><i class="icon anm anm-random-r"></i><span class="text">Add to Compare</span></a>
                                                    <!--End Compare Button-->
                                                </div>
                                                <!--End Product Button-->
                                            </div>
                                            <!-- End Product Image -->
                                            <!-- Start Product Details -->
                                            <div class="product-details">
                                                <!-- Product Name -->
                                                <div class="product-name">
                                                    <a href="product-layout1.html">Hooded Neck Hoodies</a>
                                                </div>
                                                <!-- End Product Name -->
                                                <!-- Product Price -->
                                                <div class="product-price">
                                                    <span class="price">$39.00</span>
                                                </div>
                                                <!-- End Product Price -->
                                                <!-- Product Review -->
                                                <div class="product-review">
                                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                                    <span class="caption hidden ms-1">3 Reviews</span>
                                                </div>
                                                <!-- End Product Review -->
                                                <!-- Variant -->
                                                <ul class="variants-clr swatches">
                                                    <li class="swatch medium radius black"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="black"></span></li>
                                                    <li class="swatch medium radius maroon"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="maroon"></span></li>
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>
                                    <div class="item col-item">
                                        <div class="product-box">
                                            <!-- Start Product Image -->
                                            <div class="product-image">
                                                <!-- Start Product Image -->
                                                <a href="product-layout1.html" class="product-img rounded-3">
                                                    <!-- Image -->
                                                    <img class="primary blur-up lazyload" data-src="assets/images/products/product1.jpg" src="assets/images/products/product1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Image -->
                                                    <!-- Hover Image -->
                                                    <img class="hover blur-up lazyload" data-src="assets/images/products/product1-1.jpg" src="assets/images/products/product1-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Hover Image -->
                                                </a>
                                                <!-- End Product Image -->
                                                <!-- Product label -->
                                                <div class="product-labels"><span class="lbl on-sale">Sold out</span></div>
                                                <!-- End Product label -->
                                                <!--Product Button-->
                                                <div class="button-set style1">
                                                    <!--Cart Button-->
                                                    <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                                    </a>
                                                    <!--End Cart Button-->
                                                    <!--Quick View Button-->
                                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal" data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="icon anm anm-search-plus-l"></i><span class="text">Quick View</span></span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                    <!--Wishlist Button-->
                                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip" data-bs-placement="left" title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span class="text">Add To Wishlist</span></a>
                                                    <!--End Wishlist Button-->
                                                    <!--Compare Button-->
                                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare"><i class="icon anm anm-random-r"></i><span class="text">Add to Compare</span></a>
                                                    <!--End Compare Button-->
                                                </div>
                                                <!--End Product Button-->
                                            </div>
                                            <!-- End Product Image -->
                                            <!-- Start Product Details -->
                                            <div class="product-details">
                                                <!-- Product Name -->
                                                <div class="product-name">
                                                    <a href="product-layout1.html">Foldable Duffel Bag</a>
                                                </div>
                                                <!-- End Product Name -->
                                                <!-- Product Price -->
                                                <div class="product-price">
                                                    <span class="price">$299.00</span>
                                                </div>
                                                <!-- End Product Price -->
                                                <!-- Product Review -->
                                                <div class="product-review">
                                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                                    <span class="caption hidden ms-1">15 Reviews</span>
                                                </div>
                                                <!-- End Product Review -->
                                                <!-- Variant -->
                                                <ul class="variants-clr swatches">
                                                    <li class="swatch medium radius gray"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="gray"></span></li>
                                                    <li class="swatch medium radius red"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="red"></span></li>
                                                    <li class="swatch medium radius orange"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="orange"></span></li>
                                                    <li class="swatch medium radius yellow"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="yellow"></span></li>
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>
                                    <div class="item col-item">
                                        <div class="product-box">
                                            <!-- Start Product Image -->
                                            <div class="product-image">
                                                <!-- Start Product Image -->
                                                <a href="product-layout1.html" class="product-img rounded-3">
                                                    <!-- Image -->
                                                    <img class="primary blur-up lazyload" data-src="assets/images/products/product1.jpg" src="assets/images/products/product1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Image -->
                                                    <!-- Hover Image -->
                                                    <img class="hover blur-up lazyload" data-src="assets/images/products/product1-1.jpg" src="assets/images/products/product1-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Hover Image -->
                                                </a>
                                                <!-- End Product Image -->
                                                <!-- Product label -->
                                                <div class="product-labels"><span class="lbl pr-label1">Best seller</span></div>
                                                <!-- End Product label -->
                                                <!--Product Button-->
                                                <div class="button-set style1">
                                                    <!--Cart Button-->
                                                    <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                                    </a>
                                                    <!--End Cart Button-->
                                                    <!--Quick View Button-->
                                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal" data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="icon anm anm-search-plus-l"></i><span class="text">Quick View</span></span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                    <!--Wishlist Button-->
                                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip" data-bs-placement="left" title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span class="text">Add To Wishlist</span></a>
                                                    <!--End Wishlist Button-->
                                                    <!--Compare Button-->
                                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare"><i class="icon anm anm-random-r"></i><span class="text">Add to Compare</span></a>
                                                    <!--End Compare Button-->
                                                </div>
                                                <!--End Product Button-->
                                            </div>
                                            <!-- End Product Image -->
                                            <!-- Start Product Details -->
                                            <div class="product-details">
                                                <!-- Product Name -->
                                                <div class="product-name">
                                                    <a href="product-layout1.html">High-Waisted Pant</a>
                                                </div>
                                                <!-- End Product Name -->
                                                <!-- Product Price -->
                                                <div class="product-price">
                                                    <span class="price">$139.00</span>
                                                </div>
                                                <!-- End Product Price -->
                                                <!-- Product Review -->
                                                <div class="product-review">
                                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                                    <span class="caption hidden ms-1">11 Reviews</span>
                                                </div>
                                                <!-- End Product Review -->
                                                <!-- Variant -->
                                                <ul class="variants-clr swatches">
                                                    <li class="swatch medium radius black"><img src="assets/images/products/swatches/80x80.jpg" alt="image" width="80" height="80" data-bs-toggle="tooltip" data-bs-placement="top" title="black" /></li>
                                                    <li class="swatch medium radius maroon"><img src="assets/images/products/swatches/80x80.jpg" alt="image" width="80" height="80" data-bs-toggle="tooltip" data-bs-placement="top" title="maroon" /></li>
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>
                                    <div class="item col-item">
                                        <div class="product-box">
                                            <!-- Start Product Image -->
                                            <div class="product-image">
                                                <!-- Start Product Image -->
                                                <a href="product-layout1.html" class="product-img rounded-3">
                                                    <!-- Image -->
                                                    <img class="primary blur-up lazyload" data-src="assets/images/products/product1.jpg" src="assets/images/products/product1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Image -->
                                                    <!-- Hover Image -->
                                                    <img class="hover blur-up lazyload" data-src="assets/images/products/product1-1.jpg" src="assets/images/products/product1-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Hover Image -->
                                                </a>
                                                <!-- End Product Image -->
                                                <!--Product Button-->
                                                <div class="button-set style1">
                                                    <!--Cart Button-->
                                                    <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                                    </a>
                                                    <!--End Cart Button-->
                                                    <!--Quick View Button-->
                                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal" data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="icon anm anm-search-plus-l"></i><span class="text">Quick View</span></span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                    <!--Wishlist Button-->
                                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip" data-bs-placement="left" title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span class="text">Add To Wishlist</span></a>
                                                    <!--End Wishlist Button-->
                                                    <!--Compare Button-->
                                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare"><i class="icon anm anm-random-r"></i><span class="text">Add to Compare</span></a>
                                                    <!--End Compare Button-->
                                                </div>
                                                <!--End Product Button-->
                                            </div>
                                            <!-- End Product Image -->
                                            <!-- Start Product Details -->
                                            <div class="product-details">
                                                <!-- Product Name -->
                                                <div class="product-name">
                                                    <a href="product-layout1.html">Narror Neck Tie</a>
                                                </div>
                                                <!-- End Product Name -->
                                                <!-- Product Price -->
                                                <div class="product-price">
                                                    <span class="price">$134.00</span>
                                                </div>
                                                <!-- End Product Price -->
                                                <!-- Product Review -->
                                                <div class="product-review">
                                                    <i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                                    <span class="caption hidden ms-1">0 Reviews</span>
                                                </div>
                                                <!-- End Product Review -->
                                                <!-- Variant -->
                                                <ul class="variants-clr swatches">
                                                    <li class="swatch medium radius black"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="black"></span></li>
                                                    <li class="swatch medium radius navy"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="navy"></span></li>
                                                    <li class="swatch medium radius darkgreen"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="darkgreen"></span></li>
                                                </ul>
                                                <!-- End Variant -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>
                                    <div class="item col-item">
                                        <div class="product-box">
                                            <!-- Start Product Image -->
                                            <div class="product-image">
                                                <!-- Start Product Image -->
                                                <a href="product-layout1.html" class="product-img rounded-3">
                                                    <!-- Image -->
                                                    <img class="primary blur-up lazyload" data-src="assets/images/products/product1.jpg" src="assets/images/products/product1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Image -->
                                                    <!-- Hover Image -->
                                                    <img class="hover blur-up lazyload" data-src="assets/images/products/product1-1.jpg" src="assets/images/products/product1-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Hover Image -->
                                                </a>
                                                <!-- End Product Image -->
                                                <!-- Product label -->
                                                <div class="product-labels"><span class="lbl pr-label4">Popular</span></div>
                                                <!-- End Product label -->
                                                <!--Product Button-->
                                                <div class="button-set style1">
                                                    <!--Cart Button-->
                                                    <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                                    </a>
                                                    <!--End Cart Button-->
                                                    <!--Quick View Button-->
                                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal" data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="icon anm anm-search-plus-l"></i><span class="text">Quick View</span></span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                    <!--Wishlist Button-->
                                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip" data-bs-placement="left" title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span class="text">Add To Wishlist</span></a>
                                                    <!--End Wishlist Button-->
                                                    <!--Compare Button-->
                                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare"><i class="icon anm anm-random-r"></i><span class="text">Add to Compare</span></a>
                                                    <!--End Compare Button-->
                                                </div>
                                                <!--End Product Button-->
                                            </div>
                                            <!-- End Product Image -->
                                            <!-- Start Product Details -->
                                            <div class="product-details">
                                                <!-- Product Name -->
                                                <div class="product-name">
                                                    <a href="product-layout1.html">Men's Cheater Jacket</a>
                                                </div>
                                                <!-- End Product Name -->
                                                <!-- Product Price -->
                                                <div class="product-price">
                                                    <span class="price">$99.00</span>
                                                </div>
                                                <!-- End Product Price -->
                                                <!-- Product Review -->
                                                <div class="product-review">
                                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                                    <span class="caption hidden ms-1">19 Reviews</span>
                                                </div>
                                                <!-- End Product Review -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>
                                    <div class="item col-item">
                                        <div class="product-box">
                                            <!-- Start Product Image -->
                                            <div class="product-image">
                                                <!-- Start Product Image -->
                                                <a href="product-layout1.html" class="product-img rounded-3">
                                                    <!-- Image -->
                                                    <img class="primary blur-up lazyload" data-src="assets/images/products/product1.jpg" src="assets/images/products/product1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Image -->
                                                    <!-- Hover Image -->
                                                    <img class="hover blur-up lazyload" data-src="assets/images/products/product1-1.jpg" src="assets/images/products/product1-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Hover Image -->
                                                </a>
                                                <!-- End Product Image -->
                                                <!--Product Button-->
                                                <div class="button-set style1">
                                                    <!--Cart Button-->
                                                    <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                                    </a>
                                                    <!--End Cart Button-->
                                                    <!--Quick View Button-->
                                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal" data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="icon anm anm-search-plus-l"></i><span class="text">Quick View</span></span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                    <!--Wishlist Button-->
                                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip" data-bs-placement="left" title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span class="text">Add To Wishlist</span></a>
                                                    <!--End Wishlist Button-->
                                                    <!--Compare Button-->
                                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare"><i class="icon anm anm-random-r"></i><span class="text">Add to Compare</span></a>
                                                    <!--End Compare Button-->
                                                </div>
                                                <!--End Product Button-->
                                            </div>
                                            <!-- End Product Image -->
                                            <!-- Start Product Details -->
                                            <div class="product-details">
                                                <!-- Product Name -->
                                                <div class="product-name">
                                                    <a href="product-layout1.html">Casual Mustard Shirt</a>
                                                </div>
                                                <!-- End Product Name -->
                                                <!-- Product Price -->
                                                <div class="product-price">
                                                    <span class="price">$167.00</span>
                                                </div>
                                                <!-- End Product Price -->
                                                <!-- Product Review -->
                                                <div class="product-review">
                                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i>
                                                    <span class="caption hidden ms-1">7 Reviews</span>
                                                </div>
                                                <!-- End Product Review -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>
                                    <div class="item col-item">
                                        <div class="product-box">
                                            <!-- Start Product Image -->
                                            <div class="product-image">
                                                <!-- Start Product Image -->
                                                <a href="product-layout1.html" class="product-img rounded-3">
                                                    <!-- Image -->
                                                    <img class="primary blur-up lazyload" data-src="assets/images/products/product1.jpg" src="assets/images/products/product1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Image -->
                                                    <!-- Hover Image -->
                                                    <img class="hover blur-up lazyload" data-src="assets/images/products/product1-1.jpg" src="assets/images/products/product1-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Hover Image -->
                                                </a>
                                                <!-- End Product Image -->
                                                <!--Product Button-->
                                                <div class="button-set style1">
                                                    <!--Cart Button-->
                                                    <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                                    </a>
                                                    <!--End Cart Button-->
                                                    <!--Quick View Button-->
                                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal" data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="icon anm anm-search-plus-l"></i><span class="text">Quick View</span></span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                    <!--Wishlist Button-->
                                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip" data-bs-placement="left" title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span class="text">Add To Wishlist</span></a>
                                                    <!--End Wishlist Button-->
                                                    <!--Compare Button-->
                                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare"><i class="icon anm anm-random-r"></i><span class="text">Add to Compare</span></a>
                                                    <!--End Compare Button-->
                                                </div>
                                                <!--End Product Button-->
                                            </div>
                                            <!-- End Product Image -->
                                            <!-- Start Product Details -->
                                            <div class="product-details">
                                                <!-- Product Name -->
                                                <div class="product-name">
                                                    <a href="product-layout1.html">Sleeve Round T-Shirt</a>
                                                </div>
                                                <!-- End Product Name -->
                                                <!-- Product Price -->
                                                <div class="product-price">
                                                    <span class="price">$154.00</span>
                                                </div>
                                                <!-- End Product Price -->
                                                <!-- Product Review -->
                                                <div class="product-review">
                                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i>
                                                    <span class="caption hidden ms-1">19 Reviews</span>
                                                </div>
                                                <!-- End Product Review -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>
                                    <div class="item col-item">
                                        <div class="product-box">
                                            <!-- Start Product Image -->
                                            <div class="product-image">
                                                <!-- Start Product Image -->
                                                <a href="product-layout1.html" class="product-img rounded-3">
                                                    <!-- Image -->
                                                    <img class="primary blur-up lazyload" data-src="assets/images/products/product1.jpg" src="assets/images/products/product1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Image -->
                                                    <!-- Hover Image -->
                                                    <img class="hover blur-up lazyload" data-src="assets/images/products/product1-1.jpg" src="assets/images/products/product1-1.jpg" alt="Product" title="Product" width="625" height="808" />
                                                    <!-- End Hover Image -->
                                                </a>
                                                <!-- End Product Image -->
                                                <!--Product Button-->
                                                <div class="button-set style1">
                                                    <!--Cart Button-->
                                                    <a href="#addtocart-modal" class="btn-icon addtocart add-to-cart-modal" data-bs-toggle="modal" data-bs-target="#addtocart_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Cart"><i class="icon anm anm-cart-l"></i><span class="text">Add to Cart</span></span>
                                                    </a>
                                                    <!--End Cart Button-->
                                                    <!--Quick View Button-->
                                                    <a href="#quickview-modal" class="btn-icon quickview quick-view-modal" data-bs-toggle="modal" data-bs-target="#quickview_modal">
                                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick View"><i class="icon anm anm-search-plus-l"></i><span class="text">Quick View</span></span>
                                                    </a>
                                                    <!--End Quick View Button-->
                                                    <!--Wishlist Button-->
                                                    <a href="wishlist-style2.html" class="btn-icon wishlist" data-bs-toggle="tooltip" data-bs-placement="left" title="Add To Wishlist"><i class="icon anm anm-heart-l"></i><span class="text">Add To Wishlist</span></a>
                                                    <!--End Wishlist Button-->
                                                    <!--Compare Button-->
                                                    <a href="compare-style2.html" class="btn-icon compare" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Compare"><i class="icon anm anm-random-r"></i><span class="text">Add to Compare</span></a>
                                                    <!--End Compare Button-->
                                                </div>
                                                <!--End Product Button-->
                                            </div>
                                            <!-- End Product Image -->
                                            <!-- Start Product Details -->
                                            <div class="product-details">
                                                <!-- Product Name -->
                                                <div class="product-name">
                                                    <a href="product-layout1.html">Backpack Laptop Bag</a>
                                                </div>
                                                <!-- End Product Name -->
                                                <!-- Product Price -->
                                                <div class="product-price">
                                                    <span class="price">$121.00</span>
                                                </div>
                                                <!-- End Product Price -->
                                                <!-- Product Review -->
                                                <div class="product-review">
                                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                                    <span class="caption hidden ms-1">6 Reviews</span>
                                                </div>
                                                <!-- End Product Review -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>
                                </div>

                                <div class="view-collection text-center mt-4 mt-md-5">
                                    <a href="shop-left-sidebar.html" class="btn btn-secondary btn-lg">View Collection</a>
                                </div>
                            </div>
                            <!--End Product Grid-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Products With Tabs-->

        <!--Parallax Banner-->
        <div class="section parallax-banner-style1 py-0">
            <div class="hero hero-large hero-overlay bg-size">
                <img class="bg-img" src="assets/images/parallax/demo1-sale-banner.jpg" alt="Clearance Sale - Flat 50% Off" width="1920" height="645" />
                <div class="hero-inner d-flex-justify-center">
                    <div class="container">
                        <div class="wrap-text center text-white">
                            <h1 class="hero-title text-white">Clearance Sale - Flat 50% Off</h1>
                            <p class="hero-subtitle h3 text-white">Sale will end soon in</p>
                            <!--Countdown Timer-->
                            <div class="hero-saleTime d-flex-center text-center justify-content-center" data-countdown="2028/10/01"></div>
                            <!--End Countdown Timer-->
                            <p class="hero-details">Hema Multipurpose Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as fashion.</p>
                            <a href="shop-left-sidebar.html" class="hero-btn btn btn-light">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Parallax Banner-->

        <!--Testimonial Section-->
        <section class="section testimonial-slider style1">
            <div class="container">
                <div class="section-header">
                    <p class="mb-2 mt-0">Happy Customer</p>
                    <h2>Loved By Our Customers</h2>
                </div>

                <div class="testimonial-wraper">
                    <!--Testimonial Slider Items-->
                    <div class="testimonial-slider-3items gp15 slick-arrow-dots arwOut5">
                        <div class="testimonial-slide">
                            <div class="testimonial-content text-center">
                                <div class="quote-icon mb-3 mb-lg-4"><img class="blur-up lazyload mx-auto" data-src="assets/images/icons/demo1-quote-icon.png" src="assets/images/icons/demo1-quote-icon.png" alt="icon" width="40" height="40" /></div>
                                <div class="content">
                                    <div class="text mb-2"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text 1500s.</p></div>
                                    <div class="product-review my-3">
                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i>
                                        <span class="caption hidden ms-1">24 Reviews</span>
                                    </div>
                                </div>
                                <div class="auhimg d-flex-justify-center text-left">
                                    <div class="image"><img class="rounded-circle blur-up lazyload" data-src="assets/images/users/testimonial1-65x.jpg" src="assets/images/users/testimonial1-65x.jpg" alt="John Doe" width="65" height="65" /></div>
                                    <div class="auhtext ms-3">
                                        <h5 class="authour mb-1">John Doe</h5>
                                        <p class="text-muted">Founder &amp; CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-slide">
                            <div class="testimonial-content text-center">
                                <div class="quote-icon mb-3 mb-lg-4"><img class="blur-up lazyload mx-auto" data-src="assets/images/icons/demo1-quote-icon.png" src="assets/images/icons/demo1-quote-icon.png" alt="icon" width="40" height="40" /></div>
                                <div class="content">
                                    <div class="text mb-2"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text 1500s.</p></div>
                                    <div class="product-review my-3">
                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i>
                                        <span class="caption hidden ms-1">15 Reviews</span>
                                    </div>
                                </div>
                                <div class="auhimg d-flex-justify-center text-left">
                                    <div class="image"><img class="rounded-circle blur-up lazyload" data-src="assets/images/users/testimonial1-65x.jpg" src="assets/images/users/testimonial1-65x.jpg" alt="Jessica Doe" width="65" height="65" /></div>
                                    <div class="auhtext ms-3">
                                        <h5 class="authour mb-1">Jessica Doe</h5>
                                        <p class="text-muted">Marketing</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-slide">
                            <div class="testimonial-content text-center">
                                <div class="quote-icon mb-3 mb-lg-4"><img class="blur-up lazyload mx-auto" data-src="assets/images/icons/demo1-quote-icon.png" src="assets/images/icons/demo1-quote-icon.png" alt="icon" width="40" height="40" /></div>
                                <div class="content">
                                    <div class="text mb-2"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text 1500s.</p></div>
                                    <div class="product-review my-3">
                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                        <span class="caption hidden ms-1">17 Reviews</span>
                                    </div>
                                </div>
                                <div class="auhimg d-flex-justify-center text-left">
                                    <div class="image"><img class="rounded-circle blur-up lazyload" data-src="assets/images/users/testimonial1-65x.jpg" src="assets/images/users/testimonial1-65x.jpg" alt="Rick Edward" width="65" height="65" /></div>
                                    <div class="auhtext ms-3">
                                        <h5 class="authour mb-1">Rick Edward</h5>
                                        <p class="text-muted">Developer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-slide rounded-3">
                            <div class="testimonial-content text-center">
                                <div class="quote-icon mb-3 mb-lg-4"><img class="blur-up lazyload mx-auto" data-src="assets/images/icons/demo1-quote-icon.png" src="assets/images/icons/demo1-quote-icon.png" alt="icon" width="40" height="40" /></div>
                                <div class="content">
                                    <div class="text mb-2"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text 1500s.</p></div>
                                    <div class="product-review my-3">
                                        <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                        <span class="caption hidden ms-1">29 Reviews</span>
                                    </div>
                                </div>
                                <div class="auhimg d-flex-justify-center text-left">
                                    <div class="image"><img class="rounded-circle blur-up lazyload" data-src="assets/images/users/testimonial1-65x.jpg" src="assets/images/users/testimonial1-65x.jpg" alt="Happy Buyer" width="65" height="65" /></div>
                                    <div class="auhtext ms-3">
                                        <h5 class="authour mb-1">Happy Buyer</h5>
                                        <p class="text-muted">Designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial Slider Items-->
                </div>
            </div>
        </section>
        <!--End Testimonial section-->

    </div>
    <!-- End Body Container -->
@endsection