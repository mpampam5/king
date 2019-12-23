<section role="main" class="content-body">
		<header class="page-header">
			<h2>Kegiatan</h2>
			<div class="right-wrapper text-right">
				<ol class="breadcrumbs">
					<li>
						<a href="<?=site_url("backend/home")?>">
							<i class="fas fa-home"></i>
						</a>
					</li>
					<li><span>Kegiatan</span></li>
					<li><span>Form <?=ucfirst($button)?></span></li>
				</ol>
        <a class="sidebar-right-toggle"></a>
				</div>
			</header>

					<!-- start: page -->

<div class="row">
  <div class="col">
      <section class="card">
        <div class="card-body">
          <form action="<?=$action?>" autocomplete="off" id="form">
            <div class="form-group">
              <label id="title">Title</label>
              <input type="text" class="form-control" name="title" value="<?=$title?>">
            </div>

            <div class="form-group">
              <label id="keterangan">Keterangan Kegiatan</label>
              <textarea name="keterangan" class="form-control" rows="10" cols="80"><?=$keterangan?></textarea>
            </div>

						<div class="form-group" id="foto">
            <label class="label-title" id="foto_personal">Image</label>
            <input type="file" name="foto_personal" id="upload-foto" class="file-upload-default" accept="image/JPEG,image/PNG" style="display:none;">
            <div class="input-group col-xs-12">
              <input type="text" name="foto_personal" id="image-foto" class="form-control file-upload-info" value="<?=$image?>"  readonly placeholder="No image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" id="btn-upload-foto" type="button"><i class="fas fa-file-image"></i>&nbsp;Upload</button>
								<button class="btn btn-default" id="btn-remove" type="button"><i class="fas fa-trash"></i>&nbsp;Remove</button>
              </span>
            </div>
          </div>

					<?php if ($button=="edit"): ?>
						<input type="hidden" name="foto_personal_lama" value="<?=$image?>">
					<?php endif; ?>

            <div class="form-group">
              <label id="link_terkait">Link Terkait</label>
              <input type="text" class="form-control" name="link_terkait" value="<?=$link_terkait?>" placeholder="example https://example.com/xxxxxxx">
            </div>


          <div class="mt-4">
            <a href="<?=site_url("backend/kegiatan")?>" class="btn btn-sm btn-default"> Batal</a>
            <button type="submit" class="btn btn-primary btn-sm" id="submit" name="submit"><?=$button=="tambah"?"Tambahkan":"Edit"?></button>
          </div>

          </form>
        </div>
      </section>
  </div>
</div>
	<!-- end: page -->
</section>


<script type="text/javascript">
$("#btn-remove").click(function(){
		$("#image-foto").val("");
});

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
          $("#btn-upload-foto").html('<div class="spinner-border spinner-border-sm text-white"></div>');

          form_data.append('foto_personal', file_data);

          $.ajax({
              url: '<?=site_url("backend/kegiatan/do_upload")?>',
              dataType: 'json',
              cache: false,
              contentType: false,
              processData: false,
              data: form_data,
              type: 'post',
              success: function(json){
                if (json.success==true) {
                  button.html('Upload');
                  $("#image-foto").val(json.file_name);
                  $("#foto .font-form").html('<a href="<?=base_url()."_template/files/"?>" data-fancybox="gallery" class="badge badge-success"><i class="fa fa-file"></i> Lihat file</a>');
                  $("#foto_personal")
                  .closest('.form-group')
                  .find('.error').remove();
                  $.toast({
                    text: json.alert,
                    showHideTransition: 'slide',
                    icon: json.header_alert,
                    loaderBg: '#f96868',
                    position: 'bottom-right',
                  });

                }else {
                  button.html('Upload');
                  $("#image-foto").val("");
                  $("#foto .font-form").text("Foto Wajah harus jelas (Format jpg & max size 1mb)");
                  $("#foto_personal")
                  .closest('.form-group')
                  .find('.error').remove();
                  $.toast({
                    text: json.alert,
                    showHideTransition: 'slide',
                    icon: json.header_alert,
                    loaderBg: '#f96868',
                    position: 'bottom-right',
                  });
                }
              }
          });

      });
  });


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
            $.toast({
              text: json.alert,
              showHideTransition: 'slide',
              icon: 'success',
              loaderBg: '#f96868',
              position: 'bottom-right',
							hideAfter: 3000,
              afterHidden: function () {
                  location.href="<?=site_url('backend/'.$this->uri->segment(2))?>";
              }
            });
        }else {
          $("#submit").prop('disabled',false)
                      .html('<?=$button=="tambah"?"Tambahkan":"Edit"?>');
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
