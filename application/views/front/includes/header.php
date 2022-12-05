<!--header start-->
<header id="site-header" class="header">
    <div id="header-wrap">
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
                <li class="nav-item"> <a class="nav-link" id="ana-sayfa" href="<?php echo base_url() ;?>">Ana Sayfa</a></li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" id="biz-kimiz" href="#" data-bs-toggle="dropdown">Biz Kimiz</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url("hakkimizda") ?>">Hakkımızda</a></li>
						<li><a href="<?php echo base_url("ekibimiz") ?>">Ekibimiz</a></li>
					</ul>
				</li>            
                
				
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" id="blogs" href="#" data-bs-toggle="dropdown">Blog</a>
                  <ul class="dropdown-menu">
                    
                      <li><a href="404">asd</a>
                      </li>
                    
                  </ul>
                </li>
         
                <li class="nav-item"> <a class="nav-link" id="iletisim" href="<?php echo base_url("iletisim") ;?>">İletişim</a></li>

              </ul>
            </div>
            
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>

<!--header end-->
