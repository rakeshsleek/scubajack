<!DOCTYPE html>
<html>
    
<!-- Mirrored from dreamguys.co.in/smarthr/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Mar 2018 04:09:23 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <?php echo $this->template->meta; ?>
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <title>Dashboard - SCUBA JACK Admin</title>
       
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/theme/light/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/theme/light/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/theme/light/plugins/morris/morris.css">
		
		<link rel="stylesheet" href="<?php echo base_url();?>assets/theme/light/js/sweetalert/sweetalert.css">
		 <link rel="stylesheet" href="<?php echo base_url();?>assets/theme/light/js/summernote/summernote.css">

		<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/theme/light/css/dataTables.bootstrap.min.css"> -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/theme/light/css/select2.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/theme/light/css/style.css">


		<?php echo $this->template->stylesheet; ?>
	</head>
    <body>
        <div class="main-wrapper">
            <div class="header">
                <div class="header-left">
                    <a href="<?php echo base_url();?>" class="logo">
						<img src="<?php echo base_url();?>assets/theme/light/img/scuba-logo.png" width="64" height="44" alt="">
					</a>
                </div>
                <div class="page-title-box pull-left">
					<h3>SCUBA JACK</h3>
                </div>
				<a id="mobile_btn" class="mobile_btn pull-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
				<ul class="nav navbar-nav navbar-right user-menu pull-right">
					<li class="dropdown hidden-xs">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge bg-purple pull-right">3</span></a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span>Notifications</span>
							</div>
							<div class="drop-scroll">
								<ul class="media-list">
									<li class="media notification-message">
										<a href="activities.html">
											<div class="media-left">
												<span class="avatar">
													<img alt="John Doe" src="<?php echo base_url();?>assets/theme/light/img/user.jpg" class="img-responsive img-circle">
												</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
												<p class="m-0"><span class="notification-time">4 mins ago</span></p>
											</div>
										</a>
									</li>
									<li class="media notification-message">
										<a href="activities.html">
											<div class="media-left">
												<span class="avatar">V</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
												<p class="m-0"><span class="notification-time">6 mins ago</span></p>
											</div>
										</a>
									</li>
									<li class="media notification-message">
										<a href="activities.html">
											<div class="media-left">
												<span class="avatar">L</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
												<p class="m-0"><span class="notification-time">8 mins ago</span></p>
											</div>
										</a>
									</li>
									<li class="media notification-message">
										<a href="activities.html">
											<div class="media-left">
												<span class="avatar">G</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
												<p class="m-0"><span class="notification-time">12 mins ago</span></p>
											</div>
										</a>
									</li>
									<li class="media notification-message">
										<a href="activities.html">
											<div class="media-left">
												<span class="avatar">V</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
												<p class="m-0"><span class="notification-time">2 days ago</span></p>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="activities.html">View all Notifications</a>
							</div>
						</div>
					</li>
					<li class="dropdown hidden-xs">
						<a href="javascript:;" id="open_msg_box" class="hasnotifications"><i class="fa fa-comment-o"></i> <span class="badge bg-purple pull-right">8</span></a>
					</li>	
					<li class="dropdown">
						<a href="profile.html" class="dropdown-toggle user-link" data-toggle="dropdown" title="Admin">
							<span class="user-img"><img class="img-circle" src="<?php echo base_url();?>assets/theme/light/img/user.jpg" width="40" alt="Admin">
							<span class="status online"></span></span>
							<span>Admin</span>
							<i class="caret"></i>
						</a>
						<ul class="dropdown-menu">
							<!-- <li><a href="profile.html">My Profile</a></li>
							<li><a href="edit-profile.html">Edit Profile</a></li>
							<li><a href="settings.html">Settings</a></li> -->
                            <li><a href="<?php echo admin_url('resetpassword'); ?>">Reset Password</a></li>
							<li><a href="<?php echo base_url('admin-logout'); ?>">Logout</a></li>
						</ul>
					</li>
				</ul>
				<div class="dropdown mobile-user-menu pull-right">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<ul class="dropdown-menu pull-right">
						<li><a href="profile.html">My Profile</a></li>
						<li><a href="edit-profile.html">Edit Profile</a></li>
						<li><a href="settings.html">Settings</a></li>
						<li><a href="login.html">Logout</a></li>
					</ul>
				</div>
            </div>
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="active"> 
								<a href="<?php echo admin_url('dashboard');?>"><i class="fa fa-dashboard fw"></i> Dashboard</a>
							</li>
							<li class="submenu">
								<a href="#" class="noti-dot"><i class="fa fa-user fw"></i><span> Users</span> <span class="menu-arrow"></span></a>
								<ul class="list-unstyled" style="display: none;">
									<li><a href="<?php echo admin_url('users');?>"><i class="fa fa-double-angle-right"></i>Users</a></li>
