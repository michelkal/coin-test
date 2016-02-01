<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Profile | {!! $userData->fName !!} {!! $userData->lName !!}</title>
	<meta name="description" content="Local Professionals close to you, Find help">
	<meta name="author" content="Michel Kalavanda">


	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
	<!-- CSS
	================================================== -->
	<!-- Base + Vendors CSS -->
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/fonts/font-awesome/css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/fonts/entypo/css/entypo.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('vendor/owl-carousel/owl.carousel.css') }}" media="screen">
	<link rel="stylesheet" href="{{ URL::asset('vendor/owl-carousel/owl.theme.css') }}" media="screen">
	<link rel="stylesheet" href="{{ URL::asset('vendor/magnific-popup/magnific-popup.css') }}" media="screen">
	<link rel="stylesheet" href="{{ URL::asset('vendor/flexslider/flexslider.css') }}" media="screen">
	<link rel="stylesheet" href="{{ URL::asset('vendor/job-manager/frontend.css') }}" media="screen">

	<!-- Theme CSS-->
	<link rel="stylesheet" href="{{ URL::asset('css/theme.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/theme-elements.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/animate.min.css') }}">



	<!-- Head Libs -->
	<script src="{{ URL::asset('vendor/modernizr.js') }}"></script>

	
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicons/favicon.ico">
	<link rel="apple-touch-icon" sizes="120x120" href="images/favicons/favicon-120.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/favicons/favicon-152.png">
	
