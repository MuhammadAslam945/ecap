
<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>ECap Taxi Admin Panel</title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	
	<!--bootstrap -->
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/summernote.css')}}" rel="stylesheet">
	<!-- morris chart -->
	<link href="{{asset('assets/css/morris.css')}}" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->

	<link href="{{asset('assets/css/animate_page.css')}}" rel="stylesheet">
	<!-- Theme Styles -->
	<link href="{{asset('assets/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/theme-color.css')}}" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="images/favicon.ico" />
	<style>
	.fa-star{
	color:#eabb10;
	}
	.fa{
		color:black;
	}
	</style>
    @livewireStyle
</head>
<!-- END HEAD -->
<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-white">
	<div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo">
					<a href="index.html">
						<img alt="" src="../../assets/img/logo.png">
						<span class="logo-default">ECab</span> </a>
				</div>
				<!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler font-size-23"><i class="fa fa-bars"></i></a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-left in">
					<!-- start full screen button -->
					<li><a href="javascript:;" class="fullscreen-click font-size-20"><i
								class="fa fa-arrows-alt"></i></a></li>
					<!-- end full screen button -->
				</ul>
				<form class="search-form-opened" action="#" method="GET">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search..." name="query">
						<span class="input-group-btn search-btn">
							<a href="javascript:;" class="btn submit">
								<i class="fa fa-search"></i>
							</a>
						</span>
					</div>
				</form>
				<!-- start mobile menu -->
				<a href="javascript:;" class="menu-toggler responsive-toggler" data-bs-toggle="collapse"
					data-bs-target=".navbar-collapse">
					<span></span>
				</a>
				<!-- end mobile menu -->
				<!-- start header menu -->
				<div class="top-menu">
					<ul class="nav navbar-nav pull-right">
						<!-- start notification dropdown -->
						<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
							<a href="javascript:;" class="dropdown-toggle" data-bs-toggle="dropdown"
								data-hover="dropdown" data-close-others="true">
								<i class="fa fa-bell-o"></i>
								<span class="notify"></span>
								<span class="heartbeat"></span>
							</a>
							<ul class="dropdown-menu pullDown">
								<li class="external">
									<h3><span class="bold">Notifications</span></h3>
									<span class="notification-label purple-bgcolor">New 6</span>
								</li>
								<li>
									<ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
										<li>
											<a href="javascript:;">
												<span class="time">just now</span>
												<span class="details">
													<span
														class="notification-icon circle deepPink-bgcolor box-shadow-1"><i
															class="fa fa-check"></i></span> Congratulations!. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">3 mins</span>
												<span class="details">
													<span
														class="notification-icon circle purple-bgcolor box-shadow-1"><i
															class="fa fa-user o"></i></span>
													<b>John Micle </b>is now following you. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">7 mins</span>
												<span class="details">
													<span class="notification-icon circle blue-bgcolor box-shadow-1"><i
															class="fa fa-comments-o"></i></span>
													<b>Sneha Jogi </b>sent you a message. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">12 mins</span>
												<span class="details">
													<span class="notification-icon circle pink box-shadow-1"><i
															class="fa fa-heart"></i></span>
													<b>Ravi Patel </b>like your photo. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">15 mins</span>
												<span class="details">
													<span class="notification-icon circle yellow box-shadow-1"><i
															class="fa fa-warning"></i></span> Warning! </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">10 hrs</span>
												<span class="details">
													<span class="notification-icon circle red box-shadow-1"><i
															class="fa fa-times"></i></span> Application error. </span>
											</a>
										</li>
									</ul>
									<div class="dropdown-menu-footer">
										<a href="javascript:void(0)"> All notifications </a>
									</div>
								</li>
							</ul>
						</li>
						<!-- end notification dropdown -->
						<!-- start message dropdown -->
						<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
							<a href="javascript:;" class="dropdown-toggle" data-bs-toggle="dropdown"
								data-hover="dropdown" data-close-others="true">
								<i class="fa fa-envelope-o"></i>
								<span class="notify"></span>
								<span class="heartbeat"></span>
							</a>
							<ul class="dropdown-menu animated pullDown">
								<li class="external">
									<h3><span class="bold">Messages</span></h3>
									<span class="notification-label cyan-bgcolor">New 2</span>
								</li>
								<li>
									<ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
										<li>
											<a href="#">
												<span class="photo">
													<img src="../../assets/img/user/user2.jpg" class="img-circle"
														alt=""> </span>
												<span class="subject">
													<span class="from"> Sarah Smith </span>
													<span class="time">Just Now </span>
												</span>
												<span class="message"> Jatin I found you on LinkedIn... </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="../../assets/img/user/user3.jpg" class="img-circle"
														alt=""> </span>
												<span class="subject">
													<span class="from"> John Deo </span>
													<span class="time">16 mins </span>
												</span>
												<span class="message"> Fwd: Important Notice Regarding Your Domain
													Name... </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="../../assets/img/user/user1.jpg" class="img-circle"
														alt=""> </span>
												<span class="subject">
													<span class="from"> Rajesh </span>
													<span class="time">2 hrs </span>
												</span>
												<span class="message"> pls take a print of attachments. </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="../../assets/img/user/user8.jpg" class="img-circle"
														alt=""> </span>
												<span class="subject">
													<span class="from"> Lina Smith </span>
													<span class="time">40 mins </span>
												</span>
												<span class="message"> Apply for Ortho Surgeon </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="../../assets/img/user/user5.jpg" class="img-circle"
														alt=""> </span>
												<span class="subject">
													<span class="from"> Jacob Ryan </span>
													<span class="time">46 mins </span>
												</span>
												<span class="message"> Request for leave application. </span>
											</a>
										</li>
									</ul>
									<div class="dropdown-menu-footer">
										<a href="#"> All Messages </a>
									</div>
								</li>
							</ul>
						</li>
						<!-- end message dropdown -->
						<!-- start manage user dropdown -->
						<li class="dropdown dropdown-user">
							<a href="javascript:;" class="dropdown-toggle" data-bs-toggle="dropdown"
								data-hover="dropdown" data-close-others="true">
								<img alt="" class="img-circle " src="{{asset('assets/images/users')}}/{{Auth::user()->profile_photo_path}}" />
							</a>
							<ul class="dropdown-menu dropdown-menu-default animated jello">
								<li>
									<a href="{{route('admin.profile')}}">
										<i class="fa fa-user"></i> Profile </a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-cogs"></i> Settings
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-question-circle"></i> Help
									</a>
								</li>
								<li class="divider"> </li>
								<li>
									<a href="lock_screen.html">
										<i class="fa fa-lock"></i> Lock
									</a>
								</li>
								<li>
								<a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
										<i class="fa fa-sign-out"></i> Log Out </a>
                                            <form id="logout-form" method="POST" action="{{route('logout')}}">
                                         @csrf
                                         </form>
								</li>
							</ul>
						</li>
						<!-- end manage user dropdown -->
						<li class="dropdown dropdown-quick-sidebar-toggler">
							<a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right"
								data-upgraded=",MaterialButton">
								<i class="fa fa-ellipsis-v py-3"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end header -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll">
						<ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true"
							data-slide-speed="200">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>
							<li class="sidebar-user-panel">
								<div class="user-panel">
									<div class="pull-left image">
										<img src="{{asset('assets/images/users')}}/{{Auth::user()->profile_photo_path}}" class="img-circle user-img-circle"
											alt="User Image" />
									</div>
									<div class="pull-left info">
										<p> {{Auth::user()->name}}</p>
										<a title="Inbox" href="#"><i class="fa fa-envelope-o m-2 color-black"></i></a>
										<a title="Profile" href="{{route('admin.profile')}}"><i
												class="fa fa-user-o"></i></a>
												<a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" ><i
												class="fa fa-sign-out color-black"></i></a>
												<form id="logout-form" method="POST" action="{{route('logout')}}">
                                                 @csrf
                                                  </form>
									</div>
								</div>
							</li>
							
							<li class="nav-item active">
								<a href="#" class="nav-link nav-toggle">
									<i class="fa fa-tachometer"></i>
									<span class="title">Dashboard</span>
									<span class="arrow open"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item active">
										<a href="dashboard.html" class="nav-link ">
											<span class="title">Dashboard</span>
											<span class="selected"></span>
										</a>
									</li>
								
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i class="fa fa-tripadvisor"></i>
									<span class="title">Trip</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="{{route('admin.activetrip')}}" class="nav-link ">
											<span class="title">Active Trips</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('admin.completedtrip')}}" class="nav-link ">
											<span class="title">Completed Trips</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('admin.bookedtrip')}}" class="nav-link ">
											<span class="title">Booked Trips</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('admin.routemap')}}" class="nav-link ">
											<span class="title">Route Map</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i class="fa fa-drivers-license"></i>
									<span class="title">Drivers</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="{{route('admin.adddriver')}}" class="nav-link ">
											<span class="title">Add New Driver</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('admin.drivers')}}" class="nav-link ">
											<span class="title">All Drivers</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('admin.driverspayment')}}" class="nav-link ">
											<span class="title">Driver Payment</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="{{route('admin.allpassengers')}}" class="nav-link nav-toggle">
									<i class="fa fa-users"></i>
									<span class="title">All Passengers</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i class="fa fa-bus"></i>
									<span class="title">Vehicle</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="{{route('admin.addvehical')}}" class="nav-link ">
											<span class="title">Add Vehicle Details</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('admin.vehicallist')}}" class="nav-link ">
											<span class="title">View All Vehicle</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i class="fa fa-tag"></i>
									<span class="title">Coupons</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="{{route('admin.addcoupon')}}" class="nav-link ">
											<span class="title">Coupon Generation</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('admin.couponlist')}}" class="nav-link ">
											<span class="title">Coupon List</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i class="fa fa-ticket"></i>
									<span class="title">Fare Management</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="{{route('admin.addfare')}}" class="nav-link ">
											<span class="title">Add Fare</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{route('admin.farelist')}}" class="nav-link ">
											<span class="title">Fare List</span>
										</a>
									</li>
								</ul>
							</li>
							
							
						</ul>
					</div>
				</div>
			</div>
			<!-- end sidebar menu -->
			<!-- start page content -->
		{{$slot}}
			<!-- end chat sidebar -->
		</div>
		<!-- end page container -->
		<!-- start footer -->
		<div class="page-footer">
			<div class="page-footer-inner"> 2021 &copy; ECab Taxi Admin Template By
				<a href="" target="_top" class="makerCss">MA</a>
			</div>
			<div class="scroll-to-top">
				<i class="fa fa-arrow-up fa-2x"></i>
			</div>
		</div>
		<!-- end footer -->
	</div>
	
	<!-- start js include path -->
	
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/popper/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.blockui.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset('assets/js/sparkline-data.js')}}"></script>
	<!-- Common js-->
	<script src="{{asset('assets/js/app.js')}}"></script>
	<script src="{{asset('assets/js/layout.js')}}"></script>
	<script src="{{asset('assets/js/theme-color.js')}}"></script>
	<!-- material -->
	<script src="{{asset('assets/js/material.min.js')}}"></script>
	<!-- animation -->
	<script src="{{asset('assets/js/animations.js')}}"></script>
	<!-- morris chart -->
	<script src="{{asset('assets/js/morris.min.js')}}"></script>
	<script src="{{asset('assets/js/raphael-min.js')}}"></script>
	<script src="{{asset('assets/js/morris_home_data.js')}}"></script>
	<!-- google map -->
	<script src="{{asset('assets/js/modernizr.min.js')}}"></script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtPIcsjNx-GEuJDPmiXOVyB3G9k1eulX0&callback=initMap"
		async defer></script>
	<script src="{{asset('assets/js/gmap-home.js')}}"></script>
	<!-- end js include path -->
	
	<script src="https://use.fontawesome.com/0b84b2eea5.js"></script>
	@stack('scripts')
    @stack('js')
</body>

</html>