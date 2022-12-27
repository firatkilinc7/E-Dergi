<!--services start-->

<section class="overflow-hidden position-relative pb-5">
  <div class="container-fluid px-lg-10">
    <div class="row justify-content-center text-center">
      <div class="col-12 col-lg-8">
        <div class="mb-5">
          <h6 class="font-w-5 mb-3 position-relative py-1 px-3 text-primary rounded subtitle-effect box-shadow d-inline-block secondary-background-color primary-color">
            <span>Değerli Yazarlarımızdan</span>
              </h6>
          <h2 class="mb-0"><span class="font-w-5 d-block">Seçme Yazılar</span></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="owl-carousel" data-items="4" data-xxl-items="3" data-xl-items="2" data-lg-items="2" data-md-items="2" data-sm-items="1" data-autoplay="true">
        <?php foreach ($articles as $article) {?>
        <div class="item">
            <div class="featured-item mx-4 text-center overflow-hidden p-5 bg-white rounded">
              <div class="featured-icon w-auto h-auto">
                <img class="img-fluid" src="<?php echo get_picture("admin/blogs_v",$article->img_url, "1920x1080"); ?>" alt="<?php echo $article->title?>">
              </div>
              <div class="featured-desc mt-4">
                <h5 class="mb-3"><?php echo $article->title?></h5>
                <p class="mb-0"><?php echo "Yazar: ".$article->author?></p> <a class="btn-link mt-4 secondary-background-color-hover" href="yazilar/<?php echo $article->url ?>"><i class="las la-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>
          <?php } ;?>
        </div>
        
      </div>
    </div>
  </div>
</section>

<!--services end-->
