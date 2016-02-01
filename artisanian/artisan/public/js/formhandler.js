$(document).on('submit', '#submitForm', function(event) {
	event.preventDefault();
	/* Act on the event */

	if ($('form#submitForm input, form#submitForm textarea').val() != "") {

		$('#sign-up-loader').fadeIn('slow', function() {
			var forms = document.querySelector('form#submitForm');
			var request = new XMLHttpRequest();
			var formDatas = new FormData(forms);
			request.open('post','add-artisan');
			request.send(formDatas);

			request.onreadystatechange = function() {
				if (request.readyState === 4) {
					if (request.status === 200) {
						if (request.responseText == "success") {
							$('#sign-up-loader').fadeOut('slow', function() {
								$('#notify').notify("You have successfully sign up. Please check email to confirm your account", 'info');
								$('form#submitForm input, form#submitForm textarea, form#submitForm select').val(null).attr('disabled', true);	
							});
						}else{
							$('#notify').notify(request.responseText, 'error');
						};
					} else {
                       // not OK
                       alert('failure!');
                   }
               }
           };
       });
	};
});

jQuery(document).ready(function($) {
	if ($('.alert').hasClass('alert-danger')) {
		$('form#wizard input, form#wizard textarea, form#wizard select').attr('disabled', true);
	};


});

/*Continue registration*/
$(document).on('submit', '#wizard', function(event) {
	event.preventDefault();
	/* Act on the event */

	if ($('form#wizard input, form#wizard textarea').val() != "") {

		$('#sign-up-loader').fadeIn('slow', function() {
			var forms = document.querySelector('form#wizard');
			var request = new XMLHttpRequest();
			var formDatas = new FormData(forms);
			request.open('post','http://localhost:8000/continue-reg/'+$('input[name="usrID"]').val()+'/'+$('input[name="usrCode"]').val()+'/'+$('input[name="usrNumeric"]').val());
			request.send(formDatas);

			request.onreadystatechange = function() {
				if (request.readyState === 4) {
					if (request.status === 200) {
						if (request.responseText == "success") {

							$('#sign-up-loader').fadeOut('slow', function() {
								$('form#wizard input, form#wizard textarea').val(null).attr('disabled', true);
								$('.alert-success').removeClass('alert-success').addClass('alert-info').html('Thank you for joining the community. Registration completed successfully. Please wait...');
							});
						}else{
							$('#notify').notify("An error occured while trying to complete your registration. Please try again", 'error');
						};
						
					} else {
                       // not OK
                       alert('failure!');
                   }
               }
           };
       });
};
});

/*User review*/
$(document).on('submit', '#PostUserReview', function(event) {
	event.preventDefault();
	var forms = document.querySelector('form#PostUserReview');
	var request = new XMLHttpRequest();
	var formDatas = new FormData(forms);
	request.open('post','/postreview');
	request.send(formDatas);

	request.onreadystatechange = function() {
		if (request.readyState === 4) {
			if (request.status === 200) {
				if (request.responseText != "failed") {
					/*Success*/

					if (request.responseText == "Please log in to post a review") {

						$('#loginMadal').modal('show');

					}else if(request.responseText == 'Thank you for your review. User will be rated accordingly.'){

						$('#reviewAlertMsg').fadeIn('slow', function() {
							$('#revMsg').html(request.responseText);
							$('form#PostUserReview textarea').val(null).attr('disabled', true);
						});
					}else if(request.responseText == 'You can not post a review for yourself'){
						$('#reviewAlertMsg').removeClass('alert-success').addClass('alert-danger').fadeIn('slow', function() {
							$('#revMsg').html(request.responseText);
							$('#alertStrong').html('Ooops!!')
							$('form#PostUserReview textarea').val(null);
						});
					}else if(request.responseText == 'Please type your review'){
						$('#alertStrong').html('Ooops!!');
						$('#reviewAlertMsg').removeClass('alert-success').addClass('alert-danger').fadeIn('slow', function() {
							$('#revMsg').html(request.responseText);
						});
					};

				}else{
					/*No data received*/
					
				};

			} else {
                       // not OK
                       alert('Failed to process request');
                   }
               }
           };
       });



/*Login using modal form*/
$(document).on('submit', '#loginWithModal', function(event) {
	event.preventDefault();
	var forms = document.querySelector('form#loginWithModal');
	var request = new XMLHttpRequest();
	var formDatas = new FormData(forms);
	request.open('post','/ModalLoginForReview');
	request.send(formDatas);

	request.onreadystatechange = function() {
		if (request.readyState === 4) {
			if (request.status === 200) {
				if (request.responseText != "failed") {
					/*Success*/
					var result = JSON.parse(request.responseText);
					$('.current-user').html('<i class="fa fa-user"></i> '+result.fName+' '+result.lName).attr('href', '/profile/'+result.fName.toLowerCase()+'.'+result.lName.toLowerCase());
					$('.current-state').html('<i class="fa fa-sign-out"></i> Log out');

					$('form#loginWithModal input').val(null);
					$('#loginMadal').modal('hide');

				}else{
					/*No data received*/
					
				};

			} else {
                       // not OK
                       alert('Failed to process login request');
                   }
               }
           };
       });


/*Sending user a message*/
$(document).on('submit', '#profile-form', function(event) {
	event.preventDefault();
	if ($('#profile-form input, #profile-form textarea').val() !== null) {
		$('msgSender').html("Sending Message...").attr('disabled', true);
		$('#msgLoader').fadeIn('slow', function() {
			var forms = document.querySelector('form#profile-form');
			var request = new XMLHttpRequest();
			var formDatas = new FormData(forms);
			request.open('post','/sendMsg');
			request.send(formDatas);

			request.onreadystatechange = function() {
				if (request.readyState === 4) {
					if (request.status === 200) {
						if (request.responseText == "Message sent successfully") {
							/*Success*/

							$('#msgLoader').fadeOut('slow', function() {
								$('form#profile-form input, form#profile-form textarea').val(null);

								$('#msgAlert').removeClass('alert-danger').addClass('alert-success').fadeIn('slow', function() {
									$('#msgText').html(request.responseText);
								});
							});
							

						}else{
							/*No data received*/
							$('#msgLoader').fadeOut('slow', function() {
								$('#msgAlert').fadeIn('slow', function() {
									$('#msgText').html(request.responseText);
								});
							});
							
						};

					} else {
                       // not OK
                       alert('Failed to process message request');
                   }
               }
           };
       });
};
});


