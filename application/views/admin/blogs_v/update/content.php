<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <div class="panel-actions"> </div>
        <h2 class="panel-title"><b><?php echo $item->title; ?></b> <em>blogu düzenliyorsunuz.</em> </h2>
      </header>
      <div class="panel-body">
        <form class="form-horizontal form-bordered" action="<?php echo base_url("blogs/update/$item->id"); ?>" method="post" enctype="multipart/form-data" method="post">

          <div class="form-group">
            <label class="col-md-2 control-label">Blog Adı</label>
            <div class="col-md-10">
             <input class="form-control" name="title"  value="<?php echo $item->title; ?>">
             <?php if(isset($form_error)){ ?>
               <small class="pull-right input-form-error"> <?php echo form_error("title"); ?></small>
             <?php } ?>
           </div>
         </div>

        <div class="form-group">
         <label class="col-md-2 control-label">Blog</label>
         <div class="col-md-10">
          <textarea name="description" id="ckeditor2"> <?php echo $item->description; ?></textarea>
        </div>
        <script>
          CKEDITOR.replace( 'ckeditor2' );
        </script>       
      </div>

      <div class="form-group image_upload_container">
        <label class="col-md-2 control-label">Yüklü Görsel</label>
        <div class="col-md-2 image_upload_container">
          <img src="<?php echo get_picture("$frontViewFolder/$viewFolder", $item->img_url,"1920x1080"); ?>" alt="" class="img-responsive">
        </div>
      </div>

      <div class="form-group image_upload_container">
        <label class="col-md-2 control-label">Görsel Seçiniz</label>
        <div class="col-md-10">
          <input type="file" name="img_url" class="form-control">
        </div>
      </div>

      <div class="form-group ">
        <div class="col-md-3">
         <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
         <button type="submit" class="btn btn-primary btn-md">Güncelle</button>
         <a href="<?php echo base_url("blogs"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
       </div>
     </div>
   </form>
 </div>
