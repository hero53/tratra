<!doctype html>
<html class="no-js"  lang="en">

	<head>
		<!-- META DATA -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

		<!-- TITLE OF SITE -->
		<title>Baby travel</title>

		<!-- favicon img -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>

		<!--font-awesome.min.css-->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--animate.css-->
		<link rel="stylesheet" href="assets/css/animate.css" />

		<!--hover.css-->
		<link rel="stylesheet" href="assets/css/hover-min.css">

		<!--datepicker.css-->
		<link rel="stylesheet"  href="assets/css/datepicker.css" >

		<!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css"/>

		<!-- range css-->
        <link rel="stylesheet" href="assets/css/jquery-ui.min.css" />

		<!--bootstrap.min.css-->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />

		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css"/>

		<!--style.css-->
		<link rel="stylesheet" href="assets/css/style.css" />

		<!--responsive.css-->
		<link rel="stylesheet" href="assets/css/responsive.css" />

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>
		<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
			your browser</a> to improve your experience and security.</p>
		<![endif]-->

		<!-- main-menu Start -->
		<header class="top-area">
			<div class="header-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-2">
							<div class="logo">
								<a href="index.html">
									Baby<span>Travel</span>
								</a>
							</div><!-- /.logo-->
						</div><!-- /.col-->
						<div class="col-sm-10">
							<div class="main-menu">
							
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<i class="fa fa-bars"></i>
									</button><!-- / button-->
								</div><!-- /.navbar-header-->
								<div class="collapse navbar-collapse">		  
									<ul class="nav navbar-nav navbar-right">
										<li class="smooth-menu"><a href="#home">accueil</a></li>
										<li class="smooth-menu"><a href="#gallery">Top Destination</a></li>
										<li class="smooth-menu"><a href="#pack">Destinations</a></li>
										<li class="smooth-menu"><a href="#blog">Suivez-Nous</a></li>
										<li class="smooth-menu"><a href="#subs">Abonnez-vous</a></li>
										<li>
											<a href="{{route('reservations.index')}} " class="book-btn" target="_blank">Reservation
											</a>
										</li><!--/.project-btn--> 
                                        <li>
											<a href="{{route('login.connexion')}} " class="btn btn-warning">Connexion
											</a >
										</li><!--/.project-btn--> 
									</ul>
								</div><!-- /.navbar-collapse -->
							</div><!-- /.main-menu-->
						</div><!-- /.col-->
					</div><!-- /.row -->
					<div class="home-border"></div><!-- /.home-border-->
				</div><!-- /.container-->
			</div><!-- /.header-area -->

		</header><!-- /.top-area-->
		<!-- main-menu End -->

		
		<!--about-us start -->
		<section id="home" class="about-us">
			<div class="container">
				<div class="about-us-content">
					<div class="row">
						<div class="col-sm-12">
							<div class="single-about-us">
								<div class="about-us-txt">
									<h2>
										Explorez la beauté du beau monde avec Baby Travel

									</h2>
									<div class="about-btn">
										<button  class="about-view">
											Explorez
										</button>
									</div><!--/.about-btn-->
								</div><!--/.about-us-txt-->
							</div><!--/.single-about-us-->
						</div><!--/.col-->
						<div class="col-sm-0">
							<div class="single-about-us">
								
							</div><!--/.single-about-us-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.about-us-content-->
			</div><!--/.container-->

		</section><!--/.about-us-->
		<!--about-us end -->

		<!--travel-box start-->
		<section  class="travel-box">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<div class="single-travel-boxes">
        					<div id="desc-tabs" class="desc-tabs">

								<ul class="nav nav-tabs" role="tablist">

									<li role="presentation" class="active">
									 	<a href="#tours" aria-controls="tours" role="tab" data-toggle="tab">
									 		<i class="fa fa-tree"></i>
									 		tours
									 	</a>
									</li>

									<li role="presentation">
										<a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">
											<i class="fa fa-building"></i>
											hotels
										</a>
									</li>

									<li role="presentation">
									 	<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">
									 		<i class="fa fa-plane"></i>
									 		vols
									 	</a>
									</li>
								</ul>

								<!-- Tab panes -->
								<div class="tab-content">

									<div role="tabpanel" class="tab-pane active fade in" id="tours">
										<div class="tab-para">

											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-12">
													<div class="single-tab-select-box">

														<h2>Destination</h2>

														<div class="travel-select-icon">
															<select class="form-control ">

															  	<option value="default">enter Votre destination ou pays</option><!-- /.option-->

															  	<option value="turkey">France</option><!-- /.option-->

															  	<option value="russia">chine</option><!-- /.option-->
															  	<option value="egept">USA</option><!-- /.option-->

															</select><!-- /.select-->
														</div><!-- /.travel-select-icon -->

														<div class="travel-select-icon">
															<select class="form-control ">

															  	<option value="default">enter Votre localisation</option><!-- /.option-->

															  	<option value="istambul">istambul</option><!-- /.option-->

															  	<option value="mosko">mosko</option><!-- /.option-->
															  	<option value="cairo">cairo</option><!-- /.option-->

															</select><!-- /.select-->
														</div><!-- /.travel-select-icon -->

													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->

												<div class="col-lg-2 col-md-3 col-sm-4">
													<div class="single-tab-select-box">
														<h2>Enregistrement</h2>
														<div class="travel-check-icon">
															<form action="#">
																<input type="text" name="check_in" class="form-control" data-toggle="datepicker" placeholder="12 -01 - 2017 ">
															</form>
														</div><!-- /.travel-check-icon -->
													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->

												<div class="col-lg-2 col-md-3 col-sm-4">
													<div class="single-tab-select-box">
														<h2>Vérifier</h2>
														<div class="travel-check-icon">
															<form action="#">
																<input type="text" name="check_out" class="form-control"  data-toggle="datepicker" placeholder="22 -01 - 2017 ">
															</form>
														</div><!-- /.travel-check-icon -->
													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->

												<div class="col-lg-2 col-md-1 col-sm-4">
													<div class="single-tab-select-box">
														<h2>jours</h2>
														<div class="travel-select-icon">
															<select class="form-control ">

															  	<option value="default">5</option><!-- /.option-->

															  	<option value="10">10</option><!-- /.option-->

															  	<option value="15">15</option><!-- /.option-->
															  	<option value="20">20</option><!-- /.option-->

															</select><!-- /.select-->
														</div><!-- /.travel-select-icon -->
													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->

												<div class="col-lg-2 col-md-1 col-sm-4">
													<div class="single-tab-select-box">
														<h2>Nombre</h2>
														<div class="travel-select-icon">
															<select class="form-control ">

															  	<option value="default">1</option><!-- /.option-->

															  	<option value="2">2</option><!-- /.option-->

															  	<option value="4">4</option><!-- /.option-->
															  	<option value="8">8</option><!-- /.option-->

															</select><!-- /.select-->
														</div><!-- /.travel-select-icon -->
													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->

											</div><!--/.row-->

											<div class="row">
												<div class="col-sm-5">
													<div class="travel-budget">
														<div class="row">
															<div class="col-md-3 col-sm-4">
																<h3>budget : </h3>
															</div><!--/.col-->
															<div class="co-md-9 col-sm-8">
																<div class="travel-filter">
																	<div class="info_widget">
																		<div class="price_filter">
																			
																			<div id="slider-range"></div><!--/.slider-range-->

																			<div class="price_slider_amount">
																				<input type="text" id="amount" name="price"  placeholder="Add Your Price" />
																			</div><!--/.price_slider_amount-->
																		</div><!--/.price-filter-->
																	</div><!--/.info_widget-->
																</div><!--/.travel-filter-->
															</div><!--/.col-->
														</div><!--/.row-->
													</div><!--/.travel-budget-->
												</div><!--/.col-->
												<div class="clo-sm-7">
													<div class="about-btn travel-mrt-0 pull-right">
														<button  class="about-view travel-btn">
															Recherche	
														</button><!--/.travel-btn-->
													</div><!--/.about-btn-->
												</div><!--/.col-->

											</div><!--/.row-->

										</div><!--/.tab-para-->

									</div><!--/.tabpannel-->

									<div role="tabpanel" class="tab-pane fade in" id="hotels">
										<div class="tab-para">

											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-12">
													<div class="single-tab-select-box">

														<h2>destination</h2>

														<div class="travel-select-icon">
															<select class="form-control ">

															  	<option value="default">enter your destination country</option><!-- /.option-->

															  	<option value="turkey">turkey</option><!-- /.option-->

															  	<option value="russia">russia</option><!-- /.option-->
															  	<option value="egept">egypt</option><!-- /.option-->

															</select><!-- /.select-->
														</div><!-- /.travel-select-icon -->

														<div class="travel-select-icon">
															<select class="form-control ">

															  	<option value="default">enter your destination location</option><!-- /.option-->

															  	<option value="istambul">istambul</option><!-- /.option-->

															  	<option value="mosko">mosko</option><!-- /.option-->
															  	<option value="cairo">cairo</option><!-- /.option-->

															</select><!-- /.select-->
														</div><!-- /.travel-select-icon -->

													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->

												<div class="col-lg-2 col-md-3 col-sm-4">
													<div class="single-tab-select-box">
														<h2>check in</h2>
														<div class="travel-check-icon">
															<form action="#">
																<input type="text" name="check_in" class="form-control" data-toggle="datepicker" placeholder="12 -01 - 2017 ">
															</form>
														</div><!-- /.travel-check-icon -->
													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->

												<div class="col-lg-2 col-md-3 col-sm-4">
													<div class="single-tab-select-box">
														<h2>check out</h2>
														<div class="travel-check-icon">
															<form action="#">
																<input type="text" name="check_out" class="form-control"  data-toggle="datepicker" placeholder="22 -01 - 2017 ">
															</form>
														</div><!-- /.travel-check-icon -->
													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->

												<div class="col-lg-2 col-md-1 col-sm-4">
													<div class="single-tab-select-box">
														<h2>duration</h2>
														<div class="travel-select-icon">
															<select class="form-control ">

															  	<option value="default">5</option><!-- /.option-->

															  	<option value="10">10</option><!-- /.option-->

															  	<option value="15">15</option><!-- /.option-->
															  	<option value="20">20</option><!-- /.option-->

															</select><!-- /.select-->
														</div><!-- /.travel-select-icon -->
													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->

												<div class="col-lg-2 col-md-1 col-sm-4">
													<div class="single-tab-select-box">
														<h2>members</h2>
														<div class="travel-select-icon">
															<select class="form-control ">

															  	<option value="default">1</option><!-- /.option-->

															  	<option value="2">2</option><!-- /.option-->

															  	<option value="4">4</option><!-- /.option-->
															  	<option value="8">8</option><!-- /.option-->

															</select><!-- /.select-->
														</div><!-- /.travel-select-icon -->
													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->

											</div><!--/.row-->

											<div class="row">
												<div class="col-sm-5"></div><!--/.col-->
												<div class="clo-sm-7">
													<div class="about-btn travel-mrt-0 pull-right">
														<button  class="about-view travel-btn">
															search	
														</button><!--/.travel-btn-->
													</div><!--/.about-btn-->
												</div><!--/.col-->

											</div><!--/.row-->

										</div><!--/.tab-para-->

									</div><!--/.tabpannel-->

									<div role="tabpanel" class="tab-pane fade in" id="flights">
										<div class="tab-para">
											<div class="trip-circle">
												<div class="single-trip-circle">
													<input type="radio" id="radio01" name="radio" />
  													<label for="radio01">
  														<span class="round-boarder">
  															<span class="round-boarder1"></span>
  														</span>round trip
  													</label>
												</div><!--/.single-trip-circle-->
												<div class="single-trip-circle">
													<input type="radio" id="radio02" name="radio" />
  													<label for="radio02">
  														<span class="round-boarder">
  															<span class="round-boarder1"></span>
  														</span>on way
  													</label>
												</div><!--/.single-trip-circle-->
											</div><!--/.trip-circle-->
											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-12">
													<div class="single-tab-select-box">

														<h2>from</h2>

														<div class="travel-select-icon">
															<select class="form-control ">

															  	<option value="default">enter your location</option><!-- /.option-->

															  	<option value="turkey">turkey</option><!-- /.option-->

															  	<option value="russia">russia</option><!-- /.option-->
															  	<option value="egept">egypt</option><!-- /.option-->

															</select><!-- /.select-->
														</div><!-- /.travel-select-icon -->
													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->

												<div class="col-lg-2 col-md-3 col-sm-4">
													<div class="single-tab-select-box">
														<h2>departure</h2>
														<div class="travel-check-icon">
															<form action="#">
																<input type="text" name="departure" class="form-control" data-toggle="datepicker"
																placeholder="12 -01 - 2017 ">
															</form>
														</div><!-- /.travel-check-icon -->
													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->

												<div class="col-lg-2 col-md-3 col-sm-4">
													<div class="single-tab-select-box">
														<h2>return</h2>
														<div class="travel-check-icon">
															<form action="#">
																<input type="text" name="return" class="form-control" data-toggle="datepicker" placeholder="22 -01 - 2017 ">
															</form>
														</div><!-- /.travel-check-icon -->
													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->

												<div class="col-lg-2 col-md-1 col-sm-4">
													<div class="single-tab-select-box">
														<h2>adults</h2>
														<div class="travel-select-icon">
															<select class="form-control ">

															  	<option value="default">5</option><!-- /.option-->

															  	<option value="10">10</option><!-- /.option-->

															  	<option value="15">15</option><!-- /.option-->
															  	<option value="20">20</option><!-- /.option-->

															</select><!-- /.select-->
														</div><!-- /.travel-select-icon -->
													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->

												<div class="col-lg-2 col-md-1 col-sm-4">
													<div class="single-tab-select-box">
														<h2>childs</h2>
														<div class="travel-select-icon">
															<select class="form-control ">

															  	<option value="default">1</option><!-- /.option-->

															  	<option value="2">2</option><!-- /.option-->

															  	<option value="4">4</option><!-- /.option-->
															  	<option value="8">8</option><!-- /.option-->

															</select><!-- /.select-->
														</div><!-- /.travel-select-icon -->
													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->

											</div><!--/.row-->

											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-12">
													<div class="single-tab-select-box">

														<h2>to</h2>

														<div class="travel-select-icon">
															<select class="form-control ">

															  	<option value="default">enter your destination location</option><!-- /.option-->

															  	<option value="istambul">istambul</option><!-- /.option-->

															  	<option value="mosko">mosko</option><!-- /.option-->
															  	<option value="cairo">cairo</option><!-- /.option-->

															</select><!-- /.select-->
														</div><!-- /.travel-select-icon -->

													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->
												<div class="col-lg-3 col-md-3 col-sm-4">
													<div class="single-tab-select-box">

														<h2>class</h2>
														<div class="travel-select-icon">
															<select class="form-control ">

															  	<option value="default">enter class</option><!-- /.option-->

															  	<option value="A">A</option><!-- /.option-->

															  	<option value="B">B</option><!-- /.option-->
															  	<option value="C">C</option><!-- /.option-->

															</select><!-- /.select-->
														</div><!-- /.travel-select-icon -->
													</div><!--/.single-tab-select-box-->
												</div><!--/.col-->
												<div class="clo-sm-5">
													<div class="about-btn pull-right">
														<button  class="about-view travel-btn">
															search	
														</button><!--/.travel-btn-->
													</div><!--/.about-btn-->
												</div><!--/.col-->
												
											</div><!--/.row-->

										</div>

									</div><!--/.tabpannel-->

								</div><!--/.tab content-->
							</div><!--/.desc-tabs-->
        				</div><!--/.single-travel-box-->
        			</div><!--/.col-->
        		</div><!--/.row-->
        	</div><!--/.container-->

        </section><!--/.travel-box-->
		<!--travel-box end-->

        <!--service start-->
		<section id="service" class="service">
			<div class="container">

				<div class="service-counter text-center">

					<div class="col-md-4 col-sm-4">
						<div class="single-service-box">
							<div class="service-img">
								<img src="assets/images/service/s1.png" alt="service-icon" />
							</div><!--/.service-img-->
							<div class="service-content">
								<h2>
									<a href="#">
									Forfaits Touristiques Incroyables
									</a>
								</h2>
							</div><!--/.service-content-->
						</div><!--/.single-service-box-->
					</div><!--/.col-->

					<div class="col-md-4 col-sm-4">
						<div class="single-service-box">
							<div class="service-img">
								<img src="assets/images/service/s2.png" alt="service-icon" />
							</div><!--/.service-img-->
							<div class="service-content">
								<h2>
									<a href="#">
									Réserver Un Hôtel De Première Classe
									</a>
								</h2>
							</div><!--/.service-content-->
						</div><!--/.single-service-box-->
					</div><!--/.col-->

					<div class="col-md-4 col-sm-4">
						<div class="single-service-box">
							<div class="statistics-img">
								<img src="assets/images/service/s3.png" alt="service-icon" />
							</div><!--/.service-img-->
							<div class="service-content">

								<h2>
									<a href="#">
										Réservation De Vol En Ligne
									</a>
								</h2>
							</div><!--/.service-content-->
						</div><!--/.single-service-box-->
					</div><!--/.col-->

				</div><!--/.statistics-counter-->	
			</div><!--/.container-->

		</section><!--/.service-->
		<!--service end-->

		<!--galley start-->
		<section id="gallery" class="gallery">
			<div class="container">
				<div class="gallery-details">
					<div class="gallary-header text-center">
						<h2>
							top destination
						</h2>
					
					</div><!--/.gallery-header-->
					<div class="gallery-box">
						<div class="gallery-content">
						  	<div class="filtr-container">
						  		<div class="row">

						  			<div class="col-md-6">
						  				<div class="filtr-item">
											<img src="assets/images/gallary/g11.jpg" alt="portfolio image"/>
											<div class="item-title">
												<a href="#">
													chine
												</a>
												<p><span>20 tours</span><span>15 places</span></p>
											</div><!-- /.item-title -->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-6">
						  				<div class="filtr-item">
											<img src="assets/images/gallary/g12.jpg" alt="portfolio image"/>
											<div class="item-title">
												<a href="#">
													maroc
												</a>
												<p><span>12 tours</span><span>9 places</span></p>
											</div> <!-- /.item-title-->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-4">
						  				<div class="filtr-item">
											<img src="assets/images/gallary/g3.jpg" alt="portfolio image"/>
											<div class="item-title">
												<a href="#">
													Bresile
												</a>
												<p><span>25 tours</span><span>10 places</span></p>
											</div><!-- /.item-title -->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-4">
						  				<div class="filtr-item">
											<img src="assets/images/gallary/g13.jpg" alt="portfolio image"/>
											<div class="item-title">
												<a href="#">
													Borabora
												</a>
												<p><span>18 tours</span><span>9 places</span></p>
											</div> <!-- /.item-title-->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-4">
						  				<div class="filtr-item">
											<img src="assets/images/gallary/g14.jpg" alt="portfolio image"/>
											<div class="item-title">
												<a href="#">
													USA
												</a>
												<p><span>14 tours</span><span>12 places</span></p>
											</div> <!-- /.item-title-->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-8">
						  				<div class="filtr-item">
											<img src="assets/images/gallary/g6.jpg" alt="portfolio image"/>
											<div class="item-title">
												<a href="#">
													turkey
												</a>
												<p><span>14 tours</span><span>6 places</span></p>
											</div> <!-- /.item-title-->
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  		</div><!-- /.row -->

						  	</div><!-- /.filtr-container-->
						</div><!-- /.gallery-content -->
					</div><!--/.galley-box-->
				</div><!--/.gallery-details-->
			</div><!--/.container-->

		</section><!--/.gallery-->
		<!--gallery end-->


		<!--discount-offer start-->
		<section class="discount-offer">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="dicount-offer-content text-center">
							<h2>Rejoignez-Nous Et Obtenez Jusqu'à 40% De Réduction</h2>
							<div class="campaign-timer">
								<div id="timer">
									<div class="time time-after" id="days">
										<span></span>
									</div><!--/.time-->
									<div class="time time-after" id="hours">

									</div><!--/.time-->
									<div class="time time-after" id="minutes">

									</div><!--/.time-->
									<div class="time" id="seconds">

									</div><!--/.time-->
								</div><!--/.timer-->
							</div><!--/.campaign-timer-->
							<div class="about-btn">
								<button  class="about-view discount-offer-btn">
									Nous rejoindre
								</button>
							</div><!--/.about-btn-->


						</div><!-- /.dicount-offer-content-->
					</div><!-- /.col-->
				</div><!-- /.row-->
			</div><!-- /.container-->

		</section><!-- /.discount-offer-->
		<!--discount-offer end-->

		<!--packages start-->
		<section id="pack" class="packages">
			<div class="container">
				<div class="gallary-header text-center">
					<h2>
						Nos destinations
					</h2>
				
				</div><!--/.gallery-header-->
				<div class="packages-content">
					<div class="row">

						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="https://cis.fti-group.com/images/1291750.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Espagne<span class="pull-right">$499</span></h3>
									<div class="packages-para">
										<p>
											<span>
												<i class="fa fa-angle-right"></i> 5 Jours 6 Nuit
											</span>
											<i class="fa fa-angle-right"></i>  Hébergement 5 accomodation
										</p>
										<p>
											<span>
												<i class="fa fa-angle-right"></i>  Transport
											</span>
											<i class="fa fa-angle-right"></i>  Installations
										 </p>
									</div><!--/.packages-para-->
									<div class="packages-Avis">
										<p>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<span>2544 Avis</span>
										</p>
									</div><!--/.packages-Avis-->
									<div class="about-btn">
										<button  class="about-view packages-btn">
											Reservation
										</button>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->

						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="https://back-promocam.orchestra-platform.com/admin/TS/fckUserFiles/Image/MV_-_EQUATOR_VILLAGE/principale.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Italie<span class="pull-right">$1499</span></h3>
									<div class="packages-para">
										<p>
											<span>
												<i class="fa fa-angle-right"></i> 5 Jours 6 Nuit
											</span>
											<i class="fa fa-angle-right"></i>  Hébergement 5 accomodation
										</p>
										<p>
											<span>
												<i class="fa fa-angle-right"></i>  Transport
											</span>
											<i class="fa fa-angle-right"></i>  Installations
										 </p>
									</div><!--/.packages-para-->
									<div class="packages-Avis">
										<p>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<span>2544 Avis</span>
										</p>
									</div><!--/.packages-Avis-->
									<div class="about-btn">
										<button  class="about-view packages-btn">
											Reservation
										</button>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->
						
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="https://medias.exotismes.fr/images/produit/19885/15-nika-spa.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>france <span class="pull-right">$1199</span></h3>
									<div class="packages-para">
										<p>
											<span>
												<i class="fa fa-angle-right"></i> 5 Jours 6 Nuit
											</span>
											<i class="fa fa-angle-right"></i>  Hébergement 5 accomodation
										</p>
										<p>
											<span>
												<i class="fa fa-angle-right"></i>  Transport
											</span>
											<i class="fa fa-angle-right"></i>  Installations
										 </p>
									</div><!--/.packages-para-->
									<div class="packages-Avis">
										<p>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<span>2544 Avis</span>
										</p>
									</div><!--/.packages-Avis-->
									<div class="about-btn">
										<button  class="about-view packages-btn">
											Reservation
										</button>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->
						</div>
