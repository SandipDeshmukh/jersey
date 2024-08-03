@extends('layouts.app')
@section('content')
    <!-- Body Container -->
    <div id="page-content">
        <!--Page Header-->
        <div class="page-header text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                        <div class="page-title"><h1>{{ $category }}</h1></div>
                        <!--Breadcrumbs-->
                        <div class="breadcrumbs"><a href="{{ route('home') }}" title="Back to the home page">Home</a><span class="title"><i class="icon anm anm-angle-right-l"></i>Shop</span><span class="main-title"><i class="icon anm anm-angle-right-l"></i>{{ $category }}</span></div>
                        <!--End Breadcrumbs-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Header-->

        <!--Main Content-->
        <div class="container">
            <!--Toolbar-->
            <div class="toolbar toolbar-wrapper shop-toolbar">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 text-left product-count order-0 order-md-1 mb-3 mb-sm-0">
                        <span class="toolbar-product-count">Showing: 15 products</span>
                    </div>
                    <div class="col-8 col-sm-6 col-md-6 col-lg-6 text-right filters-toolbar-item d-flex justify-content-end order-2 order-sm-2">
                        <div class="filters-item d-flex align-items-center" x-data="updateURL()">
                            <label for="ShowBy" class="mb-0 me-2 text-nowrap d-none d-sm-inline-flex">Show:</label>
                            <select name="ShowBy" id="ShowBy" class="filters-toolbar-show" x-model="per_page" @change="updateURL()">
                                <option value="10" @if($per_page == 10) selected @endif>10</option>
                                <option value="15" @if($per_page == 15) selected="selected" @endif>15</option>
                                <option value="20" @if($per_page == 20) selected @endif>20</option>
                                <option @if($per_page == 25) selected @endif>25</option>
                                <option @if($per_page == 30) selected @endif>30</option>
                            </select>
                        </div>
                        <div class="filters-item d-flex align-items-center ms-2 ms-lg-3" x-data="updateURL()">
                            <label for="SortBy" class="mb-0 me-2 text-nowrap d-none">Sort by:</label>
                            <select name="SortBy" id="SortBy" class="filters-toolbar-sort" x-model="sort_by" @change="updateURL()">
                                <option value="featured" selected="selected">Featured</option>
                                <option value="best-selling">Best selling</option>
                                <option value="title-ascending">Alphabetically, A-Z</option>
                                <option value="title-descending">Alphabetically, Z-A</option>
                                <option value="price-ascending">Price, low to high</option>
                                <option value="price-descending">Price, high to low</option>
                                <option value="created-ascending">Date, old to new</option>
                                <option value="created-descending">Date, new to old</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Toolbar-->

            <div class="row">
                <!--Products-->
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                    <!--Product Grid-->
                    <div class="grid-products grid-view-items">
                        <div class="row col-row product-options row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-3 row-cols-2">
                            @foreach($products as $product)
                            <div class="item col-item">
                                <div class="product-box">
                                    <!-- Start Product Image -->
                                    <div class="product-image">
                                        <!-- Start Product Image -->
                                        <a href="{{ route('product', $product->slug) }}" class="product-img rounded-0">
                                            <!-- Image -->
                                            <img class="primary rounded-0 blur-up lazyload" data-src="{{ asset('assets/images/products/product1.jpg') }}" src="{{ asset('assets/images/products/product1.jpg') }}" alt="Product" title="Product" width="625" height="808" />
                                            <!-- End Image -->
                                            <!-- Hover Image -->
                                            <img class="hover rounded-0 blur-up lazyload" data-src="{{ asset('assets/images/products/product1.jpg') }}" src="{{ asset('assets/images/products/product1.jpg') }}" alt="Product" title="Product" width="625" height="808" />
                                            <!-- End Hover Image -->
                                        </a>
                                        <!-- End Product Image -->
                                    </div>
                                    <!-- End Product Image -->
                                    <!-- Start Product Details -->
                                    <div class="product-details text-left">
                                        <!-- Product Name -->
                                        <div class="product-name">
                                            <a href="{{ route('product', $product->slug) }}">{{ $product->name }}</a>
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

                        <!-- Pagination -->

                        <nav class="clearfix pagination-bottom">
                            {{ $products->links('vendor.pagination.bootstrap-4') }}
                        </nav>
                        <!-- End Pagination -->
                    </div>
                    <!--End Product Grid-->
                </div>
                <!--End Products-->
            </div>
        </div>
        <!--End Main Content-->
    </div>
    <!-- End Body Container -->
@endsection

@section('script')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('updateURL', () => ({
                per_page: {{ $per_page }},
                sort_by: "{{ $sort_by }}",
                updateURL() {
                    const url = new URL(window.location.href);
                    url.searchParams.set('per_page', this.per_page);
                    url.searchParams.set('sort_by', this.sort_by);
                    window.location.href = url.toString();
                }
            }))
        })
    </script>
@endsection
