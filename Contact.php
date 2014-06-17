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
		
					<link rel="stylesheet" href="css/forms.css" />
		
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
												
												<li>
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
												<li class="current_page_item"><a href="contact.php">Contact Us</a></li>
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
							
							<!-- CONTACT BOXES -->
								<section>
									<header class="major">
									</header>
									<div>
										<div class="row">
											<div class="4u">
											
												<!-- contact us -->
													<section class="box">
						<div class="wrapper">
		<div id="main" style="padding:0 0 0 0;">
		
		<!-- Form -->
		<?php
		
		if (isset($_POST['postdata']))		
		print '<label><span>Message succesfully sent!</span></label>';
		
			
		?>
		<form id="contact-form" action="contact_confirmation.php" method="post">
			<h3>Contact Us</h3>
			<h4>Fill in the form below, and we'll get back to you as soon as possible.</h4>
			<div>
				<label>
					<span>Name: (required)</span>
					<input placeholder="Please enter your name" type="text" name="name" required autofocus>
				</label>
			</div>
			<div>
				<label>
					<span>Email: (required)</span>
					<input placeholder="Please enter your email address" type="email" name="email" required>
				</label>
			</div>
			<div>
				<label>
					<span>Telephone: (required)</span>
					<input placeholder="Please enter your number" type="tel" name="telephone" required>
				</label>
			</div>
			<div>
				<label>
					<span>Message: (required)</span>
					<textarea placeholder="Include all the details you can" name="messege" required> </textarea>
				</label>
			</div>
			<div>
				<button name="submit" type="submit">Send Email</button>
			</div>
		</form>
		<!-- /Form -->
		
		</div>
	</div>
													</section>
											</div>
                   <!-- /contact us -->
                   
												
											<div class="8u skel-cell-important">
												<!-- map -->
													<article class="box is-post">
						<p><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d19863.831679204024!2d-0.12612350000001993!3d51.51360199999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sgoogle+tube+maps+london!5e0!3m2!1sen!2suk!4v1402942530804" width="720" height="500" frameborder="0" style="border:0"></iframe></p>
                        
                        <h3>Address</h3><br />
                        <p>1 Example <br/>
W1 55 </p><br />
			
			<p>Tel: 207732432</p>										</article>
            
            <!--/ map -->

											</div>
										</div>
									</div>
																		<header class="major">
									</header>
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
										<li><a href="venues.html">Piccadilly</a></li>
										<li><a href="venues.html">Mayfair</a></li>
										<li><a href="venues.html">Strand</a></li>
										<li><a href="venues.html">Oxford Street</a></li>
										<li><a href="venues.html">Charing Cross</a></li>
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