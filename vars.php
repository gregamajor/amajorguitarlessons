<?php

//* Variables for Entire Site


// Tage line at top of index page
$Tagline = 'Personalized Music Lessons for all ages and styles in your home!';



//* attention grabbing Contact info Box
$Contactbox = '
<div class="attention-box">
        <h5 class="all-caps">Contact Info:</h5>
                <p><strong>Phone: <a href="tel:8478071800">(847) 807-1800 </a> &ensp; - Email:  <a href="mailto: contact@amajor.net">Contact@AMajor.Net</a></strong><b> &ensp; - </b><a href="contact-us/"class="more">  More Contact Info</a></p>
</div> <!--/ .attention-box -->
' ;



// Video in header / commercial Guitar Lessons in-home for each city page
$HeaderVideo = '<iframe width="470" height="264" src="https://www.youtube.com/embed/T-liE1ncol0?rel=0" frameborder="0" allowfullscreen></iframe>'; 

//* Individual Contact Info Variables 
$ContactEmail = '<a href="mailto: contact@amajor.net">Contact@AMajor.Net</a>' ;
$ContactPhone = '<a href="tel:8478071800">(847) 807-1800 </a>' ;
$ContactAddress = 'Address: 906 W Ash St, Columbia, MO 65203' ;


// MAIN PAGES MENU NAV LINKS
$MainPagesMenuNavLinks = '
<ul id="main-nav" class="main-nav all-caps">
        <li><a href="http://amajorguitarlessons.com/">Home Page</a></li>				
</ul> <!--/ .main-nav -->
<ul class="secondary-nav">
        <li><a href="/contact-us/">Contact Us</a></li>
        <li><a href="/prices/">Prices</a></li>
        <li><a href="/pay/">Pay</a></li>
        <li><a href="/apply/">Apply</a></li>
        <li><a href="/student-of-the-week/">Student of the week</a></li>  
    <!--    <li><a href="/attendance/">Attendance</a></li>  -->
        <li><a href="/about/">About</a></li>
        <li><a href="/faq/">F.A.Q.</a></li>
        <li><a href="/help-videos/">Help Videos</a></li>
</ul> <!--/ .secondary-nav -->
';


//* FOOTER LINKS MAIN PAGE
$FooterLinksMain = '
<ul class="footer-nav all-caps">
    <li><a href="/contact-us/">Contact</a></li>
    <li><a href="/prices/">Prices</a></li>
    <li><a href="/pay/">Pay</a></li>
    <li><a href="/apply2/">Apply</a></li>
    <li><a href="/student-of-the-week/">Student of the week</a></li>
    <li><a href="/about/">About Us</a></li>
    <li><a href="/faq/">F.A.Q.</a></li>
 <!--   <li><a href="/attendance/">Attendance</a></li>  -->
    <li><a href="/help-videos/">Help Videos</a></li>
</ul> <!--/ .footer-nav -->
' ;
    
// the name of the folder where I will keep all the price pages for Stripe ***Not sure Ill need this****
$pricepages = 'price-pages';


//* SOCIAL MEDIA LINKS ALL PAGES
$SocialLinks =
'
<ul class="footer-social">
<li><a href="https://www.facebook.com/amajormusiclessons/" target="_blank"><span class="icon-facebook-with-circle"></span></a></li>
<li><a href="https://twitter.com/A_Major_Music" target="_blank"><span class="icon-twitter-with-circle"></span></a></li>
<li><a href="https://www.linkedin.com/company/a-major-music-llc" target="_blank"><span class="icon-linkedin-with-circle"></span></a></li>
<li><a href="https://www.instagram.com/amajormusiclessons/" target="_blank"><span class="icon-instagram-with-circle"></span></a></li>
<li><a href="https://plus.google.com/+AMajorMusicLessons/" target="_blank"><span class="icon-google-with-circle"></span></a></li>
<!-- Needs correct icon-->
<li><a href="https://www.youtube.com/c/amajormusiclessons" target="_blank"><span class="icon-youtube-with-circle"></span></a></li>
<li><a href="https://www.pinterest.com/amajormusicllc/" target="_blank"><span class="icon-pinterest-with-circle"></span></a></li>
</ul> <!--/ .footer-social -->
' ;





// All MEET THE TEAM section
$MeetTheTeamTitle = '
<p class="section-title">Meet The Team</p>
<h3 class="section-heading">Passionate about providing quality, convenient, and affordable music lessons.</h2>
';
$MeetTheTeamWrapper = '
<h4 class="all-caps hidden-xs">The Team</h4>
<a href="#0" id="mobile-team-filter" class="mobile-filter-select visible-xs"><h4 class="all-caps">The Team<span class="icon-chevron-thin-down"></span></h4></a>
<ul class="filter">
<li class="current all"><a href="#0">Everyone</a></li>
<li class="manager"><a href="#0">Managers</a></li>
<li class="developer"><a href="#0">Owner</a></li>
<!--<li class="designer"><a href="#0">Owner</a></li>-->
<!--<li class="marketing"><a href="#0">Marketing</a></li>-->
<!--<li class="support"><a href="#0">Support</a></li>-->
</ul> <!--/ .filter -->
';
// Greg Allers
$MeetTheTeamMember1 = '
<div class="team-item-content">
<img src="/images/team-photo/Greg-Allers-Guitar-Instructor.jpg" alt="Team Photo"/>
<div class="team-info centered">
<h6>Greg Allers</h6>
<small>The owner of A Major Music, first degree in music & second in mechanical engineering.<br/><br class="visible-lg visible-xs"/>He is dedicated his life to giving musicians a meaningful career and students quality lessons.</small>
<ul class="team-social">
<li><a href="https://www.linkedin.com/in/greg-allers-712a1266?trk=prof-samename-name" target="_blank"><span class="icon-link2"></span></a></li>
<li><a href="https://www.linkedin.com/in/greg-allers-712a1266?trk=prof-samename-name" target="_blank"><span class="icon-linkedin2"></span></a></li>
<!--<li><a href="#0"><span class="icon-twitter"></span></a></li>-->
</ul> <!--/ .team-social -->
</div> <!--/ .team-info -->
</div> <!--/ .team-item-content -->
';
// Carol Allers
$MeetTheTeamMember2 = '
<div class="team-item-content">
<img src="/images/team-photo/Carol-Allers-A-Major-School-Manager.jpg" alt="Team Photo"/>
<div class="team-info centered">
<h6>Carol Allers</h6>
<small>Carol is an essential part of the family business.<br/><br class="visible-lg visible-xs"/>She is the best person to help you sign up for lessons and answer your questions!</small>
<ul class="team-social">
<li><a href="https://www.facebook.com/carol.allers?ref=br_rs" target="_blank"><span class="icon-link2"></span></a></li>
<li><a href="https://www.facebook.com/carol.allers?ref=br_rs" target="_blank"><span class="icon-linkedin2"></span></a></li>
<!--<li><a href="#0"><span class="icon-twitter"></span></a></li>-->
</ul> <!--/ .team-social -->
</div> <!--/ .team-info -->
</div> <!--/ .team-item-content -->
';
    



//* Alert Notifications Messages
    $emailsubmiterror = '<p>Email Submit Error, please review your email address.</p>';
    $emailsubmit = '<p>We got your email! Thank you, we will be in touch right away.</p>';
    $contactsubmiterror = '<p>There was a problem with your submission. Please check the field(s) with red label below.</p>';
    $contactsubmit = '<p>Your message has been sent. We will get back to you soon!</p>';
    $Herosubmiterror = '<p>There was a problem with your submission. Please check the field(s) with red label below.</p>' ;
    $Herosubmit = '<p>Thanks for contacting us! We will be in touch as soon as possible!</p>' ;
    
    
    
    
 //* Hero Form
