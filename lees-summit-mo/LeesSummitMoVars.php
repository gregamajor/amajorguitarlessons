<?php

//* Variables for St Charles Page
    $city = 'lees-summit-mo' ;
    $cityname = 'Lees Summit, MO';
    $price = '$80' ; //monthly
    $priceone = '$20'; // one lesson
    $PriceCityPPL = '$25'; //Pay per lesson 30-min
    $PriceCityPPL1hr = '$45'; //Pay per lesson 1 hour
    $PriceCityInHomeGroup = '$65'; // In-home Group rate
    $HighPrice = '$100'; // Fake High Price
    
// take away all the part 1 and part 2's, and use this     '.$city.'
    
// Teacher Bio part 1
$CityTeacher1Bio1 = '
    <h3>Greg Wienecke</h3>
    <h6>Guitar, Bass, Piano, Theory, Improvisation and Song Writing Instructor in the '.$cityname.' area.</h6>
<!--NEED TO MAKE AN INSTRUCTOR PAGE FOR BIGGER SCREENS-->
<!--<p><a href="#0" class="more">See Full Bio</a></p>-->
    <p>Greg has been playing guitar and piano for over 15 years. He started out taking lessons at the Brook Fine Arts Academy in Tulsa, OK, and he graduated from Principia College where he studied music performance and composition.</p>
    <p>He has played in several rock and jazz bands. His favorite style is jazz, but he also loves classical, pop, rock, metal, and pretty much any kind of music.</p>
    <p>Greg teaches guitar, piano, and theory. He can teach any genre of music and can modify the songs difficulty to fit the students individual skill level.</p>
';
// Teacher Bio part 2
$CityTeacher1Bio2 = '<p>Greg loves helping students build a strong foundation in technique and theory so they can continue a lifelong pursuit of their own musical goals and interests. Greg is also an avid Liverpool FC fan. Go Reds!!</p>
<!-- Greg Ws Bio  <a href="#0" class="more">Read More</a>-->';


// CITY MEET THE TEAM section
$CityMeetTheTeamMember3 = '
<!--<div class="team-item-content">
<img src="images/team-photo/270x320.png" alt="Team Photo"/>
<div class="team-info centered">
<h6>Greg W</h6>
<small>An experienced Web/UX Designer on a mission to use his God-given gifts in design to help others.<br/><br class="visible-lg visible-xs"/>He has worked with people in many different countries, and from many different industries. </small>
<ul class="team-social">
<li><a href="#0"><span class="icon-link2"></span></a></li>
<li><a href="#0"><span class="icon-linkedin2"></span></a></li>
<li><a href="#0"><span class="icon-twitter"></span></a></li>
</ul> <!--/ .team-social --
</div> <!--/ .team-info --
</div> <!--/ .team-item-content --
';


// THIS IS THE STANDARD TEACHER BIO STUFF TO USE BEFORE I GET A TEACHER
// Teacher Bio part 1
$CityNoTeacher1Bio1 = '
    <h3>A Typical Instructor</h3>
    <h6>Teaches: Guitar, Bass, Theory, Improvisation, Song Writing, and possibly more instruments!</h6>
<!--NEED TO MAKE AN INSTRUCTOR PAGE FOR BIGGER SCREENS-->
<!--<p><a href="#0" class="more">See Full Bio</a></p>-->
    <p>Most of our teachers have been playing their instrument since a young age, have come from musical families, played in bands, and or went to school for their instrument or for music theory.</p>
    <p>Our '.$cityname.' instructors like to play all different genres and really love music and teaching.</p>
    <p>They are regular people in your community who have gone through our training program and are now professional music instructors!</p>
<ul class="checklist">
    <li>Experts in their instrument.</li>
    <li>Know exactly what to teach and how (for all genres).</li>
    <li>Are organized and punctual.</li>
    <li>Family friendly and fun!</li>
