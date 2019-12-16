<section role="main" class="content-body">
		<header class="page-header">
			<h2>Tentang JPKP</h2>
			<div class="right-wrapper text-right">
				<ol class="breadcrumbs">
					<li>
						<a href="<?=site_url("backend/home")?>">
							<i class="fas fa-home"></i>
						</a>
					</li>
					<li><span>Tentang JPKP</span></li>
					<li><span>Detail <?=$title?></span></li>
				</ol>
        <a class="sidebar-right-toggle"></a>
				</div>
			</header>

					<!-- start: page -->

<div class="row">
  <div class="col">
      <section class="card">
        <div class="card-body">
          <h5 class="card-title"><?=$title?></h5>
            <div class="mt-3">
              <?=$keterangan?>
            </div>


          <div class="mt-4">
            <a href="<?=site_url("backend/tentang")?>" class="btn btn-sm btn-default"> Kembali</a>
          </div>

        </div>
      </section>
  </div>
</div>
	<!-- end: page -->
</section>
