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
		<link rel="stylesheet" href="<?=base_url()?>_template/backend/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?=base_url()?>_template/backend/vendor/animate/animate.css">

		<link rel="stylesheet" href="<?=base_url()?>_template/backend/vendor/font-awesome/css/all.min.css" />
		<link rel="stylesheet" href="<?=base_url()?>_template/backend/vendor/magnific-popup/magnific-popup.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?=base_url()?>_template/backend/css/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?=base_url()?>_template/backend/css/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?=base_url()?>_template/backend/css/custom.css">
		<link rel="stylesheet" href="<?=base_url()?>_template/backend/vendor/jquery-toast-plugin/jquery.toast.min.css">
		<!-- Head Libs -->
		<script src="<?=base_url()?>_template/backend/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo float-left">
					<img src="<?=base_url()?>_template/backend/img/logo-login.png" height="100%" width="100%" alt="Porto Admin" />
				</a>

				<div class="panel card-sign">
					<div class="card-title-sign mt-3 text-right">
						<h2 class="title text-uppercase font-weight-bold m-0"><i class="fas fa-user mr-1"></i> Sign In</h2>
					</div>
					<div class="card-body">
						<form action="<?=site_url("login/login/action")?>" id="form">
							<div class="form-group mb-3">
								<label class="float-left">Email</label><div id="email"></div>
								<div class="input-group">
									<input name="email" type="text" class="form-control form-control-md" />
									<span class="input-group-append">
										<span class="input-group-text">
											<i class="fas fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-3">
								<div class="clearfix">
									<label class="float-left">Password</label><div id="password"></div>
								</div>
								<div class="input-group">
									<input name="password" type="password" class="form-control form-control-md password" />
									<span class="input-group-append">
										<span class="input-group-text">
											<i class="fas fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<button type="submit" id="submit" class="btn btn-primary btn-block mt-2">Sign In</button>
								</div>
							</div>


						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-3 mb-3">&copy; Copyright <?=date("Y")?> <a href="https://ideadigitalindonesia.com" target="_blank">IDEA DIGITAL INDONESIA</a></p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="<?=base_url()?>_template/backend/vendor/jquery/jquery.js"></script>
		<script src="<?=base_url()?>_template/backend/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="<?=base_url()?>_template/backend/vendor/popper/umd/popper.min.js"></script>
		<script src="<?=base_url()?>_template/backend/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="<?=base_url()?>_template/backend/vendor/jquery-toast-plugin/jquery.toast.min.js"></script>
		<script src="<?=base_url()?>_template/backend/vendor/common/common.js"></script>
		<script src="<?=base_url()?>_template/backend/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="<?=base_url()?>_template/backend/vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="<?=base_url()?>_template/backend/vendor/jquery-placeholder/jquery.placeholder.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="<?=base_url()?>_template/backend/js/theme.js"></script>

		<!-- Theme Custom -->
		<script src="<?=base_url()?>_template/backend/js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="<?=base_url()?>_template/backend/js/theme.init.js"></script>

		<script type="text/javascript">
  $("#form").submit(function(e){
    e.preventDefault();
    var me = $(this);
    $('#submit').prop('disabled', true)
                 .html('<i class="fa fa-spinner fa-spin"></i>&nbsp;&nbsp;Loading...');
    $.ajax({
      url      : me.attr('action'),
      type     : 'POST',
      data     :me.serialize(),
      dataType : 'JSON',
      success:function(json){
       if (json.success==true) {
         if (json.valid==true) {
           window.location.href = json.url;
         }else {
           $(".password").val('');
           $('#submit').prop('disabled', false).text('Sign In');
           $.toast({
             // heading: 'Gagal Login',
             text: json.alert,
             showHideTransition: 'slide',
             icon: 'error',
             loaderBg: '#3e3e3e',
             position: 'top-center'
           });
           $('.text-danger').remove();
         }
       }else {
         $.each(json.alert, function(key, value) {
           var element = $('#' + key);
           $('#submit').prop('disabled', false).text('Sign In');
           $(element).find('.text-danger').remove();
           $(element).html(value);
         });
       }
     }
    });
  })
</script>
	</body>
</html>
