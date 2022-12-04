<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <div class="panel-actions"> </div>
        <h2 class="panel-title"><em>Profiliniz</em> </h2>
      </header>
      <div class="panel-body">
        
        <div>
			<label class="col-md-2 control-label">Kullanıcı Adı</label>
			<div class="col-md-10">
				<p><?php echo $item->user_name; ?></p>
			</div>
        </div>
		
		<div>
			<label class="col-md-2 control-label">Ad-Soyad</label>
			<div class="col-md-10">
				<p><?php echo $item->full_name; ?></p>
			</div>
        </div>
        
		<div>
			<label class="col-md-2 control-label">E-Posta Adresi</label>
			<div class="col-md-10">
				<p><?php echo $item->email; ?></p>
			</div>
        </div>

		<div>
			<label class="col-md-2 control-label">Kullanıcı Rolü</label>
			<div class="col-md-10">
				<p><?php echo $item->type; ?></p>
			</div>
        </div>
		
		<div>
			<label class="col-md-2 control-label">Şifre</label>
			<div class="col-md-10">
				<p><b>********</b></p>
			</div>
        </div>

        <div>
			  <a href="<?php echo base_url("profile/update_form"); ?>" class="btn btn-sm btn-primary btn-outline"><i class="fa fa-pencil-square-o"></i> Düzenle</a>
			  <a href="<?php echo base_url("profile/update_password_form"); ?>" class="btn btn-sm btn-warning btn-outline"><i class="fa fa-key"></i> Şifre Değiştir</a>
        </div>
    </div>
