<!DOCTYPE html>
<html lang="en">
	<?php 	include "../vars.php"; ?>
<?php
require(dirname(__FILE__) . '/vendor/stripe/stripe-php/init.php');

/** 
 * First we need to configure some information:
 *
 * $stripeSecretKey is super-secret, don't share it or you'll lose all your Pokemon.
 * $stripePublicKey is safe to display publicly
 * $plans is an array of available subscriptions. Each array object's key (`studio_monthly`, `in_home_monthly`, etc.)
 * must be exactly equal to the id of the corresponding subscription in your Stripe dashboard.
 */
//$stripeSecretKey = "sk_live_hcIEy08xHa0hSUcGAIpBjScB";
//$stripePublicKey = "pk_live_qjMjTqj1J5KneexxSqlD2sE1";

$stripeSecretKey = "sk_test_2bUdb5DB7R9bdzwUH9DJgzDK";
$stripePublicKey = "pk_test_Ba7QFr3cNUK7SEV2LH7TJC3D";

$plans = [
    'one_30_min_studio_monthly' => [
        'cost'         => 1750,
        'cycle_length' => '1 month',
        'title'        => 'One Studio Lessons Monthly',
        'description'  => 'Monthly subscription for One 30 minute lesson in the A Major Music Lessons Studio'
    ],
    'two_30_min_studio_monthly' => [
        'cost'         => 3500,
        'cycle_length' => '1 month',
        'title'        => 'Two Studio Lessons Monthly',
        'description'  => 'Monthly subscription for Two 30 minute lessons in the A Major Music Lessons Studio'
    ],
    'three_30_min_studio_monthly' => [
        'cost'         => 5250,
        'cycle_length' => '1 month',
        'title'        => 'Three Studio Lessons Monthly',
        'description'  => 'Monthly subscription for Three 30 minute lessons in the A Major Music Lessons Studio'
    ],
    'studio_monthly' => [
        'cost'         => 7000,
        'cycle_length' => '1 month',
        'title'        => 'Studio Monthly',
        'description'  => 'Monthly subscription for weekly 30 minute lessons in the A Major Music Lessons Studio'
    ],
    'one_30_min_in_home_monthly' => [
        'cost'         => 2000,
        'cycle_length' => '1 month',
        'title'        => 'One In-Home Monthly',
        'description'  => 'Monthly subscription for One 30 minute lesson in your own home'
    ],
    'two_30_min_in_home_monthly' => [
        'cost'         => 4000,
        'cycle_length' => '1 month',
        'title'        => 'Two In-Home Monthly',
        'description'  => 'Monthly subscription for Two 30 minute lessons in your own home'
    ],
    'three_30_min_in_home_monthly' => [
        'cost'         => 6000,
        'cycle_length' => '1 month',
        'title'        => 'Three In-Home Monthly',
        'description'  => 'Monthly subscription for Three 30 minute lessons in your own home'
    ],
    'in_home_monthly' => [
        'cost'         => 8000,
        'cycle_length' => '1 month',
        'title'        => 'In-Home Monthly',
        'description'  => 'Monthly subscription for weekly 30 minute lessons in your own home'
    ],
    'one_hour_studio_monthly' => [
        'cost'         => 3500,
        'cycle_length' => '1 month',
        'title'        => 'One Studio Hour Lesson Monthly',
        'description'  => 'Monthly subscription for One hour lesson in the A Major Music Lessons Studio'
    ],
    'three_hour_studio_monthly' => [
        'cost'         => 10500,
        'cycle_length' => '1 month',
        'title'        => 'Three Studio Hour Lessons Monthly',
        'description'  => 'Monthly subscription for Three hour lessons in the A Major Music Lessons Studio'
    ],
    'four_hour_studio_monthly' => [
        'cost'         => 14000,
        'cycle_length' => '1 month',
        'title'        => 'Four Studio Hour Lessons Monthly',
        'description'  => 'Monthly subscription for Four hour lessons in the A Major Music Lessons Studio'
    ],
    'one_hour_in_home_monthly' => [
        'cost'         => 3750,
        'cycle_length' => '1 month',
        'title'        => 'One Hour In-Home Monthly',
        'description'  => 'Monthly subscription for One hour lesson in your own home'
    ],
    'two_hour_in_home_monthly' => [
        'cost'         => 7500,
        'cycle_length' => '1 month',
        'title'        => 'Two Hour In-Home Monthly',
        'description'  => 'Monthly subscription for Two hour lessons in your own home'
    ],
    'three_hour_in_home_monthly' => [
        'cost'         => 11250,
        'cycle_length' => '1 month',
        'title'        => 'Three Hour In-Home Monthly',
        'description'  => 'Monthly subscription for Three hour lessons in your own home'
    ],
    'four_hour_in_home_monthly' => [
        'cost'         => 15000,
        'cycle_length' => '1 month',
        'title'        => 'Four Hour In-Home Monthly',
        'description'  => 'Monthly subscription for Four hour lessons in your own home'
    ],
        'four_hour_in_home_far_monthly' => [
        'cost'         => 15500,
        'cycle_length' => '1 month',
        'title'        => 'Four Hour In-Home Monthly',
        'description'  => 'Monthly subscription for Four hour lessons in your own home outside our radius'
    ],
    'four_90_min_studio_monthly' => [
        'cost'         => 21000,
        'cycle_length' => '1 month',
        'title'        => 'Four Studio 1.5 Hour Lessons Monthly',
        'description'  => 'Monthly subscription for Four 1.5 hour lessons in the A Major Music Lessons Studio'
    ],
    'four_90_min_in_home_monthly' => [
        'cost'         => 22000,
        'cycle_length' => '1 month',
        'title'        => 'Four 1.5 Hour In-Home Monthly',
        'description'  => 'Monthly subscription for Four 1.5 hour lessons in your own home'
    ],
    'four_2_hour_studio_monthly' => [
        'cost'         => 28000,
        'cycle_length' => '1 month',
        'title'        => 'Four Studio 2 Hour Lessons Monthly',
        'description'  => 'Monthly subscription for Four 2 hour lessons in the A Major Music Lessons Studio'
    ],
    'four_2_hour_in_home_monthly' => [
        'cost'         => 29000,
        'cycle_length' => '1 month',
        'title'        => 'Four 2 Hour In-Home Monthly',
        'description'  => 'Monthly subscription for Four 2 hour lessons in your own home'
    ],
// STUDIO 30 MINUTE PAY PER LESSON NORMAL PRICES MONTHLY
    'one_30_min_studio_ppl_monthly' => [
        'cost'         => 2250,
        'cycle_length' => '1 month',
        'title'        => 'One Pay-Per-Lesson Studio Lesson Monthly',
        'description'  => 'Monthly subscription for One Pay-Per-Lesson 30 minute lesson in the A Major Music Lessons Studio'
    ],
    'two_30_min_studio_ppl_monthly' => [
        'cost'         => 4500,
        'cycle_length' => '1 month',
        'title'        => 'Two Pay-Per-Lesson Studio Lessons Monthly',
        'description'  => 'Monthly subscription for Two Pay-Per-Lesson 30 minute lessons in the A Major Music Lessons Studio'
    ],
    'three_30_min_studio_ppl_monthly' => [
        'cost'         => 6750,
        'cycle_length' => '1 month',
        'title'        => 'Three Pay-Per-Lesson Studio Lessons Monthly',
        'description'  => 'Monthly subscription for Three Pay-Per-Lesson 30 minute lessons in the A Major Music Lessons Studio'
    ],
// IN-HOME 30 MINUTE PAY PER LESSON NORMAL PRICES MONTHLY
    'one_30_min_in_home_ppl_monthly' => [
        'cost'         => 2500,
        'cycle_length' => '1 month',
        'title'        => 'One Pay-Per-Lesson In-Home Lesson Monthly',
        'description'  => 'Monthly subscription for One Pay-Per-Lesson 30 minute lesson in your home'
    ],
    'two_30_min_in_home_ppl_monthly' => [
        'cost'         => 5000,
        'cycle_length' => '1 month',
        'title'        => 'Two Pay-Per-Lesson In-Home Lessons Monthly',
        'description'  => 'Monthly subscription for Two Pay-Per-Lesson 30 minute lessons in your home'
    ],
    'three_30_min_in_home_ppl_monthly' => [
        'cost'         => 7500,
        'cycle_length' => '1 month',
        'title'        => 'Three Pay-Per-Lesson In-Home Lessons Monthly',
        'description'  => 'Monthly subscription for Three Pay-Per-Lesson 30 minute lessons in your home'
    ],
// STUDIO 30 MINUTE PAY PER LESSON Discounted PRICES MONTHLY
    'one_30_min_studio_ppl_disc_monthly' => [
        'cost'         => 2000,
        'cycle_length' => '1 month',
        'title'        => 'One Pay-Per-Lesson Studio Lesson Monthly',
        'description'  => 'Monthly subscription for One Pay-Per-Lesson 30 minute lesson in the A Major Music Lessons Studio'
    ],
    'two_30_min_studio_ppl_disc_monthly' => [
        'cost'         => 4000,
        'cycle_length' => '1 month',
        'title'        => 'Two Pay-Per-Lesson Studio Lessons Monthly',
        'description'  => 'Monthly subscription for Two Pay-Per-Lesson 30 minute lessons in the A Major Music Lessons Studio'
    ],
    'three_30_min_studio_ppl_disc_monthly' => [
        'cost'         => 6000,
        'cycle_length' => '1 month',
        'title'        => 'Three Pay-Per-Lesson Studio Lessons Monthly',
        'description'  => 'Monthly subscription for Three Pay-Per-Lesson 30 minute lessons in the A Major Music Lessons Studio'
    ],
// IN-HOME 30 MINUTE PAY PER LESSON Discounted PRICES MONTHLY
    'one_30_min_in_home_ppl_disc_monthly' => [
        'cost'         => 2250,
        'cycle_length' => '1 month',
        'title'        => 'One Pay-Per-Lesson In-Home Lesson Monthly',
        'description'  => 'Monthly subscription for One Pay-Per-Lesson 30 minute lesson in your home'
    ],
    'two_30_min_in_home_ppl_disc_monthly' => [
        'cost'         => 4500,
        'cycle_length' => '1 month',
        'title'        => 'Two Pay-Per-Lesson In-Home Lessons Monthly',
        'description'  => 'Monthly subscription for Two Pay-Per-Lesson 30 minute lessons in your home'
    ],
    'three_30_min_in_home_ppl_disc_monthly' => [
        'cost'         => 6750,
        'cycle_length' => '1 month',
        'title'        => 'Three Pay-Per-Lesson In-Home Lessons Monthly',
        'description'  => 'Monthly subscription for Three Pay-Per-Lesson 30 minute lessons in your home'
    ],
// Out of driving radius 
    'four_30_min_in_home_monthly_five_extra' => [
        'cost'         => 8500,
        'cycle_length' => '1 month',
        'title'        => 'Four 30 minute In-Home Lessons Monthly',
        'description'  => 'Monthly subscription for four 30 minute lessons in your home'
    ],
// 45-min In-home lessons
    'four_45_min_in_home_monthly' => [
        'cost'         => 11500,
        'cycle_length' => '1 month',
        'title'        => 'Four 45 minute In-Home Lessons Monthly',
        'description'  => 'Monthly subscription for four 45 minute lessons in your home'
    ],
//////////////// 4-WEEK Schedules!!!!  ////////////////////////////
    '4_30m_inhome_4W' => [
        'cost'         => 8000,
        'cycle_length' => '4 Weeks',
        'title'        => 'Four 30-minute In-Home Lessons Every 4 Weeks',
        'description'  => 'Subscription for four 30-minute lessons in your home, every 4 weeks'
    ],
    '4W_1h_inhome' => [
        'cost'         => 15000,
        'cycle_length' => '4 Weeks',
        'title'        => 'Four 1-Hour In-Home Lessons Every 4 Weeks',
        'description'  => 'Subscription for four 1-hour lessons in your home, every 4 weeks'
    ],
    '4W_90m_inhome' => [
        'cost'         => 22000,
        'cycle_length' => '4 Weeks',
        'title'        => 'Four 1.5 Hour In-Home Lessons Every 4 Weeks',
        'description'  => 'Subscription for four 1.5 Hour lessons in your home, every 4 weeks'
    ],
    '4W_30m_studio' => [
        'cost'         => 7000,
        'cycle_length' => '4 Weeks',
        'title'        => 'Four 30-minute Studio Lessons Every 4 Weeks',
        'description'  => 'Subscription for four 30-minute lessons at the A Major Music home-studio, every 4 weeks'
    ],
    '4W_1h_studio' => [
        'cost'         => 14000,
        'cycle_length' => '4 Weeks',
        'title'        => 'Four 1 Hour Studio Lessons Every 4 Weeks',
        'description'  => 'Subscription for four 1 Hour lessons at the A Major Music home-studio, every 4 weeks'
    ],
    '4W_90m_studio' => [
        'cost'         => 21000,
        'cycle_length' => '4 Weeks',
        'title'        => 'Four 1.5 Hour Studio Lessons Every 4 Weeks',
        'description'  => 'Subscription for four 1.5 Hour lessons at the A Major Music home-studio, every 4 weeks'
    ],
////   PLUS +$5  Driving Fee    ///////
    '4W_30m_inhome_5' => [
        'cost'         => 8500,
        'cycle_length' => '4 Weeks',
        'title'        => 'Four 30-minute In-Home Lessons Every 4 Weeks',
        'description'  => 'Subscription for four 30-minute lessons in your home, every 4 weeks - plus extra $5 fee'
    ],
    '4W_1h_inhome_5' => [
        'cost'         => 15500,
        'cycle_length' => '4 Weeks',
        'title'        => 'Four 1-Hour In-Home Lessons Every 4 Weeks',
        'description'  => 'Subscription for four 1-hour lessons in your home, every 4 weeks - plus extra $5 fee'
    ],
    '4W_90m_inhome_5' => [
        'cost'         => 22500,
        'cycle_length' => '4 Weeks',
        'title'        => 'Four 1.5 Hour In-Home Lessons Every 4 Weeks',
        'description'  => 'Subscription for four 1.5 Hour lessons in your home, every 4 weeks - plus extra $5 fee'
    ],
    '4W_30m_studio_5' => [
        'cost'         => 7500,
        'cycle_length' => '4 Weeks',
        'title'        => 'Four 30-minute Studio Lessons Every 4 Weeks',
        'description'  => 'Subscription for four 30-minute lessons at the A Major Music home-studio, every 4 weeks - plus extra $5 fee'
    ],
    '4W_1h_studio_5' => [
        'cost'         => 14500,
        'cycle_length' => '4 Weeks',
        'title'        => 'Four 1 Hour Studio Lessons Every 4 Weeks',
        'description'  => 'Subscription for four 1 Hour lessons at the A Major Music home-studio, every 4 weeks - plus extra $5 fee'
    ],
    '4W_90m_studio_5' => [
        'cost'         => 21500,
        'cycle_length' => '4 Weeks',
        'title'        => 'Four 1.5 Hour Studio Lessons Every 4 Weeks',
        'description'  => 'Subscription for four 1.5 Hour lessons at the A Major Music home-studio, every 4 weeks - plus extra $5 fee'
    ],
////   PLUS +$10  Driving Fee    ///////
    '4W_30m_inhome_10' => [
        'cost'         => 9000,
        'cycle_length' => '4 Weeks',
        'title'        => 'Four 30-minute In-Home Lessons Every 4 Weeks',
        'description'  => 'Subscription for four 30-minute lessons in your home, every 4 weeks - plus extra $10 fee'
    ],
    '4W_1h_inhome_10' => [
        'cost'         => 16000,
        'cycle_length' => '4 Weeks',
        'title'        => 'Four 1-Hour In-Home Lessons Every 4 Weeks',
        'description'  => 'Subscription for four 1-hour lessons in your home, every 4 weeks - plus extra $10 fee'
    ],
    '4W_90m_inhome_10' => [
        'cost'         => 23000,
        'cycle_length' => '4 Weeks',
        'title'        => 'Four 1.5 Hour In-Home Lessons Every 4 Weeks',
        'description'  => 'Subscription for four 1.5 Hour lessons in your home, every 4 weeks - plus extra $10 fee'
    ],
    '4W_30m_studio_10' => [
        'cost'         => 8000,
        'cycle_length' => '4 Weeks',
        'title'        => 'Four 30-minute Studio Lessons Every 4 Weeks',
        'description'  => 'Subscription for four 30-minute lessons at the A Major Music home-studio, every 4 weeks - plus extra $10 fee'
    ],
    '4W_1h_studio_10' => [
        'cost'         => 15000,
        'cycle_length' => '4 Weeks',
        'title'        => 'Four 1 Hour Studio Lessons Every 4 Weeks',
        'description'  => 'Subscription for four 1 Hour lessons at the A Major Music home-studio, every 4 weeks - plus extra $10 fee'
    ],
    '4W_90m_studio_10' => [
        'cost'         => 22000,
        'cycle_length' => '4 Weeks',
        'title'        => 'Four 1.5 Hour Studio Lessons Every 4 Weeks',
        'description'  => 'Subscription for four 1.5 Hour lessons at the A Major Music home-studio, every 4 weeks - plus extra $10 fee'
    ],
//////////////// Once A WEEK Schedules!!!!  ////////////////////////////
    '1W_30m_inhome' => [
        'cost'         => 2000,
        'cycle_length' => 'Week',
        'title'        => 'One 30-min In-Home Lesson Every Week',
        'description'  => 'Subscription for one 30-min lesson in your home every week'
    ],
    '1W_1h_inhome' => [
        'cost'         => 3750,
        'cycle_length' => 'Week',
        'title'        => '1-Hour In-Home Lesson Every Week',
        'description'  => 'Subscription for a 1 hour lesson in your home every week'
    ],
    '1W_90m_inhome' => [
        'cost'         => 5500,
        'cycle_length' => 'Week',
        'title'        => '1.5-Hour In-Home Lesson Every Week',
        'description'  => 'Subscription for a 1.5 hour lesson in your home every week'
    ],
//////////////// Once A WEEK Schedules!!!!  ////////////////////////////
    '1D_30m_inhome' => [
        'cost'         => 6000,
        'cycle_length' => 'Day',
        'title'        => 'One 30-min In-Home Lesson Every Day',
        'description'  => 'Subscription for one 30-min lesson in your home every day'
    ],
];

