<section role="main" class="content-body">
		<header class="page-header">
			<h2>Form Reset Password</h2>
			<div class="right-wrapper text-right">
				<ol class="breadcrumbs">
					<li>
						<a href="<?=site_url("backend/home")?>">
							<i class="fas fa-home"></i>
						</a>
					</li>
					<li><span>Form Reset Password</span></li>
				</ol>
        <a class="sidebar-right-toggle" ></a>
				</div>
			</header>

					<!-- start: page -->

          <div class="row">
            <div class="col-sm-8 mx-auto">
              <section class="card">
                <div class="card-body">
                  <h5 class="text-center card-title">Form Reset Password</h5>
                  <hr>

                  <form class="" action="<?=site_url("backend/profile/reset_password_action")?>" id="form" autocomplete="off">
                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="text" class="form-control" readonly value="<?=profile_admin("email")?>">
                    </div>


                    <div class="form-group">
                      <label for="">Password Lama</label>
                      <input type="password" class="form-control" id="password_lama" name="password_lama" placeholder="Masukkan Password lama">
                    </div>


                    <div class="form-group">
                      <label for="">Password Baru</label>
                      <input type="password" class="form-control" id="password_baru" name="password_baru" placeholder="Masukkan Password baru">
                    </div>

                    <div class="form-group">
                      <label for="">Konfirmasi Password Baru</label>
                      <input type="password" class="form-control" id="konfirmasi_password" name="konfirmasi_password" placeholder="Konformasi Password baru">
                    </div>


                    <div class="mt-3 text-center">
                      <button type="submit" id="submit" class="btn btn-sm btn-primary" name="button">Reset Password</button>
                    </div>

                  </form>


                </div>
              </section>
            </div>
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
							hideAfter: 3000
            });
            $('#form')[0].reset();
            $('.form-group .text-danger').remove();
            $("#submit").prop('disabled',false)
                        .html('Reset Password');
        }else {
          $("#submit").prop('disabled',false)
                      .html('Reset Password');
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
