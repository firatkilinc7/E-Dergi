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
          <a href="<?php echo base_url("profile/update_form");?>"> <p class="text-center mt-md">Bilgileriniz yanlış mı? Güncelleyin!</p> </a>
        </div>
    </div>
