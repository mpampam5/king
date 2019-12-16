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
