<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>id card</title>
    <style media="screen">
      html,body{
        /* background-color: #999999; */
        font-family: sans-serif;
      }

      h5.titles{
        text-align:center;
      }

      #content_id{
        position: relative;
        margin: 20px auto;
        width: 54mm;
        height: 86mm;
        border: 1px solid black;
        background-color: #ffffff;
        /* background-size: 100%;
        background-repeat: no-repeat; */
        background-image: url('<?=base_url()?>_template/id-card.png');
      }

      #content_id img{
        width: 100%;
        height: 70px;
      }

      #content_id span.struktur_pengurus{
        text-align: center;
        font-size: 9px;
        font-weight: bold;
        line-height: 12px;
        display: block;
      }

      #content_id span.kabupaten{
        font-weight: bold;
        text-align: center;
        font-size: 6px;
        line-height: 12px;
        display: block;
      }

      #content_id span.provinsi{
        font-weight: bold;
        text-align: center;
        font-size: 6px;
        line-height: 12px;
        display: block;
      }

      #content_id span.title{
        font-weight: bold;
        text-align: center;
        font-size: 7px;
        line-height: 12px;
        display: block;
      }

      #content_id .image-profile{
        height: auto;
        width: 70px;
        margin:5px auto;
        background: #f90f0f;
        background-size: cover;
        background-repeat: no-repeat;
        border-radius: 2px;
      }
      #content_id .image-profile img{
        width: 100%;
        min-height: 80px;
        border-radius: 2px;
      }

      #content_id span.nama{
        font-weight: bold;
        text-align: center;
        font-size: 8px;
        line-height: 12px;
        display: block;
        text-decoration: underline;
      }

      #content_id span.jabatan{
        font-weight: bold;
        text-align: center;
        font-size: 6px;
        line-height: 12px;
        display: block;
      }

      #footer{
        background-color:#ff0000;
        position: relative;
        background-size: 100%;
        background-repeat: no-repeat;
        margin-top: 60px;
        width: 100%;
        /* height: 80px; */
      }

      #content_id #footer .no-sk{
        font-weight: bold;
        text-align: center;
        font-size: 8px;
        line-height: 12px;
        display: block;
        padding: 10px;
      }


      /* //belakang */
      #content_id span.uud{
        font-weight: bold;
        text-align: center;
        font-size: 8px;
        line-height: 12px;
        display: block;
      }

      #content_id span.ket-umum{
        font-weight: bold;
        text-align: center;
        font-size: 9px;
        line-height: 12px;
        display: block;
        text-decoration: underline;
        margin-top: 80px;
      }

      #content_id span.jabatan2{
        text-align: center;
        font-size: 7px;
        line-height: 12px;
        display: block;
      }

      #footer2{
        background-color: #ff0000;
        position: relative;
        margin-top: 60px;
        width: 100%;
        padding: 3px;
      }

      #content_id span.sekertariat{
        text-align: center;
        font-size: 7px;
        line-height: 12px;
        display: block;
      }

      #content_id span.alamat{
        text-align: center;
        font-size: 7px;
        line-height: 12px;
        display: block;
      }

      #content_id span.email{
        text-align: center;
        font-size: 7px;
        line-height: 12px;
        display: block;
      }

      #content_id span.telepon{
        text-align: center;
        font-size: 7px;
        line-height: 12px;
        display: block;
      }

    </style>
  </head>
  <body>
    <h5 class="titles">Depan</h5>
    <div id="content_id">
      <img src="<?=base_url()?>_template/peta_indonesia.png">
      <span class="struktur_pengurus"><?=strtoupper(struktur_pengurus_title($row->id_kepengurusan))?></span>
      <span class="kabupaten"><?=tampilkan_wilayah("wil_kabupaten",["id"=>$row->id_kabupaten])?></span>
      <span class="provinsi">PROVINSI <?=tampilkan_wilayah("wil_provinsi",["id"=>$row->wilayah_keanggotaan])?></span>
      <span class="title">JARINGAN PENDAMPING KEBIJAKAN <span style="color:#ff0005">PEMBANGUNAN</span></span>


      <div class="image-profile">
        <?php if ($row->foto==""): ?>
          <img src="<?=base_url()?>_template/avatar_default.jpg">
          <?php else: ?>
            <img src="<?=base_url()?>_template/profiles/<?=$row->foto?>">
        <?php endif; ?>
      </div>
      <span class="nama"><?=$row->nama?></span>
      <span class="jabatan"><?=status_jabatan($row->id_jabatan)?></span>


      <div id="footer">
        <span class="no-sk"><?=$row->no_sk?></span>
      </div>
    </div>





    <!-- //belakang -->
    <h5 class="titles">Belakang</h5>
    <div id="content_id">
      <img src="<?=base_url()?>_template/peta_indonesia.png">

      <span class="uud">Pemegang ID CARD ini dilindungi oleh Undang-Undang No.AHU-0001682AH.01.07.TAHUN 2015</span>
      <span class="ket-umum">Maret Samuel Sueken</span>
      <span class="jabatan2">Ketua Umum</span>



      <div id="footer2">
        <span class="sekertariat">Sekertariat :</span>
        <span class="alamat"><?=setting_system("alamat")?></span>
        <span class="email">Email : <?=setting_system("email")?></span>
        <span class="email">Telp. +62 <?=setting_system("telepon")?></span>
      </div>
    </div>
  </body>
</html>
