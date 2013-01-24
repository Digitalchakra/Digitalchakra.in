<!DOCTYPE html>
<html>
<head>
	<meta name="keywords" content="web design, web development">
	<meta name="tags" content="web design, web development">
	<meta name="description" content="Business Technology Consulting, IT solutions and IT Services, Design & UI/UX Consulting, Cloud Computing and support services that deliver measurable business value. Transform your business, and make Operations efficient with innovative solutions from Digital Chakra">
	<title>Digital Chakra – Web Development, Design & Cloud Computing Solutions.</title>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css"/>
</head>
<body id="body">
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="js/jquery.touchslider.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/placeholder_fallback.js"></script>
	<link rel="stylesheet" href="css/jquery-ui.css" />
  	<script src="js/jquery-ui.js"></script>
  	<link rel="stylesheet" href="css/time.css" />
  	<script src="js/time.js"></script>
		<script>
			$(document).ready(function() {
				$(".touchslider").touchSlider({mouseTouch: true, autoplay: true});
				nice = $("html").niceScroll({touchbehavior:true, bouncescroll:true});
				//datetime
				$("#contact_time").datetimepicker({
				dateFormat: "yy-mm-dd",
			      timeFormat: "h:mm tt",
			      hour:'10',
			      minDate:0 
			    });
				//anchor likns move animation
				$('a[href^="#"]').bind('click.smoothscroll',function (e) {
				    e.preventDefault();
				    var target = this.hash;
				        $target = $(target);
				    $('html, body').stop().animate({
				        'scrollTop': $target.offset().top
				    }, 500, 'swing', function () {
				        window.location.hash = target;
				    });
				});
			});
		</script>
    <header id="topHeader">
		<div class="wrap">
			<div class="clsLogo">
				<h1><a href="#" title="DigitalChakra">Digital Chakra</a></h1>
			</div>
			<nav class="clsMainNav">
				<ul class="clsMainNavList">
					<li><a href="#body">The Big picture</a></li>
					<li><a href="#whatWeDo">What we do</a></li>
					<!-- <li><a href="#dcBlog">DC Blog</a></li> -->
					<li><a href="#contact">Contact Us</a></li>
				</ul>
			</nav>
		</div>
    </header>
    <div id="bodyContent" class="clsBodyContent">
		<!-- ===========================================Big picture =========================================================== -->
		<div id="bigPic" class="clsBigPic">
			<div class="wrap">
			
			<img src="images/dcLogoBig.jpg"/>
				<div class="clsBigPicContent">
					<h2 class="largeTitle">Hello World! We've just dropped anchor on earth.</h2>
					<h2 class="largeTitle2"></h2>
					</br>
					<p class="largeContent"> We provide IT services and solutions to a universal audience, </br> as highlighted below</p>
				</div>
				<div class="spaceShuttle">
					<img src="images/spaceShuttle.png" />
				</div>
			</div>	
		</div>
		<!-- ===========================================What we do =========================================================== -->
		<div id="whatWeDo">		
				
			<div class="touchslider">
				
				<div class="touchslider-viewport" style="width:985px;overflow:hidden;position:relative;height:600px;margin:0 auto; z-index:1;">
					<div>
						<div class="touchslider-item">
							<div id="carousel1">
								<h2 class="largeTitle3">Product Development</h2></br></br>
								<p class="contentText">We form a seamless extension of your team so that you are freed up to concentrate on the core activities of your business. We help you take your bright idea to success backed by strong development processes and best practices. Our services include:
									<ul style=" margin:16px;" class="contentText">
										<li>UI Design and Branding Services</li>
										<li>Product Development/Enchancement</li>
										<li>QA, Testing and Support</li>
									</ul></p>
							</div>
						</div>
						<div class="touchslider-item">
							<div id="carousel2">
								<h2 class="largeTitle3">Custom-built Web Applications</h2></br></br>
								<p class="contentText">We provide end-to-end development services from the initial use case analysis to post-implementation support. Industry standard best practices and latest technologies ensure high quality apps every time.Our customer-centric process ensures that you effectively plan, implement and maintain a solution that is in line with your business objectives.
 							<ul style=" margin:16px;" class="contentText">
										<li>Low Cost, High Quality, On Time</li>
										<li>Agile, Process Driven Approach</li>
										<li>Effective Collaboration and Communication</li>
										<li>Adaptable, Flexible Solutions</li>
									</ul></p>
							</div>
						</div>
						<div class="touchslider-item">
							<div id="carousel3">
								<h2 class="largeTitle3">SAAS - based Offerings</h2></br></br>
								<p class="contentText">Digital Chakra is helping businesses worldwide, big or small achieve their goals by fulfilling their online needs using open source technology stacks and industry best practices. </p>
							</div>
						</div>
						<div class="touchslider-item">
							<div id="carousel4">
								<h2 class="largeTitle3">Design Consultation & Offerings</h2></br></br>
								<p class="contentText">To us design is not just about “what it looks like”. It is also about what or rather how well it does the job. We take your idea and help you convert it into a compelling user experience with our creative team of designers and experienced team of UI/UX consultants and business analysts.
								<ul style=" margin:16px;" class="contentText">
										<li>Concept Development, Functional Spec & Analysis</li>
										<li>UX Focused High fidelity mock-ups</li>
										<li>Interactive Wireframe Prototyping</li>
										<li>Cross-Browser Testing, Responsive Design</li>
										<li>JS Framework Integration & SEO</li>
									</ul></p>
							</div>
						</div>
						<div class="touchslider-item">
							<div id="carousel5">
								<h2 class="largeTitle3">Online product consulting & development</h2></br></br>
								<p class="contentText">Digital Chakra is helping businesses worldwide, big or small achieve their goals by fulfilling their online needs using open source technology stacks and industry best practices. </p>
							</div>
						</div>
						<div class="touchslider-item">
							<div id="carousel6">
								<h2 class="largeTitle3">Cloud computing</h2>
								</br></br>
								<p class="contentText">Digital Chakra is helping businesses worldwide, big or small achieve their goals by fulfilling their online needs using open source technology stacks and industry best practices. </p>
							</div>
						</div>
					</div>
				</div>
				<div  class="prevNext" >
					
					<a class="touchslider-prev leftArrow">Prev</a>
					
					
					<a class="touchslider-next rightArrow">Next</a>
					
					
				</div>
				<div style="display:none">
						
						<a class="touchslider-nav-item touchslider-nav-item-current">1</a>
						<a class="touchslider-nav-item">2</a>
						<a class="touchslider-nav-item">3</a>
						<a class="touchslider-nav-item">4</a>
						<a class="touchslider-nav-item">5</a>
						<a class="touchslider-nav-item">6</a>
						
				</div>
					
			</div>
				
		</div>	
		
								
		
		<!-- ===========================================DC blog =========================================================== -->
		<!-- <div id="dcBlog">
			<div class="wrap">
			
			<div class="dcBlogSection">
				<ul class="twitterFeed">
					<li>
					<div class="listBlock">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a quam ipsum. In ut dapibus quam. Praesent eu ipsum vitae est sagittis facilisis vitae id odio.</p>
						<p class="listContent2">2 hours ago</p>
					</div>
					</li>
					<li>
					<div class="listBlock">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a quam ipsum. In ut dapibus quam. Praesent eu ipsum vitae est sagittisfacilisis vitae id odio.</p>
						<p class="listContent2">2 hours ago</p>
					</div>
					</li>
					
					<li>
					<div class="listBlock">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a  quam ipsum. In ut dapibus quam. Praesent eu ipsum vitae est sagittis facilisis vitae id odio.</p>
						<p class="listContent2">2 hours ago</p>
					</div>
					</li>
					
					<li>
					<div class="listBlock">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a  quam ipsum. In ut dapibus quam. Praesent eu ipsum vitae est sagittis facilisis vitae id odio.</p>
						<p class="listContent2">2 hours ago</p>
					</div>
					</li>
				</ul>
				<div class="blogTitle1">
					<p>follow us on twitter</p>
				</div>
			</div>
			<div class="dcBlogSection">
				<ul class="twitterFeed">
					<li>
					<div class="listBlock">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a quam ipsum. In ut dapibus quam. Praesent eu ipsum vitae est sagittis facilisis vitae id odio.</p>
						<p class="listContent2">2 hours ago</p>
					</div>
					</li>
					<li>
					<div class="listBlock">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a quam ipsum. In ut dapibus quam. Praesent eu ipsum vitae est sagittisfacilisis vitae id odio.</p>
						<p class="listContent2">2 hours ago</p>
					</div>
					</li>
					
					<li>
					<div class="listBlock">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a  quam ipsum. In ut dapibus quam. Praesent eu ipsum vitae est sagittis facilisis vitae id odio.</p>
						<p class="listContent2">2 hours ago</p>
					</div>
					</li>
					
					<li>
					<div class="listBlock">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam a  quam ipsum. In ut dapibus quam. Praesent eu ipsum vitae est sagittis facilisis vitae id odio.</p>
						<p class="listContent2">2 hours ago</p>
					</div>
					</li>
				</ul>
				<div class="blogTitle2">
					<p>Blog</p>
				</div>
			</div>
			</div>
		</div> -->
		<!-- ===========================================Contact us =========================================================== -->
		<div id="contact">
			<div class="wrap">
				<div class="contactSection">
					<div class="contactSpaceShuttle">
						<img src="images/spaceShuttle_contacts.png" />
					</div>
						<ul class="contactList" style="text-align:left;">
							<!--<li ><a href="#" class="contactIn">linked in id</a></li>-->
							<li ><a href="https://www.facebook.com/digitalchakra" target="_blank" alt="Digital Chakra on Facebook" class="contactFb" >facebook page</a></li>
							<li ><a href="http://twitter.com/digitalchakra" target="_blank" class="contactTr" alt="Digital Chakra on Twitter" >twitter page</a></li>
							<li ><a href="mailto:queries@digitalchakra.in" class="contactEmail" alt="Contact Digital Chakra">email id</a></li>
							<li><p class ="contactHome"><b>Address:</b> Shree Park 3rd Floor West Wing</br> # 578 Anna Salai Chennai-600 006</br>
