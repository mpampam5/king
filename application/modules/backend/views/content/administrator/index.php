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
													<th>Username</th>
                          <th>Level</th>
													<th>Status</th>
                          <th class="text-center">#</th>
												</tr>
											</thead>

											<tbody>
                        <?php foreach ($row->result() as $row): ?>
												<tr>
													<td><?=$row->nama?></td>
													<td><?=$row->telepon?></td>
													<td><?=$row->email?></td>
													<td><?=$row->username?></td>
                          <td><?=$row->level?></td>
													<td><?=$row->is_active?></td>
                          <td class="text-center">
                            <a href="#" class="text-info"> <i class="fas fa-file"></i> Detail</a>&nbsp;
                            <a href="#" class="text-warning"> <i class="fas fa-pen-square"></i> Edit</a>&nbsp;
                            <a href="#" class="text-danger"> <i class="fas fa-trash-alt"></i> Hapus</a>
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
    dom: '<"row"<"col-lg-6"l><"col-lg-6"f>><"table-responsive"t>p'
  });

};

$(function() {
  datatableInit();
});

}).apply(this, [jQuery]);
</script>
