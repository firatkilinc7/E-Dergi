    <?php $settings=get_settings(); ?>

    <section class="body-sign">
      <div class="center-sign">
        <a class="logo pull-left">
          <img src="<?php echo base_url();?>/assets/front/images/26-40-62_black.png" height="54" alt="" />
        </a>

        <div class="panel panel-sign">
          <div class="panel-title-sign mt-xl text-right">
            <h2 class="title text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Şifre Sıfırla</h2>
          </div>
          <div class="panel-body">
            <div class="alert alert-info">
              <p class="m-none text-weight-semibold h6">Sisteme Kayıtlı Olan E-mail Adresini giriniz.</p>
            </div>

            <form action="<?php echo base_url("reset/send-mail"); ?>" method="post">
              <div class="form-group">

                <input name="email" type="email" placeholder="E-mail" class="form-control" value="<?php echo isset($form_error) ? set_value("email") : ""; ?>">

                <?php if(isset($form_error)){ ?>
                  <small class="pull-left input-form-error"> <?php echo form_error("email"); ?></small>
                <?php } ?>

              </div>
              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
              <div class="form-group">
               <button class="btn btn-primary btn-block" type="submit">Sıfırla!</button>
             </div>

           </form>
         </div>
       </div>
     </div>
   </section>