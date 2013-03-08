$(document).ready(function(){
	$(
		function()
		{
			///////////////////////////////////////

			// Faz a requisição para autenticar o usuário.
			$('.login').click(
				function()
				{
					var email = $('input[name=email]');
					var password = $('input[name=password]');
					
					if(!email.val())
					{
						$('.c-g-e').addClass('error');
					}
					
					email.focus(
						function()
						{
							$('.c-g-e').removeClass('error');
						}
					)
					
					if(!password.val())
					{
						$('.c-g-p').addClass('error');
					}
					
					password.focus(
						function()
						{
							$('.c-g-p').removeClass('error');
						}
					)
					
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
