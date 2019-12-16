<section role="main" class="content-body">
		<header class="page-header">
			<h2>Form Edit Data Relawan Terverifikasi</h2>
			<div class="right-wrapper text-right">
				<ol class="breadcrumbs">
					<li>
						<a href="<?=site_url("backend/home")?>">
							<i class="fas fa-home"></i>
						</a>
					</li>
					<li><span>Relawan Terdaftar</span></li>
          <li><span>Terverifikasi</span></li>
					<li><span>Form Edit Data Relawan</span></li>
				</ol>
        <a class="sidebar-right-toggle"></a>
				</div>
			</header>

					<!-- start: page -->

      <div class="row">
        <div class="col-md-8 mx-auto">
          <section class="card">
            <div class="card-body">
							<h4 class="card-title text-center"> Form Edit Data Relawan </h4>
							<hr>
                <form autocomplete="off" action="<?=site_url("backend/relawan_terverifikasi/edit_action/".enc_uri($row->id_person))?>" id="form">
                  <div class="form-group">
                    <label for="">Nomor SK</label>
                    <input type="text" class="form-control" id="no_sk" name="no_sk" value="<?=$row->no_sk?>">
                  </div>

									<input type="hidden" class="form-control" id="no_sk_lama" name="no_sk_lama" value="<?=$row->no_sk?>">

                  <div class="form-group">
                    <label for="">Struktur Kepengurusan</label>
										<select class="form-control" style="color:#424242" name="struktur_pengurus" id="struktur_pengurus">
			                <?php $struktur_pengurus = $this->db->get("struktur_pengurus"); ?>
			                <?php foreach ($struktur_pengurus->result() as $stk): ?>
			                  <option <?=$row->id_kepengurusan==$stk->id_kepengurusan?"selected":""?> value="<?=$stk->id_kepengurusan?>"><?=$stk->struktur_pengurus?></option>
			                <?php endforeach; ?>
			              </select>
                  </div>

                  <div class="form-group">
                    <label for="">Status Jabatan</label>
										<select class="form-control" name="status_jabatan" id="status_jabatan">
                      <?php $status_jabatan = $this->db->get("status_jabatan"); ?>
                      <?php foreach ($status_jabatan->result() as $jabatan): ?>
                        <option <?=$row->id_jabatan==$jabatan->id?"selected":""?> value="<?=$jabatan->id?>"><?=$jabatan->jabatan?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>



                  <div class="form-group">
                    <label for="">Wilayah Keanggotaan</label>
										<select class="form-control" name="wilayah_keanggotaan" id="wilayah_keanggotaan">
                      <?php $wil_provinsi = $this->db->get("wil_provinsi"); ?>
                      <?php foreach ($wil_provinsi->result() as $provinsi): ?>
                        <option <?=$row->wilayah_keanggotaan==$provinsi->id ? "selected":"" ?> value="<?=$provinsi->id?>"><?=$provinsi->name?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>

									<div class="form-group">
                    <label for="">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" value="<?=$row->nik?>">
                  </div>

									<input type="hidden" class="form-control" id="nik_lama" name="nik_lama" value="<?=$row->nik?>">

									<div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?=$row->nama?>">
                  </div>

									<div class="form-group">
                    <label for="">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?=$row->tempat_lahir?>">
                  </div>

									<div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?=$row->tanggal_lahir?>">
                  </div>

									<div class="form-group">
										<label for="">Jenis Kelamin</label>
			              <select class="form-control" style="color:#424242" name="jenis_kelamin" id="jenis_kelamin">
			                <option value="pria">Pria</option>
			                <option value="wanita">Wanita</option>
			              </select>
			            </div>

									<div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?=$row->email?>">
                  </div>

									<input type="hidden" class="form-control" id="email_lama" name="email_lama" value="<?=$row->email?>">

									<div class="form-group">
                    <label for="">Telepon</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" value="<?=$row->telepon?>">
                  </div>

									<div class="form-group">
										<label for="">Alamat</label>
			              <textarea type="text" class="form-control" id="alamat" name="alamat"><?=$row->alamat?></textarea>
			            </div>




									<div class="form-group">
										<label for="">Provinsi</label>
			              <select class="form-control" style="color:#424242" name="provinsi" id="provinsi" onchange="loadKabupaten()">
			                <?php $provinsi = $this->db->get("wil_provinsi"); ?>
			                <?php foreach ($provinsi->result() as $prov): ?>
			                  <option <?=$row->id_provinsi==$prov->id ? "selected":"" ?> value="<?=$prov->id?>"><?=$prov->name?></option>
			                <?php endforeach; ?>
			              </select>
			            </div>

			            <div class="form-group">
										<label for="">Kabupaten/Kota</label>
			              <select class="form-control" style="color:#424242" name="kabupaten" id="kabupaten" onChange='loadKecamatan()'>
			                <?=tampilkan_wilayah_edit("wil_kabupaten",["province_id"=>$row->id_provinsi],$row->id_kabupaten)?>
			              </select>
			            </div>

			            <div class="form-group">
										<label for="">Kecamatan</label>
			              <select class="form-control" style="color:#424242" name="kecamatan" id="kecamatan" onChange='loadKelurahan()'>
			                <?=tampilkan_wilayah_edit("wil_kecamatan",["regency_id"=>$row->id_kabupaten],$row->id_kecamatan)?>
			              </select>
			            </div>

			            <div class="form-group">
										<label for="">Kelurahan/Desa</label>
			              <select class="form-control" style="color:#424242" name="kelurahan" id="kelurahan">
			                <?=tampilkan_wilayah_edit("wil_kelurahan",["district_id"=>$row->id_kecamatan],$row->id_kelurahan)?>
			              </select>
			            </div>

									<hr>
								<div class="mt-5 text-center">
									<a href="<?=site_url("backend/relawan_terverifikasi/detail/".enc_uri($row->id_person))?>" class="btn btn-sm btn-default"> Batal</a>
									<button type="submit" id="submit" class="btn btn-sm btn-primary" name="button"> Edit Data Relawan</button>
								</div>

                </form>
            </div>
          </section>





        </div>
      </div>

	<!-- end: page -->
