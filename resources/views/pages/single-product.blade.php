@extends('layouts.app')
@section('content')
    <!-- Body Container -->
    <div id="page-content"> 
        <!--Page Header-->
        <div class="page-header text-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <!--Breadcrumbs-->
                        <div class="breadcrumbs"><a href="index.html" title="Back to the home page">Home</a><span class="main-title fw-bold"><i class="icon anm anm-angle-right-l"></i>{{ $product->name }}</span></div>
                        <!--End Breadcrumbs-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Header-->

        <!--Main Content-->
        <div class="container">     
            <!--Product Content-->
            <div class="product-single">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 product-layout-img mb-4 mb-md-0">
                        <div class="product-sticky-style">
                            <!-- Product Horizontal -->
                            <div class="product-details-img product-thumb-left-style d-flex justify-content-center">
                                <!-- Product Thumb -->
                                <div class="product-thumb thumb-left">
                                    <div id="gallery" class="product-thumb-vertical h-100">
                                    @php $productImgs = json_decode($product->images) @endphp
                                    @if ($productImgs)
                                        @foreach ($productImgs as $img)
                                        <a data-image="{{ asset($img) }}" data-zoom-image="{{ asset($img) }}" class="slick-slide slick-cloned active">
                                            <img class="blur-up lazyload rounded-0" data-src="{{ asset($img) }}" src="{{ asset($img) }}" alt="product" width="625" height="808" />
                                        </a>
                                        @endforeach
                                    @endif
                                    </div>
                                </div>
                                <!-- End Product Thumb -->

                                <!-- Product Main -->
                                @if($productImgs)
                                <div class="zoompro-wrap product-zoom-right rounded-0">
                                    <!-- Product Image -->
                                    <div class="zoompro-span"><img id="zoompro" class="zoompro rounded-0" src="{{ asset($productImgs[0]) }}" data-zoom-image="{{ asset($productImgs[0]) }}" alt="product" width="625" height="808" /></div>
                                    <!-- End Product Image -->
                                </div>
                                @endif
                                <!-- End Product Main -->
                            </div>
                            <!-- End Product Horizontal -->
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 product-layout-info">
                        <!-- Product Details -->
                        <div class="product-single-meta">
                            <div class="product-main-subtitle mb-3 d-flex-center">
                                <div class="product-labels position-static d-inline-flex"><span class="lbl pr-label1 mb-0">Best seller</span></div>  
                                <span class="label-text ms-2 d-none">in Fashion</span>
                            </div>
                            <h2 class="product-main-title">{{ $product->name }}</h2>
                            <!-- Product Price -->
                            <div class="product-price d-flex-center my-3">
                                <span class="price">₹{{ $product->price }}</span>
                            </div>
                            <!-- End Product Price -->
                            <!-- Sort Description -->
                            <div class="sort-description mb-3">{{ $product->short_description }}</div>
                            <!-- End Sort Description -->
                        </div>
                        <!-- End Product Details -->

                        <!-- Product Form -->
                        <form method="post" action="{{ route('cart.add') }}" class="product-form product-form-border hidedropdown">
                            @csrf
                            <!-- Swatches -->
                            <div class="product-item swatches-size w-100 mb-4 swatch-1 option2" data-option-index="1" x-data="size()">
    <label class="label d-flex align-items-center">Size:<span class="slVariant ms-1 fw-bold" x-text="selectedSize"></span> <a href="#sizechart-modal" class="text-link sizelink text-muted size-chart-modal" data-bs-toggle="modal" data-bs-target="#sizechart_modal">Size Guide</a></label>
    <ul class="variants-size size-swatches d-flex-center pt-1 clearfix">
        @foreach($product->sizes as $size)
            <li class="swatch x-large @if($size['quantity'] < 1) soldout @endif" @click="selectSize('{{ $size['size'] }}')" :class="selectedSize === '{{ $size['size'] }}' ? 'active' : ''"><span class="swatchLbl" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $size['size'] }}">{{ $size['size'] }}</span></li>
        @endforeach
    </ul>
