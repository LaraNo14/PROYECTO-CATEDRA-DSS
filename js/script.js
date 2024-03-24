$(window).load(function () {
    var windowHeight = $(window).height(),
        heightDocument = (windowHeight) + ($('.content').height()) - 20;

    $('#scroll-animate, #scroll-animate-main').css({
        'height': heightDocument + 'px'
    });

    $('header').css({
        'height': windowHeight + 'px',
    });

    $('.wrapper-parallax').css({
        'margin-top': windowHeight + 'px'
    });

    window.onscroll = function () {
        var scroll = window.scrollY;

        $('#scroll-animate-main').css({
            'top': '-' + scroll + 'px'
        });

        $('header').css({
            'background-position-y': 50 - (scroll * 100 / heightDocument) + '%'
        });
    }
});