		<!-- Basic -->
	<?php $settings=get_settings(); ?>
		
		<meta charset="UTF-8">

		<title>Yönetim | <?php echo $settings->company_name ?></title>
		<meta name="description" content="Yönetim Paneli">
		<meta name="author" content="firatkilinc7">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url('assets/front/') ?>images/favicon.ico" />

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<?php $this->load->view("admin/includes/page_style"); ?>
		