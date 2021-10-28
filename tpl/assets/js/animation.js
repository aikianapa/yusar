var animationHeight = 8000;
var vh = $(window).height();
var vw = $(window).width();
var sh = vw - vh;
sh > 0 ? sh = Math.ceil(sh / 3) : sh = Math.ceil(sh / 1.5);


var animInit = function() {
    if (!$(".to-fix").length) return;
    animReset();
    window.scrollTo(0, 0);
    var ht = animationHeight;
    var ih = $(".scene.scene-2.mis-container img:first-child").height();
    var offset;
    $('.qbody .staging ').height(ht);
    if ($(window).width() > 0) {
        $(".to-fix").scroolly(
            [{
                    alias: "before",
                    from: "",
                    to: "con-top = top",
                    css: {
                        position: "static",
                    },
                },
                {
                    alias: "fixing",
                    from: "con-top = top",
                    to: "con-top + " + ht + " = bottom",
                    css: {
                        position: "fixed",
                        top: "",
                        bottom: "0",
                    },
                    //                    onScroll: function($el, offset, length)
                    onScroll: function($el, offset, length) {
                        ih = $(".scene.scene-2.mis-container img:first-child").height();
                    }
                },
                {
                    alias: "unfixing",
                    from: "con-top + " + Math.ceil(ht * 1.5) + " = bottom",
                    to: "doc-bottom",
                    css: {
                        position: "absolute",
                        top: "",
                        bottom: "0",
                    },
                },
            ],
            $(".staging")
        );

        $(".staging-1 .scene-1").scroolly(
            [{
                    // alias: "before",
                    // from: "",
                    to: "con-top",
                    css: {
                        top: "216px",
                    },
                    onScroll: function($el, $ofs, length) {
                        $('.staging-1 .scene-2 img').css({ "opacity": "0.001" });
                    }
                },
                {
                    // alias: "slide1",
                    from: "con-top",
                    to: "con-top + 500 = top",
                    cssFrom: {
                        top: "216px",
                        transform: "translateY(-1px)",
                    },
                    cssTo: {
                        top: "216px",
                        transform: "translateY(-" + vh + "px)",
                    }
                },
            ],
            $(".staging-1")
        );

        ih = document.querySelector(".scene.scene-2.mis-container img:first-child").naturalHeight;
        var ofy = Math.ceil((vh - ih) / 2 + sh);

        vw > 767 ? ofy = 430 : ofy = 330;
        $(".staging-1 .scene-2").scroolly(
            [{
                from: "con-top",
                to: "con-top + 500 = top",
                cssFrom: {
                    transform: "translateY(-0.01px)",
                },
                cssTo: {
                    transform: "translateY(-" + ofy + "px)",
                }
            }, ],
            $(".staging-1")
        );


        // Картинки //
        if ($(window).width() > 767) {
            var start = ofy;
            var stop = Math.ceil(ht - start - vh);
        } else {
            var start = 0;
            var stop = Math.ceil(ht) - ofy - vh;
        }
        var images = $(".staging-1 .scene-2 img").length + 1;
        var ofi = Math.ceil((vh - ih) / 2);
        $(".staging-1 .scene-2 img").css({ "margin-top": ofi + "px" });
        offset = [];


        for (i = 1; i <= images; i++) {
            let os = Math.ceil((stop - start) / images);
            offset[i] = start + os * (i + 1);
            if (i !== 0) {
                if (i + 1 <= images) {
                    $(".staging-1 .scene-2 img:eq(" + (i - 1) + ")").scroolly([{
                            from: "con-top + " + (offset[i - 1]) + " = top",
                            to: "con-top + " + (offset[i]) + " = top",
                            cssFrom: {
                                "opacity": "0.999",
                            },
                            cssTo: {
                                "opacity": "0.001",
                                "z-index": "0"
                            },
                            onScroll: function($el, $ofs, length) {

                            }
                        }],
                        $(".staging-1")
                    );
                }

                $(".staging-1 .scene-2 img:eq(" + i + ")").scroolly(
                    [{
                        from: "con-top + " + (offset[i - 1] + 1) + " = top",
                        to: "con-top + " + (offset[i] + 1) + " = top",
                        cssFrom: {
                            "opacity": "0.001",
                            "z-index": 1 + i
                        },
                        cssTo: {
                            "opacity": "0.999",
                            "z-index": 1 + i
                        },
                    }],
                    $(".staging-1")
                );
            }
        }
        // ========= //


        // Плашки //  
        var height = $(".staging-1 .statistics-1 .statistics__item:eq(0)").height();
        var off = height;
        var top = Math.ceil(ht / 8);
        var stop1;
        var stop2;
        var plates;



        if (vw > 767) {
            // первый блок плашек
            plates = $('.staging-1 .statistics-1 .statistics__item').length;
            for (i = 1; i <= plates; i++) {
                let start = Math.ceil(top + ((i - 1) * height / 2));
                let stop = stop1 = Math.ceil(top + (i * height));
                $(".staging-1 .statistics-1 .statistics__item:eq(" + (i - 1) + ")").scroolly(
                    [{
                        from: "con-top + " + start + " = top",
                        to: "con-top + " + stop + " = top",
                        cssFrom: {
                            transform: "translateY(14.999vh)",
                            opacity: "0.001"
                        },
                        cssTo: {
                            transform: "translateY(0.001vh)",
                            opacity: "0.701"
                        },
                        onScroll: function($el, $ofs, length) {
                            //     if ($ofs <= 81) $('.staging-1 .scene-2 img').css({ "opacity": "0.001" });
                        }
                    }],
                    $(".staging-1")
                );
            }

            stop1 = Math.ceil(stop1 + (vh / 3));

            // второй блок плашек
            plates = $('.staging-1 .statistics-2 .statistics__item').length;
            top = stop1 + vh * 2;
            for (i = 1; i <= plates; i++) {
                let start = Math.ceil(top + ((i - 1) * height / 2));
                let stop = stop2 = Math.ceil(top + (i * height));
                $(".staging-1 .statistics-2 .statistics__item:eq(" + (i - 1) + ")").scroolly(
                    [{
                        from: "con-top + " + start + " = top",
                        to: "con-top + " + stop + " = top",
                        cssFrom: {
                            transform: "translateY(14.999vh)",
                            opacity: "0.001"
                        },
                        cssTo: {
                            transform: "translateY(0.001vh)",
                            opacity: "0.701"
                        },
                    }],
                    $(".staging-1")
                );
            }

            stop2 = Math.ceil(stop2 + (vh / 3));

            // весь блок плашек наверх
            let start = Math.ceil(stop1 + vh);
            let stop = start + vh;
            $(".staging-1 .statistics-1").scroolly(
                [{
                    from: "con-top + " + start + " = top",
                    to: "con-top + " + stop + " = top",
                    cssFrom: {
                        top: "33vh",
                        opacity: "0.999"
                    },
                    cssTo: {
                        top: "10vh",
                        opacity: "0.001"
                    },
                }],
                $(".staging-1")
            );

            start = Math.ceil(stop2 + vh);
            stop = ht - vh;
            $(".staging-1 .statistics-2").scroolly(
                [{
                    from: "con-top + " + start + " = top",
                    to: "con-top + " + stop + " = top",
                    cssFrom: {
                        top: "33vh",
                        opacity: "0.999"
                    },
                    cssTo: {
                        top: "10vh",
                        opacity: "0.001"
                    },
                }],
                $(".staging-1")
            );

        } else {
            top = start + vh;
            let offset = [];
            let plates = $('.statistics.mis-container').find('.statistics__item').length;
            let os = Math.ceil((ht - top - vh) / plates);
            offset[0] = top;
            for (i = 1; i <= plates; i++) {
                offset[i] = Math.ceil(top + (os * i));
                offset[i + 1] = offset[i] + os;
                $('.statistics.mis-container .statistics__item').height(height);
                $(".staging-1 .statistics__item:eq(" + (i - 1) + ")").scroolly(
                    [{
                            from: "con-top + " + (offset[i - 1]) + " = top",
                            to: "con-top + " + (offset[i]) + " = top",
                            cssFrom: {
                                "top": vh - 400 + "px",
                                "opacity": "0.001"
                            },
                            cssTo: {
                                "top": ofi + "px",
                                opacity: "0.999"
                            },
                        },
                        {
                            from: "con-top + " + (offset[i]) + " = top",
                            to: "con-top + " + (offset[i + 1]) + " = top",
                            cssFrom: {
                                "top": ofi + "px",
                                "opacity": "0.999"
                            },
                            cssTo: {
                                "top": "0px",
                                "opacity": "0.001"
                            },
                        }
                    ],
                    $(".staging-1")
                );
            }
        }
    }
}

