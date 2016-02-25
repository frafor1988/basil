<?php
/**
 * This file loads scripts in footer
 * 
 * Even if this is not considered a best-practice, as scripts should be included
 * through wp_enqueue_script, it is very handy to define script loading
 * and script variations in PHP.
 * 
 * script-loader.php is loaded by footer.php just before wp_footer()
 *
 * @package basil
 * @subpackage index
 * @since basil 0.3
 */
 
?>

<script type="text/javascript">
 
 <?php if(is_page()) { ?>
 
        function marginTop() {
            
            var mTop = $(window).height();
    		$("#page").css("margin-top", mTop +'px');
    		$("#image-gallery").css("max-height", mTop +'px');
    		
        };
    
	$(document).ready(function() { 
		
		    marginTop();

			$( "#circle1" ).click(function() {
				$('body').scrollTo('#primary', {
    					duration: 1000,
    					easing: 'swing'
					});
			});
		    	
	});
	
	$(window).resize(function() { 
		
		    marginTop();

		    	
	});
	
<?php } ?>

	$(document).scroll(function() {
	    
	        if ($('#page').visible()) {
                $('#colophon').css("z-index", -2);
            } else {
                $('#colophon').css("z-index", -1);
            }
            
	});
	
</script>
<?php if ( has_nav_menu( 'secondary' ) OR has_nav_menu('social' )) { ?>
    <script type="text/javascript">
    	            $(document).ready(function() {
    
                    		$('#secondary-toggle').on('click', function () {
                    			$('#fullheight-menu').toggle( 'slide', { direction: 'right' }, 1000);
                    			setTimeout(function(){
                        			$('#secondary-toggle').toggleClass( "hidemenu" );
                        			$('#secondary-toggle').toggleClass( "showmenu" );
                    			}, 1000);
                    		});
                    		
                    });
    </script>
<?php } ?>