<link rel="stylesheet" href="<?=base_url()?>_template/backend/vendor/datatables/media/css/dataTables.bootstrap4.css" />
<script src="<?=base_url()?>_template/backend/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>_template/backend/vendor/datatables/media/js/dataTables.bootstrap4.min.js"></script>


<section role="main" class="content-body">
		<header class="page-header">
			<h2>Relawan Terverifikasi</h2>
			<div class="right-wrapper text-right">
				<ol class="breadcrumbs">
					<li>
						<a href="<?=site_url("backend/home")?>">
							<i class="fas fa-home"></i>
						</a>
					</li>
					<li><span>Relawan Terdaftar</span></li>
          <li><span>Terverifikasi</span></li>
					<li><span>List</span></li>
				</ol>
        <a class="sidebar-right-toggle" data-open="sidebar-right"></a>
				</div>
			</header>

					<!-- start: page -->

      <div class="row">
          <div class="col-md-12">
            <button type="button" id="search" class="btn btn-sm btn-success mb-2"><i class="fas fa-search"></i> Search</button>
            <button type="button" id="reload_table" class="btn btn-sm btn-warning mb-2" name="button"><i class="fas fa-sync"></i> Reload</button>
          </div>

          <div id="search_collapse" class="collapse col-md-12">
            <div class="stretch-card mb-1">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-center"> Search Filter </h5>
                  <hr>
                    <form id="form-filter" autocomplete="off">
                        <div class="row">
													<div class="col-sm-3 mb-3">
                            <div class="form-group">
                              <label for="">No.SK</label>
                              <input type="text" class="form-control form-control-sm" id="no_sk">
                            </div>
                          </div>

                          <div class="col-sm-3 mb-3">
                            <div class="form-group">
                              <label for="">NIK</label>
                              <input type="text" class="form-control form-control-sm" id="nik">
                            </div>
                          </div>

                          <div class="col-sm-3 mb-3">
                            <div class="form-group">
                              <label for="">Nama</label>
                              <input type="text" class="form-control form-control-sm" id="nama">
                            </div>
                          </div>

                          <div class="col-sm-3 mb-3">
                            <div class="form-group">
                              <label for="">Email</label>
                              <input type="text" class="form-control form-control-sm" id="email">
                            </div>
                          </div>

													<div class="col-sm-3 mb-3">
                            <div class="form-group">
                              <label for="">Telepon</label>
                              <input type="text" class="form-control form-control-sm" id="telepon">
                            </div>
                          </div>



													<div class="col-sm-3 mb-3">
                            <div class="form-group">
                              <label for="">Struktur Kepengurusan</label>
															<select class="form-control form-control-sm rupiah" id="struktur_pengurus">
																<option value="">-- pilih --</option>
																<?php  $qrys = $this->db->get("struktur_pengurus"); ?>
																<?php foreach ($qrys->result() as $qryss): ?>
																		<option value="<?=$qryss->id_kepengurusan?>"><?=$qryss->struktur_pengurus?></option>
																<?php endforeach; ?>
															</select>
                            </div>
                          </div>

													<div class="col-sm-3 mb-3">
                            <div class="form-group">
                              <label for="">Status Jabatan</label>
															<select class="form-control form-control-sm rupiah" id="status_jabatan">
																<option value="">-- pilih --</option>
																<?php  $qry_jabatan = $this->db->get("status_jabatan"); ?>
																<?php foreach ($qry_jabatan->result() as $qry_jabatan): ?>
																		<option value="<?=$qry_jabatan->id?>"><?=$qry_jabatan->jabatan?></option>
																<?php endforeach; ?>
															</select>
                            </div>
                          </div>

													<div class="col-sm-3 mb-3">
                            <div class="form-group">
                              <label for="">Wilayah Keanggotaan</label>
															<select class="form-control form-control-sm rupiah" id="wilayah_keanggotaan">
																<option value="">-- pilih --</option>
																<?php  $qry_prov = $this->db->get("wil_provinsi"); ?>
																<?php foreach ($qry_prov->result() as $qry_prov): ?>
																		<option value="<?=$qry_prov->id?>"><?=$qry_prov->name?></option>
																<?php endforeach; ?>
															</select>
                            </div>
                          </div>


                        <div class="col-sm-12 mt-2">
                          <button type="button" id="btn-filter" name="button" class="btn btn-sm btn-primary">Filter Search</button>
                          <button type="button" id="hide_collapse" class="btn btn-danger btn-sm">Cancel</button>
                        </div>

                      </div>

                    </form>

                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <section class="card">
              <div class="card-body">

                    <table class="table table-bordered table-striped mb-0" id="table">
  											<thead>
  												<tr>
														<th>Foto</th>
														<th>No.SK</th>
                            <th>Data Relawan</th>
                            <th>Status Kepengurusan</th>
                            <th class="text-center">#</th>
  												</tr>
  											</thead>


  										</table>

              </div>
            </section>
          </div>
    </div>
	<!-- end: page -->
</section>


<script>
$(document).ready(function(){
  var table;
  //datatables
    table = $('#table').DataTable({

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
        "searching": false,
        oLanguage: {
            sProcessing: '<div class="spinner-border spinner-border-sm text-white"></div> Loading'
        },

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url("backend/relawan_terverifikasi/json")?>",
            "type": "POST",
            "data": function ( data ) {
								data.no_sk = $('#no_sk').val();
                data.nik = $('#nik').val();
                data.nama = $('#nama').val();
                data.email = $('#email').val();
                data.telepon = $('#telepon').val();
								data.struktur_pengurus = $('#struktur_pengurus').val();
								data.status_jabatan = $('#status_jabatan').val();
								data.wilayah_keanggotaan = $('#wilayah_keanggotaan').val();
            }
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        {
            "className": "text-center",
            "targets": 0, //first column / numbering column
						"orderable": false
        },
        {
            "targets": 1, //first column / numbering column
        },
				{
            "targets": 2, //first column / numbering column
        },
        {
            "targets": 3, //first column / numbering column
        },
        {
            "className": "text-center",
            "targets": 4,
            "orderable": false,
        },
        ],
      });

    $('#btn-filter').click(function(){ //button filter event click
        table.ajax.reload();  //just reload table
    });

    $("#reload_table").click(function(){
      $('#form-filter')[0].reset();
      $("#search_collapse").collapse('hide');
        table.ajax.reload();
    });

    $("#search").click(function(){
      $("#search_collapse").collapse('toggle');
      $('#form-filter')[0].reset();
    });

    $("#hide_collapse").click(function(){
      $("#search_collapse").collapse('hide');
      $('#form-filter')[0].reset();
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
						$('#table').DataTable().ajax.reload();
            $.toast({
              text: json.alert,
              showHideTransition: 'slide',
              icon: json.alert_header,
              loaderBg: '#f96868',
              position: 'bottom-right'
            });

          }
        });
});



</script>
