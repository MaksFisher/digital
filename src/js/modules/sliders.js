import Flickity from 'flickity';

$(document).ready(function () {



    if ($('.service-slider').length) {
        let flktyA = new Flickity(".service-slider", {
            wrapAround: false,
            prevNextButtons: false,
            cellAlign: "center",
            draggable: true,
            pageDots: false,
            contain: false,
            adaptiveHeight: false
        });

        $('.count-slide-service').text(('00' + $('.service-slide').length).slice(-2));

        flktyA.on('cellSelect', () => {
            let index = ('00' + (flktyA.selectedIndex + 1)).slice(-2);
            $('.current-slide-build').text(index);
        })


        $('.slider-btn__prev--service').on('click', function () {
            flktyA.previous(false, false);
        });

        $('.slider-btn__next--service').on('click', function () {
            flktyA.next(false, false);
        });
    }

    if ($('.build-slider').length && window.innerWidth < 1200) {
        let flktyB = new Flickity(".build-slider", {
            wrapAround: false,
            prevNextButtons: false,
            cellAlign: "center",
            draggable: true,
            pageDots: false,
            contain: false,
            adaptiveHeight: true
        });

        flktyB.on('cellSelect', () => {
            let index = ('00' + (flktyB.selectedIndex + 1)).slice(-2);
            $('.current-slide-build').text(index);
        })

        $('.count-slide-build').text(('00' + $('.build-slider .col-xl-4').length).slice(-2));

        $('.slider-btn__prev--build').on('click', function () {
            flktyB.previous(false, false);
        });

        $('.slider-btn__next--build').on('click', function () {
            flktyB.next(false, false);
        });
    }


    // const sliders = document.querySelectorAll('.slider');

    // if (sliders.length) {
    //     sliders.forEach(slider => {

    //         const gallerySlider = new Flickity(slider, {
    //             wrapAround: true,
    //             prevNextButtons: false,
    //             cellAlign: "center",
    //             draggable: true,
    //             pageDots: true,
    //             contain: true,
    //             adaptiveHeight: false
    //         })
    //     })
    // }


    // $('.slider-btn--prev').on('click', function () {
    //     flktyB.previous(false, false);
    // });

    // $('.slider-btn--next').on('click', function () {
    //     flktyB.next(false, false);
    // });



    // anchors slider

    if ($('.anchor-slider').length) {
        let flktyB = new Flickity(".anchor-slider", {
            wrapAround: false,
            prevNextButtons: false,
            cellAlign: "center",
            draggable: true,
            pageDots: false,
            contain: true,
            adaptiveHeight: false,
            initialIndex: 0,
            pauseAutoPlayOnHover: true
        });

        $('.anchor-slider__item').on('click', function (e) {
            flktyB.select($(this).index());
        })

        const hash = $(location).attr('hash');

        if (hash) {
            flktyB.select($(`${hash}`).index());
        }
    }

})