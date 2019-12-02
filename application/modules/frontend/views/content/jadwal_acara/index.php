<div class="content-wrapper" style="margin-bottom:35px;">
  <div class="mt-3 text-center main-menus">
    <div class="rounded-menu">
      <a href="<?=site_url("frontend/aturan")?>">
        <span class="badge badge-outline-danger">S & K</span>
        <p class="text-center">Aturan & Persyaratan</p>
      </a>
    </div>

    <div class="rounded-menu active">
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


  <div class="mt-3 pb-5 p-3 jadwal_acara">
    <h5 class="mb-1 text-center"> Jadwal Acara</h5>
    <div class="row mt-2" id="postList">

      <?php if (!empty($posts)): ?>
        <?php foreach ($posts as $row): ?>
          <div class="col-md-12 content">
              <h6 class="text-center text-danger" style="font-size:12px;">Pelantikan Pengurus DPW Pengurus DPW Sulawesi-Selatan</h6>
              <b>Detail Acara :</b>
              <table>
                <tr>
                  <td>Tanggal</td>
                  <td>: 10 november 2019</td>
                </tr>

                <tr>
                  <td>Pukul</td>
                  <td>: 13:00 WITA s/d selesai</td>
                </tr>

                <tr>
                  <td>Alamat</td>
                  <td>: Jl. Mannuruki raya lr garden pondok 16</td>
                </tr>
              </table>
          </div>
        <?php endforeach; ?>
        <div id="preloader" class="loaders text-center" style="display:none;">
          <img src="<?php echo base_url('_template/preloader.svg'); ?>">
        </div>
        <?php else: ?>
          <p>Post(s) not available.</p>
      <?php endif; ?>


    </div>
  </div>



</div>


<script type="text/javascript">
$(document).ready(function () {
    var page =1;
    var total_pages = <?=$total_pages?>;
    $(window).scroll(function() {
	    if($(window).scrollTop() + $(window).height() >= $("#postList").height()) {
	        page++;
	        loadData(page);
	    }
	});

    /*Load more Function*/
    function loadData(page) {
        $("#preloader").show();
        $.ajax({
            url: "<?=base_url()?>frontend/jadwal_acara",
            type: "get",
            data:{page:page}
        })
        .done(function(content) {
            $("#preloader").hide();
            $("#postList").append(content);
        });
    }
});
</script>
