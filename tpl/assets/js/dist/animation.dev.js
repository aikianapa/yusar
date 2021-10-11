"use strict";

var width = $(window).width();

var lunitInit = function lunitInit() {
  window.scrollTo(0, 0);
  var ht = 5000;
  var vh = $(window).height();
  var vw = $(window).width();
  var ih = $(".scene.scene-2.mis-container img:first-child").height();
  var offset;
  $('.qbody .staging ').height(ht);

  if ($(window).width() > 0) {
    $(".to-fix").scroolly([{
      alias: "before",
      from: "",
      to: "con-top = top",
      css: {
        position: "static"
      }
    }, {
      alias: "fixing",
      from: "con-top = top",
      to: "con-top + " + ht + " = bottom",
      css: {
        position: "fixed",
        top: "",
        bottom: "0"
      },
      //                    onScroll: function($el, offset, length)
      onScroll: function onScroll($el, offset, length) {
        ih = $(".scene.scene-2.mis-container img:first-child").height();
      }
    }, {
      alias: "unfixing",
      from: "con-top + " + Math.ceil(ht * 1.5) + " = bottom",
      to: "doc-bottom",
      css: {
        position: "absolute",
        top: "",
        bottom: "0"
      }
    }], $(".staging"));
    $(".staging-1 .scene-1").scroolly([{
      // alias: "before",
      // from: "",
      to: "con-top",
      css: {
        top: "216px"
      },
      onScroll: function onScroll($el, $ofs, length) {
        $('.staging-1 .scene-2 img').css({
          "opacity": "0.001"
        });
      }
    }, {
      // alias: "slide1",
      from: "con-top",
      to: "con-top + 500 = top",
      cssFrom: {
        top: "216px",
        transform: "translateY(-1px)"
      },
      cssTo: {
        top: "216px",
        transform: "translateY(-" + vh + "px)"
      }
    }], $(".staging-1"));
    $(".staging-1 .scene-2").attr('style', "transform: translateY(-0.01vh);");
    ih = $(".scene.scene-2.mis-container img:first-child").height();
    var ofy = Math.ceil(vh / 2 - 450 - ih / 2);
    $(".staging-1 .scene-2").scroolly([{
      from: "con-top",
      to: "con-top + 500 = top",
      cssFrom: {
        transform: "translateY(-0.01px)"
      },
      cssTo: {
        transform: "translateY(-" + ofy + "px)"
      }
    }], $(".staging-1")); // Картинки //

    if ($(window).width() > 767) {
      var start = 400;
      var stop = Math.ceil(ht / 2 - start);
    } else {
      var start = 0;
      var stop = Math.ceil(ht) + start;
    }

    var images = $(".staging-1 .scene-2 img").length + 1;
    offset = [];

    for (i = 1; i <= images; i++) {
      var os = Math.ceil((stop - start) / images);
      offset[i] = start + os * (i + 1);

      if (i !== 0) {
        if (i + 1 <= images) {
          $(".staging-1 .scene-2 img:eq(" + (i - 1) + ")").scroolly([{
            from: "con-top + " + offset[i - 1] + " = top",
            to: "con-top + " + offset[i] + " = top",
            cssFrom: {
              "opacity": "0.999"
            },
            cssTo: {
              "opacity": "0.001",
              "z-index": "0"
            },
            onScroll: function onScroll($el, $ofs, length) {
              $('.staging-1 .statistics__item').css({
                "opacity": "0",
                "transition": "translateY(24vh)"
              });
            }
          }], $(".staging-1"));
        }

        $(".staging-1 .scene-2 img:eq(" + i + ")").scroolly([{
          from: "con-top + " + (offset[i - 1] + 1) + " = top",
          to: "con-top + " + (offset[i] + 1) + " = top",
          cssFrom: {
            "opacity": "0.001",
            "z-index": 1 + i
          },
          cssTo: {
            "opacity": "0.999",
            "z-index": 1 + i
          }
        }], $(".staging-1"));
      }
    } // ========= //
    // Плашки //  


    var height = $(".staging-1 .statistics-1 .statistics__item:eq(0)").height() * 2;
    var off = height;
    var top = stop;
    var stop1;
    var stop2;
    var plates;

    if ($(window).width() > 767) {
      // первый блок плашек
      plates = $('.staging-1 .statistics-1 .statistics__item').length;

      for (i = 1; i <= plates; i++) {
        var _start2 = Math.ceil(top + i * height);

        var _stop2 = stop1 = _start2 + height;

        $(".staging-1 .statistics-1 .statistics__item:eq(" + (i - 1) + ")").scroolly([{
          from: "con-top + " + _start2 + " = top",
          to: "con-top + " + _stop2 + " = top",
          cssFrom: {
            transform: "translateY(24vh)",
            opacity: "0"
          },
          cssTo: {
            transform: "translateY(1vh)",
            opacity: "0.7"
          },
          onScroll: function onScroll($el, $ofs, length) {
            if ($ofs <= 81) $('.staging-1 .scene-2 img').css({
              "opacity": "0.001"
            });
          }
        }], $(".staging-1"));
      } // второй блок плашек


      plates = $('.staging-1 .statistics-2 .statistics__item').length;
      top = stop1 + height;

      for (i = 1; i <= plates; i++) {
        var _start3 = Math.ceil(top + i * height);

        var _stop3 = stop2 = _start3 + height;

        $(".staging-1 .statistics-2 .statistics__item:eq(" + (i - 1) + ")").scroolly([{
          from: "con-top + " + _start3 + " = top",
          to: "con-top + " + _stop3 + " = top",
          cssFrom: {
            transform: "translateY(24vh)",
            opacity: "0"
          },
          cssTo: {
            transform: "translateY(1vh)",
            opacity: "0.7"
          }
        }], $(".staging-1"));
      } // весь блок плашек наверх


      var _start = Math.ceil(stop1);

      var _stop = _start + vh;

      $(".staging-1 .statistics-1").scroolly([{
        from: "con-top + " + _start + " = top",
        to: "con-top + " + _stop + " = top",
        cssFrom: {
          top: "-0.000vh",
          opacity: "0.999"
        },
        cssTo: {
          top: "-24vh",
          opacity: "0"
        }
      }], $(".staging-1"));
      _start = Math.ceil(stop2);
      _stop = _start + vh;
      $(".staging-1 .statistics-2").scroolly([{
        from: "con-top + " + _start + " = top",
        to: "con-top + " + _stop + " = top",
        cssFrom: {
          top: "-0.000vh",
          opacity: "0.999"
        },
        cssTo: {
          top: "-24vh",
          opacity: "0"
        }
      }], $(".staging-1"));
    } else {
      var top = Math.ceil(vh / 2 - height / 2);
      var _offset = [];
      var _plates = $('.statistics.mis-container').find('.statistics__item').length;

      var _os = Math.ceil((ht - vh * 2) / _plates);

      _offset[0] = top;

      for (i = 1; i <= _plates; i++) {
        _offset[i] = top + (_os * i - 1);
        _offset[i + 1] = _offset[i] + _os;
        $('.statistics.mis-container').height(height);
        $('.statistics.mis-container > div').height(height);
        $('.statistics.mis-container .statistics__item').height(height);
        $(".staging-1 .statistics__item:eq(" + (i - 1) + ")").scroolly([{
          from: "con-top + " + _offset[i - 1] + " = top",
          to: "con-top + " + _offset[i] + " = top",
          cssFrom: {
            "top": "25.000vh",
            "opacity": "0.001"
          },
          cssTo: {
            "top": "-0.001vh",
            opacity: "0.999"
          }
        }, {
          from: "con-top + " + _offset[i] + " = top",
          to: "con-top + " + _offset[i + 1] + " = top",
          cssFrom: {
            "top": "-0.001vh",
            "opacity": "0.999"
          },
          cssTo: {
            "top": "-20.001vh",
            "opacity": "0.001"
          }
        }], $(".staging-1"));
      }
    }
  }
};

$(window).on('resize', function () {
  if (Math.abs(width - $(window).width()) > width / 10) lunitInit();
});
setTimeout(function () {
  lunitInit();
}, 400);
//# sourceMappingURL=animation.dev.js.map
