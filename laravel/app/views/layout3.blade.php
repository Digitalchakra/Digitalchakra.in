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
		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

		

		

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
							<div class="col-md-1">
							</div>
						        <div class="navbar-header">
						            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							            <span class="sr-only">Toggle navigation</span>
							            <span class="icon-bar"></span>
							            <span class="icon-bar"></span>
							            <span class="icon-bar"></span>
						            </button>
						            <div class="navbar-brand small_logo_bg">
										<h1 class="sm_h1"><a class="small_logo" href={{url("/")}}>digital chakra</a></h1>
									</div>					          
						        </div>
						        <div class="navbar-collapse collapse">
						            <ul class="nav navbar-nav">
							            <li @if (Request::is('/')) class="active" @endif ><a href={{url("/")}}>BIG PICTURE</a></li>
										<li @if (Request::is('what-we-do')) class="active" @endif><a href={{url("what-we-do")}}>WHAT WE DO</a></li>
										<li @if (Request::is('our-process')) class="active" @endif><a href={{url("our-process")}}>OUR PROCESS</a></li>
										<li @if (Request::is('our-projects')) class="active" @endif><a href={{url("our-projects")}}>OUR PROJECTS</a></li>
										<li @if (Request::is('hosting')) class="active" @endif ><a href={{url("hosting")}}>HOSTING</a></li>
										<li @if (Request::is('about-us')) class="active" @endif><a href={{url("about-us")}}>ABOUT US</a></li>
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
