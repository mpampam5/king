<link rel="stylesheet" href="<?=base_url()?>_template/vendor/datatables/media/css/dataTables.bootstrap4.css" />
<script src="<?=base_url()?>_template/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>_template/vendor/datatables/media/js/dataTables.bootstrap4.min.js"></script>


<section role="main" class="content-body">
		<header class="page-header">
			<h2>Administrator</h2>
			<div class="right-wrapper text-right">
				<ol class="breadcrumbs">
					<li>
						<a href="<?=site_url("backend/home")?>">
							<i class="fas fa-home"></i>
						</a>
					</li>
					<li><span>Administrator</span></li>
					<li><span>Form <?=ucfirst($button)?></span></li>
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
              <label id="nama">Nama</label>
              <input type="text" class="form-control" name="nama" value="<?=$nama?>"  placeholder="">
            </div>

            <div class="form-group">
              <label id="telepon">Telepon</label>
              <input type="text" class="form-control" name="telepon" value="<?=$telepon?>"  placeholder="">
            </div>

            <div class="form-group">
              <label id="level">Level</label>
              <select class="form-control" name="level">
                <option value="">--pilih--</option>
                <option <?=$level=="admin"?"selected":""?> value="admin">Admin</option>
                <option <?=$level=="superadmin"?"selected":""?> value="superadmin">Superadmin</option>
              </select>
            </div>

						<div class="form-group">
              <label id="email">Email</label>
              <input type="text" class="form-control" name="email" value="<?=$email?>"  placeholder="">
            </div>

            <div class="form-group">
              <label id="password">Password</label>
              <input type="password" class="form-control" name="password" placeholder="">
            </div>

            <div class="form-group">
              <label id="is_active">Status Aktif</label>
              <select class="form-control"  name="is_active">
                <option value="">--pilih--</option>
                <option <?=$is_active=="1"?"selected":""?> value="1">Aktif</option>
                <option <?=$is_active=="0"?"selected":""?> value="0">Nonaktif</option>
              </select>
            </div>


          <div class="mt-4">
            <a href="<?=site_url("backend/administrator")?>" class="btn btn-sm btn-default"> Batal</a>
            <button type="submit" class="btn btn-primary btn-sm" id="submit" name="submit">Tambahkan</button>
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
							hideAfter: 5000,
              afterHidden: function () {
                  location.href="<?=site_url('backend/'.$this->uri->segment(2))?>";
              }
            });
        }else {
          $("#submit").prop('disabled',false)
                      .html('<?=$button=="tambah"?"Tambahkan":"Update"?>');
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
