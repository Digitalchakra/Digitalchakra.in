@extends('layout2')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/fancybox/jquery.fancybox.css') }}" media="screen" />
<!-- ----------------------- PROJECTS Start ----------------------- -->	
			<div class="row padding_disable bg_333">
				@foreach ($projects as $key => $value)
				<?php $images = unserialize($value->images); ?>
					<div class="col-lg-4 col-md-4 padding_disable">
							<img class="boxes_img boxes_hover_all boxes_img1 border_top border_rit" src="{{ URL::to('img/projects/'.$value->id.'/'.$images['I']) }}" alt="{{ $value->title }}" title="{{ $value->title }}" href="{{ URL::to('our-projects/projectPage/'.$value->id)}}">
					</div>
				@endforeach
				
			</div>
			<script src="{{ URL::to('js/jquery.fancybox.pack.js')}}" type="text/javascript" charset="utf-8">
			</script>
			<script src="{{ URL::to('js/ourprojects.js') }}" type="text/javascript" charset="utf-8">
				
			</script>

		<!-- ----------------------- PROJECTS End ----------------------- -->		
@stop
