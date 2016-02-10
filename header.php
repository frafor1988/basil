<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package basil
 * @subpackage index
 * @since basil 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <header id="top-header">
	    <h1 class="top-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	        			<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php _e( 'Primary Menu', 'basil' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
			            <?php endif; ?>
			            <?php if ( is_archive() ) { ?>
			                <div class="category-title">
			                    <?php if (is_tag()) { ?>
			                        <p>Posts tagged as:</p>
			                    <?php } else { ?>
			                        <p>Posts in:</p>
			                    <?php } ?>
			                    <h3><?php single_cat_title(); ?>.</h3>
			                </div>
			            <?php } ?>
			            <?php if ( is_search() ) { ?>
			                <div class="category-title">
			                    <p>Results for:</p>
			                    <h3><?php the_search_query(); ?>.</h3>
			                </div>
			            <?php } ?>
    </header><!-- .site-header -->