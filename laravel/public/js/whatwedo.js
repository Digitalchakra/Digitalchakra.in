$(document).ready(function()
			{
				//alert($('#div3').width());
				$('.img_slider').width($('#div3').width());
				$('#drag').draggable({ containment: "#scrolldiv" },{
				 drag: function() {
							leftVal = $('#drag').css("left");
							$('#img1').width(leftVal);
							$('#trace').text(leftVal);
							}
				});
			});
