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
					
					<li>
						<a href="<?php echo base_url('dashboard') ?>">
							<i class="fa fa-home" aria-hidden="true"></i>
							<span>Ana Sayfa</span>
						</a>
					</li>
					
					<li><a href="<?php echo base_url('teams'); ?>"><i class="fa fa-male" aria-hidden="true"></i>Ekibimiz</a></li>
					
					<li><a href="<?php echo base_url('blogs'); ?>"><i class="fa fa-file" aria-hidden="true"></i>Bloglar</a></li>
					
					<li><a href="<?php echo base_url('settings'); ?>"><i class="fa fa-gears" aria-hidden="true"></i>Site Ayarları</a></li>
					
				
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