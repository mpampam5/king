<section role="main" class="content-body">
		<header class="page-header">
			<h2>My Profile</h2>
			<div class="right-wrapper text-right">
				<ol class="breadcrumbs">
					<li>
						<a href="<?=site_url("backend/home")?>">
							<i class="fas fa-home"></i>
						</a>
					</li>
					<li><span>My Profile</span></li>
				</ol>
        <a class="sidebar-right-toggle" ></a>
				</div>
			</header>

					<!-- start: page -->

          <div class="row">
            <div class="col-sm-8 mx-auto">
              <section class="card">
                <div class="card-body">
                  <h5 class="text-center card-title">My Profile</h5>
                  <hr>

                  <table>
                    <tr>
                      <th>Nama</th>
                      <td>: <?=profile_admin("nama")?></td>
                    </tr>

                    <tr>
                      <th>Email</th>
                      <td>: <?=profile_admin("email")?></td>
                    </tr>

                    <tr>
                      <th>Level</th>
                      <td>: <?=profile_admin("level")?></td>
                    </tr>


                    <tr>
                      <th>IP Address</th>
                      <td>: <?=$this->input->ip_address();?></td>
                    </tr>


                    <tr>
                      <th>Platform</th>
                      <td>: <?=$this->agent->platform();?></td>
                    </tr>

                    <tr>
                      <th>Browser</th>
                      <td>: <?=$this->agent->browser();?> V.<?=$this->agent->version();?></td>
                    </tr>
                  </table>


                </div>
              </section>
            </div>
          </div>








      </div>

	<!-- end: page -->
</section>
