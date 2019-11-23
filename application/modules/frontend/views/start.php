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
      left: 27%;
    }

    .btn-red{
      background-color: #f01111!important;
    }

    /* .logo img{
      width: 150px;
      height: 150px;
    } */

  </style>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid bg-white p-0">
      <div class="logo">
        <img src="<?=base_url()?>_template/logo150x150.png" alt="">
      </div>

        <div class="red-bg">
          <h4>Siapkah anda</h4>
          <h5>menjadi relawan</h5>
          <h2>JPKP?</h2>
          <p class="mt-3">Klik REGISTER untuk mendaftar, <br> dan selamat datang untuk anda <br> yang telah bergabung bersama kami.</p>
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
</body>
</html>
