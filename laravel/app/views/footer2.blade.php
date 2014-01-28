<div id="footer">
      <div class="container bg_000">
        
<!--         <div class="custom-text-muted">
        <h1 class="fleft_p">
          <a href="#"><img src="img/small_logo.png" alt="digital chakra" title="Digital Chakra" /></a>
        </h1>
        <p class="fleft_p  text-alin-left"> &copy; Copyright 2013   All Rights Reserved</p>
        </div> -->
        <div class="row">
          <div class="col-md-12">
            <h1 @if (Request::is('/')) @endif class="f16">
              <a href={{url("/")}}><img class="fleft_p m_top6" src="img/small_logo.png" alt="digital chakra" title="Digital Chakra" /></a>&nbsp; &copy; Copyright 2013   All Rights Reserved
            </h1>
            <!-- <p class="text-alin-left"> </p>
 -->          </div>
        </div>

      </div>
    </div>

        <!-- ----------------------- Prallax JS --------------------- -->
		<script src="{{ URL::to('js/modernizr.custom.37797.js') }}"></script> 
		<script src="{{ URL::to('js/parallax.js') }}"></script>
		<script src="{{ URL::to('js/ourprocess.js') }}"></script>
    	<script src="{{ URL::to('js/bootstrap.min.js') }}"></script>
      <!-- facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=278659298917414";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
