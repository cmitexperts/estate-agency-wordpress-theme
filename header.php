<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>EstateAgency-Index</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.jpg" rel="icon">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css"
		rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css"
		rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.css"
		rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">

	<!-- =======================================================
  * Template Name: EstateAgency
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

	<!-- ======= Property Search Section ======= -->
	<div class="click-closed"></div>
	<!--/ Form Search Star /-->
	<div class="box-collapse">
		<div class="title-box-d">
			<h3 class="title-d">Search Property</h3>
		</div>
		<span class="close-box-collapse right-boxed bi bi-x"></span>
		<div class="box-collapse-wrap form">
			<form class="form-a">
				<div class="row">
					<div class="col-md-12 mb-2">
						<div class="form-group">
							<label class="pb-2" for="Type">Keyword</label>
							<input type="text" class="form-control form-control-lg form-control-a"
								placeholder="Keyword">
						</div>
					</div>
					<div class="col-md-6 mb-2">
						<div class="form-group mt-3">
							<label class="pb-2" for="Type">Type</label>
							<select class="form-control form-select form-control-a" id="Type">
								<option>All Type</option>
								<option>For Rent</option>
								<option>For Sale</option>
								<option>Open House</option>
							</select>
						</div>
					</div>
					<div class="col-md-6 mb-2">
						<div class="form-group mt-3">
							<label class="pb-2" for="city">City</label>
							<select class="form-control form-select form-control-a" id="city">
								<option>All City</option>
								<option>Alabama</option>
								<option>Arizona</option>
								<option>California</option>
								<option>Colorado</option>
							</select>
						</div>
					</div>
					<div class="col-md-6 mb-2">
						<div class="form-group mt-3">
							<label class="pb-2" for="bedrooms">Bedrooms</label>
							<select class="form-control form-select form-control-a" id="bedrooms">
								<option>Any</option>
								<option>01</option>
								<option>02</option>
								<option>03</option>
							</select>
						</div>
					</div>
					<div class="col-md-6 mb-2">
						<div class="form-group mt-3">
							<label class="pb-2" for="garages">Garages</label>
							<select class="form-control form-select form-control-a" id="garages">
								<option>Any</option>
								<option>01</option>
								<option>02</option>
								<option>03</option>
								<option>04</option>
							</select>
						</div>
					</div>
					<div class="col-md-6 mb-2">
						<div class="form-group mt-3">
							<label class="pb-2" for="bathrooms">Bathrooms</label>
							<select class="form-control form-select form-control-a" id="bathrooms">
								<option>Any</option>
								<option>01</option>
								<option>02</option>
								<option>03</option>
							</select>
						</div>
					</div>
					<div class="col-md-6 mb-2">
						<div class="form-group mt-3">
							<label class="pb-2" for="price">Min Price</label>
							<select class="form-control form-select form-control-a" id="price">
								<option>Unlimite</option>
								<option>$50,000</option>
								<option>$100,000</option>
								<option>$150,000</option>
								<option>$200,000</option>
							</select>
						</div>
					</div>
					<div class="col-md-12">
						<button type="submit" class="btn btn-b">Search Property</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- End Property Search Section -->

	<!-- ======= Header/Navbar ======= -->
	<!-- fixed-top -->
	<nav class="navbar navbar-default navbar-trans navbar-expand-lg sticky-top">
		<div class="container">
			<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false"
				aria-label="Toggle navigation">
				<span></span>
				<span></span>
				<span></span>
			</button>
			<?php
			$logo = get_header_image();
			?>
			<a class="navbar-brand text-brand" href="<?php echo site_url(); ?>"><img src="<?php echo $logo; ?>" class="pic"></a>
			<div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
			<!-- navbar-collapse collapse justify-content-center -->
				<div class="header-nav mx-auto ">
					<?php wp_nav_menu(array('theme_location' => 'primary-menu', 'menu_class' => 'header-nav')) ?>
				</div>
			</div>
			<button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse"
				data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
				<i class="bi bi-search"></i>
			</button>
		</div>
	</nav><!-- End Header/Navbar -->
	