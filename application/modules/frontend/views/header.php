<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>jpkp</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?=base_url()?>_template/frontend/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?=base_url()?>_template/frontend/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?=base_url()?>_template/frontend/vendors/font-awesomes/css/all.min.css" />
  <link rel="stylesheet" href="<?=base_url()?>_template/frontend/css/vertical-layout-light/style.css">
  <link rel="stylesheet" href="<?=base_url()?>_template/frontend/css/vertical-layout-light/custom.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
  <!-- endinject -->
  <link rel="shortcut icon" href="<?=base_url()?>_template/frontend/images/favicon.png" />

  <link rel="stylesheet" href="<?=base_url()?>_template/frontend/vendors/jquery-toast-plugin/jquery.toast.min.css">

  <script src="<?=base_url()?>_template/frontend/vendors/js/vendor.bundle.base.js"></script>

  <script src="<?=base_url()?>_template/frontend/vendors/jquery-toast-plugin/jquery.toast.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</head>

<body>
  <div id="preloader"><div class="textload">Loading</div><div id="status"><div class="spinner"></div></div></div>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <button class="navbar-toggler navbar-toggler-left d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="ti-layout-grid2" style="color:#9b9b9b;"></span>
      </button>

      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="#">
          <img src="<?=base_url()?>_template/logo-header.png" alt="logo"/>
        </a>
        <a class="navbar-brand brand-logo-mini" href="#">
          <img src="<?=base_url()?>_template/logo-header.png" alt="logo"/>
        </a>
      </div>


      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <!-- <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-layout-grid2"></span>
        </button> -->

        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="ti-bell mx-0"></i>
              <?php if (rows_table("jadwal_acara") > 0 ||rows_table("kegiatan") > 0 || rows_table("bantuan_khusus") > 0): ?>
                <span class="count"></span>
              <?php endif; ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a  href="<?=site_url("frontend/jadwal_acara")?>" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="fas fa-calendar-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Jadwal Acara</h6>
                  <?php if (rows_table("jadwal_acara") > 0): ?>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Terdapat <?=rows_table("jadwal_acara")?> pembaharuan
                  </p>
                <?php endif; ?>
                </div>
              </a>
              <a href="<?=site_url("frontend/kegiatan")?>" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="fas fa-clipboard-list mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Kegiatan</h6>
                  <?php if (rows_table("kegiatan") > 0): ?>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Terdapat <?=rows_table("kegiatan")?> pembaharuan
                  </p>
                <?php endif; ?>
                </div>
              </a>
              <a href="<?=site_url("frontend/bantuan")?>" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="fas fa-hands-helping mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Bantuan Khusus</h6>
                  <?php if (rows_table("bantuan_khusus") > 0): ?>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Terdapat <?=rows_table("bantuan_khusus")?> pembaharuan
                  </p>
                <?php endif; ?>
                </div>
              </a>
            </div>
          </li>



        </ul>
        <!-- <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-layout-grid2"></span>
        </button> -->
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->


      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="header-menu">
          <img src="<?=base_url()?>_template/frontend/images/faces/face13.jpg" alt="profile" class="img-sm rounded-circle">
          <span class="nama"><?=profile("nama")?></span>
          <span class="email"><?=profile("email")?></span>
        </div>


        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?=site_url("frontend/home")?>">
              <i class="ti-home menu-icon"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=site_url("frontend/page/index/tentang")?>">
              <i class="ti-book menu-icon"></i>
              <span class="menu-title">Sejarah JPKP</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?=site_url("frontend/page/index/legalitas")?>">
              <i class="ti-receipt menu-icon"></i>
              <span class="menu-title">Legalitas Lengkap</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=site_url("frontend/page/index/visi-misi")?>">
              <i class="ti-agenda menu-icon"></i>
              <span class="menu-title">Visi & Misi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=site_url("frontend/page/index/tujuan")?>">
              <i class="ti-check-box menu-icon"></i>
              <span class="menu-title">Tujuan</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?=site_url("frontend/ppob")?>">
              <i class="ti-wallet menu-icon"></i>
              <span class="menu-title">Layanan PPOB</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?=site_url("frontend/ganti_password")?>">
              <i class="ti-lock menu-icon"></i>
              <span class="menu-title">Ganti Password</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?=site_url("frontend/login/logout")?>">
              <i class="ti-power-off menu-icon"></i>
              <span class="menu-title">Logout</span>
            </a>
          </li>
        </ul>
      </nav>

      <!-- partial -->
      <div class="main-panel">
