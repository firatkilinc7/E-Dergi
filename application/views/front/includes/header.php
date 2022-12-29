<?php $settings = get_settings(); ?>
<!--header start-->
<header id="site-header" class="header">
    <div id="header-wrap" class="primary-background-color">
      <div class="container">
        <div class="row">
          <div class="col">
            <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand logo mb-0" href="<?php echo base_url() ?>">
                <img class="img-fluid" src="<?php echo base_url('assets/front/') ?>images/26-40-62_white.png" alt="Logo">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> 
				<span></span>
                <span></span>
                <span></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto"><?php  ;?>
                <!-- Home -->
                <li class="nav-item"> <a class="nav-link secondary-color" id="ana-sayfa" href="<?php echo base_url() ;?>">Ana Sayfa</a></li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle secondary-color" id="biz-kimiz" href="#" data-bs-toggle="dropdown">Biz Kimiz</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url("hakkimizda") ?>">Hakkımızda</a></li>
					</ul>
				</li>            
                
				
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle secondary-color" id="blogs" href="#" data-bs-toggle="dropdown">Yazılarımız</a>
					
					  <ul class="dropdown-menu">
						<?php 
							$blogs = get_articles(); 
							$blog_sayisi = 0;
						?>
						<li><a href="<?php echo base_url(); ?>yazilar ">Tüm Yazılar</a></li><hr>
						<li><p>En Çok Okunanlar</p></li><hr>
						
						<?php foreach ($blogs as $blog){?>
							<li><a href="<?php echo base_url("yazilar/".$blog->url);?>"><?php echo $blog->title;?></a></li>
							<?php 
								$blog_sayisi++;
								if($blog_sayisi===8){
									break;
								}
							} ?>
					  </ul>
                </li>
         
                <li class="nav-item"> <a class="nav-link secondary-color" id="iletisim" href="<?php echo base_url("iletisim") ;?>">İletişim</a></li>
				
				<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle secondary-color" id="blogs" href="#" data-bs-toggle="dropdown">Hesap</a>
					
					<ul class="dropdown-menu">
					
						<?php if(get_active_user()){ ?>
						
						<li><a href="<?php echo base_url("dashboard");?>">Panele Git</a></li>
						<li><a href="<?php echo base_url("profile");?>">Profilim</a></li>
						<li><a href="<?php echo base_url("blogs");?>">Yazılarım</a></li>
						<li><a href="<?php echo base_url("logout");?>">Çıkış Yap</a></li>
						
						<?php }else{ ?>
					
						<li><a href="<?php echo base_url("login");?>">Giriş Yap</a></li>
						<li><a href="<?php echo base_url("register");?>">Kayıt Ol</a></li>
						
						<?php } ?>
					
					</ul>
					
				</li>
				
				
              </ul>
				<li><label class="secondary-color" style="margin-right: 1.2rem;">Party Mode</label></li>
				<ul class="navbar-nav">
					
					<div class="switch switch-success">
						<input
							data-url="<?php echo base_url("home/party_mode/$settings->party_mode"); ?>"
							class="isActive"
							type="checkbox"
							name="switch"
							id="party-mode"
							data-plugin-ios-switch
							<?php echo ($settings->party_mode) ? "checked" : ""; ?> 
						/>
					</div>
					
				</ul>
			
			</div>
            
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>


<style>

	.primary-background-color{
		background-color: <?php echo $settings->primary_color; ?> !important;
	}
	.primary-color{
		color: <?php echo $settings->primary_color; ?> !important;
	}
	.primary-background-color-hover:hover{
		background-color: <?php echo $settings->primary_color; ?> !important;
	}
	.primary-color-hover:hover{
		color: <?php echo $settings->primary_color; ?> !important;
	}
	.primary-background-color-before:before{
		background-color: <?php echo $settings->primary_color; ?> !important;
	}
	.primary-color-before:before{
		color: <?php echo $settings->primary_color; ?> !important;
	}
	
	.secondary-background-color{
		background-color: <?php echo $settings->secondary_color; ?> !important;
	}
	.secondary-color{
		color: <?php echo $settings->secondary_color; ?> !important;
	}
	.secondary-background-color-hover:hover{
		background-color: <?php echo $settings->secondary_color; ?> !important;
	}
	.secondary-color-hover:hover{
		color: <?php echo $settings->secondary_color; ?> !important;
	}
	.secondary-background-color-before:before{
		background-color: <?php echo $settings->secondary_color; ?> !important;
	}
	.secondary-color-before:before{
		color: <?php echo $settings->secondary_color; ?> !important;
	}
</style>





<!--header end-->