</div>

<script>
    function size() {
        return {
            selectedSize: "{{ $product->sizes[0]['size'] ?? '' }}",
            selectSize(size) {
                this.selectedSize = size;
            }
        }
    }
</script>                             
                            <!-- End Swatches -->

                            <!-- Product Action -->
                            <div class="product-action w-100 d-flex-wrap my-3 my-md-4" x-data="cart()">
    <!-- Product Quantity -->
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <div class="product-form-quantity d-flex-center">
        <div class="qtyField">
            <a class="qtyBtn minus" href="#" @click.prevent="decreaseQty()"><i class="icon anm anm-minus-r"></i></a>
            <input type="text" name="quantity" x-model="qty" value="1" class="product-form-input qty" readonly />
            <a class="qtyBtn plus" href="#" @click.prevent="increaseQty()"><i class="icon anm anm-plus-r"></i></a>
        </div>
    </div>
    <!-- End Product Quantity -->
    <!-- Product Add -->
    <div class="product-form-submit addcart fl-1 ms-3">
        <button type="submit" name="add" class="btn btn-secondary product-form-cart-submit" @click="addToCart()">
            <span>Add to cart</span>
        </button>
    </div>
    <!-- Product Add -->
    <!-- Product Buy -->
    <div class="product-form-submit buyit fl-1 ms-3">
        <button type="submit" class="btn btn-primary proceed-to-checkout" @click="buyNow()">
            <span>Buy it now</span>
        </button>
    </div>
    <!-- End Product Buy -->
</div>

<script>
    function cart() {
        return {
            qty: 1,
            addToCart() {
                // Add to cart logic here
                console.log('Added to cart');
            },
            buyNow() {
                // Buy now logic here
                console.log('Buying now');
            },
            decreaseQty() {
                if (this.qty > 1) {
                    this.qty--;
                }
            },
            increaseQty() {
                this.qty++;
            }
        }
    }
