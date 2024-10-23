@extends('layouts.app')
@section('content')
<!-- Body Container -->
<div id="page-content">
    <!--Page Header-->
    <div class="page-header text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                    <div class="page-title">
                        <h1>Your Shopping Cart Style1</h1>
                    </div>
                    <!--Breadcrumbs-->
                    <div class="breadcrumbs"><a href="index.html" title="Back to the home page">Home</a><span class="main-title"><i class="icon anm anm-angle-right-l"></i>Your Shopping Cart Style1</span></div>
                    <!--End Breadcrumbs-->
                </div>
            </div>
        </div>
    </div>
    <!--End Page Header-->

    <!--Main Content-->
    <div class="container">
        <div class="row">
            <!--Cart Content-->
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 main-col">
                <div class="alert alert-success py-2 alert-dismissible fade show cart-alert" role="alert">
                    <i class="align-middle icon anm anm-truck icon-large me-2"></i><strong class="text-uppercase">Congratulations!</strong> You've got free shipping!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <!--End Alert msg-->

                <!--Cart Form-->
                <form action="#" method="post" class="cart-table table-bottom-brd">
                    <table class="table align-middle" x-data="cartData()" x-init="initCart()">
                        <thead class="cart-row cart-header small-hide position-relative">
                            <tr>
                                <th class="action">&nbsp;</th>
                                <th colspan="2" class="text-start">Product</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-center">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            // Initialize values
                            $subtotal = 0;
                            @endphp
                            @foreach ($cart as $item)
                            @php
                            $product = \App\Models\Product::find($item['attributes']['product_id']);
                            @endphp
                            <tr class="cart-row cart-flex position-relative" x-bind:data-id="{{ $item['id'] }}">
                                <td class="cart-delete text-center small-hide">
                                    <a href="#" class="cart-remove remove-icon position-static"
                                        x-on:click.prevent="removeFromCart('{{ $item['id'] }}')"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Remove from Cart">
                                        <i class="icon anm anm-times-r"></i>
                                    </a>
                                </td>
                                <td class="cart-image cart-flex-item">
                                    <a href="product-layout1.html"><img class="cart-image rounded-0 blur-up lazyload" data-src="assets/images/products/120x170.jpg" src="assets/images/products/120x170.jpg" alt="Sunset Sleep Scarf Top" width="120" height="170" /></a>
                                </td>
                                <td class="cart-meta small-text-left cart-flex-item">
                                    <div class="list-view-item-title">
                                        <a href="{{ route('product',  $product->slug) }}">{{ $product->name }}</a>
                                    </div>
                                    <div class="cart-meta-text">
                                        Color: Black<br>Size: {{ $item['attributes']['size'] }}<br>Qty: {{ $item['quantity'] }}
                                    </div>
                                </td>
                                <td class="cart-price cart-flex-item text-center small-hide">
                                    <span class="money">{{ $product->price }}</span>
                                </td>
                                <td class="cart-update-wrapper cart-flex-item text-end text-md-center">
                                    <div class="cart-qty d-flex justify-content-end justify-content-md-center">
                                        <div class="qtyField">
                                            <a class="qtyBtn minus" href="#;"><i class="icon anm anm-minus-r"></i></a>
                                            <input class="cart-qty-input qty" type="text" name="updates[]" value="{{ $item['quantity'] }}" pattern="[0-9]*"  />
                                            <a class="qtyBtn plus" href="#;"><i class="icon anm anm-plus-r"></i></a>
                                        </div>
                                    </div>
                                    <a href="#" x-on:click.prevent="removeFromCart('{{ $item['id'] }}')"
                                        class="removeMb d-md-none d-inline-block text-decoration-underline mt-2 me-3">Remove</a>
                                </td>
                                <td class="cart-price cart-flex-item text-center small-hide">
                                    <span class="money fw-500">{{ $product->price * $item['quantity'] }}</span>
                                </td>
                            </tr>
                            @php
                                // Loop through the cart to calculate subtotal
                                $subtotal += $product->price * $item['quantity'];
                            @endphp
                            @endforeach
                            @php
                                $taxRate = 0.15; // 15% tax

                                // Calculate tax
                                $tax = $subtotal * $taxRate;

                                // Calculate the total
                                $total = $subtotal + $tax;
                            @endphp
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3" class="text-start"><a href="{{ route('shop') }}" class="btn btn-outline-secondary btn-sm cart-continue"><i class="icon anm anm-angle-left-r me-2 d-none"></i> Continue shopping</a></td>
                                <td colspan="3" class="text-end">
                                    <button type="button" name="clear" class="btn btn-outline-secondary btn-sm small-hide" x-on:click.prevent="clearCart()"><i class="icon anm anm-times-r me-2 d-none"></i> Clear Shoping Cart</button>
                                    <button type="button" name="update" class="btn btn-secondary btn-sm cart-continue ms-2" x-on:click.prevent="updateCart()"><i class="icon anm anm-sync-ar me-2 d-none"></i> Update Cart</button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </form>
                <!--End Cart Form-->
            </div>
            <!--End Cart Content-->

            <!--Cart Sidebar-->
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 cart-footer">
                <div class="cart-info sidebar-sticky">
                    <div class="cart-order-detail cart-col">
                        <div class="row g-0 border-bottom pb-2">
                            <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Subtotal</strong></span>
                            <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end">
                                <span class="money">${{ number_format($subtotal, 2) }}</span>
                            </span>
                        </div>
                        <div class="row g-0 border-bottom py-2">
                            <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Tax (15%)</strong></span>
                            <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end">
                                <span class="money">${{ number_format($tax, 2) }}</span>
                            </span>
                        </div>
                        <div class="row g-0 border-bottom py-2">
                            <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Shipping</strong></span>
                            <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end">
                                <span class="money">Free shipping</span>
                            </span>
                        </div>
                        <div class="row g-0 pt-2">
                            <span class="col-6 col-sm-6 cart-subtotal-title fs-6"><strong>Total</strong></span>
                            <span class="col-6 col-sm-6 cart-subtotal-title fs-5 cart-subtotal text-end text-primary">
                                <b class="money">${{ number_format($total, 2) }}</b>
                            </span>
                        </div>

                        <p class="cart-shipping mt-3">Shipping &amp; taxes calculated at checkout</p>
                        <p class="cart-shipping fst-normal freeShipclaim"><i class="me-2 align-middle icon anm anm-truck-l"></i><b>FREE SHIPPING</b> ELIGIBLE</p>
                        <div class="customCheckbox cart-tearm">
                            <input type="checkbox" value="allen-vela" id="cart-tearm">
                            <label for="cart-tearm">I agree with the terms and conditions</label>
                        </div>
                        <a href="{{ route('checkout') }}" id="cartCheckout" class="btn btn-lg my-4 checkout w-100">Proceed To Checkout</a>
                        <div class="paymnet-img text-center"><img src="assets/images/icons/safepayment.png" alt="Payment" width="299" height="28" /></div>
                    </div>
                </div>
            </div>
            <!--End Cart Sidebar-->
        </div>
    </div>
    <!--End Main Content-->

    <!--Related Products-->
    <section class="section product-slider pb-0 d-none">
        <div class="container">
            <div class="section-header">
                <h2>You may also like</h2>
            </div>
            <!--Product Grid-->
            <div class="product-slider-4items gp10 arwOut5 grid-products">
                <div class="item col-item">
                    <div class="product-box">
                        <!-- Start Product Image -->
                        <div class="product-image">
                            <!-- Start Product Image -->
                            <a href="product-layout1.html" class="product-img rounded-0"><img class="rounded-0 blur-up lazyload" src="assets/images/products/product1.jpg" alt="Product" title="Product" width="625" height="808" /></a>
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
                                <img class="primary rounded-0 blur-up lazyload" data-src="assets/images/products/product1.jpg" src="assets/images/products/product1.jpg" alt="Product" title="Product" width="625" height="808" />
                                <!-- End Image -->
                                <!-- Hover Image -->
                                <img class="hover rounded-0 blur-up lazyload" data-src="assets/images/products/product1-1.jpg" src="assets/images/products/product1-1.jpg" alt="Product" title="Product" width="625" height="808" />
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
                                <img class="primary rounded-0 blur-up lazyload" data-src="assets/images/products/product1.jpg" src="assets/images/products/product1.jpg" alt="Product" title="Product" width="625" height="808" />
                                <!-- End Image -->
                                <!-- Hover Image -->
                                <img class="hover rounded-0 blur-up lazyload" data-src="assets/images/products/product1-1.jpg" src="assets/images/products/product1-1.jpg" alt="Product" title="Product" width="625" height="808" />
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
                                <img class="primary rounded-0 blur-up lazyload" data-src="assets/images/products/product1.jpg" src="assets/images/products/product1.jpg" alt="Product" title="Product" width="625" height="808" />
                                <!-- End Image -->
                                <!-- Hover Image -->
                                <img class="hover rounded-0 blur-up lazyload" data-src="assets/images/products/product1-1.jpg" src="assets/images/products/product1-1.jpg" alt="Product" title="Product" width="625" height="808" />
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
                                <img class="primary rounded-0 blur-up lazyload" data-src="assets/images/products/product1.jpg" src="assets/images/products/product1.jpg" alt="Product" title="Product" width="625" height="808" />
                                <!-- End Image -->
                                <!-- Hover Image -->
                                <img class="hover rounded-0 blur-up lazyload" data-src="assets/images/products/product1-1.jpg" src="assets/images/products/product1-1.jpg" alt="Product" title="Product" width="625" height="808" />
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
                                <a href="product-layout1.html">Denim Women Shorts</a>
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

