<div class="bg-topmenu position-fixed w-100" style=z-index:1;>
    <wb-var menu="{{yongerSiteMenu()}}" />
    <div class="container">
        <nav class="navbar navbar-expand-xl navbar-dark px-0 top">
            <a class="navbar-brand" href="/">
                <svg width="120" height="25">
                    <image width="120" height="25" xlink:href="/tpl/assets/img/logo-white.svg" />
                </svg>
            </a>
            <!-- Sections -->
            <div class="collapse navbar-collapse mainmenu">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 w-100 justify-content-xl-between">
                    <wb-foreach wb="from=_var.menu&tpl=false">
                        <li class="nav-item dropdown w-auto d-xl-inline">
                            <a class="nav-link dropdown-toggle" href="{{path}}" id="menu-{{id}}" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"  wb-if="'{{count({{children}})}}'>'0'">{{menu_title}}</a>
                            <a class="nav-link" href="{{path}}" wb-if="'{{count({{children}})}}'=='0'">{{menu_title}}</a>

                            <div class="dropdown-menu" aria-labelledby="menu-{{id}}" wb-if="'{{count({{children}})}}'>'0'">
                                <wb-foreach wb="from=children&tpl=false">
                                    <a class="dropdown-item w-auto" href="{{path}}">{{menu_title}}</a>
                                </wb-foreach>
                            </div>
                        </li>
                    </wb-foreach>
                </ul>

            </div>
            <!-- End Sections -->

            <div class="collapse navbar-collapse mainmenu" id="mainMenu">
                <ul class="navbar-nav my-2 my-lg-0 left">
                    <li class="nav-item icon-small">
                        <a class="nav-link icon-link icon-search" data-toggle="modal" data-target="#searchModal">
                            <!-- <svg width="21" height="21"> -->
                            <img width="26" height="26" src="/tpl/assets/img/header-icons/search-icon.png" />
                            <!-- </svg> -->
                            <div class="dropdown-menu dropdown-menu-right item-search" style="top: 62px;">
                                <span class="dropdown-item">{{_lang.search}}</span>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item icon-small">
                        <a class="nav-link icon-link" href="/account">
                            <img width="22" height="23" src="/tpl/assets/img/header-icons/auth-icon.png" />

                            <div class="dropdown-menu dropdown-menu-right item-account" style="top: 62px;">
                                <span class="dropdown-item">{{_lang.acc}}</span>
                            </div>
                        </a>
                    </li>
                    <!-- <li class="nav-item icon-small">
                        <a class="nav-link icon-link" href="/account">
                            <svg width="21" height="21"><image width="21" height="21" xlink:href="/tpl/assets/img/user.svg" /></svg>
                        </a>
                    </li> -->
                </ul>

                <ul class="navbar-nav my-2 my-lg-0 right">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle lang-icon" href="{{data.link}}" id="menu-{{id}}"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <!-- {{strtoupper({{_sess.lang}})}} -->
                            <img width="21" height="21" src="/tpl/assets/img/header-icons/lang-icon.png" />
                        </a>

                        <div class="dropdown-menu dropdown-menu-right item-lang" aria-labelledby="menu-{{id}}">
                            <a class="dropdown-item" href="/module/lang/ru">RU</a>
                            <a class="dropdown-item" href="/module/lang/en">EN</a>
                        </div>
                    </li>
                </ul>
            </div>

            <button class="navbar-toggler d-xl-none tx-16" type="button" aria-expanded="false">
                <span>{{_lang.menu}}</span>
            </button>
        </nav>
    </div>
</div>

<div class="mobile-nav">
    <div class="container">
        <div class="mobile-nav--logo">
            <img src="/tpl/assets/img/logo-white.svg" alt="">
            <button class="close-mobile-nav"></button>
        </div>

        <ul>
            <li class="nav-icons">
                <a data-toggle="modal" data-target="#searchModal">
                    <img width="26" height="26" src="/tpl/assets/img/header-icons/search-icon.png" />
                </a>

                <a href="/account">
                    <img width="22" height="22" src="/tpl/assets/img/header-icons/auth-icon.png" />
                </a>

                <a class="nav-with-dropdown"
                    style="display: flex; align-items: center; padding-top: 3px; position: relative;">
                    <img width="21" height="21" src="/tpl/assets/img/header-icons/lang-icon.png" />

                    <div class="nav-dropdown-menu" style="position: absolute; left: 130px; top: 0px; display: inline;">
                        <a href="/module/lang/ru" style="padding-right: 10px;">RU</a>
                        <a href="/module/lang/en" style="margin-left: 0;">EN</a>
                    </div>
                </a>
            </li>
            <wb-foreach wb="from=_var.menu&tpl=false">
                <wb-var child="0" />
                <li>
                    <a class="nav-with-dropdown cur-pointer" wb-if="'{{count({{children}})}}'>'0'">{{menu_title}}</a>
                    <a href="{{path}}" wb-if="'{{count({{children}})}}'=='0'">{{menu_title}}</a>

                    <div class="nav-dropdown-menu" wb-if="'{{count({{children}})}}'>'0'">
                        <wb-foreach wb="from=children&tpl=false">
                        <a class="nav-dropdown-item" href="{{path}}">{{menu_title}}</a>
                        </wb-foreach>
                    </div>
                </li>
            </wb-foreach>
        </ul>
    </div>
</div>

<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel"
    aria-hidden="true" style="-webkit-backdrop-filter: blur(10px);">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="margin-top: 0;">
                <div class="d-flex" style="align-items: center;">
                    <img src="/tpl/assets/img/search-icon.svg" alt="">
                    <input type="text" class="modal-input" id="searchModalLabel" placeholder="ЮСАР">
                </div>

                <div class="d-flex modal-header-two" style="align-items: center;">
                    <button class="search-button" style="padding-left: 0;">Найти</button>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin: 0;">
                        <span aria-hidden="true">
                            <img src="/tpl/assets/img/search-close.svg" alt="">
                        </span>
                    </button>
                </div>
            </div>

            <div class="modal-body" style="text-align: left;">
                <div class="modal-body--section">
                    <span class="section-title" style="font-weight: 400;">Раздел</span>
                    <span class="section-text">О компании</span>
                </div>

                <div class="modal-body--subsection">
                    <span class="section-title" style="font-weight: 400;">Новости</span>
                    <span class="section-text">
                        ЮСАР+ на международной конференции
                        «Рак груди: наука на стороне женщины»
                    </span>
                </div>
            </div>
            <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div> -->
        </div>
    </div>
</div>

<script wb-app>
$(".navbar-toggler").off('touchstart click');
$(".navbar-toggler").on('touchstart click', function(e) {
    $('.bg-topmenu').css("opacity", "0");
    $('body').toggleClass('mobile-menu-open');

    $('.mobile-nav').toggleClass('show-mobile-menu');
    $('header').css('overflow', 'auto');
    return false;
})

$(".close-mobile-nav").on('touchstart click', function(e) {
    $('.bg-topmenu').css("opacity", "1");
    $('body').toggleClass('mobile-menu-open');

    $('.mobile-nav').toggleClass('show-mobile-menu');
    $('header').css('overflow', 'hidden');
    return false;
})

$("li").on("click", function(e) {
    $(this).children(".nav-dropdown-menu").toggleClass("open-dropdown");
})
</script>

<wb-lang>
    [ru]
    search = Поиск
    signin = Личный кабинет
    menu = Меню
    acc = Аккаунт
    [en]
    search = Search
    signin = Signin
    menu = Menu
    acc = Account
</wb-lang>