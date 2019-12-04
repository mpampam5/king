<section role="main" class="content-body">
		<header class="page-header">
			<h2>Slider Dashboard</h2>
			<div class="right-wrapper text-right">
				<ol class="breadcrumbs">
					<li>
						<a href="<?=site_url("backend/home")?>">
							<i class="fas fa-home"></i>
						</a>
					</li>
					<li><span>Slider Dashboard</span></li>
					<li><span>Form <?=ucfirst($button)?></span></li>
				</ol>
        <a class="sidebar-right-toggle" data-open="sidebar-right"></a>
				</div>
			</header>

					<!-- start: page -->

<div class="row">
  <div class="col-md-8 mx-auto">
      <section class="card">
        <div class="card-body">
          <form action="<?=$action?>" autocomplete="off" id="form">
            <div class="form-group" id="foto">
            <label class="label-title" id="foto_personal">Image</label>
            <input type="file" name="foto_personal" id="upload-foto" class="file-upload-default" accept="image/JPEG,image/PNG" style="display:none;">
            <div class="input-group col-xs-12">
              <input type="text" name="foto_personal" id="image-foto" class="form-control file-upload-info"  readonly placeholder="No image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" id="btn-upload-foto" type="button"><i class="fas fa-file-image"></i>&nbsp;Upload</button>
              </span>
            </div>

          </div>


            <div class="form-group">
              <label class="label-title" id="quotes">Quotes</label>
              <textarea name="quotes" class="form-control" rows="5" cols="80" placeholder="Quotes"><?=$quotes?></textarea>
            </div>


          <div class="mt-4">
            <a href="<?=site_url("backend/bantuan")?>" class="btn btn-sm btn-default"> Batal</a>
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
              url: '<?=site_url("backend/slider/do_upload")?>',
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
                    position: 'top-center',
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
                    position: 'top-center',
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
							hideAfter: 5000,
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
