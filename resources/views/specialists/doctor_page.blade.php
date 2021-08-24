@extends('layouts.main')
@section('content')
    @include('layouts.header')
    <div class="page-content">
        <!--section-->
        <div class="section mt-0">
            <div class="breadcrumbs-wrap">
                <div class="container">
                    <div class="breadcrumbs">
                        <a href="{{route('index')}}">Home</a>
                        <a href="{{route('our_specialist')}}">Our Specialists</a>
                        <span>Dr. Frank Bigham</span>
                    </div>
                </div>
            </div>
        </div>
        <!--//section-->
        <!--section-->
        <div class="section page-content-first">
            <div class="container mt-6">
                <div class="row">
                    <div class="col-md">
                        <div class="doctor-page-photo text-center">
                            <img src="images/content/doctor-page-photo.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="mt-3 mt-md-5"></div>
                        <table class="table doctor-page-table">
                            <tr>
                                <td>Speciality</td>
                                <td>Dentist</td>
                            </tr>
                            <tr>
                                <td>Degrees</td>
                                <td>College of Surgeons</td>
                            </tr>
                            <tr>
                                <td>Areas of Expertise</td>
                                <td>
                                    <ul class="marker-list-md">
                                        <li>Gygienology</li>
                                        <li>Immunology</li>
                                        <li>Internal Medicine</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Office</td>
                                <td>12 General Office</td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>Male</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-8 mt-4 mt-lg-0">
                        <div class="doctor-info mb-3 mb-lg-4">
                            <div class="doctor-info-name">
                                <h3>Dr. Frank Bigham</h3>
                                <h6>Associate Dentist</h6>
                            </div>
                            <div class="doctor-info-phone"><i class="icon-telephone"></i><a href="tel:+1-248-715-8767">1-248-715-8767</a></div>
                            <div class="doctor-info-social">
                                <a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                                <a href="mailto:info@dentco.net" class="hovicon"><i class="icon-black-envelope"></i></a>
                            </div>
                        </div>
                        <p>Dr. Frank Bigham received his Doctorate in Medical Dentistry from Hospital, USA in 2003. Following his professional qualification, he practiced maxillofacial surgery at Hospital and the Royal Hospital. Dr. Bigham gained membership of the College of Surgeons of USA in 2007. He has over 10 years of experience working as a general dental practitioner in both Surrey and central. Dr. Bigham enjoys all aspects of his field especially cosmetic dentistry and prosthetics. Passionate in learning languages, he is fluent in both English and Arabic, and also speaks French and some Italian. His interests include sports and history.</p>
                        <p>When asked what makes dentistry so rewarding, he said "My job is rewarding because sometimes even the simplest treatment can change the patient's confidence in himself/herself and I feel that I am part of a larger global healthcare promotion program."</p>
                        <ul class="marker-list-md">
                            <li><i>Member of the Royal College of Surgeons of USA</i></li>
                            <li><i>Member of the General Dental Council (USA)</i></li>
                        </ul>
                        <div class="mt-4 mt-lg-6"></div>
                        <div class="collapse-wrap d-flex" data-toggle="collapse" data-target="#tab1">
                            <h5 class="collapse-title">Dental Treatments of <span class="theme-color text-nowrap">Dr. Bigham</span></h5>
                            <div class="ml-auto"><i class="icon-bottom"></i></div>
                        </div>
                        <div id="tab1" class="collapse show">
                            <div class="pb-4 pb-lg-6">
                                <div class="row row-sm-space pt-2">
                                    <div class="col-sm-4"><img src="images/content/doctor-page-portfolio-1.jpg" class="img-fluid" alt=""></div>
                                    <div class="col-sm-4"><img src="images/content/doctor-page-portfolio-2.jpg" class="img-fluid" alt=""></div>
                                    <div class="col-sm-4"><img src="images/content/doctor-page-portfolio-3.jpg" class="img-fluid" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse-wrap d-flex" data-toggle="collapse" data-target="#tab2">
                            <h5 class="collapse-title">What Patients Say</h5>
                            <div class="ml-auto"><i class="icon-bottom"></i></div>
                        </div>
                        <div id="tab2" class="collapse show">
                            <div class="pb-4">
                                <div class="doctor-review-row mb-1">
                                    <div class="star-rating"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></div>
                                    <div class="testimonial-author"><span class="testimonial-name">- Wilmer Stevenson,</span> <span class="testimonial-position">Creative manager</span></div>
                                </div>
                                <p>When asked what makes dentistry so rewarding, he said "My job is rewarding because sometimes even the simplest treatment can change the patient's confidence in himself/herself and I feel that I am part of a larger global healthcare promotion program."</p>
                            </div>
                        </div>
                        <div class="d-flex flex-column flex-sm-row mt-lg-2">
                            <a href="#" class="btn" data-toggle="modal" data-target="#modalBookingForm"><i class="icon-right-arrow"></i><span>Book Consultation</span><i class="icon-right-arrow"></i></a>
                            <a href="schedule.html" class="btn "><i class="icon-right-arrow"></i><span>Timetable</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//section-->
        <div class="section">
            <div class="container">
                <div class="title-wrap text-center">
                    <h2 class="h1">Our Spesialists</h2>
                    <div class="h-decor"></div>
                </div>
                <div class="row specialist-carousel js-specialist-carousel">
                    <div class="col-sm-6 col-md-4">
                        <div class="doctor-box text-center">
                            <div class="doctor-box-photo">
                                <a href="doctor-page.html"><img src="images/content/doctor-07.jpg" class="img-fluid" alt=""></a>
                            </div>
                            <h5 class="doctor-box-name"><a href="doctor-page.html">Dr. William Gardner</a></h5>
                            <div class="doctor-box-position">Implantologist</div>
                            <div class="doctor-box-text">
                                <p>Dr William Gardner completed her undergraduate dental degree at the University of Western Australia in 2003</p>
                            </div>
                            <div class="doctor-box-bottom">
                                <div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:+1-212-857-8103">+1-212-857-8103</a></div>
                                <div class="doctor-box-social">
                                    <a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                                    <a href="mailto:info@dentco.net" class="hovicon"><i class="icon-black-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="doctor-box text-center">
                            <div class="doctor-box-photo">
                                <a href="doctor-page.html"><img src="images/content/doctor-08.jpg" class="img-fluid" alt=""></a>
                            </div>
                            <h5 class="doctor-box-name"><a href="doctor-page.html">Dr. Mayra Hastings</a></h5>
                            <div class="doctor-box-position">Orthodontist</div>
                            <div class="doctor-box-text">
                                <p>With years of experience she prides herself on providing minimally invasive periodontal care for patients</p>
                            </div>
                            <div class="doctor-box-bottom">
                                <div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:+1-816-941-7259">+1-816-941-7259</a></div>
                                <div class="doctor-box-social">
                                    <a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                                    <a href="mailto:info@dentco.net" class="hovicon"><i class="icon-black-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="doctor-box text-center">
                            <div class="doctor-box-photo">
                                <a href="doctor-page.html"><img src="images/content/doctor-09.jpg" class="img-fluid" alt=""></a>
                            </div>
                            <h5 class="doctor-box-name"><a href="doctor-page.html">Dr. Billy Logan</a></h5>
                            <div class="doctor-box-position">Cosmetic Dentist</div>
                            <div class="doctor-box-text">
                                <p>Working over the past 18 years in both private practice and teaching at the universities inspired an interest in Oral Medicine </p>
                            </div>
                            <div class="doctor-box-bottom">
                                <div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:+1-262-374-3970">+1-262-374-3970</a></div>
                                <div class="doctor-box-social">
                                    <a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                                    <a href="mailto:info@dentco.net" class="hovicon"><i class="icon-black-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="doctor-box text-center">
                            <div class="doctor-box-photo">
                                <a href="doctor-page.html"><img src="images/content/doctor-06.jpg" class="img-fluid" alt=""></a>
                            </div>
                            <h5 class="doctor-box-name"><a href="doctor-page.html">Dr. Jennifer Foster</a></h5>
                            <div class="doctor-box-position">Oral Health Therapist</div>
                            <div class="doctor-box-text">
                                <p>Dr. Jennifer Foster has been in practice for almost 20 years graduating BDS from the University of Manchester, UK in 1997</p>
                            </div>
                            <div class="doctor-box-bottom">
                                <div class="doctor-box-phone"><i class="icon-telephone"></i><a href="tel:+1-219-756-6567">1-219-756-6567</a></div>
                                <div class="doctor-box-social">
                                    <a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                                    <a href="mailto:info@dentco.net" class="hovicon"><i class="icon-black-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