</script>
                            <!-- End Product Action -->

                            <!-- Product Info link -->
                            <p class="infolinks d-flex-center justify-content">
                                <a class="text-link wishlist" href="wishlist-style1.html"><i class="icon anm anm-heart-l me-2"></i> <span>Add to Wishlist</span></a>
                                <a href="#shippingInfo-modal" class="text-link shippingInfo" data-bs-toggle="modal" data-bs-target="#shippingInfo_modal"><i class="icon anm anm-paper-l-plane me-2"></i> <span>Delivery &amp; Returns</span></a>
                            </p>
                            <!-- End Product Info link -->
                        </form>
                        <!-- End Product Form -->

                        <!-- Product Info -->
                        <div class="shippingMsg featureText mb-0"><i class="icon anm anm-clock-r"></i>Estimated Delivery Between <b id="fromDate">{{ $estimateDate1 }}</b> and <b id="toDate">{{ $estimateDate2 }}</b>.</div>   
                        <div class="trustseal-img mt-3 mt-md-4"><img src="{{ asset('assets/images/icons/powerby-cards.jpg') }}" alt="powerby cards" width="470" /></div>
                        <!-- End Product Info -->
                    </div>
                </div>
            </div>
            <!--Product Content-->

            <!--Product Tabs-->
            <div class="tabs-listing section pb-0">
                <ul class="product-tabs list-unstyled d-flex-wrap border-bottom d-none d-md-flex">
                    <li rel="description" class="active"><a class="tablink">Description</a></li>
                    <li rel="size-chart"><a class="tablink">Size Chart</a></li>
                    <li rel="shipping-return"><a class="tablink">Shipping &amp; Return</a></li>
                </ul>

                <div class="tab-container">
                    <!--Description-->
                    <h3 class="tabs-ac-style d-md-none active" rel="description">Description</h3>
                    <div id="description" class="tab-content">
                        <div class="product-description">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    {!! $product->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Description-->

                    <!--Size Chart-->
                    <h3 class="tabs-ac-style d-md-none" rel="size-chart">Size Chart</h3>
                    <div id="size-chart" class="tab-content">
                        <h4 class="mb-2">Ready to Wear Clothing</h4>
                        <p class="mb-4">This is a standardised guide to give you an idea of what size you will need, however some brands may vary from these conversions.</p>
                        <div class="size-chart-tbl table-responsive px-1">
                            <table class="table-bordered align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th>Size</th>
                                        <th>XXS - XS</th>
                                        <th>XS - S</th>
                                        <th>S - M</th>
                                        <th>M - L</th>
                                        <th>L - XL</th>
                                        <th>XL - XXL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>UK</th>
                                        <td>6</td>
                                        <td>8</td>
                                        <td>10</td>
                                        <td>12</td>
                                        <td>14</td>
                                        <td>16</td>
                                    </tr>
                                    <tr>
                                        <th>US</th>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>6</td>
                                        <td>8</td>
                                        <td>10</td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <th>Italy (IT)</th>
                                        <td>38</td>
                                        <td>40</td>
                                        <td>42</td>
                                        <td>44</td>
                                        <td>46</td>
                                        <td>48</td>
                                    </tr>
                                    <tr>
                                        <th>France (FR/EU)</th>
                                        <td>34</td>
                                        <td>36</td>
                                        <td>38</td>
                                        <td>40</td>
                                        <td>42</td>
                                        <td>44</td>
                                    </tr>
                                    <tr>
                                        <th>Denmark</th>
                                        <td>32</td>
                                        <td>34</td>
                                        <td>36</td>
                                        <td>38</td>
                                        <td>40</td>
                                        <td>42</td>
                                    </tr>
                                    <tr>
                                        <th>Russia</th>
                                        <td>40</td>
                                        <td>42</td>
                                        <td>44</td>
                                        <td>46</td>
                                        <td>48</td>
                                        <td>50</td>
                                    </tr>
                                    <tr>
                                        <th>Germany</th>
                                        <td>32</td>
                                        <td>34</td>
                                        <td>36</td>
                                        <td>38</td>
                                        <td>40</td>
                                        <td>42</td>
                                    </tr>
                                    <tr>
                                        <th>Japan</th>
                                        <td>5</td>
                                        <td>7</td>
                                        <td>9</td>
                                        <td>11</td>
                                        <td>13</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <th>Australia</th>
                                        <td>6</td>
                                        <td>8</td>
                                        <td>10</td>
                                        <td>12</td>
                                        <td>14</td>
                                        <td>16</td>
                                    </tr>
                                    <tr>
                                        <th>Korea</th>
                                        <td>33</td>
                                        <td>44</td>
                                        <td>55</td>
                                        <td>66</td>
                                        <td>77</td>
                                        <td>88</td>
                                    </tr>
                                    <tr>
                                        <th>China</th>
                                        <td>160/84</td>
                                        <td>165/86</td>
                                        <td>170/88</td>
                                        <td>175/90</td>
                                        <td>180/92</td>
                                        <td>185/94</td>
                                    </tr>
                                    <tr>
                                        <th>Jeans</th>
                                        <td>24-25</td>
                                        <td>26-27</td>
                                        <td>27-28</td>
                                        <td>29-30</td>
                                        <td>31-32</td>
                                        <td>32-33</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--End Size Chart-->

                    <!--Shipping &amp; Return-->
                    <h3 class="tabs-ac-style d-md-none" rel="shipping-return">Shipping &amp; Return</h3>
                    <div id="shipping-return" class="tab-content">
                        <h4 class="pb-1">Shipping &amp; Return</h4>
                        <ul class="checkmark-info">
                            <li>Dispatch: Within 24 Hours</li>
                            <li>1 Year Brand Warranty</li>
                            <li>Free shipping across all products on a minimum purchase of $50.</li>
                            <li>International delivery time - 7-10 business days</li>
                            <li>Cash on delivery might be available</li>
                            <li>Easy 30 days returns and exchanges</li>
                        </ul>
                        <h4 class="pt-1">Free and Easy Returns</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        <h4 class="pt-1">Special Financing</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage.</p>
                    </div>
                    <!--End Shipping &amp; Return-->
                </div>
            </div>
            <!--End Product Tabs-->
        </div>
        <!--End Main Content-->

        <!--Related Products-->
        <section class="section product-slider pb-0 hidden">
            <div class="container">
                <div class="section-header">
                    <p class="mb-1 mt-0">Discover Similar</p>
                    <h2>Related Products</h2>
                </div>

                <!--Product Grid-->
                <div class="product-slider-4items gp10 arwOut5 grid-products">
                    <div class="item col-item">
                        <div class="product-box">
                            <!-- Start Product Image -->
                            <div class="product-image">
                                <!-- Start Product Image -->
                                <a href="product-layout1.html" class="product-img rounded-0"><img class="rounded-0 blur-up lazyload" src="{{ asset('assets/images/products/product1.jpg') }}" alt="Product" title="Product" width="625" height="808" /></a>
                                <!-- End Product Image -->
                                <!-- Product label -->
                                <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                <!-- End Product label -->
                                <!--Product Button-->
                                <div class="button-set style1">
                                    <!--Cart Button-->
                                    <a href="#quickshop-modal" class="btn-icon addtocart quick-shop-modal" data-bs-toggle="modal" data-bs-target="#quickshop_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick Shop"><i class="icon anm anm-cart-l"></i><span class="text">Quick Shop</span></span>
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
                            <div class="product-details text-left">
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
                                <!-- Product Review -->
                                <div class="product-review">
                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i>
                                    <span class="caption hidden ms-1">3 Reviews</span>
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
                                <a href="product-layout1.html" class="product-img rounded-0">
                                    <!-- Image -->
                                    <img class="primary rounded-0 blur-up lazyload" data-src="{{ asset('assets/images/products/product1.jpg') }}" src="{{ asset('assets/images/products/product1.jpg') }}" alt="Product" title="Product" width="625" height="808" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="hover rounded-0 blur-up lazyload" data-src="{{ asset('assets/images/products/product1-1.jpg') }}" src="{{ asset('assets/images/products/product1-1.jpg') }}" alt="Product" title="Product" width="625" height="808" />
                                    <!-- End Hover Image -->
                                </a>
                                <!-- End Product Image -->
                                <!--Product Button-->
                                <div class="button-set style1">
                                    <!--Cart Button-->
                                    <a href="#quickshop-modal" class="btn-icon addtocart quick-shop-modal" data-bs-toggle="modal" data-bs-target="#quickshop_modal">
                                        <span class="icon-wrap d-flex-justify-center h-100 w-100" data-bs-toggle="tooltip" data-bs-placement="left" title="Select Options"><i class="icon anm anm-cart-l"></i><span class="text">Select Options</span></span>
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
                            <div class="product-details text-left">
                                <!-- Product Name -->
                                <div class="product-name">
                                    <a href="product-layout1.html">Cuff Beanie Cap</a>
                                </div>
                                <!-- End Product Name -->
                                <!-- Product Price -->
                                <div class="product-price">
                                    <span class="price">$128.00</span>
                                </div>
                                <!-- End Product Price -->
                                <!-- Product Review -->
                                <div class="product-review">
                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i>
                                    <span class="caption hidden ms-1">8 Reviews</span>
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
                                <a href="product-layout1.html" class="product-img rounded-0">
                                    <!-- Image -->
                                    <img class="primary rounded-0 blur-up lazyload" data-src="{{ asset('assets/images/products/product1.jpg') }}" src="{{ asset('assets/images/products/product1.jpg') }}" alt="Product" title="Product" width="625" height="808" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="hover rounded-0 blur-up lazyload" data-src="{{ asset('assets/images/products/product1-1.jpg') }}" src="{{ asset('assets/images/products/product1-1.jpg') }}" alt="Product" title="Product" width="625" height="808" />
                                    <!-- End Hover Image -->
                                </a>
                                <!-- End Product Image -->
                                <!-- Product label -->
                                <div class="product-labels"><span class="lbl pr-label3">Trending</span></div>
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
                            <div class="product-details text-left">
                                <!-- Product Name -->
                                <div class="product-name">
                                    <a href="product-layout1.html">Flannel Collar Shirt</a>
                                </div>
                                <!-- End Product Name -->
                                <!-- Product Price -->
                                <div class="product-price">
                                    <span class="price">$99.00</span>
                                </div>
                                <!-- End Product Price -->
                                <!-- Product Review -->
                                <div class="product-review">
                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                    <span class="caption hidden ms-1">10 Reviews</span>
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
                                <a href="product-layout1.html" class="product-img rounded-0">
                                    <!-- Image -->
                                    <img class="primary rounded-0 blur-up lazyload" data-src="{{ asset('assets/images/products/product1.jpg') }}" src="{{ asset('assets/images/products/product1.jpg') }}" alt="Product" title="Product" width="625" height="808" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="hover rounded-0 blur-up lazyload" data-src="{{ asset('assets/images/products/product1-1.jpg') }}" src="{{ asset('assets/images/products/product1-1.jpg') }}" alt="Product" title="Product" width="625" height="808" />
                                    <!-- End Hover Image -->
                                </a>
                                <!-- End Product Image -->
                                <!-- Product label -->
                                <div class="product-labels"><span class="lbl on-sale">50% Off</span></div>
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
                            <div class="product-details text-left">
                                <!-- Product Name -->
                                <div class="product-name">
                                    <a href="product-layout1.html">Cotton Hooded Hoodie</a>
                                </div>
                                <!-- End Product Name -->
                                <!-- Product Price -->
                                <div class="product-price">
                                    <span class="price old-price">$198.00</span><span class="price">$99.00</span>
                                </div>
                                <!-- End Product Price -->
                                <!-- Product Review -->
                                <div class="product-review">
                                    <i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                    <span class="caption hidden ms-1">0 Reviews</span>
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
                                <a href="product-layout1.html" class="product-img rounded-0">
                                    <!-- Image -->
                                    <img class="primary rounded-0 blur-up lazyload" data-src="{{ asset('assets/images/products/product1.jpg') }}" src="{{ asset('assets/images/products/product1.jpg') }}" alt="Product" title="Product" width="625" height="808" />
                                    <!-- End Image -->
                                    <!-- Hover Image -->
                                    <img class="hover rounded-0 blur-up lazyload" data-src="{{ asset('assets/images/products/product1-1.jpg') }}" src="{{ asset('assets/images/products/product1-1.jpg') }}" alt="Product" title="Product" width="625" height="808" />
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
                            <div class="product-details text-left">
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
                            </div>
                            <!-- End product details -->
                        </div>
                    </div>
                </div>
                <!--End Product Grid-->
            </div>
        </section>
        <!--End Related Products-->       
    </div>
    <!-- End Body Container -->


    <!-- Size Chart Modal -->
    <div class="sizechart-modal modal fade" id="sizechart_modal" tabindex="-1" aria-hidden="true">           
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div id="sizechart" class="sizechart-wrap">
                        <h4 class="mb-2">Size Guide</h4>
                        <p class="mb-4">This is a standardised guide to give you an idea of what size you will need, however some brands may vary from these conversions.</p>
                        <div class="size-chart-tbl table-responsive px-1">
                            <table class="table-bordered align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th>Size</th>
                                        <th>XXS - XS</th>
                                        <th>XS - S</th>
                                        <th>S - M</th>
                                        <th>M - L</th>
                                        <th>L - XL</th>
                                        <th>XL - XXL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>UK</th>
                                        <td>6</td>
                                        <td>8</td>
                                        <td>10</td>
                                        <td>12</td>
                                        <td>14</td>
                                        <td>16</td>
                                    </tr>
                                    <tr>
                                        <th>US</th>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>6</td>
                                        <td>8</td>
                                        <td>10</td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <th>Italy (IT)</th>
                                        <td>38</td>
                                        <td>40</td>
                                        <td>42</td>
                                        <td>44</td>
                                        <td>46</td>
                                        <td>48</td>
                                    </tr>
                                    <tr>
                                        <th>France (FR/EU)</th>
                                        <td>34</td>
                                        <td>36</td>
                                        <td>38</td>
                                        <td>40</td>
                                        <td>42</td>
                                        <td>44</td>
                                    </tr>
                                    <tr>
                                        <th>Denmark</th>
                                        <td>32</td>
                                        <td>34</td>
                                        <td>36</td>
                                        <td>38</td>
                                        <td>40</td>
                                        <td>42</td>
                                    </tr>
                                    <tr>
                                        <th>Russia</th>
                                        <td>40</td>
                                        <td>42</td>
                                        <td>44</td>
                                        <td>46</td>
                                        <td>48</td>
                                        <td>50</td>
                                    </tr>
                                    <tr>
                                        <th>Germany</th>
                                        <td>32</td>
                                        <td>34</td>
                                        <td>36</td>
                                        <td>38</td>
                                        <td>40</td>
                                        <td>42</td>
                                    </tr>
                                    <tr>
                                        <th>Japan</th>
                                        <td>5</td>
                                        <td>7</td>
                                        <td>9</td>
                                        <td>11</td>
                                        <td>13</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <th>Australia</th>
                                        <td>6</td>
                                        <td>8</td>
                                        <td>10</td>
                                        <td>12</td>
                                        <td>14</td>
                                        <td>16</td>
                                    </tr>
                                    <tr>
                                        <th>Korea</th>
                                        <td>33</td>
                                        <td>44</td>
                                        <td>55</td>
                                        <td>66</td>
                                        <td>77</td>
                                        <td>88</td>
                                    </tr>
                                    <tr>
                                        <th>China</th>
                                        <td>160/84</td>
                                        <td>165/86</td>
                                        <td>170/88</td>
                                        <td>175/90</td>
                                        <td>180/92</td>
                                        <td>185/94</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Size Chart Modal -->
@endsection

@section('script')
    <!-- Including Jquery/Javascript -->

    <!-- Elevatezoom Zoom -->
    <script src="{{ asset('assets/js/vendor/jquery.elevatezoom.js') }}"></script>
    <script>
        $(document).ready(function() {
            /* Product Zoom */
            function product_zoom() {
                $(".zoompro").elevateZoom({
                    gallery: "gallery",
                    galleryActiveClass: "active",
                    zoomWindowWidth: 300,
                    zoomWindowHeight: 100,
                    scrollZoom: false,
                    zoomType: "inner",
                    cursor: "crosshair"
                });
            }
            product_zoom();
        });
    </script>

    <!-- Photoswipe Gallery JS -->
    <script src="{{ asset('assets/js/vendor/photoswipe.min.js') }}"></script>
    <script>
        $(function() {
            var $pswp = $('.pswp')[0],
                    image = [],
                    getItems = function() {
                        var items = [];
                        $('.lightboximages a').each(function() {
                            var $href = $(this).attr('href'),
                                    $size = $(this).data('size').split('x'),
                                    item = {
                                        src: $href,
                                        w: $size[0],
                                        h: $size[1]
                                    };
                            items.push(item);
                        });
                        return items;
                    };
            var items = getItems();

            $.each(items, function(index, value) {
                image[index] = new Image();
                image[index].src = value['src'];
            });
            $('.prlightbox').on('click', function(event) {
                event.preventDefault();

                var $index = $(".active-thumb").parent().attr('data-slick-index');
                $index++;
                $index = $index - 1;

                var options = {
                    index: $index,
                    bgOpacity: 0.7,
                    showHideOpacity: true
                };
                var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
                lightBox.init();
            });
        });
    </script>
    <div class="pswp" tabindex="-1" role="dialog">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption"><div class="pswp__caption__center"></div></div>
            </div>
        </div>
    </div>
@endsection