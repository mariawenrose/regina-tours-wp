<?php
function add_blog_post_type(){
    $labels = array(
		'name'               		=> _x( 'Blog Posts', 'post type general name', 'Regina Tours Israel' ),
		'singular_name'      		=> _x( 'Blog Post', 'post type singular name', 'Regina Tours Israel' ),
		'menu_name'          		=> _x( 'Blog Post', 'admin menu', 'Regina Tours Israel' ),
		'name_admin_bar'     		=> _x( 'Blog Post', 'add new on admin bar', 'Regina Tours Israel' ),
		'add_new'            		=> _x( 'Add New Blog Post', 'service', 'Regina Tours Israel' ),
		'add_new_item'       		=> __( 'Add New Blog Post', 'Regina Tours Israel' ),
		'new_item'           		=> __( 'New Blog Post', 'Regina Tours Israel' ),
		'edit_item'          		=> __( 'Edit Blog Post', 'Regina Tours Israel' ),
		'view_item'          		=> __( 'View Blog Post', 'Regina Tours Israel' ),
		'all_items'          		=> __( 'All Blog Posts', 'Regina Tours Israel' ),
		'search_items'       		=> __( 'Search Blog Posts', 'Regina Tours Israel' ),
		'parent_item_colon'  		=> __( 'Parent Blog Post:', 'Regina Tours Israel' ),
		'not_found'          		=> __( 'No Blog Posts found.', 'Regina Tours Israel' ),
		'not_found_in_trash' 		=> __( 'No Blog Posts found in Trash.', 'Regina Tours Israel' )
	);
    $args = array(
        'labels' 					  => $labels,
        'description' 			=> 'A list of custom Blog Posts',
        'public' 					  => true,
        'show_in_nav_menus' => false,
        'menu_position' 		=> 7,
        'show_in_rest' 			=> true,
        'menu_icon' 				=> 'dashicons-admin-post',
        'supports' 					=> array('title', 'editor','thumbnail')
    );
    register_post_type('blogPost', $args);
}
add_action('init', 'add_blog_post_type');


