$(document).ready(function(){
	$(
		function()
		{
			///////////////////////////////////////
			$('.login').click(
				function()
				{
					$.ajax(
						{
							url: 'controller/authenticate_controller.php',
							type: 'POST',
							dataType: 'json',
							data: {
								email: $('input[name=email]').val(),
								password: $('input[name=password]').val(),
							}
						}
					).
					done(
						function(response)
						{
							console.log(response);
							if(response.error != 1)
							{
								$('.alert').empty().removeClass('alert-error').addClass('alert-success').html(response.mensagem);
								$('.alert').show();
								setTimeout(
									function()
									{
										window.location = 'index.php';
									}, 3000
								)
							} else {
								$('.alert').empty().removeClass('alert-success').addClass('alert-error').html(response.mensagem);
								$('.alert').show();
							}
						}
					).
					fail(
						function(response)
						{
							alert('fail');
						}
					)
					return false;
				}
			)
		}
	)
});
