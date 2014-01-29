@extends('layout1')

@section('content')
			<div class="container">
				<div class="row align_center padding_btm">
					<div class="col-lg-12 col-md-12">
		        		<h1 class="f52">We are thought leaders in creating an entirely <br>new user experience through responsive <br>web design and emerging technologies.</h1>
		        	</div>
		      	</div>
		    </div>

			<div class="container space_botttom">
				<div class="row ">
					<div class="col-lg-4 col-md-4">
						<img class="boxes_img" src="img/our-intelligent-solutions.png" alt="" title="">
						<!-- <div class="bg_shadow"></div> -->
						<p class="f_p32 align_center color000">Our intelligent solutions starts with business insights </p>
					</div>
					<div class="col-lg-4 col-md-4">
						<img class="boxes_img" src="img/optimal_viewing.png" alt="" title="">
						<!-- <div class="bg_shadow"></div> -->
						<p class="f_p32 align_center color000">Ensuring optimal viewing experience for customer in any device</p>
					</div>
					<div class="col-lg-4 col-md-4">
						<img class="boxes_img" src="img/our_designs.png" alt="" title="">
						<!-- <div class="bg_shadow"></div> -->
						<p class="f_p32 align_center color000">Our designs are not only creative and elegant but also provides interface for great user experience	</p>
					</div>
				</div>
			</div>
    		<!-- ----------------------- PROJECT start --------------------- -->
			<div class="container bg_333 border_top_yellow">
				<div class="row">
					<div class="col-md-12">
						<h2 class="yellow leftf lheight">PROJECTS</h2>
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
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d485.84720717046525!2d80.24821965814768!3d13.049819963106827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeb6905de192bbbb2!2sDigital+Chakra!5e0!3m2!1sen!2s!4v1387267922359" width="100%" height="550" frameborder="0" style="border:0"></iframe>

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