</head>
<body>

	<div class="site-wrapper">

		<!-- Header -->
		<header class="header header-menu-fullw">

			<div class="header-top">
				<div class="container">
					<div class="header-top-left">
						<ul class="social-links-header">
							<li><a href="#" class="btn btn-sm"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="btn btn-sm"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="btn btn-sm"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="btn btn-sm"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#" class="btn btn-sm"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" class="btn btn-sm"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
					<div class="header-top-right">
						<a href="<?php if (Auth::check()){ echo '/profile/'.strtolower(Auth::user()->fName).'.'.strtolower(Auth::user()->lName); }else{ echo '/login'; } ?>" class="btn btn-sm current-user">
							<?php if (Auth::check()){ echo '<i class="fa fa-user"></i> '.Auth::user()->fName.' '.Auth::user()->lName; }else{ ?><i class="fa fa-sign-in"></i> Login <?php } ?></a>
							<a href="<?php if (Auth::check()) {
								echo '/logout/user';
							}else{
								echo '/add-artisan';
							} ?>" class="btn btn-sm current-state"><?php if (Auth::check()) {
								echo '<i class="fa fa-sign-out"></i> Log out';
							}else{ ?><i class="fa fa-unlock"></i> Register <?php } ?></a>
						</div>
					</div>
				</div>
				<div class="header-main">
					<div class="container">
						<!-- Logo -->
						<div class="logo">
							<a href="#"><img src="{{ URL::asset('images/artisan_small.png') }}"></a>
							<!-- <h1><a href="index.html"><span>Handy</span>Man</a></h1> -->
						</div>
						<!-- Logo / End -->

						<button type="button" class="navbar-toggle">
							<i class="fa fa-bars"></i>
						</button>

						<!-- Navigation -->
						<nav class="nav-main">
							<div class="nav-main-inner">
								<ul data-breakpoint="992" class="flexnav">
									<li><a href="/">Home</a></li>
									<li><a href="#">Pages</a>
										<ul>
											<li><a href="page-about.html">About Us</a></li>
											<li><a href="page-services.html">Services</a></li>
											<li><a href="page-team.html">Team</a></li>
											<li><a href="page-team-member.html">Team Member</a></li>
											<li><a href="page-faqs.html">FAQs</a></li>
											<li><a href="page-fullwidth.html">Full Width</a></li>
											<li><a href="page-left-sidebar.html">Left Sidebar</a></li>
											<li><a href="page-right-sidebar.html">Right Sidebar</a></li>
											<li><a href="page-login.html">Login &amp; Register</a></li>
											<li><a href="page-404.html">404</a></li>
										</ul>
									</li>
									<li><a href="#">Features</a>
										<ul>
											<li><a href="features-shortcodes.html">Shortcodes</a></li>
											<li><a href="features-pricing-tables.html">Pricing Tables</a></li>
											<li><a href="features-typography.html">Typography</a></li>
											<li><a href="features-columns.html">Columns</a></li>
											<li><a href="features-icons.html">Icons</a></li>
										</ul>
									</li>
									<li class="active"><a href="#">Jobs</a>
										<ul>
											<li><a href="job-post-profile.html">Post a Profile</a></li>
											<li><a href="job-post-job.html">Post a Job</a></li>
											<li><a href="job-professionals.html">Professionals</a></li>
											<li><a href="job-dashboard.html">Dashboard</a></li>
											<li class="active"><a href="job-profile.html">Profile</a></li>
										</ul>
									</li>
									<li><a href="blog-right-sidebar.html">Blog</a>
										<ul>
											<li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
											<li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
											<li><a href="blog-fullwidth.html">Blog Full Width</a></li>
											<li><a href="blog-post.html">Single Post</a></li>
										</ul>
									</li>
									<li><a href="page-contacts.html">Contacts</a></li>
								</ul>
							</div>
						</nav>
						<!-- Navigation / End -->

					</div>
				</div>

			</header>
			<!-- Header / End -->


			<!-- Main -->
			<div class="main" role="main">

				<!-- Page Heading -->
				<section class="page-heading">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1>Profile</h1>
							</div>
						</div>
					</div>
				</section>
				<!-- Page Heading / End -->

				<!-- Page Content -->
				<section class="page-content">
					<div class="container">

						<div class="row">
							<div class="content col-md-8">

								<div class="box mb-30">
									<div class="job-profile-info">
										<div class="row">
											<div class="col-md-5">
												<figure class="alignnone">
													<img src="http://localhost:8000/images/profiles/<?php echo $userData->profilePic; ?>" alt="">
												</figure>
											</div>
											<div class="col-md-7 text-center">
												<h2 class="name">{!! $userData->fName !!} {!! $userData->lName !!}</h2>
												<ul class="meta">
													<li>{!! $userData->jobTitle !!}</li><br>
													<li><em>{!! $userData->jobCategory !!}</em></li>
												</ul>
												<i class="tagline">
													<?php 
													$skills = explode(',', $userData->skills);
													foreach ($skills as $skill):
														?><span class="label label-info">{!! $skill !!}</span>
												<?php endforeach; ?>
											</i>
											<ul class="info">
												<li><i class="fa fa-location-arrow"></i><a href="#"> {!! $userData->address !!}</a></li>
												<li><i class="fa fa-phone"></i><a href="#"> {!! $userData->phone !!}</a></li>
												<li><i class="fa fa-clock-o"></i> Updated {!! \Timer::timeAgo(strtotime($userData->updated_at))  !!}</li>
												
											</ul>
										</div>
									</div>

									<div class="spacer-lg"></div>

									<h4>Description</h4>
									<p>{!! $userData->description !!}</p>
									<hr class="lg">

								</div>
							</div>

							<!-- Additional Info Tabs -->
							<div class="tabs">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs">
									<li class="active"><a href="#tab1-1" data-toggle="tab">Reviews</a></li>
									<li><a href="#tab1-2" data-toggle="tab">Details</a></li>
									<li><a href="#tab1-3" data-toggle="tab" id="mapLoader">Check Location</a></li>

								</ul>
								<!-- Tab panes -->
								<div class="tab-content">
									<div class="tab-pane fade in active" id="tab1-1">
										<!-- Comments -->
										<div class="comments-wrapper">
											<h3>Reviews ({!! count($revData) !!})</h3>
											<ol class="commentlist">
												@foreach($revData as $reviews)
												<li class="comment">
													<div class="comment-wrapper">
														<div class="comment-author vcard">
															<img src="{{ URL::asset('images/profiles') }}@if(null != $reviews->profilePic){!! '/'.$reviews->profilePic !!}@else{!! icon-profile.png !!}}@endif" alt="" class="gravatar">
															<h5>{!! $reviews->commentedBy !!}</h5>
															<span class="says">says:</span>
															<div class="comment-meta">
																<a href="#">{!! \Timer::timeAgo(strtotime($reviews->created_at)) !!}</a>
															</div>
															<div class="rating-stars">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>
														</div>
														<div class="comment-body">
															{!! $reviews->comment !!}
														</div>
													</div>
												</li>
												@endforeach
											</ol>
										</div>
										<!-- Comments / End -->

										<!-- Comments Form -->
										<div id="respond" class="comment-respond">
											<h3 class="reply-title">Leave a review</h3>
											<p class="comment-notes text-muted"><i>Review is based on previous encounter<span class="required">*</span></i></p>

											<form action="#" method="POST" id="PostUserReview" data-parsley-validate>

												<div class="form-group">
													<textarea data-parsley-words="[5, 600]" name="reviewText" cols="30" rows="10" class="form-control" placeholder="Comment"></textarea>
												</div>

												<div class="row">
													<div class="col-md-4">

														<button type="submit" class="btn btn-primary">Publish Review</button>
													</div>
													<div class="col-md-8">
														<!-- Alert -->
														<div class="alert alert-success alert-dismissable" id="reviewAlertMsg" style="display: none;">
															<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
															<strong id="alertStrong">Success!</strong> <span id="revMsg"></span>
														</div>
														<!-- End alert -->
													</div>
												</div>
												<input type="hidden" name="ToUserID" value="{!! $user !!}">
												<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
											</form>
										</div>
										<!-- Comments Form / End -->
									</div>
									<div class="tab-pane fade" id="tab1-2">
										<div class="row">
											<div class="col-sm-6 col-md-6">
												<h4>Last 5 Employers</h4>
												<div class="list list__arrow2">
													<ul>
														@foreach($ref as $refs)
														<li>{!! $refs->employer !!}</li> 
														@endforeach
													</ul>
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<h4>Job Responsability</h4>
												<div class="list list__arrow2">
													<ul>
														@foreach($ref as $jobs)
														<li>{!! $jobs->responsability !!}</li>
														@endforeach 
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="tab1-3">
										<div class="row">
											<!-- Google Map -->
											<div class="googlemap-wrapper">
												<div id="map_canvas" class="map-canvas"></div>
											</div>
											<!-- Google Map / End -->
										</div>
									</div>
								</div>
							</div>
							<!-- Additional Info Tabs / End -->

						</div>

						<!-- Sidebar -->
						<aside class="sidebar col-md-4">
							<hr class="visible-sm visible-xs lg">

							<div class="box box__color-darken mb-30">
								<h4>Contact</h4>
								<form data-parsley-validate action="#" method="POST" id="profile-form">
									<div class="form-group form-grop__icon">
										<i class="entypo user"></i>
										<input type="text" class="form-control" placeholder="Your Name" required name="name">
									</div>
									<div class="form-group form-grop__icon">
										<i class="entypo phone"></i>
										<input type="number" class="form-control" placeholder="Your Phone Number" required name="phone">
										<p class="comment-notes text-muted"><i>We ensure 100% privacy of your number<span class="required">*</span></i></p>
									</div>
									<div class="form-group form-grop__icon">
										<i class="entypo mail"></i>
										<input type="email" class="form-control" placeholder="Your Email" required name="email">
										<p class="comment-notes text-muted"><i>Your email will not be pupblished<span class="required">*</span></i></p>
									</div>
									<div class="form-group form-grop__icon">
										<i class="entypo pencil"></i>
										<textarea data-parsley-words="[5, 600]" name="message" cols="30" rows="8" class="form-control" placeholder="Your Message" required ></textarea>
									</div>
									<input type="hidden" name="user_ref" value="{!! $user !!}">
									<button type="submit" class="btn btn-primary" id="msgSender">Send Message</button>
									<img src="{{ URL::asset('images/loader/load.gif') }}" id="msgLoader" style="display: none;">
									<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
								</form>
								<br>
								<!-- Alert -->
								<div class="alert alert-danger alert-dismissable" id="msgAlert" style="display: none;">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
									<span id="msgText"></span>
								</div>
								<!-- End alert -->
							</div>

							<div class="box box__color-darken mb-30">
								<h4>Social Profiles</h4>
								<ul class="social-links social-links__dark">
									<li><a href="http://www.facebook.com/{!! $userData->facebook !!}"><i class="fa fa-facebook"></i></a></li>
									<li><a href="http://www.twitter.com/{!! $userData->twitter !!}"><i class="fa fa-twitter"></i></a></li>

								</ul>
							</div>

							<div class="box box__color-darken mb-30">
								<h4>References</h4>
								<div class="table-responsive">
									<table class="table table-striped business-hours">
										<tbody>
											@foreach($extra as $reference)
											<tr>
												<td><i class="fa fa-clock-o"></i> {!! $reference->refNames !!}</td>
												<td><a href="#" title="Verified Reference"><i class="fa fa-check-circle"></i></a></td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
								<!-- Table (Bordered) / End -->
							</div>


						</aside>
						<!-- Sidebar / End -->

					</div>
				</div>
			</section>
			<!-- Page Content / End -->

			<!-- Footer -->
			<footer class="footer" id="footer">
				<div class="footer-widgets">
					<div class="container">
						<div class="row">
							<div class="col-sm-4 col-md-4">
								<!-- Widget :: Contacts Info -->
								<div class="contacts-widget widget widget__footer">
									<h3 class="widget-title">Contact Us</h3>
									<div class="widget-content">
										<ul class="contacts-info-list">
											<li>
												<i class="fa fa-map-marker"></i>
												<div class="info-item">
													HandyMan Co., Old Town Avenue, New York, USA 23000
												</div>
											</li>
											<li>
												<i class="fa fa-phone"></i>
												<div class="info-item">
													+1700 124-5678<br>
													+1700 124-5678
												</div>
											</li>
											<li>
												<i class="fa fa-envelope"></i>
												<span class="info-item">
													<a href="mailto:info@dan-fisher.com">support@dan-fisher.com</a>
												</span>
											</li>
											<li>
												<i class="fa fa-clock-o"></i>
												<div class="info-item">
													Monday - Friday 9:00 - 21:00
												</div>
											</li>
										</ul>
									</div>
								</div>
								<!-- /Widget :: Contacts Info -->
							</div>
							<div class="col-sm-4 col-md-4">
								<!-- Widget :: Latest Posts -->
								<div class="latest-posts-widget widget widget__footer">
									<h3 class="widget-title">Recent Posts</h3>
									<div class="widget-content">
										<ul class="latest-posts-list">
											<li>
												<figure class="thumbnail"><a href="#"><img src="images/samples/post-img1-sm.jpg" alt=""></a></figure>
												<h5 class="title"><a href="#">Three Simple Household Repairs That'll Save You Hundreds</a></h5>
												<span class="date">April, 18 2015</span>
											</li>
											<li>
												<figure class="thumbnail"><a href="#"><img src="images/samples/post-img2-sm.jpg" alt=""></a></figure>
												<h5 class="title"><a href="#">Tools That Make Yard Work Easy: The Big Backpack Blower</a></h5>
												<span class="date">March, 21 2015</span>
											</li>
											<li>
												<figure class="thumbnail"><a href="#"><img src="images/samples/post-img3-sm.jpg" alt=""></a></figure>
												<h5 class="title"><a href="#">11 Tips for Dealing With Water Damage, Mold and Mildew</a></h5>
												<span class="date">March, 21 2015</span>
											</li>
										</ul>
									</div>
								</div>
								<!-- /Widget :: Latest Posts -->
							</div>

							<div class="clearfix visible-sm"></div>

							<div class="col-sm-4 col-md-4">
								<!-- Widget :: Newsletter -->
								<div class="widget_newsletter widget widget__footer">
									<h3 class="widget-title">Get Our Newsletter</h3>
									<div class="widget-content">
										<p>Get timely DIY projects for your home and yard delivered right to your inbox every week!</p>

										<form action="#" method="POST" id="newsletter-form">

											<div class="alert alert-success hidden" id="newsletter-alert-success">
												<strong>Success!</strong> Thank you for subscribing.
											</div>
											<div class="alert alert-danger hidden" id="newsletter-alert-error">
												<strong>Error!</strong> Something went wrong.
											</div>

											<div class="form-group">
												<input type="email" 
												value=""
												data-msg-required="Please enter email address."
												data-msg-email="Please enter a valid email address."
												class="form-control"
												placeholder="Enter your email here..."
												name="subscribe-email"
												id="subscribe-email">
											</div>
											<button type="submit" class="btn btn-primary btn-block" data-loading-text="Loading...">Subscribe</button>
										</form>
									</div>
								</div>
								<!-- /Widget :: Newsletter -->
							</div>
						</div>
					</div>
				</div>
				<input type="hidden" id="myLongitude">
				<input type="hidden" id="myLatitude">
				<input type="hidden" id="myPhysicalAdd">
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								Copyright &copy; 2015  <a href="index.html">HandyMan</a> &nbsp;| &nbsp;All Rights Reserved
							</div>
						</div>
					</div>
				</div>
			</footer>
			<form action="#" method="post" id="maskForm">
				<input type="hidden" name="address" value="{!! $userData->address !!}">

				<input type="hidden" name="userID" value="{!! $user !!}">
				<input type="hidden" name="userLocal" value="{!! $local !!}">
				<input type="hidden" name="userTimer" value="{!! $timer !!}">
				<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
			</form>

			<!-- Footer / End -->

		</div>
		<!-- Main / End -->
	</div>

	<!-- Login modal -->
	<div class="modal fade" id="loginMadal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="loginWithModal" action="#" method="post">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Please Login</h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<!-- Alert -->
								<div class="alert alert-warning alert-dismissable" id="reviewAlert" >
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
									<strong>Warning!</strong> Please log in to post a review
								</div>
								<!-- End alert -->
							</div>
						</div>
						<div class="form-group form-grop__icon">
							<i class="entypo mail"></i>
							<input type="email" class="form-control" placeholder="Email" name="email">
						</div>
						<div class="form-group form-grop__icon">
							<i class="entypo lock"></i>
							<input type="password" class="form-control" placeholder="Password" name="password">
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-6">
									<div class="radio radio__custom radio__style1">
										<label>
											<input type="radio" name="optionsRadios1" id="optRadio11" value="option1" checked>
											<span><strong>I am an Artisan</strong></span>
										</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="radio radio__custom radio__style1">
										<label>
											<input type="radio" name="optionsRadios1" id="optRadio12" value="option1">
											<span><strong>I need an Artisan</strong></span>
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary">Log In</button>
					</div>
					<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
				</form>
			</div>
		</div>
	</div>





	<!-- Javascript Files
	================================================== -->
	<script src="{{ URL::asset('vendor/jquery-1.11.0.min.js') }}"></script>
	<script src="{{ URL::asset('vendor/jquery-migrate-1.2.1.min.js') }}"></script>
	<script src="{{ URL::asset('vendor/bootstrap.js') }}"></script>
	<script src="{{ URL::asset('vendor/jquery.flexnav.min.js') }}"></script>
	<script src="{{ URL::asset('vendor/jquery.hoverIntent.minified.js') }}"></script>
	<script src="{{ URL::asset('vendor/jquery.flickrfeed.js') }}"></script>
	<script src="{{ URL::asset('vendor/isotope/jquery.isotope.min.js') }}"></script>
	<script src="{{ URL::asset('vendor/isotope/jquery.isotope.sloppy-masonry.min.js') }}"></script>
	<script src="{{ URL::asset('vendor/isotope/jquery.imagesloaded.min.js') }}"></script>
	<script src="{{ URL::asset('vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
	<script src="{{ URL::asset('vendor/owl-carousel/owl.carousel.min.js') }}"></script>
	<script src="{{ URL::asset('vendor/jquery.fitvids.js') }}"></script>
	<script src="{{ URL::asset('vendor/jquery.appear.js') }}"></script>
	<script src="{{ URL::asset('vendor/jquery.stellar.min.js') }}"></script>
	<script src="{{ URL::asset('vendor/jquery.countTo.js') }}"></script>

	<!-- Newsletter Form -->
	<script src="{{ URL::asset('vendor/jquery.validate.js') }}"></script>
	<script src="{{ URL::asset('js/newsletter.js') }}"></script>

	<script src="{{ URL::asset('js/custom.js') }}"></script>
	

	<!-- Google Map -->
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="{{ URL::asset('vendor/jquery.gmap3.min.js') }}"></script>
	<script src="{{ URL::asset('js/map.load.js') }}"></script>
	<script src="{{ URL::asset('js/parsley.js') }}"></script>
	<script src="{{ URL::asset('js/formhandler.js') }}"></script>
	<!-- Google Map Init-->
	<script type="text/javascript">
	jQuery(function($){

		$('a[title]').tooltip(); 
	});
	</script>


	
</body>
</html>