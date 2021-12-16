$(document).ready(function () {

    if ($('.body-mis').length) {


        $(document).scroll(function () {

            const scrollTop = window.pageYOffset;
            var a = 80;

            if (window.innerWidth <= 568) {
                var a = 80;
            }

            var item1 = $("#purpose"),
                item1Poition = parseInt(item1.offset().top - a),
                item1Height = item1.outerHeight(),

                item2 = $("#descriprion"),
                item2Poition = parseInt(item2.offset().top - a),
                item2Height = item2.outerHeight(),

                item3 = $("#benefits"),
                item3Poition = parseInt(item3.offset().top - a),
                item3Height = item3.outerHeight(),

                item4 = $("#news"),
                item4Poition = parseInt(item4.offset().top - a),
                item4Height = item4.outerHeight(),

                item5 = $("#reviews"),
                item5Poition = parseInt(item5.offset().top - a),
                item5Height = item5.outerHeight(),

                item6 = $("#products"),
                item6Poition = parseInt(item6.offset().top - a),
                item6Height = item6.outerHeight();



            $(".mis-menu__item").css("background", "none");
            $(".mis-menu__item").css("color", "#4F4F4F");
            $(".mis-menu__item").removeClass("mis-menu__item-active");

            if (scrollTop >= item1Poition && scrollTop <= item1Poition + item1Height) {
                $("#item-1").css("background", "#697079");
                $("#item-1").css("color", "#fff");
                $("#item-1").addClass("mis-menu__item-active");
                $(".drop-down-list").text("Цель ");
            }

            if (scrollTop >= item2Poition && scrollTop <= item2Poition + item2Height) {
                $("#item-2").css("background", "#697079");
                $("#item-2").css("color", "#fff");
                $("#item-2").addClass("mis-menu__item-active");
                $(".drop-down-list").text("Описание ");
            }

            if (scrollTop >= item3Poition && scrollTop <= item3Poition + item3Height) {
                $("#item-3").css("background", "#697079");
                $("#item-3").css("color", "#fff");
                $("#item-3").addClass("mis-menu__item-active");
                $(".drop-down-list").text("Преимущества ");
            }

            if (scrollTop >= item4Poition && scrollTop <= item4Poition + item4Height) {
                $("#item-4").css("background", "#697079");
                $("#item-4").css("color", "#fff");
                $("#item-4").addClass("mis-menu__item-active");
                $(".drop-down-list").text("Новости ");
            }

            if (scrollTop >= item5Poition && scrollTop <= item5Poition + item5Height) {
                $("#item-5").css("background", "#697079");
                $("#item-5").css("color", "#fff");
                $("#item-5").addClass("mis-menu__item-active");
                $(".drop-down-list").text("Отзывы ");
            }

            if (scrollTop >= item6Poition && scrollTop <= item6Poition + item6Height) {
                $("#item-6").css("background", "#697079");
                $("#item-6").css("color", "#fff");
                $("#item-6").addClass("mis-menu__item-active");
                $(".drop-down-list").text("Продукты ");
            }
        });
    }


    // ****** Mobile ****** //

    const dropDownList = document.querySelector(".drop-down-list");
    const dropDownListArrow = document.querySelector(".drop-down-list-arrow");
    const mobileMenuListLinks = document.querySelectorAll(
        ".mobile-menu-list__link"
    );

    dropDownListArrow ? dropDownListArrow.addEventListener("click", () =>
        $(".mobile-menu-list").toggleClass("mobile-menu-list-active")
    ) : null;

    mobileMenuListLinks ? mobileMenuListLinks.forEach((link, index) => {
        link.addEventListener("click", () => {
            $(".mobile-menu-list").toggleClass("mobile-menu-list-active");
        });
    }) : null;

    //плавное перемещение по странице
    $(function () { });
    $(window).scroll(function () {
        if ($(this).scrollTop() != 0) {
            $("#toTop").fadeIn();
        } else {
            $("#toTop").fadeOut();
        }
        if ($("body").hasClass("body-mis")) {
            var toScroll;
            if ($(window).width() > 767) {
                toScroll = $(".mis-menu-wrapper").offset().top;
            } else {
                toScroll = $(".mob-nav").offset().top;
            }
            // console.log( 'Высота до меню: ' + $('.mis-menu-wrapper').offset().top);
            // console.log( 'Прокрутили на: ' + $(this).scrollTop());
            // console.log( 'Высота страницы: ' + $(this).height());
            if ($(this).scrollTop() < toScroll - $(".bg-topmenu").height()) {
                // console.log('не долшло');
                $(".bg-topmenu").show("slow");
            } else {
                // $('.bg-topmenu').addClass('header-hidden');
                $(".bg-topmenu").hide("slow");
                // console.log('долшло');
            }
        }
    });

    $("#toTop").click(function () {
        $("body,html").animate({ scrollTop: 0 }, 1000);
    });

    $('a[href^="#"]').on("click", function (event) {
        // отменяем стандартное действие
        event.preventDefault();

        var c = -30;
        if (window.innerWidth <= 568) {
            var c = 70;
        }

        var sc = $(this).attr("href"),
            dn = $(sc).offset().top - c;


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
        spaceBetween: 15,

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
        spaceBetween: 15,

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

    if (document.querySelector(".number-3")) {
        var number3 = document.querySelector(".number-3"),
            number3Top = number3.getBoundingClientRect().top,
            start3 = +number3.innerHTML,
            end3 = +number3.dataset.max;

        window.addEventListener("scroll", function onScroll() {
            if (window.pageYOffset > number3Top - window.innerHeight / 2 - 1100) {
                this.removeEventListener("scroll", onScroll);
                var interval3 = setInterval(function () {
                    number3.innerHTML = ++start3 + "%";
                    if (start3 == end3) {
                        clearInterval(interval3);
                    }
                }, 40);
            }
        });
    }
    if (document.querySelector(".number-4")) {
        var number4 = document.querySelector(".number-4"),
            number4Top = number4.getBoundingClientRect().top,
            start4 = +number4.innerHTML,
            end4 = +number4.dataset.max;

        window.addEventListener("scroll", function onScroll() {
            if (window.pageYOffset > number4Top - window.innerHeight / 2 - 1100) {
                this.removeEventListener("scroll", onScroll);
                var interval4 = setInterval(function () {
                    number4.innerHTML = ++start4 + "%";
                    if (start4 == end4) {
                        clearInterval(interval4);
                    }
                }, 100);
            }
        });
    }

    if (document.querySelector(".number-5")) {
        var number5 = document.querySelector(".number-5"),
            number5Top = number5.getBoundingClientRect().top,
            start5 = +number5.innerHTML,
            end5 = +number5.dataset.max;

        window.addEventListener("scroll", function onScroll() {
            if (window.pageYOffset > number5Top - window.innerHeight / 2 - 1100) {
                this.removeEventListener("scroll", onScroll);
                var interval5 = setInterval(function () {
                    number5.innerHTML = ++start5 + "%";
                    if (start5 == end5) {
                        clearInterval(interval5);
                    }
                }, 120);
            }
        });
    }

    if (document.querySelector(".number-6")) {
        var number6 = document.querySelector(".number-6"),
            number6Top = number6.getBoundingClientRect().top,
            start6 = +number6.innerHTML,
            end6 = +number6.dataset.max;

        window.addEventListener("scroll", function onScroll() {
            if (window.pageYOffset > number6Top - window.innerHeight / 2 - 1100) {
                this.removeEventListener("scroll", onScroll);
                var interval6 = setInterval(function () {
                    number6.innerHTML = ++start6 + "%";
                    if (start6 == end6) {
                        clearInterval(interval6);
                    }
                }, 120);
            }
        });
    }

    $(document).scroll(function () {
        const top = window.pageYOffset;
        if (top > 600 && aosref == false) {
            // fix problems
            AOS.init();
            aosref = true;
        }

        function menuItemHover() {
            $(".mis-menu__item").mouseover(function (e) {
                if (!$(this).hasClass("mis-menu__item-active")) {
                    $(this).css("background", "#697079");
                    $(this).css("color", "#fff");
                }
            });

            $(".mis-menu__item").mouseleave(function (e) {
                if (!$(this).hasClass("mis-menu__item-active")) {
                    $(this).css("background", "none");
                    $(this).css("color", "#4F4F4F");
                }
            });
        }

        menuItemHover();
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
                    pageYOffset > animItemOffset - animItemPoint &&
                    pageYOffset < animItemOffset + animItemHeight
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
        // animOnScroll();
        window.addEventListener("scroll", animOnScroll);
    }
});
