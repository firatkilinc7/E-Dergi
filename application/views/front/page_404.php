<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('front/includes/include_style'); ?>
</head>
<body>

	<div class="body">
	

		<?php $this->load->view("{$frontViewFolder}/{$viewFolder}/content"); ?>
		<?php $this->load->view('front/includes/include_script'); ?>

		

		
	</body>
	</html>
