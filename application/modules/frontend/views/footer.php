<!-- partial:../../partials/_footer.html -->

<footer class="footer">
  <div class="d-sm-flex justify-content-center justify-content-sm-between text-center">
    <a href="<?=site_url("frontend/home")?>" class="<?=$title == "home" ? "active":""?>"><i class="ti-home"></i></a>
    <a href="<?=site_url("frontend/information")?>" class="<?=$title == "information" ? "active":""?>"><i class="ti-file"></i></a>
    <a href="<?=site_url("frontend/support")?>" class="<?=$title == "support" ? "active":""?>"><i class="ti-headphone-alt"></i></a>
    <a href="<?=site_url("frontend/account")?>" class="<?=$title == "account" ? "active":""?>"><i class="ti-user"></i></a>
  </div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->

<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?=base_url()?>_template/frontend/js/off-canvas.js"></script>
<script src="<?=base_url()?>_template/frontend/js/hoverable-collapse.js"></script>
<script src="<?=base_url()?>_template/frontend/js/template.js"></script>
<script src="<?=base_url()?>_template/frontend/js/settings.js"></script>
<script src="<?=base_url()?>_template/frontend/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<!-- End custom js for this page-->
<script type="text/javascript">
(function($) {
  'use strict';

  $('#status').fadeOut();
  $('#preloader').delay(350).fadeOut('slow');
  $('#preloader .textload').delay(0).fadeOut('slow');
  $('body').delay(350).css({
      'overflow': 'visible'
  });

})(jQuery);
</script>
</body>

</html>
