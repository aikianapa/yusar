<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="navbar-nav navbar-nav--top">
                    <li class="nav-item">
                        <a class="nav-link" href="/about">О компании</a>
                        <ul>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">Наша компания</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/history">Наша история</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/team">Наша команда</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/partners">Наши партнёры</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/reviews">Отзывы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/licenses-and-certificates">Лицензии и сертификаты</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/documentation">Документация</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/vacancy">Вакансии</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/news">Новости</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="navbar-nav navbar-nav--top">
                    <li class="nav-item">
                        <a class="nav-link" href="/it-products">IT-продукты</a>
                        <ul>
                            <li class="nav-item">
                                <a class="nav-link" href="/mis">МИС</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/ris">РИС</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/paks">ПАКС</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/endoscopy">Эндоскопия</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/cami">ЦАМИ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/telemedicine">Телемедицина</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/artificial-intelligence">Искусственный интеллект</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/pharmacy">Аптека</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="navbar-nav navbar-nav--top">
                    <li class="nav-item">
                        <a class="nav-link" href="/hardware-and-integration">Оборудование и интеграция</a>
                        <ul>
                            <li class="nav-item">
                                <a class="nav-link" href="/equipment">Медицинское оборудование</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/system">Системная интеграция</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/complex">Комплексные инжинерные системы</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/services">Услуги</a>
                        <ul>
                            <li class="nav-item">
                                <a class="nav-link" href="/service-software">Сервис программного обеспечения</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/service-equipment">Сервис оборудования</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="navbar-nav navbar-nav--top">
                    <li class="nav-item">
                        <a class="nav-link" href="/projects">Проекты</a>
                        <ul>
                            <li class="nav-item">
                                <a class="nav-link" href="/map-presence">Карта присутствия</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/projects">Наши проекты</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/contacts">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="second-block pb-1r">
            <span class="address-block">
                Адрес: <span style="margin-left: 3px;">{{_sett.address}}</span>
            </span>
            <div class="info-block">
                <div class="mr-25">
                    <ul class="d-flex list-inline m-0 nobr"
                        wb-tree="item=menu&branch=social&parent=false&children=false">
                        <li style="margin-right: 8px;">
                            <a href="{{data.link}}" target="_blank">
                                <!-- <svg width="24" height="24">
                                    <image width="24" height="24" xlink:href="/tpl/assets/img/social-{{id}}.svg" />
                                </svg> -->

                                <div style="
                                -webkit-mask: url('/tpl/assets/img/social-{{id}}.svg') center center; 
                                -webkit-mask-repeat: no-repeat;
                                -webkit-mask-size: cover;" class="mask-div"></div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="nobr mr-25">
                    <a href="mailto:{{_sett.email}}" class="svg-link">
                        <svg width="24" height="24">
                            <image width="24" height="24" xlink:href="/tpl/assets/img/social-email.svg" />
                        </svg>
                        {{_sett.email}}
                    </a>
                </div>
                <div class="nobr">
                    <a href="tel:{{_sett.phone}}" class="svg-link">
                        <svg width="24" height="24">
                            <image width="24" height="24" xlink:href="/tpl/assets/img/social-phone.svg" />
                        </svg>
                        {{_sett.phone}}
                    </a>
                </div>
            </div>
        </div>

        <div class="third-block row pt-1r">
            <div class="pb-1r col-xl-3 col-md-6 order-xl-1 order-3 order-md-2 text-md-right text-xl-left">
                <a>Copyright 1996-{{date("Y")}}, ЮСАР+</a>
            </div>
            <div class="pb-1r col-xl-3 col-md-6 order-xl-2 order-1">
                <a href="/policy">Политика конфиденциальности</a>
            </div>
            <div class="pb-1r col-xl-3 col-md-6 order-xl-3 order-2 order-md-3">
                <a href="/rules">Пользовательское соглашение</a>
            </div>
            <div class="pb-1r col-xl-3 col-md-6 order-xl-4 order-4 text-md-right">
                <a href="//idees.ru" class="studio-link">
                    Сделано в 
                    <img src="http://landing.omsplus.ru/assets/idees_logo.svg" alt="" width="17">
                </a>
            </div>
        </div>

    </div>
    <a href="" class="scrollup">Наверх</a>
</footer>
<wb-include wb-tpl="common.inc.php" />
