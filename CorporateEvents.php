<!DOCTYPE HTML>

<html>
	<head>
		<title>London Star Club</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900,300italic" rel="stylesheet" />
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		
		<!-- 	SLIDER STYLESHEETS	-->
    <script src="js/modernizr-2.6.1.min.js"></script> 
    <script src="js/lean-slider.js"></script>
    <link rel="stylesheet" href="css/lean-slider.css" type="text/css" />
    <link rel="stylesheet" href="css/sample-styles.css" type="text/css" />
		
	</head>
	<body class="homepage">

		<!-- Header Wrapper -->
			<div id="header-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
						
							<!-- Header -->
								<section id="header">
									
									<!-- Logo -->
										<h1><a href="#"><img src="images/Logo.png" alt="" /></a></h1>
									
									<!-- TOP BAR NAVIGATION -->
										<nav id="nav">
											<ul>
<li class=""><a href="index.html">Home</a></li>
												<li> 
												

<li class="current_page_item"><a href="CorporateEvents.php">Corporate Events</a></li>

</li>	
												
												<li>
												<a href="index.html">Club Nights</a>
													<ul> 
														<li> <a href="index.html">Student Nights </a></li>
														<li> <a href="index.html">Mystery Club </a></li>
														<li> <a href="index.html">Happy Hour </a></li>
													</ul>
												</li> <!-- End of Club Nights Drop Down -->
												
												<li><a href="tickets.html">Tickets</a></li>
												<li><a href="index.html">Members</a></li>
												<li><a href="contact.html">Contact Us</a></li>
											</ul>
										</nav>						
								</section>

						</div>
					</div>
					
					<div class="row">
						<div class="12u">					
							<!-- Banner -->
								<section id="banner">
								<div class="slider-wrapper">
									<div id="slider">
										<div class="slide1">
										<img class="rounded" src="images/pic01-01.jpg" alt="" />
										<header style="background-color: transparent;">
											<h2>Corporate Dinners</h2>
											<span class="byline">Lorem ipsum dolor sit amet sit veroeros sed et blandit</span>
										</header>
										</div>
											<div class="slide2">
											<img class="rounded" src="images/pic01-02.jpg" alt="" />
											<header style="background-color: transparent;">
											<h2>Corporate Roof top events</h2>
											<span class="byline">Lorem ipsum dolor sit amet sit veroeros sed et blandit</span>
										</header>
											</div>
												<div class="slide3">
												<img class="rounded" src="images/pic01-03.jpg" alt="" />
												<header style="background-color: transparent;">
											<h2>Corporate Meetings.</h2>
											<span class="byline">Lorem ipsum dolor sit amet sit veroeros sed et blandit</span>
										</header>
												</div>
													</div>
										<div id="slider-direction-nav"></div>
										<div id="slider-control-nav"></div>
								</div>
					
								
									<!--  SLIDER JQUERY FUNCTION	-->
									<script type="text/javascript">
										$(document).ready(function() {
										var slider = $('#slider').leanSlider({
										directionNav: '#slider-direction-nav',
										controlNav: '#slider-control-nav'
										});
											});
									</script>	
								</section>								
						</div>
					</div>


					
				</div>
			</div> 
		
		<!-- Main Wrapper -->
<div id="main-wrapper">
<div class="container">
<div class="row">
<div class="12u">
							
<!-- Portfolio -->
<section>
<div>
<div class="row">
<div class="12u skel-cell-important">
			



<div>
<div class='row'>
<?php

// Create connection

$db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');

// Check connection

$sql = "SELECT * FROM events";

$STH = $db->query($sql);  //USE PREPARE FOR INSERT QUERIES AND QUERY FOR SELECT QUERIES

while ($row = $STH->fetch(PDO::FETCH_ASSOC)) {


echo "<div class='4u'>";
echo "<section class='box'>";

echo "<a href='http://facebook.com/LondonStarClubs' class='image image-full'><img src='images/pic02.jpg' alt='' /></a>";

echo "<header>";
echo "<h3>" .$row['name'] . "</h3>";
echo "</header>";

echo "<p>" . $row['description'] . "</p>" ;
echo "<footer>";
echo "<a href='#' class='button alt'>Find out more</a>";
echo "</footer>";
echo "</section>";
echo "</div>";



//  echo $row['Name'] . " " . $row['Description'];
//  echo "<br>";

}

?>

</section>
</div>
</div>					
</div>
</div>								

<!--											
<div>

<div class="row">
<div class="4u">
												<section class="box">
													<a href="http://facebook.com/LondonStarClubs" class="image image-full"><img src="images/pic02.jpg" alt="" /></a>
													<header>
														<h3>Masked Party</h3>
													</header>
													<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
													<footer>
														<a href="#" class="button alt">Find out more</a>
													</footer>
</section>
</div>

*************************************************
											
<div class="4u">											<section class="box">
													<a href="http://facebook.com/LondonStarClubs" class="image image-full"><img src="images/pic03.jpg" alt="" /></a>
													<header>
														<h3>Boogie Nights Party</h3>
													</header>
													<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
													<footer>
														<a href="#" class="button alt">Find out more</a>
													</footer>
</section>
</div>
	

*************************************************
										
<div class="4u">											<section class="box">
													<a href="http://facebook.com/LondonStarClubs" class="image image-full"><img src="images/pic04.jpg" alt="" /></a>
													<header>
														<h3>Arabian Nights</h3>
													</header>
													<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
													<footer>
														<a href="#" class="button alt">Find out more</a>
													</footer>
</section>
</div>



