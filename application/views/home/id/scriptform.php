<script>
$('#contact-form').each(function(){
		$(this).validate({
			submitHandler: function(form) {
				var $form = $(form),
					$messageSuccess = $form.find('.contact-form-success'),
					$messageError = $form.find('.contact-form-error'),
					$submitButton = $(this.submitButton),
					$errorMessage = $form.find('.mail-error-message'),
					submitButtonText = $submitButton.val();

				$submitButton.val( $submitButton.data('loading-text') ? $submitButton.data('loading-text') : 'Loading...' ).attr('disabled', true);

				// Fields Data
				var formData = $form.serializeArray(),
					data = {};

				$(formData).each(function(index, obj){
				    data[obj.name] = obj.value;
				});

				// Google Recaptcha v2
				if( data["g-recaptcha-response"] != undefined ) {
					data["g-recaptcha-response"] = $form.find('#g-recaptcha-response').val();
				}
				console.log($form.attr('action'));
				// Ajax Submit
				$.ajax({
					type: 'POST',
					url: $form.attr('action'),
					data: data
				}).always(function(data, textStatus, jqXHR) {
					resp = JSON.parse(data)
					$errorMessage.empty().hide();

					if (resp.response == 'success') {

						// Uncomment the code below to redirect for a thank you page
						// self.location = 'thank-you.html';

						$messageSuccess.removeClass('d-none');
						$messageError.addClass('d-none');

						// Reset Form
						$form.find('.form-control')
							.val('')
							.blur()
							.parent()
							.removeClass('has-success')
							.removeClass('has-danger')
							.find('label.error')
							.remove();

						if (($messageSuccess.offset().top - 80) < $(window).scrollTop()) {
							$('html, body').animate({
								scrollTop: $messageSuccess.offset().top - 80
							}, 300);
						}

						$form.find('.form-control').removeClass('error');

						$submitButton.val( submitButtonText ).attr('disabled', false);
						
						return;

					} else if (resp.response == 'error' && typeof resp.errorMessage !== 'undefined') {
						$errorMessage.html(resp.errorMessage).show();
					} else {
						$errorMessage.html(resp.responseText).show();
					}

					$messageError.removeClass('d-none');
					$messageSuccess.addClass('d-none');

					if (($messageError.offset().top - 80) < $(window).scrollTop()) {
						$('html, body').animate({
							scrollTop: $messageError.offset().top - 80
						}, 300);
					}

					$form.find('.has-success')
						.removeClass('has-success');
						
					$submitButton.val( submitButtonText ).attr('disabled', false);

				});
			}
		});
	});
</script>