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

$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});


