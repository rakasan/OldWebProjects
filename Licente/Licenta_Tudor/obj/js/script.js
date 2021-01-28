/*!
 *
 * script.js v3.0
 * Webia
 *
 * Copyright 2011, Zeno Popovici
 *
 */
$(document).ready(function() {

/* =Banners
-------------------------------------------------------------- */
        $("div.banners").scrollable({ 
            keyboard: true, 
            circular: true, 
            easing: "swing", 
            next: ".next", 
            prev: ".prev", 
            disabledClass: "disabled" 
        }).autoscroll({ 
            autoplay: true, 
            interval:6000, 
            autopause:true 
        }).navigator({navi:".bullet-nav", indexed: false, history: true});

/* =Lightbox init
-------------------------------------------------------------- */
        $("a.lightbox").fancybox({
            'transitionIn'  :   'elastic',
            'transitionOut' :   'elastic',
            'speedIn'       :   600, 
            'speedOut'      :   200, 
            'overlayShow'   :   false,
            'opacity'       :   true,
            'overlayShow'   :   true,
            'titleShow'     :   false,
            'hideOnContentClick': true
        });

/* =Lightbox video init
-------------------------------------------------------------- */
        $("a.lightvideo").click(function() { 
            $.fancybox({
                'transitionIn'  :   'elastic',
                'transitionOut' :   'elastic',
                'padding'       : 0,
                'autoScale'     : false,
                'titleShow'     :   false,
                'width'         : 680,
                'height'        : 495,
                'href'          : this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
                'type'          : 'swf',
                'swf'           : {
                    'wmode'             : 'transparent',
                    'allowfullscreen'   : 'true'
                }
            });
            return false;
        });
    
    //Make homepage events look active on hover
    $(".portfolio article").hover(function() {
        $($(this).children('.more-link')).toggleClass('active');
    });
        
/* =Ajax Pagination
-------------------------------------------------------------- */
        // Check if browser is IE, else do AJAX pagination
        if(!$.browser.msie) {
            // Ajax pagination 
            $('.pagination a').live('click', function(e){
                e.preventDefault();
                var link = jQuery(this).attr('href');
                
                //Display loading animation
                $('.loading').fadeIn(500);
                
                //Set body progress cursor
                $('body').css("cursor", "progress");
                
                //Load Ajax content, Fadein Ajax content, Fadeout loading animation, Set cursor default
                $('.ajax').fadeOut(700).load(link + ' .ajax-content', function(){ 
                    $('.ajax').fadeIn(700); 
                    $('.loading').fadeOut(500); 
                    $('body').css("cursor", "default")
                });
    
                //Re-initialize FancyBox after Ajax Load
                $("a.lightbox").live("click", function(event) {
                    event.preventDefault();
                    $(this).filter(':not(.fb)').fancybox({
                    'transitionIn'  :   'elastic',
                    'transitionOut' :   'elastic',
                    'speedIn'       :   600, 
                    'speedOut'      :   200, 
                    'overlayShow'   :   false,
                    'opacity'       :   true,
                    'overlayShow'   :   true,
                    'titleShow'     :   false,
                    'hideOnContentClick': true
                    }).addClass('fb');
                    $(this).triggerHandler('click');
                });
            });
        }

/* =Fix bounce rate in Google Analytics by reporting usage every 10 seconds
-------------------------------------------------------------- */
        (function (tos) {
            window.setInterval(function () {
                tos = (function (t) {
                    return t[0] == 50 ? (parseInt(t[1]) + 1) + ':00' : (t[1] || '0') + ':' + (parseInt(t[0]) + 10);
                })(tos.split(':').reverse());
               }, 10000);
        })('00');

/* =End ready function
-------------------------------------------------------------- */
});

/* =Services slide in / slide out accordion
-------------------------------------------------------------- */
    $('.accordion h2').click(function() {
        var $nextDiv = $(this).next();
        var $visibleSiblings = $nextDiv.siblings('article:visible');

        // Toggle current class on h2, slide children content
        $(this).toggleClass('current').siblings('h2').removeClass('current');
        if ($visibleSiblings.length ) {
            $visibleSiblings.slideUp('fast', function() {
            $nextDiv.slideToggle('fast');
        });
        } else {
            $nextDiv.slideToggle('fast');
        }
    });
    
/* =Contact form budget slider
-------------------------------------------------------------- */
    // If contact-form id exists initialize slider
    if ($("#contact-form").length > 0) {
        $(function(){
            $('select').selectToUISlider({
                labels: 0
            });
        });
    }   
    
