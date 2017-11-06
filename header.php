<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags !-->
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo get_bloginfo( 'name' ); ?></title>

  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/photoswipe.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/default-skin/default-skin.css">
  <!-- Core JS file -->
  <script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/photoswipe.min.js"></script>

  <!-- UI JS file -->
  <script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/photoswipe-ui-default.min.js"></script>
  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/gallery.js"></script>

   <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
   <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
   <link href="<?php echo get_bloginfo('template_directory'); ?>/css/jenssen.css" rel="stylesheet">
   <?php wp_head(); ?>
</head>
<body>
  <div class="lj-masthead">
    <div class="container">
<!--      <nav class="lj-nav">
     	<div class="lj-navitem active" href="#">Home</div>
      </nav>
-->    </div>
  </div>

  <div class="container">
    <div class="blog-header">
    <h1 class="blog-title text-center"><a href="<?php echo get_bloginfo( 'wpurl'); ?>"><?php echo get_bloginfo( 'name'); ?></a></h1>
    <h2 class="lead claim text-center"><?php echo get_bloginfo('description')?></p>
    </div>