</ul> <!--/ .checklist -->   
';
// Teacher Bio part 2
$CityNoTeacher1Bio2 = '<p>All teachers are trained the to teach the same way, so if you ever need to switch to another teacher, it will be a very easy transition. </p>
<!-- Greg Ws Bio  <a href="#0" class="more">Read More</a>-->';
// CITY MEET THE TEAM section
$CityNoMeetTheTeamMember3 = '
<!--<div class="team-item-content">
<img src="images/team-photo/270x320.png" alt="Team Photo"/>
<div class="team-info centered">
<h6>Greg W</h6>
<small>An experienced Web/UX Designer on a mission to use his God-given gifts in design to help others.<br/><br class="visible-lg visible-xs"/>He has worked with people in many different countries, and from many different industries. </small>
<ul class="team-social">
<li><a href="#0"><span class="icon-link2"></span></a></li>
<li><a href="#0"><span class="icon-linkedin2"></span></a></li>
<li><a href="#0"><span class="icon-twitter"></span></a></li>
</ul> <!--/ .team-social --
</div> <!--/ .team-info --
</div> <!--/ .team-item-content --
';








// Now edit the top php of all the city pages to include this cityVars.php file 
// and change city in contact.php     hero-form.php     and    submit.php




// Below material shouldn't need to be changed when opening a new city 






$citynamerightside = ''.$cityname.'';

// CITY SUB TAGE LINE 
$CitySubTagline1 = 'Learn Guitar, Piano, and More!';
//$CitySubTagline2 = 'Start at just ';
//$CitySubTagline3 = ' a month!';
$CitySubTagline3 = ''.$priceone.' for a half hour lesson a week';

// How it works top section - fake higher price thing
$HowItWorksTopSectHigherPrice = '
<h4>Normally we charge <b>'.$HighPrice.'</b> a month, but sign up before this teacher has 30 current students and lock in your discounted price of only <b>'.$price.'</b> a month forever!</h4>
';
// Fake higher price thing for pricing page
$HowItWorksTopSectHigherPrice2 = '
<p>Normally we charge <b>'.$HighPrice.'</b> a month, but sign up before this teacher has 30 current students and lock in your discounted price of only <b>'.$price.'</b> a month forever!</p>
';


$CityTeacherNavTabLinks = '
<ul class="nav nav-tabs" role="tablist">
<li role="presentation" class="active"><a href="#first" aria-controls="first" role="tab" data-toggle="tab"><span class="icon-cog2"></span>More about teacher</a></li>
<li role="presentation"><a href="#second" aria-controls="second" role="tab" data-toggle="tab"><span class="icon-cloud-upload"></span>Driving Radius</a></li>
<li role="presentation"><a href="#third" aria-controls="second" role="tab" data-toggle="tab"><span class="icon-bar-graph-2"></span>Teacher Quality</a></li>
<li role="presentation"><a href="#fourth" aria-controls="third" role="tab" data-toggle="tab"><span class="icon-archive2"></span>Attendance</a></li>
<li role="presentation"><a href="#fifth" aria-controls="fourth" role="tab" data-toggle="tab"><span class="icon-share3"></span>What You will learn</a></li>
</ul>
';

$CityTeacherTab123 = '
<div role="tabpanel" class="tab-pane fade" id="second">
    <p>Most areas, and surrounding ';
$CityTeacherTab123part2 = ' cities are covered in our driving radius. </p>
    <p>Although, every Teachers driving radius is a little different. Fill out a contact form, call or email us to an exact quote on your in-home lessons. </p>
</div> <!-- Second Tab Pane -->
<div role="tabpanel" class="tab-pane fade" id="third">
    <p>Every teacher goes through an extensive background check, refference check, and previous work check.</p>
    <p>We have trained every teacher in their instrument and how to teach it. They are confident and capable music teaching professionals.</p>
</div> <!-- Third Tab Pane -->
';

$CityTeacherTab4 = '
<div role="tabpanel" class="tab-pane fade" id="fourth">
    <p>Lessons are typically once a week and paid for with a subscription.</p>';
$CityTeacherTab4part2 = '
    <p>If you need to cancel a lesson with your teacher, please contact them directly no later than 6 hours before your scheduled lesson time to be eligible for a make up lesson.<br>Any lessons canceled that are eligible for a makeup lesson, automatically become a a make up lesson credit that you can use anytime.</p>
'; 
    
