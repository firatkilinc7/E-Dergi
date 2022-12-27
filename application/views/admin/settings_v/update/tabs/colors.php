<div id="colors" class="tab-pane">
	
	<div class="row">
		<div class="form-group col-md-4">
			<label class="col-md-4 control-label">Primary Theme Color: </label>
			<div class="color-input-wrapper">
				<input type="color" name="primary_color" value="<?php echo $item->primary_color ?>">
			</div>
		</div>
	</div>
	
	<div class="row mt-xs">
		<div class="form-group col-md-4">
			<label class="col-md-4 control-label">Secondary Theme Color: </label>
			<div class="color-input-wrapper">
				<input type="color" name="secondary_color" value="<?php echo $item->secondary_color ?>">
			</div>
		</div>
	</div>



</div>

<style>
	.color-input-wrapper {
		height: 1.5em;
		width: 1.5em;
		overflow: hidden;
		border-radius: 50%;
		display: inline-flex;
		align-items: center;
		position: relative;
	}
	.color-input-wrapper  input[type=color] {
		position: absolute;
		height: 4em;
		width: 4em;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		overflow: hidden;
		border: none;
		margin: 0;
		padding: 0;
	  }
</style>