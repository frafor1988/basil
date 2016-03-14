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
 * @since basil 0.4
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
	add_image_size( 'thumb-small', 250, false );
	add_image_size( 'square-gallery', 1024, 1024, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'basil' ),
		'secondary' => __( 'Full Height Menu', 'basil' ),
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
 * @since basil 0.4
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
    
    // Script loads in footer
    
    if( !is_admin()){
	wp_deregister_script('jquery');
	wp_register_script('jquery', ("//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"), false, '2.2.1', true);
	wp_enqueue_script('jquery');
    }

    wp_enqueue_script( 'jquery-ui', '//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js', array( 'jquery' ),'', true);
    wp_enqueue_script( 'scrollTo', '//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js', array( 'jquery' ),'', true);
	wp_enqueue_script( 'viewport', get_template_directory_uri() . '/js/jquery.viewport.min.js', array( 'jquery' ),'', true);
	wp_enqueue_script( 'basilmobile', get_template_directory_uri() . '/js/jquery.basilmobile.js', array( 'jquery' ),'', true);
	$translation_array = array( 'templateUrl' => get_template_directory_uri() );
	wp_localize_script( 'basilmobile', 'basil', $translation_array );
	
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
        
        // ACF Fields include
        include_once( get_template_directory().'/fields/fields.php' );

}

/** Default BG IMAGE as a Function **/

// Set default value for Featured Images as Default Background
if(!get_theme_mod('basil_featured_background')) {
    set_theme_mod('basil_featured_background','yes');
}

function the_basil_bg_src() {
    
    $featback = get_theme_mod('basil_featured_background');
    
    if($featback == 'yes' && has_post_thumbnail()) {
        
        $bgurl = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumb-big' );
        echo $bgurl[0];
    
    } else {
    
        if ( get_theme_mod( 'basil_background' ) ) {
            
            $custombg = get_theme_mod( 'basil_background' );
            $bgurl = wp_get_attachment_image_src( $custombg, 'thumb-big');
            echo $bgurl[0];
            
        } else {
            
            $bgurl = get_template_directory_uri().'/img/pattern.svg';
            echo $bgurl; // outputs img src to use as background image in blog layout
            
        }
    
    }
        
}

function the_basil_bg() {
    
    $featback = get_theme_mod('basil_featured_background');
    
    if($featback == 'yes' && has_post_thumbnail()) {
        
        $bgurl = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumb-big' );
        $blockbg = "<div style='background-image: url(".$bgurl[0].")' class='block-bg'></div>";

        echo $blockbg;
    
    } else {
        
        if ( get_theme_mod( 'basil_background' ) ) {
            
            $bgurl = wp_get_attachment_image_src(get_theme_mod( 'basil_background' ), 'thumb-big');
            $blockbg = "<div class='block-bg' style='background-image: url(".$bgurl[0].");'></div>";
            echo $blockbg;
            
        } else {
            
            $bgurl = get_template_directory_uri().'/img/pattern.svg';
            $blockbg = "<div class='block-bg' style='background-image: url(".$bgurl.")'></div>";
            echo $blockbg; // outputs img src to use as background image in blog layout
            
        }   
    }
}

function the_basil_logo() {
    if ( get_theme_mod( 'basil_logo' ) ) {

        $logourl = wp_get_attachment_image_src(get_theme_mod( 'basil_logo' ), 'thumb-small');
        $homeurl = esc_url( home_url( '/' ) );
        $alt = get_bloginfo( 'name' );
        $imgtag = "<div id='logo'><a title='".$alt."' href='".$homeurl."' rel='home'><img src='".$logourl[0]."' alt='".$alt."' /></a></div>";
        
        echo $imgtag;
    } 
}

function the_basil_favicon() {
     if ( get_theme_mod( 'basil_favicon' ) ) {        
         $favurl = wp_get_attachment_image_src(get_theme_mod('basil_favicon'));
         $favtag = "<link rel='icon' type='image/png' href='".$favurl[0]."' />";
         echo $favtag;        
     } else {    
         $favurl = get_template_directory_uri().'/img/wp_favicon.png';
         $favtag = "<link rel='icon' type='image/png' href='".$favurl."' />";
         echo $favtag;    
     }
}
add_action('wp_head', 'the_basil_favicon');

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

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function custom_excerpt_length( $length ) {
    return 80;
}

/** Embedded Shortcodes **/

function action_button($atts, $content = null) {
   extract(shortcode_atts(array(
      "text" => "Ooops! Testo non configurato!",
      "label" => "Ooops! Pulsante non configurato!",
      "url" => get_site_url(),
      "target" => _self
   ), $atts));
   
    return "<div class='action-wrap'><div class='action-left'><span class='right-arrow'></span><span class='action-text'>".$text."</span></div><div class='action-right'><span class='action-button'><a class='block-more' href='".$url."' target='".$target."'>".$label."</a></span></div></div>";
}
add_shortcode("actionbutton", "action_button");

/** Theme Customizr Fields **/

function basil_theme_customizer( $wp_customize ) {
    
    // Add Custom Images (logo, favicon & bg) upload section
    $wp_customize->add_section( 'basil_custom_images' , array(
    'title'       => __( 'Favicon, Logo & Backgrounds', 'basil' ),
    'priority'    => 30,
    'description' => 'Upload your logo and the default background. The logo will be displayed on the top left corner. The background will be displayed if no featured image is set in post/pages.',
    ) );
    
    $wp_customize->add_setting( 'basil_favicon' );
    
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'basil_favicon', array(
    'label'    => __( 'Site Favicon. Format: png, 64*64px', 'basil' ),
    'section'  => 'basil_custom_images',
    'mime_type' => 'image/png',
    'settings' => 'basil_favicon',
    ) ) );
    
    $wp_customize->add_setting( 'basil_logo' );
    
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'basil_logo', array(
    'label'    => __( 'Site Logo', 'basil' ),
    'section'  => 'basil_custom_images',
    'mime_type' => 'image',
    'settings' => 'basil_logo',
    ) ) );
	
	$wp_customize->add_setting( 'basil_background' );
    
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'basil_background', array(
    'label'    => __( 'General Sitewide Background Image', 'basil' ),
    'section'  => 'basil_custom_images',
    'mime_type' => 'image',
    'settings' => 'basil_background',
    ) ) );
    
    $wp_customize->add_setting( 'basil_featured_background' );
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'basil_featured_background', array(
                'label'          => __( 'If a featured image is set, do you want to use it as a custom background?', 'basil' ),
                'section'        => 'basil_custom_images',
                'settings'       => 'basil_featured_background',
                'type'           => 'radio',
                'choices'        => array(
                    'yes'   => __( 'yes' ),
                    'no'  => __( 'no' )
                )
            )
        )
    );

}
add_action( 'customize_register', 'basil_theme_customizer' );


?>