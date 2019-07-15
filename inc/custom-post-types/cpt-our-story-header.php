<?php
function add_story_header_post_type(){
    $labels = array(
		'name'               		=> _x( 'Our Story Header Image', 'post type general name', 'Regina Tours Israel' ),
		'singular_name'      		=> _x( 'Header', 'post type singular name', 'Regina Tours Israel' ),
		'menu_name'          		=> _x( 'Our Story Header', 'admin menu', 'Regina Tours Israel' ),
		'name_admin_bar'     		=> _x( 'Our Story Header', 'add new on admin bar', 'Regina Tours Israel' ),
		'add_new'            		=> _x( 'Add New Page Header', 'image', 'Regina Tours Israel' ),
		'add_new_item'       		=> __( 'Add New Page Header', 'Regina Tours Israel' ),
		'new_item'           		=> __( 'New Header Image', 'Regina Tours Israel' ),
		'edit_item'          		=> __( 'Edit Our Story Header', 'Regina Tours Israel' ),
		'view_item'          		=> __( 'View Our Story Header', 'Regina Tours Israel' ),
		'all_items'          		=> __( 'All Our Story Page Headers ', 'Regina Tours Israel' ),
		'search_items'       		=> __( 'Search Page Headers', 'Regina Tours Israel' ),
		'parent_item_colon'  		=> __( 'Parent Services:', 'Regina Tours Israel' ),
		'not_found'          		=> __( 'No headers found.', 'Regina Tours Israel' ),
		'not_found_in_trash' 		=> __( 'No headers found in Trash.', 'Regina Tours Israel' )
	);
    $args = array(
        'labels' 					    => $labels,
        'description' 				=> 'Page Header for Our Story',
        'public' 					    => true,
        'show_in_nav_menus' 	=> false,
        'menu_position' 			=> 8,
        'show_in_rest' 				=> true,
        'menu_icon' 				  => 'dashicons-format-gallery',
        'supports' 					  => array('title', 'editor','thumbnail')
    );
    register_post_type('story_header', $args);
}
add_action('init', 'add_story_header_post_type');


