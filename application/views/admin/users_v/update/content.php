<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <div class="panel-actions"> </div>
        <h2 class="panel-title"><b><?php echo $item->full_name; ?></b> <em>kaydını düzenliyorsunuz.</em> </h2>
      </header>
      <div class="panel-body">
        <form class="form-horizontal form-bordered" action="<?php echo base_url("users/update/$item->id"); ?>" method="post" method="post">

         <div class="form-group">
          <label class="col-md-2 control-label">Kullanıcı Adı</label>
          <div class="col-md-10">
            <input class="form-control" placeholder="Kullanıcı Adı" name="user_name" value="<?php echo isset($form_error) ? set_value("user_name") : $item->user_name ; ?>">
            <?php if(isset($form_error)){ ?>
            <small class="pull-right input-form-error"> <?php echo form_error("user_name"); ?></small>
            <?php } ?>
          </div>
        </div>

        <div class="form-group">
         <label class="col-md-2 control-label">Ad Soyad</label>
         <div class="col-md-10">
          <input class="form-control" placeholder="Ad Soyad" name="full_name" value="<?php echo isset($form_error) ? set_value("full_name") : $item->full_name; ?>">
          <?php if(isset($form_error)){ ?>
          <small class="pull-right input-form-error"> <?php echo form_error("full_name"); ?></small>
          <?php } ?>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label">E-posta Adresi</label>
        <div class="col-md-10">
          <input class="form-control" type="email" placeholder="E-posta Adresi" name="email" value="<?php echo isset($form_error) ? set_value("email") : $item->email; ?>">
          <?php if(isset($form_error)){ ?>
          <small class="pull-right input-form-error"> <?php echo form_error("email"); ?></small>
          <?php } ?>
        </div>
        </div>
		
	   <div class="form-group">
        <label class="col-md-2 control-label">Kullanıcı Rolü</label>
        <div class="col-md-10">
          <select name="type" id="user_type">
			  <option <?=$item->type=='admin'?'selected="selected"':'';?> value="admin">Admin</option>
			  <option <?=$item->type=='editor'?'selected="selected"':'';?> value="editor">Editör</option>
			  <option <?=$item->type=='anon'?'selected="selected"':'';?> value="anon">Anon</option>
		  </select>
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