$CityTeacherTab5 = '
<p>Most beginner guitar lessons start out with the "A Major Music beginner packet", which is a fun and fast way to learn the foundations of guitar and music. We teach the fundamentals of guitar through 4 popular and fun songs! Then you will be ready to venture off into just about whatever style you are interested in and your instructor can simplify advanced songs to your level.</p>
<p>You can start thinking of about 5 songs you like or would eventually like to learn how to play! It may be a month or two before we get to them but it will give your instructor a good idea of what you would like to learn. Also the songs do not have to have guitar in them (for example: we can play a piano song on the guitar "no problem!"). Even most difficult professional songs we can simplify if needed.
</p>
';



// Pricing info from City Index pages
$Citypricingindextitle = '
<p class="section-title">'.$cityname.' Pricing</p>
<h2 class="section-heading">Normal Pricing Options</h2>
';




// PRICE PAGE CONTENT
$PricePageContent1 = '
<h3>Lesson Prices (All Instruments)</h3>
			<p>Prices based on our regular recommended lesson schedule</p>
				<ul><li>One 30-minute lesson a week per month</li></ul>
			<p>We are really flexible on lesson frequency and length. If you wanted to make the lesson longer/shorter, more/less frequent, or maybe do an hour every other week, we can just adjust the price.</p>
		<p>&emsp;</p>
                <h3>In-home lessons (Your instructor will come to your home)</h3>
			<ul>
				<li>     <b>                          
';
$PricePageContent2 = '
</b>per month (which may be subject to a price increase based on your location)</li>
			</ul>
                        <p>&emsp;</p>
		<h3>Accepted Payment Methods</h3>
			<ul>
                                <li><b>
';
$PricePageContent2b = '
                                </b></li>
				<li>E-Check (ACH)</li>
				<li>Credit or debit Card</li>
				<li>A Check may be mailed to us via you or bill pay set up through your bank or third party (Please make all checks out to "A Major Music" and mail to our main office: 906 W Ash St, Columbia, MO, 65203)</li>
			</ul>
                        <p>&emsp;</p>
		<h3>Group Lessons</h3>
			<h4>5 or more students</h4>
				<ul>
					<li><b>
';
$PricePageContent3 = '
</b> a month per student</li>
					<li>Weekly and <b>1.5 hours</b> long, vote on course curriculum</li>
                                        <li>Location of group lesson can be agreed upon which students home.</li>
                                        <li>Most of the time, you will have to already have a group of people who wish to take group lessons (your friends, family, class mates, co-workers, etc.)</li>
				</ul>
			<h4>3 to 4 students</h4>
				<ul>
					<li><b>
';
$PricePageContent4 = '
</b> a month per student</li>
					<li>Weekly <b>1 hour</b> lesson, vote on course curriculum</li>
                                         <li>Location of group lesson can be agreed upon which students home.</li>
                                         <li>Most of the time, you will have to already have a group of people who wish to take group lessons (your friends, family, class mates, co-workers, etc.)</li>
				</ul>
                                <p>&emsp;</p>
		<h4>Rock Band Lessons (3 or more students)</h4>
			<ul>
				<li><b>
';
$PricePageContent5 = '
</b> a month per student</li>
				<li>Weekly and <b>1 hour</b> long</li>
				<li>1 drummer, 1 guitarist, 1 vocalist (at minimum)</li>
				<li>bass guitar, lead guitar, keyboard, other instruments welcome</li>
				<li>Learn famous songs (decided by voting), learn to write their own songs, and how to perform as a band.</li>
				<li>20% Discount if taking Private Lessons as well</li>
                                <li>Location of group lesson can be agreed upon which students home.</li>
                                <li>Most of the time, you will have to already have a group of people who wish to take group lessons (your friends, family, class mates, co-workers, etc.)</li>
			</ul>
                <p>&emsp;</p>
		<h4>Non-Monthly, or Pay-Per-Lesson Fees</h4>
			<ul>
				<li><b>
