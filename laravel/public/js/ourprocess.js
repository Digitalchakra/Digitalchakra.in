		$(function(){

		    window.setInterval(function(){
		  $(".blue_icon").delay(50).fadeToggle("slow");
		}, 500); 

		    window.setInterval(function(){
		  $(".yellow_icon").delay(50).fadeToggle("slow");
		}, 700); 

		$('.but-2-1').click(function(){
			$('.blue_icon_hover_container').fadeToggle("slow");
		});

		$('.but-2-2').click(function(){
			$('.yellow_icon_hover_container').fadeToggle("slow");
		});

		$('.but-3-1').click(function(){
			$('.blue_icon_hover_container_slide3').fadeToggle("slow");
		});

		$('.but-4-1').click(function(){
			$('.yellow_icon_hover_container_slide4').fadeToggle("slow");
		});

		// $('.parallax_body_bg').click(function(e){
		// 	alert(e.target.hasClass('.opt-anc'));
		// 	//if(!e.target.hasClass('.opt-anc'))
		// 	//	$('.tip-box').hide();
		// });


		});
