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
					<li><span>Form Reset Password</span></li>
				</ol>
        <a class="sidebar-right-toggle" data-open="sidebar-right"></a>
				</div>
			</header>

					<!-- start: page -->

<div class="row">
  <div class="col-lg-6 mx-auto">
      <section class="card">
        <div class="card-body">
          <form action="<?=$action?>" autocomplete="off" id="form">


						<div class="form-group">
              <label id="email">Email</label>
              <input type="text" class="form-control" readonly value="<?=$email?>">
            </div>

	            <div class="form-group">
	              <label id="password">Password Baru</label>
	              <input type="password" class="form-control" name="password">
	            </div>



          <div class="mt-4">
            <a href="<?=site_url("backend/administrator")?>" class="btn btn-sm btn-default"> Batal</a>
            <button type="submit" class="btn btn-primary btn-sm" id="submit" name="submit">Reset Password</button>
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
