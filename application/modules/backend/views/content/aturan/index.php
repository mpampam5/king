<link rel="stylesheet" href="<?=base_url()?>_template/backend/vendor/datatables/media/css/dataTables.bootstrap4.css" />
<script src="<?=base_url()?>_template/backend/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>_template/backend/vendor/datatables/media/js/dataTables.bootstrap4.min.js"></script>


<section role="main" class="content-body">
		<header class="page-header">
			<h2>Aturan & Persyaratan</h2>
			<div class="right-wrapper text-right">
				<ol class="breadcrumbs">
					<li>
						<a href="<?=site_url("backend/home")?>">
							<i class="fas fa-home"></i>
						</a>
					</li>
					<li><span>Aturan & Persyaratan</span></li>
					<li><span>List</span></li>
				</ol>
        <a class="sidebar-right-toggle" data-open="sidebar-right"></a>
				</div>
			</header>

					<!-- start: page -->

      <div class="row">
        <div class="col">
          <a href="<?=site_url("backend/aturan/add")?>" class="btn btn-sm btn-success mb-2"><i class="fas fa-plus"></i> Tambah</a>
          <section class="card">
            <div class="card-body">

                  <table class="table table-bordered table-striped mb-0" id="table">
											<thead>
												<tr>
													<th>No</th>
													<th>Keterangan</th>
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

<script type="text/javascript">

$(document).ready(function(){
  var table = $('#table').dataTable({
    dom: '<"row"<"col-lg-6"l><"col-lg-6"f>><"table-responsive"t>p',
		processing: true,
    'language':{
       "loadingRecords": "&nbsp;",
       "processing": "Loading..."
    },
    "serverSide": true,
    "searching":false,
    "order": [[ 0, 'asc' ]], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
    "ajax":
    {
      "url": "<?php echo site_url('backend/aturan/json') ?>", // URL file untuk proses select datanya
      "type": "POST"
    },

        //Set column definition initialisation properties.
        "columnDefs": [
        {
            "className": "text-center",
            "targets": 0, //first column / numbering column
            "orderable": false,
        },
        {
            "targets": 1,
            "orderable": false,
        },
        {
            "className": "text-center",
            "orderable": false,
            "targets": 2
        }
        ],
  });
});


$(document).on("click","#detail",function(e){
  e.preventDefault();
  $('.modal-dialog').removeClass('modal-lg')
                    .removeClass('modal-sm')
                    .addClass('modal-md');
  $("#modalTitle").text('Detail');
  $('#modalContent').load($(this).attr("href"));
  $("#modalGue").modal('show');
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
              position: 'bottom-right'
            });
            $('#table').DataTable().ajax.reload();
          }
        });
});

</script>