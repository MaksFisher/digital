$(document).ready(function () {

    $('.nav-drop-btn').on('click', function (e) {
        e.preventDefault();


        if (window.innerWidth > 960) {
            $('header').toggleClass('header-active');
            $('.nav-drop').slideToggle();
        } else {
            $('.nav-drop').addClass('nav-drop--opened');
        }
    })

    if (window.innerWidth > 960) {
        $(document).click(function (event) {
            var target = $(event.target);

            if (!target.closest($('.nav-drop-btn')).length && !target.closest($('.nav-drop')).length) {
                $('header').removeClass('header-active');
                $('.nav-drop').slideUp();
            }
        });
    }

    $(window).scroll(function () {

        if (window.innerWidth > 960) {
            $('.nav-drop').slideUp();
            $('header').removeClass('header-active');
        }

        var scrollHeight = $(window).scrollTop();
        if (scrollHeight > 10) {
            $('header').addClass('header-scroll');
        }
        else {
            $('header').removeClass('header-scroll');
        }
    });

    $('.nav-btn').on('click', function () {
        $('header').toggleClass('header-active');
        $('.nav-drop--opened').removeClass('nav-drop--opened');

        $('.nav-btn').toggleClass('nav-btn--opened');
        $('.nav-list').toggleClass('nav-list--opened');
    });

    $('.drop-back').on('click', function () {
        $('.nav-drop').removeClass('nav-drop--opened');
    });

})