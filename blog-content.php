<?php
/**
 * The Blog Content template
 *
 * Displays the content or the excerpt in single posts, archives,
 * search pages...
 *
 * @package basil
 * @subpackage index
 * @since basil 0.3
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'block' ); ?>>

<?php 

if ( has_post_thumbnail() ) {
    
  $bgurl = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big' ); ?>
  
    <div class="block-bg" style="background-image: url('<?php echo $bgurl[0]; ?>')">
    </div> 

<?php } else { ?>
    
    <div class="block-bg" style="background-image: url('<?php the_default_bg(); ?>')">
    </div>
    
    <?php } ?>
        <header class="entry-header">
            
            <?php if (is_home() OR is_archive()) { ?>
                <a class="permalink" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php the_title('<h1 class="entry-title">','</h1>'); ?>
                </a>
            <?php } else { ?>
                <?php the_title('<h1 class="entry-title">','</h1>'); ?>
            <?php } ?>
            <h3 class="entry-subtitle"><?php the_field('subtitle'); ?></h3>
        </header>
        
        
    <div class="inblock-wrap" role="main">
        
        <?php if (is_home() OR is_archive() OR is_search()) {
            the_excerpt();
        } else {
            the_content();
        } ?>
        <?php // the_content(); ?>
        <div class="the-meta">
                <p>Posted on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?> under <?php the_category(', ') ?><?php if(has_tag()) { ?> and tagged as <?php the_tags('',', '); ?>.<?php } else { ?>.<?php } ?></br>
        </div>
        
	</div><!-- .site-main -->

</article><!-- block -->