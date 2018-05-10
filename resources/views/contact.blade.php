@extends('layouts.website')

@section('title', 'Contact Us')

@section('styles')

@stop

@section('content')

    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="pull-left">
                <h3>Contact Us</h3>
            </div>
            <div class="pull-right">
                <a href="{{ url('/') }}">Home</a>
                <a>Contact Us</a>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->

    <!--================End Banner Area =================-->
    <section class="contact_form_area2">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h3 class="single_title">Contact Form</h3>
                    <div class="row">
                        <form class="contact_us_form" action="php/contact.php" method="post" id="phpcontactform">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea class="form-control" id="message" name="message" placeholder="Message" rows="1"></textarea>
                            </div>
                            <div class="form-group col-md-12 button_area">
                                <button type="submit" value="submit your quote" class="btn submit_blue form-control" id="js-contact-btn">Send message <i class="fa fa-angle-right"></i></button>
                                <div id="js-contact-result" data-success-msg="Success, We will get back to you soon" data-error-msg="Oops! Something went wrong"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <h3 class="single_title">Contact Details</h3>
                    <div class="contact_details_inner">
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="media-body">
                                <p>Prudential Assessment Services LLP </p>
                                <p>No:3, Ground Floor, Anjugam Nagar,  </p>
                                <p>Main Road, Jafferkhanpet, Chennai,</p>
                                <p>Tamilnadu, India - 600083</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="media-body">
                                <a href="#">info@prudentialiso.com</a>
                                
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <a href="#">+91 8939345355</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->

    <!--================Map Area =================-->
    <!-- Things to modify: Your Location Latitude, Longitude, Map Zoom and Google Maps API Key. [[[ See Docs ]]]  -->
    <div class="google-map" id="gmaps" data-lat="40.6700" data-lon="-73.9400" data-maps-apikey="AIzaSyDMTUkJAmi1ahsx9uCGSgmcSmqDTBF9ygg" data-zoom="11"></div>
    <!--================End Map Area =================-->

@stop

@section('scripts')
    <!-- Contact js -->
    <script src="{{ asset('js/validate.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
@stop