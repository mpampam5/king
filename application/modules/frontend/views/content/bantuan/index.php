<div class="content-wrapper" style="margin-bottom:35px;">
  <div class="mt-3 text-center main-menus">
    <div class="rounded-menu">
      <a href="<?=site_url("frontend/aturan")?>">
        <span class="badge badge-outline-danger">S K</span>
        <p class="text-center">Aturan & Persyaratan</p>
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

    <div class="rounded-menu active">
      <a href="<?=site_url("frontend/bantuan")?>">
        <span class="badge badge-outline-danger"><i class="fas fa-hands-helping"></i></span>
        <p class="text-center">Bantuan Khusus</p>
      </a>
    </div>
  </div>


  <div class="mt-3 pb-5 p-3 bantuan">
    <h5 class="mb-1 text-center"> Bantuan Khusus</h5>
    <div class="row mt-2">
      <div class="col-md-12 content">
        <ul id="load_data"></ul>
        <div id="load_data_message"></div>


      </div>

      <div class="info text-center">
        <p class="text-danger mb-5">
          *Bagi Kader Relawan atau Donatur yang ingin membantu baik secara financial atau non financial silahkan menghubungi JPKP terdekat.
        </p>

        <label style="font-size:10px;font-weight:bold;">Atau klik tombol dibawah ini</label><br>
        <a href="<?=site_url("frontend/support")?>" class="btn btn-danger btn-sm">JPKP Help Support</a>
      </div>

    </div>
  </div>



</div>


<script>
$(document).ready(function(){

var limit = 4;
  var start = 0;
  var action = 'inactive';

  function lazzy_loader(limit)
  {
    var output = '<p class="text-center"><img src="<?=base_url()?>_template/preloader.svg" style="width:40px;height:40px;"></p>';
    $('#load_data_message').html(output);
  }

  lazzy_loader(limit);

  function load_data(limit, start)
  {
    $.ajax({
      url:"<?php echo base_url(); ?>frontend/bantuan/fetch",
      method:"POST",
      data:{limit:limit, start:start},
      cache: false,
      success:function(data)
      {
        if(data == '')
        {
          $('#load_data_message').html('<p style="font-size:12px;color:#6f6f6f" class="text-center mt-3">No more result found</p>');
          action = 'active';
        }
        else
        {
          $('#load_data').append(data);
          $('#load_data_message').html('');
          action = 'inactive';
        }
      }
    })
  }

  if(action == 'inactive')
  {
    action = 'active';
    load_data(limit, start);
  }

  $(window).scroll(function(){
    if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
    {
      lazzy_loader(limit);
      action = 'active';
      start = start + limit;
      setTimeout(function(){
        load_data(limit, start);
      }, 1000);
    }
  });

});
</script>
