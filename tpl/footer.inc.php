<footer>
    <div class="container">
        <div class="row pb-3r">
            <div class="col-md-3">
                <ul class="navbar-nav" wb-tree="item=menu&branch=mainmenu->company">
                    <li class="nav-item">
                        <a class="nav-link" href="{{data.link}}">{{data.lang.{{_sess.lang}}}}</a>
                    </li>
                </ul>
                <ul class="navbar-nav" wb-tree="item=menu&branch=mainmenu->news">
                    <li class="nav-item">
                        <a class="nav-link" href="{{data.link}}">{{data.lang.{{_sess.lang}}}}</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="navbar-nav" wb-tree="item=menu&branch=mainmenu->products">
                    <li class="nav-item">
                        <a class="nav-link" href="{{data.link}}">{{data.lang.{{_sess.lang}}}}</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="navbar-nav" wb-tree="item=menu&branch=mainmenu->equipment">
                    <li class="nav-item">
                        <a class="nav-link" href="{{data.link}}">{{data.lang.{{_sess.lang}}}}</a>
                    </li>
                </ul>
                <ul class="navbar-nav" wb-tree="item=menu&branch=mainmenu->service">
                    <li class="nav-item">
                        <a class="nav-link" href="{{data.link}}">{{data.lang.{{_sess.lang}}}}</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="navbar-nav" wb-tree="item=menu&branch=mainmenu->projects">
                    <li class="nav-item">
                        <a class="nav-link" href="{{data.link}}">{{data.lang.{{_sess.lang}}}}</a>
                    </li>
                </ul>
                <ul class="navbar-nav" wb-tree="item=menu&branch=mainmenu->contacts">
                    <li class="nav-item">
                        <a class="nav-link" href="{{data.link}}">{{data.lang.{{_sess.lang}}}}</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="border-bottom d-block">
            <div class="d-inline-block mr-25 pb-1r">
                Адрес:
                <span>{{_sett.address}}</span>
            </div>
            <div class="d-inline-block">
                <div class="d-inline-block mr-25 pb-1r">
                    <ul class="list-inline m-0 nobr" wb-tree="item=menu&branch=social&parent=false&children=false">
                        <li class="d-inline">
                            <a href="{{data.link}}" target="_blank">
                                <svg width="24" height="24">
                                    <image width="24" height="24" xlink:href="/tpl/assets/img/social-{{id}}.svg" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="d-inline-block nobr mr-25 pb-1r text-right">
                    <a href="mailto:{{_sett.email}}">
                        <svg width="24" height="24">
                            <image width="24" height="24" xlink:href="/tpl/assets/img/social-email.svg" />
                        </svg>
                        {{_sett.email}}
                    </a>
                </div>
                <div class="d-inline-block nobr pb-1r text-right">
                    <a href="mailto:{{_sett.email}}">
                        <svg width="24" height="24">
                            <image width="24" height="24" xlink:href="/tpl/assets/img/social-phone.svg" />
                        </svg>
                        {{_sett.phone}}
                    </a>
                </div>
            </div>
        </div>

        <div class="row pt-1r">
            <div class="pb-1r col-xl-3 col-md-6 order-xl-1 order-3 order-md-2 text-md-right text-xl-left">
                <a href="/">Copyright 1996-<?php echo date("Y"); ?>, ЮСАР+</a>
            </div>
            <div class="pb-1r col-xl-3 col-md-6 order-xl-2 order-1">
                <a href="/policy">Политика конфиденциальности</a>
            </div>
            <div class="pb-1r col-xl-3 col-md-6 order-xl-3 order-2 order-md-3">
                <a href="/rules">Пользовательское соглашение</a>
            </div>
            <div class="pb-1r col-xl-3 col-md-6 order-xl-4 order-4 text-md-right">
                <a href="//idees.ru">Создавайте сайты у нас
                    <svg width="24" height="24">
                        <image width="24" height="24" xlink:href="/tpl/assets/img/logo-id.svg" />
                    </svg>
                </a>
            </div>
        </div>

    </div>
    <a href="#" class="scrollup">Наверх</a>
</footer>
<wb-include wb-tpl="common.inc.php" />
