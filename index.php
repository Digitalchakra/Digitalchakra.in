<!DOCTYPE html>
<html>
<head>
	<meta name="keywords" content="web design, web development">
	<meta name="tags" content="web design, web development">
	<title>DIGITAL CHAKRA - IT CONSULTING | WEB DESIGN & DEVELOPMENT</title>
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
				$('#submit').click(function()
					{
						$('#info').html('');
						if($('#contact_name').val().length<=0)
						{
							$('#contact_name').addClass('error_class');
							$('#contact_name').focus();
							$('#info').html('Please fill mandatory fields.');
							return false;
						}
						else
						{
							$('#contact_name').removeClass('error_class');
						}
						if($('#contact_skype').val().length<=0)
						{
							$('#contact_skype').addClass('error_class');
							$('#contact_skype').focus();
							$('#info').html('Please fill mandatory fields.');
							return false;
						}
						else
						{
							$('#contact_skype').removeClass('error_class');
						}
						if($('#contact_email').val().length>0)
						{
							var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    						if(!pattern.test($('#contact_email').val()))
    						{
    							$('#contact_email').addClass('error_class');
								$('#contact_email').focus();
								$('#info').html('Please enter a valid email.');
								return false;
    						}
    						else
							{
								$('#contact_email').removeClass('error_class');
							}
						}

						var postdata=$("#contactForm").serialize();
						//alert(data);
						$.ajax(
							{
								url:'contact.php',
								data:postdata,
								dataType:'JSON',
								method:'POST',
								success:function(output)
								{
									if(output.success==1)
									{
										$('#info').html('Thank you message here.');
									}
									else
									{
										$('#info').html('Please fill mandatory fields.');
									}
								},
								error:function()
								{
									$('#info').html('There were some problems with your form submission.');
								}
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
					<p class="largeContent"> We provide IT services and solutions to a universal audience, </br> some of which can be viewed here</p>
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
								<h2 class="largeTitle3">Product development</h2></br></br>
								<p class="contentText">Digital Chakra is helping businesses worldwide, big or small achieve their goals by fulfilling their online needs using open source technology stacks and industry best practices. </p>
							</div>
						</div>
						<div class="touchslider-item">
							<div id="carousel2">
								<h2 class="largeTitle3">Custom build web applications</h2></br></br>
								<p class="contentText">Digital Chakra is helping businesses worldwide, big or small achieve their goals by fulfilling their online needs using open source technology stacks and industry best practices. </p>
							</div>
						</div>
						<div class="touchslider-item">
							<div id="carousel3">
								<h2 class="largeTitle3">SAAS based offerings</h2></br></br>
								<p class="contentText">Digital Chakra is helping businesses worldwide, big or small achieve their goals by fulfilling their online needs using open source technology stacks and industry best practices. </p>
							</div>
						</div>
						<div class="touchslider-item">
							<div id="carousel4">
								<h2 class="largeTitle3">Design consulting & offerings</h2></br></br>
								<p class="contentText">Digital Chakra is helping businesses worldwide, big or small achieve their goals by fulfilling their online needs using open source technology stacks and industry best practices. </p>
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
						<ul class="contactList">
							<!--<li ><a href="#" class="contactIn">linked in id</a></li>-->
							<li ><a href="https://www.facebook.com/digitalchakra" target="_blank" class="contactFb">facebook page</a></li>
							<li ><a href="http://twitter.com/digitalchakra" target="_blank" class="contactTr">twitter page</a></li>
							<li ><a href="mailto:queries@digitalchakra.in" class="contactEmail">email id</a></li>
							<li ><a href="#" class="contactHome">Address</a></li>
						</ul>
				</div>
				<div class="contactSection2">
				<form id="contactForm" method="post" action="">
					 <div id="status" class="">  
						<span id="info"></span>  
					</div>  
						
					<!-- <label for="name"></label> -->
					<input type="text" name="name" id= "contact_name" placeholder="Full Name">*
					 
					<!-- <label for="email">E-mail</label> -->
					<input type="email" name="email" id= "contact_email" placeholder="name@domain.com">
					 
					<!-- <label for="skype">Skype id</label> -->
					<input type="text" name="skype" id= "contact_skype" placeholder="Skype ID and/or Phone Number">*
					
					<!-- <label for="phone">Phone</label>
					<input type="tel" name="phone" placeholder="ex. (555) 555-5555"> -->
					 
					<!-- <label for="location">Location</label> -->
					<input type="text" name="location" id= "contact_loc" placeholder="Your location">
					

					<input type="text" name="time" id="contact_time" placeholder="When can we call you?">

					<!-- <label for="message">What can we help you with</label> -->	
					<textarea name="message" id= "contact_mesg" placeholder="What can we help you with?"  ></textarea>  
					 
					<input id="submit" type="button" name="submit" value="Submit" />
					

				</form>

				 
				</div>
			</div>
		</div>
    </div>
   
    <footer>
		<section>
        <p>© copyright 2013 | www.digitalchakra.in </p>
		</br>
		</section>	
    </footer>
</body>
</html>