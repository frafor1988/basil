<?php

/**
 * UNUSED - The Blocks Content 
 *
 * This is a spinoff from blocks.php, trying to have a cleaner code in the block loop
 * However, variables had to be declared as global, so I decided to work on blocks.php directly
 * during the development process. Thus, the files stays here for uture integration.
 * 
 * The UI and the fields management are handled by the Advanced Custom Field 4 plug-in by Elliot Condon
 * The ACF4 plug in is integrated in basil in silent mode, and you can activate it by editing functions.php
 *
 * @package basil
 * @subpackage index
 * @since basil 0.4
 */
 
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
                                $postimg = get_the_post_thumbnail($existval[0], 'thumb-medium');
                                $postexc = wp_trim_words( $postob->post_content, 35, '<span class="block-more">GET INFO</span>' );
                                
                                echo $postimg;
                                echo '<p>'.$postexc.'</p>'; // Display the post Excerpt
                                
                            }
                            
?>