<link rel="stylesheet" href="<?=base_url()?>_template/frontend/vendors/owl-carousel-2/owl.carousel.min.css">
<link rel="stylesheet" href="<?=base_url()?>_template/frontend/vendors/owl-carousel-2/owl.theme.default.min.css">
<script src="<?=base_url()?>_template/frontend/vendors/owl-carousel-2/owl.carousel.min.js"></script>

<div class="content-wrapper" style="margin-bottom:35px;">


  <div class="owl-carousel owl-theme full-width">
    <?php $sld = $this->db->get_where("slider",["is_delete"=>"0"]); ?>
    <?php foreach ($sld->result() as $slider): ?>
  <div class="item">
    <div class="card text-white">
      <img class="card-img" src="<?=base_url()?>_template/files/<?=$slider->image?>" alt="Card image">
      <div class="card-img-overlay d-flex">
        <div class="mt-auto text-center w-100">
          <h6 class="card-text mb-4 font-weight-normal"><?=$slider->quotes?></h6>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>
</div>

<div class="content-text p-3 mt-1 bg-white">
  <p class="text-center" style="font-size:14px">
    <?=setting_system("dashboard_tentang")?>
  </p>
</div>

<div class="mt-4 total-relawan">
  <div class="text-center ">
    <span class="badge badge-danger badge-pill">TOTAL RELAWAN JPKP</span>
  </div>

  <div class="mt-1 rounded-content">
    <div class="rounded-home">
      <span class="badge badge-outline-danger"><?=$belum_terverifikasi?></span>
      <p class="text-center">Relawan Terdaftar belum terverifikasi</p>
    </div>

    <div class="rounded-home">
      <span class="badge badge-outline-danger"><?=$terverifikasi?></span>
      <p class="text-center">Relawan Terdaftar sudah terverifikasi</p>
    </div>

  </div>
</div>

<div class="mt-4 text-center bg-white p-4 sekertariat-pusat">
  <h6 class="text-danger">SEKERTARIAT PUSAT</h6>
  <div class="mb-4">
    <span class="text-danger"><i style="font-size:50px;" class="ti-map-alt"></i></span>
  </div>

  <p style="font-size:14px;">
    <?=setting_system("alamat")?>
  </p>
</div>


<div class="text-tentang p-4" style="text-align:justify">
  <p>
    <?=setting_system("dashboard_tentang_footer")?>
  </p>
</div>

</div>
<!-- content-wrapper ends -->

<script src="<?=base_url()?>_template/frontend/js/owl-carousel.js"></script>
