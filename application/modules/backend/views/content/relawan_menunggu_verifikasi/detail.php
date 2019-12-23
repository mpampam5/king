<link rel="stylesheet" href="<?=base_url()?>_template/frontend/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
<script src="<?=base_url()?>_template/frontend/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<section role="main" class="content-body">
		<header class="page-header">
			<h2>Detail Relawan Menunggu Verifikasi</h2>
			<div class="right-wrapper text-right">
				<ol class="breadcrumbs">
					<li>
						<a href="<?=site_url("backend/home")?>">
							<i class="fas fa-home"></i>
						</a>
					</li>
					<li><span>Relawan Terdaftar</span></li>
          <li><span>Menunggu Verifikasi</span></li>
					<li><span>Detail</span></li>
				</ol>
        <a class="sidebar-right-toggle"></a>
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
            <a href="<?=site_url("backend/relawan_menunggu_verifikasi/delete/".enc_uri($row->id_person))?>" id="delete" class="btn btn-danger btn-sm"> Hapus Relawan</a>
            <button type="button" class="btn btn-success btn-sm" id="verif-content" name="button">Verifikasi Relawan</button>
          </div>

          <div class="collapse mt-3 mb-5" id="verif-content-collapse">
            <section class="card">
              <div class="card-body">
								<h4 class="card-title text-center"> Form Verifikasi </h4>
								<hr>
                <form autocomplete="off" action="<?=site_url("backend/relawan_menunggu_verifikasi/verifikasi/".enc_uri($row->id_person))?>" id="form-filter">
                  <!-- <div class="form-group">
                    <label for="">No.Id</label>
                    <input type="text" class="form-control" id="no_id" name="no_id" placeholder="Masukkan No.id">
                  </div> -->

                  <div class="form-group">
                    <label for="">No.SK</label>
                    <input type="text" class="form-control" id="no_sk" name="no_sk" placeholder="Masukkan No.SK" value="<?=$row->no_sk?>">
                  </div>

									<input type="hidden" id="no_sk_lama" name="no_sk_lama" value="<?=$row->no_sk?>">

									<div class="form-group">
									  <label for="">Tanggal Penerbitan SK</label> <span class="text-primary" style="font-size:11px;">* format tgl/bln/thn</span>
									  <input type="text" class="form-control tanggal"  id="tanggal_sk_terbit" name="tanggal_sk_terbit" placeholder="Tanggal Penerbitan SK" value="<?=date("d-m-Y",strtotime($row->tanggal_penerbitan_sk))?>">
									</div>

                  <div class="form-group">
                    <label for="">Status Jabatan Keanggotaan</label>
                    <select class="form-control" name="status_jabatan" id="status_jabatan">
                      <option value="">-- pilih --</option>
                      <?php $status_jabatan = $this->db->get("status_jabatan"); ?>
                      <?php foreach ($status_jabatan->result() as $jabatan): ?>
                        <option <?=$row->id_jabatan==$jabatan->id?"selected":""?> value="<?=$jabatan->id?>"><?=$jabatan->jabatan?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>


                  <div class="form-group">
                    <label for="">Wilayah Keanggotaan</label>
										<input type="text" class="form-control" readonly value="<?=tampilkan_wilayah("wil_provinsi",["id"=>$row->id_provinsi])?>">
										<input type="hidden" class="form-control" name="wilayah_keanggotaan" id="wilayah_keanggotaan" value="<?=$row->id_provinsi?>">
                  </div>

                  <div class="form-group">
                    <label for="">Password Akun Admin</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password Verifikasi">
                  </div>


                  <div class="mt-3">
                    <button type="button" id="hide_collapse" class="btn btn-sm btn-default" name="button">Jangan Sekarang</button>
                    <button type="submit" id="submit" class="btn btn-success btn-sm" name="button">Verifikasi</button>
                  </div>

                </form>
              </div>
            </section>
          </div>

        </div>
      </div>

	<!-- end: page -->
</section>


<script type="text/javascript">
$(document).ready(function(){
$('.tanggal').datepicker({
	format: 'dd-mm-yyyy',
	autoclose: true
});
});

$("#verif-content").click(function(){
  $("#verif-content-collapse").collapse('toggle');
  $('#form-filter')[0].reset();
  $('.form-group').find(".text-danger").remove();
  $("#no_id").focus();
  $('html,body').animate({ scrollTop: 9999 }, 'slow');
});

$("#hide_collapse").click(function(){
  $("#verif-content-collapse").collapse('hide');
  $('.form-group').find(".text-danger").remove();
  $('#form-filter')[0].reset();
});


$("#form-filter").submit(function(e){
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
          $("#verif-content-collapse").collapse('hide');
            $.toast({
              text: json.alert,
              showHideTransition: 'slide',
              icon: 'success',
              loaderBg: '#f96868',
              position: 'bottom-right',
							hideAfter: 5000,
              afterHidden: function () {
                  location.href="<?=site_url('backend/'.$this->uri->segment(2))?>";
              }
            });
        }else {
          $("#submit").prop('disabled',false)
                      .html('Verifikasi');
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
