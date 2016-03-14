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
 * @since basil 0.4
 */
 
?>


<script type="text/javascript">

basilmobile();

$(document).scroll(function() {
	    
	        if ($('#visibilitychecker').is(":in-viewport(0)")) {
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
    var windowW = $(window).width();
 
    function marginTop() {
        var currentH = $(window).height();
		$("#page").css("margin-top", currentH +'px');
		$("#image-gallery").css("height", currentH +'px');
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
            var newH = $(window).height();     // Records new windows height after resize
            var newW = $(window).width();
            var maxH = windowH + 90;        // Sets a positive delta of 50px
            var maxW = windowW + 60;
            var minH = windowH - 90;      // Sets a negative delta of 50px
            var minW = windowW - 60;
                if(newH > maxH) {           // If the height difference is more than 50px, then set new marginTop for #page
        	        marginTop();
                } else if(newH < minH) {
					marginTop();
				} else if(newW > maxW) {
					marginTop();
				} else if(newW < minW ) {
                    marginTop();
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