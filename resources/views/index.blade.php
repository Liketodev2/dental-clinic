@extends('layouts.main')
@section('content')
@include('layouts.header-main')
<div class="page-content">
    <!--section slider-->
    <div class="section mt-0">
        <div id="mainSliderWrapper">
            <div class="loading-content">
                <div class="inner-circles-loader"></div>
            </div>
            <div class="main-slider arrows-white arrows-bottom" id="mainSlider" data-slick='{"arrows": false, "dots": false}'>
                <div class="slide">
                    <div class="img--holder" data-animation="kenburns" data-bg="images/content/slider/1.jpg"></div>
                    <div class="slide-content center">
                        <div class="vert-wrap container">
                            <div class="vert">
                                <div class="container">
                                    <div class="slide-txt1" data-animation="fadeInDown" data-animation-delay="1s">State of the Art Dental Care
                                        <br><b>  Smile Designs - One Patent at a Time </b></div>
{{--                                    <div class="slide-txt2" data-animation="fadeInUp" data-animation-delay="1.5s"></div>--}}
                                    <div class="slide-btn"><a href="services.html" class="btn btn-white" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span>Smiles Her</span><i class="icon-right-arrow"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="img--holder" data-animation="kenburns" data-bg="images/content/slider/6.jpg"></div>
                    <div class="slide-content center">
                        <div class="vert-wrap container">
                            <div class="vert">
                                <div class="container">
                                    <div class="slide-txt1" data-animation="fadeInDown" data-animation-delay="1s">Cosmetic Dentistry
                                        <br><b>For a Lifetime Full of Smiles!</b></div>
{{--                                    <div class="slide-txt2" data-animation="fadeInUp" data-animation-delay="1.5s">Your pathway to a bright new smile</div>--}}
                                    <div class="slide-btn"><a href="services.html" class="btn btn-white" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span>Smiles Here</span><i class="icon-right-arrow"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="img--holder" data-animation="kenburns" data-bg="images/content/slider/3.jpg"></div>
                    <div class="slide-content center">
                        <div class="vert-wrap container">
                            <div class="vert">
                                <div class="container">
                                    <div class="slide-txt1" data-animation="fadeInDown" data-animation-delay="1s">Treatment Plans are our Specialty
                                        <br><b>You Plan for a Lifetime of Wonderful Teeth</b></div>
{{--                                    <div class="slide-txt2" data-animation="fadeInUp" data-animation-delay="1.5s">Helping Thousands of People to Get Perfect Smile</div>--}}
                                    <div class="slide-btn"><a href="services.html" class="btn btn-white" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span>Smiles Here</span><i class="icon-right-arrow"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="img--holder" data-animation="kenburns" data-bg="images/content/slider/5.jpg"></div>
                    <div class="slide-content center">
                        <div class="vert-wrap container">
                            <div class="vert">
                                <div class="container">
                                    <div class="slide-txt1" data-animation="fadeInDown" data-animation-delay="1s">We Design, Create, and Deliver the Best Smile
                                        <br><b>1 Crown, 1 Bridge, 1 Implant, 1 Upper, 1 Lower</b></div>
{{--                                    <div class="slide-txt2" data-animation="fadeInUp" data-animation-delay="1.5s">Your pathway to a bright new smile</div>--}}
                                    <div class="slide-btn"><a href="services.html" class="btn btn-white" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span>Smiles Here</span><i class="icon-right-arrow"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section slider-->
    <!--section welcome-->
    <div class="section">
        <div class="container pt-lg-2">
            <div class="title-wrap text-center text-md-left d-lg-none mb-lg-2">
                <div class="h-sub">15 Years of Dental Excellence</div>
                <h2 class="h1">Welcome <br class="d-sm-none">to <span class="theme-color">Dental Clinic</span></h2>
            </div>
            <div class="row mt-2 mt-md-3 mt-lg-0">
                <div class="col-md-6">
                    <div class="title-wrap hidden d-none d-lg-block text-center text-md-left">
                        <div class="h-sub">15 Years of Dental Excellence</div>
                        <h2 class="h1">Welcome to <span class="theme-color">Dental Clinic</span></h2>
                    </div>
                    <div>
                        <p>Whether you want to learn about the condition of your teeth and gums or you need immediate treatment for a particular oral problem, we can help. We have gained experience and expertise in different areas of dentistry. </p>
                        <p>Come to us if you need the help of an experienced dentist; we are your partners in keeping your mouth healthy. </p>
                    </div>
                    <div class="mt-2 mt-md-4"></div>
                    <a href="#" class="btn-link" data-toggle="modal" data-target="#modalBookingForm">Booking a visit<i class="icon-right-arrow"></i></a>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <div class="video-wrap embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/YZEvkRbQgHY?autoplay=0&amp;rel=0&amp;controls=0&amp;showinfo=0&amp;start=70" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section welcome-->
    <!--section services-->
    <div class="section">
        <div class="container-fluid px-0">
            <div class="title-wrap text-center">
                <div class="h-sub theme-color">What we offer</div>
                <h2 class="h1">General Services</h2>
                <div class="h-decor"></div>
            </div>
            <div class="row no-gutters services-box-wrap services-box-wrap-desktop">
                <div class="col-4 order-1">
                    <div class="service-box-rotator js-service-box-rotator">
                        <div class="service-box service-box-greybg service-box--hiddenbtn">
                            <div class="service-box-caption text-center">
                                <div class="service-box-icon"><i class="icon-icon-whitening"></i></div>
                                <div class="service-box-icon-bg"><i class="icon-icon-whitening"></i></div>
                                <h3 class="service-box-title">Cosmetic Dentistry</h3>
                                <p>Cosmetic dentistry is concerned with the appearance of teeth and the enhancement of a person's smile</p>
                                <div class="btn-wrap"><a href="service-page.html" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
                            </div>
                        </div>
                        <div class="service-box service-box-greybg service-box--hiddenbtn">
                            <div class="service-box-caption text-center">
                                <div class="service-box-icon"><i class="icon-icon-orthodontics"></i></div>
                                <div class="service-box-icon-bg"><i class="icon-icon-orthodontics"></i></div>
                                <h3 class="service-box-title">Orthodontics</h3>
                                <p>Diagnosis and treatment of improper bites
                                    <br>and irregularity of teeth</p>
                                <div class="btn-wrap"><a href="service-page.html" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8 order-2">
                    <div class="service-box">
                        <div class="service-box-image" data-bg="images/content/service-03.jpg"></div>
                        <div class="service-box-caption text-center w-50 ml-auto">
                            <h3 class="service-box-title">General Dentistry</h3>
                            <p>General dentists provide services related to the general maintenance of oral hygiene and tooth health</p>
                            <div class="btn-wrap"><a href="service-page.html" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-8 order-3 order-lg-4 order-xl-3">
                    <div class="service-box">
                        <div class="service-box-image" data-bg="images/content/service-04.jpg"></div>
                        <div class="service-box-caption text-center w-50 ml-auto">
                            <h3 class="service-box-title">Children's Dentistry</h3>
                            <p>Your child will receive state-of-the-art
                                <br>oral care from our team. </p>
                            <div class="btn-wrap"><a href="service-page.html" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-4 order-5">
                    <div class="service-box-rotator js-service-box-rotator">
                        <div class="service-box service-box-greybg service-box--hiddenbtn">
                            <div class="service-box-caption text-center">
                                <div class="service-box-icon"><i class="icon-icon-implant"></i></div>
                                <div class="service-box-icon-bg"><i class="icon-icon-implant"></i></div>
                                <h3 class="service-box-title">Dental Implants</h3>
                                <p>When teeth are lost because of disease or an accident, dental implants may be a good option</p>
                                <div class="btn-wrap"><a href="service-page.html" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
                            </div>
                        </div>
                        <div class="service-box service-box-greybg service-box--hiddenbtn">
                            <div class="service-box-caption text-center">
                                <div class="service-box-icon"><i class="icon-emergency"></i></div>
                                <div class="service-box-icon-bg"><i class="icon-emergency"></i></div>
                                <h3 class="service-box-title">Dental Emergency</h3>
                                <p>Helping thousands of people each year find
                                    <br>immediate dental services</p>
                                <div class="btn-wrap"><a href="service-page.html" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row no-gutters services-box-wrap services-box-wrap-mobile">
                <div class="service-box-rotator js-service-box-rotator">
                    <div class="service-box service-box-greybg service-box--hiddenbtn">
                        <div class="service-box-caption text-center">
                            <div class="service-box-icon"><i class="icon-icon-whitening"></i></div>
                            <div class="service-box-icon-bg"><i class="icon-icon-whitening"></i></div>
                            <h3 class="service-box-title">Cosmetic Dentistry</h3>
                            <p>Cosmetic dentistry is concerned with the appearance of teeth and the enhancement of a person's smile</p>
                            <div class="btn-wrap"><a href="service-page.html" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
                        </div>
                    </div>
                    <div class="service-box service-box-greybg service-box--hiddenbtn">
                        <div class="service-box-caption text-center">
                            <div class="service-box-icon"><i class="icon-icon-orthodontics"></i></div>
                            <div class="service-box-icon-bg"><i class="icon-icon-orthodontics"></i></div>
                            <h3 class="service-box-title">Orthodontics</h3>
                            <p>Diagnosis and treatment of improper bites
                                <br>and irregularity of teeth</p>
                            <div class="btn-wrap"><a href="service-page.html" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
                        </div>
                    </div>
                    <div class="service-box service-box-greybg service-box--hiddenbtn">
                        <div class="service-box-caption text-center">
                            <div class="service-box-icon"><i class="icon-icon-implant"></i></div>
                            <div class="service-box-icon-bg"><i class="icon-icon-implant"></i></div>
                            <h3 class="service-box-title">Dental Implants</h3>
                            <p>When teeth are lost because of disease or an accident, dental implants may be a good option</p>
                            <div class="btn-wrap"><a href="service-page.html" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
                        </div>
                    </div>
                    <div class="service-box service-box-greybg service-box--hiddenbtn">
                        <div class="service-box-caption text-center">
                            <div class="service-box-icon"><i class="icon-emergency"></i></div>
                            <div class="service-box-icon-bg"><i class="icon-emergency"></i></div>
                            <h3 class="service-box-title">Dental Emergency</h3>
                            <p>Helping thousands of people each year find
                                <br>immediate dental services</p>
                            <div class="btn-wrap"><a href="service-page.html" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section services-->
    <!--section why choose us-->
    <div class="section">
        <div class="container">
            <div class="title-wrap text-center">
                <div class="h-sub theme-color">See the difference</div>
                <h2 class="h1">Why Choose Us?</h2>
                <div class="h-decor"></div>
            </div>
            <div class="row js-icn-carousel icn-carousel flex-column flex-sm-row text-center text-sm-left" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}]}'>
                <div class="col-md">
                    <div class="icn-text icn-text-wmax">
                        <div class="icn-text-circle"><i class="icon-tooth2"></i></div>
                        <div>
                            <h5 class="icn-text-title">High Standard of Dentistry</h5>
                            <p>We provide comprehensive treatment planning and follow strict standards that ensure your surgery will go smoothly and provide the results you desire.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="icn-text icn-text-wmax">
                        <div class="icn-text-circle"><i class="icon-team"></i></div>
                        <div>
                            <h5 class="icn-text-title">Committed Dental Team</h5>
                            <p>Our administrative and clinical team is second to none. They are experienced, highly trained, friendly, and intuitive regarding your needs and will make your visits run effectively.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="icn-text">
                        <div class="icn-text-circle"><i class="icon-dental-chair"></i></div>
                        <div>
                            <h5 class="icn-text-title">Modern Equipment</h5>
                            <p>We have a high attention to detail when it comes to our work and invested heavily in their instruments and equipment to give patients the best possible care and treatment.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section why choose us-->
    <!--section testimonials-->
    <div class="section bg-grey py-0">
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-sm-8 col-lg-6 mt-2 mt-lg-0 order-1 order-sm-0">
                    <div class="reviews-wrap ml-auto d-flex flex-column justify-content-center">
                        <div class="title-wrap text-center text-md-right">
                            <div class="h-sub">What People Says</div>
                            <h2 class="h1">Patient <span class="theme-color">Testimonials</span></h2>
                        </div>
                        <div class="js-reviews-carousel reviews-carousel text-center text-md-right">
                            <div class="review">
                                <p class="review-text">I Am very impressed with you all as well as being highly proficient is absolutely adorable. I feel so relaxed in her capable hands and hope to be her patient for a very long time! You are a fantastic team and I feel very privileged to come to you all!!!</p>
                                <p><span class="review-author">- Wilmer Stevenson,</span> <span class="review-author-position">Creative manager</span></p>
                            </div>
                            <div class="review">
                                <p class="review-text">I Am very impressed with you all as well as being highly proficient is absolutely adorable. I feel so relaxed in her capable hands and hope to be her patient for a very long time! You are a fantastic team and I feel very privileged to come to you all!!!</p>
                                <p><span class="review-author">- Wilmer Stevenson,</span> <span class="review-author-position">Creative manager</span></p>
                            </div>
                            <div class="review">
                                <p class="review-text">I Am very impressed with you all as well as being highly proficient is absolutely adorable. I feel so relaxed in her capable hands and hope to be her patient for a very long time! You are a fantastic team and I feel very privileged to come to you all!!!</p>
                                <p><span class="review-author">- Wilmer Stevenson,</span> <span class="review-author-position">Creative manager</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-6 order-0 order-sm-1 reviews-photo">
                    <img src="images/content/beautiful-girl-sitting-dentist-s-office.jpg" alt="" width="960" >
                </div>
            </div>
        </div>
    </div>
    <!--//section testimonials-->
    <!--section achieved-->
    <div class="section">
        <div class="container">
            <div class="title-wrap text-center">
                <div class="h-sub theme-color">Clinic Figures</div>
                <h2 class="h1">What Have We Achieved</h2>
                <div class="h-decor"></div>
            </div>
            <div class="row d-block js-counter-carousel">
                <div class="col">
                    <div class="counter-box">
                        <div class="counter-box-icon"><i class="icon-hand"></i></div>
                        <div class="counter-box-number"><span class="count" data-to="15" data-speed="1500">0</span>+</div>
                        <div class="decor"></div>
                        <div class="counter-box-text">Years of experience</div>
                    </div>
                </div>
                <div class="col">
                    <div class="counter-box">
                        <div class="counter-box-icon"><i class="icon-tooth-1"></i></div>
                        <div class="counter-box-number"><span class="count" data-to="10" data-speed="1500">0</span>K</div>
                        <div class="decor"></div>
                        <div class="counter-box-text">Improved Smiles</div>
                    </div>
                </div>
                <div class="col">
                    <div class="counter-box">
                        <div class="counter-box-icon"><i class="icon-team"></i></div>
                        <div class="counter-box-number"><span class="count" data-to="50" data-speed="1500">0</span></div>
                        <div class="decor"></div>
                        <div class="counter-box-text">Dentistry Specialists</div>
                    </div>
                </div>
                <div class="col">
                    <div class="counter-box">
                        <div class="counter-box-icon"><i class="icon-placeholder3"></i></div>
                        <div class="counter-box-number"><span class="count" data-to="4" data-speed="1500">0</span></div>
                        <div class="decor"></div>
                        <div class="counter-box-text">Our Locations</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section achieved-->
    <!--section faq-->
    <div class="section bg-grey py-0">
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-xl-6 banner-left bg-fullheight" style="background-image: url(images/content/banner-left.jpg)"></div>
                <div class="col-xl-6">
                    <div class="faq-wrap">
                        <div class="title-wrap">
                            <h2 class="h1">Patient <span class="theme-color">Information</span></h2>
                        </div>
                        <div class="nav nav-pills" role="tablist">
                            <a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab">General</a>
                            <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab">Urgent</a>
                        </div>
                        <div id="tab-content" class="tab-content mt-sm-1">
                            <div id="tab-A" class="tab-pane fade show active" role="tabpanel">
                                <div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
                                    <div class="faq-item">
                                        <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem1" aria-expanded="true"><span>1.</span><span>How often should I visit my dentist?</span></a>
                                        <div id="faqItem1" class="collapse show faq-item-content" role="tabpanel">
                                            <div>
                                                <p>
                                                    Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums. It’s recommended that children see their dentist at least once a year.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem2" aria-expanded="false" class="collapsed"><span>2.</span><span>Why are regular dental assessments so important?</span></a>
                                        <div id="faqItem2" class="collapse faq-item-content" role="tabpanel">
                                            <div>
                                                <p>
                                                    Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums. It’s recommended that children see their dentist at least once a year.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem3" aria-expanded="false" class="collapsed"><span>3.</span><span>How do I know if my teeth are healthy?</span></a>
                                        <div id="faqItem3" class="collapse faq-item-content" role="tabpanel">
                                            <div>
                                                <p>
                                                    Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums. It’s recommended that children see their dentist at least once a year.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem4" aria-expanded="false" class="collapsed"><span>4.</span><span>How can I improve my oral hygiene?</span></a>
                                        <div id="faqItem4" class="collapse faq-item-content" role="tabpanel">
                                            <div>
                                                <p>
                                                    Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums. It’s recommended that children see their dentist at least once a year.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-B" class="tab-pane fade" role="tabpanel">
                                <div id="faqAccordion2" class="faq-accordion" data-children=".faq-item">
                                    <div class="faq-item">
                                        <a data-toggle="collapse" data-parent="#faqAccordion2" href="#faqItem21" aria-expanded="true"><span>1.</span><span>How can I improve my oral hygiene?</span></a>
                                        <div id="faqItem21" class="collapse show faq-item-content" role="tabpanel">
                                            <div>
                                                <p>
                                                    Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums. It’s recommended that children see their dentist at least once a year.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <a data-toggle="collapse" data-parent="#faqAccordion2" href="#faqItem22" aria-expanded="false" class="collapsed"><span>2.</span><span>How do I know if my teeth are healthy?</span></a>
                                        <div id="faqItem22" class="collapse faq-item-content" role="tabpanel">
                                            <div>
                                                <p>
                                                    Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums. It’s recommended that children see their dentist at least once a year.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <a data-toggle="collapse" data-parent="#faqAccordion2" href="#faqItem23" aria-expanded="false" class="collapsed"><span>3.</span>Why are regular dental assessments so important?</a>
                                        <div id="faqItem23" class="collapse faq-item-content" role="tabpanel">
                                            <div>
                                                <p>
                                                    Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums. It’s recommended that children see their dentist at least once a year.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <a data-toggle="collapse" data-parent="#faqAccordion2" href="#faqItem24" aria-expanded="false" class="collapsed"><span>4.</span><span>How often 1 should I visit my dentist?</span></a>
                                        <div id="faqItem24" class="collapse faq-item-content" role="tabpanel">
                                            <div>
                                                <p>
                                                    Everyone’s needs are different, so have a chat to your dentist about how often you need to have your teeth checked by them based on the condition of your mouth, teeth and gums. It’s recommended that children see their dentist at least once a year.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn mt-15 mt-md-3" data-toggle="modal" data-target="#modalQuestionForm"><i class="icon-right-arrow"></i><span>Ask question</span><i class="icon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section faq-->
    <!--section special offers-->
    <div class="section" id="specialOffer">
        <div class="container">
            <div class="title-wrap text-center">
                <div class="h-sub theme-color">For Our Dear Clients</div>
                <h2 class="h1">Special Offers</h2>
                <div class="h-decor"></div>
            </div>
            <div class="special-carousel js-special-carousel row">
                <div class="col-6">
                    <div class="special-card">
                        <div class="special-card-photo">
                            <img src="images/content/special-photo-01.jpg" alt="">
                        </div>
                        <div class="special-card-caption text-left">
                            <div class="special-card-txt1">New Patient</div>
                            <div class="special-card-txt2">Offer</div>
                            <div class="special-card-txt3">Full Consultation
                                <br>Scale & Polish discount</div>
                            <div><a href="schedule.html" class="btn"><i class="icon-right-arrow"></i><span>Schedule</span><i class="icon-right-arrow"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="special-card">
                        <div class="special-card-photo">
                            <img src="images/content/special-photo-02.jpg" alt="">
                        </div>
                        <div class="special-card-caption text-left">
                            <div class="special-card-txt1">Free</div>
                            <div class="special-card-txt2">Consultation</div>
                            <div class="special-card-txt3">Contact us to find out more about this offer</div>
                            <div><a href="contact.html" class="btn"><i class="icon-right-arrow"></i><span>Contact us</span><i class="icon-right-arrow"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="special-card">
                        <div class="special-card-photo">
                            <img src="images/content/special-photo-03.jpg" alt="">
                        </div>
                        <div class="special-card-caption text-left">
                            <div class="special-card-txt1">Whitening</div>
                            <div class="special-card-txt2">Laser Teeth</div>
                            <div class="special-card-txt3">
                                Tooth whitening
                                <br>and Home Bleaching</div>
                            <div><a href="services.html" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="special-card">
                        <div class="special-card-photo">
                            <img src="images/content/special-photo-04.jpg" alt="">
                        </div>
                        <div class="special-card-caption text-left">
                            <div class="special-card-txt1">Porcelain</div>
                            <div class="special-card-txt2">Veneer</div>
                            <div class="special-card-txt3">6 Teeth or more in the same
                                <br>jaw, upper or lower front</div>
                            <div><a href="service-page.html" class="btn"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section special offers-->
    <!--section clients gallery-->
    <div class="section">
        <div class="container">
            <div class="title-wrap text-center">
                <div class="h-sub theme-color">Our Clients Stories</div>
                <h2 class="h1">Smile Gallery</h2>
                <div class="h-decor"></div>
            </div>
            <p class="text-center max-900">Creating a beautiful smile can enhance a persons confidence and overall appearance.
                <br>Below are some of the examples that you can be viewed.</p>
            <div class="mt-2 mt-md-3 mt-lg-5"></div>
            <div class="sm-gallery-row row no-gutters mx-lg-15">
                <div class="col"><span class="gallery-popover-link" data-full="images/content/gallery/smile-gallery-hover-01.jpg"><img src="images/content/gallery/smile-gallery-01.jpg" alt="" class="img-fluid"></span></div>
                <div class="col"><span class="gallery-popover-link" data-full="images/content/gallery/smile-gallery-hover-02.jpg"><img src="images/content/gallery/smile-gallery-02.jpg" alt="" class="img-fluid"></span></div>
                <div class="col"><span class="gallery-popover-link" data-full="images/content/gallery/smile-gallery-hover-03.jpg"><img src="images/content/gallery/smile-gallery-03.jpg" alt="" class="img-fluid"></span></div>
                <div class="col"><span class="gallery-popover-link" data-full="images/content/gallery/smile-gallery-hover-04.jpg"><img src="images/content/gallery/smile-gallery-04.jpg" alt="" class="img-fluid"></span></div>
                <div class="col"><span class="gallery-popover-link" data-full="images/content/gallery/smile-gallery-hover-05.jpg"><img src="images/content/gallery/smile-gallery-05.jpg" alt="" class="img-fluid"></span></div>
                <div class="col"><span class="gallery-popover-link" data-full="images/content/gallery/smile-gallery-hover-06.jpg"><img src="images/content/gallery/smile-gallery-06.jpg" alt="" class="img-fluid"></span></div>
                <div class="col"><span class="gallery-popover-link" data-full="images/content/gallery/smile-gallery-hover-07.jpg"><img src="images/content/gallery/smile-gallery-07.jpg" alt="" class="img-fluid"></span></div>
                <div class="col"><span class="gallery-popover-link" data-full="images/content/gallery/smile-gallery-hover-08.jpg"><img src="images/content/gallery/smile-gallery-08.jpg" alt="" class="img-fluid"></span></div>
                <div class="col"><span class="gallery-popover-link" data-full="images/content/gallery/smile-gallery-hover-09.jpg"><img src="images/content/gallery/smile-gallery-09.jpg" alt="" class="img-fluid"></span></div>
                <div class="col"><span class="gallery-popover-link" data-full="images/content/gallery/smile-gallery-hover-10.jpg"><img src="images/content/gallery/smile-gallery-10.jpg" alt="" class="img-fluid"></span></div>
            </div>
            <div class="text-center mt-3 mt-lg-4">
                <a href="gallery.html" class="btn-link">View more smiles<i class="icon-right-arrow"></i></a>
            </div>
        </div>
    </div>
    <!--//section clients gallery-->
    <!--section call us-->
    <div class="section mt-7">
        <div class="container">
            <div class="banner-call">
                <div class="row no-gutters">
                    <div class="col-sm-5 col-lg-4 order-2 order-sm-1 mt-3 mt-md-0 text-center text-md-right">
                        <img src="images/content/banner-callus.jpg" alt="" class="shift-left">
                    </div>
                    <div class="col-sm-7 col-lg-7 d-flex align-items-center order-1 order-sm-2">
                        <div class="text-center">
                            <h2>Looking for <br class="d-lg-none"> a <span class="theme-color">Certified Dentist?</span></h2>
                            <div class="h-decor"></div>
                            <p class="mt-sm-1 mt-lg-4 text-left text-sm-center">We're always accepting new patients! We believe in providing the best possible care to all our existing patients and welcome new patients to sample the service we have to offer. </p>
                            <div class="mt-3 mt-lg-4">
                                <a href="#" class="banner-call-phone"><i class="icon-telephone"></i>1-800-267-0000</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--section call us-->
</div>
@endsection