/**
 * Next we need to look at the url that the user went to and determine which plan the user is trying to subscribe to.
 * $planId will be the id of a subscription in your Stripe account, and should match up with a key in the $plans array.
 * $selectedPlan will be an array with the properties of the selected plan.
 * For example, if the user goes to `http://www.website.com/subscriptions.php?plan=studio_monthly`
 * then $planId will be set to `studio_monthly` and $selectedPlan['cost'] will be $70.00
 */
$planId       = $_GET['plan'];
$selectedPlan = $plans[$planId];
$displayCost  = $selectedPlan['cost']/100;


/**
 * If the $_POST array has a `stripeToken` and a `stripeEmail` then the user has successfully received a token from
 * Stripe's checkout form, and we need to store them as a customer in Stripe's system using our secret key.
 */
if (isset($_POST['stripeToken']) && isset($_POST['stripeEmail'])) {
    try {
        \Stripe\Stripe::setApiKey($stripeSecretKey);


        $customer = \Stripe\Customer::create(array(
            "plan"   => $planId,
            "source" => $_POST['stripeToken'],
            "email"  => $_POST['stripeEmail']
        ));
    } catch (\Exception $e) {
        $error = True;
        $errorMessage =  $e->getMessage();
        mail('contact@amajor.net', 'Error when subscribing new user: '.$_POST['stripeEmail'], $errorMessage);
    }
}
?>

	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	    <meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">


	    <title>Subscribe To Pay Monthly</title>

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

	    <!-- For iPad with high-resolution Retina display running iOS � 7: -->
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="/images/favicon/apple-touch-icon-152.png">

		<!-- For iPad with high-resolution Retina display running iOS � 6: -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/favicon/apple-touch-icon-144.png">

		<!-- For iPhone with high-resolution Retina display running iOS � 7: -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/favicon/apple-touch-icon-114.png">

		<!-- For iPad and iPad mini models with a 1? display -->
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

						<a href="https://amajorguitarlessons.com/" class="logo"><img src="/images/logo-a-major-horizontal.png" alt="A Major Logo"></a> <!-- Your Logo -->

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

			<?= ($MainPagesMenuNavLinks) ?>

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
			<section id="hero" class="breaking"> <!--  data-stellar-background-ratio="0.5" data-stellar-vertical-offset="30" -->

				<div class="container">

					<div class="vertical-center-wrapper">
						<div class="vertical-center-table">
							<div class="vertical-center-content">

								<!-- BEGIN Hero Content -->
								
										
										<!-- BEGIN Animated/Rotating Headline -->
							 
