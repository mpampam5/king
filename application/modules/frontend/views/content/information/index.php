<style media="screen">
.peta{
  min-width: 300px;
  min-height: 150px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url("<?=base_url()?>_template/peta_indonesia.png");
}

</style>

<div class="content-wrapper" style="margin-bottom:35px;">
  <div class="mt-3 mb-5 text-center main-menus">
    <div class="rounded-menu">
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


  <div class="peta"></div>

</div>
