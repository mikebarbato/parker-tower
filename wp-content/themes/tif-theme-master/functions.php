<?php
/**
 * TIF Bootstrap Child Theme functions and definitions
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * @package WordPress
 * @subpackage TIF Bootstrap
 * @since TIF Bootstrap 1.0
 */

//------------------------------------------------//
//---------------- ENQUEUE STYLES ----------------//
//------------------------------------------------//
function tif_scripts() {	
	wp_enqueue_script('script-bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'));
	wp_enqueue_script('script-app', get_stylesheet_directory_uri() . '/js/app.js', array());
	wp_enqueue_script('slick-slider-css', get_stylesheet_directory_uri() . '/js/slick.min.js', array('jquery'));
	wp_enqueue_script('masonry-layout', get_stylesheet_directory_uri() . '/js/masonry.pkgd.min.js', array('jquery'));
	wp_enqueue_script('simple-weather', '//cdnjs.cloudflare.com/ajax/libs/jquery.simpleWeather/3.1.0/jquery.simpleWeather.min.js', array('jquery'));
}

function tif_styles() {	
	wp_enqueue_style('style-bs-result', get_stylesheet_directory_uri() . '/css/result.css', array() );
	wp_enqueue_style('font-awesome-backup', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array());
	wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array());
	wp_enqueue_style('slick-slider-js', get_template_directory_uri() . '/css/slick.css', array());
}

add_action( 'wp_enqueue_scripts', 'tif_scripts' );
add_action( 'wp_enqueue_scripts', 'tif_styles' );

//------------------------------------------------//
//---------------- REQUIRED FILES ----------------//
//------------------------------------------------//
	
require_once('inc/nav-walker/wp_bootstrap_navwalker.php');

//------------------------------------------------//
//---------------- THEME SUPPORT -----------------//
//------------------------------------------------//

add_theme_support('post-thumbnails');
add_filter( 'wpmediacategory_taxonomy', function(){ return 'category_media'; } );

//------------------------------------------------//
//----------------- POST TYPES -------------------//
//------------------------------------------------//

require_once('inc/scripts/post-type-events.php');
require_once('inc/scripts/post-type-news.php');

//------------------------------------------------//
//-------------------- MENUS ---------------------//
//------------------------------------------------//

function register_my_menus() {
	
	register_nav_menus(
		array(
			'primary_navigation' => __('Primary Navigation'),
			'secondary_navigation' => __('Secondary Navigation')
		)
	);
	
} 
add_action('init', 'register_my_menus');

//------------------------------------------------//
//------------------- WIDGETS --------------------//
//------------------------------------------------//

function theme_widgets_init() {

	register_sidebar( array (
		'name' => 'Primary Widget Area',
		'id' => 'primary_widget_area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</li>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));

	register_sidebar( array (
		'name' => 'Secondary Widget Area',
		'id' => 'secondary_widget_area',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</li>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	
}
add_action( 'init', 'theme_widgets_init' );

//------------------------------------------------//
//-------------------- ADDONS --------------------//
//------------------------------------------------//

//add_filter('widget_text', 'do_shortcode'); // Allow shortcode in widgets
//remove_filter('the_content', 'wpautop'); // Removes all the extra <p> and <br /> tags from the_content()
//remove_filter('the_excerpt', 'wpautop'); // Removes all the extra <p> and <br /> tags from the_excerpt()

//------------------------------------------------//
//----------------- ADMIN EDITS ------------------//
//------------------------------------------------//

add_filter('show_admin_bar', '__return_false'); // Hide top admin bar
remove_action('admin_color_scheme_picker', 'admin_color_scheme_picker'); // Remove color scheme picker

// REMOVE DASHBOARD
function my_custom_fonts() {
	if (current_user_can('subscriber')) {
		echo '<style>
			#profile-page form p:first-child {
				display: none;
			}
			#profile-page form .show-admin-bar {
				display: none;
			}
			#wpwrap #adminmenumain #adminmenuwrap #adminmenu .wp-first-item {
				display: none;
			}
		</style>';
	}
}
add_action('admin_head', 'my_custom_fonts');

// CUSTOM LOGIN LOGO
function custom_login_logo() {
	echo '<style type="text/css">
	h1 a {
		background-image: url(/wp-content/uploads/2016/04/site-logo-dark.png) !important;
		background-size: initial !important;
		width: auto !important;
	}
	</style>';
}
add_action('login_head', 'custom_login_logo');

//------------------------------------------------//
//------------------ FUNCTIONS -------------------//
//------------------------------------------------//

add_action( 'template_redirect', 'redirect_so_18688269' );
function redirect_so_18688269() {
    if( !is_user_logged_in() && !is_page( 'home' ) ) {
        wp_redirect(home_url());
        exit();
    }
}

// REMOVES <UL></UL> FROM WP_NAV_MENU
function remove_ul ( $menu ){
    return preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );
}
add_filter( 'wp_nav_menu', 'remove_ul' );

// ADD CUSTOM ATTRIBUTES TO <A></A> WP_NAV_MENU
function add_specific_menu_location_atts( $atts, $item, $args ) {
    if( $args->theme_location == 'primary_navigation' ) {
      $atts['onClick'] = 'jQuery("#menu-close").click();';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );

// ALLOW WIDGETS TO USE PHP
add_filter('widget_text', 'execute_php', 100);
function execute_php($html) {
	if (strpos($html, "<"."?php") !== false) {
		ob_start();
		eval("?".">".$html);
		$html = ob_get_contents();
		ob_end_clean();
	}
	return $html;
}

?>