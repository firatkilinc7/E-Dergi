<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions"> </div>
				<h2 class="panel-title"><b><?php echo $item->name; ?></b> <em> adlı ekip üyesini düzenliyorsunuz.</em> </h2>
			</header>
			<div class="panel-body">
				<form class="form-horizontal form-bordered" action="<?php echo base_url("teams/update/$item->id"); ?>" method="post" enctype="multipart/form-data" method="post">


					<div class="form-group">
						<label class="col-md-2 control-label">İsim Soyisim</label>
						<div class="col-md-10">
							<input class="form-control" placeholder="Ekip Üyesi Adı" name="name"  value="<?php echo $item->name; ?>">
							<?php if(isset($form_error)){ ?>
							<small class="pull-right input-form-error"> <?php echo form_error("name"); ?></small>
							<?php } ?>
						</div>
				    </div>

				    <div class="form-group">
						<label class="col-md-2 control-label">Rol</label>
						<div class="col-md-10">
							<input class="form-control" placeholder="Ekip Üyesi Rolü" name="role" value="<?php echo $item->role;?>">
							<?php if(isset($form_error)){ ?>
								<small class="pull-right input-form-error"> <?php echo form_error("role"); ?></small>
							<?php } ?>
						</div>	   
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label">Sıralama için rank:</label>
						<div class="col-md-10">
							<input class="form-control" placeholder="Örneğin 0 değeri 1 değerine göre daha önceliklidir." name="rank" value="<?php echo $item->rank;?>">
							<?php if(isset($form_error)){ ?>
								<small class="pull-right input-form-error"> <?php echo form_error("rank"); ?></small>
							<?php } ?>
						</div>      
					</div>


					<div class="form-group image_upload_container">
						<label class="col-md-2 control-label">Yüklü Görsel</label>
						<div class="col-md-2 image_upload_container">
							<img src="<?php echo get_picture("$frontViewFolder/$viewFolder", $item->img_url,"900x600"); ?>" alt="" class="img-responsive">
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
							<a href="<?php echo base_url("teams"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
						</div>
					</div>
				</form>
			</div>
