<!doctype html>
<html class="fixed">
<head>
    <?php $this->load->view("admin/includes/head"); ?>
</head>
<body>
     <?php $this->load->view("{$frontViewFolder}/{$viewFolder}/{$subViewFolder}/content"); ?>
    
    <?php $this->load->view("admin/includes/page_script"); ?>
</body>
</html>