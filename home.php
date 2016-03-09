<?php
/**
 * The Blog template file
 *
 * Home.php is used to display blog, archive pages (tax and terms), search pages
 * and single posts
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package basil
 * @subpackage index
 * @since basil 0.4
 */

get_header(); ?>

<div id="page">	
    <div id="primary" class="content-area">
    
		<?php if ( have_posts() ) : ?>

			<?php
			
			// Start the loop.
			while ( have_posts() ) : the_post();
			
			    

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part('blog-content');
				
				// If comments are open or we have at least one comment, load up the comment template.
				if (is_single()) {
        			if ( comments_open() || get_comments_number() ) {
        				comments_template();
        			}
				}
				
			// End the loop.
			endwhile;

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>



<?php get_footer(); ?>
