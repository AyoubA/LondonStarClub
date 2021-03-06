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
		
	<!-- MEMBER SIGN UP FEE. DIFFERENT DISCOUNT FOR EACH EVENT.-->
	
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
												<li ><a href="index.php">Home</a></li>
												<li> 
													<a href="corporate.php">Corporate Events</a>
												</li>	
												
												<li class="current_page_item">
												<a href="nights.php">Club Nights</a>
													<ul> 
														<li> <a href="students.php">Student Nights </a></li>
													</ul>
												</li> <!-- End of Club Nights Drop Down -->
												<li><a href="mystery.php">Mystery Club/Happy Hour </a></li> <!-- make it stand out -->
												<li ><a href="charity.php">Charity Events</a></li>
												<li><a href="tickets.php">Tickets</a></li>
												<li><a href="members.php">Members</a>
													<ul> 													
														<li> <a href="login.php">Login </a></li>
														<li> <a href="register.php"> Become a member </a></li>
													</ul>
												</li> <!-- End of Members Drop Down -->
												<li><a href="contact.php">Contact Us</a></li>
											</ul>
										</nav>						
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
											<div class="4u">
											
												<!-- Sidebar -->
													<section class="box">
														<a href="http://facebook.com/DreametryDoodle" class="image image-full"><img src="images/pic09.jpg" alt="" /></a>
														<header>
															<h3>Latest event: Icebreaker @ Fabric! </h3>
														</header>
														<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
														<footer>
															<a href="#" class="button alt">Magna sed taciti</a>
														</footer>
													</section>
													<section class="box">
														<p>
<a class="twitter-timeline"  href="https://twitter.com/PlayboyClubLDN"  data-widget-id="478955939760836609">Tweets by @PlayboyClubLDN</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
														</p>
														
													</section>

											</div>
											
											<!-- main content -->
											<div class="8u skel-cell-important">
												
												<!-- Content -->
													<article class="box is-post">
														<a href="http://facebook.com/DreametryDoodle" class="image image-full"><img src="images/picStudents01.jpg" alt="" /></a>
														<header>
															<h2>Student Nights with London Star Club</h2>
															<span class="byline">Protip: They are always awesome!</span>
														</header>
														<p>
															Quick description of what is expected of student nights and when we run them, how much they are, how they differ 
															from other nights whether it be students only, drink prices, or ticket prices.
														</p>

													</article>
													
																						<div>
										<?php 

							require 'DatabasePosts.php';
									
							$sql = "SELECT * FROM events WHERE typeID = 1 ORDER BY date ASC";
							$STH = $GLOBALS["db"]->query($sql);
							$count = 0;
						
							while ($row = $STH->fetch(PDO::FETCH_ASSOC)) {
			
							$id = $row['id'];
							$name = $row ['name'];
							$description = $row['description'];
							$typeID = $row['typeID'];
							$company = $row['companyID'];
							$date = date_create($row['date']);
							$time = $row['timeStart'];
							$timeEnd = $row['timeEnd'];
							$venueID = $row['venueID'];
							$priceMale = $row['pricemale'];
							$priceFemale = $row['pricefemale'];
							$discount = $row['memberdiscount'];
							$stock = $row['ticketstock'];	
							$flyer = $row['flyerName'];
			
							if ($count == 0) echo '<div class="row">'; 
			
						echo '<div class="4u">
									<section class="box">
							<a href="http://facebook.com/LondonStarClub" class="image image-full" style="overflow: hidden; height:150px;" ><img src="images/'.$flyer.'.jpg" alt="" /></a>
									<header>
										<h3 style="text-overflow: ellipsis;  max-width: 350px; white-space: nowrap; overflow:hidden;" >'.$name.'</h3>
								<p> '.date_format($date, ' l jS F Y').' at '.date('g:ia', strtotime($time)).' </p>
									</header>													
						<p style="text-overflow: ellipsis;  max-width: 350px; white-space: nowrap; overflow:hidden;">'.$description.'</p>
									<footer>
								<a href="event.php?ticketID='.$id.'" class="button alt">Find out more</a>
							</footer>
						</section>
					</div>';
					$count++;
					if ($count == 3) {echo '</div>'; $count = 0;}		
			} if ($count < 3) echo '</div>';
										
										?>	

											</div>
										</div>
									</div>
								</section>

						</div>
					</div>					
					

						
				</div>
			</div>
			
			
			
			
			
			
			
			
			

		<!-- Footer Wrapper -->
			<div id="footer-wrapper">
				
				<!-- Footer -->
					<section id="footer" class="container">
					
						<div class="row">
							<div class="4u">

								<section>
									<header>
										<h2>Venues</h2>
									</header>
									<ul class="divided">
										<li><a href="venues.php">Piccadilly</a></li>
										<li><a href="venues.php">Mayfair</a></li>
										<li><a href="venues.php">Strand</a></li>
										<li><a href="venues.php">Oxford Street</a></li>
										<li><a href="venues.php">Charing Cross</a></li>
									</ul>
								</section>

							</div>
							<div class="4u">

								<section>
									<header>
										<h2>Useful Information</h2>
									</header>
									<ul class="divided">
										<li><a href="#">Terms and Conditions</a></li>
										<li><a href="#">Privacy Policy</a></li>
										<li><a href="#">Contact Us</a></li>
										<li><a href="#">Site Map</a></li>
										<li><a href="#">Careers</a></li>
									</ul>
								</section>

							</div>
							<div class="4u">
							
								<section>
									<header>
										<h2>Join Us</h2>
									</header>
									<ul class="social">
										<li><a class="fa fa-facebook solo" href="http://facebook.com/LondonStarClub"><span>Facebook</span></a></li>
										<li><a class="fa fa-twitter solo" href="http://facebook.com/LondonStarClub"><span>Twitter</span></a></li>
										<li><a class="fa fa-instagram solo" href="http://facebook.com/LondonStarClub"><span>Dribbble</span></a></li>
									</ul>
									<ul class="contact">
										<li>
											<h3>Address</h3>
											<p>
												Untitled Incorporated<br />
												1234 Somewhere Road Suite #5432<br />
												Mayfair, W1
											</p>
										</li>
										<li>
											<h3>Mail</h3>
											<p><a href="#">someone@untitled.tld</a></p>
										</li>
										<li>
											<h3>Phone</h3>
											<p> +44 000-0000</p>
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
											<li>&copy; London Star Club	</li>
											<li>Images: <a href="http://facebook.com/LondonStarClub">Novus Liesure</a></li>
											<li>Design: <a href="http://facebook.com/LondonStarClub">AJM</a></li>
										</ul>
									</div>

							</div>
						</div>
					</section>
				
			</div>

	</body>
</html>