<?php
/**
 * If the $customer variable is set, then the customer has been created and subscribed; we should show a success
 * message to let them know that it went through successfully.
 *
 * If $error is set, then the customer created a stripe token but there was an error when we tried to
 * create a stripe account and add them to a subscription; we should show a message that something went wrong.
 *
 * If neither $customer nor $error are set, then the customer has not submitted the form yet.
 */

if (isset($customer) && $customer['id']) { ?>

<div class="hero-content row centered">
<div class="col-lg-12">
    <h2 class="animated-headline slide margin-top-40" data-sr="enter bottom over 1s and move 50px wait 0.3s">
        <span class="animated-words-wrapper">
            <b class="is-visible">You've successfully subscribed to the <br><?php echo $selectedPlan['title']; ?> plan!</b>
        </span> <!--/ .animated-words-wrapper -->
    </h2>
        <h2>Your card will be charged <br>$<?php echo number_format($selectedPlan['cost']/100, 2, '.', ''); ?> every <?php echo $selectedPlan['cycle_length']; ?>.</h2>
            <h3>You'll receive a receipt at <?php echo $_POST['stripeEmail']; ?></h3><!-- maybe add inside H3 a <br>Charges are always made on a monday or if you're paying the flat monthly fee, they're on the 1st of each month.</h3>-->
</div> <!--/ .col-lg-12 -->
</div> <!--/ .row -->
    <?php
    $headers = "From: contact@amajor.net\r\n";
    $headers .= "Reply-To: contact@amajor.net\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    mail(
        $_POST['stripeEmail'],
        'A Major Music: ' . $selectedPlan['title'],
        'Thank you for subscribing to the ' . $selectedPlan['title'] . ' plan with A Major Music.<br /><br />Your card will be charged $' . number_format($selectedPlan['cost']/100, 2, '.', '') . ' every ' . $selectedPlan['cycle_length'] . ' until you let us know otherwise. If you have any questions, need any payment adjustments, or need to cancel, please let us know.<br /><br />Contact us at: <br /> contact@amajor.net<br />(847) 807-1800',
        $headers
    );
} else if (isset($error) && $error) { ?>

<div class="hero-content row centered">
<div class="col-lg-12">
    <h1 class="animated-headline slide margin-top-40" data-sr="enter bottom over 1s and move 50px wait 0.3s">
        <span class="animated-words-wrapper">
            <b class="is-visible">Payment Error</b>
        </span> <!--/ .animated-words-wrapper -->
    </h1>
        <h2>There was a problem creating your subscription; <br>your card has not been charged.</h2>
            <h3>Please try again or contact us at <br><a href="tel:+18478071800">(847) 807-1800</a> or <a href="mailto:Contact@AMajor.Net">Contact@AMajor.Net</a>.</h3>
</div> <!--/ .col-lg-12 -->
</div> <!--/ .row -->

<?php } else { ?>

<div class="hero-content row centered">
<div class="col-lg-12">
    <h2 class="animated-headline slide margin-top-40" data-sr="enter bottom over 1s and move 50px wait 0.3s">
        <span class="animated-words-wrapper">
            <b class="is-visible">Subscribe to the <br><?php echo $selectedPlan['title']; ?> plan</b>
        </span> <!--/ .animated-words-wrapper -->
    </h2>
        <h2>Subscribing to this plan will charge your card <br>$<?php echo $displayCost; ?> every <?php echo $selectedPlan['cycle_length']; ?></h2>
        <h3><u>Description:</u></h3>
            <h3><?php echo $selectedPlan['description']; ?></h3>
             

    <form action="" method="POST">
        <script
            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="<?php echo $stripePublicKey; ?>"
            data-amount="<?php echo $selectedPlan['cost']; ?>"
            data-name="A Major Music Lessons"
            data-description="Pay $<?php echo $displayCost; ?> & Subscribe"
            data-image="/stripe-site/img/AMML_logo-11.jpg"
            data-locale="auto"
            data-zip-code="true"
            data-billing-address="true"
            data-panel-label="Pay & Subscribe"
            data-label="Subscribe"
            data-allow-remember-me="false">
        </script>
    </form>
</div> <!--/ .col-lg-12 -->
</div> <!--/ .row -->

<?php } ?>												
										<!--</ul> <!--/ .inline-cta -->

										
											

								
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
			== BEGIN Attendance SECTION ==
			==============================
			-->
			<section id="what-we-do" class="centered">       

				<div class="container">
					<div class="row">

						<div class="col-lg-12">

						</div>

                                                <div><a href="#0" class="ctaa cta-default all-caps contact-trigger margin-top-40">Get in Touch To Ask A Questions</a></div>

