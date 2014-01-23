$(document).ready(function()
			{
				//alert($('#div3').width());
				$('.img_slider').width($('#div3').width());
				$('#drag').draggable({ containment: "#scrolldiv" },{
				 drag: function() {
							leftVal = $('#drag').css("left");
							$('#img1').width(leftVal);
							$('#trace').text(leftVal);
							//$( "#draghint" ).css({"left":leftVal});
							}
				});
				/*$( "#draghint" ).position({
					my: " bottom",
					at: " bottom",
					of: "#drag"
					});
				//$( "#draghint" ).css({"margin-left": "-50px"});
				y=0;
				setInterval(function() {
						if(y == 0) {
							//$('#draghint').css('color', '#FFFFFF');
							$('#draghint').fadeIn();
							y = 1;
						} else  {
							if(y = 1) {
								//$('#draghint').css('color', '#FF0000');
								$('#draghint').fadeOut();
								y = 0;
							}
						}
					}, 500);*/
			});
