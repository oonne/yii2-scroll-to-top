/**
 * @link      https://github.com/oonne/yii2-scroll-top
 * @copyright Copyright (c) JAY
 */

$(function(){  
    
    var btn = $('#scroll-to-top');
    var scrollerTriggerPoint = $('html, body').offset().top + 160;

    $(document).on('scroll', function() {
        var pos = $(window).scrollTop();
        if (pos > scrollerTriggerPoint && !btn.is(':visible')) {
            btn.fadeIn();
        } else if (pos < scrollerTriggerPoint && btn.is(':visible')) {
            btn.fadeOut();
        }
    }).scroll();

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 300);
    });
    
});
