			<div class="light_box_container">
				<div class="container">
					<div class="close_btn">
					</div>
					<div class="row padding_top padding_btm">
						<div class="col-md-12">
							<h1 class="leftf colorfff font_HelveNue">{{$project->title}}</h1>
							<a class="leftf lbox_liks blue font_HelveNue" href="{{$project->url}}">Goto Website</a>
						</div>
						<div class="clearall">		
						</div>
						<div class="col-md-8 lbox_img_container">
						<?php $images = unserialize($project->images); ?>
							<img src="{{ URL::to('img/projects/'.$project->id.'/'.$images['L']) }}" alt="ezcv" title="EZCV">
						</div>
						<div class="col-md-4">
							<h3 class="colorfff font_HelveNue mtop_0">Sub-Headding</h3>
							<p class="colorfff font_HelveNue font15">
								{{ $project->description}}
							</p>
						</div>
					</div>
				</div>
			</div>