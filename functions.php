<?php
/**
 * Katarina functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Katarina
 */

if ( ! function_exists( 'katarina_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function katarina_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Katarina, use a find and replace
		 * to change 'katarina' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'katarina', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'katarina' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'katarina_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'katarina_setup' );

/**
 *
 * Register new menu
 *
 */
 register_nav_menus( array(
 	'menu_mobile' => 'Mobile Navigation Menu',
 	'footer_menu' => 'My Custom Footer Menu',
) );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function katarina_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'katarina_content_width', 640 );
}
add_action( 'after_setup_theme', 'katarina_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function katarina_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'katarina' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'katarina' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'katarina_widgets_init' );

function add_custom_post_types() {

	register_post_type('service', array(
		'supports' => array('title', 'thumbnail'),
		'rewrite' => array('slug' => 'service'),
		'has_archive' => true,
		'public' => true,
		'labels' => array(
			'name' => 'Service',
			'add_new_item' => 'Add New Service',
			'edit_item' => 'Edit Service',
			'all_items' => 'All Services',
			'singular_name' => 'Service'
		),
		'menu_icon' => 'dashicons-admin-appearance'
	));

}
add_action('init', 'add_custom_post_types');

function custom_add_form_tag_clock() {
    wpcf7_add_form_tag( 'clock', 'custom_clock_form_tag_handler' ); // "clock" is the type of the form-tag
}

function custom_clock_form_tag_handler( $tag ) {
    return date_i18n( get_option( 'time_format' ) );
}
add_action( 'wpcf7_init', 'custom_add_form_tag_clock' );
/**
 * Enqueue scripts and styles.
 */
function katarina_scripts() {
	wp_enqueue_style( 'katarina-style', get_stylesheet_uri() );
	wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css?family=Ubuntu:300,400,400i,500,700' );
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', array(), '2.2.4', true );
  wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenLite.min.js', array('jquery'), '1.20.2', true );


	wp_enqueue_script( 'katarina-index', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );

	wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyD3mhuOm1ltwUZ12j63Hllf5sgBivWKsJk', array('jquery'), '1.0', true );

	wp_enqueue_script( 'katarina-homepage', get_template_directory_uri() . '/assets/js/homepage.js', array('google-map'), '20151215', true );

	wp_enqueue_script( 'katarina-services', get_template_directory_uri() . '/assets/js/services.js', array('jquery'), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'katarina_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
