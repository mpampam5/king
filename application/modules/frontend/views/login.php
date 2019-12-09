<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?=base_url()?>_template/frontend/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?=base_url()?>_template/frontend/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?=base_url()?>_template/frontend/css/vertical-layout-light/style.css">
  <link rel="stylesheet" href="<?=base_url()?>_template/frontend/vendors/jquery-toast-plugin/jquery.toast.min.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?=base_url()?>_template/frontend/images/favicon.png" />


  <style media="screen">
    .red-bg{
      background-color: #f01111;
      padding: 40px 40px 20px 40px;;
      color:#fff;
    }

    /* .white-bg{
      padding-top: 150px;
      padding-bottom: 30px;
    } */

    .logo{
      margin: 10px 0 20px 0;
      text-align: center;
    }

    .btn-red{
      background-color: #f01111!important;
    }

    .peta{
      min-width: 300px;
      min-height: 150px;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-image: url("<?=base_url()?>_template/peta_indonesia.png");
    }

    *,
    *:before,
    *:after {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    :focus {
        outline: 0 !important
    }
    .fit-vids-style {
        display: none
    }
    figure {
        margin: 0;
        padding: 0;
    }
    figure img {
        height: auto;
        width: 100%;
        max-width: 100%;
    }
    iframe {
        border: none
    }
    ::selection {
        background: #cee2ef; /* Safari */
        color: #2f2f2f;
    }
    ::-moz-selection {
        background: #cee2ef; /* Firefox */
        color: #2f2f2f;
    }
    @-webkit-keyframes rotation {
    	from {
    	    -webkit-transform: rotate(0deg)
    	}
    	to {
    	    -webkit-transform: rotate(359deg)
    	}
    }
    @-moz-keyframes rotation {
    	from {
    	    -moz-transform: rotate(0deg)
    	}
    	to {
    	    -moz-transform: rotate(359deg)
    	}
    }
    @-o-keyframes rotation {
    	from {
    	    -o-transform: rotate(0deg)
    	}
    	to {
    	    -o-transform: rotate(359deg)
    	}
    }
    @keyframes rotation {
    	from {
    	    transform: rotate(0deg)
    	}
    	to {
    	    transform: rotate(359deg)
    	}
    }
    #preloader {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #f9f9f9;
        z-index: 9999999;
    }
    #status {
        width: 40px;
        height: 40px;
        position: absolute;
        left: 50%;
        top: 50%;
        margin: -20px 0 0 -20px;
    }
    .spinner {
        height: 40px;
        width: 40px;
        position: relative;
        -webkit-animation: rotation .8s infinite linear;
        -moz-animation: rotation .8s infinite linear;
        -o-animation: rotation .8s infinite linear;
        animation: rotation .8s infinite linear;
        border-left: 3px solid rgba(210, 113, 113, 0.15);
        border-right: 3px solid rgba(255, 0, 0, 0.15);
        border-bottom: 3px solid rgba(210, 113, 113, 0.15);
        border-top: 3px solid rgba(210, 113, 113, 0.8);
        border-radius: 100%;
    }
    #preloader .textload {
    	width: 100%;
    	position: absolute;
    	top: calc(50% + 30px);
    	left: 0;
    	text-transform: uppercase;
    	text-align: center;
    	color: #d27171;
    	font-family: 'Montserrat', sans-serif;
    }

    /* .logo img{
      width: 150px;
      height: 150px;
    } */
    .input-group-prepend .input-group-text{
        background-color: #ffffff!important;
        color:#ff0000!important;
    }

    .form-control:focus{
      border: 1px solid #ff0000!important;
      /* border-left: none!important; */
    }

    /* .form-control:focus .input-group-prepend .input-group-text{
      border: 1px solid #ff0000!important;
      background-color: #ff0000!important;
    } */

  </style>
</head>

<body>
  <div id="preloader"><div class="textload">Loading</div><div id="status"><div class="spinner"></div></div></div>
  <div class="container-scroller">
    <div class="container-fluid bg-white p-0">


        <div class="red-bg">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <?=$this->session->flashdata("reg_success"); ?>

              <form class="" action="<?=site_url("frontend/login/action")?>" id="form" autocomplete="off">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ti ti-user"></i></span>
                    </div>
                    <input type="text" class="form-control" name="email" placeholder="Email" aria-label="Email">
                  </div>
                  <div id="email"></div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ti ti-lock"></i></span>
                    </div>
                    <input type="password" class="form-control password" name="password" placeholder="Password" aria-label="Password">
                  </div>
                  <div id="password"></div>
                </div>


                <p class="text-center mt-3">
                  <span><a href="" class="text-white">Lupa password?</a></span>
                </p>

                <div class="text-center mt-3">
                  <button type="submit" id="submit" class="btn btn-lg btn-danger bg-white text-danger">LOG IN</button>
                  <p class="mb-3 mt-3">Belum Punya Akun ?</p>
                  <a href="<?=site_url("frontend/register")?>" class="btn btn-lg btn-danger bg-white text-danger">REGISTER</a>
                </div>


              </form>
            </div>
          </div>
        </div>

        <div class="logo">
          <img src="<?=base_url()?>_template/logo150x150.png" width="100"  height="100" alt="">
        </div>

        <div class="peta"></div>





      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?=base_url()?>_template/frontend/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?=base_url()?>_template/frontend/js/off-canvas.js"></script>
  <script src="<?=base_url()?>_template/frontend/js/hoverable-collapse.js"></script>
  <script src="<?=base_url()?>_template/frontend/vendors/jquery-toast-plugin/jquery.toast.min.js"></script>
  <script src="<?=base_url()?>_template/frontend/js/template.js"></script>
  <script src="<?=base_url()?>_template/frontend/js/settings.js"></script>
  <script src="<?=base_url()?>_template/frontend/js/todolist.js"></script>
  <!-- endinject -->

  <script type="text/javascript">
  (function($) {
    'use strict';

    $('#status').fadeOut();
    $('#preloader').delay(350).fadeOut('slow');
    $('#preloader .textload').delay(0).fadeOut('slow');
    $('body').delay(350).css({
        'overflow': 'visible'
    });

  })(jQuery);


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
           $('#submit').prop('disabled', false).text('LOG IN');
           $.toast({
             // heading: 'Gagal Login',
             text: json.alert,
             showHideTransition: 'slide',
             icon: 'error',
             loaderBg: '#ffc700',
             position: 'bottom-center'
           });
           $('.error.text-white').remove();
         }
       }else {
         $.each(json.alert, function(key, value) {
           var element = $('#' + key);
           $('#submit').prop('disabled', false).text('LOG IN');
           $(element).find('.error.text-white').remove();
           $(element).html(value);
         });
       }
     }
    });
  })

  </script>
</body>
</html>
