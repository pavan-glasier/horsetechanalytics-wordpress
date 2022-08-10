<?php
/**
 * horsetechanalytics functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package horsetechanalytics
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function horsetechanalytics_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on horsetechanalytics, use a find and replace
		* to change 'horsetechanalytics' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'horsetechanalytics', get_template_directory() . '/languages' );

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
		'header' => __( 'Header Menu', 'horsetechanalytics' ),
		'footer' => __( 'Footer Menu', 'horsetechanalytics' ),
	) );

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'horsetechanalytics_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'horsetechanalytics_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function horsetechanalytics_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'horsetechanalytics_content_width', 640 );
}
add_action( 'after_setup_theme', 'horsetechanalytics_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function horsetechanalytics_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'horsetechanalytics' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'horsetechanalytics' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'horsetechanalytics_widgets_init' );




/**
 * Enqueue scripts and styles.
 */
function horsetechanalytics_scripts() {

	wp_enqueue_style( 'horsetechanalytics-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'horsetechanalytics-style', 'rtl', 'replace' );
	
	wp_enqueue_script( 'horsetechanalytics-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'horsetechanalytics_scripts' );


function theme_style() {
	// Css
	wp_enqueue_style( 'horsetechanalytics-main', get_template_directory_uri() . '/css/main.css', array(), 'all');
	wp_enqueue_style( 'horsetechanalytics-custom-css', get_template_directory_uri() . '/css/custom.css', array(), 'all');
	wp_enqueue_style( 'horsetechanalytics-style-css', get_template_directory_uri() . '/css/style.css', array(), 'all');
	wp_enqueue_style( 'horsetechanalytics-responsive', get_template_directory_uri() . '/css/responsive.css', array(), 'all');
	wp_enqueue_style( 'horsetechanalytics-googleapis', 'https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700&family=Urbanist:wght@600;700&display=swap', array(), 'all');
	wp_enqueue_style( 'horsetechanalytics-aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), 'all');
}
add_action( 'wp_head' , 'theme_style', 1 );


function theme_scripts() {
	// Javascript
	wp_enqueue_script( 'horsetechanalytics-recaptcha-api', 'https://www.google.com/recaptcha/api.js', array(), true );
	wp_enqueue_script( 'horsetechanalytics-jquery-min-js', get_template_directory_uri() . '/js/jquery.min.js', array(), true );
	wp_enqueue_script( 'horsetechanalytics-popper-min', get_template_directory_uri() . '/js/popper.min.js', array(), true );
	wp_enqueue_script( 'horsetechanalytics-bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), true );
	wp_enqueue_script( 'horsetechanalytics-easing-min', get_template_directory_uri() . '/js/easing.min.js', array(), true );
	wp_enqueue_script( 'horsetechanalytics-swiper-min', get_template_directory_uri() . '/js/swiper.min.js', array(), true );
	wp_enqueue_script( 'horsetechanalytics-massonry-min', get_template_directory_uri() . '/js/massonry.min.js', array(), true );
	wp_enqueue_script( 'horsetechanalytics-bootstrap-slider-min', get_template_directory_uri() . '/js/bootstrap-slider.js', array(), true );
	wp_enqueue_script( 'horsetechanalytics-magnific-popup-min', get_template_directory_uri() . '/js/magnific-popup.js', array(), true );
	wp_enqueue_script( 'horsetechanalytics-waypoints', get_template_directory_uri() . '/js/waypoints.js', array(), true );
	wp_enqueue_script( 'horsetechanalytics-counterup', get_template_directory_uri() . '/js/counterup.js', array(), true );
	wp_enqueue_script( 'horsetechanalytics-isotop.pkgd-min', get_template_directory_uri() . '/js/isotop.pkgd.min.js', array(), true );
	wp_enqueue_script( 'horsetechanalytics-aos-js', get_template_directory_uri() . '/js/aos.js', array(), true );
	wp_enqueue_script( 'horsetechanalytics-app-js', get_template_directory_uri() . '/js/app.js', array(), true );
	wp_enqueue_script( 'horsetechanalytics-mainscript', get_template_directory_uri() . '/js/mainscript.js', array(), true );
}

add_action( 'wp_footer', 'theme_scripts' );

function admin_theme_style()
{
  wp_enqueue_style( 'acf-admin', get_template_directory_uri() . '/css/acf-admin.css' );
}
add_action('admin_enqueue_scripts', 'admin_theme_style');
add_action('login_enqueue_scripts', 'admin_theme_style');

function defer_parsing_of_js( $url ) {
    if ( is_user_logged_in() ) return $url; //don't break WP Admin
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.min.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) ) return $url;
    return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );

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



// Theme setting

if (function_exists('acf_add_options_page')) {
	// Theme General Settings
	$general_settings   = array(
		'page_title' 	=> __('Theme General Settings', 'horsetechanalytics'),
		'menu_title'	=> __('Themes', 'horsetechanalytics'),
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'position'      => 2,
		'redirect'	=> true
	);
	acf_add_options_page($general_settings);

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

}