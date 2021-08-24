<header class="header">
    <div class="header-quickLinks js-header-quickLinks d-lg-none">
        <div class="quickLinks-top js-quickLinks-top"></div>
        <div class="js-quickLinks-wrap-m">
        </div>
    </div>
    <div class="header-topline d-none d-lg-flex">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-auto d-flex align-items-center">
                    <div class="header-phone"><i class="icon-telephone"></i><a href="tel:1-847-555-5555">1-800-267-0000</a></div>
                    <div class="header-info"><i class="icon-placeholder2"></i>1560 Holden Street San Diego, CA 92139</div>
                    <div class="header-info"><i class="icon-black-envelope"></i><a href="mailto:info@dentco.net">info@dentco.net</a></div>
                </div>
                <div class="col-auto ml-auto d-flex align-items-center">
						<span class="header-social">
							<a href="#" class="hovicon"><i class="icon-facebook-logo-circle"></i></a>
							<a href="#" class="hovicon"><i class="icon-twitter-logo-circle"></i></a>
							<a href="#" class="hovicon"><i class="icon-google-plus-circle"></i></a>
						</span>
                </div>
            </div>
        </div>
    </div>
    <div class="header-content">
        <div class="container">
            <div class="row align-items-lg-center">
                <button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNavDropdown">
                    <span class="icon-menu"></span>
                </button>
                <div class="col-lg-auto col-lg-2 d-flex align-items-lg-center">
                    <a href="{{route('index')}}" class="header-logo"><img src="{{asset('images/content/logo.png')}}" alt="" class="img-fluid"></a>
                </div>
                <div class="col-lg ml-auto header-nav-wrap">
                    <div class="header-nav js-header-nav">
                        <nav class="navbar navbar-expand-lg btco-hover-menu">
                            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{asset('our_mission')}}">Our Mission</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('services')}}" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{route('services')}}">All Services</a></li>
                                            <li><a class="dropdown-item" href="{{route('service_page')}}">Service Page</a></li>
                                            <li><a class="dropdown-item" href="{{route('prices')}}">Prices</a></li>
                                            <li><a class="dropdown-item" href="{{route('shop_listing')}}">Online Shop</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('why_dr_brenes')}}" class="nav-link dropdown-toggle" data-toggle="dropdown">Why Dr. Brenes</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{route('brenes_gallery')}}">Creative Gallery</a></li>
                                            <li><a class="dropdown-item" href="{{route('brenes_gallery_simple')}}">Simple Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('our_specialist')}}" class="nav-link dropdown-toggle" data-toggle="dropdown">Our Specialists</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{route('our_specialist')}}">All Specialists</a></li>
                                            <li><a class="dropdown-item" href="{{route('doctor_page')}}">Doctor Page</a></li>
                                            <li><a class="dropdown-item" href="{{route('schedule')}}">Schedule Table</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('testimonials')}}">Testimonials</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="{{route('blog')}}" class="nav-link dropdown-toggle" data-toggle="dropdown">MD in Office</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{route('blog')}}">Blog Posts</a></li>
                                            <li><a class="dropdown-item" href="{{route('blog_grid')}}">Blog Grid Posts</a></li>
                                            <li><a class="dropdown-item" href="{{route('blog_post_page')}}">Blog Single Post</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item ">
                                        <a href="#" class="nav-link"> Excursions</a>

                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('contact')}}">Contacts</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="header-search">
                        <form action="#" class="form-inline">
                            <i class="icon-search"></i>
                            <input type="text" placeholder="Search">
                            <button type="submit"><i class="icon-search"></i></button>
                        </form>
                    </div>
                    <!--<div class="header-cart cart-toggler">
                        <a href="#" class="icon icon-cart"></a>
                        <span class="badge">2</span>
                        <div class="header-cart-dropdown">
                            <div class="prd-sm">
                                <div class="prd-sm-img">
                                    <a href="shop-product.html"><img src="images/product/prd-sm-1.jpg" class="img-fluid" alt=""></a>
                                </div>
                                <div class="prd-sm-info">
                                    <h3><a href="shop-product.html">Active Wow Teeth Whitening Charcoal Powder</a></h3>
                                    <div class="price">$38.88</div>
                                </div>
                                <div class="prd-sm-delete"><i class="icon-close"></i></div>
                            </div>
                            <div class="prd-sm">
                                <div class="prd-sm-img">
                                    <a href="shop-product.html"><img src="images/product/prd-sm-2.jpg" class="img-fluid" alt=""></a>
                                </div>
                                <div class="prd-sm-info">
                                    <h3><a href="shop-product.html">Electric Toothbrush</a></h3>
                                    <div class="price">$39.97</div>
                                </div>
                                <div class="prd-sm-delete"><i class="icon-close"></i></div>
                            </div>
                            <div class="header-cart-total">
                                <div class="float-left">Total:</div>
                                <div class="float-right">$78.85</div>
                            </div>
                            <a href="#" class="btn btn-sm btn-hover-fill"><span>CheckOut</span></a>
                        </div>
                    </div>-->
                    <!--<div class="header-lang lang-toggler">
                        <a href="#" class="icon icon-globe1"></a>
                        <div class="header-lang-dropdown">
                            <ul>
                                <li><a href="#"><span class="header-lang-flag"><img src="images/flag/flag_en.png" alt=""></span><span>English</span></a></li>
                                <li><a href="#"><span class="header-lang-flag"><img src="images/flag/flag_fr.png" alt=""></span><span>French</span></a></li>
                                <li><a href="#"><span class="header-lang-flag"><img src="images/flag/flag_de.png" alt=""></span><span>Denmark</span></a></li>
                                <li><a href="#"><span class="header-lang-flag"><img src="images/flag/flag_ru.png" alt=""></span><span>Russian</span></a></li>
                            </ul>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</header>
