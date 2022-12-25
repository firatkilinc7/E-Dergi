       <section class="page-title position-relative overflow-hidden shape-1 right">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="bg-white p-md-5 p-3 d-inline-block">
                  <h1 class="font-w-3 mb-4"><span class="text-primary font-w-5" style="color: #fadd01 !important;">Makalelerimiz</span> </h1>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="<?php echo base_url() ?>"><i class="las la-home me-1"></i>Ana Sayfa</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page" style="color: #fadd01 !important;">Makalelerimiz</li>
                  </ol>
              </nav>
          </div>
      </div>
  </div>
</div>
<canvas id="canvas-1"></canvas>
</section>

<div class="page-content">


    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-12 mb-6 mb-lg-0">
           
		   <div class="row">
		   <?php foreach ($blogs as $blog) {?>
            
			
			<div class="container mb-4" style="max-width:20rem; border:2px solid #181a27; border-radius: 10px;">
			  <div class="row">
				
				  <a href="<?php echo base_url("makale/$blog->url") ?>" style="margin: 10px 0 10px 0;"> <img class="rounded img-fluid" src="<?php echo get_picture("admin/blogs_v",$blog->img_url, "1920x1080"); ?>" alt="<?php echo $blog->title ?>"> </a>
					<hr>	<ul class="list-inline">
						<li class="list-inline-item"> <a href="<?php echo base_url("makale/$blog->url") ?>" class="text-grey"><i class="las la-user-circle me-1"></i><?php echo $blog->author ?></a>
						</li>
						<li class="list-inline-item"> <a href="<?php echo base_url("makale/$blog->url") ?>" class="text-grey"><i class="las la-calendar-alt me-1"></i> <?php echo date("d-m-y",strtotime($blog->createdAt)) ?></a>
						</li>
						<li class="list-inline-item"> <a href="<?php echo base_url("makale/$blog->url") ?>" class="text-grey"><i class="las la-eye me-1"></i> <?php echo $blog->viewCount ?></a>
						</li>
					</ul>
				</div>
				<div class="row">
				 <a href="<?php echo base_url("makale/$blog->url")?>"><h2 class="h4 my-3"><?php echo $blog->title ?></a></h2>
				</div>
			  
			</div>	
			
			
  <?php } ?>
</div>
</div>
	  <style>
		.list-unstyled>li>a:hover:before{
			background: #fadd01 !important
		}
	  </style>

</div>
</div>
</section>

<style>
	.list-inline-item>a:hover{
		color: #fadd01 !important;
	}
	a.post-btn.float-end:hover{
		color: #fadd01 !important;
	}
</style>