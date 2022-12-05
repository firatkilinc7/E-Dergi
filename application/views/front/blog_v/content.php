
<section class="page-title position-relative overflow-hidden shape-1 right">
	<div class="container">
		<div class="row">
            <div class="col-lg-8">
                <div class="bg-white p-md-5 p-3 d-inline-block">
                  <h1 class="font-w-3 mb-4"><span class="text-primary font-w-5" style="color: #fadd01 !important"><?php echo $blog->title ?></h1>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo base_url() ?>"><i class="las la-home me-1"></i>Ana Sayfa</a>
							</li>
							<li class="breadcrumb-item active" aria-current="page" style="color: #fadd01 !important">Makalelerimiz</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<canvas id="canvas-1"></canvas>
</section>

<!--hero section end--> 

<!--blog start-->

<section>
  <div class="container">
    <div class="row justify-content-center">
	  <div class="col-lg-10">
        <!-- Blog Card -->
        <div class="card post-card rounded border-0 shadow-none">
          <img class="rounded img-fluid" src="<?php echo get_picture("admin/blogs_v",$blog->img_url, "1920x1080"); ?>" alt="<?php echo $blog->title ?>">
          <div class="card-body pt-4 pb-0 px-0">
            <ul class="list-inline">
              <li class="list-inline-item"> <a href="#" class="text-grey"><i class="lar la-user-circle me-1"></i> <?php echo get_users_full_name($blog->author) ?></a>
              </li>
              <li class="list-inline-item"> <a href="#" class="text-grey"><i class="las la-calendar-alt me-1"></i> <?php echo date("d-m-yy",strtotime($blog->createdAt)) ?></a>
              </li>
            </ul>
            <h2 class="mt-3 mb-0 font-w-5"><?php echo $blog->title ?>
              </h2>
          </div>
        </div>
        <p class="mt-5 mb-0 lead"><?php echo $blog->description ?></p>
      </div>
	  
	  <div class="col-lg-4 col-md-12 sidebar mt-5 mt-lg-0">
        <div class="box-shadow rounded p-5 mb-5">
          <div class="sidebar-links">
            <ul class="list-unstyled">
				<h4 class="text-primary" style="color: #fadd01 !important">Yazılar</h4>
			 
				<?php $blogSayisi = 0; ?>
				<?php foreach ($items as $item){ ;?>
					<?php $blogSayisi++;?>
					<li class=""><a href="<?php echo base_url("yazilar/$item->url") ?>"><span class="link-icon link-arrow"></span> <p class="link-text"><?php echo $item->title ;?></p></a>
					</li>
					<?php if($blogSayisi === 8){
						break;
					}?>
				<?php } ;?>
		
		
            </ul>
          </div>
        </div>
   
        <div class="box-shadow rounded p-5">
          <h4 class="text-primary" style="color: #fadd01 !important">Aramıza katılın!</h4>
          <p>Hemen üye olarak ilk yazınızı paylaşın.</p> <a class="btn btn-primary" style="background-color: #fadd01 !important; border-color: #fadd01 !important;" href="<?php echo base_url("register")?>"><span>Üye Ol</span></a>
        </div>
      </div>
	  
	  <style>
		.list-unstyled>li>a:hover:before{
			background: #fadd01 !important
		}
		.col-lg-10{
			width: 66% !important;
		}
	  </style>
	  
	  
	  
    </div>
  </div>
</section>

<style>
	.list-inline-item>a:hover{
		color: #fadd01 !important
	}
	
	.col-lg-10>p>a{
		color: #fadd01 !important;
	}
</style>

