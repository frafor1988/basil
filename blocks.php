<?php

/**
 * The Blocks
 *
 * The blocks are content blocks displayed under posts or pages,
 * featuring customizable content. You got two blocks under the post / page content 
 * and you can set them with up to 4 different coloumns, thanks to a
 * powerfull that you can find just below the page / post WYSIWYG editor
 * 
 * The UI and the fields management are handled by the Advanced Custom Field 4 plug-in by Elliot Condon
 * The ACF4 plug in is integrated in basil in silent mode, and you can activate it by editing functions.php
 *
 * @package basil
 * @subpackage index
 * @since basil 0.1
 */

$blocks_enabled = get_field('activate_blocks');

if ($blocks_enabled == 1) {

    $block_loop = 1;
    $col_loop = 1;
    $activecol1 = 0;
    $activecol2 = 0;
            
            while ($block_loop <= 2) {    
                
                while ($col_loop <= 4) { // This loop is used to count how many active cols we have at Block 1
                    
                    $colname = 'activate_column_'.$block_loop.'_'.$col_loop;
                    $colname1 = 'activate_column_1_'.$col_loop;
                    
                    $is_active = get_field($colname);
                        
                        if($is_active == 1 && $colname == $colname1) {
                        
                            $activecol1++;
                            
                        }
                    
                    $col_loop++;       
                
                }  // END COL LOOP FOR BLOCK 1
                
                $col_loop = 1; // reset col loop counter
                
                while ($col_loop <= 4) { // This loop is used to count how many active cols we have at Block 2
                    
                    $colname = 'activate_column_'.$block_loop.'_'.$col_loop;
                    $colname2 = 'activate_column_2_'.$col_loop;
                    
                    $is_active = get_field($colname);
                        
                        if($is_active == 1 && $colname == $colname2) {
                            
                            $activecol2++;
                            
                        }
                    
                    $col_loop++;       
                
                }  // END COL LOOP FOR BLOCK 2
            
            $block_loop++;
            
            } // END BLOCK LOOP
    
    $block_loop = 1; // resets block loop count
    
    while ($block_loop <= 2) { 
                
                if ($block_loop == 1) { $currentcol = $activecol1; } else { $currentcol = $activecol2; }
                
                if($currentcol > 0) { // additional check: if there are active coloumns in the first/second block, then display.
                
                $blockbg = 'blockbg_'.$block_loop;
                $bgid = get_field($blockbg);
                $bgurl = wp_get_attachment_image_src($bgid, 'thumb-big');
                                
                if ( $bgurl ) { ?>
                        <div class="block col-<?php echo $currentcol; ?>" style="background: #ccc url('<?php echo $bgurl[0]; ?>') no-repeat fixed center center; padding-top: 300px;"> <!--- BLOCK START -->
                <?php 
                } else { ?>
            
            <div class="block col-<?php echo $currentcol; ?>"> <!--- BLOCK START --> <?php } ?>
                <div class="inblock-wrap flex-<?php echo $currentcol; ?>"> <!--- INNER WRAPPER -->
                    <?php
                    
                    $col_loop = 1;
                    
                    while ($col_loop <= 4) {
                        
                        $colname = 'activate_column_'.$block_loop.'_'.$col_loop;
                        
                        $is_active = get_field($colname);
                            
                            if($is_active == 1) {
                                
                                $eocname = 'eoc_'.$block_loop.'_'.$col_loop;
                                $eocval = get_field($eocname);
                                          
                                    // Now we display custom or existing content
                                
                                    if ( $eocval == 'custom' ) { 
                                        
                                        $customname = 'custom_content_'.$block_loop.'_'.$col_loop;
                                        $customval = get_field($customname);
                                        
                                        ?>
                                        
                                        <div class="single-block">
                                            <?php echo $customval; ?>
                                        </div>
        
                                    <?php
                                    } else {
                                        
                                        $existname = 'existing_content_'.$block_loop.'_'.$col_loop;
                                        $existval = get_field($existname);
                                        $postob = get_post($existval[0]);
                                        $titleattr = the_title_attribute( array('echo' => 0, 'post' => $existval[0] ));
                                        $posttitle = get_the_title($existval[0]);
                                        $postimg = get_the_post_thumbnail($existval[0], 'thumb-medium');
                                        $posturl = get_the_permalink($existval[0]);
                                        $postexc = wp_trim_words( $postob->post_content, 30 );
                                        ?>
                                        
                                        <div class="single-block existing">
                                           <div class="zoom">
                                                <a href="<?php echo $posturl; ?>">
                                                    <?php echo $postimg; ?>
                                                </a>
                                                <div class="zoom-icon"></div>
                                            </div>
                                            <?php echo '<h1>'.$posttitle.'</h1>'; ?>
                                            <?php echo '<p>'.$postexc.'</p>'; // Display the post Excerpt ?>
                                            <a class="block-more" href="<?php echo $posturl; ?>" title="<?php echo $titleattr; ?>">MORE INFO</a>
                                        </div><?php
                                    }            
                                
                            }
                        $col_loop++;
                    } // END COL LOOP
                    ?>
                </div> <!-- INNER WRAPPER END -->
            </div> <!--- BLOCK DIV END -->
        <?php
        } 
        $block_loop++;
    } // END BLOCK LOOP
} // END BLOCK_ENABLED CHECK (IF)
?>   