<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="html 5 template, dentist, stomatologist, dental clinic template, medical template, clinic template, surgery clinic theme, plastic surgery template">
    <meta name="author" content="websmirno.site">
    <meta name="format-detection" content="telephone=no">
    <title>Medin - HTML Website Template</title>
    <!-- Stylesheets -->
    <link href="{{asset("vendor/slick/slick.css")}}" rel="stylesheet">
    <link href="{{asset("vendor/animate/animate.min.css")}}" rel="stylesheet">
    <link href="{{asset("icons/style.css")}}" rel="stylesheet">
    <link href="{{asset("vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css")}}" rel="stylesheet">
    <link href="{{asset("css/style.css")}}" rel="stylesheet">
    <link href="{{asset("css/main.css")}}" rel="stylesheet">
    <!--Favicon-->
    <link rel="icon" href="{{asset("images/favicon.png")}}" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <!-- Google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiFdr5Z0WRIXKUOqoRRvzRQ5SkzhkUVjk"></script>
</head>

<body class="shop-page">
@include('layouts.quick-links')
@yield('content')

<!--footer-->
@if(\Request::route()->getName() == 'index')
    @include('layouts.footer-main')
@else
    @include('layouts.footer')
@endif
<!--//footer-->
<div class="backToTop js-backToTop">
    <i class="icon icon-up-arrow"></i>
</div>
<div class="modal modal-form modal-form-sm fade" id="modalQuestionForm">
    <div class="modal-dialog">
        <div class="modal-content">
            <button aria-label='Close' class='close' data-dismiss='modal'>
                <i class="icon-error"></i>
            </button>
            <div class="modal-body">
                <div class="modal-form">
                    <h3>Ask a Question</h3>
                    <form class="mt-15" id="questionForm" method="post" novalidate>
                        <div class="successform">
                            <p>Your message was sent successfully!</p>
                        </div>
                        <div class="errorform">
                            <p>Something went wrong, try refreshing and submitting the form again.</p>
                        </div>
                        <div class="input-group">
								<span>
								<i class="icon-user"></i>
							</span>
                            <input type="text" name="name" class="form-control" autocomplete="off" placeholder="Your Name*" />
                        </div>
                        <div class="input-group">
								<span>
									<i class="icon-email2"></i>
								</span>
                            <input type="text" name="email" class="form-control" autocomplete="off" placeholder="Your Email*" />
                        </div>
                        <div class="input-group">
								<span>
									<i class="icon-smartphone"></i>
								</span>
                            <input type="text" name="phone" class="form-control" autocomplete="off" placeholder="Your Phone" />
                        </div>
                        <textarea name="message" class="form-control" placeholder="Your comment*"></textarea>
                        <div class="text-right mt-2">
                            <button type="submit" class="btn btn-sm btn-hover-fill">Ask Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-form fade" id="modalBookingForm">
    <div class="modal-dialog">
        <div class="modal-content">
            <button aria-label='Close' class='close' data-dismiss='modal'>
                <i class="icon-error"></i>
            </button>
            <div class="modal-body">
                <div class="modal-form">
                    <h3>Book an Appointment</h3>
                    <form class="mt-15" id="bookingForm" method="post" novalidate>
                        <div class="successform">
                            <p>Your message was sent successfully!</p>
                        </div>
                        <div class="errorform">
                            <p>Something went wrong, try refreshing and submitting the form again.</p>
                        </div>
                        <div class="input-group">
								<span>
								<i class="icon-user"></i>
							</span>
                            <input type="text" name="bookingname" class="form-control" autocomplete="off" placeholder="Your Name*" />
                        </div>
                        <div class="row row-xs-space mt-1">
                            <div class="col-sm-6">
                                <div class="input-group">
										<span>
											<i class="icon-email2"></i>
										</span>
                                    <input type="text" name="bookingemail" class="form-control" autocomplete="off" placeholder="Your Email*" />
                                </div>
                            </div>
                            <div class="col-sm-6 mt-1 mt-sm-0">
                                <div class="input-group">
										<span>
											<i class="icon-smartphone"></i>
										</span>
                                    <input type="text" name="bookingphone" class="form-control" autocomplete="off" placeholder="Your Phone" />
                                </div>
                            </div>
                        </div>
                        <div class="row row-xs-space mt-1">
                            <div class="col-sm-6">
                                <div class="input-group">
										<span>
											<i class="icon-birthday"></i>
										</span>
                                    <input type="text" name="bookingage" class="form-control" autocomplete="off" placeholder="Your age" />
                                </div>
                            </div>
                        </div>
                        <div class="selectWrapper input-group mt-1">
								<span>
									<i class="icon-tooth"></i>
								</span>
                            <select name="bookingservice" class="form-control">
                                <option selected="selected" disabled="disabled">Select Service</option>
                                <option value="Cosmetic Dentistry">Cosmetic Dentistry</option>
                                <option value="General Dentistry">General Dentistry</option>
                                <option value="Orthodontics">Orthodontics</option>
                                <option value="Children`s Dentistry">Children`s Dentistry</option>
                                <option value="Dental Implants">Dental Implants</option>
                                <option value="Dental Emergency">Dental Emergency</option>
                            </select>
                        </div>
                        <div class="input-group flex-nowrap mt-1">
								<span>
									<i class="icon-calendar2"></i>
								</span>
                            <div class="datepicker-wrap">
                                <input name="bookingdate" type="text" class="form-control datetimepicker" placeholder="Date" readonly>
                            </div>
                        </div>
                        <div class="input-group flex-nowrap mt-1">
								<span>
									<i class="icon-clock"></i>
								</span>
                            <div class="datepicker-wrap">
                                <input name="bookingtime" type="text" class="form-control timepicker" placeholder="Time">
                            </div>
                        </div>
                        <textarea name="bookingmessage" class="form-control" placeholder="Your comment"></textarea>
                        <div class="text-right mt-2">
                            <button type="submit" class="btn btn-sm btn-hover-fill">Book now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vendors -->
<script src="{{asset("vendor/jquery/jquery-3.2.1.min.js")}}"></script>
<script src="{{asset("vendor/jquery-migrate/jquery-migrate-3.0.1.min.js")}}"></script>
<script src="{{asset("vendor/cookie/jquery.cookie.js")}}"></script>
<script src="{{asset("vendor/bootstrap-datetimepicker/moment.js")}}"></script>
<script src="{{asset("vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js")}}"></script>
<script src="{{asset("vendor/popper/popper.min.js")}}"></script>
<script src="{{asset("vendor/bootstrap/bootstrap.min.js")}}"></script>
<script src="{{asset("vendor/waypoints/jquery.waypoints.min.js")}}"></script>
<script src="{{asset("vendor/waypoints/sticky.min.js")}}"></script>
<script src="{{asset("vendor/imagesloaded/imagesloaded.pkgd.min.js")}}"></script>
<script src="{{asset("vendor/slick/slick.min.js")}}"></script>
<script src="{{asset("vendor/scroll-with-ease/jquery.scroll-with-ease.min.js")}}"></script>
<script src="{{asset("vendor/countTo/jquery.countTo.js")}}"></script>
<script src="{{asset("vendor/form-validation/jquery.form.js")}}"></script>
<script src="{{asset("vendor/form-validation/jquery.validate.min.js")}}"></script>
@stack('scripts')
<!-- Custom Scripts -->
<script src="{{asset("js/app.js")}}"></script>
<script src="{{asset("js/app-shop.js")}}"></script>
<script src="{{asset("form/forms.js")}}"></script>

</body>

</html>
