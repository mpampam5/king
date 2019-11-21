<section role="main" class="content-body">
		<header class="page-header">
			<h2>Jadwal Acara</h2>
			<div class="right-wrapper text-right">
				<ol class="breadcrumbs">
					<li>
						<a href="<?=site_url("backend/home")?>">
							<i class="fas fa-home"></i>
						</a>
					</li>
					<li><span>Jadwal Acara</span></li>
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
            <div class="row">
              <div class="col-sm-12 mb-3">
                <div class="form-group">
                  <label id="title">Title</label>
                  <input type="text" class="form-control" name="title" placeholder="">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
									<label>Tanggal</label>
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text">
													<i class="fas fa-calendar-alt"></i>
												</span>
											</span>
											<input type="text" data-plugin-datepicker=""  data-plugin-options="{ &quot;autoclose&quot;:true,&quot;orientation&quot;:&quot;left bottom&quot;}" class="form-control">
										</div>
								</div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
									<label>Jam</label>
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text">
													<i class="far fa-clock"></i>
												</span>
											</span>
											<input type="text" data-plugin-timepicker="" class="form-control" data-plugin-options="{&quot;defaultTime&quot;:false, &quot;showMeridian&quot;: false }">
										</div>
								</div>
              </div>

              <div class="col-sm-12 mt-3">
                <div class="form-group">
                  <label for="">Alamat</label>
                  <textarea class="form-control" name="name"  rows="4" cols="80"></textarea>
                </div>
              </div>


            <div class="col-sm-12 mt-4">
              <a href="<?=site_url("backend/bantuan")?>" class="btn btn-sm btn-default"> Batal</a>
              <button type="submit" class="btn btn-primary btn-sm" id="submit" name="submit"><?=$button=="tambah"?"Tambahkan":"Edit"?></button>
            </div>

        </div>
          </form>
        </div>
      </section>
  </div>
</div>
	<!-- end: page -->
</section>


<script type="text/javascript">
$(".datepicker").datepicker({
  orientation: "right bottom"
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
