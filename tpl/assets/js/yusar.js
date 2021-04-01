var yusar = {};

yusar.listmode = function (type) {
    $(this).parents('.container');
    document.cookie = "listtype=" + type;
    //document.location.href = document.location.href;
    wbapp.post(document.location.href, {}, function (data) {
        $(data).find(`.${type}`).each(function (i, el) {
            if (type == 'list') {
                $(document).find(`.grid:eq(${i})`).parent().html($(el).outer())
            } else {
                $(document).find(`.list:eq(${i})`).parent().html($(el).outer())
            }
        })
        wbapp.lazyload();
    })
}

yusar.anchor = function () {
    let hash = document.location.hash;
    if (hash == '') return;
    $(document).find(`a[href='${hash}']:eq(0)`).trigger('click');
}

yusar.dataOptions = function (el) {

    var strToBool = function (string) {
        if (typeof string === "string") {
            switch (string.toLowerCase().trim()) {
                case "true": return true;
                case "false": return false;
                case "null": return null;
                case "undefined": return undefined;
            }
            if (is_numeric(string)) string = string * 1;
        }
        return string;
    }

    if (el.options == undefined) el.options = {};
    parse_str($(el).attr('data-options'), el.options);
    for (const [k, v] of Object.entries(el.options)) {
        el.options[k] = strToBool(v);
    }
    return el.options;
}

yusar.scrollup = function () {
    $(document).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
}


yusar.slick = function () {
    if ($('.slick').length) {
        $('.slick:not(.slick-initialized)').each(function () {
            this.options = {
                infinite: true,
                lazyLoad: 'ondemand',
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
            }
            yusar.dataOptions(this);
            if ($(this).hasClass('slick-nav')) {
                if (this.options.asNavFor == undefined) this.options.asNavFor = '.slick-for';
                this.options.focusOnSelect = true;
            }
            if ($(this).hasClass('slick-for')) {
                if ($(this).parents('.row').find('.slick.slick-nav').length) {
                    this.options.asNavFor = '.slick.slick-nav';
                }
            }

            $(this).slick(this.options).on('afterChange', function (event, slick, currentSlide, nextSlide) {
                if ($(this).hasClass('slick-for')) {
                    let nav = $(this).parents('.row').find('.slick-nav');
                    if (nav) {
                        $(nav).find('.slick-current').removeClass('slick-current');
                        $(nav).find(".slick-slide:eq(" + currentSlide + ")").addClass('slick-current');
                    }
                }
            });
        })
    }

    if ($('.slick-uninit.slick-nav').length) {
        $('.slick-uninit.slick-nav').each(function () {
            $(this).find('.slick-slide:first-child').addClass('slick-current');
            let navslick = this;
            let forslick = $(this).parents('.row').find('.slick-for')[0];
            $(this).find('.slick-slide').on('tap click', function () {
                $(navslick).find('.slick-current').removeClass('slick-current');
                $(this).addClass('slick-current');
                $(forslick).slick('slickGoTo', $(this).index());
            })
        })
    }



    if ($('.slider.slider-for').length) {
        $('.slider.slider-for').each(function () {
            this.options = {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                centerMode: true,
                fade: true,
                lazyLoad: 'ondemand',
                asNavFor: '.slider-nav'
            }
            yusar.dataOptions(this);
            $(this).slick(this.options);
        })
    }

    if ($('.slider.slider-nav').length) {
        $('.slider.slider-nav').each(function () {
            this.options = {
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                variableWidth: true,
                asNavFor: '.slider-for',
                lazyLoad: 'ondemand',
                dots: false,
                focusOnSelect: true
            };
            yusar.dataOptions(this);
            $(this).slick(this.options);
        });
    }
}

$(document).ready(function () {
    setTimeout(function () {
        wbapp.loadPreload();
        wbapp.lazyload();
    }, 100);
})
wbapp.on('preloaded-js', function () {
    //$('[data-youtube]').youtube_background();
    $('.loader').css('opacity', 0);
    setTimeout(function () {
        window.addEventListener('selectstart', function (e) { e.preventDefault(); });
        window.dispatchEvent(new Event('resize'));
        yusar.slick();
        yusar.anchor();
    }, 100)
    setTimeout(function () {
        $('.loader').remove();
        yusar.scrollup();
    }, 600)

});
