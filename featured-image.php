<?php

/**
 * The Featured Image template
 * 
 * Takes the featured image URL and displays it as fullscreen background-image
 * in SINGLE PAGES and FRONT PAGE layouts, displaying the title and the sub-title on top
 * of the image. This stuff is handled by blog-content.php for other layouts (archive, search, blog...)
 * 
 * If any post thumbnail is set, then a default SVG background is displayed thanks to Trianglify by Quinn Rohlf 
 * http://qrohlf.com/trianglify/
 * 
 * Might become a slider.
 *
 * @package basil
 * @subpackage index
 * @since basil 0.3
 */

if ( has_post_thumbnail() ) {
    
  $bgurl = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-big' ); ?>
  
    <header id="image-gallery" style="background: #ccc url('<?php echo $bgurl[0]; ?>') no-repeat fixed center center; height: 100vh;"> 

<?php } else { ?>
    
    <header id="image-gallery" style="background: #ccc url('<?php the_default_bg(); ?>') no-repeat fixed center center; height: 100vh;">
    
    <?php } ?>
    
    
    <div class="titles-wrapper">
        <h2 class="entry-title"><?php the_title(); ?></h2>
        <?php if(get_field('subtitle') == true) : ?>
            <h3 class="entry-subtitle"><?php the_field('subtitle'); ?></h3>
        <?php endif; ?>
    </div>
    <div class="bottom-circle" id="circle1"><div class="bottom-arrow" id="#arrow1"></div></div>
    
</header>