<?php
function add_package_post_type(){
    $labels = array(
		'name'               		=> _x( 'Package Posts', 'post type general name', 'Regina Tours Israel' ),
		'singular_name'      		=> _x( 'Package Post', 'post type singular name', 'Regina Tours Israel' ),
		'menu_name'          		=> _x( 'Tour Packages', 'admin menu', 'Regina Tours Israel' ),
		'name_admin_bar'     		=> _x( 'Tour Packages', 'add new on admin bar', 'Regina Tours Israel' ),
		'add_new'            		=> _x( 'Add New Tour Package', 'service', 'Regina Tours Israel' ),
		'add_new_item'       		=> __( 'Add New Tour Package', 'Regina Tours Israel' ),
		'new_item'           		=> __( 'New Package Post', 'Regina Tours Israel' ),
		'edit_item'          		=> __( 'Edit Package Post', 'Regina Tours Israel' ),
		'view_item'          		=> __( 'View Package Post', 'Regina Tours Israel' ),
		'all_items'          		=> __( 'All Tour Packages', 'Regina Tours Israel' ),
		'search_items'       		=> __( 'Search Package Posts', 'Regina Tours Israel' ),
		'parent_item_colon'  		=> __( 'Parent Package Post:', 'Regina Tours Israel' ),
		'not_found'          		=> __( 'No Package Posts found.', 'Regina Tours Israel' ),
		'not_found_in_trash' 		=> __( 'No Package Posts found in Trash.', 'Regina Tours Israel' )
	);
    $args = array(
        'labels' 					  => $labels,
        'description' 			=> 'Custom Tour Package Post',
        'public' 					  => true,
        'show_in_nav_menus' => false,
        'menu_position' 		=> 7,
        'show_in_rest' 			=> true,
        'menu_icon' 				=> 'dashicons-admin-post',
        'supports' 					=> array('title', 'editor','thumbnail')
    );
    register_post_type('package', $args);
}
add_action('init', 'add_package_post_type');


