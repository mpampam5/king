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
        <a class="sidebar-right-toggle"></a>
				</div>
			</header>

					<!-- start: page -->

      <div class="row">
        <div class="col-md-10 mx-auto">
          <section class="card">
            <div class="card-body">

                  <table class="table table-bordered table-striped mb-0" id="table">
											<thead>
												<tr>
													<th>No</th>
													<th>Title</th>
                          <th class="text-center">#</th>
												</tr>
											</thead>

                      <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($row as $row): ?>

                        <tr>
                          <td><?=$no++?></td>
                          <td><?=$row->title?></td>
                          <td class="text-center">
                            <a href="<?=site_url("backend/tentang/detail/$row->slug")?>" class="btn btn-xs btn-primary"><i class="fas fa-file"></i> Detail</a>
                            <a href="<?=site_url("backend/tentang/edit/$row->slug")?>" class="btn btn-xs btn-warning"><i class="fas fa-pen-square"></i> Edit</a>&nbsp;
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
