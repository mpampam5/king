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
          <form action="<?=$action?>" autocomplete="off">
            <div class="form-group">
              <label id="nama">Nama</label>
              <input type="text" class="form-control" name="nama" value="<?=$nama?>"  placeholder="">
            </div>

            <div class="form-group">
              <label id="telepon">Telepon</label>
              <input type="text" class="form-control" name="telepon" value="<?=$telepon?>"  placeholder="">
            </div>

            <div class="form-group">
              <label id="email">Email</label>
              <input type="text" class="form-control" name="email" value="<?=$email?>"  placeholder="">
            </div>

            <div class="form-group">
              <label id="level">Level</label>
              <select class="form-control" name="level">
                <option value="">--pilih--</option>
                <option value="admin">Admin</option>
                <option value="superadmin">Superadmin</option>
              </select>
            </div>

            <div class="form-group">
              <label id="username">Username</label>
              <input type="text" class="form-control" name="username" placeholder="">
            </div>

            <div class="form-group">
              <label id="password">Password</label>
              <input type="password" class="form-control" name="password" placeholder="">
            </div>

            <div class="form-group">
              <label id="is_active">Status Aktif</label>
              <select class="form-control"  name="is_active">
                <option value="">--pilih--</option>
                <option value="admin">Aktif</option>
                <option value="superadmin">Nonaktif</option>
              </select>
            </div>


          <div class="mt-4">
            <a href="#" class="btn btn-sm btn-default"> Batal</a>
            <button type="submit" class="btn btn-primary btn-sm" id="submit" name="submit">Tambahkan</button>
          </div>

          </form>
        </div>
      </section>
  </div>
</div>




	<!-- end: page -->
</section>