<!--									<li><a href="--><?php //echo admin_url('users/create');?><!--">Add User</a></li>-->
									<!-- <li><a href="leaves.html"><span>Leave Requests</span> <span class="badge bg-primary pull-right">1</span></a></li>
									<li><a href="attendance.html">Attendance</a></li>
									<li><a href="departments.html">Departments</a></li>
									<li><a href="designations.html">Designations</a></li> -->
								</ul>
							</li>
							<li class="submenu">
								<a href="#" ><i class="fa fa-tags fw"></i><span> Catalog</span><span class="menu-arrow"></span></a>
								<ul class="list-unstyled" style="display: none;">
									<li><a href="javascript:void(0);">Products</a></li>
									<li><a href="<?php echo admin_url('category');?>">Categories</a></li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0);"><i class="fa fa-cog fw"></i> Settings</a>
							</li>
							<!-- <li> 
								<a href="<?php echo base_url('user');?>">Category</a>
							</li> -->
							
							
						</ul>
					</div>
                </div>
            </div>
            <div class="page-wrapper">
                
					 <?php echo $this->template->content; ?>
				
			</div>
        </div>
		<div class="sidebar-overlay" data-reff="#sidebar"></div>
       
	    <script type="text/javascript" src="<?php echo base_url();?>assets/theme/light/js/jquery-3.2.1.min.js" ></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/theme/light/js/bootstrap.min.js" ></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/theme/light/js/jquery.slimscroll.js" ></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/theme/light/plugins/morris/morris.min.js" ></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/theme/light/plugins/raphael/raphael-min.js" ></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/theme/light/js/app.js" ></script>

		<!-- <script type="text/javascript" src="<?php echo base_url();?>assets/theme/light/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/theme/light/js/dataTables.bootstrap.min.js"></script>
	 -->
		<script type="text/javascript" src="<?php echo base_url();?>assets/theme/light//js/select2.min.js"></script>

		<script type="text/javascript" src="<?php echo base_url();?>assets/theme/light/js/sweetalert/sweetalert.js" ></script>
		 <script type="text/javascript" src="<?php echo base_url();?>assets/theme/light/js/summernote/summernote.js" ></script>
		<!-- <script type="text/javascript" src="<?php echo base_url();?>assets/js/App.js" ></script> -->



		<?php echo $this->template->javascript; ?>
		<script>
				var data = [
			  { y: '2014', a: 50, b: 90},
			  { y: '2015', a: 65,  b: 75},
			  { y: '2016', a: 50,  b: 50},
			  { y: '2017', a: 75,  b: 60},
			  { y: '2018', a: 80,  b: 65},
			  { y: '2019', a: 90,  b: 70},
			  { y: '2020', a: 100, b: 75},
			  { y: '2021', a: 115, b: 75},
			  { y: '2022', a: 120, b: 85},
			  { y: '2023', a: 145, b: 85},
			  { y: '2024', a: 160, b: 95}
			],
			config = {
			  data: data,
			  xkey: 'y',
			  ykeys: ['a', 'b'],
			  labels: ['Total Income', 'Total Outcome'],
			  fillOpacity: 0.6,
			  hideHover: 'auto',
			  behaveLikeLine: true,
			  resize: true,
			  pointFillColors:['#ffffff'],
			  pointStrokeColors: ['black'],
				gridLineColor: '#eef0f2',
			  lineColors:['gray','orange']
		  };
		config.element = 'area-chart';
		Morris.Area(config);
		config.element = 'line-chart';
		Morris.Line(config);
		config.element = 'bar-chart';
		Morris.Bar(config);
		config.element = 'stacked';
		config.stacked = true;
		Morris.Bar(config);
		Morris.Donut({
		  element: 'pie-chart',
		  data: [
			{label: "Employees", value: 30},
			{label: "Clients", value: 15},
			{label: "Projects", value: 45},
			{label: "Tasks", value: 10}
		  ]
		});
		</script>
    </body>

<!-- Mirrored from dreamguys.co.in/smarthr/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Mar 2018 04:09:39 GMT -->
</html>