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

yusar.linkfix = function () {
    $('a[data-toggle="dropdown"][href*="/"]').off('tap click');
    $('a[data-toggle="dropdown"][href*="/"]').on('tap click',function(){
        document.location.href = $(this).attr('href');
    })
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

$(function() {
    function getCookie(name) {
        var dc = document.cookie;
        var prefix = name + "=";
        var begin = dc.indexOf("; " + prefix);

        if (begin == -1) {
            begin = dc.indexOf(prefix);
            if (begin != 0) return null;
        }

        else {
            begin += 2;
            var end = document.cookie.indexOf(";", begin);
            if (end == -1) {
            end = dc.length;
            }
        }

        return decodeURI(dc.substring(begin + prefix.length, end));
    } 
    
    function doSomething() {
        var myCookie = getCookie("listtype");
    
        if (myCookie == "grid") {
            $(".icon-list").addClass("sorting-active");
            $(".icon-grid").removeClass("sorting-active");
        }

        if (myCookie == "list") {
            $(".icon-list").removeClass("sorting-active");
            $(".icon-grid").addClass("sorting-active");
        }
    }

    doSomething();

    $(".icon-list").click(() => {
        $(".icon-list").addClass("sorting-active");
        $(".icon-grid").removeClass("sorting-active");
    })

    $(".icon-grid").click(() => {
        $(".icon-list").removeClass("sorting-active");
        $(".icon-grid").addClass("sorting-active");
    })
});

yusar.slick = function () {
    if ($('.carousel').length) {
        $('.carousel').each(function () {
            if (this.done == true) return;
            this.done = true;
            let interval = 1000;
            if (parseInt($(this).attr('data-interval')) > 0) interval = parseInt($(this).attr('data-interval'));
            $(this).carousel({'interval':interval});
        })
    }
    if ($('.slick').length) {
        $('.slick:not(.slick-initialized)').each(function () {
            let options = {
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
            };

			if ($(this).attr('data-autoplay') > '') {
				options.autoplay = true;
				options.autoplaySpeed = $(this).attr('data-autoplay') * 1;
			}

			if ($(this).attr('data-scroll') > '') {
				options.slidesToScroll = $(this).attr('data-scroll') * 1;
			}

            try {
                if (typeof this.dataset.slickOptions === 'string') {
                    options = JSON.parse(this.dataset.slickOptions);
                }
            } catch (err) {
                console.log(err);
            }

            this.options = options;
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
    $('source[data-src]').each(function(){
        $(this).attr('src',$(this).attr('data-src'));
        $(this).removeAttr('data-src');
    });
    $('video').each(function(){
        this.load();
    });

    setTimeout(function () {
        // window.addEventListener('selectstart', function (e) { e.preventDefault(); });
        window.dispatchEvent(new Event('resize'));
        yusar.slick();
        yusar.anchor();
        yusar.linkfix();
    }, 100)
    setTimeout(function () {
        $('body.preloading').removeClass('preloading');
        $('.preloader').remove();
        yusar.scrollup();
    }, 600)

});
