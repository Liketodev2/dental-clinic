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
                    <span>Services</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section page-content-first">
        <div class="container">
            <div class="text-center mb-2  mb-md-3 mb-lg-4">
                <div class="h-sub theme-color">What We Offer</div>
                <h1>Our Services</h1>
                <div class="h-decor"></div>
                <div class="text-center mt-4">
                    <p>All these services are rendered to enable patients enjoy a healthy life style where they feel no hesitation
                        <br>in displaying their beautiful smile</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row col-equalH">
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-card-photo">
                            <a href="service-page.html"><img src="{{asset('images/content/services-01.jpg')}}" class="img-fluid" alt=""></a>
                        </div>
                        <h5 class="service-card-name"><a href="service-page.html">Cosmetic Dentistry</a></h5>
                        <div class="h-decor"></div>
                        <p>Cosmetic dentistry is concerned with the appearance of teeth and the enhancement of a person's smile</p>
                        <ul class="marker-list-md">
                            <li>Orthodontics</li>
                            <li>White Fillings</li>
                            <li>Porcelain Veneers</li>
                            <li>Teeth Whitening</li>
                            <li>Inlays &amp; Onlays</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-card-photo">
                            <a href="service-page.html"><img src="images/content/services-02.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <h5 class="service-card-name"><a href="service-page.html">General Dentistry</a></h5>
                        <div class="h-decor"></div>
                        <p>General dentists provide services related to the general maintenance of oral hygiene and tooth health</p>
                        <ul class="marker-list-md">
                            <li>Root Canal Therapy</li>
                            <li>Nervous Patients</li>
                            <li>Jaw Joint Problems</li>
                            <li>Pregnant Woman</li>
                            <li>Snoring & Sleep Apnoea Solutions</li>
                            <li>NHS Dentistry</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-card-photo">
                            <a href="service-page.html"><img src="images/content/services-03.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <h5 class="service-card-name"><a href="service-page.html">Children's Dentistry</a></h5>
                        <div class="h-decor"></div>
                        <p>Your child will receive state-of-the-art oral care from our team. </p>
                        <ul class="marker-list-md">
                            <li>Dental Emergencies</li>
                            <li>Exams & Dental Cleanings</li>
                            <li>Dental Sedation</li>
                            <li>Digital X-Rays</li>
                            <li>Fluoride Treatments</li>
                            <li>Dental Restorations</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-card-photo">
                            <a href="service-page.html"><img src="images/content/services-04.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <h5 class="service-card-name"><a href="service-page.html">Dental Implants</a></h5>
                        <div class="h-decor"></div>
                        <p>When teeth are lost because of disease or an accident, dental implants may be a good option</p>
                        <ul class="marker-list-md">
                            <li>Same Day Implants</li>
                            <li>Implant Bridges</li>
                            <li>Dental Implants</li>
                            <li>All on 4</li>
                            <li>Implant Dentures</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-card-photo">
                            <a href="service-page.html"><img src="images/content/services-05.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <h5 class="service-card-name"><a href="service-page.html">Orthodontics</a></h5>
                        <div class="h-decor"></div>
                        <p>Diagnosis and treatment of improper bites and irregularity of teeth</p>
                        <ul class="marker-list-md">
                            <li>Smilelign Clear Aligners</li>
                            <li>Lingual Braces</li>
                            <li>Ceramic Braces</li>
                            <li>Damon Braces</li>
                            <li>Six Month Smiles</li>
                            <li>Invisible Braces</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-card-photo">
                            <a href="service-page.html"><img src="images/content/services-06.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <h5 class="service-card-name"><a href="service-page.html">Dental Emergency</a></h5>
                        <p>Helping thousands of people each year find immediate dental services</p>
                        <ul class="marker-list-md">
                            <li>Bleeding / Haemorrhage</li>
                            <li>Serious infection</li>
                            <li>Visible swelling in or around the mouth</li>
                            <li>Severe pain</li>
                            <li>Injuries as a result of a recent accident</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-card-photo">
                            <a href="service-page.html"><img src="images/content/services-07.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <h5 class="service-card-name"><a href="service-page.html">Periodontics</a></h5>
                        <div class="h-decor"></div>
                        <p>The Periodontal department provides diagnosis, prevention and treatment of simple to severe periodontal (gum) disease.</p>
                        <ul class="marker-list-md">
                            <li>Gingivitis</li>
                            <li>Mild Periodontitis</li>
                            <li>Moderate Periodontitis</li>
                            <li>Severe Periodontitis</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-card-photo">
                            <a href="service-page.html"><img src="images/content/services-08.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <h5 class="service-card-name"><a href="service-page.html">Dental Surgery</a></h5>
                        <div class="h-decor"></div>
                        <p>Surgeries are carried out in cases when other methods of therapeutic treatment can’t be used.</p>
                        <ul class="marker-list-md">
                            <li>Teeth extraction</li>
                            <li>Curettage</li>
                            <li>Plastic surgery</li>
                            <li>Other types of surgeries</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="service-card-photo">
                            <a href="service-page.html"><img src="images/content/services-09.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <h5 class="service-card-name"><a href="service-page.html">Crowns & Bridges</a></h5>
                        <div class="h-decor"></div>
                        <p>Crowns and bridges are the most usual dental restoration work in dentistry. </p>
                        <ul class="marker-list-md">
                            <li>Removable dentures</li>
                            <li>Fixed dentures</li>
                            <li>Veneers</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
</div>
@endsection
