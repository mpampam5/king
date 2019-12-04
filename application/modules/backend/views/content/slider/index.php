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
					<li><span>Slider Dashboard</span></li>
					<li><span>List</span></li>
				</ol>
        <a class="sidebar-right-toggle" data-open="sidebar-right"></a>
				</div>
			</header>

					<!-- start: page -->

      <div class="row">
        <div class="col">
          <a href="<?=site_url("backend/slider/add")?>" class="btn btn-sm btn-success mb-2"><i class="fas fa-plus"></i> Tambah</a>
          <section class="card">
            <div class="card-body">

                  <table class="table table-bordered table-striped mb-0" id="table">
											<thead>
												<tr>
													<th>No</th>
													<th>image</th>
													<th>quotes</th>
                          <th class="text-center">#</th>
												</tr>
											</thead>

                      <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($row as $row): ?>

                        <tr>
                          <td><?=$no++?></td>
                          <td>
                            <a href="#"><i class="fas fa-file-image"></i> image</a>
                          </td>
                          <td><?=$row->quotes?></td>
                          <td class="text-center">
                            <a href="#" class="btn btn-xs btn-warning"><i class="fas fa-pen-square"></i> Edit</a>&nbsp;
                            <a href="#" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i> Hapus</a>
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
