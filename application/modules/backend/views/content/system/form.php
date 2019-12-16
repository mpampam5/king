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
					<li><span>Edit System</span></li>
				</ol>
        <a class="sidebar-right-toggle"></a>
				</div>
			</header>

					<!-- start: page -->

      <div class="row">
        <div class="col-md-10 mx-auto">
          <section class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Form Edit System</h5>
              <hr>

              <form action="<?=site_url("backend/System_setting/action")?>" id="form" autocomplete="off">
                <div class="form-group">
                  <label for="">Title System</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Title System" value="<?=setting_system("title")?>">
                </div>

                <div class="form-group">
                  <label for="">Telepon (Whatsapp)</label><span class="text-primary" style="font-size:11px"> * example 852xxxx</span>
                  <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Masukkan Telepon" value="<?=setting_system("telepon")?>">
                </div>

                <div class="form-group">
                  <label for="">Email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email" value="<?=setting_system("email")?>">
                </div>

                <div class="form-group">
                  <label for="">Link Facebook Group</label><span class="text-primary" style="font-size:11px"> * example https://facebook.com/groups/xxxxxxxx</span>
                  <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Masukkan Link Facebook Group" value="<?=setting_system("facebook")?>">
                </div>

                <div class="form-group">
                  <label for="">Alamat</label>
                  <textarea name="alamat" id="alamat" rows="3" class="form-control" placeholder="Masukkan Alamat" cols="80"><?=setting_system("alamat")?></textarea>
                </div>


              <div class="mt-3 text-center">
                <a href="<?=site_url("backend/system_setting")?>" class="btn btn-sm btn-default"> Batal</a>
                <button type="submit" id="submit" class="btn btn-sm btn-primary" name="button">Update</button>
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
                      .html('Update');
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
