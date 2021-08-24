@extends('layouts.main')
@section('content')
    @include('layouts.header')
    <div class="page-content">
        <!--section-->
        <div class="section mt-0">
            <div class="breadcrumbs-wrap">
                <div class="container">
                    <div class="breadcrumbs">
                        <a href="index.html">Home</a>
                        <span>Online Shop</span>
                    </div>
                </div>
            </div>
        </div>
        <!--//section-->
        <!--section-->
        <div class="section page-content-first">
            <div class="container">
                <div class="text-center mb-2  mb-md-3 mb-lg-4">
                    <h1>Online Shop</h1>
                    <div class="h-decor"></div>
                </div>
            </div>
            <div class="container mt-3 mt-lg-5">
                <div class="row">
                    <div class="col-md-4 col-lg-3 column-filters">
                        <div class="column-filters-inside">
                            <div class="side-block">
                                <h3 class="side-block-title">Categories</h3>
                                <ul class="category-list">
                                    <li><a href="#">Restoratives</a></li>
                                    <li><a href="#">Bonding agents</a></li>
                                    <li><a href="#">Dental cements</a></li>
                                    <li class="active">Impression materials</li>
                                    <li><a href="#">Preventive</a></li>
                                    <li><a href="#">Crown & Bridge</a></li>
                                    <li><a href="#">Esthetic & Cosmetic</a></li>
                                    <li><a href="#">X-Rays</a></li>
                                </ul>
                            </div>
                            <div class="side-block">
                                <h3 class="side-block-title">Price</h3>
                                <div class="range">
                                    <div id="rangeSlider1"></div>
                                    <p>Price: $<span id="number-1-2"></span> - $<span id="number-1-1"></span></p>
                                </div>
                            </div>
                            <div class="side-block">
                                <h3 class="side-block-title">Popular</h3>
                                <div class="prd-sm">
                                    <div class="prd-sm-img">
                                        <a href="shop-product.html"><img src="images/product/prd-sm-1.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="prd-sm-info">
                                        <h3><a href="shop-product.html">Active Wow Teeth Whitening Charcoal Powder</a></h3>
                                        <div class="price">$38.88</div>
                                    </div>
                                </div>
                                <div class="prd-sm">
                                    <div class="prd-sm-img">
                                        <a href="shop-product.html"><img src="images/product/prd-sm-2.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="prd-sm-info">
                                        <h3><a href="shop-product.html">Electric Toothbrush</a></h3>
                                        <div class="price">$39.97</div>
                                    </div>
                                </div>
                                <div class="prd-sm">
                                    <div class="prd-sm-img">
                                        <a href="shop-product.html"><img src="images/product/prd-sm-3.jpg" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="prd-sm-info">
                                        <h3><a href="shop-product.html">Oral B Replacement Brush Heads<br>(5 Pack)</a></h3>
                                        <div class="price">$19.99</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-9">
                        <div class="filters-row align-items-center">
                            <div class="filters-row-left"><span>Showing 1–9 of 18 results</span>
                                <div class="form-inline">
                                    <div class="select-wrapper">
                                        <select name="sorting">
                                            <option value="">Default Sorting</option>
                                            <option value="">Sort By Price</option>
                                            <option value="">Sort By Name</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="filters-row-right d-flex align-items-center">
                                <span>Pages:</span>
                                <ul class="pagination justify-content-center pl-1">
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="prd-grid">
                            <div class="prd">
                                <div class="prd-img">
                                    <a href="shop-product.html"><img src="images/product/prd-1.jpg" class="img-fluid" alt=""></a>
                                </div>
                                <div class="prd-info">
                                    <h3><a href="shop-product.html">Oral B Replacement Brush Heads (5 Pack)</a></h3>
                                    <div class="price">$39.97</div>
                                    <div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div> <a href="#" class="btn"><i class="icon-cart"></i>Add To Cart<i class="icon-cart"></i></a>
                                </div>
                            </div>
                            <div class="prd">
                                <div class="prd-img">
                                    <a href="shop-product.html"><img src="images/product/prd-2.jpg" class="img-fluid" alt=""></a>
                                </div>
                                <div class="prd-info">
                                    <h3><a href="shop-product.html">Active Wow Teeth Whitening Charcoal Powder</a></h3>
                                    <div class="price">$38.88</div>
                                    <div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
                                    <a href="#" class="btn"><i class="icon-cart"></i>Add To Cart<i class="icon-cart"></i></a>
                                </div>
                            </div>
                            <div class="prd">
                                <div class="prd-img">
                                    <a href="shop-product.html"><img src="images/product/prd-3.jpg" class="img-fluid" alt=""></a>
                                </div>
                                <div class="prd-info">
                                    <h3><a href="shop-product.html">Electric Toothbrush</a></h3>
                                    <div class="price">$49.97</div>
                                    <a href="#" class="btn"><i class="icon-cart"></i>Add To Cart<i class="icon-cart"></i></a>
                                </div>
                            </div>
                            <div class="prd">
                                <div class="prd-img">
                                    <a href="shop-product.html"><img src="images/product/prd-4.jpg" class="img-fluid" alt=""></a>
                                </div>
                                <div class="prd-info">
                                    <h3><a href="shop-product.html">GUM Special Go-betweens Proxabrush Refills</a></h3>
                                    <div class="price">$19.97</div>
                                    <a href="#" class="btn"><i class="icon-cart"></i>Add To Cart<i class="icon-cart"></i></a>
                                </div>
                            </div>
                            <div class="prd">
                                <div class="prd-img">
                                    <a href="shop-product.html"><img src="images/product/prd-5.jpg" class="img-fluid" alt=""></a>
                                </div>
                                <div class="prd-info">
                                    <h3><a href="shop-product.html">Waterpik ADA Accepted WP-660 Aquarius Water Flosser</a></h3>
                                    <div class="price">$59.98</div>
                                    <div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
                                    <a href="#" class="btn"><i class="icon-cart"></i>Add To Cart<i class="icon-cart"></i></a>
                                </div>
                            </div>
                            <div class="prd">
                                <div class="prd-img">
                                    <a href="shop-product.html"><img src="images/product/prd-6.jpg" class="img-fluid" alt=""></a>
                                </div>
                                <div class="prd-info">
                                    <h3><a href="shop-product.html">5 Pack Charcoal Toothbrush</a></h3>
                                    <div class="price">$5.26</div>
                                    <a href="#" class="btn"><i class="icon-cart"></i>Add To Cart<i class="icon-cart"></i></a>
                                </div>
                            </div>
                            <div class="prd">
                                <div class="prd-img">
                                    <a href="shop-product.html"><img src="images/product/prd-7.jpg" class="img-fluid" alt=""></a>
                                </div>
                                <div class="prd-info">
                                    <h3><a href="shop-product.html">Oral-B  Glide Pro-Health Comfort Plus Mint Flavor Floss</a></h3>
                                    <div class="price">$5.79</div>
                                    <a href="#" class="btn"><i class="icon-cart"></i>Add To Cart<i class="icon-cart"></i></a>
                                </div>
                            </div>
                            <div class="prd">
                                <div class="prd-img">
                                    <a href="shop-product.html"><img src="images/product/prd-8.jpg" class="img-fluid" alt=""></a>
                                </div>
                                <div class="prd-info">
                                    <h3><a href="shop-product.html">Cool Mint Listerine Antiseptic Mouthwash</a></h3>
                                    <div class="price">$5.98</div>
                                    <div class="star-rating"><span class="txt-gradient"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
                                    <a href="#" class="btn"><i class="icon-cart"></i>Add To Cart<i class="icon-cart"></i></a>
                                </div>
                            </div>
                            <div class="prd">
                                <div class="prd-img">
                                    <a href="shop-product.html"><img src="images/product/prd-9.jpg" class="img-fluid" alt=""></a>
                                </div>
                                <div class="prd-info">
                                    <h3><a href="shop-product.html">5 Pack Charcoal Toothbrush</a></h3>
                                    <div class="price">$11.62</div>
                                    <a href="#" class="btn"><i class="icon-cart"></i>Add To Cart<i class="icon-cart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <ul class="mt-5 pagination justify-content-center">
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><span class="page-link">...</span></li>
                            <li class="page-item"><a class="page-link" href="#">15</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
