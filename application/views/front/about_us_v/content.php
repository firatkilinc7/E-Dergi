<?php $settings=get_settings(); ?>

<!--hero section start-->

<section class="page-title position-relative overflow-hidden shape-1 right">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="bg-white p-md-5 p-3 d-inline-block">
          <h1 class="font-w-3 mb-4"><span class="text-primary font-w-5 secondary-color">Hakkımızda</span></h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url()?>"><i class="las la-home me-1"></i>Ana Sayfa</a>
              </li>
            <li class="breadcrumb-item"><?php echo $settings->company_name;?></li>
              <li class="breadcrumb-item active secondary-color" aria-current="page">Hakkımızda</li>
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
        <img class="img-fluid topBottom" src="<?php echo get_picture("admin/settings_v",$settings->about_img_url, "830x700"); ?>">
      </div>
      <div class="col-12 col-lg-6">
        <div class="mb-3">
          <h6 class="font-w-5 mb-3 position-relative py-1 px-3 text-white rounded subtitle-effect box-shadow bg-primary d-inline-block secondary-background-color primary-color">
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
          <h6 class="font-w-5 mb-3 position-relative py-1 px-3 text-white rounded subtitle-effect box-shadow bg-primary d-inline-block secondary-background-color primary-color">
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
          
          
          
		  <?php foreach ($our_teams as $our_team){ ?>
          <div class="col-sm-6 mt-5">
            <div class="team-member">
              <div class="team-images secondary-background-color-before">
                <img class="img-fluid" src="<?php echo get_picture("admin/teams_v",$our_team->img_url, "900x600"); ?>" alt="">
              </div>
              <div class="team-description">
                <h5 class="primary-color"><?php echo $our_team->name; ?></h5>
                <span class="secondary-color"><?php echo $our_team->role;?></span> 
              </div>
              <ul class="team-social-icon list-inline">
                <li><a href="#"><i class="lab la-facebook-f secondary-color"></i></a>
                </li>
                <li><a href="#"><i class="lab la-twitter secondary-color"></i></a>
                </li>
                <li><a href="#"><i class="lab la-pinterest-p secondary-color"></i></a>
                </li>
                <li><a href="#"><i class="lab la-linkedin-in secondary-color"></i></a>
                </li>
              </ul>
            </div>
          </div>
		  <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!--team end-->




</div>

<!--body content end--> 