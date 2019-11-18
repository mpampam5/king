<!doctype html>
<html class="fixed">
	<head>

        <title>Sign in</title>
		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="relawan indonesia" />
		<meta name="description" content="Indonesia">
		<meta name="author" content="indonesia">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?=base_url()?>_template/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?=base_url()?>_template/vendor/animate/animate.css">

		<link rel="stylesheet" href="<?=base_url()?>_template/vendor/font-awesome/css/all.min.css" />
		<link rel="stylesheet" href="<?=base_url()?>_template/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="<?=base_url()?>_template/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?=base_url()?>_template/css/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?=base_url()?>_template/css/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?=base_url()?>_template/css/custom.css">

		<!-- Head Libs -->
		<script src="<?=base_url()?>_template/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo float-left">
					<img src="<?=base_url()?>_template/img/logo-login.png" height="100%" width="100%" alt="Porto Admin" />
				</a>

				<div class="panel card-sign">
					<div class="card-title-sign mt-3 text-right">
						<h2 class="title text-uppercase font-weight-bold m-0"><i class="fas fa-user mr-1"></i> Sign In</h2>
					</div>
					<div class="card-body">
						<form action="index.html" method="post">
							<div class="form-group mb-3">
								<label>Username</label>
								<div class="input-group">
									<input name="username" type="text" class="form-control form-control-lg" />
									<span class="input-group-append">
										<span class="input-group-text">
											<i class="fas fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-3">
								<div class="clearfix">
									<label class="float-left">Password</label>
								</div>
								<div class="input-group">
									<input name="pwd" type="password" class="form-control form-control-lg" />
									<span class="input-group-append">
										<span class="input-group-text">
											<i class="fas fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<button type="submit" class="btn btn-primary btn-block mt-2">Sign In</button>
								</div>
							</div>


						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-3 mb-3">&copy; Copyright <?=date("Y")?>. All Rights Reserved.</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="<?=base_url()?>_template/vendor/jquery/jquery.js"></script>
		<script src="<?=base_url()?>_template/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="<?=base_url()?>_template/vendor/popper/umd/popper.min.js"></script>
		<script src="<?=base_url()?>_template/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="<?=base_url()?>_template/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="<?=base_url()?>_template/vendor/common/common.js"></script>
		<script src="<?=base_url()?>_template/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="<?=base_url()?>_template/vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="<?=base_url()?>_template/vendor/jquery-placeholder/jquery.placeholder.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="<?=base_url()?>_template/js/theme.js"></script>

		<!-- Theme Custom -->
		<script src="<?=base_url()?>_template/js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="<?=base_url()?>_template/js/theme.init.js"></script>

	</body>
</html>
