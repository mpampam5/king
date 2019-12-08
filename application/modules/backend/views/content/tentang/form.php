<!-- <link rel="stylesheet" href="<?=base_url()?>_template/backend/vendor/summernote/summernote-bs4.css" /> -->

<section role="main" class="content-body">
		<header class="page-header">
			<h2>Tentang JPKP</h2>
			<div class="right-wrapper text-right">
				<ol class="breadcrumbs">
					<li>
						<a href="<?=site_url("backend/home")?>">
							<i class="fas fa-home"></i>
						</a>
					</li>
					<li><span>Tentang JPKP</span></li>
					<li><span>Form <?=ucfirst($button)?> <?=$title?></span></li>
				</ol>
        <a class="sidebar-right-toggle" data-open="sidebar-right"></a>
				</div>
			</header>

					<!-- start: page -->

<div class="row">
  <div class="col">
      <section class="card">
        <div class="card-body">
          <form action="<?=$action?>" autocomplete="off" id="form">
            <div class="form-group">
              <label id="keterangan"><?=$title?></label>
              <textarea name="keterangan" id="textarea" class="" rows="8" cols="80"><?=$keterangan?></textarea>
            </div>


          <div class="mt-4">
            <a href="<?=site_url("backend/tentang")?>" class="btn btn-sm btn-default"> Batal</a>
            <button type="submit" class="btn btn-primary btn-sm" id="submit" name="submit"><?=$button=="tambah"?"Tambahkan":"Edit"?></button>
          </div>

          </form>
        </div>
      </section>
  </div>
</div>
	<!-- end: page -->
</section>

<script src="<?=base_url()?>_template/backend/vendor/tinymce/tinymce.min.js"></script>

<script type="text/javascript">
tinymce.init({
  selector: "#textarea",
  editor_deselector : "mceNoEditor",
  skin: "lightgray",
  plugins: [
    "advlist autolink link image lists charmap print preview hr anchor pagebreak",
    "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
    "table contextmenu directionality emoticons paste textcolor responsivefilemanager",
    "code youtube autoresize codemirror codesample"
  ],
  menubar : false,
  toolbar1: "undo redo | link unlink | bold italic underline | bullist numlist",
  image_advtab: true,
  fontsize_formats: "8px 10px 12px 14px 18px 24px 36px",
  relative_urls: false,
  remove_script_host: false,
  setup: function (editor) {
        editor.on('change', function () {
            tinymce.triggerSave();
        });
    }
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
