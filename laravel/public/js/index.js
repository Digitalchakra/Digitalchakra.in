$(document).ready(function() {

	$('#contactSubmit').click(function(e){
		e.preventDefault();
		$('#contact_error').html('');
		postData = $('#contact_form').serialize();
		$.ajax({
			url: '/email',
			data:postData,
			dataType:'JSON',
			method:'POST',
			success:function(result){
				error='';
				if(!result.success){
					$.each(result.errors,function(key,value){
						//error += error+'<p>'+index+'</p>';
						$('#contact_error').append('<p>'+value+'</p>');
					});
					//alert(result.errors);
				}
				else
				{
					$('#contact_error').html('<p>Thank you !</p>');
				}
			},
			error:function(){
				$('#contact_error').html('<p>Internal error please after some time !</p>');
			}
		});
		
	});
});