<div class="row">					
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="https://medias.exotismes.fr/images/produit/19885/15-nika-island3.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Royaume-Uni<span class="pull-right">$799</span></h3>
									<div class="packages-para">
										<p>
											<span>
												<i class="fa fa-angle-right"></i> 5 Jours 6 Nuit
											</span>
											<i class="fa fa-angle-right"></i>  Hébergement 5 accomodation
										</p>
										<p>
											<span>
												<i class="fa fa-angle-right"></i>  Transport
											</span>
											<i class="fa fa-angle-right"></i>  Installations
										 </p>
									</div><!--/.packages-para-->
									<div class="packages-Avis">
										<p>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<span>2544 Avis</span>
										</p>
									</div><!--/.packages-Avis-->
									<div class="about-btn">
										<button  class="about-view packages-btn">
											Reservation
										</button>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->
						
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="https://medias.exotismes.fr/images/produit/16762/14-cocopalmdk-sunset-lagoon-villa-(9).jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>spain <span class="pull-right">$999</span></h3>
									<div class="packages-para">
										<p>
											<span>
												<i class="fa fa-angle-right"></i> 5 Jours 6 Nuit
											</span>
											<i class="fa fa-angle-right"></i>  Hébergement 5 accomodation
										</p>
										<p>
											<span>
												<i class="fa fa-angle-right"></i>  Transport
											</span>
											<i class="fa fa-angle-right"></i>  Installations
										 </p>
									</div><!--/.packages-para-->
									<div class="packages-Avis">
										<p>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<span>2544 Avis</span>
										</p>
									</div><!--/.packages-Avis-->
									<div class="about-btn">
										<button  class="about-view packages-btn">
											Reservation
										</button>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->
						
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="https://medias.exotismes.fr/images/produit/16748/13-olhuveli-13-o-veli-aerial-4.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Allemagne <span class="pull-right">$799</span></h3>
									<div class="packages-para">
										<p>
											<span>
												<i class="fa fa-angle-right"></i> 5 Jours 6 Nuit
											</span>
											<i class="fa fa-angle-right"></i>  Hébergement 5 accomodation
										</p>
										<p>
											<span>
												<i class="fa fa-angle-right"></i>  Transport
											</span>
											<i class="fa fa-angle-right"></i>  Installations
										 </p>
									</div><!--/.packages-para-->
									<div class="packages-Avis">
										<p>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<span>2544 Avis</span>
										</p>
									</div><!--/.packages-Avis-->
									<div class="about-btn">
										<button  class="about-view packages-btn">
											Reservation
										</button>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->

					</div><!--/.row-->
				</div><!--/.packages-content-->
			</div><!--/.container-->

		</section><!--/.packages-->
		<!--packages end-->


		<!--special-offer start-->
		<section id="spo" class="special-offer">
			<div class="container">
				<div class="special-offer-content">
					<div class="row">
						<div class="col-sm-8">
							<div class="single-special-offer">
								<div class="single-special-offer-txt">
									<h2>thiland</h2>
									<div class="packages-Avis special-offer-Avis">
										<p>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<span>2544 Avis</span>
										</p>
									</div><!--/.packages-Avis-->
									<div class="packages-para special-offer-para">
										<p>
											<span>
												<i class="fa fa-angle-right"></i> 5 Jours 6 Nuit
											</span>
											<span>
												<i class="fa fa-angle-right"></i> 2 person
											</span>
											<span>
												<i class="fa fa-angle-right"></i>  Hébergement 5 accomodation
											</span>
										</p>
										<p>
											<span>
												<i class="fa fa-angle-right"></i>  Transport
											</span>
											<span>
												<i class="fa fa-angle-right"></i>  Installations
											</span>  
										</p>
										
									</div><!--/.offer-btn-group-->
								</div><!--/.single-special-offer-txt-->
							</div><!--/.single-special-offer-->
						</div><!--/.col-->
						<div class="col-sm-4">
							<div class="single-special-offer">
								<div class="single-special-offer-bg">
									<img src="assets/images/offer/offer-shape.png" alt="offer-shape">
								</div><!--/.single-special-offer-bg-->
								<div class="single-special-shape-txt">
									<h3>special offer</h3>
									<h4><span>40%</span><br>de reduction</h4>
								</div><!--/.single-special-shape-txt-->
							</div><!--/.single-special-offer-->
						</div><!--/.col-->
					</div><!--/.row-->
				</div><!--/.special-offer-content-->
			</div><!--/.container-->

		</section><!--/.special-offer end-->
		<!--special-offer end-->

		<!--blog start-->
		<section id="blog" class="blog">
			<div class="container">
				<div class="blog-details">
						<div class="gallary-header text-center">
							<h2>
								Suivez-nous, on vous emmène
							</h2>
						
						</div><!--/.gallery-header-->
						<div class="blog-content">
							<div class="row">

								<div class="col-sm-4 col-md-4">
									<div class="thumbnail">
									
										<div class="thumbnail-img">
											<img src="https://static.service-voyages.com/photos/vacances-france-languedoc-roussillon/torreilles-plage/piscine-fram-residence-club---mediterranee-roussillon_527828_panohd.jpg" alt="blog-img">
											<div class="thumbnail-img-overlay"></div><!--/.thumbnail-img-overlay-->
										
										</div><!--/.thumbnail-img-->
									  
										
									</div><!--/.thumbnail-->

								</div><!--/.col-->

								<div class="col-sm-4 col-md-4">
									<div class="thumbnail">
									
										<div class="thumbnail-img">
											<img src="https://static.service-voyages.com/photos/vacances-france-languedoc-roussillon/argeles-sur-mer/piscine-fram-camping-club-bois-fleuri-occitanie_525483_panohd.jpgg" alt="blog-img">
											<div class="thumbnail-img-overlay"></div><!--/.thumbnail-img-overlay-->
										
										</div><!--/.thumbnail-img-->
									
									</div><!--/.thumbnail-->

								</div><!--/.col-->

								<div class="col-sm-4 col-md-4">
									<div class="thumbnail">
									
										<div class="thumbnail-img">
											<img src="https://static.service-voyages.com/photos/vacances-andalousie/malaga/piscine-jumbo-palia-las-palomas_511796_panohd.jpg" alt="blog-img">
											<div class="thumbnail-img-overlay"></div><!--/.thumbnail-img-overlay-->
										
										</div><!--/.thumbnail-img-->
									
									</div><!--/.thumbnail-->

								</div><!--/.col-->

							</div><!--/.row-->
						</div><!--/.blog-content-->
					</div><!--/.blog-details-->
				</div><!--/.container-->

		</section><!--/.blog-->
		<!--blog end-->

		
		<!--subscribe start-->
		<section id="subs" class="subscribe">
			<div class="container">
				<div class="subscribe-title text-center">
			
					<p>
						Abonnez-vous maintenant. Nous vous enverrons la meilleure offre pour votre voyage
					</p>
				</div>
				<form>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
							<div class="custom-input-group">
								<input type="email" class="form-control" placeholder="Entrer votre email">
								<button class="appsLand-btn subscribe-btn">Inscription</button>
								<div class="clearfix"></div>
								<i class="fa fa-envelope"></i>
							</div>

						</div>
					</div>
				</form>
			</div>


		</section>
		<!--subscribe end-->
				

		<!-- footer-copyright start -->
		<footer  class="footer-copyright">
			<div class="container">
			
				<hr>
				<div class="foot-icons ">
					<ul class="footer-social-links list-inline list-unstyled">
		                <li><a href="#" target="_blank" class="foot-icon-bg-1"><i class="fa fa-facebook"></i></a></li>
		                <li><a href="#" target="_blank" class="foot-icon-bg-2"><i class="fa fa-twitter"></i></a></li>
		                <li><a href="#" target="_blank" class="foot-icon-bg-3"><i class="fa fa-instagram"></i></a></li>
		        	</ul>

		        </div><!--/.foot-icons-->
				<div id="scroll-Top">
					<i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div><!--/.scroll-Top-->
			</div><!-- /.container-->

		</footer><!-- /.footer-copyright-->
		<!-- footer-copyright end -->




		<script src="assets/js/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->

		<!--modernizr.min.js-->
		<script  src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


		<!--bootstrap.min.js-->
		<script  src="assets/js/bootstrap.min.js"></script>

		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

		<!-- jquery.filterizr.min.js -->
		<script src="assets/js/jquery.filterizr.min.js"></script>

		<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

		<!--jquery-ui.min.js-->
        <script src="assets/js/jquery-ui.min.js"></script>

        <!-- counter js -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>

		<!--owl.carousel.js-->
        <script  src="assets/js/owl.carousel.min.js"></script>

        <!-- jquery.sticky.js -->
		<script src="assets/js/jquery.sticky.js"></script>

        <!--datepicker.js-->
        <script  src="assets/js/datepicker.js"></script>

		<!--Custom JS-->
		<script src="assets/js/custom.js"></script>


	</body>

</html>