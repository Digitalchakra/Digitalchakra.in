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
		<link rel="stylesheet" href="{{ URL::to('css/style.css') }}" />
		<link rel="stylesheet" href="{{ URL::to('css/common.css') }}" />
		<link rel="stylesheet" href="{{ URL::to('css/media.css') }}" />
		<link rel="stylesheet" href="{{ URL::to('css/bootstrap.css') }}" />
		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" charset="utf-8" async defer>
			baseurl= "{{ url()}}";
		</script>
	
		
	</head>
	<body>
		<!-- -----------------------  Wrap all page  ------------------ -->
		<div id="wrap" class="body_bg">
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
									<div class="fb-like" data-href="https://www.facebook.com/digitalchakra" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
								</ul>
								<ul class="social_media_header">
									<a href="https://twitter.com/Digitalchakra" class="twitter-follow-button" data-show-count="false">Follow @Digitalchakra</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
								</ul>
								<ul class="social_media_header">	
									<div class="g-follow" data-annotation="bubble" data-height="24" data-href="//plus.google.com/112207697542385472127" data-rel="publisher"></div>
								</ul>
							</div>
						</div>
					</div>
			</div>
		
		<!-- ----------------------- HEADER End ----------------------- -->

		<!-- ----------------------- CONTENT --------------------- -->
		
		@yield('content')

@include('footer1')
