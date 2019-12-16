<link rel="stylesheet" href="<?=base_url()?>_template/backend/vendor/datatables/media/css/dataTables.bootstrap4.css" />
<script src="<?=base_url()?>_template/backend/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>_template/backend/vendor/datatables/media/js/dataTables.bootstrap4.min.js"></script>


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
					<li><span>Pengaturan System</span></li>
					<li><span>Slider Dashboard</span></li>
					<li><span>List</span></li>
				</ol>
        <a class="sidebar-right-toggle"></a>
				</div>
			</header>

					<!-- start: page -->

      <div class="row">
        <div class="col">
					<a href="<?=site_url("backend/system_setting")?>" class="btn btn-sm btn-default mb-2"><i class="fas fa-cogs"></i> Pengaturan System</a>
          <a href="<?=site_url("backend/slider/add")?>" class="btn btn-sm btn-success mb-2"><i class="fas fa-plus"></i> Tambah</a>
          <section class="card">
            <div class="card-body">

                  <table class="table table-bordered table-striped mb-0" id="table">
											<thead>
												<tr>
													<th width="10">No</th>
													<th width="100">image</th>
													<th width="200">quotes</th>
                          <th width="150" class="text-center">#</th>
												</tr>
											</thead>

                      <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($row as $row): ?>

                        <tr>
                          <td><?=$no++?></td>
                          <td>
                            <a data-fancybox="gallery" class="image-popup-no-margins" href="<?=base_url()?>_template/files/<?=$row->image?>">

															<!-- <i class="fas fa-file-image"></i> image</a> -->
															<img class="img-fluid" src="<?=base_url()?>_template/files/<?=$row->image?>" width="75">
                          </td>
                          <td><?=$row->quotes?></td>
                          <td class="text-center">
                            <a href="<?=site_url("backend/slider/edit/".enc_uri($row->id_slider))?>" class="btn btn-xs btn-warning"><i class="fas fa-pen-square"></i> Edit</a>&nbsp;
                            <a href="<?=site_url("backend/slider/delete/".enc_uri($row->id_slider))?>" id="delete" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                      </tbody>
										</table>

            </div>
          </section>
      </div>
    </div>
	<!-- end: page -->
</section>


<script type="text/javascript">

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
						location.reload();
					}
				});
});
</script>
