<section class="body-sign">
<div class="center-sign">
  <a class="logo pull-left">
	<img src="<?php echo base_url();?>/assets/front/images/26-40-62_black.png" height="54" alt="" />
  </a>

  <div class="panel panel-sign">
	<div class="panel-title-sign mt-xl text-right">
	  <h2 class="title text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Giriş</h2>
	</div>
	<div class="panel-body">          
	  <form action="<?php echo base_url("userop/do_login"); ?>" method="post">
		<div class="form-group mb-lg">
		  <label>Kullanıcı Email</label>
		  <div class="input-group input-group-icon">
			<input type="email" class="form-control" placeholder="E-posta" name="user_email">
			<?php if(isset($form_error)){ ?>
			<small class="pull-right input-form-error"> <?php echo form_error("user_email"); ?></small>
			<?php } ?>                
			<span class="input-group-addon">
			  <span class="icon icon-lg">
				<i class="fa fa-user"></i>
			  </span>
			</span>
		  </div>
		</div>

		<div class="form-group mb-lg">
		  <div class="clearfix">
			<label class="pull-left">Şifre</label>
			<a href="<?php echo base_url('reset/password') ?>" class="pull-right">Şifremi Unuttum</a>
		  </div>
		  <div class="input-group input-group-icon">
			<input type="password" id="user_password" class="form-control" placeholder="Şifre" name="user_password">
			<?php if(isset($form_error)){ ?>
				<small class="pull-right input-form-error"> <?php echo form_error("user_password"); ?></small>
			<?php } ?>
			<span class="input-group-addon">
			  <span class="icon icon-lg">
				<i class="fa fa-lock"></i>
			  </span>
			</span>
		  </div>
		  <input onclick="togglePass()" name="sifreyiGoster" type="checkbox"/>
		  <label>Şifreyi Göster</label>
		</div>

		<div class="row">
		  <div class="col-sm-8">
			<div class="checkbox-custom checkbox-default">
			  <input name="rememberme" type="checkbox"/>
			  <label for="RememberMe">Beni Hatırla</label>
			</div>
		  </div>
		  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
		  <div class="col-sm-4 text-right">
			<button type="submit" class="btn btn-primary">Giriş Yap</button>
		  </div>
		</div>


	  </form>
	  <a href="<?php echo base_url("register");?>"> <p class="text-center mt-md">Hesabınız yok mu? Hemen Kaydolun!</p> </a>
	</div>
  </div>

  <p class="text-center text-muted mt-md mb-md">&copy; Copyright <?php echo date('Y') ?>. Tüm Hakları Saklıdır.</p>
</div>
</section>

<style>
	span.icon.icon-lg {
		padding: 4px 14px !important;
	}
</style>

<script>
	function togglePass() {
		var x = document.getElementById("user_password");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}
</script>
