<edit header="Лента с картинками">
    <div>
        <wb-include wb-src="/engine/modules/yonger/common/blocks/common.inc.php" />
    </div>
    <div>

        <div class="form-group row">
            <div class="col-sm-3">{{_lang.header}}</div>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="title" placeholder="{{_lang.header}}" wb-module="langinp">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-3">{{_lang.text}}</div>
            <div class="col-sm-9">
                <textarea class="form-control" placeholder="{{_lang.text}}" rows="auto" name="text"
                    wb-module="langinp"></textarea>
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
            <div class="mb-2 col-md-2 col-sm-6">
                <label>
                    Метод
                </label>
                <select class="form-control" type="text" name="method">
                    <option value="thumbc">Заполнить</option>
                    <option value="thumb">Вместить</option>
                </select>

            </div>

            <div class="mb-2 col-md-2 col-sm-6">
                <label>Скорость</label>
                <input class="form-control" type="number" name="speed" placeholder="Скорость def:2000">
            </div>

            <div class="mb-2 col-md-2 col-sm-6">
                <label>Ширина</label>
                <input class="form-control" type="number" name="width" placeholder="Ширина def:500">
            </div>
            <div class="mb-2 col-md-2 col-sm-6">
                <label>Высота</label>
                <input class="form-control" type="number" name="height" placeholder="Высота def:320">
            </div>
            <div class="mb-2 col-md-2 col-sm-6">
                <label>Слайдов</label>
                <input class="form-control" type="number" name="show" placeholder="Слайдов def:4">
            </div>
            <div class="mb-2 col-md-2 col-sm-6">
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
    <div class="container" style="overflow-x: visible !important">
        <h3 wb-if="'{{ title.{{_sess.lang}} }}'>''">{{title.{{_sess.lang}}}}</h3>
        <p class="text" wb-if="'{{text.{{_sess.lang}}}}'>''">{{text.{{_sess.lang}}}}</p>

        <wb-var width="500" wb-if="'{{width}}'==''" else="{{width}}" />
        <wb-var height="320" wb-if="'{{height}}'==''" else="{{height}}" />
        <wb-var show="4" wb-if="'{{show}}'==''" else="{{show}}" />
        <wb-var scroll="4" wb-if="'{{scroll}}'==''" else="{{scroll}}" />
        <wb-var zoom="zoom" wb-if="'{{zoom}}'=='on'" else="" />
        <wb-var method="thumb" wb-if="'{{method}}'==''" else="{{method}}" />
        <wb-var hrtop="border-top pt-2r" wb-if="'{{hrtop}}'=='on'" else="" />
        <wb-var hrbot="border-bottom" wb-if="'{{hrbot}}'=='on'" else="" />
        <wb-var speed="" wb-if="'{{speed}}'==''" else="{{speed}}" />
        <wb-var view="" wb-if="'{{view}}'==''" else="{{view}}" />

        <div class="slick {{_var.hrbot}} {{_var.hrtop}} system-grid slick-slider"
            data-autoplay="{{_var.speed}}" data-scroll="{{_var.scroll}}" data-show="{{_var.show}}">
            <wb-foreach wb="from=images">
                <div class="picture">
                    <div class="image__container">
                        <a data-fslightbox="{{_parent.id}}" href="{{img}}" wb-if="'{{_var.view}}'=='on'">
                            <img class="img-fluid {{_var.zoom}}"
                                src="/{{_var.method}}/{{_var.width}}x{{_var.height}}/src{{img}}"
                                alt="{{_parent.title}}">
                        </a>
                        <img class="img-fluid {{_var.zoom}}"
                            src="/{{_var.method}}/{{_var.width}}x{{_var.height}}/src{{img}}" alt="{{_parent.title}}"
                            wb-if="'{{_var.view}}'==''">
                    </div>
                </div>
            </wb-foreach>
        </div>
    </div>
    <script src="/tpl/assets/js/fslightbox.js"></script>
    <style>
    .image__container {
        overflow: hidden;
    }

    .image__container img.zoom {
        transition: .3s ease-in-out;
    }

    .image__container img.zoom:hover {
        transform: scale(1.1);
    }
.system-grid {
  margin-left: -15px;
  margin-right: -15px;
}

.picture {
  padding-left: 15px;
  padding-right: 15px;
}
    </style>
</view>