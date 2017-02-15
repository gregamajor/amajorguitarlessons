<!DOCTYPE html>
<html lang="en">
	<?php 	include "../vars.php";
		include __DIR__ . "/KcMoVars.php"; ?>
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	    <meta name="description" content="Our trained and professional guitar instructors come to your house for the music lesson! All ages and styles. We teach what you want to learn. We are the best option. More Affordable, flexible, convenient, and fun!">
		<meta name="keywords" content="">
		<meta name="author" content="">


	    <title>Guitar Lessons in <?= ($cityname) ?></title>

	    <!-- CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400italic|Montserrat:700,400|Varela+Round">

		<!-- Font Icon -->
		<link rel="stylesheet" href="/fonts/icomoon/icomoon.css">

		<!-- Swipebox -->
		<link rel="stylesheet" href="/css/swipebox.css">

		<!-- Animate CSS -->
		<link rel="stylesheet" href="/css/animate.min.css">

		<!-- Custom CSS -->
		<link rel="stylesheet" href="/css/style-v2.css">
		<link rel="stylesheet" href="/css/style-responsive-v2.css">
		<link rel="stylesheet" href="/css/expandableGallery.css">

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    <script src="/js/modernizr.js"></script> <!-- Modernizr -->

	    <!-- FAV AND TOUCH ICONS -->
	    <link rel="shortcut icon" href="/images/favicon/favicon.ico">

	    <link rel="icon" type="image/png" href="/images/favicon/favicon-32.png">

	    <!-- For iPad with high-resolution Retina display running iOS ≥ 7: -->
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="/images/favicon/apple-touch-icon-152.png">

		<!-- For iPad with high-resolution Retina display running iOS ≤ 6: -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/favicon/apple-touch-icon-144.png">

		<!-- For iPhone with high-resolution Retina display running iOS ≥ 7: -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/favicon/apple-touch-icon-114.png">

		<!-- For iPad and iPad mini models with a 1× display -->
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="/images/favicon/apple-touch-icon-76.png">

		<!-- For first- and second-generation iPad: -->
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/favicon/apple-touch-icon-72.png">

		<!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
		<link rel="apple-touch-icon-precomposed" href="/images/favicon/apple-touch-icon-57.png">


  	</head>

  	<body>

	  	<!--
		==========================
		== BEGIN HEADER CONTENT ==
		==========================
		-->
	  	<header id="main-header" class="the-header the-origin-header">

			<div class="container">
				<div class="row">

					<div class="col-lg-12">

						<a href="/<?= ($city) ?>/" class="logo"><img src="/images/logo-a-major-horizontal.png" alt="A Major Logo"></a> <!-- Your Logo -->

						<a href="#0" id="nav-menu-trigger" class="menu-toggle flip pull-right all-caps">Menu<span class="icon-menu5"></span></a> <!-- Menu Toggle -->

					</div> <!--/ .col-lg-12 -->

				</div> <!--/ .row -->
			</div> <!--/ .container -->

	  	</header>
	  	<!--
		=========================
		==/ END HEADER CONTENT ==
		=========================
		-->


		<!--
		============================
		== BEGIN NAV MENU CONTENT ==
		============================
		-->
		<nav id="nav-wrapper">

			<a class="nav-close" href="#0"><span class="icon-cross2"></span></a>

			<ul id="main-nav" class="main-nav all-caps">
				
			<?= ($cityindexnavlinks) ?>
			
			</ul> <!--/ .secondary-nav -->

		</nav>
		<!--
		===========================
		==/ END NAV MENU CONTENT ==
		===========================
		-->


		<!--
		========================
		== BEGIN MAIN CONTENT ==
		========================
		-->
		<main id="main-content" class="hero-form-layout" style="margin-bottom: 234px;">

			<!--
			========================
			== BEGIN HERO SECTION ==
			========================
			-->
			<section id="hero" class="breaking">

				<div class="hero-split-right"></div>

				<div class="container">

					<div class="vertical-center-wrapper">
						<div class="vertical-center-table">
							<div class="vertical-center-content">

								<!-- BEGIN Hero Content -->
								<div class="hero-content row">
									<div class="col-lg-6 col-md-6 col-sm-6 margin-top-50">

										<h2 class="text-shadow-medium" data-sr="enter top over 1s and move 50px wait 0.3s"><?= ($Tagline)?></h2>
										
										<p class="lead zero-bottom text-shadow-xsmall" data-sr="enter top over 1s and move 50px wait 0.4s"><?= ($CitySubTagline1) ?><br><?= ($CitySubTagline3) ?></p>
										
										<div class="row">
											<div class="col-lg-10">

												<div class="embed-responsive embed-responsive-16by9" data-sr="enter bottom over 1s and move 75px">
													<?= ($HeaderVideo) ?>
												</div> <!--/ .embed-responsive -->

											</div>
										</div> <!--/ .row -->

									</div> <!--/ .col-lg-6 -->

									<div class="hero-form-wrapper col-lg-5 col-lg-offset-1 col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1 centered margin-top-50" data-sr="over 1.25s">

										<h4 class="all-caps margin-bot-5">Schedule your free trial lesson now!</h4>

										<p class="zero-bottom">or use the form to ask us any question!</p>

										<form class="register-form margin-top-5 margin-bot-5" id="register-form" method="post">
											<div class="row">

												<?= ($HeroFormVar) ?>

											</div>
										</form> <!--/ .register-form -->

									</div> <!--/ .hero-form-wrapper -->

								</div> <!--/ .row -->
								<!-- END Hero Content -->

							</div> <!--/ .vertical-center-content -->

						</div> <!--/ .vertical-center-table -->
					</div> <!-- / .vertical-center-wrapper -->

				</div> <!--/ .container -->

			</section>
			<!--
			=======================
			==/ END HERO SECTION ==
			=======================
			-->


			


			<!--
			==============================
			== BEGIN How it Works SECTION ==
			==============================
			-->
			<section id="what-we-do" class="centered">
			
				<!--<div class="col-lg-12">
					<div class="attention-box">
						<?//= ($HowItWorksTopSectHigherPrice) ?>
					</div>
				</div>-->
			
				<div class="container">
					<div class="row">

						<!---->

						<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 centered">

						
						<?= ($HowItWorksTopSect) ?>
						
						<div class="col-lg-12">
					<!-- BEGIN Attention Box -->
					<?= ($Contactbox) ?>
					<!--/ END Attention Box -->
						</div>

						</div><!--/ .col-lg-10 -->

						<div class="clearfix"></div>

						<a href="#0" class="cta cta-default all-caps contact-trigger"> Get in Touch</a>

					</div> <!--/ .row -->
					
				</div> <!--/ .container -->
				
			</section>
			<!--
			=============================
			==/ END How it Works SECTION ==
			=============================
			-->


			<!--
			================================
			== BEGIN HOW IT WORKS Flow Chart SECTION ==
			================================
			-->
			<section id="how-it-works" class="gray-bg centered">

				<div class="container-full">
					<div class="row">

						<!-- BEGIN How it Works Column -->
					<?= ($HowItWorksSection) ?>
						<!--/ END How it Works Column -->

					</div> <!--/ .row -->
				</div> <!--/ .container-full -->

			</section>
			<!--
			===============================
			==/ END HOW IT WORKS Flow Chart SECTION ==
			===============================
			-->



			<!--
			===============================
			== BEGIN FEATURED TEACHER SECTION ==
			===============================
			-->
			<section id="featurettes" class="expandable-gallery gray-bg no-padding">

				<div class="container-full">
					<div class="row">

						<!-- BEGIN 1st Row Featurettes / Expandable Gallery Row -->
						<div class="expandable-gallery-wrapper col-lg-6 col-md-6 no-padding">

							<ul class="expandable-gallery-item">
								<li class="selected"><img src="/<?= ($city) ?>/images/city-Greg-Weinecke-Guitar-Instructor-Music-Lessons.jpg" alt="Greg Weinecke Profile Picture"></li>
								<li><img src="/<?= ($city) ?>/images/city-greg-instructing.jpg" alt="Greg Teaching"></li>
								<li><img src="/<?= ($city) ?>/images/city-Group Lesson Photo.jpg" alt="Teaching a Group Guitar Lesson"></li>
							</ul> <!-- expandable-gallery-item -->

							<ul class="expandable-gallery-nav">
								<li><a href="#0" class="expand-prev inactive">Next</a></li>
								<li><a href="#0" class="expand-next">Prev</a></li>
							</ul> <!-- expandable-gallery-nav -->

							<a href="#0" class="expandable-close">Close</a>

						</div> <!--/ .expandable-gallery-wrapper -->

						<div class="expandable-gallery-info two-blocks-col col-lg-6 col-md-6">

							<!--NEED TO MAKE AN INSTRUCTOR PAGE FOR BIGGER SCREENS-->

						<?= ($CityNoTeacher1Bio1) ?>
							
							<!--<ul class="checklist">
								<li>Nullam id dolor id nibh ultricies vehicula ut id elit.</li>
								<li>Aenean lacinia bibendum nulla sed consectetur.</li>
								<li>Nulla vitae elit libero, a pharetra augue.</li>
								<li>Etiam porta sem malesuada magna mollis euismod a pharetra augue.</li>
								<li class="visible-lg">Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
							</ul> <!--/ .checklist -->

							<!-- Greg W's Bio  <a href="#0" class="more">Read More</a>-->

						</div> <!--/ .expandable-gallery-info -->
						<!--/ END 1st Row Featurettes / Expandable Gallery Row -->

						<div class="clearfix"></div>

						<!-- BEGIN 2nd Row Featurettes -->
						<div class="two-blocks-col col-lg-6 col-md-6">

							<h3>Info About Lessons</h3>

							<!-- BEGIN Content Tab -->
							<div class="content-tab-wrapper" role="tabpanel">

								<!-- BEGIN Nav tabs -->
							<?= ($CityTeacherNavTabLinks) ?>
								<!--/ END Nav tabs -->


								<!-- BEGIN Tab panes -->
								<div class="tab-content">

									<div role="tabpanel" class="tab-pane fade in active" id="first">
								<?= ($CityTeacher1Bio2) ?>
								<!-- Greg W's Bio  <a href="#0" class="more">Read More</a>-->
									
									</div> <!-- First Tab Pane -->

									<?= ($CityTeacherTab123) ?>
									<?= ($cityname) ?>
									<?= ($CityTeacherTab123part2) ?>
									
									<?= ($CityTeacherTab4) ?>
									
									<?= ($CityTeacherTab4part2) ?>

										<a href="/<?= ($city) ?>/prices/#attendance">More about attendance</a>
									</div> <!-- Fith Tab Pane -->

									<div role="tabpanel" class="tab-pane fade" id="fifth">
								<?= ($CityTeacherTab5) ?>
								<!-- read more link about what you'll learn --> 
									</div> <!-- Fifth Tab Pane -->

								</div>
								<!--/ END Tab panes -->

							</div> <!--/ .content-tab-wrapper -->
							<!--/ END Content Tab -->

						</div> <!--/ .two-blocks-col -->

						<div class="featurettes-quote-wrapper col-lg-6 col-md-6 no-padding">

							<div class="vertical-center-wrapper">

								<div class="vertical-center-table">

									<div class="vertical-center-content">

										<div class="featurettes-quote centered">

									<?= ($TeacherTestimonialTabSect) ?>
									<!--<h4 class="featurettes-quote-author">- Carrie B.</h4>-->

										</div>

									</div> <!--/ .vertical-center-content -->

								</div> <!--/ .vertical-center-table -->

							</div> <!--/ .vertical-center-wrapper -->

						</div> <!--/ .col-lg-6 -->
						<!--/ END 2nd Row Featurettes -->


					</div> <!--/ .row -->
				</div> <!--/ .container-full -->

			</section>
			<!--
			==============================
			==/ END FEATURETTED TEACHER SECTION ==
			==============================
			-->



			<!--
			================================
			== BEGIN why we're better SECTION ==
			================================
			-->
			<section id="our-features">

				<div class="container">
					<div class="row">

						<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 centered">

						<?= ($WhyWereBetterSection) ?> 
						
						<!--<a href="#0" class="cta cta-default all-caps">Learn More</a>-->
						</div>

					</div> <!--/ .row -->
				</div> <!--/ .container -->

			</section>
			<!--
			===============================
			==/ END why we're better SECTION ==
			===============================
			-->



			

			<!--
			===========================
			== BEGIN PRICING SECTION ==
			===========================
			-->
			<section id="pricing" class="centered">

				<div class="container">
					<div class="row">
				
						<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 centered">
														
						<?= ($Citypricingindextitle) ?>
						
						<?//= ($HowItWorksTopSectHigherPrice2) ?>
							
						
						<h4><a href="/<?= ($city) ?>/prices/">Click here to see more pricing info</a></h4>
						
						</div> <!--/ .col-lg-8 -->

						<div class="clearfix"></div>

						<!-- BEGIN Pricing Table -->
						<ul class="pricing">

							<div class="col-lg-3 col-md-3 col-sm-3 col-sm-offset-0 col-xs-8 col-xs-offset-2">
								<li class="price" data-sr="enter bottom over 1s and move 80px wait 0.2s">

								<?= ($pricingindexfreetrial) ?>

								</li> <!--/ .price -->
							</div> <!--/ .col-lg-3 -->
									
								<div class="col-lg-3 col-md-3 col-sm-3 col-sm-offset-0 col-xs-8 col-xs-offset-2">
								<li class="price best-value" data-sr="enter bottom over 1s and move 80px wait 0.4s">
								<?= ($pricingindexmonthly1) ?>
								
								<?= ($price) ?>
								
								<?= ($pricingindexmonthly2) ?>

								
								</li> <!--/ .price -->
							</div> <!--/ .col-lg-3 -->

							<div class="col-lg-3 col-md-3 col-sm-3 col-sm-offset-0 col-xs-8 col-xs-offset-2">
								<li class="price" data-sr="enter bottom over 1s and move 80px wait 0.3s">
																							<?= ($PricePayPerLessonTitle) ?>
								<?= ($PriceCityPPL) ?>
								<?= ($PPLsection1) ?>
								
								<?= ($PPLsection2) ?>

								</li> <!--/ .price -->
							</div> <!--/ .col-lg-3 -->

							

							<div class="col-lg-3 col-md-3 col-sm-3 col-sm-offset-0 col-xs-8 col-xs-offset-2">
								<li class="price" data-sr="enter bottom over 1s and move 80px wait 0.5s">

								<?= ($giftcertsection) ?>

								</li> <!--/ .price -->
							</div> <!--/ .col-lg-3 -->

						</ul> <!--/ .pricing -->
						<!--/ END Pricing Table -->

					</div> <!--/ .row -->
				</div> <!--/ .container -->

			</section>
			<!--
			==========================
			==/ END PRICING SECTION ==
			==========================
			-->


			<!--
			==============================
			== BEGIN Trusted by SECTION ==
			==============================
			--
			<section id="top-client" class="centered">

				<div class="container">
					<div class="row">

						<!-- BEGIN Client Logo --
						<div class="client-logo">
							<div class="the-logo col-lg-2 col-md-2">

								<h5 class="top-logo-text all-caps" data-sr="enter left over 1s and move 50px wait .1s">Trusted By </h5>

							</div> <!--/ .the-logo --

							<div class="the-logo col-lg-2 col-md-2 col-sm-3 col-xs-3">

								<a href="#0"><img src="/images/client/client.png" alt="Client Logo" data-sr="scale up 30% wait .2s"/></a>

							</div> <!--/ .the-logo --

							<div class="the-logo col-lg-2 col-md-2 col-sm-3 col-xs-3">

								<a href="#0"><img src="/images/client/client.png" alt="Client Logo" data-sr="scale up 30% wait .5s"/></a>

							</div> <!--/ .the-logo --

							<div class="the-logo col-lg-2 col-md-2 col-sm-3 col-xs-3">

								<a href="#0"><img src="/images/client/client.png" alt="Client Logo" data-sr="scale up 30% wait .7s"/></a>

							</div> <!--/ .the-logo --

							<div class="the-logo col-lg-2 col-md-2 col-sm-3 col-xs-3">

								<a href="#0"><img src="/images/client/client.png" alt="Client Logo" data-sr="scale up 30% wait .9s"/></a>

							</div> <!--/ .the-logo --

							<div class="the-logo col-lg-2 col-md-2 hidden-sm hidden-xs">

								<a href="#0"><img src="/images/client/client.png" alt="Client Logo" data-sr="scale up 30% wait 1.1s"/></a>

							</div> <!--/ .the-logo -->

						<!--</div> <!--/ .client-logo --
						<!-- END Client Logo --

					</div> <!--/ .row --
				</div> <!--/ .container --

			</section>
			<!--
			=============================
			==/ END Trusted by SECTION ==
			=============================
			-->
			
			
			<!--
			==================================
			== BEGIN Testimonials SECTION ==
			==================================
			-->
			<section id="customer-story" class="gray-bg centered">

				<div class="container">
					<div class="row">

						<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 centered">

						<?= ($Testimonialtitles) ?>

						</div> <!--/ .col-lg-8 -->

						<div class="clearfix"></div>

						<!-- BEGIN Customer Logo and Testimonials -->
						<div class="customer-box-wrapper centered margin-bot-35">

							<ul class="customer-logos">

								<!-- BEGIN 1st Logo -->
								<li>
									<div class="vertical-center-wrapper">
										<div class="vertical-center-table">
											<div class="vertical-center-content">

												<img class="customer-logo" src="/images/client/client.png" alt="Customer Logo" data-sr="scale up 30%" /> <!--/ .customer-logo -->

											</div>
										</div>
									</div> <!--/ .vertical-center-wrapper -->

									<div class="customer-quote">

									<?= ($Testimonial1) ?>

									</div> <!--/ .customer-quote -->
								</li>
								<!--/ END 1st Logo -->

								<!-- BEGIN 2nd Logo -->
								<li class="center-customer-logo">
									<div class="vertical-center-wrapper">
										<div class="vertical-center-table">
											<div class="vertical-center-content">

												<img class="customer-logo" src="/images/client/client.png" alt="Customer Logo" data-sr="scale up 30% wait .2s"/> <!--/ .customer-logo -->

											</div>
										</div>
									</div> <!--/ .vertical-center-wrapper -->

									<div class="customer-quote">

									<?= ($Testimonial2) ?>

									</div> <!--/ .customer-quote -->
								</li>
								<!-- END 2nd Logo -->

								<!-- BEGIN 3rd Logo -->
								<li>
									<div class="vertical-center-wrapper">
										<div class="vertical-center-table">
											<div class="vertical-center-content">

												<img class="customer-logo" src="/images/client/client.png" alt="Customer Logo" data-sr="scale up 30% wait .4s"/> <!--/ .customer-logo -->

											</div>
										</div>
									</div> <!--/ .vertical-center-wrapper -->

									<div class="customer-quote">

									<?= ($Testimonial3) ?>

									</div> <!--/ .customer-quote -->
								</li>
								<!-- END 3rd Logo -->

							</ul> <!--/ .customer-logos -->

							<hr>

							<ul class="customer-logos">

								<!-- BEGIN 4th Logo -->
								<li>
									<div class="vertical-center-wrapper">
										<div class="vertical-center-table">
											<div class="vertical-center-content">

												<img class="customer-logo" src="/images/client/client.png" alt="Customer Logo" data-sr="scale up 30% wait .6s"/> <!--/ .customer-logo -->

											</div>
										</div>
									</div> <!--/ .vertical-center-wrapper -->

									<div class="customer-quote">

									<?= ($Testimonial4) ?>

									</div> <!--/ .customer-quote -->
								</li>
								<!-- END 4th Logo -->

								<!-- BEGIN 5th Logo -->
								<li class="center-customer-logo">
									<div class="vertical-center-wrapper">
										<div class="vertical-center-table">
											<div class="vertical-center-content">

												<img class="customer-logo" src="/images/client/client.png" alt="Customer Logo" data-sr="scale up 30% wait .8s"/> <!--/ .customer-logo -->

											</div>
										</div>
									</div> <!--/ .vertical-center-wrapper -->

									<div class="customer-quote">

									<?= ($Testimonial5) ?>

									</div> <!--/ .customer-quote -->
								</li>
								<!-- END 5th Logo -->

								<!-- BEGIN 6th Logo -->
								<li>
									<div class="vertical-center-wrapper">
										<div class="vertical-center-table">
											<div class="vertical-center-content">

												<img class="customer-logo" src="/images/client/client.png" alt="Customer Logo" data-sr="scale up 30% wait 1s"/> <!--/ .customer-logo -->

											</div>
										</div>
									</div> <!--/ .vertical-center-wrapper -->

									<div class="customer-quote">

									<?= ($Testimonial6) ?>

									</div> <!--/ .customer-quote -->
								</li>
								<!-- END 6th Logo -->

							</ul> <!--/ .customer-logos -->

						</div> <!--/ .customer-box-wrapper -->
						<!--/ END Customer Logo and Testimonials -->

						<div class="clearfix"></div>
						<a href="#0" class="cta cta-default all-caps contact-trigger">Schedule a lesson!</a>
						<!--CHANGE BACK LATER, MAKE A MORE TESTIMONIALS PAGE<a href="#0" class="cta cta-default all-caps">More Student Stories</a>-->

					</div> <!--/ .row -->
				</div> <!--/ .container -->

			</section>
			<!--
			=================================
			==/ END Testimonials SECTION ==
			=================================
			-->
			
			<!--
			============================
			== BEGIN register SECTION ==
			============================
			-->
			<section id="breakout" class="breaking centered" class="breaking">

				<div class="color-overlay">

					<div class="breaking-content">

						<div class="container">
							<div class="row">

								<?= ($registersection) ?>

							</div> <!--/ .row -->
						</div> <!--/ .container -->

					</div> <!--/ .breaking-content -->

				</div> <!--/ .color-overlay -->

			</section>
			<!--
			===========================
			==/ END register SECTION ==
			===========================
			-->
			
			<!--
			=======================
			== BEGIN TAB SECTION ==
			=======================
			-->
			<?= ($tabsection) ?> 
			<!--
			======================
			==/ END TAB SECTION ==
			======================
			-->





			<!--
			=============================
			== BEGIN SUBSCRIBE SECTION ==
