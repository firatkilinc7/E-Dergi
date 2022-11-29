<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <div class="panel-actions"> </div>
        <h2 class="panel-title">Makale Ekleme</h2>
      </header>
      <div class="panel-body">
        <form class="form-horizontal form-bordered" action="<?php echo base_url("blogs/save"); ?>" method="post" enctype="multipart/form-data" method="post">

        <div class="form-group">
          <label class="col-md-2 control-label">Makale Adı</label>
          <div class="col-md-10">
           <input class="form-control" placeholder="Makale Adı" name="title">
           <?php if(isset($form_error)){ ?>
             <small class="pull-right input-form-error"> <?php echo form_error("title"); ?></small>
           <?php } ?>
         </div>
       </div>


      <div class="form-group">
       <label class="col-md-2 control-label">Makale</label>
       <div class="col-md-10">
        <textarea name="description" id="ckeditor2"></textarea>
      </div>
      <script>
        CKEDITOR.replace( 'ckeditor2' );
      </script>       
    </div>

    <div class="form-group image_upload_container">
      <label class="col-md-2 control-label">Görsel Seçiniz</label>
      <div class="col-md-10">
        <input type="file" name="img_url" class="form-control">
      </div>
    </div>

    <div class="form-group ">
      <div class="col-md-2 pull-right">
       <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
       <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
       <a href="<?php echo base_url("blogs"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
     </div>
   </div>
 </form>
</div>
</section>
</div>
</div>