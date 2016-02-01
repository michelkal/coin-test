<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Find local artisans with ease</title>
	<meta name="description" content="Find a local artisan close to you to help solve your problem quickly">
	<meta name="author" content="Michel Kalavanda || www.michelkal.com">


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
	<link rel="stylesheet" href="{{ URL::asset('css/jquery-ui.css') }}">


	<!-- Theme CSS-->
	<link rel="stylesheet" href="{{ URL::asset('css/theme.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/theme-elements.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/animate.min.css') }}">


	<!-- Head Libs -->
	<script type="text/javascript" src="{{ URL::asset('vendor/modernizr.js') }}"></script>

	
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="{{ URL::asset('images/favicons/favicon.ico') }}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('images/favicons/favicon-120.png') }}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('images/favicons/favicon-152.png') }}">
	
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
							<a href="/"><img src="images/artisan_small.png" alt="Handyman"></a>
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
											<li class="active"><a href="job-professionals.html">Professionals</a></li>
											<li><a href="job-dashboard.html">Dashboard</a></li>
											<li><a href="job-profile.html">Profile</a></li>
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
								<form class="job_filters">

									<div class="search_jobs">
										<div class="search_keywords">
											<label for="search_keywords">Keywords</label>
											<input type="text" name="search_keywords" id="search_keywords" placeholder="All Professionals" class="form-control" value="" />
										</div>

										<div class="search_location">
											<label for="search_location">Location</label>
											<input type="text" name="search_location" id="search_location" placeholder="Any Location" class="form-control" value="" />
										</div>

										<div class="search_submit">
											<label>Submit</label>
											<button class="btn btn-block btn-primary"><i class="fa fa-search"></i></button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</section>
				<!-- Page Heading / End -->

				<!-- Page Content -->
				<section class="page-content">
					<div class="container">

						<div class="col-md-8">
							<div class="job_listings">
								<ul class="job_listings">
									@if(!empty($data))
									@foreach($data as $userDetails)
									<li class="job_listing @if($userDetails->account_type != 'Basic')job_position_featured @endif">
										<a href="/view-artisan/{!! $userDetails->id !!}/{!! substr(strtolower($userDetails->location), 0, 3) !!}/{!! strtotime($userDetails->created_at) !!}">
											<div class="job_img">
												<img src="images/profiles/<?php if(empty($userDetails->profilePic)){ echo 'icon-profile.png'; }else{ echo $userDetails->profilePic; } ?>" alt="" class="company_logo">
											</div>
											<div class="position">
												<h3>@if($userDetails->full_name == "New User New User") Anonymous @else {!! $userDetails->full_name !!} @endif</h3>
												<div class="company">
													<strong>{!! $userDetails->skills !!}</strong>
												</div>
											</div>
											<div class="location">
												<i class="fa fa-location-arrow"></i> {!! $userDetails->location !!}
												<br>
												<br>
												<div class="rating-stars">

													<?php \Timer::stars($userDetails->id); ?>
												</div>
											</div>
											<ul class="meta">
												<li class="job-type">{!! $userDetails->jobTitle !!}</li>
												<li class="date">
													<small>Posted {!! \Timer::timeAgo(strtotime($userDetails->created_at)) !!}</small>
												</li>
											</ul>
										</a>
									</li>
									@endforeach
									@endif
								</ul>
							</div>

							<div class="spacer"></div>

							<div class="row">
								<div class="col-md-6 col-md-offset-3 text-center">
									<!-- <a class="btn btn-default btn-block" href="#">Load all Artisans</a> -->
									{!! $data->render() !!}
								</div>
							</div>
						</div>

						<aside class="sidebar col-md-4">
							<hr class="visible-sm visible-xs lg">
							<div class="box box__color-darken mb-30">
								<h4>Filter Search Result</h4>
								<div class="table-responsive">
									<table class="table table-striped business-hours">
										<tbody>
											<tr>
												<td><i class="fa fa-money"></i> <strong>N 5,000 - 15,000</strong></td>
												<td><div class="checkbox checkbox__custom checkbox__style2">
													<label>
														<input type="checkbox" value="" checked="">
													</label>
												</div></td>
											</tr>
											<tr>
												<td><i class="fa fa-clock-o"></i> Monday</td>
												<td>9:00 - 18:00</td>
											</tr>
											<tr>
												<td><i class="fa fa-clock-o"></i> Tuesday</td>
												<td>9:00 - 18:00</td>
											</tr>
											<tr>
												<td><i class="fa fa-clock-o"></i> Wednesday</td>
												<td>9:00 - 18:00</td>
											</tr>
											<tr>
												<td><i class="fa fa-clock-o"></i> Thursday</td>
												<td>9:00 - 18:00</td>
											</tr>
											<tr>
												<td><i class="fa fa-clock-o"></i> Friday</td>
												<td>9:00 - 18:00</td>
											</tr>
											<tr>
												<td><i class="fa fa-clock-o"></i> Saturday</td>
												<td>12:00 - 16:00</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!-- Table (Bordered) / End -->
							</div>


						</aside>
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

											<form action="http://handyman.dan-fisher.com/php/newsletter-form.php" method="POST" id="newsletter-form">

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
				<!-- Footer / End -->

			</div>
			<!-- Main / End -->
		</div>






	<!-- Javascript Files
	================================================== -->
	<script type="text/javascript" src="{{ URL::asset('vendor/jquery-1.11.0.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('vendor/jquery-migrate-1.2.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('vendor/bootstrap.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('vendor/jquery.flexnav.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('vendor/jquery.hoverIntent.minified.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('vendor/jquery.flickrfeed.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('vendor/isotope/jquery.isotope.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('vendor/isotope/jquery.isotope.sloppy-masonry.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('vendor/isotope/jquery.imagesloaded.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('vendor/owl-carousel/owl.carousel.min.js') }}"></script>
	<script src="{{ URL::asset('vendor/flexslider/jquery.flexslider-min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('vendor/jquery.fitvids.js') }}"></script
	<script type="text/javascript" src="{{ URL::asset('vendor/jquery.appear.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('vendor/jquery.stellar.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('vendor/jquery.countTo.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/jquery-ui.min.js') }}"></script>

	<!-- Newsletter Form -->
	<script type="text/javascript" src="{{ URL::asset('vendor/jquery.validate.js') }}"></script>

	<script type="text/javascript" src="{{ URL::asset('js/notify.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/parsley.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/newsletter.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>

	<script>
	$(function()
	{
		$( "#search_keywords" ).autocomplete({
			source: "/autocomplete",
			minLength: 3,
			select: function(event, ui) {
				$('#search_keywords').val(ui.item.value);
			}
		});
	});

	/*Location*/
	$(function()
	{
		$( "#search_location" ).autocomplete({
			source: "/locationcomplete",
			minLength: 3,
			select: function(event, ui) {
				$('#search_location').val(ui.item.value);
			}
		});
	});
	</script>	
</body>
</html>