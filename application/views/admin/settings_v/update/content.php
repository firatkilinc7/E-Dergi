<div class="col-md-12">
	<div class="col-md-12">
		<h4 class="m-b-lg">
			<?php echo "<b>$item->company_name</b> şirket bilgilerini düzenliyorsunuz."; ?>
		</h4>
		<hr>
	</div>

	<form action="<?php echo base_url("settings/update/$item->id"); ?>" method="post" enctype="multipart/form-data">
		<div class="tabs tabs-primary">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#info" data-toggle="tab" aria-expanded="true"><i class="fa fa-star"></i> Site Bilgileri</a></li>
				<li class=""><a href="#address" data-toggle="tab" aria-expanded="false">Adres Bilgisi</a></li>
				<li class=""><a href="#about_us" data-toggle="tab" aria-expanded="false">Hakkımızda</a></li>
				<li class=""><a href="#social_media" data-toggle="tab" aria-expanded="false">Sosyal Medya</a></li>
				<li class=""><a href="#logos" data-toggle="tab" aria-expanded="false">Logo</a></li>
				<li class=""><a href="#colors" data-toggle="tab" aria-expanded="false">Renkler</a></li>

			</ul>
			<div class="tab-content">
				<?php $this->load->view("{$frontViewFolder}/$viewFolder/$subViewFolder/tabs/site_info"); ?>

				<?php $this->load->view("{$frontViewFolder}/$viewFolder/$subViewFolder/tabs/address"); ?>

				<?php $this->load->view("{$frontViewFolder}/$viewFolder/$subViewFolder/tabs/about_us"); ?>

				<?php $this->load->view("{$frontViewFolder}/$viewFolder/$subViewFolder/tabs/social_media"); ?>

				<?php $this->load->view("{$frontViewFolder}/$viewFolder/$subViewFolder/tabs/logo"); ?>
				
				<?php $this->load->view("{$frontViewFolder}/$viewFolder/$subViewFolder/tabs/colors"); ?>


			</div>
		</div>

	</div>
	<div class="col-md-12 col-lg-12 col-xl-6">
		<section class="panel panel-horizontal">		
			<div class="panel-body p-lg">
				 <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
				<button type="submit" class="btn btn-primary"></i> Güncelle</button>
				<a href="<?php echo base_url("settings"); ?>" class="btn btn-md btn-danger">İptal</a>
			</div>
		</section>
	</div>
</form>



