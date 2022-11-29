<!doctype html>
<html class="fixed">
<head>
    <?php $this->load->view("{$frontViewFolder}/includes/head"); ?>
</head>
<body>
     <?php $this->load->view("{$frontViewFolder}/{$viewFolder}/{$subViewFolder}/content"); ?>
    
    <?php $this->load->view("{$frontViewFolder}/includes/page_script"); ?>
</body>
</html>