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

    /* .logo img{
      width: 150px;
      height: 150px;
    } */

  </style>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid bg-white p-0">


        <div class="red-bg">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <form class="" action="index.html" method="post">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text text-danger bg-white"><i class="ti ti-user"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Email" aria-label="Email">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text text-danger bg-white"><i class="ti ti-lock"></i></span>
                    </div>
                    <input type="password" class="form-control" placeholder="Password" aria-label="Password">
                  </div>
                </div>

                <span class="text-white">Lupa password?</span><br>
                <span class="text-white"><a href="" class="text-white">Klik RESET password</a></span>

                <div class="text-center mt-5">
                  <a href="#" class="btn btn-lg btn-danger bg-white text-danger">LOG IN</a>
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
  <script src="<?=base_url()?>_template/frontend/js/template.js"></script>
  <script src="<?=base_url()?>_template/frontend/js/settings.js"></script>
  <script src="<?=base_url()?>_template/frontend/js/todolist.js"></script>
  <!-- endinject -->
</body>
</html>
