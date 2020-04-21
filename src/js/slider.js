function slider() {

    $('.autoplay').slick({

        dots: true,
        infinite: true,
        speed: 2500,
        fade: true,
        cssEase: 'linear',
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 8000,
        arrows: false,
        pauseOnFocus: false,
        pauseOnHover: false,

    });

    $('.autoplay').on('touchstart', e => {
        $('.autoplay').slick('slickPlay');
    });





};

export default slider;