Ph : +9144 2433-0401  +9144 2433-0402<a href="http://goo.gl/maps/y8n25" target="_blank">show on map</a></p></li>
						</ul>
				</div>
				<div class="contactSection2">
				<form id="contactForm" method="post" action="">
					 <ul id="status" class="">  
						<li id="info">There were some problems with your form submission:</li>  
					</ul>  
						
					<!-- <label for="name"></label> -->
					<input type="text" name="name" id= "contact_name" placeholder="Full Name">
					 
					<!-- <label for="email">E-mail</label> -->
					<input type="email" name="email" id= "contact_email" placeholder="name@domain.com">
					 
					<!-- <label for="skype">Skype id</label> -->
					<input type="text" name="skype" id= "contact_skype" placeholder="Skype ID and/or Phone Number">
					
					<!-- <label for="phone">Phone</label>
					<input type="tel" name="phone" placeholder="ex. (555) 555-5555"> -->
					 
					<!-- <label for="location">Location</label> -->
					<input type="text" name="location" id= "contact_loc" placeholder="Your location">
					

					<input type="text" name="time" id="contact_time" placeholder="When can we call you?">

					<!-- <label for="message">What can we help you with</label> -->	
					<textarea name="message" id= "contact_mesg" placeholder="What can we help you with?"  ></textarea>  
					 
					<input id="submit" type="submit" name="submit" value="Submit" />
					

				</form>

				 
				</div>
			</div>
		</div>
    </div>
   
    <footer>
		<section>
        <p style="margin-bottom:20px;">© copyright 2013 | www.digitalchakra.in </p>
		
		</section>	
    </footer>
</body>
</html>