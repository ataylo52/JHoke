<?php

// Add new post type for front page slider
add_action('init', 'quote_init');
function quote_init() 
{
	$quote_labels = array(
		'name' => _x('Slider', 'post type general name'),
		'singular_name' => _x('Slider', 'post type singular name'),
		'all_items' => __('All sliders'),
		'add_new' => _x('Add slider', 'slider'),
		'add_new_item' => __('Add sliders'),
		'edit_item' => __('Edit'),
		'new_item' => __('New'),
		'view_item' => __('View'),
		'search_items' => __('Search sliders'),
		'not_found' =>  __('Not found'),
		'not_found_in_trash' => __('Not found in trash'), 
		'parent_item_colon' => ''
	);
	$args = array(
		'labels' => $quote_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title','editor','author','thumbnail','excerpt','comments','custom-fields'),
		'has_archive' => 'slider'
	); 
	register_post_type('quote',$args);
}

// Add new post type for wedding page slider
add_action('init', 'wedding_init');
function wedding_init() 
{
	$wedding_labels = array(
		'name' => _x('Wedding slider', 'post type general name'),
		'singular_name' => _x('Wedding', 'post type singular name'),
		'all_items' => __('All sliders'),
		'add_new' => _x('Add slider', 'slider'),
		'add_new_item' => __('Add sliders'),
		'edit_item' => __('Edit'),
		'new_item' => __('New'),
		'view_item' => __('View'),
		'search_items' => __('Search sliders'),
		'not_found' =>  __('Not found'),
		'not_found_in_trash' => __('Not found in trash'), 
		'parent_item_colon' => ''
	);
	$args = array(
		'labels' => $wedding_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 6,
		'supports' => array('title','editor','author','thumbnail','excerpt','comments','custom-fields'),
		'has_archive' => 'slider'
	); 
	register_post_type('wedding',$args);
}

// Add new post type for teaching page slider
add_action('init', 'teaching_init');
function teaching_init() 
{
	$teaching_labels = array(
		'name' => _x('Teaching slider', 'post type general name'),
		'singular_name' => _x('Teaching', 'post type singular name'),
		'all_items' => __('All sliders'),
		'add_new' => _x('Add slider', 'slider'),
		'add_new_item' => __('Add sliders'),
		'edit_item' => __('Edit'),
		'new_item' => __('New'),
		'view_item' => __('View'),
		'search_items' => __('Search sliders'),
		'not_found' =>  __('Not found'),
		'not_found_in_trash' => __('Not found in trash'), 
		'parent_item_colon' => ''
	);
	$args = array(
		'labels' => $teaching_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 6,
		'supports' => array('title','editor','author','thumbnail','excerpt','comments','custom-fields'),
		'has_archive' => 'slider'
	); 
	register_post_type('teaching',$args);
}



?>