<div class="content-wrapper" style="margin-bottom:35px;">
  <div class="account">
    <div class="cover-account">
      <div class="overlay">
        <?php if (profile("foto")==""): ?>
          <div class="img-profile" id="imgprofile" style="background-image:url('<?=base_url()?>_template/avatar_default.jpg')">
            <?php else: ?>
          <div class="img-profile" id="imgprofile" style="background-image:url('<?=base_url()?>_template/profiles/thumbs/<?=profile('foto')?>')">
        <?php endif; ?>
            <input type="file" name="foto_personal" id="upload-foto" class="file-upload-default" accept="image/JPEG,image/PNG" style="display:none">
            <a href="#" id="btn-upload-foto"><i class="fas fa-camera"></i></a>
          </div>
        <span class="nama"><?=profile("nama")?></span>
        <span class="email"><?=profile("email")?></span>
      </div>
    </div>

    <p class="text-center pt-2" style="font-size:12px;"> <?=profile("struktur_pengurus")?></p>

    <div class="bg-white pt-3 pl-4 pr-4 pb-5 text-center">
      <?php if (profile("is_verifikasi")=="1"): ?>
        <label class="text-success" style="font-weight:bold"><i class="ti-check"></i> TERVERIFIKASI</label>
        <div class="form-group">
          <label for="">Nomor SK</label>
          <span class="badge badge-danger badge-pill w-100"> 0524/S/DPP-JPKP/VIII/2019/008</span>
        </div>

        <div class="form-group">
          <label for="">Status Jabatan Keanggotaan</label>
          <span class="badge badge-danger badge-pill w-100"> KETUA</span>
        </div>

        <div class="form-group">
          <label for="">Wilayah Keanggotaan</label>
          <span class="badge badge-danger badge-pill w-100"> SULAWESI SELATAN</span>
        </div>

         <a href="#" class="btn btn-primary btn-md"><i class="ti-download"></i> DOWNLOAD ID CARD</a>
        <?php else: ?>
        <label class="badge badge-warning mt-4" style="font-size:14px;color:#fff;font-weight:bold">BELUM TERVERIFIKASI</label>
      <?php endif; ?>
    </div>



  </div>
</div>


<script type="text/javascript">
$(function () {
    var fileupload = $("#upload-foto");
    var button = $("#btn-upload-foto");
    button.click(function () {
        fileupload.click();
    });
    fileupload.change(function () {
        var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
        // $("#data-info").text(fileName);

        var file_data = $('#upload-foto').prop('files')[0];
        var form_data = new FormData();
        $("#image-foto").val(fileName);


        form_data.append('foto_personal', file_data);

        $.ajax({
            url: '<?=base_url("frontend/account/do_upload/")?>',
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function(json){
              if (json.success==true) {
                // button.html('Upload');
                $.toast({
                  text: json.alert,
                  showHideTransition: 'slide',
                  icon: json.header_alert,
                  loaderBg: '#f96868',
                  position: 'bottom-center',
                });

                var imageUrl = "<?=base_url()?>_template/profiles/thumbs/"+json.file_name;
                $("#imgprofile").css("background-image", "url(" + imageUrl + ")");

              }else {
                // button.html('Upload');
                $.toast({
                  text: json.alert,
                  showHideTransition: 'slide',
                  icon: json.header_alert,
                  loaderBg: '#f96868',
                  position: 'bottom-center',
                });
              }
            }
        });

    });
});
</script>
