<!doctype html>
<html class="fixed">
<head>
	<?php $this->load->view("admin/includes/head"); ?>
	
	<script src="<?php echo base_url('assets/admin/javascripts'); ?>/gchart.js"></script>
</head>
<body>
	<section class="body">

		<!-- start header -->
		<?php $this->load->view("admin/includes/header"); ?>
		
		<!-- end header -->

		<div class="inner-wrapper">
			<!-- start sidebar -->
			<?php $this->load->view("admin/includes/aside"); ?>

			<!-- end sidebar -->

			<section role="main" class="content-body">
				<header class="page-header">
					<h2>Yönetim Paneli</h2>
					
				</header>

				<!-- start page -->
				 <?php $this->load->view("{$frontViewFolder}/{$viewFolder}/content"); ?>
				<!-- end page -->
			</section>
		</div>
	
	</section>
	<?php $this->load->view("admin/includes/page_script"); ?>
</body>
</html>