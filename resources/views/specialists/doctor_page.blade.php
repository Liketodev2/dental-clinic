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
                        <span>Dr Iris Schmitz</span>
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
                            <img src="images/imgpsh_fullsize_anim.jpg" class="img-fluid" alt="">
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
                    <div class="col-lg-8 mt-4 mt-lg-0 doctor-info-text">
                        <div class="doctor-info mb-3 mb-lg-4">
                            <div class="doctor-info-name">
                                <h3>Dr Iris Schmitz</h3>
                                <h6>The Dr. Iris Schmitz story</h6>
                            </div>
                            <div class="doctor-info-phone"><i class="icon-telephone"></i><a href="tel:+1-248-715-8767">1-248-715-8767</a></div>
                            <div class="doctor-info-social">
                                <a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                                <a href="mailto:info@dentco.net" class="hovicon"><i class="icon-black-envelope"></i></a>
                            </div>
                        </div>
                        <p>Dental clinics, offices and suites are known worldwide as, well Dental clinics, offices and suites.</p>
                        <p>We here at The Costa Rican Dentist realized long ago that patients, either local or from abroad, need peace of mind. Studies have shown that the best outcomes in Dentistry have been attained when the patient (you), are most comfortable in every facet of the treatment. To achieve that result, we were lucky enough to find Dr. Iris Schmitz. A Physician skilled in every discipline you can image and even some you can’t.</p>
                        <p>Almost all the procedures we do are minor. Sure there’s short term bleeding, some pain after the anesthetic wears off, but nothing different from when you’re home. When you’re here however, there’s nothing Dr. Iris can’t help you with. Dr Iris is also fully licensed to write prescriptions as well, even if you forgot your medicine at home.</p>
                        <p>Let’s meet Dr. Iris</p>
                        <p>Born in Germany, she came to Costa Rica with her parents in time for high school. Learned the language and realized how wonderful the culture is and how different it was from Germany.</p>
                        <p>She quickly realized the difficulty for the locals to afford a higher education (not unusual for a country with no middle class), so she decided a life of service to these classmates, friends and locals was her destiny.</p>
                        <p>After high school, she got her Masters Degree in Medicine from the University of Costa Rica in 1992.
                            Only 2 years later, she attained her Professional Degree, also from the same University.
                        </p>
                        <p>Learning how her professors got their top notch skills, she went to Florida and interned for 2 years in Emergency Medicine. This is where her experience in the many disciplines of medicine became sharpened.</p>
                        <p>How best to serve?</p>
                        <p>After working as a General Practitioner in literally every hospital in Capitol city of San Jose, and because of her many connections to the German people, Dr. Iris began working for the German Embassy here in Costa Rica. When a tourist came to Costa Rica and had health issues, Dr. Iris was called to help.</p>
                        <p>Within the Embassy network, word got around about Dr. Iris. Soon it was the Swiss Embassy, then Austria and of course the US Embassy as well. </p>
                        <p>Dr Iris’s fluency in English, Spanish and German was an important skill-set, but her kindness and compassion, her vast medical knowledge and her determination to help every patient with minor issues to major is what made her special.</p>
                        <p>How did we get so lucky to have her join us? </p>
                        <p>The Embassies mainly sent her to see tourists that came from their respective countries. Dr. Iris saw the opportunity and developed relationships with Tour operators. Her reputation was very well known with these operators, so it was a very easy transition. They felt more secure knowing she was close by.</p>
                        <p>So Dr. Iris decided that being close to the airport (SJO) gave her a base of operations that would get her to her patients sooner. She’s now located inside the offices of The Costa Rican Dentist. We are thrilled to have her here. We’re even more thrilled to give you the peace of mind that when you choose Dr. Brenes, you have Dr. Iris in the same office.</p>
                        <div class="mt-4 mt-lg-6"></div>
                        <div class="collapse-wrap d-flex" data-toggle="collapse" data-target="#tab1">
                            <h5 class="collapse-title">Dental Treatments of <span class="theme-color text-nowrap">Dr Iris Schmitz</span></h5>
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
