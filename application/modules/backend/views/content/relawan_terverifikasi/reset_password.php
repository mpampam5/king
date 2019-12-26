
        <form class="" action="<?=$action?>" id="form">

          <div class="form-group">
            <label for="">Password Baru</label>
            <input type="password" class="form-control" id="password_baru" name="password_baru" placeholder="Masukkan Password Baru">
          </div>

          <div class="form-group">
            <label for="">Konfirmasi Password Baru</label>
            <input type="password" class="form-control" id="konfirmasi_password" name="konfirmasi_password" placeholder="Konfirmasi Password">
          </div>

          <div class="mt-4">
            <button type="submit" id="submits" class="btn btn-md btn-primary btn-block" name="button">Reset Password</button>
          </div>

        </form>




<script type="text/javascript">

$("#form").submit(function(e){
e.preventDefault();
var me = $(this);
$("#submits").prop('disabled',true).html('<div class="spinner-border spinner-border-sm text-white"></div> Loading...');
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
              hideAfter: 3000
            });
            $("#modalGue").modal("hide");
        }else {
          $("#submits").prop('disabled',false)
                      .html('Reset Password');
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
