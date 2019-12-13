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
					<li><span>Pengaturan System</span></li>
				</ol>
        <a class="sidebar-right-toggle" data-open="sidebar-right"></a>
				</div>
			</header>

					<!-- start: page -->

      <div class="row">
        <div class="col-md-10 mx-auto">
          <section class="card">
            <div class="card-body">
              <a href="<?=site_url("backend/System_setting/edit_system")?>" class="edit-system btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></a>
              <table class="table-setting">
                <tr>
                  <th>Title System</th>
                  <td>: <span class="text-primary"><?=setting_system("title")?></span></td>
                </tr>

                <tr>
                  <th>Telepon/ Whatsapp</th>
                  <td>: +62<?=setting_system("telepon")?></td>
                </tr>

                <tr>
                  <th>Email</th>
                  <td>: <?=setting_system("email")?></td>
                </tr>

                <tr>
                  <th>Link Group Facebook</th>
                  <td>: <a href="<?=setting_system("facebook")?>" target="_blank"><?=setting_system("facebook")?></a></td>
                </tr>

                <tr>
                  <th>Alamat</th>
                  <td>: <?=setting_system("alamat")?></td>
                </tr>
              </table>
            </div>
          </section>
        </div>


        <div class="col-md-10 mt-3 mx-auto">
          <section class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-4">
                  <a href="<?=site_url("backend/system_setting/text_dashboard")?>" class="btn btn-md btn-primary btn-block"><i class="fas fa-file-alt"></i> Ubah Text Dashboard</a>
                </div>

                <div class="col-sm-4">
                  <a href="<?=site_url("backend/slider")?>" class="btn btn-md btn-success btn-block"><i class="fas fa-file-image"></i> Slider Dashboard</a>
                </div>

                <div class="col-sm-4">
                  <a href="<?=site_url("backend/system_setting/upload_berkas")?>" class="btn btn-md btn-danger btn-block"><i class="fas fa-upload"></i> Upload AD/ART</a>
                </div>

              </div>


            </div>
          </section>
        </div>





      </div>

	<!-- end: page -->
</section>
