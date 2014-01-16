<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Digitalchakra</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link rel="icon" type="image/png" href="img/favicon.png">
		
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
							<h1><a class="logo" href={{url("/")}} target="_blank">Digital Chakra</a></h1>
						</div>
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

@include('footer1')
