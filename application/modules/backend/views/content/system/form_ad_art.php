<?php
  $path = "./_template/docs/AD-ART-JPKP.pdf";

  if (!file_exists($path)) {
    $docs = "";
  }else {
    $docs = $path;
  }
 ?>

<section role="main" class="content-body">
		<header class="page-header">
			<h2>Pengaturan System</h2>
			<div class="right-wrapper text-right">
				<ol class="breadcrumbs">
					<li>
						<a href="<?=site_url("backend/home")?>">
							<i class="fas fa-home"></i>
						</a>
					</li>
					<li><span>Pengaturan System</span></li>
					<li><span>Upload AD/ART</span></li>
				</ol>
        <a class="sidebar-right-toggle" data-open="sidebar-right"></a>
				</div>
			</header>

					<!-- start: page -->

      <div class="row">
        <div class="col-md-6 mx-auto">
          <section class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Upload AD/ART</h5>
              <hr>
                <div class="text-center">
                      <input type="file" name="foto_personal" id="upload-foto" class="file-upload-default" accept="application/pdf" style="display:none;">
                      <button type="button" class="btn btn-primary btn-md" id="btn-upload-foto" name="button"><i class="fas fa-cloud-upload-alt"></i> Upload Berkas</button><br>
                      <div id="act">
                        <?php if ($docs!=""): ?>
                          <a href="<?=site_url("backend/system_setting/download_ad_art")?>" class="btn btn-success btn-md mt-3" ><i class="fas fa-cloud-download-alt"></i> Download Berkas</a><br>
                          <a href="<?=site_url("backend/system_setting/delete_ad_art")?>" id="delete" class="btn btn-danger btn-md mt-3"><i class="fas fa-trash-alt"></i> Hapus Berkas</a>
                        <?php endif; ?>
                      </div>
                </div>

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
          $("#btn-upload-foto").html('<div class="spinner-border spinner-border-sm text-white"></div> loading');

          form_data.append('foto_personal', file_data);

          $.ajax({
              url: '<?=site_url("backend/system_setting/do_upload")?>',
              dataType: 'json',
              cache: false,
              contentType: false,
              processData: false,
              data: form_data,
              type: 'post',
              success: function(json){
                if (json.success==true) {
                  button.html('<i class="fas fa-cloud-upload-alt"></i> Upload Berkas');
                  $.toast({
                    text: json.alert,
                    showHideTransition: 'slide',
                    icon: json.header_alert,
                    loaderBg: '#f96868',
                    position: 'bottom-right',
                  });

                  $("#act").hide().fadeIn(600).html(`
                    <a href="<?=site_url("backend/system_setting/download_ad_art")?>" class="btn btn-success btn-md mt-3" ><i class="fas fa-cloud-download-alt"></i> Download Berkas</a><br>
                    <a href="<?=site_url("backend/system_setting/delete_ad_art")?>" id="delete" class="btn btn-danger btn-md mt-3"><i class="fas fa-trash-alt"></i> Hapus Berkas</a>`);

                }else {
                  button.html('<i class="fas fa-cloud-upload-alt"></i> Upload Berkas');
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




  $(document).on("click","#delete",function(e){
    e.preventDefault();
    $('.modal-dialog').removeClass('modal-lg')
                      .removeClass('modal-md')
                      .addClass('modal-sm');
    $("#modalTitle").text('Please Confirm');
    $('#modalContent').html(`<p>Are you sure you want to delete?</p>
  														<button type='button' class='btn btn-default btn-sm' data-dismiss='modal'>Cancel</button>
  	                          <button type='button' class='btn btn-primary btn-sm' id='ya-hapus' data-id=`+$(this).attr('alt')+`  data-url=`+$(this).attr('href')+`>Yes, i'm sure</button>
  														`);
    $("#modalGue").modal('show');
  });


  $(document).on('click','#ya-hapus',function(e){
    $(this).prop('disabled',true)
            .text('Processing...');
    $.ajax({
            url:$(this).data('url'),
            type:'post',
            cache:false,
            dataType:'json',
            success:function(json){
              $('#modalGue').modal('hide');
              $.toast({
                text: json.alert,
                showHideTransition: 'slide',
                icon: json.alert_header,
                loaderBg: '#f96868',
                position: 'bottom-right'
              });
              $("#act").fadeOut(500).html("");
            }
          });
  });


</script>
