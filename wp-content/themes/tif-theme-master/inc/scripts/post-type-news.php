<?php function register_news() {
	
	$labels = array(
		'name'					=> _x( 'News', 'Post Type General Name' ),
		'singular_name'			=> _x( 'News Story', 'Post Type Singular Name' ),
		'menu_name'				=> __( 'News' ),
		'parent_item_colon' 	=> __( 'Parent News Story' ),
		'all_items'				=> __( 'All News' ),
		'view_item'				=> __( 'View News Story' ),
		'add_new_item'			=> __( 'Add New News Story' ),
		'add_new'				=> __( 'Add New' ),
		'edit_item'				=> __( 'Edit News Story' ),
		'update_item'			=> __( 'Update News Story' ),
		'search_items'			=> __( 'Search News' ),
		'not_found'				=> __( 'Not Found' ),
		'not_found_in_trash'	=> __( 'Not Found in Trash' )
	);
	
	$args = array(
		'label'					=> __( 'News' ),
		'description'			=> __( 'News Stories' ),
		'labels'				=> $labels,
		'supports'				=> array( 'title', 'thumbnail', 'editor', 'excerpt', 'revisions', 'custom-fields' ),
		'hierarchical'			=> true,
		'public'				=> true,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'show_in_nav_menus'		=> true,
		'show_in_admin_bar'		=> true,
		'menu_position'			=> 5,
		'menu_icon'				=> 'dashicons-format-aside',
		'can_export'			=> true,
		'has_archive'			=> true,
		'exclude_from_search'	=> false,
		'publicly_queryable'	=> true,
		'capability_type'		=> 'page'
	);
	
	register_post_type( 'news', $args );
}
add_action( 'init', 'register_news', 0 ); ?>