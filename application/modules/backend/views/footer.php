</div>

</section>



<div class="modal" id="modalGue" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalTitle"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="modalContent"></div>
		</div>
	</div>
</div>

<!-- Vendor -->
<script src="<?=base_url()?>_template/backend/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?=base_url()?>_template/backend/vendor/common/common.js"></script>
<script src="<?=base_url()?>_template/backend/vendor/nanoscroller/nanoscroller.js"></script>
<script src="<?=base_url()?>_template/backend/vendor/magnific-popup/jquery.magnific-popup.js"></script>
<script src="<?=base_url()?>_template/backend/vendor/jquery-placeholder/jquery.placeholder.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="<?=base_url()?>_template/backend/js/theme.js"></script>

<!-- Theme Custom -->
<script src="<?=base_url()?>_template/backend/js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="<?=base_url()?>_template/backend/js/theme.init.js"></script>


<script type="text/javascript">
$('#modalGue').on('hide.bs.modal', function () {
    setTimeout(function(){
        $('#modalTitle, #modalContent , #modalFooter').html('');
      }, 500);
   });
</script>
</body>
</html>