<script>
    function cartData() {
        return {
            items: [], // Pass the cart items from Laravel
            initCart() {
                console.log('Cart initialized');
            },
            removeFromCart(cartItemId) {
                // Confirm removal
                if (!confirm('Are you sure you want to remove this item?')) {
                    return;
                }

                // Call API to remove the item from the cart
                fetch('{{ route("cart.remove") }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}', // Include CSRF token for security
                        },
                        body: JSON.stringify({
                            cartItemId: cartItemId
                        }),
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Update the items array after removal
                            this.items = this.items.filter(item => item.id !== cartItemId);

                            // Remove the item row from the DOM
                            const itemRow = document.querySelector(`[x-bind\\:data-id="${cartItemId}"]`);
                            if (itemRow) {
                                itemRow.remove();
                            }
                            fetch('/get-count')
                                .then(response => response.json())
                                .then(data => {
                                    window.dispatchEvent(new CustomEvent('update-count', {
                                        detail: {
                                            count: data.count
                                        }
                                    }));
                                });
                        } else {
                            console.error('Error removing item from cart:', data.error);
                        }
                    })
                    .catch(error => console.error('Error:', error));
            },
            clearCart() {
                // Confirm clearing the cart
                if (!confirm('Are you sure you want to clear the cart?')) {
                    return;
                }

                // Call API to clear the cart
                fetch('{{ route("cart.clear") }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}', // Include CSRF token for security
                        },
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Update the items array after clearing
                            this.items = [];

                            // Remove all item rows from the DOM
                            const itemRows = document.querySelectorAll('.cart-row');
                            itemRows.forEach(itemRow => itemRow.remove());
                            fetch('/get-count')
                                .then(response => response.json())
                                .then(data => {
                                    window.dispatchEvent(new CustomEvent('update-count', {
                                        detail: {
                                            count: data.count
                                        }
                                    }));
                                })
                        } else {
                            console.error('Error clearing the cart:', data.error);
                        }
                    })
                    .catch(error => console.error('Error:', error))
                    .finally(() => window.location.reload());

            },
            updateCart() {
                const updatedItems = [];
                
                // Loop through the items and get the updated quantities
                document.querySelectorAll('.cart-qty-input').forEach((input, index) => {
                    const itemId = input.closest('tr').getAttribute('x-bind:data-id');
                    const quantity = input.value;

                    updatedItems.push({
                        id: itemId,
                        quantity: quantity
                    });
                });

                // Send the updated quantities to the server
                fetch('{{ route("cart.update") }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                        body: JSON.stringify({
                            items: updatedItems
                        }),
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Reload or update the cart UI based on the new cart data
                            window.location.reload();
                        } else {
                            console.error('Error updating cart:', data.error);
                        }
                    })
                    .catch(error => console.error('Error:', error));
            },
        };
    }
</script>
@endsection