';
$PricePageContent6 = '
</b> for a <b>30 minute</b> in-home lesson</li>
			</ul>
                        <p>&emsp;</p>
		<h4>Paying Monthly</h4>
			<p>You get a lesson every week of the month and the monthly price is based on 4 lessons a month, but because you will get an extra lesson on the four/five 5-week months each year, you get 4 weeks off each year, one of which is Christmas week, a sick day for you and 2 for your instructor, but instructors will make up sick days for new students.</p>
			<p>We give a big discount for paying monthly because consistent lessons are more effective, it helps the teachers to keep a weekly schedule and it is great for budgeting. </p>
';

//* attention grabbing Contact info Box
$ContactboxGetInTouch = '
<div class="attention-box">
<div><a href="#0" class="ctaa cta-default all-caps contact-trigger contact-top-page">Get in Touch</a></div>
        <h5 class="all-caps">Contact Info:</h5>
                <p><strong>Phone: <a href="tel:8478071800">(847) 807-1800 </a> &ensp; - Email:  <a href="mailto: contact@amajor.net">Contact@AMajor.Net</a></strong><b> &ensp; - </b><a href="/'.$city.'/contact-us/"class="more">  More Contact Info</a></p>
</div> <!--/ .attention-box -->
' ;

//* attention grabbing Contact info Box
$Contactbox = '
<div class="attention-box">
        <h5 class="all-caps">Contact Info:</h5>
                <p><strong>Phone: <a href="tel:8478071800">(847) 807-1800 </a> &ensp; - Email:  <a href="mailto: contact@amajor.net">Contact@AMajor.Net</a></strong><b> &ensp; - </b><a href="/'.$city.'/contact-us/"class="more">  More Contact Info</a></p>
</div> <!--/ .attention-box -->
' ;



    

//* City Index Navigation Links
$cityindexnavlinks =
'
                                <li class="current"><a href="#hero">Top</a></li>
				<li><a href="#what-we-do">How it Works</a></li>
				<li><a href="#featurettes">Instructor</a></li>
				<li><a href="#our-features">Why We are Better</a></li>
				<li><a href="#pricing">Pricing</a></li>
                                <li><a href="#customer-story">Testimonials</a></li>
			<!--	<li><a href="#our-team">The Team</a></li>  -->
				
				<li class="dropdown">
					<a class="external" href="#0">
						More
					</a>
					<ul class="dropdown-menu">
						<li><a href="/'.$city.'/about/">About</a></li>
						<li><a href="/'.$city.'/faq/">F.A.Q.</a></li>
						<li><a href="/'.$city.'/help-videos/">Help Videos</a></li>
                                                <li><a href="../apply/">Apply</a></li>
                                                <li><a href="/'.$city.'/student-of-the-week/">Student of the week</a></li>  
					</ul>
				</li>
			</ul> <!--/ .main-nav -->
			<ul class="secondary-nav">
				<li><a href="/'.$city.'/contact-us/">Contact Us</a></li>
				<li><a href="/'.$city.'/prices/">Prices</a></li>
                                <li><a href="/'.$city.'/pay/">Pay</a></li>
                        <!--        <li><a href="/'.$city.'/attendance/">Attendance</a></li>  -->
' ;


//* City Navigation Links for city Pages
$citypaesnavlinks = '
                        <ul id="main-nav" class="main-nav all-caps">
				<li><a href="http://amajorguitarlessons.com/'.$city.'/">'.$cityname.' Home Page</a></li>				
			</ul> <!--/ .main-nav -->
			<ul class="secondary-nav">
				<li><a href="/'.$city.'/contact-us/">Contact Us</a></li>
				<li><a href="/'.$city.'/prices/">Prices</a></li>
                                <li><a href="/'.$city.'/pay/">Pay</a></li>
				<li><a href="../apply/">Apply</a></li>
				<li><a href="/'.$city.'/student-of-the-week/">Student of the week</a></li>  
			<!--	<li><a href="/'.$city.'/attendance/">Attendance</a></li>  -->
				<li><a href="/'.$city.'/about/">About</a></li>
				<li><a href="/'.$city.'/faq/">F.A.Q.</a></li>
				<li><a href="/'.$city.'/help-videos/">Help Videos</a></li>
			</ul> <!--/ .secondary-nav -->
' ;
    
    