*************************************************-->









		<!-- Footer Wrapper -->
			<div id="footer-wrapper">
				
				<!-- Footer -->
					<section id="footer" class="container">
						<div class="row">
							<div class="8u">

								<section>
									<!--<header>
										<h2>Blandit nisl adipiscing</h2>
									</header>
									<ul class="dates">
										<li>
											<span class="date">Jan <strong>27</strong></span>
											<h3><a href="#">Lorem dolor sit amet veroeros</a></h3>
											<p>Ipsum dolor sit amet veroeros consequat blandit ipsum phasellus lorem consequat etiam.</p>
										</li>
										<li>
											<span class="date">Jan <strong>23</strong></span>
											<h3><a href="#">Ipsum sed blandit nisl consequat</a></h3>
											<p>Blandit phasellus lorem ipsum dolor tempor sapien tortor hendrerit adipiscing feugiat lorem.</p>
										</li>
										<li>
											<span class="date">Jan <strong>15</strong></span>
											<h3><a href="#">Magna tempus lorem feugiat</a></h3>
											<p>Dolore consequat sed phasellus lorem sed etiam nullam dolor etiam sed amet sit consequat.</p>
										</li>
										<li>
											<span class="date">Jan <strong>12</strong></span>
											<h3><a href="#">Dolore tempus ipsum feugiat nulla</a></h3>
											<p>Feugiat lorem dolor sed nullam tempus lorem ipsum dolor sit amet nullam consequat.</p>
										</li>
										<li>
											<span class="date">Jan <strong>10</strong></span>
											<h3><a href="#">Blandit tempus aliquam?</a></h3>
											<p>Feugiat sed tempus blandit tempus adipiscing nisl lorem ipsum dolor sit amet dolore.</p>
										</li>
									</ul>
								</section>
							
							</div>
							<div class="4u">
							
								<section>
									<header>
										<h2>What's this all about?</h2>
									</header>
									<a href="http://facebook.com/DreametryDoodle" class="image image-full"><img src="images/pic10.jpg" alt="" /></a>
									<p>
										This is <a href="http://html5up.net/dopetrope/">Dopetrope</a> a free, fully responsive HTML5 site template by 
										<a href="http://n33.co">AJ</a> for <a href="http://html5up.net/">HTML5 UP</a> It's released for free under
										the <a href="http://html5up.net/license/">CCA</a> license so feel free to use it for any personal or commercial project &ndash;
										just don't forget to credit us! <strong>PS:</strong> The awesome placeholder artwork used in this design is courtesy of <a href="http://facebook.com/DreametryDoodle/">Dreametry Doodle</a>.
									</p>
									<footer>
										<a href="#" class="button">Find out more</a>
									</footer>
								</section>-->
							
							</div>
						</div>
						<div class="row">
							<div class="4u">

								<section>
									<header>
										<h2>Tempus consequat</h2>
									</header>
									<ul class="divided">
										<li><a href="#">Lorem ipsum dolor sit amet sit veroeros</a></li>
										<li><a href="#">Sed et blandit consequat sed tlorem blandit</a></li>
										<li><a href="#">Adipiscing feugiat phasellus sed tempus</a></li>
										<li><a href="#">Hendrerit tortor vitae mattis tempor sapien</a></li>
										<li><a href="#">Sem feugiat sapien id suscipit magna felis nec</a></li>
										<li><a href="#">Elit class aptent taciti sociosqu ad litora</a></li>
									</ul>
								</section>

							</div>
							<div class="4u">

								<section>
									<header>
										<h2>Ipsum et phasellus</h2>
									</header>
									<ul class="divided">
										<li><a href="#">Lorem ipsum dolor sit amet sit veroeros</a></li>
										<li><a href="#">Sed et blandit consequat sed tlorem blandit</a></li>
										<li><a href="#">Adipiscing feugiat phasellus sed tempus</a></li>
										<li><a href="#">Hendrerit tortor vitae mattis tempor sapien</a></li>
										<li><a href="#">Sem feugiat sapien id suscipit magna felis nec</a></li>
										<li><a href="#">Elit class aptent taciti sociosqu ad litora</a></li>
									</ul>
								</section>

							</div>
							<div class="4u">
							
								<section>
									<header>
										<h2>Vitae tempor lorem</h2>
									</header>
									<ul class="social">
										<li><a class="fa fa-facebook solo" href="#"><span>Facebook</span></a></li>
										<li><a class="fa fa-twitter solo" href="http://twitter.com/n33co"><span>Twitter</span></a></li>
										<li><a class="fa fa-dribbble solo" href="http://dribbble.com/n33"><span>Dribbble</span></a></li>
										<li><a class="fa fa-linkedin solo" href="#"><span>LinkedIn</span></a></li>
										<li><a class="fa fa-google-plus solo" href="#"><span>Google+</span></a></li>
									</ul>
									<ul class="contact">
										<li>
											<h3>Address</h3>
											<p>
												Untitled Incorporated<br />
												1234 Somewhere Road Suite #5432<br />
												Nashville, TN 00000-0000
											</p>
										</li>
										<li>
											<h3>Mail</h3>
											<p><a href="#">someone@untitled.tld</a></p>
										</li>
										<li>
											<h3>Phone</h3>
											<p>(800) 000-0000</p>
										</li>
									</ul>
								</section>
							
							</div>
						</div>
						<div class="row">
							<div class="12u">
							
								<!-- Copyright -->
									<div id="copyright">
										<ul class="links">
											<li>&copy; Untitled	</li>
											<li>Images: <a href="http://facebook.com/DreametryDoodle">Dreametry Doodle</a></li>
											<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
										</ul>
									</div>

							</div>
						</div>
					</section>
				
			</div>

	</body>
</html>
