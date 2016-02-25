<?php
/**
 * The Index template file
 *
 * Index.php displays single pages and the front page only
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package basil
 * @subpackage index
 * @since basil 0.3
 */

get_header(); ?>
	
	<?php get_template_part('featured-image'); ?>

<div id="page">	
    <div id="primary" class="content-area">
        
        <div class="block">
	
		<main id="single-content" class="inblock-wrap">

		<?php if ( have_posts() ) : ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part('front-content');

			// End the loop.
			endwhile;

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
            
		</main><!-- .site-main -->
	
	</div><!-- block -->
	<?php
		if (!is_archive()) {
				    get_template_part('blocks');
				}
	?>
<?php get_footer(); ?>
