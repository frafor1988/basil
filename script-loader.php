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

basilmobile();

$(document).scroll(function() {
	    
	        if ($('#visibilitychecker').is(':in-viewport(200)') || $('#visibilitychecker').is(":in-viewport(0)")) {
                $('#colophon').css("z-index", -2);
            } else {
                $('#colophon').css("z-index", -3);
            }
            
});
	
/** IE10-11 & Edge scrolling jittering fix (should disable smoothscroll) **/
	
if(navigator.userAgent.match(/MSIE 10/i) || navigator.userAgent.match(/Trident\/7\./) || navigator.userAgent.match(/Edge\/12\./)) {
    $('body').on("mousewheel", function () {
      event.preventDefault();
      var wd = event.wheelDelta;
      var csp = window.pageYOffset;
      window.scrollTo(0, csp - wd) 
    });
}   

/** Other stuff that needs some work to look neat **/
 
 <?php if(is_page()) { ?>
 
    /** Some vars **/
    var windowH = $(window).height();
 
    function marginTop() {
            
        
		$("#page").css("margin-top", windowH +'px');
		$("#image-gallery").css("max-height", windowH +'px');
    		
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
	
	// The code below is used to prevent webpage recalculation for small changes in viewport
	
	$(window).resize(function() { 

	    var newH = $(window).height();      // Records new windows height after resize
	    var maxH = windowH + 60;        // Sets a positive delta of 50px
	    var minH = windowH - 60;      // Sets a negative delta of 50px
	        if( newH > maxH || newH < minH ) {           // If the height difference is more than 50px, then set new marginTop for #page
		        marginTop();
	        } else {  // Otherwise, do nothing  
	        }                       
	});
	
<?php } ?>
	
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