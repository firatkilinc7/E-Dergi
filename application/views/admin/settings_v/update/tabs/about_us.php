<div id="about_us" class="tab-pane">
    <div class="form-group">
        <label>Hakkımızda Başlığı</label>
        <textarea name="about_uss" ><?php echo isset($form_error) ? set_value("about_us") : $item->about_us; ?></textarea>
        <script>
            CKEDITOR.replace( 'about_uss' );
        </script>       
    </div>

    <div class="form-group">
        <label>Hakkımzda Paragraf</label>
        <textarea name="about_ush2" ><?php echo isset($form_error) ? set_value("about_ush2") : $item->about_ush2; ?></textarea>
        <script>
            CKEDITOR.replace( 'about_ush2' );
        </script>       
    </div>

    <div class="form-group">
        <label>Hakkımzda Footer</label>
        <textarea name="about_footer"><?php echo isset($form_error) ? set_value("about_footer") : $item->about_footer; ?></textarea>
        <script>
            CKEDITOR.replace( 'about_footer' );
        </script>       
    </div>

    <div class="row">
        <div class="col-md-2">
            <img
            src="<?php echo get_picture("$frontViewFolder/$viewFolder", $item->about_img_url, "830x700"); ?>"
            alt="<?php echo $item->company_name; ?>"
            class="img-responsive"
            style="margin: 0px auto"
            >
        </div>

        <div class="form-group col-md-4">
            <label>Hakkımızda Resim Seçimi</label>
            <input type="file" name="about_img_url" class="form-control">
        </div>
		<div class="form-group col-md-6">
			<label>Slogan</label>
			<input class="form-control" placeholder="Sloganınız" name="slogan"
			value="<?php echo $item->slogan; ?>">
		</div>
    </div>
	
	
	
</div>