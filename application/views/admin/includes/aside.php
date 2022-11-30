<?php $user_permission = get_user_permission()?>




<aside id="sidebar-left" class="sidebar-left">
	
	<div class="sidebar-header">
		<div class="sidebar-title">Menü</div>
		<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
			<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
		</div>
	</div>
	
	<div class="nano">
		<div class="nano-content">
			<nav id="menu" class="nav-main" role="navigation">
				<ul class="nav nav-main">
					
					<!-- BÜTÜN KULLANICILAR İÇİN GÖZÜKÜR!!-->
					<?php if($user_permission>0){?>
						
						<li>
							<a href="<?php echo base_url('dashboard') ?>">
								<i class="fa fa-home" aria-hidden="true"></i>
								<span>Ana Sayfa</span>
							</a>
						</li>
					
					<?php }?>
					
					
					<!-- ADMİN ve EDİTÖR İÇİN GÖZÜKÜR!!-->
					<?php if($user_permission>1){?>
					
						<li><a href="<?php echo base_url('blogs'); ?>"><i class="fa fa-file" aria-hidden="true"></i>Bloglar</a></li>
					
					<?php }?>
					
					
					
					
					
					
					
					
					
					
					
					<!-- SADECE ADMİN İÇİN GÖZÜKÜR!!-->
					<?php if($user_permission>2){?>
					
					<li><a href="<?php echo base_url('teams'); ?>"><i class="fa fa-male" aria-hidden="true"></i>Ekibimiz</a></li>
					
					<li><a href="<?php echo base_url('settings/email'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i>E-Posta Ayarları</a></li>

					<li><a href="<?php echo base_url('users'); ?>"><i class="fa fa-users" aria-hidden="true"></i>Kullanıcılar</a></li>
				
					<li><a href="<?php echo base_url('settings'); ?>"><i class="fa fa-gears" aria-hidden="true"></i>Site Ayarları</a></li>
					
					<?php }?>
					
				</ul>
			</nav>
			
			
		</div>
		
	</div>
	
</aside>

<style>

	li {
	  color: #fff;
	  display: block;
	  padding: 1rem;
	  position: relative;
	  text-decoration: none;
	  transition-duration: 0.5s;
	}

</style>