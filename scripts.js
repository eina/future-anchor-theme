//navigation shenaningans
var $header = $('#header'),
    lastScrollTop = 0;
    var timer;

$(window).scroll(function() {
    if(timer) {
        window.clearTimeout(timer);
    }
    timer = window.setTimeout(function() {
        var top = $(this).scrollTop();
        if(top > lastScrollTop){
            //console.log('scroll down');
            $header.fadeOut();
        }else {
            //console.log('scroll up');
            $header.fadeIn('fast');
        }
        lastScrollTop = top;
        //console.log( "Firing!" );
    }, 100);
});


