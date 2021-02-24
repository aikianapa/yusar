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
    if (hash == '') return;
    $(document).find(`a[href='${hash}']:eq(0)`).trigger('click');
}

yusar.dataOptions = function(el) {

    var strToBool = function (string) {
        if (typeof string === "string") {
            switch (string.toLowerCase().trim()) {
                case "true": return true;
                case "false": return false;
                case "null": return null;
                case "undefined": return undefined;
            }
            if (is_numeric(string)) string = string * 1;
            console.log(string);
        }
        return string;
    }

    if (el.options == undefined) el.options = {};
    parse_str($(el).attr('data-options'), el.options);
    for (const [k, v] of Object.entries(el.options)) {
        el.options[k] = strToBool(v);
    }
    console.log(el.options);
    return el.options;
}

yusar.slick = function() {
    if ($('.slick').length) {
        $('.slick').each(function(){
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
            if ($(this).hasClass('slick-nav')) {
                this.options.asNavFor = '.slick-for';
                this.options.focusOnSelect = true;
            }
            if ($(this).hasClass('slick-for')) this.options.asNavFor = '.slick-nav'

            yusar.dataOptions(this);
            $(this).slick(this.options);
        })
    }

    if ($('.slider.slider-for').length) {
        $('.slider.slider-for').each(function() {
            this.options = {
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                variableWidth: true,
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

wbapp.lazyload();
wbapp.loadPreload();
wbapp.on('ready-js', function () {
    yusar.slick();
    yusar.anchor();
    window.addEventListener('selectstart', function (e) { e.preventDefault(); });
})
