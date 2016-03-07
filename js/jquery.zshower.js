/**
 * 
 * jquery.zShower makes possible to have the same effect of background-attachment: fixed
 * on mobile devices. 
 * 
 * At this stage, it need a specific DOM structure to handle image backgrounds
 * and relies on a modified version of the jquery.viewport plugin
 * 
 * However, it works just as expected!
 * 
 */


$.fn.zShower = function() {
        
    	var zImages = [];
    	var current = $(this);
    	
    	$.fn.zSetup = function() {

        	 $(this).each(function(index) {
                // 2. Inside the the loop make a new object to hold each image
                var zImage = {};
                
                 // 3. Save the information that you need from the image to that object
                zImage.element = $(this);
                zImage.father = $(this).parent();
                
                 // 4. At the end of the loop push the object to the `zImages` array
                zImages.push(zImage);
            
        	});
    	}
    	
    	function zAnime() {
    	    
    	    var h = screen.height;
    	    
            $.each(zImages, function(index, zImage) {
                // Using isOnScreen to determin if the elements is within viewport
                if(zImage.father.is(":in-viewport(250)") || zImage.father.is(":in-viewport(-250)")) {
                    zImage.element.css('z-index', -1);
                    zImage.element.css('position', 'fixed');
                    zImage.element.css('height', h + 'px');
                    zImage.element.css('top', 'auto');
                    zImage.element.css('bottom', 0);
                } else {
                    zImage.element.css('z-index', -1);
                    zImage.element.css('position', 'absolute');
                }
              });
        }
    	
    	current.zSetup();
        
        $(window).resize(function() {
                current.zSetup();
        });
        
        $(document).scroll(function() {
                zAnime();
        });
    	
        };