var animReset = function() {
    setTimeout(function() {
        let ih = document.querySelector(".scene.scene-2.mis-container img:first-child").naturalHeight;
        let ofy;
        vw > 767 ? ofy = 430 : ofy = 330;
        var ofi = Math.ceil((vh - ih) / 2);
        $(".staging-1 .scene-1").css({ 'top': '216px' });
        //$(".staging-1 .scene-2").css({ 'transform': 'translateY(' + ofy + ')' });
        $(".staging-1 .scene-2").css({ 'transform': 'translateY(-' + ofy + 'px)' });
        $(".staging-1 .scene-2 img").css({ 'opacity': '0', 'z-index': '0', "margin-top": ofi + "px" });
        $(".staging-1 .statistics__item").css({ 'opacity': '0' });
    }, 10)
}

var Counters = function() {
    var card = document.querySelector(".columns.percent-columns");
    var body = document.querySelector("body");
    if (!card) return;
    let top = card.getBoundingClientRect().top;
    let bot = card.getBoundingClientRect().bottom;
    var work = false;

    window.addEventListener("scroll", function onScroll() {
        top = card.getBoundingClientRect().top;
        bot = card.getBoundingClientRect().bottom;
        let offset = 0 - body.getBoundingClientRect().top;
        if (offset > animationHeight || offset == 0) {
            // animReset();
        }


        if (bot < 0) {
            $(card).find('[data-max]').text(0);
            work = false
            $(card).find('.aos-init').removeClass('aos-animate');
            AOS.refres;
        }
        //this.removeEventListener("scroll", onScroll);
        if (work == false && $(card).find('.aos-init').hasClass('aos-animate')) {
            $(".card-1 .columns [data-max]").each(function(i) {
                work = true;
                var that = this;
                var start = +$(this).text();
                var end = +$(this).attr('data-max');
                if (start == 0) {
                    let inter;
                    setTimeout(function() {
                        inter = setInterval(function() {
                            start = (+start + 1);
                            $(that).text(start + "%");
                            if (start >= end) {
                                clearInterval(inter);
                                work = false;
                            }
                        }, 40);
                    }, 600);

                }

            })
        } else if (!$(card).find('.aos-init').hasClass('aos-animate')) {
            $(card).find('[data-max]').text(0);
            work = false;
        }
    });
}

$(window).on('resize', function() {
    if (Math.abs(vw - $(window).width()) > vw / 10) animInit();
})

setTimeout(function() {
    animInit();
    Counters();
}, 400)