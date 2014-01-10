<!DOCTYPE html>

<html lang="en">
	
	<head>
		<title>Digital Chakra</title>

		<meta charset="utf-8" />
		<meta name="description" content="" />
		<link rel="icon" type="image/png" href="img/favicon.png">
				
		<!-- ----------------------- Common CSS --------------------- -->
		<!--{{ HTML::style('css/style.css') }}
		{{ HTML::style('css/common.css') }}
		{{ HTML::style('css/media.css') }}
		{{ HTML::style('css/bootstrap.css') }}-->
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/common.css" />
		<link rel="stylesheet" href="css/media.css" />
		<link rel="stylesheet" href="css/bootstrap.css" />

	</head>

	<body>
		<!-- ----------------------- Wrap all page -------------------- -->
	    <div id="wrap">	    
	    <!-- ----------------------- HEADER Menu Start --------------------- -->	
			<header>
				<div class="header-container-single">
				    <div class="navbar-custom-project-page navbar navbar-static-top" role="navigation">
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
			</header>

		<!-- ----------------------- HEADER End --------------------------- -->	

		<!-- ----------------------- CONTENT --------------------- -->
		
		@yield('content')

@include('footer1')
