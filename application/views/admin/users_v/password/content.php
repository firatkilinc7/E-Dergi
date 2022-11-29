<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <div class="panel-actions"> </div>
        <h2 class="panel-title"><b><?php echo $item->full_name; ?></b> <em>kaydının şifresini düzenliyorsunuz.</em> </h2>
      </header>
      <div class="panel-body">
        <form class="form-horizontal form-bordered" action="<?php echo base_url("users/update_password/$item->id"); ?>" method="post" method="post">

         <div class="form-group">
          <label class="col-md-2 control-label">Şifre</label>
          <div class="col-md-6">
            <input class="form-control" type="password" placeholder="Şifre" name="password">
            <?php if(isset($form_error)){ ?>
            <small class="pull-right input-form-error"> <?php echo form_error("password"); ?></small>
            <?php } ?>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Şifre Tekrar</label>
          <div class="col-md-6">
           <input class="form-control" type="password" placeholder="Şifre Tekrar" name="re_password">
           <?php if(isset($form_error)){ ?>
           <small class="pull-right input-form-error"> <?php echo form_error("re_password"); ?></small>
           <?php } ?>
         </div>
       </div>

       <div class="form-group ">
        <div class="col-md-3">
		  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
          <button type="submit" class="btn btn-primary btn-md">Güncelle</button>
          <a href="<?php echo base_url("users"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
        </div>
      </div>
    </form>
  </div>
