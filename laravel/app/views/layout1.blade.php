<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Digitalchakra</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link rel="icon" type="image/png" href="img/favicon.png">
		
		{{ HTML::style('css/style.css') }}
		{{ HTML::style('css/common.css') }}
		{{ HTML::style('css/media.css') }}
		{{ HTML::style('css/bootstrap.css') }}
	
		
	</head>
	<body>
		<!-- -----------------------  Wrap all page  ------------------ -->
		<div id="wrap">
		<!-- ----------------------- HEADER start --------------------- -->		
			<div class="header-container">
				<!-- Static navbar -->
			    <div class="navbar navbar-custom  navbar-static-top" role="navigation">
			      <div class="container">
			        <div class="navbar-header">
			          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			          </button>
			        <div class="align_center"> 
				        <div class="navbar-brand logo_bg">
							<h1><a class="logo" href="#" target="_blank">Digital Chakra</a></h1>
						</div>
					</div>
			        </div>
			        <div class="navbar-collapse collapse">
			          <ul class="nav navbar-nav">
				            <li class="active"><a href="/">BIG PICTURE</a></li>
				            <li><a href="/what-we-do">WHAT WE DO</a></li>
				            <li><a href="/our-process">OUR PROCESS</a></li>
				            <li><a href="/our-projects">OUR PROJECTS</a></li>
				            <li><a href="/hosting">HOSTING</a></li>
				            <li><a href="/about-us">ABOUT US</a></li>
			          </ul>
			        </div><!--/.nav-collapse -->
			      </div>
			    </div>



					<div class="social_media_container padding_disable">
						<div class="row padding_disable">
							<div class="">
								<ul class="social_media_header">
									<li><a class="top_fb" href="#">facebook</a></li>
									<li><a class="top_fb" href="#">facebook</a></li>
								</ul>
								<ul class="social_media_header">
									<li><a class="top_twit" href="#">twitter</a></li>
									<li><a class="top_twit" href="#">twitter</a></li>
								</ul>
								<ul class="social_media_header">	
									<li><a class="top_google" href="#">google+</a></li>
									<li><a class="top_google" href="#">google+</a></li>
								</ul>
							</div>
						</div>
					</div>
			</div>
		
		<!-- ----------------------- HEADER End ----------------------- -->

		<!-- ----------------------- CONTENT --------------------- -->
		
		@yield('content')


		<!-- ----------------------- FOOTER start --------------------- -->
		</div>	
		<div class="clearall"></div>
		<div id="footer_id">		
	        <footer class="container">
	        	<section class="row">
	        		<article class="col-md-2">
						<figure class="align_center">
							<h1><a href="#"><img src="img/small_logo.png" alt="digital chakra" title="Digital Chakra" /></a></h1>
							<p>&copy; Copyright 2013 <br>All Rights Reserved</p>
						</figure>
	        			
	        		</article>
	        		<article class="col-md-4">
	        			<h2 class="blue">QUICK LINKS</h2>
	        			
							<div class="row">
								<div class="col-md-6">
									<ul class="footer_links">
										<li><a href="#">Big Picture</a></li>
										<li><a href="#">What we do</a></li>
										<li><a href="#">Hosting</a></li>
									</ul>
								</div>
								<div class="col-md-6">
									<ul class="footer_links">
										<li><a href="#">Our Process</a></li>
										<li><a href="#">Our Projects</a></li>
										<li><a href="#">About Us</a></li>
									</ul>								
								</div>
							</div>
	        			
	        		</article>
	        		<article class="col-md-3">
	        			<h2 class="blue">ADDRESS</h2>
	        			<address class="office_address">
	        				<p># 578, Shree park, Sundar Road, Teynampet, Chennai - 600006</p>
	        				<ul>
								<li><a class="addr_font a_hover" href="mailto:querries@digitalchakra.in"><span class="mail-id"></span>querries@digitalchakra.in</a></li>
								<li class="addr_font"><span class="phone"></span>+9144 2433 0401</li>
								<li class="addr_font"><span class="phone"></span>+9144 24330402</li>
	        				</ul>

	        			</address>
	        		</article>
	        		<article class="col-md-3">
	        			<h2 class="blue">FIND US ON</h2>
	        			<ul class="social_media">
							<li><a class="google" href="#">google+</a></li>
							<li><a class="facebook" href="#">twitter</a></li>
							<li><a class="linkedin" href="#">pintreast</a></li>
							<li><a class="twitter" href="#">facebook</a></li>
							<li><a class="pintreast" href="#">linkedin</a></li>
		        		</ul>
	        		</article>
	        	</section>
	        </footer>	      
	    </div>
	    
		<!-- ----------------------- FOOTER End ----------------------- -->


		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>
	</body>
</html>
