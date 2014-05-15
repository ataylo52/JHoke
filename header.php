<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width" />
<title><?php wp_title('|' ); ?></title>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

<!--[if lt IE 9]>

<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script('comment-reply'); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43086134-1', 'justinhokeguitar.com');
  ga('send', 'pageview');

</script>
<?php wp_head(); ?>
</head>

<body <?php body_class( $class ); ?>>
	<div id="outerWrapper">
    <header>
	<div id="logo"><img src="http://clevercatcreative.com/justinhokeguitar/wp-content/uploads/sites/14/2014/03/JHoke-logo-white.png" height="300" width="200">	</div>
    	<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
        <h2> <?php bloginfo ('description'); ?> </h2>
 <?php wp_nav_menu( array( 'theme_location' => 'main-nav-one' ) ); ?>      
   
           
    </header>
