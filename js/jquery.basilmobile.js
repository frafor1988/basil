/**
 * 
 * jquery.basilmobile makes Basil layout consistent
 * on mobile and tablets
 * 
 */
    
    var templateUrl = basil.templateUrl;
    var zUrl = templateUrl + '/js/jquery.zshower.js';
    
    function basilmobile() {
        
        if (/Mobi/.test(navigator.userAgent)) {   
    
            loadmobileScripts();
            addmobileClasses();
            minpostH();
    
        }
        
    }
     
    function loadmobileScripts() {
        
        $.ajax({
                url      :  zUrl,
                dataType : "script",
                success : function (response) {
                   $('head').append('<script type="text/javascript">' + response + '</script>');
                    $(document).ready(function() {
                        $('.block-bg').zShower();
                    });         
                    $(window).resize(function() {
                        $('.block-bg').zShower();
                    });
                }
            });
            
    }
    
    function addmobileClasses() {
        $('#colophon').addClass('colophon-mobile');
        $('#sidebar-footer').addClass('no-margin');
    }
    
        
    function minpostH() {
        $(document).ready(function() {
            var postH = $(window).height() + 80;
        	$(".hentry .inblock-wrap").css("min-height", postH +'px');
        });
    }
    