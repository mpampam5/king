

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Dashboard</h2>
						<!-- <div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="<?=site_url("backend/home")?>">
										<i class="fas fa-home"></i>
									</a>
								</li>
								<li><span>Pages</span></li>
								<li><span>Blank Page</span></li>
							</ol>
              <a class="sidebar-right-toggle" data-open="sidebar-right"></a>
						</div> -->
					</header>

					<!-- start: page -->

          <div class="row">

						<div class="col-lg-12">
							<div class="row">
								<div class="col-xl-6">
									<section class="card card-featured-left card-featured-primary mb-3">
										<div class="card-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-primary">
														<i class="fas fa-users"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Relawan Terverifikasi</h4>
														<div class="info">
															<strong class="amount"><?=$terverifikasi?></strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase" href="<?=site_url("backend/relawan_terverifikasi")?>">(View All)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>


								<div class="col-xl-6">
									<section class="card card-featured-left card-featured-secondary">
										<div class="card-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-secondary">
														<i class="fas fa-users"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Relawan Menunggu Verifikasi</h4>
														<div class="info">
															<strong class="amount"><?=$belum_terverifikasi?></strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase" href="<?=site_url("backend/relawan_menunggu_verifikasi")?>">(View All)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
						</div>
					</div>



					<!-- end: page -->
				</section>
