<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>

    <base href="" />

	<!-- Basic Page Needs
     ================================================== -->
	 <meta charset="utf-8">
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <title>@yield('title') :: PAS-ISO</title>
     <meta name="description" content="Pridential ISO">
     <meta name="keywords" content="Pridential ISO">
     <meta name="author" content="Pridential ISO">

	 
	 <!-- Mobile Specific Metas
     ================================================== -->
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
     <meta name="format-detection" content="telephone=no">
	 
     
     <!-- Favicons
     ================================================== -->
     <link rel="icon" type="image/png" href="assets/images/favicon.png">
     
	 
     <!-- Fonts
     ================================================== -->
     <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
     
    <!-- CSS
     ================================================== -->
	
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/css/bootstrap.css">

	<!-- advisor -->
	<link rel="stylesheet" href="assets/css/advisor.css">

	<!-- plugins -->
	<link rel="stylesheet" href="assets/css/plugins.css">	

	<!-- advisor color -->
	<link rel="stylesheet" href="assets/css/color-blue.css">

	<!-- hero slider -->
	<link rel="stylesheet" href="assets/css/hero-slider.css">
	
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

    @yield('styles')
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- HEADER SCRIPTS
    
    ================================================== -->
	<script src="assets/js/modernizr.js"></script>
	
	
</head>
    <body class="fixed-header">

	<!-- LOADER -->
	<div id="loader" class="loader">
		<div class="spinner">
		  <div class="double-bounce1"></div>
		  <div class="double-bounce2"></div>
		</div>
	</div>

    <!-- HERDER -->
    <header id="header">
    	
		<div class="container">
				
			<!-- TOP BAR -->
			<div class="top-bar clearfix">
				<p>We have over 15 years of experience.</p>
				<ul>
					<li><i class="icon-telephone114"></i> +91 8939345355</li>
					<li><i class="icon-icons74"></i> info@prudentialiso.com</li>
				</ul>
			</div>
			<!-- / TOP BAR -->
			
			<!-- HEADER INNER -->
			<div class="header clearfix">
				
				<a href="{{ url('/') }}" class="logo"><img src="{{ asset('assets/images/logo.png') }}" alt=""></a>
				
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-nav" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				
				
				<nav class="main-nav navbar-collapse collapse" id="primary-nav">
					<ul class="nav nav-pills">
						<li><a href="{{ url('/') }}">Home</a></li>
						<li class="dropdown"><a href="#.">Certifications <i class="fa fa-caret-down"></i></a>
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
						<li class="dropdown"><a href="#.">Training <i class="fa fa-caret-down"></i></a>
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
						<li><a href="{{ url('contact') }}">Contact Us</a></li>
					</ul>
				</nav>
				
			</div><!-- / HEADER INNER -->
			
        </div><!-- / CONTAINER -->
		
    </header><!-- / HERDER -->
    
    @yield('content')			
		
	<footer id="footer">
	
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6"><p>Coyright © {{ date('Y') }} PAS-ISO. All rights reserved.</p></div>
<!-- 							<div class="col-md-6 col-sm-6"><p class="text-right">Designed by <a href="#.">Brighthemes</a></p></div> -->
				</div>
			</div>
		</div>
		
	</footer>
			
			
			
            
		<!-- FOOTER SCRIPTS
		================================================== -->
		<script src="assets/js/jquery-2.2.0.js"></script>
		<script src="assets/js/smooth-scroll.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/counter.js"></script>
		<script src="assets/js/common.js"></script>
		<script src="assets/js/scripts.js"></script>
		<script src="assets/js/hero-slider.js"></script>
		@yield('scripts')
    </body>
</html>