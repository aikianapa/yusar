wbapp.loadStyles(['/tpl/assets/slick/slick-theme.css', '/tpl/assets/slick/slick.min.css']);
wbapp.loadScripts(['/tpl/assets/slick/slick.min.js'], null, function () {
    if ($('.slick').length) {
        $('.slick').slick({
            infinite: true,
            responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            }, {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }],
            slidesToShow: 4,
            slidesToScroll: 4
        });
    }
})