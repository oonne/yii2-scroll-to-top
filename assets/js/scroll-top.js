/**
 * @link      https://github.com/oonne/yii2-scroll-top
 * @copyright Copyright (c) JAY
 */

$(function(){
    var btn = $('#scroll-to-top');
    var scrollBtnIsvisible = false;
    var scrollerTriggerPoint = $('html, body').offset().top + 150;
    
    $(document).on('scroll', function() {
        var pos = $(window).scrollTop();
        if (pos > scrollerTriggerPoint && !scrollBtnIsvisible) {
            btn.stop().fadeIn();
            scrollBtnIsvisible = true;
        } else if (pos < scrollerTriggerPoint && scrollBtnIsvisible) {
            btn.stop().fadeOut();
            scrollBtnIsvisible = false;
        }
    }).scroll();

    btn.on('click', function(e) {
        $('html, body').animate({ scrollTop: 0 }, 300);
    });
});
