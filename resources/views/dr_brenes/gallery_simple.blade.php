@extends('layouts.main')
@section('content')
    @include('layouts.header-main')
    <div class="page-content">
        <!--section-->
        <div class="section mt-0">
            <div class="breadcrumbs-wrap">
                <div class="container">
                    <div class="breadcrumbs">
                        <a href="index.html">Home</a>
                        <span>Smiles Gallery</span>
                    </div>
                </div>
            </div>
        </div>
        <!--//section-->
        <!--section-->
        <div class="section page-content-first">
            <div class="container">
                <div class="text-center mb-2  mb-md-3 mb-lg-4">
                    <div class="h-sub theme-color">Our Clients Stories</div>
                    <h1>Smiles Gallery</h1>
                    <div class="h-decor"></div>
                </div>
            </div>
            <div class="container">
                <div class="text-center mb-3 mb-md-4 max-900">
                    <p>We love to see our patients smile! Here are some of our best before-and-after pictures,<br>all in one fantastic Smile Gallery</p>
                </div>
                <div class="filters-by-category mb-2 mb-lg-4">
                    <ul class="option-set justify-content-center" data-option-key="filter">
                        <li><a href="#filter" data-option-value="*" class="selected">All</a></li>
                        <li><a href="#filter" data-option-value=".category1">Crowns</a></li>
                        <li><a href="#filter" data-option-value=".category2">Bridges</a></li>
                        <li><a href="#filter" data-option-value=".category3">Dental Implants</a></li>
                        <li><a href="#filter" data-option-value=".category4">Cosmetic Filling</a></li>
                        <li><a href="#filter" data-option-value=".category5">Lumineers</a></li>
                        <li><a href="#filter" data-option-value=".category6">Dentures</a></li>
                        <li><a href="#filter" data-option-value=".category7">Porcelain Veneers</a></li>
                        <li><a href="#filter" data-option-value=".category8">Diamond Polish</a></li>
                    </ul>
                </div>
                <div class="gallery-wrap">
                    <div class="loading-content">
                        <div class="inner-circles-loader"></div>
                    </div>
                    <div class="gallery-smiles gallery-isotope" id="gallery">
                        <div class="gallery-item category2 category7">
                            <img src="images/content/gallery/smile-01.jpg" alt="" />
                            <div class="after-label">After</div>
                            <div class="before-label">Before</div>
                            <div class="gallery-caption">
                                <h5>Braces</h5>
                                <p>This patients' teeth were corrected and straightened with almost invisible clear aligners.</p>
                                <p>Dentist: <b>Dr. Gerald Gleaves</b></p>
                            </div>
                        </div>
                        <div class="gallery-item category1 category5 category8">
                            <img src="images/content/gallery/smile-02.jpg" alt="" />
                            <div class="after-label">After</div>
                            <div class="before-label">Before</div>
                            <div class="gallery-caption">
                                <h5>Hygiene Therapy</h5>
                                <p>Our 'stain removal' treatment removed years of discolouration from tea, coffee and tobacco.</p>
                                <p>Dentist: <b>Dr. Pamela Knaack</b></p>
                            </div>
                        </div>
                        <div class="gallery-item category2 category4 category3">
                            <img src="images/content/gallery/smile-03.jpg" alt="" />
                            <div class="after-label">After</div>
                            <div class="before-label">Before</div>
                            <div class="gallery-caption">
                                <h5>Braces</h5>
                                <p>This patients' teeth were corrected and straightened with almost invisible clear aligners.</p>
                                <p>Dentist: <b>Dr. Gerald Gleaves</b></p>
                            </div>

                        </div>
                        <div class="gallery-item category4 category8 category6">
                            <img src="images/content/gallery/smile-04.jpg" alt="" />
                            <div class="after-label">After</div>
                            <div class="before-label">Before</div>
                            <div class="gallery-caption">
                                <h5>Hygiene Therapy</h5>
                                <p>Our 'stain removal' treatment removed years of discolouration from tea, coffee and tobacco.</p>
                                <p>Dentist: <b>Dr. Pamela Knaack</b></p>
                            </div>
                        </div>
                        <div class="gallery-item category3 category7">
                            <img src="images/content/gallery/smile-05.jpg" alt="" />
                            <div class="after-label">After</div>
                            <div class="before-label">Before</div>
                            <div class="gallery-caption">
                                <h5>Braces</h5>
                                <p>This patients' teeth were corrected and straightened with almost invisible clear aligners.</p>
                                <p>Dentist: <b>Dr. Gerald Gleaves</b></p>
                            </div>
                        </div>
                        <div class="gallery-item category4 category7 category3">
                            <img src="images/content/gallery/smile-06.jpg" alt="" />
                            <div class="after-label">After</div>
                            <div class="before-label">Before</div>
                            <div class="gallery-caption">
                                <h5>Hygiene Therapy</h5>
                                <p>Our 'stain removal' treatment removed years of discolouration from tea, coffee and tobacco.</p>
                                <p>Dentist: <b>Dr. Pamela Knaack</b></p>
                            </div>
                        </div>
                        <div class="gallery-item category1 category8">
                            <img src="images/content/gallery/smile-07.jpg" alt="" />
                            <div class="after-label">After</div>
                            <div class="before-label">Before</div>
                            <div class="gallery-caption">
                                <h5>Braces</h5>
                                <p>This patients' teeth were corrected and straightened with almost invisible clear aligners.</p>
                                <p>Dentist: <b>Dr. Gerald Gleaves</b></p>
                            </div>
                        </div>
                        <div class="gallery-item category2 category6">
                            <img src="images/content/gallery/smile-08.jpg" alt="" />
                            <div class="after-label">After</div>
                            <div class="before-label">Before</div>
                            <div class="gallery-caption">
                                <h5>Hygiene Therapy</h5>
                                <p>Our 'stain removal' treatment removed years of discolouration from tea, coffee and tobacco.</p>
                                <p>Dentist: <b>Dr. Pamela Knaack</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--//section-->
        <!--section call us-->
        <div class="section mt-5">
            <div class="container">
                <div class="banner-call">
                    <div class="row no-gutters">
                        <div class="col-md-7 d-flex align-items-center">
                            <div class="text-center w-100">
                                <h2>Want the Same <span class="theme-color">Wonderful Smile?</span></h2>
                                <div class="h-decor"></div>
                                <p class="mt-sm-1 mt-lg-4 text-left text-sm-center">We provide advanced, trusted dental care delivered by a dedicated team in our modern practice.</p>
                                <div class="mt-2 mt-lg-4 text-center">
                                    <a href="#" class="banner-call-phone"><i class="icon-telephone"></i>1-800-267-0000</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-lg-5 mt-3 mt-md-0 text-center text-lg-left">
                            <img src="images/content/banner-callus-2.jpg" alt="" class="shift-right">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--section call us-->
    </div>
@endsection

@push('scripts')
    <script src="{{asset('vendor/twentytwenty/jquery.event.move.js')}}"></script>
    <script src="{{asset('vendor/twentytwenty/jquery.twentytwenty.js')}}"></script>
    <script src="{{asset('vendor/isotope/isotope.pkgd.min.js')}}"></script>
@endpush
