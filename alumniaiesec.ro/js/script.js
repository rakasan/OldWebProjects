
$(document).ready(function() {

/* =Banners
-------------------------------------------------------------- */
        $("div.banners").scrollable({ 
            keyboard: true, 
            circular: true, 
            easing: "swing", 
            disabledClass: "disabled" 
        }).autoscroll({ 
            autoplay: true, 
            interval:6000, 
            autopause:true 
        }).navigator({navi:".bullet-nav", indexed: false, history: true});


    
    });