"use strict"
$(document).ready(function () {
  //плавное перемещение по странице
  $(window).scroll(function () {
    if ($(this).scrollTop() != 0) {
      $("#toTop").fadeIn();
    } else {
      $("#toTop").fadeOut();
    }
  });

  $("#toTop").click(function () {
    $("body,html").animate({ scrollTop: 0 }, 1000);
  });

  $('a[href^="#"]').on("click", function (event) {
    // отменяем стандартное действие
    event.preventDefault();

    var sc = $(this).attr("href"),
      dn = $(sc).offset().top;

    $("html, body").animate({ scrollTop: dn }, 800);
  });
  // инициализация библиотеки анимации
  AOS.init();
  var aosref = false;
  //слайдер Отзывы
  const reviewsSlider = new Swiper(".reviews__swiper-container", {
    // slidesPerView: 4,
    loop: true,
    loopedSlides: 16,

    navigation: {
      nextEl: ".reviews__button-next",
      prevEl: ".reviews__button-prev",
    },
    // speed: 1000,

    // keyboard: {
    //   enabled: true,
    //   onlyInViewport: true,
    // },
    speed: 2000,

    autoplay: {
      delay: 1200,
      stopOnLastSlide: false,
      speed: 5000,
      disableOnInteraction: true,
    },

    breakpoints: {
      455: {
        slidesPerView: 1,
      },
      1200: {
        slidesPerView: 2,
      },
      1600: {
        slidesPerView: 3,
      },
    },
  });

  //слайдер Technical
  const technicalSlider = new Swiper(".technical-swiper", {
    slidesPerView: 3,
    loop: true,

    direction: "vertical",

    autoplay: {
      delay: 1400,
      stopOnLastSlide: false,
      speed: 7000,
      disableOnInteraction: true,
    },
  });

  // слайдер Partners
  const partnersSlider = new Swiper(".partners-swiper", {
    slidesPerView: 3,
    loop: true,

    direction: "vertical",

    autoplay: {
      delay: 1400,
      stopOnLastSlide: false,
      speed: 7000,
      disableOnInteraction: true,
    },
  });

  // слайдер integration
  const integrationSlider = new Swiper(".integration-swiper", {
    slidesPerView: 3,
    loop: true,

    direction: "vertical",

    autoplay: {
      delay: 1400,
      stopOnLastSlide: false,
      speed: 7000,
      disableOnInteraction: true,
    },
  });

  //слайдер Продукты
  const productsSlider = new Swiper(".products__swiper-container", {
    // slidesPerView: 4,

    loopedSlides: 16,
    loop: true,
    navigation: {
      nextEl: ".products__button-next",
      prevEl: ".products__button-prev",
    },
    speed: 2000,

    keyboard: {
      enabled: true,
      onlyInViewport: true,
    },

    autoplay: {
      delay: 1200,
      stopOnLastSlide: false,
      speed: 5000,
      disableOnInteraction: true,
    },

    breakpoints: {
      455: {
        slidesPerView: 1,
      },
      1200: {
        slidesPerView: 2,
      },
      1600: {
        slidesPerView: 3,
      },
    },
  });

  //растущие числа
  if (document.querySelector(".number-1"))
    var number1 = document.querySelector(".number-1"),
      number1Top = number1.getBoundingClientRect().top,
      start1 = +number1.innerHTML,
      end1 = +number1.dataset.max;

  if (window.innerHeight >= number1Top) {
    var interval1 = setInterval(function () {
      number1.innerHTML = ++start1 + "%";
      if (start1 == end1) {
        clearInterval(interval1);
      }
    }, 30);
  } else {
    window.addEventListener("scroll", function onScroll() {
      if (window.pageYOffset > number1Top - window.innerHeight) {
        this.removeEventListener("scroll", onScroll);
        var interval1 = setInterval(function () {
          number1.innerHTML = ++start1 + "%";
          if (start1 == end1) {
            clearInterval(interval1);
          }
        }, 30);
      }
    });
  }
  if (document.querySelector(".number-2"))
    var number2 = document.querySelector(".number-2"),
      number2Top = number2.getBoundingClientRect().top,
      start2 = +number2.innerHTML,
      end2 = +number2.dataset.max;

  if (window.innerHeight >= number2Top) {
    var interval2 = setInterval(function () {
      number2.innerHTML = ++start2 + "%";
      if (start2 == end2) {
        clearInterval(interval2);
      }
    }, 30);
  } else {
    window.addEventListener("scroll", function onScroll() {
      if (window.pageYOffset > number2Top - window.innerHeight) {
        this.removeEventListener("scroll", onScroll);
        var interval2 = setInterval(function () {
          number2.innerHTML = ++start2 + "%";
          if (start2 == end2) {
            clearInterval(interval2);
          }
        }, 30);
      }
    });
  }

  function Counters() {
    var card = document.querySelector(".description .card-1 .columns");
    if (!card) return;
    let top = card.getBoundingClientRect().top;
    let bot = card.getBoundingClientRect().bottom;
    var work = false;

    window.addEventListener("scroll", function onScroll() {
      top = card.getBoundingClientRect().top;
      bot = card.getBoundingClientRect().bottom;

      if (bot < 0) {
        $(card).find('[data-max]').text(0);
        work = false
        $(card).find('.aos-init').removeClass('aos-animate');
        AOS.refres;
      }
      //this.removeEventListener("scroll", onScroll);
      if (work == false && $(card).find('.aos-init').hasClass('aos-animate')) {
        $(".card-1 .columns [data-max]").each(function (i) {
            work = true;
            var that = this;
            var start = +$(this).text();
            var end = +$(this).attr('data-max');
            if (start == 0) {
              let inter;
              setTimeout(function(){
              inter = setInterval(function () {
                start = (+start + 1);
                $(that).text(start + "%");
                if (start >= end) {
                  clearInterval(inter);
                  work = false;
                }
              }, 40);
              },600);

            }
          
        })
      } else if (!$(card).find('.aos-init').hasClass('aos-animate')) {
        $(card).find('[data-max]').text(0);
        work = false;
      }
    });
  }
  Counters();


  $(document).scroll(function () {
    const top = window.pageYOffset;
    const item1 = $("#purpose").offset().top - 120;
    const item2 = $("#descriprion").offset().top - 120;
    const item3 = $("#benefits").offset().top - 120;
    const item4 = $("#news").offset().top - 120;
    const item5 = $("#reviews").offset().top - 120;


    if (top > 600 && aosref == false) {
      // fix problems
      AOS.refresh;
      aosref = true;
    }

    function menuItemHover() {
      $(".mis-menu__item").mouseover(function (e) {
        if (!$(this).hasClass("mis-menu__item-active")) {
          $(this).css("background", "#333");
          $(this).css("color", "#fff");
        }
      });

      $(".mis-menu__item").mouseleave(function (e) {
        if (!$(this).hasClass("mis-menu__item-active")) {
          $(this).css("background", "none");
          $(this).css("color", "#444");
        }
      });
    }

    menuItemHover();

    $(".mis-menu__item").css("background", "none");
    $(".mis-menu__item").css("color", "#444");
    $(".mis-menu__item").removeClass("mis-menu__item-active");

    if (top > item5) {
      $("#item-5").css("background", "#7A7F83");
      $("#item-5").css("color", "#fff");
      $("#item-5").toggleClass("mis-menu__item-active");
    } else if (top > item4) {
      $("#item-4").css("background", "#7A7F83");
      $("#item-4").css("color", "#fff");
      $("#item-4").toggleClass("mis-menu__item-active");
    } else if (top > item3) {
      $("#item-3").css("background", "#7A7F83");
      $("#item-3").css("color", "#fff");
      $("#item-3").toggleClass("mis-menu__item-active");
    } else if (top > item2) {
      $("#item-2").css("background", "#7A7F83");
      $("#item-2").css("color", "#fff");
      $("#item-2").toggleClass("mis-menu__item-active");
    } else if (top > item1) {
      $("#item-1").css("background", "#7A7F83");
      $("#item-1").css("color", "#fff");
      $("#item-1").toggleClass("mis-menu__item-active");
    }
  });

  //   if (top > item1) {
  //     $(".mis-menu__item").css("background", "none");
  //     $(".mis-menu__item").css("color", "#444");
  //     $("#item-1").css("background", "#7A7F83");
  //     $("#item-1").css("color", "#fff");
  //   }
  //   if (top > item2) {
  //     $(".mis-menu__item").css("background", "none");
  //     $(".mis-menu__item").css("color", "#444");
  //     $("#item-2").css("background", "#7A7F83");
  //     $("#item-2").css("color", "#fff");
  //   }
  //   if (top > item3) {
  //     $(".mis-menu__item").css("background", "none");
  //     $(".mis-menu__item").css("color", "#444");
  //     $("#item-3").css("background", "#7A7F83");
  //     $("#item-3").css("color", "#fff");
  //   }
  //   if (top > item4) {
  //     $(".mis-menu__item").css("background", "none");
  //     $(".mis-menu__item").css("color", "#444");
  //     $("#item-4").css("background", "#7A7F83");
  //     $("#item-4").css("color", "#fff");
  //   }
  //   if (top > item5) {
  //     $(".mis-menu__item").css("background", "none");
  //     $(".mis-menu__item").css("color", "#444");
  //     $("#item-5").css("background", "#7A7F83");
  //     $("#item-5").css("color", "#fff");
  //   }
  // });

  const animItems = document.querySelectorAll("._anim-items");

  if (animItems.length > 0) {
    function animOnScroll(params) {
      for (let index = 0; index < animItems.length; index++) {
        window.addEventListener("scroll", animOnScroll);
        const animItem = animItems[index];
        const animItemHeight = animItem.offsetHeight;
        const animItemOffset = offset(animItem).top;
        const animStart = 4;

        let animItemPoint = window.innerHeight - animItemHeight / animStart;
        if (animItemHeight > window.innerHeight) {
          animItemPoint = window.innerHeight - window.innerHeight / animStart;
        }

        if (
          window.pageYOffset > animItemOffset - animItemPoint &&
          window.pageYOffset < animItemOffset + animItemHeight
        ) {
          animItem.classList.add("_active");
        } else {
          animItem.classList.remove("_active");
        }
      }
    }
    function offset(el) {
      const rect = el.getBoundingClientRect(),
        scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
        scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      return { top: rect.top + scrollTop, left: rect.left + scrollLeft };
    }
    animOnScroll();
    window.addEventListener("scroll", animOnScroll);
  }
});
