<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view("front/{$viewFolder}/seo"); ?>
	<?php $this->load->view('front/includes/include_style'); ?>
</head>
<body>
	<div id="pozo-page-wrapper">
		<!-- Lines -->
		<div class="content-lines-wrapper">
			<div class="content-lines-inner">
				<div class="content-lines"></div>
			</div>
		</div>

		<div class="body">
			<?php $this->load->view('front/includes/header'); ?>

			<?php $this->load->view("{$frontViewFolder}/{$viewFolder}/content"); ?>
			
			<?php $this->load->view('front/includes/footer'); ?>

			<?php $this->load->view('front/includes/include_script'); ?>

			
		</body>
		</html>
