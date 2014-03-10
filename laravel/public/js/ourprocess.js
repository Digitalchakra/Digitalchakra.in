		$(function(){

		    window.setInterval(function(){
		  $(".blue_icon").delay(50).fadeToggle("slow");
		}, 500); 

		    window.setInterval(function(){
		  $(".yellow_icon").delay(50).fadeToggle("slow");
		}, 700); 

		tipbox_click = false;

		$('.but-2-1').click(function(){
			$('.tipbox').hide();
			tipbox_click = true;
			$('.blue_icon_hover_container').fadeToggle("slow");
		});

		$('.but-2-2').click(function(){
			$('.tipbox').hide();
			tipbox_click = true;
			$('.yellow_icon_hover_container').fadeToggle("slow");
		});

		$('.but-3-1').click(function(){
			$('.tipbox').hide();
			tipbox_click = true;
			$('.blue_icon_hover_container_slide3').fadeToggle("slow");
		});

		$('.but-4-1').click(function(){
			$('.tipbox').hide();
			tipbox_click = true;
			$('.yellow_icon_hover_container_slide4').fadeToggle("slow");
		});

		$('.click_read_more').click(function(){
			tipbox_click = true;
			if($(this).siblings('span').is(":visible"))
			{
				$(this).siblings('span').hide();
			}
			else
			{
				$('.tipbox').hide();
				$(this).siblings('span').show();
			}
		});


		$('body').click(function(){
			if($('.tipbox').is(":visible"))
				{
					if(tipbox_click == true)
					{
						tipbox_click = false;
					}
					else
					{
						$('.tipbox').hide();
					}
				}
		});
		// $('.parallax_body_bg').click(function(e){
		// 	alert(e.target.hasClass('.opt-anc'));
		// 	//if(!e.target.hasClass('.opt-anc'))
		// 	//	$('.tip-box').hide();
		// });


		});
