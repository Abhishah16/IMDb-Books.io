<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
	
	
	<!DOCTYPE html>

	<!-- <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["email"]); ?></b>. Welcome to our site.</h1>
    </div> -->
    <!-- <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p> -->

	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>IMDb - Book</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="#home">Home</a></li>
				          <li><a href="#about">About</a></li>
				          
				          <li><a href="#price">Genres</a></li>
				          <li><a href="#course">Top Trends</a></li>
				          <li><a href="logout.php">Logout</a></li>
				          <li class="menu-has-children"><a href="#">More</a>
				            <ul>
				              <li><a href="generic.html">Terms and Conditions</a></li>
				              
				            </ul>
				          </li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->


			<!-- start banner Area -->
			<section class="banner-area" id="home">	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-7">
							<h5 class="text-white text-uppercase">Only for Reader</h5>
							<h1 class="text-uppercase">
								IMDb - Books				
							</h1>
							<p class="text-white pt-20 pb-20">
								A room without books <br> is like a body without soul
							</p>
							
						</div>
						<div class="col-lg-5 banner-right">
							<img class="img-fluid" src="img/header-img.png" alt="">
						</div>												
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start about Area -->
			<section class="section-gap info-area" id="about">
				<div class="container">				
					<div class="single-info row mt-40 align-items-center">
						<div class="col-lg-6 col-md-12 text-center no-padding info-left">
							<!--<div class="info-thumb">
								<img src="img/about-img.jpg" class="img-fluid info-img" alt="">
							</div>-->
						</div>
						
							<div class="info-content">
								<h2 class="pb-30">IMDb - Books</h2>
								<p>
									IMDb-books is a native web application for all the readers. It is easy and affordable where the users can have a brief description about the books and can give review the books. 								
								</p>
								<br>
								<p>
									It will give a brief review about the Comics/Novels/Documentary/fiction. Users can get their similar genre books.									
								</p>
								<br>
								
								</div>
						
					</div>
				</div>
			</section>
			<!-- End about Area -->
		
			
			
			<!-- Start price Area -->
			<section class="price-area section-gap" id="price">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Top Genres</h1>
								
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="col-lg-4">
							<div class="single-price no-padding">
							<h2>Series</h2>
								<p>A book series is a sequence of books having certain characteristics in common that are formally identified together as a group. Book series can be organized in different ways, such as written by the same author, or marketed as a group by their publisher.</p>
								
								
									<a href="series.html" class="primary-btn header-btn">Read More</a>
								
							</div>
						</div>
                        <div class="col-lg-4">
							<div class="single-price no-padding">
								<h2>Drama</h2>
								<p>Drama is a composition in verse or prose presenting a story in pantomime or dialogue. It contains conflict of characters, particularly the ones who perform in front of audience on the stage.
								
								<br>
								<br>
								
								</p>
									<a href="drama.html" class="primary-btn header-btn">Read More</a>
								
							</div>
						</div>
                        <div class="col-lg-4">
							<div class="single-price no-padding">
								<h2>Comics</h2>
								<p>A comic book or comicbook, also called comic magazine or simply comic, is a publication that consists of comics art in the form of sequential juxtaposed panels that represent individual scenes.<br><br></p>
								
									<a href="comics.html" class="primary-btn header-btn">Read More</a>
								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-price no-padding">
                                <h2>Biography</h2>
                                <p>A biography is a description of a real person's life, including factual details as well as stories from the person's life. Biographies usually include information about the subject's personality and motivations, and other kinds of intimate details excluded in a general overview or profile of a person's life</p>
								
									<a href="biography.html" class="primary-btn header-btn">Read More</a>
								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-price no-padding">
                                <h2>Thriller</h2>
								<p>Thriller is a genre of fiction, having numerous, often overlapping subgenres. Thrillers are characterized and defined by the moods they elicit, giving viewers heightened feelings of suspense, excitement, surprise, anticipation and anxiety.<br><br></p>
									<a href="thriller.html" class="primary-btn header-btn">Read More</a>
								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-price no-padding">
								<h2>Romance</h2>
								<p>A romance is a narrative genre in literature that involves a mysterious, adventurous, or spiritual story line where the focus is on a quest that involves bravery and strong values, not always a love interest.<br><br><br></p>
									<a href="romance.html" class="primary-btn header-btn">Read More</a>
								
							</div>
						</div>
                        <div class="col-lg-4">
							<div class="single-price no-padding">
								<h2>Horror</h2>
								<p>Horror is a genre of speculative fiction which is intended to frighten, scare, disgust, or startle its readers by inducing feelings of horror and terror. Horror is frequently supernatural, though it might be also non-supernatural.<br><br></p>
									<a href="horror.html" class="primary-btn header-btn">Read More</a>
								
							</div>
                        </div>
                        <div class="col-lg-4">
							<div class="single-price no-padding">
								<h2>Mystery</h2>
								<p>Mystery fiction is a genre of fiction usually involving a mysterious death or a crime to be solved. Often with a closed circle of suspects, each suspect is usually provided with a credible motive and a reasonable opportunity for committing the crime.</p>
									<a href="mystery.html" class="primary-btn header-btn">Read More</a>
								
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-price no-padding">
								<h2>Religion, Spirituality, and New Age</h2>
								<p>A scripture is a subset of religious texts considered to "especially authoritative", revered and "holy writ", "sacred, canonical", or of "supreme authority, special status" to a religious community.<br></p>
									<a href="religion.html" class="primary-btn header-btn">Read More</a>
								
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End price Area -->
			
			<!-- Start course Area -->
			<section class="course-area section-gap" id="course">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-9">
							<div class="title text-center">
								<h1 class="mb-10">Top Trending Books</h1>
								
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="active-course-carusel">
							<div class="single-course item">
								<img class="img-fluid" src="img/c1.jpg" alt="">
								
								<div class="details">
									<a href="#"><h4>Salt Slow, by Julia Armfield </h4></a>	
									<p>
										In these surreal, muscular stories, all of them unfettered from the demands of realism, Armfield considers womanhood and its visceral discontents. Fangirls turn rabid; puberty produces a monstrous transformation; a post-apocalyptic pregnancy isn’t what it seems. 
									</p>
								</div>
							</div>
							<div class="single-course item">
								<img class="img-fluid" src="img/c4.jpg" alt="">
								
								<div class="details">
									<a href="#"><h4>The Travelers: A Novel, by Regina Porter</h4></a>	
									<p>
										In this magic trick of a debut, Porter binds together the intersecting journeys of two families—one black, one white—across time, space, and the injustices of history. Sprawling, imaginative, and generous of spirit, The Travelers examines how we change and are changed by others in ways both big and small.
									</p>
								</div>
							</div>
							<div class="single-course item">
								<img class="img-fluid" src="img/c2.jpg" alt="">
								
								<div class="details">
									<a href="#"><h4>Long Live the Tribe of Fatherless Girls, by T Kira Madden</h4></a>	
									<p>
									In this haunting debut memoir, Madden excavates her coming of age as a queer, biracial teenager in an affluent Florida community wracked by addiction and abuse. Harrowing and charged with sharp edges, yet somehow life-affirming at the same time, Madden’s story is one of toxic privilege, destructive families, and life-saving friends.	
									</p>
								</div>
							</div>
							<div class="single-course item">
								<img class="img-fluid" src="img/c5.jpg" alt="">
								
								<div class="details">
									<a href="#"><h4>She Said: Breaking the Sexual Harassment Story That Helped Ignite a Movement, by Jodi Kantor and Megan Twohey</h4></a>	
									<p>
									In October 2017, Kantor and Twohey helped to ignite a global movement against sexual harassment and abuse through their Pulitzer Prize-winning reporting on Harvey Weinstein’s sexual misconduct. In She Said, they pull back the curtain on months of gumshoe reporting, while also investigating the structural tools of complicity that inoculate abusers from consequences.	
									</p>
								</div>
							</div>
							<div class="single-course item">
								<img class="img-fluid" src="img/c3.jpg" alt="">
								
								<div class="details">
									<a href="#"><h4>The Other Americans, by Laila Lalami</h4></a>	
									<p>
										When a Moroccan immigrant is killed in a California intersection, consequences spiral outward to bring together a group of strangers bound across their differences by the crime.
									</p>
								</div>
							</div>								
						</div>											
					</div>
				</div>	
			</section>
			<!-- End course Area -->
			
			<!-- Start call-to-action Area -->
			<!--<section class="call-to-action-area section-gap">
				<div class="container">
					<div class="row justify-content-center top">
						<div class="col-lg-12">
							<h1 class="text-white text-center">Download Our App for all Platforms</h1>
							<p class="text-white text-center mt-30">
								It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so far as its popularity and technological advancement are concerned.
							</p>							
						</div>
					</div>
					<div class="row justify-content-center d-flex">	
						<div class="download-button d-flex flex-row justify-content-center mt-30">		
							<div class="buttons flex-row d-flex">
								<i class="fa fa-apple" aria-hidden="true"></i>
								<div class="desc">
									<a href="#">
										<p>
											<span>Available</span> <br>
											on App Store
										</p>
									</a>
								</div>
							</div>
							<div class="buttons flex-row d-flex">
								<i class="fa fa-android" aria-hidden="true"></i>
								<div class="desc">
									<a href="#">
										<p>
											<span>Available</span> <br>
											on Play Store
										</p>
									</a>
								</div>
							</div>
						</div>						
					</div>
				</div>	
			</section>
		 End call-to-action Area -->

			<!-- Start testomial Area -->
			<!--<section class="testomial-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Best Rated Books in 2019</h1>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="active-tstimonial-carusel">
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t1.png" alt="">
								<p class="desc">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
								</p>
								<h4>Mark Alviro Wiens</h4>
								<p>
									CEO at Google
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t2.png" alt="">
								<p class="desc">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
								</p>
								<h4>Mark Alviro Wiens</h4>
								<p>
									CEO at Google
								</p>
							</div>
							<div class="single-testimonial item">
								<img class="mx-auto" src="img/t3.png" alt="">
								<p class="desc">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
								</p>
								<h4>Mark Alviro Wiens</h4>
								<p>
									CEO at Google
								</p>
							</div>	
							
							
							
																				
						</div>
					</div>
				</div>	
			</section>
			<!-- End testomial Area -->
			

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
								IMDb-books is a native web application for all the readers. It is easy and affordable where the users can have a brief description about the books and can give review the books.	
								</p>
								<p class="footer-text">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a target="_blank">IMDb - Books</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</p>								
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control text-white" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email" >
			                            	<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>			
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>



