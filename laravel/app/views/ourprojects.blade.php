@extends('layout2')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/fancybox/jquery.fancybox.css') }}" media="screen" />
<!-- ----------------------- PROJECTS Start ----------------------- -->	
			<!-- fancybox start ----- Ref: http://fancyapps.com/fancybox/ -->
<!-- 			<div class="light_box_container">
				<div class="container">
					<div class="close_btn">
					</div>
					<div class="row padding_top padding_btm">
						<div class="col-md-12">
							<h1 class="leftf colorfff font_HelveNue">EZCV</h1>
							<a class="leftf lbox_liks blue font_HelveNue" href="#">Goto Website</a>
						</div>
						<div class="clearall">		
						</div>
						<div class="col-md-8 lbox_img_container">
							<img src="img/light-box-images/EZCV1.png" alt="ezcv" title="EZCV">
						</div>
						<div class="col-md-4">
							<h3 class="colorfff font_HelveNue mtop_0">Sub-Headding</h3>
							<p class="colorfff font_HelveNue font15">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eros ligula, gravida vitae lacinia vitae, scelerisque et erat. Donec nulla odio, condimentum quis facilisis id, dignissim vel tortor. Duis vitae dolor vitae justo ultricies laoreet eget vel turpis. Etiam sodales faucibus convallis. Fusce porta dolor a mollis euismod. 
							</p>
							<p class="colorfff font_HelveNue font15">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eros ligula, gravida vitae lacinia vitae, scelerisque et erat. Donec nulla odio, condimentum quis facilisis id, dignissim vel tortor. Duis vitae dolor vitae justo ultricies laoreet eget vel turpis. Etiam sodales faucibus convallis. Fusce porta dolor a mollis euismod. 
							</p>
						</div>
					</div>
				</div>
			</div> -->
			<!-- fancybox end -->
			<div class="padding_disable">
				<div class="row padding_disable">
					<div class="col-md-4 padding_disable">
						 <a href="#">
						 	<img class="pro_img border_top  border_btm border_rit" href="{{ URL::to('about-us')}}" src="img/ezcv-project-page.jpg" onmouseover="this.src='img/ezcv-project-page-hover.jpg'" onmouseout="this.src='img/ezcv-project-page.jpg'"/>
						 </a>
					</div>
					<div class="col-md-4 padding_disable">
						 <a href="#">
						 	<img class="pro_img border_top  border_btm border_rit" href="{{ URL::to('about-us')}}" src="img/bindaas-project-page.jpg" onmouseover="this.src='img/bindaas-project-page-fancybox fancybox.ajax hover.jpg'" onmouseout="this.src='img/bindaas-project-page.jpg'"/>
						 </a>				
					</div>
					<div class="col-md-4 padding_disable">
						 <a href="#">
						 	<img class="pro_img border_top border_btm" href="{{ URL::to('about-us')}}" src="img/oasis-project-page.jpg" onmouseover="this.src='img/oasis-project-page-hover.jpg'" onmouseout="this.src='img/oasis-project-page.jpg'"/>
						 </a>				
					</div>
					<div class="col-md-4 padding_disable">
						 <a href="#">
						 	<img class="pro_img  border_rit" href="{{ URL::to('about-us')}}" src="img/kvm-project-page.jpg" onmouseover="this.src='img/kvm-project-page-hover.jpg'" onmouseout="this.src='img/kvm-project-page.jpg'"/>
						 </a>
					</div>
					<div class="col-md-4 padding_disable">
						 <a href="#">
						 	<img class="pro_img  border_rit" href="{{ URL::to('about-us')}}" src="img/anabond-hsbutyl-project-page.jpg" onmouseover="this.src='img/anabond-hsbutyl-project-page-hover.jpg'" onmouseout="this.src='img/anabond-hsbutyl-project-page.jpg'"/>
						 </a>				
					</div>
					<div class="col-md-4 padding_disable">
						 <a href="#">
						 	<img class="pro_img " href="{{ URL::to('about-us')}}" src="img/kvm_group-project-page.jpg" onmouseover="this.src='img/kvm_group-project-page-hover.jpg'" onmouseout="this.src='img/kvm_group-project-page.jpg'"/>
						 </a>					
					</div>
				</div>
			</div>
			<script src="{{ URL::to('js/jquery.fancybox.pack.js')}}" type="text/javascript" charset="utf-8" async defer></script>
			<script src="{{ URL::to('/js/ourprojects.js') }}" type="text/javascript" charset="utf-8" async defer>
				
			</script>

		<!-- ----------------------- PROJECTS End ----------------------- -->		
@stop
