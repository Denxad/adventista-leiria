$(document).ready(function(){
    var scrollTop = 0;
    $(window).scroll(function(){
        scrollTop = $(window).scrollTop();
        $('.counter').html(scrollTop);

        if (scrollTop >= 100)
            $('#header').addClass('scrolled-header');
        else if (scrollTop < 100)
            $('#header').removeClass('scrolled-header');
    });

});