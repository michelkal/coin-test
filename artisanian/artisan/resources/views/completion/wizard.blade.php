<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Complete Registration</title>
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
	

	<script src="{{ URL::asset('completion/js/jquery-2.1.1.min.js') }}"></script>
	<link href="{{ URL::asset('completion/css/stepsForm.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('completion/css/demo.css') }}" rel="stylesheet">
	
</head>
<body>
	<div class="container wizard-container">
		<!--STEPS FORM START -->
		
		<div id="notify">
			@if(! empty($noUser))
			<div class="alert alert-danger">
				<strong>{{ $noUser }}</strong>
			</div>
			@else
			<div class="alert alert-success" >
				<strong>{{ $existUsr }}</strong>
			</div>
			@endif
		</div>
		<div class="stepsForm">
			<form method="post" id="wizard" action="#" method="post" enctype="multipart/form-data">
				<div>
					<div class="sf-steps-content">
						<div>
							<span>1</span> Basic Info
						</div>
						<div>
							<span>2</span> Contact Info
						</div>
						<div>
							<span>3</span> Experience
						</div>
						<div>
							<span>4</span> References
						</div>
					</div>
				</div>                
				<div class="sf-steps-form sf-radius"> 
					<ul class="sf-content"> 
						<!-- form step one --> 
						<li>
							<div class="sf_columns column_3">
								<input type="text" name="fName" placeholder="First Name" data-required="true">
							</div>
							<div class="sf_columns column_3">
								<input type="text" name="lName" placeholder="Last Name" data-required="true">
							</div>
						</li>
						<li>
							<div class="sf_columns column_3">
								<input type="password" id="newPass" data-parsley-min="6" name="newpassword" placeholder="New Password" data-required="true">
							</div>
							<div class="sf_columns column_3">
								<label class="sf-select">
									<select name="employmentStatus" data-required="true">
										<option value="" selected="selected" >Select current employment status</option>
										<option value="Employed">Employed</option>
										<option value="Freelencer">Freelencer</option>
										<option value="Contractor">Contractor</option>
										<option value="Unemployed">Unemployed</option>
										<option value="Other">Other</option>
									</select>
									<span></span>
								</label>
							</div>
						</li>
						<li>
							<div class="sf_columns column_3">
								<label class="sf-select">
									<input type="text" name="jobCategory" placeholder="Job Category. e.g: IT, Catering..." data-required="true">
									<span></span>
								</label>

							</div>
							<div class="sf_columns column_3">
								<div class="sf-radio">
									Gender :  
									<label><input type="radio" value="M" name="gender" data-required="true"><span></span> Male</label>
									<label><input type="radio" value="F" name="gender" data-required="true"><span></span> Female</label>
								</div>
							</div>
						</li>
						<li>
							<div class="sf_columns column_6">
								<textarea placeholder="Address" name="address" data-required="true"></textarea>
							</div>
						</li>
					</ul>

					<ul class="sf-content"> <!-- form step two --> 
						<li>
							<div class="sf_columns column_3">
								<input type="text" placeholder="Personal URL" name="url">
							</div>
							<div class="sf_columns column_3">
								<input type="text" placeholder="Phone number" data-required="true" data-number="true" name="phone">
							</div>
						</li>
						<li>
							<div class="sf_columns column_3">
								<input type="text" placeholder="Facebook ID" name="facebook">
							</div>
							<div class="sf_columns column_3">
								<input type="text" placeholder="Twitter handle" name="twitter">
							</div>
						</li>
						<li>
							<div class="sf_columns column_6">
								<input type="file" class="file-input" name="profilePic">
								<span id='val'></span>
								<span id='button'>Select Profile Picture</span>
							</div>
						</li>
						<li>
							<div class="sf_columns column_6">
								<textarea placeholder="About me" name="about" data-required="true"></textarea>
							</div>
						</li>
					</ul>

					<ul class="sf-content"> <!-- form step tree --> 
						<li>
							<div class="sf_columns column_3">
								<input type="text" placeholder="First Employer" name="employer[]">
							</div>
							<div class="sf_columns column_3">
								<input type="text" placeholder="Job Post" name="post[]">
							</div>
						</li>
						<li>
							<div class="sf_columns column_3">
								<input type="text" placeholder="Second Employer" name="employer[]">
							</div>
							<div class="sf_columns column_3">
								<input type="text" placeholder="Job Post" name="post[]">
							</div>
						</li>
						<li>
							<div class="sf_columns column_3">
								<input type="text" placeholder="Third Employer" name="employer[]" >
							</div>
							<div class="sf_columns column_3">
								<input type="text" placeholder="Job Post" name="post[]" >
							</div>
						</li>
						<li>
							<div class="sf_columns column_3">
								<input type="text" placeholder="Fourth Employer" name="employer[]" >
							</div>
							<div class="sf_columns column_3">
								<input type="text" placeholder="Job Post" name="post[]" >
							</div>
						</li>
						<li>
							<div class="sf_columns column_3">
								<input type="text" placeholder="Fifth Employer" name="employer[]" >
							</div>
							<div class="sf_columns column_3">
								<input type="text" placeholder="Job Post" name="post[]" >
							</div>
						</li>					
					</ul>
					<ul class="sf-content"> <!-- form step four --> 
						<li>
							<div class="sf_columns column_3">
								<input type="text" placeholder="First Ref Full name" name="reference[]" data-required="true" >
							</div>
							<div class="sf_columns column_3">
								<input type="text" placeholder="Phone Number" name="refNum[]" data-number="true" data-required="true" >
							</div>
						</li>
						<li>
							<div class="sf_columns column_3">
								<input type="text" placeholder="Second Ref Full name" name="reference[]" data-required="true" >
							</div>
							<div class="sf_columns column_3">
								<input type="text" placeholder="Phone Number" name="refNum[]" data-number="true" data-required="true" >
							</div>
						</li>
						<li>
							<div class="sf_columns column_3">
								<input type="text" placeholder="Third Ref Full name" name="reference[]" data-required="true" >
							</div>
							<div class="sf_columns column_3">
								<input type="text" placeholder="Phone Number" name="refNum[]" data-number="true" data-required="true" id="fourthNum">
							</div>
						</li>
						<li>
							<div class="sf_columns column_3">
								<input type="text" placeholder="Fourth Ref Full name" name="reference[]" >
							</div>
							<div class="sf_columns column_3">
								<input type="text" placeholder="Phone Number" name="refNum[]" data-number="true">
							</div>
						</li>
						<li>
							<div class="sf_columns column_3">
								<div class="sf-check">
									<label><input checked type="checkbox" value="true" name="accept"><span></span> 
										By clicking Create Account, you agree to our <a href="#">Terms of Services</a></label>
									</div>
								</div>
								<div class="sf_columns column_3">
									<img src="{{ URL::asset('images/728.gif') }}" class="pull-right" id="sign-up-loader" style="display: none;">
								</div>
							</li>					
						</ul>
					</div>

					<div class="sf-steps-navigation sf-align-right">
						<span id="sf-msg" class="sf-msg-error"></span>
						<button id="sf-prev" type="button" class="sf-button">Previous</button>
						<button id="sf-next" type="button" class="sf-button">Next</button>
					</div>
					<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
					@if(!empty($passID))
					<input type="hidden" name="usrID" value="{{ $passID }}" />
					<input type="hidden" name="usrCode" value="{{ $passRef }}" />
					<input type="hidden" name="usrNumeric" value="{{ $passNum }}" />
					@endif
				</form>
			</div>
			<!--STEPS FORM END  -->

		</div>
		<script type="text/javascript" src="{{ URL::asset('js/notify.js') }}"></script>
		<script>
		$(document).ready(function(e) {

			$(".stepsForm").stepsForm({
				width			:'100%',
				active			:0,
				errormsg		:'Please fill in all required fileds.',
				sendbtntext		:'Create Account',
				theme			:'green',
			}); 

		});
		</script>

		<script type="text/javascript" src="{{ URL::asset('js/formhandler.js') }}"></script>
	</body>
	</html>