<p> </p>

                                                        
                                                       <!-- BEGIN Attention Box -->
							<?= ($Contactbox) ?>
							<!--/ END Attention Box -->

			</section>
			<!--
			=============================
			==/ END How it Works SECTION ==
			=============================
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

				<?= ($FooterLinksMain) ?> 
				
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
										<li><a href='#'>???????</a></li>
										<li><a href='#'>???</a></li>
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

									<div class="col-lg-6 col-md-6">

										<div class="required-field">
											<input name="fname" id="fname" class="contact-input"  type="text" placeholder="First Name">
										</div> <!--/ .required-field -->

									</div> <!--/ .col-lg-6 -->

									<div class="col-lg-6 col-md-6">

										<input name="lname" id="lname" class="contact-input" type="text" placeholder="Last Name">

									</div> <!--/ .col-lg-6 -->

									<div class="col-lg-12 col-md-12">

										<div class="required-field">
											<input name="email" id="email" class="contact-input" type="email" placeholder="Email Address">
										</div> <!--/ .required-field -->

									</div> <!--/ .col-lg-12 -->

									<div class="col-lg-12 col-md-12">

										<input name="subject" id="subject" class="contact-input" type="text" placeholder="Phone Number">

									</div> <!--/ .col-lg-12 -->

									<div class="col-lg-12 col-md-12">

										<div class="required-field">
											<textarea name="message" id="message" rows="9" placeholder="Message"></textarea>
										</div> <!--/ .required-field -->

									</div> <!--/ .col-lg-12 -->

									<div class="col-lg-12 col-md-12 all-caps centered">

										<button id="submit" type="submit" class="submit-btn">Submit</button>

									</div> <!--/ .col-lg-12 -->

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
			<p>Subscribe error, please review your email address.</p>
			<a class="notification-close"><span class="icon-cross2"></span></a>

		</div> <!--/ #error-notification -->

		<div id="subscribe-success-notification" class="notif-box">

			<span class="icon-checkmark notif-icon"></span>
			<p>You're now subscribed, thank you!</p>
			<a class="notification-close"><span class="icon-cross2"></span></a>

		</div> <!--/ #success-notification -->
		<!-- END Subscribe Form Alert/Notifications -->


		<!-- BEGIN Contact Form Alert/Notifications -->
		<div id="error-notification" class="notif-box">

			<span class="icon-bullhorn notif-icon"></span>
			<p>There was a problem with your submission. Please check the field(s) with red label below.</p>
			<a class="notification-close"><span class="icon-cross2"></span></a>

		</div> <!--/ #error-notification -->

		<div id="success-notification" class="notif-box">

			<span class="icon-checkmark notif-icon"></span>
			<p>Your message has been sent. We'll get back to you soon!</p>
			<a class="notification-close"><span class="icon-cross2"></span></a>

		</div> <!--/ #success-notification -->
		<!-- END Contact Form Alert/Notifications -->

		<!-- BEGIN Hero Form Alert/Notifications -->
		<div id="hero-error-notification" class="notif-box">

			<span class="icon-bullhorn notif-icon"></span>
			<p>There was a problem with your submission. Please check the field(s) with red label below.</p>
			<a class="notification-close"><span class="icon-cross2"></span></a>

		</div> <!--/ #error-notification -->

		<div id="hero-success-notification" class="notif-box">

			<span class="icon-checkmark notif-icon"></span>
			<p>Your account details has been submitted. Please check your email for verification.</p>
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
