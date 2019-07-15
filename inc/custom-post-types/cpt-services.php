<?php
function add_services_post_type(){
    $labels = array(
		'name'               		=> _x( 'Services', 'post type general name', 'Regina Tours Israel' ),
		'singular_name'      		=> _x( 'Service', 'post type singular name', 'Regina Tours Israel' ),
		'menu_name'          		=> _x( 'Services', 'admin menu', 'Regina Tours Israel' ),
		'name_admin_bar'     		=> _x( 'Services', 'add new on admin bar', 'Regina Tours Israel' ),
		'add_new'            		=> _x( 'Add New Service', 'service', 'Regina Tours Israel' ),
		'add_new_item'       		=> __( 'Add New Services', 'Regina Tours Israel' ),
		'new_item'           		=> __( 'New Services', 'Regina Tours Israel' ),
		'edit_item'          		=> __( 'Edit Services', 'Regina Tours Israel' ),
		'view_item'          		=> __( 'View Services', 'Regina Tours Israel' ),
		'all_items'          		=> __( 'All Services', 'Regina Tours Israel' ),
		'search_items'       		=> __( 'Search Services', 'Regina Tours Israel' ),
		'parent_item_colon'  		=> __( 'Parent Services:', 'Regina Tours Israel' ),
		'not_found'          		=> __( 'No services found.', 'Regina Tours Israel' ),
		'not_found_in_trash' 		=> __( 'No services found in Trash.', 'Regina Tours Israel' )
	);
    $args = array(
        'labels' 					=> $labels,
        'description' 				=> 'Services Post Format',
        'public' 					=> true,
        'show_in_nav_menus' 		=> false,
        'menu_position' 			=> 6,
        'show_in_rest' 				=> true,
        'menu_icon' 				=> 'dashicons-admin-post',
        'supports' 					=> array('title', 'editor','thumbnail')
    );
    register_post_type('services', $args);
}
add_action('init', 'add_services_post_type');


