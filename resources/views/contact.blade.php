@extends('layouts.main')
@section('content')
@include('layouts.header')
@push('styles')
    <style>
        [type="radio"]:checked,
        [type="radio"]:not(:checked) {
            position: absolute;
            left: -9999px;
        }
        [type="radio"]:checked + label,
        [type="radio"]:not(:checked) + label
        {
            position: relative;
            padding-left: 28px;
            cursor: pointer;
            line-height: 20px;
            display: inline-block;
            color: #666;
        }
        [type="radio"]:checked + label:before,
        [type="radio"]:not(:checked) + label:before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 18px;
            height: 18px;
            border: 1px solid #ddd;
            border-radius: 100%;
            background: #fff;
        }
        [type="radio"]:checked + label:after,
        [type="radio"]:not(:checked) + label:after {
            content: '';
            width: 12px;
            height: 12px;
            background: #1e76bd;
            position: absolute;
            top: 3px;
            left: 3px;
            border-radius: 100%;
            -webkit-transition: all 0.2s ease;
            transition: all 0.2s ease;
        }
        [type="radio"]:not(:checked) + label:after {
            opacity: 0;
            -webkit-transform: scale(0);
            transform: scale(0);
        }
        [type="radio"]:checked + label:after {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
        }
        label {
            font-weight: bold;
        }
    </style>
