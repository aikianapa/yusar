<footer>
    <div class="container">
        <div class="row">
            <!-- // _var.menu Причитано в topmenu.inc.php /-->
            <div class="col-md-3">
                <ul class="navbar-nav navbar-nav--top">
                    <li class="nav-item">
                        <a class="nav-link" href="{{_var.menu.0.path}}">{{_var.menu.0.menu_title}}</a>
                        <ul wb-if="'{{count({{_var.menu.0.children}})}}'>'0'">
                            <wb-foreach wb="from=_var.menu.0.children&tpl=false" wb-filter="active=on">
                            <li class="nav-item">
                                <a class="nav-link" href="{{path}}">{{menu_title}}</a>
                            </li>
                            </wb-foreach>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{_var.menu.1.path}}">{{_var.menu.1.menu_title}}</a>
                        <ul wb-if="'{{count({{_var.menu.1.children}})}}'>'0'">
                            <wb-foreach wb="from=_var.menu.1.children&tpl=false">
                            <li class="nav-item">
                                <a class="nav-link" href="{{path}}">{{menu_title}}</a>
                            </li>
                            </wb-foreach>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="navbar-nav navbar-nav--top">
                    <li class="nav-item">
                        <a class="nav-link" href="{{_var.menu.2.path}}">{{_var.menu.2.menu_title}}</a>
                        <ul wb-if="'{{count({{_var.menu.2.children}})}}'>'0'">
                            <wb-foreach wb="from=_var.menu.2.children&tpl=false">
                            <li class="nav-item">
                                <a class="nav-link" href="{{path}}">{{menu_title}}</a>
                            </li>
                            </wb-foreach>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="navbar-nav navbar-nav--top">
                    <li class="nav-item">
                        <a class="nav-link" href="{{_var.menu.3.path}}">{{_var.menu.3.menu_title}}</a>
                        <ul wb-if="'{{count({{_var.menu.3.children}})}}'>'0'">
                            <wb-foreach wb="from=_var.menu.3.children&tpl=false">
                            <li class="nav-item">
                                <a class="nav-link" href="{{path}}">{{menu_title}}</a>
                            </li>
                            </wb-foreach>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{_var.menu.4.path}}">{{_var.menu.4.menu_title}}</a>
                        <ul wb-if="'{{count({{_var.menu.4.children}})}}'>'0'">
                            <wb-foreach wb="from=_var.menu.4.children&tpl=false">
                            <li class="nav-item">
                                <a class="nav-link" href="{{path}}">{{menu_title}}</a>
                            </li>
                            </wb-foreach>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="navbar-nav navbar-nav--top">
                    <li class="nav-item">
                        <a class="nav-link" href="{{_var.menu.5.path}}">{{_var.menu.5.menu_title}}</a>
                        <ul wb-if="'{{count({{_var.menu.5.children}})}}'>'0'">
                            <wb-foreach wb="from=_var.menu.5.children&tpl=false">
                            <li class="nav-item">
                                <a class="nav-link" href="{{path}}">{{menu_title}}</a>
                            </li>
                            </wb-foreach>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{_var.menu.6.path}}">{{_var.menu.6.menu_title}}</a>
                        <ul wb-if="'{{count({{_var.menu.6.children}})}}'>'0'">
                            <wb-foreach wb="from=_var.menu.6.children&tpl=false">
                            <li class="nav-item">
                                <a class="nav-link" href="{{path}}">{{menu_title}}</a>
                            </li>
                            </wb-foreach>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <div class="second-block pb-1r">
            <span class="address-block">
                {{_lang.address}}: <span style="margin-left: 3px;">{{_sett.address}}</span>
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
                <nobr>{{_lang.copyright}} 1996-{{date("Y")}}, ЮСАР+</nobr>
            </div>
            <div class="pb-1r col-xl-3 col-md-6 order-xl-2 order-1">
                <a href="/policy">{{_lang.policy}}</a>
            </div>
            <div class="pb-1r col-xl-3 col-md-6 order-xl-3 order-2 order-md-3">
                <a href="/rules">{{_lang.rules}}</a>
            </div>
            <div class="pb-1r col-xl-3 col-md-6 order-xl-4 order-4 text-md-right">
                <a href="//idees.ru" class="studio-link">
                    <img src="http://idees.ru/assets/img/logo_light.svg" class="img-fluid">
                </a>
            </div>
        </div>

    </div>
    <a href="" class="scrollup">Наверх</a>
    <wb-lang>
        [en]
        policy = "Private policy"
        rules = "User rules"
        address = Address
        copyright = Copyright
        [ru]
        policy = "Политика конфиденциальности"
        rules = "Пользовательское соглашение"
        address = Адрес
        copyright = "Права защищены"
    </wb-lang>
</footer>
<wb-include wb-tpl="common.inc.php" />
