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
                    <span>Our Mission</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section page-content-first">
        <div class="container">
            <div class="text-center mb-2  mb-md-3 mb-lg-4">
                <div class="h-sub theme-color">Our dentists working to your smile</div>
                <h1>Our Mission Statement</h1>
                <div class="h-decor"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left pr-md-4">
                    <img src="images/content/beautiful-girl-sitting-dentist-s-office (3).jpg" class="w-100" alt="">
                    <div class="row mt-3">
                        <div class="col-6">
                            <img src="images/content/about-03.jpg" class="w-100" alt="">
                        </div>
                        <div class="col-6">
                            <img src="images/content/about-04.jpg" class="w-100" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-3 mt-lg-0">
                    <p>We pledge to provide the very best of dental care, for the lowest possible cost, without cutting corners or taking shortcuts. We pledge to insure a level of excellence in every facet of your care. We will answer every question with honesty and integrity until your knowledge and comfort sets you at ease. We pledge that when you’re ready to decide what’s next, that you are making a fully informed decision.
                        <br>
                        Lastly, we pledge, that during your treatment and when you finish your treatment, whatever that is, you’re family. If you need something; we’re family, if you want to refer someone; we’re family, if your local dentist needs your records; were family. Simply put, our mission is you!
                    </p>
                    <p>Dr. Brenes says <span style="color: #23B479;"> “Our patients walk in wanting to wear the most important thing they have; their Smile!
						Our job doesn’t end until till they do!”</span></p>

                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section">
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-xl-6 bg-grey">
                    <div class="max-670 mx-lg-auto px-15">
                        <div class="title-wrap">
                            <h2 class="h1">Your <span class="theme-color">Greatest Concerns Addressed </span></h2>
                        </div>
                        <div class="mt-lg-5"></div>
                        <div class="row">
                            <ul class="marker-list-md">
                                <li class="d-flex">
                                    <div class="col-5">Will I be safe in Costa Rica?</div>
                                    <div class="col-7">Tourism is #1 for our Economy – Safety is why</div>
                                </li>
                                <li class="d-flex">
                                    <div class="col-5">Quality of the Dentists?</div>
                                    <div class="col-7">Trained in Costa Rica, The States & Germany</div>
                                </li>
                                <li class="d-flex">
                                    <div class="col-5">Will I get an Estimate?</div>
                                    <div class="col-7">Send us the X-rays and we’ll estimate before you come</div>
                                </li>
                                <li class="d-flex">
                                    <div class="col-5">What happens if I need further X-rays?</div>
                                    <div class="col-7">We’re fully equipped including X-rays</div>
                                </li>
                                <li class="d-flex">
                                    <div class="col-5">What if I don’t speak Spanish?</div>
                                    <div class="col-7">Every Dentist, Doctor, Hotel or Tour speaks English</div>
                                </li>
                                <li class="d-flex">
                                    <div class="col-5">All Services needed?</div>
                                    <div class="col-7">Full mouth, Implants, Grafting, Crowns, even Fillings</div>
                                </li>
                                <li class="d-flex">
                                    <div class="col-5">Is Costa Rica Medically Safe?</div>
                                    <div class="col-7">US style Hospitals and a Dedicated Physician on staff</div>
                                </li>
                                <li class="d-flex">
                                    <div class="col-5">What can I expect while not in the chair?</div>
                                    <div class="col-7">We help with Air, Lodging, Excursions & Car Rentals</div>
                                </li>
                                <li class="d-flex">
                                    <div class="col-5">How do I start the process?</div>
                                    <div class="col-7">Fill out the <a href="{{route('contact')}}">“Contact Us”</a> form or call us anytime!</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 banner-left bg-full" style="background-image: url(images/content/banner-right.jpg); background-size: cover;"></div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section">
        <div class="container">
            <div class="title-wrap text-center">
                <div class="h-sub theme-color">Motivation is easy</div>
                <h2 class="h1">Our Core Values</h2>
                <div class="h-decor"></div>
            </div>
            <div class="row js-icn-carousel icn-carousel flex-column flex-sm-row text-center text-sm-left" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}]}'>
                <div class="col-md">
                    <div class="icn-text">
                        <div class="icn-text-simple"><i class="icon-innovation"></i></div>
                        <div>
                            <h5 class="icn-text-title">Innovation</h5>
                            <p>Embrace change, encourage invention and continually remain at the forefront of advances in oral health for the good of our patients</p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="icn-text">
                        <div class="icn-text-simple"><i class="icon-compassion"></i></div>
                        <div>
                            <h5 class="icn-text-title">Compassion</h5>
                            <p>Demonstrate caring and sensitivity for the diverse backgrounds of our patients and colleagues and generosity in our communities</p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="icn-text">
                        <div class="icn-text-simple"><i class="icon-integrity"></i></div>
                        <div>
                            <h5 class="icn-text-title">Integrity</h5>
                            <p>Adhere to high ethical and professional standards, demonstrating commitment to our responsibilities with trust, honesty and respect for all</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section">
        <div class="container-fluid px-0">
            <div class="banner-center bg-cover" style="background-image: url(images/content/banner-center.jpg)">
                <div class="banner-center-caption text-center">
                    <div class="banner-center-text1">Get the Smile You've Always Wanted!</div>
                    <div class="banner-center-text2">YOUR TRUST coupled with DECADES OF TRAINING all at REASONABLE FEES</div>
                    <a href="#" class="btn btn-white mt-5" data-toggle="modal" data-target="#modalBookingForm"><i class="icon-right-arrow"></i><span>Request an Appointment</span><i class="icon-right-arrow"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--section-->
    <!--section-->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="title-wrap">
                        <h2 class="h1">Our Office </h2>
                        <div class="h-decor"></div>
                    </div>
                    <p>Our dental office in is a state of the art dental facility equipped with the newest technology, capable of handling all of your dental needs. All of our operatories are equipped with intraoral cameras that are able to show us, and you, the precise treatment you might attain on a television screen.</p>
                    <div class="mt-4"></div>
                    <h3>Amenities</h3>
                    <div class="mt-lg-4"></div>
                    <ul class="marker-list-md">
                        <li>TV’s in each treatment room</li>
                        <li>Complimentary coffee, Juice</li>
                        <li>Wireless Internet</li>
                        <li>Warm lavender towels</li>
                    </ul>
                </div>
                <div class="col-lg-8 mt-4 mt-lg-0">
                    <div class="slider-gallery">
                        <ul class="slider-gallery-main list-unstyled js-slider-gallery-main">
                            <li><img src="images/content/slider-gallery-00.jpg" alt=""></li>
                            <li><img src="images/content/slider-gallery-01.jpg" alt=""></li>
                            <li><img src="images/content/slider-gallery-02.jpg" alt=""></li>
                            <li><img src="images/content/slider-gallery-03.jpg" alt=""></li>
                            <li><img src="images/content/slider-gallery-04.jpg" alt=""></li>
                            <li><img src="images/content/slider-gallery-05.jpg" alt=""></li>
                        </ul>
                        <ul class="slider-gallery-thumbs list-unstyled js-slider-gallery-thumbs">
                            <li><img src="images/content/slider-gallery-00-sm.jpg" alt=""></li>
                            <li><img src="images/content/slider-gallery-01-sm.jpg" alt=""></li>
                            <li><img src="images/content/slider-gallery-02-sm.jpg" alt=""></li>
                            <li><img src="images/content/slider-gallery-03-sm.jpg" alt=""></li>
                            <li><img src="images/content/slider-gallery-04-sm.jpg" alt=""></li>
                            <li><img src="images/content/slider-gallery-05-sm.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
</div>
@endsection
