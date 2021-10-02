<edit header="Лента с картинками">
    <div>
        <wb-include wb-src="/modules/yonger/common/blocks/common.inc.php" />
    </div>
    <div>

        <div class="form-group row">
            <div class="col-sm-3">{{_lang.header}}</div>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="title" placeholder="{{_lang.header}}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-3">{{_lang.text}}</div>
            <div class="col-sm-9">
                <textarea class="form-control" placeholder="{{_lang.text}}" rows="auto" name="text"></textarea>
            </div>
        </div>


        <div class="form-group row">
            <div class="col-2">
                <label>Отчерк над</label>
            </div>
            <div class="col-1">
                <input name="hrtop" wb-module="switch" />
            </div>
            <div class="col-2">
                <label>Отчерк под</label>
            </div>
            <div class="col-1">
                <input name="hrbot" wb-module="switch" />
            </div>

            <div class="col-2">
                <label>Увеличение</label>
            </div>
            <div class="col-1">
                <input name="zoom" wb-module="switch" />
            </div>
            <div class="col-2">
                <label>Просмотр</label>
            </div>
            <div class="col-1">
                <input name="view" wb-module="switch" />
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-2 col-sm-6 mb-2">
                <label>
                    Метод
                </label>
                <select class="form-control" type="text" name="method">
                    <option value="thumbc">Заполнить</option>
                    <option value="thumb">Вместить</option>
                </select>

            </div>

            <div class="col-md-2 col-sm-6 mb-2">
                <label>Скорость</label>
                <input class="form-control" type="number" name="speed" placeholder="Скорость def:2000">
            </div>

            <div class="col-md-2 col-sm-6 mb-2">
                <label>Ширина</label>
                <input class="form-control" type="number" name="width" placeholder="Ширина def:500">
            </div>
            <div class="col-md-2 col-sm-6 mb-2">
                <label>Высота</label>
                <input class="form-control" type="number" name="height" placeholder="Высота def:320">
            </div>
            <div class="col-md-2 col-sm-6 mb-2">
                <label>Слайдов</label>
                <input class="form-control" type="number" name="show" placeholder="Слайдов def:4">
            </div>
            <div class="col-md-2 col-sm-6 mb-2">
                <label>Скрол</label>
                <input class="form-control" type="number" name="scroll" placeholder="Скрол def:4">
            </div>

        </div>

        <wb-module wb="module=filepicker&mode=multiple&width=150&height=100" name="images" />
    </div>
    <wb-lang>
        [ru]
        slickslider = "Slick Slider"
        header = Заголовок
        text = Текст
        link = Ссылка
        button = Кнопка
        slides = Слайды
        [en]
        slickslider = "Slick Slider"
        header = Header
        text = Text
        link = Link
        button = Button
        slides = Slides
    </wb-lang>
</edit>

<view>
    <wb-include wb-tpl="widget-images.inc.php" />
</view>