<div id="address" class="tab-pane">
	<div class="form-group">
		<label>Adres Bilgisi</label>
		<textarea name="address" id="ckeditor2"> <?php echo isset($form_error) ? set_value("address") : $item->address; ?></textarea>
		<script>
			CKEDITOR.replace( 'ckeditor2' );
		</script>		
	</div>

</div>