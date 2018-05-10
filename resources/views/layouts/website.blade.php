<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title') :: prudentialiso.com</title>

    <!-- Icon css link -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="{{ asset('vendors/revolution/css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/revolution/css/layers.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/revolution/css/navigation.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/animate-css/animate.css') }}" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="{{ asset('vendors/owl-carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <!--================Header Area =================-->
    <header class="main_header_area">
        <div class="header_top">
            <div class="container">
                <div class="pull-left">
                    <a href="index.html"><img src="{{ asset('img/logo.png') }}" alt=""></a>
                </div>
                <div class="pull-right">
                    <div class="header_c_text">
                        <h5>Call us</h5>
                        <h4>+91 - 8939345355</h4>
                    </div>
                    <!-- <div class="header_c_text">
                        <h5>Working Hours</h5>
                        <h4>Mon - Fri 10 to 5pm</h4>
                    </div> -->
                    <div class="header_c_text">
                        <h5>Email Us</h5>
                        <h4>info@prudentialiso.com</h4>
                    </div><!-- 
                    <div class="header_c_text">
                        <a class="quote_btn" href="request-quote.html">Request a Quote</a>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="main_menu_area">
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{ url('/') }}">Home</a></li>
                            <li class="dropdown submenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Certifications <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('iso-9001-certification') }}">ISO 9001 Certification</a></li>
                                    <li><a href="{{ url('iso-14001-certification') }}">ISO 14001 Certification</a></li>
                                    <li><a href="{{ url('iso-18001-certification') }}">ISO 18001 Certification</a></li>
                                    <li><a href="{{ url('haccp-certification') }}">HACCP</a></li>
                                    <li><a href="{{ url('iso-22000-certification') }}">ISO 22000 Certification</a></li>
                                    <li><a href="{{ url('iso-27001-certification') }}">ISO 27001 Certification</a></li>
                                    <li><a href="{{ url('iso-20000-certification') }}">ISO 20000 Certification</a></li>
                                    <li><a href="{{ url('ce-marking') }}">CE Marking</a></li>
                                    <li><a href="{{ url('good-manufacturing-script') }}">Good Manufacturing Script</a></li>
                                    <li><a href="{{ url('sa-8000-certification') }}">SA 8000</a></li>
                                </ul>
                            </li>
                            <li class="submenu dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Training <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('quality') }}">Quality</a></li>
                                    <li><a href="{{ url('environment') }}">Environment</a></li>
                                    <li><a href="{{ url('safety-training') }}">Safety Training</a></li>
                                    <li><a href="{{ url('information-security') }}">Information Security</a></li>
                                    <li><a href="{{ url('food-safety') }}">Food Safety</a></li>
                                    <li><a href="{{ url('5s') }}">5S</a></li>
                                    <li><a href="{{ url('six-sigma') }}">Six Sigma</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('search-certificate') }}">Check Certificate Status</a></li>
                            <li class="active"><a href="{{ url('contact') }}">Contact</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search here...">
                                    <span class="input-group-btn">
                                            <button class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>
        </div>
    </header>
    <!--================End Header Area =================-->

    @yield('content')

    <!--================Footer Area =================-->
    <footer class="footer_area">
        <div class="footer_widget_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <aside class="f_widget about_widget">
                            <img src="img/logo.png" alt="">
                            <p>Start.ly Logistics is a mobile first responsive website template for logistics or transportation.</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <aside class="f_widget link_widget">
                            <div class="f_title">
                                <h3>Quick Links</h3>
                            </div>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Certifications</a></li>
                                <li><a href="#">Training</a></li>
                                <li><a href="#">OUR PARTNERS</a></li>
                                <li><a href="#">Certificate Status</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <aside class="f_widget service_widget">
                            <div class="f_title">
                                <h3>Services</h3>
                            </div>
                            <ul>
                                <li><a href="#">ISO 9001 Certification</a></li>
                                <li><a href="#">ISO 14001 Certification</a></li>
                                <li><a href="#">ISO 18001 Certification</a></li>
                                <li><a href="#">ISO 22000 Certification</a></li>
                                <li><a href="#">ISO 27001 Certification</a></li>
                                <li><a href="#">ISO 20000 Certification</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <aside class="f_widget info_widget">
                            <div class="f_title">
                                <h3>Contact</h3>
                            </div>
                            <div class="contact_details">
                                <p>No:3, Ground Floor, Anjugam Nagar,<br class="info_br" /> Main Road, Jafferkhanpet, Chennai, <br clear="info_br">
                                Tamilnadu, India - 600083
                                </p>
                                <p>Phone: <a href="tel:+1-(255)-7899"> +91 8939345355</a></p>
                                <p>Email: <a href="mailto:info@prudentialiso.com">info@prudentialiso.com</a></p>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_copy_right">
            <div class="container">
                <h4>Copyright © Prudential Assessment Services LLP
                    <script>
                        document.write(new Date().getFullYear());
                    </script>. All rights reserved.</h4>
            </div>
        </div>
    </footer>
    <!--================End Footer Area =================-->







    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery-2.2.4.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Rev slider js -->
    <script src="{{ asset('vendors/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('vendors/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <!-- Extra Plugin js -->
    <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendors/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <!-- jVector maps -->
    <script src="{{ asset('vendors/jvectormap/jvectormap.min.js') }}"></script>
    <script src="{{ asset('vendors/jvectormap/jvectormap-worldmill.js') }}"></script>
    <script src="{{ asset('js/locations.js') }}"></script>
    <!-- Main js -->
    <script src="{{ asset('js/script.js') }}"></script>
    @yield('scripts')
</body>

</html>