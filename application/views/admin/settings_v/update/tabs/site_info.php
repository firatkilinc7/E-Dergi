
<div id="info" class="tab-pane active">
	<div class="row">
		<div class="form-group col-md-8">
			<label>Şirket Adı</label>
			<input class="form-control" placeholder="Şirketin ya da Sitenizin adı" name="company_name" value="<?php echo isset($form_error) ? set_value("company_name") : $item->company_name; ?>">
			<?php if (isset($form_error)) { ?>
				<small class="pull-right input-form-error"><?php echo form_error("company_name"); ?></small>
			<?php } ?>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-4">
			<label>Telefon 1</label>
			<input class="form-control" placeholder="Telefon numaranız"
			name="phone_1"
			value="<?php echo isset($form_error) ? set_value("phone_1") : $item->phone_1; ?>">
			<?php if (isset($form_error)) { ?>
				<small
				class="pull-right input-form-error"> <?php echo form_error("phone_1"); ?></small>
			<?php } ?>
		</div>

		<div class="form-group col-md-4">
			<label>Telefon 2</label>
			<input class="form-control" placeholder="Diğer telefon numaranız (opsiyonel)" name="phone_2"
			value="<?php echo isset($form_error) ? set_value("phone_2") : $item->phone_2; ?>">
		</div>
	</div>
	
	<div class="row">
		<div class="form-group col-md-4">
			<label>Whatsapp Numaranız</label>
			<input class="form-control" placeholder="Whatsapp numaranız"
			name="whatsapp"
			value="<?php echo isset($form_error) ? set_value("whatsapp") : $item->whatsapp; ?>">
		</div>
	
	</div>

	<div class="row">
		<div class="form-group col-md-8">
			<label>Alt Bölüm (Footer) Yazısı</label>
			<input class="form-control" placeholder="Alt Bölüm (Footer) Yazısı"
			name="footer_title"
			value="<?php echo isset($form_error) ? set_value("footer_title") : $item->footer_title; ?>">
		</div>

	</div>
	
</div>
