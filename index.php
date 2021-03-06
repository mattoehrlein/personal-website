<!DOCTYPE html>
<html lang="en">
	<head>
		<title>MattOehrlein.com</title>
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="./stylesheets/style.css"/>
		<link rel="stylesheet" type="text/css" href="./stylesheets/jquery.pageslide.css"/>
		<!-- Fonts ================================================== -->
		<link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
    	<!-- JQuery ================================================= -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript" src="./include/jquery.wookmark.js"></script>
		<script type="text/javascript" src="./scripts.js"></script>
		<script type="text/javascript" src="./include/waypoints.js"></script>
		<meta charset="utf-8">
  		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
	</head>
	<body>
	<?php include_once("analyticstracking.php") ?>

		<div id="content" class = "center">
			<div id="title">MattOehrlein.com</div>
			<div id="quote-container">
				<div id="quote-text" class="quote">"Here is a quote that I like."</div>
				<div id="quote-person" class="quote">-Someone</div>
			</div>
			<div id="picture-container" class="center border">
				<div id ="picture-slider">
					<img src = "./content/img/me.jpg"/>
				</div>
			</div>
			<div id = "About">
			<p>
				Hi. Since you're on this site, you probably want to learn something about me.
				You've come to the right place. My vision is for this site to function as
				an interactive resumé built for the age of the internet. Why do we still use paper resumés anyway?
			</p>
			</div> <!-- end "About" -->
			<h2>Experience:</h2>
			<div id="CV">
				<ul>
					<li>
						MS Electrical Engineering, Univeristy of Minnesota
					</li>
					<li>
						BS Electrical Engineering, University of Minnesota
					</li>
					<li>
					  Co-Founder, MegaBots Inc.
					</li>
					<li>
						President, Volcano Technologies
					</li>
					<li>
						President, i3Detroit
					</li>
					<li>
						Senior Controls Engineer, Eaton Corporation - Corporate Research & Technology 
					</li>
					<li>
						Associate Electrical Engineer, Logic Product Development
					</li>
				</ul>
			</div>
			<div id="project-title">
			<h2>Projects:</h2>
			</div>
			<div id="projects-container" role="projects-container">
				<ul id="projects-tiles">
				<li>
					<div class="project-overlay"><a href="mindflame.php"><span></span></a>
						<div class="project-overlay-header">Mind Flame</div>
						<div class="project-overlay-text">A brainwave activated flame effects display</div>
					</div>
					<img src = "./content/img/mindflame.jpg"/>
				</li>
				<li>
					<div class="project-overlay"><a href="volcanotech.php"><span></span></a>
						<div class="project-overlay-header">Volcano Technologies</div>
						<div class="project-overlay-text">An electronics design company</div>
					</div>
					<img src = "./content/img/volcano.jpg"/>
				</li>
				<li>
					<div class="project-overlay"><a href="i3detroit.php"><span></span></a>
						<div class="project-overlay-header">i3 Detroit</div>
						<div class="project-overlay-text">A community-run co-working space</div>
					</div>
					<img src = "./content/img/i3detroit.jpg"/>
				</li>
				<li>
					<div class="project-overlay"><a href="ledtwitter.php"><span></span></a>
						<div class="project-overlay-header">LED Twitter Sign</div>
						<div class="project-overlay-text">A Twitter enabled portable sign</div>
					</div>
					<img src = "./content/img/twittersign.jpg"/>
				</li>
				<li>
					<div class="project-overlay"><a href="laminarfountain.php"><span></span></a>
						<div class="project-overlay-header">Laminar Fountain</div>
						<div class="project-overlay-text">An interactive fluid art installation</div>
					</div>
					<img src = "./content/img/laminarfountain.jpg"/>
				</li>
				<li>
					<div class="project-overlay"><a href="awesomefoundation.php"><span></span></a>
						<div class="project-overlay-header">Awesome Foundation</div>
						<div class="project-overlay-text">A micro-grant foundation committed to funding civic media projects in Detroit</div>
					</div>
					<img src = "./content/img/awesomenews.jpg"/>
				</li>
				</ul>
			</div> <!-- end projects-container -->
			<div id="contact-container">
				<div id="contact-title">
					<h2>Contact:</h2>
				</div>
				<ul id="contact-list">
					<li><a href="mailto:matt.oehrlein@gmail.com">matt.oehrlein@gmail.com</a></li>
					<li><a href="http://www.linkedin.com/in/mattoehrlein">www.linkedin.com/in/mattoehrlein</a></li>
					<li><a href="http://www.facebook.com/matt.oehrlein">facebook.com/matt.oehrlein</a></li>
				</ul>
			</div> <!-- end contact info -->
			<!-- Begin MailChimp Signup Form -->
			<div id="mc_embed_signup_title">
				<h2>Get Biannual Updates From Me:</h2>
			</div>
			<div id="mc_embed_signup">
			<form action="http://mattoehrlein.us3.list-manage2.com/subscribe/post?u=1c967500eb043a5b894c74a30&amp;id=dcbd5a2432" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				
			<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
			<div class="mc-field-group">
				<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
			</label>
				<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
			</div>
			<div class="mc-field-group">
				<label for="mce-FNAME">First Name </label>
				<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
			</div>
			<div class="mc-field-group">
				<label for="mce-LNAME">Last Name </label>
				<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
			</div>
				<div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none"></div>
					<div class="response" id="mce-success-response" style="display:none"></div>
				</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			    <div style="position: absolute; left: -5000px;"><input type="text" name="b_1c967500eb043a5b894c74a30_dcbd5a2432" value=""></div>
				<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
			</form>
			</div>
		<!--End mc_embed_signup-->
		</div> <!-- end content container -->
	</body>
</html>
