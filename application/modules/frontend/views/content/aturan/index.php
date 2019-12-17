<div class="content-wrapper" style="margin-bottom:35px;">
  <div class="mt-3 text-center main-menus">
    <div class="rounded-menu active">
      <a href="<?=site_url("frontend/aturan")?>">
        <span class="badge badge-outline-danger">SK</span>
        <p class="text-center">ADART</p>
      </a>
    </div>

    <div class="rounded-menu">
      <a href="<?=site_url("frontend/jadwal_acara")?>">
        <span class="badge badge-outline-danger"><i class="fas fa-calendar-alt"></i></span>
        <p class="text-center">Jadwal Acara</p>
      </a>
    </div>

    <div class="rounded-menu">
      <a href="<?=site_url("frontend/kegiatan")?>">
        <span class="badge badge-outline-danger"><i class="fas fa-clipboard-list"></i></span>
        <p class="text-center">Kegiatan</p>
      </a>
    </div>

    <div class="rounded-menu">
      <a href="<?=site_url("frontend/bantuan")?>">
        <span class="badge badge-outline-danger"><i class="fas fa-hands-helping"></i></span>
        <p class="text-center">Bantuan Khusus</p>
      </a>
    </div>
  </div>


  <div class="mt-3 pb-5 bg-white p-3 text-center aturan">
    <h5 class="mb-4">ADART</h5>
    <p style="font-size:12px;">SYARAT MENJADI PENGURUS</p>
    <ul>
      <?php foreach ($row as $aturan): ?>
        <li><?=$aturan->keterangan?></li>
      <?php endforeach; ?>
    </ul>


    <?php
      $path = "./_template/docs/AD-ART-JPKP.pdf";

      if (!file_exists($path)) {
        $docs = "";
      }else {
        $docs = $path;
      }
     ?>


     <?php if ($docs!=""): ?>
    <div class="mt-4">
      <label style="font-size:10px;"><b>Klik untuk mendownload AD/ART JPK<span class="text-danger">P</span><b></label><br>
      <a href="<?=site_url("frontend/aturan/download_ad_art")?>" target="_blank" class="btn btn-md btn-danger">Download AD/ART</a>
    </div>
    <?php endif; ?>
  </div>



</div>
