<edit header="Катрочки с сылками">
    <div>
        <wb-include wb-src="/engine/modules/yonger/common/blocks/common.inc.php"></wb-include>
    </div>
    <div class="row">
        <label class="mb-1 col-6 col-sm-3 form-control-label">
            Размер изображений (px)
        </label>
        <div class="mb-1 col-6 col-sm-2">
            <input type="number" name="width" class="form-control" placeholder="540">
        </div>
        <div class="mb-1 col-3 col-sm-2">
            <input type="number" name="height" class="form-control" placeholder="540">
        </div>
    </div>
    <wb-multiinput name="cards">
        <div class="pr-3 col-sm-4">
            <wb-module wb="module=filepicker&mode=single&width=300&height=150" name="image"
                wb-path="/uploads/blocks/card-links" wb-ext="webp,jpg,png,jpeg,svg"></wb-module>
        </div>

        <div class="col-sm-8">
            <div class="form-group row">
                <label class="mb-1 col-sm-3 form-control-label">Заголовок</label>
                <div class="mb-1 col-sm-9">
                    <input type="text" name="title" class="form-control tx-bold" placeholder="Заголовок"
                        wb-module="langinp">
                </div>
                <label class="mb-1 col-sm-3 form-control-label">Ссылка</label>
                <div class="mb-1 col-sm-9">
                    <input type="text" name="link" class="form-control" placeholder="Ссылка кнопки"
                        wb="module=yonger&mode=pageselect">
                </div>

            </div>

        </div>
    </wb-multiinput>
</edit>
<view>
    <div class="pt-3r s-indent-bottom widget-service widget-service--service">
        <div class="container widget ">
            <div class="row">
                <wb-var width="540" wb-if="'{{width}}'=''" else="{{width}}"></wb-var>
                <wb-var height="540" wb-if="'{{height}}'=''" else="{{height}}"></wb-var>
                <wb-foreach wb="from=cards&tpl=false">
                    <div class="p-3 col-md-6" data-aos="fade-up" data-aos-duration="1700" data-aos-offset="200">
                        <a href="{{link}}">
                            <div class="card card--second">
                                <div class="image__container">
                                    <img class="card-img-top"
                                        data-src="/thumbc/{{_var.width}}x{{_var.height}}/src{{image.0.img}}"
                                        alt="{{title.{{_sess.lang}}}}" wb-if="'{{image.0.img}}'>''">
                                    <img class="card-img-top"
                                        data-src="/thumbc/{{_var.width}}x{{_var.height}}/src/assets/img/widget-holder.jpg"
                                        alt="{{title.{{_sess.lang}}}}" wb-if="'{{image.0.img}}'==''">
                                </div>
                                <div class="card-body">
                                    <p class="card-title">{{title.{{_sess.lang}}}}</p>
                                </div>
                                <div class="more">
                                    <span class="link-text">{{_lang.more}}</span>
                                    <img class="link-icon" src="/tpl/assets/img/more.svg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                </wb-foreach>
            </div>
        </div>
    </div>
    <wb-lang>
        [en]
        more = "More"
        [ru]
        more = "Подробнее"
    </wb-lang>
</view>