LATER MAKE THIS AN ACTUAL SUBSCRIBE FOR UPDATES OR MAILING LIST THING BUT FOR NOW IT'LL JUST BE AN EMAIL ONLY CONTACT FORM
			=============================
			-->
			<section id="subscribe-section" class="breaking" class="breaking">

				<div class="color-overlay">

					<div class="breaking-content">

						<div class="container">
							<div class="row">

								<div class="col-lg-3 col-lg-offset-2 col-md-3 col-md-offset-2 col-sm-4 centered">

									<img class="subscribe-icon" src="/images/email.png" alt="Open Envelope Icon" data-sr="scale up 40% wait .2s"/>

								</div> <!--/ .col-lg-3 -->

								<div class="subscribe-section-content col-lg-5 col-md-5 col-sm-7">

								<?= ($EmailOnlyForm) ?> 
									
								</div> <!--/ .col-lg-5 -->

							</div> <!--/ .row -->
						</div> <!--/ .container -->

					</div> <!--/ .breaking-content -->

				</div><!--/ .color-overlay -->
			</section>
			<!--
			============================
			==/ END SUBSCRIBE SECTION ==
			============================
			-->

			
			

		</main> <!--/ #main-content -->
		<!--
		=======================
		==/ END MAIN CONTENT ==
		=======================
		-->


		<!--
		==========================
		== BEGIN FOOTER CONTENT ==
		==========================
		-->
		<footer id="main-footer">

			<div class="container">
				<div class="row">
					
				<?= ($FooterLinks) ?> 
				
				<?= ($SocialLinks) ?>

					<div class="copyright">

						<p>Copyright 2016 A Major Music</p>

						<!-- BEGIN language popover -->
						<div class="language">
							<span class="icon-globe"></span>
							<a tabindex="0"
								role="button"
								data-toggle="popover"
								data-trigger="focus"
								data-html="true"
								data-placement="top"
								data-content="
									<ul class='language-selection'>
										<li><a href='#'>Bahasa Indonesia</a></li>
										<li><a href='#'>Dansk</a></li>
										<li><a href='#'>Deutsch</a></li>
										<li><a href='#'>Espanol</a></li>
										<li><a href='#'>Francais</a></li>
										<li><a href='#'>ภาษาไทย</a></li>
										<li><a href='#'>日本語</a></li>
									</ul>"
							>English (US) <span class="icon-chevron-small-up"></span></a>
						</div> <!--/ .language -->
						<!-- END language popover -->

					</div> <!--/ .copyright -->

				</div> <!--/ .row -->
			</div> <!--/ .container -->

		</footer>
		<!--
		=========================
		==/ END FOOTER CONTENT ==
		=========================
		-->


		<!--
		=========================
		== BEGIN TO TOP BUTTON ==
		=========================
		-->
			<a id="to-top"><span class="icon-chevron-thin-up"></span></a>
		<!--
		========================
		==/ END TO TOP BUTTON ==
		========================
		-->


		<!--
		=================================
		== BEGIN CONTACT MODAL CONTENT ==
		=================================
		-->
		<div class="contact-overlay overlay-scale">
			<a class="overlay-close">Close</a>

			<div class="container">

				<div class="row">

					<div class="contact-content col-lg-10 col-lg-offset-1 centered">

						<h2 class="all-caps"> Contact Us </h2>

						<p>Fill out a contact form and we will be in touch with in 24 hours to schedule your free trial lesson or answer any questions!</p>

						<!-- BEGIN Contact Form -->
						<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">

							<form class="contact-form" id="contact-form" method="post">

								<div class="row">

									<?= ($PopUpFormVar) ?>

								</div>

							</form> <!--/ .contact-form -->

						</div> <!--/ .col-lg-6 -->
						<!--/ END Contact Form -->

					</div> <!--/ .contact-content -->

				</div> <!--/ .row -->

			</div> <!--/ .container -->

		</div> <!--/ .contact-overlay -->

		<!--
		================================
		==/ END CONTACT MODAL CONTENT ==
		================================
		-->


		<!--
		======================================
		== BEGIN FORM NOTIFICATIONS CONTENT ==
		======================================
		-->
		<!-- BEGIN Subscribe Form Alert/Notification -->
		<div id="subscribe-error-notification" class="notif-box">

			<span class="icon-bullhorn notif-icon"></span>
			<?= ($emailsubmiterror) ?> 
			<a class="notification-close"><span class="icon-cross2"></span></a>

		</div> <!--/ #error-notification -->

		<div id="subscribe-success-notification" class="notif-box">

			<span class="icon-checkmark notif-icon"></span>
			<?= ($emailsubmit) ?> 
			<a class="notification-close"><span class="icon-cross2"></span></a>

		</div> <!--/ #success-notification -->
		<!-- END Subscribe Form Alert/Notifications -->


		<!-- BEGIN Contact Form Alert/Notifications -->
		<div id="error-notification" class="notif-box">

			<span class="icon-bullhorn notif-icon"></span>
			<?= ($contactsubmiterror) ?> 
			<a class="notification-close"><span class="icon-cross2"></span></a>

		</div> <!--/ #error-notification -->

		<div id="success-notification" class="notif-box">

			<span class="icon-checkmark notif-icon"></span>
			<?= ($contactsubmit) ?> 
			<a class="notification-close"><span class="icon-cross2"></span></a>

		</div> <!--/ #success-notification -->
		<!-- END Contact Form Alert/Notifications -->

		<!-- BEGIN Hero Form Alert/Notifications -->
		<div id="hero-error-notification" class="notif-box">

			<span class="icon-bullhorn notif-icon"></span>
			<?= ($Herosubmiterror) ?>
			<a class="notification-close"><span class="icon-cross2"></span></a>

		</div> <!--/ #error-notification -->

		<div id="hero-success-notification" class="notif-box">

			<span class="icon-checkmark notif-icon"></span>
			<?= ($Herosubmit) ?>
			<a class="notification-close"><span class="icon-cross2"></span></a>

		</div> <!--/ #success-notification -->
		<!-- END Hero Form Alert/Notifications -->
		<!--
		=====================================
		==/ END FORM NOTIFICATIONS CONTENT ==
		=====================================
		-->


	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

	    <!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

		<!-- SmoothScroll -->
		<!--<script src="/js/minified/SmoothScroll.min.js"></script>-->

		<!-- Classie -->
		<script src="/js/minified/classie.min.js"></script>

		<!-- One Page Nav -->
		<script src="/js/minified/jquery.nav.min.js"></script>

		<!-- AjaxChimp -->
		<script src="/js/minified/jquery.ajaxchimp.min.js"></script>

		<!-- Swipebox -->
		<script src="/js/minified/jquery.swipebox.min.js"></script>

		<!-- Expandable Gallery on 2 Block Column -->
		<script src="/js/minified/expandableGallery.min.js"></script>

		<!-- Counter Up -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<script src="/js/minified/jquery.counterup.min.js"></script>

		<!-- Quicksand JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="/js/minified/jquery-css-transform.min.js"></script>
		<script src="/js/minified/jquery-animate-css-rotate-scale.min.js"></script>
		<script src="/js/minified/jquery.quicksand.min.js"></script>

		<!-- Headhesive -->
		<script src="/js/minified/headhesive.min.js"></script>

		<!-- ScrollReveal -->
		<script src="/js/minified/scrollReveal.min.js"></script>

		<!-- Stellar JS -->
		<script src="/js/jquery.stellar.js"></script>

		<!-- Custom JS -->
		<script src="/js/urip-v2.js"></script>

		<!-- Expandable Navigation Menu -->
		<script src="/js/minified/expandableNav.min.js"></script>


	</body>
</html>
