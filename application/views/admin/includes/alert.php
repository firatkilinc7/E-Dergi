<?php

$alert = $this->session->userdata("alert");

if($alert){

    if($alert["type"] === "success"){ ?>

        <script>
            iziToast.info({
                title: '<?php echo $alert["title"]; ?>',
                message: '<?php echo $alert["text"]; ?>',
                position : "topCenter"
            })
        </script>

    <?php } else { ?>

        <script>
            iziToast.error({
                title: '<?php echo $alert["title"]; ?>',
                message: '<?php echo $alert["text"]; ?>',
                position : "topCenter"
            })
        </script>

    <?php }
	
	$this->session->unset_userdata("alert");
} ?>