@endpush
    <div class="page-content">
        <!--section-->
        <div class="section mt-0">
            <div class="contact-map" id="googleMapContact"></div>
        </div>
        <!--//section-->
        <!--section-->
        <div class="section mt-0 bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <div class="title-wrap">
                            <h5>Clinic Location</h5>
                            <div class="h-decor"></div>
                        </div>
                        <ul class="icn-list-lg">
                            <li><i class="icon-placeholder2"></i> DentCo Dental Clinic
                                <br>1560 Holden Street San Diego,
                                <br>CA 92139
                            </li>
                        </ul>
                    </div>
                    <div class="col-md mt-3 mt-md-0">
                        <div class="title-wrap">
                            <h5>Contact Info</h5>
                            <div class="h-decor"></div>
                        </div>
                        <ul class="icn-list-lg">
                            <li><i class="icon-telephone"></i>Phone: <span class="theme-color"><span class="text-nowrap">1-800-267-0000,</span> <span class="text-nowrap">1-800-267-0001</span>
								</span>
                                <br> Fax: <span class="theme-color"><span class="text-nowrap">(957) 267-0020</span>
								</span>
                            </li>
                            <li><i class="icon-black-envelope"></i><a href="mailto:info@dentco.net">info@dentco.net</a></li>
                        </ul>
                    </div>
                    <div class="col-md mt-3 mt-md-0">
                        <div class="title-wrap">
                            <h5>Working Time</h5>
                            <div class="h-decor"></div>
                        </div>
                        <ul class="icn-list-lg">
                            <li><i class="icon-clock"></i>
                                <div>
                                    <div class="d-flex"><span>Mon-Thu</span><span class="theme-color">08:00 - 20:00</span></div>
                                    <div class="d-flex"><span>Friday</span><span class="theme-color">07:00 - 22:00</span></div>
                                    <div class="d-flex"><span>Saturday</span><span class="theme-color">08:00 - 18:00</span></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--//section-->
        <!--section-->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md col-lg-5">
                        <div class="pr-0 pr-lg-8">
                            <div class="title-wrap">
                                <h2>Get In Touch With Us</h2>
                                <div class="h-decor"></div>
                            </div>
                            <div class="mt-2 mt-lg-4">
                                <p>For general questions, please send us a message and we’ll get right back to you. You can also call us directly to speak with a member of our service team or insurance expert.</p>
                                <p class="p-sm">Fields marked with a * are required.</p>
                            </div>
                            <div class="mt-2 mt-md-5"></div>
                            <h5>Stay Connected</h5>
                            <div class="content-social mt-15">
                                <a href="https://www.facebook.com/" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                                <a href="https://www.twitter.com/" target="blank" class="hovicon"><i class="icon-twitter-logo"></i></a>
                                <a href="https://plus.google.com/" target="blank" class="hovicon"><i class="icon-google-logo"></i></a>
                                <a href="https://www.instagram.com/" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-lg-6 mt-4 mt-md-0">
                        <form class="contact-form" id="contactForm" method="post" novalidate="novalidate" method="POST" action="{{route('contact-form')}}">
                            @csrf
                            <div class="successform">
                                <p>Your message was sent successfully!</p>
                            </div>
                            <div class="errorform">
                                <p>Something went wrong, try refreshing and submitting the form again.</p>
                            </div>
                            <div>
                                <input type="text" class="form-control" name="name" placeholder="Your name*">
                            </div>
                            @error('name')
                            <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="mt-15">
                                <input type="email" class="form-control" name="email" placeholder="Email*">
                            </div>
                            @error('email')
                            <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror

                            <div class="mt-15">
                                <input type="text" class="form-control" name="country" placeholder="Country*">
                            </div>
                            @error('required')
                            <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror

                            <div class="mt-15">
                                <input type="text" class="form-control" name="phone" placeholder="Your Phone">
                            </div>
                            @error('phone')
                            <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror

                            <div class="mt-15">
                                <input type="text" class="form-control" name="phone" placeholder="WhatsApp Number">
                            </div>
                            @error('phone')
                            <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <div class="mt-4">
                                <a href="#" class="btn mdi-cursor-pointer btn-hover-fill" data-toggle="modal" data-target="#exampleModal"><b>Let Us get to Know You</b></a>
                            </div>
{{--                            <div class="mt-15">--}}
{{--                                <textarea class="form-control" name="message" placeholder="Message"></textarea>--}}
{{--                            </div>--}}
{{--                            @error('message')--}}
{{--                            <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>--}}
{{--                            @enderror--}}
                            <div class="mt-15">
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                        <label for="imageUpload"> </label>
                                        <span class="ml-1" style="font-size: 12px">Upload x-ray photo</span>
                                    </div>
                                    <div class="avatar-preview">
                                        <div id="imagePreview"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-hover-fill"><i class="icon-right-arrow"></i><span>Send message</span><i class="icon-right-arrow"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--//section-->
    </div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="px-5">
                    <h4 class="modal-title text-center my-3" id="exampleModalLabel">
                        Hi and welcome to Dr. Brenes: The Costa Rican Dentist
                    </h4>
                    <ul class="list-unstyled">
                        <li class="text-center">We don’t just treat teeth, we treat you, the person.</li>
                        <li class="text-center">Afterall we only fix your teeth; it still takes you to Smile!</li>
                        <li class="text-center">So please, allow us to get to know you a little bit so we can better serve you.</li>
                    </ul>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-5" style="max-height: 550px; overflow-y: auto;">
                <form action="#">
                    <div class="form-group">
                        <label>Are you Male or Female?</label>
                        <div class="d-flex">
                            <div class="mr-3">
                                <input type="radio" id="Male" name="radio-group1" checked>
                                <label for="Male">Male</label>
                            </div>
                            <div>
                                <input type="radio" id="Female" name="radio-group1">
                                <label for="Female">Female</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="age">How old are you?</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="age">Have you seen a local Dentist?</label>
                        <div class="d-flex">
                            <div class="mr-3">
                                <input type="radio" id="HaveDentist" name="radio-group2" checked>
                                <label for="HaveDentist">Yes</label>
                            </div>
                            <div>
                                <input type="radio" id="HaveNotDentist" name="radio-group2">
                                <label for="HaveNotDentist">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">What did they suggest?</label>
                        <textarea name="" id="" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label> Did they take a panoramic x-ray?</label>
                        <div class="d-flex">
                            <div class="mr-3">
                                <input   type="radio" id="x-ray" name="radio-group3" checked>
                                <label for="x-ray">Yes</label>
                            </div>
                            <div>
                                <input   type="radio" id="not-x-ray" name="radio-group3">
                                <label for="not-x-ray">No</label>
                            </div>
                        </div>
                        <div class="ifYes">
                            <label for="">Can you upload them?</label>
                            <div>
                                <input type="file">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">How’s your general health?</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">What are you hoping to accomplish with your teeth (specifically)?</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">How long have you delayed taking care of the issue due to finances?</label>
                        <div class="d-flex">
                            <div class="mr-3">
                                <input type="radio" id="finances" name="radio-group4" checked>
                                <label for="finances">Yes</label>
                            </div>
                            <div>
                                <input type="radio" id="nofinances" name="radio-group4">
                                <label for="nofinances">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Have you ever visited beautiful Costa Rica?</label>
                        <div class="d-flex">
                            <div class="mr-3">
                                <input type="radio" id="visited" name="radio-group5" checked>
                                <label for="visited">Yes</label>
                            </div>
                            <div>
                                <input type="radio" id="novisited" name="radio-group5">
                                <label for="novisited">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Have you researched Dental Tourism in Costa Rica?</label>
                        <div class="d-flex">
                            <div class="mr-3">
                                <input type="radio" id="visitedDental" name="radio-group6" checked>
                                <label for="visitedDental">Yes</label>
                            </div>
                            <div>
                                <input type="radio" id="novisitedDental" name="radio-group6">
                                <label for="novisitedDental">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">When would you be ready to start work on your teeth?</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Would you have someone come with you for the procedure(s)?</label>
                        <div class="d-flex">
                            <div class="mr-3">
                                <input  type="radio" id="procedure" name="radio-group7" >
                                <label for="procedure">Yes</label>
                            </div>
                            <div >
                                <input type="radio" id="noprocedurel" name="radio-group7" checked>
                                <label for="noprocedurel">No</label>
                            </div>
                        </div>
                        <div class="d-none ifYes">
                            <label for="">If yes, please give us their:</label>
                            <input type="text" class="form-control mb-2" placeholder="Name">
                            <input type="text" class="form-control mb-2" placeholder="Email">
                            <input type="text" class="form-control mb-2" placeholder="Age">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal">Close</button>
                <button type="button" class="btn">Save changes</button>
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function() {
            readURL(this);
        });
    </script>
    <script>
            $('input[type=radio]').on('click', function () {
                if ($(this).is(":checked") && ($(this).parent().find('label').text() === "Yes")) {
                    $(this).parent().parent().parent().find('.ifYes').removeClass("d-none");
                }else {
                    $(this).parent().parent().parent().find('.ifYes').addClass("d-none");
                }
            })
    </script>
@endpush
