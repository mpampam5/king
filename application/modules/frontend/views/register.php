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
        <a  class="navbar-brand" style="color:#fff;" href="<?=site_url("frontend/start")?>"><i class="ti ti-arrow-left"></i></a>
        <span class="navbar-brand mb-0 h4 text-center" style="color:#fff;position:absolute; left:30%;">FORM REGISTER</span>
      </nav>

      <div class="row pl-3 pr-3 pt-4 pb-5">
        <div class="col-lg-12">
          <form class="register" action="<?=site_url("frontend/register/action")?>" id="form" autocomplete="off">
            <div class="form-group">
              <select class="form-control" style="color:#424242" name="struktur_pengurus" id="struktur_pengurus">
                <option value="">-- Pilih Struktur Kepengurusan --</option>
                <?php foreach ($struktur_pengurus as $stk): ?>
                  <option value="<?=$stk->id_kepengurusan?>"><?=$stk->struktur_pengurus?></option>
                <?php endforeach; ?>
              </select>
            </div>


            <div class="form-group">
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
            </div>

            <div class="form-group">
              <input type="number" class="form-control" id="nik" name="nik" placeholder="NIK">
            </div>

            <div class="form-group">
              <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir">
            </div>

            <div class="form-group">
              <input type="text" class="form-control tanggal" readonly id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir">
            </div>

            <div class="form-group">
              <select class="form-control" style="color:#424242" name="jenis_kelamin" id="jenis_kelamin">
                <option value=""> -- pilih jenis kelamin -- </option>
                <option value="pria">Pria</option>
                <option value="wanita">Wanita</option>
              </select>
            </div>

            <div class="form-group">
              <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Lengkap">
            </div>

            <div class="form-group">
              <select class="form-control" style="color:#424242" name="provinsi" id="provinsi" onchange="loadKabupaten()">
                <option value="">-- Pilih Provinsi --</option>
                <?php foreach ($provinsi as $prov): ?>
                  <option value="<?=$prov->id?>"><?=$prov->name?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group">
              <select class="form-control" style="color:#424242" name="kabupaten" id="kabupaten" onChange='loadKecamatan()'>
                <option value="">-- Pilih Kabupaten/Kota --</option>
              </select>
            </div>

            <div class="form-group">
              <select class="form-control" style="color:#424242" name="kecamatan" id="kecamatan" onChange='loadKelurahan()'>
                <option value="">-- Pilih Kecamatan--</option>
              </select>
            </div>

            <div class="form-group">
              <select class="form-control" style="color:#424242" name="kelurahan" id="kelurahan">
                <option value="">-- Pilih Kelurahan/Desa--</option>
              </select>
            </div>

            <div class="form-group">
              <input type="number" class="form-control" id="telepon" name="telepon" placeholder="No.Hp">
            </div>

            <div class="form-group">
              <input type="text" class="form-control" id="email" name="email" placeholder="Email">
            </div>

            <div class="form-group">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>

            <div class="text-center">
              <img src="<?=base_url()?>_template/logo150x150.png" width="100" height="100" alt="">
              <p style="font-size:12px;margin-top:15px;line-height:12px;">
                Saya siap menjadi relawan JPKP dan siap mengemban amanah
                 sesuai syarat dan ketentuan yang berlaku di JPKP.<br>
                Saya juga siap menerima sanksi jika melanggar ketentuan yang berlaku.
              </p>
            </div>

            <div class="mt-4 ml-5" style="margin:10px;color:#eb2d04;">
              <div class="form-group">
                <div class="form-check form-check-danger">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" onclick="terms_changed(this)">
                    Centang jika anda siap & setuju!
                  <i class="input-helper"></i></label>
                </div>
              </div>
            </div>


            <div class="text-center">
              <button type="submit" class="btn btn-danger btn-lg btn-red" id="submit" disabled name="button">REGISTER</button>
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

  $(document).ready(function(){
  $('.tanggal').datepicker({
    format: 'dd-mm-yyyy',
    autoclose: true
  });
});


  function terms_changed(termsCheckBox){
  //If the checkbox has been checked
    if(termsCheckBox.checked){
        //Set the disabled property to FALSE and enable the button.
        document.getElementById("submit").disabled = false;
    } else{
        //Otherwise, disable the submit button.
        document.getElementById("submit").disabled = true;
    }
}


  function loadKabupaten()
          {
              var provinsi = $("#provinsi").val();
              if (provinsi!="") {
                $.ajax({
                    type:'GET',
                    url:"<?php echo base_url(); ?>frontend/register/kabupaten",
                    data:"id=" + provinsi,
                    success: function(html)
                    {
                       $("#kabupaten").html(html);
                       $("#kecamatan").html('<option value="">-- Pilih Kecamatan --</option>');
                       $("#kelurahan").html('<option value="">-- Pilih Kelurahan/desa --</option>');
                    }
                });
              }else {
                $("#kabupaten").html('<option value="">-- Pilih Kabupaten/Kota --</option>');
                $("#kecamatan").html('<option value="">-- Pilih Kecamatan --</option>');
                $("#kelurahan").html('<option value="">-- Pilih Kelurahan/desa --</option>');
              }
          }

          function loadKecamatan()
            {
                var kabupaten = $("#kabupaten").val();
                if (kabupaten!="") {
                  $.ajax({
                      type:'GET',
                      url:"<?php echo base_url(); ?>frontend/register/kecamatan",
                      data:"id=" + kabupaten,
                      success: function(html)
                      {
                          $("#kecamatan").html(html);
                          $("#kelurahan").html('<option value="">-- Pilih Kelurahan/desa --</option>');
                      }
                  });
                }else {
                  $("#kecamatan").html('<option value="">-- Pilih Kecamatan --</option>');
                  $("#kelurahan").html('<option value="">-- Pilih Kelurahan/desa --</option>');
                }

            }

            function loadKelurahan()
            {
                var kecamatan = $("#kecamatan").val();
                if (kecamatan!="") {
                  $.ajax({
                      type:'GET',
                      url:"<?php echo base_url(); ?>frontend/register/kelurahan",
                      data:"id=" + kecamatan,
                      success: function(html)
                      {
                          $("#kelurahan").html(html);
                      }
                  });
                }else {
                  $("#kelurahan").html('<option value="">-- Pilih Kelurahan/Desa --</option>');
                }
            }


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
                          location.href="<?=site_url('frontend/login')?>";
                    }else {
                      $("#submit").prop('disabled',false)
                                  .html('REGISTER');
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