</section>



<script type="text/javascript">

	function loadKabupaten()
					{
							var provinsi = $("#provinsi").val();
							if (provinsi!="") {
								$.ajax({
										type:'GET',
										url:"<?php echo base_url(); ?>backend/relawan_terverifikasi/kabupaten",
										data:"id=" + provinsi,
										success: function(html)
										{
											 $("#kabupaten").html(html);
											 $("#kecamatan").html('<option value="">-- Pilih Kecamatan --</option>');
											 $("#kelurahan").html('<option value="">-- Pilih Kelurahan/desa --</option>');
										}
								});
							}else {
								$("#kabupaten").html('<option value="">-- Pilih Kabupaten/Kota --</option>');
								$("#kecamatan").html('<option value="">-- Pilih Kecamatan --</option>');
								$("#kelurahan").html('<option value="">-- Pilih Kelurahan/desa --</option>');
							}
					}

					function loadKecamatan()
						{
								var kabupaten = $("#kabupaten").val();
								if (kabupaten!="") {
									$.ajax({
											type:'GET',
											url:"<?php echo base_url(); ?>backend/relawan_terverifikasi/kecamatan",
											data:"id=" + kabupaten,
											success: function(html)
											{
													$("#kecamatan").html(html);
													$("#kelurahan").html('<option value="">-- Pilih Kelurahan/desa --</option>');
											}
									});
								}else {
									$("#kecamatan").html('<option value="">-- Pilih Kecamatan --</option>');
									$("#kelurahan").html('<option value="">-- Pilih Kelurahan/desa --</option>');
								}

						}

						function loadKelurahan()
						{
								var kecamatan = $("#kecamatan").val();
								if (kecamatan!="") {
									$.ajax({
											type:'GET',
											url:"<?php echo base_url(); ?>backend/relawan_terverifikasi/kelurahan",
											data:"id=" + kecamatan,
											success: function(html)
											{
													$("#kelurahan").html(html);
											}
									});
								}else {
									$("#kelurahan").html('<option value="">-- Pilih Kelurahan/Desa --</option>');
								}
						}


						$("#form").submit(function(e){
						e.preventDefault();
						var me = $(this);
						$("#submit").prop('disabled',true).html('<div class="spinner-border spinner-border-sm text-white"></div> Loading...');
						$.ajax({
									url             : me.attr('action'),
									type            : 'post',
									data            :  new FormData(this),
									contentType     : false,
									cache           : false,
									dataType        : 'JSON',
									processData     :false,
									success:function(json){
										if (json.success==true) {
											$.toast({
												text: json.alert,
												showHideTransition: 'slide',
												icon: 'success',
												loaderBg: '#f96868',
												position: 'bottom-right',
												hideAfter: 5000,
												afterHidden: function () {
														location.href="<?=site_url('backend/relawan_terverifikasi/detail/'.enc_uri("$row->id_person"))?>";
												}
											});
										}else {
											$("#submit").prop('disabled',false)
																	.html('Edit Data Relawan');
											$.each(json.alert, function(key, value) {
												var element = $('#' + key);
												$(element)
												.closest('.form-group')
												.find('.text-danger').remove();
												$(element).after(value);
											});
										}
									}
						});
						});
</script>
