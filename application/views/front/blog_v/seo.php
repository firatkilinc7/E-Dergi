<?php $settings=get_settings(); ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="robots" content="index, follow" />
<meta name="publisher" content="VS 2022" />
<meta name="viewport" content=" width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo base_url('assets/front/') ?>images/favicon.png" />
<title><?php echo $blog->title; ?> | <?php echo $settings->company_name; ?></title>
<meta name="description" content="<?php echo $blog->title?>">
<link rel="canonical" href="<?php echo base_url("blog-detail/$blog->url") ?>"/>
<meta name="author" content="HEKOCAN">