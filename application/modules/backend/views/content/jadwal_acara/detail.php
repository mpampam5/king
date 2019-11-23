<style media="screen">
  table tr td{
    padding: 5px 5px 3px 3px;
  }
</style>
<div class="row">
  <div class="col-lg-12">
    <table>
      <tr>
        <td>KEGIATAN</td>
        <td>: <?=strtoupper($title)?></td>
      </tr>

      <tr>
        <td>TANGGAL</td>
        <td>:
              <span class="text-primary"><i class="fas fa-calendar"></i> <?=$tanggal?> s/d <?=$sampai_tanggal == "" ? "selesai" : $sampai_tanggal?></span>&nbsp;&nbsp;&nbsp;&nbsp;
        </td>
      </tr>

      <tr>
        <td>PUKUL</td>
        <td>:
              <span class="text-primary"><i class="fas fa-clock"></i> <?=$jam?> s/d <?=$sampai_jam=="" ? "selesai" : date("H:i",strtotime($sampai_jam))?> (<?=strtoupper($zona_waktu)?>)</span>
        </td>
      </tr>

      <tr>
        <td>ALAMAT/ TEMPAT</td>
        <td>: <?=strtoupper($alamat)?></td>
      </tr>
    </table>
    <hr>
    <button type='button' class='btn btn-default btn-sm' data-dismiss='modal'>Cancel</button>
  </div>
</div>
