<!DOCTYPE html>

<html lang="en">
	
	<head>
		<title>Digital Chakra</title>

		<meta charset="utf-8" />
		<meta name="description" content="" />
		<link rel="icon" type="image/png" href="img/favicon.png">
		
		<!-- ----------------------- Prallax CSS --------------------- -->
		<link rel="stylesheet" media="all" href="css/parallax.css" />
		
		<!-- ----------------------- Bootstrap CSS --------------------- -->
		<link rel="stylesheet" href="css/bootstrap.css" />

		

		

	</head>

	<body>
	<!-- ----------------------- Wrap all page  ---------------------------- -->
    <div id="wrap">
		<div id="wrapper">			
			
		<!-- ----------------------- HEADER Menu Start --------------------- -->	
		<header id="branding">
			<div class="header-container-single">
				<div class="">
					<div class="row">
					    <div class="navbar-custom navbar navbar-static-top" role="navigation">
					      	<div class="container">
						        <div class="navbar-header">
						            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							            <span class="sr-only">Toggle navigation</span>
							            <span class="icon-bar"></span>
							            <span class="icon-bar"></span>
							            <span class="icon-bar"></span>
						            </button>
						            <div class="navbar-brand small_logo_bg">
										<h1 class="sm_h1"><a class="small_logo" href="#">digital chakra</a></h1>
									</div>					          
						        </div>
						        <div class="navbar-collapse collapse">
						            <ul class="nav navbar-nav">
							            <li class="active"><a href={{url("/")}}>BIG PICTURE</a></li>
										<li><a href={{url("what-we-do")}}>WHAT WE DO</a></li>
										<li><a href={{url("our-process")}}>OUR PROCESS</a></li>
										<li><a href={{url("our-projects")}}>OUR PROJECTS</a></li>
										<li><a href={{url("hosting")}}>HOSTING</a></li>
										<li><a href={{url("about-us")}}>ABOUT US</a></li>
						            </ul>
						        </div>
					     	</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!-- ----------------------- HEADER End ----------------------- -->	

		
		@yield('content')

@include('footer2')
