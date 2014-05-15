<?php
/*

Template Name: Weddings


*/

?>

<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title><?php wp_title('|' ); ?></title>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

<!--[if lt IE 9]>

<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script('comment-reply'); ?>
<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43086134-1', 'justinhokeguitar.com');
  ga('send', 'pageview');

</script>
</head>

<body <?php body_class( $class ); ?>>
	<div id="outerWrapperA">
    <header>
	<div id="logo"><img src="http://clevercatcreative.com/justinhokeguitar/wp-content/uploads/sites/14/2014/03/JHoke-logo-white.png" height="300" width="200">	</div>

 <h1 class="weddingBloginfo"> <?php bloginfo('name'); ?></a></h1>
          
       
   <?php wp_nav_menu( array( 'theme_location' => 'nav-two' ) ); ?>   
    </header>

<div id="contentWrapA">
<div id="contentA">
<h2><?php the_title(); ?></h2>
<div class="flexslider">

	<ul class="slides">
						
		<?php 

		$args = array( 
		'post_type' => 'wedding',
        'posts_per_page'   => 30,	
	);

		$postQuery = get_posts($args);
					
		foreach( $postQuery as $post ) : setup_postdata($post);

			if ( has_post_thumbnail() ) { ?>

				<li>

						

						<?php the_post_thumbnail('wedding-featured-image'); ?> </a>
				</li>

			<?php 

			}

		endforeach; ?>					

	</ul>
</div>



<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
        <?php the_post_thumbnail( 'post-thumb' ); ?>
			
       

				<div class="entry">
					<?php the_content(); ?>
                </div>
       


                
        
                     

      <?php endwhile; ?>
    <?php else : ?>
    <h2>Sorry, we couldn't find what you're looking for.</h2>
    <?php endif; ?>
  


	
<div id="left-footer"><?php dynamic_sidebar( 'Left Footer') ; ?></div>
<div id="middle-footer"><?php dynamic_sidebar( 'Middle Footer') ; ?></div>
</div> <!--end content-->
</div> <!-- end contentWrap -->

<?php get_footer(); ?>
