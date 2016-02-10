<?php
/**
 * The Footer template
 *
 * Contains the closing of the #content div and all content after,
 * such as the 4 footer widget areas and the colophon widget area
 *
 * @package basil
 * @subpackage index
 * @since basil 0.1
 */
?>


</div><!-- #Primary -->
</div><!-- #page -->
<?php the_posts_pagination( array(
                'mid_size' => 2,
                'prev_text' => __( '«', 'textdomain' ),
                'next_text' => __( '»', 'textdomain' ),
        ) );
        
    $sidebar_count = 0;
    $sidebar_loop = 1;
    
    while ($sidebar_loop <= 4) { // This loop is used to count how many active sidebar we have in Footer
        
        $sidebar_name = 'sidebar-'.$sidebar_loop;
        
        if (is_active_sidebar($sidebar_name)) { $sidebar_count++; }
        
        $sidebar_loop++;
        
        
    } // END SIDEBAR COUNTER ?>
    
    <div id="sidebar-footer" class="block col-<?php echo $sidebar_count; ?>"> <!--- #SIDEBAR-FOOTER START-->
    
    <?php if ($sidebar_count != 0 ) { // If there is any sidebar out there, then show it (or them!) ?>
    
        
            <div class="inblock-wrap"> <!--- INNER WRAPPER START -->
                
                <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                	<div class="single-block single-sidebar">
                		<?php dynamic_sidebar( 'sidebar-1' ); ?>
                	</div>
                <?php endif; ?>
                
                <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
                	<div class="single-block single-sidebar">
                		<?php dynamic_sidebar( 'sidebar-2' ); ?>
                	</div>
                <?php endif; ?>
                
                <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
                	<div class="single-block single-sidebar">
                		<?php dynamic_sidebar( 'sidebar-3' ); ?>
                	</div>
                <?php endif; ?>
                
                <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
                	<div class="single-block single-sidebar">
                		<?php dynamic_sidebar( 'sidebar-4' ); ?>
                	</div>
                <?php endif; ?>            
                
            
            </div> <!--- INNER WRAPPER END -->
    
    <?php   } ?>
    
    </div> <!--- #SIDEBAR-FOOTER END -->
    
    <footer id="colophon">
        <div class="single-block single-colophon">
            <?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
            	<?php dynamic_sidebar( 'sidebar-5' ); ?>
            <?php else : ?>
                <p class="credits">
                    Basil, an awesome open-source theme by ffd-web, is released under GPLv2 license.</br>
                    <span style="font-style: italic;">Open Source Matters</span>
                </p>
            <?php endif; ?>
        </div>
    </footer>

	<?php get_template_part('script-loader'); ?>
	<?php wp_footer(); ?>
</body>
</html>
