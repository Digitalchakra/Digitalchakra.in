		<!-- ----------------------- FOOTER start --------------------- -->
		</div>	
		<div class="clearall"></div>
		<div id="footer_id">		
	        <footer class="container">
	        	<section class="row">
	        		<article class="col-md-2">
						<figure class="align_center">
							<h1 @if (Request::is('/')) @endif><a href={{url("/")}}><img src="img/small_logo.png" alt="digital chakra" title="Digital Chakra" /></a></h1>
							<p>&copy; Copyright 2014 <br>All Rights Reserved</p>
						</figure>
	        			
	        		</article>
	        		<article class="col-md-4">
	        			<h2 class="blue">QUICK LINKS</h2>
	        			
							<div class="row">
								<div class="col-md-6">
									<ul class="footer_links font_HelveNue">
										<li @if (Request::is('/')) @endif><a href={{url("/")}}>Big Picture</a></li>
										<li @if (Request::is('what-we-do')) @endif><a href={{url("what-we-do")}}>What we do</a></li>
										<li @if (Request::is('about-us')) @endif><a href={{url("about-us")}}>About Us</a></li>
										<!-- <li @if (Request::is('hosting')) @endif><a href={{url("hosting")}}>Hosting</a></li> -->
									</ul>
								</div>
								<div class="col-md-6">
									<ul class="footer_links font_HelveNue">
										<li @if (Request::is('our-process')) @endif><a href={{url("our-process")}}>Our Process</a></li>
										<li @if (Request::is('our-projects')) @endif><a href={{url("our-projects")}}>Our Projects</a></li>
										
									</ul>								
								</div>
							</div>
	        			
	        		</article>
	        		<article class="col-md-3">
	        			<h2 class="blue">ADDRESS</h2>
	        			<address class="office_address font_HelveNue">
	        				<p># 578, Shree park, Sundar Road, Teynampet, Chennai - 600006</p>
	        				<ul>
								<li><a class="addr_font a_hover" href="mailto:queries@digitalchakra.in"><span class="mail-id"></span>queries@digitalchakra.in</a></li>
								<li class="addr_font"><span class="phone"></span>+9144 2433 0401</li>
								<li class="addr_font"><span class="phone"></span>+9144 24330402</li>
	        				</ul>

	        			</address>
	        		</article>
	        		<article class="col-md-3">
	        			<h2 class="blue">FIND US ON</h2>
	        			<ul class="social_media">
							<li><a class="google" href="https://plus.google.com/u/0/+DigitalchakraIn/posts" target="_blank">google+</a></li>
							<li><a class="facebook" href="https://www.facebook.com/digitalchakra" target="_blank">facebook</a></li>
							<li><a class="linkedin" href="http://www.linkedin.com/company/digitalchakra" target="_blank">linkedin</a></li>
							<li><a class="twitter" href="http://twitter.com/digitalchakra" target="_blank">twitter</a></li>
							<!-- <li><a class="pintreast" href="#" target="_blank">behance</a></li> -->
		        		</ul>
	        		</article>
	        	</section>
	        </footer>	      
	    </div>
	    
		<!-- ----------------------- FOOTER End ----------------------- -->


		
    	<script src="{{ URL::to('js/bootstrap.min.js') }} "></script>
    	<!-- facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=278659298917414";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>


<!-- google + -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<script src="{{ URL::to('js/GA.js') }}"></script>
	</body>
</html>