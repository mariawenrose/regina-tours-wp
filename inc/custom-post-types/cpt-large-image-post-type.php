<?php
function add_large_image_post_type(){
    $labels = array(
		'name'               		=> _x( 'Large Image Post', 'post type general name', 'Regina Tours Israel' ),
		'singular_name'      		=> _x( 'Image', 'post type singular name', 'Regina Tours Israel' ),
		'menu_name'          		=> _x( 'Large Image Post', 'admin menu', 'Regina Tours Israel' ),
		'name_admin_bar'     		=> _x( 'Large Image Post', 'add new on admin bar', 'Regina Tours Israel' ),
		'add_new'            		=> _x( 'Add New Large Image Post', 'image', 'Regina Tours Israel' ),
		'add_new_item'       		=> __( 'Add New Large Image Post', 'Regina Tours Israel' ),
		'new_item'           		=> __( 'New Image Post', 'Regina Tours Israel' ),
		'edit_item'          		=> __( 'Edit Image Post', 'Regina Tours Israel' ),
		'view_item'          		=> __( 'View Image Posts', 'Regina Tours Israel' ),
		'all_items'          		=> __( 'All Large Image Posts ', 'Regina Tours Israel' ),
		'search_items'       		=> __( 'Search Image Posts', 'Regina Tours Israel' ),
		'parent_item_colon'  		=> __( 'Parent Services:', 'Regina Tours Israel' ),
		'not_found'          		=> __( 'No image posts found.', 'Regina Tours Israel' ),
		'not_found_in_trash' 		=> __( 'No image posts found in Trash.', 'Regina Tours Israel' )
	);
    $args = array(
        'labels' 					    => $labels,
        'description' 				=> 'Large Image Post Type Format',
        'public' 					    => true,
        'show_in_nav_menus' 	=> false,
        'menu_position' 			=> 8,
        'show_in_rest' 				=> true,
        'menu_icon' 				  => 'dashicons-format-gallery',
        'supports' 					  => array('title', 'editor','thumbnail')
    );
    register_post_type('large_image', $args);
}
add_action('init', 'add_large_image_post_type');


