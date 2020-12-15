document.addEventListener('DOMContentLoaded', () => {
    ScrollReveal().reveal('.animation--right', {
        distance: "50%",
        origin: "right",
        rotate: {
            x: 0,
            y: 0,
            z: 0
        },
        duration: 1000,
        delay: 300
    });
    ScrollReveal().reveal('.animation--left', {
        distance: "50%",
        origin: "left",
        rotate: {
            x: 0,
            y: 0,
            z: 0
        },
        duration: 1000,

    });
    ScrollReveal().reveal('.content-image__square--pos-right', {
        distance: "50%",
        origin: "right",
        rotate: {
            x: 0,
            y: 0,
            z: 90
        },
        duration: 1000,
        delay: 600
    });
    ScrollReveal().reveal('.content-image__square--pos-left', {
        distance: "50%",
        origin: "left",
        rotate: {
            x: 0,
            y: 0,
            z: -90
        },
        duration: 1000,
        delay: 600
    });
    ScrollReveal().reveal('.h-content__title', {
        distance: "20px",
        origin: "top",
    });

    //slick slider

    // document.querySelector('.header__bg').slick();

    $('.h-slider').slick({
        autoplay: true,
        arrows: false
    });

    $('.slider').slick({
        autoplay: true,
        arrows: false,
        slidesToShow: 4
    });

});