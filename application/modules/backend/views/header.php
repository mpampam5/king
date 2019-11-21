<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title><?=$title?></title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?=base_url()?>_template/backend/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?=base_url()?>_template/backend/vendor/animate/animate.css">

		<link rel="stylesheet" href="<?=base_url()?>_template/backend/vendor/font-awesome/css/all.min.css" />
		<link rel="stylesheet" href="<?=base_url()?>_template/backend/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="<?=base_url()?>_template/backend/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />
		<link rel="stylesheet" href="<?=base_url()?>_template/backend/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?=base_url()?>_template/backend/css/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?=base_url()?>_template/backend/css/skins/default.css" />

		<link rel="stylesheet" href="<?=base_url()?>_template/backend/vendor/jquery-toast-plugin/jquery.toast.min.css">
		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?=base_url()?>_template/backend/css/custom.css">


		<!-- Head Libs -->
		<script src="<?=base_url()?>_template/backend/vendor/modernizr/modernizr.js"></script>
		<script src="<?=base_url()?>_template/backend/vendor/jquery/jquery.js"></script>
		<script src="<?=base_url()?>_template/backend/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="<?=base_url()?>_template/backend/vendor/popper/umd/popper.min.js"></script>
		<script src="<?=base_url()?>_template/backend/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="<?=base_url()?>_template/backend/vendor/jquery-toast-plugin/jquery.toast.min.js"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../2.2.0" class="logo">
						<img src="<?=base_url()?>_template/backend/img/logo.png" width="75" height="35" alt="Porto Admin" />
					</a>
					<div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fas fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>

				<!-- start: search & user box -->
				<div class="header-right">

					<span class="separator"></span>

					<ul class="notifications">
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fas fa-bell"></i>
								<span class="badge">3</span>
							</a>

							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="float-right badge badge-default">3</span>
									Alerts
								</div>

								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fas fa-thumbs-down bg-danger text-light"></i>
												</div>
												<span class="title">Server is Down!</span>
												<span class="message">Just now</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fas fa-lock bg-warning text-light"></i>
												</div>
												<span class="title">User Locked</span>
												<span class="message">15 minutes ago</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fas fa-signal bg-success text-light"></i>
												</div>
												<span class="title">Connection Restaured</span>
												<span class="message">10/10/2017</span>
											</a>
										</li>
									</ul>

									<hr />

									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
					</ul>

					<span class="separator"></span>

					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="<?=base_url()?>_template/backend/img/!logged-user.jpg" alt="Joseph Doe" class="rounded-circle" data-lock-picture="img/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">John Doe Junior</span>
								<span class="role">administrator</span>
							</div>

							<i class="fa custom-caret"></i>
						</a>

						<div class="dropdown-menu">
							<ul class="list-unstyled mb-2">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fas fa-user"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fas fa-lock"></i> Lock Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="<?=site_url("signout")?>"><i class="fas fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">

				    <div class="sidebar-header">
				        <div class="sidebar-title">
				            Navigation
				        </div>
				        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
				            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
				        </div>
				    </div>

				    <div class="nano">
				        <div class="nano-content">
				            <nav id="menu" class="nav-main" role="navigation">

				                <ul class="nav nav-main">
				                    <li>
				                        <a class="nav-link" href="<?=site_url("backend/home")?>">
				                            <i class="fas fa-home" aria-hidden="true"></i>
				                            <span>Dashboard</span>
				                        </a>
				                    </li>

														<li class="nav-parent">
				                        <a class="nav-link" href="#">
				                            <i class="fas fa-users" aria-hidden="true"></i>
				                            <span>Relawan Terdaftar</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a class="nav-link" href="extra-changelog.html">
																					<span class="float-right badge badge-primary">182</span>
				                                    Menunggu Verifikasi
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="extra-ajax-made-easy.html">
																					<span class="float-right badge badge-primary">182</span>
				                                    Terverifikasi
				                                </a>
				                            </li>
				                        </ul>
				                    </li>

														<li>
				                        <a class="nav-link" href="<?=site_url("backend/bantuan")?>">
				                            <i class="fas fa-handshake" aria-hidden="true"></i>
				                            <span>Bantuan Khusus</span>
				                        </a>
				                    </li>

				                    <li>
				                        <a class="nav-link" href="<?=site_url("backend/jadwal_acara")?>">
				                            <i class="fas fa-calendar" aria-hidden="true"></i>
				                            <span>Jadwal Acara</span>
				                        </a>
				                    </li>

														<li>
				                        <a class="nav-link" href="<?=site_url("backend/bantuan")?>">
				                            <i class="fas fa-receipt" aria-hidden="true"></i>
				                            <span>Kegiatan</span>
				                        </a>
				                    </li>

														<li>
				                        <a class="nav-link" href="mailbox-folder.html">
				                            <i class="fas fa-tasks" aria-hidden="true"></i>
				                            <span>Slider Dashboard</span>
				                        </a>
				                    </li>

														<li>
				                        <a class="nav-link" href="<?=site_url("backend/administrator")?>">
				                            <i class="fas fa-user-cog" aria-hidden="true"></i>
				                            <span>Administrator</span>
				                        </a>
				                    </li>

														<li>
				                        <a class="nav-link" href="mailbox-folder.html">
				                            <i class="fas fa-cogs" aria-hidden="true"></i>
				                            <span>Pengaturan</span>
				                        </a>
				                    </li>

														<li>
				                        <a class="nav-link" href="mailbox-folder.html">
				                            <i class="fas fa-file-alt" aria-hidden="true"></i>
				                            <span>Log Activity Admin</span>
				                        </a>
				                    </li>
				                </ul>
				            </nav>
				        </div>
				    </div>
				</aside>
				<!-- end: sidebar -->
