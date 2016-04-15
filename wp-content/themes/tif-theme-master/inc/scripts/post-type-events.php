<?php function register_events() {
	
	$labels = array(
		'name'					=> _x( 'Events', 'Post Type General Name' ),
		'singular_name'			=> _x( 'Event', 'Post Type Singular Name' ),
		'menu_name'				=> __( 'Events' ),
		'parent_item_colon' 	=> __( 'Parent Event' ),
		'all_items'				=> __( 'All Events' ),
		'view_item'				=> __( 'View Event' ),
		'add_new_item'			=> __( 'Add New Event' ),
		'add_new'				=> __( 'Add New' ),
		'edit_item'				=> __( 'Edit Event' ),
		'update_item'			=> __( 'Update Event' ),
		'search_items'			=> __( 'Search Events' ),
		'not_found'				=> __( 'Not Found' ),
		'not_found_in_trash'	=> __( 'Not Found in Trash' )
	);
	
	$args = array(
		'label'					=> __( 'events' ),
		'description'			=> __( 'Event' ),
		'labels'				=> $labels,
		'supports'				=> array( 'title', 'thumbnail', 'editor', 'excerpt', 'revisions', 'custom-fields' ),
		'hierarchical'			=> true,
		'public'				=> true,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'show_in_nav_menus'		=> true,
		'show_in_admin_bar'		=> true,
		'menu_position'			=> 5,
		'menu_icon'				=> 'dashicons-calendar-alt',
		'can_export'			=> true,
		'has_archive'			=> true,
		'exclude_from_search'	=> false,
		'publicly_queryable'	=> true,
		'capability_type'		=> 'page'
	);
	
	register_post_type( 'events', $args );
}
add_action( 'init', 'register_events', 0 ); ?>