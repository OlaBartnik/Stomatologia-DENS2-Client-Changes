function slider() {

    $('.autoplay').slick({

        dots: false,
        infinite: true,
        speed: 2500,
        fade: true,
        cssEase: 'linear',
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4500,
        arrows: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        // adaptiveHeight: true


    });

    $('.autoplay').on('touchstart', e => {
        $('.autoplay').slick('slickPlay');
    });





};

export default slider;