var yusar = {};
yusar.listmode = function(type) {
    $(this).parents('.container');
    document.cookie = "listtype=" + type;
    //document.location.href = document.location.href;
    wbapp.post(document.location.href,{},function(data){
        $(data).find(`.${type}`).each(function(i,el){
            if (type == 'list') {
                $(document).find(`.grid:eq(${i})`).parent().html($(el).outer())
            } else {
                $(document).find(`.list:eq(${i})`).parent().html($(el).outer())
            }
        })
        wbapp.lazyload();
    })
}

yusar.anchor = function() {
    let hash = document.location.hash;
    $(document).find(`a[href='${hash}']:eq(0)`).trigger('click');
}

yusar.slick = function() {
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

    if ($('.slider.slider-for').length) {
        $('.slider.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        centerMode: true,
        fade: true,
        lazyLoad: 'ondemand',
        asNavFor: '.slider-nav'
    });
    $('.slider.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        lazyLoad: 'ondemand',
        variableWidth: true,
        dots: false,
        centerMode: true,
        focusOnSelect: true
    });
    }

}

wbapp.lazyload();
wbapp.loadPreload();
wbapp.on('ready-js', function () {
    yusar.slick();
    yusar.anchor();
    window.addEventListener('selectstart', function (e) { e.preventDefault(); });
})
