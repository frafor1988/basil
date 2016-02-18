<?php

/**
 * Basil functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 * 
 * Some Basil function and definitions are based on the official Twentysixteen
 * function.php by the Wordpress Team
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package basil
 * @subpackage index
 * @since basil 0.2
 */

if ( ! function_exists( 'basil_setup' ) ) :
function basil_setup() {

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 0, true );
	add_image_size( 'thumb-big', 1366, 660, true );
	add_image_size( 'thumb-medium', 500, 500, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'basil' ),
		'social'  => __( 'Social Links Menu', 'basil' ),
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

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );
}
endif; // basil_setup
add_action( 'after_setup_theme', 'basil_setup' );

function basil_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'basil_content_width', 1366 );
}
add_action( 'after_setup_theme', 'basil_content_width', 0 );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 */
 
function basil_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Area 1', 'basil' ),
		'id'            => 'sidebar-1',
		'description'   => __( '1st Footer Widget Area', 'basil' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Area 2', 'basil' ),
		'id'            => 'sidebar-2',
		'description'   => __( '2nd Footer Widget Area', 'basil' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Area 3', 'basil' ),
		'id'            => 'sidebar-3',
		'description'   => __( '3rd Footer Widget Area', 'basil' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Area 4', 'basil' ),
		'id'            => 'sidebar-4',
		'description'   => __( '4th Footer Widget Area', 'basil' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Colophon Area', 'basil' ),
		'id'            => 'colophon-1',
		'description'   => __( 'Bottom Colophon Widget / Credits Area', 'basil' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'basil_widgets_init' );

if ( ! function_exists( 'basil_fonts_url' ) ) :
/**
 * Register Google fonts for Twenty Sixteen.
 *
 * Create your own basil_fonts_url() function to override in a child theme.
 *
 * @return string Google fonts URL for the theme.
 */
function basil_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'basil' ) ) {
		$fonts[] = 'Open+Sans:400,600,700,800,400italic,300';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => implode( '|', $fonts),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 */
function basil_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'basil_javascript_detection', 0 );


/**
 * Enqueues scripts and styles.
 *
 * @since basil 0.1
 */
function basil_scripts() {
    
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'basil-fonts', basil_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
    wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );

	// Theme stylesheet.
	wp_enqueue_style( 'basil-style', get_stylesheet_uri() );
       
 	// Load the html5 shiv.
	wp_enqueue_script( 'basil-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
	wp_script_add_data( 'basil-html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'basil-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20150825', true );
    
    // Drop this in functions.php or your theme
    
    if( !is_admin()){
	wp_deregister_script('jquery');
	wp_register_script('jquery', ("//cdn.jsdelivr.net/jquery/2.1.4/jquery.min.js"), false, '2.1.4');
	wp_enqueue_script('jquery');
    }

    wp_enqueue_script( 'scrollTo', '//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js', array( 'jquery' ));
	wp_enqueue_script( 'visible', '//cdn.jsdelivr.net/jquery.visible/1.1.0/jquery.visible.min.js', array( 'jquery' ));
	
	wp_localize_script( 'basil-script', 'screenReaderText', array(
		'expand'   => __( 'expand child menu', 'basil' ),
		'collapse' => __( 'collapse child menu', 'basil' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'basil_scripts' );


/** ACF Theme Integration **/

if( ! class_exists('acf') ) {
        
        add_filter('acf/settings/path', 'my_acf_settings_path');
        function my_acf_settings_path( $path ) {
         
            // update path
            $path = get_template_directory() . '/inc/acf/';
            
            // return
            return $path;
        }
            
        // 2. customize ACF dir
        add_filter('acf/settings/dir', 'my_acf_settings_dir');
        function my_acf_settings_dir( $dir ) {
         
            // update path
            $dir = get_template_directory() . '/inc/acf/';
            
            // return
            return $dir;
        }   
        
        // 4. Hide & Include ACF
		define( 'ACF_LITE', true );
        include_once( get_template_directory() . '/inc/acf/acf.php' );
}

/** Default BG IMAGE as a Function **/

function the_default_bg() {
    
    $imgsrc = get_template_directory_uri().'/img/pattern.svg';
 // $imgalt = get_bloginfo( 'name' );
 // $imgtag = "<img class='attachment-thumb-big size-thumb-big wp-post-image' width='1366' height='660' alt='".$imgalt."' src='".$imgsrc."'>";
    
    echo $imgsrc; // outputs img src to use as background image in blog layout

}

/** Custom sitewide Read More button **/

add_filter( 'the_content_more_link', 'modify_read_more_link' );
function modify_read_more_link() {
return '<a class="block-more" href="' . get_permalink() . '" title="' . get_the_title() . '" >READ MORE</a>';
}

add_filter('excerpt_more', 'new_excerpt_more');
function new_excerpt_more() {
    global $post;
    return '<a class="block-more" href="' . get_permalink($post->ID) . '" title="' . get_the_title($post->ID) . '" >READ MORE</a>';
}

/** Embedded Shortcodes **/

function action_button($atts, $content = null) {
   extract(shortcode_atts(array(
      "text" => "Ooops! Testo non configurato!",
      "label" => "Ooops! Pulsante non configurato!",
      "url" => get_site_url(),
      "target" => _self
   ), $atts));
   
    return "<span class='action-wrap'><div class='action-left'><span class='right-arrow'></span><span class='action-text'>".$text."</span></div><div class='action-right'><span class='action-button'><a class='block-more' href='".$url."' target='".$target."'>".$label."</a></span></div></span>";
}
add_shortcode("actionbutton", "action_button");


/** ACF Fields include **/

// include_once( get_template_directory().'/fields/fields.php' );


?>