$HeroFormVar = '
<div class="col-lg-12 col-md-12"> <div class="required-field">
  <input name="heroFname" id="hero-fname" class="hero-input"  type="text" placeholder="Full Name">
</div> <!--/ .required-field --> </div>
<div class="col-lg-6 col-md-6"> <div class="required-field">
  <input name="heroEmail" id="hero-email" class="hero-input"  type="text" placeholder="Email Address">
</div> <!--/ .required-field --> </div>
<div class="col-lg-6 col-md-6">
  <input name="heroPhone" id="hero-phone" class="hero-input"  type="text" placeholder="Phone Number">
</div>
<div class="col-lg-12 col-md-12">
  <input name="heroUsername" id="hero-username" class="hero-input message-greg"  type="text" placeholder="Message">
</div>
<div class="col-lg-12 col-md-12">
  <button id="hero-submit" type="submit" class="submit-btn">Contact</button>
</div>
 ';
    
//* Pop Up Form
$PopUpFormVar = '
<div class="col-lg-12 col-md-12">
<div class="required-field">
    <input name="fname" id="fname" class="contact-input"  type="text" placeholder="Name">
</div> <!--/ .required-field -->
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
    <textarea name="message" id="message" rows="9" placeholder="Message"></textarea>
</div> <!--/ .col-lg-12 -->
<div class="col-lg-12 col-md-12 all-caps centered">
    <button id="submit" type="submit" class="submit-btn">Submit</button>
</div> <!--/ .col-lg-12 -->
';
    
    
    
    
//* Footer Email Only sumbit Form 

$EmailOnlyForm = '
<h4>Want to speak with a real person?</h4>
    <p>Quick and easy. Just enter your email and a real person will contact you right away by email and will answer any of your questions or schedle your first lesson.</p>
    <form id="footer-subscribe" class="the-subscribe-form">
            <div class="input-group">
                    <input type="email" class="form-control" id="footer-form-email" name="email" placeholder="Enter Email Address">
                    <span class="input-group-btn">
                            <button id="footer-submit" class="btn btn-subscribe all-caps" type="submit">Submit Email</button>
                    </span>
    </div> <!--/ .input-group -->
    </form> <!--/ #footer-subscribe -->
<p>Just enter your email and a real person will contact you right away by email and will answer any of your questions or schedle your first lesson.</p>
            <a href="#0" class="ctaa cta-default all-caps contact-trigger margin-top-min-20">Or Schedule Your Free Lesson</a>
' ;







//* Testimonials (customer stories)

$Testimonialtitles = '
<p class="section-title">Current Student Stories</p>
<h2 class="section-heading">Here is what just a few of our hundreds of happy students had to say.</h2>
';

$Testimonial1 = '
<small>I have had a very positive experience with A Major Music. Their teachers are very patient and knowledgeable on what and how they should teach me. The instructors tailor the lessons to the individual. I will continue and recommend the school to others.<br>Rochelle R.</small>

										<span class="customer-link all-caps"><a href="#0">Rochelle R.</a></span>
    ' ;
$Testimonial2 = '
										<small>My two kids love their lessons and are learning so much, having a lot of fun, and love practicing! That says a lot! I would recommend A Major to anyone who may be considering taking lessons. My favorite thing about A Major Music is having lessons at my home, very fair price, and all their teachers are so well trained!</small>

										<span class="customer-link all-caps"><a href="#0">Carrie B.</a></span>
    ' ;
$Testimonial3 = '
										<small>I like the combination of songs, theory, and skills. The affordability is appreciated and they simplify songs to my level. Great mix of encouragement, experience with all types of music, and ability to simplify concepts, have really made learning to play the guitar an attainable goal. They truly the best music teachers!</small>

										<span class="customer-link all-caps"><a href="#0">John K.</a></span>
' ;
$Testimonial4 = '
										<small>I have learned so much about how music that now I can sit down and write a song I know knowing what works and why. I can not believe I am writing songs myself! I am so happy I started taking lessons with A Major Music. They make everything clear and easy to follow. </small>

										<span class="customer-link all-caps"><a href="#0">Hunter S.</a></span>
' ;
$Testimonial5 = '
										<small>I am sooooo glad we found A Major Music! They are awesome. Abby is enjoying learning guitar. They have done a wonderful job and I really appreciate that they work around our schedule. This has been a great experience and I am looking forward to more lessons. They make it easy for my 9 year old to understand!</small>

										<span class="customer-link all-caps"><a href="#0">Kelli A.</a></span>
' ;
$Testimonial6 = '
										<small>I have been taking Guitar lessons for 6 months. They are really well organized and take you through the concepts very slowly making sure you are doing everything right. They are really flexible and chill. 5 stars!</small>

										<span class="customer-link all-caps"><a href="#0">Cole</a></span>
' ;




    
// Register Section
$registersection = '
<div class="col-lg-12 centered">
    <h4>Still not sure?</h4>
	<p class="sub-lead">Schedule a no risk free trial lesson to see if it is right for you.</p>
	    <a href="#0" class="cta cta-default all-caps contact-trigger"> Schedule Your Free Lesson</a>
<div class="clearfix"></div>
    <small data-sr="enter bottom over 1s and move 75px wait 0.2s"><em>*no credit card or commitment required</em></small>
</div> <!--/ .col-lg-12 -->
';


// Pricing info from Index pages
$pricingindextitle = '
<p class="section-title">Pricing</p>
<h2 class="section-heading">Normal Pricing Options.</h2>
<h4><a href="/prices/">Click here to see more pricing info</a></h4>
';

$pricingindexfreetrial = '
    <h5 class="price-title">Free Trial!</h5>
    <a href="#0" class="contact-trigger"> <div class="price-amount">$0</div></a>
<ul class="price-feature">
    <li>Schedule the first lesson totally free!</li>
    <li>No obligation to continue,<br>but we know you will want to!</li>
    <li>Possible small $5-$10 fee if your location is way outside our driving radius</li>
</ul> <!--/ .price-feature -->
    <a href="#0" class="price-button all-caps cta cta-default all-caps contact-trigger">Schedule Now</a>
';

$pricingindexmonthly1 = '
<h5 class="price-title">Subscription</h5>
<span class="best-value-label">best value</span><a href="https://amajorguitarlessons.com/stripe-site/signup.php?plan=register_card_only" target="_blank"><div class="price-amount">
';
$pricingindexmonthly2 = '
</div></a>
<ul class="price-feature">
    <li>The price is for one 30-minute in-home lesson every week</li>
    <li>Custom lesson plans and song request are included</li>
    <li>Choose how we charge you. <br>$20 a week, $40 every 2 weeks, $80 every 4 weeks, etc.</li>
    <li>Price is subject to changed based on your location</li><!-- <span class="price-label">Free</span> -->
</ul> <!--/ .price-feature -->
    <a href="#0" class="price-button all-caps cta cta-default all-caps contact-trigger">Schedule Now</a>
';

