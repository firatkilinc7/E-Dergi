<!--footer start-->
<?php $settings=get_settings(); ?>

<footer class="bg-dark custom-pt-2 pb-5 position-relative mt-n8" style="margin-top: 0rem !important">
  <div class="footer-shape">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#181a27" fill-opacity="1" d="M0,224L20,224C40,224,80,224,120,208C160,192,200,160,240,165.3C280,171,320,213,360,213.3C400,213,440,171,480,154.7C520,139,560,149,600,176C640,203,680,245,720,234.7C760,224,800,160,840,149.3C880,139,920,181,960,170.7C1000,160,1040,96,1080,90.7C1120,85,1160,139,1200,181.3C1240,224,1280,256,1320,245.3C1360,235,1400,181,1420,154.7L1440,128L1440,0L1420,0C1400,0,1360,0,1320,0C1280,0,1240,0,1200,0C1160,0,1120,0,1080,0C1040,0,1000,0,960,0C920,0,880,0,840,0C800,0,760,0,720,0C680,0,640,0,600,0C560,0,520,0,480,0C440,0,400,0,360,0C320,0,280,0,240,0C200,0,160,0,120,0C80,0,40,0,20,0L0,0Z"></path>
    </svg>
  </div>
  <div class="primary-footer z-index-1">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 col-xl-4">
          <a class="footer-logo" href="hakkimizda">
            <img class="img-fluid" width="175" src="<?php echo base_url('assets/front/') ?>images/26-40-62_white.png" alt="Logo">
          </a>
          <p class="my-4 text-rgba"><?php echo $settings->footer_title ;?></p>
          <div class="social-icons social-colored footer-social">
            <ul class="list-inline">
              <?php if($settings->facebook <> null){ ;?>
              <li><a href="<?php echo $settings->facebook ?>"><i class="lab la-facebook-f"></i></a></li>
              <?php } ;?>
              <?php if($settings->youtube <> null){ ;?>
              <li><a href="<?php echo $settings->youtube ?>"><i class="lab la-youtube"></i></a></li>
              <?php } ;?>
              <?php if($settings->instagram <> null){ ;?>
              <li><a href="<?php echo $settings->instagram ?>"><i class="lab la-instagram"></i></a></li>
              <?php } ;?>             
              <?php if($settings->linkedin <> null){ ;?>
              <li><a href="<?php echo $settings->linkedin ?>"><i class="lab la-linkedin-in"></i></a></li>
              <?php } ;?>
            </ul>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 col-xl-2 mt-6 mt-lg-0 footer-list">
          <h5 class="mb-4 text-white">26-40-62 Soft</h5>
          <ul class="list-unstyled mb-0">
            <li class="mb-3"><a class="list-group-item-action" href="<?php echo base_url("hakkimizda");?>">Hakkımızda</a></li>
           
            <li class="mb-3"><a class="list-group-item-action" href="<?php echo base_url("404");?>">404</a></li>
       
            <li class="mb-3"><a class="list-group-item-action" href="<?php echo base_url("iletisim");?>">İletişim</a></li>
         
          
		  </ul>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 col-xl-2 mt-6 mt-lg-0 footer-list">
          <h5 class="mb-4 text-white">Blog</h5>
          <ul class="list-unstyled mb-0">
			
			<?php 
				$blogs = get_articles(); 
				$blog_sayisi = 0;
			    foreach ($blogs as $blog){?>
				<li class="mb-3"><a class="list-group-item-action" href="yazilar/<?php echo $blog->url;?>"><?php echo $blog->title; ?></a></li>
				<?php 
					$blog_sayisi++;
					if($blog_sayisi===5){
						break;
					}
				} ?> 
          </ul>
        </div>
        <div class="col-12 col-lg-6 col-xl-4 mt-6 mt-xl-0">
          <h5 class="mb-4 text-white">İletişim</h5>
          <ul class="media-icon list-unstyled font-w-5">
              <li> <i class="las la-map-pin" style="padding-right: 8px; padding-left: 8px; color: #16171c !important;"></i>
                <p class="mb-0 text-rgba"><?php echo strip_tags($settings->address) ;?></p>
              </li>
              <li><i class="las la-envelope-open-text" style="color: #16171c !important;"></i>  <a href="mailto:<?php echo $settings->email ;?>"><?php echo $settings->email ;?></a>
              </li>
              <li><i class="las la-phone-volume" style="color: #16171c !important;"></i>  <a href="tel:+<?php echo $settings->phone_1 ;?>"><?php echo $settings->phone_1 ;?></a>
              </li>
            </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="secondary-footer mt-8 border-top border-dark pt-5">
    <div class="container">
      <div class="row text-center">
        <div class="col text-white">Copyright ©2022 Bütün Hakları Saklıdır. | Website made by <i class="lar la-heart text-white heartBeat2 mx-1"></i>  <u><a class="text-white" href="https://github.com/firatkilinc7">firatkilinc7</a></u>
        </div>
      </div>
    </div>
  </div>
</footer>