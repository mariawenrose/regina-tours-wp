<?php
function add_testimonial_post_type(){
    $labels = array(
		'name'               		=> _x( 'Testimonial', 'post type general name', 'Regina Tours Israel' ),
		'singular_name'      		=> _x( 'Testimonal', 'post type singular name', 'Regina Tours Israel' ),
		'menu_name'          		=> _x( 'Testimonial', 'admin menu', 'Regina Tours Israel' ),
		'name_admin_bar'     		=> _x( 'Testimonal', 'add new on admin bar', 'Regina Tours Israel' ),
		'add_new'            		=> _x( 'Add New Testimonial', 'testimonial', 'Regina Tours Israel' ),
		'add_new_item'       		=> __( 'Add New Testimonal', 'Regina Tours Israel' ),
		'new_item'           		=> __( 'New Testimonal', 'Regina Tours Israel' ),
		'edit_item'          		=> __( 'Edit Testimonals', 'Regina Tours Israel' ),
		'view_item'          		=> __( 'View Testimonals', 'Regina Tours Israel' ),
		'all_items'          		=> __( 'All Testimonials', 'Regina Tours Israel' ),
		'search_items'       		=> __( 'Search Testimonials', 'Regina Tours Israel' ),
		'parent_item_colon'  		=> __( 'Parent Testimonial:', 'Regina Tours Israel' ),
		'not_found'          		=> __( 'No testimonial found.', 'Regina Tours Israel' ),
		'not_found_in_trash' 		=> __( 'No testimonial found in Trash.', 'Regina Tours Israel' )
	);
    $args = array(
        'labels' 					=> $labels,
        'description' 				=> 'A list of testimonial which will be held',
        'public' 					=> true,
        'show_in_nav_menus'			=> false,
        'menu_position' 			=> 5,
        'show_in_rest' 				=> true,
        'menu_icon' 				=> 'dashicons-admin-post',
        'supports' 					=> array('title', 'editor')
    );
    register_post_type('testimonial', $args);
}
add_action('init', 'add_testimonial_post_type');
