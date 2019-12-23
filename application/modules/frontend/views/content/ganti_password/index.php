<div class="content-wrapper bg-white" style="margin-bottom:45px;">
  <div class="row">
    <div class="card col-md-6 pl-4 pr-4 pt-4">
      <div class="card-body">
        <h5 class="card-title">Ganti Password</h5>
        <hr>
        <form class="" action="<?=site_url("frontend/ganti_password/action")?>" id="form">
          <div class="form-group">
            <label for="">Password lama</label>
            <input type="password" class="form-control" id="password_lama" name="password_lama" placeholder="Masukkan Password lama">
          </div>

          <hr>

          <div class="form-group">
            <label for="">Password Baru</label>
            <input type="password" class="form-control" id="password_baru" name="password_baru" placeholder="Masukkan Password Baru">
          </div>

          <div class="form-group">
            <label for="">Konfirmasi Password Baru</label>
            <input type="password" class="form-control" id="konfirmasi_password" name="konfirmasi_password" placeholder="Konfirmasi Password">
          </div>

          <div class="mt-4">
            <button type="submit" id="submit" class="btn btn-md btn-primary btn-block" name="button">Ganti Password</button>
          </div>

        </form>
      </div>
    </div>
  </div>

</div>



<script type="text/javascript">

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
              position: 'bottom-center',
              hideAfter: 3000,
              afterHidden: function () {
                  $("#form")[0].reset();
                  $("#submit").prop('disabled',false)
                              .html('Ganti Password');
              }
            });
        }else {
          $("#submit").prop('disabled',false)
                      .html('Ganti Password');
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
