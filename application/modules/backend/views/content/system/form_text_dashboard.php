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
        <a class="sidebar-right-toggle" data-open="sidebar-right"></a>
				</div>
			</header>

					<!-- start: page -->

      <div class="row">
        <div class="col-md-10 mx-auto">
          <section class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Form Edit Text Dashboard</h5>
              <hr>

              <form action="<?=site_url("backend/System_setting/text_dashboard_action")?>" id="form" autocomplete="off">
                <div class="form-group">
                  <label for="">Text Top</label>
                  <textarea class="form-control" id="text_top" name="text_top" rows="9" cols="80"><?=setting_system("dashboard_tentang")?></textarea>
                </div>

                <div class="form-group">
                  <label for="">Text Bottom</label>
                  <textarea class="form-control" id="text_bottom" name="text_bottom" rows="9" cols="80"><?=setting_system("dashboard_tentang_footer")?></textarea>
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
