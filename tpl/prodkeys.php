<html lang="ru">
<wb-include wb-tpl="head.inc.php" />

<body>
    <div>
        <wb-module wb="module=yonger&mode=render&view=header_p" />
    </div>
    <main>
        <div class="container pt-2r">
            <h2>Файлы</h2>
            
            <form action="{{_route.uri}}" method="POST" wb-if="'{{_post.pass}}'!=='{{pass}}'">
                <wb-data>
                    <small>Для доступа к файлам необходимо ввести пароль</small>
            <div class="footer__top-wrapper">
                <div class="footer__input-group">
                    <input type="password" class="input footer__input phone" placeholder="Пароль" name="pass" required>
                </div>
                <div class="footer__input-group">
                    <button class="btn btn-link" type="submit">Отправить</button>
                </div>
            </div>
            </wb-data>
            </form>
            
            <div class="documentation" wb-if="'{{_post.pass}}'=='{{pass}}'">
                <h3>{{title.{{_sess.lang}}}}</h3>
                <div class="documentation--files">
                    <wb-foreach wb="from=specfiles">
                        <a href="{{img}}" target="_blank" download>
                            <wb-var info="{{fileinfo({{img}})}}" />
                            <img width="36" height="36" src="/engine/lib/fileicons/{{strtolower({{_var.info.ext}})}}.svg" />
                            <div>
                                <span wb-if="'{{title}}'==''">{{_var.info.name}}</span>
                                <span wb-if="'{{title}}'>''">{{title}}</span>
                                <div>
                                    <span>{{_var.info.ext}}</span>
                                    <span>{{_var.info.size}}</span>
                                </div>
                            </div>
                        </a>
                    </wb-foreach>
                </div>
            </div>
        </div>
    </main>
    <div>
        <wb-module wb="module=yonger&mode=render&view=footer" />
    </div>
</body>

<wb-jq wb="$dom->find('.card[data-aos]')->parent('body')->addClass('body-services cont-color-w');" />

</html>