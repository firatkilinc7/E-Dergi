<?php $user=get_active_user(); ?>
<?php $settings=get_settings(); ?>

<header class="header">
	<div class="logo-container">
		<a class="logo" href="<?php echo base_url('dashboard'); ?>">
			<img src="<?php echo base_url();?>/assets/front/images/26-40-62_black.png" height="40" alt="<?php echo $settings->company_name; ?>" />
		</a>
		<div class="visible-xs toggle-sidebar-left">
			<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
		</div>
	</div>

	<div class="header-right">	
		<span class="separator"></span>

		<div id="userbox" class="userbox">
			<a href="#" data-toggle="dropdown">
				<figure class="profile-picture">
					<img src="<?php echo base_url('assets/admin/'); ?>images/user_icon_black.png" alt="Kullanıcı Profil Fotoğrafı" class="img-circle"/>
				</figure>
				
				<div class="profile-info">
					<span class="name"><?php echo $user->full_name; ?></span>
					<span class="role">İşlemler</span>
				</div>

				<i class="fa custom-caret"></i>
			</a>

			<div class="dropdown-menu">
				<ul class="list-unstyled">
					
					<li>
						<a role="menuitem" tabindex="-1" href="<?php echo base_url("profile");?>"><i class="fa fa-user"></i>Profilim</a>
					</li>
					
					<li>
						<a role="menuitem" tabindex="-1" href="<?php echo base_url('logout');?>"><i class="fa fa-power-off"></i> Çıkış</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</header>