/* =Twitter badge
-------------------------------------------------------------- 
    new TWTR.Widget({
        id: 'tweet',
        version: 2,
        type: 'profile',
        rpp: 1,
        interval: 6000,
        width: 'auto',
        height: 300,
        theme: {
            shell: {
                background: 'transparent',
                color: '#404040'
            },
            tweets: {
                background: 'transparent',
                color: '#404040',
                links: '#ff1d25'
            }
        },
        features: {
            scrollbar: false,
            loop: false,
            live: false,
            hashtags: false,
            timestamp: false,
            avatars: false,
            behavior: 'all'
        }
    }).render().setUser('WebiaStudios').start();

*/
/* =Email validation function for all forms
-------------------------------------------------------------- */
    function validate_email(email) {
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        return reg.test(email);
    }

/* =Validate comment submit for wordpress
-------------------------------------------------------------- */
    //Comment submit
    $('#comment-form').submit(function(){
        var error = false;  
        if ($('#comment-form #author').val() == '') {
            $('#comment-form #author').addClass('error');
            error = true;
        }
        if (!validate_email($('#comment-form #email').val())) {
            $('#comment-form #email').addClass('error');
            error = true;
        }
        if ($('#comment-form #comment').val() == '') {
            $('#comment-form #comment').addClass('error');
            error = true;
        }
        if (error) {
            //If error, return false so we don't actually submit the form
            return false;
        }
    }); 
    // Remove error css class on focus or click
    $('#comment-form input, #comment-form textarea ').focus(function(){
        $('#comment-form #author').removeClass('error');
        $('#comment-form #email').removeClass('error');
        $('#comment-form #comment').removeClass('error');
    });

    $('#comment-form').blur(function(){
        $('#comment-form #author').removeClass('error');
        $('#comment-form #email').removeClass('error');
        $('#comment-form #comment').removeClass('error');
    });
    
/* =Validate search submit for wordpress
-------------------------------------------------------------- */
    $('#searchform').submit(function(){
    
        if ($('#searchform #s').val() == '') {
            $('#searchform #s').addClass('error');
            
            //If error return false so we don't actually submit the form
            return false;
        }
    }); 
    // Remove error css class on focus or click
    $('#searchform #s').focus(function(){
        $('#searchform #s').removeClass('error');
    });

/* =Contact Form validation
-------------------------------------------------------------- */
    var error = false;
    $(function(){
        $('.contact-form').submit(function(){
        
            if(!validate_email($('#contact_email').val()))
            {
                $('#contact_email', $(this)).addClass('error'); 
                error = true;
            }
            if($('#contact_name').val() == '')
            {
                $('#contact_name', $(this)).addClass('error');
                error = true;
            }
            if($('#contact_message').val() == '')
            {
                $('#contact_message', $(this)).addClass('error');
                error = true;
            }
            if (!error) {
                $('.contact form').hide();
                $('.contact .message').fadeIn("slow").delay(3000);
                $.post('index.php', { 
                    form_type: $('#form_type').val(), 
                    contact_name: $('#contact_name').val(), 
                    contact_interest: $('#contact_interest').val(), 
                    contact_company: $('#contact_company').val(),
                    contact_position: $('#contact_position').val(),
                    contact_phone: $('#contact_phone').val(),
                    contact_budget: $('#contact_budget').val(),
                    contact_email: $('#contact_email').val(),
                    contact_message: $('#contact_message').val()},
                    function(data){
             //        alert(data);
               //       alert("POSTED");
                    }
                );
                $('.contact .message').fadeOut("slow");
                $('.contact form').delay(4200).fadeIn("slow");
                $('#contact_name').val('');
                $('#contact_interest').val('');
                $('#contact_company').val('');
                $('#contact_position').val('');
                $('#contact_phone').val('');
                $('#contact_budget').val('-500');
                $('#contact_email').val('');
                $('#contact_message').val('');
            }
            error = false;
            //Return false so we don't actually submit the form
            return false;
        });
        // Remove error css class on focus or click
        $('.contact-form input, .contact-form textarea').focus(function(){
            $('#contact_name').removeClass('error');
            $('#contact_email').removeClass('error');
            $('#contact_message').removeClass('error');
        });
    
        $('.contact form').blur(function(){
            $('#contact_name').removeClass('error');
            $('#contact_email').removeClass('error');
            $('#contact_message').removeClass('error');
        });
    
    });