<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package basil
 * @subpackage index
 * @since basil 0.2
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
        <?php the_basil_logo(); ?>
        <div id="child-header">
            <?php if ( has_nav_menu( 'secondary' ) OR has_nav_menu('social' )) : ?>
                <div id="secondary-toggle" class="showmenu">
                </div><!-- #secondary-toggle -->
                <div id="fullheight-menu">
                    <?php if ( has_nav_menu( 'secondary' )) : 
                        $menu_location = 'secondary';
                        $locations = get_nav_menu_locations();
                        $menu_id = $locations[ $menu_location ];
                        $menu_obj = wp_get_nav_menu_object($menu_id);
                        $menu_name = $menu_obj->name; ?>
                		<nav id="secondary-navigation" class="other-navigation" aria-label="<?php _e( 'Secondary Menu', 'basil' ); ?>">
                			<h3 class="menu-title"><?php echo $menu_name; ?></h3>
                			<?php
                				wp_nav_menu( array(
                					'theme_location' => 'secondary',
                					'menu_class'     => 'secondary-menu',
                				 ) );
                			?>
                		</nav><!-- #secondary-navigation -->
                	<?php endif; ?>
                	<?php if ( has_nav_menu( 'social' )) : 
                	    $menu_location = 'social';
                        $locations = get_nav_menu_locations();
                        $menu_id = $locations[ $menu_location ];
                        $menu_obj = wp_get_nav_menu_object($menu_id);
                        $menu_name = $menu_obj->name; ?>
                		<nav class="social-navigation" aria-label="<?php _e( 'Secondary Menu', 'basil' ); ?>">
                			<h3 class="menu-title"><?php echo $menu_name; ?></h3>
                			<?php
                				wp_nav_menu( array(
                					'theme_location' => 'social',
                					'menu_class'     => 'social-links-menu',
                					'depth'          => 1,
									'link_before'    => '<span class="screen-reader-text">',
									'link_after'     => '</span>',
                				 ) );
                			?>
                		</nav><!-- #social-navigation -->
                	<?php endif; ?>
                </div><!-- #fullpage-menu -->
	        <?php endif; ?>
	    </div>
	    <h1 class="top-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	        			<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" aria-label="<?php _e( 'Primary Menu', 'basil' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
			            <?php endif; ?>
    </header><!-- .site-header -->
            <?php if(get_field(seo_text)) { ?>
                <div class="texteo">
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_field(seo_text); ?>
                </div>
            <?php } ?>
    <?php if ( is_archive() ) { ?>
            <div class="category-wrapper">
                <div class="category-title">
                    <?php if (is_tag()) { ?>
                        <p>Posts tagged as:</p>
                    <?php } else { ?>
                        <p>Posts under:</p>
                    <?php } ?>
                    <h3><?php single_cat_title(); ?>.</h3>
                </div>
            </div>
        <?php } ?>
        <?php if ( is_search() ) { ?>
            <div class="category-wrapper">
                <div class="category-title">
                    <p>Results for:</p>
                    <h3><?php the_search_query(); ?>.</h3>
                </div>
            </div>
        <?php } ?>