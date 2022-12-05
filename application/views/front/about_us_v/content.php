<?php $settings=get_settings(); ?>

<!--hero section start-->

<section class="page-title position-relative overflow-hidden shape-1 right">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="bg-white p-md-5 p-3 d-inline-block">
          <h1 class="font-w-3 mb-4"><span class="text-primary font-w-5" style="color: #fadd01 !important">Hakkımızda</span></h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url()?>"><i class="las la-home me-1"></i>Ana Sayfa</a>
              </li>
            <li class="breadcrumb-item"><?php echo $settings->company_name;?></li>
              <li class="breadcrumb-item active" aria-current="page" style="color: #fadd01 !important;">Hakkımızda</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <canvas id="canvas-1"></canvas>
</section>

<!--hero section end--> 


<!--body content start-->

<div class="page-content">



<section>
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-12 col-lg-6 mb-6 mb-lg-0">
        <img class="img-fluid topBottom" src="<?php echo get_picture("admin/settings_v",$settings->about_img_url, "830x700"); ?>" alt="Mpower Data About">
      </div>
      <div class="col-12 col-lg-6">
        <div class="mb-3">
          <h6 class="font-w-5 mb-3 position-relative py-1 px-3 text-white rounded subtitle-effect box-shadow bg-primary d-inline-block" style="background-color:#fadd01 !important; color: white !important;">
            <span>Hakkımızda</span>
              </h6>
          <h2 class="mb-0"><span class="font-w-5"><?php echo $settings->about_us;?></h2>
        </div>
        <p class="lead mb-4"><?php echo strip_tags($settings->about_ush2) ;?></p>
       
       
      </div>
    </div>
  </div>
</section>


<!-- <!--team start-->

<section class="position-relative shape-both overflow-hidden">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="mb-5">
          <h6 class="font-w-5 mb-3 position-relative py-1 px-3 text-white rounded subtitle-effect box-shadow bg-primary d-inline-block" style="background-color:#fadd01 !important; color: white !important;">
            <span>Ekibimiz</span>
              </h6>
          <h2 class="mb-0"><span class="font-w-5">Uzman Yazar Kadromuz</span> daima başarıya götürür!</h2>
        </div>
        <div class="position-relative overflow-hidden">
          <img class="img-fluid w-100 rounded" src="<?php echo base_url('assets/front/') ?>images/about/01.jpg" alt="">
          
        </div>
      </div>
      <div class="col-lg-6 ps-lg-8 mt-5 mt-lg-0">
        <div class="row">
          <div class="col-sm-6">
            <div class="team-member">
              <div class="team-images">
                <img class="img-fluid" src="<?php echo base_url('assets/front/') ?>images/team/01.png" alt="">
              </div>
              <div class="team-description">
                <h5><a href="team-single.html">Fırat KILINÇ</a></h5>
                <span>Yazar</span> 
              </div>
              <ul class="team-social-icon list-inline">
                <li><a href="#"><i class="lab la-facebook-f"></i></a>
                </li>
                <li><a href="#"><i class="lab la-twitter"></i></a>
                </li>
                <li><a href="#"><i class="lab la-pinterest-p"></i></a>
                </li>
                <li><a href="#"><i class="lab la-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 mt-5 mt-sm-0">
            <div class="team-member">
              <div class="team-images">
                <img class="img-fluid" src="<?php echo base_url('assets/front/') ?>images/team/02.png" alt="">
              </div>
              <div class="team-description">
                <h5><a href="team-single.html">Melih YILMAZ</a></h5>
                <span>Yazar</span> 
              </div>
              <ul class="team-social-icon list-inline">
                <li><a href="#"><i class="lab la-facebook-f"></i></a>
                </li>
                <li><a href="#"><i class="lab la-twitter"></i></a>
                </li>
                <li><a href="#"><i class="lab la-pinterest-p"></i></a>
                </li>
                <li><a href="#"><i class="lab la-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 mt-5">
            <div class="team-member">
              <div class="team-images">
                <img class="img-fluid" src="<?php echo base_url('assets/front/') ?>images/team/03.png" alt="">
              </div>
              <div class="team-description">
                <h5><a href="team-single.html">Fırat SADIKOĞLU</a></h5>
                <span>Yazar</span> 
              </div>
              <ul class="team-social-icon list-inline">
                <li><a href="#"><i class="lab la-facebook-f"></i></a>
                </li>
                <li><a href="#"><i class="lab la-twitter"></i></a>
                </li>
                <li><a href="#"><i class="lab la-pinterest-p"></i></a>
                </li>
                <li><a href="#"><i class="lab la-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 mt-5">
            <div class="team-member">
              <div class="team-images">
                <img class="img-fluid" src="<?php echo base_url('assets/front/') ?>images/team/04.png" alt="">
              </div>
              <div class="team-description">
                <h5><a href="team-single.html">Abdulkerim ATAŞ</a></h5>
                <span>Yazar</span> 
              </div>
              <ul class="team-social-icon list-inline">
                <li><a href="#"><i class="lab la-facebook-f"></i></a>
                </li>
                <li><a href="#"><i class="lab la-twitter"></i></a>
                </li>
                <li><a href="#"><i class="lab la-pinterest-p"></i></a>
                </li>
                <li><a href="#"><i class="lab la-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--team end-->




</div>

<!--body content end--> 