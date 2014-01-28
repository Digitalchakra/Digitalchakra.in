@extends('layout2')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/fancybox/jquery.fancybox.css') }}" media="screen" />
<!-- ----------------------- PROJECTS Start ----------------------- -->	
			<div class="padding_disable">
				<div class="row padding_disable">
					<div class="col-md-4 padding_disable">
						 <a href="#">
						 	<img class="pro_img border_top  border_btm border_rit" href="{{ URL::to('our-projects/projectPage/1')}}" src="img/ezcv-project-page.jpg" onmouseover="this.src='img/ezcv-project-page-hover.jpg'" onmouseout="this.src='img/ezcv-project-page.jpg'"/>
						 </a>
					</div>
					<div class="col-md-4 padding_disable">
						 <a href="#">
						 	<img class="pro_img border_top  border_btm border_rit"  href="{{ URL::to('our-projects/projectPage/2')}}" src="img/bindaas-project-page.jpg" onmouseover="this.src='img/bindaas-project-page-fancybox fancybox.ajax hover.jpg'" onmouseout="this.src='img/bindaas-project-page.jpg'"/>
						 </a>				
					</div>
					<div class="col-md-4 padding_disable">
						 <a href="#">
						 	<img class="pro_img border_top border_btm"  href="{{ URL::to('our-projects/projectPage/3')}}" src="img/oasis-project-page.jpg" onmouseover="this.src='img/oasis-project-page-hover.jpg'" onmouseout="this.src='img/oasis-project-page.jpg'"/>
						 </a>				
					</div>
					<div class="col-md-4 padding_disable">
						 <a href="#">
						 	<img class="pro_img  border_rit"  href="{{ URL::to('our-projects/projectPage/4')}}" src="img/kvm-project-page.jpg" onmouseover="this.src='img/kvm-project-page-hover.jpg'" onmouseout="this.src='img/kvm-project-page.jpg'"/>
						 </a>
					</div>
					<div class="col-md-4 padding_disable">
						 <a href="#">
						 	<img class="pro_img  border_rit"  href="{{ URL::to('our-projects/projectPage/5')}}" src="img/anabond-hsbutyl-project-page.jpg" onmouseover="this.src='img/anabond-hsbutyl-project-page-hover.jpg'" onmouseout="this.src='img/anabond-hsbutyl-project-page.jpg'"/>
						 </a>				
					</div>
					<div class="col-md-4 padding_disable">
						 <a href="#">
						 	<img class="pro_img "  href="{{ URL::to('our-projects/projectPage/6')}}" src="img/kvm_group-project-page.jpg" onmouseover="this.src='img/kvm_group-project-page-hover.jpg'" onmouseout="this.src='img/kvm_group-project-page.jpg'"/>
						 </a>					
					</div>
				</div>
			</div>
			<script src="{{ URL::to('js/jquery.fancybox.pack.js')}}" type="text/javascript" charset="utf-8" async defer></script>
			<script src="{{ URL::to('/js/ourprojects.js') }}" type="text/javascript" charset="utf-8" async defer>
				
			</script>

		<!-- ----------------------- PROJECTS End ----------------------- -->		
@stop
