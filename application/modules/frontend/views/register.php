<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?=base_url()?>_template/frontend/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?=base_url()?>_template/frontend/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?=base_url()?>_template/frontend/css/vertical-layout-light/style.css">

  <link rel="stylesheet" href="<?=base_url()?>_template/frontend/css/vertical-layout-light/custom.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?=base_url()?>_template/frontend/images/favicon.png" />


  <style media="screen">
    .logo{
      position: absolute;
      top: 230px;
      left: 30%;
    }

    .btn-red{
      background-color: #f01111!important;
    }

    /* .navbar-brand{
      margin-left: 40px!important;
    } */





  </style>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid bg-white p-0">
      <!-- <div class="logo">
        <img src="<?=base_url()?>_template/logo150x150.png" alt="">
      </div> -->
      <nav class="navbar navbar-danger bg-danger">
        <a  class="navbar-brand" style="color:#fff;" href="<?=site_url("frontend/start")?>"><i class="ti ti-arrow-left"></i></a>
        <span class="navbar-brand mb-0 h4 text-center" style="color:#fff;position:absolute; left:30%;">FORM REGISTER</span>
      </nav>

      <div class="row pl-3 pr-3 pt-4 pb-5">
        <div class="col-lg-12">
          <form class="register" action="index.html" method="post">
            <div class="form-group">
              <select class="form-control" name="">
                <option value="">-- Pilih Struktur Kepengurusan --</option>
              </select>
            </div>


            <div class="form-group">
              <input type="text" class="form-control" id="" placeholder="Nama Lengkap">
            </div>

            <div class="form-group">
              <input type="text" class="form-control" id="" placeholder="NIK">
            </div>

            <div class="form-group">
              <input type="text" class="form-control" id="" placeholder="Tempat Lahir">
            </div>

            <div class="form-group">
              <input type="text" class="form-control" id="" placeholder="Tanggal Lahir">
            </div>

            <div class="form-group">
              <select class="form-control" name="jenis_kelamin">
                <option value=""> -- pilih jenis kelamin -- </option>
                <option value="pria">Pria</option>
                <option value="wanita">Wanita</option>
              </select>
            </div>

            <div class="form-group">
              <input type="text" class="form-control" id="" placeholder="Alamat Lengkap">
            </div>

            <div class="form-group">
              <input type="text" class="form-control" id="" placeholder="Provinsi">
            </div>

            <div class="form-group">
              <input type="text" class="form-control" id="" placeholder="Kabupaten/Kota">
            </div>

            <div class="form-group">
              <input type="text" class="form-control" id="" placeholder="Kecamatan">
            </div>

            <div class="form-group">
              <input type="text" class="form-control" id="" placeholder="Kelurahan/Desa">
            </div>

            <div class="form-group">
              <input type="text" class="form-control" id="" placeholder="No.Hp">
            </div>

            <div class="form-group">
              <input type="text" class="form-control" id="" placeholder="Email">
            </div>

            <div class="text-center">
              <img src="<?=base_url()?>_template/logo150x150.png" width="100" height="100" alt="">
              <p style="font-size:11px;margin-top:15px;line-height:12px;">
                Saya siap menjadi relawan JPKP dan siap mengemban amanah
                 sesuai syarat dan ketentuan yang berlaku di JPKP.<br>
                Saya juga siap menerima sanksi jika melanggar ketentuan yang berlaku.
              </p>
            </div>

            <div class="mt-4" style="padding:5px 5px 3px 17%;margin:10px;color:#eb2d04;">
              <div class="form-group">
                <div class="form-check form-check-danger">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Centang jika anda siap & setuju!
                  <i class="input-helper"></i></label>
                </div>
              </div>
            </div>


            <div class="text-center">
              <button type="submit" class="btn btn-danger btn-lg btn-red" name="button">REGISTER</button>
            </div>

          </form>
        </div>
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
