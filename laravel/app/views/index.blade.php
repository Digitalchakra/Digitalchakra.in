@extends('layout1')

@section('content')

			<div class="container">
				<div class="row align_center padding_btm">
					<div class="col-lg-12 col-md-12">
		        		<h1 class="f52">We are thought leaders in creating an entirely <br>new user experience through responsive <br>web design and emerging technologies</h1>
		        	</div>
		      	</div>
		    </div>

			<div class="container space_botttom">
				<div class="row ">
					<div class="col-lg-4 col-md-4">
						<img class="boxes_img" src="img/our-intelligent-solutions.png" alt="" title="">
						<!-- <div class="bg_shadow"></div> -->
						<p class="f_p32 align_center color000">Our intelligent solutions start with business insights </p>
					</div>
					<div class="col-lg-4 col-md-4">
						<img class="boxes_img" src="img/optimal_viewing.png" alt="" title="">
						<!-- <div class="bg_shadow"></div> -->
						<p class="f_p32 align_center color000">Ensuring optimal viewing experience for customer in any device</p>
					</div>
					<div class="col-lg-4 col-md-4">
						<img class="boxes_img" src="img/our_designs.png" alt="" title="">
						<!-- <div class="bg_shadow"></div> -->
						<p class="f_p32 align_center color000">Creative and elegant designs, ensuring excellent user interface experiences</p>
					</div>
				</div>
			</div>
    		<!-- ----------------------- PROJECT start --------------------- -->
			<div class="container bg_333 border_top_yellow">
				<div class="row">
					<div class="col-md-12">
						<h2 class="yellow leftf lheight">OUR WORK</h2>
						<h2 class="rightf viewall_btn" Request::is('our-projects') ><a href={{url("our-projects")}}>View all</a></h2>
					</div>
					<!-- <div class="col-md-4 col-md-offset-4">
						
					</div> -->
				</div>
			</div>
			<div class="padding_disable bg_333">
				<div class="row padding_disable">
					@foreach ($projects as $key => $value)
					<?php $images = unserialize($value->images); ?>
						<div class="col-lg-4 col-md-4 padding_disable">
								<img class="boxes_img boxes_hover_all boxes_img1 border_top border_btm border_rit" src="{{ URL::to('img/projects/'.$value->id.'/'.$images['I']) }}" alt="{{ $value->title }}" title="{{ $value->title }}" href="{{ URL::to('our-projects/projectPage/'.$value->id)}}">
						</div>
					@endforeach
				</div>
			</div>

		<!-- ----------------------- PROJECT End ----------------------- -->

		<!-- ----------------------- CONTACT start --------------------- -->
			<div class="container border_top_blue bg_white">
				<div class="row">
					<div class="col-md-4">
						<h2 class="blue lheight">CONTACT</h2>
					</div>
				</div>
			</div>	
			<div class="padding_disable">	
				<div class="row padding_disable">
					<div class="col-lg-12 padding_disable map">
						<iframe class="width_360to600" width="100%" height="550" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=200362802844573744009.0004f17d964e4f6bd0f60&amp;ie=UTF8&amp;t=m&amp;f=d&amp;daddr=Digital+Chakra+%4013.049551,80.249009&amp;ll=13.051469,80.243282&amp;spn=0.003658,0.00456&amp;z=17&amp;iwloc=&addr&amp;output=embed"></iframe><br /><small class="view_map">View <a target="_blank" href="https://maps.google.com/maps/ms?msa=0&amp;msid=200362802844573744009.0004f17d964e4f6bd0f60&amp;ie=UTF8&amp;t=m&amp;f=d&amp;daddr=Digital+Chakra+%4013.049551,80.249009&amp;ll=13.051469,80.243282&amp;spn=0.003658,0.00456&amp;z=17&amp;iwloc=0004f17da192ca9e720c5&amp;source=embed" style="color:#0000FF;text-align:left">Digital Chakra</a> in a larger map</small>
						<iframe class="width_601" width="100%" height="550" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=200362802844573744009.0004f17d964e4f6bd0f60&amp;ie=UTF8&amp;t=m&amp;f=d&amp;daddr=Digital+Chakra+%4013.049551,80.249009&amp;ll=13.051469,80.243282&amp;spn=0.003658,0.00456&amp;z=17&amp;iwloc=0004f17da192ca9e720c5&amp;output=embed"></iframe><br /><small class="view_map">View <a target="_blank" href="https://maps.google.com/maps/ms?msa=0&amp;msid=200362802844573744009.0004f17d964e4f6bd0f60&amp;ie=UTF8&amp;t=m&amp;f=d&amp;daddr=Digital+Chakra+%4013.049551,80.249009&amp;ll=13.051469,80.243282&amp;spn=0.003658,0.00456&amp;z=17&amp;iwloc=0004f17da192ca9e720c5&amp;source=embed" style="color:#0000FF;text-align:left">Digital Chakra</a> in a larger map</small>

						<div class="contact_form">
							<div class="contact_bg">
								{{ Form::open(array('id'=>'contact_form')) }}
									<p class="write1">
										<span class="blue">Write to us,</span> 
										Lets start with  
									</p>
									<p class="font_segoe">
										<span class="font_forte blue">Hi &#33; </span>
										I am 
										<input name='dcname' class="text1" type="text" value="">
									</p>
									<p class="font_segoe">
										My Email id is 
										<input name='dcemail' class="text2" type="text" value="">
									</p>
									<p class="font_segoe">
										I would like to 
										<textarea name='dcmessage' class="text3"></textarea>
									</p><br>
									<span id="contact_error"></span>
									<span id="contactSubmit" class="rightf btn_send" type="submit" value="SEND"></span>
								{{ Form::close() }}
							</div>
						</div>
					</div>
				</div>
			</div>

		<!-- ----------------------- CONTACT End ----------------------- -->
		<script src="{{ URL::to('js/jquery.fancybox.pack.js')}}" type="text/javascript" charset="utf-8"></script>
		<script src="{{ URL::to('js/index.js') }}"></script>
@stop
