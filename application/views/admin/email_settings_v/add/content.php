<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
				<div class="panel-actions"> </div>
				<h2 class="panel-title">Yeni E Posta Hesabı</h2>
			</header>
			<div class="panel-body">
				<form class="form-horizontal form-bordered" action="<?php echo base_url("settings/email/save"); ?>" method="post" enctype="multipart/form-data" method="post">
					<div class="form-group">
						<label class="col-md-2 control-label">Protokol</label>
						<div class="col-md-10">
							<input class="form-control" placeholder="Protokol" name="protocol">
							<?php if(isset($form_error)){ ?>
								<small class="pull-right input-form-error"> <?php echo form_error("protocol"); ?></small>
							<?php } ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Sunucu Bilgisi</label>
						<div class="col-md-10">
						  <input class="form-control" placeholder="Hostname" name="host">
							<?php if(isset($form_error)){ ?>
								<small class="pull-right input-form-error"> <?php echo form_error("host"); ?></small>
							<?php } ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Port Numarası</label>
						<div class="col-md-10">
						  <input class="form-control" type="text" placeholder="Port" name="port" >
							<?php if(isset($form_error)){ ?>
								<small class="pull-right input-form-error"> <?php echo form_error("port"); ?></small>
							<?php } ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">E Posta Adresi(user)</label>
						<div class="col-md-10">
							<input class="form-control" type="email" placeholder="User" name="user" v>
							<?php if(isset($form_error)){ ?>
								<small class="pull-right input-form-error"> <?php echo form_error("user"); ?></small>
							<?php } ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">E posta adresi şifresi</label>
						<div class="col-md-10">
							<input class="form-control" type="password" placeholder="Şifre" name="password" >
							<?php if(isset($form_error)){ ?>
								<small class="pull-right input-form-error"> <?php echo form_error("password"); ?></small>
							<?php } ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Kimden Gidecek (from)</label>
						<div class="col-md-10">
							<input class="form-control" type="email" placeholder="Bu, mailin çıkış adresini belirtir." name="from">
							<?php if(isset($form_error)){ ?>
								<small class="pull-right input-form-error"> <?php echo form_error("from"); ?></small>
							<?php } ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Kime Gidecek (to)</label>
						<div class="col-md-10">
							<input class="form-control" type="email" placeholder="Bu, mail adresi boş bırakıldığında alıcı adresi belirler." name="to" >
							<?php if(isset($form_error)){ ?>
								<small class="pull-right input-form-error"> <?php echo form_error("to"); ?></small>
							<?php } ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">E Posta Başlık</label>
						<div class="col-md-10">
							<input class="form-control" type="text" placeholder="E-posta başlık" name="user_name" >
							<?php if(isset($form_error)){ ?>
								<small class="pull-right input-form-error"> <?php echo form_error("user_name"); ?></small>
							<?php } ?>
						</div>
					</div>

					<div class="form-group ">
						<div class="col-md-2 pull-right">
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
							<button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
							<a href="<?php echo base_url("settings/email"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
						</div>
					</div>
				</form>
			</div>
		</section>
	</div>
</div>