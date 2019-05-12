
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{asset('template2/img/fav.png')}}">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>See Shop</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="{{asset('template2/css/linearicons.css')}}	">
	<link rel="stylesheet" href="{{asset('template2/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('template2/css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{asset('template2/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('template2/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('template2/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('template2/css/nouislider.min.css')}}">
	<link rel="stylesheet" href="{{asset('template2/css/ion.rangeSlider.css')}}" />
	<link rel="stylesheet" href="{{asset('template2/css/ion.rangeSlider.skinFlat.css')}}" />
	<link rel="stylesheet" href="{{asset('template2/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('template2/css/main.css')}}">
</head>

<body>

	<!-- Start Header Area -->
@include('layouts.header-front')
	<!-- End Header Area -->

	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1>See Shop <br>Collection!</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Add to Bag</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="img/banner/banner-img.png" alt="">
								</div>
							</div>
						</div>
						<!-- single-slide -->
						<div class="row single-slide">
							<div class="col-lg-5">
								<div class="banner-content">
									<h1>Nike New <br>Collection!</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Add to Bag</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="img/banner/banner-img.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- start features Area -->
	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon1.png" alt="">
						</div>
						<h6>Free Delivery</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon2.png" alt="">
						</div>
						<h6>Return Policy</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon3.png" alt="">
						</div>
						<h6>24/7 Support</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon4.png" alt="">
						</div>
						<h6>Secure Payment</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
		<div class="single-product-slider">
			<div class="container">
				@yield('content')
		</div>
	</section>



	@include('layouts.footer-front')


	<script src="{{asset('template2/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="{{asset('template2/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js')}}" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{asset('template2/js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{asset('template2/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('template2/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('template2/js/jquery.sticky.js')}}"></script>
	<script src="{{asset('template2/js/nouislider.min.js')}}"></script>
	<script src="{{asset('template2/js/countdown.js')}}"></script>
	<script src="{{asset('template2/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('template2/js/owl.carousel.min.js')}}"></script>
	<!--gmaps Js-->
	<script src="{{asset('template2/https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE')}}"></script>
	<script src="{{asset('template2/js/gmaps.min.js')}}"></script>
	<script src="{{asset('template2/js/main.js')}}"></script>
</body>

</html>