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
 * @since basil 0.4
 */

?>

<header id="image-gallery"> 

    <div class="bg-wrap">
        <div class="bg-image"><img alt="<?php the_title_attribute(); ?>" src="<?php the_basil_bg_src(); ?>" /></div>
    </div>

    <div class="titles-wrapper">
        <h2 class="entry-title"><?php the_title(); ?></h2>
        <?php if(get_field('subtitle') == true) : ?>
            <h3 class="entry-subtitle"><?php the_field('subtitle'); ?></h3>
        <?php endif; ?>
    </div>
    <div class="bottom-circle" id="circle1"><div class="bottom-arrow" id="#arrow1"></div></div>
    
</header>