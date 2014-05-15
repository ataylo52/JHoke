<?php

require_once('portfolio-type.php'); 
  function base_filter_wp_title( $currenttitle, $sep, $seplocal ) {
// Site name	
	$site_name = get_bloginfo( 'name', '|' ); 
// Add the site name after the current page title
	$full_title = $site_name .  $currenttitle;
//If we are on homepage or not - append description	
	if (is_front_page() || is_home() ) {
//Site description
		$site_desc = get_bloginfo( 'description');
//Append site description to title
		$full_title .= '  ' . $sep . ' ' . $site_desc;
	}
	
	return $full_title;
}
//Hook into 'wp_title'
add_filter('wp_title', 'base_filter_wp_title', 10, 3);
///////////////////////////////////////



//Register Main and Footer menus
register_nav_menus(
	array(
    'main-nav-one' => 'Main Menu',
    'nav-two' => 'Wedding Menu',
	'nav-three' => 'Footer Menu'
	)
);

function custom_scripts() {
	wp_register_style('GoogleFonts', 'http://fonts.googleapis.com/css?family=Della+Respira|Source+Sans+Pro:300');
 	wp_enqueue_style('GoogleFonts');
}

add_action( 'wp_enqueue_scripts', 'custom_scripts' );


// This is for post thumbnails. call in pages by using <?php the_post_thumbnail( 'slider' ); close php tags.

add_theme_support( 'post-thumbnails' ); 
add_image_size( 'slider' , 530, 400, true );
add_image_size( 'post-thumb', 65, 50, true );
add_image_size( 'page-featured-image', 600, 160, true );
add_image_size( 'wedding-featured-image', 700, 250, true );


// Main Aside Widget

$base_main_sidebar = array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'Widgets for the right hand sidebar.',
    		'before_widget' => '<div class="widget-area">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h3 class="widget-title">',
    		'after_title'   => '</h3>',
    	);
register_sidebar( $base_main_sidebar );

// Footer Widgets 

$base_lfooter_sidebar = array(
    		'name' => 'Wedding Left Footer Widget',
    		'id'   => 'left-footer',
    		'description'   => 'Widgets for the left column of footer area.',
    		'before_widget' => '',
    		'after_widget'  => '',
    		'before_title'  => '<h3 class="widget-title">',
    		'after_title'   => '</h3>',
    	);
register_sidebar( $base_lfooter_sidebar );

$base_mfooter_sidebar = array(
    		'name' => 'Wedding Middle Footer',
    		'id'   => 'middle-footer',
    		'description'   => 'Widgets for the middle column of footer area.',
    		'before_widget' => '',
    		'after_widget'  => '',
    		'before_title'  => '<h3 class="widget-title">',
    		'after_title'   => '</h3>',
    	);
register_sidebar( $base_mfooter_sidebar );

$base_lessons_sidebar = array(
    		'name' => 'Teaching Footer',
    		'id'   => 'teaching',
    		'description'   => 'Widgets for the teaching page.',
    		'before_widget' => '<div class="widget">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h3 class="widget-title">',
    		'after_title'   => '</h3>',
    	);
		
register_sidebar( $base_lessons_sidebar );


$base_weddings_sidebar = array(
    		'name' => 'Weddings',
    		'id'   => 'weddings',
    		'description'   => 'Widgets for the weddings page.',
    		'before_widget' => '<div class="widget">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h3 class="widget-title">',
    		'after_title'   => '</h3>',
    	);
		
register_sidebar( $base_weddings_sidebar );


function tobe_flexslider() {

		// Enqueue FlexSlider JavaScript
		wp_register_script('jquery_flexslider', get_template_directory_uri(). '/js/jquery.flexslider-min.js', array('jquery') );
		wp_enqueue_script('jquery_flexslider');
		// Enqueue FlexSlider Stylesheet		
		wp_register_style( 'flexslider-style', get_template_directory_uri() . '/CSS/flexslider.css', 'all' );
		wp_enqueue_style( 'flexslider-style' );

		// FlexSlider custom settings		
		add_action('wp_head', 'tobe_flexslider_settings');
		function tobe_flexslider_settings() { ?>			
			<script>
		$(window).load(function() {        
                     $('.flexslider').flexslider({
                     slideshow: true,                  
                     animation: "fade",
                     controlNav: false,
					  directionNav: false,            
                     slideshowSpeed: 8000,          
 					  animationSpeed: 600, 
					  imageHeight: 350,
		      		  imageWidth: 700,       
                     prevText: "",           
                     nextText: "", 	             
                     pauseOnAction: false,          
                     pauseOnHover: false,            
                     useCSS: true,                  
                     touch: true,                    
                     video: false,
					      
  });
  
  
  });
			</script>
		<?php 
		}
	}


add_action('init', 'tobe_flexslider');
