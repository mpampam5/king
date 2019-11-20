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
					<li><span>List</span></li>
				</ol>
        <a class="sidebar-right-toggle" data-open="sidebar-right"></a>
				</div>
			</header>

					<!-- start: page -->

      <div class="row">
        <div class="col">
          <a href="<?=site_url("backend/administrator/add")?>" class="btn btn-sm btn-success mb-2"><i class="fas fa-plus"></i> Tambah</a>
          <section class="card">
            <div class="card-body">

                  <table class="table table-bordered table-striped mb-0" id="table">
											<thead>
												<tr>
													<th>Nama</th>
													<th>Telepon</th>
													<th>Email</th>
                          <th class="text-center">Level</th>
													<th class="text-center">Status</th>
                          <th class="text-center">#</th>
												</tr>
											</thead>

											<tbody>
                        <?php foreach ($row->result() as $row): ?>
												<tr>
													<td><?=$row->nama?></td>
													<td><?=$row->telepon?></td>
													<td><?=$row->email?></td>
                          <td class="text-center"><?=$row->level?></td>
													<td class="text-center"><?=$row->is_active=="1"?'<span class="badge badge-success">Aktif</span>':'<span class="badge badge-danger">Nonaktif</span>'?></td>
                          <td class="text-center">
                            <a href="<?=site_url("backend/administrator/reset_password/".enc_uri($row->id_admin))?>" class="btn btn-xs btn-info"> <i class="fas fa-key"></i> Ganti Password</a>&nbsp;
                            <a href="<?=site_url("backend/administrator/update/".enc_uri($row->id_admin))?>" class="btn btn-xs btn-warning"> <i class="fas fa-pen-square"></i> Edit</a>&nbsp;
														<?php if (sess("id_admin")==$row->id_admin): ?>
															<button type="button" class="btn btn-xs btn-danger" disabled> <i class="fas fa-trash-alt"></i> Hapus</button>
															<?php else: ?>
																<a href="<?=site_url("backend/administrator/delete/".enc_uri("$row->id_admin"))?>" class="btn btn-xs btn-danger" id="delete"> <i class="fas fa-trash-alt"></i> Hapus</a>
														<?php endif; ?>
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
(function($) {

'use strict';

var datatableInit = function() {

  $('#table').dataTable({
    dom: '<"row"<"col-lg-6"l><"col-lg-6"f>><"table-responsive"t>p',
		ordering : false
  });

};

$(function() {
  datatableInit();
});

}).apply(this, [jQuery]);

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
              position: 'bottom-right',
              afterHidden: function () {
                  location.reload();
              }
            });
          }
        });
});

</script>