$PricePayPerLessonTitle = '
<h5 class="price-title">
Pay Per Lesson</h5>
<a href="https://amajorguitarlessons.com/stripe-site/signup.php?plan=register_card_only" target="_blank">
<div class="price-amount">
';
$PPLsection1 = '
</div></a>
<ul class="price-feature">
<li>For one 30-minute in-home lesson</li>
';
$PPLsection2 = '
<li>If you buy one or any number of lessons at the Pay Per Lesson Price, <br>you may save them or use them at anytime <br>(as long as it fits in your instructor&#39;s availability)</li>
<li>Price is subject to changed based on your location</li>
</ul> <!--/ .price-feature -->
<a href="#0" class="price-button all-caps cta cta-default all-caps contact-trigger">Schedule Now</a>
';

$giftcertsection = '
<h5 class="price-title">Gift Certificate</h5>
    <a href="https://amajorguitarlessons.com/stripe-site/signup.php?plan=register_card_only" target="_blank">
    <div class="price-amount">$Any</div></a>
<ul class="price-feature">
        <li>We will email you the giftcertificate which will become valid upon payment</li>
        <li>Perfect for Christmas, Birthdays, and Special occasions</li>
        <li>Get one for any amount, from one lesson to a month, to a year</li>
        <!--<li>Mail option <span class="price-label">Free</span></li>-->
</ul> <!--/ .price-feature -->
    <a href="#0" class="price-button all-caps cta cta-default all-caps contact-trigger">Inquire Now</a>
';





// tab section for all index pages
$tabsection = '
<section id="tab-section" class="gray-bg">
<div class="container">
<div class="row">
<div class="col-lg-8 col-lg-offset-2 centered">
    <h2 class="section-heading margin-top-min-13">A Major Music Lessons</h2>
</div> <!--/ .col-lg-8 -->
<div class="clearfix"></div>
<!-- BEGIN Section Tab -->
<div class="section-tab" role="tabpanel">
<!-- BEGIN Nav tabs -->
<ul class="nav nav-tabs centered" role="tablist">
    <li role="presentation" class="active"><a href="#one" aria-controls="one" role="tab" data-toggle="tab">More Info</a></li>
    <li role="presentation"><a href="#two" aria-controls="two" role="tab" data-toggle="tab">Student of the Week</a></li>
    <li role="presentation"><a href="#three" aria-controls="three" role="tab" data-toggle="tab">Company Info</a></li>
</ul>
<!--/ END Nav tabs -->
<!-- BEGIN Tab panes -->
<div class="tab-content">
<div role="tabpanel" class="tab-pane fade in active" id="one">
<div class="col-lg-6 col-md-6" data-sr="enter left over 1s and move 110px">
    <img class="animated fadeInLeft margin-bot-8 large-image-mockup" src="/images/mockup/logobig.png" alt="A Major Music Logo"/>
</div> <!--/ .col-lg-6 -->
<div class="col-lg-6 col-md-6" data-sr="enter right over 1s and move 110px">
<!-- BEGIN Accordion -->
<div class="panel-group accordion-wrapper animated fadeInRight" id="accordion" role="tablist" aria-multiselectable="true">
<!-- BEGIN 1st Accordion -->
<div class="panel panel-default">
<div class="panel-heading panel-active" role="tab" id="first_accordion_heading">
<h4 class="panel-title">
    <a href="#first_accordion_content" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="first_accordion_content">Attendance Info</a>
</h4> <!--/ .panel-title -->
</div> <!--/ .panel-heading -->
<div id="first_accordion_content" class="panel-collapse collapse" role="tabpanel" aria-labelledby="first_accordion_heading">
<div class="panel-body">
    <p>Lessons are typically once a week and paid for with a subscription.</p>
    <p>If you need to cancel a lesson with your teacher, please contact them directly no later than 6 hours before your scheduled lesson time to be eligible for a make up lesson.<br>Any lessons canceled that are eligible for a makeup lesson, automatically become a a make up lesson credit that you can use anytime.</p>
    <p>When going out of town here are some ways we recommend to help stay consistent, and get the most out of your lessons.<br>&ndash; If you are missing an entire week, we recommend scheduling a double lesson the week before you leave or the week after you return.<br>&ndash; If you are missing two entire weeks, we recommend scheduling a double lesson the week before you leave and for the week after you return.</p>
    <p>Arrival Time, for in-home lessons (where the teacher drives to your home for the lesson) the teacher may arrive 15 minutes early or late. For example, if your lesson is scheduled for 5pm plan on your teacher arriving between 4:45pm and 5:15pm.</p>
    <!--<a href="/<?//= ($city) ?>/prices/#attendance" class="more">More Attendance Info</a>-->
</div> <!--/ .panel-body -->
</div> <!--/ #first_accordion_content -->
</div> <!--/ .panel -->
<!--/ END 1st Accordion -->
<!-- BEGIN 2nd Accordion -->
<div class="panel panel-default">
<div class="panel-heading" role="tab" id="second_accordion_heading">
<h4 class="panel-title">
    <a href="#second_accordion_content" class="collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="second_accordion_content">Help finding an instrument</a>
</h4> <!--/ .panel-title -->
</div> <!--/ .panel-heading -->
<div id="second_accordion_content" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="second_accordion_heading">
<div class="panel-body">
    <p>We are primarily just music lessons and do not actually sell guitars for profit or as part of the business, but we know how hard it is to find a good deal on a guitar without connections and how hard it is to know what to look for if you are a beginner.</p>
    <p>So we offer a service where you can tell me what you are looking for in what price range and I can go see what I can find, buy it and then sell it to you at the cost I paid.</p>
    <p>Or occasionally I come across a great deal for beginner equipment and I buy it in advance knowing it will help someone get started more easily.</p>
</div> <!--/ .panel-body -->
</div> <!--/ #second_accordion_content -->
</div> <!--/ .panel -->
<!--/ END 2nd Accordion -->
<!-- BEGIN 3rd Accordion -->
<div class="panel panel-default">
<div class="panel-heading" role="tab" id="third_accordion_heading">
<h4 class="panel-title">
    <a href="#third_accordion_content" class="collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="third_accordion_content">Teaching style</a>
</h4> <!--/ .panel-title -->
</div> <!--/ .panel-heading -->
<div id="third_accordion_content" class="panel-collapse collapse" role="tabpanel" aria-labelledby="third_accordion_heading">
<div class="panel-body">
    <p>In almost every situation, we only hire teachers that are going to be with us for more than 2 years, but there are sometime special circumstances that a teacher needs to move away early.
    <p>The good news is that all of our instructors go through extensive training. They learn how to teach the best way and the same way. So although each teacher has a different personality, their material and overall methods for teaching will be the same.</p>
    <p>Other music schools do not train their teachers at all, so if you we are to switch to a new teacher at a different music school, the learning curve will be very difficult and hopefully your instructor will teach you the songs you want to learn like we do, know proper form for playing techniques and music theory so you can learn an understanding of why you are playing something, not just how to play something. </p>
</div> <!--/ .panel-body -->
</div> <!--/ #first_accordion_content -->
</div> <!--/ .panel -->
<!--/ END 3rd Accordion -->
<!-- BEGIN 4th Accordion -->
<div class="panel panel-default">
<div class="panel-heading" role="tab" id="fourth_accordion_heading">
<h4 class="panel-title">
    <a href="#fourth_accordion_content" class="collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="fourth_accordion_content">Online (Skype) Lessons</a>
</h4> <!--/ .panel-title -->
</div> <!--/ .panel-heading -->
<div id="fourth_accordion_content" class="panel-collapse collapse" role="tabpanel" aria-labelledby="fourth_accordion_heading">
<div class="panel-body">
    <p>We offer online lessons through any typer of video chat platform. Skype, facetime, etc.</p>
    <p>Lessons work the same way as a face to face in-home lesson but are only $17.50 per lesson.</p>
    <p>It is also recomended that brand new beginners not start out with skype lessons. The student will need to follow instructions and will not have someone their to specifically correct hand positions. </p>
    <p>Online lessons are not recommended for everyone but if you are interested, fill out a contact form and ask us about them.</p>
<!-- online lessons   <a href="#0" class="more">Read More</a>-->
</div> <!--/ .panel-body -->
</div> <!--/ #third_accordion_content -->
</div> <!--/ .panel -->
<!--/ END 4th Accordion -->
</div> <!--/ .accordion-wrapper -->
<!--/ END Accordion -->
</div> <!--/ .col-lg-6 -->
</div><!-- First Tab Pane -->
<div role="tabpanel" class="tab-pane fade" id="two">
<div class="col-lg-10 col-lg-offset-1 centered">
    <p>Each week we will honor one of our students who has shown exceptional progress, a great attitude or a love for music! Congratulations Abby and Caleb! They are brother and sister taking guitar and drum lessons. They earned this achievement by working hard, improving tremendously, having a awesome positive attitude and for just loving to play guitar!</p>
    <a href="#0" class="cta cta-default all-caps contact-trigger">Get in touch!</a> <!--cta-stroke all-caps-->
<div class="clearfix"></div>
<div class="browser-mockup-wrapper animated fadeInUp">
    <a href="https://www.youtube.com/watch?v=tyKNkL8cQpw&feature=youtu.be" class="swipebox-video play-btn animated pulse"><span class="icon-play2"></span></a><!--https://www.youtube.com/watch?v=Hhk4N9A0oCA-->
    <img class="margin-top-40" src="/images/ryan-p-student-of-the-week.JPG" alt="Browser Mockup" />
</div> <!--/ .browser-mockup-wrapper -->
</div> <!--/ .col-lg-12 -->
</div><!-- Second Tab Pane -->
<div role="tabpanel" class="tab-pane fade" id="three">
<div class="side-feature col-lg-6 col-md-6 animated fadeIn">
<div class="row">
<div class="side-feature-icon col-lg-2 col-md-2 col-sm-4 col-xs-3">
<span class="icon-happy3 urip-blue-color"></span>
</div> <!--/ .side-feature-icon -->
<div class="side-feature-info col-lg-10 col-md-10 col-sm-6 col-xs-9">
    <h4>Goals and Values</h4>
    <p>A Major Music was started by music instructor Greg Allers with the intentions of finding and training the best teachers who care about their students and want to give them the best learning experience because they genuinely love teaching and playing their instrument. It is always been a dream of his to offer lessons for every instrument and to help other teachers who he genuinely believes in become the best teacher they can be.</p>
</div> <!--/ .side-feature-info -->
<div class="side-feature-icon col-lg-2 col-md-2 col-sm-4 col-xs-3">
<span class="icon-lock4 side-feature-icon urip-blue-color"></span>
</div> <!--/ .side-feature-icon -->
<div class="side-feature-info col-lg-10 col-md-10 col-sm-6 col-xs-9">
    <h4>Background Info of A Major</h4>
    <p>Greg Allers had been teaching music for 8 years before going back to Missouri University to obtain his second degree. This time instead of music he chose Mechanical and Aerospace Engineering. Half way through his 4 years he realized that in two years, all of his students would not have a capable, professional teacher when he graduated and became and engineer. So he started reading every book he could get his hands on about running a business. Soon A Major Music was born and because of values, good intensions, training courses, and smart use of in-home lessons, A Major Music quickly took off and became a growing school in multiple companies. Greg still does some part time engineering consulting for industrial energy efficiency projects, but the bulk of his time is still dedicated to A Major Music. Making sure everything runs smoothly, that all the students and teachers are happy, and always working to grow A Major Music to help more teachers and more students!</p>
</div> <!--/ .side-feature-info -->
<div class="side-feature-icon col-lg-2 col-md-2 col-sm-4 col-xs-3">
<span class="icon-global side-feature-icon urip-blue-color"></span>
</div> <!--/ .side-feature-icon -->
<div class="side-feature-info col-lg-10 col-md-10 col-sm-6 col-xs-9">
    <h4>Future plans</h4>
    <p>A Major Muisc will one day be in every city in the United States. The App for both students and teachers is already in progress.</p>
</div> <!--/ .side-feature-info -->
<div class="side-feature-icon col-lg-2 col-md-2 col-sm-4 col-xs-3">
<span class="icon-lock4 side-feature-icon urip-blue-color"></span>
</div> <!--/ .side-feature-icon -->
<div class="side-feature-info col-lg-10 col-md-10 col-sm-6 col-xs-9">
    <h4>Safety</h4>
    <p>Safety is one of our highest concerns. We go through great lanks to only hire good hearted teachers and have many security protocols in place to keep them safe.</p>
</div> <!--/ .side-feature-info -->
</div> <!--/ .row -->
</div> <!--/ .side-feature .col-lg-6 -->
<div class="col-lg-6 col-md-6 animated bounceInRight">
<div class="perspective-mockup-bg"></div>
</div> <!--/ .col-lg-6 -->
</div><!-- Third Tab Pane -->
</div>
<!--/ END Tab panes -->
</div>
<!--/ END Section Tab -->
</div> <!--/ .row -->
<!-- BEGIN Nav tabs -->
<div class="section-tab" role="tabpanel">
<ul class="nav nav-tabs centered margin-top-40 margin-bot-40" role="tablist">
    <li role="presentation" class="active"><a href="#one" aria-controls="one" role="tab" data-toggle="tab">More Info</a></li>
    <li role="presentation"><a href="#two" aria-controls="two" role="tab" data-toggle="tab">Student of the Week</a></li>
    <li role="presentation"><a href="#three" aria-controls="three" role="tab" data-toggle="tab">Company Info</a></li>
</ul>
<!--/ END Nav tabs -->
</div>
</div> <!--/ .container -->
</section>
';







$WhyWereBetterSection = '
    <p class="section-title">Why We are Better</p>
    <h2 class="section-heading">More Affordable, More Convenient, Better Teachers, Better Lessons!</h2>
    <p>We do things a little differently to bring you better lessons, and save you time and money.</p>
</div> <!--/ .col-lg-8 -->
<div class="clearfix"></div>
<!-- BEGIN 1st Row Features -->
<div class="the-feature col-lg-6 col-md-6 col-sm-6">
<div class="row">
<a href="#0">
<div class="col-lg-2 col-md-2">
<span class="feature-icon icon-gears"></span>
</div>
<div class="col-lg-10 col-md-10">
    <h4 class="feature-title">Affordable Prices</h4>
    <p>In-Home lessons are more convenient for you and it keeps us from having to own expensive property. So you pay less and your teacher gets more. </p>
</div>
</a>
</div> <!--/ .row -->
</div> <!--/ .the-feature -->
<div class="the-feature col-lg-6 col-md-6 col-sm-6">
<div class="row">
<a href="#0">
<div class="col-lg-2 col-md-2">
<span class="feature-icon icon-trophy3"></span>
</div>
<div class="col-lg-10 col-md-10">
    <h4 class="feature-title">Custom Lesson Plans</h4>
    <p>Each lesson is tailored to your interest. You are not just learning the songs we already know or learning out of a book. You pick the songs, styles, genres, and techniques that you are interested in.</p>
</div>
</a>
</div> <!--/ .row -->
</div> <!--/ .the-feature -->
<!--/ END 1st Row Features -->
<!-- BEGIN 2nd Row Features -->
<div class="the-feature col-lg-6 col-md-6 col-sm-6">
<div class="row">
<a href="#0">
<div class="col-lg-2 col-md-2">
<span class="feature-icon icon-lightbulb"></span>
</div>
<div class="col-lg-10 col-md-10">
    <h4 class="feature-title">Convienent in-home lessons</h4>
    <p>Our instructors come to your home for the lesson so you do not have to worry about buying gas, running late, fighting traffic, or if you are a parent waiting in a boring wait room for the lesson to end.</p>
</div>
</a>
</div> <!--/ .row -->
</div> <!--/ .the-feature -->
<div class="the-feature col-lg-6 col-md-6 col-sm-6">
<div class="row">
<a href="#0">
<div class="col-lg-2 col-md-2">
<span class="feature-icon icon-mobile4"></span>
</div>
<div class="col-lg-10 col-md-10">
    <h4 class="feature-title">Trained Professional Instructors</h4>
    <p>Every instructor has gone through our extensive training program that both makes sure they are experts at their instrument as well as confident teachers. We pulled decades of teaching experience into a foolproof teacher training program so our instructors can handle any situation!</p>
</div>
</a>
</div> <!--/ .row -->
</div> <!--/ .the-feature -->
<!--/ END 2nd Row Features -->
<!-- BEGIN 3rd Row Features -->
<div class="the-feature col-lg-6 col-md-6 col-sm-6 zero-bottom">
<div class="row">
<a href="#0">
<div class="col-lg-2 col-md-2">
<span class="feature-icon icon-adjustments"></span>
</div>
<div class="col-lg-10 col-md-10">
    <h4 class="feature-title">Flexibility</h4>
    <p>Not only do you have the exceptional convenience of having the teacher come to your home for the lesson, but our teachers are also able to reschedule lessons that you may need to miss. As long as you give your instructor an advanced notice, you may reschedule your lesson for another day that week or schedule a double long lesson the following week.</p>
</div>
</a>
</div> <!--/ .row -->
</div> <!--/ .the-feature -->
<div class="the-feature col-lg-6 col-md-6 col-sm-6 zero-bottom">
<div class="row">
<a href="#0">
<div class="col-lg-2 col-md-2">
<span class="feature-icon icon-browser2"></span>
</div>
<div class="col-lg-10 col-md-10">
    <h4 class="feature-title">Help finding Instruments</h4>
    <p>If you do not already play an instrument, finding one that plays well at a good price can be very difficult. Just ask us and we will use our expertise to help you find the right instrument for you at no charge! </p>
</div>
</a>
</div> <!--/ .row -->
</div> <!--/ .the-feature -->
<!--/ END 3rd Row Features -->
<div class="col-lg-12 col-md-12 col-sm-12 centered" style="margin-top: 20px;">
<a href="#0" class="cta cta-default all-caps contact-trigger"> Get in Touch</a>
';
    
    
    
    
    
$MainTeacherBio = '
    <h3>A Typical Instructor</h3>
    <h6>Teaches: Guitar, Bass, Theory, Improvisation, Song Writing, and possibly more instruments!</h6>
<!--NEED TO MAKE AN INSTRUCTOR PAGE FOR BIGGER SCREENS-->
<!--<p><a href="#0" class="more">See Full Bio</a></p>-->
    <p>Most of our teachers have been playing their instrument since a young age, have come from musical families, played in bands, and or went to school for their instrument or for music theory.</p>
    <p>Our instructors like to play all different genres and really love music and teaching.</p>
    <p>They are regular people in your community who have gone through our training program and are now professional music instructors!</p>
<ul class="checklist">
    <li>Experts in their instrument.</li>
    <li>Know exactly what to teach and how (for all genres).</li>
    <li>Are organized and punctual.</li>
    <li>Family friendly and fun!</li>
</ul> <!--/ .checklist -->    
';
    
$MainTeacherNavTabLinks = '
<ul class="nav nav-tabs" role="tablist">
<li role="presentation" class="active"><a href="#first" aria-controls="first" role="tab" data-toggle="tab"><span class="icon-cog2"></span>Driving Radius</a></li>
<li role="presentation"><a href="#second" aria-controls="second" role="tab" data-toggle="tab"><span class="icon-cloud-upload"></span>Teacher Quality</a></li>
<li role="presentation"><a href="#third" aria-controls="second" role="tab" data-toggle="tab"><span class="icon-bar-graph-2"></span>Attendance</a></li>
<li role="presentation"><a href="#fourth" aria-controls="third" role="tab" data-toggle="tab"><span class="icon-archive2"></span>What You will learn</a></li>
</ul>
';

$MainTeacherTab12 = '
<div role="tabpanel" class="tab-pane fade in active" id="first">
    <p>Every Teachers driving radius is a little different. Fill out a contact form, call or email us to an exact quote on your in-home lessons. </p>
</div> <!-- First Tab Pane -->
<div role="tabpanel" class="tab-pane fade" id="second">
    <p>Every teacher goes through an extensive background check, reference check, and previous work check.</p>
    <p>We have trained every teacher in their instrument and how to teach it. They are confident and capable music teaching professionals.</p>
</div> <!-- Second Tab Pane -->    
';

$MainTeacherTab3 = '
<div role="tabpanel" class="tab-pane fade" id="third">
    <p>Lessons are typically once a week and paid for with a subscription.</p>';
$MainTeacherTab3part2 = ' a month is a "discounted monthly rate" which is based off the regular 30-minute lesson per week lesson schedule.</p>
    <p>If you need to cancel a lesson with your teacher, please contact them directly no later than 6 hours before your scheduled lesson time to be eligible for a make up lesson.<br>Any lessons canceled that are eligible for a makeup lesson, automatically become a a make up lesson credit that you can use anytime.</p>
    <a href="/prices/#attendance">More about attendance</a>
</div> <!-- Third Tab Pane -->
'; 
    
$MainTeacherTab4 = '
<div role="tabpanel" class="tab-pane fade" id="fourth">
    <p>Most beginner guitar lessons start out with the "A Major Music beginner packet", which is a fun and fast way to learn the foundations of guitar and music. We teach the fundamentals of guitar through 4 popular and fun songs! Then you will be ready to venture off into just about whatever style you are interested in and your instructor can simplify advanced songs to your level.</p>
    <p>You can start thinking of about 5 songs you like or would eventually like to learn how to play! It may be a month or two before we get to them but it will give your instructor a good idea of what you would like to learn. Also the songs do not have to have guitar in them (for example: we can play a piano song on the guitar "no problem!"). Even most difficult professional songs we can simplify if needed.
</p>
</div> <!-- Fourth Tab Pane -->
';

    

    
    
    
$TeacherTestimonialTabSect = 'We love our lessons with A Major Music! My two kids are learning so much and they are having a lot of fun. They do not even mind practicing and I think that says a lot! I would recommend A Major to anyone who may be considering taking lessons. They are learning drums and guitar and have been taking lessons for 6 months. My favorite thing about A Major Music is having lessons at my home, very fair price, They have great teachers and my kids enjoy their lessons so much!<br>- Carrie B.';
    
    
$HowItWorksTopSect = '
    <p class="section-title">How it works</p>
    <h2 class="section-heading">Schedule a lesson in your home with one of our trained professional instructors now!</h2>
</div> <!--/ .col-lg-8 -->
<div class="clearfix"></div>
<div class="col-lg-10 col-lg-offset-1">
    <p>Just fill out any contact form to schedule a free trial lesson with one of our instructors, or to ask any questions and speak with us in person.</p>
    <p>Learn the foundations of your instrument the correct way, through fun songs you know and like!</p>
';
    
$HowItWorksSection = '
<ul class="how-it-works-col">
<li class="col-lg-4 col-md-4 col-sm-4">
<div class="how-it-works-title">
    <img src="/images/Contact-Form-For-Guitar-Lessons.png" alt="Fully Responsive" data-sr="enter bottom over 1s and move 80px wait 0.3s">
    <h4>Step 1 (Contact Us)</h4>
</div> <!--/ .how-it-works-title -->
<div class="how-it-works-info">
    <h4>Step One</h4>
    <p><a href="#0" class="cta cta-default all-caps contact-trigger">Fill out a contact form</a></p>
    <p>Then we will call or email you to answer any of your questions and schedule your first free trial lesson!</p>
</div> <!--/ .how-it-works-info -->
</li> <!--/ .one-third-col -->
<li class="col-lg-4 col-md-4 col-sm-4">
<div class="how-it-works-title">
    <img src="/images/instructor-image-small.jpg" alt="Fully Responsive" data-sr="enter bottom over 1s and move 80px wait 0.5s">
    <h4>Step 2 (First Lesson)</h4>
</div> <!--/ .how-it-works-title -->
<div class="how-it-works-info">
    <h4>Step Two</h4>
    <p>Your instructor will call to instruduce himself or herself.</p> <p>Then have <strong>your first music lesson!</strong>. He or she will come to your home and teach the first lesson free.</p>
</div> <!--/ .how-it-works-info -->
</li> <!--/ .one-third-col -->
<li class="col-lg-4 col-md-4 col-sm-4">
<div class="how-it-works-title">
    <img src="/images/Pay-Online.jpg" alt="Fully Responsive" data-sr="enter bottom over 1s and move 80px wait 0.7s">
    <h4>Step 3 (Pay)</h4>
</div> <!--/ .how-it-works-title -->
<div class="how-it-works-info">
    <h4>Step Three</h4>
    <p>After you have had your first lesson and have decided to continue, then let us know and pay for what is left of the month.</p>
    <p>Then you are done! Any new schedule changes you will make directly through the instructor. Let us know how things are going. Cancel anytime.</p>
    <a href="#0" class="cta cta-default all-caps contact-trigger">Sign Up Now!</a>
</div> <!--/ .how-it-works-info -->
</li> <!--/ .one-third-col -->
</ul>
';
    
    
    
    
    
// ABOUT PAGE
$AboutTitleSection = '
    <b class="is-visible">About us</b>
<!--<b>Tuition</b>
<b>Transfers</b>-->
</span> <!--/ .animated-words-wrapper -->
</h1>
<!--/ END Animated/Rotating Headline -->
<!--<ul class="inline-cta">
<li data-sr="enter right over 1s wait 0.3s">-->
    <div><a href="#0" class="ctaa cta-default all-caps contact-trigger margin-top-40">Get in Touch</a></div>
<!--</li>
<li data-sr="enter left  over 1s wait 0.3s">-->
    <div><a href="#what-we-do" class="cta cta-stroke all-caps scroll-to">About us</a></div>	
';
$AboutUsContentSect = '
<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 centered">
    <p class="section-title">Company Info</p>
    <h2 class="section-heading">About us</h2>
</div> <!--/ .col-lg-8 -->
<div class="clearfix"></div>
<div class="col-lg-10 col-lg-offset-1">
    <h4>Goals and Values</h4>
    <p>A Major Music was started by music instructor Greg Allers with the intentions of finding and training the best teachers who care about their students and want to give them the best learning experience because they genuinely love teaching and playing their instrument. It is always been a dream of his to offer lessons for every instrument and to help other teachers who he genuinely believes in become the best teacher they can be.</p>
    <h4>Background Info of A Major</h4>
    <p>Greg Allers had been teaching music for 8 years before going back to Missouri University to obtain his second degree. This time instead of music he chose Mechanical and Aerospace Engineering. Half way through his 4 years he realized that in two years, all of his students would not have a capable, professional teacher when he graduated and became and engineer. So he started reading every book he could get his hands on about running a business. Soon A Major Music was born and because of values, good intensions, training courses, and smart use of in-home lessons, A Major Music quickly took off and became a growing school in multiple companies. Greg still does some part time engineering consulting for industrial energy efficiency projects, but the bulk of his time is still dedicated to A Major Music. Making sure everything runs smoothly, that all the students and teachers are happy, and always working to grow A Major Music to help more teachers and more students!</p>                                        
    <h4>Future plans</h4>
    <p>A Major Muisc will one day be in every city in the United States. The App for both students and teachers is already in progress.</p>
</div><!--/ .col-lg-10 -->
';







// APPLY PAGE
$ApplyPageTitleSection = '
    <h1 class="all-caps text-shadow-medium margin-top-40" data-sr="enter bottom over 1s and move 50px wait 0.3s">A Major Music Lessons</h1>
<!-- BEGIN Animated/Rotating Headline -->
<h1 class="animated-headline slide" data-sr="enter bottom over 1s and move 50px wait 0.3s">
<span class="animated-words-wrapper">
    <b class="is-visible">Apply</b>
<!--<b>Tuition</b>
<b>Transfers</b>-->
</span> <!--/ .animated-words-wrapper -->
</h1>
<!--/ END Animated/Rotating Headline -->
<!--<ul class="inline-cta">
<li data-sr="enter right over 1s wait 0.3s">-->
    <div><a href="#0" class="ctaa cta-default all-caps contact-trigger margin-top-40">Get in Touch</a></div>
<!--</li>
<li data-sr="enter left  over 1s wait 0.3s">-->
    <div><a href="#what-we-do" class="cta cta-stroke all-caps scroll-to">Apply Here</a></div>	
';
$ApplyPageContent = '
    <p class="section-title">Apply</p>
    <h2 class="section-heading">How to Apply</h2>
</div> <!--/ .col-lg-8 -->
<div class="clearfix"></div>
<div class="col-lg-10 col-lg-offset-1">
    <h1>Want to be a music instructor?</h1>
    <p>A Major Music LLC is a music lesson provider in the Columbia area.</p>
    <p>We are currently accepting applications all instruments.</p>
    <h3>Free Training Program for Inexperienced Teachers</h3>
    <p>We offer a free training program that will teach you everything you need to know to become a professional successful music instructor providing quality friendly music lessons to our students. (training length based on individual need)</p>
    <p>The program may include, aside from learning to teach, music theory and advanced techniques of your instrument. </p>
    <p>As an A Major Music lesson instructor you will be able to contact your mentor any time with any questions you may not know that your student asks. We will do all the advertising, scheduling, pricing and training for you! As well as provide a studio for you to teach at and other teaching service options. This allows you to focus on giving a quality music lessons.</p>
    <p>If you have great communication skills, are a reliable person, patient, have transportation, and love playing music then contact our hiring manager Greg. </p>
    <p>To get started,<br>
    <a href="https://amajorguitarlessons.com/apply/" class="cta cta-default all-caps title="Go to the the A Major Music Application" target="_blank">Click Here to fill out and submit an Application</a></p>
</div><!--/ .col-lg-10 -->
<div class="clearfix"></div>
    <a href="#0" class="cta cta-default all-caps contact-trigger">Or Get in Touch</a>
';







// ATTENDANCE PAGE
$AttendancePageTitleSect = '
    <h1 class="all-caps text-shadow-medium margin-top-40" data-sr="enter bottom over 1s and move 50px wait 0.3s">A Major Music Lessons</h1>
<!-- BEGIN Animated/Rotating Headline -->
<h1 class="animated-headline slide" data-sr="enter bottom over 1s and move 50px wait 0.3s">
<span class="animated-words-wrapper">
    <b class="is-visible">Attendance</b>
<!--<b>Tuition</b>
<b>Transfers</b>-->
</span> <!--/ .animated-words-wrapper -->
</h1>
<!--/ END Animated/Rotating Headline -->
<!--<ul class="inline-cta">
<li data-sr="enter right over 1s wait 0.3s">-->
    <div><a href="#0" class="ctaa cta-default all-caps contact-trigger margin-top-40">Get in Touch</a></div>
<!--</li>
<li data-sr="enter left  over 1s wait 0.3s">-->
    <div><a href="#what-we-do" class="cta cta-stroke all-caps scroll-to">Attendance Info</a></div>	
';

$AttendanceMainPageContentSect = '
    <p class="section-title">Attendance Info</p>
    <h2 class="section-heading">Tuition</h2>
</div> <!--/ .col-lg-8 -->
<div class="clearfix"></div>
<div class="col-lg-10 col-lg-offset-1">
    <p>Our normal tuition is based off a set amount each month, which is a "discounted monthly rate". This is for a regular 30-minute lesson per week schedule. The length and frequency of the lesson may be adjusted upon your request.</p>
    <p>You get a lesson every week of the month and the monthly price is based on 4 lessons a month, but because you will get an extra lesson on the four/five 5-week months each year, you get 4 weeks off each year, one of which is christmas week, a sick day for you and 2 for your instructor, but instructors will make up sick days for new students.</p>
<ul>
    <li>1 Lesson the week of Christmas</li>
    <li>2 Lessons for your teacher to use as sick days / vacation</li>
    <li>1 Lessons for you to use as sick days / vacation</li>
</ul>
    <p>We give a big discount for paying monthly because consistent lessons are more effective, It helps the teachers to keep a weekly schedule and it is great for budgeting.</p>
    <p>Tuition is normally collected on the fith of each month. We are very flexible and willing to work with you. If we are given a notice, it is almost always totally fine if you need to wait a week or so to turn in your months payment.</p>
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










// CONTACT US PAGE
$ContactUsPageTitleSect = '
    <h1 class="all-caps text-shadow-medium margin-top-40" data-sr="enter bottom over 1s and move 50px wait 0.3s">A Major Music Lessons</h1>
<!-- BEGIN Animated/Rotating Headline -->
<h1 class="animated-headline slide" data-sr="enter bottom over 1s and move 50px wait 0.3s">
<span class="animated-words-wrapper">
    <b class="is-visible">Contact Us</b>
<!--<b>Tuition</b>
<b>Transfers</b>-->
</span> <!--/ .animated-words-wrapper -->
</h1>
<!--/ END Animated/Rotating Headline -->
<!--<ul class="inline-cta">
<li data-sr="enter right over 1s wait 0.3s">-->
    <div><a href="#0" class="ctaa cta-default all-caps contact-trigger margin-top-40">Get in Touch</a></div>
<!--</li>
<li data-sr="enter left  over 1s wait 0.3s">-->
    <div><a href="#what-we-do" class="cta cta-stroke all-caps scroll-to">Contact Info</a></div>	
';

$ContactUsContent = '
    <p class="section-title">Contact Info</p>
    <h2 class="section-heading">Contact Us</h2>
</div> <!--/ .col-lg-8 -->
<div class="clearfix"></div>
<div class="col-lg-10 col-lg-offset-1">
    <p>Call, Email, or fill out a contact form to get in touch with us for any reason!</p>
    <p>Use the contact info below to get in touch with Carol (the school manager) or Greg (the owner).</p>
<div class="col-lg-12">
<!-- BEGIN Attention Box -->
<div class="attention-box">
    <h5 class="all-caps">Contact Info:</h5>
    <p><strong>Phone: <a href="tel:8478071800">(847) 807-1800 </a> &ensp; - Email:  <a href="mailto: contact@amajor.net">Contact@AMajor.Net</a></strong><b> &ensp; -  Main Office: 906 W Ash St, Columbia, MO 65203</b></p>
</div> <!--/ .attention-box -->
<!--/ END Attention Box -->
</div>
' ;





// FAQ PAGE
$FaqPageTitleSect = '
    <h1 class="all-caps text-shadow-medium margin-top-40" data-sr="enter bottom over 1s and move 50px wait 0.3s">A Major Music Lessons</h1>
<!-- BEGIN Animated/Rotating Headline -->
<h1 class="animated-headline slide" data-sr="enter bottom over 1s and move 50px wait 0.3s">
<span class="animated-words-wrapper">
    <b class="is-visible">Frequently Asked Questions</b>
<!--<b>Tuition</b>
<b>Transfers</b>-->
</span> <!--/ .animated-words-wrapper -->
</h1>
<!--/ END Animated/Rotating Headline -->
<!--<ul class="inline-cta">
<li data-sr="enter right over 1s wait 0.3s">-->
    <div><a href="#0" class="ctaa cta-default all-caps contact-trigger margin-top-40">Get in Touch</a></div>
<!--</li>
<li data-sr="enter left  over 1s wait 0.3s">-->
    <div><a href="#what-we-do" class="cta cta-stroke all-caps scroll-to">F.A.Q. Info</a></div>	
';
$FaqPageContentSect = '
<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 centered">
    <p class="section-title">Frequently Asked Questions</p>
    <h2 class="section-heading">F.A.Q.</h2>
</div> <!--/ .col-lg-8 -->
<div class="clearfix"></div>
<div class="col-lg-10 col-lg-offset-1">
    <p>More Questions and Answers Coming soon!</p>
    <p>If you have a question, please fill out any contact form to "Get in touch" and ask us! We will get back to you with the answer right away and then add the question and answer to this page!</p>
</div><!--/ .col-lg-10 -->
';




// HELP VIDEOS PAGE
$HelpVideosPageTitleSect = '
<h1 class="all-caps text-shadow-medium margin-top-40" data-sr="enter bottom over 1s and move 50px wait 0.3s">A Major Music Lessons</h1>
										<!-- BEGIN Animated/Rotating Headline -->
										<h1 class="animated-headline slide" data-sr="enter bottom over 1s and move 50px wait 0.3s">
											<span class="animated-words-wrapper">
												<b class="is-visible">Help Videos</b>
												<!--<b>Tuition</b>
												<b>Transfers</b>-->
											</span> <!--/ .animated-words-wrapper -->
										</h1>
										<!--/ END Animated/Rotating Headline -->

										<!--<ul class="inline-cta">

											<li data-sr="enter right over 1s wait 0.3s">-->
											<div><a href="#0" class="ctaa cta-default all-caps contact-trigger margin-top-40">Get in Touch</a></div>
											
												
											<!--</li>

											<li data-sr="enter left  over 1s wait 0.3s">-->
											<div><a href="#what-we-do" class="cta cta-stroke all-caps scroll-to">Help Videos</a></div>	
';
$HelpVideosPageContentSect = '
<p class="section-title">Help full videos!</p>

							<h2 class="section-heading">Links to youtube</h2>

						</div> <!--/ .col-lg-8 -->

						<div class="clearfix"></div>

						<div class="col-lg-10 col-lg-offset-1">
							
						<ul>
							<li><a href="https://youtu.be/Aw40jz0aaqo">The 4 Steps Video</a></li>
							<li><a href="https://youtu.be/BdAQo5B74RM">12 Bar Blues E major (backing track)</a></li>
							<li><a href="https://youtu.be/piRnRn7sDW0">Jumper (3rd eye blind) Chords with the song</a></li>
							<li><a href="https://youtu.be/PcgzKb89u5c">Brown Eyed Girl (Van Morrison) Chords with the song</a></li>
							<li><a href="https://youtu.be/S0tv7lCdBxA">Pentatonic Scale Review</a></li>	
						</ul>
';







// PAY PAGE
$PayPageTitleSect = '
    <h1 class="animated-headline slide margin-top-40" data-sr="enter bottom over 1s and move 50px wait 0.3s">
<span class="animated-words-wrapper">
    <b class="is-visible">A Major Music Lessons<br>Ways to Pay</b>
<!--<b>Tuition</b>
<b>Transfers</b>-->
</span> <!--/ .animated-words-wrapper -->
</h1>
<!--/ END Animated/Rotating Headline -->
<!--<ul class="inline-cta">
<li data-sr="enter right over 1s wait 0.3s">-->
    <div><a href="#0" class="ctaa cta-default all-caps contact-trigger margin-top-40">Get in Touch</a></div>
<!--</li>
<li data-sr="enter left  over 1s wait 0.3s">-->
    <div><a href="#what-we-do" class="cta cta-stroke all-caps scroll-to">Continue</a></div>	
';
$PaymentContent = '
<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 centered">
    <p class="section-title">Ways to Pay</p>
</div> <!--/ .col-lg-8 -->
<div class="clearfix"></div>
<div class="col-lg-10 col-lg-offset-1">
    <h2>Never Pay Your Teacher Directly</h2>
    <p>This is very important for many reasons, safety being one of the main reasons.<br>All payments must go through A Major Music and no form of Cash, Check, or Charge should ever be given to a teacher directly.<br>If a teacher asks for a payment this way, please contact us.</p>
    <h2>Electronic Check (ACH)</h2>
    <p>The best way to pay is through our electronic check (ACH) system we use through US Bank. <br>To sign up for our Online payments just click <a href="https://amajorguitarlessons.com/ach-form/" class="ctaa cta-default all-caps" target="_blank">this link to our one-time safe and secure online submission</a></p>	    
    <p>There is no extra charge for you to pay online this way. We are in full control and can make any adjustments if needed. We normally charge on the first of every month but if another day works better just let us know! Our teachers have to confirm that you are continuing next month before any charges are made.<br>You can also use this for just one payment!</p>
    <h2>Credit and Debit Cards</h2>
    <p>We accept all credit and debit cards. Either fill out a "Get In Touch" form and request to pay by credit card, or create an account only. Either way, we will confirm with you before any charges are made. <br>(We use the very safe and commonly used "Stripe" for card processing)</p>
    <div><a href="https://amajorguitarlessons.com/stripe-site/signup.php?plan=register_card_only" class="ctaa cta-default all-caps" target="_blank">Click Here And Create An Account To Pay By Card</a></div>
    <p>&emsp;</p>
    <h2>Mail a Check</h2>
    <p>You may also pay by mailing a check. Often you can set up bill-pay through your bank to mail the check for free.<br>Mail all checks to <b>906 W Ash St, Columbia, Mo, 65203</b></p>
    <h2>Paypal</h2>
    <p>You may pay by <b>Paypal</b>, but (temporarily) there is an additional 3.5% fee. Fill out a "Get In Touch" form to request to be charged by Paypal.</p>
    <h4>If you have any questions, fill out a contact form, email, or call us.</h4>
</div><!--/ .col-lg-10 -->
<div class="clearfix"></div>
</div> <!--/ .row -->
</div> <!--/ .container -->
' ;







// Price Page title
$PricePageTitleSect = '
<h1 class="all-caps text-shadow-medium margin-top-40" data-sr="enter bottom over 1s and move 50px wait 0.3s">A Major Music Lessons</h1>
<!-- BEGIN Animated/Rotating Headline -->
<h1 class="animated-headline slide" data-sr="enter bottom over 1s and move 50px wait 0.3s">
<span class="animated-words-wrapper">
    <b class="is-visible">Prices & Attendance</b>
<!--<b>Tuition</b>
<b>Transfers</b>-->
</span> <!--/ .animated-words-wrapper -->
</h1>
<!--/ END Animated/Rotating Headline -->
<!--<ul class="inline-cta">
<li data-sr="enter right over 1s wait 0.3s">-->
    <div><a href="#0" class="ctaa cta-default all-caps contact-trigger margin-top-40">Get in Touch</a></div>
<!--<a href="#0" class="cta cta-default all-caps contact-trigger margin-top-40"> Get in Touch</a>-->
<!--</li>
<li data-sr="enter left  over 1s wait 0.3s">-->
    <div><a href="#what-we-do" class="cta cta-stroke all-caps scroll-to">Continue</a></div>
';







// STUDENT OF THE WEEK PAGE
$StudentOfTheWeekPageTitle = '
    <h1 class="all-caps text-shadow-medium margin-top-40" data-sr="enter bottom over 1s and move 50px wait 0.3s">A Major Music Lessons</h1>
<!-- BEGIN Animated/Rotating Headline -->
<h1 class="animated-headline slide" data-sr="enter bottom over 1s and move 50px wait 0.3s">
<span class="animated-words-wrapper">
    <b class="is-visible">Student of the Week</b>
<!--<b>Tuition</b>
<b>Transfers</b>-->
</span> <!--/ .animated-words-wrapper -->
</h1>
<!--/ END Animated/Rotating Headline -->
<!--<ul class="inline-cta">
<li data-sr="enter right over 1s wait 0.3s">-->
    <div><a href="#0" class="ctaa cta-default all-caps contact-trigger margin-top-40">Get in Touch</a></div>
<!--</li>
<li data-sr="enter left  over 1s wait 0.3s">-->
    <div><a href="#what-we-do" class="cta cta-stroke all-caps scroll-to">Continue</a></div>	
';
//* Student of the week page Content
$studentoftheweek = '
    <p>Each week we will honor one of our students who has shown exceptional progress, a great attitude or a love for music!</p>
    <h2>April 14th-21st 2014 Winners!</h2>
    <h3>Caleb and Abby!!</h3>
    <p><img src="/images/John-Canote-teaching-music-Drums-1.JPG" width="240" height="160"></p>
    <p>They are brother and sister taking lessons with John Canote who teaches them both guitar and drums. They earned this achievement by working hard, improving tremendously, having a awesome positive attitude and for just loving to play guitar!</p>
    <p><img src="/images/John-Canote-teaching-music-guitar-1.JPG" width="240" height="160"></p>
    <p>They received the award and a free A Major Music Lessons T-Shirt</p>
    <p>Congratulations Abby and Caleb!!</p>
    <p><iframe width="420" height="315" src="//www.youtube.com/embed/tyKNkL8cQpw" frameborder="0" allowfullscreen></iframe></p>
    <h2>April 7th-13th 2014 Winners!</h2>
    <h3>Ryan P. Guitar</h3>
    <p>He earned this achievement by working hard, improving tremendously, having a awesome positive attitude and for just loving to play guitar!</p>
    <p>He received the award, free A Major Music Lessons T-Shirt</p>
    <p>Congratulations Ryan!!</p>
    <p><img src="/images/ryan-p-student-of-the-week.JPG" width="240" height="160"></p>
    <p><iframe width="420" height="315" src="//www.youtube.com/embed/yU0T5Sk6pqs" frameborder="0" allowfullscreen></iframe></p>		
' ;


   ?> 


<!--    google analytics tracking code     --> 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-82758194-1', 'auto');
  ga('send', 'pageview');

</script>



 


















