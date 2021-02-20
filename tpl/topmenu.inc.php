<div class="bg-topmenu position-absolute w-100" style=z-index:1;>
<div class="container">
<nav class="navbar navbar-expand-md navbar-dark px-0 top">
    <a class="navbar-brand" href="/">
    <svg width="120" height="25">
        <image width="120" height="25" xlink:href="/tpl/assets/img/logo-white.svg" />
    </svg>
    </a>

    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">Меню</button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{data.link}}" id="menu-{{id}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{strtoupper({{_sess.lang}})}}</a>
                <div class="dropdown-menu" aria-labelledby="menu-{{id}}">
                    <a class="dropdown-item" href="/module/lang/ru">RU</a>
                    <a class="dropdown-item" href="/module/lang/en">EN</a>
                </div>
            </li>

            <li class="nav-item active" wb-if="children == ''">
                <a class="nav-link" href="{{data.link}}">{{data.lang.{{_sess.lang}}}}</a>
            </li>

        </ul>
        <ul class="navbar-nav my-2 my-lg-0 right">
            <li class="nav-item">
                <a class="nav-link">
                    <svg width="21" height="21"><image width="21" height="21" xlink:href="/tpl/assets/img/search.svg" /></svg>
                    {{_lang.search}}</a>
            </li>
            <li class="nav-item"> 
                <a class="nav-link">
                    <svg width="21" height="21"><image width="21" height="21" xlink:href="/tpl/assets/img/phone.svg" /></svg>
                    {{_sett.phone}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    <svg width="21" height="21"><image width="21" height="21" xlink:href="/tpl/assets/img/user.svg" /></svg>
                    {{_lang.signin}}</a>
            </li>
        </ul>
    </div>
</nav>

<nav class="navbar navbar-expand-md navbar-dark px-0">
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0" wb-tree="item=menu&branch=mainmenu&parent=false&children=false">
            <li class="nav-item dropdown" wb-if="children > ''">
                <a class="nav-link dropdown-toggle" href="{{data.link}}" id="menu-{{id}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{data.lang.{{_sess.lang}}}}</a>
                <div class="dropdown-menu" aria-labelledby="menu-{{id}}">
                    <wb-foreach wb="from=children">
                        <a class="dropdown-item" href="#">{{data.lang.{{_sess.lang}}}}</a>
                    </wb-foreach>
                </div>
            </li>

            <li class="nav-item active" wb-if="children == ''">
                <a class="nav-link" href="{{data.link}}">{{data.lang.{{_sess.lang}}}}</a>
            </li>

        </ul>
    </div>
</nav>
</div>
</div>
<wb-lang>
    [ru]
        search = Поиск
        signin = Личный кабинет
    [en]
        search = Search
        signin = Signin
</wb-lang>