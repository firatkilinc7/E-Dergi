<div id="logos" class="tab-pane">
  <div class="row">

    <div class="col-md-2">
        <img
        src="<?php echo get_picture("$frontViewFolder/$viewFolder", $item->logo, "263x126"); ?>"
        alt="<?php echo $item->company_name; ?>"
        class="img-responsive"
        style="margin: 0px auto"
        >
    </div>

    <div class="form-group col-md-6">
        <label>Masaüstü Logo Seçimi</label>
        <input type="file" name="logo" class="form-control">
    </div>

</div>

<hr>
<div class="row">

    <div class="col-md-2">
        <img
        src="<?php echo get_picture("$frontViewFolder/$viewFolder", $item->favicon, "32x32"); ?>"
        alt="<?php echo $item->company_name; ?>"
        class="img-responsive"
        style="margin: 0px auto"
        >
    </div>

    <div class="form-group col-md-6">
        <label>Favicon Seçimi</label>
        <input type="file" name="favicon" class="form-control">
    </div>

</div>
</div>