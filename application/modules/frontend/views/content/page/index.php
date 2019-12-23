<div class="content-wrapper bg-white" style="margin-bottom:35px;">
  <div class="pb-5 bg-white p-3 page">
    <h5 class="mb-4 mt-3 text-center"><?=strtoupper($row->title)?></h5>
    <div class="mt-3 content">
      <?php if ($row->slug=="legalitas"): ?>
        <?php
          $path = "./_template/docs/AD-ART-JPKP.pdf";

          if (!file_exists($path)) {
            $docs = "";
          }else {
            $docs = $path;
          }
         ?>


         <?php if ($docs!=""): ?>
        <div class="mt-5 text-center">
          <a href="<?=site_url("frontend/aturan/download")?>" target="_blank" class="btn btn-md btn-danger"><i class="ti-file"></i> Download Berkas</a>
        </div>
        <?php endif; ?>
        <?php else: ?>
          <?=$row->keterangan?>
      <?php endif; ?>
    </div>
  </div>



</div>