//* Social Media Links for City pages - 
$FooterLinks =
'
					<ul class="footer-nav all-caps">
						<li><a href="/'.$city.'/contact-us/">Contact</a></li>
                                                <li><a href="/'.$city.'/prices/">Prices</a></li>
						<li><a href="/'.$city.'/pay/">Pay</a></li>
						<li><a href="../apply/">Apply</a></li>
						<li><a href="/'.$city.'/student-of-the-week/">Student of the week</a></li>
						<li><a href="/'.$city.'/about/">About Us</a></li>
						<li><a href="/'.$city.'/faq/">F.A.Q.</a></li>
					<!--	<li><a href="/'.$city.'/attendance/">Attendance</a></li>  -->
						<li><a href="/'.$city.'/help-videos/">Help Videos</a></li>
					</ul> <!--/ .footer-nav -->
' ;






// ATTENDANCE CITY PAGE CONTENT to include price 
$AttendanceCityPageContentSect1 = '
    <p class="section-title">Attendance Info</p>
    <h2 class="section-heading">Tuition</h2>
</div> <!--/ .col-lg-8 -->
<div class="clearfix"></div>
<div class="col-lg-10 col-lg-offset-1">
    <p>Our normal tuition is
';
$AttendanceCityPageContentSect2 = '
    a month, which is a "discounted monthly rate" based off the regular 30-minute lesson per week schedule. The length and frequency of the lesson may be adjusted upon your request.</p>
    <p>You get a lesson every week of the month and the monthly price is based on 4 lessons a month, but because you will get an extra lesson on the four/five 5-week months each year, you get 4 weeks off each year, one of which is christmas week, a sick day for you and 2 for your instructor, but instructors will make up sick days for new students.</p>
<ul>
    <li>1 Lesson the week of Christmas</li>
    <li>2 Lessons for your teacher to use as sick days / vacation</li>
    <li>1 Lessons for you to use as sick days / vacation</li>
</ul>
    <p>We give a big discount for paying monthly because consistent lessons are more effective, It helps the teachers to keep a weekly schedule and it is great for budgeting.</p>
    <p>Tuition is normally collected on the 5th of each month. We are very flexible and willing to work with you. If we are given a notice, it is almost always totally fine if you need to wait a week or so to your months payment charged.</p>
    <p>Pro-rated tuition is only available to new students in the first month of lessons. For example if you start half way through the month you will only need to pay half of that month. Lessons that fall on holidays can be made-up. Refunds are not available for termination of lessons or absences. However make-up lessons may be available (see section below).</p>
    <h2>Attendance Info</h3>
    <p>Regular attendance is important to the success of the student, so we ask that you make every effort to attend all lessons. If you need to cancel a lesson with your teacher, please contact them directly no later than 24 hours before your scheduled lesson time to be eligible for a make up lesson. </p>
    <p>When going out of town here are some ways we recommend to help stay consistent, get the most out of your lessons, not fall behind and to avoid paying more expensive non-monthly fee.</p>
<ul>
    <li>If you are missing an entire week, we recommend scheduling a double lesson the week before you leave or the week after you return.</li>
    <li>If you are missing two entire weeks, we recommend scheduling a double lesson the week before you leave and for the week after you return.</li>
</ul>
    <h3>Arrival Time</h3>
    <p>For in-home lessons (where the teacher drives to your home for the lesson) the teacher may arrive 15 minutes early or late. For example, if your lesson is scheduled for 5pm plan on your teacher arriving between 4:45pm and 5:15pm.</p>
    <h3>No Shows</h3>
    <p>If a student fails to call to cancel a lesson and does not show up or is not home upon teacher arrival, no make up lesson is required to be given. As well as all missed or canceled make up lessons are not <i>required</i> to be made up, however we almost always give our students make-up lessons because we want you to suceed and get the lessons you wanted. If a lesson is missed without notice due to special circumstances like car accident or an emergency a make up lesson may still be given. </p>
    <h2>Withdrawals and Transfers </h3>
    <p>You may request to be transferred to a different teacher at any time. You may also withdrawal from lessons at any time, however you may lose your lesson time and no refunds are given.</p>
';
   

?>
