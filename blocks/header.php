<edit header="Header для главной страницы">
    <wb-include wb-src="/engine/modules/yonger/common/blocks/common.inc.php" />
    <div class="form-group row">
        <label class="col-2">{{_lang.video}}</label>
        <div class="col-10">
        <input class="form-control" type="text" name="video" placeholder="{{_lang.video}}">
        </div>
    </div>
    <wb-multilang wb-lang="{{_sett.locales}}" name="lang">
        <wb-multiinput name="slides">
                <div class="col-lg-12 pr-3">
                    <div class="row pl-3">
                        <div class="col-12 mb-2">
                            <input class="form-control" type="text" name="header" placeholder="{{_lang.header}}">
                        </div>
                        <div class="col-12 mb-2">
                            <textarea class="form-control" rows="auto" name="text"
                                placeholder="{{_lang.text}}"></textarea>
                        </div>
                    </div>
                    <div class="row pl-3">
                        <div class="col-lg-6 mb-2">
                            <input class="form-control" type="text" name="button" placeholder="{{_lang.button}}">
                        </div>
                        <div class="col-lg-6 mb-2">
                            <input class="form-control" type="text" name="link" wb="module=yonger&mode=pageselect" placeholder="{{_lang.link}}">
                        </div>
                    </div>
                </div>

        </wb-multiinput>
    </wb-multilang>
    <wb-lang>
    [ru]
    carousel = "Карусель"
    header = Заголовок
    text = Текст
    link = Ссылка
    button = Кнопка
    video = Видео
    [en]
    carousel = Carousel
    header = Header
    text = Text
    link = Link
    button = Button
    video = Video
    </wb-lang>
    <div class="alert alert-info tx-12 p-1">
        /blocks/header.php,
        /tpl/header.inc.php
    </div>
</edit>

<view>
    <wb-include wb-tpl="header.inc.php" />
</view>