<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php bloginfo("name"); ?><?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="bodyColor">

  <header>
    <div class="siteinfo">
      <div class="container">
        <!--<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>-->
        <h1><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" width="" height="80" alt="空港音楽祭" /></a></h1>
        <p><?php bloginfo('name'); ?></p>
      </div>
    </div>
  </header>
