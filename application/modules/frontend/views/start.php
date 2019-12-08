<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Start Page</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?=base_url()?>_template/frontend/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?=base_url()?>_template/frontend/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?=base_url()?>_template/frontend/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?=base_url()?>_template/frontend/images/favicon.png" />


  <style media="screen">
    .red-bg{
      background-color: #f01111;
      padding: 40px 0 70px 20px;
      width: 100%;
      color:#fff;
    }

    .white-bg{
      padding-top: 150px;
      padding-bottom: 30px;
    }

    .logo{
      position: absolute;
      top: 230px;
      /* padding: auto; */
      text-align: center;
      width: 100%;
    }

    .btn-red{
      background-color: #f01111!important;
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

  </style>
</head>

<body>
  <div id="preloader"><div class="textload">Loading</div><div id="status"><div class="spinner"></div></div></div>
  <div class="container-scroller">
    <div class="container-fluid bg-white p-0" style="position:relative">


        <div class="red-bg">
          <h4>Siapkah anda</h4>
          <h5>menjadi relawan</h5>
          <h2>JPKP?</h2>
          <p class="mt-3">Klik REGISTER untuk mendaftar, <br> dan selamat datang untuk anda <br> yang telah bergabung bersama kami.</p>
        </div>

        <div class="logo">
          <img src="<?=base_url()?>_template/logo150x150.png" alt="">
        </div>

        <div class="white-bg text-center">
          <a href="<?=site_url("frontend/register")?>" class="btn btn-lg btn-danger btn-red">REGISTER</a>
          <br><br>
          <a href="<?=site_url("frontend/login")?>" class="btn btn-lg btn-danger btn-red">LOG IN</a>
        </div>

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
  </script>
</body>
</html>
