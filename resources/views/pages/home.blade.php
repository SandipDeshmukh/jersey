@extends('layouts.app')
@section('content')
    <!-- Body Container -->
    <div id="page-content" class="mb-0">
        <!--Home Slideshow-->
        <section class="slideshow slideshow-wrapper">
            <div class="home-slideshow slick-arrow-dots">
                @foreach($sliders as $slider)
                    @if($slider->theme == 0)
                    <div class="slide">
                        <div class="slideshow-wrap">
                            <picture>
                                <source media="(max-width:767px)" srcset="{{ asset($slider->image) }}" width="1150" height="800">
                                <img class="blur-up lazyload" src="{{ asset($slider->image) }}" alt="slideshow" title="" width="1920" height="795" />
                            </picture>
                            <div class="container">
                                <div class="slideshow-content slideshow-overlay middle-left">
                                    <div class="slideshow-content-in">
                                        <div class="wrap-caption animation style1">
                                            <h2 class="ss-mega-title">{{ $slider->heading }}</h2>
                                            <p class="ss-sub-title xs-hide">{!! $slider->description !!}</p>
                                            <div class="ss-btnWrap">
                                                <a class="btn btn-primary" href="shop-grid-view.html">Explore Now!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @elseif($slider->theme == 1)
                        <div class="slide">
                            <div class="slideshow-wrap">
                                <picture>
                                    <source media="(max-width:767px)" srcset="{{ asset($slider->image) }}" width="1150" height="800">
                                    <img class="blur-up lazyload" src="{{ asset($slider->image) }}" alt="slideshow" title="" width="1920" height="795" />
                                </picture>
                                <div class="container">
                                    <div class="slideshow-content slideshow-overlay middle-right">
                                        <div class="slideshow-content-in">
                                            <div class="wrap-caption animation style1">
                                                <h2 class="ss-mega-title">{{ $slider->heading }}</h2>
                                                <p class="ss-sub-title xs-hide">{!! $slider->description !!}</p>
                                                <div class="ss-btnWrap d-flex-justify-start">
                                                    <a class="btn btn-primary" href="shop-grid-view.html">Explore Now!</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
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
                        <li class="nav-item hidden" role="presentation">
                            <button class="nav-link head-font" id="toprated-tab" data-bs-toggle="tab" data-bs-target="#toprated" type="button" role="tab" aria-controls="toprated" aria-selected="false">Top Rated</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="productTabsContent">
                        <div class="tab-pane show active" id="bestsellers" role="tabpanel" aria-labelledby="bestsellers-tab">
                            <!--Product Grid-->
                            <div class="grid-products grid-view-items">
                                <div class="row col-row product-options row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">
                                    @foreach($bestProducts as $product)
                                    <div class="item col-item">
                                        <div class="product-box">
                                            <!-- Start Product Image -->
                                            <div class="product-image">
                                                <!-- Start Product Image -->
                                                @php $productImg = json_decode($product->images) @endphp
                                                <a href="product-layout1.html" class="product-img rounded-3"><img class="blur-up lazyload" src="{{ isset($productImg) ? asset($productImg[0]) : 'assets/images/products/product1.jpg' }}" alt="Product" title="Product" width="625" height="808" /></a>
                                                <!-- End Product Image -->
                                            </div>
                                            <!-- End Product Image -->
                                            <!-- Start Product Details -->
                                            <div class="product-details">
                                                <!-- Product Name -->
                                                <div class="product-name">
                                                    <a href="product-layout1.html">{{ $product->name }}</a>
                                                </div>
                                                <!-- End Product Name -->
                                                <!-- Product Price -->
                                                <div class="product-price">
                                                    <span class="price">₹{{ $product->price }}</span>
                                                </div>
                                                <!-- End Product Price -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                                <div class="view-collection text-center mt-4 mt-md-5">
                                    <a href="{{ route('shop') }}" class="btn btn-secondary btn-lg">View Collection</a>
                                </div>
                            </div>
                            <!--End Product Grid-->
                        </div>

                        <div class="tab-pane" id="newarrivals" role="tabpanel" aria-labelledby="newarrivals-tab">
                            <!--Product Grid-->
                            <div class="grid-products grid-view-items">
                                <div class="row col-row product-options row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">
                                    @foreach($newArrival as $product)
                                    <div class="item col-item">
                                            <div class="product-box">
                                                <!-- Start Product Image -->
                                                <div class="product-image">
                                                    <!-- Start Product Image -->
                                                    @php $productImg = json_decode($product->images) @endphp
                                                    <a href="product-layout1.html" class="product-img rounded-3"><img class="blur-up lazyload" src="{{ isset($productImg) ? asset($productImg[0]) : 'assets/images/products/product1.jpg' }}" alt="Product" title="Product" width="625" height="808" /></a>
                                                    <!-- End Product Image -->
                                                </div>
                                                <!-- End Product Image -->
                                                <!-- Start Product Details -->
                                                <div class="product-details">
                                                    <!-- Product Name -->
                                                    <div class="product-name">
                                                        <a href="product-layout1.html">{{ $product->name }}</a>
                                                    </div>
                                                    <!-- End Product Name -->
                                                    <!-- Product Price -->
                                                    <div class="product-price">
                                                        <span class="price">₹{{ $product->price }}</span>
                                                    </div>
                                                    <!-- End Product Price -->
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="view-collection text-center mt-4 mt-md-5">
                                    <a href="{{ route('shop') }}" class="btn btn-secondary btn-lg">View Collection</a>
                                </div>
                            </div>
                            <!--End Product Grid-->
                        </div>

                        <div class="tab-pane hidden" id="toprated" role="tabpanel" aria-labelledby="toprated-tab">
                            <!--Product Grid-->
                            <div class="grid-products grid-view-items">
                                <div class="row col-row product-options row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">
                                    @foreach($topRated as $product)
                                    <div class="item col-item">
                                            <div class="product-box">
                                                <!-- Start Product Image -->
                                                <div class="product-image">
                                                    <!-- Start Product Image -->
                                                    @php $productImg = json_decode($product->images) @endphp
                                                    <a href="product-layout1.html" class="product-img rounded-3"><img class="blur-up lazyload" src="{{ isset($productImg) ? asset($productImg[0]) : 'assets/images/products/product1.jpg' }}" alt="Product" title="Product" width="625" height="808" /></a>
                                                    <!-- End Product Image -->
                                                </div>
                                                <!-- End Product Image -->
                                                <!-- Start Product Details -->
                                                <div class="product-details">
                                                    <!-- Product Name -->
                                                    <div class="product-name">
                                                        <a href="product-layout1.html">{{ $product->name }}</a>
                                                    </div>
                                                    <!-- End Product Name -->
                                                    <!-- Product Price -->
                                                    <div class="product-price">
                                                        <span class="price">₹{{ $product->price }}</span>
                                                    </div>
                                                    <!-- End Product Price -->
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="view-collection text-center mt-4 mt-md-5">
                                    <a href="{{ route('shop') }}" class="btn btn-secondary btn-lg">View Collection</a>
                                </div>
                            </div>
                            <!--End Product Grid-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Products With Tabs-->

        @if($testimonials->isNotEmpty())
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
                        @foreach($testimonials as $testimonial)
                        <div class="testimonial-slide">
                            <div class="testimonial-content text-center">
                                <div class="quote-icon mb-3 mb-lg-4"><img class="blur-up lazyload mx-auto" data-src="assets/images/icons/demo1-quote-icon.png" src="assets/images/icons/demo1-quote-icon.png" alt="icon" width="40" height="40" /></div>
                                <div class="content">
                                    <div class="text mb-2"><p>{{ $testimonial->description }}</p></div>
                                    <div class="product-review my-3">
                                        @for($i =1; $i <= 5; $i++)
                                            @if($i <= $testimonial->rating)
                                                <i class="icon anm anm-star"></i>
                                            @else
                                                <i class="icon anm anm-star-o"></i>
                                            @endif
                                        @endfor
                                    </div>
                                </div>
                                <div class="auhimg d-flex-justify-center text-left">
                                    <div class="image"><img class="rounded-circle blur-up lazyload" data-src="//ui-avatars.com/api/?name={{ $testimonial->name }}" src="//ui-avatars.com/api/?name={{ $testimonial->name }}" alt="John Doe" width="65" height="65" /></div>
                                    <div class="auhtext ms-3">
                                        <h5 class="authour mb-1">{{ $testimonial->name }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!--Testimonial Slider Items-->
                </div>
            </div>
        </section>
        <!--End Testimonial section-->
        @endif

    </div>
    <!-- End Body Container -->
@endsection
