<section role="main" class="content-body">
		<header class="page-header">
			<h2>Detail Relawan Terverifikasi</h2>
			<div class="right-wrapper text-right">
				<ol class="breadcrumbs">
					<li>
						<a href="<?=site_url("backend/home")?>">
							<i class="fas fa-home"></i>
						</a>
					</li>
					<li><span>Relawan Terdaftar</span></li>
          <li><span>Terverifikasi</span></li>
					<li><span>Detail</span></li>
				</ol>
        <a class="sidebar-right-toggle" data-open="sidebar-right"></a>
				</div>
			</header>

					<!-- start: page -->

      <div class="row">
        <div class="col-md-3">
          <section class="card">
            <div class="card-body">
              <?php if ($row->foto==""): ?>
								<a href="<?=base_url()?>_template/avatar_default.jpg" data-fancybox="gallery" class="image-popup-no-margins">
                	<div class="foto-profile" style="background-image:url('<?=base_url()?>_template/avatar_default.jpg')"></div>
								</a>
								<?php else: ?>
								<a href="<?=base_url()?>_template/profiles/<?=$row->foto?>" data-fancybox="gallery" class="image-popup-no-margins">
                	<div class="foto-profile" style="background-image:url('<?=base_url()?>_template/profiles/<?=$row->foto?>')"></div>
								</a>
							<?php endif; ?>
            </div>
          </section>
        </div>


        <div class="col-md-9">
          <section class="card">
            <div class="card-body">
							<h4 class="card-title text-center"> Data Relawan </h4>
							<hr>
              <table class="table-profile">
                <tr>
                  <th>Stuktur Kepengurusan</th>
                  <td>: <span style="font-weight:bold;" class="text-danger"><?=strtoupper(struktur_pengurus($row->id_kepengurusan))?></span></td>
                </tr>

								<tr>
                  <th>Jabatan</th>
                  <td>: <span style="font-weight:bold;" class="text-danger"><?=strtoupper(status_jabatan($row->id_jabatan))?></span></td>
                </tr>

								<tr>
                  <th>Wilayah Keanggotaan</th>
                  <td>: <span style="font-weight:bold;" class="text-danger"><?=tampilkan_wilayah("wil_provinsi",["id"=>$row->wilayah_keanggotaan])?></span></td>
                </tr>

                <tr>
                  <th>NIK</th>
                  <td>: <span style="font-weight:bold;" class="text-primary"><?=$row->nik?></span></td>
                </tr>

                <tr>
                  <th>Nama</th>
                  <td>: <?=$row->nama?></td>
                </tr>

                <tr>
                  <th>Tempat, Tanggal Lahir</th>
                  <td>: <?=strtoupper($row->tempat_lahir)?>, <?=date("d-m-Y",strtotime($row->tanggal_lahir))?></td>
                </tr>

                <tr>
                  <th>Jenis Kelamin</th>
                  <td>: <?=strtoupper($row->jenis_kelamin)?></td>
                </tr>

                <tr>
                  <th>Email</th>
                  <td>: <?=$row->email?></td>
                </tr>

                <tr>
                  <th>Telepon</th>
                  <td>: <?=$row->telepon?></td>
                </tr>

                <tr>
                  <th>Alamat</th>
                  <td>: <?=$row->alamat?></td>
                </tr>

                <tr>
                  <th>Provinsi</th>
                  <td>: <?=tampilkan_wilayah("wil_provinsi",["id"=>$row->id_provinsi])?></td>
                </tr>

                <tr>
                  <th>Kabupaten/Kota</th>
                  <td>: <?=tampilkan_wilayah("wil_kabupaten",["id"=>$row->id_kabupaten])?></td>
                </tr>

                <tr>
                  <th>Kecamatan</th>
                  <td>: <?=tampilkan_wilayah("wil_kecamatan",["id"=>$row->id_kecamatan])?></td>
                </tr>

                <tr>
                  <th>Kelurahan/Desa</th>
                  <td>: <?=tampilkan_wilayah("wil_kelurahan",["id"=>$row->id_kelurahan])?></td>
                </tr>

                <tr>
                  <th>Waktu Registrasi</th>
                  <td>: <?=date('d-m-Y H:i',strtotime($row->created))?></td>
                </tr>


              </table>
            </div>
          </section>

          <div class="mt-3">
            <a href="<?=site_url('backend/'.$this->uri->segment(2))?>" class="btn btn-default btn-sm">kembali</a>
            <a href="<?=site_url("backend/relawan_terverifikasi/delete/".enc_uri($row->id_person))?>" id="delete" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus Relawan</a>
            <button type="button" class="btn btn-primary btn-sm" id="verif-content" name="button"><i class="fas fa-download"></i> Download Id Card</button>
          </div>



        </div>
      </div>

	<!-- end: page -->
</section>


<script type="text/javascript">

$(document).on("click","#delete",function(e){
  e.preventDefault();
  $('.modal-dialog').removeClass('modal-lg')
                    .removeClass('modal-md')
                    .addClass('modal-sm');
  $("#modalTitle").text('Please Confirm');
  $('#modalContent').html(`<p>Are you sure you want to delete?</p>
														<button type='button' class='btn btn-default btn-sm' data-dismiss='modal'>Cancel</button>
	                          <button type='button' class='btn btn-primary btn-sm' id='ya-hapus' data-id=`+$(this).attr('alt')+`  data-url=`+$(this).attr('href')+`>Yes, i'm sure</button>
														`);
  $("#modalGue").modal('show');
});


$(document).on('click','#ya-hapus',function(e){
  $(this).prop('disabled',true)
          .text('Processing...');
  $.ajax({
          url:$(this).data('url'),
          type:'post',
          cache:false,
          dataType:'json',
          success:function(json){
            $('#modalGue').modal('hide');
            $.toast({
              text: json.alert,
              showHideTransition: 'slide',
              icon: json.alert_header,
              loaderBg: '#f96868',
              position: 'bottom-right',
              afterHidden: function () {
                  location.href="<?=site_url('backend/'.$this->uri->segment(2))?>";
              }
            });

          }
        });
});
</script>
