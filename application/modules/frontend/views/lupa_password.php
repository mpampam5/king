<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Lupa Password</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?=base_url()?>_template/frontend/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?=base_url()?>_template/frontend/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?=base_url()?>_template/frontend/css/vertical-layout-light/style.css">

  <link rel="stylesheet" href="<?=base_url()?>_template/frontend/css/vertical-layout-light/custom.css">

  <link rel="stylesheet" href="<?=base_url()?>_template/frontend/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">

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

    .tanggal[readonly]{
      background-color: #fff!important;
    }

    .datepicker table{
      width: 100%!important;
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


  </style>
</head>

<body>
  <div id="preloader"><div class="textload">Loading</div><div id="status"><div class="spinner"></div></div></div>
  <div class="container-scroller">
    <div class="container-fluid bg-white p-0">
      <!-- <div class="logo">
        <img src="<?=base_url()?>_template/logo150x150.png" alt="">
      </div> -->
      <nav class="navbar navbar-danger" style="background:#ff0000">
        <a  class="navbar-brand" style="color:#fff;" href="<?=site_url("frontend/login")?>"><i class="ti ti-arrow-left"></i></a>
        <span class="navbar-brand mb-0 h4 text-center" style="color:#fff;position:absolute; left:25%;">FORM LUPA PASSWORD</span>
      </nav>

      <div class="row pl-3 pr-3 pt-4 pb-5">
        <div class="col-lg-12">
          <p class="text-center mb-3">
            Silahkan masukkan email yang terdaftar Atau silahkan menghubungi admin dengan melampirkan data anda untuk selanjutnya di verifikasi oleh admin.
          </p>
          <form class="register" action="<?=site_url("frontend/lupa_password/action")?>" id="form" autocomplete="off">


            <div class="form-group">
              <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email">
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-danger btn-lg btn-red" id="submit" name="button">Kirim Kode Reset Password</button>
            </div>


            <div class="alert"></div>

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
  <script src="<?=base_url()?>_template/frontend/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="<?=base_url()?>_template/frontend/js/template.js"></script>
  <script src="<?=base_url()?>_template/frontend/js/settings.js"></script>
  <script src="<?=base_url()?>_template/frontend/js/todolist.js"></script>

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
            $("#submit").prop('disabled',true).html('<div class="spinner-border spinner-border-sm text-white"></div> Loading...');
            $.ajax({
                  url             : me.attr('action'),
                  type            : 'post',
                  data            :  new FormData(this),
                  contentType     : false,
                  cache           : false,
                  dataType        : 'JSON',
                  processData     :false,
                  success:function(json){
                    if (json.success==true) {
                      $(".alert").hide().fadeIn(500).html('<label class="text-primary text-center mt-3">Permintaan anda berhasil di proses, silahkan cek email anda.</label>');
                      $("#submit").prop('disabled',false)
                                  .html('Kirim Kode Reset Password');
                      $("#email").val("");
                      $(".text-danger").remove();

                    }else {
                      $("#submit").prop('disabled',false)
                                  .html('Kirim Kode Reset Password');
                      $(".alert").html("");
                      $.each(json.alert, function(key, value) {
                        var element = $('#' + key);
                        $(element)
                        .closest('.form-group')
                        .find('.text-danger').remove();
                        $(element).after(value);
                      });
                    }
                  }
            });
            });

  </script>
  <!-- endinject -->
</body>

</html>
