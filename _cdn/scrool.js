$(document).ready(function () {
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        var target = this.hash,
                $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 1000, 'swing', function () {
            window.location.hash = target;
        });
    });

    var visivel = false;
    
    $(window).scroll(function () {        
        if ($(this).scrollTop() > 160 && visivel === false) {
            visivel = true;
            $('.menu_fixo').animate({
                height:'toggle',
                opacity: "toggle"
            });
            console.log(visivel);
        } if($(this).scrollTop() < 160 && visivel === true) {
            visivel = false;
            $('.menu_fixo').animate({
                height:'toggle',
                opacity: "toggle"
            });
        }
    });
});