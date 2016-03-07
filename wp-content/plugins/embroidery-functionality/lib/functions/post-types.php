<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
function embroidery_register_service() {

	$labels = array(
		'name'                => 'Services',
		'singular_name'       => 'Service',
		'menu_name'           => 'Services',
		'name_admin_bar'      => 'embroidery post type',
		'parent_item_colon'   => 'Parent Service:',
		'all_items'           => 'All Services',
		'add_new_item'        => 'Add New Service',
		'add_new'             => 'New Service',
		'new_item'            => 'New Item',
		'edit_item'           => 'Edit Service',
		'update_item'         => 'Update Service',
		'view_item'           => 'View Service',
		'search_items'        => 'Search Services',
		'not_found'           => 'No Services found',
		'not_found_in_trash'  => 'No Services found in Trash',
	);
	$args = array(
		'label'               => 'Service',
		'description'         => 'Post type descrption',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'custom-fields', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'services', $args );

}
add_action( 'init', 'embroidery_register_service', 0 );



function embroidery_register_logo() {

	$labels = array(
		'name'                => 'Logos',
		'singular_name'       => 'Logo',
		'menu_name'           => 'Logos',
		'name_admin_bar'      => 'embroidery post type',
		'parent_item_colon'   => 'Parent Logo:',
		'all_items'           => 'All Logos',
		'add_new_item'        => 'Add New Logo',
		'add_new'             => 'New Logo',
		'new_item'            => 'New Item',
		'edit_item'           => 'Edit Logo',
		'update_item'         => 'Update Logo',
		'view_item'           => 'View Logo',
		'search_items'        => 'Search Logos',
		'not_found'           => 'No Logos found',
		'not_found_in_trash'  => 'No Logos found in Trash',
	);
	$args = array(
		'label'               => 'Logo',
		'description'         => 'Post type descrption',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'custom-fields', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'logos', $args );

}
add_action( 'init', 'embroidery_register_logo', 0 );